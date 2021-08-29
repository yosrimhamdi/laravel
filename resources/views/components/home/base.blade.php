<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta
    content="width=device-width, initial-scale=1.0"
    name="viewport"
  >

  <title>Company Bootstrap Template - Index</title>
  <meta
    content=""
    name="descriptison"
  >
  <meta
    content=""
    name="keywords"
  >

  {{-- href="{{ asset('front/') }}" --}}

  <!-- Favicons -->
  <link
    href="{{ asset('front/img/favicon.png') }}"
    rel="icon"
  >
  <link
    href="{{ asset('front/img/apple-touch-icon.png') }}"
    rel="apple-touch-icon"
  >

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet"
  >

  <!-- Vendor CSS Files -->
  <link
    href="{{ asset('front/vendor/bootstrap/css/bootstrap.min.css') }}"
    rel="stylesheet"
  >
  <link
    href="{{ asset('front/vendor/icofont/icofont.min.css') }}"
    rel="stylesheet"
  >
  <link
    href="{{ asset('front/vendor/boxicons/css/boxicons.min.css') }}"
    rel="stylesheet"
  >
  <link
    href="{{ asset('front/vendor/animate.css/animate.min.css') }}"
    rel="stylesheet"
  >
  <link
    href="{{ asset('front/vendor/venobox/venobox.css') }}"
    rel="stylesheet"
  >
  <link
    href="{{ asset('front/vendor/owl.carousel/assets/owl.carousel.min.css') }}"
    rel="stylesheet"
  >
  <link
    href="{{ asset('front/vendor/aos/aos.css') }}"
    rel="stylesheet"
  >
  <link
    href="{{ asset('front/vendor/remixicon/remixicon.css') }}"
    rel="stylesheet"
  >

  <!-- Template Main CSS File -->
  <link
    href="{{ asset('front/css/style.css') }}"
    rel="stylesheet"
  >
</head>

<body>

  <x-home.carousel :slides="$slides" />
  <x-home.header />
  <main id="main">{{ $slot }}</main>
  <x-home.footer />
  <a
    href="#"
    class="back-to-top"
  ><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('front/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('front/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('front/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
  <script src="{{ asset('front/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('front/vendor/jquery-sticky/jquery.sticky.js') }}"></script>
  <script src="{{ asset('front/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('front/vendor/venobox/venobox.min.js') }}"></script>
  <script src="{{ asset('front/vendor/waypoints/jquery.waypoints.min.js') }}"></script>
  <script src="{{ asset('front/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('front/vendor/aos/aos.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('front/js/main.js') }}"></script>

</body>

</html>
