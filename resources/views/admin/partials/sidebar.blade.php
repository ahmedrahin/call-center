<!-- Page Sidebar Start-->
<div class="page-sidebar">
    <div class="main-header-left d-none d-lg-block">
        <div class="logo-wrapper"><a href="index.html"><img src="{{asset('admin/images/dashboard/multikart-logo.png')}}"
                    alt=""></a></div>
    </div>
    <div class="sidebar custom-scrollbar">
        <a href="javascript:void(0)" class="sidebar-back d-lg-none d-block"><i class="fa fa-times"
                aria-hidden="true"></i></a>
        <div class="sidebar-user">
            <img class="img-60" src="{{asset('admin/images/dashboard/user3.jpg')}}" alt="#">
            <div>
                <h6 class="f-14">JOHN</h6>
                <p>general manager.</p>
            </div>
        </div>
        <ul class="sidebar-menu">
            <li>
                <a class="sidebar-header" href="index.html">
                    <i data-feather="home"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li>
                <a class="sidebar-header active" href="{{ route('admin.message') }}" wire:navigate>
                    <i data-feather="home"></i>
                    <span>Customer Message</span>
                </a>                
            </li>

            <li class="">
                <a class="sidebar-header" href="javascript:void(0)">
                    <i data-feather="box"></i>
                    <span>Services</span>
                    <i class="fa fa-angle-right pull-right"></i>
                </a>

                <ul class="sidebar-submenu">
                    <li>
                        <a href="{{route('admin.service')}}" wire:navigate>
                            <i class="fa fa-circle"></i>
                            <span>All Services</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('admin.addservice')}}" wire:navigate>
                            <i class="fa fa-circle"></i>
                            <span>Add New Service</span>
                        </a>
                    </li>
                </ul>
            </li> 
            
            <li class="">
                <a class="sidebar-header" href="javascript:void(0)">
                    <i data-feather="box"></i>
                    <span>Employees</span>
                    <i class="fa fa-angle-right pull-right"></i>
                </a>

                <ul class="sidebar-submenu">
                    <li>
                        <a href="{{route('admin.employee')}}" wire:navigate>
                            <i class="fa fa-circle"></i>
                            <span>All Employees</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('admin.addemployee')}}" wire:navigate>
                            <i class="fa fa-circle"></i>
                            <span>Add New Employees</span>
                        </a>
                    </li>
                </ul>
            </li> 

            <li class="">
                <a class="sidebar-header" href="javascript:void(0)">
                    <i data-feather="box"></i>
                    <span>Reviews</span>
                    <i class="fa fa-angle-right pull-right"></i>
                </a>

                <ul class="sidebar-submenu">
                    <li>
                        <a href="{{route('admin.review')}}" wire:navigate>
                            <i class="fa fa-circle"></i>
                            <span>All Reviews</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('admin.addreview')}}" wire:navigate>
                            <i class="fa fa-circle"></i>
                            <span>Add New Reviews</span>
                        </a>
                    </li>
                </ul>
            </li> 
        </ul>
    </div>
</div>
<!-- Page Sidebar Ends-->