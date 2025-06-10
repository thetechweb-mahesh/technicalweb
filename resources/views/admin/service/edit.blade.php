@extends('layouts.master')
{{-- 
@section('title',"$services->meta_title")
@section('meta_description',"$services->meta_description")
@section('meta_keyword',"$services->meta_keyword") --}}

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
                        <form class="forms-sample" action="{{url('admin/update-service/'.$services->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="col-lg-4 mb-4">  <h4 class="card-title">Add edit</h4>

                                <select name="category_id" required  class="form-control">
                                    <option value="">--Select Category--

                                    </option>
                                    @foreach ($category as $cateitem )
                                     <option value="{{$cateitem->id}}" {{$services->category_id == $cateitem->id ? 'selected':''}}>
                                      {{$cateitem->name}}

                                     </option>
                                     @endforeach
                                    </select>

                            </div>
                        <div class="mb-3">
                            <label class="form-label" for="exampleFormControlInput1">name</label>
                            <input class="form-control" type="text" name="name" value="{{$services->name}}" placeholder="First Name">
                          </div>
                        <div class="mb-3">
                            <label class="form-label" for="exampleFormControlInput1">slug</label>
                            <input class="form-control" type="text"name="slug" value="{{$services->slug}}" placeholder="Your slug">
                          </div>
                        <div class="mb-3">
                            <label class="form-label" for="exampleFormControlTextarea1">description</label>
                            <textarea class="form-control" name="description" id="mysummernote" rows="3">{{$services->description}}</textarea>
                          </div>
                        <div class="form-group">
                            <input type="file" class="form-control" name="image" >
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="exampleFormControlInput1">video</label>
                            <input type="text" class="form-control" name="yt_ifranme" value="{{$services->yt_ifranme}}" placeholder="yt_ifranme">
                          </div>



                          <div class="mb-3">

                            <label class="form-label" for="exampleFormControlInput1">Mission Details</label>
                            <input class="form-control" type="text" name="m_ser_title" value="{{$services->m_ser_title}}" placeholder="mission title">
                            <label class="form-label" for="exampleFormControlTextarea1">description</label>
                            <textarea class="form-control" name="m_ser_des" id="" rows="3">{{$services->m_ser_des}}</textarea>
                          </div>

                          <div class="mb-3">

                            <label class="form-label" for="exampleFormControlInput1">Mission list</label>
                            <input class="form-control" type="text" name="ser_list_title" value="{{$services->ser_list_title}}" placeholder="mission list_title">
                            <label class="form-label" for="exampleFormControlTextarea1">description</label>
                            <textarea class="form-control" name="ser_list_des" id="" rows="3">{{$services->ser_list_des}}</textarea>
                          </div>











                      <div class="mb-3">
                        <label class="form-label" for="exampleFormControlInput1">SEO</label>
                        <input class="form-control" type="text" name="meta_title"   value="{{$services->meta_title}}"  placeholder="Meta title">
                      </div>
                      <div class="mb-3">
                        <label class="form-label" for="exampleFormControlTextarea1">Meta description</label>
                        <textarea class="form-control" name="meta_description" id="mysummernote" rows="3">{{$services->meta_description}}</textarea>
                      </div>

                      <div class="mb-3">
                        <label class="form-label" for="exampleFormControlTextarea1">Meta Keyword</label>

                      <textarea class="form-control" name="meta_keyword" rows="2"  placeholder="Meta Keyword">{{$services->meta_keyword}}</textarea>
                      </div>
                      <div class="form-group">
                        <!--<label for="exampleInputCity1">Navbar Status</label>
                        <input type="checkbox"  name="navbar_status"  >-->
                        &nbsp;
                        <label for="exampleInputCity1">Status</label> &nbsp;
                        <input type="checkbox"  name="status" {{$services->status == '1' ?'checked':''}} >
                      </div>

            <button type="submit" class="btn btn-primary mr-2">updated post</button>




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
