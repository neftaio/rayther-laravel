@extends('pages.includes.template')
@section('content')

<!--  Start Services Section  -->
<section class="services" id="services">

    <!--    Start Services Titles    -->
    <div class="row">
        <h1 class="mean_title">CONTACATANOS AHORA</h1>
        <h2 class="sub_title">Escribenos cualquier inquietud que tengas o el carro que buscas para tu viaje y muy
            pronto te estaremos contactando
            para colaborarte en tu reserva</h2>
    </div>
    <!--    End Services Titles    -->

    <!-- Start Contact section -->
    <div class="row contact-container">
        <div class="small-12 medium-8 large-6 columns">

            <!-- Contacus form -->
            <div class="row form-container">
            @include('pages.includes.contactform')
            </div>
            <!-- ./Contacus form -->

            <!-- Type of cars -->
            <div class="row car-types-form">
                <h2 class="sub_title">Tipos de carro</h2>
                <div class="small-4 medium-3 large-3 medium-offset-1 large-offset-1 columns">
                    <img src="{{ asset('img/car-sma.png') }}" alt="" title="" class="serv_icon" />
                    <h3 class="title"><a href="{{ route('smallcars') }}">Pequeño</a></h3>
                </div>

                <div class="small-4 medium-3 large-3 medium-offset-1 large-offset-1 columns">
                    <img src="{{ asset('img/car-med.png') }}" alt="" title="" class="serv_icon" />
                    <h3 class="title"><a href="{{ route('midcars') }}">Mediano</a></h3>
                </div>

                <div class="small-4 medium-3 large-3 medium-offset-1 large-offset-1 columns">
                    <img src="{{ asset('img/car-suv.png') }}" alt="" title="" class="serv_icon" />
                    <h3 class="title"><a href="{{ route('suvcars') }}">Camioneta</a></h3>
                </div>
            </div>
            <!-- ./Type of cars -->
        </div>


        <div class="small-12 medium-4 large-6 columns">
            <!--  Start Map Section  -->
            <section class="map map-small" id="connect">
                <div id="map_container"></div>
            </section>
            <!--  End Map Section  -->

            <!-- Contact Phones -->
            <div class="phones_holder">
                <h2 class="sub_title">Lunes a Domingo 7 am - 7 pm</h2>
                <h2 class="sub_title"><b>{{ Config::get('staticdata.phone_1') }}</b>, <b>{{
                        Config::get('staticdata.phone_2') }}</b>, <b>{{ Config::get('staticdata.phone_3') }}</b></h2>
            </div>
            <!-- Contact Phones -->
        </div>

    </div>
    <!-- End Contact section -->


</section>
<!--  End Services Section  -->
@endsection

@section('additionaljs')
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAvb6gNWu8TBnNHHeKwQ7Zfe7oQqEe-MDo&v=3.exp"></script>
<script type="text/javascript" src="{{ asset('js/map.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/foundation/foundation.abide.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/contactus.js') }}"></script>
@endsection
