@extends('frontend.master')

@section('title') Home @endsection

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
                <div class="tp-caption tp-resizeme" id="slide-6-layer-1" data-x="['left','left','left','left']" data-hoffset="['50','40','30','20']" 
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
                <a class="tp-caption ttm-btn ttm-btn-shape-rounded ttm-btn-style-fill ttm-btn-color-skincolor" href="#" target="_self" id="slide-6-layer-4" data-x="['left','left','left','left']" data-hoffset="['50','40','30','20']" data-y="['bottom','bottom','bottom','middle']" data-voffset="['179','179','127','57']" 

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
                    data-responsive_offset="on" >View All Product
                </a>

                <!-- LAYER NR. 5 -->
                <a class="tp-caption tp-resizeme ttm-icon ttm-icon_element-border ttm-icon_element-color-darkgrey ttm-icon_element-style-rounded ttm_prettyphoto" href="{{ $slider->video_link }}" target="_self" id="slide-6-layer-5" data-x="['left','left','left','left']" data-hoffset="['278','278','-550','-550']" data-y="['bottom','bottom','bottom','middle']" data-voffset="['183','183','98','86']"

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
                </a>


                <!-- LAYER NR. 6 -->
                <a class="tp-caption tp-resizeme ttm_prettyphoto" href="{{ $slider->video_link }}" target="_self" id="slide-6-layer-6" data-x="['left','left','left','left']" data-hoffset="['345','345','-550','-552']" data-y="['bottom','bottom','bottom','middle']" data-voffset="['199','199','112','99']"

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
                </a>
                
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
        
<!--services-section-->

<!--cta-section-->
<section class="ttm-row cta-section ttm-bgcolor-skincolor bg-img8 ttm-bg ttm-bgimage-yes clearfix">
    <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
    <div class="container"><!--container-->
        <div class="row"><!--row-->
            <div class="col-lg-8 m-auto">
                <div class="mt-15 row-title res-991-mt-0 text-center ttm-textcolor-white">
                    <div class="ttm-play-icon-btn mb-35">
                        <div class="ttm-play-icon-animation">
                          
                        </div>
                    </div>
                    <!-- section title -->
                    <div class="section-title clearfix">
                        <div class="title-header">
                            <h5 class="title">Want to learn more about our wide array of Products?
                             Simply download our Product Catalogue PDFs from below.</h5>
                        </div>
                    </div><!-- section title end -->
                    <div class="pt-20 pb-80 res-991-pb-0 res-991-pt-10">
                        <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-rounded ttm-btn-style-border ttm-btn-color-white" href="#">Download Here</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--cta-section-->


<!--procedure-section-->
<section class="ttm-row procedure-section ttm-bgcolor-grey bg-img9 ttm-bg ttm-bgimage-yes z-index_1 mt_100 res-991-mt-0 clearfix">
    <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-lg-6 col-md-8 col-sm-9 m-auto">
                <!-- section-title -->
                <div class="section-title with-sep title-style-center_text">
                    <div class="title-header">
                        <h5>Way We Work</h5>
                        <h2 class="title">Our Working Process</h2>
                    </div>
                    <div class="title-desc">We are the team of experts and specialist for particular braches falls into research and diagnosis, ready to serve you at their best.</div>
                </div><!-- section-title end -->
            </div>
        </div><!-- row end -->
        <div class="row"><!-- row -->
            <div class="col-md-4">
                <!-- featured-imagebox -->
                <div class="featured-icon-box icon-align-top-content text-center style4">
                    <div class="featured-icon">
                        <div class="ttm-icon ttm-icon_element-fill ttm-icon_element-color-white ttm-icon_element-size-md ttm-icon_element-style-rounded">
                            <i class="flaticon-lab-2"></i>
                            <span class="fea-number">01</span>
                        </div>
                    </div>
                    <div class="featured-content">
                        <div class="featured-title">
                            <h5>Data Collection</h5>
                        </div>
                        <div class="featured-desc">
                            <p>For the accurate diagnoses, perfect information is must require</p>
                        </div>
                    </div>
                    <div class="arrow">
                        <img src=" {{ asset('frontend/assets/images/arrow-1.png')}}" alt=""/>
                    </div>
                </div><!-- featured-imagebox end-->
            </div>
            <div class="col-md-4">
                <!-- featured-imagebox -->
                <div class="featured-icon-box icon-align-top-content text-center style4">
                    <div class="featured-icon">
                        <div class="ttm-icon ttm-icon_element-fill ttm-icon_element-color-white ttm-icon_element-size-md ttm-icon_element-style-rounded">
                            <i class="flaticon-healthcare-and-medical-1"></i>
                            <span class="fea-number">02</span>
                        </div>
                    </div>
                    <div class="featured-content">
                        <div class="featured-title">
                            <h5>Diagnose Process</h5>
                        </div>
                        <div class="featured-desc">
                            <p>The collection goes to the particular department for the tests</p>
                        </div>
                    </div>
                    <div class="arrow flip-arrow">
                        <img src=" {{ asset('frontend/assets/images/arrow-2.png')}}" alt=""/>
                    </div>
                </div><!-- featured-imagebox end-->
            </div>
            <div class="col-md-4">
                <!-- featured-imagebox -->
                <div class="featured-icon-box icon-align-top-content text-center style4">
                    <div class="featured-icon">
                        <div class="ttm-icon ttm-icon_element-fill ttm-icon_element-color-white ttm-icon_element-size-md ttm-icon_element-style-rounded">
                            <i class="flaticon-laboratory-3"></i>
                            <span class="fea-number">03</span>
                        </div>
                    </div>
                    <div class="featured-content">
                        <div class="featured-title">
                            <h5>Access To Reports</h5>
                        </div>
                        <div class="featured-desc">
                            <p>As a result, that arrive one can access their report online or direct  </p>
                        </div>
                    </div>
                </div><!-- featured-imagebox end-->
            </div>
        </div>
    </div>
