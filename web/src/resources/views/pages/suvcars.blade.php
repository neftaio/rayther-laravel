@extends('pages.includes.template') 
@section('content')
  <!--  Start Services Section  -->
  <section class="services" id="services">

        <!--    Start Services Titles    -->
        <div class="row">
          <h1 class="mean_title">ALQUILER DE CAMIONETAS</h1>
        </div>
        <!--    End Services Titles    -->
    
        <!--    Start Services List    -->
        <div class="row services_list">
          <div class="small-12 medium-4 large-4 columns">
            <img src="{{ asset('img/car-suv.png') }}" alt="" title="" class="serv_icon"/>
            <h2 class="title text-blue">CHEVROLET CAPTIVA</h2>
            <p class="item-description-car">Motor: 2.400cc, 182HP a 6700 RPM.</p>
            <p class="item-description-car">Caja automática.</p>
            <p class="item-description-car">Dirección hidráulica.</p>
            <p class="item-description-car">Rendimiento: 30 Km. por galón.</p>
            <p class="item-description-car">Aire acondicionado.</p>
          </div>
    
          <div class="small-12 medium-4 large-4 columns">
            <img src="{{ asset('img/car-toyota-fortuner.png') }}" alt="" title="" class="serv_icon"/>
            <h2 class="title text-blue">TOYOTA FORTUNER</h2>
            <p class="item-description-car">Motor: 2.700cc, 158HP a 5200 RPM.</p>
            <p class="item-description-car">Caja automática.</p>
            <p class="item-description-car">Dirección hidráulica.</p>
            <p class="item-description-car">Rendimiento: 34 Km. por galón.</p>
            <p class="item-description-car">Aire acondicionado.</p>
          </div>
    
          <div class="small-12 medium-4 large-4 columns">
            <img src="{{ asset('img/car-dodge-journey.png') }}" alt="" title="" class="serv_icon"/>
            <h2 class="title text-blue">DODGE JOURNEY</h2>
            <p class="item-description-car">Motor: 2.400cc, 173HP a 6000 RPM.</p>
            <p class="item-description-car">Caja automática.</p>
            <p class="item-description-car">Dirección hidráulica.</p>
            <p class="item-description-car">Rendimiento: 35 - 38 Km. por galón.</p>
            <p class="item-description-car">Aire acondicionado.</p>
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