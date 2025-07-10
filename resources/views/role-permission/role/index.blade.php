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
<table class="table">
    <thead>
        <tr>
            <th>Name</th>
            <th>Permissions</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($roles as $role)
            <tr>
                <td>{{ $role->name }}</td>
                <td>{{ implode(', ', $role->getPermissionNames()->toArray()) }}</td>
                <td>
                    <a href="{{ route('roles.give-permissions', $role->id) }}" class="btn btn-sm btn-warning">Permissions</a>
                    <a href="{{ route('roles.delete', $role->id) }}" class="btn btn-sm btn-danger">Delete</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
               
                </div>
                
            </div>


        </div>
                            </div></div></div>
        
    
        @endsection


       
