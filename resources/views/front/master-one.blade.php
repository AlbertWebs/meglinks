<!DOCTYPE html>
<html lang="zxx">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index,follow">
    <meta name="googlebot" content="index,follow"><!-- Google Specific -->
    <meta name="subject" content="Meglink Ventures Limited - Interior Design Company in Kenya">
    <meta name="rating" content="General">
    <meta name="referrer" content="no-referrer">
    <meta name="theme-color" content="#1c2c52">
    <title>Meglink Ventures Limited - Interior Design Company in Kenya</title>
    <meta name="description" content="Meglink Ventures is the best suited interior designer that stands out in both the local and international market. Call us now and let us do the Magic for you">
    <link rel="canonical" href="https://meglinkventures.co.ke"/>
    <meta property="og:description" content="Meglink Ventures is the best suited interior designer that stands out in both the local and international market. Call us now and let us do the Magic for you" />
    <meta property="og:title" content="Meglink Ventures Limited - Interior Design Company in Kenya" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://meglinkventures.co.ke" />

    <meta property="og:image" content="https://meglinkventures.co.ke/public/uploads/fav.png" />
    <meta property="og:site_name" content="meglinkventures Computers Limited">
    <meta property="og:locale" content="en_US">
    <meta name="twitter:title" content="Meglink Ventures Limited - Interior Design Company in Kenya" />
    <meta name="twitter:site" content="@meglinkventuresC" />
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@meglinkventuresC">
    <meta name="twitter:url" content="https://meglinkventures.co.ke">
    <meta name="twitter:description" content="Meglink Ventures is the best suited interior designer that stands out in both the local and international market. Call us now and let us do the Magic for you">
    <meta name="twitter:image" content="https://meglinkventures.co.ke/public/uploads/fav.png">
    <link rel="shortcut icon" type="image/x-icon" href="{{url('/')}}/uploads/favicon.png">

    <!-- CSS Files
    ================================================== -->
    <link href="{{asset('themes/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" id="bootstrap" />
    <link href="{{asset('themes/css/bootstrap-grid.min.css')}}" rel="stylesheet" type="text/css" id="bootstrap-grid" />
    <link href="{{asset('themes/css/bootstrap-reboot.min.css')}}" rel="stylesheet" type="text/css" id="bootstrap-reboot" />
    <link href="{{asset('themes/css/plugins.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('themes/css/style.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('themes/css/color.css')}}" rel="stylesheet" type="text/css">

    <!-- custom background -->
    <link rel="stylesheet" href="{{asset('themes/css/bg.css')}}" type="text/css">

    <!-- color scheme -->
	<link rel="stylesheet" href="{{asset('themes/css/colors/yellow.css')}}" type="text/css" id="colors">

    <!-- RS5.0 Stylesheet -->
    <link rel="stylesheet" href="{{asset('themes/revolution/css/settings.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('themes/revolution/css/layers.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('themes/revolution/css/navigation.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('themes/css/rev-settings.css')}}" type="text/css">

	<!-- custom style -->
	<link rel="stylesheet" href="{{asset('themes/css/custom-interior-design.css')}}" type="text/css">
</head>

