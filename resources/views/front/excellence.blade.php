@extends('front.master')

@section('content')
 <!-- breadcrumb area -->
 <div class="breadcrumb-area breadcrumb-padding bg-img" style="background-image:url('{{asset('theme/assets/images/bg/bg-2.jpg')}}')">
    <div class="container">
        <div class="breadcrumb-content text-center">
            <h2>Center of Excellence</h2>
            <p style="color:#ffffff; font-size:25px; max-width:700px; margin:0 auto; padding-bottom:50px;">
                We are flexible and will make the delivery of products / services at your workplace / residence or your preferred location and at your convinience!
            </p>
            {{-- <ul>
                <li><a href="{{url('/')}}/">Home</a></li>
                <li><i class="fa fa-angle-right"></i></li>
                <li>Contact Us</li>
            </ul> --}}
        </div>
    </div>
</div>
<div class="section section-padding">
    <div class="container service-section">
        <div class="row row-cols-lg-2 row-cols-1 mb-n6">
            <div class="col align-self-center mb-6">
                <div class="about-content">
                    <h2 class="title">Interior <span>Design</span></h2>
                    <p>We are passionate, knowing that people live, work, play and inhabit the spaces and places we imagine and envision for our clients. To those wanting to make an impact with design.</p>
                    <p>We are passionate, knowing that people live, work, play and inhabit the spaces and places we imagine and envision for our clients. To those wanting to make an impact with design.</p>
                    <p>We are passionate, knowing that people live, work, play and inhabit the spaces and places we imagine and envision for our clients. To those wanting to make an impact with design.</p>
                    <p>We are passionate, knowing that people live, work, play and inhabit the spaces and places we imagine and envision for our clients. To those wanting to make an impact with design.</p>
                    <p>We are passionate, knowing that people live, work, play and inhabit the spaces and places we imagine and envision for our clients. To those wanting to make an impact with design.</p>

                </div>

                <a href="about-us.html" class="btn btn-dark btn-hover-primary">LEARN MORE</a>
            </div>
            <div class="col mb-6">
                <div class="service-banner">
                    <img src="{{url('/')}}/theme/assets/images/project/project-12.jpg" alt="banner">
                </div>
            </div>
        </div>
    </div>
    {{--  --}}
    <div class="section video-banner">
        <div class="banner-content">
            <video preload="none" loop="loop" poster="{{asset('theme/assets/images/bg/bg-3.jpg')}}">
                <source src="{{asset('theme/assets/video/video.mp4')}}" type="video/mp4">
            </video>
            <div class="status play-pause-style">
                <i class="fa fa-play"></i>
            </div>
        </div>
    </div>
    {{--  --}}

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
