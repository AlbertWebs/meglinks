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

    <section data-bgimage="url('{{asset('uploads/banners/Untitled.jpeg')}}')" class="text-light" data-stellar-background-ratio=".6">
        <div class="wm wow fadeIn">Meglink</div>
        <div class="container">


            <div class="row g-0 align-items-center wow fadeInUp" data-bgcolor="rgba(20,20,20,.8)">

                <div class="col-md-6 text-middle">
                    <div class="padding50">
                        <h3><span class="id-color">Interiors Before / After</span></h3>
                        <p>
                            Before: The space was characterized by outdated and worn-out furniture, faded wall paint, and limited natural light. The layout felt cramped and lacked cohesion, with mismatched decor and cluttered surfaces contributing to an overall sense of disarray. The room's potential was hidden behind its neglected appearance, leaving it devoid of comfort and style.
                            <br>
                            After: A stunning transformation took place, breathing new life into the interior. The room now exudes a sense of modern elegance and tranquility. The color palette incorporates soft neutrals and calming blues, reflecting light and creating an airy ambiance.
                        </p>
                        <div class="spacer10"></div>
                        <a style="border:solid #f37920" href="{{url('/')}}/our-portfolio/slung" class="btn-line-white selected">View Details</a>
                    </div>
                </div>

                <div class="col-md-6 text-middle">
                    <div class="twentytwenty-container">
                      <img style="min-height:400px" src="{{asset('uploads/before/1.jpg')}}" alt="" class="img-responsive" />
                      <img style="min-height:400px" src="{{asset('uploads/before/2.jpg')}}" alt="" class="img-responsive" />
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
                        We all desire that our homes, offices etc. should have a gorgeous and presentable look.
                        We all want that anybody who enters our house, office etc should appreciate its interiors and décor.
                        But that could only be possible if the interiors of our homes are designed in a manner which attracts appreciations and praises.<br><br>
                        Meglink Ventures is the best suited interior designer that stands out in both the local and international market.
                        Call us now and let us do the Magic for you! We are flexible and will make the delivery of products / services at your workplace / residence or your preferred location and at your convinience!
                    </p>
                    <div class="spacer-half"></div>
                    <a href="tel:+254 701 211 206" class="btn-line-white" style="border:2px solid #f37920; color:#f37920">Contact Us Now</a>
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

    <section id="section-testimonial" class="jarallax" data-bgimage="url('{{asset('themes/2.jpg')}}') fixed" aria-label="section">
        <div class="container">
            <div class="row">

                <div class="col-md-8 offset-md-2">

                    <div id="testimonial-carousel-single" class="owl-carousel owl-theme wow fadeInUp">
                        <blockquote class="testimonial-big text-white">
                            <span class="title">Through a blend of creative insight and practical expertise, we curate color schemes, select furnishings, and arrange layouts that optimize spatial flow and aesthetic harmony. We collaborate closely with clients, understanding their preferences and needs to craft personalized design solutions that breathe life into rooms while considering factors like lighting, materials, and textures. Our ultimate goal is to create spaces that not only reflect individuality but also enrich daily experiences by merging beauty with purpose in every corner and detail.</span>
                            <a href="{{url('/')}}/contact-us" class="btn-custom text-light wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">Get a Free Quote </a>
                        </blockquote>
                    </div>

                </div>

            </div>

        </div>
    </section>

    <section>
        <div class="container">
            <!-- portfolio filter begin -->
            <div class="row">
                <div class="col-lg-4 wow fadeInLeft" data-wow-delay=".3s">
                    <h2>Our Latest Projects</h2>
                    <p class="lead">In our portfolio, you will discover a diverse range of styles, from sleek and contemporary to warm and rustic, all carefully curated to reflect the individuality of our clients. Whether it's a cozy living room, a vibrant office space, or a luxurious bedroom, we strive to create environments that inspire, comfort, and delight.</p>

                    <p class="lead">In our portfolio, you will discover a diverse range of styles, from sleek and contemporary to warm and rustic, all carefully curated to reflect the individuality of our clients. Whether it's a cozy living room, a vibrant office space, or a luxurious bedroom, we strive to create environments that inspire, comfort, and delight.</p>
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
