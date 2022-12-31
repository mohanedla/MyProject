@extends('dashboard.layouts.master')
@section('menu')
@extends('dashboard.sidebar.dashboard')
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
                        <li class="breadcrumb-item"><a href="dashboard_home">{{ __('Dashboard') }}</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ __('Bills') }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        {{-- message --}}
        {!! Toastr::message() !!}

    </div>
    <div class="col-md-12">
 <div class="row">

        <div class="receipt-main col-xs-10 col-sm-10 col-md-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-3">
            <div class="row">
    			<div class="receipt-header">
					<div class="col-xs-6 col-sm-6 col-md-6">

						<div class="receipt-left">
                            @foreach ($orders as $order)
                                <img class="img-responsive" alt="iamgurdeeposahan" src="{{ asset(Storage::url($order->user->profile_image)) }}" style="width: 71px; border-radius: 43px;">
                            @endforeach
						</div>
					</div>
					<!-- <div class="col-xs-6 col-sm-6 col-md-6 text-right">
						<div class="receipt-right">
							<h5>Company Name.</h5>
							<p>+1 3649-6589 <i class="fa fa-phone"></i></p>
							<p>company@gmail.com <i class="fa fa-envelope-o"></i></p>
							<p>USA <i class="fa fa-location-arrow"></i></p>
						</div>
					</div> -->
				</div>
            </div>

			<div class="row">
                @foreach ($orders as $order)
				<div class="receipt-header receipt-header-mid">
					<div class="col-xs-8 col-sm-8 col-md-8 text-left">
						<div class="receipt-right">
							<h5>{{ __($order->user->name) }}</h5>
							<p><b>{{ __('Phone Number') }}:</b> {{ __($order->user->name) }}</p>
							<p><b> {{ __('Email') }}:</b>   {{ __($order->user->email)}}    </p>
							<p><b> {{ __('Address') }}:</b>   {{   $order->user->address}}   </p>

						</div>
					</div>
					<div class="col-xs-4 col-sm-4 col-md-4">
						<div class="receipt-left">
							<h3>{{ __('INVOICE') }} # {{$order->id}}</h3>
						</div>
					</div>
				</div>
                @endforeach
            </div>

            <div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>{{ __('Product Name') }}</th>
                            <th>{{ __('Quantity') }}</th>
                            <th>{{ __('Unit Price') }}</th>
                            <th>{{ __('Total') }}</th>
                            <th>{{ __('Unit Price') }}</th>
                            <th>{{ __('Total') }}</th>

                        </tr>
                    </thead>
                    <tbody>
                        @if ($name)
                        @for ($i=0; $i<(count($name));$i++)
                        <tr>
                        <td class="text-right"><h5><strong>{{$name[$i]}} </strong></h5></td>
                        <td class="text-right"><h5><strong>{{$quantity[$i]}} </strong></h5></td>
                        <td class="text-right"><h5><strong>${{$Unit_Price[$i]}} </strong></h5></td>
                        <td class="text-right"><h5><strong>${{$Total[$i]}}</strong></h5></td>
                        <td class="text-right"><h5><strong>500DL </strong></h5></td>
                        <td class="text-right"><h5><strong>2000DL </strong></h5></td>
                    </tr>
                        @endfor
                        @endif

                        <tr>
                            <td class="text-right"><h2><strong>{{ __('Total') }} </strong></h2></td>
                            <th></th>
                            <th></th>
                            @foreach ($orders as $order)
                            <td class="text-right"><h2><strong>${{$order->Totals}} </strong></h2></td>
                            <th></th>
                            <td class="text-right"><h2><strong>${{$order->Totals_Dl}} </strong></h2></td>
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
							<h5 >{{ __('Thanks for shopping') }}</h5>
						</div>
					</div>
					<div >
						<div>
                        <div> <a >
                         <img style="width:10%; height:40%;"
                                alt="themini" src="{{ asset('images/logo/logo4.jpg') }}"> </a> </div>
						</div>
					</div>

				</div>
                @foreach ($orders as $order)

                <h6> {{$order->created_at}}</h6>
                @endforeach

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
function showDetails(pro,sizes,colors){
    document.getElementById("productName").innerHTML = pro['name'];
    var table = document.getElementById("bodyrow");
    table.innerHTML = "";
    var max = sizes.length;
    if(max < colors.lenght){
        var max = colors.length;
    }
    for(var i=0; i<max;i++){
        if (top) { var row = table.insertRow(-1); }
        else { var row = table.insertRow(); }
        // (B3) INSERT CELLS
        var cell = row.insertCell();
        cell.innerHTML = colors[i]['color']['name'];
        cell = row.insertCell();
        cell.innerHTML = sizes[i]['size']['name'];
    }
}
</script>
@endsection