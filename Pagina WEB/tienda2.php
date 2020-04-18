<?php
	include("conexion/conexion.php");
	// si el usuario trata de escribir manuelmente admin.php 
	// no podra ir porque lo retorna a aesta pagina
	session_start();
	ob_start();
	if (isset($_SESSION['id_usuario'])) {
		include_once 'header_log.php';	
	}else{
		include_once 'header.php';
	}
    $query2=mysqli_query($conexion,"select id, nombre, costo, descripcion from producto;");
  
?>

<?php  
 $connect = mysqli_connect("localhost", "root", "", "loginsystem");  
 $query = "SELECT * FROM tbl_employee ORDER BY id desc";  
 $result = mysqli_query($connect, $query);  
 ?>  


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>FASTCAKES</title>


	<!--Modified Bootstrap-->
	<link rel="stylesheet" href="css/bootstrap.min.css" />

	<!--jquery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script> 

	<!-- Font Awesome CDN -->
	<script src="https://kit.fontawesome.com/839392f4bf.js" crossorigin="anonymous"></script>

	<!--Custom Stylesheet-->
	<link rel="stylesheet" href="css/styles.css">

</head>
<body >

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
			<?php 
				while ($datos = mysqli_fetch_array($query2)) {
			?>
			<div class="col-sm-6 col-md-3">
				
				<div class="card shadow p-0 mb-5 bg-white rounded">
					<img class="card-img-top img-fluid" src="img/foto_<?php echo $datos['id'];?>.jpg" >
					<hr>

					<div class="card-body">
							
						<h4 class="card-title"><?php echo $datos['nombre'];?> </h4>
						<p class="card-text">
                            <button type="button" class="btn btn-info btn-sm float-right" data-toggle="popover" data-placement="left" data-trigger="hover"><small>Descripción:</small></button>
                            
							<br>
							<?php echo $datos['descripcion'];?> 
						</p>
						<br>

						<select class="form-control form-control-sm">
							<option><?php echo $datos['costo'];?></option>
						</select>
						
						<br>

						<div class="text-center">
							<button class="btn btn-primary my-cart-btn" data-id="1" data-name="product 1" data-summary="summary 1" data-price="120" data-quantity="1" data-image="img/01.jpg">Agregar al carrito
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
    include_once 'footer.php';
?>
	


	

	
	
</body>
</html>


