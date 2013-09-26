
<head>
	{{HTML::style('Stilovi.css');}}
	{{HTML::script('http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js');}}
	{{HTML::script('/jFunction.js')}}
	<link href="/css/bootstrap.css" rel="stylesheet" media="screen">
	<script src="/js/bootstrap.js"></script>
	
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

			{{ Form::open(array(
					 'route'=>'zavrseno',
					 'method' => 'POST',
			)) }}
			<div class="text-center">
			<div class="header" id="header">
				<h1>HEADER</h1></div>
			<h1 class="underlined">{{Form::label('loginLbl',Lang::get('logovanje.login'))}}</h1>
			</div>
			<div class="row">			
				<div class="span2"> <p class="serif">{{Form::label('unesiteLbl',Lang::get('logovanje.unesiteLbl'))}}</p></div>
				<div class="span2 offset3"> <a href="{{ URL::to('registracija') }}"> {{Form::label('registracija',Lang::get('logovanje.registracija'))}} </a>   </div>      		            			
				<div class="span1">	<a  href="{{ URL::to('login/en') }}"> english </a> </div>
				<div class="sapn1">	<a  href="{{ URL::to('login/srb') }}"> srpski </a></div>			
			</div>
			{{ Form::label('usernamelbl', Lang::get('logovanje.username')) }}
			{{ Form::text('username', '') }}
			{{ Form::label('passwordlbl', Lang::get('logovanje.password')) }}
			{{ Form::password('password') }}<br>
			{{ Form::submit( Lang::get('logovanje.login')) }}
			{{ Form::close() }}
			 		
			 <div class="push"></div>
	
	
		
	<div class="footer navbar-inner">
		<li class="nav-header">FOOTER</li>
   		<li class="active"><a href="#header">pocetak</a></li></div>
    			   
    		</div> 
    		
	

</body>

