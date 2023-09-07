<!doctype html>
<html class="no-js" lang="zxx">


<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="robots" content="noindex, follow" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="shortcut icon" type="image/x-icon" href="{{url('/')}}/uploads/favicon.png">

    <meta name="robots" content="index,follow">
    <meta name="googlebot" content="index,follow"><!-- Google Specific -->
    <meta name="subject" content="Meglink Homes - Interior Design Company in Kenya">
    <meta name="rating" content="General">
    <meta name="referrer" content="no-referrer">
    <meta name="theme-color" content="#1c2c52">
    <title>Meglink Homes - Interior Design Company in Kenya</title>
    <meta name="description" content="Meglink Ventures is the best suited interior designer that stands out in both the local and international market. Call us now and let us do the Magic for you">
    <link rel="canonical" href="https://meglinkventures.co.ke"/>
    <meta property="og:description" content="Meglink Ventures is the best suited interior designer that stands out in both the local and international market. Call us now and let us do the Magic for you" />
    <meta property="og:title" content="Meglink Homes - Interior Design Company in Kenya" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://meglinkventures.co.ke" />

    <meta property="og:image" content="https://meglinkventures.co.ke/public/uploads/fav.png" />
    <meta property="og:site_name" content="meglinkventures Computers Limited">
    <meta property="og:locale" content="en_US">
    <meta name="twitter:title" content="Meglink Homes - Interior Design Company in Kenya" />
    <meta name="twitter:site" content="@meglinkventuresC" />
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@meglinkventuresC">
    <meta name="twitter:url" content="https://meglinkventures.co.ke">
    <meta name="twitter:description" content="Meglink Ventures is the best suited interior designer that stands out in both the local and international market. Call us now and let us do the Magic for you">
    <meta name="twitter:image" content="https://meglinkventures.co.ke/public/uploads/fav.png">


    <!-- Font Icons css -->
    <link rel="stylesheet" href="{{asset('realestate/css/font-icons.css')}}">
    <!-- plugins css -->
    <link rel="stylesheet" href="{{asset('realestate/css/plugins.css')}}">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{asset('realestate/css/style.css')}}">
    <!-- Responsive css -->
    <link rel="stylesheet" href="{{asset('realestate/css/responsive.css')}}">
</head>

<body>
    <!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

    <!-- Add your site or application content here -->

