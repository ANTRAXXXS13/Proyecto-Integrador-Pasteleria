<?php 
		    include("../conexion/conexion.php");
			$query=mysqli_query($conexion,"select id, nombre from forma;");
			$query2=mysqli_query($conexion,"select id, nombre from tamaño;");
			$query3=mysqli_query($conexion,"select id, nombre from categoria_prod;");
			$query4=mysqli_query($conexion,"select id, nombre from ingrediente where id_categoria_ingre = 1;");
			$query5=mysqli_query($conexion,"select id, nombre from ingrediente where id_categoria_ingre = 2;");
			$query6=mysqli_query($conexion,"select id, nombre from ingrediente where id_categoria_ingre = 3;");
			$query7=mysqli_query($conexion,"select id, nombre from ingrediente where id_categoria_ingre = 4;");
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Agregar pasteles</title>
		<meta charset="utf-8">

		<!--Modified Bootstrap-->
		<link rel="stylesheet" href=".//css/bootstrap.min.css" />
		<!-- Font Awesome CDN -->
		<script src="https://kit.fontawesome.com/839392f4bf.js" crossorigin="anonymous"></script>
		<!--Custom Stylesheet-->
		 <link rel="stylesheet" href="../css/custom.css" /> 
		 <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
		 
		 <link rel="stylesheet" type="text/css" href="../css/utch.css">
	</head>
	<body>
<!-- ========================================================================================================-->
<!-- ============================= aqui comienza el navegador ===============================================-->
<!-- ========================================================================================================-->
		<?php 
		    include("head_suc.php");
		?>
<!-- ========================================================================================================-->
<!-- ============================= aqui termina el navegador ================================================-->
<!-- ========================================================================================================-->
		<br>
		<br>
		<br>

