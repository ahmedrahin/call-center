
@if( !request()->routeIs('contact') )
    <section id="contacts" class="ls s-py-xl-0 container-px-0 contact-pattern">
        <div class="container-fluid">
            <div class="container position-relative c-gutter-0">
                <div class="col-12 col-lg-5 col-absolute animate" data-animation="fadeInRight">
                    <div class="pattern-gradient ls box-shadow p-15 p-lg-60 p-xl-100">
                        <h4 class="mt-n-5">
                            Get in touch
                        </h4>
                        <div class="divider-20 divider-lg-40"></div>
                        @livewire('contact-data')

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="divider-40 divider-lg-0"></div>
                <div class="col-12">
                    <div class="">
                        <div class="mapouter"><div class="gmap_canvas"><iframe src="https://maps.google.com/maps?q=Dhaka%20kazipara&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" style="width: 490px; height: 400px;"></iframe><style>.mapouter{display:table;}.gmap_canvas{overflow:hidden;position:relative;height:400px;width:490px;background:#fff;}</style><a href="https://fnfmods.net">fnf mods</a><style>.gmap_canvas iframe{position:relative !important;z-index:2 !important;}.gmap_canvas a{color:#fff !important;position:absolute !important;top:0 !important;left:0 !important;z-index:0 !important;}</style></div></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endif

<footer class="page_footer page_footer s-borderbottom-container ds s-pt-60 s-pb-15 s-pt-lg-90 s-pb-lg-50 s-pt-xl-110 s-pb-xl-70 c-gutter-50">
    <div class="container">
        <div class="row">

            <div class="col-md-6 col-lg-3 animate mr-auto" data-animation="fadeInUp">

                <div class="widget widget_text mt-lg-10">
                    <a href="./" class="logo">
                        <img src="images/logo-grey.png" alt="">
                    </a>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 animate" data-animation="fadeInUp">
                <div class="widget widget_nav_menu">
                    <ul class="menu">
                        <li>
                            <a href="team.html">Management</a>
                        </li>
                        <li>
                            <a href="contact.html">Contact</a>
                        </li>
                        <li>
                            <a href="blog-right.html">News</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 animate" data-animation="fadeInUp">
                <div class="widget widget_contact_list">
                    <div class="contact-item">
                        <p class="title">Give Us A Call</p>
                        <a class="content" href="tel:1-800-765-4321">1-800-765-4321</a>
                    </div>
                    <div class="contact-item">
                        <p class="title">Email Us</p>
                        <a class="content" href="/cdn-cgi/l/email-protection#d4bdbab2bb94bda5b7b5b8b8fab7bbb9"><span class="__cf_email__" data-cfemail="e980878f86a980988a888585c78a8684">[email&#160;protected]</span></a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 animate" data-animation="fadeInUp">
                <div class="widget widget_social_buttons">
                    <div class="widget-title">
                        Join Us
                    </div>
                    <a href="#" class="fa fa-paper-plane border-icon rounded-icon" title="telegram"></a>
                    <a href="#" class="ml-0 fa fa-facebook border-icon rounded-icon" title="facebook"></a>
                    <a href="#" class="fa fa-instagram border-icon rounded-icon" title="instagram"></a>
                    <a href="#" class="fa fa-youtube-play border-icon rounded-icon" title="youtube-play"></a>
                    <a href="#" class="fa fa-twitter border-icon rounded-icon" title="twitter"></a>
                </div>
            </div>

        </div>
    </div>
</footer>

<section class="page_copyright ds s-py-20">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center animate" data-animation="fadeInUp">
                <p>&copy; <span class="copyright_year">2020</span> Copyright</p>
            </div>
        </div>
    </div>
</section>




