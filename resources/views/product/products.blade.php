@extends('dashboard.layouts.master')
@section('menu')
@extends('dashboard.sidebar.dashboard')
@endsection
@section('content')


<div id="main">

    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>{{ __('Products management control') }}</h3>
                <br>
                <br>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/dashboard_home">{{ __('Dashboard') }}</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ __('Product Management') }}</li>
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
                <h4>{{ __('Products List') }}</h4>
                    {{-- <div class="buttons"> --}}
                        @if($id!=0)
                        <a style="float: right;" href="{{route('add_product',['id'=>$id])}}" class="btn btn-secondary">{{ __('add Product') }}</a>
                        @endif
                  {{-- </div> --}}
                </div>
                <div class="card-body">
                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr>
                            <th style="width: 50px;" scope="col">{{ __('#')}}</th>
                            <th style="width: 50px;" scope="col">{{ __('Name')}}</th>
                            <th style="width: 50px;" scope="col">{{ __('brand')}}</th>
                            <th style="width: 50px;" scope="col">{{ __('Gender')}}</th>
                            <th style="width: 50px;" scope="col">{{ __('Specifications')}}</th>
                            <th style="width: 50px;" scope="col">{{ __('Quantity')}}</th>
                            <th style="width: 50px;" scope="col">{{ __('الكمية المباعة')}}</th>
                            <th style="width: 50px;" scope="col">{{ __('الكمية المتبقية')}}</th>
                            <th style="width: 50px;" scope="col">{{ __('Selling price')}}</th> -->
                            <th style="width: 50px;" scope="col">{{ __('admin')}}</th>
                            <th style="width: 50px;" scope="col">{{ __('photo')}}</th>
                            <th style="width: 50px;" scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>

                            @php
                                $i=1;
                                $j=0;
                            @endphp 
                                @foreach ($admin as $x)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$x->name}}</td>
                                    <td>{{$x->brand->name}}</td>
                                    <td>{{$x->collection}}</td>
                                    <td >{{$x->specification}}</td>
                                    <td style="text-align: center;">{{$x->quantity}}</td>
                                    @if($x->quantity_price==0)
                                    <td style="text-align: center;">0</td>
                                    @else
                                    <td style="text-align: center;">{{$x->quantity_price}}</td>
                                    @endif
                                    <td style="text-align: center;">{{$x->quantity - $x->quantity_price}}</td>
                                    @if($x->user)
                                    <td>{{$x->user->name}}</td>
                                    @else
                                    <td>/</td>
                                    @endif
                                    <td>


                                        <div class="avatar avatar-xl me-3">
                                            <img src="{{asset(Storage::url($x->profile_image))}}" alt="" srcset="">
                                        </div>

                                        </td>
                                    <td class="text-center">
                                        <a data-bs-toggle="modal" data-bs-target="#type_men"
                                        data-bs-whatever="@mdo"
                                        onclick="showDetails({{json_encode($x)}},{{json_encode($x->profile_image)}},{{json_encode($x->sizes)}}
                                        ,{{json_encode($x->colors)}},{{ json_encode(asset(Storage::url($x->profile_image))) }})">
                                            <span class="badge bg-info"><i class="bi bi-eye-fill"></i></span> </a>

                                        <a href="/edit_product/{{$x->id}}/{{$id}}">
                                            <span class="badge bg-success"><i class="bi bi-pencil-square"></i></span>
                                        </a>
                                        <a href="{{route('delete_product',['id'=>$x->id])}}" onclick="return confirm('Are you sure to want to delete it?')"><span class="badge bg-danger"><i class="bi bi-trash"></i></span></a>
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
                    $(document).ready(function () {
                      $("#tblCustomer").DataTable();
                    });
                  </script>
            </div>
        </section>
    </div>

    {{-- for categories --}}
    <div class="modal fade" id="type_men" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel"> {{ __('Product data') }}</h1>

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">


                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr>
                                <div id="Gallerycarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
                                    <div class="carousel-inner" >
                                        <div class="carousel-item active">
                                            <img  class="d-block w-100" id="image"  style="height: 250px; width: 20%">
                                        </div>


                                 
                                </div>


                            </tr>
                            <div>
                        <h1 class="modal-title fs-5"> {{ __('Purchasing price') }} : &nbsp; <span id="price2"> </span>
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                         {{ __('Selling price') }}  : &nbsp; <span id="price1"></span>
                    </h1>
                </div>
                                <th style="width: 30px;" scope="col">{{ __('Colors') }}</th>
                                <th style="width: 30px;" scope="col">{{ __('Sizes') }}</th>


                        </thead>
                        <tbody id="bodyrow">

                        </tbody>

                    </table>
                   </div>


                </form>
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
function showDetails(pro,images,sizes,colors,img)
{
    var myImage = document.getElementById("image").src=img;
    document.getElementById("price1").innerHTML = pro['price'];
    document.getElementById("price2").innerHTML = pro['price_purchas'];
    var table = document.getElementById("bodyrow");
    table.innerHTML = "";
    var max = sizes.length;

    if(max < colors.length){
        var max = colors.length;
    }
    for(var i=0; i<max;i++){
        if (top) { var row = table.insertRow(-1); }
        else
         { var row = table.insertRow(); }
        // (B3) INSERT CELLS
        if(colors[i]){
            var cell = row.insertCell();
            cell.innerHTML = colors[i]['color']['name'];
        }else{
            var cell = row.insertCell();
            cell.innerHTML = "";
        }
        if(sizes[i]){
            cell = row.insertCell();
            cell.innerHTML = sizes[i]['size']['name'];
        }else{
            var cell = row.insertCell();
            cell.innerHTML = "";
        }

    }  
}
</script>
@endsection
