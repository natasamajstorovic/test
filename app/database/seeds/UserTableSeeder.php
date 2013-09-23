<?php
class UserTableSeeder extends Seeder{
	public function run()
	{	
		DB::table('korisnici')->insert(
			array(
				'username' => 'max',
				'password' => Hash::make('my_pass'),
			));
		
	}

}