<!DOCTYPE html>
<html lang="en">

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Multikart admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Multikart admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="{{asset('admin/images/dashboard/favicon.png')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('admin/images/dashboard/favicon.png')}}" type="image/x-icon">
    <title>Multikart - Premium Admin Template</title>

    <!-- Google font-->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,500;1,600;1,700;1,800;1,900&display=swap">

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap">


    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/vendors/font-awesome.css') }}">

    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/vendors/flag-icon.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/4.1.7/css/flag-icon.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- Liner icon -->
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    

    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/vendors/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/custom.css') }}">

    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />

    @yield('css')
    @livewireStyles
</head>

<body>

     <!-- page-wrapper Start-->
     <div class="page-wrapper">
        @include('admin.partials.header') 
       
        <div class="page-body-wrapper">
            @include('admin.partials.sidebar') 
            <!-- Main Content -->
            @yield('content')
            
        </div>

        <!-- Footer Section -->
        @include('admin.partials.footer')
    </div>
    @livewireScripts
    <!-- latest jquery-->
    <script src="{{asset('admin/js/jquery-3.3.1.min.js')}}"></script>
    <!-- Bootstrap js-->
    <script src="{{asset('admin/js/bootstrap.bundle.min.js')}}"></script>
   
     <!-- feather icon js-->
     <script src="{{ asset('admin/js/icons/feather-icon/feather.min.js') }}"></script>
     <script src="{{ asset('admin/js/icons/feather-icon/feather-icon.js') }}"></script>
 
     <!-- Sidebar jquery-->
     <script src="{{ asset('admin/js/sidebar-menu.js') }}"></script>
 
     <!--Customizer admin-->
     <script src="{{ asset('admin/js/admin-customizer.js') }}"></script>
 
     <!-- Edit, delete and add new -->
     <script src="{{ asset('admin/js/edit-delete-new-product.js') }}"></script>
 
     <!--right sidebar js-->
     <script src="{{ asset('admin/js/chat-menu.js') }}"></script>
 
     <!--script admin-->
     <script src="{{ asset('admin/js/admin-script.js') }}"></script>
     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
     <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
     <script>
       document.addEventListener('DOMContentLoaded', function () {
            Livewire.on('success', (event) => {
                const message = event[0].message; 
                console.log(message);
                toastr.success(message);
            });
        });
    </script>

    

     @yield('script')
 
</body>
</html>
