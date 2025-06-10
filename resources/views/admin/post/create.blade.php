@extends('layouts.master')
@section('title','Add Post')

@section('content')



    <div class="body flex-grow-1 px-3">
      <div class="container-lg">
        <div class="row">
            @if($errors->any())
            <div class="alert alert-danger">
              @foreach ($errors->all() as $error )
          <div> {{$error}}</div>

              @endforeach</div>
              @endif

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
                        <form class="forms-sample" action="{{url('admin/add-post')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="col-lg-4 mb-4">  <h4 class="card-title">Add Category</h4>

                                <select name="category_id"  class="form-control">

                                 @foreach ($category as $cateitem )
                                  <option value="{{$cateitem->id}}">{{$cateitem->name}}

                                  </option>
                                  @endforeach
                                 </select></div>
                        <div class="mb-3">
                            <label class="form-label" for="exampleFormControlInput1">name</label>
                            <input class="form-control" type="text" name="name" placeholder="First Name">
                          </div>
                        <div class="mb-3">
                            <label class="form-label" for="exampleFormControlInput1">slug</label>
                            <input class="form-control" type="text"name="slug" placeholder="Your slug">
                          </div>
                        <div class="mb-3">
                            <label class="form-label" for="exampleFormControlTextarea1">description</label>
                            <textarea class="form-control" name="description" id="mysummernote" rows="3"></textarea>
                          </div>
                        <div class="form-group">
                            <input type="file" class="form-control" name="image" >
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="exampleFormControlInput1">video</label>
                            <input type="text" class="form-control" name="yt_ifranme"  placeholder="yt_ifranme">
                          </div>

                      <div class="mb-3">
                        <label class="form-label" for="exampleFormControlInput1">SEO</label>
                        <input class="form-control" type="text" name="meta_title"  placeholder="Meta title">
                      </div>
                      <div class="mb-3">
                        <label class="form-label" for="exampleFormControlTextarea1">Meta description</label>
                        <textarea class="form-control" name="meta_description" id="mysummernote" rows="3"></textarea>
                      </div>

                      <div class="mb-3">
                        <label class="form-label" for="exampleFormControlTextarea1">Meta Keyword</label>

                      <textarea class="form-control" name="meta_keyword" rows="2"  placeholder="Meta Keyword"></textarea>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputCity1">Navbar Status</label>
                        <input type="checkbox"  name="navbar_status"  >
                        &nbsp;
                        <label for="exampleInputCity1">Status</label> &nbsp;
                        <input type="checkbox"  name="status"  >
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
