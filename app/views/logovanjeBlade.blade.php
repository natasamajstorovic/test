
<head>
	{{HTML::style('Stilovi.css');}}
	{{HTML::script('http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js');}}
	{{HTML::script('/jFunction.js')}}
	<link href="/css/bootstrap.css" rel="stylesheet" media="screen">
	<script src="/js/bootstrap.js"></script>
</head>

<body>
	
	<div class="header" id="header">
		<h1 class="navbar-inner">HEADER</h1>
	</div>
	
	<div class="wrapper navbar navbar-inner">
		<h1 class="underlined">LOGOVANJE</h1>
		
		<p class="serif">Unesite podatke</p>
		{{ Form::open(array(
				 'route'=>'zavrseno',
				 'method' => 'POST',
		)) }}
		{{ Form::label('usernamelbl', Lang::get('logovanje.username')) }}<br>
		{{ Form::text('username', '') }}<br>
		{{ Form::label('passwordlbl', Lang::get('logovanje.password')) }}<br>
		{{ Form::password('password') }}<br>
		{{ Form::submit( Lang::get('logovanje.login')) }}
		{{ Form::close() }}
		 <div id='login-box' class='pull-right control-group'>
		 <a href="{{ URL::to('registracija') }}">       
		          REGISTRACIJA      
		</a>
		 </div>
		<br>
		<a href="{{ URL::to('login/en') }}">       
		          english      
		</a> <br>
		<a href="{{ URL::to('login/srb') }}">      
		          srpski    
		</a>
		 <div class="push"></div>
	</div> 
	
		
	<div class="footer navbar-inner">
		<li class="nav-header">FOOTER</li>
   		 <li class="active"><a href="#header">pocetak</a></li></div>
    			   
    		
	
	

</body>

