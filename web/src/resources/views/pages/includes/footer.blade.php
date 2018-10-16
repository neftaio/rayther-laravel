<footer>
  <div class="row">

    <!--    Start Copyrights    -->
    <div class="small-12 medium-4 large-4 columns">
      <div class="copyrights">
        <a class="logo" href="rayther.com">
          <h1>Rayther<span class="tld">.com</span></h1>
        </a>
        <p>Copyright © {{ date('Y') }} neftaio.</p>
      </div>
    </div>
    <!--    End Copyrights    -->

    <div class="small-12 medium-8 large-8 columns">
      <div class="contact_details right">
        <nav class="social">
          <ul class="no-bullet">
            <li><a href="{{ Config::get('staticdata.facebook_url') }}" target="_blank">Facebook</a></li>
            <li><a href="{{ Config::get('staticdata.twitter_url') }}" target="_blank">Twitter</a></li>
            <li><a href="{{ Config::get('staticdata.googleplus_url') }}" target="_blank">Google+</a></li>
          </ul>
        </nav>

        <div class="contact">
          <div class="details">
            <p><a href="mailto:info@rayther.com" class="footer-mail">{{ Config::get('staticdata.email_main') }}</a></p>
            <p>{{ Config::get('staticdata.phone_1') }}</p>
            <p>{{ Config::get('staticdata.phone_2') }}</p>
            <p>{{ Config::get('staticdata.phone_3') }}</p>
          </div>

          <p class="adress">{{ Config::get('staticdata.address') }}</p>
          </div>
        </div>
      </div>

    </div>
  </footer>