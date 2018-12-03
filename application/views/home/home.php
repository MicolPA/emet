<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $title ?> | EMET</title>

	<!-- Estilos -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/styles.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/main.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/fontawesome/css/all.css') ?>">
</head>
<body>

	<header>
    <div class="collapse bg-dgreen" id="navbarHeader">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 col-md-7 py-4">
            <h4 class="text-white">About</h4>
            <p class="text-muted">Add some information about the album below, the author, or any other background context. Make it a few sentences long so folks can pick up some informative tidbits. Then, link them off to some social networking sites or contact information.</p>
          </div>
          <div class="col-sm-4 offset-md-1 py-4">
            <h4 class="text-white">Contact</h4>
            <ul class="list-unstyled">
              <li><a href="#" class="text-white">Follow on Twitter</a></li>
              <li><a href="#" class="text-white">Like on Facebook</a></li>
              <li><a href="#" class="text-white">Email me</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="d-flex flex-column flex-md-row align-items-center pt-3 pb-3 pl-5 pr-5 px-md-4 bg-green box-shadow">
      <a class="mr-md-auto font-weight-normal pb-2"><img src="<?php echo base_url('assets/images/emet-logo-blanco.png') ?>" width='120px'></a>

      <a id="btnIniciarSesionModal" class="btn btn-outline-white pr-3 pl-3 btn-r mr-5" data-toggle="modal" data-target="#iniciarSesionModal" href="#!">INICIAR SESIÓN</a>
      <a class="navbar-toggler text-white" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation"><i class="fas fa-bars display-5 text-white"></i></a>

    </div>

    </header>

   

	<div class="pt-5" style="background-image:url(https://www.tbo.com/storyimage/TB/20140416/ARTICLE/140419373/AR/0/AR-140419373.jpg);min-height: 600px ">
    <div class="container pt-5">
        <div class="row pt-5">
          	<div class="col-lg-8 text-white pr-5">
          		<h1 class="display-4 font-weight-bold">Estimula el aprendizaje de tu bebe donde quieras</h1>
		        <p class="pt-4 display-6">El momento perfecto para aprender</p>
		        <p class="pt-4 display-6"><i class="fas fa-play-circle"></i>&nbsp; <a href="#video-home-section">Ver video de como funciona &raquo;</a></p>
          	</div>
          	<div class="col-lg-4">
          		<div class="container">
          			<form class="text-center bg-white p-5">
						<h5 class="display-6 font-weight-bold pb-3 text-bgreen">¡Contáctanos!</h5>
						<div class="form-group">
					    	<input type="email" class="form-control input-pink" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Correo">
					    
					  	</div>
					  	<div class="form-group">
					    	<select class="form-control input-pink">
								<option>Edad del bebé</option>
							</select>
					  	</div>
					  	<p class="text-left small"><i class="fas fa-lock"></i>&nbsp; Libre de spam, EMET se compromete a brindarte un contenido único para el aprendizaje de tu bebé.</p>
					  	<button type="submit" class="btn btn-r btn-yellow p-1 btn-lg btn-block">Comprar</button>
					</form>
          		</div>
          	</div>
        </div>
    </div>
</div>
<div id="video-home-section">
</div>

<div class="kit-home-section text-center pt-5 pb-5">
	<a href="#" class="btn btn-r btn-light-blue text-white btn-lg pr-5 pl-5">Adquiere el kit</a>
</div>

<div class="container text-center p-5 pr-md-0 pl-md-0">
	<img class='pt-5' src="<?php echo base_url('assets/images/emet-logo.png') ?>" width='30%'>
	<p class="pt-5 pl-5 pr-5 lead">
		Es un método de aprendizaje simple que te ofrece una serie de pasos utilizando la "educación musical temprana" ayudandote a identificar patologias en tu bebé para que acudas al especialista a verificar sospechas. Juntos tendremos la oportunidad ideal para que tu y tu bebé tengan siempre ese espacio a solas de diversión.
	</p>

	<a class="display-6" href="">Leer más del metodo</a>

