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
                                    <li class="breadcrumb-item active" aria-current="page">
                                        Messages</li>
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
                <div class="">
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
                            <th scope="col"></th>
                            <th scope="col" class="sort" data-sort="name"> Sender</th>
                            <th scope="col" class="sort" data-sort="budget">Subject </th>
                            <th scope="col" class="sort" data-sort="status">Date</th>
                            <th scope="col" class="sort" data-sort="status">Reply</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody class="list">
                        @foreach($messages as $message)
                            <tr>
                                <td class="budget">
                                    {{$loop->index+1}}
                                </td>
                                <td scope="row">
                                <div class="media align-items-center">
                                    <a href="#" class="avatar rounded-circle ml-3">
                                        <img alt="Image placeholder" src="{{$message->user->profile_photo_url}}">
                                    </a>
                                    <div class="media-body text-gray-900">
                                        <a href="{{route('users.show',$message->user->id)}}" class="name mb-0 text-sm font-weight-700 text-gray-900">{{$message->user->name.' '.$message->user->lastname}}</a>
                                    </div>
                                </div>
                            </td>
                            <td class="budget">
                                {{$message->subject}}
                            </td>
                            <td>
                                {{$message->created_at->format('y/m/d')}} USD
                            </td>
                                <td>
                                    @if($message->reply)
                                        <span class="badge badge-dot ml-4">
                                        <i class="bg-success"></i>
                                        <span class="status">Answered</span>
                                    </span>
                                    @else
                                        <span class="badge badge-dot ml-4">
                                        <i class="bg-danger"></i>
                                        <span class="status">Pending</span>
                                    </span>
                                    @endif
                                </td>
                            <td class="text-right">
                                <div class="d-flex ">
                                    <a href="{{route('messages.edit',$message->id)}}"class="btn btn-sm btn-success mx-2" >Reply</a>
                                    <a href="{{route('messages.show',$message->id)}}" class="btn btn-sm btn-primary mx-2" >View</a>
                                    <form action="{{ route('messages.destroy',$message->id)}}"  method="POST" class="">
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
                @if($messages->count() >10)
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
                @endif
            </div>

        </div>

        <!-- Footer -->
        <div class="container-fluid">
            @include('layouts.footers.auth')
        </div>
    </div>
    </div>
@endsection
