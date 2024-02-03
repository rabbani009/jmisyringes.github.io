@extends('frontend.master')

@section('title') code| Message @endsection

<style>
    /* Add your custom styles here */
    .featured-thumbnail {
        border: 1px solid #ccc; /* Add border around images */
        padding: 5px; /* Add padding for better spacing */
        margin-bottom: 20px; /* Add margin-bottom for better separation between images */
    }

    .featured-thumbnail img {
        max-width: 100%; /* Ensure images don't exceed their container's width */
        height: auto; /* Maintain aspect ratio */
    }
</style>

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
                        <span>Code of Conduct</span>
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
                        <div class="ttm-team-member-single-content">
                            <div class="ttm-team-member-content mt-40">
                                <div class="section-title">
                                    <div class="title-header">
                                        <h2 class="title">Code of Conduct</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ttm-team-member-single-content row">
                    <!-- Image 1 -->
                    <div class="col-lg-6 col-md-6">
                        <div class="featured-item featured-team-item ttm-item-view-leftimage">
                            <div class="featured-thumbnail">
                                <img class="img-fluid" src="{{ asset('frontend/assets/investors/code/CO_1.jpg')}}" alt="image">
                            </div>
                        </div>
                    </div>
                    <!-- Image 2 -->
                    <div class="col-lg-6 col-md-6">
                        <div class="featured-item featured-team-item ttm-item-view-leftimage">
                            <div class="featured-thumbnail">
                                <img class="img-fluid" src="{{ asset('frontend/assets/investors/code/CO_2.jpg')}}" alt="image">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <div class="featured-item featured-team-item ttm-item-view-leftimage">
                            <div class="featured-thumbnail">
                                <img class="img-fluid" src="{{ asset('frontend/assets/investors/code/CO_3.jpg')}}" alt="image">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <div class="featured-item featured-team-item ttm-item-view-leftimage">
                            <div class="featured-thumbnail">
                                <img class="img-fluid" src="{{ asset('frontend/assets/investors/code/CO_4.jpg')}}" alt="image">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <div class="featured-item featured-team-item ttm-item-view-leftimage">
                            <div class="featured-thumbnail">
                                <img class="img-fluid" src="{{ asset('frontend/assets/investors/code/CO_5.jpg')}}" alt="image">
                            </div>
                        </div>
                    </div>


                    <!-- Add more images here -->
                </div>
                <!-- Add more rows for additional images -->
            </div>
        </div>
    </section>
</div>

@endsection