</div>

<div class="bg-red mt-5 mb-5">
	<div class="container">
		<div class="row align-items-center pt-5 pb-5">
			<div class="col-lg-3 col-md-3 pt-4 pb-4 pr-5 pl-5">
				<p class="display-6 border-right text-right pr-3 text-white">Datos importantes</p>
			</div>
			<div class="col-lg-3 col-md-3 pt-4 pb-4">
				<div class="row pt-3 pb-3 text-white">
					<div class="col-lg-4">
						<p><i class="pt-1 fas fa-drum display-5"></i></p>
					</div>
					<div class="col-lg-8">
						<p class="display-5 ">95% +</p>
						<small class="">Del aprendizaje efectivo es logrado a travez de la estimulación temprana musical.</small>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 pt-4 pb-4">
				<div class="row pt-3 pb-3 text-white">
					<div class="col-lg-4">
						<p><i class="pt-1 fas fa-clock display-5"></i></p>
					</div>
					<div class="col-lg-8">
						<p class="display-5 ">30% +</p>
						<small class="">Ahorra más tiempo y dinero acelerando el aprendizaje de tu bebé.</small>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 pt-4 pb-4">
				<div class="row pt-3 pb-3 text-white">
					<div class="col-lg-4">
						<p><i class="pt-1 fas fa-play-circle display-5"></i></p>
					</div>
					<div class="col-lg-8">
						<p class="display-5 ">95% +</p>
						<small class="">Del aprendizaje efectivo es logrado a travez de la estimulación temprana musical.</small>
					</div>
				</div>
			</div>
			</div>
	</div>
</div>

<div class="container pt-5 text-center">
	<p class="display-4 font-weight-bold text-red mt-5">¿Cómo funciona EMET?</p>
	<div class="row mt-5">
		<div class="col-lg-4 mt-5">
			<img src="<?php echo base_url('assets/images/number-1.png') ?>" width='70px'>
			<p class="text-primary display-6 pt-4">Regístrate</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad iure neque architecto! Voluptatem ea eveniet laborum minima ipsam.</p>
		</div>
		<div class="col-lg-4 mt-5">
			<img src="<?php echo base_url('assets/images/number-2.png') ?>" width='70px'>
			<p class="text-primary display-6 pt-4">Adquiere tu Kit</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad iure neque architecto! Voluptatem ea eveniet laborum minima ipsam.</p>
		</div>
		<div class="col-lg-4 mt-5">
			<img src="<?php echo base_url('assets/images/number-3.png') ?>" width='70px'>
			<p class="text-primary display-6 pt-4">Comienza las lecciones</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad iure neque architecto! Voluptatem ea eveniet laborum minima ipsam.</p>
		</div>

	</div>
	
	<div class="mt-5 pt-5 mb-5 pb-5">
		<a href="#" class="btn btn-r btn-yellow text-white btn-lg pr-5 pl-5 display-6">Solicitar Kit</a>
	</div>
	
</div>

