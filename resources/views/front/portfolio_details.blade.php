@extends('front.master')

@section('content')
 <!-- section begin -->
 <section id="section-welcome" class="full-height text-light" data-bgimage="url('{{url('/')}}/themes/23_images-interior-design/bg/1.jpg')">

    <div class="center-y">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="spacer-double"></div>
                    <h2 class="style-3" style="color: #f37920; text-shadow:1px 0px 0px #ffffff">Westside Towers Home Interiors</h2>
                    <div class="spacer-double"></div>
                </div>
            </div>
        </div>
    </div>


</section>
<!-- section close -->

<section id="section-gallery-carousel" aria-label="section" class="no-top no-bottom text-light bg-color">
    <div class="container-fluid position-relative">
        <div class="row align-items-center g-0">
            <div class="col-md-3 text-center">
                <div class="spacer-single"></div>
                <h3 class="no-bottom">Project Gallery</h3>
                <div class="spacer-single"></div>
            </div>

            <div class="col-md-9">
                <div class="owl-custom-nav nav-in-col">
                    <a class="btn-next"></a>
                    <a class="btn-prev"></a>
                </div>

                <div id="gallery-carousel-3" class="owl-carousel owl-theme owl-slide">

                <!-- gallery item -->
                <div class="item s2">
                    <div class="picframe">
                        <a class="image-popup-no-margins" href="{{url('/')}}/themes/23_images-interior-design/bg/pf1.jpg">
                            <span class="overlay-v">
                                <span class="pf_text">
                                    <span class="project-name"><i class="icon_plus_alt2"></i></span>
                                </span>
                            </span>
                            <img src="{{url('/')}}/themes/23_images-interior-design/bg/pf1.jpg" alt="" />
                        </a>
                    </div>
                </div>
                <!-- close gallery item -->

                <!-- gallery item -->
                <div class="item s2">
                    <div class="picframe">
                        <a class="image-popup-no-margins" href="{{url('/')}}/themes/23_images-interior-design/bg/pf2.jpg">
                            <span class="overlay-v">
                                <span class="pf_text">
                                    <span class="project-name"><i class="icon_plus_alt2"></i></span>
                                </span>
                            </span>
                            <img src="{{url('/')}}/themes/23_images-interior-design/bg/pf2.jpg" alt="" />
                        </a>
                    </div>
                </div>
                <!-- close gallery item -->

                <!-- gallery item -->
                <div class="item s2">
                    <div class="picframe">
                        <a class="image-popup-no-margins" href="{{url('/')}}/themes/23_images-interior-design/bg/pf3.jpg">
                            <span class="overlay-v">
                                <span class="pf_text">
                                    <span class="project-name"><i class="icon_plus_alt2"></i></span>
                                </span>
                            </span>
                            <img src="{{url('/')}}/themes/23_images-interior-design/bg/pf3.jpg" alt="" />
                        </a>
                    </div>
                </div>
                <!-- close gallery item -->

                <!-- gallery item -->
                <div class="item s2">
                    <div class="picframe">
                        <a class="image-popup-no-margins" href="{{url('/')}}/themes/23_images-interior-design/bg/pf4.jpg">
                            <span class="overlay-v">
                                <span class="pf_text">
                                    <span class="project-name"><i class="icon_plus_alt2"></i></span>
                                </span>
                            </span>
                            <img src="{{url('/')}}/themes/23_images-interior-design/bg/pf4.jpg" alt="" />
                        </a>
                    </div>
                </div>
                <!-- close gallery item -->

                <!-- gallery item -->
                <div class="item s2">
                    <div class="picframe">
                        <a class="image-popup-no-margins" href="{{url('/')}}/themes/23_images-interior-design/bg/pf5.jpg">
                            <span class="overlay-v">
                                <span class="pf_text">
                                    <span class="project-name"><i class="icon_plus_alt2"></i></span>
                                </span>
                            </span>
                            <img src="{{url('/')}}/themes/23_images-interior-design/bg/pf5.jpg" alt="" />
                        </a>
                    </div>
                </div>
                <!-- close gallery item -->

                <!-- gallery item -->
                <div class="item s2">
                    <div class="picframe">
                        <a class="image-popup-no-margins" href="{{url('/')}}/themes/23_images-interior-design/bg/pf6.jpg">
                            <span class="overlay-v">
                                <span class="pf_text">
                                    <span class="project-name"><i class="icon_plus_alt2"></i></span>
                                </span>
                            </span>
                            <img src="{{url('/')}}/themes/23_images-interior-design/bg/pf6.jpg" alt="" />
                        </a>
                    </div>
                </div>
                <!-- close gallery item -->
            </div>
        </div>
    </div>
</div>
</section>

<section>
    <div class="container">
        <div class="row">

            {{-- <div class="col-md-4 wow fadeInRight" data-wow-delay=".2s">
                    <h2 class="style-2 id-color">What Client Says</h2>
                    <h2>The design is <span class="id-color">awesome</span>, modern and minimalist! <span class="id-color">John Archi</span> is our best partner for our construction work.</h2>
                    <img src="{{asset('themes/images-architect/people/1.jpg')}}" class="img-circle mb10" alt=""><br>
                    <strong>Celine, Four Seasons Director</strong>
                </div> --}}

            <div class="col-md-6 wow fadeInRight" data-wow-delay=".4s">
                <h3>Project Brief</h3>
                <p>
                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
                </p>
                <div class="spacer10"></div>
                <h3>Our Solution</h3>
                <p>
                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
                </p>
            </div>

            <div class="col-md-6 wow fadeInRight" data-wow-delay=".6s">
                    <div class="project-details text-light" data-bgcolor="#18191B">

                        <h3>Project Details</h3>

                        <div class="info-text">
                            <span class="title">Date</span>
                            <span class="val">March 2019</span>
                        </div>

                        <div class="info-text">
                            <span class="title">Timeline</span>
                            <span class="val">1 year(s)</span>
                        </div>

                        <div class="info-text">
                            <span class="title">Client</span>
                            <span class="val">Four Seasons</span>
                        </div>

                        <div class="info-text">
                            <span class="title">Category</span>
                            <span class="val">News Construction</span>
                        </div>

                        <div class="info-text">
                            <a href="#" class="btn-custom btn-fullwidth text-light text-center">Next Project</a>
                        </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="call-to-action" class="call-to-action bg-color dark text-center" data-speed="5" data-type="background" aria-label="call-to-action" style="background-size: cover; background-position: 50% -192.6px;">
    <a href="{{url('/')}}/contact-us" class="btn btn-line black btn-big">Get Quotation</a>
</section>
@endsection
