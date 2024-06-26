@extends('layouts.master')
@section('css')
    <!--Internal  Nice-select css  -->
    <link href="{{ URL::asset('assets/plugins/jquery-nice-select/css/nice-select.css') }}" rel="stylesheet" />
    <!-- Internal Select2 css -->
    <link href="{{ URL::asset('assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet">
@endsection
@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">Ecommerce</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/
                    Product-details</span>
            </div>
        </div>
        <div class="d-flex my-xl-auto right-content">
            <div class="pr-1 mb-3 mb-xl-0">
                <button type="button" class="btn btn-info btn-icon ml-2"><i class="mdi mdi-filter-variant"></i></button>
            </div>
            <div class="pr-1 mb-3 mb-xl-0">
                <button type="button" class="btn btn-danger btn-icon ml-2"><i class="mdi mdi-star"></i></button>
            </div>
            <div class="pr-1 mb-3 mb-xl-0">
                <button type="button" class="btn btn-warning  btn-icon ml-2"><i class="mdi mdi-refresh"></i></button>
            </div>
            <div class="mb-3 mb-xl-0">
                <div class="btn-group dropdown">
                    <button type="button" class="btn btn-primary">14 Aug 2019</button>
                    <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split"
                        id="dropdownMenuDate" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-left" aria-labelledby="dropdownMenuDate"
                        data-x-placement="bottom-end">
                        <a class="dropdown-item" href="#">2015</a>
                        <a class="dropdown-item" href="#">2016</a>
                        <a class="dropdown-item" href="#">2017</a>
                        <a class="dropdown-item" href="#">2018</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
@endsection
@section('content')
    <!-- row -->
    <div class="row row-sm">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body h-100">
                    <div class="row row-sm ">
                        <div class=" col-xl-5 col-lg-12 col-md-12">
                            <div class="preview-pic tab-content">
                                <div class="tab-pane active" id="pic-1"><img
                                        src="{{ asset($ImageProducts->image) }}" alt="image" /></div>
                                <div class="tab-pane" id="pic-2"><img
                                        src="{{ URL::asset('assets/img/ecommerce/shirt-2.png') }}" alt="image" /></div>
                                <div class="tab-pane" id="pic-3"><img
                                        src="{{ URL::asset('assets/img/ecommerce/shirt-3.png') }}" alt="image" /></div>
                                <div class="tab-pane" id="pic-4"><img
                                        src="{{ URL::asset('assets/img/ecommerce/shirt-4.png') }}" alt="image" /></div>
                                <div class="tab-pane" id="pic-5"><img
                                        src="{{ URL::asset('assets/img/ecommerce/shirt-1.png') }}" alt="image" /></div>
                            </div>
                            <ul class="preview-thumbnail nav nav-tabs">
                                <li class="active"><a data-target="#pic-1" data-toggle="tab"><img
                                            src="{{ asset($ImageProducts->image) }}" alt="image" /></a>
                                </li>
                                <li><a data-target="#pic-2" data-toggle="tab"><img
                                            src="{{ URL::asset('assets/img/ecommerce/shirt-2.png') }}" alt="image" /></a>
                                </li>
                               
							</ul>
                        </div>
                        <div class="details col-xl-7 col-lg-12 col-md-12 mt-4 mt-xl-0">

							<h4 class="product-title mb-1">{{$ImageProducts->product->name}}</h4>
                            <h6 class="price">current price: <span class="h3 ml-2">${{$ImageProducts->product->price}}</span></h6>
                            <p class="product-description">{{$ImageProducts->product->description}}</p>
                            <div class="colors d-flex mr-3 mt-2">
                                <span class="mt-2">colors:</span>
                                <div class="row gutters-xs mr-4">
                                    <div class="mr-2">
                                        <label class="colorinput">
                                            <input name="color" type="radio" value="azure" class="colorinput-input"
                                                checked="">
                                            <span class="colorinput-color bg-danger"></span>
                                        </label>
                                    </div>
                                    <div class="mr-2">
                                        <label class="colorinput">
                                            <input name="color" type="radio" value="indigo"
                                                class="colorinput-input">
                                            <span class="colorinput-color bg-secondary"></span>
                                        </label>
                                    </div>
                                    <div class="mr-2">
                                        <label class="colorinput">
                                            <input name="color" type="radio" value="purple"
                                                class="colorinput-input">
                                            <span class="colorinput-color bg-dark"></span>
                                        </label>
                                    </div>
                                    <div class="mr-2">
                                        <label class="colorinput">
                                            <input name="color" type="radio" value="pink"
                                                class="colorinput-input">
                                            <span class="colorinput-color bg-pink"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /row -->
    </div>
    <!-- Container closed -->
    </div>
    <!-- main-content closed -->
@endsection
@section('js')
    <!-- Internal Select2.min js -->
    <script src="{{ URL::asset('assets/plugins/select2/js/select2.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/select2.js') }}"></script>
    <!-- Internal Nice-select js-->
    <script src="{{ URL::asset('assets/plugins/jquery-nice-select/js/jquery.nice-select.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/jquery-nice-select/js/nice-select.js') }}"></script>
@endsection