<div id="carouselInfo" class="carousel slide slideInfo" data-ride="carousel">
	<ol class="carousel-indicators">
	    <li data-target="#carouselInfo" data-slide-to="0" class="active"></li>
	    <li data-target="#carouselInfo" data-slide-to="1"></li>
	    <li data-target="#carouselInfo" data-slide-to="2"></li>
	</ol>
	<div class="carousel-inner">
	   <div class="container">
	   	 <div class="carousel-item active slide slideInfo">
		    <p class="display-4 font-weight-bold mb-5">Conoce más sobre la estimulación</p>

		    <div class="mt-5 pt-5">
		    	<p class="display-6">
			    	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, quos, animi. Officia, expedita perspiciatis eius quasi cumque ad nobis, vero saepe dolore. Nemo enim architecto, sunt dicta blanditiis ipsam quia!
			    </p>
			    <p class="display-6">
			    	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, quos, animi. Officia, expedita perspiciatis eius quasi cumque ad nobis, vero saepe dolore. Nemo enim architecto, sunt dicta blanditiis ipsam quia!
			    </p>
		    </div>
	    </div>
	    <div class="carousel-item slide slideInfo">
		    <p class="display-4 font-weight-bold mb-5">Conoce más sobre la estimulación</p>

		    <div class="mt-5 pt-5">
		    	<p class="display-6">
			    	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, quos, animi. Officia, expedita perspiciatis eius quasi cumque ad nobis, vero saepe dolore. Nemo enim architecto, sunt dicta blanditiis ipsam quia!
			    </p>
			    <p class="display-6">
			    	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, quos, animi. Officia, expedita perspiciatis eius quasi cumque ad nobis, vero saepe dolore. Nemo enim architecto, sunt dicta blanditiis ipsam quia!
			    </p>
		    </div>
	    </div>
	    <div class="carousel-item slide slideInfo">
		    <p class="display-4 font-weight-bold mb-5">Conoce más sobre la estimulación</p>

		    <div class="mt-5 pt-5">
		    	<p class="display-6">
			    	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, quos, animi. Officia, expedita perspiciatis eius quasi cumque ad nobis, vero saepe dolore. Nemo enim architecto, sunt dicta blanditiis ipsam quia!
			    </p>
			    <p class="display-6">
			    	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, quos, animi. Officia, expedita perspiciatis eius quasi cumque ad nobis, vero saepe dolore. Nemo enim architecto, sunt dicta blanditiis ipsam quia!
			    </p>
		    </div>
	    </div>
	   </div>
	</div>
	
</div>


<div id="carouselExpertos" class="carousel slide slideExperto" data-ride="carousel">
	<ol class="carousel-indicators">
	    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
	    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
	    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
	</ol>
	<div class="carousel-inner">
	   	<div class="carousel-item active slide">
	   	 	<div class="container">
	   	 		<div class="row align-items-center pt-5 pb-5">
		   	 		<div class="col-lg-4 text-center pt-5 pb-5">
		   	 			<img  src="<?php echo base_url('assets/images/user-icon.png') ?>" width="50%">
		   	 			<p class="display-6 mt-4 text-red font-weight-bold">Gisset Polanco</p>
		   	 			<p class="display-6 font-weight-bold">Co-Founder Emet</p>
		   	 		</div>
		   	 		<div class="col-lg-8 pt-5 pb-5">
		   	 			<p class="display-4 font-weight-bold mb-5 text-red">Equipo de expertos</p>

		   	 			<p class="display-6 text-secondary">
				    	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, quos, animi. Officia, expedita perspiciatis eius quasi cumque ad nobis, vero saepe dolore. Nemo enim architecto, sunt dicta blanditiis ipsam quia!</p>
		   	 		</div>
		   	 	</div>
	   	 	</div>
	    </div>
	    <div class="carousel-item slide">
	   	 	<div class="container">
	   	 		<div class="row align-items-center pt-5 pb-5">
		   	 		<div class="col-lg-4 text-center pt-5 pb-5">
		   	 			<img  src="<?php echo base_url('assets/images/user-icon.png') ?>" width="50%">
		   	 			<p class="display-6 mt-4 text-red font-weight-bold">Gisset Polanco</p>
		   	 			<p class="display-6 font-weight-bold">Co-Founder Emet</p>
		   	 		</div>
		   	 		<div class="col-lg-8 pt-5 pb-5">
		   	 			<p class="display-4 font-weight-bold mb-5 text-red">Equipo de expertos</p>

		   	 			<p class="display-6 text-secondary">
				    	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, quos, animi. Officia, expedita perspiciatis eius quasi cumque ad nobis, vero saepe dolore. Nemo enim architecto, sunt dicta blanditiis ipsam quia!</p>
		   	 		</div>
		   	 	</div>
	   	 	</div>
	    </div>
	    <div class="carousel-item slide">
	   	 	<div class="container">
	   	 		<div class="row align-items-center pt-5 pb-5">
		   	 		<div class="col-lg-4 text-center pt-5 pb-5">
		   	 			<img  src="<?php echo base_url('assets/images/user-icon.png') ?>" width="50%">
		   	 			<p class="display-6 mt-4 text-red font-weight-bold">Gisset Polanco</p>
		   	 			<p class="display-6 font-weight-bold">Co-Founder Emet</p>
		   	 		</div>
		   	 		<div class="col-lg-8 pt-5 pb-5">
		   	 			<p class="display-4 font-weight-bold mb-5 text-red">Equipo de expertos</p>

		   	 			<p class="display-6 text-secondary">
				    	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, quos, animi. Officia, expedita perspiciatis eius quasi cumque ad nobis, vero saepe dolore. Nemo enim architecto, sunt dicta blanditiis ipsam quia!</p>
		   	 		</div>
		   	 	</div>
	   	 	</div>
	    </div>
	</div>
	<a class="carousel-control-prev" href="#carouselExpertos" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="carousel-control-next" href="#carouselExpertos" role="button" data-slide="next">
	    <span class="carousel-control-next-icon" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	</a>
