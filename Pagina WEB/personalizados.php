<!DOCTYPE html>
<html>
	<head>
		<title>Pasteles Personalizados</title>
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
<!-- ========================================================================================================-->
<!-- ============================= aqui comienza el navegador ===============================================-->
<!-- ========================================================================================================-->
		<nav class="navbar navbar-expand-sm navbar-dark bg-primary fixed-top" role="navigation">
			<!--/brand-->	
			<a class="navbar-brand logo text-white" href="#">Fastcakes</a>

				<!--boton toggle-->
			<button class="navbar-toggler"  type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="true" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
				<!--/boton toggle-->

				<!--qué es lo que se colapsará-->
			<div class="collapse navbar-collapse" id="navbarColor01">
					
					<!--lista de menu-->
				<ul class="navbar-nav mx-auto">
						
					<li class="nav-item dropdown">
						<a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">PASTELES</a>
							
						<div class="dropdown-menu  mt-3 mr-4 " id="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item text-white" href="Enfiestados.php">Express</a>
						<a class="dropdown-item text-white" href="Personalizados.php">Personalizalo</a>
						<div class="dropdown-divider"></div>
							<a class="dropdown-item text-white" href="Descuentos.php">Descuentos</a>
						</div>
						</li>

						<li class="nav-item">
							<a class="nav-link" href="#">TIENDA <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="RastrearPedido.php">RASTREA TU PEDIDO</a>
					</li>
				
				</ul>
				<!--/lista de menu-->


				<!--Aqui comienza búsqueda-->
				<form class="form-inline">
					<input class="form-control mr-sm-2" type="search" placeholder="Busca un pastel">
						<button class="btn btn-secondary btn-sm rounded-circle my-sm-0" type="submit"><i class="fas fa-search"></i>
						</button>
				</form>
				<!-- aqui termina búsqueda-->

				<ul class="navbar-nav">

					<li class="nav-item">
						<a href="#" class="btn btn-outline btn-rounded p-2 mr-sm-2" data-toggle="modal" data-target="#modalLRForm"><i class="fas fa-user"></i></a>
					</li>
								
					<li class="nav-item">
										
						<a href="#" class="btn btn-md p-2 mr-sm-2" id="carrito" role="button" aria-pressed="true"><i class="fas fa-shopping-cart"></i></a>
					</li>
				</ul>
			</div>
		</nav>
<!-- ========================================================================================================-->
<!-- ============================= aqui termina el navegador ================================================-->
<!-- ========================================================================================================-->
		<br>
		<br>
		<br>

