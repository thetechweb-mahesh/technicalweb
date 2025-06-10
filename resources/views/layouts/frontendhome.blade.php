<!DOCTYPE html>
<html dir='ltr' lang='en'>

  <head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<!--[ Homepage title ]-->
<title>@yield('title')</title>

<meta name="description" content="@yield('meta_description')">
<meta name="meta_keyword" content="@yield('meta_keyword')">
<meta name="author" content="@yield('Techie')">

<script src='ajax/libs/jquery/1.7.1/jquery.min.js' type='text/javascript'></script>

<!--[ Meta for browser ]-->
<meta charset='UTF-8'/>
<meta content='width=device-width, initial-scale=1, user-scalable=1, minimum-scale=1, maximum-scale=5' name='viewport'/>
<meta content='IE=edge' http-equiv='X-UA-Compatible'/>
<meta content='max-image-preview:large' name='robots'/>
<!-- Link Canonical -->
 <link rel="canonical" href="{{ url()->current() }}">

<meta content='Skylink WEB Services' name='description'/>
<meta content='Skylink WEB Services, , Keyword_1, Keyword_2, Keyword_3 ' name='keywords'/>
<!--[ Generator and rrs ]-->
<meta content='blogger' name='generator'/>

<link href="{{asset('frontend/css/style.css')}}" rel="stylesheet">
<script src="{{asset('frontend/csscss/script.js')}}"></script>


<!-- Bootstrap 5 -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


<!-- Bootstrap 5 -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<!-- jQuery (required for Bootstrap 4) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Popper.js (required for Bootstrap dropdowns) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.6/umd/popper.min.js"></script>

<!-- Bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>/*<![CDATA[*/ /*@shinsenter/defer.js*/ !function(c,i,t){var f,o=/^data-(.+)/,u='IntersectionObserver',r=/p/.test(i.readyState),s=[],a=s.slice,d='lazied',n='load',e='pageshow',l='forEach',m='hasAttribute',h='shift';function p(e){i.head.appendChild(e)}function v(e,n){a.call(e.attributes)[l](n)}function y(e,n,t,o){return o=(o=n?i.getElementById(n):o)||i.createElement(e),n&&(o.id=n),t&&(o.onload=t),o}function b(e,n){return a.call((n||i).querySelectorAll(e))}function g(t,e){b('source',t)[l](g),v(t,function(e,n){(n=o.exec(e.name))&&(t[n[1]]=e.value)}),e&&(t.className+=' '+e),n in t&&t[n]()}function I(e){f(function(o){o=b(e||'[type=deferjs]'),function e(n,t){(n=o[h]())&&(n.parentNode.removeChild(n),(t=y(n.nodeName)).text=n.text,v(n,function(e){'type'!=e.name&&(t[e.name]=e.value)}),t.src&&!t[m]('async')?(t.onload=t.onerror=e,p(t)):(p(t),e()))}()})}(f=function(e,n){r?t(e,n):s.push(e,n)}).all=I,f.js=function(n,t,e,o){f(function(e){(e=y('SCRIPT',t,o)).src=n,p(e)},e)},f.css=function(n,t,e,o){f(function(e){(e=y('LINK',t,o)).rel='stylesheet',e.href=n,p(e)},e)},f.dom=function(e,n,t,o,i){function r(e){o&&!1===o(e)||g(e,t)}f(function(t){t=u in c&&new c[u](function(e){e[l](function(e,n){e.isIntersecting&&(n=e.target)&&(t.unobserve(n),r(n))})},i),b(e||'[data-src]')[l](function(e){e[m](d)||(e.setAttribute(d,''),t?t.observe(e):r(e))})},n)},f.reveal=g,c.Defer=f,c.addEventListener('on'+e in c?e:n,function(){for(I();s[0];t(s[h](),s[h]()))r=1})}(this,document,setTimeout),function(e,n){e.defer=n=e.Defer,e.deferscript=n.js,e.deferstyle=n.css,e.deferimg=e.deferiframe=n.dom}(this); /*]]>*/</script>

<!-- jQuery (Required for Bootstrap 4) -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<!-- Bootstrap 5 Bundle (includes Popper.js) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<!-- Bootstrap CSS -->

<style>/* Ensure dropdown appears below the parent */
  .dropdown {
      position: relative;
  }
  
  .dropdown-menu {
      position: absolute !important;
      top: 100%;  /* Position it right below the parent */
      left: 0;
      background-color: white; /* Adjust as needed */
      border: 1px solid #ddd;
      z-index: 9999 !important; /* Ensure it appears above other elements */
      display: none; /* Hidden by default */
      min-width: 180px;
  }
  
  .dropdown:hover .dropdown-menu,
  .dropdown-menu.show {
      display: block !important;
  }
  .parent-container, .slider-container {
    overflow: visible !important;
    position: relative !important;
}


  </style>
</head>
<!--[ <body> open ]-->

<body class='grD oGrd bD onId onMl onHm onMl' id='mainCont'>
@include('layouts.inc.frontend-navbar')


@yield('content')
    @include('layouts.inc.frontend-footer')




   @yield('scripts')

   <script>

document.addEventListener("DOMContentLoaded", function () {
    var dropdowns = document.querySelectorAll('.dropdown-toggle');
    
    dropdowns.forEach(function(dropdown) {
        dropdown.addEventListener('click', function(event) {
            event.preventDefault(); // Prevent the default action
            let dropdownMenu = this.nextElementSibling;
            
            if (dropdownMenu.classList.contains('show')) {
                dropdownMenu.classList.remove('show');
            } else {
                document.querySelectorAll('.dropdown-menu').forEach(menu => menu.classList.remove('show'));
                dropdownMenu.classList.add('show');
            }
        });
    });

    // Close dropdown when clicking outside
    document.addEventListener('click', function(event) {
        if (!event.target.matches('.dropdown-toggle')) {
            document.querySelectorAll('.dropdown-menu').forEach(menu => menu.classList.remove('show'));
        }
    });
});


   </script>
</body>
</html>

