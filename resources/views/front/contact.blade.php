@extends('front.master')

@section('content')
     <!-- subheader -->
     <section id="subheader" data-speed="8" data-type="background">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    {{-- <h1>Request Quotation</h1> --}}
                    <h1>Contact Us</h1>
                    <ul class="crumb">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li class="sep">/</li>
                        <li>Contact</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- subheader close -->

    <!-- content begin -->
    <div id="content">

        <div class="container">
            <div class="row">

                <div class="col-md-8 offset-md-2">
                    <form name="contactForm" id='contact_form' method="post">
                        <div id="step-1" class="row">
                            {{-- <div class="col-md-12 mb30">
                                <h4><i class="fa fa-home id-color"></i>What is your property type?</h4>

                                <div class="de_form de_radio">
                                    <div class="radio-img">
                                        <input id="radio-1a" name="Property_Type" type="radio" value="Residential" checked="checked">
                                        <label for="radio-1a"><img src="{{asset('themes/images/select-form/1.jpg')}}">Residential</label>
                                    </div>

                                    <div class="radio-img">
                                        <input id="radio-1b" name="Property_Type" type="radio" value="Office">
                                        <label for="radio-1b"><img src="{{asset('themes/images/select-form/2.jpg')}}">Office</label>
                                    </div>

                                    <div class="radio-img">
                                        <input id="radio-1c" name="Property_Type" type="radio" value="Commercial">
                                        <label for="radio-1c"><img src="{{asset('themes/images/select-form/3.jpg')}}">Commercial</label>
                                    </div>

                                    <div class="radio-img">
                                        <input id="radio-1d" name="Property_Type" type="radio" value="Retail">
                                        <label for="radio-1d"><img src="{{asset('themes/images/select-form/4.jpg')}}">Retail</label>
                                    </div>

                                    <div class="radio-img">
                                        <input id="radio-1e" name="Property_Type" type="radio" value="Other">
                                        <label for="radio-1e"><img src="{{asset('themes/images/select-form/5.jpg')}}">Other</label>
                                    </div>
                                </div>
                            </div> --}}

                            {{-- <div class="col-md-6 mb10">
                                <h4><i class="fa fa-arrows-alt id-color"></i>Total area size you want to renovate</h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type='text' name='Area Size' id='area-size' class="form-control" placeholder="Area Size" required>
                                    </div>

                                    <div class="col-md-6">
                                        <select name="Unit Size" id="unit_size" value="" class="form-control">
                                          <option value="sqft">Square Feet(sqft)</option>
                                          <option value="m">meter(m)</option>
                                          <option value="ft">Feet(ft)</option>
                                        </select>
                                    </div>
                                </div>
                            </div> --}}

                            {{-- <div class="col-md-6 mb10">
                                <h4><i class="fa fa-tag id-color"></i>Select a renovation budget</h4>
                                <div class="row">
                                    <div class="col-md-12">
                                        <select name="Budget" id="budget" value="" class="form-control">

                                          <option value="Mid Range">Mid Range</option>
                                          <option value="High End">High End</option>
                                        </select>
                                    </div>
                                </div>

                            </div> --}}

                        </div>

                        <div id="step-2" class="row">
                            <h4><i class="fa fa-user id-color"></i>Enter your details</h4>

                            <div class="col-md-6">
                                <div id='name_error' class='error'>Please enter your name.</div>
                                <div>
                                    <input type='text' name='Name' id='name' class="form-control" placeholder="Your Name" required>
                                </div>

                                <div id='email_error' class='error'>Please enter your valid E-mail ID.</div>
                                <div>
                                    <input type='email' name='Email' id='email' class="form-control" placeholder="Your Email" required>
                                </div>

                                <div id='phone_error' class='error'>Please enter your phone number.</div>
                                <div>
                                    <input type='text' name='phone' id='phone' class="form-control" placeholder="Your Phone" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div id='message_error' class='error'>Please enter your message.</div>
                                <div>
                                    <textarea name='message' id='message' class="form-control" placeholder="Your Message"></textarea>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="g-recaptcha" data-sitekey="6LdW03QgAAAAAJko8aINFd1eJUdHlpvT4vNKakj6"></div>
                                <p id='submit' class="mt20">
                                    <input type='submit' id='send_message' value='Send Request' class="btn btn-line">
                                </p>
                            </div>
                        </div>
                    </form>

                    <div id="success_message" class='success'>
                        Your message has been sent successfully. Refresh this page if you want to send more messages.
                    </div>
                    <div id="error_message" class='error'>
                        Sorry there was an error sending your form.
                    </div>

                </div>

            </div>

        </div>
    </div>
    <div id="de-map" class="no-top" aria-label="map-container">
        <div class="map-container map-fullwidth">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15955.390149341692!2d36.803843!3d-1.2639531!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f171550f35839%3A0xf75d6f20df03463e!2sMeglink%20Ventures!5e0!3m2!1sen!2ske!4v1693396164755!5m2!1sen!2ske" width="600" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
    </div>
@endsection
