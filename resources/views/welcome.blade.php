<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Stylesheets
	    ============================================= -->
	    <link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
	    <link rel="stylesheet" href="style.css" type="text/css" />
	    <link rel="stylesheet" href="css/dark.css" type="text/css" />
	    <link rel="stylesheet" href="css/font-icons.css" type="text/css" />
	    <link rel="stylesheet" href="css/animate.css" type="text/css" />
	    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />

        <link rel="stylesheet" href="css/responsive.css" type="text/css" />
        
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        <title>FOLKWAYS</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        {{-- <!-- SLIDER REVOLUTION 5.x CSS SETTINGS -->
	    <link rel="stylesheet" type="text/css" href="include/rs-plugin/css/settings.css" media="screen" />
	    <link rel="stylesheet" type="text/css" href="include/rs-plugin/css/layers.css">
        <link rel="stylesheet" type="text/css" href="include/rs-plugin/css/navigation.css"> --}}
        
    </head>
    <body>
        {{-- <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif
        </div> --}}

        
        {{-- <div id="app">
                <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
                    <div class="container">
                        <a class="navbar-brand" href="{{ url('/') }}">
                            FOLKWAYS
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                            <span class="navbar-toggler-icon"></span>
                        </button>
        
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <!-- Left Side Of Navbar -->
                            <ul class="navbar-nav mr-auto">
        
                            </ul>
        
                            <!-- Right Side Of Navbar -->
                            <ul class="navbar-nav ml-auto">
                                <!-- Authentication Links -->
                                @guest
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('bookings.index') }}">{{ __('Booking') }}</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @else
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('bookings.index') }}">{{ __('Booking') }}</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }} <span class="caret"></span>
                                        </a>
        
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>
        
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                                @endguest
                            </ul>
                        </div>
                    </div>
                </nav>
            </div> --}}

            <header id="header">

                <div id="header-wrap">
    
                    <div class="container clearfix sticky">
    
                        <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>
    
                        <!-- Logo
                        ============================================= -->
                        <div id="logo">
                            <a href="{{ url('/') }}" class="standard-logo"><img src="images/folkend/no-pic1.jpg" alt="Canvas Logo"></a>
                            
                        </div><!-- #logo end -->
    
                        <!-- Primary Navigation
                        ============================================= -->
                        <nav id="primary-menu" class="style-5">
    
                            <ul class="norightborder norightpadding norightmargin">
                                <li><a href="{{ url('/') }}"><div><i class="icon-home2"></i>Home</div></a>
                                <li><a href="{{ route('homestays.index') }}"><div><i class="icon-folder-open"></i>homestays</div></a></li>
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
            
        <div class="section parallax dark notopmargin noborder bottommargin" style="padding: 175px 0; background-image: url('images/folkend/NHK05.jpg');" data-bottom-top="background-position:0px 300px;" data-top-bottom="background-position:0px -300px;">
			<div class="container center clearfix">
				<div class="emphasis-title" >
                    <h2 style="color:black">FOLKWAYS</h2>
                    <h3 style="color:black">Want to book your homestay in Northeast Thailand? Try Folkways</h3>
                </div>
            </div>
        </div>

        
            <div class="text-center">
                <h1>Easy Steps</h1>
            </div>
        
        

        <div class="bottommargin"></div>
        <div class="container clearfix">
                <div class="col_one_fourth">
                    <div class="feature-box fbox-center fbox-plain nobottomborder">
                        <div class="fbox-icon">
                            <a href="#"><img src="images/home.png" alt="Icon" data-animate="zoomIn"></a>
                        </div>
                        <h3>Click "Homestay" to see the list and detail of homestays<span class="subtitle"></span></h3>
                    </div>
                </div>
                <div class="col_one_fourth">
                    <div class="feature-box fbox-center fbox-plain nobottomborder">
                        <div class="fbox-icon">
                            <a href="#"><img src="images/edit.png" alt="Icon" data-animate="zoomIn" data-delay="200"></a>
                        </div>
                        <h3>Click "Booking" for booking a homestays that you wish to visit<span class="subtitle"></span></h3>
                    </div>
                </div>
                <div class="col_one_fourth">
                    <div class="feature-box fbox-center fbox-plain nobottomborder">
                        <div class="fbox-icon">
                            <a href="#"><img src="images/user.png" alt="Icon" data-animate="zoomIn" data-delay="400"></a>
                        </div>
                        <h3>You may have to "register" or "login" to finish the payment<span class="subtitle"></span></h3>
                    </div>
                </div>
                <div class="col_one_fourth col_last">
                    <div class="feature-box fbox-center fbox-plain nobottomborder">
                        <div class="fbox-icon">
                            <a href="#"><img src="images/checked.png" alt="Icon" data-animate="zoomIn" data-delay="600"></a>
                        </div>
                        <h3>Waiting for a response from the site.<span class="subtitle"></span></h3>
                    </div>
                </div>
                
        </div>
    
        <div class="line"></div>
        
            <div class="text-center">
                <h1>Recommended</h1>
            </div>
            <div class="bottommargin"></div>
            <div id="portfolio" class="portfolio-nomargin portfolio-full portfolio-overlay-open clearfix">
                
                <article class="portfolio-item pf-media pf-icons">
                    <div class="portfolio-image">
                        <a href="{{ url('/homestays/1') }}">
                            <img src="images/folkend/38-03-01.jpg"/>
                            <div class="portfolio-overlay">
                                <div class="portfolio-desc" style="margin-top: 150px;">
                                    <h3>หมู่บ้านวัฒนธรรมผู้ไทยโคกโก่งโฮมสเตย์</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                </article>

                <article class="portfolio-item pf-media pf-icons">
                    <div class="portfolio-image">
                        <a href="{{ url('/homestays/3') }}">
                            <img src="images/folkend/73-03-01.jpg"/>
                            <div class="portfolio-overlay">
                                <div class="portfolio-desc" style="margin-top: 150px;">
                                    <h3>โฮมสเตย์บ้านคอกวัว</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                </article>

                <article class="portfolio-item pf-media pf-icons">
                    <div class="portfolio-image">
                        <a href="{{ url('/homestays/2') }}">
                            <img src="images/folkend/55-03-03.jpg"/>
                            <div class="portfolio-overlay">
                                <div class="portfolio-desc" style="margin-top: 150px;">
                                    <h3>โฮมสเตย์บ้านตาทิตย์</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                </article>

                <article class="portfolio-item pf-media pf-icons">
                    <div class="portfolio-image">
                        <a href="{{ url('/homestays/4') }}">
                            <img src="images/folkend/79-03-02.jpg"/>
                            <div class="portfolio-overlay">
                                <div class="portfolio-desc" style="margin-top: 150px;">
                                    <h3>ชมรมโฮมสเตย์เชิงอนุรักษ์วัฒนธรรมบ้านเชียง</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                </article>
                
            </div>

        {{-- <div class="section nobg topmargin-lg nobottommargin">
            <div class="container clearfix">
                <div class="col_half nobottommargin center">
                    <img src="images/folkend/45-03-02.jpg" alt="Image" data-animate="fadeInLeft">
                </div>
                <div class="col_half nobottommargin col_last">
                    <div class="heading-block" style="padding-top: 40px;">
                        <h2>ไทยแสกโฮมสเตย์</h2>
                        <span>Thai sak homestay</span>
                    </div>
                    
                    <p>104 หมู่ 5 หมู่บ้านอาจสามารถ ตำบลอาจสามารถ อำเภอเมือง จังหวัดนครพนม 48000 ตำบลอาจสามารถ อำเภอเมืองนครพนม จังหวัดนครพนม</p>
                    <h3>Nakhonphanom</h3>
                    <a href="{{ url('homestays/8')}}" class="button button-border button-large button-rounded topmargin-sm noleftmargin">More Details</a>
                </div>
            </div>
        </div>

        <div class="section nobg notopmargin noborder bottommargin-sm">
			<div class="container clearfix">
				<div class="col_half nobottommargin">
					<div class="heading-block" style="padding-top: 40px;">
						<h2>นาจอกโฮมสเตย์</h2>
						<span>Najok homestay</span>
					</div>
                        <p>32 หมู่ 5 ตำบลหนองญาติ อำเภอเมืองนครพนม จังหวัดนครพนม</p>
                        <h3>Nakhonphanom</h3>
						<a href="{{ url('homestays/9')}}" class="button button-border button-large button-rounded topmargin-sm noleftmargin">More Details</a>
			    </div>
				<div class="col_half bottommargin-sm center col_last">
					<img src="images/folkend/46-03-03.jpg" alt="Image" data-animate="fadeInRight">
				</div>
			</div>
        </div>

        <div class="section nobg topmargin-lg nobottommargin">
            <div class="container clearfix">
                <div class="col_half nobottommargin center">
                    <img src="images/folkend/47-03-02.jpg" alt="Image" data-animate="fadeInLeft">
                </div>
                <div class="col_half nobottommargin col_last">
                    <div class="heading-block" style="padding-top: 40px;">
                        <h2>ศูนย์เรียนรู้เศรษฐกิจพอเพียงเฉลิมพระเกียรติ 84 พรรษา บ้านพิมาน</h2>
                        <span>Sufficiency Economy Learning Center Celebrates 84th Anniversary Pimarn House</span>
                    </div>
                    <p>เลขที่ 10 หมู่ 4 ตำบลพิมาน อำเภอนาแก จังหวัดนครพนม</p>
                    <h3>Nakhonphanom</h3>
                    <a href="{{ url('homestays/10')}}" class="button button-border button-large button-rounded topmargin-sm noleftmargin">More Details</a>
                </div>
            </div>
        </div>

        <div class="section nobg notopmargin noborder bottommargin-sm">
			<div class="container clearfix">
				<div class="col_half nobottommargin">
					<div class="heading-block" style="padding-top: 40px;">
						<h2>หมู่บ้านท่าเรืออนุรักษ์วัฒนธรรมการผลิตเครื่องดนตรีพื้นเมืองอีสาน</h2>
						<span>Village Cultural Conservation Harbor, Northeastern Folk Music Production</span>
					</div>
                        <p>88 ม.1 บ้านท่าเรือ ตำบลท่าเรือ อำเภอนาหว้า จังหวัดนครพนม</p>
                        <h3>Nakhonphanom</h3>
						<a href="{{ url('homestays/11')}}" class="button button-border button-large button-rounded topmargin-sm noleftmargin">More Details</a>
			    </div>
				<div class="col_half bottommargin-sm center col_last">
					<img src="images/folkend/48-03-03.jpg" alt="Image" data-animate="fadeInRight">
				</div>
			</div>
        </div> --}}
        
        <footer id="footer" class="dark">

			<div class="container">

				<!-- Footer Widgets
				============================================= -->
				<div class="footer-widgets-wrap clearfix">

					<div class="col_full">
						<div class="heading-block center nobottommargin">
                            <h2>Need to see more? <strong>Then click it</strong>
                                <a href="{{ route('homestays.index') }}" class="button button3d button-round button-dark button-light">Homestays</a></h2>
						</div>

					</div>

				</div><!-- .footer-widgets-wrap end -->

			</div>

			<!-- Copyrights
			============================================= -->
			<div id="copyrights">

				<div class="container clearfix">

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

			<!-- #copyrights end -->

		</footer>
                
        <!-- Go To Top
	============================================= -->
	{{-- <div id="gotoTop" class="icon-angle-up"></div> --}}

	<!-- External JavaScripts
	============================================= -->
	<script src="js/jquery.js"></script>
	<script src="js/plugins.js"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="js/functions.js"></script>

	

    </body>
</html>
