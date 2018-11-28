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
   
    <div class="navbar navbar-dark bg-red box-shadow">
        <div class="container d-flex justify-content-between">

           <?php if (!isset($this->session->creatingProfile)): ?>
             <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
             <i class="fas fa-bars display-5 text-white"></i>
            </button>
            <a class="pb-1"><img src="<?php echo base_url('assets/images/emet-logo-blanco.png') ?>" width='120px'></a>

            <span class="text-white display-6"><i class="fas fa-user-circle pr-1"></i> Juana</span>

            <?php else: ?>
              <div class="m-auto col-lg-12 pb-1 pt-3">
                <p class="text-white text-center font-weight-bold display-6">Creando perfil</p>
              </div>
           <?php endif ?>
         
        </div>
      </div>
   
      <div class="collapse bg-dgreen" id="navbarHeader" style="height: 100vh;background: red; width: 20%;">
        <p>hola</p>
      </div>
    </header>

   

	<?php $this->load->view($view) ?>




<?php if (!isset($this->session->creatingProfile)): ?>
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
<?php endif ?>

	<!-- JAVASCRIPT -->
	<script src="<?php echo base_url('assets/js/jquery-3.3.1.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
	
</body>
</html>