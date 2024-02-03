@extends('frontend.master')

@section('title') Home @endsection

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

    /* Custom styles for slider title and subtitle */
    .tp-caption.tp-resizeme {
        margin-top: 70px;
        color: #fff !important; /* Set text color to white */
        text-align: center; /* Center-align text */
    }

    @media (max-width: 767px) {
    .tp-caption.tp-resizeme {
        font-size: 15px !important; /* Reduce font size for smaller screens */
        margin-top: 70px !important; /* Adjust margin-top to reduce the gap */
        line-height: 0.2; /* Adjust line-height as needed */
    }
}
</style>

@section('content')

<div id="rev_slider_5_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container slide-overlay" data-alias="classic4export" data-source="gallery">
    <!-- START REVOLUTION SLIDER -->
    <div id="rev_slider_5_1" class="rev_slider fullwidthabanner" data-version="5.4.8">
        <ul>

            @foreach($sliders as $index => $slider)
            
            <!-- SLIDE  -->
            <li data-index="rs-{{ $index + 1 }}" data-transition="slotzoom-horizontal" data-slotamount="1" data-easein="default" data-easeout="default" data-masterspeed="1500" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">

                <!-- MAIN IMAGE -->

                <img src="{{ asset('storage/' . str_replace('\\', '/', $slider->banner_image)) }}"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                
                <!-- LAYERS -->

                <!-- LAYER NR. 1 -->
                <div style="color:#fff;" class="tp-caption tp-resizeme" id="slide-6-layer-1" data-x="['left','left','left','left']" data-hoffset="['50','40','30','20']" 
                    data-y="['middle','middle','middle','middle']" data-voffset="['-126','-126','-86','-60']" 

                    data-fontsize="['60','60','60','38']"
                    data-lineheight="['70','70','70','50']"
                    data-fontweight="['700','700','700','700']"
                    data-color="#031b4e"
                    data-width="none"
                    data-height="none"
                    data-whitespace="nowrap"
                    
                    data-transform_idle="o:1;" 
                    data-transform_in="x:-50px;opacity:0;s:1000;e:Power2.easeOut;"
                    data-transform_out="opacity:0;s:1000;e:Power4.easeIn;"
                    data-start="700"

                    data-textAlign="['inherit','inherit','inherit','inherit']"
                    data-paddingtop="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]"
                    data-type="text"
                    data-responsive_offset="on" style="z-index:13;font-family:Poppins,sans-serif;">
                    {{ $slider->title}}
                </div>


                <!-- LAYER NR. 2 -->
                <div class="tp-caption tp-resizeme" id="slide-6-layer-2" data-x="['left','left','left','left']" data-hoffset="['50','40','30','20']"  
                    data-y="['middle','middle','middle','middle']" data-voffset="['-52','-52','-5','-10']" 

                    data-fontsize="['60','60','60','38']"
                    data-lineheight="['70','70','70','50']"
                    data-fontweight="['700','700','700','700']"
                    data-color="#031b4e"
                    data-width="none"
                    data-height="none"
                    data-whitespace="nowrap"
                    
                    data-transform_idle="o:1;" 
                    data-transform_in="x:-50px;opacity:0;s:1000;e:Power2.easeOut;"
                    data-transform_out="opacity:0;s:1000;e:Power4.easeIn;"
                    data-start="900"

                    data-textAlign="['inherit','inherit','inherit','inherit']"
                    data-paddingtop="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]"
                    data-type="text"
                    data-responsive_offset="on" style="z-index:13;font-family:Poppins,sans-serif;">
                    {{ $slider->sub_title }}
                </div>

                <!-- LAYER NR. 3 -->
                <div class="tp-caption tp-resizeme" id="slide-6-layer-3" data-x="['left','left','left','left']" data-hoffset="['50','40','-550','-520']"  
                    data-y="['middle','middle','middle','middle']" data-voffset="['26','26','35','18']" 

                    data-fontsize="['19','19','19','16']"
                    data-lineheight="['29','29','29','22']"
                    data-fontweight="['400','400','400','400']"
                    data-color="#5f6777"
                    data-width="none"
                    data-height="none"
                    data-whitespace="nowrap"

                    data-transform_idle="o:1;" 
                    data-transform_in="x:-50px;opacity:0;s:1000;e:Power2.easeOut;"
                    data-transform_out="opacity:0;s:1000;e:Power4.easeIn;"
                    data-start="1200"

                    data-textAlign="['inherit','inherit','inherit','inherit']"
                    data-paddingtop="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]"
                    data-type="text"
                    data-responsive_offset="on">{!! $slider->desc !!}

                </div>

                <!-- LAYER NR. 4 -->
                <!-- <a class="tp-caption ttm-btn ttm-btn-shape-rounded ttm-btn-style-fill ttm-btn-color-skincolor" href="#" target="_self" id="slide-6-layer-4" data-x="['left','left','left','left']" data-hoffset="['50','40','30','20']" data-y="['bottom','bottom','bottom','middle']" data-voffset="['179','179','127','57']" 

                    data-fontsize="['15','15','15','15']"
                    data-lineheight="['20','20','15','15']"
                    data-fontweight="['700','700','700','700']"
                    data-width="none"
                    data-height="none"
                    data-whitespace="nowrap"

                    data-transform_idle="o:1;" 
                    data-transform_in="x:-50px;opacity:0;s:1000;e:Power2.easeOut;"
                    data-transform_out="opacity:0;s:1000;e:Power4.easeIn;"
                    data-mask_out="x:inherit;y:inherit;" 
                    data-start="1500"
                    data-splitin="none" 
                    data-splitout="none" 

                    data-textAlign="['inherit','inherit','inherit','inherit']"
                    data-paddingtop="[14,14,11,11]"
                    data-paddingright="[35,35,28,28]"
                    data-paddingbottom="[13,13,10,10]"
                    data-paddingleft="[35,35,28,28]"
                    data-type="button"
                    data-responsive_offset="on" >Explore Us
                </a> -->

                <!-- LAYER NR. 5 -->
                <!-- <a class="tp-caption tp-resizeme ttm-icon ttm-icon_element-border ttm-icon_element-color-darkgrey ttm-icon_element-style-rounded ttm_prettyphoto" href="{{ $slider->video_link }}" target="_self" id="slide-6-layer-5" data-x="['left','left','left','left']" data-hoffset="['278','278','-550','-550']" data-y="['bottom','bottom','bottom','middle']" data-voffset="['183','183','98','86']"

                    data-fontsize="['15','15','15','15']"
                    data-lineheight="['46','46','38','38']"
                    data-width="['46','46','38','38']"
                    data-height="['46','46','38','38']"
                    data-whitespace="nowrap"

                    data-transform_idle="o:1;" 
                    data-transform_in="x:-50px;opacity:0;s:1000;e:Power2.easeOut;"
                    data-transform_out="opacity:0;s:1500;e:Power4.easeIn;"
                    data-start="1500"

                    data-textAlign="['center','center','center','center']"
                    data-paddingtop="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]">

                    <i class="fa fa-play pl-1"></i>
                </a> -->


                <!-- LAYER NR. 6 -->
                <!-- <a class="tp-caption tp-resizeme ttm_prettyphoto" href="{{ $slider->video_link }}" target="_self" id="slide-6-layer-6" data-x="['left','left','left','left']" data-hoffset="['345','345','-550','-552']" data-y="['bottom','bottom','bottom','middle']" data-voffset="['199','199','112','99']"

                    data-fontsize="['15','15','14','14']"
                    data-lineheight="['14','14','14','14']"
                    data-fontweight="['700','700','700','700']"
                    data-width="none"
                    data-height="none"
                    data-whitespace="nowrap"

                    data-transform_idle="o:1;" 
                    data-transform_in="x:-50px;opacity:0;s:1000;e:Power2.easeOut;"
                    data-transform_out="opacity:0;s:1000;e:Power4.easeIn;"
                    data-start="1500"

                    data-paddingtop="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]">How We Work
                </a> -->
                
            </li>

          @endforeach  

        </ul>
        <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
    </div>
