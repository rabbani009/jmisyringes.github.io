@extends('frontend.master')

@section('title') Product | view @endsection
<style>
.ttm-post-featured img {
    max-width: 30%; /* Ensure image doesn't exceed its container */
    height: auto; /* Maintain aspect ratio */
}

.spec-features-container {
    display: flex; /* Display divs side by side */
}

.specifications,
.features {
    flex: 1; /* Equal width for both divs */
    padding: 20px; /* Add padding for spacing */
    border: 1px solid #eaeaea; /* Add border */
    margin: 0 10px; /* Add margin between divs */
}

.specifications h3,
.features h3 {
    font-size: 20px; /* Heading font size */
    margin-bottom: 10px; /* Add space below heading */
}

ul {
    padding-left: 0; /* Remove defaolt list indentation */
}

ul li {
    margin-bottom: 8px; /* Add space between list items */
}

.ttm-post-featured {
    text-align: center; /* Center the content */
}

.product-name {
    background-color: #f2f2f2; /* Background color */
    padding: 10px; /* Add padding */
    margin: 0; /* Remove default margin */
    margin-top: 12px;
    margin-bottom: 10px
}

@media (max-width: 768px) {
    .spec-features-container {
        flex-direction: column; /* Stack divs vertically */
    }

    .specifications,
    .features {
        flex: none; /* Disable equal width */
        width: 100%; /* Foll width on small devices */
        margin: 0; /* Remove margin */
    }

    .specifications,
    .features {
        margin-bottom: 20px; /* Add space between sections */
    }
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
                                <span>3-Way Stopcock</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>                    
        </div><!-- page-title end-->

    <!--site-main start-->
    <div class="site-main">


        <div class="ttm-row sidebar ttm-sidebar-right ttm-bgcolor-white clearfix">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-lg-9 content-area">

<!-- post -->
<article class="post ttm-blog-classic clearfix">
    <div class="ttm-post-entry-header">
        <header class="entry-header">
            <h2 class="entry-title"><a href="#">3-Way Stopcock</a></h2>
        </header>
    </div>
    <!-- post-featured-wrapper -->
    <div class="ttm-post-featured-wrapper ttm-featured-wrapper">
            <div class="ttm-post-featured">
                    <img class="img-fluid" src="{{ asset('frontend/assets/images/portfolio/3_way/Attachment-34.b (3 way stop Cock with Extention tube).png')}}" alt="">
                    <p class="product-name">JMI 3-Way Stopcock with Extension Tube</p>
                    <img class="img-fluid" src="{{ asset('frontend/assets/images/portfolio/3_way/Attachment-34.a (3-Way Stopcock).png')}}" alt="">
                    <p class="product-name">JMI 3-Way Stopcock</p>
                  
    </div><!-- post-featured-wrapper end -->
    <!-- ttm-blog-classic-content -->
    <div class="ttm-blog-classic-content">
        <div class="entry-content">
            <div class="ttm-box-desc-text">
                <!-- Add two divs side by side here -->
                <div class="spec-features-container">
                    <!-- Div for specifications -->
                    <div class="specifications">
                        <h3>JMI 3-Way Stopcock with Extension Tube</h3>
                        <ul>
                            <li>Leak proof body withstands pressure up-to ten bars when applied in normal conditions</li>
                            <li>Three way stop cock integrated with Kink resistant PVC tubing</li>
                            <li>A perfect module which facilitates drug administration or additional lines together</li>
                            <li>360° rotation</li>
                            <li>Minimum residual volume</li>
                            <li>Clear transparent body facilitates easy visualization of fluid flow</li>
                            <li>Screw luer lock ensures safe and secure connection to other standard luer systems</li>
                            <li>Sterilized by EO gas</li>
                            <li>Extension Tube Length (cm): 10, 25, 50, 100, 150 & 200</li>
                        </ul>
                    </div>
                    <!-- Div for features -->
                    <div class="features">
                        <h3>JMI 3-Way Stopcock</h3>
                        <ul>
                            <li>Leak proof body withstands pressure up-to ten bars when applied in normal conditions</li>
                            <li>360° rotation</li>
                            <li>Clear transparent body facilitates easy visualization of fluid flow</li>
                            <li>Minimum residual volume</li>
                            <li>Screw luer lock ensures safe and secured connection to other standard luer systems</li>
                            <li>6% luer-taper is compatible with any standard product</li>
                            <li>Sterilized with EO gas</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- ttm-blog-classic-content end -->
</article>
<!-- post end -->



                       
                    </div>
                    <div class="col-lg-3 widget-area sidebar-right">                      
                        <aside class="widget widget-Categories with-title">
                            <h3 class="widget-title">Explore Products </h3>
                            <ul>
                                <li><a href="{{url('/AD-product-view')}}">AD Syringes</a></li>
                                <li class="active"><a href="#">Disposable Syringes</a></li>
                                <li><a href="#">Toomey Syringe</a></li>
                                <li><a href="#">3-Way Stopcock</a></li>
                                <li><a href="#">Disposable Needles</a></li>
                                <li><a href="#">Scalp Vein Set</a></li>
                                <li><a href="#">IV Infusion Set</a></li>
                                <li><a href="#">I.V. Cannola</a></li>
                                <li><a href="#">Blood Transfusion Set</a></li>
                                <li><a href="#">First Aid Bandage</a></li>
                                <li><a href="#">Urine Drainage Bag</a></li>
                                <li><a href="#">JMI Leg Bag</a></li>
                                <li><a href="#">JMI Nelaton Catheterme</a></li>
                                <li><a href="#">JMI Disposable Stomach Tube</a></li>
                                <li><a href="#">JMI Umbilical Cord Clamp</a></li>
                                <li><a href="#">Wound Drain Tube</a></li>
                                <li><a href="#">Feeding Tube</a></li>
                                <li><a href="#">JMI Oral Dispenser</a></li>
                                <li><a href="#">Suction Catheter</a></li>
                                <li><a href="#">3-Way Stopcock</a></li>
                                <li><a href="#">JMI Blood Lancet</a></li>
                                <li><a href="#">Safety Boxme</a></li>
                                <li><a href="#">Copper T</a></li>
                            </ul>
                        </aside>
                   
                    </div>
                </div><!-- row end -->
            </div>
        </div>

    </div><!--site-main end-->




@endsection