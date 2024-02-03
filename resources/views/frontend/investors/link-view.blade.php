@extends('frontend.master')

@section('title') Link DSE CSE| Message @endsection

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
                        <span>Link DSE CSE</span>
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
                        <!-- Add content for linking DSE and CSE -->
                        <p><strong>Link DSE CSE</strong></p>
                        <p>Dhaka Stock Exchange: <a href="http://www.dsebd.org">www.dsebd.org</a></p>
                        <p>Chittagong Stock Exchange: <a href="http://www.cse.com.bd">www.cse.com.bd</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection
