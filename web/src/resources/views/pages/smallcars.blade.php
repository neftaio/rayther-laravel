@extends('pages.includes.template') 
@section('content')
<!--  Start Services Section  -->
<section class="services" id="services">

    <!--    Start Services Titles    -->
    <div class="row">
        <h1 class="mean_title">ALQUILER DE AUTOS ECONÓMICOS PEQUEÑOS</h1>
    </div>
    <!--    End Services Titles    -->

    <!--    Start Services List    -->
    <div class="row services_list">
        <div class="small-12 medium-4 large-4 columns">
            <img src="{{ asset('img/car-spark-lt.png') }}" alt="" title="" class="serv_icon" />
            <h2 class="title text-blue">CHEVROLET SPARK LT</h2>
            <p class="item-description-car">Motor: 995cc, 62.4HP a 5.600 RPM</p>
            <p class="item-description-car">Caja mecánica.</p>
            <p class="item-description-car">Rendimiento: 60 Km. por galón.</p>
            <p class="item-description-car">Aire acondicionado</p>
        </div>

        <div class="small-12 medium-4 large-4 columns">
            <img src="{{ asset('img/car-sma.png') }}" alt="" title="" class="serv_icon" />
            <h2 class="title text-blue">CHEVROLET SPARK GT</h2>
            <p class="item-description-car">Motor: 1.200cc, 80.5HP a 6.400 RPM.</p>
            <p class="item-description-car">Caja mecánica.</p>
            <p class="item-description-car">Rendimiento: 55 Km. por galón.</p>
            <p class="item-description-car">Aire acondicionado.</p>
            <p class="item-description-car">Full equipo.</p>
        </div>

    </div>
    <!--    End Services List    -->

    <!--    Contact Form    -->
    <div class="row contact-subsection">
        <h1 class="mean_title">Contáctanos</h1>
    @include('pages.includes.contactform')
    </div>
    <!--    ./Contact Form    -->

    <!-- Contact Phones -->
    <div class="phones_holder">
        <h2 class="sub_title">Lunes a Domingo 7 am - 7 pm</h2>
        <h2 class="sub_title"><b>{{ Config::get('staticdata.phone_1') }}</b>, <b>{{ Config::get('staticdata.phone_2') }}</b>, <b>{{ Config::get('staticdata.phone_3') }}</b></h2>
    </div>
    <!-- Contact Phones -->

</section>
<!--  End Services Section  -->
@endsection