<?php
	//se incluye la conexión
	include("Conexion.php");
	if (isset($_POST['ingresar'])) {	
		session_start();
		ob_start();
		$_SESSION['sesion_exito']=0;
		 //datos del formulario...
		$correo= $_POST['correo'];
		$contra=$_POST['pass'];
						 //si vienen vacios
		if(($correo == "")|| ($contra== "")){
			echo "¿Te crees gracioso?, Debes escribir los datos";
		}
		else{	
			$_SESSION['sesion_exito']=3;
			$resultados = mysqli_query($conexion,"SELECT * FROM usuario WHERE correo = '$correo' AND
			passwd = '$contra'");

			while($consulta = mysqli_fetch_array($resultados)){
				$_SESSION['sesion_exito']=1;
				header('Location:actualizar_usuario.php');
							//Inicio Sesion :D
			}
			if($_SESSION['sesion_exito']<>1){
				header('Location:index.php');
			}
		}
	}
			include("Cerrar_Conexion.php");
?>