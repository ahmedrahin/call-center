<!DOCTYPE html>
<html lang="en">
<head>
    <title>iQcall - Call center SinglePage and MultiPage HTML template</title>
    <meta charset="utf-8">
    <!--[if IE]>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<![endif]-->
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="format-detection" content="telephone=no">
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animations.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" class="color-switcher-link">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}" class="color-switcher-link">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css">
    <!-- Include Toastr CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />

    @livewireStyles


    <!-- Livewire Styles -->
    @livewireStyles
</head>
<body>

    <div class="preloader">
        <div class="preloader_image pulse"></div>
    </div>

    <div id="canvas">
        <div id="box_wrapper">
            <!-- Header Section -->
            @include('partials.header')
            

            <!-- Main Content -->
        
            @yield('content')
            

            <!-- Footer Section -->
            
            @include('partials.footer')
        </div>
        <!-- eof #box_wrapper -->
    </div>
    <!-- eof #canvas -->    

    

    @livewireScripts
    <script src="{{ asset('js/compressed.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <!-- Include Toastr JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        Livewire.on('contactSaved', () => {
            toastr.success('Your message has been successfully sent!');
        });
    </script>
    
    <script>
        
        var swiper = new Swiper('.swiper-container', {
        loop: true,
        autoplay: {
            delay: 2000, // Autoplay delay in milliseconds (3 seconds)
            disableOnInteraction: false, // Continue autoplay after interaction
        },
        slidesPerView: 1, // Default view on smallest screens
        spaceBetween: 30, // Space between slides in px
        breakpoints: {
            768: {
                slidesPerView: 2, // 2 slides on screens 768px and smaller
            },
            992: {
                slidesPerView: 4, // 4 slides on screens 992px and larger
            },
            1200: {
                slidesPerView: 4, // 4 slides on screens 1200px and larger
            }
        },
        // Remove pagination and navigation controls
        pagination: false,
        navigation: false
        });

        window.addEventListener('scroll', function() {
        var header = document.querySelector('header'); 
        if (window.scrollY > 100) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
        });

        var swiper = new Swiper('.testimonial-slider', {
        loop: true,
        autoplay: false,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        slidesPerView: 1, // Default number of slides (on mobile)
        spaceBetween: 30, // Space between slides
        breakpoints: {
            768: {
                slidesPerView: 1, // 1 slide on tablets
            },
            992: {
                slidesPerView: 3, // 3 slides on desktops and larger screens
            }
        }
        });

    </script>
        
</body>
</html>
