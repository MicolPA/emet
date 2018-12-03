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
   
    <div class="navbar navbar-dark fixed-top bg-dark box-shadow">
        <div class="container d-flex justify-content-between">
             <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
             <i class="fas fa-bars display-5 text-white"></i>
            </button>
            <a class="pb-1"><img src="<?php echo base_url('assets/images/emet-logo-blanco.png') ?>" width='120px'></a>
            <div class="dropdown show">
              <a class="non-style-link text-white dropdown-toggle" href="#" role="button" id="profileDropdown" data-toggle="dropdown" >
                <span class="display-6"><i class="fas fa-user-circle pr-1"></i> Juana</span>
              </a>

              <div class="dropdown-menu" aria-labelledby="profileDropdown">
                <a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt pr-1"></i> Cerrar sesión</a>
              </div>
            </div>
            

        </div>
      </div>
   
      
    </header>

  <!-- <div class="left fixed">
          <div class="item">
              <i class="fas fa-fw fa-bars"></i>
          </div>
          <div class="item active">
              <i class="fas fa-fw fa-map-marked-alt"></i> Map
          </div>
          <div class="item">
              <i class="fas fa-fw fa-columns"></i> Split
          </div>
          <div class="item">
              <i class="fas fa-fw fa-th"></i> Grid
          </div>
          <div class="item">
              <i class="fas fa-fw fa-user-circle"></i> Dash
          </div>
  </div> --> 

	<div class="container mt-5 pt-5">
    <?php $this->load->view($view) ?> 
  </div>




  <footer class="bg-dark text-white text-center pt-5">
    EMET
  </footer>

	<!-- JAVASCRIPT -->
	<script src="<?php echo base_url('assets/js/jquery-3.3.1.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/js/functions.js') ?>"></script>
	<script src="<?php echo base_url('assets/js/tagsinput.js') ?>"></script>
	
</body>
</html>