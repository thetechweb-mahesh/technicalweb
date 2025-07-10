<div class="sidebar sidebar-dark sidebar-fixed" id="sidebar">
    <div class="sidebar-brand d-none d-md-flex">
      <svg class="sidebar-brand-full" width="118" height="46" alt="CoreUI Logo">
        <use xlink:href="assets/brand/coreui.svg#full"></use>
      </svg>
      <svg class="sidebar-brand-narrow" width="46" height="46" alt="CoreUI Logo">
        <use xlink:href="assets/brand/coreui.svg#signet"></use>
      </svg>
    </div>
    <ul class="sidebar-nav" data-coreui="navigation" data-simplebar="">
      <li class="nav-item"><a class="nav-link {{Request::is('admin/dashboard') ? 'active':''}}" href="{{url('admin/dashboard')}}">
          <svg class="nav-icon">
            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-speedometer"></use>
          </svg> Dashboard<span class="badge badge-sm bg-info ms-auto">NEW</span></a></li>



      <li class="nav-group"><a class="{{Request::is('admin/category') || Request::is('admin/add-category') || Request::is('admin/edit-category/*') ? 'collapse active':'collapsed'}} nav-link nav-group-toggle" href="#">
          <svg class="nav-icon">
            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-puzzle"></use>
          </svg> Category</a>
        <ul class="nav-group-items">
          <li class="nav-item"><a class="nav-link   {{Request::is('admin/add-category') ? 'active':''}}" href="{{url('admin/add-category')}}"><span class="nav-icon"></span> Add Category</a></li>
          <li class="nav-item"><a class="nav-link {{Request::is('admin/category') || Request::is('admin/add-category/*')  ? 'active':''}}" href="{{url('admin/category')}}"><span class="nav-icon"></span> View Category</a></li>

        </ul>
      </li>



      <li class="nav-group"><a class="{{Request::is('admin/category') || Request::is('admin/add-category') || Request::is('admin/edit-category/*') ? 'collapse active':'collapsed'}} nav-link nav-group-toggle" href="#">
        <svg class="nav-icon">
          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-puzzle"></use>
        </svg> Pages</a>
      <ul class="nav-group-items">
        <li class="nav-item"><a class="nav-link   {{Request::is('admin/add-category') ? 'active':''}}" href="{{url('/admin/pages/create')}}"><span class="nav-icon"></span> Add Page</a></li>
        <li class="nav-item"><a class="nav-link {{Request::is('pages') || Request::is('pages*')  ? 'active':''}}" href="{{url('/admin/pages')}}"><span class="nav-icon"></span> View Pages</a></li>

      </ul>
    </li>


    <li class="nav-group"><a class="{{Request::is('admin/category') || Request::is('shortcode') || Request::is('shortcode/*') ? 'collapse active':'collapsed'}} nav-link nav-group-toggle" href="#">
      <svg class="nav-icon">
        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-puzzle"></use>
      </svg> shortcode</a>
    <ul class="nav-group-items">
      <li class="nav-item"><a class="nav-link   {{Request::is('shortcode') ? 'active':''}}" href="{{ url('/admin/add') }}"><span class="nav-icon"></span> Add Shortcode</a></li>
      <li class="nav-item"><a class="nav-link {{Request::is('shortcode') || Request::is('shortcode*')  ? 'active':''}}" href="{{url('/admin/shortcode')}}"><span class="nav-icon"></span> View shortcode</a></li>

    </ul>
  </li>


      <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
        <svg class="nav-icon">
          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-cursor"></use>
        </svg> About</a>
      <ul class="nav-group-items">
        <li class="nav-item"><a class="nav-link" href="{{url('admin/add-about')}}"><span class="nav-icon"></span> Add About</a></li>
        <li class="nav-item"><a class="nav-link" href="{{url('admin/about')}}"><span class="nav-icon"></span> View About</a></li>
      </ul>
    </li>
      <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
          <svg class="nav-icon">
            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-cursor"></use>
          </svg> Services</a>
        <ul class="nav-group-items">
          <li class="nav-item"><a class="nav-link" href="{{url('admin/add-service')}}"><span class="nav-icon"></span> Add Service</a></li>
          <li class="nav-item"><a class="nav-link" href="{{url('admin/service')}}"><span class="nav-icon"></span> View Service</a></li>
        </ul>
        <a href="{{ url('lang/en') }}">English</a> |
        
