<?php  
	include("conexion.php");

	$Nombre= $_POST['nombre'];
		$A_paterno = mysqli_real_escape_string($conexion, $_POST['a_paterno']);
		$A_materno = mysqli_real_escape_string($conexion, $_POST['a_materno']);
		$Fecha_nacimiento = mysqli_real_escape_string($conexion, $_POST['fecha_nacimiento']);
		$Correo = mysqli_real_escape_string($conexion, $_POST['correo']);
		$Celular = mysqli_real_escape_string($conexion, $_POST['celular']);
		$Calle = mysqli_real_escape_string($conexion, $_POST['calle']);
		$Colonia = mysqli_real_escape_string($conexion, $_POST['colonia']);
		$Num_ext = mysqli_real_escape_string($conexion, $_POST['num_ext']);
		$Num_int = mysqli_real_escape_string($conexion, $_POST['num_int']);
		$Codigo_postal = mysqli_real_escape_string($conexion, $_POST['codigo_postal']);
		$Passwd = mysqli_real_escape_string($conexion, $_POST['contraseña_actual']);
		$Passwd1 = mysqli_real_escape_string($conexion, $_POST['nueva_contraseña']);
		$Passwd2 = mysqli_real_escape_string($conexion, $_POST['repetir_contraseña']);

		$resultado = mysqli_query($conexion,"call sacar_id('$Correo');");

		
		$row = mysqli_fetch_row($resultado);
	if (isset($_POST['actualizar1'])) {
		include("conexion.php");
		
		$conexion -> query("call update_usuario1($row[0], '$Nombre', '$A_paterno', '$A_materno', '$Fecha_nacimiento', '$Correo', '$Celular');");
		echo "<br>";
		echo "se actualizo correctamente";
		include("cerrar_conexion.php");
		
	}


		

?>