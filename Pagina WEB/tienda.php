<<<<<<< HEAD
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


<<<<<<< HEAD
=======
<?php 
    include_once 'header.php';
?>

>>>>>>> c241f21812236ff3e4deb7f13ba2b1b20965940a
=======


>>>>>>> cecc4a0... Primera prueba de tienda dinamica y agregar imagenes
<html>
<body >

	<div class="container">

		<!--<div class="page-header">
				<h1>Products
				<div style="float: right; cursor: pointer;">
					<span class="glyphicon glyphicon-shopping-cart my-cart-icon"><span class="badge badge-notify my-cart-badge"></span></span>
				</div>
				</h1>
			</div>

			<button type="addNewProduct" name="addNewProduct" id="addNewProduct">Add New Product</button> -->


			<!-- HAY QYE CAMBIAR LOS DATOS DE CADA UNO DE LOS PRODUCTOS -->
			<!-- 
				<button class="btn btn-primary my-cart-btn" data-id="1" data-name="product 1" data-summary="summary 1" data-price="120" data-quantity="1" data-image="img/02.jpg">
					Agregar al carrito
				</button> -->
				
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
					while ($datos = mysqli_fetch_array($query2)) {?>
			<div class="col-sm-6 col-md-3">
				
						<div class="card shadow p-0 mb-5 bg-white rounded">
							<img class="card-img-top img-fluid" src="img/foto_<?php echo $datos['id'];?>.jpg" >
							<hr>

							<div class="card-body">
									
								<h4 class="card-title"><?php echo $datos['nombre'];?> </h4>
								<p class="card-text">
									<small>Descripción:</small>
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
	
</body>
</html>


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


