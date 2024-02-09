@extends('front.master')

@section('content')
 <!-- section begin -->
 <!-- subheader -->
 <section id="subheader" data-speed="8" data-type="background">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                {{-- <h1>Request Quotation</h1> --}}
                <h1>Who We Are</h1>
                <ul class="crumb">
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li class="sep">/</li>
                    <li>About us</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- subheader close -->

<section id="section-no-bg" >
    <div class="container" id="section-about">
    <div class="row align-items-center">
            <div class="col-md-5 wow fadeInRight" data-wow-delay=".2s">
                <h2>About Us </h2>
                <p class="lead">
                    {{--  --}}
                    At Meglink Ventures, we don't just design spaces; we create living experiences. With a deep-rooted passion for transforming interiors, our dedicated team of interior design consultants and contractors is your trusted partner in crafting spaces that reflect your unique vision and lifestyle.
                    <br><br>
                    Specializing in Kitchen Fittings, Wardrobes, Door Fittings, Gypsum Works, Paint Works, and Office Partitioning,
                    Our expertise spans a diverse range of interior solutions. From the heart of the home to the heart of your workspace, we seamlessly blend innovation and functionality to breathe life into every project.<br><br>
                    With an unwavering commitment to quality, creativity, and customer satisfaction, Meglink Ventures is where dreams meet reality. We take pride in turning your concepts into captivating designs and your spaces into inspiring environments.<br><br>

                    Discover the art of interior transformation with Meglink Ventures, where every detail matters, and every project is a masterpiece in the making. Your vision, our expertise - together, we redefine the essence of interior design

                    {{--  --}}
                </p>
                <div class="spacer-half"></div>
                <a href="tel:+254 701 211 206" class="btn-line-white" style="border:2px solid #f37920; color:#f37920">Contact Us Now</a>
            </div>
            <div class="col-lg-6 col-6" data-wow-delay=".4s">
                {{-- <div class="spacer-double sm-hide"></div> --}}
                <img src="{{asset('uploads/pexels-vecislavas-popa.jpg')}}" alt="" class="img-responsive wow fadeInUp" data-wow-duration="1s">
            </div>


        </div>
    </div>
</section>
<!-- section close -->
<section id="section-agent" data-bgcolor="#edf7f1">
    <div class="wm wow fadeInDown">MD</div>
    <div class="container">
        <div class="row g-5">
            <div class="clearfix"></div>

            <div class="col-lg-5 offset-lg-1 mt-50 mb-sm-30 text-center wow fadeInUp">
                <img class="img-fluid" src="{{asset('themes/oile.jpeg')}}" alt="" />
            </div>

            <div class="col-lg-5 wow fadeInLeft" data-wow-delay=".5s" >
                <h3 class="mb-2">Onyango Oile</h3>
                <i>Lead Consultant</i>
                <div class="spacer-half"></div>
                <p>
                    Onyango Oile is an accomplished interior design consultant known for their innovative approach to transforming spaces.
                    <br><br>
                    With a keen eye for aesthetics and a deep understanding of design principles, Onyango Oile brings a unique blend of creativity and functionality to every project.
                    <br><br>
                     Their ability to harmonize colors, textures, and furnishings creates captivating interiors that reflect individual personalities and enhance the overall ambiance of any space. With a commitment to excellence and a passion for creating beautiful, functional environment.
                </p>

                {{-- <a href="#" class="de-icon-cap">
                    <i class="fa id-color fa-phone"></i>
                    <h5>0737211206</h5>
                </a>
                <a href="#" class="de-icon-cap">
                    <i class="fa id-color fa-envelope-o"></i>
                    <h5>oile@meglinkventures.co.ke</h5>
                </a> --}}

                <div class="spacer-single"></div>

                {{-- <a href="tel:0737211206" class="btn-custom text-light">Call Now</a> --}}
            </div>
        </div>
    </div>
</section>

