@extends('front.master')

@section('content')

<!-- subheader -->
<section id="subheader" data-speed="8" data-type="background">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Projects</h1>
                <ul class="crumb">
                    <li><a href="index.html">Home</a></li>
                    <li class="sep">/</li>
                    <li>Projects</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- subheader close -->

   <!-- section begin -->
   <section id="section-welcome-14" class="no-top no-bottom">

    <div class="container-fluid">


        <div class="row align-items-center g-0 wow fadeInUp" data-bgcolor="rgba(255,255,255)">

            <div class="col-md-6 text-middle" >
                <div class="padding50">
                    <h3><span class="id-color">Bedroom Renovation</span></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p> <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p> <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                    <a href="{{url('/')}}/our-portfolio/slung" class="btn-line">View Details</a>
                </div>
            </div>

            <div class="col-md-6 text-middle">
                <div class="twentytwenty-container">
                  <img src="{{asset('themes/images/before-after/1b.jpg')}}" alt="" class="img-responsive" />
                  <img src="{{asset('themes/images/before-after/1a.jpg')}}" alt="" class="img-responsive" />
                </div>
            </div>

        </div>

        <div class="row align-items-center g-0 wow fadeInUp" data-bgcolor="rgba(255,255,255)">

            <div class="col-md-6 text-middle">
                <div class="twentytwenty-container">
                  <img src="{{asset('themes/images/before-after/2b.jpg')}}" alt="" class="img-responsive" />
                  <img src="{{asset('themes/images/before-after/2a.jpg')}}" alt="" class="img-responsive" />
                </div>
            </div>

            <div class="col-md-6 text-middle">
                <div class="padding50">
                    <h3><span class="id-color">Living Room Makeover</span></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p> <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p> <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                    <a href="{{url('/')}}/our-portfolio/slung" class="btn-line">View Details</a>
                </div>
            </div>

        </div>


        <div class="row align-items-center g-0 wow fadeInUp" data-bgcolor="rgba(255,255,255)">

            <div class="col-md-6 text-middle">
                <div class="padding50">
                    <h3><span class="id-color">Restaurant Re-design</span></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p> <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p> <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                    <a href="{{url('/')}}/our-portfolio/slung" class="btn-line">View Details</a>
                </div>
            </div>

            <div class="col-md-6 text-middle">
                <div class="twentytwenty-container">
                  <img src="{{asset('themes/images/before-after/3b.jpg')}}" alt="" class="img-responsive" />
                  <img src="{{asset('themes/images/before-after/3a.jpg')}}" alt="" class="img-responsive" />
                </div>
            </div>

        </div>

    </div>


</section>
<!-- section close -->
<section id="call-to-action" class="call-to-action bg-color dark text-center" data-speed="5" data-type="background" aria-label="call-to-action" style="background-size: cover; background-position: 50% -192.6px;">
    <a href="contact.html" class="btn btn-line black btn-big">Get Quotation</a>
</section>
@endsection
