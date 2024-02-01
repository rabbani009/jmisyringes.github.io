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

.ttm-post-featured {
    text-align: center; /* Center the content */
}

.product-name {
    background-color: #f2f2f2; /* Background color */
    padding: 10px; /* Add padding */
    margin: 0; /* Remove default margin */
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
                                <span>Disposable Syringes</span>
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
            <h2 class="entry-title"><a href="#">1 ml</a></h2>
        </header>
    </div>
    <!-- post-featured-wrapper -->
    <div class="ttm-post-featured-wrapper ttm-featured-wrapper">
        <div class="ttm-post-featured">
            <img class="img-fluid" src="{{ asset('frontend/assets/images/portfolio/Disposable Syringes/Attachment-10 (1 ml DS Slip).png')}}" alt="">
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
                        <h3>Features</h3>
                        <ul>
                            <li>For Single Use</li>
                            <li>Sterile hypodermic syringe</li>
                            <li>Pharmaceutical grade polypropylene for barrel & Plunger</li>
                            <li>Non toxic Medical grade elastomer gasket</li>
                            <li>Packed in germ free blister pack, poly pouch & ribbon pack</li>
                            <li>Pyrogen free & Sterilized by EO Gas</li>
                            <li>Superior Needle Sharpness</li>
                        </ul>
                    </div>
                    <!-- Div for features -->
                    <div class="features">
                        <h3>Principal Component</h3>
                        <ul>
                        <li>Barrel is a cylinder like transparent product where a ring present which support for lock and Plunger is a piston like transparent product.</li>
                        <li>Gasket: Black in color which is fixed with the top position of Plunger.</li>
                        <li>Needle: Needle with cap fixed with the top position of Barrel</li>
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
            <h2 class="entry-title"><a href="#">3 ml</a></h2>
        </header>
    </div>
    <!-- post-featured-wrapper -->
    <div class="ttm-post-featured-wrapper ttm-featured-wrapper">
            <div class="ttm-post-featured">
                    <img class="img-fluid" src="{{ asset('frontend/assets/images/portfolio/Disposable Syringes/Attachment-30.b(3 ml DS Lock).png')}}" alt="">
                    <p class="product-name">3 ml Lock type</p>
                    <img class="img-fluid" src="{{ asset('frontend/assets/images/portfolio/Disposable Syringes/Attachment-30.a(3 ml DS Slip).png')}}" alt="">
                    <p class="product-name">3 ml Slip type</p>
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
                        <h3>Features</h3>
                        <ul>
                            <li>For Single Use</li>
                            <li>Sterile hypodermic syringe</li>
                            <li>Pharmaceutical grade polypropylene for barrel & Plunger</li>
                            <li>Non toxic Medical grade elastomer gasket</li>
                            <li>Packed in germ free blister pack, poly pouch & ribbon pack</li>
                            <li>Pyrogen free & Sterilized by EO Gas</li>
                            <li>Superior Needle Sharpness</li>
                        </ul>
                    </div>
                    <!-- Div for features -->
                    <div class="features">
                        <h3>Principal Component</h3>
                        <ul>
                            <li>Barrel is a cylinder like transparent product where a ring present which support for lock and Plunger is a piston like transparent product.</li>
                            <li>Gasket: Black in color which is fixed with the top position of Plunger.</li>
                            <li>Needle: Needle with cap fixed with the top position of Barrel</li>
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
            <h2 class="entry-title"><a href="#">5 ml</a></h2>
        </header>
    </div>
    <!-- post-featured-wrapper -->
    <div class="ttm-post-featured-wrapper ttm-featured-wrapper">
            <div class="ttm-post-featured">
                    <img class="img-fluid" src="{{ asset('frontend/assets/images/portfolio/Disposable Syringes/Attachment-31.b (5 ml DS Lock).png')}}" alt="">
                    <p class="product-name">5 ml Lock type</p>
                    <img class="img-fluid" src="{{ asset('frontend/assets/images/portfolio/Disposable Syringes/Attachment-31.a (5 ml DS Slip).png')}}" alt="">
                    <p class="product-name">5 ml Slip type</p>
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
                        <h3>Features</h3>
                        <ul>
                            <li>For Single Use</li>
                            <li>Sterile hypodermic syringe</li>
                            <li>Pharmaceutical grade polypropylene for barrel & Plunger</li>
                            <li>Non toxic Medical grade elastomer gasket</li>
                            <li>Packed in germ free blister pack, poly pouch & ribbon pack</li>
                            <li>Pyrogen free & Sterilized by EO Gas</li>
                            <li>Superior Needle Sharpness</li>
                        </ul>
                    </div>
                    <!-- Div for features -->
                    <div class="features">
                        <h3>Principal Component</h3>
                        <ul>
                            <li>Barrel is a cylinder like transparent product where a ring present which support for lock and Plunger is a piston like transparent product.</li>
                            <li>Gasket: Black in color which is fixed with the top position of Plunger.</li>
                            <li>Needle: Needle with cap fixed with the top position of Barrel</li>
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
            <h2 class="entry-title"><a href="#">10 ml</a></h2>
        </header>
    </div>
    <!-- post-featured-wrapper -->
    <div class="ttm-post-featured-wrapper ttm-featured-wrapper">
        <div class="ttm-post-featured">
            <img class="img-fluid" src="{{ asset('frontend/assets/images/portfolio/Disposable Syringes/10ml Disposable Syringe.png')}}" alt="">
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
                        <h3>Features</h3>
                        <ul>
                            <li>For Single Use</li>
                            <li>Sterile hypodermic syringe</li>
                            <li>Pharmaceutical grade polypropylene for barrel & Plunger</li>
                            <li>Non toxic Medical grade elastomer gasket</li>
                            <li>Packed in germ free blister pack, poly pouch & ribbon pack</li>
                            <li>Pyrogen free & Sterilized by EO Gas</li>
                            <li>Superior Needle Sharpness</li>
                        </ul>
                    </div>
                    <!-- Div for features -->
                    <div class="features">
                        <h3>Principal Component</h3>
                        <ul>
                        <li>Barrel is a cylinder like transparent product where a ring present which support for lock and Plunger is a piston like transparent product.</li>
                        <li>Gasket: Black in color which is fixed with the top position of Plunger.</li>
                        <li>Needle: Needle with cap fixed with the top position of Barrel</li>
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
            <h2 class="entry-title"><a href="#">20 ml</a></h2>
        </header>
    </div>
    <!-- post-featured-wrapper -->
    <div class="ttm-post-featured-wrapper ttm-featured-wrapper">
        <div class="ttm-post-featured">
            <img class="img-fluid" src="{{ asset('frontend/assets/images/portfolio/Disposable Syringes/Attachment-11 (20 ml DS).png')}}" alt="">
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
                        <h3>Features</h3>
                        <ul>
                            <li>For Single Use</li>
                            <li>Sterile hypodermic syringe</li>
                            <li>Pharmaceutical grade polypropylene for barrel & Plunger</li>
                            <li>Non toxic Medical grade elastomer gasket</li>
                            <li>Packed in germ free blister pack, poly pouch & ribbon pack</li>
                            <li>Pyrogen free & Sterilized by EO Gas</li>
                            <li>Superior Needle Sharpness</li>
                        </ul>
                    </div>
                    <!-- Div for features -->
                    <div class="features">
                        <h3>Principal Component</h3>
                        <ul>
                        <li>Barrel is a cylinder like transparent product where a ring present which support for lock and Plunger is a piston like transparent product.</li>
                        <li>Gasket: Black in color which is fixed with the top position of Plunger.</li>
                        <li>Needle: Needle with cap fixed with the top position of Barrel</li>
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
            <h2 class="entry-title"><a href="#">50 ml</a></h2>
        </header>
    </div>
    <!-- post-featured-wrapper -->
    <div class="ttm-post-featured-wrapper ttm-featured-wrapper">
        <div class="ttm-post-featured">
            <img class="img-fluid" src="{{ asset('frontend/assets/images/portfolio/Disposable Syringes/Attachment-12 (50 ml DS).png')}}" alt="">
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
                        <h3>Features</h3>
                        <ul>
                            <li>For Single Use</li>
                            <li>Sterile hypodermic syringe</li>
                            <li>Pharmaceutical grade polypropylene for barrel & Plunger</li>
                            <li>Non toxic Medical grade elastomer gasket</li>
                            <li>Packed in germ free blister pack, poly pouch & ribbon pack</li>
                            <li>Pyrogen free & Sterilized by EO Gas</li>
                            <li>Superior Needle Sharpness</li>
                        </ul>
                    </div>
                    <!-- Div for features -->
                    <div class="features">
                        <h3>Principal Component</h3>
                        <ul>
                        <li>Barrel is a cylinder like transparent product where a ring present which support for lock and Plunger is a piston like transparent product.</li>
                        <li>Gasket: Black in color which is fixed with the top position of Plunger.</li>
                        <li>Needle: Needle with cap fixed with the top position of Barrel</li>
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
                                    <span class="post-date">lnstruction for Use (lFU) of Hypodermic Disposable Syringe (DS)</span>
                                    <a href="{{asset('/frontend/assets/attachments/IFU-DS.pdf')}}" target="_blank">
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