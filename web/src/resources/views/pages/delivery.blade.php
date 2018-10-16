@extends('pages.includes.template') 
@section('content')
<!--  Start Services Section  -->
<section class="services" id="services">

    <!--    Start Services Titles    -->
    <div class="row">
        <h1 class="mean_title">SERVICIO DE DOMICILIO</h1>
        <h2 class="sub_title">Para tu comodidad llevamos tu carro a donde lo necesites.</h2>
        <div class="bussines-description">
            <p>
                Le proveemos el servicio a domicilio donde usted lo requiera en la ciudad de Bogotá tanto para recibir el automóvil como
                para su entrega, si lo requiere puede solicitar este servicio el cual tendrá un pequeño costo adicional.</p>
            <p>
                Y recuerde… <span class="mean_title2">“Su satisfacción es nuestro compromiso“</span>.
            </p>
        </div>
    </div>
    <!--    End Services Titles    -->

    <!--    Start Services List    -->
    <div class="row services_list">
        <div class="small-12 medium-4 large-4 columns">
            <img src="{{ asset('img/car-sma.png') }}" alt="" title="" class="serv_icon" />
            <h2 class="title"><a href="{{ url_for('smallcars') }}">Autos Pequeños</a></h2>
            <p>Te ofrecemos la mejor línea de autos económicos pequeños para mayor economía en combustible como el CHEVROLET
                SPARK y el CHEVROLET SPARK GT.</p>
        </div>

        <div class="small-12 medium-4 large-4 columns">
            <img src="{{ asset('img/car-med.png') }}" alt="" title="" class="serv_icon" />
            <h2 class="title"><a href="{{ url_for('mediumcars') }}">Autos Medianos</a></h2>
            <p>Te ofrecemos una línea de autos económicos medianos para su mayor comodidad y la de su familia. Autos como el
                RENAULT LOGAN, CHEVROLET SAIL, VOLKSWAGEN JETTA y el KIA CERATO.</p>
        </div>

        <div class="small-12 medium-4 large-4 columns">
            <img src="{{ asset('img/car-suv.png') }}" alt="" title="" class="serv_icon" />
            <h2 class="title"><a href="{{ url_for('suvcars') }}">Camionetas</a></h2>
            <p>Te ofrecemos excelentes camionetas económicas para la aventura y el comfort como la CHEVROLET CAPTIVA y la TOYOTA
                FORTUNER.</p>
        </div>

    </div>
    <!--    End Services List    -->

    <!--    Start Button    -->
    <div class="btn_holder">
        <a href="{{ route('contactus') }}" class="btn_fancy">
            <div class="solid_layer"></div>
            <div class="border_layer"></div>
            <div class="text_layer">Contáctanos</div>
        </a>
    </div>
    <!--    End Button    -->

    <!-- Contact Phones -->
    <div class="phones_holder">
        <h2 class="sub_title">Lunes a Domingo 7 am - 7 pm</h2>
        <h2 class="sub_title"><b>{{ Config::get('staticdata.phone_1') }}</b>, <b>{{ Config::get('staticdata.phone_2') }}</b>, <b>{{ Config::get('staticdata.phone_3') }}</b></h2>
    </div>
    <!-- Contact Phones -->

</section>
<!--  End Services Section  -->
@endsection