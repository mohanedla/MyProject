@extends('dashboard.layouts.master')
@section('menu')
    @extends('dashboard.sidebar.dashboard')
@endsection
@section('content')
<style>

    </style>
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
            <section class="section">
                <div class="card">
                    <div class="card-header">
                        <h4>{{ __('Bills List') }}</h4>


                    </div>
                    <div class="card-body">
                        <table class="table table-striped" id="table1">
                            <thead>
                                <tr>
                                    <th style="width: 50px;" scope="col">{{ __('#') }}</th>
                                    <th style="width: 50px;" scope="col">{{ __('invoice number') }}</th>
                                    <th style="width: 50px;" scope="col">{{ __('User name') }}</th>
                                    <th style="width: 50px;" scope="col">{{ __('Email Address') }}</th>
                                    <th style="width: 50px;" scope="col">{{ __('Phone Number') }}</th>
                                    <th  style="width: 50px;" scope="col" class="text-align:center">{{ __('Total') }}</th>
                                    <th style="width: 50px;" scope="col" class="text-center">{{ __('تاريخ الإنشاء') }}</th>
                                    <th style="width: 50px;" scope="col" class="text-center">{{ __('التاريخ الحالي') }}</th>
                                    <th style="width: 45px margin-right:5px" scope="col"  class="text-center"> {{ __('order status') }} &nbsp;&nbsp;&nbsp;</th>


                                    <th style="width: 70px;" scope="col"></th>


                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i = 0;
                                    $j = 0;
                                @endphp
                                @foreach ($orders as $order)
                                    <tr>
                                        <td>
                                            {{ ++$i }}
                                        </td>
                                        <td>
                                            {{ $order->id }}
                                        </td>
                                        <td>
                                            {{ $order->user->name }}
                                        </td>
                                        <td>
                                            {{ $order->user->email }}
                                        </td>
                                        <td>
                                            {{ $order->user->phone_number }}
                                        </td>
                                        <td class="text-align:center">
                                            {{ $order->total }}$&nbsp;&nbsp;&nbsp;
                                        </td>
                                        <td class="text-center">
                                            {{ $order->created_at->format('Y-m-d') }}&nbsp;<br>
                                            {{$order->created_at->format('H:i')}}
                                        </td>
                                        <td class="text-center">
                                                 {{$o->format('Y-m-d')}} &nbsp;<br> 
                                                 {{$o->format('H:i')}}
                                                </td>
                                       
                                        
                                       
                                        <td>
                                            <label class="switch">
                                                {{ Form::open(['route' => ['check', $order->id], 'method' => 'post']) }}
                                                {{ csrf_field() }}
                                                @if ($order->status == 1)
                                                    <input type="checkbox" onClick="this.form.submit()" checked disabled>
                                                    <span class="slider round"></span>
                                                @else
                                                    <input type="checkbox" onClick="this.form.submit()">
                                                    <span class="slider round"></span>
                                                @endif
                                                {{-- <input type="hidden" name="id" value="{{ $order->id }}"> --}}
                                                {{ Form::close() }}
                                                
                                            </label>
                                        </td>
                                        
                     
                                        <td class="text-center">
                                            @if ($order->status == 1)
                                            <a href="/Bills/{{ $order->id }}" data-bs-target="#type_men"
                                                data-bs-whatever="@mdo">
                                                <span class="badge bg-info"><i class="bi bi-eye-fill"></i></span>
                                            </a>
                                            <a href="/delete_bills/{{ $order->id }}"
                                               onclick="return confirm('{{ __(' Are you sure you want to cancel it?') }}')"><span
                                                   class="badge bg-danger"><i class="bi bi-trash"></i></span></a>
                                                @else
                                                    <a href="/Bills/{{ $order->id }}" data-bs-target="#type_men"
                                                    data-bs-whatever="@mdo">
                                                    <span class="badge bg-info"><i class="bi bi-eye-fill"></i></span>
                                                </a>
                                                
                                           <a href="/delete_bills/{{ $order->id }}"
                                               onclick="return confirm('{{ __('75% of the order value will be returned to the users account Are you sure you want to cancel it?') }}')"><span
                                                   class="badge bg-danger"><i class="bi bi-trash3-fill"></i></span></a>
                                                @endif

                                        </td>

                                    </tr>
                                    @php
                                        $j++;
                                    @endphp
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <script>
                        $(document).ready(function() {
                            $("#tblCustomer").DataTable();
                        });
                    </script>
                </div>
            </section>
        </div>

        {{-- for categories --}}
        <!-- <div class="modal fade" id="type_men" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel"> بيانات المنتج </h1><br>
                                <h1 class="modal-title fs-5" id="productName"></h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">

                                <table class="table table-striped" id="table1">
                                    <thead>
                                        <tr>
                                            <th style="width: 50px;" scope="col">الالوان</th>
                                            <th style="width: 50px;" scope="col">المقاسات</th>
                                        </tr>
                                    </thead>
                                    <tbody id="bodyrow">



                                    </tbody>
                                </table>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary"
                                    data-bs-dismiss="modal">{{ __('Close') }}</button>
                                <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div> -->

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
        // function showDetails(pro,sizes,colors)

        //     document.getElementById("productName").innerHTML = pro['name'];
        //     var table = document.getElementById("bodyrow");
        //     table.innerHTML = "";
        //     var max = sizes.length;
        //     if(max < colors.lenght){
        //         var max = colors.length;
        //     }
        //     for(var i=0; i<max;i++){
        //         if (top) { var row = table.insertRow(-1); }
        //         else { var row = table.insertRow(); }

        //         // (B3) INSERT CELLS
        //         var cell = row.insertCell();
        //         cell.innerHTML = colors[i]['color']['name'];
        //         cell = row.insertCell();
        //         cell.innerHTML = sizes[i]['size']['name'];
        //     }
        // }
    </script>
@endsection
