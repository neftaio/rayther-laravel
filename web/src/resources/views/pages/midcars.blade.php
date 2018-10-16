@extends('pages.includes.template') 
@section('content')
  <!--  Start Services Section  -->
  <section class="services" id="services">

        <!--    Start Services Titles    -->
        <div class="row">
          <h1 class="mean_title">ALQUILER DE AUTOS ECONÓMICOS FAMILIARES Y EJECUTIVOS</h1>
        </div>
        <!--    End Services Titles    -->
    
        <!--    Start Services List    -->
        <div class="row services_list">
          <div class="small-12 medium-4 large-4 columns">
            <img src="{{ asset('img/car-volkswagen-jetta.png') }}" alt="" title="" class="serv_icon"/>
            <h2 class="title text-blue">VOLKSWAGEN JETTA</h2>
            <p class="item-description-car">Motor: 2.000cc, 115HP a 5.200  RPM.</p>
            <p class="item-description-car">Caja automática. Tracción delantera.</p>
            <p class="item-description-car">Dirección hidráulica.</p>
            <p class="item-description-car">Rendimiento: 30 Km. por galón.</p>
            <p class="item-description-car">Aire acondicionado.</p>
          </div>
    
          <div class="small-12 medium-4 large-4 columns">
            <img src="{{ asset('img/car-chevrolet-sail.png') }}" alt="" title="" class="serv_icon"/>
            <h2 class="title text-blue">CHEVROLET SAIL</h2>
            <p class="item-description-car">Motor: 1.400cc, 102HP a 6.000 RPM.</p>
            <p class="item-description-car">Caja mecánica.</p>
            <p class="item-description-car">Dirección hidráulica.</p>
            <p class="item-description-car">Rendimiento: 60 Km. por galón.</p>
            <p class="item-description-car">Aire acondicionado.</p>
          </div>
    
          <div class="small-12 medium-4 large-4 columns">
            <img src="{{ asset('img/car-med.png') }}" alt="" title="" class="serv_icon"/>
            <h2 class="title text-blue">KIA CERATO</h2>
            <p class="item-description-car">Motor: 1.600cc, 127HP a 4.200  RPM.</p>
            <p class="item-description-car">Caja mecánica. Tracción delantera.</p>
            <p class="item-description-car">Dirección hidráulica.</p>
            <p class="item-description-car">Rendimiento: 60 Km. por galón.</p>
            <p class="item-description-car">Aire acondicionado.</p>
            <p class="item-description-car">Full equipo.</p>
          </div>
    
          <div class="small-12 medium-4 large-4 columns">
            <img src="{{ asset('img/car-renault-logan.png') }}" alt="" title="" class="serv_icon"/>
            <h2 class="title text-blue">REANAULT LOGAN 2</h2>
            <p class="item-description-car">Motor: 1.600cc, 90HP a 5.000  RPM.</p>
            <p class="item-description-car">Caja mecánica. Tracción delantera.</p>
            <p class="item-description-car">Dirección hidráulica.</p>
            <p class="item-description-car">Rendimiento: 62 Km. por galón.</p>
            <p class="item-description-car">Aire acondicionado.</p>
          </div>
    
          <div class="small-12 medium-4 large-4 columns">
            <img src="{{ asset('img/car-renault-logan-sencillo.png') }}" alt="" title="" class="serv_icon"/>
            <h2 class="title text-blue">REANAULT LOGAN</h2>
            <p class="item-description-car">Motor: 1.600cc, 90HP a 5.000  RPM.</p>
            <p class="item-description-car">Caja mecánica. Tracción delantera.</p>
            <p class="item-description-car">Dirección hidráulica.</p>
            <p class="item-description-car">Rendimiento: 50 Km. por galón.</p>
            <p class="item-description-car">Aire acondicionado.</p>
          </div>
    
          <div class="small-12 medium-4 large-4 columns">
            <img src="{{ asset('img/car-mazda-3.png') }}" alt="" title="" class="serv_icon"/>
            <h2 class="title text-blue">MAZDA 3</h2>
            <p class="item-description-car">Motor: 2.000cc, 153HP a 5.000  RPM.</p>
            <p class="item-description-car">Caja automática. Tracción delantera.</p>
            <p class="item-description-car">Dirección hidráulica.</p>
            <p class="item-description-car">Rendimiento: 45 Km. por galón.</p>
            <p class="item-description-car">Aire acondicionado.</p>
          </div>
    
          <div class="small-12 medium-4 large-4 columns">
            <img src="{{ asset('img/car-mercedes-benz-c180.png') }}" alt="" title="" class="serv_icon"/>
            <h2 class="title text-blue">MERCEDES BENZ C180</h2>
            <p class="item-description-car">Motor: 1.800cc, 156HP a 5.200  RPM.</p>
            <p class="item-description-car">Caja mecánica. Tracción delantera.</p>
            <p class="item-description-car">Dirección hidráulica.</p>
            <p class="item-description-car">Rendimiento: 55 Km. por galón.</p>
            <p class="item-description-car">Aire acondicionado.</p>
          </div>
    
        </div>
        <!--    End Services List    -->
    
        <!--    Contact Form    -->
        <div class="row contact-subsection">
          <h1 class="mean_title">Contáctanos</h1>
          @include('contactform')
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