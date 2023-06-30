@extends('front.master')

@section('content')

<!-- Hero area -->
<div class="hero-area overly-style-1 opacity-point-4">
    <video class="video-active" autoplay="autoplay" loop="loop" muted="muted">
        <source src="{{asset('theme/assets/video/video.mp4')}}" type="video/mp4">
    </video>
    <div class="hero-content-1 hero-content-position">
        <h1 class="title" data-aos="fade-up" data-aos-delay="200">MEGLINKS INTERIOR DESIGN</h1>
        <p data-aos="fade-up" data-aos-delay="300">Quisque at justo sagittis, semper lacus a, iaculis tellus. Fusce tempor, leo vel iaculis aliquet, </p>
        <a href="project.html" class="btn btn-primary btn-hover-dark" data-aos="fade-up" data-aos-delay="400">VIEW PROJECTS <span style="color:#ffffff" class="fa fa-suitcase"></span></a>
        <a href="project.html" class="btn btn-primary btn-hover-dark" data-aos="fade-up" data-aos-delay="400"> LEARN MORE <span style="color:#ffffff" class="fa fa-arrow-right"></span></a>
    </div>
</div>
<!-- About area -->
<div class="section section-padding">
    <div class="container">
        <div class="row row-cols-lg-1 row-cols-1 mb-n6">
            <div class="col align-self-center mb-6 text-center">
                <div class="about-content text-center">
                    <h2 class="title">Welcome to <span>Meglink Ventures Limited</span></h2>
                    <p>
                        We are passionate, knowing that people live, work, play and inhabit the spaces and places we imagine and envision for our clients. To those wanting to make an impact with design.

                        We are passionate, knowing that people live, work, play and inhabit the spaces and places we imagine and envision for our clients. To those wanting to make an impact with design.

                        We are passionate, knowing that people live, work, play and inhabit the spaces and places we imagine and envision for our clients. To those wanting to make an impact with design.
                    </p>
                </div>

                <a href="about-us.html" class="btn btn-dark btn-hover-primary">LEARN MORE</a>
            </div>
            {{-- <div class="col mb-6">
                <div class="about-banner">
                    <img src="{{asset('theme/assets/images/banner/banner-2.png')}}" alt="banner">
                </div>
            </div> --}}
        </div>
    </div>
</div>
<!-- Funfact area -->
<div class="section section-padding bg-img overly-style-1 opacity-point-7" style="background-image:url(assets/images/bg/bg-1.jpg)">
    <div class="container">
        <div class="row row-cols-lg-4 row-cols-md-2 row-cols-sm-2 row-cols-1 mb-n6">
            <div class="col mb-8">
                <div class="funfact-2 text-center">
                    <i class="dlicon travel_bag"></i>
                    <span class="odometer count-style-2" data-count-to="594"></span>
                    <h4 class="title">Projects Worked</h4>
                </div>
            </div>
            <div class="col mb-8">
                <div class="funfact-2 text-center">
                    <i class="dlicon users_man-23"></i>
                    <span class="odometer count-style-2" data-count-to="100"></span>
                    <h4 class="title">Expert Workers</h4>
                </div>
            </div>
            <div class="col mb-8">
                <div class="funfact-2 text-center">
                    <i class="dlicon emoticons_smile"></i>
                    <span class="odometer count-style-2" data-count-to="785"></span>
                    <h4 class="title">Happy Clients</h4>
                </div>
            </div>
            <div class="col mb-8">
                <div class="funfact-2 text-center">
                    <i class="dlicon tech-2_firewall"></i>
                    <span class="odometer count-style-2" data-count-to="542"></span>
                    <h4 class="title">Upcomming Project</h4>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service area -->
<div class="section section-padding">
    <div class="container">
        <div class="section-title text-center mb-lg-9 mb-md-7 mb-5">
            <h2 class="title">Our <span>Services</span></h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
        </div>
        <div class="row mb-n6">
            <div class="col-lg-5 col-md-5 mb-6">
                <div class="service-img">
                    <img src="{{asset('theme/assets/images/banner/banner-6.png')}}" alt="banner">
                </div>
            </div>
            <div class="col-lg-7 col-md-7 align-self-center mb-6">
                <div class="service-2">
                    <div class="service-content-wrap-2">
                        <div class="service-icon-2">
                            <i class="dlicon design_compass"></i>
                        </div>
                        <div class="service-content-2">
                            <h3 class="title"><a href="service-details.html">Interior Design</a></h3>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some.</p>
                        </div>
                    </div>
                    <div class="service-content-wrap-2">
                        <div class="service-icon-2">
                            <i class="dlicon furniture_light"></i>
                        </div>
                        <div class="service-content-2">
                            <h3 class="title"><a href="service-details.html">Carpet Installation </a></h3>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some.</p>
                        </div>
                    </div>
                    <div class="service-content-wrap-2">
                        <div class="service-icon-2">
                            <i class="dlicon design_design"></i>
                        </div>
                        <div class="service-content-2">
                            <h3 class="title"><a href="service-details.html">Wall Mural Painting</a></h3>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some.</p>
                        </div>
                    </div>
                    <div class="service-content-wrap-2">
                        <div class="service-icon-2">
                            <i class="dlicon furniture_mixer"></i>
                        </div>
                        <div class="service-content-2">
                            <h3 class="title"><a href="service-details.html">Window Glass Replacement</a></h3>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Project area -->
