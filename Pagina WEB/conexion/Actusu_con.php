<?php  
	include("conexion.php");

	$Correo = mysqli_real_escape_string($conexion, $_POST['correo']);
	$Calle = mysqli_real_escape_string($conexion, $_POST['calle']);
	$Colonia = mysqli_real_escape_string($conexion, $_POST['colonia']);
	$Num_ext = mysqli_real_escape_string($conexion, $_POST['num_ext']);
	$Num_int = mysqli_real_escape_string($conexion, $_POST['num_int']);
	$Codigo_postal = mysqli_real_escape_string($conexion, $_POST['codigo_postal']);
	$Passwd = mysqli_real_escape_string($conexion, $_POST['contraseña_actual']);
	$Passwd1 = mysqli_real_escape_string($conexion, $_POST['nueva_contraseña']);
	$Passwd2 = mysqli_real_escape_string($conexion, $_POST['repetir_contraseña']);
	$sql = "SELECT id from usuario 
			where correo = '$Correo';";
		$resultado = $conexion->query($sql);
		$rows = $resultado->num_rows;
	$_SESSION['id_usuario'] = $row["id"];
	$iduser = $_SESSION['id_usuario'];

		
	
	if (isset($_POST['actualizar1'])) {
		include("conexion.php");
		$Nombre= mysqli_real_escape_string($conexion, $_POST['nombre']);
		$A_paterno = mysqli_real_escape_string($conexion, $_POST['a_paterno']);
		$A_materno = mysqli_real_escape_string($conexion, $_POST['a_materno']);
		$Fecha_nacimiento = mysqli_real_escape_string($conexion, $_POST['fecha_nacimiento']);
		$Correo = mysqli_real_escape_string($conexion, $_POST['correo']);
		$Celular = mysqli_real_escape_string($conexion, $_POST['celular']);
		$conexion -> query("call updusu_datosper('$iduser', '$Nombre', '$A_paterno', '$A_materno', '$Fecha_nacimiento', '$Correo', '$Celular');");
		echo "<br>";
		echo "<script>
			alert('SE ACTUALIZO CORRECTAMENTE');
			window.location = '../actualizar_usuario.php';
		</script>";
		include("cerrar_conexion.php");
		
		
	}
	

		

?>