</section>
<!--procedure-section end-->


<!--broken-section-->
<section class="ttm-row broken-section-3 bg-layer mt_80 res-991-mt-0 clearfix">
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="col-bg-img-seven ttm-col-bgimage-yes ttm-bg ttm-col-bgcolor-yes ttm-left-span ttm-bgcolor-skincolor z-index-2 spacing-4">
                    <div class="ttm-col-wrapper-bg-layer ttm-bg-layer">
                        <div class="ttm-col-wrapper-bg-layer-inner"></div>
                    </div>
                    <div class="layer-content">
                        <div class="section-title">
                            <div class="title-header">
                                <h2 class="title">Best Laboratory with the International Standards.</h2>
                            </div>
                        </div>
                        <p>We constantly keep challenging ourselves to deliver the most sincere service to our global clients. Connect with us today to learn more about our products.</p>
                        <div class="sep_holder_box width-100 mt-35">
                            <span class="sep_holder"><span class="sep_line"></span></span>
                        </div>
                        <!-- slick_slider -->
                        <div class="ml_35 slick_slider" data-slick='{"slidesToShow": 3, "slidesToScroll": 1, "arrows":false, "autoplay":true, "infinite":true, "responsive": [{"breakpoint":500,"settings":{"slidesToShow": 2}}, {"breakpoint":350,"settings":{"slidesToShow": 1}}]}'>
                            <div class="client-box">
                                <div class="ttm-client-logo-tooltip">
                                    <div class="ttm-client-logo-tooltip-inner">
                                        <div class="client-thumbnail">
                                            <img src=" {{ asset('frontend/assets/images/client/dgda-bangladesh-logo-33E9602306-seeklogo.com.png')}}" alt="image" style="height:150px;width:150px;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="client-box">
                                <div class="ttm-client-logo-tooltip">
                                    <div class="ttm-client-logo-tooltip-inner">
                                        <div class="client-thumbnail">
                                            <img src=" {{ asset('frontend/assets/images/client/MTIC_LOGO_50th.svg')}}" alt="image" style="height:150px;width:200px;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="client-box">
                                <div class="ttm-client-logo-tooltip">
                                    <div class="ttm-client-logo-tooltip-inner">
                                        <div class="client-thumbnail">
                                            <img src=" {{ asset('frontend/assets/images/client/client-09.png')}}" alt="image">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="client-box">
                                <div class="ttm-client-logo-tooltip">
                                    <div class="ttm-client-logo-tooltip-inner">
                                        <div class="client-thumbnail">
                                            <img src=" {{ asset('frontend/assets/images/client/client-10.png')}}" alt="image">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- ttm-client end -->
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="col-bg-img-eight ttm-col-bgimage-yes ttm-bg ttm-right-span mt-80 res-991-mt-0">
                    <div class="ttm-col-wrapper-bg-layer ttm-bg-layer">
                        <div class="ttm-col-wrapper-bg-layer-inner"></div>
                    </div>
                    <div class="layer-content">
                    </div>
                    <img src=" {{ asset('frontend/assets/images/bg-image/col-bgimage-8.jpg')}}" class="ttm-equal-height-image" alt="bg-image">
                </div>
            </div>
        </div><!-- row end -->
    </div>
</section>
<!--broken-section end-->

@endsection