<div class="section section-padding pt-0">
    <div class="container">
        <div class="section-title text-center mb-lg-9 mb-md-7 mb-5">
            <h2 class="title">Our <span> Projects</span></h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
        </div>
    </div>
    <div class="project-slider-active swiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="project-wrap">
                    <div class="project-inner">
                        <a class="img-zoom" href="assets/images/project/project-10.jpg')}}"><i class="dlicon arrows-1_zoom-88"></i></a>
                        <a class="thumbnail" href="project-details.html">
                            <img src="{{asset('theme/assets/images/project/project-10.jpg')}}" alt="Blog Image">
                        </a>
                        <div class="project-content">
                            <span class="category"><a href="#">Building</a></span>
                            <h3 class="title"><a href="project-details.html">Living Room Remodeling</a></h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="project-wrap">
                    <div class="project-inner">
                        <a class="img-zoom" href="assets/images/project/project-12.jpg')}}"><i class="dlicon arrows-1_zoom-88"></i></a>
                        <a class="thumbnail" href="project-details.html">
                            <img src="{{asset('theme/assets/images/project/project-12.jpg')}}" alt="Blog Image">
                        </a>
                        <div class="project-content">
                            <span class="category"><a href="#">Architecture</a></span>
                            <h3 class="title"><a href="project-details.html">Restaurant Interior Design</a></h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="project-wrap">
                    <div class="project-inner">
                        <a class="img-zoom" href="assets/images/project/project-11.jpg')}}"><i class="dlicon arrows-1_zoom-88"></i></a>
                        <a class="thumbnail" href="project-details.html">
                            <img src="{{asset('theme/assets/images/project/project-11.jpg')}}" alt="Blog Image">
                        </a>
                        <div class="project-content">
                            <span class="category"><a href="#">Interior</a></span>
                            <h3 class="title"><a href="project-details.html">Window Glass Replacement</a></h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="project-wrap">
                    <div class="project-inner">
                        <a class="img-zoom" href="assets/images/project/project-13.jpg')}}"><i class="dlicon arrows-1_zoom-88"></i></a>
                        <a class="thumbnail" href="project-details.html">
                            <img src="{{asset('theme/assets/images/project/project-13.jpg')}}" alt="Blog Image">
                        </a>
                        <div class="project-content">
                            <span class="category"><a href="#">Building</a></span>
                            <h3 class="title"><a href="project-details.html">Wall Mural Painting </a></h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="project-wrap">
                    <div class="project-inner">
                        <a class="img-zoom" href="assets/images/project/project-11.jpg')}}"><i class="dlicon arrows-1_zoom-88"></i></a>
                        <a class="thumbnail" href="project-details.html">
                            <img src="{{asset('theme/assets/images/project/project-11.jpg')}}" alt="Blog Image">
                        </a>
                        <div class="project-content">
                            <span class="category"><a href="#">Interior</a></span>
                            <h3 class="title"><a href="project-details.html">Living Room Interior Design</a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="project-slider-prev project-slider-nav"><i class="fa fa-angle-left"></i> PREV</div>
        <div class="project-slider-next project-slider-nav">NEXT <i class="fa fa-angle-right"></i></div>
    </div>
</div>
<!-- Design Conversion area -->
<div class="section section-padding pt-0">
    <div class="container">
        <div class="section-title text-center mb-lg-9 mb-md-7 mb-5">
            <h2 class="title">Interior Design <span> Conversion</span></h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
        </div>
        <div id="beforeandafteractive" class="beforeandafter image-width-height beforeandafter-style">
            <div class="before1">
                <img src="{{asset('theme/assets/images/banner/banner-4.jpg')}}" alt="Images">
                <span class="caption">BEFORE</span>
            </div>
            <div class="after1">
                <img src="{{asset('theme/assets/images/banner/banner-3.jpg')}}" alt="Images">
                <span class="caption">AFTER</span>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial area -->
