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
                        <li class="breadcrumb-item"><a href="/dashboard_home">{{ __('Dashboard') }}</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ __('notifications') }}</li>
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
                <h4>{{ __('notifications List') }}</h4>

                </div>
                <div class="card-body">
                    <table class="table table-striped" id="table1">
                      
                        <tbody>

                            @php
                                $i=1;
                                $j=0;
                            @endphp    
                                @foreach ($notifications as $x)
                                <tr>
                                  
                                    <td>
                                        @switch($x->type)
                                            @case('login')  
                                           {{-- <h3> <i style="margin-left:290%" class="bi bi-box-arrow-in-right  text-success mr-3"></i></h3> --}}
                                           <h2> <i style="margin-left:290%" class="bi bi-person-plus-fill  text-blue mr-3"></i></h2>

                                           <td style="text-align: center" scope="col">  <h4>  بالدخول إلى الموقع  &nbsp; {{$x->user->name}} &nbsp; لقد قام المستخدم </h4></td>
                                                @break
                                            @case('new_order')
                                                {{-- <i class="bi bi-file-earmark-plus-fill text-info"></i> --}}
                                                <h3> <i style="margin-left:290%" class="bi bi-receipt text-purple mr-3"></i></h3>
                                                <th style="text-align: center" scope="col">  <h4> بإنشاء طلبية جديدة &nbsp;  {{$x->user->name}}  &nbsp;    لقد قام المستخدم </h4></th>
                                                @break
                                            @case('new_report')
                                                {{-- <i class="bi bi-flag text-primary"></i> --}}
                                                <h3> <i style="margin-left:290%" class="bi bi-file-earmark-plus-fill text-primary mr-3"></i></h3>
                                                <th style="text-align: center" scope="col">  <h4> بإنشاء تقرير جديد &nbsp;  {{$x->user->name}}&nbsp;  لقد قام المستخدم </h4></th>
                                                @break
                                            @case('new_notice')
                                                {{-- <i class="bi bi-app-indicator text-danger"></i>
                                                @break --}}

                                                <h3> <i style="margin-left:290%" class="bi bi-exclamation-triangle text-danger mr-3"></i></h3>
                                                <th style="text-align: center" scope="col">  <h4> بإرسال بلاغ جديد &nbsp; {{$x->user->name}}&nbsp;  لقد قام المستخدم </h4></th>
                                                @break
                                        @endswitch
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



</script>
@endsection