<!-- ========================================================================================================-->
<!-- ============================= aqui comieza el formulario ===============================================-->
<!-- ========================================================================================================-->
		<form method="POST" action="Actusu_con.php">
			<div class="tab-pane" role="tabpanel" >
				<div class="form-group col-md">
	<!--**************************************************************************************************** -->
	<!--*****************Aqui comienza el bloque 1 ********************************************************* -->
	<!--**************************************************************************************************** -->
					<div class="form-row">
		<!-- ========================================================================================================-->
		<!-- ============================= aqui comienza el bloque de datos del pastel ==============================-->
		<!-- ========================================================================================================-->

					<!-- Bloque 1.1 Izquierdo-->	
						<div class="form-group col-md-1">
									</div>
						<div class="form-group col-md-4">					
							<h6 class="card-title text-left text-info mb-1 mt-2">DATOS GENERALES DEL PASTEL</h6>				
							<hr>		
							<div class="needs-validation" novalidate>
								<div class="form-row">
									<!-- Forma -->
									<div class="form-group col-md-6">
										<input type="text" class="form-control" id="forma" name="forma" placeholder="Forma" required>
									</div>
									<div class="form-group col-md-6">
										<input type="text" class="form-control" id="tamaño" name="tamaño" placeholder="Tamaño" required>
									</div>
								</div>


								<div class="form-row">
									<!-- Apellido Paterno -->
									<div class="form-group col-md-12">
										<input type="text" class="form-control" id="comentarios" name="comentarios"  placeholder="Mensaje en el pastel (o comentarios sobre la compra)" required>
										<div class="invalid-feedback">
											*Es necesario completar este campo
										</div>
									</div>
						
								</div>
							</div>			
							<hr>				
						</div>
		<!-- ========================================================================================================-->
		<!-- ============================= aqui termina el bloque de datos personales ===============================-->
		<!-- ========================================================================================================-->

		<!-- ========================================================================================================-->
		<!-- ============================= aqui comienza el bloque de topping =======================================-->
		<!-- ========================================================================================================-->
						<div class="form-group col-md-1">
									</div>
						<div class="form-group col-md-4">
							<hr>
							<h5><center> Topping</center></h5>
							<hr>
							<div class="form-row">
								<!-- Fresas -->
								<div class="form-group col-md-3">
									<input type="checkbox"  id="fresas" name="fresas" > Fresas
								</div>

								<!-- Duraznos -->
								<div class="form-group col-md-3">
									<input type="checkbox"  id="duraznos" name="duraznos" > Duraznos
								</div>
								<!-- Cerezas -->
								<div class="form-group col-md-3">
									<input type="checkbox"  id="cereza" name="cereza" > Cerezas
								</div>

								<!-- Kiwi -->
								<div class="form-group col-md-3">
									<input type="checkbox"  id="kiwi" name="kiwi" > Kiwi
								</div>
							</div>
							<div class="form-row">
								<!-- Zarzamora -->
								<div class="form-group col-md-3">
									<input type="checkbox"  id="zarzamora" name="zarzamora" >  Zarzamora
								</div>

								<!-- Frambueza -->
								<div class="form-group col-md-3">
									<input type="checkbox"  id="frambueza" name="frambueza" > Frambueza
								</div>
								<!-- Estellas de fandant -->
								<div class="form-group col-md-3">
									<input type="checkbox"  id="estrellas_fandant" name="estrellas_fandant" > Estrellas de Fandant
								</div>
							</div>
						<!-- Aqui termina Relleno-->
							<hr>
						</div>
		<!-- ========================================================================================================-->
		<!-- ============================= aqui termina el bloque de topping ========================================-->
		<!-- ========================================================================================================-->

					</div>
	<!--**************************************************************************************************** -->
	<!--*****************Aqui termina el bloque 1 ********************************************************** -->
	<!--**************************************************************************************************** -->

	<!--**************************************************************************************************** -->
	<!--*****************Aqui comienza el bloque 2 ********************************************************** -->
	<!--**************************************************************************************************** -->

					<div class="form-row">
		<!-- ========================================================================================================-->
		<!-- ============================= aqui comieza el bloque de ingredientes ===================================-->
		<!-- ========================================================================================================-->	
						<div class="form-group col-md-1">
									</div>
						<div class="form-group col-md-4">
							<h6 class="card-title text-left text-info mb-1 mt-3">INGREDIENTES</h6>
							<hr>
							<hr>
						<!-- Aqui inicia Masa-->
							<h5><center> Masa(Sabor)</center></h5>
							<hr>
							<div class="form-row">

								<!-- Chocolate -->
								<div class="form-group col-md-6">
									<input type="checkbox"  id="chocolate" name="chocolate" > Chocolate
								</div>

								<!-- Vainilla -->
								<div class="form-group col-md-6">
									<input type="checkbox"  id="vainilla" name="vainilla" > Vainilla
								</div>
							</div>
						<!-- Aqui termina Masa-->
							<hr>
						<!-- Aqui inicia Relleno-->
							<h5><center> Relleno</center></h5>
							<hr>
							<div class="form-row">
								<!-- Chocolate -->
								<div class="form-group col-md-6">
									<input type="checkbox"  id="mermelada_fresa" name="mermelada_fresa" > Mermelada de Fresa
								</div>

								<!-- Vainilla -->
								<div class="form-group col-md-6">
									<input type="checkbox"  id="betun_vainilla" name="betun_vainilla" > Batún de Vainilla
								</div>
							</div>
							<div class="form-row">
								<!-- Chocolate -->
								<div class="form-group col-md-6">
									<input type="checkbox"  id="mermelada_durazno" name="mermelada_durazno" >  Mermelada de Durazno
								</div>

								<!-- Vainilla -->
								<div class="form-group col-md-6">
									<input type="checkbox"  id="betun_chocolate" name="betun_chocolate" > Betún de Chocolate
								</div>
							</div>
						<!-- Aqui termina Relleno-->
							<hr>
						<!-- Aqui inicia Betun-->
							<h5><center> Betún </center></h5>
							<hr>
							<div class="form-row">

								<!-- Chocolate -->
								<div class="form-group col-md-6">
									<input type="checkbox"  id="betun_vainilla2" name="betun_vainilla2" > Betún de Vainilla
								</div>

								<!-- Vainilla -->
								<div class="form-group col-md-6">
									<input type="checkbox"  id="betun_chocolate2" name="betun_chocolate2" > Betún de Chocolate
								</div>
							</div>
						<!-- Aqui termina Betun-->
	
						</div>
		<!-- ========================================================================================================-->
		<!-- ============================= aqui termina el bloque de direccion ======================================-->
		<!-- ========================================================================================================-->



		<!-- ========================================================================================================-->
		<!-- ============================= aqui comieza el bloque de imagen =========================================-->
		<!-- ========================================================================================================-->	
						<div class="form-group col-md-1">
									</div>
						<div class="form-group col-md-4">
							<h6 class="card-title text-left text-info mb-1 mt-3">IMAGEN(OPCIONAL)</h6>
							<hr>			
							
							
							<center>
								<div class="filemanager-container" id="yui_3_17_2_1_1586341566687_115">
					        <div class="fm-content-wrapper">
						            <div class="fp-content"></div>
						            <div class="fm-empty-container">
						                <div class="dndupload-message">Arrastre y suelte los archivos aquí para subirlos<br><div class="dndupload-arrow"></div></div>
						            </div>
						            <div class="dndupload-target">Arrastre los archivos a subir aquí<br><div class="dndupload-arrow"></div></div>
						            <div class="dndupload-progressbars"></div>
						            <div class="dndupload-uploadinprogress"><img class="icon " alt="Cargando..." title="Cargando..." src="http://virtual.utch.edu.mx/theme/image.php/more/core/1579301964/i/loading_small"></div>
						        </div>
						        <div class="filemanager-updating"><img class="icon " alt="Cargando..." title="Cargando..." src="http://virtual.utch.edu.mx/theme/image.php/more/core/1579301964/i/loading_small"></div>
					    	</div>
					    	<hr>
							<!-- Boton de cancelar -->
								<button class="btn btn-danger" name="actualizar2"> Cancelar </button>
								<!-- Boton de cancelar -->
								<button class="btn btn-success" name="actualizar2"> Agregar al carrito </button>
							</center>
	
						</div>
					
		<!-- ========================================================================================================-->
		<!-- ============================= aqui termina el bloque de imagen =========================================-->
		<!-- ========================================================================================================-->

					</div>
	<!--**************************************************************************************************** -->
	<!--*****************Aqui termina el bloque 2 ********************************************************** -->
	<!--**************************************************************************************************** -->

				</div>	

			</div>
		</form>		
<!-- ========================================================================================================-->
<!-- ============================= aqui termina el formulario ===============================================-->
<!-- ========================================================================================================-->
		<h5 class="badge-danger"><center> NOTA: EL IVA YA VIENE INCLUIDO EN EL PRECIO DE CADA PRODUCTO</center></h5>



	</body>
</html>