<div class="section section-padding bg-img overly-style-1 opacity-point-7" style="background-image:url(assets/images/bg/bg-1.jpg)">
    <div class="container">
        <div class="section-title text-center mb-lg-9 mb-md-7 mb-5">
            <h2 class="title white">WHAT <span> CLIENTS</span> SAY?</h2>
            <p class="white">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
        </div>
        <div class="testimonial-active swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="single-testimonial-wrapper">
                        <div class="testimonial-img-title">
                            <div class="testimonial-img">
                                <img src="{{asset('theme/assets/images/testimonial/client-1.png')}}" alt="">
                            </div>
                            <div class="testimonial-title">
                                <h4>Emma Hayes</h4>
                                <span>Ui/UX Designer</span>
                            </div>
                        </div>
                        <p>There are many variations of passages of Lorem Ipsum available, the majority have suffered in some humou.</p>
                        <div class="quote">
                            <i class="fa fa-quote-left"></i>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="single-testimonial-wrapper">
                        <div class="testimonial-img-title">
                            <div class="testimonial-img">
                                <img src="{{asset('theme/assets/images/testimonial/client-2.png')}}" alt="">
                            </div>
                            <div class="testimonial-title">
                                <h4>Deborah Berry</h4>
                                <span>Web Developer</span>
                            </div>
                        </div>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy.</p>
                        <div class="quote">
                            <i class="fa fa-quote-left"></i>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="single-testimonial-wrapper">
                        <div class="testimonial-img-title">
                            <div class="testimonial-img">
                                <img src="{{asset('theme/assets/images/testimonial/client-3.png')}}" alt="">
                            </div>
                            <div class="testimonial-title">
                                <h4>Emma Hayes</h4>
                                <span>CEO & Founder</span>
                            </div>
                        </div>
                        <p>It is a long established fact that a reader will be distracted the readable content of a page when looking.</p>
                        <div class="quote">
                            <i class="fa fa-quote-left"></i>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="single-testimonial-wrapper">
                        <div class="testimonial-img-title">
                            <div class="testimonial-img">
                                <img src="{{asset('theme/assets/images/testimonial/client-2.png')}}" alt="">
                            </div>
                            <div class="testimonial-title">
                                <h4>Emma Hayes</h4>
                                <span>Ui/UX Designer</span>
                            </div>
                        </div>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy.</p>
                        <div class="quote">
                            <i class="fa fa-quote-left"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog area -->
<div class="section section-padding">
    <div class="container">
        <div class="section-title text-center mb-lg-9 mb-md-7 mb-5">
            <h2 class="title">Latest <span> News</span></h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
        </div>
        <div class="blog-active swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="blog-wrap">
                        <div class="blog-img mb-2">
                            <a href="blog-details.html"><img src="{{asset('theme/assets/images/blog/blog-1.jpg')}}" alt=""></a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <ul>
                                    <li>January 3, 2021 /</li>
                                    <li><a href="#">Interior</a></li>
                                </ul>
                            </div>
                            <h3><a href="blog-details.html">This blog provides interior design tips.</a></h3>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="blog-wrap">
                        <div class="blog-img mb-2">
                            <a href="blog-details.html"><img src="{{asset('theme/assets/images/blog/blog-9.jpg')}}" alt=""></a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <ul>
                                    <li>February 7, 2021 /</li>
                                    <li><a href="#">Building </a></li>
                                </ul>
                            </div>
                            <h3><a href="blog-details.html"> Focussed on designing new homes.</a></h3>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="blog-wrap">
                        <div class="blog-img mb-2">
                            <a href="blog-details.html"><img src="{{asset('theme/assets/images/blog/blog-3.jpg')}}" alt=""></a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <ul>
                                    <li>September 5, 2021 /</li>
                                    <li><a href="#">Architecture</a></li>
                                </ul>
                            </div>
                            <h3><a href="blog-details.html">Suggest way to decoration work place.</a></h3>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="blog-wrap">
                        <div class="blog-img mb-2">
                            <a href="blog-details.html"><img src="{{asset('theme/assets/images/blog/blog-8.jpg')}}" alt=""></a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <ul>
                                    <li>February 7, 2021 /</li>
                                    <li><a href="#">Building </a></li>
                                </ul>
                            </div>
                            <h3><a href="blog-details.html"> Focussed on designing new homes.</a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Brand Logo area -->
<div class="section section-padding pt-0">
    <div class="container">
        <div class="brand-logo-wrap brand-logo-active swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="brand-logo">
                        <a href="about-us.html"><img src="{{asset('theme/assets/images/brand-logo/brand-logo-1.png')}}" alt=""></a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="brand-logo">
                        <a href="about-us.html"><img src="{{asset('theme/assets/images/brand-logo/brand-logo-2.png')}}" alt=""></a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="brand-logo">
                        <a href="about-us.html"><img src="{{asset('theme/assets/images/brand-logo/brand-logo-3.png')}}" alt=""></a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="brand-logo">
                        <a href="about-us.html"><img src="{{asset('theme/assets/images/brand-logo/brand-logo-4.png')}}" alt=""></a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="brand-logo">
                        <a href="about-us.html"><img src="{{asset('theme/assets/images/brand-logo/brand-logo-5.png')}}" alt=""></a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="brand-logo">
                        <a href="about-us.html"><img src="{{asset('theme/assets/images/brand-logo/brand-logo-3.png')}}" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
