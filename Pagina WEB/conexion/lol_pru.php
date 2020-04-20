<?php
include("conexion.php");
	if (isset($_POST['preparacion'])) {
		$sql = "update  pedido_statuspedido set id_status_pedido = 9 where id_pedido = 1;";
		$query=$conexion->query($sql);
		echo "<script>
			alert('Se a cambiado el estado');
			window.location = 'lol.php';
		</script>";
		exit();

	}
		if (isset($_POST['proentrega'])) {
		$sql = "update  pedido_statuspedido set id_status_pedido = 10 where id_pedido = 1;";
		$query=$conexion->query($sql);
		echo "<script>
			alert('Se a cambiado el estado');
			window.location = 'lol.php';
		</script>";
		exit();
	}

?>