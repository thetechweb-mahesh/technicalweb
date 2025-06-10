@extends('layouts.frontendhome')



@section('content')


          <!-- header -->

          <!-- Content -->

          <div id="content">
              <div class="container">
                  <div class="home-content">

                      <div class="cat-offers">

                          <div class="row">



                            <section class='breid' id='service'>
                                <div class='secIn'>
                                <div class='grew'><h2>All Services  Category
                                </h2></div>
                                <div class='bow'>


                                    @foreach ($category as $service_cate)


                                <div class='breedum section' id='feature-left-details'><div class='widget HTML' data-version='2' id='HTML21'>
                                <div class='widget-content'>
                                <div class='dring wow fadeInUp' data-wow-delay='0s'>
                                <svg class='b-gradient' viewbox="0 0 1200 1200">
                                <path d=" c102.449-36.383,81.738-164.259,0-190.28V197.659c-0.683-51.365-43.073-97.799-100.699-100.7V96.91z M1032.609,227.045v613.453  C888.778,728.424,711.072,653.216,527.741,619.46V448.134C707.635,421.062,883.576,338.057,1032.609,227.045z">




                                </path>
                                </svg>
                                    <div class='text-box'>
                                    <h4><a href="{{url('view-category/'.$service_cate->slug)}}" class="text-secondary">{{ $service_cate->name }}</a></h4>
                                    <p>{{ $service_cate->description }}</p>
                                    </div>
                                    </div>

                                </div>
                                </div></div>

                                @endforeach




                                </div><!-- contained -->
                                </div><!-- bow -->
                                </section>























</div>

</div>
</div>
</div>
</div>


          <!-- Content -->

          <!-- Footer -->
          @endsection