</div>


<div class="container p-5">
	<div class="row p-5">
		<div class="col-lg-4 p-5 text-center">
			<img src="<?php echo base_url('assets/images/kit.png') ?>" alt="KIT" width="100%"></div>
		<div class="col-lg-8 p-5">
			<p class="display-5 font-weight-bold text-blue">Kit de inicio</p>
			<p class="display-6">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, ipsa?</p>
			<div class="form-check form-check-inline">
			  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1 pr-3">
			  <label class="form-check-label display-6" for="inlineRadio1">Incluír Kit</label>
			</div>
			<div class="form-check form-check-inline">
			  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2 pr-3">
			  <label class="form-check-label display-6" for="inlineRadio2">Ya tengo un Kit</label>
			</div>
		</div>
	</div>
	<p class="display-5 text-red text-center font-weight-bold">Planes</p>
	<div class="row pt-5">
		<div class="col-lg-4 col-md-4 card-plans pt-5 pr-3 pl-3">
			<p class="text-info font-weight-bold title-plans text-center">MENSUAL</p>
			<p class="text-center"><span class="pt-2">US$ </span><span class="display-5 font-weight-bold pt-2">2.99</span></p>

			<ul class="list-unstyled pt-5 pr-3 pl-3 mb-4">
				<li class="pt-3 pb-3 border-top border-info text-info"><i class="fas fa-check-circle pr-5 display-6 border-info"></i> Lecciones</li>
				<li class="pt-3 pb-3 border-top border-info text-info"><i class="fas fa-check-circle pr-5 display-6"></i> Canciones</li>
				<li class="pt-3 pb-3 border-top border-bottom border-info text-info"><i class="fas fa-check-circle pr-5 display-6"></i> Cuentos</li>
			</ul>
			<div class="text-center">
				<a href="#" class="btn btn-r btn-block btn-yellow text-dark font-weight-bold btn-lg pr-5 pl-5 mb-5 mt-5">Comprar</a>
			</div>
		</div>
		<div class="col-lg-4 col-md-4 card-plan-middle pt-5">
			<p class="text-yellow text-center font-weight-bold display-6">6 MESES</p>
			<p class="text-center text-white"><span class="pt-2 display-6">US$ </span><span class="display-4 font-weight-bold pt-2">15.99</span></p>
			<p class="text-center text-white">15% Desc.</p>

			<ul class="list-unstyled pt-5 pr-3 pl-3 mb-4">
				<li class="pt-3 pb-3 border-top border-white text-white"><i class="fas fa-check-circle pr-5 display-6 border-white"></i> Lecciones</li>
				<li class="pt-3 pb-3 border-top border-white text-white"><i class="fas fa-check-circle pr-5 display-6"></i> Canciones</li>
				<li class="pt-3 pb-3 border-top border-bottom border-white text-white"><i class="fas fa-check-circle pr-5 display-6"></i> Cuentos</li>
			</ul>
			<div class="text-center">
				<a href="#" class="btn btn-r btn-block btn-yellow text-dark font-weight-bold btn-lg pr-5 pl-5 mb-5 mt-5">Comprar</a>
			</div>
		</div>
		<div class="col-lg-4 col-md-4 card-plans pt-5 pr-3 pl-3">
			<p class="text-info font-weight-bold title-plans text-center">ANUAL</p>
			<p class="text-center"><span class="pt-2">US$ </span><span class="display-5 font-weight-bold pt-2">2.99</span></p>

			<ul class="list-unstyled pt-5 pr-3 pl-3 mb-4">
				<li class="pt-3 pb-3 border-top border-info text-info"><i class="fas fa-check-circle pr-5 display-6 border-info"></i> Lecciones</li>
				<li class="pt-3 pb-3 border-top border-info text-info"><i class="fas fa-check-circle pr-5 display-6"></i> Canciones</li>
				<li class="pt-3 pb-3 border-top border-bottom border-info text-info"><i class="fas fa-check-circle pr-5 display-6"></i> Cuentos</li>
			</ul>
			<div class="text-center">
				<a href="#" class="btn btn-r btn-block btn-yellow text-dark font-weight-bold btn-lg pr-5 pl-5 mb-5 mt-5">Comprar</a>
			</div>
		</div>
	</div>
