@extends('front.master')

@section('content')
 <!-- breadcrumb area -->
 <div class="breadcrumb-area breadcrumb-padding bg-img" style="background-image:url('{{asset('theme/assets/images/bg/bg-2.jpg')}}')">
    <div class="container">
        <div class="breadcrumb-content text-center">
            <h2>Our Work</h2>
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
        <div class="project-menu-style project-menu-active isotope-btn-add-active mb-6">
            <button class="active btn-project" data-filter="*">All</button>
            <button class="btn-project" data-filter=".cat1">Interior Design</button>
            <button class="btn-project" data-filter=".cat2">Architecture</button>
            <button class="btn-project" data-filter=".cat3">Design</button>
            <button class="btn-project" data-filter=".cat4">Building</button>
        </div>
        <div class="row row-cols-lg-2 row-cols-md-2 row-cols-sm-2 row-cols-1 mb-n6 grid">
            <div class="col mb-6 grid-item cat2 cat4">
                <div class="project-wrap">
                    <div class="project-inner">
                        <a class="thumbnail" href="{{url('/')}}/our-portfolio/slung">
                            <img src="{{asset('theme/assets/images/project/project-1.jpg')}}" alt="Blog Image">
                        </a>
                        <div class="project-content">
                            <span class="category"><a href="#">Building</a></span>
                            <h3 class="title"><a href="{{url('/')}}/our-portfolio/slung">Living Room Interior Design</a></h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-6 grid-item cat1">
                <div class="project-wrap">
                    <div class="project-inner">
                        <a class="thumbnail" href="{{url('/')}}/our-portfolio/slung">
                            <img src="{{asset('theme/assets/images/project/project-16.jpg')}}" alt="Blog Image">
                        </a>
                        <div class="project-content">
                            <span class="category"><a href="#">Interior</a></span>
                            <h3 class="title"><a href="{{url('/')}}/our-portfolio/slung">Restaurant Interior Design</a></h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-6 grid-item cat4">
                <div class="project-wrap">
                    <div class="project-inner">
                        <a class="thumbnail" href="{{url('/')}}/our-portfolio/slung">
                            <img src="{{asset('theme/assets/images/project/project-17.jpg')}}" alt="Blog Image">
                        </a>
                        <div class="project-content">
                            <span class="category"><a href="#">Architecture</a></span>
                            <h3 class="title"><a href="{{url('/')}}/our-portfolio/slung">Living Room Remodeling</a></h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-6 grid-item cat3 cat1">
                <div class="project-wrap">
                    <div class="project-inner">
                        <a class="thumbnail" href="{{url('/')}}/our-portfolio/slung">
                            <img src="{{asset('theme/assets/images/project/project-3.jpg')}}" alt="Blog Image">
                        </a>
                        <div class="project-content">
                            <span class="category"><a href="#">Building</a></span>
                            <h3 class="title"><a href="{{url('/')}}/our-portfolio/slung">Bathroom Redesign</a></h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-6 grid-item cat1 cat3">
                <div class="project-wrap">
                    <div class="project-inner">
                        <a class="thumbnail" href="{{url('/')}}/our-portfolio/slung">
                            <img src="{{asset('theme/assets/images/project/project-5.jpg')}}" alt="Blog Image">
                        </a>
                        <div class="project-content">
                            <span class="category"><a href="#">Architecture</a></span>
                            <h3 class="title"><a href="{{url('/')}}/our-portfolio/slung">Wall Mural Painting</a></h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-6 grid-item cat2 cat4">
                <div class="project-wrap">
                    <div class="project-inner">
                        <a class="thumbnail" href="{{url('/')}}/our-portfolio/slung">
                            <img src="{{asset('theme/assets/images/project/project-7.jpg')}}" alt="Blog Image">
                        </a>
                        <div class="project-content">
                            <span class="category"><a href="#">Interior</a></span>
                            <h3 class="title"><a href="{{url('/')}}/our-portfolio/slung">Window Glass Replacement</a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
