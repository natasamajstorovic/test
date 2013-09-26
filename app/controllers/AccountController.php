<?php

use Illuminate\Support\Facades\Auth;
class AccountController extends BaseController
{
	public function showindex()
	{
		echo "This is the profile page.";
	}
	/*public function showlogin()
	{
		echo "This is login page";
	}*/

	public function showlogin()
	{
		
		//return View::make('login'); za view
		return View::make('logovanjeBlade');
	}
	public function showregistracija()
	{
		return View::make('registracija');
	}
	public function showlogout()
	{
		Auth::logout();

     return View::make('odlogovani');
		
	}
	public function showJezik($jezik)
	{		
		App::setLocale($jezik);
		return View::make('logovanjeBlade');
	
	}
	
	public function uspesnoUlogovan()
	{
		$user = array(
				'username' => Input::get('username'),
				'password' => Input::get('password')
		);
		//zabrane, alpha_num - sme samo alfanumericke karaktere sadrzi, min znaci da sadrzi min 3 slova
		//$rules = array('username'=> 'alpha_num|min:3');
		$rules = array('password'=>array('min:3'));
		//instanca validatora
		$validator = Validator::make($user, $rules);
		if($validator->passes())
		{
						
			if (Auth::attempt(array('username'=>$user['username'],'password'=>$user['password'],'active'=>1))) {
				
				$userRow = DB::table('korisnici')->where('username', $user['username'])->first();
				$logedUser = array(
						'name' => $userRow->name,
						'surname' => $userRow->surname
				);
				return View::make('zavrseno', array('user' => $logedUser));
		
			}
											
		}
				
			return Redirect::to('login');
	}
		

	
	public function uspesnoRegistrovan()
	{
		
		$user = Input::all();
		$rules=array(
				'password'=>array('required','confirmed','min:6'),
				'username'=>arrray('required','email','unique:korisnici,username'),
				'name'=>'alpha_num',
				'lastn'=>'alpha_num'
		);
		$validator= Validator::make($user,$rules);
		
		if($validator->passes())
		{
			$activation_key = hash('sha256', uniqid());
			
			$passwordNew = Hash::make($user['password']);			
			$noviUser=new User;
			$noviUser->username=$user['username'];
			$noviUser->password=$passwordNew;
			$noviUser->name=$user['name'];
			$noviUser->surname =$user['lastn'];
			$noviUser->activation_key=$activation_key;
			$noviUser->active=false;
			$noviUser->save();
			
			
			$email = $user['username'];
			
			Mail::send('emails.welcome', array('data' => $user,'key'=>$activation_key,'email'=>$user['username']), function ($message) use($email){
	    		$message->subject('Activation mail');
	    		
	    		$message->to($email); // Recipient address
			});
			
			
			return View::make('poslatAktMail',array('user'=>$user));
		}
		return Redirect::to('registracija');
	}
	
	public function acitvateAccount()
	{
		
		$email = $_GET['email'];
		$key=$_GET['key'];
				
	
		$user = User::where('username', '=', $email)
		->where('activation_key', '=', $key)
		->where('active', '=',0)->first();
		
		                   
         if ($user!=NULL)          
         {
         	$user->active=1;       	
         }
																											
         Redirect::to('login');
	}
}
