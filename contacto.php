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
        <div class="row contact-inner">
            <div class="col-xs-12 col-sm-12 col-md-6">
                <h2>CONTACTENOS</h2>
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
                            <textarea class="form-control" placeholder="Mensaje" rows="3" name="message"></textarea>
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
            <div class="col-xs-12 col-sm-12 col-md-6 contact-data">
                <div class="inner">
                    <div class="item"><ion-icon name="mail"></ion-icon> <b>E-Mail:</b></div>	
                    <div class="item">info@ensi.com.ar</div>	
					<hr>
                    <div class="item"><ion-icon name="call"></ion-icon> <b>Teléfonos:</b></div>	
                    <div class="item">4545-4545 || 15-5421-4587</div>	
					<hr>
                    <div class="item"><ion-icon class="icon" name="pin"></ion-icon> <b>Dirección:</b></div>
                    <div class="item">Av. Calle 1234</div>
                    <div class="item">Buenos Aires, Argentina</div>
                </div>
            </div>
        </div>
    </div>
</section>

	<?php include('includes/foot.php') ?>
