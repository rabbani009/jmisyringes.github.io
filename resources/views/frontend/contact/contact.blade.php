@extends('frontend.master')

@section('title') Certification| Message @endsection

@section('content')


    <!--site-main start-->
    <div class="site-main">


        <!--google_map-->
        <div class="map-box">
    <div class="mapouter" style="width: 100%; max-width: 100%; height: 400px;">
        <div class="gmap_canvas">
        <iframe
            width="600"
            height="450"
            frameborder="0"
            style="border:0"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7317.988204767771!2d90.3910714!3d23.7431911!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b895b4e96349%3A0x376809a68cc64609!2sUnique%20Heights%2C%20Kazi%20Nazrul%20Islam%20Ave%2C%20Dhaka%201205%2C%20Bangladesh!5e0!3m2!1sen!2sus!4v1631205689382!5m2!1sen!2sus"
            allowfullscreen
        ></iframe>



        </div>
        <style>
            .mapouter {
                position: relative;
                text-align: right;
                width: 100%;
                max-width: 100%;
                height: 400px;
            }
            .gmap_canvas {
                overflow: hidden;
                background: none!important;
                width: 100%;
                max-width: 100%;
                height: 400px;
            }
            .gmap_iframe {
                width: 100%;
                max-width: 100%;
                height: 400px;
            }
        </style>
    </div>
</div>


        <!-- cta-info-section -->
        <section class="ttm-row cta-info-section ttm-bgcolor-grey bg-layer bg-layer-equal-height clearfix">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-lg-4 col-md-8 col-sm-8">
                        <div class="ttm-col-bgcolor-yes ttm-bg ttm-bgcolor-skincolor z-index-2 spacing-5">
                            <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                            <div class="layer-content">
                                <div class="pb-15">
                                    <h4>Connect With Us</h4>
                                    <p>Locations and businesses</p>
                                </div>
                                <!--featured-icon-box-->
                                <div class="featured-icon-box icon-align-before-content icon-ver_align-top">
                                    <div class="featured-icon">
                                        <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-white ttm-icon_element-size-sm">
                                            <i class="flaticon-placeholder"></i>
                                        </div>
                                    </div>
                                    <div class="featured-content">
                                        <div class="featured-desc">
                                            <p>Registered Office:<br /> GA-72/C, Progoti Shoroni <br />Middle Badda, Dhaka-1212.<br /> Tel: +880-2-48811817</p>
                                        </div>
                                    </div>
                                    
                                </div><!-- featured-icon-box end-->
                                <div class="sep_holder_box width-100 mt-20 mb-20">
                                    <span class="sep_holder"><span class="sep_line"></span></span>
                                </div>
                                <!--featured-icon-box-->
                                <div class="featured-icon-box icon-align-before-content icon-ver_align-top">
                                    <div class="featured-icon">
                                        <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-white ttm-icon_element-size-sm">
                                        <i class="flaticon-placeholder"></i>
                                        </div>
                                    </div>
                                    <div class="featured-content">
                                        <div class="featured-desc">
                                            <p>Corporate Extension Office:<br /> 29/C & 29/D, Tejgaon Industrial Area, Tejgaon, Dhaka-1208<br /> Tel: +880-2-8170681-5<br /> Fax: +880-2-8170686<br /> E-mail: info@jmigroup-bd.com </p>
                                        </div>
                                    </div>
                                </div><!-- featured-icon-box end-->
                                <div class="sep_holder_box width-100 mt-20 mb-20">
                                    <span class="sep_holder"><span class="sep_line"></span></span>
                                </div>
                                <!--featured-icon-box-->
                                <div class="featured-icon-box icon-align-before-content icon-ver_align-top">
                                    <div class="featured-icon">
                                        <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-white ttm-icon_element-size-sm">
                                        <i class="flaticon-placeholder"></i>
                                        </div>
                                    </div>
                                    <div class="featured-content">
                                        <div class="featured-desc">
                                            <p>Factory Address:<br /> Noapara, Chauddagram, Cumilla, Bangladesh.</p>
                                        </div>
                                    </div>
                                </div><!-- featured-icon-box end-->
                                <div class="sep_holder_box width-100 mt-20 mb-20">
                                    <span class="sep_holder"><span class="sep_line"></span></span>
                                </div>
                             
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="ttm-col-bgcolor-yes ttm-bg ttm-bgcolor-grey z-index-1">
                            <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                            <div class="layer-content">
                                <!-- testimonial-box -->
                                <div class="pt-45 pl-50 pb-50 pr-50 res-991-pl-15 res-991-pr-15 res-991-pt-30">
                                <!-- section-title -->
                                <div class="section-title">
                                    <div class="title-header">
                                        <h5>CONTACT US</h5>
                                        <h2 class="title">Feel Free To Ask Send Your Message.</h2>
                                    </div>
                                </div><!-- section-title end -->
                                <form id="ttm-contactform-2" class="ttm-contactform-2 wrap-form clearfix" method="post" action="#">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <label>
                                                <span class="text-input"><input name="name" type="text" value="" placeholder="Your Name" required="required"></span>
                                            </label>
                                        </div>
                                        <div class="col-lg-6">
                                            <label>
                                                <span class="text-input"><input name="address" type="text" value="" placeholder="Your Email" required="required"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <label>
                                                <span class="text-input"><input name="phone" type="text" value="" placeholder="Phone Number" required="required"></span>
                                            </label>
                                        </div>
                                        <div class="col-lg-6">
                                            <label>
                                                <span class="text-input"><input name="phone" type="text" value="" placeholder="Subject" required="required"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <label>
                                        <span class="text-input"><textarea name="message" rows="3" placeholder="Message" required="required"></textarea></span>
                                    </label>
                                    <button class="submit ttm-btn ttm-btn-size-md ttm-btn-shape-rounded ttm-btn-style-fill ttm-btn-color-skincolor" type="submit">Send Message</button>
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- cta-info-section end -->

    </div><!--site-main end-->


@endsection

@section('scripts')




@endsection