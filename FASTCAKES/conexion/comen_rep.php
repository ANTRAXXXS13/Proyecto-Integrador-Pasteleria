<?php  
	include_once 'conexion.php';
	if (isset($_POST['enviar'])) {		
			$nombre= mysqli_real_escape_string($conexion, $_POST['nombre']);
       	 	$correo = mysqli_real_escape_string($conexion, $_POST['correo']);
			$comentario= mysqli_real_escape_string($conexion, $_POST['comentario']);			
			$conexion -> query("call insert_comentario('$nombre','$correo', '$comentario');");
			echo "<script>
                        alert('Se agrego correctamenete el comentario');
                        window.location = '../index.php';
                    </script>";
	}else{
			echo "<script>
                        alert('No agrego comentario');
                        window.location = '../index.php';
                    </script>";
	}	

?>