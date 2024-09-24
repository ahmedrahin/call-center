<div id="testimonial" class="ls s-pt-55 s-pb-60 s-py-lg-95 s-py-xl-115 pb-50">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <p class="special-heading subheading">Testimonials</p>
                <h4 class="special-heading">
                    What People Say About <br>Our Services
                </h4>
                <div class="divider-30 divider-lg-40"></div>
            </div>

            <div class="col-md-12">
                <!-- Swiper container -->
                <div class="swiper testimonial-slider">
                    <div class="swiper-wrapper">
                        <!-- Testimonial item -->
                        @foreach ($reviews as $review)
                            <div class="swiper-slide">
                                <div class="quote-item2 box-shadow text-center">
                                    <div class="quote-author">
                                        @if( $review->image )
                                            <img class="rounded-circle" src="{{asset($review->image)}}" alt="">
                                        @else
                                            <div class="first-name">
                                                {{ strtoupper(substr($review->name, 0, 1)) }}
                                            </div>
                                        @endif
                                    </div>
                                    <div class="quote-content">
                                        <p>{!! $review->message !!}</p>
                                        <div class="author-meta">
                                            <h6 class="author-name">{{$review->name}}</h6>
                                            <p class="author-position">{{$review->job_title ?? ''}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </div>
</div>  