<a href="{{ url('lang/fr') }}">Français</a>
      </li>

      <li class="nav-group"><a class="{{Request::is('admin/category') || Request::is('admin/add-category') || Request::is('admin/edit-category/*') ? 'collapse active':'collapsed'}} nav-link nav-group-toggle" href="#">
        <svg class="nav-icon">
          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-puzzle"></use>
        </svg> Blog</a>
      <ul class="nav-group-items">
        <li class="nav-item"><a class="nav-link   {{Request::is('blogs') ? 'active':''}}" href="{{url('/admin/blogs/create')}}"><span class="nav-icon"></span> Add blogs</a></li>
        <li class="nav-item"><a class="nav-link {{Request::is('blogs') || Request::is('blogs*')  ? 'active':''}}" href="{{url('/admin/blogs')}}"><span class="nav-icon"></span> View blogs</a></li>

      </ul>
    </li>

      {{-- <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
        <svg class="nav-icon">
          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-cursor"></use>
        </svg> Post Entertainment</a>
      <ul class="nav-group-items">
        <li class="nav-item"><a class="nav-link" href="{{url('admin/add-entertainment')}}"><span class="nav-icon"></span> Add Post</a></li>
        <li class="nav-item"><a class="nav-link" href="{{url('admin/entertainment')}}"><span class="nav-icon"></span> View Post</a></li>
      </ul>
    </li> --}}
    {{-- <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
        <svg class="nav-icon">
          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-cursor"></use>
        </svg> Post Education</a>
      <ul class="nav-group-items">
        <li class="nav-item"><a class="nav-link" href="{{url('admin/add-education')}}"><span class="nav-icon"></span> Add Post</a></li>
        <li class="nav-item"><a class="nav-link" href="{{url('admin/education')}}"><span class="nav-icon"></span> View Post</a></li>
      </ul>
    </li> --}}

    {{-- <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
        <svg class="nav-icon">
          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-cursor"></use>
        </svg> Post Lifestyle</a>
      <ul class="nav-group-items">
        <li class="nav-item"><a class="nav-link" href="{{url('admin/add-lifestyle')}}"><span class="nav-icon"></span> Add Post</a></li>
        <li class="nav-item"><a class="nav-link" href="{{url('admin/lifestyle')}}"><span class="nav-icon"></span> View Post</a></li>
      </ul>
    </li> --}}


      <li class="nav-group"><a class="{{Request::is('admin/users') ? 'active':''}} nav-link nav-group-toggle" href="#">
          <svg class="nav-icon">
            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-notes"></use>
          </svg> Users</a>
        <ul class="nav-group-items">
          <li class="nav-item"><a class="nav-link {{Request::is('admin/users') ? 'active':''}}" href="{{url('admin/users')}}"> User</a></li>

           <li class="nav-item"><a class="nav-link {{Request::is('admin/users') ? 'active':''}}" href="{{ url('admin/roles') }}"> Permission</a></li>

        </ul>
        
                                 
      </li>
      
      <li class="nav-group"><a class="{{Request::is('admin/users') ? 'active':''}} nav-link nav-group-toggle" href="#">
        <svg class="nav-icon">
          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-notes"></use>
        </svg> Addons</a>
      <ul class="nav-group-items">
        <li class="nav-item"><a class="nav-link {{Request::is('admin/setting') ? 'active':''}}" href="{{url('admin/settings')}}"> setting</a></li>

      </ul>
    </li>



      <li class="nav-item mt-auto"><a class="nav-link" href="{{ url('/') }}" target="_blank">
          <svg class="nav-icon">
            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-description"></use>
          </svg> visit</a></li>

    </ul>
    <button class="sidebar-toggler" type="button" data-coreui-toggle="unfoldable"></button>
  </div>
