<?php
	include("conexion/conexion.php");
	
	ob_start();
	if (!isset($_SESSION['id_usuario'])) {
		header("Location: index.php");
	}else{
		$idusu = $_SESSION['id_usuario'];
		$sql = "select nombre, a_paterno, a_materno, fecha_nacimiento, correo, passwd, celular, calle, colonia, num_ext, num_int, codigo_postal from usuario where id ='$idusu'";
		$resultado = $conexion->query($sql);
		$row = $resultado->fetch_assoc();
		$nombre = $row['nombre'];
	}
?>
<head>
	<!--Modified Bootstrap-->
	<link rel="stylesheet" href="css/bootstrap.min.css" />

	<!--jquery-->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

	<!--Datepicker Stylesheet-->
	<link rel="stylesheet" href="css/bootstrap-datepicker.min.css">


	<!-- Font Awesome CDN -->
	<script src="https://kit.fontawesome.com/839392f4bf.js" crossorigin="anonymous"></script>

	<!--Custom Stylesheet-->
	<link rel="stylesheet" href="css/styles.css">

</head>
<body>
	<header>
		<!--
		<?php /*
			include_once 'modalLRForm.php';*/
		?>
		-->


		<!--INICIO MENU/NAVBAR-->
			<!--brand-->
			<nav class="navbar navbar-expand-sm navbar-dark bg-primary sticky-top" role="navigation">
			<!--/brand-->	
				<a class="navbar-brand logo text-white" href="index.php">Fastcakes</a>

				<!--boton toggle-->
				<button class="navbar-toggler"  type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="true" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<!--/boton toggle-->

				<!--qué es lo que se colapsará-->
				<div class="collapse navbar-collapse">
					<!--lista de menu-->
					<ul class="navbar-nav mx-auto">
						<li class="nav-item dropdown"><a class="nav-link" href="#tienda.php">PASTELES</a>
							<ul class="dropdown-menu mt-2 mr-8 bg-primary" aria-labelledby="navbarDropdown">
								<li>
									<a class="dropdown-item text-white"  href="#">Express</a>
								</li>
								<li>
									<a class="dropdown-item text-white" href="personalizados.php">Personalizados</a>
								</li>
								<div class="dropdown-divider"></div>
								<li>
									<a class="dropdown-item text-white" href="#">Descuentos</a>
								</li>								
							</ul>
						</li>

						<li class="nav-item">
							<a class="nav-link active" href="index.php">TIENDA <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="historial_pedido.php">RASTREA TU PEDIDO</a>
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
							<div id="header">
								<ul class="navbar-nav mx-auto">
						
							<li class="nav-item dropdown">
								<a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"><?php echo $nombre;?></a>
								
								<div class="dropdown-menu mt-2 mr-8 bg-primary " id="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item text-white" href="Actualizar_usuario.php" >Mi perfil</a>
								<a class="dropdown-item text-white" href="../conexion/salir.php">Salir</a>
								</div>
							</li>					
						</ul>
							</div>
						</div>
					</div>
					<ul class="navbar-nav ml-3">						
						<li class="nav-item">
										
							<a href="#" class="btn btn-md p-2 mr-sm-2"  role="button" aria-pressed="true"><i class="fas fa-shopping-cart text-white"></i>
							</a>
						</li>
					</ul>
				</div>
				
 
			</nav>
	</header>
</body>