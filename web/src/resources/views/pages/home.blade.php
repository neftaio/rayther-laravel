@extends('pages.includes.template_fancy') 
@section('additionalcss')
@endsection
@section('content')
<i class="fab fa-whatsapp"></i>
<!--  Start Services Section  -->
<section class="services" id="services">

    <!--    Start Services Titles    -->
    <div class="row">
        <h2 class="mean_title">Nuestros vehículos</h2>
        <h2 class="sub_title">Reserva ya el carro que se acomode a tus necesidades.</h2>
        <h2 class="sub_title">(Reserva con cita previa)</h2>
    </div>
    <!--    End Services Titles    -->

    <!--    Start Services List    -->
    <div class="row services_list">
        <div class="small-12 medium-4 large-4 columns">
            <img src="{{ asset('img/car-sma.png') }}" alt="" title="" class="serv_icon" />
            <h2 class="title"><a href="{{ route('smallcars') }}">Autos Pequeños</a></h2>
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
                FORTUNER.
            </p>
        </div>

    </div>
    <!--    End Services List    -->

    <!--    Start Button    -->
    <div class="btn_holder">
        <a href="{{ route('contactus') }}" class="btn_fancy">
            <div class="solid_layer"></div>
            <div class="border_layer"></div>
            <div class="text_layer">Reservar ahora</div>
        </a>
    </div>
    <!--    End Button    -->

</section>
<!--  End Services Section  -->



<!--  Start Quote Section  -->
<section class="quote">
    <blockquote>
        <p>
            <span class="strong">BOGOTÁ</span> UN DESTINO QUE SE CONSOLIDADA COMO EL DESTINO TURÍSTICO PRINCIPAL DE COLOMBIA</p>
        <hr/>
        <span class="author">
          No hay un mejor momento para visitar a Bogotá o sus alrededores. Nosotros en Rayther.com.co le proveeremos el vehiculo de alquiler que mejor se
acomode a sus necesidades y siempre con la mejor atención y a los mejores precios. No deje de consultar nuestros servicios de renta de autos para que compruebe por sí mismo lo que muchas otras personas ya han podido comprobar: En Alquiler de Autos Rayther en Bogotá, su satisfacción es nuestro compromiso!
        </span>
    </blockquote>
</section>
<!--  End Quote Section  -->



