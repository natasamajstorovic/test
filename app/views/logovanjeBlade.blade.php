
<head>
	{{HTML::style('Stilovi.css');}}
	{{HTML::script('http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js');}}
	{{HTML::script('/jFunction.js')}}
	<link href="/css/bootstrap.css" rel="stylesheet" media="screen">
	<script src="/js/bootstrap.js"></script>
</head>

<body>

	
	
	<div class="wrapper navbar navbar-inner">
	
			{{ Form::open(array(
					 'route'=>'zavrseno',
					 'method' => 'POST',
			)) }}
			<div class="header" id="header">
				<h1 class="navbar-inner">HEADER</h1></div>
			<h1 class="underlined">{{Form::label('LOGOVANJE')}}</h1>
			<div class="row">
				<div class="span2"> <p class="serif">{{Form::label('Unesite podatke')}}</p></div>
				<div class="span2 offset10"> <a href="{{ URL::to('registracija') }}"> REGISTRACIJA </a>   </div>      		            			
				<div class="span1">	<a  href="{{ URL::to('login/en') }}"> english </a> </div>
				<div class="sapn1">	<a  href="{{ URL::to('login/srb') }}"> srpski </a></div>
			</div>
			{{ Form::label('usernamelbl', Lang::get('logovanje.username')) }}<br>
			{{ Form::text('username', '') }}<br>
			{{ Form::label('passwordlbl', Lang::get('logovanje.password')) }}<br>
			{{ Form::password('password') }}<br>
			{{ Form::submit( Lang::get('logovanje.login')) }}
			{{ Form::close() }}
			 		
			 <div class="push"></div>
	</div> 
	
		
	<div class="footer navbar-inner">
		<li class="nav-header">FOOTER</li>
   		<li class="active"><a href="#header">pocetak</a></li></div>
    			   
    		
	

</body>

