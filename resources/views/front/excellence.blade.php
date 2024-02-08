@extends('front.master')

@section('content')
@foreach ($Service as $service)
  <!-- subheader -->
<section id="subheader" data-speed="8" data-type="background">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>{{$service->caption}}</h1>
                <ul class="crumb">
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li class="sep">/</li>
                    <li><a href="#">Services</a></li>
                    <li class="sep">/</li>
                    <li>{!!html_entity_decode($service->title)!!}</li>
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
            <div id="sidebar" class="col-md-3 wow fadeInUp">
                <ul id="services-list">
                    <?php
                        $Other = DB::table('services')->get()
                    ?>
                    {{-- @foreach ($Other as $other)
                    @if($other->id == $service->id)
                    <li class="active"><a href="{{url('/')}}/center-of-excellence/{{$other->slung}}">{{$other->caption}}</a></li>
                    @else
                    <li><a href="{{url('/')}}/center-of-excellence/{{$other->slung}}">{{$other->caption}}</a></li>
                    @endif
                    @endforeach --}}

                    @foreach ($Other as $other)
                    @if($other->id == $service->id)
                    <li class="active"><a href="{{url('/')}}/center-of-excellence/{{$other->slung}}">{{$other->caption}}</a></li>
                    @else
                    <li><a href="{{url('/')}}/center-of-excellence/{{$other->slung}}">{{$other->caption}}</a></li>
                    @endif
                    @endforeach
                </ul>
            </div>

            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-6 wow fadeInUp" data-wow-delay=".3s">
                        <p>
                            {!!html_entity_decode($service->content)!!}
                        </p>
                    </div>
                    <div class="col-md-6 pic-services wow fadeInUp" data-wow-delay=".6s">
                        <img src="{{asset('themes/images/services/p4_a.jpg')}}" class="img-responsive" alt="">
                        {{-- <img src="{{asset('themes/images/services/p3_a.jpg')}}" class="img-responsive" alt=""> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section id="view-all-projects" class="call-to-action bg-color text-center" data-speed="5" data-type="background" aria-label="view-all-projects">
    <a href="{{url('/')}}/contact-us" class="btn btn-line black btn-big">Get Quotation</a>
</section>
@endforeach
@endsection
