@extends('layouts.frontendhome')


@section('content')





{{ $category->name }}

@foreach ($services as $service_cate)

<section class='dreid'>
<div class='secIn'>
<div class='grew'><h2>{{ $service_cate->name }}</h2></div>
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
<p>{{ $service_cate->description; }}</p>
<a href='#' class='zbutton Gu'><i class='icon dl'></i>Read More</a>
</div>
</div></div>
</div>
</div><!-- contained -->
</section>

@endforeach






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
<h3 class='title'>
Send Whatsapp Query
</h3>
<div class='widget-content'>
<input class='pubic' type='hidden' value='966591549009'/>
</div>
</div></div>


@endsection
