<?php
	include("../conexion/conexion.php");
	session_start();
	ob_start();
	if (!isset($_SESSION['id_sucursal'])) {
		header("Location: index.php");
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Actualizar Contraseña de la sucursal</title>
	<meta charset="utf-8">

	<!--Modified Bootstrap-->
	<link rel="stylesheet" href="../css/bootstrap.min.css" />
	<!-- Font Awesome CDN -->
	<script src="https://kit.fontawesome.com/839392f4bf.js" crossorigin="anonymous"></script>
	<!--Custom Stylesheet-->
	<link rel="stylesheet" href="../css/custom.css" /> 
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
</head>
<body>
	<?php 
	    include("head_suc.php");
	?>
	<br>
	<br>
	<br>
	<br>
	<form method="POST" action="../conexion/act_suc.php" positio>
		<div class="tab-pane" role="tabpanel" >
			<div class="form-group col-md">
				<div class="form-row">
					<div class="form-group col-md-3"></div>
					<div class="form-group col-md-6">
						<h6 class="card-title text-left text-info mb-1 mt-3"><b>CAMBIAR CONTRASEÑA</b></h6>
						<hr>
											
						<!-- Contraseña actual -->
						<div class="form-row">
							<div class="form-group col-md-3"></div>
							<div class="form-group input-group col-md-6">
								<input type="password"  class="form-control" id="contraseña_actual" name="contraseña_actual" placeholder="Contraseña Atual" required>
								<div class="invalid-feedback">*Es necesario completar este campo</div>
							</div>
							<div class="form-group col-md-3"></div>
						</div>

						<!-- Nueva Contraseña -->
						<div class="form-row">
							<div class="form-group col-md-3"></div>
							<div class="form-group col-md-6">					
								<input type="password" class="form-control" id="nueva_contraseña" name="nueva_contraseña" placeholder="Nueva Contraseña" required>
							</div>
							<div class="form-group col-md-3"></div>
						</div>

						<!-- Repetir Contraseña -->
						<div class="form-row">
							<div class="form-group col-md-3"></div>
							<div class="form-group col-md-6">					
								<input type="password" class="form-control" id="repetir_contraseña" name="repetir_contraseña" placeholder="Repetir Contraseña" required>
							</div>
							<div class="form-group col-md-3"></div>
						</div>
						<div class="form-row">
							<div class="form-group col-md-5"></div>
							<!-- Boton de actualizar -->
							<div class="form-group col-md-3">							
								<button class="btn btn-success" name="actualizar2"> Actualizar </button>
							</div>	
							<div class="form-group col-md-4"></div>
						</div>		
						<hr>
					</div>
						<!-- ========================================================================================================-->
						<!-- ============================= aqui termina el bloque de contraseña =====================================-->
						<!-- ========================================================================================================-->
					<div class="form-group col-md-4">
					</div>

				</div>
			</div>	
		</div>
	</form>		
</body>
</html>