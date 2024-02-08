@extends('front.master')

@section('content')
@foreach ($Service as $service)
  <!-- subheader -->
<section id="subheader" data-speed="8" data-type="background">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>{{$service->title}}</h1>
                <ul class="crumb">
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li class="sep">/</li>
                    <li><a href="#">Services</a></li>
                    <li class="sep">/</li>
                    <li>{!!html_entity_decode($service->title)!!}</li>
                </ul>
            </div>
        </div>
        <br><br>
        <div class="row wow fadeInUp">
            <p style="max-width:700px; margin:0 auto; font-size:20px; color:#ffffff" class="text-center">
                {!!html_entity_decode($service->content)!!}
            </p>
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
                        $Other = DB::table('solutions')->get()
                    ?>


                    @foreach ($Other as $other)
                    @if($other->id == $service->id)
                    <li class="active"><a href="{{url('/')}}/center-of-excellence/{{$other->slung}}">{{$other->title}}</a></li>
                    @else
                    <li><a href="{{url('/')}}/solutions/{{$other->slung}}">{{$other->title}}</a></li>
                    @endif
                    @endforeach
                </ul>
            </div>

            <div class="col-md-9">
                <div class="row">
                    <?php
                        $Extras = DB::table('extras')->where('solutions_id',$service->id)->get();
                    ?>

                    {{--  --}}
                    <section id="section-welcome-15" class="no-top no-bottom">

                        <div class="container-fluid">
                            <?php
                               $extraOrder = 2;
                            ?>
                            @foreach ($Extras as $extra)
                            @if($extraOrder % 2 == 0)
                                <div class="row align-items-center g-0 wow fadeInUp" data-bgcolor="rgba(255,255,255)">

                                    <div class="col-md-6 text-middle" >
                                        <div class="padding30">
                                            {!!html_entity_decode($extra->content)!!}
                                        </div>
                                    </div>

                                    <div class="col-md-6 text-middle">
                                        <div class="twentytwenty-containers">
                                        <img src="{{asset('themes/images/before-after/1b.jpg')}}" alt="" class="img-responsive" />
                                        </div>
                                    </div>

                                </div>
                            @else
                                <div class="row align-items-center g-0 wow fadeInUp" data-bgcolor="rgba(255,255,255)">
                                    <div class="col-md-6 text-middle">
                                        <div class="twentytwenty-containers">
                                        <img src="{{asset('themes/images/before-after/2a.jpg')}}" alt="" class="img-responsive" />
                                        </div>
                                    </div>

                                    <div class="col-md-6 text-middle">
                                        <div class="padding30">
                                            {!!html_entity_decode($extra->content)!!}
                                        </div>
                                    </div>

                                </div>

                            @endif
                            <?php
                                     $$extraOrder = $extraOrder++
                            ?>

                            @endforeach

                        </div>


                    </section>
                    {{--  --}}
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