<!-- ========================================================================================================-->
<!-- ============================= aqui comieza el formulario ===============================================-->
<!-- ========================================================================================================-->
		<form method="POST" action="Actusu_con.php">
			<div class="tab-pane" role="tabpanel" >
				<div class="form-group col-md">
	<!--**************************************************************************************************** -->
	<!--*****************Aqui comienza el bloque 1 ********************************************************* -->
	<!--**************************************************************************************************** -->
					<div class="form-row">
		<!-- ========================================================================================================-->
		<!-- ============================= aqui comienza el bloque de datos del pastel ==============================-->
		<!-- ========================================================================================================-->

					<!-- Bloque 1.1 Izquierdo-->	
						<div class="form-group col-md-1">
									</div>
						<div class="form-group col-md-4">					
							<h6 class="card-title text-left text-info mb-1 mt-2"><b>DATOS GENERALES DEL PASTEL</b></h6>				
							<hr>		
							<div class="needs-validation" novalidate>
								<div class="form-row">
									<div class="form-group col-md-12">
										<input type="text" class="form-control" id="name" name="name"  placeholder="Nombre" required>
									</div>
								</div>
								<div class="form-row">
									<!-- Forma -->
									<div class="form-group col-md-4">
										<select class="form-control form-control-sm" id="forma" name="forma">
											<option>FORMA</option>
											<?php												
												while ($datos = mysqli_fetch_array($query)) {?>	
													 <option  value="<?php echo $datos['id'];?>" > <?php echo $datos['nombre'];?> </option>
											<?php } ?>
										</select>
									</div>
									<div class="form-group col-md-4">
										<select class="form-control form-control-sm"  id="tamaño" name="tamaño">
											<option>TAMAÑO</option>
											 
												<?php while ($datos = mysqli_fetch_array($query2)) {?>	
													<option  value="<?php echo $datos['id'];?>"> <?php echo $datos['nombre'];?> </option>
											<?php } ?>		
										</select>
									</div>
									<div class="form-group col-md-4">
										<select class="form-control form-control-sm" id="categoria" name="categoria">
												<option>CATEGORIA</option>
												<?php while ($datos = mysqli_fetch_array($query3)) {?>	
												<option  value="<?php echo $datos['id'];?>"> <?php echo $datos['nombre'];?> </option>
												<?php } ?>		
										</select>
									</div>
								</div>


								<div class="form-row">
									<!-- Descripcion -->
									<div class="form-group col-md-12">
										<input type="text" class="form-control" id="descripcion" name="descripcion"  placeholder="Descripción" required>
										<div class="invalid-feedback">
											*Es necesario completar este campo
										</div>
									</div>
						
								</div>

							
								<div class="form-row">
									<div class="form-group col-md-12">
										<input type="text" class="form-control" id="costo" name="costo"  placeholder="Costo" required>
									</div>
								</div>
							
							</div>			
							<hr>				
						</div>
		<!-- ========================================================================================================-->
		<!-- ============================= aqui termina el bloque de datos personales ===============================-->
		<!-- ========================================================================================================-->

		<!-- ========================================================================================================-->
		<!-- ============================= aqui comienza el bloque de topping =======================================-->
		<!-- ========================================================================================================-->
						<div class="form-group col-md-1">
									</div>
						<div class="form-group col-md-4">
							<hr>
							<h5><center><b> Topping</b></center></h5>
							<hr>
							<div class="form-row">
								<?php while ($dato = mysqli_fetch_array($query7)) {?>	
									<div class="form-group col-md-3">										
											<input type="checkbox"  value="<?php echo $dato['id'];?>"> <label><b> <?php echo $dato['nombre'];?> </b></label>
									</div>
								<?php } ?>		
							</div>
							
						
							<hr>
						</div>
		<!-- ========================================================================================================-->
		<!-- ============================= aqui termina el bloque de topping ========================================-->
		<!-- ========================================================================================================-->

					</div>
	<!--**************************************************************************************************** -->
	<!--*****************Aqui termina el bloque 1 ********************************************************** -->
	<!--**************************************************************************************************** -->

	<!--**************************************************************************************************** -->
	<!--*****************Aqui comienza el bloque 2 ********************************************************** -->
	<!--**************************************************************************************************** -->

					<div class="form-row">
		<!-- ========================================================================================================-->
		<!-- ============================= aqui comieza el bloque de ingredientes ===================================-->
		<!-- ========================================================================================================-->	
						<div class="form-group col-md-1">
									</div>
						<div class="form-group col-md-4">
							<h6 class="card-title text-left text-info mb-1 mt-3"><b>INGREDIENTES</b></h6>
							<hr>
							<hr>
						<!-- Aqui inicia Masa-->
							<h5><center><b> Masa(Sabor)</b></center></h5>
							<hr>
							<div class="form-row">

								<?php while ($dato = mysqli_fetch_array($query4)) {?>	
									<div class="form-group col-md-4">										
											<input type="checkbox"  value="<?php echo $dato['id'];?>"> <label><b> <?php echo $dato['nombre'];?> </b></label>
									</div>
								<?php } ?>	
							</div>
						<!-- Aqui termina Masa-->
							<hr>
						<!-- Aqui inicia Relleno-->
							<h5><center><b> Relleno</b></center></h5>
							<hr>
							<div class="form-row">
								<?php while ($dato = mysqli_fetch_array($query5)) {?>	
									<div class="form-group col-md-3">										
											<input type="checkbox"  value="<?php echo $dato['id'];?>"><label><b> <?php echo $dato['nombre'];?> </b></label>
									</div>
								<?php } ?>	
							</div>
						<!-- Aqui termina Relleno-->
							<hr>
						<!-- Aqui inicia Betun-->
							<h5><center><b> Betún </b></center></h5>
							<hr>
							<div class="form-row">

								<?php while ($dato = mysqli_fetch_array($query6)) {?>	
									<div class="form-group col-md-3">										
											<input type="checkbox"  value="<?php echo $dato['id'];?>"> <label><b> <?php echo $dato['nombre'];?> </b></label>
									</div>
								<?php } ?>
							</div>
						<!-- Aqui termina Betun-->
	
						</div>
		<!-- ========================================================================================================-->
		<!-- ============================= aqui termina el bloque de direccion ======================================-->
		<!-- ========================================================================================================-->



		<!-- ========================================================================================================-->
		<!-- ============================= aqui comieza el bloque de imagen =========================================-->
		<!-- ========================================================================================================-->	
						<div class="form-group col-md-1">
									</div>
						<div class="form-group col-md-4">
							<h6 class="card-title text-left text-info mb-1 mt-3"><b>IMAGEN</b></h6>
							<hr>			
							
							
								<div class="form-row">
									<div class="form-group col-md-6">
										<input type="text" class="form-control" id="nom_img" name="nom_img"  placeholder="Nombre para la imágen" required>
									</div>
									<div class="form-group col-md-6">
										<input type="file" class="form-control" id="imagen" name="imagen" accept="image/jpeg">
									</div>
								</div>
					    	<hr>
					    		<div class="form-row">
					    			<div class="form-group col-md-3"></div>
									<div class="form-group col-md-4">
										<!-- Boton de cancelar -->
										<button class="btn btn-danger" name="cancelar"> Cancelar </button>
									</div>
									<div class="form-group col-md-3">	
									<!-- Boton de cancelar -->						
										<button class="btn btn-success" name="agregar"> Agregar pastel </button>
									</div>	
									
								</div>	
							
								
								
						
	
						</div>
					
		<!-- ========================================================================================================-->
		<!-- ============================= aqui termina el bloque de imagen =========================================-->
		<!-- ========================================================================================================-->

					</div>
	<!--**************************************************************************************************** -->
	<!--*****************Aqui termina el bloque 2 ********************************************************** -->
	<!--**************************************************************************************************** -->

				</div>	

			</div>
		</form>		
<!-- ========================================================================================================-->
<!-- ============================= aqui termina el formulario ===============================================-->
<!-- ========================================================================================================-->
		



	</body>
</html>