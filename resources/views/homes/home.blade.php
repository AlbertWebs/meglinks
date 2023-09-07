@extends('homes.master')

@section('content')
<div class="ltn__utilize-overlay"></div>

<!-- BREADCRUMB AREA START -->
<div class="ltn__breadcrumb-area text-left bg-overlay-white-30 bg-image mb-0"  data-bs-bg="img/bg/14.jpg')}}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__breadcrumb-inner">
                    <h1 class="page-title">Property details</h1>
                    <div class="ltn__breadcrumb-list">
                        <ul>
                            <li><a href="index.html"><span class="ltn__secondary-color"><i class="fas fa-home"></i></span> Home</a></li>
                            <li>Property details</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BREADCRUMB AREA END -->

<!-- IMAGE SLIDER AREA START (img-slider-3) -->
<div class="ltn__img-slider-area mb-90">
    <div class="container-fluid">
        <div class="row ltn__image-slider-5-active slick-arrow-1 slick-arrow-1-inner ltn__no-gutter-all">
            <div class="col-lg-12">
                <div class="ltn__img-slide-item-4">
                    <a href="{{asset('realestate/img/img-slide/31.jpg')}}" data-rel="lightcase:myCollection">
                        <img src="{{asset('realestate/img/img-slide/31.jpg')}}" alt="Image">
                    </a>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="ltn__img-slide-item-4">
                    <a href="{{asset('realestate/img/img-slide/32.jpg')}}" data-rel="lightcase:myCollection">
                        <img src="{{asset('realestate/img/img-slide/32.jpg')}}" alt="Image">
                    </a>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="ltn__img-slide-item-4">
                    <a href="{{asset('realestate/img/img-slide/33.jpg')}}" data-rel="lightcase:myCollection">
                        <img src="{{asset('realestate/img/img-slide/33.jpg')}}" alt="Image">
                    </a>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="ltn__img-slide-item-4">
                    <a href="{{asset('realestate/img/img-slide/34.jpg')}}" data-rel="lightcase:myCollection">
                        <img src="{{asset('realestate/img/img-slide/34.jpg')}}" alt="Image">
                    </a>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="ltn__img-slide-item-4">
                    <a href="{{asset('realestate/img/img-slide/35.jpg')}}" data-rel="lightcase:myCollection">
                        <img src="{{asset('realestate/img/img-slide/35.jpg')}}" alt="Image">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- IMAGE SLIDER AREA END -->

