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
    <div class="d-flex flex-column flex-md-row align-items-center pt-3 pb-3 pl-5 pr-5 px-md-4 bg-red box-shadow">

      <a class="mr-md-auto font-weight-normal pb-2"><img src="<?php echo base_url('assets/images/emet-logo-blanco.png') ?>" width='120px'></a>

      <a class="navbar-toggler text-white" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation"><i class="fas fa-bars display-5 text-white"></i></a>

    </div>

    </header>

   

	<?php $this->load->view($view) ?>



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
<footer class="footer text-white pt-5">
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