</div>
<!-- END REVOLUTION SLIDER -->

<!--features-section-->
<section class="ttm-row features-section clearfix">
    <div class="container-fluid">
        <!-- row -->
        <div class="row align-items-center">
            <div class="col-md-4">
                <!-- featured-imagebox -->
                <div class="featured-icon-box icon-align-before-content icon-ver_align-top style4">
                    <div class="featured-icon">
                        <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-lg" style="height=30px;width=30px;">
                            <!-- <i class="ti ti-timer"></i> -->
                            <img src="{{ asset('frontend/assets/images/icon_5.webp')}}">
                        </div>
                    </div>
                    <div class="featured-content">
                        <div class="featured-title">
                            <h5>Products</h5>
                        </div>
                        <div class="featured-desc">
                            <p>100+</p>
                        </div>
                       
                    </div>
                </div><!-- featured-imagebox end-->
            </div>
            <div class="col-md-4 border-left border-right">
                <!-- featured-imagebox -->
                <div class="featured-icon-box icon-align-before-content icon-ver_align-top style4">
                    <div class="featured-icon">
                        <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                        <img src="{{ asset('frontend/assets/images/icon_4.webp')}}">
                        </div>
                    </div>
                    <div class="featured-content">
                        <div class="featured-title">
                            <h5>Our Employees</h5>
                        </div>
                        <div class="featured-desc">
                            <p>1000+</p>
                        </div>
                     
                    </div>
                </div><!-- featured-imagebox end-->
            </div>
            <div class="col-md-4">
                <!-- featured-imagebox -->
                <div class="featured-icon-box icon-align-before-content icon-ver_align-top style4">
                    <div class="featured-icon">
                        <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                        <img src="{{ asset('frontend/assets/images/icon_2.webp')}}">
                        </div>
                    </div>
                    <div class="featured-content">
                        <div class="featured-title">
                            <h5>Years</h5>
                        </div>
                        <div class="featured-desc">
                            <p>20 Years</p>
                        </div>
                       
                    </div>
                </div><!-- featured-imagebox end-->
            </div>
        </div><!-- row end -->
    </div>
