@extends('layouts.master')
@section('title','view Users')

@section('content')


<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">


        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

            <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button">
                              search
                        </button>
                    </div>
                </div>
            </form>
             </nav>

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">


            </div> <div class="row">

                <div class="col-lg-12">
                  @if(session('message'))
                  <div class="alert  alert-success">{{session('message')}}
                  </div>
                  @endif
                  <h4>Edit Users
                    <a href="{{url('admin/users')}}" class="btn btn-danger float-right">Back</a>
                    <div class="card-body">





                        <h4 class="card-title">Add edit</h4>
                       <div class="form-group"><br>
                  <label for="exampleInputName1">Full name</label>
                  <input type="text" name="name" value="{{$user->name}}">
                           <p class="form-control">{{$user->name}}</p>
                          </div>

                          <div class="form-group">
                              <label for="exampleInputName1">Email id</label>
                             <p class="form-control">{{$user->email}}</p>
                            </div>
                            <div class="form-group">
                              <label for="exampleInputName1">Created At</label>
                             <p class="form-control">{{$user->created_at->format('d/m/y')}}</p>
                            </div>

                         <form action="{{ url('admin/update-user/'.$user->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="exampleInputName1">Role as</label>
        <select name="role_as" class="form-control">
            <option value="1" {{ $user->role_as == '1' ? 'selected' : '' }}>Admin</option>
            <option value="0" {{ $user->role_as == '0' ? 'selected' : '' }}>User</option>
            <option value="2" {{ $user->role_as == '2' ? 'selected' : '' }}>Blogger</option>
        </select>
    </div>

    <button type="submit" class="btn btn-primary mr-2">Update User Role</button>
</form>




                  </div>

                </div>



            </div>

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->
@endsection
