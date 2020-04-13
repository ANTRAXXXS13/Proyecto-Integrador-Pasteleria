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
		 <link rel="stylesheet" type="text/css" href="css/utch.css">
	</head>
	<body>
<!-- ========================================================================================================-->
<!-- ============================= aqui comienza el navegador ===============================================-->
<!-- ========================================================================================================-->
		
	<section class="scroll" id="tienda">
	
		<?php 
		
			include_once 'header.php'

		?>

	</section>
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
							<h6 class="card-title text-left text-info mb-1 mt-2"><b>DATOS GENERALES DEL PASTEL</b></h6>				
							<hr>		
							<div class="needs-validation" novalidate>
								<div class="form-row">
									<!-- Forma -->
									<div class="form-group col-md-6">
										<select class="form-control form-control-sm" placeholder="hola">
											<option>Cuadrado</option>
											<option>Redondo</option>
										</select>
									</div>
									<div class="form-group col-md-6">
										<select class="form-control form-control-sm" placeholder="hola">
											<option>Cuadrado</option>
											<option>Redondo</option>
										</select>
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
							<h5><center><b> Topping</b></center></h5>
							<hr>
							<div class="form-row">
								<!-- Fresas -->
								<div class="form-group col-md-3">
									<input type="checkbox"  id="fresas" name="fresas" > <label><b> Fresas</b></label>
								</div>

								<!-- Duraznos -->
								<div class="form-group col-md-3">
									<input type="checkbox"  id="duraznos" name="duraznos" > <label><b> Duraznos</b></label>
								</div>
								<!-- Cerezas -->
								<div class="form-group col-md-3">
									<input type="checkbox"  id="cereza" name="cereza" > <label><b> Cerezas</b></label>
								</div>

								<!-- Kiwi -->
								<div class="form-group col-md-3">
									<input type="checkbox"  id="kiwi" name="kiwi" > <label><b> Kiwi</b></label>
								</div>
							</div>
							<div class="form-row">
								<!-- Zarzamora -->
								<div class="form-group col-md-3">
									<input type="checkbox"  id="zarzamora" name="zarzamora" >  <label><b> Zarzamora</b></label>
								</div>

								<!-- Frambueza -->
								<div class="form-group col-md-3">
									<input type="checkbox"  id="frambueza" name="frambueza" > <label><b> Frambueza</b></label>
								</div>
								<!-- Estellas de fandant -->
								<div class="form-group col-md-4">
									<input type="checkbox"  id="estrellas_fandant" name="estrellas_fandant" > <label><b> Estrellas de Fandant</b></label>
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
							<h6 class="card-title text-left text-info mb-1 mt-3"><b>INGREDIENTES</b></h6>
							<hr>
							<hr>
						<!-- Aqui inicia Masa-->
							<h5><center><b> Masa(Sabor)</b></center></h5>
							<hr>
							<div class="form-row">

								<!-- Chocolate -->
								<div class="form-group col-md-6">
									<input type="checkbox"  id="chocolate" name="chocolate" > <label><b> Chocolate</b></label>
								</div>

								<!-- Vainilla -->
								<div class="form-group col-md-6">
									<input type="checkbox"  id="vainilla" name="vainilla" > <label><b> Vainilla</b></label>
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
									<input type="checkbox"  id="mermelada_fresa" name="mermelada_fresa" > <label><b> Mermelada de Fresa</b></label>
								</div>

								<!-- Vainilla -->
								<div class="form-group col-md-6">
									<input type="checkbox"  id="betun_vainilla" name="betun_vainilla" > <label><b> Batún de Vainilla</b></label>
								</div>
							</div>
							<div class="form-row">
								<!-- Chocolate -->
								<div class="form-group col-md-6">
									<input type="checkbox"  id="mermelada_durazno" name="mermelada_durazno" >  <label><b> Mermelada de Durazno</b></label>
								</div>

								<!-- Vainilla -->
								<div class="form-group col-md-6">
									<input type="checkbox"  id="betun_chocolate" name="betun_chocolate" > <label><b> Betún de Chocolate</b></label>
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
									<input type="checkbox"  id="betun_vainilla2" name="betun_vainilla2" > <label><b> Betún de Vainilla</b></label> 
								</div>

								<!-- Vainilla -->
								<div class="form-group col-md-6">
									<input type="checkbox"  id="betun_chocolate2" name="betun_chocolate2" > <label><b> Betún de Chocolate</b></label>
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
							<h6 class="card-title text-left text-info mb-1 mt-3"><b>IMÁGEN(OPCIONAL)</b></h6>
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