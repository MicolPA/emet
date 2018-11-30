<div class="row mb-3 mt-5">
	<div class="col-lg-12">
		<div class=" text-center mb-3 p-3 display-6 font-weight-bold shadow">
			<span class="">Videos publicados</span>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-lg-3">
		<a class='non-style-link' href="<?php echo base_url('admin/nuevo_video') ?>">
			<div class="bg-pink text-center text-white display-6 font-weight-bold pb-1 pt-1">
				<i class="fas fa-plus pr-2"></i>Nuevo video
			</div>
		</a>
	</div>
	<div class="col-lg-3">
		<a class='non-style-link' data-toggle="modal" data-target="#videoSearch" href="#">
			<div class="bg-blue text-center text-white display-6 font-weight-bold pb-1 pt-1">
				<i class="fas fa-search pr-2"></i>Buscar video
			</div>
		</a>
	</div>
</div>

<div class="row">
	<div class="col-lg-8 pt-5">
		<div class="col-lg-12 mb-5">
			<div class="mb-3 p-3 div-bottom-red shadow">
				<span class="display-6 font-weight-bold ">Aprendiendo a estimular</span> 
				<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa consectetur voluptate vel corrupti, asperiores in.</p>
				<div class="text-right">
					<a class="btn btn-r bg-blue" href="" title="Ver"><i class="fas fa-eye text-white"></i></a>
					<a class="btn btn-r bg-green" href="" title="Editar"><i class="fas fa-pen text-white"></i></a>
					<a class="btn btn-r bg-red" href="" title="Editar"><i class="fas fa-trash text-white"></i></a>
				</div>
			</div>
		</div>
		<div class="col-lg-12 mb-5">
			<div class="mb-3 p-3 div-bottom-green shadow">
				<span class="display-6 font-weight-bold ">Aprendiendo a estimular</span> 
				<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa consectetur voluptate vel corrupti, asperiores in.</p>
				<div class="text-right">
					<a class="btn btn-r bg-blue" href="" title="Ver"><i class="fas fa-eye text-white"></i></a>
					<a class="btn btn-r bg-green" href="" title="Editar"><i class="fas fa-pen text-white"></i></a>
					<a class="btn btn-r bg-red" href="" title="Editar"><i class="fas fa-trash text-white"></i></a>
				</div>
			</div>
		</div>
		<div class="col-lg-12 mb-5">
			<div class="mb-3 p-3 div-bottom-blue shadow">
				<span class="display-6 font-weight-bold ">Aprendiendo a estimular</span> 
				<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa consectetur voluptate vel corrupti, asperiores in.</p>
				<div class="text-right">
					<a class="btn btn-r bg-blue" href="" title="Ver"><i class="fas fa-eye text-white"></i></a>
					<a class="btn btn-r bg-green" href="" title="Editar"><i class="fas fa-pen text-white"></i></a>
					<a class="btn btn-r bg-red" href="" title="Editar"><i class="fas fa-trash text-white"></i></a>
				</div>
			</div>
		</div>


		
	</div>


	<div class="col-lg-4 pt-5">
		<div class="col-lg-12">
			<div class="mb-3 pt-3 pb-3 pr-3 display-6 font-weight-bold div-bottom-blue">
				Socio afectiva <span class="badge bg-blue text-white">45</span>
			</div>
		</div>
		<div class="col-lg-12">
			<div class="mb-3 pt-3 pb-3 pr-3 display-6 font-weight-bold div-bottom-pink">
				Cognitiva <span class="badge bg-pink text-white">27</span>
			</div>
		</div>
		<div class="col-lg-12">
			<div class="mb-3 pt-3 pb-3 pr-3 display-6 font-weight-bold div-bottom-green">
				Lenguaje <p class="badge bg-green m-0 text-right text-white">9</p>
			</div>
		</div>
		<div class="col-lg-12">
			<div class="mb-3 pt-3 pb-3 pr-3 display-6 font-weight-bold div-bottom-red">
				Motora <p class="badge bg-red m-0 text-right text-white">239</p>
			</div>
		</div>
		</div>
	
</div>






<!-- Search Modal -->
<div class="modal fade" id="videoSearch" tabindex="-1" role="dialog"  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      
      <div class="modal-body">
         <div class="form-group pt-5">
         	<label class="font-weight-bold display-6 text-blue">Realizar busqueda</label>
		    <input type="email" class="form-control input-blue" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Buscar video">
		  </div>
		   <div class="text-right">
	        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-times"></i></button>
	        <button type="button" class="btn bg-blue text-white" data-dismiss="modal"><i class="fas fa-search"></i></button>
	      </div>
      </div>
     
    </div>
  </div>
</div>