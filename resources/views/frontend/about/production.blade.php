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
                        <span>Production</span>
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
                        <h3>Production Premises:</h3>
                        <p>Five storied (each floor 6500 sqm) production premises (unit-02) are made using the latest technology, like Sandwich Panel to meet the export purpose in Europe and Latin America.</p>
                        <h3>Changing Rooms:</h3>
                        <ul>
                            <li>Made with modern and latest concept of cGMP</li>
                            <li>Two-step change room</li>
                            <li>Final change room is designed with an auto-lock system with maintaining pressure differential</li>
                            <li>Hand washing facilities</li>
                            <li>Effective flushing with filtered air in the entry of the production area</li>
                            <li>Interlocking system for doors</li>
                            <li>Separate Entry and Exit in the production area</li>
                        </ul>
                        <h3>Production Area:</h3>
                        <p>Pressure differential is maintained in between corridor and manufacturing room to maintain the cleaning concept (Positive pressure in respect to corridor).</p>
                        <h3>Production Equipment:</h3>
                        <ul>
                            <li>Automatic Injection Molding machine</li>
                            <li>Automatic assembling machine</li>
                            <li>Software-based validated sterilizer</li>
                            <li>EO sterilization process</li>
                        </ul>
                        <!-- Add images here -->
                       
                </div>

                 <div class="col-lg-12">
                        <!-- Add images here -->
                            <div class="production-images">
                                    <img src="{{ asset('frontend/assets/images/blog/1 (1).jpg')}}" alt="Production Premises" style="max-width: 50%; height: auto; display: inline-block;">
                                </div>
                            </div>
                        </div>
            </div>
        </div>
    </section>
</div>

@endsection