<!--  Start Testimonials Section  -->
<section class="testimonials" id="testimonials">
    <div class="row">
        <div class="slider_container">
            <div id="carousel">

                <div class="tesimonial">
                    <!-- <img src="img/mashable.jpg" title="" alt=""> -->
                    <span class="name">VIAJA ALREDEDOR BOGOTÁ: Mina de Sal</span>
                    <a href="https://saltaconmigo.com/blog/2013/10/minas-sal-bogota-nemocon-zipaquira-catedral/" target="_blank">
                <img src="{{ asset('img/ZipaquiraCatedralDeSalViaCrucis.jpg') }}" alt="" title="" class="serv_icon"/>
              </a>
                    <p>
                        Si la historia de Bogotá como lugar habitado se remonta a unos 12.500 años, se han encontrado restos de 10500 a.C., antes
                        de aquello, hace unos 700.000 años, toda la zona estaba cubierta por un océano. Es de ahí de donde
                        proviene toda la sal que se ha extraído, se extrae y se extraerá de las dos minas que se encuentran
                        al norte de la capital colombiana. Si de Bogotá elegimos tres visitas imprescindibles, de los alrededores
                        vamos a hacer lo mismo. Dos relacionadas con la sal: la Mina de Sal de Nemocón y la Catedral de Sal
                        de Zipaquirá.
                    </p>
                    <span class="author">
                  <a href="https://saltaconmigo.com/blog/2013/10/minas-sal-bogota-nemocon-zipaquira-catedral/" target="_blank">
                    Leer más...
              </a>
                  </span>
                </div>

                <div class="tesimonial">
                    <!-- <img src="img/mashable.jpg" title="" alt=""> -->
                    <span class="name">VIAJA ALREDEDOR BOGOTÁ: Laguna de Guatavita</span>
                    <a href="https://saltaconmigo.com/blog/2013/10/leyenda-el-dorado-laguna-guatavita/" target="_blank">
                <img src="{{ asset('img/BogotaLaguanGuatavitaBoquete.jpg') }}" alt="" title="" class="serv_icon"/>
              </a>
                    <p>
                        Toda la sal que dejaron los antiguos océanos en la zona de Bogotá no era lo que los conquistadores buscaban –a pesar de que
                        era un artículo muy valioso en la época y con el que se pagaban algunas transacciones–, querían sólo
                        el oro, y la leyenda de El Dorado fue un aliciente demasiado importante para ellos, tanto como para
                        tratar de acabar con una laguna.
                    </p>
                    <span class="author">
                  <a href="https://saltaconmigo.com/blog/2013/10/leyenda-el-dorado-laguna-guatavita/" target="_blank">
                    Leer más...
              </a>
                  </span>
                    <!-- <span class="author">Alex Martin - CEO</span> -->
                </div>

                <div class="tesimonial">
                    <!-- <img src="img/mashable.jpg" title="" alt=""> -->
                    <span class="name">VIAJA EN BOGOTÁ: Cultura</span>
                    <a href="https://saltaconmigo.com/blog/2013/10/visitas-imprescindibles-bogota/" target="_blank">
                <img src="{{ asset('img/Bogota-CatedralPlazaBolivar.jpg') }}" alt="" title="" class="serv_icon"/>
              </a>
                    <p>
                        Como toda capital que se precie, Bogotá es el epicentro cultural del país. Es una ciudad llena de eventos, en la que casi
                        cada semana hay conciertos gratuitos de todo tipo de música, exposiciones, festivales… y por supuesto
                        mucha rumba, la marcha nocturna colombiana. Es también una ciudad llena de historia.
                    </p>
                    <span class="author">
                  <a href="https://saltaconmigo.com/blog/2013/10/visitas-imprescindibles-bogota/" target="_blank">
                    Leer más...
              </a>
                  </span>
                    <!-- <span class="author">Alex Martin - CEO</span> -->
                </div>

            </div>
        </div>

        <!--    Start Testimonials Pagination    -->
        <nav class="pagination">
            <ul>
                <li><a href="#">1</a></li>
                <li><a href="#" class="selected">2</a></li>
                <li><a href="#">3</a></li>
            </ul>
        </nav>
        <!--    End Testimonials Pagination    -->

    </div>
</section>
<!--  End Testimonials Section  -->



<!--  Start Call To Action Section  -->
<section class="cta" id="Download">
    <div class="row">

        <!--    Start CTA Titles    -->
        <h1 class="title">Contáctanos y reserva tu carro ahora mismo</h1>

        <!-- Credit card -->
        <div class="credit-cards">
            <h2 class="sub_title">Aceptamos todas las tarjetas</h2>
            <div class="row">
                <div class="small-6 medium-4 large-3 large-offset-1 columns">
                    <img src="{{ asset('img/card-visa.png') }}" alt="" title="" class="serv_icon icon-ccard" />
                </div>
                <div class="small-6 medium-4 large-3 large-offset-1 columns">
                    <img src="{{ asset('img/card-mastercard.png') }}" alt="" title="" class="serv_icon icon-ccard" />
                </div>
                <div class="small-6 medium-4 large-3 large-offset-1 columns">
                    <img src="{{ asset('img/card-american.png') }}" alt="" title="" class="serv_icon icon-ccard" />
                </div>
                <!-- <div class="small-6 medium-3 large-2 large-offset-1 columns">
                <img src="../static/img/card-diners.png" alt="" title="" class="serv_icon icon-ccard"/>
              </div> -->
            </div>
        </div>
        <!-- ./Credit card -->

        <h2 class="sub_title">Lunes a Domingo 7 am - 7 pm</h2>
        <h2 class="sub_title"><b>{{ Config::get('staticdata.phone_1') }}</b>, <b>{{ Config::get('staticdata.phone_2') }}</b>, <b>{{ Config::get('staticdata.phone_3') }}</b></h2>
        <!--    End CTA Titles    -->

        <!--    Start Button    -->
        <a href="{{ route('contactus') }}" class="btn_fancy">
            <div class="solid_layer"></div>
            <div class="border_layer"></div>
            <div class="text_layer">Contáctanos</div>
        </a>
        <!--    End Button    -->

    </div>
</section>
<!--  End Call To Action Section  -->



<!--  Start Map Section  -->
<section class="map" id="connect">

    <!--    Start Map Shadow    -->
    <div class="shadow"></div>
    <!--    End Map Shadow    -->

    <div id="map_container"></div>
</section>
<!--  End Map Section  -->
@endsection