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
                                    <li class="breadcrumb-item active" aria-current="page"> Packs   </li>
                                </ol>
                            </nav>
                        </div>
                        <div class="">
                            <a href="{{route('packs.create')}}" class="btn btn-lg btn-neutral">Add new pack</a>
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
                    <h3 class="mb-0">Table</h3>
                </div>

                <!-- Light table -->
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                        <tr>
                            <th scope="col" class="sort" data-sort="name"> Title</th>
                            <th scope="col" class="sort" data-sort="budget">Min amount</th>
                            <th scope="col" class="sort" data-sort="status">Max amount</th>
                            <th>Profit Ratio</th>
                            <th class="text-center">Action</th>
                        </tr>
                        </thead>
                        <tbody class="list">
                        @foreach($packs as $pack)
                            <tr>
                            <th scope="row">
                                <div class="media align-items-center">
                                    <a href="#" class="avatar rounded-circle">
                                        <img alt="Image placeholder" src="../assets/img/theme/bootstrap.jpg">
                                    </a>
                                    <div class="media-body text-gray-900">
                                        <a href="{{route('packs.show',$pack->id)}}" class="name mb-0 text-sm font-weight-700 text-gray-900">{{$pack->name}}</a>
                                    </div>
                                </div>
                            </th>
                            <td class="budget">
                                {{$pack->low_price}} USD
                            </td>
                            <td>
                                {{$pack->high_price}} USD
                            </td>
                            <td class="">
                                <span class="completion ">{{$pack->percent}}%</span>
                                <div>
                                    <div class="progress text-center">
                                        <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: {{$pack->percent}}%;"></div>
                                    </div>
                                </div>
                            </td>
                            <td class="text-right">
                                <div class="d-flex justify-end">
                                        <a href="{{route('packs.show',$pack->id)}}" class="btn btn-sm btn-primary mx-2" >View</a>
                                        <a href="{{route('packs.edit',$pack->id)}}"class="btn btn-sm btn-success mx-2" >Edit</a>
                                        <form action="{{ route('packs.destroy',$pack->id)}}"  method="POST" class="">
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
