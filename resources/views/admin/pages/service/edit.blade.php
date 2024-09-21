@extends('admin.layouts.layout')

@section('css')
    
@endsection

@section('content')
<div class="page-body">
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <div class="page-header-left">
                        <h3>Edit Service
                            
                        </h3>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ol class="breadcrumb pull-right">
                        <li class="breadcrumb-item">
                            <a href="javascript:;">
                                <i data-feather="home"></i>
                            </a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{route('admin.service')}}" wire:navigate>
                                All Services
                            </a>
                        </li>
                        <li class="breadcrumb-item active">Edit {{$service->title}}</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
   

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="card customer-message">
            <div class="row product-page-main card-body">
                @livewire('admin.edit-service', ['id' => $service->id])
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
</div>
@endsection

@section('script')
   
@endsection