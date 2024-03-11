@extends('front.master-one')

@section('content')

<!-- content begin -->
<div id="content" class="no-bottom no-top">

    {{-- <section id="section-hero" class="jarallax text-light full-height" data-speed="5" data-type="background" aria-label="section">
               <img style="min-height:100% !important" src="{{asset('uploads/banners/37.jpg')}}" class="jarallax-img" alt="">
        <div class="container">
                <div class="row">
                    <div class="spacer-double"></div>
                    <div class="spacer-double"></div>
                    <div class="spacer-double"></div>
                    <div class="col-lg-12 mb-sm-30" >

                        <h1 class="ultra-big" style="text-shadow: 0px 1px 0px  #000000 !important; color:#f37920 !important; text-align:center">
                            Meglink Ventures Limited
                        </h1>
                    </div>

                </div>
            </div>
            <a href="#section-about" class="scroll-to">
                <span class="mouse">
                     <span class="scroll"></span>
                </span>
            </a>
    </section> --}}
    <!-- section close -->

    <section id="section-welcome" class="full-height" data-bgimage="url('{{asset('themes/images/background/bg-4.jpg')}}')" data-stellar-background-ratio=".2">

        <div class="center-y text-center">

            <div class="spacer-single"></div>

            <h1 class="ultra-big" style="text-shadow: 0px 1px 0px  #000000 !important; color:#f37920 !important; text-align:center">
                Meglink Ventures <br> Limited
            </h1>

            <div class="spacer-double"></div>
            <div class="spacer-double"></div>
        </div>

        <a href="#section-about" class="scroll-to">
            <span class="mouse">
                 <span class="scroll"></span>
            </span>
        </a>
    </section>

    <section id="section-text">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-12 wow fadeInRight" data-wow-delay=".2s">
                    <div class="de_count ultra-big s2 text-center">
                        <h3 style="color:#f37920" class="timer" data-to="15" data-speed="2000">0</h3>
                        <span class="text-dark text-uppercase">Years of Experience</span>
                    </div>
                </div>
                <div class="col-lg-4 p-lg-5  mb-sm-30 wow fadeInRight" data-wow-delay=".4s">
                    <h2>Crafting Timeless Designs to Inspire and Enrich Your Life</h2>
                </div>

                <div class="col-lg-4 wow fadeInRight" data-wow-delay=".6s">
                    <p style="font-size: 17px;">
                        We believe that a well-designed space has the power to inspire, uplift, and enhance the way we live and work. At our studio, we are passionate about creating captivating interiors that not only reflect your personal style but also optimize functionality and comfort.
                    </p>
                </div>
            </div>
        </div>

    </section>

    <section id="section-services" class="no-top no-bottom" style="background-size: cover;">
        <div class="container-fluid" style="background-size: cover;">
          <div class="row" style="background-size: cover;">
            <div class="col-md-12 wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp; background-size: cover;">
              <div class="carousel-4-center-dots owl-carousel owl-theme owl-loaded owl-drag" style="background-size: cover;">
                <div class="owl-stage-outer" style="background-size: cover;">
                  <div class="owl-stage" style="transition: all 0.25s ease 0s; width: 5422px; transform: translate3d(-1355px, 0px, 0px); background-size: cover;">
                    @foreach($Solutions as $solutions)
                        <div class="owl-item cloned" style="width: 357.25px; margin-right: 30px; background-size: cover; min-height:362px">
                        <div class="d_custom-box jarallax item text-middle text-light" style="background-size: cover; position: relative; z-index: 0; min-height:362px" data-jarallax-original-styles="background-size: cover;">
                            <div class="padding40 overlay60" style="background-size: cover; min-height:362px">
                            <h3>{{$solutions->title}}</h3>
                            <p>
                                {!!html_entity_decode($solutions->content)!!}
                            </p>
                            <a href="{{url('/')}}/solutions/{{$solutions->slung}}" class="btn-line btn-fullwidth">Read More</a>
                            </div>
                            <div id="jarallax-container-1" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; overflow: hidden; z-index: -100; clip-path: polygon(0px 0px, 100% 0px, 100% 100%, 0px 100%);">
                            <img class="jarallax-img" src="{{url('/')}}/uploads/solutions/{{$solutions->image}}" style="object-fit: cover; object-position: 50% 50%; max-width: none; position: absolute; top: 0px; left: 0px; width: 357.25px; height: 354.8px; overflow: hidden; pointer-events: none; transform-style: preserve-3d; backface-visibility: hidden; will-change: transform, opacity; margin-top: 10.1px;">
                            </div>
                        </div>
                        </div>
                    @endforeach
                  </div>
                </div>
                <br><br>
              </div>
            </div>
          </div>
        </div>
      </section>

    <section data-bgimage="url('{{asset('uploads/banners/Untitled.jpeg')}}')" class="text-light" data-stellar-background-ratio=".6">
        <div class="wm wow fadeIn">Meglink</div>
        <div class="container">
            <div class="row g-0 align-items-center wow fadeInUp" data-bgcolor="rgba(20,20,20,.8)">
                <div class="col-md-10 text-middle" style="margin:0 auto">
                    <div class="padding50" style="text-align:center">
                        <h3><span class="id-color">Professional Team</span></h3>
                        <p>
                            Our team is more than a group of professionals; we're a close-knit family driven by a shared love for design and
                            a desire to create spaces that resonate with our clients. We bring a diverse range of skills, perspectives, and experiences to the table, making us a formidable force in the world of interior design.
                            From designers to project managers, we collaborate seamlessly to turn your dreams into reality.
                        </p>
                        <div class="spacer10"></div>
                        <a style="border:solid #f37920" href="{{url('/')}}/our-team#team" class="btn-line-white selected">Meet Our Team</a>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section id="section-no-bg" >
        <div class="container" id="section-about">
        <div class="row align-items-center">
                <div class="col-md-5 wow fadeInRight" data-wow-delay=".2s">
                    <h2>Expericence Elegance Beyond </h2>
                    <p class="lead">
                        We all desire that our homes, offices etc. should have a gorgeous and presentable look.<br><br>
                        We all want that anybody who enters our house, office etc should appreciate its interiors and décor.
                        But that could only be possible if the interiors of our homes are designed in a manner which attracts appreciations and praises.<br><br>
                        Meglink Ventures is the best suited interior designer that stands out in both the local and international market.
                        Call us now and let us do the magic for you. We are flexible and will make the delivery of products / services at your workplace / residence or your preferred location and at your convinience.
                    </p>
                    <div class="spacer-half"></div>
                    <a href="{{url('/')}}/our-team" class="btn-line-white" style="border:2px solid #f37920; color:#f37920">Explore</a>
                </div>
                <div class="col-lg-3 col-6" data-wow-delay=".4s">
                    <div class="spacer-double sm-hide"></div>
                    <img src="{{asset('themes/images-hotel/misc/1.jpg')}}" alt="" class="img-responsive wow fadeInUp" data-wow-duration="1s">
                </div>

                <div class="col-lg-3 col-6" data-wow-delay=".4s">
                    <img src="{{asset('themes/images-hotel/misc/2.jpg')}}" alt="" class="img-responsive wow fadeInUp" data-wow-duration="1.5s">
                </div>
            </div>
        </div>
    </section>

    <section id="section-how-it-works" data-bgimage="url('{{asset('themes/images-interior-landing/bg/2-modified.jpg')}}') fixed center" data-stellar-background-ratio=".2">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-5 wow fadeInRight" data-wow-delay=".2s">
                    <h2 class="style-2"><span class="id-color">Our Expertise, Your Success</span></h2><br>
                    <h2 style="color:#ffffff">Uniting Forces for Excellence</h2>
                    <p class="lead btn-line-white" style="color:#ffffff">
                        At Meglink Ventures Limited, our team is the driving force behind our success. Comprised of dedicated professionals from diverse backgrounds, we are united by a common purpose: to deliver exceptional solutions and unparalleled service to our clients.
                        <br><br>
                        Our team is not just a collection of individuals; we are a close-knit family. We foster a collaborative and inclusive environment where every member's unique skills and perspectives are valued. This diversity of thought fuels our creativity and drives innovation, allowing us to stay at the forefront of our industry.
                    </p>
                    <div class="spacer-half"></div>
                    <a href="{{url('/')}}/our-portfolio" class="btn-line-white">Our Portfolios</a>
                </div>
                <div class="col-md-6 offset-md-1 wow fadeInLeft" data-wow-delay=".4s">
                    <figure class="picframe invert transparent shadow-soft rounded">
                            <span class="v-center">
                                <span>
                                    <a id="play-video" class="video-play-button popup-youtube" href="https://www.youtube.com/watch?v=CmCIZ_aUAeQ">
                                        <span></span>
                                    </a>
                                </span>
                            </span>
                        <img src="{{asset('themes/images-interior-landing/bg/door-2.jpg')}}" class="img-fullwidth" alt="">
                    </figure>
                </div>
            </div>
        </div>
    </section>

    {{-- <section id="section-testimonial" class="jarallax" data-bgimage="url('{{asset('themes/2.jpg')}}') fixed" aria-label="section">
        <div class="container">
            <div class="row">

                <div class="col-md-8 offset-md-2">

                    <div id="testimonial-carousel-single" class="owl-carousel owl-theme wow fadeInUp">
                        <blockquote class="testimonial-big text-white">
                            <span class="title">Through a blend of creative insight and practical expertise, we curate color schemes, select furnishings, and arrange layouts that optimize spatial flow and aesthetic harmony. We collaborate closely with clients, understanding their preferences and needs to craft personalized design solutions that breathe life into rooms while considering factors like lighting, materials, and textures. Our ultimate goal is to create spaces that not only reflect individuality but also enrich daily experiences by merging beauty with purpose in every corner and detail.</span>
                            <a href="{{url('/')}}/contact-us" class="btn-custom text-light wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;"> Quote </a>
                        </blockquote>
                    </div>

                </div>

            </div>

        </div>
    </section> --}}

    <section>
        <div class="container">
            <!-- portfolio filter begin -->
            <div class="row">
                <div class="col-lg-4 wow fadeInLeft" data-wow-delay=".3s">
                    <h2>Our Latest Projects</h2>
                    <p class="lead">
                        In our portfolio, you will discover a diverse range of styles, from sleek and contemporary to warm and rustic, all carefully curated to reflect the individuality of our clients.

                    </p>

                    <p class="lead">
                        Our expertise spans a diverse range of interior solutions. From the heart of the home to the heart of your workspace, we seamlessly blend innovation and functionality to breathe life into every project.
                        With an unwavering commitment to quality, creativity, and customer satisfaction, Meglink Ventures is where dreams meet reality.
                        <br><br>
                        We take pride in turning your concepts into captivating designs and your spaces into inspiring environments.

                        Discover the art of interior transformation with Meglink Ventures, where every detail matters, and every project is a masterpiece in the making.

                    </p>
                </div>

                <div class="col-lg-8 wow fadeInLeft">
                    <div id="gallery" class="row g-4 dcg-container" data-wow-delay=".3s">

                        <!-- gallery item -->
                        <div class="col-lg-6 col-md-6 col-xs-12 item residential">
                            <div class="dcg-two dcg-item">
                                <a class="dcg-url simple-ajax-popup-align-top" href="{{url('/')}}/project-details"></a>
                                <img style="min-height:277px" class="dcg-image" src="{{asset('uploads/banners/45.jpg')}}" alt="" />
                                <div class="dcg-title">Eco Green Interior</div>
                                <div class="dcg-text">click to view</div>
                                <div class="dcg-line"></div>
                                <div class="dcg-overlay"></div>
                            </div>
                        </div>
                        <!-- close gallery item -->

                        <!-- gallery item -->
                        <div class="col-lg-6 col-md-6 col-xs-12 item residential">
                            <div class="dcg-two dcg-item">
                                <a class="dcg-url simple-ajax-popup-align-top" href="{{url('/')}}/project-details"></a>
                                <img style="min-height:277px" class="dcg-image" src="{{asset('uploads/banners/3.jpg')}}" alt="" />
                                <div class="dcg-title">Modern Elegance Suite</div>
                                <div class="dcg-text">click to view</div>
                                <div class="dcg-line"></div>
                                <div class="dcg-overlay"></div>
                            </div>
                        </div>
                        <!-- close gallery item -->

                        <!-- gallery item -->
                        <div class="col-lg-6 col-md-6 col-xs-12 item hospitaly">
                            <div class="dcg-two dcg-item">
                                <a class="dcg-url simple-ajax-popup-align-top" href="{{url('/')}}/project-details"></a>
                                <img style="min-height:277px" class="dcg-image" src="{{asset('uploads/banners/9.jpg')}}" alt="" />
                                <div class="dcg-title">Apartment Renovation</div>
                                <div class="dcg-text">click to view</div>
                                <div class="dcg-line"></div>
                                <div class="dcg-overlay"></div>
                            </div>
                        </div>
                        <!-- close gallery item -->

                        <!-- gallery item -->
                        <div class="col-lg-6 col-md-6 col-xs-12 item hospitaly">
                            <div class="dcg-two dcg-item">
                                <a class="dcg-url simple-ajax-popup-align-top" href="{{url('/')}}/project-details"></a>
                                <img style="min-height:277px" class="dcg-image" src="{{asset('uploads/banners/32.jpg')}}" alt="" />
                                <div class="dcg-title">Sample Title</div>
                                <div class="dcg-text">click to view</div>
                                <div class="dcg-line"></div>
                                <div class="dcg-overlay"></div>
                            </div>
                        </div>
                        <!-- close gallery item -->

                    </div>
                </div>
            </div>
            <!-- portfolio filter close -->
        </div>
    </section>

</div>

@endsection
