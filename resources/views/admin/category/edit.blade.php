@extends('layouts.master')
@section('title',"$setting->meta_title")
@section('meta_description',"$setting->meta_description")
@section('meta_keyword',"$setting->meta_keyword")


@section('content')



    <div class="body flex-grow-1 px-3">
      <div class="container-lg">
        <div class="row">
          <div class="col-12">
            <div class="card mb-4">
              <div class="card-header"><strong>Form control</strong></div>
              <div class="card-body">
                <div class="example">
                  <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item" role="presentation"><a class="nav-link active" data-coreui-toggle="tab" href="#preview-1000" role="tab" aria-selected="true">
                        <svg class="icon me-2">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-media-play"></use>
                        </svg>Preview</a></li>

                  </ul>
                  <div class="tab-content rounded-bottom">
                    <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1000">
                        <form class="forms-sample" action="{{url('admin/update-category/'.$category->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')


                        <div class="mb-3">
                            <label class="form-label" for="exampleFormControlInput1">name</label>
                            <input class="form-control" type="text" name="name" value="{{$category->name}}" placeholder="First Name">
                          </div>
                        <div class="mb-3">
                            <label class="form-label" for="exampleFormControlInput1">slug</label>
                            <input class="form-control" type="text"name="slug"  value=" {{$category->slug}}" placeholder="Your slug">
                          </div>
                        <div class="mb-3">
                            <label class="form-label" for="exampleFormControlTextarea1">Example textarea</label>
                            <textarea class="form-control" name="description" id="mysummernote" rows="3">{{$category->description}}</textarea>
                          </div>
                        <div class="form-group">
                            <input type="file" class="form-control" name="image" >
                        </div>

                      <div class="mb-3">
                        <label class="form-label" for="exampleFormControlInput1">Meta title</label>
                        <input class="form-control" type="text" name="meta_title" value=" {{$category->meta_title}}" placeholder="Meta title">
                      </div>
                      <div class="mb-3">
                        <label class="form-label" for="exampleFormControlTextarea1">Meta description</label>
                        <textarea class="form-control" name="meta_description" id="mysummernote" rows="3">{{$category->meta_description}}</textarea>
                      </div>

                      <div class="mb-3">
                        <label class="form-label" for="exampleFormControlTextarea1">Meta Keyword</label>

                      <textarea class="form-control" name="meta_keyword" rows="2"  placeholder="Meta Keyword">{{$category->meta_keyword}}</textarea>
                      </div>
                      <div class="form-group">
                        <label for="">Navbar Status</label>
                        <input type="checkbox"  name="navbar_status" {{$category->navbar_status == '1' ? 'checked':''}}/>
                        &nbsp;
                        <label for="exampleInputCity1">Status</label> &nbsp;
                        <input type="checkbox"  name="status"{{$category->status == '1' ? 'checked':''}} >
                      </div>

                      <button type="submit" class="btn btn-primary">Submit</button>



                    </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>




        </div>
      </div>
    </div>

  </div>

      </div>
      </div>
      </div>

@endsection
