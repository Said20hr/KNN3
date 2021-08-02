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
                                    <li class="breadcrumb-item active" aria-current="page"> الأخبار   </li>
                                </ol>
                            </nav>
                        </div>
                        <div class="">
                            <a href="{{route('note.create')}}" class="btn btn-lg btn-neutral">أضف خبر</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page content -->
        <div class="container-fluid mt--8" dir="rtl">

            <div class="card text-right">
                <div class="p-t-28 p-lr-20">
                    @if(session()->has('success_message'))
                        <div class="alert alert-success fs-20">{{session()->get('success_message')}}</div>
                    @endif
                    @if(session()->has('error_message'))
                        <div class="alert alert-danger fs-20">{{session()->get('error_message')}}</div>
                    @endif
                </div>
                <!-- Card header -->
                <div class="card-header border-0">
                    <h3 class="mb-0">جدول الأخبار </h3>
                </div>

                <!-- Light table -->
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                        <tr>
                            <th></th>
                            <th scope="col" class="sort" data-sort="name"> عنوان الخبر</th>
                            <th scope="col" class="sort" data-sort="name"> التصويت</th>
                            <th scope="col" class="sort" data-sort="status">عدد المصوتين</th>
                            <th scope="col"></th>
                        </tr>
                        </thead>
                        <tbody class="list">
                        @foreach($notes as $note)
                            <tr>
                                <th>#{{$note->id}}</th>
                                <th scope="row">
                                    <div class="media align-items-center">
                                            <a href="#" class="avatar rounded-circle ml-3">
                                                <img alt="Image placeholder" src="{{ asset('storage/notes/'.$note->image)}}">
                                            </a>
                                            <div class="media-body text-gray-900">
                                                <a href="{{route('testimony.show',$note->id)}}"
                                                   class="name mb-0 text-sm font-weight-700 text-gray-900">
                                                    {{$note->title}}
                                                </a>
                                            </div>
                                    </div>
                                </th>
                                <td>
                                    @if($note->vote)
                                        <span class="badge badge-dot ml-4">
                                            <i class="bg-success"></i>
                                            <span class="status">يدعم التصويت</span>
                                        </span>
                                    @else
                                        <span class="badge badge-dot ml-4">
                                            <i class="bg-danger"></i>
                                            <span class="status">  ﻻ يدعم التصويت</span>
                                        </span>
                                    @endif
                                </td>
                                <td>{{$note->users->count()}}</td>
                                <td class="text-right">
                                    <div class="d-flex ">
                                        <a href="{{route('note.show',$note->id)}}" class="btn btn-sm btn-primary mx-2" >شاهد</a>
                                        <a href="{{route('note.edit',$note->id)}}"class="btn btn-sm btn-success mx-2" >عدل</a>
                                        <form action="{{ route('note.destroy',$note->id)}}"  method="POST" class="">
                                            @method('DELETE')
                                            @csrf
                                            <button class="btn btn-sm btn-danger mx-2" type="submit">حذف</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- Card footer -->

            </div>

        </div>

        <!-- Footer -->
        <div class="container-fluid">
            @include('layouts.footers.auth')
        </div>
    </div>
    </div>
@endsection
