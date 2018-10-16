<!doctype html>
<html class="no-js" lang="es">

<head>
  {{-- Meta data --}}
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Rayther Alquiler de carros en Bogotá - Colombia</title>

  <!--    Stylesheet Files    -->
  <link rel="stylesheet" href="{{ asset('css/normalize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/foundation.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/main.css') }}" />

  <!--    Javascript files are placed before </body>    -->
  <!-- Additional header -->
  @include('pages.includes.aditionalheaders')
  <!--   {% include 'aditionalheaders.html' %} -->
</head>

<body>
  <section class="hero hero2">
  @include('pages.includes.header')
  </section>
  {{-- Main content --}} @yield('content') {{-- ./Main content --}}

  <!--  Start Footer Section  -->
  @include('pages.includes.footer')
  <!--  End Footer Section  -->

  <!--    Start Back To Top    -->
  <a href="#" class="btn_fancy" id="back_top">
    <div class="solid_layer"></div>
    <div class="border_layer"></div>
    <div class="text_layer"><img src="{{ asset('img/top_arrow.png') }}" alt="Back to top" title="" class="top_arrow"></div>
  </a>
  <!--    End Back To Top    -->




  <!--    Javascript Files    -->
  <script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/touchSwipe.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/easing.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/foundation.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/foundation/foundation.topbar.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/scrollTo.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/main2.js') }}"></script>

</body>

</html>