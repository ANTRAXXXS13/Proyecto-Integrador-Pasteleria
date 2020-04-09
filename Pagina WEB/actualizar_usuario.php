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
		<!-- ============================= aqui comienza el bloque de datos personales ===============================-->
		<!-- ========================================================================================================-->
						<div class="form-group col-md-1">
									</div>
						<div class="form-group col-md-4">					
							<h6 class="card-title text-left text-info mb-1 mt-2">DATOS PERSONALES</h6>				
							<hr>		
							<div class="needs-validation" novalidate>
								<div class="form-row">
									<!-- nombre -->
									<div class="form-group col-md">
										<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre(s)" required>
										<div class="invalid-feedback">
											*Es necesario completar este campo
										</div>
									</div>
								</div>


								<div class="form-row">
									<!-- Apellido Paterno -->
									<div class="form-group col-md-6">
										<input type="text" class="form-control" id="a_paterno" name="a_paterno"  placeholder="Apellido Paterno" required>
										<div class="invalid-feedback">
											*Es necesario completar este campo
										</div>
									</div>

									<!-- Apellido materno -->
									<div class="form-group col-md-6">
										<input type="text" class="form-control" id="a_materno" name="a_materno" placeholder="Apellido Materno" required>
										<div class="invalid-feedback">
											*Es necesario completar este campo
										</div>
									</div>
												
								</div>
								<div class="form-row">
									<!-- Fecha de nacimiento -->
									<div class="form-group input-group col-md">
										<!-- Icono del calendario -->
										<div class="input-group-prepend">
											<span class="input-group-text bg-light"> <i class="fas fa-calendar-alt text-info"></i></span>
										</div>

										<input type="text"  class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" placeholder="Fecha de nacimiento" required>
										<div class="invalid-feedback">*Es necesario completar este campo</div>			
									</div>							
								</div>


								<div class="form-row">
									<div class="form-group col-md-6">

										<!-- Correo -->
										<input type="text" class="form-control" id="correo" name="correo" placeholder="Correo" required>
										<div class="invalid-feedback">
											*Es necesario completar este campo
										</div>
									</div>

									<div class="form-group col-md-6">

										<!-- Celular-->
										<input type="text" class="form-control" id="celular" name="celular" placeholder="Celular" required>
										<div class="invalid-feedback">
											*Es necesario completar este campo
										</div>
									</div>
									
									<button class="btn btn-success" name="actualizar1"> Actualizar </button>		
								</div>
							</div>			
							<hr>				
						</div>
		<!-- ========================================================================================================-->
		<!-- ============================= aqui termina el bloque de datos personales ===============================-->
		<!-- ========================================================================================================-->

		<!-- ========================================================================================================-->
		<!-- ============================= aqui comienza el bloque de contraseña =====================================-->
		<!-- ========================================================================================================-->
						<div class="form-group col-md-1">
									</div>
						<div class="form-group col-md-4">
							<h6 class="card-title text-left text-info mb-1 mt-3">CAMBIAR CONTRASEÑA</h6>
							<hr>
							<!-- Contraseña actual -->
							<div class="form-row">
								<div class="form-group input-group col-md-6">
									<input type="password"  class="form-control" id="contraseña_actual" name="contraseña_actual" placeholder="Contraseña Atual" required>
									<div class="invalid-feedback">*Es necesario completar este campo</div>
								</div>
							</div>

							<!-- Nueva Contraseña -->
							<div class="form-row">
								<div class="form-group col-md-6">					
									<input type="password" class="form-control" id="nueva_contraseña" name="nueva_contraseña" placeholder="Nueva Contraseña" required>
									<div class="invalid-feedback">
										*Es necesario completar este campo
									</div>
								</div>
							</div>

							<!-- Repetir Contraseña -->
							<div class="form-row">

								<div class="form-group col-md-6">					
									<input type="password" class="form-control" id="repetir_contraseña" name="repetir_contraseña" placeholder="Repetir Contraseña" required>
									<div class="invalid-feedback">
										*Es necesario completar este campo
									</div>
								</div>
							</div>

							<!-- Boton de actualizar -->
							<button class="btn btn-success" name="actualizar3"> Actualizar </button>
		
							<hr>
						</div>
		<!-- ========================================================================================================-->
		<!-- ============================= aqui termina el bloque de contraseña =====================================-->
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
		<!-- ============================= aqui comieza el bloque de direccion ======================================-->
		<!-- ========================================================================================================-->	
						<div class="form-group col-md-1">
									</div>
						<div class="form-group col-md-4">
							<h6 class="card-title text-left text-info mb-1 mt-3">DIRECCIÓN</h6>
							<hr>

							<div class="form-row">

								<!-- Calle -->
								<div class="form-group col-md-8">

									<input type="text" class="form-control" id="calle" name="calle" placeholder="Calle" required>
														
									<div class="invalid-feedback">
										*Es necesario completar este campo
									</div>
								</div>

										<!-- Numero exterior -->
								<div class="form-group col-md-4">
									<input type="text" class="form-control" id="num_ext" name="num_ext" placeholder="Num. Ext" required>
														
									<div class="invalid-feedback">
										*Es necesario completar este campo
									</div>

								</div>
							</div>

							<div class="form-row">

								<!-- Numero interior -->
								<div class="form-group col-md-2">

									<input type="text" class="form-control" id="num_int" name="num_int" placeholder="Num. Int">
					
								</div>

								<!-- colonia -->
								<div class="form-group col-md-6">							
									<input type="text" class="form-control" id="colonia" name="colonia" placeholder="Colonia" required>
									<div class="invalid-feedback">
										*Es necesario completar este campo
									</div>
								</div>	

								<!-- codigo postal -->
								<div class="form-group col-md-4">
									<input type="text" class="form-control" id="codigo_postal" name="codigo_postal" placeholder="Código Postal" required>
									<div class="invalid-feedback">
										*Es necesario completar este campo 
									</div>
								</div>

								<!-- Boton de actualizar -->
								<button class="btn btn-success" name="actualizar2"> Actualizar </button>

							</div>
							<hr>
	
						</div>
		<!-- ========================================================================================================-->
		<!-- ============================= aqui termina el bloque de direccion ======================================-->
		<!-- ========================================================================================================-->



		<!-- ========================================================================================================-->
		<!-- ============================= aqui comieza el bloque de forma de pago ==================================-->
		<!-- ========================================================================================================-->	
						<div class="form-group col-md-1">
									</div>
						<div class="form-group col-md-4">
							<h6 class="card-title text-left text-info mb-1 mt-3">FORMA DE PAGO</h6>
							<hr>


							<div class="form-row">
								<!-- Forma de pago efectivo-->
								<div class="form-group col-md-6">
									<input type="radio"  id="nom_titular" name="" placeholder="Efectivo" required>
									Efectivo
								</div>

								<!-- Forma de pago tarjeta-->
								<div class="form-group col-md-6">
									<input type="radio"  id="tarjeta" name="tarjeta" value="Tarjeta" required>
									Tarjeta débito
								</div>
							</div>

							<div class="form-row">

								<!-- Nombre del titular -->
								<div class="form-group col-md-8">

									<input type="text" class="form-control" id="nom_titular" name="nom_titular" placeholder="Nombre del titular" required>
														
									<div class="invalid-feedback">
										*Es necesario completar este campo
									</div>
								</div>

								<!-- Mes / Año -->
								<div class="form-group col-md-4">
									<input type="week" class="form-control" id="mes_año" name="mes_año" placeholder="Mes/Año" required>
														
									<div class="invalid-feedback">
										*Es necesario completar este campo
									</div>
								</div>
							</div>

							<div class="form-row">

								<!-- Numero de tarjeta -->
								<div class="form-group col-md-8">							
									<input type="text" class="form-control" id="num_tarjeta" name="num_tarjeta" placeholder="Número de tarjeta" required>
									<div class="invalid-feedback">
										*Es necesario completar este campo
									</div>
								</div>	

								<!-- CVV -->
								<div class="form-group col-md-4">
									<input type="text" class="form-control" id="cvv" name="cvv" placeholder="CVV" required>
									<div class="invalid-feedback">
										*Es necesario completar este campo 
									</div>
								</div>
								<hr>

								<!-- Boton de actualizar -->
								
								<button class="btn btn-success" name="actualizar2"> Actualizar </button>
								<hr>


							</div>
							<hr>
	
						</div>
					
		<!-- ========================================================================================================-->
		<!-- ============================= aqui termina el bloque de forma de pago ==================================-->
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


	</body>
</html>