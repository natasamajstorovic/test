<html>
<head>
    <title>Logovanje korisnika</title>
    {{ HTML::style('/css/style.css') }}
</head>
<body>
    <div id="container">
        <div id="nav">
            <ul>
                <li>{{ HTML::route('/', 'Home') }}</li>
                @if(Auth::check())
                    
                    <li>{{ HTML::route('logout', 'Logout ('.Auth::user()->username.')') }}</li>
                @else
                    <li>{{ HTML::route('login', 'Login') }}</li>
                @endif
            </ul>
        </div><!-- end nav -->

        <!-- check for flash notification message -->
        @if(Session::has('flash_notice'))
            <div id="flash_notice">{{ Session::get('flash_notice') }}</div>
        @endif

        @yield('content')
    </div><!-- end container -->
</body>
</html>
