<?php  
	include("conexion.php");
	session_start();
	ob_start();
	if (!isset($_SESSION['id_usuario'])) {
		header("Location: ../index.php");
	}
	
	
	$idusu = $_SESSION['id_usuario'];
	$sql = "select id from usuario where id ='$idusu'";
	$resultado = $conexion->query($sql);
	$row = $resultado->fetch_assoc();
	$iduser = $row['id'];

		
	
	if (isset($_POST['actualizar1'])) {		
		$Passwd = mysqli_real_escape_string($conexion, $_POST['contraseña']);
		$passwd = sha1($Passwd);
		$pascon  = "select passwd from usuario where id ='$idusu'";
		$resul = $conexion->query($pascon);
		$row1 = $resul->fetch_assoc();
		$contra = $row1['passwd'];	
		if ($passwd === $contra) {


			$Nombre= mysqli_real_escape_string($conexion, $_POST['nombre']);
			$A_paterno = mysqli_real_escape_string($conexion, $_POST['a_paterno']);
			$A_materno = mysqli_real_escape_string($conexion, $_POST['a_materno']);
			$fechaz = $_POST['fecha_nacimiento'];
        	$f = str_replace('/', '-', $fechaz);
        	$Fecha_nacimiento = date('Y-m-d', strtotime($f));
       	 	$Correo = mysqli_real_escape_string($conexion, $_POST['correo']);
			$Celular = mysqli_real_escape_string($conexion, $_POST['celular']);
			$Calle = mysqli_real_escape_string($conexion, $_POST['calle']);
			$Colonia = mysqli_real_escape_string($conexion, $_POST['colonia']);
			$Num_ext = mysqli_real_escape_string($conexion, $_POST['num_ext']);
			$Num_int = mysqli_real_escape_string($conexion, $_POST['num_int']);
			$Codigo_postal = mysqli_real_escape_string($conexion, $_POST['codigo_postal']);
			$conexion -> query("call updusu_datos('$iduser', '$Nombre', '$A_paterno', '$A_materno', '$Fecha_nacimiento', '$Correo', '$Celular', '$calle','$colonia', '$num_ext','$num_int','$codigo_postal');");




			$conexion -> query("call updsuc_datos('$idsuc', '$Nombre', '$rfc', '$correo', '$telefono', '$Calle', '$Colonia', '$Num_ext', '$Num_int', '$Codigo_postal');");
			echo "<br>";
			echo "<script>
				alert('LOS DATOS PERSONALES SE ACTUALIZARON CORRECTAMENTE');
				window.location = '../sucursal/actualizar_sucursal.php';
			</script>";
			include("cerrar_conexion.php");
		}else{
			echo "<br>";
			echo "<script>
				alert('La contraseña es incorrecta, vuelve a');
				window.location = '../sucursal/actualizar_sucursal.php';
			</script>";
			include("cerrar_conexion.php");

		}
		
	}	

	if (isset($_POST['actualizar2'])) {
		$Passwd = mysqli_real_escape_string($conexion, $_POST['contraseña_actual']);
		$passwd = sha1($Passwd);
		$Passwd1 = mysqli_real_escape_string($conexion, $_POST['nueva_contraseña']);
		$Passwd2 = mysqli_real_escape_string($conexion, $_POST['repetir_contraseña']);
		$pascon  = "select passwd from usuario where id ='$idusu'";
		$resul = $conexion->query($pascon);
		$row1 = $resul->fetch_assoc();
		$contra = $row1['passwd'];

		if ($passwd === $contra) {
			if ($Passwd1 === $Passwd2) {
				
				$conexion -> query("call updusu_contra('$iduser', '$Passwd2');");
					echo "<script>
					alert('Las contraseñas se actualizo, Vuelva a iniciar sesión');
					window.location = 'salir.php';
				</script>";
			}else {
				echo "<script>
				alert('Las contraseñas no coinciden');
				window.location = '../actualizar_usuario.php';
			</script>";
			}
		}else{
			echo "<script>
			alert('LA CONTRASEÑA ACTUAL NO ES CORRECTA');
			window.location = '../actualizar_usuario.php';
		</script>";
		}

		include("cerrar_conexion.php");		
	}
	

		

?>