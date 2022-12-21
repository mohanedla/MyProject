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
                <h3>{{ __('admins management control') }}</h3>
                <br>
                <br>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="dashboard_home">{{ __('Dashboard') }}</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ __('all admin') }}</li>
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
                 <h4>{{ __('Admins List') }}</h4>
                    {{-- <div class="buttons"> --}}
                        <a style="float: right;" href="{{route('add_employee')}}" class="btn btn-secondary"> {{ __('add admin') }}</a>

                  {{-- </div> --}}
                </div>
                <div class="card-body">
                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr>
                            <th style="width: 50px;" scope="col">{{ __('#')}}</th>
                            <th style="width: 50px;" scope="col">{{ __('name admin') }}</th>
                            <th style="width: 50px;" scope="col">{{ __('Email Address') }}</th>
                            <th style="width: 50px;" scope="col">{{ __('photo') }}</th>
                            <th style="width: 50px;" scope="col">{{ __('') }}</th>
                            </tr>
                        </thead>
                        <tbody>

                            @php
                                $i=1;
                                $j=0;
                            @endphp
                                @foreach ($users as $x)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$x->name}}</td>
                                    <td>{{$x->email}}</td>
                                    <td>
                                        <div class="avatar avatar-xl me-3">
                                            <img src="{{asset(Storage::url($x->profile_image))}}" alt="" srcset="">
                                        </div>
                                        
                                    </td>
                                    <td class="text-center">
                                    <a data-bs-toggle="modal" data-bs-target="#type_men"
                                    data-bs-whatever="@mdo" onclick="showDetails({{ json_encode($x) }},{{ json_encode(asset(Storage::url($x->profile_image))) }}) ">
                                            <span class="badge bg-info"><i class="bi bi-eye-fill"></i></span>
                                         </a>
                                        <a href="{{route('delete_employee',['id'=>$x->id])}}" onclick="return confirm('Are you sure to want to delete it?')"><span class="badge bg-danger"><i class="bi bi-trash"></i></span></a>
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
                    <h1 class="modal-title fs-5"> {{ __('admin') }}</h1><br>
                    <h1 class="modal-title fs-5"></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr>

                                <td>
                                    <img id="image" style="width: 66%;  margin-left: 30px;">
                                </td>
                                <td class="text-center">
                            </tr>


                        </thead>


                        <tbody id="bodyrow" style=" word-spacing: 50px; ">
                        </tbody>
                    </table>
                    <h1 class="modal-title fs-5"> {{ __('Name') }} : &nbsp; <span id="user_name"></span> </h1>
                    <h1 class="modal-title fs-5">  {{ __('Email Address') }} : &nbsp; <span id="user_email"></span>
                </h1>
                </div>
                <div class="modal-footer">
                    <!-- <button type="button" class="btn btn-secondary"
                        data-bs-dismiss="modal">{{ __('Close') }}</button> -->

                </div>
                </form>
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
    function showDetails(user, img) {
        document.getElementById("user_name").innerHTML = user['name'];
        document.getElementById("user_email").innerHTML = user['email'];
        var myImage = document.getElementById("image");
        myImage.src = img;
        console.log(img);
        myImage.alt = 'alt';
    }
</script>
@endsection