<body id="homepage" class="de_light">

    <div id="wrapper">

        <!-- header begin -->
        <header class="header-bottom">
            <div class="info">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="column">Working Hours Monday - Friday <span class="id-color"><strong>08:00-16:00</strong></span></div>
                            <div class="column">Toll Free <span class="id-color"><strong>1800.899.900</strong></span></div>
                            <!-- social icons -->
                            <div class="column social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-rss"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-envelope-o"></i></a>
                            </div>
                            <!-- social icons close -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                    	<div class="md-flex">
	                        <!-- logo begin -->
	                        <div id="logo">
	                            <a href="{{url('/')}}">
	                                <img class="logo" style="max-height:60px" src="{{url('/')}}/uploads/fav.png" alt="">
	                            </a>
	                        </div>
	                        <!-- logo close -->

	                        <!-- small button begin -->
	                        <span id="menu-btn"></span>
	                        <!-- small button close -->

	                        <!-- mainmenu begin -->
                        	<div class="md-flex-col">
								<nav class="md-flex">
									<ul id="mainmenu" class="dotted-separator">
										<li><a href="{{url('/')}}">Home<span></span></a>

										</li>

                                        <li><a href="{{url('/')}}">About Us<span></span></a>

										</li>

                                        <?php
                                        $Services = DB::table('services')->get();
                                        ?>
                                        <li><a href="#">Center Of Excellence</a>
                                            <ul class="sub-menu-style">
                                                @foreach ($Services as $services)
                                                <li><a href="{{url('/')}}/center-of-excellence/{{$services->slung}}">{!!html_entity_decode($services->caption)!!}</a></li>
                                                @endforeach
                                            </ul>
                                        </li>
                                        <li><a href="{{url('/')}}/our-portfolio">Portfolio</a>

										</li>

                                        <li><a href="{{url('/')}}/our-portfolio">Laterst News</a>

                                        </li>

										<li><a href="{{url('/contact-us')}}">Contact</a>

										</li>
									</ul>
								</nav>
								<!-- mainmenu close -->
							</div>
                            <div class="md-flex-col col-extra" style="background-size: cover;">
								<a href="{{url('/contact-us')}}" class="btn-on-header btn-line">Get Quote</a>
							</div>
						</div>
					</div>
                </div>
            </div>
        </header>
        <!-- header close -->

       @yield('content')

        <!-- footer begin -->
        <footer class="style-3" aria-label="section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <h3>Meglink Ventures Limited</h3>
                        We all desire that our homes, offices etc. should have a gorgeous and presentable look. We all want that anybody who enters our house, office etc should appreciate its interiors and décor. But that could only be possible if the interiors of our homes are designed in a manner which attracts appreciations and praises.
                    </div>

                    <div class="col-lg-3">
                        <div class="widget widget_recent_post">
                            <h3>Latest News</h3>
                            <ul>
                                <li><a href="#">The Essentials Interior Design Tips</a></li>
                                <li><a href="#">Functional Wall-to-Wall Shelves</a></li>
                                <li><a href="#">9 Unique Ways to Display Your TV</a></li>
                                <li><a href="#">The 5 Secrets to Minimal Design</a></li>
                                <li><a href="#">Make a Huge Impact With Multiples</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="widget widget_recent_post">
                            <h3>Our Services</h3>
                            <ul>
                                @foreach ($Services as $services)
                                <li><a href="{{url('/')}}/center-of-excellence/{{$services->slung}}">{!!html_entity_decode($services->caption)!!}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <h3>Contact Us</h3>
                        <div class="widget widget-address">
                            <address>
                                <span>Riverside Gardens, Westlands Riverside - Nairobi - Kenya</span>
                                {{-- <span><strong>Phone:</strong>+254 701 211 206</span> --}}
                                <span><strong>Mobile:</strong>+254 701 211 206</span>
                                <span><strong>Email:</strong><a href="mailto:hello@meglinkventures.co.ke">hello@meglinkventures.co.ke</a></span>
                                <span><strong>Web:</strong><a href="#">http://meglinkventures.co.ke</a></span>
                            </address>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row align-items-middle">
                    <div class="col-md-3">
                        <img width="80" src="{{asset('uploads/fav.png')}}" class="logo-small" alt=""><br>
                    </div>

                    <div class="col-md-6 text-center">
                        &copy; Copyright {{date('Y')}} - <span class="id-color">Meglink Ventures Limited</span> All Rights Reserved
                        {{-- | Powered By <span class="id-color">Designekta Studios</span> --}}
                    </div>

                    <div class="col-md-3 text-right">
                        <div class="social-icons">
                            <a href="#"><i class="fa fa-facebook fa-lg"></i></a>
                            <a href="#"><i class="fa fa-twitter fa-lg"></i></a>
                            <a href="#"><i class="fa fa-pinterest fa-lg"></i></a>
                            <a href="#"><i class="fa fa-google-plus fa-lg"></i></a>
                            <a href="#"><i class="fa fa-instagram fa-lg"></i></a>
                        </div>
                    </div>
                </div>
            </div>


            <a href="#" id="back-to-top"></a>
        </footer>
            <!-- footer close -->
    </div>



    <!-- Javascript Files
    ================================================== -->
    <script src="{{asset('themes/js/plugins.js')}}"></script>
    <script src="{{asset('themes/js/designesia.js')}}"></script>
    <script src="{{asset('themes/js/jquery.plugin.js')}}"></script>
    <script src="{{asset('themes/js/jquery.countdown.js')}}"></script>
    <script src="{{asset('themes/js/countdown-custom.js')}}"></script>
    <script src="{{asset('themes/js/jquery.event.move.js')}}"></script>
    <script src="{{asset('themes/js/jquery.twentytwenty.js')}}"></script>

    <!-- SLIDER REVOLUTION SCRIPTS  -->
    <script src="{{asset('themes/rs-plugin/js/jquery.themepunch.plugins.min.js')}}"></script>
    <script src="{{asset('themes/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>

	<script>
    $(window).on("load", function(){
      $(".twentytwenty-container[data-orientation!='vertical']").twentytwenty({default_offset_pct: 0.5});
      $(".twentytwenty-container[data-orientation='vertical']").twentytwenty({default_offset_pct: 0.5, orientation: 'vertical'});
    });
    </script>

</body>


</html>
