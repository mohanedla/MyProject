@extends('dashboard.layouts.master')
@section('menu')
<title>{{ __('checkout') }}</title>

@extends('dashboard.sidebar.dashboard')
@endsection
@section('content')  
itle>

    <!-- End Header -->

    <div id="main">
        
        <div class="page-heading">
            <div class="page-title">
                <div class="row">
                    <div class="col-12 col-md-6 order-md-1 order-last">
                        <h3>{{ __('notic management ') }}</h3>
                        <br>
                        <br>
                    </div>
                    <div class="col-12 col-md-6 order-md-2 order-first">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/dashboard_home">{{ __('Dashboard') }}</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ __('notice') }}</li>
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
                        <h4>{{ __('notice List') }}</h4>


                    </div>
                    <div class="card-body">
                        <table class="table table-striped" id="table1">
                            <thead>
                                <tr>
                                    <th style="width: 50px;" scope="col">{{ __('#') }}</th>
                                    <th style="width: 50px;" scope="col">{{ __('User name') }}</th>
                                    <th style="width: 50px;" scope="col">{{ __('Email Address') }}</th>
                                    <th style="width: 50px;" scope="col">{{ __('Phone Number') }}</th>
                                    <th style="width: 50px;" scope="col">{{ __('Role') }}</th>
                                    
                                    <th style="width: 50px;" scope="col"></th>


                                </tr>
                            </thead>
                            <tbody>
                               
                            @php
                                $i=1;
                                
                            @endphp
                            @foreach ($notices as $x)
                               @if(Auth::User()->role==1)
                                
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$x->name}}</td>
                                    <td>{{$x->email}}</td>
                                    <td>{{$x->phone1}}</td>
                                    @if($x->role==2)
                                    <td>{{__('Supervisor')}}</td>
                                    @else
                                    <td>{{__('user')}}</td>
                                    @endif
                                    <td class="text-center"> 
                                 <!-- <a data-bs-toggle="modal" data-bs-target="#type_men" data-bs-whatever="@mdo">
                                    <span class="badge bg-info"><i class="bi bi-eye-fill"></i></span>
                                </a> -->
                                <a data-bs-toggle="modal" data-bs-target="#type_men"
                                    data-bs-whatever="@mdo" onclick="showDetails({{ json_encode($x) }}) ">
                                            <span class="badge bg-info"><i class="bi bi-eye-fill"></i></span>


                            
                             
                                        <a href="{{route('delete_notice',['id'=>$x->id])}}" onclick="return confirm('Are you sure to want to delete it?')"><span class="badge bg-danger"><i class="bi bi-trash"></i></span></a>

                                    </td>
                                </tr>
                                @elseif(Auth::User()->role==2 and $x->role==3)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$x->name}}</td>
                                    <td>{{$x->email}}</td>
                                    <td>{{$x->phone1}}</td>
                                    @if($x->role==2)
                                    <td>{{__('Supervisor')}}</td>
                                    @else
                                    <td>{{__('user')}}</td>
                                    @endif
                                    <!-- <td>{{$x->subject}}</td> -->
                                    
                                     <td class="text-center"> 
                                 <!-- <a data-bs-toggle="modal" data-bs-target="#type_men" data-bs-whatever="@mdo">
                                    <span class="badge bg-info"><i class="bi bi-eye-fill"></i></span>
                                </a> -->
                                <a data-bs-toggle="modal" data-bs-target="#type_men"
                                    data-bs-whatever="@mdo" onclick="showDetails({{ json_encode($x) }}) ">
                                            <span class="badge bg-info"><i class="bi bi-eye-fill"></i></span>


                            
                             
                                        <a href="{{route('delete_notice',['id'=>$x->id])}}" onclick="return confirm('Are you sure to want to delete it?')"><span class="badge bg-danger"><i class="bi bi-trash"></i></span></a>

                                    </td>
                                </tr>
                                @endif
                                @endforeach                            
                            <tbody>

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
        <div class="modal fade" id="type_men" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel"> {{ __('The reason for the notice') }} </h1>
                        <br>
                        <h1 class="modal-title fs-5" id="productName"></h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <table class="table table-striped" id="table1">
                            <thead>
                                <tr>
                                
                                </tr>
                            </thead>
                            <tbody id="bodyrow">
                            <h2 class="modal-title fs-5"> <span id="notices_subject"> </span> </h2>
                            <!-- <tr>  </tr>  -->

                            </tbody>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <!-- <button type="button" class="btn btn-secondary"
                            data-bs-dismiss="modal">{{ __('Close') }}</button> -->
                        <!-- <button type="submit" class="btn btn-primary">{{ __('Save') }}</button> -->
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
    function showDetails(notices) {
        document.getElementById("notices_subject").innerHTML = notices['subject'];

        myImage.alt = 'alt';
    }
</script>
@endsection
