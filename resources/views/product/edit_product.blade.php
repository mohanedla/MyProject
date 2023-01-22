@extends('dashboard.layouts.master')
@section('menu')
    @extends('dashboard.sidebar.dashboard')
@endsection
@section('content')


    <div id="main">
        <style>
            .avatar.avatar-im .avatar-content,
            .avatar.avatar-xl img {
                width: 40px !important;
                height: 40px !important;
                font-size: 1rem !important;
            }

            .form-group[class*=has-icon-].has-icon-lefts .form-select {
                padding-left: 2rem;
            }
        </style>
<!-- 
        {{-- <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header> --}} -->
    {{-- message --}}
    {!! Toastr::message() !!}
        <div class="page-heading">
            <div class="page-title">
                <div class="row">
                    <div class="col-12 col-md-6 order-md-1 order-last">
                        <h3>{{ __('Products management control') }}</h3>
                        <br>
                    </div>
                    <div class="col-12 col-md-6 order-md-2 order-first">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/dashboard_home">{{ __('Dashboard') }}</a></li>
                                <li class="breadcrumb-item"><a href="all_product/0">{{ __('Product Management') }}</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ __('edit Product') }}
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">{{ __('edit Product') }}
                            <button style="float: right;" type="button" data-bs-toggle="modal" data-bs-target="#type_men"
                                data-bs-whatever="@mdo"
                                class="btn btn-secondary rounded-pill">{{ __('add Type') }}</button>
                            <button style="float: right;" type="button" data-bs-toggle="modal" data-bs-target="#size"
                                data-bs-whatever="@mdo"
                                class="btn btn-secondary rounded-pill">{{ __('Add Size') }}</button>
                            <button style="float: right;" type="button" data-bs-toggle="modal" data-bs-target="#color"
                                data-bs-whatever="@mdo"
                                class="btn btn-secondary rounded-pill"">{{ __('Add Color') }}</button>

                        </h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">

                            <form class="signup-form" action="{{ route('update_product',['id'=>$product->id]) }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row">

                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="city-column">{{ __('Product Name') }} </label>
                                            <input type="text" id="city-column" value="{{$product->name}}" class="form-control" required
                                                placeholder="ادخل اسم المنتج"
                                                name="productName">
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="last-name-column"> {{ __('Product type') }}</label>
                                            <fieldset class="form-group">
                                                <select class="form-select @error('role_name') is-invalid @enderror" required
                                                    name="product_name" id="role_name">
                                                    <option selected value="{{$product->category_id}}">{{$product->name}} </option>
                                                    @foreach ($categories as $category)
                                                    @if($product->category_id != $category->id)
                                                        <option value="{{ $category->id }}">{{ __($category->name) }}
                                                    @endif
                                                        </option>
                                                    @endforeach

                                                </select>

                                            </fieldset>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="last-name-column">{{ __('Brand') }}</label>
                                            <fieldset class="form-group">
                                                <select class="form-select @error('role_name') is-invalid @enderror" required
                                                    name="product_brand" id="role_name">
                                                    <option selected value="{{$product->brand_id}}">{{$product->brand->name}} </option>
                                                    @foreach ($brands as $brand)
                                                    @if($product->brand_id != $brand->id)
                                                        <option value="{{ $brand->id }}">{{ __($brand->name) }}
                                                        </option>
                                                    @endif
                                                    @endforeach
                                                </select>

                                            </fieldset>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="city-column">{{ __('Specifications') }} </label>
                                            <input type="text" value="{{$product->specification}}" id="city-column" class="form-control"
                                                placeholder="{{ __('enter Specifications') }}"
                                                name="product_specification">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="country-floating">{{ __('Quantity') }}</label>
                                            <input type="number" value="{{$product->quantity}}" id="country-floating" class="form-control" required
                                                name="product_quantity" placeholder="{{ __('enter Quantity') }}">
                                        </div>
                                    </div>


                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="company-column">{{ __('Size') }}</label>
                                            <fieldset class="form-group">
                                                <select style="width=100%" class="form-select" name="product_size[]" 
                                                    id="level" id="field2" multiselect-select-all="true" multiple
                                                    onchange="console.log(Array.from(this.selectedOptions).map(x=>x.value??x.text))"
                                                    multiselect-hide-x="true">
                                                    {{-- <select multiple class="form-select @error('role_name') is-invalid @enderror" name="role_name" id="role_name"> --}}
                                                    @foreach ($product->sizes as $s)
                                                        <option selected value="{{ $s->size_id }}">{{ __($s->size->name) }} </option>
                                                    @endforeach
                                                    @foreach ($size as $s)
                                                        @if(!$product->sizes->where('size_id', $s->id)->first())
                                                            <option value="{{ $s->id }}">{{ __($s->name) }} </option>
                                                        @endif
                                                    @endforeach
                                                </select>

                                            </fieldset>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="email-id-column">{{ __('Color') }}</label>
                                            <fieldset class="form-group">
                                                <select style="width=100%" class="form-select" name="product_color[]" required
                                                    id="level" id="field2" multiselect-select-all="true" multiple
                                                    onchange="console.log(Array.from(this.selectedOptions).map(x=>x.value??x.text))"
                                                    multiselect-hide-x="true">
                                                    {{-- <select multiple class="form-select @error('role_name') is-invalid @enderror" name="role_name" id="role_name"> --}}
                                                    @foreach ($product->colors as $c)
                                                        <option selected value="{{ $c->color_id }}">{{ __($c->color->name) }} </option>
                                                    @endforeach
                                                    @foreach ($color as $c)
                                                    @if(!$product->colors->where('color_id', $c->id)->first())
                                                        <option value="{{ $c->id }}">{{ __($c->name) }} </option>
                                                    @endif
                                                    @endforeach
                                                </select>

                                            </fieldset>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-12">
                                        <div class="form-group">

                                            <label for="email-id-column">{{ __('Purchasing price') }}</label>
                                            <input type="text" id="email-id-column" value="{{$product->price_purchas}}" class="form-control" required
                                                name="product_price_purchas" placeholder="{{ __('enter price') }}">
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-12">
                                        <div class="form-group has-icon-lefts">

                                            <label for="email-id-column"> {{ __('Upload Product Picture') }}</label>
                                            <input type="file" class="form-control" placeholder="Name"
                                            id="first-name-icon" name="product_image[]" multiple/>
                                            {{-- <div class="form-control-icon avatar avatar.avatar-im">
                                                <img src="{{ URL::to('/images/'. $data[0]->avatar) }}">
                                            </div> --}}

                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">

                                            <label for="email-id-column">{{ __('Selling price') }}</label>
                                            <input type="text" id="email-id-column" value="{{$product->price}}" class="form-control" required
                                                name="product_price" placeholder="{{ __('enter price') }}">
                                        </div>
                                    </div>

                                    <div class="col-md-3 col-6">
                                        <div class="form-group">
                                            <img style="width: 50%;" src="{{asset(Storage::url($product->profile_image))}}" alt="">
                                        </div>
                                    </div>

                                    @foreach ($product->images as $image)
                                    <div class="col-md-3 col-6">
                                        <div class="form-group">
                                            <img style="width: 50%;" src="{{asset(Storage::url($image->image))}}" alt="">
                                        </div>
                                    </div>
                                    @endforeach

                                </div>


                                <div class="col-12 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary me-1 mb-1">{{ __('Save') }}</button>
                                    <button type="reset"
                                        class="btn btn-light-secondary me-1 mb-1">{{ __('Reset') }}</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- for categories --}}
    <div class="modal fade" id="type_men" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">{{ __('New Category') }}</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    @if ($id_page==1)
                    <form action="{{ route('AddCategoryMen') }}" method="post" enctype="multipart/form-data">
                        @elseif ($id_page==2)
                        <form action="{{ route('AddCategoryWomen') }}" method="post" enctype="multipart/form-data">
                        @else
                        <form action="{{ route('AddCategoryKids') }}" method="post" enctype="multipart/form-data">
                    @endif
                        @csrf
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">{{ __('New Category') }}:</label>
                            <input type="text" class="form-control" id="recipient-name" name="category_name"
                                placeholder="{{ __('Enter Category Name') }}" required="required">
                        </div>

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

    {{-- color --}}
    <div class="modal fade" id="color" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">{{ __('New Color') }}</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('AddColor') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">{{ __('New Color') }}:</label>
                            <input type="text" class="form-control" placeholder="{{ __('Enter Color Name') }}"
                                name="color_name" id="recipient-name" required="required">
                        </div>


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
    {{-- size --}}
    <div class="modal fade" id="size" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">{{ __('New Size') }}</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('AddSize') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">{{ __('New Size') }}:</label>
                            <input type="text" class="form-control" id="recipient-name" name="size_name"
                                placeholder="{{ __('Enter Size Name') }}" required="required">
                        </div>

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
@endsection
