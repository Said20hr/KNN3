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
                        <li class="breadcrumb-item active" aria-current="page"> Users  </li>
                    </ol>
                </nav>
            </div>
            <div class="">
              <a href="{{route('users.create')}}" class="btn btn-lg btn-neutral">Add new user</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--8 mb-5">
        <div class="card">
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
            <!-- Card header -->
            <div class="card-header border-0">
              <h3 class="mb-0">Table</h3>
            </div>
            <!-- Light table -->
            <div class="table-responsive">
              <table class="table table-flush">
                <thead class="thead-light">
                  <tr class="">
                      <th>Name</th>
                      <th>Investment</th>
                      <th>Country</th>
                      <th class="text-center">Status</th>
                      <th class="text-center">Action</th>
                  </tr>
                </thead>
                <tbody class="list">
                @foreach($users as $user)
                  <tr>
                      <td>
                        <span class="mb-0 text-sm">{{$user->name." ".$user->lastname}}</span>
                    </td>
                      <td>
                          {{$user->invest->sum('price')}} USD
                      </td>
                      <td>
                        {{$user->country}}
                      </td>
                      <td class="text-center">
                          @if($user->status)
                              <div class="badge badge-dot ml-4">
                                  <i class="bg-success"></i>
                                  <span class="status">Active</span>
                              </div>
                          @else
                              <div class="badge badge-dot ml-4">
                                  <i class="bg-danger"></i>
                                  <span class="status">Inactive</span>
                              </div>
                          @endif
                      </td>
                      <td class="">
                          <div class="d-flex justify-end">
                            <a href="{{route('user.invest',$user->id)}}" class="btn btn-sm btn-success mx-1" href="#"> Add new</a>
                            <a href="{{route('users.show',$user->id)}}" class="btn btn-sm btn-primary mx-1" href="#">View</a>
                            <a href="{{route('users.edit',$user->id)}}" class="btn btn-sm btn-info mx-1" href="#">Edit</a>
                            <form action="{{ route('users.destroy',$user->id)}}"  method="POST" class="">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-sm btn-danger" type="submit">Delete</button>
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
