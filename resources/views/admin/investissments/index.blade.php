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
                                    <li class="breadcrumb-item active" aria-current="page"> Investments   </li>
                                </ol>
                            </nav>
                        </div>
                        <div class="">
                            <a href="{{route('investissements.create')}}" class="btn btn-lg btn-neutral"> Add new Investments</a>
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
                    <h3 class="mb-0">Table  </h3>
                </div>

                <!-- Light table -->
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                        <tr>
                            <th scope="col" class="sort" data-sort="name"> investor</th>
                            <th scope="col" class="sort" data-sort="budget"> Amount</th>
                            <th scope="col" class="sort" data-sort="budget"> Pack</th>
                            <th scope="col" class="sort" data-sort="status">Profit percent</th>
                            <th scope="col" class="sort" data-sort="status">Duration</th>
                            <th scope="col" class="sort" data-sort="status">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody class="list">
                        @foreach($invesstissements as $invest)
                            <tr>
                            <td scope="row">
                                <div class="media align-items-center">
                                    <a href="#" class="avatar rounded-circle mr-3">

                                        <img  src="{{ $invest->user->profile_photo_url }}" alt="{{ $invest->user->name }}">

                                    </a>
                                    <div class="media-body text-gray-900">
                                        <a href="{{route('packs.show',$invest->id)}}" class="name mb-0 text-sm font-weight-700 text-gray-900">{{$invest->user->name." ".$invest->user->lastname}}</a>
                                    </div>
                                </div>
                            </td>
                            <td class="budget">
                                 {{$invest->price}}   USD
                            </td>
                            <td>
                                <div>{{$invest->pack->name}}</div>
                            </td>
                            <td>
                                <span class="completion ml-2"> {{$invest->profit}} USD </span>
                            </td>
                                <td>
                                    <span class="completion ml-2"> {{$invest->created_at->diffInDays(Carbon\Carbon::now())}} Day</span>
                                </td>
                                <td>
                                @if($invest->status)
                                    <span class="badge badge-dot ml-4">
                                        <i class="bg-success"></i>
                                        <span class="status">Active</span>
                                    </span>
                                    @else
                                    <span class="badge badge-dot ml-4">
                                        <i class="bg-danger"></i>
                                        <span class="status">InActive</span>
                                    </span>
                                    @endif
                                </td>
                            <td class="text-right">
                                <div class="d-flex ">
                                        <a href="{{route('investissements.show',$invest->id)}}" class="btn btn-sm btn-primary mx-2" >View</a>
                                        <a href="{{route('investissements.edit',$invest->id)}}"class="btn btn-sm btn-success mx-2" >Edit</a>
                                        <form action="{{ route('investissements.destroy',$invest->id)}}"  method="POST" class="">
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
                <div class="card-footer py-4 text-center">
                    <nav aria-label="...">
                        <ul class="pagination justify-content-center mb-0">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1">
                                    <i class="fas fa-angle-left"></i>
                                    <span class="sr-only">Previous</span>
                                </a>
                            </li>
                            <li class="page-item active">
                                <a class="page-link" href="#">1</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">
                                    <i class="fas fa-angle-right"></i>
                                    <span class="sr-only">Next</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
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
