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

                            <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
                                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">

                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"> Reviews   </li>
                                </ol>
                            </nav>
                        </div>
                        <div class="">
                            <a href="{{route('testimony.create')}}" class="btn btn-lg btn-neutral">Add new review</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page content -->
        <div class="container-fluid mt--8">

            <div class="card">
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
                    <h3 class="mb-0">Table </h3>
                </div>

                <!-- Light table -->
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                        <tr>
                            <th scope="col" class="sort" data-sort="name">  Name</th>
                            <th scope="col" class="sort" data-sort="name"> Review</th>
                            <th scope="col" class="sort" data-sort="status">Feature</th>
                            <th scope="col"></th>
                        </tr>
                        </thead>
                        <tbody class="list">
                        @foreach($testimony as $testi)
                            <tr>
                                <th scope="row">
                                    @if($testi->user)
                                    <div class="media align-items-center">
                                        <a href="#" class="avatar rounded-circle ml-3">
                                            <img alt="Image placeholder" src="{{ $testi->user->profile_photo_url }}">
                                        </a>
                                        <div class="media-body text-gray-900">
                                            <a href="{{route('testimony.show',$testi->id)}}"
                                               class="name mb-0 text-sm font-weight-700 text-gray-900">
                                                {{$testi->user->name." ".$testi->user->lastname}}
                                            </a>
                                        </div>
                                    </div>
                                    @endif
                                </th>
                                <td class="budget">
                                    {!! \Illuminate\Support\Str::words($testi->message,3, ' ...')  !!}
                                </td>
                                <td>
                                    @if($testi->status)
                                        <span class="badge badge-dot ml-4">
                                            <i class="bg-success"></i>
                                            <span class="status">Featured</span>
                                        </span>
                                    @else
                                        <span class="badge badge-dot ml-4">
                                            <i class="bg-danger"></i>
                                            <span class="status">Not featured</span>
                                        </span>
                                    @endif
                                </td>
                                <td class="text-right">
                                    <div class="d-flex ">
                                        <a href="{{route('testimony.show',$testi->id)}}" class="btn btn-sm btn-primary mx-2" >View</a>
                                        <a href="{{route('testimony.edit',$testi->id)}}"class="btn btn-sm btn-success mx-2" >Edit</a>
                                        <form action="{{ route('testimony.destroy',$testi->id)}}"  method="POST" class="">
                                            @method('DELETE')
                                            @csrf
                                            <button class="btn btn-sm btn-danger mx-2" type="submit">Delete</button>
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
