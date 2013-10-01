<head>
	{{HTML::script('/jFunction.js')}}
</head>

<header id="header">

     
	  <div class="btn-group ">
	  	 <input type="button"  id="mybutton" value="projekat"></input> <br>		 
		  <button class="btn btn-default btn-lg dropdown-toggle navbar-inner" type="button" data-toggle="dropdown">
		    	{{$user->name}} {{$user->lastn}}<span class="caret"></span>
		  </button>
		   <ul class="dropdown-menu" role="menu">
			    <li><a href="{{ URL::to('logout') }}">logout</a></li>
			    <li><a href="#">Another action</a></li>
			    <li><a href="#">Something else here</a></li>
			    <li class="divider"></li>
			    <li><a href="#">Separated link</a></li>
			  </ul>
	</div>
</header>
