<?php 
    include_once 'header.php';
?>

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
			<div class="col-sm-6 col-md-3">
				<div class="card shadow p-0 mb-5 bg-white rounded">
					<!-- set a width on the image otherwise it will expand to full width       -->
					<img class="card-img-top img-fluid" src="img/01.jpg" alt="ejemplo 01">
					<hr>

					<div class="card-body">
						<h4 class="card-title">Pastel de Chocolate</h4>
						<p class="card-text">
							<small>Descripción:</small>
							<br>
							Pastel de chocolate que seguramente sabe delicioso...
						</p>

						<div class="text-right">
								<a href="#" class="btn btn-sm btn-info"> Más Detalles</a>
						</div>
						<br>

						<select class="form-control form-control-sm">
							<option>Chico - $120</option>
							<option>Mediano - $250</option>
							<option>Grande - $350</option>
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
			
			<div class="col-sm-6 col-md-3">
				<div class="card shadow p-0 mb-5 bg-white rounded">
					<!-- set a width on the image otherwise it will expand to full width       -->
					<img class="card-img-top img-fluid" src="img/02.jpg" alt="ejemplo 01">
					<hr>

					<div class="card-body">
						<h4 class="card-title">Pastel de Chocolate</h4>
						<p class="card-text">
							<small>Descripción:</small>
							<br>
							Pastel de chocolate que seguramente sabe delicioso...
						</p>

						<div class="text-right">
								<a href="#" class="btn btn-sm btn-info"> Más Detalles</a>
						</div>
						<br>

						<select class="form-control form-control-sm">
							<option>Chico - $120</option>
							<option>Mediano - $250</option>
							<option>Grande - $350</option>
						</select>
						
						<br>

						<div class="text-center">
							<button class="btn btn-primary my-cart-btn" data-id="1" data-name="product 1" data-summary="summary 1" data-price="120" data-quantity="1" data-image="img/02.jpg">Agregar al carrito
							</button>
						</div>
					</div>
				</div>
				<!-- /.card -->
			</div>


			<div class="col-sm-6 col-md-3">
				<div class="card shadow p-0 mb-5 bg-white rounded">
					<!-- set a width on the image otherwise it will expand to full width       -->
					<img class="card-img-top img-fluid" src="img/03.jpg" alt="ejemplo 01">
					<hr>

					<div class="card-body">
						<h4 class="card-title">Pastel de Chocolate</h4>
						<p class="card-text">
							<small>Descripción:</small>
							<br>
							Pastel de chocolate que seguramente sabe delicioso...
						</p>

						<div class="text-right">
								<a href="#" class="btn btn-sm btn-info"> Más Detalles</a>
						</div>
						<br>

						<select class="form-control form-control-sm">
							<option>Chico - $120</option>
							<option>Mediano - $250</option>
							<option>Grande - $350</option>
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
			
			<div class="col-sm-6 col-md-3">
				<div class="card shadow p-0 mb-5 bg-white rounded">
					<!-- set a width on the image otherwise it will expand to full width       -->
					<img class="card-img-top img-fluid" src="img/04.jpg" alt="ejemplo 01">
					<hr>

					<div class="card-body">
						<h4 class="card-title">Pastel de Chocolate</h4>
						<p class="card-text">
							<small>Descripción:</small>
							<br>
							Pastel de chocolate que seguramente sabe delicioso...
						</p>

						<div class="text-right">
								<a href="#" class="btn btn-sm btn-info"> Más Detalles</a>
						</div>
						<br>

						<select class="form-control form-control-sm">
							<option>Chico - $120</option>
							<option>Mediano - $250</option>
							<option>Grande - $350</option>
						</select>
						
						<br>

						<div class="text-center">
							<button class="btn btn-primary my-cart-btn" data-id="1" data-name="product 1" data-summary="summary 1" data-price="120" data-quantity="1" data-image="img/04.jpg">Agregar al carrito
							</button>
						</div>
					</div>
				</div>
				<!-- /.card -->
			</div>

			<div class="col-sm-6 col-md-3">
				<div class="card shadow p-0 mb-5 bg-white rounded">
					<!-- set a width on the image otherwise it will expand to full width       -->
					<img class="card-img-top img-fluid" src="img/05.jpg" alt="ejemplo 01">
					<hr>

					<div class="card-body">
						<h4 class="card-title">Pastel de Chocolate</h4>
						<p class="card-text">
							<small>Descripción:</small>
							<br>
							Pastel de chocolate que seguramente sabe delicioso...
						</p>

						<div class="text-right">
								<a href="#" class="btn btn-sm btn-info"> Más Detalles</a>
						</div>
						<br>

						<select class="form-control form-control-sm">
							<option>Chico - $120</option>
							<option>Mediano - $250</option>
							<option>Grande - $350</option>
						</select>
						
						<br>

						<div class="text-center">
							<button class="btn btn-primary my-cart-btn" data-id="1" data-name="product 1" data-summary="summary 1" data-price="120" data-quantity="1" data-image="img/05.jpg">Agregar al carrito
							</button>
						</div>
					</div>
				</div>
				<!-- /.card -->
			</div>
			
			<div class="col-sm-6 col-md-3">
				<div class="card shadow p-0 mb-5 bg-white rounded">
					<!-- set a width on the image otherwise it will expand to full width       -->
					<img class="card-img-top img-fluid" src="img/06.jpg" alt="ejemplo 01">
					<hr>

					<div class="card-body">
						<h4 class="card-title">Pastel de Chocolate</h4>
						<p class="card-text">
							<small>Descripción:</small>
							<br>
							Pastel de chocolate que seguramente sabe delicioso...
						</p>

						<div class="text-right">
								<a href="#" class="btn btn-sm btn-info"> Más Detalles</a>
						</div>
						<br>

						<select class="form-control form-control-sm">
							<option>Chico - $120</option>
							<option>Mediano - $250</option>
							<option>Grande - $350</option>
						</select>
						
						<br>

						<div class="text-center">
							<button class="btn btn-primary my-cart-btn" data-id="1" data-name="product 1" data-summary="summary 1" data-price="120" data-quantity="1" data-image="img/06.jpg">Agregar al carrito
							</button>
						</div>
					</div>
				</div>
				<!-- /.card -->
			</div>

			<div class="col-sm-6 col-md-3">
				<div class="card shadow p-0 mb-5 bg-white rounded">
					<!-- set a width on the image otherwise it will expand to full width       -->
					<img class="card-img-top img-fluid" src="img/07.jpg" alt="ejemplo 01">
					<hr>

					<div class="card-body">
						<h4 class="card-title">Pastel de Chocolate</h4>
						<p class="card-text">
							<small>Descripción:</small>
							<br>
							Pastel de chocolate que seguramente sabe delicioso...
						</p>

						<div class="text-right">
								<a href="#" class="btn btn-sm btn-info"> Más Detalles</a>
						</div>
						<br>

						<select class="form-control form-control-sm">
							<option>Chico - $120</option>
							<option>Mediano - $250</option>
							<option>Grande - $350</option>
						</select>
						
						<br>

						<div class="text-center">
							<button class="btn btn-primary my-cart-btn" data-id="1" data-name="product 1" data-summary="summary 1" data-price="120" data-quantity="1" data-image="img/07.jpg">Agregar al carrito
							</button>
						</div>
					</div>
				</div>
				<!-- /.card -->
			</div>
			
			<div class="col-sm-6 col-md-3">
				<div class="card shadow p-0 mb-5 bg-white rounded">
					<!-- set a width on the image otherwise it will expand to full width       -->
					<img class="card-img-top img-fluid" src="img/08.jpg" alt="ejemplo 01">
					<hr>

					<div class="card-body">
						<h4 class="card-title">Pastel de Chocolate</h4>
						<p class="card-text">
							<small>Descripción:</small>
							<br>
							Pastel de chocolate que seguramente sabe delicioso...
						</p>

						<div class="text-right">
								<a href="#" class="btn btn-sm btn-info"> Más Detalles</a>
						</div>
						<br>

						<select class="form-control form-control-sm">
							<option>Chico - $120</option>
							<option>Mediano - $250</option>
							<option>Grande - $350</option>
						</select>
						
						<br>

						<div class="text-center">
							<button class="btn btn-primary my-cart-btn" data-id="1" data-name="product 1" data-summary="summary 1" data-price="120" data-quantity="1" data-image="img/08.jpg">Agregar al carrito
							</button>
						</div>
					</div>
				</div>
				<!-- /.card -->
			</div>




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


