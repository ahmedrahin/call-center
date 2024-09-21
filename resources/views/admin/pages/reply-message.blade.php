@extends('admin.layouts.layout')

@section('content')
<div class="page-body">
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <div class="page-header-left">
                        <h3>Customer Message Reply
                            
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
                            <a href="{{route('admin.message')}}" wire:navigate>
                                All Messages
                            </a>
                        </li>
                        <li class="breadcrumb-item active">{{$message->name}}'s Message Reply</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
   

    <!-- Container-fluid starts-->
    <div class="row g-2">
        <div class="col-md-6">
            <div class="container-fluid">
                <div class="card customer-message">
                    <div class="row product-page-main card-body">
                        <h6>Customer Name: <span style="color: #313131;">{{$message->name}}</span></h6>
                        <h6>Customer Email: <span style="color: #313131;"><a href="href="mailto:{{ $message->email }};"">{{ $message->email }}</a></span></h6>
                        <h6>Cutomer Number: 
                            @if($message->phone)
                                <a href="tel:{{ $message->phone }}">{{ $message->phone }}</a>
                            @else
                                No number available
                            @endif
                        </h6>
                        <h6>Message:
                            <br>
                            <span style="color: #313131;">
                                {{ $message->message }}
                            </span>
                        </h6>
                       <h6>
                            Date: <span style="color: #313131;">{{ $message->created_at->format('d-M-y h:i A') }}
                            </span>
                       </h6>
                       <h6 class="time">
                         {{ $message->created_at->diffForHumans() }}
                       </h6>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="container-fluid">
                <div class="card customer-message">
                    <div class="row product-page-main card-body">
                        @livewire('admin.reply-customer-message', ['messageId' => $message->id])
                    </div>
                </div>
            </div>  
        </div>
    </div>
    <!-- Container-fluid Ends-->
</div>
@endsection

