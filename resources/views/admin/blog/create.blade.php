@extends('layouts.master')
{{-- @section('title','blog dashbord') --}}

@section('content')

 
    <div id="layoutSidenav">
      
        <div id="layoutSidenav_content">
            <main>
                <div class="content-body" style="min-height: 788px;">
                    <div class="container-fluid">
                        <div class="row page-titles mx-0">
                            <div class="col-sm-6 p-md-0">
                                <div class="welcome-text">
                                    <h4>Add Doctor</h4>
                                </div>
                            </div>
                        </div>

                        @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                        @endif

                        <div class="row">
                            <div class="basic-form">
                                <form class="forms-sample" action="{{route('blogs.store')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-3">
                                            <!-- List Group for Vertical Tabs -->
                                            <div class="list-group" id="doctorTabs" role="tablist">
                                                <a href="#info" id="info-tab" class="list-group-item list-group-item-action active" data-bs-toggle="list" role="tab" aria-controls="info" aria-selected="true">Info</a>
                                                <a href="#meta" id="meta-tab" class="list-group-item list-group-item-action" data-bs-toggle="list" role="tab" aria-controls="meta" aria-selected="false">Meta</a>
                                              
                                            </div>
                                        </div>

                                        <!-- Tab Content -->
                                        <div class="col-md-9">
                                            <div class="tab-content mt-3" id="doctorTabsContent">
                                                <!-- Info Tab -->
                                                <div class="tab-pane fade show active" id="info" role="tabpanel" aria-labelledby="info-tab">
                                                    <div class="form-group">
                                                        <label for="name">Title</label>
                                                        <input type="text" class="form-control" name="name" id="name" required placeholder="Enter name">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="number">Slug</label>
                                                        <input type="text" class="form-control" name="slug" id="slug" required placeholder="slug">
                                                    </div>
                                                   
                                                    <div class="form-group">
                                                        <label for="file">Featured Image</label>
                                                        <input type="file" class="form-control" name="image" id="image" required>
                                                  
                                                  
                                                    </div>  
                                                        <!-- Product in this page -->
                                        <div class="form-group">
                                            <label for="product_in_page">Tags</label>
                                            <input type="text" name="tags[]" placeholder="Tag 1">
                                            <input type="text" name="tags[]" placeholder="Tag 2">
                                        </div>
        
                                        <div class="form-group">
                                            <label for="description">Description</label>
                                            <textarea class="ckeditor form-control" name="description"  rows="5"></textarea>
                                        </div>

                                                    
                                                </div>

                                                <!-- Meta Tab -->
                                                <div class="tab-pane fade" id="meta" role="tabpanel" aria-labelledby="meta-tab">
                                                    <div class="form-group">
                                                        <label for="meta_title">Meta Title</label>
                                                        <input type="text" class="form-control" name="meta_title" id="meta_title">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="meta_keyword">Meta Keywords</label>
                                                        <input type="text" class="form-control" name="meta_keyword" id="meta_keyword">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="meta_description">Meta Description</label>
                                                        <textarea class="form-control" name="meta_description" id="meta_description" rows="5"></textarea>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="status">Status</label>
                                                <select class="form-control" name="status" id="status" required>
                                                    <option value="draft">Draft</option>
                                                    <option value="published">Published</option>
                                                </select>
                                            </div>

                                            <!-- Submit Buttons -->
                                            <div class="form-group mt-4">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                                <button type="submit" name="continue" class="btn btn-success">Submit and Continue</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <script>
        document.getElementById('ckfinder-button').addEventListener('click', function() {
            CKFinder.popup({
                chooseFiles: true,
                onInit: function(finder) {
                    finder.on('files:choose', function(evt) {
                        var file = evt.data.files.first();
                        var fileUrl = file.getUrl();
                        document.getElementById('ckfinder-input').value = fileUrl;
                    });

                    finder.on('file:choose:resizedImage', function(evt) {
                        var fileUrl = evt.data.resizedUrl;
                        document.getElementById('ckfinder-input').value = fileUrl;
                    });
                }
            });
        });
    </script>
@endsection
