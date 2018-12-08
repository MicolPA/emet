<div class="container-fluid pr-5 pl-5 mt-5">
	<form action="">
		<div class="row align-items-center pt-5" id="ParentsProfile">
			<div class="col-lg-4 col-md-4 pr-5 imgRegister">
				<img src="<?php echo base_url('assets/images/parents.png') ?>" width='100%'>
			</div>
			<div class="col-lg-8 col-md-12 col-ms-12">
				  <div class="form-group input-group-lg">
				    <label class="text-dblue font-weight-bold">Nombre</label>
				    <input type="text" class="form-control" placeholder="Ingresar nombre del tutor" required>
				  </div>
				  <div class="form-group input-group-lg">
				    <label class="text-dblue font-weight-bold">Apellido</label>
				    <input type="text" class="form-control" placeholder="Ingresar apellido del tutor" required>
				  </div>
				  <div class="form-group input-group-lg">
				    <label class="text-dblue font-weight-bold">Fecha de nacimiento</label>
				    <input type="date" class="form-control" required>
				  </div>
			</div>
	</div>
	<a href="#" class="btn btn-light-blue text-white btn-block mt-5" id="ShowBabyProfile">Continuar</a>
	<div class="row align-items-center d-none pt-3" id="BabyProfile">
		<div class="col-lg-4 col-md-4 pr-5 imgRegister">
			<img src="<?php echo base_url('assets/images/baby.png') ?>" width='100%'>
		</div>
		<div class="col-lg-8 col-md-12">
		  <div class="form-group input-group-lg">
		    <label class="text-dblue font-weight-bold" for="formGroupExampleInput">Nombre</label>
		    <input type="text" class="form-control" placeholder="Ingresar nombre del bebé" required>
		  </div>
		  <div class="form-group input-group-lg">
		    <label class="text-dblue font-weight-bold" for="formGroupExampleInput">Fecha de nacimiento</label>
		    <input type="date" class="form-control" max='<?php echo date('Y-m-d');?>' required>
		  </div>
		  <div class="form-group input-group-lg">
		    <label class="text-dblue font-weight-bold" for="formGroupExampleInput">Peso</label>
		    <input type="number" class="form-control" placeholder="Ingresar peso del bebé" required>
		  </div>
		  <div class="form-group input-group-lg">
		    <label class="text-dblue font-weight-bold" for="formGroupExampleInput">Estatura</label>
		    <input type="number" class="form-control" placeholder="Ingresar estatura del bebé" required>
		  </div>
		  <div class="form-group input-group-lg">
		    <label class="text-dblue font-weight-bold" for="formGroupExampleInput">Semana de gestación</label>
		    <input type="number" class="form-control" placeholder="Ingresar en cual semana de gestación nació el bebé" required>
		  </div>


		</div>
	</div>

	<a href="#" class="btn btn-light-blue text-white btn-block mt-5 d-none" id="saveProfile">Continuar</a>
	</form>
</div>