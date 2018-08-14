<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Stylesheets
	    ============================================= -->
	    <link rel="stylesheet" href="/css/bootstrap.css" type="text/css" />
	    <link rel="stylesheet" href="/style.css" type="text/css" />
	    <link rel="stylesheet" href="/css/dark.css" type="text/css" />
	    <link rel="stylesheet" href="/css/font-icons.css" type="text/css" />
	    <link rel="stylesheet" href="/css/animate.css" type="text/css" />
        <link rel="stylesheet" href="/css/magnific-popup.css" type="text/css" />
        <link href="/css/bootstrap-datetimepicker.min.css" rel="stylesheet">

        <link rel="stylesheet" href="/css/responsive.css" type="text/css" />

        
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        <title>FOLKWAYS</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">

        <!-- Styles -->
        <link href="{{ asset('/css/app.css') }}" rel="stylesheet">

        <!-- Scripts -->
        <script src="{{ asset('/js/app.js') }}" defer></script>
</head>
<body>
    <div id="app">
        
        <header id="header">

                <div id="header-wrap">
    
                    <div class="container clearfix sticky">
    
                        <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>
    
                        <!-- Logo
                        ============================================= -->
                        <div id="logo">
                            <a href="{{ url('/') }}" class="standard-logo"><img src="/images/folkend/no-pic1.jpg" alt="Canvas Logo"></a>
                            
                        </div><!-- #logo end -->
    
                        <!-- Primary Navigation
                        ============================================= -->
                        <nav id="primary-menu" class="style-5">
    
                            <ul class="norightborder norightpadding norightmargin">
                                <li><a href="{{ url('/') }}"><div><i class="icon-home2"></i>Home</div></a>
                                <li><a href="{{ route('homestays.index') }}"><div><i class="icon-folder-open"></i>Homestays</div></a></li>
                                {{-- <li><a href="{{ route('bookings.index') }}"><div><i class="icon-suitcase"></i>Booking</div></a></li> --}}
                                
                                @guest
                                    
                                    <li><a href="{{ route('login') }}"><div><i class="icon-user"></i>Login</div></a></li>
                                    <li><a href="{{ route('register') }}"><div><i class="icon-external-link"></i>Register</div></a></li>
                                @else
                                    <li>
                                        <a href="#"><div><i class="icon-user"></i>
                                            {{ Auth::user()->name }}</div> <span class="caret"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();"><div><i class="icon-unlink"></i>
                                        Logout</div>
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </li>
                                @endguest
                            </ul>
    
                        </nav><!-- #primary-menu end -->
    
                    </div>
    
                </div>
    
            </header>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <div id="copyrights">

            <div class="container clearfix">

                <div class="col_half">
                        Demo<br>
                        
                    </div>
                <div class="col_half">
                        ข้อมูลโฮมสเตย์อ้างอิงจาก homestaythai.net<br>
                        
                    </div>
                <div class="col_half">
                    Copyrights &copy; 2014 All Rights Reserved by Canvas Inc.<br>
                    <div class="copyright-links"><a href="#">Terms of Use</a> / <a href="#">Privacy Policy</a></div>
                </div>
                
                

                <div class="clear"></div>

                </div>

            </div>






    	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- External JavaScripts
	============================================= -->
	<script src="/js/jquery.js"></script>
    <script src="/js/plugins.js"></script>
    
    <script src="/js/moment.min.js"></script>
    <script src="/js/bootstrap-datetimepicker.min.js"></script>
    
    <script>
    $function(){
        $(.date).datetimepicker({
    });
    </script>


</body>
</html>
