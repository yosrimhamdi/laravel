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
  <link
    rel="stylesheet"
    href="{{ mix('css/app.css') }}"
  >

  @livewireStyles

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
    src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"
  ></script>
  <script
    src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"
  ></script>
  <script
    src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"
  ></script>
</body>

</html>
