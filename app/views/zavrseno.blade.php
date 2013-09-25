@extends('template')
<head>
	
	{{HTML::script('http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js');}}
	{{HTML::style('Stilovi.css');}}
	<link href="/css/bootstrap.css" rel="stylesheet" media="screen">
	<script src="/js/bootstrap.js"></script>
	
</head>

<body>


	@section('title')
	@stop
	<div class="header navbar-inner" id="header">
			@section('header')
			@include('header')
			@show
	</div>
	
	
	<div class="wrapper">
		 <div class="push"></div>
	</div> 
	<div> 
		@section('footer')
		@include('footer')
		@show
	</div>
</body>
