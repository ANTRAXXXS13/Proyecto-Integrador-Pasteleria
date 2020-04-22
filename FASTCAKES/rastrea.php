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
	<!--Custom Stylesheet-->
	<link rel="stylesheet" href="css/styles.css">

	<!--jquery-->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

	<!--Datepicker Stylesheet-->
	<link rel="stylesheet" href="css/bootstrap-datepicker.min.css">


	<!-- Font Awesome CDN -->
	<script src="https://kit.fontawesome.com/839392f4bf.js" crossorigin="anonymous"></script>

	

</head>

<body>

    <?php 
        include_once 'header.php';
    ?>

<div class="container ">
<div class="jumbotron m-5 p-3">
	
<h4 class="display-4 m-0 text-info text-center">RASTREA TU PEDIDO</h4>
<hr>
<div class="row">
	<div class="col-md ">
	<h3 class="my-2 text-info text-center">ORDEN NO.: </h3>
	<input type="text" placeholder="#Orden">
	</div>
</div>

<div class="progress">
  <div class="circle done">
    <span class="label">1</span>
    <span class="title">0%</span>
  </div>
  <span class="bar bar-half done"></span>
  <span class="bar bar-half"></span>
  <div class="circle">
    <span class="label">2</span>
    <span class="title">25%</span>
  </div>
  <span class="bar"></span>
  <div class="circle">
    <span class="label">3</span>
    <span class="title">50%</span>
  </div>
  <span class="bar"></span>
  <div class="circle">
    <span class="label">4</span>
    <span class="title">75%</span>
  </div>
  <span class="bar"></span>
  <div class="circle">
    <span class="label">5</span>
    <span class="title">100%</span>
  </div>
</div>






<!--aqui debe venir ya sea el buscador o bien la orden a rastrear-->

<ol class="track-progress m-0 px-5 bg-primary m-5 rounded pill">
  <li class="done">
    <em>1</em>
    <span>Check You Eligibility</span>
  </li>
  <li class="done">
    <em>2</em>
    <span>Device Information</span>
  </li>
  <li class="todo">
    <em>3</em>
    <span>Your Information</span>
  </li>
  <li class="todo">
    <em>4</em>
    <span>Registration Summary</span>
  </li>
</ol>	
</div>
</div>
    <?php 
        include_once 'footer.php';
    ?>
	

</body>
</html>
