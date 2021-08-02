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
                                    <li class="breadcrumb-item"><a href="{{route('admin')}}">الرئيسية</a></li>
                                    <li class="breadcrumb-item" aria-current="page">   <a href="{{route('investissements.index')}}">الاستثمارات</a> </li>
                                    <li class="breadcrumb-item active" aria-current="page">  الاستثمار   </li>
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
                <div class="">
                    <div class="card bg-secondary shadow">
                        <div class="card-header bg-white border-0">
                            <div class="row align-items-center">
                                <h3 class="mb-0 font-weight-700"> استثمارية {{$invest->user->name." ".$invest->user->lastname}}</h3>
                            </div>
                        </div>
                        <div class="card-body">
                            @if($edit)
                            <form method="post" action="{{route('investissements.update',$invest->id)}}" autocomplete="off">
                                @csrf
                                {{method_field('PUT')}}
                                @endif

                                <div class="pl-lg-4">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group focused">
                                                <label class="form-control-label" for="input-name"> الباقة</label>
                                                <select  class="form-control form-control-alternative px-2" name="pack" {{$edit ? 'required=""' :'disabled'}}>
                                                    @if($edit)
                                                        <option value="{{$invest->pack->id}}">{{$invest->pack->name}}</option>
                                                    @else
                                                        @foreach($packs as $pack)
                                                            <option value="{{$pack->id}}">{{$pack->name}}</option>
                                                        @endforeach
                                                    @endif

                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group focused">
                                                <label class="form-control-label" for="input-price"> المبلغ (دوﻻر)</label>
                                                <input type="text" name="price" id="input-price" class="form-control form-control-alternative" value="{{$invest->price}}" {{$edit ? 'required=""' :'disabled'}} >
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group focused">
                                                <label class="form-control-label" for="input-profit"> مقدار الربح (دوﻻر)</label>
                                                <input type="text" name="profit" id="input-profit" class="form-control form-control-alternative" value="{{$invest->profit}}" {{$edit ? 'required=""' :'disabled'}}>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group focused">
                                                <label class="form-control-label" for="input-available"> الارباح المتاحة للسحب (دوﻻر)</label>
                                                <input type="text" name="available" id="input-available" class="form-control form-control-alternative" value="{{$invest->available}}" {{$edit ? 'required=""' :'disabled'}}>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group focused">
                                                <label class="form-control-label" for="input-substruct"> المبلغ المقتطع  (دوﻻر)</label>
                                                <input type="text" name="substruct" id="input-substruct" class="form-control form-control-alternative" value="{{$invest->substruct}}" {{$edit ? 'required=""' :'disabled'}} >
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group focused">
                                                <label class="form-control-label" for="input-delayed">الارباح الموجلة  (دوﻻر)</label>
                                                <input type="text" name="delayed" id="input-delayed" class="form-control form-control-alternative" value="{{$invest->delayed}}" {{$edit ? 'required=""' :'disabled'}}>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group focused">
                                                <label class="form-control-label" for="input-withdraw">كمية السحب   (دوﻻر)</label>
                                                <input type="text" name="withdraw" id="input-withdraw" class="form-control form-control-alternative" value="{{$invest->withdraw}}" {{$edit ? 'required=""' :'disabled'}}>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3" dir="rtl">
                                            <label class="form-control-label font-weight-700 mb-2" for="input-name">حالة الاستثمار</label>
                                            <div class="d-flex py-2">
                                                <div class="custom-control custom-radio mx-3">
                                                <input type="radio" id="customRadio1" name="state" class="custom-control-input" value="on" {{$invest->status ? 'checked' : ''}}>
                                                <label class="custom-control-label" for="customRadio1">مغعل</label>
                                            </div>
                                            <div class="custom-control custom-radio mx-3">
                                                <input type="radio" id="customRadio2" name="state" class="custom-control-input" value="off" {{$invest->status ? '' : 'checked'}}>
                                                <label class="custom-control-label" for="customRadio2">معطل</label>
                                            </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="text-start">
                                        @if($edit)
                                            <button type="submit" class="btn btn-success mt-4">حفظ</button>
                                        @else
                                            <a href="{{route('investissements.edit',$invest->id)}}" class="btn btn-success mt-4">تعديل</a>
                                        @endif
                                            <a href="{{route('investissements.index')}}" class="btn btn-primary mt-4">العودة</a>
                                    </div>

                                </div>
                                @if($edit)
                            </form>
                                @endif

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
