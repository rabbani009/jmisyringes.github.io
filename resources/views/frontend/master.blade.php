<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themetechmount.com/html/labostica/home-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 14 Aug 2023 04:04:51 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="HTML5 Template" />
<meta name="keywords" content=" Labostica - Laboratory & Science Research HTML Template, Labpeak- Laboratory & Science Research WordPress Theme + RTL, WordPress theme, unlimited colors available, ui/ux, ui/ux design, best html template, html template, html, woocommerce, shopify, prestashop, eCommerce, react js, react template, JavaScript, best CSS theme,css3, elementor theme, latest premium themes 2023, latest premium templates 2023, Preyan Technosys Pvt.Ltd, cymol themes, themetech mount, Web 3.0, multi-theme, website theme and template, woocommerce, bootstrap template, web templates, responsive theme, services, web design and development, LTR + RTL, biology laboratory, chemical, experiment, hospital, lab, laboratory, medical research, pathology lab, pharmaceutical research, physicians, research, science, science lab, scientific research">
<meta name="description" content="Health & Medical Laboratory Html Template" />
<meta name="author" content="https://www.themetechmount.com/" />
<meta name="viewport" content=" width=device-width, initial-scale=1, maximum-scale=1" />


<title>jmisyringe |@yield('title')</title>

<!-- favicon icon -->
<link rel="shortcut icon" href="images/favicon.png" />

<!-- bootstrap -->
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/bootstrap.min.css')}}"/>

<!-- animate -->
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/animate.css')}}"/>

<!-- fontawesome -->
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/font-awesome.css')}}"/>


<!-- themify -->
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/themify-icons.css')}}"/>

<!-- flaticon -->
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/flaticon.css')}}"/>

<!-- slick -->
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/slick.css')}}">

<!-- REVOLUTION LAYERS STYLES -->

<link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/revolution/css/layers.css')}}">

<link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/revolution/css/settings.css')}}">

<!-- prettyphoto -->
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/prettyPhoto.css')}}">

<!-- shortcodes -->
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/shortcodes.css')}}"/>

<!-- main -->
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/main.css')}}"/>

<!-- main -->
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/megamenu.css')}}"/>

<!-- responsive -->
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/responsive.css')}}"/>

<link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/bootstrap-datetimepicker.css')}}"/>
<link href="{{('frontend/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">

<link href="{{('frontend/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

<link href="{{('frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/custom.css')}}"/>

@yield('styles')

</head>

<body>

<!--page start-->
<div class="page">

    <!-- preloader start -->
    <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>
    <!-- preloader end -->

    <!--header start-->
    <header id="masthead" class="header ttm-header-style-01">
        @include('frontend.partials.header')
    </header><!--header end-->

    <!--site-main start-->
    <div class="site-main">

                
    @yield('content')


    </div><!--site-main end-->


    <!--footer start-->
    <footer id="footer">
        @include('frontend.partials.footer')
    </footer>
    <!--footer end-->

    <!--back-to-top start-->
    <a id="totop" href="#top">
    <i class="fa fa-angle-up"></i>
    </a>
    <!--back-to-top end-->

</div><!-- page end -->


<!-- Javascript -->

<script src="{{ asset('frontend/assets/js/jquery.min.js')}}"></script>
<script src="{{ asset('frontend/assets/js/tether.min.js')}}"></script>
<script src="{{ asset('frontend/assets/js/bootstrap.min.js')}}"></script> 
<script src="{{ asset('frontend/assets/js/jquery.easing.js')}}"></script>    
<script src="{{ asset('frontend/assets/js/jquery-waypoints.js')}}"></script>    
<script src="{{ asset('frontend/assets/js/jquery-validate.js')}}"></script> 
<script src="{{ asset('frontend/assets/js/jquery.prettyPhoto.js')}}"></script>
<script src="{{ asset('frontend/assets/js/slick.min.js')}}"></script>
<script src="{{ asset('frontend/assets/js/numinate.min.js')}}"></script>
<script src="{{ asset('frontend/assets/js/imagesloaded.min.js')}}"></script>
<script src="{{ asset('frontend/assets/js/jquery-isotope.js')}}"></script>
<script src="{{ asset('frontend/assets/js/moment.min.js')}}"></script>
<script src="{{ asset('frontend/assets/js/bootstrap-datetimepicker.min.js')}}"></script>
<script src="{{ asset('frontend/assets/js/main.js')}}"></script>

<!-- Revolution Slider -->
<script src="{{ asset('frontend/assets/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{ asset('frontend/assets/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
<script src="{{ asset('frontend/assets/revolution/js/slider.js')}}"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->    

<script src="   {{ asset('frontend/assets/revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
<script src="   {{ asset('frontend/assets/revolution/js/extensions/revolution.extension.carousel.min.js')}}"></script>
<script src="   {{ asset('frontend/assets/revolution/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
<script src="   {{ asset('frontend/assets/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script src="   {{ asset('frontend/assets/revolution/js/extensions/revolution.extension.migration.min.js')}}"></script>
<script src="   {{ asset('frontend/assets/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
<script src="   {{ asset('frontend/assets/revolution/js/extensions/revolution.extension.parallax.min.js')}}"></script>
<script src="   {{ asset('frontend/assets/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
<script src="   {{ asset('frontend/assets/revolution/js/extensions/revolution.extension.video.min.js')}}"></script>
<script src="   {{ asset('frontend/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
<script src="   {{ asset('frontend/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
<script src="   {{ asset('frontend/assets/js/custom.js')}}"></script>
<!-- Javascript end-->
@yield('scripts')

</body>


</html>