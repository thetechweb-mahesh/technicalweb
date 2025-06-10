@extends('layouts.master')
@section('title',"$setting->meta_title")
@section('meta_description',"$setting->meta_description")
@section('meta_keyword',"$setting->meta_keyword")


@section('content')

    <div class="content-body" style="min-height: 788px;">

        <div class="container-fluid">
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4>Add apge</h4>

                    </div>
                </div>
      
@if(session('message'))
<div class="alert alert-success">
    {{ session('message') }}
</div>
@endif
            </div>

            <div class="row">
                <div class="basic-form">
                  <form action="{{url('admin/settings')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                       
                 
                 
                    <div class="form-group">
                      <label for="exampleInputName1">Website name</label>
                     <input type="text" class="form-control" name="website_name"  required  @if($setting) value="{{$setting->website_name}}" @endif placeholder="Website name">
                    
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">Website logo</label>
                      <input type="file" class="form-control" name="website_logo" >
                      @if($setting)
                      <img src="{{asset('upload/settings/'.$setting->logo)}}"  width="50px" height="50px" alt="image">
                      @endif
                    </div>
                
                    <div class="form-group">
                        <label for="exampleInputEmail3">Website Favicon</label>
                        <input type="file" class="form-control" name="website_favicon" >
                              @if($setting)
                      <img src="{{asset('upload/settings/'.$setting->favicon)}}" width="50px" height="50px" alt="">
                      @endif
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">description</label>
                        <textarea class="form-control" name="description"  required rows="4">
                        @if($setting){{$setting->description}}@endif </textarea>
                     
                      </div>
                   
                     <h4>SEO Meta Tag</h4>
                    <div class="form-group">
                      <label for="exampleInputEmail3">Meta title</label>
                      <input type="text" class="form-control" name="meta_title"   @if($setting)value="{{$setting->meta_title}}"@endif required placeholder="Meta title">
                    </div>
                
                    <div class="form-group">
                      <label for="exampleInputEmail3">Meta description</label>
                      <textarea class="form-control" name="meta_description"  rows="4">
                      @if($setting){{$setting->meta_description}}@endif </textarea>
                   
                    </div>
                
                    <div class="form-group">
                      <label for="exampleInputEmail3">Meta keyword</label>
                     
                      <textarea class="form-control" name="meta_keyword"  rows="4">
                       @if($setting){{$setting->meta_keyword}}@endif </textarea>
                   
                    </div>
                
                  
                    <button type="submit"  class="btn btn-primary mr-2">Submit</button>
                   
                  </form>
                </div>
                
            </div>


        </div>




    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
  
    
@endsection
