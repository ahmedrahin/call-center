@extends('layouts.app')

@section('content')

<section class="page_title ds bs s-pt-80 s-pb-55 s-pb-lg-95 s-pt-lg-145 page_title s-parallax s-overlay" style="background-image: url('{{asset("images/title-bg.jpg")}}') !important; margin-bottom: 0;">
    <div class="container">
        <div class="row">

            <div class="col-md-12 text-center text-lg-left">
                <div class="divider-30"></div>
                <h1>About</h1>
                <ol class="breadcrumb links-light">
                    <li class="breadcrumb-item">
                        <a href="./">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="{{route('service')}}">Services</a>
                    </li>
                    <li class="breadcrumb-item active">
                        <span class="color-main fw-500">{{$service->title}}</span>
                    </li>
                </ol>
            </div>

        </div>
    </div>
</section>

<section class="ls s-py-60 s-py-lg-100 s-py-xl-120">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="box-shadow single-service">
                    <div class="item-media">
                        <div>
                            <img src="{{asset($service->thumb_image)}}" alt="" class="single-service-img">
                        </div>
                    </div>
                    <div class="item-content">
                        <div class="service-progress">
                            <p class="progress-title text-uppercase">Customer Service</p>
                            <div class="progress">
                                <div class="progress-bar bg-maincolor" role="progressbar" data-transitiongoal="55" aria-valuemin="0" aria-valuemax="100" aria-valuenow="55" style="width: 55%;">
                                    <span>55%</span>
                                </div>
                            </div>
                            <p class="progress-title text-uppercase">Sales / Lead Generation</p>
                            <div class="progress">
                                <div class="progress-bar bg-maincolor2" role="progressbar" data-transitiongoal="32" aria-valuemin="0" aria-valuemax="100" aria-valuenow="32" style="width: 32%;">
                                    <span>32%</span>
                                </div>
                            </div>
                        </div>
                        {!! $service->description !!}
                    </div>
                </div>
            </div><!-- .col-* -->
        </div>
    </div>
</section>

<section class="ls ms s-py-55 s-py-lg-95 s-py-xl-115">
    <div class="container">
        <div class="row">
            <div class="offset-lg-2 col-lg-8 text-center">
                <p class="special-heading subheading">
                    Our Expertise
                </p>
                <h4 class="special-heading">
                    Some Of The <br>Services We Offer
                </h4>
                <div class="divider-40"></div>
            </div>
            <div class="col-sm-12">
                @livewire('service-page')
            </div>
        </div>
    </div>
</section>

@endsection
