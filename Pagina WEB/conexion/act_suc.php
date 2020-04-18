<?php  
	include("conexion.php");
	session_start();
	ob_start();
	if (!isset($_SESSION['id_sucursal'])) {
		header("Location: ../index.php");
	}
	
	
	
/*
	session_start();
	ob_start();
	$_SESSION['id_usuario'];*/
	$idusu = $_SESSION['id_sucursal'];
	$sql = "select id from usuario where id ='$idusu'";
	$resultado = $conexion->query($sql);
	$row = $resultado->fetch_assoc();
	$iduser = $row['id'];

		
	
	if (isset($_POST['actualizar1'])) {		
		$Nombre= mysqli_real_escape_string($conexion, $_POST['nombre']);
		$rfc = mysqli_real_escape_string($conexion, $_POST['rfc']);
        $correo = mysqli_real_escape_string($conexion, $_POST['correo']);
		$telefono = mysqli_real_escape_string($conexion, $_POST['telefono']);
		$conexion -> query("call updsuc_datos('$iduser', '$Nombre', '$rfc', '$correo', '$telefono');");
		echo "<br>";
		echo "<script>
			alert('LOS DATOS PERSONALES SE ACTUALIZARON CORRECTAMENTE');
			window.location = '../actualizar_usuario.php';
		</script>";
		include("cerrar_conexion.php");
		
		
	}

	if (isset($_POST['actualizar2'])) {
		$Calle = mysqli_real_escape_string($conexion, $_POST['calle']);
		$Colonia = mysqli_real_escape_string($conexion, $_POST['colonia']);
		$Num_ext = mysqli_real_escape_string($conexion, $_POST['num_ext']);
		$Num_int = mysqli_real_escape_string($conexion, $_POST['num_int']);
		$Codigo_postal = mysqli_real_escape_string($conexion, $_POST['codigo_postal']);
		$conexion -> query("call updsuc_direccion('$iduser', '$Calle', '$Colonia', '$Num_ext', '$Num_int', '$Codigo_postal');");
		echo "<br>";
		echo "<script>
			alert('DIRECCIÓN SE ACTUALIZO CORRECTAMENTE');
			window.location = '../actualizar_usuario.php';
		</script>";
		include("cerrar_conexion.php");		
	}

	if (isset($_POST['actualizar3'])) {
		$Passwd = mysqli_real_escape_string($conexion, $_POST['contraseña_actual']);
		$passwd = sha1($Passwd);
		$Passwd1 = mysqli_real_escape_string($conexion, $_POST['nueva_contraseña']);
		$Passwd2 = mysqli_real_escape_string($conexion, $_POST['repetir_contraseña']);
		$pascon  = "select passwd from sucursal where id ='$idusu'";
		$resul = $conexion->query($pascon);
		$row1 = $resul->fetch_assoc();
		$contra = $row1['passwd'];

		if ($passwd === $contra) {
			if ($Passwd1 === $Passwd2) {
				
				$conexion -> query("call updsuc_contra('$iduser', '$Passwd2');");
					echo "<script>
					alert('Las contraseñas se actualizo');
					window.location = '../actualizar_usuario.php';
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