<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>
  <!-- Canonical Tag -->
  <link rel="canonical" href="{{ url()->current() }}" />

  <!-- Other Meta Tags -->

    <meta name="description" content="@yield('meta_description')">
    <meta name="keyowords" content="@yield('meta_keyword')">
    <meta name="author" content="@yield('Techie')">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">

    <link rel="stylesheet" href="{{ asset('assets/vendors/simplebar/css/simplebar.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendors/simplebar.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/examples.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendors/@coreui/chartjs/css/coreui-chartjs.css') }}" rel="stylesheet">
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
      <script src="{{ asset('ckfinder/ckfinder.js') }}"></script>

<!-- include libraries(jQuery, bootstrap) -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<!-- include summernote css/js -->
<link  href="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/summernote.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/lang/summernote-ko-KR.js"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/lang/summernote-en-US.js"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/lang/summernote-zh-CN.js"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/lang/summernote-vi-VN.js"></script>

    <script>
        $(document).ready(function() {
            var fontList = ['NotoSansKR','Arial','Courier New','Verdana','Tahoma','Times New Roamn'];
            $('#summernote').summernote({
                //lang: 'ko-KR',
                lang: 'en-US',
                // lang: 'zh-CN',
                height: 100,
                fontNames: fontList,
                fontNamesIgnoreCheck: fontList,
                fontSizes: ['8','9','10','11','12','14','18','24','36'],
                toolbar: [
                    ['font', ['fontname','fontsize','fontsizeunit']],
                    ['fontstyle', ['bold','italic','underline','strikethrough','forecolor','backcolor','superscript','subscript','clear']],
                    ['style', ['style']],
                    ['paragraph', ['paragraph','height','ul','ol']],
                    ['insert', ['table','hr','link','picture','video']],
                    ['codeview'],
                ],
            });
            // $('#summernote').summernote('fontName', '맑은 고딕');
            // $('#summernote').summernote('fontSize', 11);
            // $('#summernote').summernote('fontSizeUnit', 'pt');
        });
    </script>

</head>
<body>


    @include('layouts.inc.admin-sidebar')


    <div class="wrapper d-flex flex-column min-vh-100 bg-light">
        @include('layouts.inc.admin-navbar')


        @yield('content')


    @include('layouts.inc.admin-footer')

    </div>


    <!-- CoreUI and necessary plugins-->
    <script src="{{ asset('assets/vendors/@coreui/coreui/js/coreui.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/simplebar/js/simplebar.min.js') }}"></script>
    <!-- Plugins and scripts required by this view-->
    <script src="{{ asset('assets/vendors/chart.js/js/chart.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/@coreui/chartjs/js/coreui-chartjs.js') }}"></script>
    <script src="{{ asset('assets/vendors/@coreui/utils/js/coreui-utils.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>


      @yield('scripts')
</body>
</html>
