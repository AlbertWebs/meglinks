@extends('front.master')

@section('content')
 <!-- breadcrumb area -->
 <div class="breadcrumb-area breadcrumb-padding bg-img" style="background-image:url('{{asset('theme/assets/images/bg/bg-2.jpg')}}')">
    <div class="container">
        <div class="breadcrumb-content text-center">
            <h2>Our Work Single</h2>
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
    <div class="container">
        <div class="project-details-wrap">
            <div class="project-details-img mb-5 mb-md-9">
                <img src="{{asset('theme/assets/images/project/project-details-1.jpg')}}" alt="Project Image">
            </div>
            <div class="row">
                <div class="col-lg-9 col-md-8">
                    <div class="project-details-content mb-4 mb-md-9">
                        <span class="category">Interior Design</span>
                        <h1 class="title">Living Room Interior Design</h1>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        <p>There are many variations of passages of Lorem Ipsum available, but majority have suffered alteration in some form, by injected humour, or randomised words which don't going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="project-details-info">
                        <ul>
                            <li><span>Name: </span>Client Name</li>
                            <li><span>Email: </span>info@example.com</li>
                            <li><span>Release: </span>April 2023</li>
                            <li><span>URL: </span><a href="#">https://www.pace.com</a></li>
                            <li><span>Address: </span>3571 Riverside Downs</li>
                        </ul>
                    </div>
                    <div class="social-icon-style mb-5">
                        <a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
                        <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                        <a class="google-plus" href="#"><i class="fa fa-google-plus"></i></a>
                        <a class="behance" href="#"><i class="fa fa-behance"></i></a>
                    </div>
                </div>
            </div>
            {{-- <div class="row row-cols-lg-3 row-cols-md-3 row-cols-sm-3 row-cols-1 mb-n6">
                <div class="col mb-6">
                    <div class="project-details-img">
                        <img src="{{asset('theme/assets/images/project/project-details-2.jpg')}}" alt="Project Image">
                    </div>
                </div>
                <div class="col mb-6">
                    <div class="project-details-img">
                        <img src="{{asset('theme/assets/images/project/project-details-3.jpg')}}" alt="Project Image">
                    </div>
                </div>
                <div class="col mb-6">
                    <div class="project-details-img">
                        <img src="{{asset('theme/assets/images/project/project-details-4.jpg')}}" alt="Project Image">
                    </div>
                </div>
            </div> --}}
            {{--  --}}
            <div class="project-slider-actives swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="project-wrap">
                            <div class="project-inner">
                                <a class="img-zoom" href="{{asset('theme/assets/images/project/project-10.jpg')}}"><i class="dlicon arrows-1_zoom-88"></i></a>
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
                                <a class="img-zoom" href="{{asset('theme/assets/images/project/project-11.jpg')}}"><i class="dlicon arrows-1_zoom-88"></i></a>
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
                                <a class="img-zoom" href="{{asset('theme/assets/images/project/project-12.jpg')}}"><i class="dlicon arrows-1_zoom-88"></i></a>
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
                                <a class="img-zoom" href="{{asset('theme/assets/images/project/project-13.jpg')}}"><i class="dlicon arrows-1_zoom-88"></i></a>
                                <a class="thumbnail" href="project-details.html">
                                    <img src="{{asset('theme/assets/images/project/project-13.jpg')}}" alt="Blog Image">
                                </a>
                                <div class="project-content">
                                    <span class="category"><a href="#">Building</a></span>
                                    <h3 class="title"><a href="project-details.html">Wall Mural Painting</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="project-wrap">
                            <div class="project-inner">
                                <a class="img-zoom" href="{{asset('theme/assets/images/project/project-11.jpg')}}"><i class="dlicon arrows-1_zoom-88"></i></a>
                                <a class="thumbnail" href="project-details.html">
                                    <img src="{{asset('theme/assets/images/project/project-11.jpg')}}" alt="Blog Image">
                                </a>
                                <div class="project-content">
                                    <span class="category"><a href="#">Architecture</a></span>
                                    <h3 class="title"><a href="project-details.html"> Living Room Interior Design</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="project-slider-prev project-slider-nav"><i class="fa fa-angle-left"></i> PREV</div>
                <div class="project-slider-next project-slider-nav">NEXT <i class="fa fa-angle-right"></i></div>
            </div>
            {{--  --}}
        </div>
    </div>
</div>
@endsection
