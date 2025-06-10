@extends('layouts.frontendhome')
{{--
@section('title', "$setting->meta_title")
@section('meta_description', "$setting->meta_description")
@section('meta_keyword', "$setting->meta_keyword") --}}

@section('content')




<section class='b-client b-gradient'>
    <div class='secIn'>
    <div class='drill section' id='client-counter'><div class='widget HTML' data-version='2' id='HTML43'>
    <h3 class='title'>
  {{__('Contact us')}}
    </h3>
 
    </div></div>
    </div><!-- contained -->
    </section>

    

<section class="ts-wrapper" id="contact">
    <div class="secIn">
    <div class="bow">
    <div class="ts-left yape rot-top wow fadeInLeft section" id="desc-feature" style="visibility: visible; animation-name: fadeInLeft;"><div class="widget HTML" data-version="2" id="HTML57">
    <h3 class="title">
        <h3 class='title'>
            We Offer A Variety Of Industry Specific Marketing Solutions
            </h3>


    <div class="widget-content">
    <p>We help business owners and startups better serve more clients through digital enabled tools and strategies that increase market reach. We speciliaze in serving business owners through our practical experience and passion.</p>

    </div>
    </div></div>
    <div class="ts-right section" id="three-text-feature"><div class="widget HTML" data-version="2" id="HTML13">
    <div class="widget-content">


    <div class="  wow fadeInUp" data-wow-delay="0.3s" style=" fadeInUp;">

<div class='section' id='add-widget'><div class='widget ContactForm' data-version='2' id='ContactForm1'>

    <div class='contact-form-widget'>
    <div class='form'>
        @if(Session::has('success'))
<div class="alert alert-success" role="alert">
{{Session::get('success')}}
</div>
@endif
    <form name='contact-form'  action="{{url('sendEmail')}}" method="post">
@csrf
    <p></p>
    Name
    <br/>
    <input class='contact-form-name'  name='name' size='30' type='text' required placeholder="Name.."/>
    <p></p>
    Email
    <span style='font-weight: bolder;'>*</span>
    <br/>
    <input class='contact-form-email'  name='email' size='30' type='text' required placeholder="Email.."/>
    <p></p>
    Message
    <span style='font-weight: bolder;'>*</span>
    <br/>
    <textarea class='contact-form-email-message' cols='25'  name='message' rows='5' required placeholder="message.."></textarea>
    <p></p>
    <input class='contact-form-button contact-form-button-submit zbutton Gu'  type='submit' name="send"  value='Contact'/>



    </form>
    </div>
    </div>
    </div></div>
    </div>
    </div>
    </div></div>
    </div><!-- bow -->
    </div><!-- contained -->
    </section>


<div class='duo-tab section' id='duo-app' name='Whatsapp Form'><div class='widget HTML' data-version='2' id='HTML59'>

<div class='widget-content'>
<input class='pubic' type='hidden' value='966591549009'/>
</div>
</div></div>


@endsection
