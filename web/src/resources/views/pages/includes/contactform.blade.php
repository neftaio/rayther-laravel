<div class="progress large-6 custompbc" style="display:none;">
        <span style="width: 0%;" class="meter custompb"></span>
</div>


<div class="" id="form-cu-container">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <form data-abide="ajax" id="cform">
        <div class="row">
            <div class="large-12 columns">
                <div class="name-field">
                    <label>Nombre Completo
                  <input type="text" placeholder="" name="name"  id="name" pattern="[a-zA-Z]+" required/>
                </label>
                    <small class="error">Tu nombre de contacto es requerido.</small>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="small-12 medium-6 large-6 columns">
                <div class="email-field">
                    <label>E-mail
                  <input type="text" placeholder="" name="email" required pattern="email"/>
                </label>
                    <small class="error">Tu E-mail es requerido.</small>
                </div>
            </div>
            <div class="small-12 medium-6 large-6 columns">
                <div class="phone-field">
                    <label>Teléfono
                  <input type="text" placeholder="" name="phone" required />
                </label>
                    <small class="error">Tu teléfono es requerido.</small>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="large-12 columns">
                <label>Tipo de vehículo que requieres
                <select name="cartype">
                  <option value="pequeno">Pequeño</option>
                  <option value="mediano" selected>Mediano</option>
                  <option value="camioneta">Camioneta</option>
                </select>
              </label>
            </div>
        </div>

        <div class="row">
            <div class="large-12 columns">
                <div class="message-field">

                    <label>Mensaje
                  <textarea placeholder="" rows="5" name="message" required></textarea>
                </label>
                    <small class="error">Por favor escribe tu mensaje</small>
                </div>
            </div>
        </div>

        <!--    Start Button    -->
        <div class="row">
            <button type="submit" class="button small btn_fancy btn_fancy2 right">
              <div class="solid_layer"></div>
              <div class="border_layer"></div>
              <div class="text_layer">Enviar</div>
            </button>
        </div>
        <!--    End Button    -->
    </form>

</div>