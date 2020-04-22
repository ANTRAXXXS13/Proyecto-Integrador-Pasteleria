<?php
	include("conexion/conexion.php");
	session_start();
	ob_start();
	if (!isset($_SESSION['id_usuario'])) {
		header("Location: index.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Historial de pedidos</title>
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
	<?php 
		include_once 'header_log.php';
	?>





	<!--Bootstrap js-->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		
		<!-- Smooth Scroll-->
		<script src="js/smooth-scroll.js"></script>

		<!--Ajax Popper-->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

		<!-- js para personalizar -->
		<script src="js/main.js"></script>
</body>
</html>