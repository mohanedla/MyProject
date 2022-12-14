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
                        <h3>{{ __('Brand management control') }}</h3>
                        <br>
                        <br>
                    </div>
                    <div class="col-12 col-md-6 order-md-2 order-first">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="dashboard_home">{{ __('Dashboard') }}</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ __('Brand') }}</li>
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
                        {{ __('Brand List') }}
                        {{-- <div class="buttons"> --}}


                        <a style="float: right;" href="/dashboard_add_brand"
                        class="btn btn-secondary rounded-pill">{{ __('add brand') }}</a>

                        {{-- </div> --}}
                    </div>
                    <div class="card-body">
                        <table class="table table-striped" id="table1">
                            <thead>
                                <tr>
                                    <th style="width: 50px;" scope="col">{{ __('#') }}</th>
                                    <th style="width: 50px;" scope="col">{{ __('Name') }}</th>
                                    <!-- <th style="width: 50px;" scope="col">{{ __('Serial Number') }}</th> -->
                                    <th style="width: 50px;" scope="col">{{ __('Country') }}</th>
                                    <th style="width: 50px;" scope="col">{{ __('Address') }}</th>
                                    <th style="width: 50px;" scope="col">{{ __('E-mail') }}</th>
                                    <th style="width: 50px;" scope="col">{{ __('Phone Number') }}</th>
                                    <th style="width: 50px;" scope="col">{{ __('photo') }}</th>
                                    <th style="width: 50px;" scope="col">{{ __('') }}</th>

                                </tr>
                            </thead>
                            <tbody>
                                {{-- @foreach ($data as $key => $item)
                                <tr>
                                    <td class="id">{{ ++$key }}</td>
                                    <td class="name">{{ $item->name }}</td>
                                    <td class="name">
                                        <div class="avatar avatar-xl">
                                            <img src="{{ URL::to('/images/'. $item->avatar) }}" alt="{{ $item->avatar }}">
                                        </div>
                                    </td>
                                    <td class="email">{{ $item->email }}</td>
                                    <td class="phone_number">{{ $item->phone_number }}</td>
                                    @if ($item->status == 'Active')
                                    <td class="status"><span class="badge bg-success">{{ $item->status }}</span></td>
                                    @endif
                                    @if ($item->status == 'Disable')
                                    <td class="status"><span class="badge bg-danger">{{ $item->status }}</span></td>
                                    @endif
                                    @if ($item->status == null)
                                    <td class="status"><span class="badge bg-danger">{{ $item->status }}</span></td>
                                    @endif
                                    @if ($item->role_name == 'Admin')
                                    <td class="role_name"><span  class="badge bg-success">{{ $item->role_name }}</span></td>
                                    @endif
                                    @if ($item->role_name == 'Super Admin')
                                    <td class="role_name"><span  class="badge bg-info">{{ $item->role_name }}</span></td>
                                    @endif
                                    @if ($item->role_name == 'Normal User')
                                    <td class="role_name"><span  class=" badge bg-warning">{{ $item->role_name }}</span></td>
                                    @endif
                                    <td class="text-center">
                                        <a href="{{ route('user/add/new') }}">
                                            <span class="badge bg-info"><i class="bi bi-person-plus-fill"></i></span>
                                        </a>
                                        <a href="{{ url('view/detail/'.$item->id) }}">
                                            <span class="badge bg-success"><i class="bi bi-pencil-square"></i></span>
                                        </a>
                                        <a href="{{ url('delete_user/'.$item->id) }}" onclick="return confirm('Are you sure to want to delete it?')"><span class="badge bg-danger"><i class="bi bi-trash"></i></span></a>
                                    </td>
                                </tr>
                            @endforeach --}}

                            <!-- @php
                            $i=1;
                        @endphp
                        @foreach($brand as $x)
                        <tr>
                          <td>{{$i++}}</td>
                          <td>{{$x->name}}</td>
                          <td>{{$x->id}}</td>
                          <td>{{$x->country}}</td>
                          <td>{{$x->address}}</td>
                          <td>{{$x->email}}</td>
                          <td>{{$x->phone_number}}</td>
                          <td><img style="width: 50%; height:50%;" src="{{asset(Storage::url($x->profile_image))}}" alt=""></td>
                          <td class="text-center">
                          <a data-bs-toggle="modal" data-bs-target="#type_men"
                                        data-bs-whatever="@mdo" onclick="showDetails({{json_encode($x)}},{{json_encode($x->name)}}">
                                            <span class="badge bg-info"><i class="bi bi-eye-fill"></i></span>
                                        </a>
                            <a href="/dashboard_edit_brand/{{$x->id}}">
                                <span class="badge bg-success"><i class="bi bi-pencil-square"></i></span>
                            </a>
                            <a href="/delete_brand/{{$x->id}}"
                                onclick="return confirm('Are you sure to want to delete it?')"><span
                                    class="badge bg-danger"><i class="bi bi-trash"></i></span></a>
                        </td>
                    </tr>
                        </tr>
                        @endforeach -->
                        @php
                                    $i = 1;
                                @endphp
                                @foreach ($brand as $x)
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>{{ $x->name }}</td>
                                        <!-- <td>{{ $x->id }}</td> -->
                                        <td>{{ $x->country }}</td>
                                        <td>{{ $x->address }}</td>
                                        <td>{{ $x->email }}</td>
                                        <td>{{ $x->phone_number }}</td>
                                        <td><img style="width: 50%; height:50%;"
                                                src="{{ asset(Storage::url($x->profile_image)) }}" alt=""></td>
                                        <td class="text-center">
                                            <a data-bs-toggle="modal" data-bs-target="#type_men" data-bs-whatever="@mdo"
                                                onclick="showDetails({{ json_encode($x) }},{{ json_encode(asset(Storage::url($x->profile_image))) }}) ">
                                                <span class="badge bg-info"><i class="bi bi-eye-fill"></i></span>
                                            </a>
                                            <a href="/dashboard_edit_brand/{{ $x->id }}">
                                                <span class="badge bg-success"><i class="bi bi-pencil-square"></i></span>
                                            </a>
                                            <a href="/delete_brand/{{ $x->id }}"
                                                onclick="return confirm('Are you sure to want to delete it?')"><span
                                                    class="badge bg-danger"><i class="bi bi-trash"></i></span></a>
                                        </td>
                                    </tr>
                                    </tr>
                                @endforeach


                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </div>
        <div class="modal fade" id="type_men" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

        <!-- <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" > {{ __('Brand') }}</h1><br>
                    <h1 class="modal-title fs-5"></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr>

                                <td>-->
                                    <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5"> {{ __('Brand') }}</h1><br>
                        <h1 class="modal-title fs-5"></h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <table class="table table-striped" id="table1">
                            <thead>
                                <tr>

                                    <td>
                                        <img id="image" style="width: 66%; margin-left: 30px;">
                                    </td>
                                    <td class="text-center">
                </tr>
                            </thead>


                            <tbody id="bodyrow" style=" word-spacing: 50px; ">
                            </tbody>
                        </table>
                        <td> {{ __('Name') }} : &nbsp; <span id="brand_name"></span> </td>
                        <td> &nbsp; &nbsp; &nbsp; &nbsp; {{ __('Email Address') }} : &nbsp <span id="brand_email"></span>
                        </td>
                        <br>
                        <td>{{ __('Country') }} : <span id="brand_country"></span> &nbsp; </td>
                        <td>&nbsp; &nbsp; &nbsp; &nbsp; <span id="brand_address"></span> :&nbsp; {{ __('Address') }} </td>
                        <br>
                        <td> {{ __('Phone Number') }} : <span id="brand_phone"></span> </td>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary"
                            data-bs-dismiss="modal">{{ __('Close') }}</button>

                    </div>
                    </form>
            </div>
        </div>
    </div>
    </div>
        <footer>
            <div class="footer clearfix mb-0 text-muted ">
                <div class="float-start">
                    <!-- <p>2021 &copy; Soeng Souy</p> -->
                </div>
                <div class="float-end">
                    <!-- <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a
                            href="http://soengsouy.com">Soeng Souy</a></p> -->
                </div>
            </div>
        </footer>
    </div>
    <script>
        function showDetails(brand, img) {
            document.getElementById("brand_name").innerHTML = brand['name'];
            document.getElementById("brand_email").innerHTML = brand['email'];
            document.getElementById("brand_country").innerHTML = brand['country'];
            document.getElementById("brand_address").innerHTML = brand['address'];
            document.getElementById("brand_phone").innerHTML = brand['phone_number'];
            var myImage = document.getElementById("image");
            myImage.src = img;
            console.log(img);
            myImage.alt = 'alt';
        }
    </script>
@endsection