<section id="team">
    <div class="container">
        <div class="row" style="margin:0 auto">

            <div class="col-md-12" style="margin:0 auto">
                <div class="row" style="margin:0 auto">
                    <div class="col-md-12 container-4 wow fadeInUp">
                            <!-- team member -->
                            <div class="de-team-list">
                                <div class="team-pic">
                                    <img src="{{asset('themes/molly.jpeg')}}" class="img-responsive" alt="" />
                                </div>
                                <div class="team-desc">
                                    <h3>Molly Mugure</h3>
                                    <p class="lead">Administrator | PA</p>
                                    <div class="small-border"></div>
                                    <p>I am a diligent office administrator for Meglink Ventures, I call myself the backbone of our organizational efficiency and a friendly face to all who enter our workspace.</p>

                                    <div class="social">
                                        <a href="#"><i class="fa fa-facebook fa-lg"></i></a>
                                        <a href="#"><i class="fa fa-twitter fa-lg"></i></a>
                                        <a href="#"><i class="fa fa-google-plus fa-lg"></i></a>
                                        <a href="#"><i class="fa fa-skype fa-lg"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- team close -->

                            <!-- team member -->
                            <div class="de-team-list">
                                <div class="team-pic">
                                    <img src="{{asset('themes/violet.jpeg')}}" class="img-responsive" alt="" />
                                </div>
                                <div class="team-desc">
                                    <h3>Violet Musau</h3>
                                    <p class="lead">Creative Director</p>
                                    <div class="small-border"></div>
                                    <p>
                                        I combine artistic flair with strategic vision to craft compelling and innovative solutions that resonate with our clients and their target audiences.
                                    </p>

                                    <div class="social">
                                        <a href="#"><i class="fa fa-facebook fa-lg"></i></a>
                                        <a href="#"><i class="fa fa-twitter fa-lg"></i></a>
                                        <a href="#"><i class="fa fa-google-plus fa-lg"></i></a>
                                        <a href="#"><i class="fa fa-skype fa-lg"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- team close -->

                            <!-- team member -->
                            <div class="de-team-list">
                                <div class="team-pic">
                                    <img src="{{asset('themes/adrian.jpeg')}}" class="img-responsive" alt="" />
                                </div>
                                <div class="team-desc">
                                    <h3>Adrian Miaz</h3>
                                    <p class="lead">Visualization Expert</p>
                                    <div class="small-border"></div>
                                    <p>
                                        I am the 3D & Visualization expert at Meglink Ventures Limited, brings digital dreams to life with his unparalleled talent and attention to detail.
                                    </p>
                                    <div class="social">
                                        <a href="#"><i class="fa fa-facebook fa-lg"></i></a>
                                        <a href="#"><i class="fa fa-twitter fa-lg"></i></a>
                                        <a href="#"><i class="fa fa-google-plus fa-lg"></i></a>
                                        <a href="#"><i class="fa fa-skype fa-lg"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- team close -->
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="section-how-it-works" data-bgimage="url('{{asset('themes/images-interior-landing/bg/2.jpg')}}') fixed center" data-stellar-background-ratio=".2">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-5 wow fadeInRight" data-wow-delay=".2s">
                <h2 class="style-2"><span class="id-color">Our Expertise, Your Success</span></h2><br>
                <h2 style="color:#ffffff">Uniting Forces for Excellence</h2>
                <p class="lead btn-line-white" style="color:#ffffff">
                    At Meglink Ventures Limited, our team is the driving force behind our success. Comprised of dedicated professionals from diverse backgrounds, we are united by a common purpose: to deliver exceptional solutions and unparalleled service to our clients.

                    Our team is not just a collection of individuals; we are a close-knit family. We foster a collaborative and inclusive environment where every member's unique skills and perspectives are valued. This diversity of thought fuels our creativity and drives innovation, allowing us to stay at the forefront of our industry.
                </p>
                <div class="spacer-half"></div>
                <a href="#" class="btn-line-white">Contact Us Now</a>
            </div>
            <div class="col-md-6 offset-md-1 wow fadeInLeft" data-wow-delay=".4s">
                {{-- <figure class="picframe invert transparent shadow-soft rounded">
                        <span class="v-center">
                            <span>
                                <a id="play-video" class="video-play-button popup-youtube" href="https://www.youtube.com/watch?v=CmCIZ_aUAeQ">
                                    <span></span>
                                </a>
                            </span>
                        </span>
                    <img src="{{asset('themes/images-interior-landing/misc/1.jpg')}}" class="img-fullwidth" alt="">
                </figure> --}}
            </div>
        </div>
    </div>
</section>


<section id="call-to-action" class="call-to-action bg-color dark text-center" data-speed="5" data-type="background" aria-label="call-to-action" style="background-size: cover; background-position: 50% -192.6px;">
    <a href="{{url('/')}}/contact-us" class="btn btn-line black btn-big">Get Quotation</a>
</section>
@endsection
