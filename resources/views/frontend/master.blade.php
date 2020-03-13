<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('frontend')}}/img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{asset('frontend')}}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/css/magnific-popup.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/css/themify-icons.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/css/nice-select.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/css/flaticon.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/css/gijgo.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/css/animate.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/css/slick.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/css/slicknav.css">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css">

    <link rel="stylesheet" href="{{asset('frontend')}}/css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
<!-- header-start -->
@include('frontend.includes.header')
<!-- header-end -->
@yield('body')
<!-- travel_variation -->
@include('frontend.includes.travel_variation')
<!-- /travel_variation -->

<!-- newsletter_area_start  -->
@include('frontend.includes.newsletter')
<!-- newsletter_area_end  -->

@include('frontend.includes.footer')

<!-- JS here -->
<script src="{{asset('frontend')}}/js/vendor/modernizr-3.5.0.min.js"></script>
<script src="{{asset('frontend')}}/js/vendor/jquery-1.12.4.min.js"></script>
<script src="{{asset('frontend')}}/js/popper.min.js"></script>
<script src="{{asset('frontend')}}/js/bootstrap.min.js"></script>
<script src="{{asset('frontend')}}/js/owl.carousel.min.js"></script>
<script src="{{asset('frontend')}}/js/isotope.pkgd.min.js"></script>
<script src="{{asset('frontend')}}/js/ajax-form.js"></script>
<script src="{{asset('frontend')}}/js/waypoints.min.js"></script>
<script src="{{asset('frontend')}}/js/jquery.counterup.min.js"></script>
<script src="{{asset('frontend')}}/js/imagesloaded.pkgd.min.js"></script>
<script src="{{asset('frontend')}}/js/scrollIt.js"></script>
<script src="{{asset('frontend')}}/js/jquery.scrollUp.min.js"></script>
<script src="{{asset('frontend')}}/js/wow.min.js"></script>
<script src="{{asset('frontend')}}/js/nice-select.min.js"></script>
<script src="{{asset('frontend')}}/js/jquery.slicknav.min.js"></script>
<script src="{{asset('frontend')}}/js/jquery.magnific-popup.min.js"></script>
<script src="{{asset('frontend')}}/js/plugins.js"></script>
<script src="{{asset('frontend')}}/js/gijgo.min.js"></script>
<script src="{{asset('frontend')}}/js/slick.min.js"></script>

<!--contact js-->
<script src="{{asset('frontend')}}/js/contact.js"></script>
<script src="{{asset('frontend')}}/js/jquery.ajaxchimp.min.js"></script>
<script src="{{asset('frontend')}}/js/jquery.form.js"></script>
<script src="{{asset('frontend')}}/js/jquery.validate.min.js"></script>
<script src="{{asset('frontend')}}/js/mail-script.js"></script>

<script src="{{asset('frontend')}}/js/main.js"></script>
<script>
    $('#datepicker').datepicker({
        iconsLibrary: 'fontawesome',
        icons: {
            rightIcon: '<span class="fa fa-caret-down"></span>'
        }
    });
</script>
</body>

</html>
