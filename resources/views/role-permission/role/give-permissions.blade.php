@extends('layouts.master')

<!-- @section('title','blog dashbord') -->

@section('content')
    
    <!-- <body data-layout="horizontal"> -->
<div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                            <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Admin User</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form action="{{ url('admin/roles/'.$role->id.'/give-permissions') }}" method="POST">
    @csrf
    @method('PUT')

    <h4>Give Permissions to Role: {{ $role->name }}</h4>

    @foreach ($permissions as $permission)
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="permissions[]"
                value="{{ $permission->name }}"
                {{ $role->hasPermissionTo($permission->name) ? 'checked' : '' }}>
            <label class="form-check-label">{{ $permission->name }}</label>
        </div>
    @endforeach

    <button type="submit" class="btn btn-primary mt-3">Update Permissions</button>
</form>

               
                </div>
                
            </div>


        </div>
                            </div></div></div>
        
    
        @endsection


       
