<div class="row mb-3 mt-3">
	<div class="col-lg-12">
		<div class=" text-center mb-3 p-3 display-6 font-weight-bold shadow-blue">
			<span class="">Usuarios</span>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-lg-8 mb-5">
		<a class="non-style-link text-dark" href="<?php echo base_url('admin/user_detail') ?>">
			<div class="mb-3 p-3 div-bottom-red shadow">
				<div class="row align-items-center">
					<div class="col-lg-2">
					<img src="<?php echo base_url('assets/images/user-female.png') ?>" width='100px'>
					</div>
					<div class="col-lg-10">
						<span class="display-6 font-weight-bold ">Laura Ramirez</span> 
						<p class="lead">tucorreo@gmail.com <span class="badge badge-secondary float-right m-0 text-right text-white">Inactivo</span></p>
					</div>
				</div>
			</div>
		</a>
		<a class="non-style-link text-dark" href="">
			<div class="mb-3 p-3 div-bottom-red shadow">
				<div class="row align-items-center">
					<div class="col-lg-2">
					<img src="<?php echo base_url('assets/images/user-female.png') ?>" width='100px'>
					</div>
					<div class="col-lg-10">
						<span class="display-6 font-weight-bold ">Laura Ramirez</span> 
						<p class="lead">tucorreo@gmail.com <span class="badge bg-dark  float-right text-right text-white">Activo</span></p>
					</div>
				</div>
			</div>
		</a>
		<a class="non-style-link text-dark" href="">
			<div class="mb-3 p-3 div-bottom-green shadow">
				<div class="row align-items-center">
					<div class="col-lg-2">
					<img src="<?php echo base_url('assets/images/user-male.png') ?>" width='100px'>
					</div>
					<div class="col-lg-10">
						<span class="display-6 font-weight-bold ">Juan Lopez</span> 
						<p class="lead">tucorreo@gmail.com <span class="badge bg-dark float-right text-right text-white">Activo</span></p>

					</div>
				</div>
			</div>
		</a>

	</div>
	<div class="col-lg-4">
		<div class="mb-3">
			<a class='non-style-link text-left' data-toggle="modal" data-target="#userSearch" href="#">
				<div class="bg-blue p-2 text-white display-6 font-weight-bold pb-1 pt-1">
					<i class="fas fa-search pr-2"></i>Buscar usuario
				</div>
			</a>
		</div>
		<div class="mb-3">
			<a class='non-style-link' href="<?php echo base_url('admin/videos') ?>">
			<div class="bg-pink text-white p-2">
				<span class="display-6 font-weight-bold">Usuarios activos</span> <span class="badge bg-dark m-0 text-right text-white">239</span>
			</div>
			</a>
		</div>
		<div class="mb-3">
			<a class='non-style-link' href="<?php echo base_url('admin/videos') ?>">
			<div class="bg-pink text-white p-2">
				<span class="display-6 font-weight-bold">Usuarios inactivos</span> <span class="badge bg-dark m-0 text-right text-white">98</span>
			</div>
			</a>
		</div>
	</div>

</div>

<!-- Search Modal -->
<div class="modal fade" id=#userSearch" tabindex="-1" role="dialog"  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      
      <div class="modal-body">
         <div class="form-group pt-5">
         	<label class="font-weight-bold display-6 text-blue">Realizar busqueda</label>
		    <input type="email" class="form-control input-blue" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Buscar usuario">
		  </div>
		   <div class="text-right">
	        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-times"></i></button>
	        <button type="button" class="btn bg-blue text-white" data-dismiss="modal"><i class="fas fa-search"></i></button>
	      </div>
      </div>
     
    </div>
  </div>
</div>