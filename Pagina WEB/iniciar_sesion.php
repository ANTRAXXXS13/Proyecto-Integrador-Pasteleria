<?php 
	include("conexion.php");
	if (isset($_POST["ingresar"])){ 

		$correo = $_POST['correo'];
		$password = $_POST['pass'];
		$sql = "SELECT id from usuario 
			where correo = '$correo' AND passwd = '$password' ";
		$resultado = $conexion->query($sql);
		$rows = $resultado->num_rows;
		// si la consulta trae algo entra en el siguiente if
		if ($rows > 0) {
			$row = $resultado->fetch_assoc(); // 
			$_SESSION['id_usuario'] = $row["id"];
			header("Location: actualizar_usuario.php"); // esto lo mandara a la pagina ya logeado
		}else {
			echo "<script>
				alert('USUARIO O PASSWORD INCORRECTO');
				
			</script>";
			
		}
	}


// window.location = 'experimentos.php';
 ?>