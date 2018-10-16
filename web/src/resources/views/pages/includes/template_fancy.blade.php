<!doctype html>
<html class="no-js" lang="es">

<head>
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

</head>

<body>
    <!--  Start Hero Section  -->
    <section class="hero">
    @include('pages.includes.header')

        <!--    Start Hero Caption    -->
        <section class="caption">
            <div class="row">
                <h1 class="mean_cap">Alquiler de Carros</hA>
                    <h2 class="sub_cap">en Bogotá </h2>
                    <a href="{{ route('midcars') }}" class="btn_details show-for-medium-up"><span>Vehículos de toda clase al mejor precio</span> <img src="{{ asset('img/btn_arrow.png') }}" alt="" src="" class="arrow"></a>
            </div>

            <div class="row">
                <div class="header-call right">
                    <div class="header-call-now">Llama y reserva ahora</div>
                    <div class="header-phone">{{ Config::get('staticdata.phone_1') }}</div>
                    <div class="header-phone">{{ Config::get('staticdata.phone_2') }}</div>
                    <div class="header-phone">{{ Config::get('staticdata.phone_3') }}</div>
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
    <script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/touchSwipe.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/easing.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/foundation.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/foundation/foundation.topbar.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/scrollTo.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/main2.js') }}"></script>

</body>

</html>