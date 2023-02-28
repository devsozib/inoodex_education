<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from themeturn.com/tf-db/edumel-demo/edumel/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 Feb 2023 08:30:15 GMT -->
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="description" content="Edumel- Education Html Template by dreambuzz">
  <meta name="keywords" content="education,edumel,instructor,lms,online,instructor,dreambuzz,bootstrap,kindergarten,tutor,e learning">
  <meta name="author" content="dreambuzz">

  <title>Inoodex Training Platform</title>

  <!-- Mobile Specific Meta-->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="{{ asset('/') }}assets/vendors/bootstrap/bootstrap.css">
  <!-- Iconfont Css -->
  <link rel="stylesheet" href="{{ asset('/') }}assets/vendors/awesome/css/fontawesome-all.min.css">
  <link rel="stylesheet" href="{{ asset('/') }}assets/vendors/flaticon/flaticon.css">
  <link rel="stylesheet" href="{{ asset('/') }}assets/fonts/gilroy/font-gilroy.html">
  <link rel="stylesheet" href="{{ asset('/') }}assets/vendors/magnific-popup/magnific-popup.css">
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/') }}assets/images/WhatsApp Image 2023-02-17 at 2.58.19 PM.jpeg">
  <!-- animate.css -->
  <link rel="stylesheet" href="{{ asset('/') }}assets/vendors/animate-css/animate.css">
  <link rel="stylesheet" href="{{ asset('/') }}assets/vendors/animated-headline/animated-headline.css">
  <link rel="stylesheet" href="{{ asset('/') }}assets/vendors/owl/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="{{ asset('/') }}assets/vendors/owl/assets/owl.theme.default.min.css">

  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="{{ asset('/') }}assets/css/woocomerce.css">
  <link rel="stylesheet" href="{{ asset('/') }}assets/css/style.css">
  <link rel="stylesheet" href="{{ asset('/') }}assets/css/responsive.css">
    <style>

    </style>
</head>

<body id="top-header">

        {{-- Header --}}
    @include('inc.header')
        <main class="creasoft-wrap layout2">
            @yield('content')
        {{-- Footer --}}
    @include('inc.footer')
        </main>

    <!--
    Essential Scripts
    =====================================-->

    <!-- Main jQuery -->
    <script src="{{ asset('/') }}assets/vendors/jquery/jquery.js"></script>
    <!-- Bootstrap 5:0 -->
    <script src="{{ asset('/') }}assets/vendors/bootstrap/popper.min.js"></script>
    <script src="{{ asset('/') }}assets/vendors/bootstrap/bootstrap.js"></script>
    <!-- Counterup -->
    <script src="{{ asset('/') }}assets/vendors/counterup/waypoint.js"></script>
    <script src="{{ asset('/') }}assets/vendors/counterup/jquery.counterup.min.js"></script>
    <!--  Owl Carousel -->
    <script src="{{ asset('/') }}assets/vendors/owl/owl.carousel.min.js"></script>
    <!-- Isotope -->
    <script src="{{ asset('/') }}assets/vendors/isotope/jquery.isotope.js"></script>
    <script src="{{ asset('/') }}assets/vendors/isotope/imagelaoded.min.js"></script>
    <!-- Animated Headline -->
    <script src="{{ asset('/') }}assets/vendors/animated-headline/animated-headline.js"></script>
    <!-- Magnific Popup -->
    <script src="{{ asset('/') }}assets/vendors/magnific-popup/jquery.magnific-popup.min.js"></script>

    <script src="{{ asset('/') }}assets/js/script.js"></script>


  </body>

<!-- Mirrored from themeturn.com/tf-db/edumel-demo/edumel/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 Feb 2023 08:30:31 GMT -->
</html>
