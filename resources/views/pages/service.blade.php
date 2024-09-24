@extends('layouts.app')

@section('content')
    <section class="ls s-pt-60 s-pb-30 s-pt-lg-100 s-pb-lg-70 s-pt-xl-120 s-pb-xl-90 c-gutter-30 c-mb-30 mb-0 mt-0">
        <div class="container">
            <div class="row">
                @foreach ($services as $service)
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="service-item vertical-item content-padding padding-small box-shadow">
                            <div class="item-media">
                                <img src="{{asset($service->image)}}" alt="">
                                <div class="media-links">
                                    <a class="abs-link"  href="{{route('single.service',$service->slug)}}"></a>
                                </div>
                            </div>
                            <div class="item-content">
                                <h5 class="mb-15 service-title">
                                    <a href="{{route('single.service',$service->slug)}}">{{$service->title}}</a>
                                </h5>
                                <p style="text-align: left">{{$service->short_title}}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    @livewire('all-review')
@endsection
