
<div class='mainWrp'>
<!--[ Header section ]-->
<header class='header' id='header'>
<!--[ Header content ]-->
<div class='headCn'>
<div class='headIn secIn'>
<div class='headD headL'>
<!--<div class='headIc'> <label class='tNav tIc bIc nav-toggle' for='offNav'><b:include name='ham-icon'/></label> </div>-->
<!--[ Header widget ]-->
<div class='headN section' id='header-title'><div class='widget Header' data-version='2' id='Header1'>
<a href='{{ url('/') }}'>


    <img alt='Skylink WEB Services' height='34' src='{{url('./frontend/images/w300/BizTratus-Logo.png')}}' width='234'/></a>
<div class='headInnr hidden'>
<h1 class='headH'>
<span class='headTtl'>
Skylink WEB Services
</span>
</h1>
</div>
</div></div>
</div>
<!--[ Header menu ]-->
<div class='headD headM'>
<div class='mnBr'>
<div class='mnBrs'>
<div class='menu section' id='menu'><div class='widget HTML' data-version='2' id='HTML005'>



<ul class='menu-left'>
<li><a href='{{ url('/') }}'>Home</a></li>
<li><a href='{{ url('#about') }}'>About Us </a></li>
<li><a href='#blogCont'>Portfolio </a></li>
@php  
    $categories = App\Models\Category::where('status','0')->get();
@endphp
<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="testDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        Services
    </a>
    <ul class="dropdown-menu" aria-labelledby="testDropdown">
        @foreach ($categories as $category)
        
       
        <li><a class="dropdown-item" href="{{url('view-category/'.$category->slug)}}">{{$category->name}}</a></li> @endforeach
    </ul>
</li>

<li><a href='{{url('/contact')}}'>Contact Us</a></li>
</ul>
</div></div>
</div>
</div>
<label class='fCls' for='offNav'></label>
<span>
                <a href='https://api.whatsapp.com/send?phone=8447443127' target='_blank'>
                <img src="https://i0.wp.com/dubawa.org/wp-content/uploads/2023/08/WhatsApp-icon.png?fit=1600%2C372&ssl=1" width="120px"></a></span>
</div>
<div class='headD headR'>
<div class='headI'>
<div class='headP section' id='header-icon'><div class='widget TextList' data-version='2' id='TextList000'>
<ul class='headIc'>
<li><label class='tNav tIc bIc nav-toggle' for='offNav'>
<svg class='line' viewBox='0 0 24 24'><line x1='3' x2='21' y1='12' y2='12'></line><line x1='3' x2='21' y1='5' y2='5'></line><line x1='3' x2='21' y1='19' y2='19'></line></svg>
</label></li>
<li class='isDrk'>
<span aria-label='Dark' class='tDark tIc tDL bIc' onclick='darkMode()' role='button'>
<svg class='line' viewBox='0 0 24 24'>
<g class='d1'><path d='M183.72453,170.371a10.4306,10.4306,0,0,1-.8987,3.793,11.19849,11.19849,0,0,1-5.73738,5.72881,10.43255,10.43255,0,0,1-3.77582.89138,1.99388,1.99388,0,0,0-1.52447,3.18176,10.82936,10.82936,0,1,0,15.118-15.11819A1.99364,1.99364,0,0,0,183.72453,170.371Z' transform='translate(-169.3959 -166.45548)'></path></g>
<g class='d2'><path class='f' d='M12 18.5C15.5899 18.5 18.5 15.5899 18.5 12C18.5 8.41015 15.5899 5.5 12 5.5C8.41015 5.5 5.5 8.41015 5.5 12C5.5 15.5899 8.41015 18.5 12 18.5Z'></path><path d='M19.14 19.14L19.01 19.01M19.01 4.99L19.14 4.86L19.01 4.99ZM4.86 19.14L4.99 19.01L4.86 19.14ZM12 2.08V2V2.08ZM12 22V21.92V22ZM2.08 12H2H2.08ZM22 12H21.92H22ZM4.99 4.99L4.86 4.86L4.99 4.99Z' stroke-width='2'></path></g></svg>
</span>
</li>
<li class='isSrh'>
<label aria-label='Search' class='tSrch tIc bIc' for='offSrh'>
<svg class='line' viewBox='0 0 24 24'><g transform='translate(2.000000, 2.000000)'><circle cx='9.76659044' cy='9.76659044' r='8.9885584'></circle><line x1='16.0183067' x2='19.5423342' y1='16.4851259' y2='20.0000001'></line></g></svg>
</label>
</li>
</ul>
</div></div>
</div>
</div>
</div>
</div>
</header>
