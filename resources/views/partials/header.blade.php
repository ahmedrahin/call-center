


{{-- top bar --}}
<section class="page_toplogo ls s-py-10 s-py-xl-25 my-1">
	<div class="container">
		<div class="row align-items-center justify-content-between">
			<div class="col-12 col-md-3 logo-centered">
				<a href="#" class="logo">
					<img src="images/logo-dark.png" alt="">
				</a>
				<div class="divider-20 divider-md-0"></div>
			</div>
			<div class="col-12 col-md-9">
				<div class="toplogo-includes">

					<div class="media">
						<div class="icon-styled color-main">
							<i class="ico ico-map-marker"></i>
						</div>
						<div class="media-body">
							<h6>Our Address</h6>
							<p class="color-darkgrey">2218 Vine Street</p>
						</div>
					</div>

					<div class="media">
						<div class="icon-styled color-main">
							<i class="ico ico-envelope"></i>
						</div>
						<div class="media-body">
							<h6>Email Us</h6>
							<p><a class="links-darkgrey" href="mailto:info@iqcall.com">info@iqcall.com</a></p>
						</div>
					</div>

					<div class="media">
						<div class="icon-styled color-main">
							<i class="ico ico-phone2"></i>
						</div>
						<div class="media-body">
							<h6>Give Us A Call</h6>
							<p><a class="links-darkgrey" href="tel:+1-800-765-4321">+1-800-765-4321</a></p>
						</div>
					</div>
					<div class="social-icons d-none d-xl-block">
						<a href="https://facebook.com/" class="fa fa-facebook border-icon rounded-icon" title="facebook"></a>
						<a href="https://telegram.com/" class="fa fa-paper-plane border-icon rounded-icon" title="telegram"></a>
						<a href="https://instagram.com/" class="fa fa-instagram border-icon rounded-icon" title="instagram"></a>
						<a href="https://youtube.com/" class="fa fa-youtube-play border-icon rounded-icon" title="youtube-play"></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<div class="header_absolute ds s-overlay">

	<!-- header menu -->
	<header class="page_header sf-arrows ds justify-nav-start line-header s-bordertop" style="background: white !important;">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-xl-8 col-1 order-3">
					<div class="nav-wrap">
						<!-- main nav start -->
						<nav class="top-nav">
							<ul class="nav sf-menu">
								<li class="{{ request()->routeIs('home') ? 'active' : '' }}">
									<a href="{{ route('home') }}" >Home</a>
								</li>
	
								<li class="{{ request()->routeIs('about') ? 'active' : '' }}">
									<a href="{{ route('about') }}">About Us</a>
								</li>
								<li class="{{ request()->routeIs('service') ? 'active' : '' }}">
									<a href="{{ route('service') }}">Our Services</a>
								</li>
								<li class="{{ request()->routeIs('team') ? 'active' : '' }}">
									<a href="home-blocks.html">Our Team</a>
								</li>
								<li class="{{ request()->routeIs('contact') ? 'active' : '' }}">
									<a href="{{ route('contact') }}">Contact Us</a>
								</li>
							</ul>
							
							{{-- <ul class="nav sf-menu">
								<li class="{{ request()->routeIs('home') ? 'active' : '' }}">
									<a href="{{ route('home') }}" >Home</a>
								</li>
	
								<li class="{{ request()->routeIs('about') ? 'active' : '' }}">
									<a href="{{ route('about') }}" wire:navigate>About Us</a>
								</li>
								<li class="{{ request()->routeIs('services') ? 'active' : '' }}">
									<a href="{{ route('services') }}" wire:navigate>Our Services</a>
								</li>
								<li class="{{ request()->routeIs('team') ? 'active' : '' }}">
									<a href="home-blocks.html" wire:navigate>Our Team</a>
								</li>
								<li class="{{ request()->routeIs('contact') ? 'active' : '' }}">
									<a href="{{ route('contact') }}" wire:navigate>Contact Us</a>
								</li>
							</ul> --}}
						</nav>
						<!-- eof main nav -->
					</div>
				</div>
				<div class="col-xl-4 col-6 order-2 order-lg-3 text-right d-none d-md-block">
					<a href="contact.html" class="btn btn-gradient">
						<span><i class="color-darkgrey ico ico-comment" aria-hidden="true"></i> Request a quote</span>
					</a>
				</div>
			</div>
		</div>
		<!-- header toggler -->
		<span class="toggle_menu"><span></span></span>
	</header>

</div>