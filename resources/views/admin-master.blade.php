<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="oldie ie6" lang="en"><![endif]-->
<!--[if IE 7 ]><html class="oldie ie7" lang="en"><![endif]-->
<!--[if IE 8 ]><html class="oldie ie8" lang="en"><![endif]-->
<!--[if IE 9 ]><html class="ie9" lang="en"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->
<head>

    <title>@yield('title')</title>

    <meta charset="UTF-8" />
    <meta http-equiv="cleartype" content="on" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link rel="stylesheet" media="screen" href="{{ asset('admin_assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" media="screen" href="{{ asset('/css/reset.css') }}" />
    <link rel="stylesheet" media="screen" href="{{ asset('/css/screen.css') }}" />

    
    <!-- jQuery & Bootstrap -->
    <script src="{{ url('/admin_assets/js/jquery-2.1.0.min.js') }}"></script>
    <script src="{{ url('/admin_assets/js/bootstrap.min.js') }}"></script>
    <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    

</head>
<body>

<div id="siteWrapper">

    <div class="navbar navbar-default navbar-static-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a id="logo" href="{{ url('/') }}">Art shop</a>
        </div>
        <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/') }}/"> Overview items</a></li>
                    <li><a href="{{ url('/users') }}/"> Users</a></li>
                    <li><a href="{{ url('/categories') }}/"> Categories</a></li>
                    <li><a href="{{ url('/about') }}/"> About</a></li>
                    
                    <li><a href="{{ url('/admin') }}">Your items</a></li> 
                </ul>
        @auth

                <ul class="nav navbar-nav navbar-right">
                    <!-- Edit logout text to include firstname lastname-->
                    <li>
                        <form method="post" action="{{ url('/logout') }}" class="form-inline">
                            <button type="submit" class="btn btn-logout" style="display:block;padding: 14px;">Logout ({{ Auth::user()->firstname }} {{ Auth::user()->lastname }})</button>
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
            </div>

        @endauth
        
        @guest

        <!-- if user is not logged in: show login action -->            
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{ url('/login') }}">Log in</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>
                </ul>
            </div>
        @endguest
        

    </div>
</div>
    

    <!-- content -->
    <section class="content">

        @section('content')
        @show

    </section>

</div>

<footer role="contentinfo">Art shop</footer>

</body>
</html>