</div>



  <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="iniciarSesionModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      
      <div class="modal-body">
        <div class="row mt-5 pt-5">
          <form class="form-signin col-lg-12 pl-5 pr-5" action="<?php echo base_url('auth/login') ?>" method="post">
            <div class="text-center mb-4">
              <h1 class="h3 mb-3 font-weight-normal">Iniciar sesion</h1>
            </div>

            <div class="mb-3 form-label-group">
              <input type="email" id="user" name="user" class="form-control text-center" placeholder="Usuario" required autofocus>
            </div>

            <div class="mb-3 form-label-group">
              <input type="password" name="pass" id="pass" class="form-control text-center" placeholder="Contraseña" required>
            </div>
            
            <p>¿Haz olvidado la contraseña? <a href="">Click aqui</a></p>

            <button class="btn btn-lg btn-primary btn-block" type="submit">Iniciar sesión</button>
            <hr>
            <div class="row mt-3">
              <div class="col-lg-6">
                <a href="" class="btn btn-primary btn-block"><i class="fab fa-facebook-square pr-1"></i> Facebook</a>
              </div>
              <div class="col-lg-6">
                <a href="" class="btn btn-danger btn-block">GMAIL</a>
              </div>
            </div>
          </form>
        </div>    
      </div>
      
    </div>
  </div>
</div>
<footer class="text-white pt-5" id="footer">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <p class=" display-6">Contact</p>
        <p>info@yourcompany.com</p>
        <p>11-000-000</p>
      </div>
      <div class="col-lg-4 text-center">
        <i class="fab fa-facebook-square p-3 display-5"></i>
        <i class="fab fa-twitter-square p-3 display-5"></i>
        <i class="fab fa-instagram p-3 display-5"></i>

        <p>© 2018 - emet. All right reserverd</p>
      </div>
      <div class="col-lg-4 text-center p-5">
        <img src="<?php echo base_url('assets/images/emet-logo-ft.png') ?>" width='50%'>
      </div>
    </div>
  </div>
</footer>

	<!-- JAVASCRIPT -->
	<script src="<?php echo base_url('assets/js/jquery-3.3.1.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
	
</body>
</html>