<!-- SHOP DETAILS AREA START -->
<div class="ltn__shop-details-area pb-10">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="ltn__shop-details-inner ltn__page-details-inner mb-60">
                    <div class="ltn__blog-meta">
                        <ul>
                            <li class="ltn__blog-category" style="color:#ffffff !important">
                                <a href="tel:+254 701 211 206"><i style="color:#ffffff !important" class="fa fa-phone"></i>Call Us</a>
                            </li>
                            <li class="ltn__blog-category">
                                <a href="#">Featured</a>
                            </li>
                            <li class="ltn__blog-category">
                                <a class="bg-orange" href="#">For Rent</a>
                            </li>
                            <li class="ltn__blog-date">
                                <i class="far fa-calendar-alt"></i>May 19, 2021
                            </li>
                            <li>
                                <a href="#"><i class="far fa-comments"></i>35 Comments</a>
                            </li>
                        </ul>
                    </div>
                    <h1>Diamond Manor Apartment</h1>
                    <label><span class="ltn__secondary-color"><i class="flaticon-pin"></i></span>Riverside Gardens, Westlands Riverside - Nairobi - Kenya</label>
                    <h4 class="title-2">Description</h4>
                    <p>Massa tempor nec feugiat nisl pretium. Egestas fringilla phasellus faucibus scelerisque eleifend donec
                        Porta nibh venenatis cras sed felis eget velit aliquet. Neque volutpat ac tincidunt vitae semper
                        quis lectus. Turpis in eu mi bibendum neque egestas congue quisque. Sed elementum tempus egestas
                        sed sed risus pretium quam. Dignissim sodales ut eu sem. Nibh mauris cursus mattis molestee
                        iaculis at erat pellentesque. Id interdum velit laoreet id donec ultrices tincidunt.</p>
                    <p>To the left is the modern kitchen with central island, leading through to the unique breakfast family room which feature glass walls and doors out onto the garden and access to the separate utility room.</p>

                    <h4 class="title-2">Property Detail</h4>
                    <div class="property-detail-info-list section-bg-1 clearfix mb-60">
                        <ul>
                            <li><label>Property ID:</label> <span>HZ29</span></li>
                            <li><label>Home Area: </label> <span>120 sqft</span></li>
                            <li><label>Rooms:</label> <span>7</span></li>
                            <li><label>Baths:</label> <span>2</span></li>
                            <li><label>Year built:</label> <span>1992</span></li>
                        </ul>
                        <ul>
                            <li><label>Lot Area:</label> <span>HZ29 </span></li>
                            <li><label>Lot dimensions:</label> <span>120 sqft</span></li>
                            <li><label>Beds:</label> <span>7</span></li>
                            <li><label>Price:</label> <span>2</span></li>
                            <li><label>Property Status:</label> <span>For Sale</span></li>
                        </ul>
                    </div>

                    <h4 class="title-2">Facts and Features</h4>
                    <div class="property-detail-feature-list clearfix mb-45">
                        <ul>
                            <li>
                                <div class="property-detail-feature-list-item">
                                    <i class="flaticon-double-bed"></i>
                                    <div>
                                        <h6>Living Room</h6>
                                        <small>20 x 16 sq feet</small>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="property-detail-feature-list-item">
                                    <i class="flaticon-double-bed"></i>
                                    <div>
                                        <h6>Garage</h6>
                                        <small>20 x 16 sq feet</small>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="property-detail-feature-list-item">
                                    <i class="flaticon-double-bed"></i>
                                    <div>
                                        <h6>Dining Area</h6>
                                        <small>20 x 16 sq feet</small>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="property-detail-feature-list-item">
                                    <i class="flaticon-double-bed"></i>
                                    <div>
                                        <h6>Bedroom</h6>
                                        <small>20 x 16 sq feet</small>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="property-detail-feature-list-item">
                                    <i class="flaticon-double-bed"></i>
                                    <div>
                                        <h6>Bathroom</h6>
                                        <small>20 x 16 sq feet</small>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="property-detail-feature-list-item">
                                    <i class="flaticon-double-bed"></i>
                                    <div>
                                        <h6>Gym Area</h6>
                                        <small>20 x 16 sq feet</small>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="property-detail-feature-list-item">
                                    <i class="flaticon-double-bed"></i>
                                    <div>
                                        <h6>Garden</h6>
                                        <small>20 x 16 sq feet</small>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="property-detail-feature-list-item">
                                    <i class="flaticon-double-bed"></i>
                                    <div>
                                        <h6>Parking</h6>
                                        <small>20 x 16 sq feet</small>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <h4 class="title-2">From Our Gallery</h4>
                    <div class="ltn__property-details-gallery mb-30">
                        <div class="row">
                            <div class="col-md-6">
                                <a href="{{asset('realestate/img/others/14.jpg')}}" data-rel="lightcase:myCollection">
                                    <img class="mb-30" src="{{asset('realestate/img/others/14.jpg')}}" alt="Image">
                                </a>
                                <a href="{{asset('realestate/img/others/15.jpg')}}" data-rel="lightcase:myCollection">
                                    <img class="mb-30" src="{{asset('realestate/img/others/15.jpg')}}" alt="Image">
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="{{asset('realestate/img/others/16.jpg')}}" data-rel="lightcase:myCollection">
                                    <img class="mb-30" src="{{asset('realestate/img/others/16.jpg')}}" alt="Image">
                                </a>
                            </div>
                        </div>
                    </div>

                    <h4 class="title-2 mb-10">Amenities</h4>
                    <div class="property-details-amenities mb-60">
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <div class="ltn__menu-widget">
                                    <ul>
                                        <li>
                                            <label class="checkbox-item">Air Conditioning
                                                <input type="checkbox" checked="checked">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="checkbox-item">Gym
                                                <input type="checkbox" checked="checked">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="checkbox-item">Microwave
                                                <input type="checkbox" checked="checked">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="checkbox-item">Swimming Pool
                                                <input type="checkbox" checked="checked">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="checkbox-item">WiFi
                                                <input type="checkbox" checked="checked">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="ltn__menu-widget">
                                    <ul>
                                        <li>
                                            <label class="checkbox-item">Barbeque
                                                <input type="checkbox" checked="checked">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="checkbox-item">Recreation
                                                <input type="checkbox" checked="checked">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="checkbox-item">Microwave
                                                <input type="checkbox" checked="checked">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="checkbox-item">Basketball Cout
                                                <input type="checkbox" checked="checked">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="checkbox-item">Fireplace
                                                <input type="checkbox" checked="checked">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="ltn__menu-widget">
                                    <ul>
                                        <li>
                                            <label class="checkbox-item">Refrigerator
                                                <input type="checkbox" checked="checked">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="checkbox-item">Window Coverings
                                                <input type="checkbox" checked="checked">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="checkbox-item">Washer
                                                <input type="checkbox" checked="checked">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="checkbox-item">24x7 Security
                                                <input type="checkbox" checked="checked">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="checkbox-item">Indoor Game
                                                <input type="checkbox" checked="checked">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h4 class="title-2">Location</h4>
                    <div class="property-details-google-map mb-60">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9334.271551495209!2d-73.97198251485975!3d40.668170674982946!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25b0456b5a2e7%3A0x68bdf865dda0b669!2sBrooklyn%20Botanic%20Garden%20Shop!5e0!3m2!1sen!2sbd!4v1590597267201!5m2!1sen!2sbd" width="100%" height="100%" frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>

                    <h4 class="title-2">Floor Plans</h4>
                    <!-- APARTMENTS PLAN AREA START -->
                    <div class="ltn__apartments-plan-area product-details-apartments-plan mb-60">
                        <div class="ltn__tab-menu ltn__tab-menu-3 ltn__tab-menu-top-right-- text-uppercase--- text-center---">
                            <div class="nav">
                                <a data-bs-toggle="tab" href="#liton_tab_3_1">First Floor</a>
                                <a class="active show"  data-bs-toggle="tab" href="#liton_tab_3_2" class="">Second Floor</a>
                                <a data-bs-toggle="tab" href="#liton_tab_3_3" class="">Third Floor</a>
                                <a data-bs-toggle="tab" href="#liton_tab_3_4" class="">Top Garden</a>
                            </div>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane fade" id="liton_tab_3_1">
                                <div class="ltn__apartments-tab-content-inner">
                                    <div class="row">
                                        <div class="col-lg-7">
                                            <div class="apartments-plan-img">
                                                <img src="{{asset('realestate/img/others/10.png')}}" alt="#">
                                            </div>
                                        </div>
                                        <div class="col-lg-5">
                                            <div class="apartments-plan-info ltn__secondary-bg--- text-color-white---">
                                                <h2>First Floor</h2>
                                                <p>Enimad minim veniam quis nostrud exercitation ullamco laboris.
                                                    Lorem ipsum dolor sit amet cons aetetur adipisicing elit sedo
                                                    eiusmod tempor.Incididunt labore et dolore magna aliqua.
                                                    sed ayd minim veniam.</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="product-details-apartments-info-list  section-bg-1">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="apartments-info-list apartments-info-list-color mt-40---">
                                                            <ul>
                                                                <li><label>Total Area</label> <span>2800 Sq. Ft</span></li>
                                                                <li><label>Bedroom</label> <span>150 Sq. Ft</span></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="apartments-info-list apartments-info-list-color mt-40---">
                                                            <ul>
                                                                <li><label>Belcony/Pets</label> <span>Allowed</span></li>
                                                                <li><label>Lounge</label> <span>650 Sq. Ft</span></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade active show" id="liton_tab_3_2">
                                <div class="ltn__product-tab-content-inner">
                                    <div class="row">
                                        <div class="col-lg-7">
                                            <div class="apartments-plan-img">
                                                <img src="{{asset('realestate/img/others/10.png')}}" alt="#">
                                            </div>
                                        </div>
                                        <div class="col-lg-5">
                                            <div class="apartments-plan-info ltn__secondary-bg--- text-color-white---">
                                                <h2>Second Floor</h2>
                                                <p>Enimad minim veniam quis nostrud exercitation ullamco laboris.
                                                    Lorem ipsum dolor sit amet cons aetetur adipisicing elit sedo
                                                    eiusmod tempor.Incididunt labore et dolore magna aliqua.
                                                    sed ayd minim veniam.</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="product-details-apartments-info-list  section-bg-1">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="apartments-info-list apartments-info-list-color mt-40---">
                                                            <ul>
                                                                <li><label>Total Area</label> <span>2800 Sq. Ft</span></li>
                                                                <li><label>Bedroom</label> <span>150 Sq. Ft</span></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="apartments-info-list apartments-info-list-color mt-40---">
                                                            <ul>
                                                                <li><label>Belcony/Pets</label> <span>Allowed</span></li>
                                                                <li><label>Lounge</label> <span>650 Sq. Ft</span></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="liton_tab_3_3">
                                <div class="ltn__product-tab-content-inner">
                                    <div class="row">
                                        <div class="col-lg-7">
                                            <div class="apartments-plan-img">
                                                <img src="{{asset('realestate/img/others/10.png')}}" alt="#">
                                            </div>
                                        </div>
                                        <div class="col-lg-5">
                                            <div class="apartments-plan-info ltn__secondary-bg--- text-color-white---">
                                                <h2>Third Floor</h2>
                                                <p>Enimad minim veniam quis nostrud exercitation ullamco laboris.
                                                    Lorem ipsum dolor sit amet cons aetetur adipisicing elit sedo
                                                    eiusmod tempor.Incididunt labore et dolore magna aliqua.
                                                    sed ayd minim veniam.</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="product-details-apartments-info-list  section-bg-1">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="apartments-info-list apartments-info-list-color mt-40---">
                                                            <ul>
                                                                <li><label>Total Area</label> <span>2800 Sq. Ft</span></li>
                                                                <li><label>Bedroom</label> <span>150 Sq. Ft</span></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="apartments-info-list apartments-info-list-color mt-40---">
                                                            <ul>
                                                                <li><label>Belcony/Pets</label> <span>Allowed</span></li>
                                                                <li><label>Lounge</label> <span>650 Sq. Ft</span></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="liton_tab_3_4">
                                <div class="ltn__product-tab-content-inner">
                                    <div class="row">
                                        <div class="col-lg-7">
                                            <div class="apartments-plan-img">
                                                <img src="{{asset('realestate/img/others/10.png')}}" alt="#">
                                            </div>
                                        </div>
                                        <div class="col-lg-5">
                                            <div class="apartments-plan-info ltn__secondary-bg--- text-color-white---">
                                                <h2>Top Garden</h2>
                                                <p>Enimad minim veniam quis nostrud exercitation ullamco laboris.
                                                    Lorem ipsum dolor sit amet cons aetetur adipisicing elit sedo
                                                    eiusmod tempor.Incididunt labore et dolore magna aliqua.
                                                    sed ayd minim veniam.</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="product-details-apartments-info-list  section-bg-1">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="apartments-info-list apartments-info-list-color mt-40---">
                                                            <ul>
                                                                <li><label>Total Area</label> <span>2800 Sq. Ft</span></li>
                                                                <li><label>Bedroom</label> <span>150 Sq. Ft</span></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="apartments-info-list apartments-info-list-color mt-40---">
                                                            <ul>
                                                                <li><label>Belcony/Pets</label> <span>Allowed</span></li>
                                                                <li><label>Lounge</label> <span>650 Sq. Ft</span></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- APARTMENTS PLAN AREA END -->

                    <h4 class="title-2">Property Video</h4>
                    <div class="ltn__video-bg-img ltn__video-popup-height-500 bg-overlay-black-50 bg-image mb-60" data-bs-bg="img/others/5.jpg')}}">
                        <a class="ltn__video-icon-2 ltn__video-icon-2-border---" href="https://www.youtube.com/embed/eWUxqVFBq74?autoplay=1&amp;showinfo=0" data-rel="lightcase:myCollection">
                            <i class="fa fa-play"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- SHOP DETAILS AREA END -->


@endsection
