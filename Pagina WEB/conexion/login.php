<?php 
	include("../conexion/conexion.php");
	if (isset($_POST["ingresar"])){ 

		$correo = $_POST['correo'];
		$password = $_POST['pass'];
		$passw_enc = sha1($password);
		$sql = "SELECT id from usuario 
			where correo = '$correo' AND passwd = '$passw_enc' ";
		$resultado = $conexion->query($sql);
		$rows = $resultado->num_rows;
		// si la consulta trae algo entra en el siguiente if
		if ($rows > 0) {
			$row = $resultado->fetch_assoc(); // 
			$_SESSION['id_usuario'] = $row["id"];
			header("Location: ../actualizar_usuario.php"); // esto lo mandara a la pagina ya logeado
		}else {
			echo "<script>
				alert('USUARIO O PASSWORD INCORRECTO');
				window.location = '../index.php';				
			</script>";
			
		}
	}
 ?>