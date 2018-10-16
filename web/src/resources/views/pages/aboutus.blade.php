@extends('pages.includes.template') 
@section('content')

<!--  Start Services Section  -->
<section class="services" id="services">

    <!--    Start Services Titles    -->
    <div class="row">
        <h1 class="mean_title">Empresa de ALQUILER DE AUTOS RAYTHER</h1>
        <h2 class="sub_title">Una empresa de alquiler de vehículos de alta calidad a precios económicos.</h2>
        <div class="bussines-description">
            <p>
                Somos una empresa nacional, desde su fundación hace más de 15 años. Nuestra experiencia nos acredita ampliamente al haber
                adquirido un logro básico y fundamental como es: otorgar a nuestra selecta clientela la más completa satisfacción
                mediante la calidad de nuestros servicios.
            </p>
            <p>
                No escatimamos ningún esfuerzo por mantener una flotilla con los modelos más recientes, nos esmeramos en el cuidado de su
                parque automotor, en su mantenimientto y en su óptima presentación. Además, siempre estamos dispuestos a
                ser lo más competitivos en cuanto a ofrecer los mejores precios y la conformación de planes especiales, tanto
                a nivel particular como empresarial.
            </p>

            <p>
                Lo invitamos a observar nuestras diferentes opciones para que así disponga usted de una muy buena alternativa en el momento
                de elegir el vehículo que mejor se acomode a tus necesidas.
            </p>
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
            <h2 class="title"><a href="{{ url('smallcars') }}">Autos Pequeños</a></h2>
            <p>Te ofrecemos la mejor línea de autos económicos pequeños para mayor economía en combustible como el CHEVROLET
                SPARK y el CHEVROLET SPARK GT.</p>
        </div>

        <div class="small-12 medium-4 large-4 columns">
            <img src="{{ asset('img/car-med.png') }}" alt="" title="" class="serv_icon" />
            <h2 class="title"><a href="{{ route('midcars') }}">Autos Medianos</a></h2>
            <p>Te ofrecemos una línea de autos económicos medianos para su mayor comodidad y la de su familia. Autos como el
                RENAULT LOGAN, CHEVROLET SAIL, VOLKSWAGEN JETTA y el KIA CERATO. </p>
        </div>

        <div class="small-12 medium-4 large-4 columns">
            <img src="{{ asset('img/car-suv.png') }}" alt="" title="" class="serv_icon" />
            <h2 class="title"><a href="{{ route('suvcars') }}">Camionetas</a></h2>
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