<!-- Body main wrapper start -->
<div class="wrapper">

    <!-- HEADER AREA START (header-5) -->
    <header class="ltn__header-area ltn__header-5 ltn__header-transparent--- gradient-color-4---">
        <!-- ltn__header-top-area start -->
        <div class="ltn__header-top-area section-bg-6 top-area-color-white---">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <div class="ltn__top-bar-menu">
                            <ul>
                                <li><a href="mailto:info@meglinkventures.co.ke?Subject=Enquiry"><i class="icon-mail"></i> info@meglinkventures.co.ke</a></li>
                                <li><a href="https://goo.gl/maps/9aimBivJaB59Aehj7"><i class="icon-placeholder"></i> Riverside Gardens, Westlands Riverside - Nairobi - Kenya</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="top-bar-right text-end">
                            <div class="ltn__top-bar-menu">
                                <ul>

                                    <li>
                                        <!-- ltn__social-media -->
                                        <div class="ltn__social-media">
                                            <ul>
                                                <li><a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#" title="Twitter"><i class="fab fa-twitter"></i></a></li>

                                                <li><a href="#" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                                                <li><a href="#" title="linkedin"><i class="fab fa-linkedin"></i></a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <!-- header-top-btn -->
                                        <div class="header-top-btn">
                                            <a href="{{url('/')}}/contact-us">Get Quote</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ltn__header-top-area end -->

        <!-- ltn__header-middle-area start -->
        <div class="ltn__header-middle-area ltn__header-sticky ltn__sticky-bg-white">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="site-logo-wrap">
                            <div class="site-logo">
                                <a href="{{url('/')}}"><img src="{{url('/')}}/uploads/fav.png" alt="Logo"></a>
                            </div>
                            <div class="get-support clearfix d-none">
                                <div class="get-support-icon">
                                    <i class="icon-call"></i>
                                </div>
                                <div class="get-support-info">
                                    <h6>Get Support</h6>
                                    <h4><a href="tel:+254 701 211 206">+254 701 211 206</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col header-menu-column">
                        <div class="header-menu d-none d-xl-block">
                            <nav class="md-flex">
                                <div class="ltn__main-menu">
                                    <ul id="mainmenu" class="dotted-separator">
                                        <li><a href="{{url('/')}}">Home<span></span></a>

                                        </li>

                                        <li>
                                            <a href="{{url('/')}}/#section-about">About Us<span></span></a>
                                            <ul>
                                                <li>
                                                    <a href="{{url('/')}}/our-team">Our Team</a>
                                                </li>
                                            </ul>
                                        </li>

                                        <?php
                                        $Services = DB::table('services')->get();
                                        ?>
                                        <li><a href="#">Center Of Excellence</a>
                                            <ul class="sub-menu-style">
                                                @foreach ($Services as $services)
                                                <li><a href="{{url('/')}}/center-of-excellence/{{$services->slung}}">{!!html_entity_decode($services->caption)!!}</a></li>
                                                @endforeach
                                                <li><a href="{{url('/')}}/meglink-homes"><span class="fa fa-home"></span> Meglink Homes</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{url('/')}}/our-portfolio">Portfolio</a>

                                        </li>

                                        <li><a href="{{url('/')}}/latest-news">Laterst News</a>

                                        </li>

                                        <li><a href="{{url('/contact-us')}}">Contact</a>

                                        </li>
                                    </ul>
                                </div>
                            </nav>

                        </div>
                    </div>
                    <div class="col ltn__header-options ltn__header-options-2 mb-sm-20">
                        <!-- header-search-1 -->
                        <div class="header-search-wrap">
                            <div class="header-search-1">
                                <div class="search-icon">
                                    <i class="icon-search for-search-show"></i>
                                    <i class="icon-cancel  for-search-close"></i>
                                </div>
                            </div>
                            <div class="header-search-1-form">
                                <form id="#" method="get"  action="#">
                                    <input type="text" name="search" value="" placeholder="Search here..."/>
                                    <button type="submit">
                                        <span><i class="icon-search"></i></span>
                                    </button>
                                </form>
                            </div>
                        </div>

                        <!-- Mobile Menu Button -->
                        <div class="mobile-menu-toggle d-xl-none">
                            <a href="#ltn__utilize-mobile-menu" class="ltn__utilize-toggle">
                                <svg viewBox="0 0 800 600">
                                    <path d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200" id="top"></path>
                                    <path d="M300,320 L540,320" id="middle"></path>
                                    <path d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190" id="bottom" transform="translate(480, 320) scale(1, -1) translate(-480, -318) "></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ltn__header-middle-area end -->
    </header>
    <!-- HEADER AREA END -->



    <!-- Utilize Mobile Menu Start -->
    <div id="ltn__utilize-mobile-menu" class="ltn__utilize ltn__utilize-mobile-menu">
        <div class="ltn__utilize-menu-inner ltn__scrollbar">
            <div class="ltn__utilize-menu-head">
                <div class="site-logo">
                    <a href="{{url('/')}}"><img src="{{url('/')}}/uploads/fav.png" alt="Logo"></a>
                </div>
                <button class="ltn__utilize-close">×</button>
            </div>
            <div class="ltn__utilize-menu-search-form">
                <form action="#">
                    <input type="text" placeholder="Search...">
                    <button><i class="fas fa-search"></i></button>
                </form>
            </div>
            <div class="ltn__utilize-menu">
                <ul id="mainmenu" class="dotted-separator">
                    <li><a href="{{url('/')}}">Home<span></span></a>

                    </li>

                    <li>
                        <a href="{{url('/')}}/#section-about">About Us<span></span></a>
                        <ul class="sub-menu">
                            <li>
                                <a href="{{url('/')}}/our-team">Our Team</a>
                            </li>
                        </ul>
                    </li>

                    <?php
                    $Services = DB::table('services')->get();
                    ?>
                    <li><a href="#">Center Of Excellence</a>
                        <ul class="sub-menu">
                            @foreach ($Services as $services)
                            <li><a href="{{url('/')}}/center-of-excellence/{{$services->slung}}">{!!html_entity_decode($services->caption)!!}</a></li>
                            @endforeach
                            <li><a href="{{url('/')}}/meglink-homes"><span class="fa fa-home"></span> Meglink Homes</a></li>
                        </ul>
                    </li>
                    <li><a href="{{url('/')}}/our-portfolio">Portfolio</a>

                    </li>

                    <li><a href="{{url('/')}}/latest-news">Laterst News</a>

                    </li>

                    <li><a href="{{url('/contact-us')}}">Contact</a>

                    </li>
                </ul>
            </div>

            <div class="ltn__social-media-2">
                <ul>
                    <li><a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#" title="Linkedin"><i class="fab fa-linkedin"></i></a></li>
                    <li><a href="#" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Utilize Mobile Menu End -->

    <div class="ltn__utilize-overlay"></div>

    @yield('content')

    <!-- CALL TO ACTION START (call-to-action-6) -->
    <div class="ltn__call-to-action-area call-to-action-6 before-bg-bottom" data-bs-bg="{{asset('realestate/img/1.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="call-to-action-inner call-to-action-inner-6 ltn__secondary-bg position-relative text-center---">
                        <div class="coll-to-info text-color-white">
                            <h1>Looking for a dream home?</h1>
                            <p>We can help you realize your dream of a new home</p>
                        </div>
                        <div class="btn-wrapper">
                            <a class="btn btn-effect-3 btn-white" href="contact.html">Explore Properties <i class="icon-next"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CALL TO ACTION END -->

    <!-- FOOTER AREA START -->
    <footer class="ltn__footer-area  ">
        <div class="footer-top-area  section-bg-2 plr--5">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-4 col-md-6 col-sm-6 col-12">
                        <div class="footer-widget footer-about-widget">
                            <div class="footer-logo">
                                <h4 class="footer-title">Customer Care</h4>
                                <div class="site-logo">
                                    {{-- <img src="{{url('/')}}/uploads/fav.png" alt="Logo"> --}}
                                </div>
                            </div>
                            <p>
                                We all desire that our homes, offices etc. should have a gorgeous and presentable look. We all want that anybody who enters our house, office etc should appreciate its interiors and décor. But that could only be possible if the interiors of our homes are designed in a manner which attracts appreciations and praises.
                            </p>

                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-sm-6 col-12">
                        <div class="footer-widget footer-menu-widget clearfix">
                            <h4 class="footer-title">Company</h4>
                            <div class="footer-menu">
                                <ul>
                                    @foreach ($Services as $services)
                                       <li><a href="{{url('/')}}/center-of-excellence/{{$services->slung}}">{!!html_entity_decode($services->caption)!!}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 col-sm-6 col-12">
                        <div class="footer-widget footer-menu-widget clearfix">
                            <h4 class="footer-title">Customer Care</h4>
                            <div class="footer-address">
                                <ul>
                                    <li>
                                        <div class="footer-address-icon">
                                            <i class="icon-placeholder"></i>
                                        </div>
                                        <div class="footer-address-info">
                                            <p>Riverside Gardens, Westlands Riverside - Nairobi - Kenya</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="footer-address-icon">
                                            <i class="icon-call"></i>
                                        </div>
                                        <div class="footer-address-info">
                                            <p><a href="tel:+254 701 211 206">+254 701 211 206</a></p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="footer-address-icon">
                                            <i class="icon-mail"></i>
                                        </div>
                                        <div class="footer-address-info">
                                            <p><a href="mailto:info@meglinkventures.co.ke">info@meglinkventures.co.ke</a></p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="ltn__social-media mt-20">
                                <ul>
                                    <li><a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#" title="Linkedin"><i class="fab fa-linkedin"></i></a></li>
                                    <li><a href="#" title="Youtube"><i class="fab fa-youtube"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-sm-12 col-12">
                        <div class="footer-widget footer-newsletter-widget">
                            <h4 class="footer-title">Newsletter</h4>
                            <p>Subscribe to our weekly Newsletter and receive updates via email.</p>
                            <div class="footer-newsletter">
                                <form action="#">
                                    <input type="email" name="email" placeholder="Email*">
                                    <div class="btn-wrapper">
                                        <button class="theme-btn-1 btn" type="submit"><i class="fas fa-location-arrow"></i></button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ltn__copyright-area ltn__copyright-2 section-bg-7  plr--5">
            <div class="container-fluid ltn__border-top-2">
                <div class="row">
                    <div class="col-md-6 col-12">
                        <div class="ltn__copyright-design clearfix">
                            <p>All Rights Reserved @ Meglink Ventures Limited <span class="current-year"></span></p>
                        </div>
                    </div>
                    <div class="col-md-6 col-12 align-self-center">
                        <div class="ltn__copyright-menu text-end">
                            <ul>
                                <li><a href="#">Terms & Conditions</a></li>
                                <li><a href="#">Claim</a></li>
                                <li><a href="#">Privacy & Policy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- FOOTER AREA END -->






</div>
<!-- Body main wrapper end -->

    <!-- All JS Plugins -->
    <script src="{{asset('realestate/js/plugins.js')}}"></script>
    <!-- Main JS -->
    <script src="{{asset('realestate/js/main.js')}}"></script>

</body>
</html>

