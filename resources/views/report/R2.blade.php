@extends('dashboard.layouts.master')
@section('menu')
{{-- @extends('dashboard.sidebar.dashboard') --}}
@endsection
@section('content')

<link rel="stylesheet" href="{{ URL::to('assets/css/style.css') }}">

<!-- End Header -->

<div id="main">

    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>{{ __('Reports management') }}</h3>
                <br>
                <br>
                </div>
                 <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/dashboard_home">{{ __('Dashboard') }}</a></li>
                        <li class="breadcrumb-item"><a href="/d_report">{{ __('Reports') }}</a></li>
                                {{-- <li class="breadcrumb-item active" aria-current="page">{{ __('Reports') }}</li> --}}
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        {{-- message --}}
        {!! Toastr::message() !!}
        <div id="print">
        <div class="col-md-12" >
            <div class="row" >

                <div class="receipt-main col-xs-10 col-sm-10 col-md-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-3" >
                    <div class="row">
                        <div class="receipt-header">
                            <div class="col-xs-6 col-sm-6 col-md-6">

                                <div class="receipt-left">
                                        <img class="img-responsive" alt="iamgurdeeposahan"
                                            style="width: 71px; border-radius: 43px;">
                                </div>
                            </div>
            
                        </div>
                    </div>

                    <div class="row">
                            <div class="receipt-header receipt-header-mid">
                                <div class="col-xs-8 col-sm-8 col-md-8 text-left">
                                    <div class="receipt-right">
                                        <p><b>{{ __('Name') }}:</b> </p>
                                        <p><b>{{ __('Phone Number') }}:</b> </p>
                                        <p><b> {{ __('Email') }}:</b></p>
                                        <p><b> {{ __('Address') }}:</b>  </p>

                                    </div>
                                </div>
                               
                            </div>
                    </div>

                    <div>
                        <table class="table table-bordered">
                            <thead>
                                {{-- R1  أعلى 5 منجات مبيعا--}}
                                {{-- R2 المنتجات المباعة --}}
                                {{-- R3 جرد مالي --}}
                                {{-- R4  أعلىى منتج مبييعا--}}
                                {{-- <tr>   

                                    <th >{{ __('#')}}</th>
                                    <th>{{ __('المنتج') }}</th>
                                    <th >{{ __('العلامة التجارية') }}</th> 
                                    <th >{{ __('الكمية المباعة') }}</th>
                                    <th >{{ __('الكمية المتبقية') }}</th>
                                    <th >{{ __('الربح') }}</th>
                                 

                                </tr>
                                <tr>   
                                    <th >{{ __('#')}}</th>
                                    <th>{{ __('المنتج') }}</th>
                                    <th >{{ __('الكمية المباعة') }}</th>
                                    <th >{{ __('الكمية المتبقية') }}</th>
                                    <th >{{ __('سعر الشراء') }}</th>
                                    <th >{{ __('سعر البيع') }}</th>
                                    <th >{{ __('الربح') }}</th>

                                </tr>
                                <tr>   

                                    <th >{{ __('#')}}</th>
                                    <th>{{ __('المنتج') }}</th>
                                    <th >{{ __('العلامة التجارية') }}</th> 
                                    <th >{{ __('الكمية المباعة') }}</th>
                                    <th >{{ __('الكمية المتبقية') }}</th>
                                    <th >{{ __('الربح') }}</th>
                                    
                                </tr>
                                <tr>   

                                   <th >{{ __('#')}}</th>
                                   <th>{{ __('المنتج') }}</th>
                                   <th >{{ __('العلامة التجارية') }}</th> 
                                   <th >{{ __('الكمية المباعة') }}</th>
                                   <th >{{ __('الكمية المتبقية') }}</th>
                                   <th >{{ __('الربح') }}</th>

                                </tr> --}}
                                <tr>   
                                   {{-- R5 جرد المنتجات --}}

                                    <th >{{ __('#')}}</th>
                                    <th>{{ __('المنتج') }}</th>
                                    <th >{{ __('العلامة التجارية') }}</th> 
                                    <th >{{ __('الكمية المباعة') }}</th>
                                    <th >{{ __('الكمية المتبقية') }}</th>
                                    <th >{{ __('سعر الشراء') }}</th>
                                    <th >{{ __('سعر البيع') }}</th>
                                    <th >{{ __('الربح') }}</th>

                                </tr>
                            </thead>
                            <tbody>
                                {{-- @foreach ($bills as $bill) --}}
                                    <tr>
                                       {{-- <td class="text-right">
                                          <img src="{{ asset(Storage::url($bill->profile_image)) }}" alt="Profile"
                                              style="  border-radius: 50%;
                                            -webkit-border-radius: 50%;
                                            -moz-border-radius: 50%;
                                            width: 50px;
                                            height: 55px;">
                                        </td> --}}
                                        <td class="text-right">
                                            <h5><strong>  </strong></h5>
                                        </td>
                                        <td class="text-right">
                                            <h5><strong>  </strong></h5>
                                        </td>
                                        <td class="text-right">
                                            <h5><strong>  </strong></h5>
                                        </td>
                                        <td class="text-right">
                                            <h5><strong> </strong></h5>
                                        </td>
                                        <td class="text-right">
                                            <h5><strong></strong></h5>
                                        </td>
                                        <td class="text-right">
                                            <h5><strong></strong></h5>
                                        </td>
                                        <td class="text-right">
                                            <h5><strong></strong></h5>
                                        </td>
                                        <td class="text-right">
                                            <h5><strong></strong></h5>
                                        </td>

                                    </tr>
                                {{-- @endforeach --}}
                                   
                            </tbody>
                        </table>
                    </div>

                    <div class="row">
                        <div class="receipt-header receipt-header-mid receipt-footer">
                            {{-- <div class="col-xs-8 col-sm-8 col-md-8 text-left">
                                <div class="receipt-right">
                                    <h5>{{ __('Thanks for shopping') }}</h5>
                                </div>
                            </div> --}}
                            <div>
                                <div>
                                    <div> <a>
                                            <img style="width:10%; height:40%;" alt="themini"
                                                src="{{ asset('images/logo/logo4.jpg') }}"> </a> </div>
                                               <br>
                                                <h6> 13/1/2023</h6>
                                </div>
                            </div>

                        </div>
                        
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
