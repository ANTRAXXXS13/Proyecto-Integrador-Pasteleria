<?php

	include("conexion/conexion.php");
	session_start();
	ob_start();
	if (!isset($_SESSION['id_usuario'])) {
		header("Location: index.php");
	}else{
		$idusu = $_SESSION['id_usuario'];
		$sql = "select nombre, a_paterno, a_materno, fecha_nacimiento, correo, passwd, celular, calle, colonia, num_ext, num_int, codigo_postal from usuario where id ='$idusu'";
		$query1=mysqli_query($conexion,"select id, nombre from forma_pago;");
		$resultado = $conexion->query($sql);
		$row = $resultado->fetch_assoc();
		$nombre = $row['nombre'];
		$a_paterno = $row['a_paterno'];
		$a_materno = $row['a_materno'];
		$fecha_nacimiento = $row['fecha_nacimiento'];
		$correo = $row['correo'];
		$celular = $row['celular'];
		$calle = $row['calle'];
		$colonia = $row['colonia'];
		$num_ext = $row['num_ext'];
		$num_int = $row['num_int'];
		$codigo_postal = $row['codigo_postal'];
		
	}
	

?>

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
		<?php 

		    include_once 'header_log.php';
		?>

<!-- ========================================================================================================-->
<!-- ============================= aqui termina el navegador ================================================-->
<!-- ========================================================================================================-->
		<br>
		<br>
		<br>
	
