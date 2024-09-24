<div>
    <section id="team" class="ls ms s-py-55 s-py-lg-95 s-py-xl-115 mt-50">
        <div class="container" style="overflow-x: hidden;">
            <div class="row">
                
                <div class="col-12 text-center">
                    <p class="special-heading subheading">
                        Our team
                    </p>
                    <h4 class="special-heading">
                        Our Best Specialists <br>
                        Work For You
                    </h4>
                    <div class="divider-30 divider-lg-40"></div>

                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            @foreach( $employees as $employee )
                                <div class="swiper-slide">
                                    <div class="team-member2 gradient-hover vertical-item text-center box-shadow ls" data-index="0">
                                        <div class="item-media rounded-circle">
                                            <a href="{{ route('single.employee',$employee->id) }}">
                                                @if( $employee->image )
                                                    <img src="{{asset($employee->image)}}" alt="">
                                                @else 
                                                    <img src="{{asset('images/no.png')}}" alt="">
                                                @endif
                                            </a>
                                        </div>
                                        <div class="item-content">
                                            <h5 class="team-name">
                                                <a href="{{ route('single.employee',$employee->id) }}"">{{$employee->name}}</a>
                                            </h5>
                                            <p class="team-position">
                                                {{$employee->post}}
                                            </p>
                                            <span class="social-icons">
                                                <a href="{{$employee->facebook_link ? $employee->facebook_link : '#'}}" class="fa fa-facebook" title="facebook" target="_blank"></a>
                                                <a href="mailto:{{$employee->email}};" class="fa fa-envelope" title="email"></a>
                                                <a href="{{$employee->instagam_link ? $employee->instagam_link : '#'}}" class="fa fa-instagram" title="instagram" target="_blank"></a>
                                                <a href="{{ $employee->phone ? 'tel:'.$employee->phone : '#' }}" class="fa fa-phone" title="fa-phone"></a>
                                            </span>
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
</div>
