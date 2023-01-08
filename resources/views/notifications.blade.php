@extends('dashboard.layouts.master')
@section('menu')
@extends('dashboard.sidebar.dashboard')
@endsection
@section('content')

<!-- End Header -->

<div id="main">

    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>{{ __('notifications') }}</h3>
                <br>
                <br>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="dashboard_home">{{ __('Dashboard') }}</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ __('notifications') }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        {{-- message --}}
        {!! Toastr::message() !!}
        <!-- <section class="section">
            <div class="card">
                <div class="card-header">
                 <!-- <h4>{{ __('reports List') }}</h4> -->
                
<!--                  
                </div>
                <div class="card-body">
                    <table class="table table-striped" id="table1"> -->
                        <!-- <thead>
                            <tr>
                            <th style="width: 50px;" scope="col">{{ __('#')}}</th>
                            <th style="width: 50px;" scope="col">{{ __('المنتج') }}</th>
                            <th style="width: 50px;" scope="col">{{ __('العلامة التجارية') }}</th>
                            <th style="width: 50px;" scope="col">{{ __('الكمية المباعة') }}</th>
                            <th style="width: 50px;" scope="col">{{ __('الكمية المتبقية') }}</th>
                            <th style="width: 50px;" scope="col">{{ __('الربح') }}</th>

                            <th style="width: 50px;" scope="col"></th>

                        
                        </tr> -->
                    <!-- </thead>
                    <td>
                    </td>
                    <td>
                    </td>
                    <td>
                    </td>
                    <td>
                    </td> 
                    <td>
                    </td>
                    <td>
                    </td>


                    <td class="text-center">
                                    <a href="Bills"  data-bs-target="#type_men"
                                    data-bs-whatever="@mdo" >
                                        <span class="badge bg-info"><i class="bi bi-eye-fill"></i></span>
                                    </a>

                                 
                                    <a href="#" onclick="return confirm('Are you sure to want to delete it?')"><span class="badge bg-danger"><i class="bi bi-trash"></i></span></a>
                                </td>
                        <tbody>

                           
                        </tbody>
                    </table> 
                </div>
                <script>
                    $(document).ready(function () {
                      $("#tblCustomer").DataTable();
                    });
                  </script>
            </div>
        </section> -->
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
{
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
