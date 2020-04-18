<?php
	include("../conexion/conexion.php");
	
	ob_start();
	if (!isset($_SESSION['id_sucursal'])) {
		header("Location: index.php");
	}else{
		$idusu = $_SESSION['id_sucursal'];
		$sql = "select nombre from sucursal where id ='$idusu'";
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
<!-- Bootstrap CDN-->

	<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">-->
	
	

	<!--Modified Bootstrap-->
	<link rel="stylesheet" href="../css/bootstrap.min.css" />

	<!--jquery-->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

	<!--Datepicker Stylesheet-->
	<link rel="stylesheet" href="../css/bootstrap-datepicker.min.css">


	<!-- Font Awesome CDN -->
	<script src="https://kit.fontawesome.com/839392f4bf.js" crossorigin="anonymous"></script>

	<!--Custom Stylesheet-->
	<link rel="stylesheet" href="../css/styles.css">
</head>










<body>
	<header>

		<nav class="navbar navbar-expand-sm navbar-dark bg-primary fixed-top" role="navigation">
			<!--/brand-->	
			<a class="navbar-brand logo text-white" href="#">Fastcakes</a>

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
						<a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">MIS PASTELES</a>
							
						<div class="dropdown-menu  mt-3 mr-4 " id="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item text-white" href="Enfiestados.php">Express</a>
						<a class="dropdown-item text-white" href="Personalizados.php">Personalizalo</a>
						<div class="dropdown-divider"></div>
							<a class="dropdown-item text-white" href="Descuentos.php">Descuentos</a>
						</div>
						</li>

						<li class="nav-item">
							<a class="nav-link" href="#">AGREGAR PASTELES <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="RastrearPedido.php">ÚLTIMOS PEDIDOS PEDIDOS</a>
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
									
									<li><a href="#">BIENVENIDO </a><a href="#"> <?php echo $nombre;?></a>
										<ul>
											<li><a class="dropdown-item text-white" href="actualizar_usuario.php">Perfil</a></li>
											<li><a href="conexion/salir.php">Salir</a></li>
										</ul>
									</li>
								</ul>
							</div>
						</div>
						<div class="form-group col-md-1"></div>
					</div>
				
			</div>
		</nav>
	</header>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    
    <!--Obligatorio que la libreria datepicker este en el footer justo despues de los js de bootstrap para no causar conflicto-->
    
    <script src="../js/bootstrap-datepicker.min.js"> </script>
    
    <script src="../js/bootstrap-datepicker.es.min.js"></script>
    
    <!-- js para personalizar -->
    <script src="../js/apps.js"></script>
</body>		