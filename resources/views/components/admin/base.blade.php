<!DOCTYPE html>
<html
  lang="en"
  dir="ltr"
>

<head>
  <meta charset="utf-8" />
  <meta
    http-equiv="X-UA-Compatible"
    content="IE=edge"
  />
  <meta
    name="viewport"
    content="width=device-width, initial-scale=1"
  />
  <title>Sleek - Admin Dashboard Template</title>
  <!-- GOOGLE FONTS -->
  <link
    href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500"
    rel="stylesheet"
  />
  <link
    href="https://cdn.materialdesignicons.com/3.0.39/css/materialdesignicons.min.css"
    rel="stylesheet"
  />
  <!-- PLUGINS CSS STYLE -->
  <link
    href="{{ asset('admin/plugins/toaster/toastr.min.css') }}"
    rel="stylesheet"
  />
  <link
    href="{{ asset('admin/plugins/flag-icons/css/flag-icon.min.css') }}"
    rel="stylesheet"
  />
  <link
    href="{{ asset('admin/plugins/jvectormap/jquery-jvectormap-2.0.3.css') }}"
    rel="stylesheet"
  />
  <link
    href="{{ asset('admin/plugins/ladda/ladda.min.css') }}"
    rel="stylesheet"
  />
  <link
    href="{{ asset('admin/plugins/select2/css/select2.min.css') }}"
    rel="stylesheet"
  />
  <link
    href="{{ asset('admin/plugins/daterangepicker/daterangepicker.css') }}"
    rel="stylesheet"
  />
  <!-- SLEEK CSS -->
  <link
    id="sleek-css"
    rel="stylesheet"
    href="{{ asset('admin/css/sleek.css') }}"
  />
  <!-- FAVICON -->
  <link
    href="{{ asset('admin/img/favicon.png') }}"
    rel="shortcut icon"
  />
  <style>
    svg {
      width: 20px;
    }

    nav[role="navigation"] {
      display: flex;
      align-items: center;
      justify-content: space-between;
    }

    nav[role="navigation"]>div:nth-child(2) {
      position: relative;
    }

    nav[role="navigation"]>div:nth-child(2)>div:first-child {
      position: absolute;
      bottom: 0;
      left: 0;
      transform: translate(10px, calc(-100% - 20px));
    }

  </style>
  <!-- Styles -->
  <link
    rel="stylesheet"
    href="{{ mix('css/app.css') }}"
  >
  <script src="{{ asset('admin/plugins/nprogress/nprogress.js') }}"></script>

  @livewireStyles

  <!-- Scripts -->
  <script
    src="{{ mix('js/app.js') }}"
    defer
  ></script>
</head>

<body
  class="sidebar-fixed sidebar-dark header-light header-fixed"
  id="body"
>
  <div class="mobile-sticky-body-overlay"></div>
  <div class="wrapper">
    <x-admin.side-bar />
    <div class="page-wrapper">
      <x-admin.header />
      <div class="content-wrapper">
        <div class="content">
          <x-admin.alert />
          {{ $slot }}
        </div>
      </div>
      <footer class="footer mt-auto">
        <div class="copyright bg-white">
          <p>
            &copy; <span id="copy-year">2019</span> Copyright Sleek Dashboard Bootstrap Template by
            <a
              class="text-primary"
              href="http://www.iamabdus.com/"
              target="_blank"
            >Abdus</a>.
          </p>
        </div>
        <script>
          var d = new Date();
          var year = d.getFullYear();
          document.getElementById("copy-year").innerHTML = year;
        </script>
      </footer>
    </div>
  </div>

  @stack('modals')

  @livewireScripts

  <script
    src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"
  ></script>
  <script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDCn8TFXGg17HAUcNpkwtxxyT9Io9B_NcM"
    defer
  ></script>
  <script src="{{ asset('admin/plugins/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('admin/plugins/toaster/toastr.min.js') }}"></script>
  <script src="{{ asset('admin/plugins/slimscrollbar/jquery.slimscroll.min.js') }}"></script>
  <script src="{{ asset('admin/plugins/charts/Chart.min.js') }}"></script>
  <script src="{{ asset('admin/plugins/ladda/spin.min.js') }}"></script>
  <script src="{{ asset('admin/plugins/ladda/ladda.min.js') }}"></script>
  <script src="{{ asset('admin/plugins/jquery-mask-input/jquery.mask.min.js') }}"></script>
  <script src="{{ asset('admin/plugins/select2/js/select2.min.js') }}"></script>
  <script src="{{ asset('admin/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js') }}"></script>
  <script src="{{ asset('admin/plugins/jvectormap/jquery-jvectormap-world-mill.js') }}"></script>
  <script src="{{ asset('admin/plugins/daterangepicker/moment.min.js') }}"></script>
  <script src="{{ asset('admin/plugins/daterangepicker/daterangepicker.js') }}"></script>
  <script src="{{ asset('admin/plugins/jekyll-search.min.js') }}"></script>
  <script src="{{ asset('admin/js/sleek.js') }}"></script>
  <script src="{{ asset('admin/js/chart.js') }}"></script>
  <script src="{{ asset('admin/js/date-range.js') }}"></script>
  <script src="{{ asset('admin/js/map.js') }}"></script>
  <script src="{{ asset('admin/js/custom.js') }}"></script>
</body>

</html>
