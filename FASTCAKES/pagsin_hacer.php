<?php]

	include("conexion/conexion.php");
	// si no esta logeado lo manda a la pagina index
	session_start();
	if (!isset($_SESSION['id_usuario'])) {
		header("Location: index.php");
	}

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Actualizar Datos del Usuario</title>
		<meta charset="utf-8">

		<!--Modified Bootstrap-->
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<!-- Font Awesome CDN -->
		<script src="https://kit.fontawesome.com/839392f4bf.js" crossorigin="anonymous"></script>
		<!--Custom Stylesheet-->
		 <link rel="stylesheet" href="css/custom.css" /> 
		 <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	</head>
	<body>
<!-- ========================================================================================================-->
<!-- ============================= aqui comienza el navegador ===============================================-->
<!-- ========================================================================================================-->
		<?php 
		    include_once 'header.php';
		?>

<!-- ========================================================================================================-->
<!-- ============================= aqui termina el navegador ================================================-->
		<div class="form-row">

			<!-- Numero de tarjeta -->
			<div class="form-group col-md-10">							
				<img class="img-thumbnail" src="img/pag_sin.png">
			</div>	

		</div>

	</body>
</html>