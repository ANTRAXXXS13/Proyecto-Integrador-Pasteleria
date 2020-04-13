 <?php
	$host= "localhost";
	$baseDeDatos= "proyectointegrador";
	$usuarioDB= "root";
	$claveDB= "";
	
	$conexion= new mysqli($host, $usuarioDB, $claveDB, $baseDeDatos);
	if ($conexion->connect_errno) {
		 echo "Error en la conexión";
		 exit();
	}
	
?>