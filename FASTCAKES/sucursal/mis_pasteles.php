
<?php 
	include("../conexion/conexion.php");
	session_start();
	ob_start();
	if (!isset($_SESSION['id_sucursal'])) {
		header("Location: ../index.php");
	}else{
		$idsuc = $_SESSION['id_sucursal'];
		$query2=mysqli_query($conexion," call mis_pasteles('$idsuc');");
	}	
?>



<html>
<head>
		<title>Mis Pateles</title>
		<meta charset="utf-8">

		<!--Modified Bootstrap-->
		<link rel="stylesheet" href="../css/bootstrap.min.css" />
		<!-- Font Awesome CDN -->
		<script src="https://kit.fontawesome.com/839392f4bf.js" crossorigin="anonymous"></script>
		<!--Custom Stylesheet-->
		 <link rel="stylesheet" href="../css/custom.css" /> 
		 <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	
	</head>
<body >
	<?php 
	    include("head_suc.php");
	?>
	<br>
	<br>
	<br>

	<div class="container">
				
		<div class="row m-5">
			<div class="col-sm-12  text-center">
				<a href="#todos" class="btn btn-link btn-lg px-4 py-1 mx-5 list-inline-item active " role="button" aria-pressed="true">Todos</a>
				<a href="#express" class="btn btn-link btn-lg px-4 py-1 mx-5 list-inline-item" role="button">EXPRESS</a></li>
				<a href="#desc" class="btn btn-link btn-lg px-4 py-1 mx-5 list-inline-item" role="button" aria-pressed="true">Descuentos</a>
				<hr>
			</div>
			
		</div>
		<div class="row">
			<?php while ($datos = mysqli_fetch_array($query2)) {?>
			<div class="col-sm-6 col-md-3">
				
						<div class="card shadow p-0 mb-5 bg-white rounded">
							<img class="card-img-top img-fluid" src="../img/foto_<?php echo $datos['id'];?>.jpg" >
							<hr>

							<div class="card-body">
									
								<h4 class="card-title"><?php echo $datos['NombreProd'];?> </h4>
								<p class="card-text">
									<small>Descripción:</small>
									<br>
									<?php /*echo $datos['descripcion']*/;?> 
								</p>
								<br>

								<select class="form-control form-control-sm">
									<option><?php echo $datos['costo'];?></option>
								</select>
								
								<br>

								<div class="text-center">
									<button class="btn btn-primary my-cart-btn" data-id="1" data-name="product 1" data-summary="summary 1" data-price="120" data-quantity="1" data-image="../img/01.jpg">Modificar pastel
									</button>
								</div>
							</div>
						</div>					
				<!-- /.card -->
			</div>
			<?php } ?>	
			



		</div>
		<!-- /.row -->


	</div>
	<!-- /.container -->


<?php 
    include_once 'footer_suc.php';
?>
	

	<?php 
    include_once '../script_files.php';
?>
</body>
</html>


