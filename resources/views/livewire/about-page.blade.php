<div>
    <section class="page_title ds bs s-pt-80 s-pb-55 s-pb-lg-95 s-pt-lg-145 page_title s-parallax s-overlay" style="background-image: url('{{asset("images/title-bg.jpg")}}') !important;">
        <div class="container">
            <div class="row">

                <div class="col-md-12 text-center text-lg-left">
                    <div class="divider-30"></div>
                    <h1>About</h1>
                    <ol class="breadcrumb links-light">
                        <li class="breadcrumb-item">
                            <a href="./">Home</a>
                        </li>
                        
                        <li class="breadcrumb-item active">
                            <span class="color-main fw-500">About</span>
                        </li>
                    </ol>
                </div>

            </div>
        </div>
    </section>

    <section class="ls s-pt-55 s-pt-lg-40 c-gutter-20">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-5">
                    <p class="special-heading subheading">
                        About Us
                    </p>
                    <h4 class="special-heading">
                        World-Class<br>
                        Contact Center
                    </h4>
                    <div class="divider-30"></div>
                    <p>
                        Welcome to [Your Call Center Name], where customer satisfaction is our top priority. With years of experience in providing top-notch customer support, we have become a trusted partner for businesses worldwide. Our team of skilled professionals is dedicated to delivering efficient, friendly, and reliable service that meets the unique needs of every client.
                    </p>
                    <div class="divider--10 divider-md-30"></div>
                    <p class="progress-title text-uppercase">Customer Service</p>
                    <div class="progress">
                        <div class="progress-bar bg-maincolor" role="progressbar" data-transitiongoal="55" aria-valuemin="0" aria-valuemax="100" aria-valuenow="55" style="width: 55%;">
                            <span>55%</span>
                        </div>
                    </div>
                    <p class="progress-title text-uppercase">Sales / Lead Generation</p>
                    <div class="progress">
                        <div class="progress-bar bg-maincolor2" role="progressbar" data-transitiongoal="32" aria-valuemin="0" aria-valuemax="100" aria-valuenow="32" style="width: 32%;">
                            <span>90%</span>
                        </div>
                    </div>
                    <div class="divider-50"></div>
                    <a href="about.html" class="btn btn-big with-arrow btn-gradient">
                        <span>Contact Us</span>
                        <i class="ico ico-arrow-right"></i>
                    </a>
                </div><!-- .col -->

                <div class="col-12 col-lg-7 text-lg-right">
                    <div class="divider-40 divider-md-0"></div>
                    <img src="{{asset('images/about.png')}}" alt="">
                </div><!-- .col -->

            </div><!-- .row -->
        </div>
    </section>
    @livewire('step')

    <div class="container about-infos">
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="divider-50"></div>
                <div class="icon-box service-box gradient-hover box-shadow">
                    <div class="icon-styled color-main fs-50">
                        <i class="ico-phone-call"></i>
                    </div>
                    <h5 class="service-title">
                        <a href="#" style="color: #7470FC;">Who We Are</a>
                    </h5>
                    <p>
                        At [Your Call Center Name], we pride ourselves on being more than just a call center. We are a team of problem solvers, communicators, and customer service experts. Our mission is to ensure that your customers receive prompt and accurate support, enhancing their overall experience with your brand. We work closely with businesses from various industries, providing tailored solutions that drive success.
                    </p>
                    <ul class="about-list">
                        <li>
                            <i class="fa fa-dot-circle-o" aria-hidden="true" style="color: #7470FC;"></i>
                            Excellence: We strive to exceed expectations in every interaction.
                        </li>
                        <li>
                            <i class="fa fa-dot-circle-o" aria-hidden="true" style="color: #7470FC;"></i>
                            Integrity: We believe in honest and transparent communication.
                        </li>
                        <li>
                            <i class="fa fa-dot-circle-o" aria-hidden="true" style="color: #7470FC;"></i>
                            Innovation: We continuously improve our processes and technologies to provide better service.
                        </li>
                    </ul>
                </div>
                <div class="divider-30"></div>
            </div>
            <div class="col-12 col-md-6">
                <div class="divider-50"></div>
                <div class="icon-box service-box gradient-hover box-shadow">
                    <div class="icon-styled color-main fs-50">
                        <i class="ico-chat"></i>
                    </div>
                    <h5 class="service-title">
                        <a href="#" style="color: #7470FC;">What We Do</a>
                    </h5>
                    <p>
                        We offer a wide range of services, including inbound and outbound customer support, technical assistance, sales, and more. Our state-of-the-art technology allows us to manage high volumes of calls while maintaining exceptional quality. Whether it’s resolving issues, answering queries, or closing sales, we ensure a seamless experience for your customers.
                    </p>
                    <ul class="about-list">
                        <li>
                            <i class="fa fa-dot-circle-o" aria-hidden="true" style="color: #7470FC;"></i>
                            24/7 Support: We’re always available to assist your customers, no matter the time or day.
                        </li>
                        <li>
                            <i class="fa fa-dot-circle-o" aria-hidden="true" style="color: #7470FC;"></i>
                            Multilingual Capabilities: We offer support in multiple languages to cater to your global audience.
                        </li>
                        <li>
                            <i class="fa fa-dot-circle-o" aria-hidden="true" style="color: #7470FC;"></i>
                            Scalability: Our services are flexible and scalable to match your business growth.
                        </li>
                    </ul>
                </div>
                <div class="divider-30"></div>
            </div>
        </div>
    </div>

    @livewire('video')

    @livewire('team')

    @livewire('faq')
</div>


