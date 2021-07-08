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
                  <li class="breadcrumb-item active" aria-current="page"> المستثمرين   </li>
                </ol>
              </nav>
            </div>
            <div class="">
              <a href="{{route('users.create')}}" class="btn btn-lg btn-neutral">أضف مستثمر</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--8 mb-5" dir="rtl">


          <div class="card text-right">
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
            <!-- Card header -->
            <div class="card-header border-0">
              <h3 class="mb-0">جدول المستثمرين</h3>
            </div>
            <!-- Light table -->
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col" class="sort" data-sort="name">الاسم</th>
                    <th scope="col" class="sort" data-sort="budget">اجمالي الاستثمار</th>
                    <th scope="col" class="sort" data-sort="completion">البلد</th>
                      <th scope="col" class="sort" data-sort="status">حالة الملف</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody class="list">
                @foreach($users as $user)
                  <tr>
                    <th scope="row">
                      <div class="media align-items-center">
                        <a href="#" class="avatar rounded-circle ml-3">
                          <img alt="Image placeholder" src="{{ $user->profile_photo_url }}">
                        </a>
                        <div class="media-body">
                          <span class="name mb-0 text-sm">{{$user->name." ".$user->lastname}}</span>
                        </div>
                      </div>
                    </th>
                      <td class="budget">
                      {{$user->invest->sum('price')}} دوﻻر
                    </td>
                      <td>
                        <img  src="{{asset('assets/img/icons/flag.svg')}}" alt="{{ Auth::user()->name }}" width="20"/>
                        {{$user->country}}
                    </td>
                      <td>
                          @if($user->status)
                              <span class="badge badge-dot ml-4">
                              <i class="bg-success"></i>
                              <span class="status">مغعل</span>
                          </span>
                          @else
                              <span class="badge badge-dot ml-4">
                              <i class="bg-danger"></i>
                              <span class="status">معطل</span>
                          </span>
                          @endif
                      </td>
                      <td >

                        <div class="d-flex">
                            <a href="{{route('user.invest',$user->id)}}" class="btn btn-sm btn-success mx-1" href="#">اضف استثمار</a>
                            <a href="{{route('users.show',$user->id)}}" class="btn btn-sm btn-primary mx-1" href="#">شاهد</a>
                            <a href="{{route('users.edit',$user->id)}}" class="btn btn-sm btn-info mx-1" href="#">عدل</a>
                            <form action="{{ route('users.destroy',$user->id)}}"  method="POST" class="">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-sm btn-danger" type="submit">حذف</button>
                            </form>
                        </div>

                    </td>
                  </tr>
                @endforeach
                </tbody>
              </table>
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
