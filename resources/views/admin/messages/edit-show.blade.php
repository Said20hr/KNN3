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

                                <h3 class="mb-0"> ارسلت يوم <span class="badge-pill badge-info">{{$message->created_at->format('Y/m/d')}}</span> على الساعة  <span class="badge-pill">{{$message->created_at->format('H:m')}}</span> </h3>

                            </div>
                        </div>
                        <div class="card-body">

                            <form method="post" action="{{route('messages.update',$message->id)}}"  enctype="multipart/form-data">
                                @csrf
                                {{method_field('PUT')}}

                                <div class="pl-lg-4">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group focused">
                                                <label class="form-control-label" for="input-name"> اسم المرسل</label>
                                                <input type="text" id="input-name" class="form-control form-control-alternative border" value="{{$message->user->name." ".$message->user->lastname}}" disabled  required="">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group focused">
                                                <label class="form-control-label" for="input-email"> رقم هاتف المرسل  </label>
                                                <input type="text" id="input-email" class="form-control form-control-alternative" value="{{$message->user->phone}}" disabled   required="">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group focused">
                                                <label class="form-control-label" for="input-email"> البريد الالكتروني </label>
                                                <input type="text" id="input-email" class="form-control form-control-alternative" value="{{$message->user->email}}" disabled required="" >
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group focused">
                                                <label class="form-control-label" for="input-email"> عنوان الرسالة</label>
                                                <input type="text" disabled value="{{$message->subject}}" id="input-email" class="form-control form-control-alternative"  required="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group focused">
                                                <label class="form-control-label" for="input-email"> محتوى الرسالة</label>
                                                <textarea  id="" cols="" rows="" disabled class="form-control form-control-alternative">{{$message->message}}</textarea>
                                            </div>
                                        </div>
                                        @if(!$message->reply)
                                        <div class="col-md-8">
                                            <div class="form-group focused">
                                                <label class="form-control-label" for="input-email"> الرد الرسالة</label>
                                                <textarea name="answer" id="" cols="30" rows="10" class="form-control form-control-alternative">اكتب الرد هنا…</textarea>
                                            </div>
                                        </div>
                                        @else
                                            <div class="col-md-8">
                                                <div class="form-group focused">
                                                    <label class="form-control-label" for="reply">  </label>
                                                    <textarea  id="" cols="" rows="" disabled class="form-control form-control-alternative">{{$message->reply}}</textarea>
                                                </div>
                                            </div>
                                        @endif
                                    </div>

                                    <div class="text-start">
                                        @if(!$message->reply)
                                        <button type="submit" class="btn btn-success mt-4">حفظ</button>
                                        @endif
                                        <a href="{{route('messages.index')}}" class="btn btn-primary mt-4">العودة</a>
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
