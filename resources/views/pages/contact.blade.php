@extends('layouts.app')

@section('content')
    <section class="page_title ds bs s-pt-80 s-pb-55 s-pb-lg-95 s-pt-lg-145 page_title s-parallax s-overlay mb-0" style="background-image: url('{{asset("images/title-bg.jpg")}}') !important;">
        <div class="container">
            <div class="row">

                <div class="col-md-12 text-center text-lg-left">
                    <div class="divider-30"></div>
                    <h1>Contact Us</h1>
                    <ol class="breadcrumb links-light">
                        <li class="breadcrumb-item">
                            <a href="./">Home</a>
                        </li>
                        <li class="breadcrumb-item active">
                            <span class="color-main fw-500">Contact</span>
                        </li>
                    </ol>
                </div>

            </div>
        </div>
    </section>

    <section class="ls s-py-60 s-py-lg-100 s-py-xl-80 c-gutter-30">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-md-6 col-lg-4">
                    <div class="icon-box text-center gradient-hover box-shadow">
                        <div class="icon-styled color-main fs-50">
                            <i class="ico ico-contact-alt"></i>
                        </div>
                        <h4>Phone</h4>
                        <a href="tel:1-800-765-4321">1-800-765-4321</a><br>
                        <a href="tel:1-800-542-2549">1-800-542-2549</a>
                    </div>
                    <div class="divider-40 divider-lg-0"></div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="icon-box text-center gradient-hover box-shadow">
                        <div class="icon-styled color-main fs-50">
                            <i class="ico ico-email-alt"></i>
                        </div>
                        <h4>Email</h4>
                        <a href="mailto:info@iqcall.com">info@iqcall.com</a><br>
                        <a href="mailto:admin@iqcall.com">admin@iqcall.com</a>
                    </div>
                    <div class="divider-40 divider-lg-0"></div>
                </div>

                <div class="col-lg-4">
                    <div class="icon-box text-center gradient-hover box-shadow">
                        <div class="icon-styled color-main fs-50">
                            <i class="ico ico-location"></i>
                        </div>
                        <h4>Address</h4>
                        <p>2218 Vine Street<br> North Chicago, IL 60064</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="ls ms s-pt-55 s-pb-60 s-pt-lg-95 s-pb-lg-100 s-pt-xl-100 s-pb-xl-100">
        <div class="container">
            <div class="row">
                <div class="m-auto col-lg-9 animate text-center animated fadeInUp" data-animation="fadeInUp">
                    <p class="special-heading subheading text-center">
                        Contact Form
                    </p>
                    <h4 class="special-heading text-center">
                        Contact IQcall<br>
                        Today!
                    </h4>
                    <div class="divider-30 divider-lg-40"></div>
                        @livewire('contact-page')
                </div>
            </div>
        </div>
    </section>

    <div class="map">
        <iframe src="https://maps.google.com/maps?q=Dhaka%20kazipara&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no"></iframe>
    </div>
@endsection
