@extends('layouts.master')
{{-- @section('title','blog dashbord') --}}

@section('content')
    
        <div id="layoutSidenav">
          
            <div id="layoutSidenav_content">
                <div class="page-section">
                    <div class="container">
                      <div class="">
                        <a href="{{url('admin/blogs/create')}}">add blog</a>
                        <table class="table">
                        <thead>
                         
                          <tr>
                            <th>id</th>
                            <th>Name</th>
                            <th>slug</th>
                        
                            <th>Status</th>
                           
                            <th>Action</th>
                            <th>View</th>
                         
                           
                          </tr>
                           @foreach ($blog as  $blogitem)
                               
                           <tr><td>{{$blogitem->id}}</td>
                            <td>{{$blogitem->name}}</td>
                            <td>{{$blogitem->slug}}</td>
                            <td>{{$blogitem->status}}
                                <td> 
                                    <a href="{{ route('blogs.edit', $blogitem->id) }}" class="btn btn-primary">Edit</a>
                                   
                                    <a href="#" class="btn btn-danger"
                                    onclick="event.preventDefault(); document.getElementById('delete-form-{{ $blogitem->id }}').submit();">
                                    Delete
                                    </a>
                                    
                                    <!-- Hidden Delete Form -->
                                    <form id="delete-form-{{ $blogitem->id }}" action="{{ route('blogs.destroy', $blogitem->id) }}" method="POST" style="display: none;">
                                     @csrf
                                     @method('DELETE') <!-- This simulates a DELETE request -->
                                    </form>

                               
                                </td>
                        
                        </tr>
                         
                           @endforeach
                        </thead> 
                        </table></div></div></div>
            </div>
        </div>
        @endsection
