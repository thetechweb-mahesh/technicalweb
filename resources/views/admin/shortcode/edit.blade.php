@extends('layouts.master')
@section('title','Add Post')

@section('content')

<!-- Preloader Start -->
<div id="preloader">
    <div class="sk-three-bounce">
        <div class="sk-child sk-bounce1"></div>
        <div class="sk-child sk-bounce2"></div>
        <div class="sk-child sk-bounce3"></div>
    </div>
</div>
<!-- Preloader End -->

<div class="content-body" style="min-height: 788px;">
    <div class="container-fluid">
        <!-- Page Title -->
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>{{ __('Menu Classification Code') }}</h4>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="row">
            <!-- Tabs Section -->
            <div class="col-md-3">
                <div class="list-group" id="menuTabs" role="tablist">
                    <a class="list-group-item list-group-item-action active" data-toggle="list" href="#pages" role="tab">Pages</a>
                    <a class="list-group-item list-group-item-action" data-toggle="list" href="#products" role="tab">Products</a>
                    <a class="list-group-item list-group-item-action" data-toggle="list" href="#customMenu" role="tab">Customized Menu</a>
                </div>
                <div class="mt-3">
                    <form method="POST" action="{{ route('menu.addPage') }}">
                        @csrf
                        <input type="text" class="form-control mb-2" name="title" placeholder="Add Page Name" required>
                        <button type="submit" class="btn btn-success btn-block">Add</button>
                    </form>
                </div>
            </div>

            <!-- Tab Content -->
            <div class="col-md-9">
                <div class="tab-content">
                    <!-- Pages Tab -->
                    <div class="tab-pane fade show active" id="pages" role="tabpanel">
                        <div class="card">
                            <div class="card-header  text-white">
                                <h4>Menu Title</h4>
                            </div>
                            <div class="card-body">
                                <form method="POST" action="{{ route('shortcode.update', $shortcode->id) }}">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="title" id="title"  value="{{ $shortcode->title}}" placeholder="Enter Menu Title" required>
                                    </div>
                                    <button type="submit" class="btn btn-success">Update Menu</button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- Products Tab -->
                    <div class="tab-pane fade" id="products" role="tabpanel">
                        <div class="card">
                            <div class="card-body">
                                <h4>Manage Products</h4>
                                <p>Here you can manage your product-related menus.</p>
                                <!-- Content for products -->
                            </div>
                        </div>
                    </div>

                    <!-- Customized Menu Tab -->
                    <div class="tab-pane fade" id="customMenu" role="tabpanel">
                        <div class="card">
                            <div class="card-body">
                                <h4>Customized Menu Options</h4>
                                <p>Here you can create and manage customized menu items.</p>
                                <!-- Content for customized menu -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

<!-- Scripts for Tabs -->
@push('scripts')
<script>
    // Ensure tabs work with Bootstrap
    document.addEventListener('DOMContentLoaded', function () {
        const triggerTabList = [].slice.call(document.querySelectorAll('#menuTabs a'));
        triggerTabList.forEach(function (triggerEl) {
            const tabTrigger = new bootstrap.Tab(triggerEl);
            triggerEl.addEventListener('click', function (event) {
                event.preventDefault();
                tabTrigger.show();
            });
        });
    });
</script>
@endpush
