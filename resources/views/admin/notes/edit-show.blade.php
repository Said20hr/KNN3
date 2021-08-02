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

                                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">الرئيسية</a></li>
                                    <li class="breadcrumb-item"><a href="{{route('testimony.index')}}">الأخبار</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">   مشاهدة الخبر </li>
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
                                @if($edit)
                                    <h3 class="mb-0">تعديل الخبر</h3>
                                @else
                                    <h3 class="mb-0">مشاهدة الخبر</h3>
                                @endif
                            </div>
                        </div>
                        <div class="card-body">
                            @if($edit)
                                <form method="post" action="{{route('note.update',$note->id)}}"  enctype="multipart/form-data">
                                    @csrf
                                    {{method_field('PUT')}}
                                    @endif
                                    <div class="pl-lg-4">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group focused">
                                                    <label class="form-control-label" for="input-name"> عنوان الخبر</label>
                                                    <input type="text" name="title" id="input-name" class="form-control form-control-alternative border" value="{{$note->title}}" {{$edit ? 'required=""' :'disabled=""'}} >

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group focused">
                                                    <label class="form-control-label" for="input-email"> الامتياز </label>
                                                    <div class="row mt-3">
                                                        @if($note->vote)
                                                            <div class="custom-control custom-radio mb-3 mx-4" dir="ltr">
                                                                <input type="radio" id="customRadio1" name="vote" class="custom-control-input" value="on" checked {{$edit ? '' :'disabled'}}>
                                                                <label class="custom-control-label" for="customRadio1">يدعم التصويت</label>
                                                            </div>
                                                            <div class="custom-control custom-radio mx-4">
                                                                <input type="radio" id="customRadio2" name="vote" class="custom-control-input" value="off" {{$edit ? '' :'disabled'}}>
                                                                <label class="custom-control-label" for="customRadio2"> ﻻ يدعم التصويت</label>
                                                            </div>
                                                        @else
                                                            <div class="custom-control custom-radio mb-3 mx-4" dir="ltr">
                                                                <input type="radio" id="customRadio1" name="vote" class="custom-control-input" value="on" {{$edit ? '' :'disabled'}}>
                                                                <label class="custom-control-label" for="customRadio1">يدعم التصويت</label>
                                                            </div>
                                                            <div class="custom-control custom-radio mx-4">
                                                                <input type="radio" id="customRadio2" name="vote" class="custom-control-input" value="off" checked {{$edit ? '' :'disabled'}}>
                                                                <label class="custom-control-label" for="customRadio2"> ﻻ يدعم التصويت </label>
                                                            </div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-10">
                                                <div class="form-group focused">
                                                    <label class="form-control-label" for="input-email">الخبر </label>
                                                    <textarea name="text" class="form-control form-control-alternative px-2" id="" cols="30" rows="10" {{$edit ? '' :'disabled'}}>{{$note->text}}
                                                    </textarea>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <div class=" focused">
                                                    <label class="form-control-label" for="input-email">الصورة </label>
                                                    <img src="{{asset('storage/notes/'.$note->image)}}" alt="" class="img-fluid" >
                                                    @if($edit)
                                                        <input type="file" name="image" id="input-email" class="form-control form-control-alternative" >
                                                    @endif
                                                </div>
                                            </div>
                                            @if($note->vote)
                                            <div class="col-md-12 my-3 border py-2 border-2 border-r shadow-xl">
                                                @if($note->users->count() > 0 )
                                                <div class="text-lg">
                                                    <span class="text-indigo-900 fw-semi-bold mx-3">  عدد المصوتين : {{$note->users->count()}}</span>
                                                    <span class="badge badge-success mx-3">     {{$note->agreedVote->count()}} موافقين </span>
                                                    <span class="badge badge-danger mx-3"> {{$note->disagreedVote->count()}} غير موافقين </span>
                                                </div>
                                                <div class="progress-wrapper" dir="rtl">
                                                    <div class="progress-info">

                                                        <div class="progress-percentage">
                                                            <span> {{$note->agreedVote->count()*100/$note->users->count()}}% موافقين </span>
                                                        </div>
                                                    </div>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-success" role="progressbar" aria-valuenow="{{$note->agreedVote->count()*100/$note->users->count()}}" aria-valuemin="0" aria-valuemax="100" style="width: {{$note->agreedVote->count()*100/$note->users->count()}}%;"></div>
                                                    </div>
                                                </div>
                                                @else
                                                    <div class="text-lg">
                                                        <span class="text-indigo-900 fw-semi-bold mx-3">  عدد المصوتين : {{$note->users->count()}}</span>
                                                    </div>

                                                @endif
                                                @endif
                                            </div>


                                            @if($edit)
                                                <div class="text-start">
                                                    <button type="submit" class="btn btn-success mt-4">حفظ</button>
                                                    <a href="{{route('note.index')}}" class="btn btn-primary mt-4">العودة</a>
                                                </div>
                                            @else
                                                <div class="text-start">
                                                    <a href="{{route('note.edit',$note->id)}}" type="submit" class="btn btn-success mt-4">تعديل</a>
                                                    <a href="{{route('note.index')}}" class="btn btn-primary mt-4">العودة</a>
                                                </div>
                                    @endif
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
