<!doctype html>
<html class="no-js" lang="es">

<head>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-127966760-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-127966760-1');
</script>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Rayther Alquiler de carros en Bogotá - Colombia</title>

    <!--    Stylesheet Files    -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz"
        crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/foundation.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" /> @yield('additionalcss')

    <!--    Javascript files are placed before </body>    -->
    <!-- Additional header -->
    @include('pages.includes.aditionalheaders')

</head>

<body>
    {{-- Button for whatsapp link in mobiles --}}
    <section class="hero-mobile-whatsapp-bnt">
        <div class="whatsapp-baner">
            <a href="whatsapp://send?text=Hola!&phone=+573118117337">
                        <i class="fab fa-whatsapp"></i>
                    </a>
        </div>
    </section>
    {{-- ./Button for whatsapp link in mobiles --}}

    <!--  Start Hero Section  -->
    <section class="hero">
    @include('pages.includes.header')

        <!--    Start Hero Caption    -->
        <section class="caption">
            <div class="row">
                <h1 class="mean_cap">Alquiler de Carros</h1>
                    <h2 class="sub_cap">en Bogotá </h2>
                    <a href="{{ route('midcars') }}" class="btn_details show-for-medium-up"><span>Vehículos de toda clase al mejor precio</span> <img src="{{ asset('img/btn_arrow.png') }}" alt="" src="" class="arrow"></a>
            </div>

            <div class="row">
                <div class="header-call right">
                    <div class="header-call-now">Llama y reserva ahora</div>
                    <div class="header-phone">{{ Config::get('staticdata.phone_1') }}</div>
                    <div class="header-phone">{{ Config::get('staticdata.phone_2') }}</div>
                    <div class="header-phone">{{ Config::get('staticdata.phone_3') }}</div>
                    <div class="header-whatsapp">
                        <a href="whatsapp://send?text=Hola!&phone=+573118117337">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!--    End Hero Caption    -->

    </section>
    <!--  End Hero Section  -->

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
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAvb6gNWu8TBnNHHeKwQ7Zfe7oQqEe-MDo&v=3.exp"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/touchSwipe.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/easing.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/foundation.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/foundation/foundation.topbar.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/carouFredSel.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/scrollTo.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/map.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
</body>

</html>
