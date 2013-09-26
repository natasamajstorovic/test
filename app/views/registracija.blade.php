<!-- 
<form action="{{ route('registrovan') }}" method="POST">
<p>REGISTRACIJA</p>
Username: <input type="text" name="username"><br>
Password: <input type="text" name="password"><br>
Confirme password: <input type="text" name="password_confirmation">
<input type="submit" value="Send">
</form> -->

<head>
{{HTML::style('Stilovi.css');}}
{{HTML::script('http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js');}}
{{HTML::script('/jquery/dist/jquery.validate.js')}}
<link href="/css/bootstrap.css" rel="stylesheet" media="screen">
	<script src="/js/bootstrap.js"></script>


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
	<style type="text/css">
		 body {
	        padding-top: 20px;
	        padding-bottom: 40px;
	        
	      }
	      /* Custom container */
	      .container-narrow {
	        margin: 0 auto;
	        max-width: 700px;
	        
	      }
	   	 
	 </style>
</head>
<body>
<div class="container-narrow">
<div class="text-center">
		{{ Form::open(array(
				'route'=>'registrovan',
				'method' => 'POST',
				'id'=>'validacijaFrm'
		))}}
		<div class="header" id="header">
				<h1>REGISTRATION</h1></div>
  
		
		{{ Form::label('emaillbl', 'Email') }}
		{{ Form::text('username', '',array('id'=>'username')) }}
		{{ Form::label('imelbl', 'Name') }}
		{{ Form::text('name', '',array('id'=>'name'))}}
		{{ Form::label('prezimelbl', 'Last name') }}
		{{ Form::text('lastn', '',array('id'=>'lastn')) }}
		{{ Form::label('passwordlbl', 'pasword') }}
		{{ Form::password('password',array('id'=>'password'))}}
		{{ Form::label('cpasslbl', 'confirme pasword') }}
		{{ Form::password('password_confirmation') }}<br>
		{{ Form::submit('register') }}
		{{ Form::close() }}
		<div class="push"></div>
	
	</div>
		
	<div class="footer navbar-inner">
		<li class="nav-header">FOOTER</li>
   		<li class="active"><a href="#header">pocetak</a></li></div>
    			   
		
		</div>
		
</body>