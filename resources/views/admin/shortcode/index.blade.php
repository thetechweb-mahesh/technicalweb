@extends('layouts.master')
@section('title','Add Post')

@section('content')


    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <div class="content-body" style="min-height: 788px;">

        <div class="container-fluid">
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4>{{__('View Shortcode')}}</h4>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                  <a style="text-decoration: none;" href="{{ url('add') }}">  <h4>{{__('Create')}}</h4></a>
                </div>
            </div>
            @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
            <div class="row">
                <div class="col-12">
                    <div class="card">
                      
                        <div class="card-body">
                            <div class="table-responsive" >
                                <table class="table ">
                                    <thead >
                                        <tr>
                                            
                                         
                                            <th>Qualification</th>
                                            <th>Shortcode</th>
                                            {{-- <th>Guy</th> --}}
                                            <th>Status</th>
                                           
                                            <th>Action</th>
                                           

                                        </tr>
                                    </thead>
                                 {{-- <tbody>
                                    @foreach ($shortcodes as $item)
                                        
                                   
                                 <tr><td>{{$item->title}}</td>
                                    <td>{{$item->sortcode}}</td>
                                    <td> 
                                        <form class="forms-sample" data-id="{{ $item->id }}">
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $item->id }}">
                                        <input type="hidden" name="status" id="status-{{ $item->id }}" value="{{ $item->status }}">
                        
                                        <label class="toggle-switch">
                                            <input type="checkbox" id="toggle-{{ $item->id }}" class="toggle-input"
                                                {{ $item->status == '1' ? 'checked' : '' }}
                                                onchange="updateStatus({{ $item->id }}, this.checked)">
                                            <span class="toggle-slider"></span>
                                        </label>
                                        <label for="toggle-{{ $item->id }}" class="toggle-label">
                                            {{ $item->status == '1' ? 'Active' : 'Inactive' }}
                                        </label>
                                    </form></td>

                                    <td> <form action="{{ route('shortcode.delete',  $item->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this?')">Delete</button>
                                    </form>  <a class="btn btn-success"  href="{{ route('shortcode.edit',  $item->id) }}">Edit </a>
                                
                                </td>
                                </tr> @endforeach
                                 </tbody> --}}
                                
                                      
                                  </table>
                            </div>
                        </div>
                    </div>
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

<style>
    .toggle-switch {
        position: relative;
        display: inline-block;
        width: 40px;
        height: 20px;
    }
  
    .toggle-switch input {
        display: none;
    }
  
    .toggle-slider {
        position: absolute;
        cursor: pointer;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #ccc;
        transition: .4s;
        border-radius: 34px;
    }
  
    .toggle-slider:before {
        position: absolute;
        content: "";
        height: 15px;
        width: 15px;
        left: 4px;
        bottom: 4px;
        background-color: white;
        transition: .4s;
        border-radius: 50%;
    }
  
    input:checked + .toggle-slider {
        background-color: #2196F3;
    }
  
    input:checked + .toggle-slider:before {
        transform: translateX(20px);
    }
  
    .toggle-label {
        display: inline-block;
        margin-left: 10px;
    }
    .label{    display: inline-block;
        margin-top: 0.5rem;*/
        }
  </style>
      
     <!-- Include Bootstrap JS -->


      <!-- End custom js for this page -->
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  
  
      <script>
  
  document.querySelectorAll('.item').forEach(function(item) {
      if (item.getAttribute('status') == 0) {
        item.style.display = 'none';  // Hide inactive products
      }
  });
  
        function updateStatus(id, isChecked) {
            let status = isChecked ? 1 : 0;
    
            $.ajax({
                type: "POST",
                url: '{{ route("shortcode.updatestatus") }}',  // Correct route
                data: {
                    _token: '{{ csrf_token() }}',
                    id: id,
                    status: status
                },
                success: function(response) {
                    if (response.success) {
                        // Update the hidden input value
                        $('#status-' + id).val(status);
    
                        // Update the label text dynamically
                        let label = $('#toggle-' + id).next('.toggle-label');
                        label.text(status === 1 ? 'Active' : 'Inactive');
                    } else {
                        alert('Failed to update status: ' + response.message);
                    }
                },
                error: function(xhr) {
                    console.error('Error:', xhr.responseText);
                }
            });
        }
    
        window.updateStatus = updateStatus;
    </script>