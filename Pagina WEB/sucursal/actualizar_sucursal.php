<?php

	include("../conexion/conexion.php");
	session_start();
	ob_start();
	if (!isset($_SESSION['id_sucursal'])) {
		header("Location: index.php");
	}else{
		$idsuc = $_SESSION['id_sucursal'];
		$sql = "select nombre, calle, colonia, num_ext, num_int, codigo_postal, telefono, rfc, correo, passwd, matriz from sucursal where id ='$idsuc';";
		$resultado = $conexion->query($sql);
		$row = $resultado->fetch_assoc();
		$nombre = $row['nombre'];
		$rfc = $row['rfc'];
		$matriz = $row['matriz'];
		/*$q_matriz  = $row['supervisado_por'];*/
		$correo = $row['correo'];
		$telefono = $row['telefono'];
		$calle = $row['calle'];
		$colonia = $row['colonia'];
		$num_ext = $row['num_ext'];
		$num_int = $row['num_int'];
		$codigo_postal = $row['codigo_postal'];

		$query=mysqli_query($conexion,"select id, nombre from sucursal;");
	}
	

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Actualizar Datos de la sucursal</title>
		<meta charset="utf-8">

		<!--Modified Bootstrap-->
		<link rel="stylesheet" href="../css/bootstrap.min.css" />
		<!-- Font Awesome CDN -->
		<script src="https://kit.fontawesome.com/839392f4bf.js" crossorigin="anonymous"></script>
		<!--Custom Stylesheet-->
		 <link rel="stylesheet" href="../css/custom.css" /> 
		 <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	</head>
	<body>
<!-- ========================================================================================================-->
<!-- ============================= aqui comienza el navegador ===============================================-->
<!-- ========================================================================================================-->
		<?php 
		    include("head_suc.php");
		?>
<!-- ========================================================================================================-->
<!-- ============================= aqui termina el navegador ================================================-->
<!-- ========================================================================================================-->
		<br>
		<br>


<!-- ========================================================================================================-->
<!-- ============================= aqui comieza el formulario ===============================================-->
<!-- ========================================================================================================-->
		<br>
		<form method="POST" action="act_suc.php">
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
										<input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $nombre;?>" placeholder="Nombre" required>
										<div class="invalid-feedback">
											*Es necesario completar este campo
										</div>
									</div>
								</div>


								<div class="form-row">
									<!-- Apellido Paterno -->
									<div class="form-group col-md">
										<input type="text" class="form-control" id="rfc" name="rfc"  value="<?php echo $rfc;?>"  placeholder="RFC" required>
										<div class="invalid-feedback">
											*Es necesario completar este campo
										</div>
									</div>
											
								</div>
						
								<div class="form-row">
									<div class="form-group col-md-6">

										<!-- Correo -->
										<input type="text" class="form-control" id="correo" name="correo" value="<?php echo $correo;?>" placeholder="Correo" required>
										<div class="invalid-feedback">
											*Es necesario completar este campo
										</div>
									</div>

									<div class="form-group col-md-6">

										<!-- Celular-->
										<input type="text" class="form-control" id="telefono" name="telefono" value="<?php echo $telefono;?>" placeholder="Teléfono" required>
										<div class="invalid-feedback">
											*Es necesario completar este campo
										</div>
									</div>	
								</div>
								<div class="form-row">
									<div class="form-group col-md-6">
                                    <select class="form-control form-control-sm" id="matriz" name="matriz">
                                        <option>¿ES MATRÍZ?</option>
                                        <option value="no">NO</option>
                                         <option value="si">SI</option>                                          
                                    </select>
                                </div>

									 <div class="form-group col-md-6">
                                    <select class="form-control form-control-sm" id="q_matriz" name="q_matriz"> 
                                        <option>¿QUÍEN ES SU MATRÍZ?</option>
                                        <?php while ($datos = mysqli_fetch_array($query)) {?> 
                                            <option  value="<?php echo $datos['id'];?>" > <?php echo $datos['nombre'];?> </option>
                                        <?php } ?>                                          
                                    </select>
                                </div>
								</div>
								<div class="form-row">
									<div class="form-group col-md-5"></div>
									<!-- Boton de actualizar -->
									<div class="form-group col-md-3">							
									<button class="btn btn-success" name="actualizar1"> Actualizar </button>
									</div>	
									<div class="form-group col-md-4"></div>
								</div>		
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

									<input type="text" class="form-control" id="calle" name="calle" value="<?php echo $calle;?>" placeholder="Calle" required>
														
									<div class="invalid-feedback">
										*Es necesario completar este campo
									</div>
								</div>

										<!-- Numero exterior -->
								<div class="form-group col-md-4">
									<input type="text" class="form-control" id="num_ext" name="num_ext" value="<?php echo $num_ext;?>" placeholder="Num. Ext" required>
														
									<div class="invalid-feedback">
										*Es necesario completar este campo
									</div>

								</div>
							</div>

							<div class="form-row">

								<!-- Numero interior -->
								<div class="form-group col-md-2">

									<input type="text" class="form-control" id="num_int" name="num_int" value="<?php echo $num_int;?>" placeholder="Num. Int">
					
								</div>

								<!-- colonia -->
								<div class="form-group col-md-6">							
									<input type="text" class="form-control" id="colonia" name="colonia" value="<?php echo $colonia;?>" placeholder="Colonia" required>
									<div class="invalid-feedback">
										*Es necesario completar este campo
									</div>
								</div>	

								<!-- codigo postal -->
								<div class="form-group col-md-4">
									<input type="text" class="a-button-inner" id="codigo_postal" name="codigo_postal" value="<?php echo $codigo_postal;?>" placeholder="Código Postal" required>
									<div class="invalid-feedback">
										*Es necesario completar este campo 
									</div>
								</div>

							</div>

							
							<!-- Boton de actualizar -->
							<div class="form-row">
									<div class="form-group col-md-5"></div>
									<!-- Boton de actualizar -->
									<div class="form-group col-md-3">							
									<button class="btn btn-success" name="actualizar2"> Actualizar </button>
									</div>	
									<div class="form-group col-md-4"></div>
								</div>	
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
									<div class="form-group col-md-5"></div>
									<!-- Boton de actualizar -->
									<div class="form-group col-md-3">							
									<button class="btn btn-success" name="actualizar3"> Actualizar </button>
									</div>	
									<div class="form-group col-md-4"></div>
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


	</body>
</html>