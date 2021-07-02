@extends('layouts.argon')

@section('content')

    <div class="main-content " id="panel">
        <!-- Topnav -->

        <!-- Header -->
        <div class="header bg-primary ">
            <div class="container-fluid">
                <div class="header-body py-6" dir="rtl">
                    <div class="d-flex justify-content-between align-items-center py-8">
                        <div class="">

                            <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">

                                    <li class="breadcrumb-item"><a href="#">الرئيسية</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"> الباقات الاستثمارية   </li>
                                </ol>
                            </nav>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- Page content -->
        <div class="container-fluid mt--8" dir="rtl">

            <div class="card text-right">
                <!-- Card header -->

                <div class="">
                    <div class="p-t-28 p-lr-20">
                        @if($errors->any())
                            @foreach($errors->all() as $error)
                                <div class="alert alert-danger fs-20">{{$error}}</div>
                            @endforeach
                        @endif
                        @if(session()->has('success_message'))
                            <div class="alert alert-success fs-20">{{session()->get('success_message')}}</div>
                        @endif
                        @if(session()->has('error_message'))
                            <div class="alert alert-danger fs-20">{{session()->get('error_message')}}</div>
                        @endif
                    </div>
                    <div class="card bg-secondary shadow">
                        <div class="card-header bg-white border-0">
                            <div class="row align-items-center">
                                <h3 class="mb-0">اضافة الباقة</h3>
                            </div>
                        </div>
                        <div class="card-body">
                            <form method="post" action="{{route('packs.store')}}"  enctype="multipart/form-data">
                                @csrf
                                <div class="pl-lg-4">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group focused">
                                                <label class="form-control-label" for="input-name"> اسم الباقة</label>
                                                <input type="text" name="name" id="input-name" class="form-control form-control-alternative border" value="{{old('name')}}" placeholder="اسم الباقة"  required="" autofocus="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group focused">
                                                <label class="form-control-label" for="input-email"> ادني مبلغ</label>
                                                <input type="text" name="low" id="input-email" class="form-control form-control-alternative" value="{{old('low')}}" placeholder="ادني مبلغ"  required="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group focused">
                                                <label class="form-control-label" for="input-email">اقصى مبلغ </label>
                                                <input type="text" name="high" id="input-email" class="form-control form-control-alternative" value="{{old('high')}}" placeholder="اقصى مبلغ" required="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group focused">
                                                <label class="form-control-label" for="input-email">نسبة الربح</label>
                                                <input type="text" name="percent" id="input-email" class="form-control form-control-alternative" value="{{old('percent')}}" placeholder="نسبة الربح" required="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group focused">
                                        <label class="form-control-label" for="input-email">صورة الباقة</label>
                                        <input type="file" name="image" id="input-email" class="form-control form-control-alternative"  required="">
                                    </div>
                                        </div>

                                    </div>
                                    <div class="text-start">
                                        <button type="submit" class="btn btn-success mt-4">حفظ</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>

            </div>

        </div>

        <!-- Footer -->
        <div class="container-fluid">
            @include('layouts.footers.auth')
        </div>
    </div>
    </div>
@endsection
