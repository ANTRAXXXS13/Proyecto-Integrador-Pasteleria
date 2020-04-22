<?php
include("conexion.php");
		$idpedido=1;
	    $query="call sacar_status('$idpedido');";
	    $resultado = $conexion->query($query);
		$row = $resultado->fetch_assoc();
		$idsta = $row['id_status_pedido'];


?>
<!DOCTYPE html>
<html>
<head>
	<title>Prueba de botones</title>
</head>
<body>


    <form action="lol_pru.php"  method="POST" >
		
		  <?php if ($idsta == 7) {?> 
              <button type="submit" name="preparacion" id="preparacion">En preparacion</button>
    	<?php } ?>   
    	<?php if ($idsta == 9) {?> 
          <button type="submit"name="proentrega" id="proentrega">En proceso de entrega</button>
    	<?php } ?>   
    	<?php if ($idsta == 10) {?> 
       		<label>EN proceso de entrega</label>
    	<?php } ?> 
    	<?php if ($idsta == 11) {?> 
       		<label>Entregado</label>
    	<?php } ?>     
	</form>

</body>
</html>