</section>
<!--features-section end-->


<!--about-section-->
<section class="ttm-row about-section bg-img11 ttm-bgcolor-grey clearfix">
    <div class="container">
        <div class="row">
            <div class="col-xl-5 col-lg-5 col-xs-12 ml-auto">
                <div class="ml_100 res-991-ml-0">
                    <!-- section title -->
                    <div class="section-title">
                        <div class="title-header">
                            <h5>About Us</h5>
                            <h2 class="title">Welcome to the  &amp; Company</h2>
                        </div>
                        <div class="title-desc" style="text-align:justify">JMI Syringes & Medical Devices Ltd. is the leading manufacturer of precision safety syringes and medical devices in Bangladesh serving the health care community both here and across our borders. We believe in the best possible pricing along with the highest level of export quality standards in order to help save and improve quality of life.<br />

            JMI Syringes & Medical Devices Ltd. is a joint venture enterprise with Republic of Korea. With the technical collaboration of Star Syringe Ltd., UK, JMI introduced the K1 Auto Disable (AD) syringe in Bangladesh and is the Pioneer for this technology. The company has been accredited with EN ISO 13485:2016, ISO 9001:2015 and GMP Certification.<br />

            Besides Auto Disable (AD) Syringe, JMI is also the pioneer manufacturer of Blood Transfusion Sets, Intra Venous Cannula (IV Cannula), Intrauterine Contraceptive Device (Copper T 380A) in Bangladesh. JMI purchases medical grade raw materials from local and internationally reputed sources. JMI has already started export business with Singapore, Thailand, Myanmar, Spain and Portugal. Significant progress is in place for expansion of export to different countries of Asia, Latin America and Europe.<br />

            JMI encourages any query regarding our products and related issues. We set utmost priority to satisfy customers with prompt and professional response. We take extreme care in delivering valued orders of our customers in soonest possible time</div>
                    </div><!-- section title end -->
                
                    <div class="row">
                        <div class="col-lg-12">
                            <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-rounded ttm-btn-style-border ttm-btn-color-skincolor mt-15" href="#">More about Us !</a>
                        </div>
                    </div>
                </div>
            </div><!-- row end -->
        </div>
    </div>
</section>
<!--about-section end-->


<!--services-section-->
<section class="element-row element-style">
            <div class="container">
                   <!-- row -->
                   <div class="row">

             
                    <div class="col-lg-6 col-md-8 col-sm-10 m-auto">
                        <!-- section-title -->
                        <div class="section-title with-sep title-style-center_text">
                            <div class="title-header">
                                <h5>OUR Featured Products</h5>
                                <h2 class="title">Explore Our company's product offerings</h2>
                            </div>
                            <div class="title-desc">Our advanced modern healthcare products assist medical experts to be more efficient and effective in treating their patients at Hospitals, Operation Theaters, Intensive Care Units, and Home as well.</div>
                        </div><!-- section-title end -->
                    </div>
                </div><!-- row end -->
             
        
                <div class="row slick_slider" data-slick='{"slidesToShow": 3, "slidesToScroll": 3, "arrows":false, "autoplay":true, "infinite":true}'>
                @foreach($features as $index => $feature)
                    <div class="ttm-box-col-wrapper col-lg-4 col-md-4 col-sm-6">
                   
                        <!-- featured-imagebox -->
                        <div class="featured-imagebox featured-imagebox-portfolio ttm-portfolio-box-view2">
                            <!-- ttm-box-view-overlay -->
                            <div class="ttm-box-view-overlay ttm-portfolio-box-view-overlay">
                                <!-- featured-thumbnail -->
                                <div class="featured-thumbnail">
                                    <a href="#"> <img class="img-fluid" style="height:300px;width:300px;" src="{{ asset('storage/' . str_replace('\\', '/', $feature->featured_image)) }}" alt="image"></a>
                                </div><!-- featured-thumbnail end-->
                                <div class="featured-iconbox ttm-media-link">
                                    <a class="ttm_prettyphoto ttm_image" title="Fitness Guidance to Patient" data-rel="prettyPhoto" href="{{ asset('storage/' . str_replace('\\', '/', $feature->featured_image)) }}">
                                        <i class="fa fa-expand"></i>
                                    </a>
                                    <a href="#" class="ttm_link"><i class="ti ti-link"></i></a>
                                </div>
                                <span class="category"></span>
                            </div><!-- ttm-box-view-overlay end-->
                            <div class="ttm-box-view-content-inner">
                                <div class="featured-content featured-content-portfolio">
                                    <div class="featured-title">
                                        <h5><a href="#">{{ $feature->product_categoty }}</a></h5>
                                    </div>
                                </div>
                            </div>
                        </div><!-- featured-imagebox -->
               
                    </div>
                @endforeach
                </div>
            </div>
        </section>
        


@endsection





