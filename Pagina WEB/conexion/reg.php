<?php
	// registrar al usuario
	if (isset($_POST["registrar"])) {
		include("conexion.php");
		$nombre = $_POST['nombre'];
        $aPat = $_POST['aPat'];
        $aMat = $_POST['aMat'];
        $fechNac = $_POST['fechNac'];
        $calle = $_POST['calle'];
        $numExt = $_POST['numExt'];
        $numInt = $_POST['numInt'];
        $colonia = $_POST['colonia'];
        $codPost = $_POST['codPost'];
        $email =  $_POST['email'];
        $pass = $_POST['pass'];
        $celular = $_POST['celular'];
    

		$sqluser = "select id FROM usuario
			 where correo = '$email'";
		$resultadouser = $conexion->query($sqluser);
		$filas= $resultadouser->num_rows;// cuenta
		if ($filas > 0) {
			echo "<script>
				alert('EL USUARIO YA EXISTE');
				window.location = '../index.php';
			</script>";
		}else{
			//insertar informacion del ususario
			 $conexion->query("call insert_usuario('$nombre', '$aPat', '$aMat', '$fechNac', '$email', '$pass', '$celular', '$calle', '$colonia','$NumExt', '$numInt', '$codPost');");    
			$resultadousuario =($conexion);
			if ($resultadousuario > 0) {
				echo "<script>
					alert('Tu cuenta fue creada!');
					window.location = '../index.php';
				</script>";
				mysqli_close($conexion);
			}else{
				echo "<script>
				alert('	ERROR AL REGISTRARSE');
				window.location = '../index.php';
			</script>";
			mysqli_close($conexion);
			}
		}

	}	
?>