<!-- ========================================================================================================-->
<!-- ============================= aqui comieza el formulario ===============================================-->
<!-- ========================================================================================================-->
		<form method="POST" action="conexion/Actusu_con.php">
			<div class="tab-pane" role="tabpanel" >
				<div class="form-group col-md">
	<!--**************************************************************************************************** -->
	<!--*****************Aqui comienza el bloque 1 ********************************************************* -->
	<!--**************************************************************************************************** -->
					<div class="form-row">
		<!-- ========================================================================================================-->
		<!-- ============================= aqui comienza el bloque de datos personales ===============================-->
		<!-- ========================================================================================================-->
						<div class="form-group col-md-3">
									</div>
						<div class="form-group col-md-6">					
							<h6 class="card-title text-left text-info mb-1 mt-2"><b>DATOS PERSONALES</b></h6>				
							<hr>		
							<div class="needs-validation" novalidate>
								<div class="form-row">
									<!-- nombre -->
									<div class="form-group col-md">
										<input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $nombre;?>" placeholder="nombre" required>   
										<div class="invalid-feedback">
											*Es necesario completar este campo
										</div>
									</div>
								</div>


								<div class="form-row">
									<!-- Apellido Paterno -->
									<div class="form-group col-md-6">
										<input type="text" class="form-control" id="a_paterno" name="a_paterno" value="<?php echo $a_paterno;?>" placeholder="Apellido Paterno" required>
										<div class="invalid-feedback">
											*Es necesario completar este campo
										</div>
									</div>

									<!-- Apellido materno -->
									<div class="form-group col-md-6">
										<input type="text" class="form-control" id="a_materno" name="a_materno" value="<?php echo $a_materno;?>" placeholder="Apellido Materno" required>
										<div class="invalid-feedback">
											*Es necesario completar este campo
										</div>
									</div>
												
								</div>
								<div class="form-row">
									<!-- Fecha de nacimiento -->
									<div class="form-group input-group col-md">
										<!-- Icono del calendario -->
										<div class="put-group-prepend">
											<span class="input-group-text bg-light"> <i class="fas fa-calendar-alt text-info"></i></span>
										</div>

										<input type="text"  class="form-control" data-toggle="datepicker" id="fecha_nacimiento" name="fecha_nacimiento" value="<?php echo $fecha_nacimiento;?>" placeholder="Fecha de nacimiento" required>
										<div class="invalid-feedback">*Es necesario completar este campo</div>			
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
										<input type="text" class="form-control" id="celular" name="celular" value="<?php echo $celular;?>" placeholder="Celular" required>
										<div class="invalid-feedback">
											*Es necesario completar este campo
										</div>
									</div>
								</div>							
							</div>			
							<hr>				
						</div>
					</div>	
		<!-- ========================================================================================================-->
		<!-- ============================= aqui termina el bloque de datos personales ===============================-->
		<!-- ========================================================================================================-->
		

		<!-- ========================================================================================================-->
		<!-- ============================= aqui comieza el bloque de direccion ======================================-->
		<!-- ========================================================================================================-->	
					<div class="form-row">
						<div class="form-group col-md-3">
									</div>
						<div class="form-group col-md-6">
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
									<input type="text" class="form-control" id="codigo_postal" name="codigo_postal" value="<?php echo $codigo_postal;?>" placeholder="Código Postal" required>
									<div class="invalid-feedback">
										*Es necesario completar este campo 
									</div>
								</div>

							</div>
							<hr>
						</div>
					</div>	
		<!-- ========================================================================================================-->
		<!-- ============================= aqui termina el bloque de direccion ======================================-->
		<!-- ========================================================================================================-->



					
	

			

		<!-- ========================================================================================================-->
		<!-- ============================= aqui comieza el bloque de forma de pago ==================================-->
		<!-- ========================================================================================================-->	
					<div class="form-row">
						<div class="form-group col-md-3">
									</div>
						<div class="form-group col-md-6">
							<h6 class="card-title text-left text-info mb-1 mt-3"><b>FORMA DE PAGO</b></h6>
							<hr>


							<div class="form-row">
								<!-- Forma de pago -->
								<?php while ($dat = mysqli_fetch_array($query1)) {?>
								<div class="form-group col-md-6">
									 
                                        <input type="radio"  id="forma_pago" name="forma_pago" value="<?php echo $dat['id'];?>"> <label><b><?php echo $dat['nombre'];?></b></label>
                                     
								</div>
								<?php } ?> 					
							</div>
						<div hidden="true" name="dat_tarj" id="dat_tarj" >
							<div class="form-row">
								<!-- Nombre del titular -->
								<div class="form-group col-md-8">
									<input type="text" class="form-control" id="nom_titular" name="nom_titular" placeholder="Nombre del titular" >
														
									<div class="invalid-feedback">
										*Es necesario completar este campo
									</div>
								</div>
								<!-- Mes / Año -->
								<div class="form-group col-md-4">
									<input type="week" class="form-control" id="mes_año" name="mes_año" placeholder="Mes/Año" >
														
									<div class="invalid-feedback">
										*Es necesario completar este campo
									</div>
								</div>
							</div>

							<div class="form-row">

								<!-- Numero de tarjeta -->
								<div class="form-group col-md-8">							
									<input type="text" class="form-control" id="num_tarjeta" name="num_tarjeta" placeholder="Número de tarjeta" >
									<div class="invalid-feedback">
										*Es necesario completar este campo
									</div>
								</div>	

								<!-- CVV -->
								<div class="form-group col-md-4">
									<input type="text" class="form-control" id="cvv" name="cvv" placeholder="CVV" >
									<div class="invalid-feedback">
										*Es necesario completar este campo 
									</div>
								</div>
								<hr>
								
								<hr>
							</div>
						</div>
							<hr>
	
						</div>
					</div>
		<!-- ========================================================================================================-->
		<!-- ============================= aqui termina el bloque de forma de pago ==================================-->
		<!-- ========================================================================================================-->

		<!-- ========================================================================================================-->
		<!-- ============================= aqui comienza el bloque de contraseña =====================================-->
		<!-- ========================================================================================================-->
					<div class="form-row">	
						<div class="form-group col-md-3">
									</div>
						<div class="form-group col-md-6">
							<h6 class="card-title text-left text-info mb-1 mt-3"><b>CAMBIAR CONTRASEÑA</b></h6>
							<hr>
							<!-- Contraseña actual -->
							<div class="form-row">
								<div class="form-group col-md-3"></div>
								<div class="form-group input-group col-md-6">
									<input type="password"  class="form-control" id="contraseña_actual" name="contraseña_actual" placeholder="Contraseña Atual" required>
									<div class="invalid-feedback">*Es necesario completar este campo</div>
								</div>
							</div>

							

							<div class="form-row">
								<div class="form-group col-md-5"></div>
								<!-- Boton de actualizar 1 -->
								<div class="form-group col-md-3">							
								<button class="btn btn-success" name="actualizar1"> Actualizar </button>
								</div>	
								<div class="form-group col-md-4"></div>
							</div>
		
							<hr>
						</div>
					</div>	
		<!-- ========================================================================================================-->
		<!-- ============================= aqui termina el bloque de contraseña =====================================-->
		<!-- ========================================================================================================-->
					
	<!--**************************************************************************************************** -->
	<!--*****************Aqui termina el bloque 2 ********************************************************** -->
	<!--**************************************************************************************************** -->

				</div>	

			</div>
		</form>		
<!-- ========================================================================================================-->
<!-- ============================= aqui termina el formulario ===============================================-->
<!-- ========================================================================================================-->	<div class="options text-center text-md-center mt-1">
            <p><a href="cambiar_contrausu.php">Cambiar contraseña</a></p>
        </div> 
        <br>
        <br>
        <?php 
    	include_once 'footer.php';
		?>
	
	
		<!--Bootstrap js-->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		
		<!-- Smooth Scroll-->
		<script src="js/smooth-scroll.js"></script>

		<!--Ajax Popper-->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

		<!-- js para personalizar -->
		<script src="js/main.js"></script>

		    <script type="text/javascript">
    let tar = document.getElementById('forma_pago');
    tar.addEventListener("change", function(){
        if (tar.value.toUpperCase() == 1) {
            document.getElementById('dat_tarj').hidden = false;
        }
        if (tar.value.toUpperCase() === 2) {
            document.getElementById('dat_tarj').hidden = true;
        }
    });
    </script>



	</body>
</html>