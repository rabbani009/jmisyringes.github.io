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
                        <span>Engineering </span>
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
                        <h3>Engineering :</h3>
                     <p style="text-align:justify;">2500KVA Diesel Generator to provide uninterrupted power supply for smooth operation and quality product
Validated HVAC system in the manufacturing area with maintaining the CLASS-C
In house trained, skilled and educated engineers including Korean experts are take part in the maintenance of machineries and equipment on regular basis.</p>
                        <!-- Add images here -->
                       
                </div>

                 <div class="col-lg-12">
                        <!-- Add images here -->
                            <div class="production-images">
                                    <img src="{{ asset('frontend/assets/images/blog/engineering.jpg')}}" alt="Production Premises" style="max-width: 80%; height: auto; display: inline-block;">
                                </div>
                            </div>
                        </div>
            </div>
        </div>
    </section>
</div>

@endsection
