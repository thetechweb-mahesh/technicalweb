@extends('layouts.frontendhome')

@section('title',"$services->meta_title")
@section('meta_description',"$services->meta_description")
@section('meta_keyword',"$services->meta_keyword")

@section('content')



{{-- @if(isset($homeContent) && $homeContent)
{{-- Check if homeContent is not null 
<h1 class="home-title">{{ $homeContent->title ?? 'Default Title' }}</h1>
{{-- <img class="home-image" src="{{ asset($homeContent->img ?? 'default-image.jpg') }}" alt="{{ $homeContent->title }}"> 
<h2 class="home-subtitle">{{ $homeContent->subtitle ?? 'Default Subtitle' }}</h2> 
<p class="home-details">{!! $homeContent->details ?? 'Default details content' !!}</p>
@else
<p>No content available for the home page.</p>
@endif --}}


<!--[ SearchBox section ]-->
<input class='srhI fixi hidden' id='offSrh' type='checkbox'/>
<div class='srhB fixL'>
<div class='srhBi fixLi'>
<div class='srhBs fixLs section' id='search-widget'><div class='widget BlogSearch' data-version='2' id='BlogSearch1'>
<form action='search.html' class='srhF' target='_top'>
<label class='sb' for='searchIn'>
<svg class='line' viewBox='0 0 24 24'><g transform='translate(2.000000, 2.000000)'><circle cx='9.76659044' cy='9.76659044' r='8.9885584'></circle><line x1='16.0183067' x2='19.5423342' y1='16.4851259' y2='20.0000001'></line></g></svg>
</label>
<input aria-label='Search this blog' autocomplete='off' id='searchIn' minlength='3' name='q' placeholder='Try &#39;Technology&#39;' required='required' value=''/>
<button aria-label='Clear' class='sb' data-text='Clear' type='reset'></button>
</form>
<label aria-label='Close' class='srhC c' for='offSrh'></label>
</div>
</div>
</div>
<label class='fCls' for='offSrh'></label>
</div>
<!--[ Upper Homepage section ]-->
<div class='home-slid b-gradient' id='mega-wrap'>
<div class='secIn'>
<div class='bow'>
<div class='reap-slider section' id='home-slider-description'><div class='widget HTML' data-version='2' id='HTML61'>
<h3 class='title'>
We are
</h3>
<div class='widget-content'>
<div class='max-reap'><h2>Providing Quality services <span class="bm-normal">for</span><span class='gaper'/>
<span class="word">App.</span>
<span class="word">Business.</span>
<span class="word">Designing.</span>
<span class="word">Marketing.</span>
<span class="word">Portfolio.</span></span></h2>
<p>We help business owners and startups better serve more clients through digital enabled tools and strategies that increase market reach. We specialize in serving business owners through our practical experience and passion.</p>
<a href='#' class='zbutton Wu' id="contact"> Get In Touch</a>   </div>
{{-- <i class='icon dl'></i> --}}
</div>
</div></div>
<div class='gs-img-slider section' id='home-slider-image'><div class='widget Image' data-version='2' id='Image5'>
<div class='widget-content'>
<img alt='Slider Image' class='alltuchtopdown' height='385' id='Image5_img' src='{{url('./frontend/images/s462/Moving-data-server.png')}}'  width='462'>
</img>
<br/>
</div>
</div></div>
</div>
<ul class='rotating-box'><li></li></ul>
</div><!-- contained -->
</div>



<section class='breid'>

@if(isset($homeContent) && $homeContent)
{{-- Check if homeContent is not null --}}
{{-- <h1 class="home-title">{{ $homeContent->title ?? 'Default Title' }}</h1> --}}
{{-- <img class="home-image" src="{{ asset($homeContent->img ?? 'default-image.jpg') }}" alt="{{ $homeContent->title }}"> --}}
{{-- <h2 class="home-subtitle">{{ $homeContent->subtitle ?? 'Default Subtitle' }}</h2>  --}}
<p class="home-details">{!! $homeContent->details ?? 'Default details content' !!}</p>
@else
<p>No content available for the home page.</p>
@endif
</section>

{{-- 
<section class='breid' id='service'>
<div class='secIn'>
<div class='grew'><h2>Web Development Services
</h2></div>
<div class='bow'>

  @if(!$all_categories->isEmpty())
    @foreach ($all_categories as $service_cate)


<div class='breedum section' id='feature-left-details'><div class='widget HTML' data-version='2' id='HTML21'>
<div class='widget-content'>
<div class='dring wow fadeInUp' data-wow-delay='0s'>
<svg class='b-gradient' viewbox="0 0 1200 1200">
<path d="M1030.014,96.91  C874.836,250.578,646.766,344.637,427.042,357.866H100.749C49.358,358.572,2.898,402.262,0,459.889V607.02  c0.701,51.369,43.068,99.121,100.699,102.021h130.821c-34.962,118.567,2.593,238.596,43.15,356.415  c60.166,56.81,197.785,49.742,242.638-24.195c-95.523-75.091-142.05-277.145-26.889-326.979  c196.285,22.271,390.749,122.01,539.594,255.716c51.169-0.701,97.705-42.745,100.699-100.062V628.618  c102.449-36.383,81.738-164.259,0-190.28V197.659c-0.683-51.365-43.073-97.799-100.699-100.7V96.91z M1032.609,227.045v613.453  C888.778,728.424,711.072,653.216,527.741,619.46V448.134C707.635,421.062,883.576,338.057,1032.609,227.045z"></path>
</svg>
    <div class='text-box'>
   <h4><a href="{{url('category/'.$service_cate->slug)}}  " class="text-secondary">{{ $service_cate->name }}</a></h4> 
    <h4><a href="{{url('view-category/'.$service_cate->slug)}}" class="text-secondary">{{ $service_cate->name }}</a></h4>


    <p>{!! $service_cate->description !!}</p>
    </div>
    </div>

</div>
</div></div>

@endforeach

@else
    <p>No categories available.</p>
@endif


</div><!-- contained -->
</div><!-- bow -->
</section>





<section class='dreid' id="about">
<div class='secIn'>
<div class='grew'><h2>Best Web Designing Company In Delhi</h2></div>
<div class='bow'>
<div class='ts-left wow fadeInLeft section' id='lazyload-video'><div class='widget HTML' data-version='2' id='HTML41'>
<div class='widget-content'>
<div class="lazyYt" data-embed="OHt3Vu0LV8o">
<img class="lazy loaded" data-src="wp-content/uploads/2020/08/20181008074614-shutterstock-1041718081.jpg" src="wp-content/uploads/2020/08/20181008074614-shutterstock-1041718081.jpg" alt="Youtube video" lazied="" /></div>
</div>
</div></div>
<div class='ts-right yape wow fadeInRight section' id='company-detail'><div class='widget HTML' data-version='2' id='HTML97'>
<h3 class='title'>
Are You Ready To Take Your Business Online
</h3>
<div class='widget-content'>
<p>Ready to stand out online? Let's talk about making your website awesome! Reach out to us now to chat about your website ideas and design wishes. We're here to turn your online dreams into a digital reality.</p>
<a href='{{url('blog')}}' class='zbutton Gu'><i class='icon dl'></i>Read More</a>
</div>
</div></div>
</div>
</div><!-- contained -->
</section>
<section class='ts-wrapper' id='services'>
<div class='secIn'>
<div class='bow'>
<div class='ts-left yape rot-top wow fadeInLeft section' id='desc-feature'><div class='widget HTML' data-version='2' id='HTML57'>
<h3 class='title'>
We Offer A Variety Of Industry Specific Marketing Solutions
</h3>
<div class='widget-content'>
<p>We help business owners and startups better serve more clients through digital enabled tools and strategies that increase market reach. We speciliaze in serving business owners through our practical experience and passion.</p>
<a href='#' class='zbutton Gu'><i class='icon dl'></i>Try it free</a>
</div>
</div></div>
<div class='ts-right section' id='three-text-feature'><div class='widget HTML' data-version='2' id='HTML13'>
<div class='widget-content'>
<div class='gs-feature-list slideone s2-grean wow fadeInUp' data-wow-delay='0s'>
<div class='icon-list text-center relative-position'><svg viewbox="0 0 339.411 339.411"><polygon points="339.411,21.213 318.198,0 226.274,91.924 176.022,41.672 176.022,163.596 297.946,163.596 247.487,113.137  "></polygon>
	<polygon points="163.595,176.022 41.672,176.022 91.924,226.275 0,318.198 21.213,339.411 113.137,247.488 163.596,297.947  "></polygon></svg></div>
<div class='gs-text headline-list content-list'>
<h4>Digital Strategy</h4>
<p>Create stunning, effective sales documents with custom-designed theme & template.</p>
</div>
</div>
<div class='gs-feature-list slidetwo s2-grean wow fadeInUp' data-wow-delay='0.2s'>
<div class='icon-list text-center relative-position'><svg viewbox="0 0 1200 1200">
<path d="M1030.014,96.91  C874.836,250.578,646.766,344.637,427.042,357.866H100.749C49.358,358.572,2.898,402.262,0,459.889V607.02  c0.701,51.369,43.068,99.121,100.699,102.021h130.821c-34.962,118.567,2.593,238.596,43.15,356.415  c60.166,56.81,197.785,49.742,242.638-24.195c-95.523-75.091-142.05-277.145-26.889-326.979  c196.285,22.271,390.749,122.01,539.594,255.716c51.169-0.701,97.705-42.745,100.699-100.062V628.618  c102.449-36.383,81.738-164.259,0-190.28V197.659c-0.683-51.365-43.073-97.799-100.699-100.7V96.91z M1032.609,227.045v613.453  C888.778,728.424,711.072,653.216,527.741,619.46V448.134C707.635,421.062,883.576,338.057,1032.609,227.045z"/>
</path></svg></div>
<div class='gs-text headline-list content-list'>
<h4>Content Creation</h4>
<p>Create stunning, effective sales documents with custom-designed theme & template.</p>
</div>
</div>
<div class='gs-feature-list slidetree s2-grean wow fadeInUp' data-wow-delay='0.3s'>
<div class='icon-list text-center relative-position'><svg viewbox="0 0 24 24"><path d="M12 2C6.486 2 2 6.486 2 12v4.143C2 17.167 2.897 18 4 18h1a1 1 0 0 0 1-1v-5.143a1 1 0 0 0-1-1h-.908C4.648 6.987 7.978 4 12 4s7.352 2.987 7.908 6.857H19a1 1 0 0 0-1 1V18c0 1.103-.897 2-2 2h-2v-1h-4v3h6c2.206 0 4-1.794 4-4 1.103 0 2-.833 2-1.857V12c0-5.514-4.486-10-10-10z"/></path></svg></div>
<div class='gs-text headline-list content-list'>
<h4>Premium Support</h4>
<p>Create stunning, effective sales documents with custom-designed theme & template.</p>
</div>
</div>
</div>
</div></div>
</div><!-- bow -->
</div><!-- contained -->
</section>
<!--[ Content section ]-->
<div class='mainIn'>
<!--[ Blog content ]-->
<div class='blogCont' id='blogCont'>
<div class='secIn'>
<!--[ Ad content ]-->
<!--Hide ads <b:tag class='blogAd' name='div'> <b:section id='horizontal-ad' maxwidgets='3' showaddelement='true'> <b:widget id='HTML91' locked='true' title='' type='HTML' version='2' visible='true'> <b:widget-settings> <b:widget-setting name='content'><![CDATA[<div class="mt-ad" data-text="Ads go here"></div>]]></b:widget-setting> </b:widget-settings> <b:includable id='main'> <b:if cond='data:content != &quot;&quot;'> <data:content/> <b:else/> <div class='mt-ad' expr:data-text='data:messages.adsGoHere'/> </b:if> </b:includable> </b:widget> </b:section> </b:tag>-->
<div class='blogM'>
<!--[ Main content ]-->
<main class='blogItm mainbar'>
<div class='grew'><h2 class='title'>Our Recent Projects</h2></div>
<div class='section' id='main-widget'><div class='widget Blog' data-version='2' id='Blog1'>


</div>



</div>





</main>
</div>
</div>
</div>
</div>


<section class='b-client b-gradient'>
  <div class='secIn'>
  <div class='drill section' id='client-counter'><div class='widget HTML' data-version='2' id='HTML43'>
  <h3 class='title'>
  Some Numbers that Matter to Us
  </h3>
  <div class='widget-content'>
  <div class='baflo bow'><div class="counter wow fadeInUp" data-wow-delay='0ms'>
  <svg viewbox="0 0 24 24"><path d="M19,4H17V3a1,1,0,0,0-2,0V4H9V3A1,1,0,0,0,7,3V4H5A3,3,0,0,0,2,7V19a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V7A3,3,0,0,0,19,4Zm1,15a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V12H20Zm0-9H4V7A1,1,0,0,1,5,6H7V7A1,1,0,0,0,9,7V6h6V7a1,1,0,0,0,2,0V6h2a1,1,0,0,1,1,1Z"/></path></svg>
  <span>2945</span>
  <p>Days Worked</p>
    </div>
  <div class="counter wow fadeInUp" data-wow-delay='300ms'>
  <svg viewbox="0 0 512 512">
  <path d="M437.016,74.984c-99.979-99.979-262.075-99.979-362.033,0.002c-99.978,99.978-99.978,262.073,0.004,362.031     c99.954,99.978,262.05,99.978,362.029-0.002C536.995,337.059,536.995,174.964,437.016,74.984z M406.848,406.844     c-83.318,83.318-218.396,83.318-301.691,0.004c-83.318-83.299-83.318-218.377-0.002-301.693     c83.297-83.317,218.375-83.317,301.691,0S490.162,323.549,406.848,406.844z"/>
              <path d="M368.911,155.586L234.663,289.834l-70.248-70.248c-8.331-8.331-21.839-8.331-30.17,0s-8.331,21.839,0,30.17     l85.333,85.333c8.331,8.331,21.839,8.331,30.17,0l149.333-149.333c8.331-8.331,8.331-21.839,0-30.17     S377.242,147.255,368.911,155.586z"/></path></path></svg>
  <span>422</span>
  <p>Project Finished</p>
    </div>
  <div class="counter wow fadeInUp" data-wow-delay='600ms'>
  <svg viewbox="0 0 296.001 296.001">
      <path d="M290.664,148.038c-5.78-10.667-15.653-18.438-27.799-21.882c-4.126-1.17-8.375-1.764-12.629-1.764   c-7.386,0-14.474,1.792-20.789,4.997c0.021-3.326,0.004-6.442-0.013-9.328c-0.01-1.766-0.02-3.454-0.02-5.061c0-4.418-3.582-8-8-8   H8.042c-4.418,0-8,3.582-8,8c0,1.606-0.01,3.295-0.02,5.061c-0.179,31.228-0.512,89.354,50.826,150.104   c1.521,1.798,3.756,2.836,6.11,2.836h115.539c2.355,0,4.59-1.038,6.11-2.836c4.799-5.678,9.145-11.334,13.083-16.946   c10.572-1.611,85.224-14.84,101.98-68.771C297.602,171.8,296.533,158.869,290.664,148.038z M60.71,257.001   c-43.783-53.478-44.84-103.064-44.703-134H213.45c0.137,30.935-0.92,80.522-44.703,134H60.71z M278.393,179.699   c-10.523,33.866-52.082,48.877-74.857,54.675c17.735-31.75,23.395-61.319,25.152-84.879c5.563-5.662,13.268-9.103,21.548-9.103   c2.778,0,5.559,0.39,8.264,1.156c7.962,2.258,14.389,7.27,18.097,14.112C280.449,162.77,281.07,171.082,278.393,179.699z"/>
      <path d="M72.729,82.001c0,4.418,3.582,8,8,8s8-3.582,8-8c0-2.462,0.414-3.341,1.238-5.094c1.166-2.477,2.762-5.868,2.762-11.907   c0-6.039-1.596-9.431-2.762-11.907c-0.824-1.753-1.238-2.632-1.238-5.094c0-2.461,0.414-3.341,1.238-5.093   c1.166-2.476,2.762-5.867,2.762-11.905c0-4.418-3.582-8-8-8s-8,3.582-8,8c0,2.461-0.414,3.341-1.238,5.093   c-1.166,2.476-2.762,5.867-2.762,11.905c0,6.038,1.596,9.43,2.762,11.906c0.824,1.753,1.238,2.632,1.238,5.095   c0,2.462-0.414,3.342-1.238,5.095C74.324,72.571,72.729,75.963,72.729,82.001z"/>
      <path d="M104.729,82.001c0,4.418,3.582,8,8,8s8-3.582,8-8c0-2.462,0.414-3.341,1.238-5.094c1.166-2.477,2.762-5.868,2.762-11.907   c0-6.039-1.596-9.431-2.762-11.907c-0.824-1.753-1.238-2.632-1.238-5.094c0-2.461,0.414-3.341,1.238-5.093   c1.166-2.476,2.762-5.867,2.762-11.905c0-4.418-3.582-8-8-8s-8,3.582-8,8c0,2.461-0.414,3.341-1.238,5.093   c-1.166,2.476-2.762,5.867-2.762,11.905c0,6.038,1.596,9.43,2.762,11.906c0.824,1.753,1.238,2.632,1.238,5.095   c0,2.462-0.414,3.342-1.238,5.095C106.324,72.571,104.729,75.963,104.729,82.001z"/>
      <path d="M136.729,82.001c0,4.418,3.582,8,8,8s8-3.582,8-8c0-2.462,0.414-3.341,1.238-5.094c1.166-2.477,2.762-5.868,2.762-11.907   c0-6.039-1.596-9.431-2.762-11.907c-0.824-1.753-1.238-2.632-1.238-5.094c0-2.461,0.414-3.341,1.238-5.093   c1.166-2.476,2.762-5.867,2.762-11.905c0-4.418-3.582-8-8-8s-8,3.582-8,8c0,2.461-0.414,3.341-1.238,5.093   c-1.166,2.476-2.762,5.867-2.762,11.905c0,6.038,1.596,9.43,2.762,11.906c0.824,1.753,1.238,2.632,1.238,5.095   c0,2.462-0.414,3.342-1.238,5.095C138.324,72.571,136.729,75.963,136.729,82.001z"/>
  </path></path></path></path></svg>
  <span>1621</span>
  <p>Coffee Cup</p>
    </div>
  <div class="counter wow fadeInUp" data-wow-delay='900ms'>
  <svg viewbox="0 0 16 16"><path d="M4.111 2.18a7 7 0 1 1 7.778 11.64A7 7 0 0 1 4.11 2.18zm.556 10.809a6 6 0 1 0 6.666-9.978 6 6 0 0 0-6.666 9.978zM6.5 7a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm5 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zM8 11a3 3 0 0 1-2.65-1.58l-.87.48a4 4 0 0 0 7.12-.16l-.9-.43A3 3 0 0 1 8 11z"/></path></svg>
  <span>865</span>
  <p>Client Satisfied</p>
    </div></div>
  </div>
  </div></div>
  </div><!-- contained -->
  </section>
<!--[ Bottom blog section ]-->

  <div class='mainIn'>
    <!--[ Blog content ]-->
    <div class='blogCont' id='blogCont'>
    <div class='secIn'>
    <div class='blogM'>
<main class='blogItm mainbar'>
<div class='grew'><h2 class='title'>Our Recent Blog</h2></div>



<div class="bow">


    



  @foreach ($blog as $blogitem)

  <div class="breedum section" id="feature-left-details"><div class="widget HTML" data-version="2" id="HTML21">
  <div class="widget-content">
  <div class="dring wow fadeInUp" data-wow-delay="0s" style="visibility: visible; animation-delay: 0s; animation-name: fadeInUp;">
  <svg class="b-gradient" viewBox="0 0 1200 1200">
  <path d="M1030.014,96.91  C874.836,250.578,646.766,344.637,427.042,357.866H100.749C49.358,358.572,2.898,402.262,0,459.889V607.02  c0.701,51.369,43.068,99.121,100.699,102.021h130.821c-34.962,118.567,2.593,238.596,43.15,356.415  c60.166,56.81,197.785,49.742,242.638-24.195c-95.523-75.091-142.05-277.145-26.889-326.979  c196.285,22.271,390.749,122.01,539.594,255.716c51.169-0.701,97.705-42.745,100.699-100.062V628.618  c102.449-36.383,81.738-164.259,0-190.28V197.659c-0.683-51.365-43.073-97.799-100.699-100.7V96.91z M1032.609,227.045v613.453  C888.778,728.424,711.072,653.216,527.741,619.46V448.134C707.635,421.062,883.576,338.057,1032.609,227.045z"></path>
  </svg>
      <div class="text-box">
      
      <h2><a href="{{url('blog/'.$blogitem->slug)}}" class="text-secondary"> {{$blogitem->name}}</a></h2>
        
    </div>
      </div>
  
  </div>
  </div></div>
  
  @endforeach
  
  
  
  </div>



</main>
</div>
</div>
</div>
</div>
<!--[ Bottom Homepage section ]-->


    


 --}}








<!-- <section class='pricing-wrap' id='pricing-wrap'> <div class='secIn'> <h4>Pricing Plans</h4> <p class='p-corn'>We offer a variety of tools and solutions to help you increase website traffic and solutions.</p> <div class='bow'> <b:section class='peelar-4' id='pricing-table-1' maxwidgets='1' showaddelement='true'> <b:widget id='HTML16' locked='false' title='Basic' type='HTML' version='2' visible='true'> <b:widget-settings> <b:widget-setting name='content'><![CDATA[<div class='generic_feature_list'> <ul> <li>01 User</li> <li>01 Project</li> <li>01 Advisor Team</li> <li>Complete Statistics</li> <li>E-mail Support</li> </ul> </div> <div class='generic_price_tag clearfix'> <span class='price'> <span class='sign'>$</span> <span class='currency'>49</span> <span class='month'>/Mon</span> </span> </div> <div class='generic_price_btn clearfix'> <a class='' href=''>Sign up now</a> </div>]]></b:widget-setting> </b:widget-settings> <b:includable id='main'> <div class='generic_content wow fadeInRight' data-wow-delay='0ms'> <div class='generic_head_price'> <div class='generic_head_content'> <div class='head_bg'/> <div class='head'> <svg viewBox='0 0 60.062 60.062'> <path d='M60.046,11.196c0.004-0.024,0.011-0.048,0.013-0.072c0.007-0.074-0.001-0.149-0.01-0.224 c-0.002-0.019,0.001-0.037-0.002-0.056c-0.018-0.099-0.051-0.196-0.1-0.289c-0.008-0.016-0.019-0.031-0.028-0.047 c-0.002-0.002-0.002-0.005-0.003-0.008c-0.001-0.002-0.004-0.003-0.005-0.006c-0.007-0.011-0.013-0.023-0.02-0.033 c-0.062-0.091-0.137-0.166-0.221-0.23c-0.019-0.014-0.041-0.022-0.061-0.035c-0.074-0.049-0.152-0.089-0.236-0.116 c-0.037-0.012-0.074-0.018-0.112-0.025c-0.073-0.015-0.146-0.022-0.222-0.02c-0.04,0.001-0.078,0.003-0.118,0.009 c-0.026,0.004-0.051,0-0.077,0.006L0.798,22.046c-0.413,0.086-0.729,0.421-0.788,0.839s0.15,0.828,0.523,1.025l16.632,8.773 l2.917,16.187c-0.002,0.012,0.001,0.025,0,0.037c-0.01,0.08-0.011,0.158-0.001,0.237c0.005,0.04,0.01,0.078,0.02,0.117 c0.023,0.095,0.06,0.184,0.11,0.268c0.01,0.016,0.01,0.035,0.021,0.051c0.003,0.005,0.008,0.009,0.012,0.013 c0.013,0.019,0.031,0.034,0.046,0.053c0.047,0.058,0.096,0.111,0.152,0.156c0.009,0.007,0.015,0.018,0.025,0.025 c0.015,0.011,0.032,0.014,0.047,0.024c0.061,0.04,0.124,0.073,0.191,0.099c0.027,0.01,0.052,0.022,0.08,0.03 c0.09,0.026,0.183,0.044,0.277,0.044c0.001,0,0.002,0,0.003,0h0c0,0,0,0,0,0c0.004,0,0.008-0.002,0.012-0.002 c0.017,0.001,0.034,0.002,0.051,0.002c0.277,0,0.527-0.124,0.712-0.315l11.079-7.386l11.6,7.54c0.164,0.106,0.354,0.161,0.545,0.161 c0.105,0,0.212-0.017,0.315-0.051c0.288-0.096,0.518-0.318,0.623-0.604l13.996-37.989c0.013-0.034,0.024-0.069,0.033-0.105 c0.004-0.015,0.005-0.03,0.008-0.044C60.042,11.22,60.044,11.208,60.046,11.196z M48.464,17.579L24.471,35.22 c-0.039,0.029-0.07,0.065-0.104,0.099c-0.013,0.012-0.026,0.022-0.037,0.035c-0.021,0.023-0.04,0.046-0.059,0.071 c-0.018,0.024-0.032,0.049-0.048,0.074c-0.037,0.06-0.068,0.122-0.092,0.188c-0.005,0.013-0.013,0.023-0.017,0.036 c-0.001,0.004-0.005,0.006-0.006,0.01l-2.75,8.937l-2.179-12.091L48.464,17.579z M22.908,46.594l2.726-9.004l4.244,2.759 l1.214,0.789l-4.124,2.749L22.908,46.594z M52.044,13.498L18.071,30.899l-14.14-7.458L52.044,13.498z M44.559,47.504L29.154,37.492 l-2.333-1.517l30.154-22.172L44.559,47.504z'/> </svg> <b:include name='widget-title'/> </div> </div> </div> <div class='widget-content'> <data:content/> </div> </div> </b:includable> </b:widget> </b:section> <b:section class='peelar-4' id='pricing-table-2' maxwidgets='1' showaddelement='true'> <b:widget id='HTML23' locked='false' title='Standard' type='HTML' version='2' visible='true'> <b:widget-settings> <b:widget-setting name='content'><![CDATA[<div class='generic_feature_list'> <ul> <li>01 User</li> <li>01 Project</li> <li>01 Advisor Team</li> <li>Complete Statistics</li> <li>E-mail Support</li> </ul> </div> <div class='generic_price_tag clearfix'> <span class='price'> <span class='sign'>$</span> <span class='currency'>99</span> <span class='month'>/Mon</span> </span> </div> <div class='generic_price_btn clearfix'> <a class='' href=''>Sign up now</a> </div>]]></b:widget-setting> </b:widget-settings> <b:includable id='main'> <div class='generic_content active wow fadeInRight' data-wow-delay='300ms'> <div class='generic_head_price'> <div class='generic_head_content'> <div class='head_bg'/> <div class='head'> <svg viewBox='0 0 64 64'> <path d='M63.6870499,18.5730648L48.7831497,4.278266c-0.1855011-0.1758003-0.4316025-0.4813001-0.6870003-0.4813001 H15.9037514c-0.2553005,0-0.5014,0.3054998-0.6870003,0.4813001l-14.9038,14.1908998 c-0.374,0.3535004-0.4184,0.9855995-0.1025,1.3917999c0.21,0.2703991,30.8237991,39.7256012,31.0517006,39.9812012 c0.1022987,0.1149979,0.2402992,0.2215996,0.3428001,0.266098c0.2763996,0.1206017,0.5077,0.1296997,0.7900982,0.0065002 c0.1025009-0.0444984,0.2404022-0.1348991,0.3428001-0.2499008c0.0151024-0.0168991,0.0377007-0.0224991,0.0517006-0.0404968 L63.789547,19.9121666C64.1054459,19.5058651,64.0610504,18.9265652,63.6870499,18.5730648z M15.6273508,6.4344659 l4.9945002,11.3625011H3.6061509L15.6273508,6.4344659z M24.0795517,17.7969666l7.9203987-11.2617006l7.9204979,11.2617006 H24.0795517z M40.7191467,19.7969666l-8.7191963,34.8769989l-8.719099-34.8769989H40.7191467z M33.9257507,5.7969656h12.5423012 l-4.8240013,10.9746008L33.9257507,5.7969656z M22.3559513,16.7715664L17.53195,5.7969656h12.5423012L22.3559513,16.7715664z M21.2191505,19.7969666l8.6596012,34.638401L2.975451,19.7969666H21.2191505z M42.7808495,19.7969666h18.2436981 l-26.9032974,34.638401L42.7808495,19.7969666z M43.3781471,17.7969666l4.9944992-11.3625011l12.0212021,11.3625011H43.3781471z'/> </svg> <b:include name='widget-title'/> </div> </div> </div> <div class='widget-content'> <data:content/> </div> </div> </b:includable> </b:widget> </b:section> <b:section class='peelar-4' id='pricing-table-3' maxwidgets='1' showaddelement='true'> <b:widget id='HTML24' locked='false' title='Advanced' type='HTML' version='2' visible='true'> <b:widget-settings> <b:widget-setting name='content'><![CDATA[<div class='generic_feature_list'> <ul> <li>01 User</li> <li>01 Project</li> <li>01 Advisor Team</li> <li>Complete Statistics</li> <li>E-mail Support</li> </ul> </div> <div class='generic_price_tag clearfix'> <span class='price'> <span class='sign'>$</span> <span class='currency'>199</span> <span class='month'>/Mon</span> </span> </div> <div class='generic_price_btn clearfix'> <a class='' href=''>Sign up now</a> </div>]]></b:widget-setting> </b:widget-settings> <b:includable id='main'> <div class='generic_content wow fadeInRight' data-wow-delay='600ms'> <div class='generic_head_price'> <div class='generic_head_content'> <div class='head_bg'/> <div class='head'> <svg viewBox='0 0 243.317 243.317'> <path d='M242.949,93.714c-0.882-2.715-3.229-4.694-6.054-5.104l-74.98-10.9l-33.53-67.941c-1.264-2.56-3.871-4.181-6.725-4.181 c-2.855,0-5.462,1.621-6.726,4.181L81.404,77.71L6.422,88.61C3.596,89.021,1.249,91,0.367,93.714 c-0.882,2.715-0.147,5.695,1.898,7.688l54.257,52.886L43.715,228.96c-0.482,2.814,0.674,5.658,2.983,7.335 c2.309,1.678,5.371,1.9,7.898,0.571l67.064-35.254l67.063,35.254c1.097,0.577,2.296,0.861,3.489,0.861c0.007,0,0.014,0,0.021,0 c0,0,0,0,0.001,0c4.142,0,7.5-3.358,7.5-7.5c0-0.629-0.078-1.24-0.223-1.824l-12.713-74.117l54.254-52.885 C243.096,99.41,243.832,96.429,242.949,93.714z M173.504,146.299c-1.768,1.723-2.575,4.206-2.157,6.639l10.906,63.581 l-57.102-30.018c-2.185-1.149-4.795-1.149-6.979,0l-57.103,30.018l10.906-63.581c0.418-2.433-0.389-4.915-2.157-6.639 l-46.199-45.031l63.847-9.281c2.443-0.355,4.555-1.889,5.647-4.103l28.55-57.849l28.55,57.849c1.092,2.213,3.204,3.748,5.646,4.103 l63.844,9.281L173.504,146.299z'/> </svg> <b:include name='widget-title'/> </div> </div> </div> <div class='widget-content'> <data:content/> </div> </div> </b:includable> </b:widget> </b:section> <b:section class='peelar-4' id='pricing-table-4' maxwidgets='1' showaddelement='true'> <b:widget id='HTML26' locked='false' title='Unlimited' type='HTML' version='2' visible='true'> <b:widget-settings> <b:widget-setting name='content'><![CDATA[<div class='generic_feature_list'> <ul> <li>01 User</li> <li>01 Project</li> <li>01 Advisor Team</li> <li>Complete Statistics</li> <li>E-mail Support</li> </ul> </div> <div class='generic_price_tag clearfix'> <span class='price'> <span class='sign'>$</span> <span class='currency'>299</span> <span class='month'>/Mon</span> </span> </div> <div class='generic_price_btn clearfix'> <a class='' href=''>Sign up now</a> </div>]]></b:widget-setting> </b:widget-settings> <b:includable id='main'> <div class='generic_content wow fadeInRight' data-wow-delay='900ms'> <div class='generic_head_price'> <div class='generic_head_content'> <div class='head_bg'/> <div class='head'> <svg viewBox='0 0 480.61 480.61'> <path d='M469.012,20.343l-2.395-6.339l-6.339-2.394C439.878,3.906,418.436,0,396.547,0c-48.104,0-93.33,18.733-127.346,52.749 l-48.227,48.227l-107.787,5.228l-90.214,90.213l77.783,24.777l-28.763,28.762l16.802,16.802l-37.224,57.056l105.235,105.237 l57.057-37.224l16.802,16.802l28.763-28.763l24.775,77.783l90.216-90.214l5.227-107.786l48.227-48.227 C477.832,161.462,493.98,86.459,469.012,20.343z M79.029,182.788l47.182-47.181l63.197-3.065l-64.773,64.773L79.029,182.788z M160.805,390.623l-70.806-70.806l20.473-31.381l81.713,81.714L160.805,390.623z M345.015,354.412l-47.181,47.181l-14.527-45.606 l64.773-64.773L345.015,354.412z M230.665,366.202L114.419,249.956L290.414,73.961C318.764,45.612,356.455,30,396.547,30 c15.957,0,31.625,2.487,46.671,7.401c17.451,53.48,3.463,112.785-36.558,152.807L230.665,366.202z'/> <path d='M364.951,70.67c-12.02,0-23.32,4.681-31.819,13.18c-17.546,17.545-17.546,46.094,0,63.64 c8.499,8.499,19.8,13.18,31.819,13.18s23.32-4.681,31.819-13.18c17.546-17.545,17.546-46.094,0-63.64 C388.272,75.351,376.971,70.67,364.951,70.67z M375.558,126.277c-2.833,2.833-6.6,4.394-10.606,4.394s-7.773-1.561-10.606-4.393 c-5.849-5.849-5.849-15.365,0-21.214c2.833-2.833,6.6-4.393,10.606-4.393s7.773,1.56,10.606,4.393 C381.406,110.912,381.406,120.429,375.558,126.277z'/> <path d='M0.013,375.612l33.999-34l21.213,21.213l-33.999,33.999L0.013,375.612z M105.004,480.61l-21.213-21.213l33.999-33.999 l21.213,21.213L105.004,480.61z M25.031,432.878l50.122-50.122l21.213,21.213l-50.122,50.122L25.031,432.878z'/> </svg> <b:include name='widget-title'/> </div> </div> </div> <div class='widget-content'> <data:content/> </div> </div> </b:includable> </b:widget> </b:section> </div> </div> </section> -->
<section class='start-in'>
<div class='secIn'>
<div class='bran section' id='start-new-project'><div class='widget HTML' data-version='2' id='HTML25'>
<div class='widget-content'>
<div><h3> Want to start a new project with us? Let’s Start! </h3></div>
<div><a href='#' class='zbutton Gu'><i class='icon demo'></i>Start Now</a></div>
</div>
</div></div>
</div><!-- contained -->
</section>
<div class='duo-tab section' id='duo-app' name='Whatsapp Form'><div class='widget HTML' data-version='2' id='HTML59'>

<div class='widget-content'>
<input class='pubic' type='hidden' value='966591549009'/>
</div>
</div></div>


@endsection
