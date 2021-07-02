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
                                    <li class="breadcrumb-item" aria-current="page">  <a href="{{route('users.index')}}">المستثمرين</a> </li>
                                    @if($edit)
                                        <li class="breadcrumb-item active" aria-current="page"> تعديل المستثمر   </li>
                                    @else
                                        <li class="breadcrumb-item active" aria-current="page"> مشاهدة المستثمر   </li>
                                    @endif
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
                                    <h3 class="mb-0">تعديل المستثمر</h3>
                                @else
                                    <h3 class="mb-0">مشاهدة المستثمر  </h3>
                                @endif
                            </div>
                        </div>
                        <div class="card-body">
                            @if($edit)
                                <form action="{{ route('users.update',$user->id)}}" method="POST" enctype="multipart/form-data">
                                    {{method_field('PUT')}}
                                    @csrf
                                    <div class="pl-lg-4">
                                        <div class="row">
                                            <div class="col-md-6 mb-3" dir="rtl">
                                                <label class="form-control-label font-weight-700 mb-3" for="input-name">حالة حساب المستثمر</label>
                                                <div class="custom-control custom-radio mb-3" dir="ltr">
                                                    <input type="radio" id="customRadio1" name="state" class="custom-control-input" value="on" {{$user->status ? 'checked' :''}}>
                                                    <label class="custom-control-label" for="customRadio1">مغعل</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="customRadio2" name="state" class="custom-control-input" value="off" {{!$user->status ? 'checked' :''}}>
                                                    <label class="custom-control-label" for="customRadio2">معطل</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row justify-content-center">
                                            <div class="col-md-4">
                                                <div class="form-group focused">
                                                    <label class="form-control-label" for="input-name">الاسم</label>
                                                    <input type="text" name="name" id="input-name" class="form-control form-control-alternative" value="{{$user->name}}"  required="" autofocus="">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group focused">
                                                    <label class="form-control-label" for="input-email">اللقب</label>
                                                    <input type="text" name="lastname" id="input-email" class="form-control form-control-alternative" value="{{$user->lastname}}"  required="">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group focused">
                                                    <label class="form-control-label" for="input-email">بريد إلكتروني</label>
                                                    <input type="text" name="email" id="input-email" class="form-control form-control-alternative" value="{{$user->email}}" required="">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group focused">
                                                    <label class="form-control-label" for="input-email">رقم الهاتف</label>
                                                    <input type="text" name="phone" id="input-email" class="form-control form-control-alternative" value="{{$user->phone}}" required="">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group focused">
                                                    <label class="form-control-label" for="input-email">المهنة </label>
                                                    <input type="text" name="job" id="input-email" class="form-control form-control-alternative" value="{{$user->job}}" required="">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group focused">
                                                    <label class="form-control-label" for="input-email">البلد</label>
                                                    <input type="text" name="country" id="input-email" class="form-control form-control-alternative" value="{{$user->country}}" required="">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group focused">
                                                    <label class="form-control-label" for="input-email">تاريخ الميلاد</label>
                                                    <input type="date" name="date" id="input-email" class="form-control form-control-alternative"  required="" value="{{$user->birth_date}}">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group focused">
                                                    <label class="form-control-label" for="input-email">مكان الميلاد </label>
                                                    <input type="text" name="place" id="input-email" class="form-control form-control-alternative" value="{{$user->birth_date}}" required="">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group focused">
                                                    <label class="form-control-label" for="input-email">العنوان </label>
                                                    <input type="text" name="address" id="input-email" class="form-control form-control-alternative" value="{{$user->address}}" required="">
                                                </div>
                                            </div>
                                            <div class="col-md-6 text-center my-5">
                                                @if($user->profile_photo_url)
                                                    <label class="form-control-label" for="input-email"> تغيير الصورة الشخصية </label>
                                                    <div class="form-group focused">
                                                        <a href="#" class="rounded-circle ml-3">
                                                            <img alt="Image placeholder" class="img-fluid rounded-full rounded-circle" src="{{ $user->profile_photo_url }}">
                                                        </a>
                                                    </div>
                                                    <div class="form-group focused">
                                                        <input type="file" name="image" id="input-email" class="form-control form-control-alternative" >
                                                    </div>
                                                @else
                                                    <div class="form-group focused">
                                                        <label class="form-control-label" for="input-email">الصورة الشخصية</label>
                                                        <input type="file" name="image" id="input-email" class="form-control form-control-alternative"  >
                                                    </div>
                                                @endif

                                            </div>

                                        </div>
                                        <div class="text-start">
                                            <button type="submit" class="btn btn-success mt-4">حفظ</button>
                                            <a href="{{route('users.index')}}" type="submit" class="btn btn-primary mt-4">العودة</a>
                                        </div>
                                    </div>
                                </form>
                            @else
                                <div class="pl-lg-4">
                                    <div class="row">
                                        <div class="col-md-6 mb-3" dir="rtl">
                                            @if($user->status)
                                                <span class="badge badge-dot text-xl ml-4">
                                                    <i class="bg-success text-lg"></i>
                                                    <span class="status text-lg">مغعل</span>
                                                </span>
                                            @else
                                                <span class="badge badge-dot text-xl ml-4">
                                                    <i class="bg-danger "></i>
                                                    <span class="status text-lg">معطل</span>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-md-4">
                                            <div class="form-group focused">
                                                <label class="form-control-label" for="input-name">الاسم</label>
                                                <input type="text" name="name" id="input-name" class="form-control form-control-alternative" value="{{$user->name}}"  disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group focused">
                                                <label class="form-control-label" for="input-email">اللقب</label>
                                                <input type="text" name="lastname" id="input-email" class="form-control form-control-alternative" value="{{$user->lastname}}" disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group focused">
                                                <label class="form-control-label" for="input-email">بريد إلكتروني</label>
                                                <input type="text" name="email" id="input-email" class="form-control form-control-alternative" value="{{$user->email}}" disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group focused">
                                                <label class="form-control-label" for="input-email">رقم الهاتف</label>
                                                <input type="text" name="phone" id="input-email" class="form-control form-control-alternative" value="{{$user->phone}}" disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group focused">
                                                <label class="form-control-label" for="input-email">المهنة </label>
                                                <input type="text" name="job" id="input-email" class="form-control form-control-alternative" value="{{$user->job}}" disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group focused">
                                                <label class="form-control-label" for="input-email">البلد</label>
                                                <input type="text" name="country" id="input-email" class="form-control form-control-alternative" value="{{$user->country}}" disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group focused">
                                                <label class="form-control-label" for="input-email">تاريخ الميلاد</label>
                                                <input type="date" name="date" id="input-email" class="form-control form-control-alternative"  value="{{$user->birth_date}}" disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group focused">
                                                <label class="form-control-label" for="input-email">مكان الميلاد </label>
                                                <input type="text" name="place" id="input-email" class="form-control form-control-alternative" value="{{$user->birth_place}}" disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group focused">
                                                <label class="form-control-label" for="input-email">العنوان </label>
                                                <input type="text" name="address" id="input-email" class="form-control form-control-alternative" value="{{$user->address}}" disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-4 text-center my-2">
                                            <label class="form-control-label" for="input-email">الصورة الشخصية</label>
                                            <div class="form-group focused">

                                                <a href="#" class="rounded-circle ml-3">
                                                    <img alt="Image placeholder" class="img-fluid rounded-full rounded-circle" src="{{ $user->profile_photo_url }}">
                                                </a>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="text-start">
                                        <a href="{{route('users.index')}}" type="submit" class="btn btn-primary mt-4">العودة</a>
                                        <a href="{{route('users.edit',$user->id)}}"type="submit" class="btn btn-success mt-4">تعديل</a>
                                    </div>
                                </div>
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
