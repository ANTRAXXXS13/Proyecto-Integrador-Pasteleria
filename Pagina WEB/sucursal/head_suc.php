<?php
	include("../conexion/conexion.php");
	/*
	ob_start();
	if (!isset($_SESSION['id_sucursal'])) {
		header("Location: ../index.php");
	}else{*/
		$idsuc = $_SESSION['id_sucursal'];
		$sql = "select left(nombre,8) as nombre from sucursal where id ='$idsuc'";
		$resultado = $conexion->query($sql);
		$row = $resultado->fetch_assoc();
		$nombre = $row['nombre'];
	/*}*/
?>
<head>

</head>

<body>
	<header>

		<nav class="navbar navbar-expand-sm navbar-dark bg-primary fixed-top" role="navigation">
			<!--/brand-->	
			<a class="navbar-brand logo text-white" href="#">Fastcakes sucursal</a>

				<!--boton toggle-->
			<button class="navbar-toggler"  type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="true" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
				<!--/boton toggle-->

				<!--qué es lo que se colapsará-->
			<div class="collapse navbar-collapse" id="navbarColor01">
					
					<!--lista de menu-->
				<ul class="navbar-nav mx-auto">
						
					<li class="nav-item dropdown">
						<a class="nav-link" href="mis_pasteles.php"  role="button" >MIS PASTELES</a>
						<li class="nav-item">
							<a class="nav-link" href="agregar_pasteles.php">AGREGAR PASTELES <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="RastrearPedido.php">ÚLTIMOS PEDIDOS</a>
					</li>

				
				</ul>
				<!--/lista de menu-->
				<!--búsqueda//este tiene que ser un form, pero dejemosolo para luego...-->
					<form class="form-inline">
						<input class="form-control" type="search" placeholder="Busca un pastel">
								<button class="btn btn-info btn-sm rounded-circle ml-2" type="submit">
									<i class="fas fa-search text-white"></i>	
										
								</button>	
					</form>
					<!--/búsqueda-->


				<div class="form-row">
					<div class="form-group col-md-1"></div>
					<div class="form-group col-md-4">		
						<ul class="navbar-nav mx-auto">
						
							<li class="nav-item dropdown">
								<a class="nav-link" href="#tienda" id="navbarDropdown" role="button" data-toggle="dropdown"><?php echo $nombre;?></a>
								
								<div class="dropdown-menu mt-2 mr-8 bg-primary " id="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item text-white" href="actualizar_sucursal.php" >Mi perfil</a>
								<a class="dropdown-item text-white" href="../conexion/salir.php">Salir</a>
								</div>
							</li>					
						</ul>
					</div>
					<div class="form-group col-md-2"></div>
				</div>
			</div>
		</nav>
	</header>

	
</body>		