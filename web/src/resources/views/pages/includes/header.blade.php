<header>
  <div class="row">

    <nav class="top-bar" data-topbar role="navigation">

      <!--    Start Logo    -->
      <ul class="title-area">
        <li class="name">
          <a href="{{ route('home') }}" class="logo">
            <div class="large-8 small-6 medium-6 columns">
              <img class="logo-img tld" src="{{ asset('img/logorayther.png') }}" />
            </div>
          </a>
        </li>
        <span class="toggle-topbar menu-icon none-margin"><a href="#"><span>Menu</span></a>
        </span>
        </li>
      </ul>
      <!--    End Logo    -->

      <!--    Start Navigation Menu    -->
      <section class="top-bar-section" id="mean_nav">
        <ul class="right">
          <li class="has-dropdown">
            <a class="header-item-menu" href="#">Servicios</a>
            <ul class="dropdown">
              <li><a class="header-dropdow-item" href="{{ route('smallcars') }}">Autos económicos pequeños</a></li>
              <li><a class="header-dropdow-item" href="{{ route('midcars') }}">Autos medianos</a></li>
              <li><a class="header-dropdow-item" href="{{ route('suvcars') }}">Alquiler de camionetas</a></li>
              <li><a class="header-dropdow-item" href="{{ route('delivery') }}">Servicio a domicilio</a></li>
            </ul>
          </li>
          <li><a class="header-item-menu" href="{{ route('aboutus') }}">Sobre Nosotros</a></li>
          <li><a class="header-item-menu" href="{{ route('contactus') }}">Contáctanos</a></li>
        </ul>
      </section>
      <!--    End Navigation Menu    -->

    </nav>
  </div>
</header>