@extends('dashboard.layouts.master')
@section('menu')
 {{-- @extends('dashboard.sidebar.dashboard') --}}
@endsection
@section('content')
    <link rel="stylesheet" href="{{ URL::to('assets/css/style.css') }}">


    <div id="main">

        <div class="page-heading">
            <div class="page-title">
                <div class="row">
                    <div class="col-12 col-md-6 order-md-1 order-last">
                        <h3>{{ __('Bills management') }}</h3>
                        <br>
                        <br>
                    </div>
                    <div class="col-12 col-md-6 order-md-2 order-first">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/dashboard_home">{{ __('Dashboard') }}</a></li>
                                <li class="breadcrumb-item"><a href="/d_Bills">{{__ ('Bills')}}</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ __('order') }}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            {{-- message --}}
            {!! Toastr::message() !!}

        </div>
        <div id="print" style="margin-right:20%">
        <div class="col-md-12"  >
            <div class="row" >

                <div class="receipt-main col-xs-10 col-sm-10 col-md-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-3">
                    <div class="row">
                        <div class="receipt-header">
                            <div class="col-xs-6 col-sm-6 col-md-6">

                                <div class="receipt-left">
                                    @foreach ($orders as $order)
                                        <img class="img-responsive" alt="iamgurdeeposahan"
                                            src="{{ asset(Storage::url($order->user->profile_image)) }}"
                                            style="width: 71px; border-radius: 43px;">
                                    @endforeach
                                </div>
                            </div>
            
                        </div>
                    </div>

                    <div class="row" >
                        @foreach ($orders as $order)
                            <div class="receipt-header receipt-header-mid">
                                <div class="col-xs-8 col-sm-8 col-md-8 text-left">
                                    <div class="receipt-right">
                                        <h5>{{ __($order->user->name) }}</h5>
                                        <p><b>{{ __('Phone Number') }}:</b> {{ __($order->user->phone_number) }}</p>
                                        <p><b> {{ __('Email') }}:</b> {{ __($order->user->email) }} </p>
                                        <p><b> {{ __('Address') }}:</b> {{ $order->user->address }} </p>

                                    </div>
                                </div>
                                <div class="col-xs-4 col-sm-4 col-md-4">
                                    <div class="receipt-left">
                                        <h3>{{ __('INVOICE') }} # {{ $order->id }}</h3>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div>
                        <table class="table table-bordered">
                            <thead>
                                <tr>   
                                    <th>{{ __('photo') }}</th>
                                    <th>{{ __('Product Name') }}</th>
                                    <th>{{ __('Quantity') }}</th>
                                    <th>{{ __('Unit Price') }}</th>
                                    <th>{{ __('Total in dollars') }}</th>
                                    <th>{{ __('Unit Price') }}</th>
                                    <th>{{ __('Total in dinars') }}</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($bills as $bill)
                                    <tr>
                                       <td class="text-right">
                                          <img src="{{ asset(Storage::url($bill->profile_image)) }}" alt="Profile"
                                              style="  border-radius: 50%;
                                            -webkit-border-radius: 50%;
                                            -moz-border-radius: 50%;
                                            width: 50px;
                                            height: 55px;">
                                        </td>
                                        <td class="text-right">
                                            <h5><strong>{{ $bill->name }} </strong></h5>
                                        </td>
                                        <td class="text-right">
                                            <h5><strong>{{ $bill->quantity }} </strong></h5>
                                        </td>
                                        <td class="text-right">
                                            <h5><strong>{{ $bill->price }} $</strong></h5>
                                        </td>
                                        <td class="text-right">
                                            <h5><strong>{{ $bill->total }} $</strong></h5>
                                        </td>
                                        <td class="text-right">
                                            <h5><strong> {{ $bill->price_dl }} LYD</strong></h5>
                                        </td>
                                        <td class="text-right">
                                            <h5><strong>{{ $bill->total_dl }} LYD </strong></h5>
                                        </td>

                                    </tr>
                                @endforeach
                                    <tr>

                                        <td class="text-right">
                                            <!-- <h2><strong>{{ __('Total') }} </strong></h2> -->
                                        </td>
                                        <th></th>
                                        <th></th>
                                        <th></th>

                                        @foreach ($orders as $total)
                                        <td class="text-right">
                                            <h2><strong>{{ $total->total }}$ </strong></h2>
                                        </td>
                                        <th></th>
                                        <td class="text-right">
                                        <h2><strong>
                                            {{   round(  $total->total * Session::get('LYD') , 2) }} LYD
                                        
                                        </strong></h2>

                                            <!-- {{-- <h2><strong>${{ $bill->totals_dl }} </strong></h2> --}} Session::get('LYD') -->
                                        </td>
                                        @endforeach


                                <!-- <td class="text-left text-danger">
                                        <h2><strong><i class="fa fa-inr"></i>   120$</strong></h2></td>
                                    <td class="text-left text-danger">
                                        <h2><strong><i class="fa fa-inr"></i> 300Dl</strong></h2></td> -->
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="row">
                        <div class="receipt-header receipt-header-mid receipt-footer">
                            <div class="col-xs-8 col-sm-8 col-md-8 text-left">
                                <div class="receipt-right">
                                    <h5>{{ __('Thanks for shopping') }}</h5>
                                </div>
                            </div>
                            <div>
                                <div>
                                    <div> <a>
                                            <img style="width:10%; height:40%;" alt="themini"
                                                src="{{ asset('images/logo/logo4.jpg') }}"> </a> </div>
                                </div>
                            </div>

                        </div>
                        @foreach ($orders as $order)
                        {{Carbon\Carbon::now('Africa/Tripoli')->format("Y-m-d") }}
                        <br>
                        {{Carbon\Carbon::now('Africa/Tripoli')->format("h-i-A") }}
                            {{-- <h6> {{ $order->created_at->format("Y-m-d") }} </h6>
                            <h6> {{ $order->created_at->format("h-i-SA") }}</h6> --}}

                        @endforeach

                    </div>
                    <h2 > 
                         <a href="#" onclick="printPageArea()"> 
                         <i class="bi bi-printer-fill text-dark grey" ></i>
                         </a></h2>
                </div>
            </div>
        </div>
    </div>



        <footer>
            <div class="footer clearfix mb-0 text-muted ">
                <div class="float-start">
                </div>
                <div class="float-end">
                </div>
            </div>
        </footer>
    </div>
    <script>
        function printPageArea(){
    var printContent = document.getElementById("print").innerHTML;
    var originalContent = document.body.innerHTML;
    document.body.innerHTML = printContent;
    window.print();
    document.body.innerHTML = originalContent;
}
    </script>
@endsection
