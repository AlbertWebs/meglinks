        <?php
            $Services = DB::table('services')->get();
        ?>
        <footer class="style-3" aria-label="section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <h3>Meglink Ventures Limited</h3>
                        We all desire that our homes, offices etc. should have a gorgeous and presentable look. We all want that anybody who enters our house, office etc should appreciate its interiors and décor. But that could only be possible if the interiors of our homes are designed in a manner which attracts appreciations and praises.
                    </div>

                    <div class="col-lg-3">
                        <div class="widget widget_recent_post">
                            <h3>Latest News</h3>
                            <ul>
                                <li><a href="#">The Essentials Interior Design Tips</a></li>
                                <li><a href="#">Functional Wall-to-Wall Shelves</a></li>
                                <li><a href="#">9 Unique Ways to Display Your TV</a></li>
                                <li><a href="#">The 5 Secrets to Minimal Design</a></li>
                                <li><a href="#">Make a Huge Impact With Multiples</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="widget widget_recent_post">
                            <h3>Our Services</h3>
                            <ul>
                                @foreach ($Services as $services)
                                <li><a href="{{url('/')}}/center-of-excellence/{{$services->slung}}">{!!html_entity_decode($services->caption)!!}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <h3>Contact Us</h3>
                        <div class="widget widget-address">
                            <address>
                                <span>Riverside Gardens, Westlands Riverside - Nairobi - Kenya</span>
                                {{-- <span><strong>Phone:</strong>+254 701 211 206</span> --}}
                                <span><strong>Mobile:</strong>+254 701 211 206</span>
                                <span><strong>Email:</strong><a href="mailto:hello@meglinkventures.co.ke">hello@meglinkventures.co.ke</a></span>
                                <span><strong>Web:</strong><a href="#">http://meglinkventures.co.ke</a></span>
                            </address>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row align-items-middle">
                    <div class="col-md-3">
                        <img width="80" src="{{asset('uploads/fav.png')}}" class="logo-small" alt=""><br>
                    </div>

                    <div class="col-md-6 text-center">
                        &copy; Copyright {{date('Y')}} - <span class="id-color">Meglink Ventures Limited</span> All Rights Reserved
                        {{-- | Powered By <span class="id-color">Designekta Studios</span> --}}
                    </div>

                    <div class="col-md-3 text-right">
                        <div class="social-icons">
                            <a href="#"><i class="fa fa-facebook fa-lg"></i></a>
                            <a href="#"><i class="fa fa-twitter fa-lg"></i></a>
                            <a href="#"><i class="fa fa-pinterest fa-lg"></i></a>
                            <a href="#"><i class="fa fa-google-plus fa-lg"></i></a>
                            <a href="#"><i class="fa fa-instagram fa-lg"></i></a>
                        </div>
                    </div>
                </div>
            </div>


            <a href="#" id="back-to-top"></a>
        </footer>
