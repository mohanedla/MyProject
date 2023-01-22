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
                <h3>{{ __('Reports management') }}</h3>
                <br>
                <br>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/dashboard_home">{{ __('Dashboard') }}</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ __('Reports') }}</li>
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
                 <h4>{{ __('reports List') }}</h4> 
                    {{-- <div class="buttons"> --}}
                        <a style="float: right; margin: 3px; " target="_blank" href="{{route("R2",["type"=>1])}}" onClick="openWindowReload(this)" class="btn btn-secondary"> {{ __('اكثر 5 منتجات مبيعا') }}</a>
                        <a style="float: right; margin: 3px;"target="_blank" href="{{route("R2",["type"=>2])}}" onClick="openWindowReload(this)" class="btn btn-secondary"> {{ __('المنتجات المباعة') }}</a>
                        <a style="float: right; margin: 3px;"target="_blank" href="{{route("R2",["type"=>3])}}" onClick="openWindowReload(this)" class="btn btn-secondary"> {{ __('جرد مالي ') }}</a>
                        <a style="float: right; margin: 3px;"target="_blank" href="{{route("R2",["type"=>4])}}" onClick="openWindowReload(this)" class="btn btn-secondary"> {{ __('المنتجات الغير مباعة ') }}</a>
                        <a style="float: right; margin: 3px;"  target="_blank" href="{{route("R2",["type"=>5])}}" onClick="openWindowReload(this)" class="btn btn-secondary"> {{ __('جرد المنتجات') }}</a>

                  {{-- </div> --}}

                </div>
                <div class="card-body">
                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr>
                            <th style="width: 50px;" scope="col">{{ __('#')}}</th>
                            <th style="width: 50px;" scope="col">{{ __('name admin') }}</th>
                            <th style="width: 50px;" scope="col">{{ __('نوع التقرير') }}</th>
                            <th style="width: 50px;" scope="col">{{ __('تاريخ ') }}</th>

                        </tr>
                    </thead>
                   <tbody>
                    @foreach ($reports as $key => $report)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$report->user->name}}</td>
                            <td>{{$report->name}}</td>
                            <td>{{$report->created_at->diffForHumans()}}</td>
                        </tr>
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
    function openWindowReload(link) {
        var href = link.href;
        window.open(href,'_blank');
        document.location.reload(true)
    }
</script>
@endsection
