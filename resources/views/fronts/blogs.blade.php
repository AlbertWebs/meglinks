@extends('front.master')

@section('content')
@foreach ($Blog as $blog)


 <!-- breadcrumb area -->
 <div class="breadcrumb-area breadcrumb-padding bg-img" style="background-image:url('{{asset('theme/assets/images/bg/bg-2.jpg')}}')">
    <div class="container">
        <div class="breadcrumb-content text-center">
            <h2>{{$blog->title}}</h2>
            <p style="color:#ffffff; font-size:25px; max-width:700px; margin:0 auto; padding-bottom:50px;">
                {{$blog->meta}}
            </p>
            {{-- <ul>
                <li><a href="{{url('/')}}/">Home</a></li>
                <li><i class="fa fa-angle-right"></i></li>
                <li>Contact Us</li>
            </ul> --}}
        </div>
    </div>
</div>
<div class="section section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="blog-details-wrap">
                    <div class="blog-details-img mb-4 mb-md-6">
                        <img src="assets/images/blog/blog-details-1.jpg" alt="">
                    </div>
                    <div class="blog-details-meta">
                        <ul>
                            <li>{{ date('M d, Y', strtotime($blog->created_at)) }} /</li>
                            <li>Interior</li>
                        </ul>
                    </div>
                    <h1 class="title">This blog provides interior design tips.</h1>
                    {!!html_entity_decode($blog->content)!!}
                    <div class="blog-details-middle-img-wrap">
                        <div class="row row-cols-lg-2">
                            <div class="col">
                                <div class="blog-details-middle-img">
                                    <img src="assets/images/blog/blog-details-2.jpg" alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="blog-details-middle-img">
                                    <img src="assets/images/blog/blog-details-3.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut lab et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitatio ullamco laboris nisi ut aliquip ex ea commodo conse Duis aute irure dolor in reprehenderit in voluptate velit esse cillumlt dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa quiq officia deserunt mollit anim id est laborum. </p>
                    <div class="tag-share">
                        <div class="blog-details-tag">
                            <span>Tags:</span>
                            <ul>
                                <li><a href="#">Interior</a>,</li>
                                <li><a href="#">Building </a>,</li>
                                <li><a href="#">Architecture</a></li>
                            </ul>
                        </div>
                        <div class="social-icon-style">
                            <a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
                            <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                            <a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                            <a class="instagram" href="#"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="blog-next-previous-post">
                        <?php
                            $Previous = $blog->id-1;
                        ?>
                        @if($Previous == 0)
                        <div class="blog-prev-post-wrap">
                            <div class="blog-prev-post-icon">
                                <a href="{{url('/')}}/blogs/{{$blog->slung}}"><i class="fa fa-angle-left"></i> Previous</a>
                            </div>
                            <h3 class="title"><a href="#"> {{$blog->title}}</a></h3>
                        </div>
                        @else
                        <?php
                           $PreviousFetch = DB::table('blogs')->where('id',$Previous)->get();
                        ?>
                        @foreach ($PreviousFetch as $prev)
                        <div class="blog-prev-post-wrap">
                            <div class="blog-prev-post-icon">
                                <a href="{{url('/')}}/blogs/{{$prev->slung}}"><i class="fa fa-angle-left"></i> Previous</a>
                            </div>
                            <h3 class="title"><a href="{{url('/')}}/blogs/{{$prev->slung}}"> {{$prev->title}}</a></h3>
                        </div>
                        @endforeach

                        @endif

                        <?php
                            $Next = $blog->id+1;
                        ?>
                        <?php
                            $NextFetch = DB::table('blogs')->where('id',$Next)->get();
                        ?>
                        @if($NextFetch->isEmpty())
                        <div class="blog-next-post-wrap">
                            <div class="blog-next-post-icon">
                                <a href="#">Next <i class="fa fa-angle-right"></i> </a>
                            </div>
                            <h3 class="title"><a href="#">{{$blog->title}}</a></h3>
                        </div>
                        @else

                        {{--  --}}
                        @foreach ($NextFetch as $next)
                        <div class="blog-next-post-wrap">
                            <div class="blog-next-post-icon">
                                <a href="{{url('/')}}/blogs/{{$next->slung}}"> Next <i class="fa fa-angle-right"></i></a>
                            </div>
                            <h3 class="title"><a href="{{url('/')}}/blogs/{{$next->slung}}"> {{$next->title}}</a></h3>
                        </div>
                        @endforeach
                        {{--  --}}
                        @endif

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection
