@extends('frontend.master')

@section('title') Product | view @endsection
<style>
.ttm-post-featured img {
    max-width: 80%; /* Ensure image doesn't exceed its container */
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
                                <span>AD Syringes</span>
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
            <h2 class="entry-title"><a href="#">AD 0.05 ml</a></h2>
        </header>
    </div>
    <!-- post-featured-wrapper -->
    <div class="ttm-post-featured-wrapper ttm-featured-wrapper">
        <div class="ttm-post-featured">
            <img class="img-fluid" src="{{ asset('frontend/assets/images/portfolio/ADSyringes/Attachment-1 (0.05 mL AD).png')}}" alt="">
        </div>
    </div><!-- post-featured-wrapper end -->
    <!-- ttm-blog-classic-content -->
    <div class="ttm-blog-classic-content">
        <div class="entry-content">
            <div class="ttm-box-desc-text">
                <!-- Add two divs side by side here -->
                <div class="spec-features-container">
                    <!-- Div for specifications -->
                    <div class="specifications">
                        <h3>Specifications</h3>
                        <ul>
                            <li>Capacity: 0.05ml</li>
                            <li>Graduation</li>
                            <li>AD Mechanism: Locking Plunger</li>
                            <li>Needle Gauge: 27G x ½“</li>
                        </ul>
                    </div>
                    <!-- Div for features -->
                    <div class="features">
                        <h3>Features</h3>
                        <ul>
                            <li>Reuse-proof</li>
                            <li>Fixed Needle</li>
                            <li>Locking mechanism</li>
                            <li>Non-toxic</li>
                            <li>Medical grade elastomer gasket</li>
                            <li>Pyrogen free & Sterilized by EO Gas</li>
                            <li>Packed in germ free blister pack</li>
                            <li>Prevents wastage of drug & vaccine</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- ttm-blog-classic-content end -->
</article>
<!-- post end -->

<!-- post -->
<article class="post ttm-blog-classic clearfix">
    <div class="ttm-post-entry-header">
        <header class="entry-header">
            <h2 class="entry-title"><a href="#">AD 0.5 ml</a></h2>
        </header>
    </div>
    <!-- post-featured-wrapper -->
    <div class="ttm-post-featured-wrapper ttm-featured-wrapper">
        <div class="ttm-post-featured">
            <img class="img-fluid" src="{{ asset('frontend/assets/images/portfolio/ADSyringes/Attachment-2 (0.5 mL AD).png')}}" alt="">
        </div>
    </div><!-- post-featured-wrapper end -->
    <!-- ttm-blog-classic-content -->
    <div class="ttm-blog-classic-content">
        <div class="entry-content">
            <div class="ttm-box-desc-text">
                <!-- Add two divs side by side here -->
                <div class="spec-features-container">
                    <!-- Div for specifications -->
                    <div class="specifications">
                        <h3>Specifications</h3>
                        <ul>
                            <li>Capacity 0.5ml</li>
                            <li>Graduation</li>
                            <li>Needle Gauge: 23G x 1”</li>
                            <li>AD Mechanism: Locking and Breaking Plunger</li>
                        </ul>
                    </div>
                    <!-- Div for features -->
                    <div class="features">
                        <h3>Features</h3>
                        <ul>
                            <li>Reuse-proof</li>
                            <li>Fixed Needle</li>
                            <li>Locking and breaking mechanism</li>
                            <li>Non toxic</li>
                            <li>Medical grade elastomer gasket</li>
                            <li>Pyrogen free & Sterilized by EO Gas</li>
                            <li>Packed in germ free blister pack</li>
                            <li>Prevents wastage of drug & vaccine</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- ttm-blog-classic-content end -->
</article>
<!-- post end -->

<!-- post -->
<article class="post ttm-blog-classic clearfix">
    <div class="ttm-post-entry-header">
        <header class="entry-header">
            <h2 class="entry-title"><a href="#">AD 0.1 ml</a></h2>
        </header>
    </div>
    <!-- post-featured-wrapper -->
    <div class="ttm-post-featured-wrapper ttm-featured-wrapper">
        <div class="ttm-post-featured">
            <img class="img-fluid" src="{{ asset('frontend/assets/images/portfolio/ADSyringes/Attachment-3 (0.1 mL AD).png')}}" alt="">
        </div>
    </div><!-- post-featured-wrapper end -->
    <!-- ttm-blog-classic-content -->
    <div class="ttm-blog-classic-content">
        <div class="entry-content">
            <div class="ttm-box-desc-text">
                <!-- Add two divs side by side here -->
                <div class="spec-features-container">
                    <!-- Div for specifications -->
                    <div class="specifications">
                        <h3>Specifications</h3>
                        <ul>
                            <li>Capacity 0.1 ml</li>
                            <li>Graduation</li>
                            <li>Needle Gauge: 27G x ½“ </li>
                            <li>AD Mechanism: Locking Plunger</li>
                        </ul>
                    </div>
                    <!-- Div for features -->
                    <div class="features">
                        <h3>Features</h3>
                        <ul>
                            <li>Reuse-proof</li>
                            <li>Fixed Needle</li>
                            <li>Auto disable mechanism</li>
                            <li>Prevents wastage of drug & vaccine</li>
                            <li>Medical grade elastomer gasket</li>
                            <li>Packed in germ free blister pack</li>
                            <li>Non toxic, pyrogen free & sterilized by EO Gas</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- ttm-blog-classic-content end -->
</article>
<!-- post end -->

<!-- post -->
<article class="post ttm-blog-classic clearfix">
    <div class="ttm-post-entry-header">
        <header class="entry-header">
            <h2 class="entry-title"><a href="#">AD 1 ml</a></h2>
        </header>
    </div>
    <!-- post-featured-wrapper -->
    <div class="ttm-post-featured-wrapper ttm-featured-wrapper">
        <div class="ttm-post-featured">
            <img class="img-fluid" src="{{ asset('frontend/assets/images/portfolio/ADSyringes/Attachment-5 (1ml AD).png')}}" alt="">
        </div>
    </div><!-- post-featured-wrapper end -->
    <!-- ttm-blog-classic-content -->
    <div class="ttm-blog-classic-content">
        <div class="entry-content">
            <div class="ttm-box-desc-text">
                <!-- Add two divs side by side here -->
                <div class="spec-features-container">
                    <!-- Div for specifications -->
                    <div class="specifications">
                        <h3>Specifications</h3>
                        <ul>
                            <li>Capacity 1ml</li>
                            <li>Graduation</li>
                            <li>Needle Gauge: 22G x 1”</li>
                            <li>AD Mechanism: Locking and Breaking Plunger</li>
                        </ul>
                    </div>
                    <!-- Div for features -->
                    <div class="features">
                        <h3>Features</h3>
                        <ul>
                            <li>Reuse-proof</li>
                            <li>Fixed Needle</li>
                            <li>Locking and breaking mechanism</li>
                            <li>Non toxic</li>
                            <li>Medical grade elastomer gasket</li>
                            <li>Pyrogen free & Sterilized by EO Gas</li>
                            <li>Packed in germ free blister pack</li>
                            <li>Prevents wastage of drug & vaccine</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- ttm-blog-classic-content end -->
</article>
<!-- post end -->
                      
<!-- post -->
<article class="post ttm-blog-classic clearfix">
    <div class="ttm-post-entry-header">
        <header class="entry-header">
            <h2 class="entry-title"><a href="#">AD 3 ml</a></h2>
        </header>
    </div>
    <!-- post-featured-wrapper -->
    <div class="ttm-post-featured-wrapper ttm-featured-wrapper">
        <div class="ttm-post-featured">
            <img class="img-fluid" src="{{ asset('frontend/assets/images/portfolio/ADSyringes/Attachment-7 (3 mL AD).png')}}" alt="">
        </div>
    </div><!-- post-featured-wrapper end -->
    <!-- ttm-blog-classic-content -->
    <div class="ttm-blog-classic-content">
        <div class="entry-content">
            <div class="ttm-box-desc-text">
                <!-- Add two divs side by side here -->
                <div class="spec-features-container">
                    <!-- Div for specifications -->
                    <div class="specifications">
                        <h3>Specifications</h3>
                        <ul>
                            <li>Capacity 3ml</li>
                            <li>Graduation</li>
                            <li>Each Graduation 0.2ml</li>
                            <li>Needle Gauge: 23G x 1”</li>
                            <li>AD Mechanism: Locking and Breaking Plunger</li>
                        </ul>
                    </div>
                    <!-- Div for features -->
                    <div class="features">
                        <h3>Features</h3>
                        <ul>
                            <li>Reuse-proof</li>
                            <li>Fixed Needle</li>
                            <li>Locking and breaking mechanism</li>
                            <li>Non toxic</li>
                            <li>Medical grade elastomer gasket</li>
                            <li>Pyrogen free & Sterilized by EO Gas</li>
                            <li>Packed in germ free blister pack</li>
                            <li>Prevents wastage of drug & vaccine</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- ttm-blog-classic-content end -->
</article>
<!-- post end -->                         

<!-- post -->
<article class="post ttm-blog-classic clearfix">
    <div class="ttm-post-entry-header">
        <header class="entry-header">
            <h2 class="entry-title"><a href="#">AD 5 ml</a></h2>
        </header>
    </div>
    <!-- post-featured-wrapper -->
    <div class="ttm-post-featured-wrapper ttm-featured-wrapper">
        <div class="ttm-post-featured">
            <img class="img-fluid" src="{{ asset('frontend/assets/images/portfolio/ADSyringes/Attachment-8 (5 ml AD).png')}}" alt="">
        </div>
    </div><!-- post-featured-wrapper end -->
    <!-- ttm-blog-classic-content -->
    <div class="ttm-blog-classic-content">
        <div class="entry-content">
            <div class="ttm-box-desc-text">
                <!-- Add two divs side by side here -->
                <div class="spec-features-container">
                    <!-- Div for specifications -->
                    <div class="specifications">
                        <h3>Specifications</h3>
                        <ul>
                            <li>Capacity 5ml</li>
                            <li>Graduation</li>
                            <li>Each Graduation 0.2ml</li>
                            <li>Needle Gauge: 23G x 1”</li>
                            <li>AD Mechanism: Locking and Breaking Plunger</li>
                        </ul>
                    </div>
                    <!-- Div for features -->
                    <div class="features">
                        <h3>Features</h3>
                        <ul>
                            <li>Reuse-proof</li>
                            <li>Fixed Needle</li>
                            <li>Locking and breaking mechanism</li>
                            <li>Non toxic</li>
                            <li>Medical grade elastomer gasket</li>
                            <li>Pyrogen free & Sterilized by EO Gas</li>
                            <li>Packed in germ free blister pack</li>
                            <li>Prevents wastage of drug & vaccine</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- ttm-blog-classic-content end -->
</article>
<!-- post end --> 

<!-- post -->
<article class="post ttm-blog-classic clearfix">
    <div class="ttm-post-entry-header">
        <header class="entry-header">
            <h2 class="entry-title"><a href="#">AD 10 ml</a></h2>
        </header>
    </div>
    <!-- post-featured-wrapper -->
    <div class="ttm-post-featured-wrapper ttm-featured-wrapper">
        <div class="ttm-post-featured">
            <img class="img-fluid" src="{{ asset('frontend/assets/images/portfolio/ADSyringes/Attachment-9 (10 ml AD).png')}}" alt="">
        </div>
    </div><!-- post-featured-wrapper end -->
    <!-- ttm-blog-classic-content -->
    <div class="ttm-blog-classic-content">
        <div class="entry-content">
            <div class="ttm-box-desc-text">
                <!-- Add two divs side by side here -->
                <div class="spec-features-container">
                    <!-- Div for specifications -->
                    <div class="specifications">
                        <h3>Specifications</h3>
                        <ul>
                            <li>Capacity 10ml</li>
                            <li>Graduation</li>
                            <li>Each Graduation 0.2ml</li>
                            <li>Needle Gauge: 21G x 1¼“</li>
                            <li>AD Mechanism: Locking and Breaking Plunger</li>
                        </ul>
                    </div>
                    <!-- Div for features -->
                    <div class="features">
                        <h3>Features</h3>
                        <ul>
                            <li>Reuse-proof</li>
                            <li>Fixed Needle</li>
                            <li>Locking and breaking mechanism</li>
                            <li>Non toxic</li>
                            <li>Medical grade elastomer gasket</li>
                            <li>Pyrogen free & Sterilized by EO Gas</li>
                            <li>Packed in germ free blister pack</li>
                            <li>Prevents wastage of drug & vaccine</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- ttm-blog-classic-content end -->
</article>
<!-- post end --> 

<!-- post -->
<article class="post ttm-blog-classic clearfix">
    <div class="ttm-post-entry-header">
        <header class="entry-header">
            <h2 class="entry-title"><a href="#">2ml AD Syringe</a></h2>
        </header>
    </div>
    <!-- post-featured-wrapper -->
    <div class="ttm-post-featured-wrapper ttm-featured-wrapper">
        <div class="ttm-post-featured">
            <img class="img-fluid" src="{{ asset('frontend/assets/images/portfolio/ADSyringes/Attachment-6 (2 mL AD).png')}}" alt="">
        </div>
    </div><!-- post-featured-wrapper end -->
    <!-- ttm-blog-classic-content -->
    <div class="ttm-blog-classic-content">
        <div class="entry-content">
            <div class="ttm-box-desc-text">
                <!-- Add two divs side by side here -->
                <div class="spec-features-container">
                    <!-- Div for specifications -->
                    <div class="specifications">
                        <h3>Specifications</h3>
                        <ul>
                            <li>Capacity: 2ml</li>
                            <li>Needle Gauge: 24G x 1”</li>
                            <li>Printing Graduation: Each Graduation 0.1ml</li>
                            <li>AD Mechanism: Locking and Breaking Plunger</li>
                        </ul>
                    </div>
                    <!-- Div for features -->
                    <div class="features">
                        <h3>Features</h3>
                        <ul>
                            <li>Reuse-proof</li>
                            <li>Fixed Needle</li>
                            <li>Locking and breaking mechanism</li>
                            <li>Non toxic</li>
                            <li>Medical grade elastomer gasket</li>
                            <li>Pyrogen free & Sterilized by EO Gas</li>
                            <li>Packed in germ free blister pack</li>
                            <li>Prevents wastage of drug & vaccine</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- ttm-blog-classic-content end -->
</article>
<!-- post end --> 

<!-- post -->
<article class="post ttm-blog-classic clearfix">
    <div class="ttm-post-entry-header">
        <header class="entry-header">
            <h2 class="entry-title"><a href="#">0.5ml AD Syringe (Unibody)</a></h2>
        </header>
    </div>
    <!-- post-featured-wrapper -->
    <div class="ttm-post-featured-wrapper ttm-featured-wrapper">
        <div class="ttm-post-featured">
            <img class="img-fluid" src="{{ asset('frontend/assets/images/portfolio/ADSyringes/Attachment-4 (0.5ml Unibody).png')}}" alt="">
        </div>
    </div><!-- post-featured-wrapper end -->
    <!-- ttm-blog-classic-content -->
    <div class="ttm-blog-classic-content">
        <div class="entry-content">
            <div class="ttm-box-desc-text">
                <!-- Add two divs side by side here -->
                <div class="spec-features-container">
                    <!-- Div for specifications -->
                    <div class="specifications">
                        <h3>Specifications</h3>
                        <ul>
                            <li>Capacity: 0.5ml</li>
                            <li>Needle Gauge: 23G x 1”</li>
                            <li>Printing Graduation: Each Graduation 0.5ml</li>
                            <li>AD Mechanism: Locking and Breaking Plunger</li>
                        </ul>
                    </div>
                    <!-- Div for features -->
                    <div class="features">
                        <h3>Features</h3>
                        <ul>
                            <li>Reuse-proof</li>
                            <li>Fixed Needle</li>
                            <li>Locking and breaking mechanism</li>
                            <li>Non toxic</li>
                            <li>Medical grade elastomer gasket</li>
                            <li>Pyrogen free & Sterilized by EO Gas</li>
                            <li>Packed in germ free blister pack</li>
                            <li>Prevents wastage of drug & vaccine</li>
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

                    
                    <aside class="widget widget-recent-post with-title">
                            <h3 class="widget-title">Attachments</h3>
                            <ul class="widget-post ttm-recent-post-list">
                                <li>
                                    <a href="#" target="_blank">
                                        <img class="img-fluid" src="{{asset('/frontend/assets/images/pdf.png')}}" alt="post-img">
                                    </a>
                                    <span class="post-date">lnstruction for Use (lFU) of Auto-Disable (AD) Hypodermic Syringe</span>
                                    <a href="{{asset('/frontend/assets/attachments/IFU-AD.pdf')}}" target="_blank">
                                        <i class="fa fa-file-pdf-o" ></i> Download
                                    </a>
                                </li>
                            </ul>
                        </aside>


                        <aside class="widget widget-Categories with-title">
                            <h3 class="widget-title">Explore Products </h3>
                            <ul>
                                <li><a href="{{url('/AD-product-view')}}">AD Syringes</a></li>
                                <li class="active"><a href="#">Disposable Syringes</a></li>
                                <li><a href="#">Toomey Syringe</a></li>
                                <li><a href="#">Insulin Syringes</a></li>
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