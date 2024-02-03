@extends('frontend.master')

@section('title') Production| Message @endsection

@section('content')
<!-- page-title -->
<div class="ttm-page-title-row">
    <div class="ttm-page-title-row-inner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="breadcrumb-wrapper">
                        <span>
                            <a title="Homepage" href="#">Home</a>
                        </span>
                        <span>Factory</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- page-title end-->

<div class="site-main">
    <section class="ttm-row overview-section clearfix">
        <div class="ttm-team-member-single-content-wrapper ttm-team-member-view-default">
            <div class="container">
                <div class="row">
                      
                    <div class="col-lg-12">
                        <h3>Factory :</h3>
                     <p style="text-align:justify;">The JMI Syringes & Medical Devices Ltd. Factory plant is situated in an environment friendly location 118 Km away from the capital city of Dhaka, at Chauddagram, Comilla, Bangladesh. The second largest city of Bangladesh, Chittagong, is 122 Km ahead of the plant.

The company has been accredited with the International Standards for EN ISO 13485: 2016, ISO 9001:2015 and GMP Certification.

The experienced team is made up of a group of learned, dedicated and hard working people, working in a friendly environment and with a caring and efficient management so they achieve the financial and social goals of the company.</p>
                        <!-- Add images here -->
                       
                </div>

                 <div class="col-lg-12">
                        <!-- Add images here -->
                            <div class="production-images">
                                    <img src="{{ asset('frontend/assets/images/blog/facroty.jpg')}}" alt="Production Premises" style="max-width: 50%; height: auto; display: inline-block;">
                                </div>
                            </div>
                        </div>
            </div>
        </div>
    </section>
</div>

@endsection
