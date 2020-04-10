<!DOCTYPE html>
<html>
	<head>
		<title>Actualizar Datos de la sucursal</title>
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
						<a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">MIS PASTELES</a>
							
						<div class="dropdown-menu  mt-3 mr-4 " id="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item text-white" href="Enfiestados.php">Express</a>
						<a class="dropdown-item text-white" href="Personalizados.php">Personalizalo</a>
						<div class="dropdown-divider"></div>
							<a class="dropdown-item text-white" href="Descuentos.php">Descuentos</a>
						</div>
						</li>

						<li class="nav-item">
							<a class="nav-link" href="#">AGREGAR PASTELES <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="RastrearPedido.php">ÚLTIMOS PEDIDOS PEDIDOS</a>
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


<!-- ========================================================================================================-->
<!-- ============================= aqui comieza el formulario ===============================================-->
<!-- ========================================================================================================-->
		<br>
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
							<h6 class="card-title text-left text-info mb-1 mt-2"><b>DATOS DE LA SUCURSAL</b></h6>				
							<hr>		
							<div class="needs-validation" novalidate>
								<div class="form-row">
									<!-- nombre -->
									<div class="form-group col-md">
										<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" required>
										<div class="invalid-feedback">
											*Es necesario completar este campo
										</div>
									</div>
								</div>


								<div class="form-row">
									<!-- Apellido Paterno -->
									<div class="form-group col-md">
										<input type="text" class="form-control" id="rfc" name="rfc"  placeholder="RFC" required>
										<div class="invalid-feedback">
											*Es necesario completar este campo
										</div>
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
								</div>
								<div class="form-row">
									<div class="form-group col-md-3">

										<!-- Matriz -->
										<label ><b>¿Es Matriz?:</b></label>
							
									</div>
									<div class="form-group col-md-1">

										<!-- Matriz -->
										<input type="checkbox"  id="si" name="si" required> <label ><b>Si</b></label> 
									</div>
									<div class="form-group col-md-2">

										<!-- Matriz -->
										<input type="checkbox"  id="no" name="no"  required> <label ><b>No</b></label>
									</div>

									<div class="form-group col-md-6">

										<!-- Supervisado por: -->
										<input type="text" class="form-control" id="supervisado" name="supervisado" placeholder="Supervisado por: " required>
										<div class="invalid-feedback">
											*Es necesario completar este campo
										</div>
									</div>	
								</div>
							<button class="btn btn-success" name="actualizar1"> Actualizar </button>		
							</div>			
							<hr>				
						</div>
		<!-- ========================================================================================================-->
		<!-- ============================= aqui termina el bloque de datos personales ===============================-->
		<!-- ========================================================================================================-->

		<!-- ========================================================================================================-->
		<!-- ============================= aqui comieza el bloque de direccion ======================================-->
		<!-- ========================================================================================================-->	
						<div class="form-group col-md-1">
									</div>
						<div class="form-group col-md-4">
							<h6 class="card-title text-left text-info mb-1 mt-3"><b>DIRECCIÓN</b></h6>
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

							</div>

							<div class="form-row">

								<!--Pais -->
								<div class="form-group col-md-4">							
									<input type="text" class="form-control" id="pais" name="pais" placeholder="País" required>
									<div class="invalid-feedback">
										*Es necesario completar este campo
									</div>
								</div>

								<!-- Estado -->
								<div class="form-group col-md-4">							
									<input type="text" class="form-control" id="estado" name="estado" placeholder="Estado" required>
									<div class="invalid-feedback">
										*Es necesario completar este campo
									</div>
								</div>	

								<!-- Municipio -->
								<div class="form-group col-md-4">
									<input type="text" class="form-control" id="municipio" name="municipio" placeholder="Municipio" required>
									<div class="invalid-feedback">
										*Es necesario completar este campo 
									</div>
								</div>

							</div>
							<!-- Boton de actualizar -->
							<button class="btn btn-success" name="actualizar2"> Actualizar </button>
							<hr>
	
						</div>
		<!-- ========================================================================================================-->
		<!-- ============================= aqui termina el bloque de direccion ======================================-->
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
		<!-- ============================= aqui comienza el bloque de contraseña =====================================-->
		<!-- ========================================================================================================-->
						<div class="form-group col-md-4">
									</div>
						<div class="form-group col-md-4">
							
							<h6 class="card-title text-left text-info mb-1 mt-3"><b>CAMBIAR CONTRASEÑA</b></h6>
							<hr>
							
							<!-- Contraseña actual -->
							<div class="form-row">
								<div class="form-group col-md-3">
									</div>
								<div class="form-group input-group col-md-6">
									<input type="password"  class="form-control" id="contraseña_actual" name="contraseña_actual" placeholder="Contraseña Atual" required>
									<div class="invalid-feedback">*Es necesario completar este campo</div>
								</div>
								<div class="form-group col-md-3">
									</div>
							</div>

							<!-- Nueva Contraseña -->
							<div class="form-row">
								<div class="form-group col-md-3">
									</div>
								<div class="form-group col-md-6">					
									<input type="password" class="form-control" id="nueva_contraseña" name="nueva_contraseña" placeholder="Nueva Contraseña" required>
									<div class="invalid-feedback">
										*Es necesario completar este campo
									</div>
								</div>
								<div class="form-group col-md-3">
									</div>
							</div>

							<!-- Repetir Contraseña -->
							<div class="form-row">
								<div class="form-group col-md-3">
									</div>
								<div class="form-group col-md-6">					
									<input type="password" class="form-control" id="repetir_contraseña" name="repetir_contraseña" placeholder="Repetir Contraseña" required>
									<div class="invalid-feedback">
										*Es necesario completar este campo
									</div>
								</div>
								<div class="form-group col-md-3">
									</div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-4">
									</div>
								<div class="form-group col-md-4">					
									<button class="btn btn-success" name="actualizar3"> Actualizar </button>
								</div>
								<div class="form-group col-md-4">
									</div>
							</div>

							<!-- Boton de actualizar -->
							
		
							<hr>
						</div>
		<!-- ========================================================================================================-->
		<!-- ============================= aqui termina el bloque de contraseña =====================================-->
		<!-- ========================================================================================================-->
						<div class="form-group col-md-4">
									</div>

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

		<footer class="navbar navbar-expand-sm navbar-dark bg-primary fixed-top" role="navigation">
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
						<a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">MIS PASTELES</a>
							
						<div class="dropdown-menu  mt-3 mr-4 " id="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item text-white" href="Enfiestados.php">Express</a>
						<a class="dropdown-item text-white" href="Personalizados.php">Personalizalo</a>
						<div class="dropdown-divider"></div>
							<a class="dropdown-item text-white" href="Descuentos.php">Descuentos</a>
						</div>
						</li>

						<li class="nav-item">
							<a class="nav-link" href="#">AGREGAR PASTELES <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="RastrearPedido.php">ÚLTIMOS PEDIDOS PEDIDOS</a>
					</li>
				
				</ul>
				<!--/lista de menu-->


		

				
			</div>
		</footer>


	</body>
</html>