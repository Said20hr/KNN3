@extends('layouts.argon')

@section('content')

    <div class="main-content " id="panel">
        <!-- Topnav -->

        <!-- Header -->
        <div class="header bg-primary ">
            <div class="container-fluid">
                <div class="header-body py-6">
                    <div class="d-flex justify-content-between align-items-center py-8">
                        <div class="">

                            <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                    <li class="breadcrumb-item"><a href="{{route('admin')}}">Home</a></li>
                                    <li class="breadcrumb-item" aria-current="page">   <a href="{{route('investissements.index')}}">investments</a> </li>
                                    <li class="breadcrumb-item active" aria-current="page"> Add investment  </li>
                                </ol>
                            </nav>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- Page content -->
        <div class="container-fluid mt--8">

            <div class="card">
                <!-- Card header -->
                <div class="">
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
                                <h3 class="mb-0">Add investment </h3>
                            </div>
                        </div>
                        <div class="card-body">
                            <form method="post" action="{{route('investissements.store')}}" autocomplete="off">
                                @csrf
                                <div class="pl-lg-4">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group focused">
                                                <label class="form-control-label" for="input-name"> Investor</label>
                                                <select  class="form-control form-control-alternative px-2" name="user">
                                                    @foreach($users as $user)
                                                        <option value="{{$user->id}}">{{$user->name.' '.$user->lastname}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group focused">
                                                <label class="form-control-label" for="input-name"> Pack</label>
                                                <select  class="form-control form-control-alternative px-2" name="pack">
                                                    @foreach($packs as $pack)
                                                        <option value="{{$pack->id}}">{{$pack->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group focused">
                                                <label class="form-control-label" for="input-email"> Amount</label>
                                                <input type="text" name="price" id="input-email" class="form-control form-control-alternative" placeholder=" مبلغ"  required="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group focused">
                                                <label class="form-control-label" for="input-email">Profit ( USD )</label>
                                                <input type="text" name="profit" id="input-email" class="form-control form-control-alternative" placeholder="مقدار الربح" required="">
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3" >
                                            <label class="form-control-label font-weight-700 mb-3" for="input-name">Investment status</label>

                                            <div class="custom-control custom-radio mb-3 mx-3">
                                                <input type="radio" id="customRadio1" name="state" class="custom-control-input" value="on">
                                                <label class="custom-control-label" for="customRadio1">Active</label>
                                            </div>
                                            <div class="custom-control custom-radio mx-3">
                                                <input type="radio" id="customRadio2" name="state" class="custom-control-input" value="off">

                                                <label class="custom-control-label" for="customRadio2">inactive</label>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="text-start">
                                        <button type="submit" class="btn btn-success mt-4">Save</button>
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
