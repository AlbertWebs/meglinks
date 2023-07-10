@extends('front.master')

@section('content')
 <!-- breadcrumb area -->
 <div class="breadcrumb-area breadcrumb-padding bg-img" style="background-image:url('{{asset('theme/assets/images/bg/bg-2.jpg')}}')">
    <div class="container">
        <div class="breadcrumb-content text-center">
            <h2>Contact Us</h2>
            <ul>
                <li><a href="{{url('/')}}/">Home</a></li>
                <li><i class="fa fa-angle-right"></i></li>
                <li>Contact Us</li>
            </ul>
        </div>
    </div>
</div>
<!-- Project area -->
<div class="section section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-6">
                <div class="contact-info-wrap">
                    <div class="single-contact-info-wrap">
                        <div class="info-icon">
                            <i class="dlicon ui-1_home-51"></i>
                        </div>
                        <div class="info-content">
                            <h3 class="title">Address</h3>
                            <p class="width">Riverside Gardens, Westlands Riverside - Nairobi - Kenya</p>
                        </div>
                    </div>
                    <div class="single-contact-info-wrap">
                        <div class="info-icon">
                            <i class="dlicon ui-2_phone"></i>
                        </div>
                        <div class="info-content">
                            <h3 class="title">Phone</h3>
                            <p> Mobile: <span>(+254) 701 211 206</span></p>
                            <p> Hotline: <span>(+254) 721 211206</span></p>
                        </div>
                    </div>
                    <div class="single-contact-info-wrap">
                        <div class="info-icon">
                            <i class="dlicon ui-1_email-85"></i>
                        </div>
                        <div class="info-content">
                            <h3 class="title">Email</h3>
                            <p>Info@meglinkventures.co.ke</p>
                            <p>hello@meglinkventures.co.ke</p>
                        </div>
                    </div>
                    <div class="single-contact-info-wrap">
                        <div class="info-icon">
                            <i class="dlicon ui-2_share"></i>
                        </div>
                        <div class="info-content">
                            <h3 class="title">We are Social</h3>
                            <div class="social-icon-style mt-4">
                                <a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
                                <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                                <a class="instagram" href="#"><i class="fa fa-instagram"></i></a>
                                <a class="google-plus" href="#"><i class="fa fa-google-plus"></i></a>
                                <a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                                <a class="instagram" href="#"><i class="fa fa-pinterest"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-md-6">
                <div class="contact-from-wrap">
                    <form id="contact-form" action="https://whizthemes.com/mail-php/tasnim/mail.php" method="post">
                        <input name="name" type="text" placeholder="Name">
                        <input name="email" type="email" placeholder="Email">
                        <input name="subject" type="text" placeholder="Subject">
                        <textarea name="message" placeholder="Your message"></textarea>
                        <input class="submit" type="submit" value="Send Message">
                    </form>
                    <p class="form-messege"></p>
                </div>
            </div>
        </div>
        <div class="map mt-6 mt-md-12">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15955.390149341692!2d36.803843!3d-1.2639531!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f171550f35839%3A0xf75d6f20df03463e!2sMeglink%20Ventures!5e0!3m2!1sen!2ske!4v1688978909737!5m2!1sen!2ske"></iframe>
        </div>
    </div>
</div>
<!-- Footer area -->
@endsection
