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
	<style type="text/css">
	
		ul, ol{
			list-style: none;
		}

		.nav li a {
			background-color: #fa576f;
			color: #fff;
			text-decoration: none;
			display: block; 
			
		}
		 .nav li a:hover {
		 	background-color: #434343
		 }
		.nav > li {
			float: left;
		}

		.nav li ul {
			display: none;
			position: absolute;
			min-width: 140px;
		}

		.nav li:hover > ul {
			display: block;
		}
		.navbar-nav li:hover > ul {
			display: block;
		}


	</style>
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
						<li class="nav-item dropdown"><a class="nav-link" href="tienda.php">PASTELES</a>
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
								<ul class="nav">
									
									<li><a href="#">BIENVENIDO </a>
										<ul>
											<li><a class="dropdown-item text-white" href="actualizar_usuario.php">Perfil</a></li>
											<li><a href="conexion/salir.php">Salir</a></li>
										</ul>
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