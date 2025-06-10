@extends('layouts.frontendhome')
{{--
@section('title', "$setting->meta_title")
@section('meta_description', "$setting->meta_description")
@section('meta_keyword', "$setting->meta_keyword") --}}

@section('content')







<section class='dreid' id="about">
<div class='secIn'>

  
gfhjkhjlkkl
<div class='grew'><h2>
  {{-- {{ str_replace('-', ' ', $blogs->slug) }} --}}
  {{ ucfirst(str_replace('-', ' ', $blogs->slug)) }}
</h2></div>
<div class='bow'>
<div class='ts-left wow fadeInLeft section' id='lazyload-video'><div class='widget HTML' data-version='2' id='HTML41'>
<div class='widget-content'>
<div  >
<img src="{{url('uploads/blog/'.$blogs->image)}}" alt="Youtube video" lazied="" /></div>
</div>
</div></div>
<div class='ts-right yape wow fadeInRight section' id='company-detail'><div class='widget HTML' data-version='2' id='HTML97'>
<h3 class='title'>

  <h2><strong>{{$blogs->name}}</strong></h2>
</h3>
<div class='widget-content'>
<p>{!!$blogs->description!!}</p>
<a href='{{url('blog')}}' class='zbutton Gu'><i class='icon dl'></i>Read More</a>
</div>
</div></div>
</div>
</div><!-- contained -->
</section>


<div class="sidebar-block">
  <h3 class="sidebar-title">{{__('Recent Blog')}}</h3>
  @foreach($recentblog as $blog)
  <div class="blog-item">
    <a class="post-thumb" href="">
      {{-- <img src="../uploads/blog/{{$blog->image}}" alt=""> --}}
    </a>
    <div class="content">
      <h5 class="post-title"><a href="#">{{$blog->name}}</a></h5>
      <div class="meta">
        <a href="#"><span class="mai-calendar"></span>{{ $blog->created_at->format('M d, Y') }}</a>
        <a href="#"><span class="mai-person"></span> {{$blog->username}}</a>
        
      </div>
    </div>
  </div>
 @endforeach

 
</div>




@endsection
