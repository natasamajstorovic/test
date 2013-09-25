<!-- 
<form action="{{ route('registrovan') }}" method="POST">
<p>REGISTRACIJA</p>
Username: <input type="text" name="username"><br>
Password: <input type="text" name="password"><br>
Confirme password: <input type="text" name="password_confirmation">
<input type="submit" value="Send">
</form> -->

<head>

{{HTML::script('http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js');}}
{{HTML::script('/jquery/dist/jquery.validate.js')}}



<script type="text/javascript" language="javascript">

    $(document).ready(function () {
   
    	$("#validacijaFrm").validate({
        	rules:{
    		  username: {
			         required: true,
			       	 email: true
			      	
			     },
			     name:{
	   			     required: true 	   				
			     },
			     lastn:{
	   			     required: true
			     },
			  	password:
			     {
	   			     required: true,
	   				minlength: 7	
			     }			     
			},
			 messages:{
				   
					username: {
				         required: "ovo polje je zahteveano",
				         email: "Email adrese su u formi user@host"
				     },  
			     	name:{
				     	required: "zahtevano polje!"
				     	
			     	},
			     	lastn:{
				     	required: "zahtevano polje"
			     	},
			     	password:{
				     	required: "zahtevano polje",
				     	minlength: "mora minimim biti 7 karaktera"
			     	} 				    
				}       
   		 });     	      
    });
</script>
</head>
<body>
{{ Form::open(array(
				'route'=>'registrovan',
				'method' => 'POST',
				'id'=>'validacijaFrm'
		))}}
		
		{{ Form::label('emaillbl', 'Email') }}<br>
		{{ Form::text('username', '',array('id'=>'username')) }}<br>
		{{ Form::label('imelbl', 'Name') }}<br>
		{{ Form::text('name', '',array('id'=>'name'))}}<br>
		{{ Form::label('prezimelbl', 'Last name') }}<br>
		{{ Form::text('lastn', '',array('id'=>'lastn')) }}<br>
		{{ Form::label('passwordlbl', 'pasword') }}<br>
		{{ Form::password('password',array('id'=>'password'))}}<br>
		{{ Form::label('cpasslbl', 'confirme pasword') }}<br>
		{{ Form::password('password_confirmation') }}<br>
		{{ Form::submit('register') }}
		{{ Form::close() }}
	</body>