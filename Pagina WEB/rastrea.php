<?php
include("conexion/conexion.php");
// si el usuario trata de escribir manualmente admin.php 
// no podra ir porque lo retorna a esta pagina
session_start();
ob_start();
if (isset($_SESSION['id_usuario'])) {
	header("Location: actualizar_usuario.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>FASTCAKES</title>

	<!-- Bootstrap CDN-->

	<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">-->
	
	

	<!--Modified Bootstrap-->
	<link rel="stylesheet" href="css/bootstrap.min.css" />

	<!--jquery-->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

	<!--Datepicker Stylesheet-->
	<link rel="stylesheet" href="css/bootstrap-datepicker.min.css">


	<!-- Font Awesome CDN -->
	<script src="https://kit.fontawesome.com/839392f4bf.js" crossorigin="anonymous"></script>

	<!--Custom Stylesheet-->
	<link rel="stylesheet" href="css/styles.css">

</head>

<body>

    <?php 
        include_once 'header.php';
    ?>

    <div class="container">
        <h1 class="display-1 text-primary text-center">RASTREA TU PEDIDO</h1>
        <hr>
    </div>

    <?php 
        include_once 'footer.php';
    ?>
	

	<!--Bootstrap js-->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	
	<!-- Smooth Scroll-->
	<script src="js/smooth-scroll.js"></script>

	<!-- Smooth Scroll Polyfills-->
	<script src="js/smooth-scroll.polyfills.min.js"></script>

	<!--Ajax Popper-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

	<!-- js para personalizar -->
	<script src="js/main.js"></script>

    <script>
	var scroll = new SmoothScroll('a[href*="#"]');
	</script>

</body>
</html>
