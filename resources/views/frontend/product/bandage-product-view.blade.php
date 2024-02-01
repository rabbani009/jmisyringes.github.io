@extends('frontend.master')

@section('title') Product | view @endsection
<style>
.ttm-post-featured img {
    max-width: 100%; /* Ensure image doesn't exceed its container */
    height: auto; /* Maintain aspect ratio */
    margin-bottom:5px;
}

.spec-features-container {
    display: flex; /* Display divs side by side */
    justify-content: space-between; /* Distribute items evenly */
}

.specifications,
.features {
    flex: 1; /* Equal width for both divs */
    padding: 20px; /* Add padding for spacing */
    border: 1px solid #eaeaea; /* Add border */
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
                                <span>First Aid Bandage</span>
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
            <h2 class="entry-title"><a href="#">First Aid Bandage</a></h2>
        </header>
    </div>
    <!-- post-featured-wrapper -->
    <div class="ttm-post-featured-wrapper ttm-featured-wrapper">
       <div class="ttm-post-featured">
                <div class="spec-features-container">
                    <div class="specifications">
                        <img class="img-fluid" src="{{ asset('frontend/assets/images/portfolio/First Aid Bandage/Attachment-33.a (JMI Bandage and packet).png')}}" alt="">
               
                    </div>
                    <div class="features">
                        <img class="img-fluid" src="{{ asset('frontend/assets/images/portfolio/First Aid Bandage/Attachment-33.b (Bandage).png')}}" alt="">
                   
                    </div>
                </div>
            </div>
      </div>
    
    <!-- post-featured-wrapper end -->
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
                            <li>Waterproof, breathe freely ,flexible, non-stick Plastic Bandage</li>
                            <li>Standard Size (72 mm x 19 mm)</li>
                            <li>Two different Pack size (100 strips / 25 strips)</li>
                        </ul>                   
                    </div>
                    <!-- Div for features -->
                    <!-- <div class="features">
                        <h3>Principal Component</h3>
                        <ul>
                            <li>Barrel is a cylinder like transparent product where a ring present which support for lock and Plunger is a piston like transparent product.</li>
                            <li>Gasket: Black in color which is fixed with the top position of Plunger.</li>
                            <li>Needle: Needle with cap fixed with the top position of Barrel</li>
                        </ul>
                    </div> -->
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
                                <li><a href="#">ivcannula</a></li>
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