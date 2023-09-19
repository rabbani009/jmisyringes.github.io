@extends('frontend.master')

@section('title') Certification| Message @endsection

@section('content')
  <!-- page-title -->
  <div class="ttm-page-title-row">
            <div class="ttm-page-title-row-inner">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12">
                            
                            <div class="breadcrumb-wrapper">
                                <span>
                                    <a title="Homepage" href="index.html">Home</a>
                                </span>
                                <span>Founder Message</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>                    
        </div><!-- page-title end-->

<div class="site-main">



<section class="ttm-row clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="section-title">
                            <div class="title-header">
                                <h2 class="title">Awards & <br>Achievements</h2>
                            </div>
                        </div>
                        <p>We owe our achievements to our dedicated employees.
Here are a few honors we’ve received for our business results, workplace culture and philanthropic activities.</p>
                    </div>
                    <div class="col-lg-8">
                        <div class="row ttm-boxes-spacing-0px" >
                            <div class="col-sm-4 ttm-box-col-wrapper text-center">
                                <div class="border-bottom pb-10">
                                    <img class="img-fluid" src="{{ asset('frontend/assets/images/award-one.png')}}" alt="image">
                                </div>
                            </div>
                            <div class="col-sm-4 ttm-box-col-wrapper text-center border-left">
                                <div class="border-bottom pb-10">
                                    <img class="img-fluid" src="{{ asset('frontend/assets/images/award-three.png')}}" alt="image">
                                </div>
                            </div>
                            <div class="col-sm-4 ttm-box-col-wrapper text-center border-left">
                                <div class="border-bottom pb-10">
                                    <img class="img-fluid" src="{{ asset('frontend/assets/images/award-two.png')}}" alt="image">
                                </div>
                            </div>
                            <div class="col-sm-4 ttm-box-col-wrapper text-center">
                                <img class="img-fluid" src="{{ asset('frontend/assets/images/award-two.png')}}" alt="image">
                            </div>
                            <div class="col-sm-4 ttm-box-col-wrapper text-center border-left">
                                <img class="img-fluid" src="{{ asset('frontend/assets/images/award-one.png')}}" alt="image">
                            </div>
                            <div class="col-sm-4 ttm-box-col-wrapper text-center border-left">
                                <img class="img-fluid" src="{{ asset('frontend/assets/images/award-three.png')}}" alt="image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

</div>



@endsection