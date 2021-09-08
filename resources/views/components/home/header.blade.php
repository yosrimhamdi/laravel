<header
  id="header"
  class="fixed-top"
>
  <div class="container d-flex align-items-center">

    <h1 class="logo mr-auto"><a href="index.html"><span>Com</span>pany</a></h1>
    <!-- Uncomment below if you prefer to use an image logo -->
    <!-- <a href="index.html" class="logo mr-auto"><img src="{{ asset('front/img/logo.png') }}" alt="" class="img-fluid"></a>-->

    <nav class="nav-menu d-none d-lg-block">
      <ul>
        <li class="{{ $active('portfolio') }}"><a href="{{ url('/portfolio') }}">Portfolio</a></li>
        <li class="{{ $active('contacts') }}"><a href="{{ url('/contacts') }}">Contact</a></li>
        @if (Auth::user())
          <li><a href="{{ url('/dashboard') }}">Dashboard</a></li>
        @else
          <li><a href="{{ url('/login') }}">Log In</a></li>
          <li><a href="{{ url('/register') }}">Register</a></li>
        @endif
      </ul>
    </nav><!-- .nav-menu -->

    <div class="header-social-links">
      <a
        href="#"
        class="twitter"
      ><i class="icofont-twitter"></i></a>
      <a
        href="#"
        class="facebook"
      ><i class="icofont-facebook"></i></a>
      <a
        href="#"
        class="instagram"
      ><i class="icofont-instagram"></i></a>
      <a
        href="#"
        class="linkedin"
      ><i class="icofont-linkedin"></i></i></a>
    </div>

  </div>
</header>
