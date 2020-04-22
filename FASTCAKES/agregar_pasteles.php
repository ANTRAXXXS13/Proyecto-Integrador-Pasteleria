<?php 
		    include("conexion/conexion.php");
			$query=mysqli_query($conexion,"select id, nombre from forma;");
			$query2=mysqli_query($conexion,"select id, nombre from tamaño;");
			$query3=mysqli_query($conexion,"select id, nombre from categoria_prod;");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Prueba de insercion en producto</title>
	<meta charset="utf-8">

		<!--Modified Bootstrap-->
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<!-- Font Awesome CDN -->
		<script src="https://kit.fontawesome.com/839392f4bf.js" crossorigin="anonymous"></script>
		<!--Custom Stylesheet-->
		 <link rel="stylesheet" href="css/custom.css" /> 
		 <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		 <link rel="stylesheet" type="text/css" href="css/utch.css">
</head>
<body>
		<section class="scroll" id="tienda">
		<?php 
			include_once 'header.php'
		?>
	</section>
	<br>
	<br>
	<br>

	<form  action="conexion/insertar_pastel.php" method="POST"  enctype="multipart/form-data" >
			<div class="tab-pane" role="tabpanel" >
				<div class="form-group col-md">
					<div class="form-row">						
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
									<div class="form-group col-md-6">
										<select class="form-control form-control-sm" id="forma" name="forma" placeholder="forma">
											<option>FORMA</option>
											<?php												
												while ($datos = mysqli_fetch_array($query)) {?>	
													 <option  value="<?php echo $datos['id'];?>" > <?php echo $datos['nombre'];?> </option>
											<?php } ?>
										</select>
									</div>
									<!--Tamaño -->
									<div class="form-group col-md-6">
										<select class="form-control form-control-sm"  id="tamaño" name="tamaño" placeholder="hola">
											<option>TAMAÑO</option>
											 
												<?php while ($datos = mysqli_fetch_array($query2)) {?>	
													<option  value="<?php echo $datos['id'];?>"> <?php echo $datos['nombre'];?> </option>
											<?php } ?>		
										</select>
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col-md-12">
										<select class="form-control form-control-sm" id="categoria" name="categoria" placeholder="hola">
												<option>CATEGORIA</option>
												<?php while ($datos = mysqli_fetch_array($query3)) {?>	
												<option  value="<?php echo $datos['id'];?>"> <?php echo $datos['nombre'];?> </option>
												<?php } ?>		
										</select>
									</div>
								</div>

								<div class="form-row">
									<div class="form-group col-md-12">
										<input type="text" class="form-control" id="descripcion" name="descripcion"  placeholder="Descipcion" required>
									</div>
								</div>
							
								<div class="form-row">
									<div class="form-group col-md-6">
										<input type="text" class="form-control" id="nom_img" name="nom_img"  placeholder="Nombre para la imágen" required>
									</div>
									<div class="form-group col-md-6">
										<input type="file" class="form-control" id="imagen" name="imagen" accept="image/jpeg">
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col-md-12">
										<input type="text" class="form-control" id="costo" name="costo"  placeholder="Costo" required>
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col-md-5"></div>
									<!-- Boton de actualizar -->
									<div class="form-group col-md-3">							
									<button class="btn btn-success" name="agregar"> Agregar pastel </button>
									</div>	
									<div class="form-group col-md-4"></div>
								</div>	

							</div>			
							<hr>				
						</div>
	

					</div>
				</div>
		</form>			










<?php 
    include_once 'footer.php';
?>
	


	<!--Ajax Popper-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

	<!--Bootstrap js-->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	
	<!--Datepicker-->
	<script src="js/bootstrap-datepicker.min.js"> </script> 
	
	<script src="js/locales/bootstrap-datepicker.es.min.js"></script>
	
	<!-- js para personalizar -->
	<script src="js/main.js"></script>
</body>
</html>