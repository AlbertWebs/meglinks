<nav class="md-flex">
									<ul id="mainmenu" class="dotted-separator">
										<li><a href="{{url('/')}}">Home<span></span></a>

										</li>

                                        <li>
                                            <a href="{{url('/')}}/#section-about">About Us<span></span></a>

										</li>

                                        <?php
                                        $Services = DB::table('services')->get();
                                        ?>
                                        {{-- <li><a href="#">Center Of Excellence</a>
                                            <ul class="sub-menu-style">
                                                @foreach ($Services as $services)
                                                <li><a href="{{url('/')}}/center-of-excellence/{{$services->slung}}">{!!html_entity_decode($services->caption)!!}</a></li>
                                                @endforeach
                                                <li><a href="{{url('/')}}/meglink-homes"><span class="fa fa-home"></span> Meglink Homes</a></li>
                                            </ul>
                                        </li> --}}
                                        <?php
                                        $Services = DB::table('solutions')->get();
                                        ?>
                                        <li><a href="#">Center Of Excellence</a>
                                            <ul class="sub-menu-style">
                                                @foreach ($Services as $services)
                                                <li><a href="{{url('/')}}/solutions/{{$services->slung}}">{!!html_entity_decode($services->title)!!}</a></li>
                                                @endforeach
                                                {{-- <li><a href="{{url('/')}}/meglink-homes"><span class="fa fa-home"></span> Meglink Homes</a></li> --}}
                                            </ul>
                                        </li>
                                        <li><a href="{{url('/')}}/our-portfolio">Portfolio</a>

										</li>

                                        {{-- <li><a href="{{url('/')}}/latest-news">Laterst News</a>

                                        </li> --}}

										<li><a href="{{url('/contact-us')}}">Contact</a>

										</li>
									</ul>
								</nav>
