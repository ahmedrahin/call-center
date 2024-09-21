
    <section id="service" class="s-py-xl-5 mb-50">
        <div class="container" style="overflow-x: hidden;">
            <div class="row">
                
                <div class="col-12 text-center">

                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            @foreach ($services as $service)
                                <div class="swiper-slide">
                                    <div class="service-item vertical-item content-padding padding-small ls box-shadow">
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
                    
                </div>
            </div>

        </div>
    </section>

