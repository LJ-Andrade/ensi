<?php include('includes/head.php') ?>

<!--
Contact
==================== -->
<section id="contacto" class="section contact contact-single">
    <div class="container">
		<div class="logo">
			<img src="images/logo-t.png" alt="">
		</div>
		<hr>
    <h2 style="color:#6F1717;">CONTACTENOS</h2>
    <br>
      <div class="row contact-inner">
          <div class="col-xs-12 col-sm-12 col-md-4 contact-data" style="padding-top:0px;">
              <div class="inner">
                  <div class="item"><ion-icon name="mail" style="color:#6F1717;"></ion-icon> <b>E-Mail:</b></div>
                  <div class="item">info@ensi-comex.com.ar</div>
                  <hr>
                  <div class="item"><ion-icon name="call" style="color:#6F1717;"></ion-icon> <b>Teléfono:</b></div>
                  <div class="item">+54 11 4331 9293</div>
                  <hr>
                  <div class="item"><ion-icon name="logo-whatsapp" style="color:#6F1717;"></ion-icon> <b>Whatsapp:</b></div>
                  <div class="item">+54 11 5308 3131</div>
                  <hr>
                  <div class="item"><ion-icon class="icon" name="pin" style="color:#6F1717;"></ion-icon> <b>Dirección:</b></div>
                  <div class="item">Perú 590, Piso 11°, Dpto. “C”</div>
                  <div class="item">(C1068 AAB) CABA</div>
                  <div class="item">Buenos Aires, Argentina</div>
              </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-4">
              <div class="form-group">
                  <form action="#" method="post" id="contact-form">
                      <div class="input-field">
                          <input type="text" class="form-control" placeholder="Nombre / Empresa" name="name">
                      </div>
                      <div class="input-field">
                          <input type="email" class="form-control" placeholder="Dirección E-Mail" name="email">
                      </div>
                      <div class="input-field">
                          <input type="email" class="form-control" placeholder="Teléfono" name="phone">
                      </div>
                      <div class="input-field">
                          <textarea class="form-control" placeholder="Mensaje" rows="5" name="message" style="height: 170px;"></textarea>
                      </div>
                      <button class="btn btn-send" type="submit">ENVIAR</button>
                  </form>

                  <div id="success">
                      <p>Mensaje enviado. Le responderemos a la brevedad</p>
                  </div>
                  <div id="error">
                      <p>Error al enviar el mensaje. Contactesé directamente con nosotros</p>
                  </div>
              </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-4 contact-data" style="padding-top:0px;">
              <div class="inner">
                  <div class="item"><ion-icon class="icon" name="map" style="color:#6F1717;"></ion-icon> <b>Mapa:</b></div>
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3283.5825830387053!2d-58.3765082841098!3d-34.614715265588515!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bccad578182a13%3A0xef301accb0e1e2d4!2sPer%C3%BA+590%2C+C1068AAB+CABA!5e0!3m2!1ses-419!2sar!4v1540166187285" class="map" frameborder="0" style="border:0" allowfullscreen></iframe>
              </div>
          </div>
      </div>
    </div>
</section>

<style>

  .map{
    width: 100%;
    height: 19em;
    margin-top:1em;
  }
</style>

<?php include('includes/foot.php') ?>
