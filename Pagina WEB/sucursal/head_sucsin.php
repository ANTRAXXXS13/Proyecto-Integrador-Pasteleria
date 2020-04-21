<?php
	include("../conexion/conexion.php");
	// si el usuario trata de escribir manuelmente admin.php 
	// no podra ir porque lo retorna a aesta pagina
	session_start();
	ob_start();
	if (isset($_SESSION['id_sucursal'])) {
		header("Location: mis_pasteles.php");	
	}
	
?>


<head>
<?php 
    include_once '../css_files.php';
?>
</head>

<body>
	<header>

		<nav class="navbar navbar-expand-sm navbar-dark bg-primary fixed-top" role="navigation">
			<!--/brand-->	
			<a class="navbar-brand logo text-white" href="../index.php">Fastcakes sucursal</a>
				<!--qué es lo que se colapsará-->
			<div class="collapse navbar-collapse" id="navbarColor01">
					<!--lista de menu-->
				<ul class="navbar-nav mx-auto">
					<li class="nav-item dropdown">
						<a class="nav-link" href="#"  role="button" >ACCEDE PARA PODER VER
						LAS OPCIONES DE LA SUCURSAL</a>			
				</ul>				
			</div>
		</nav>
	</header>

	<?php 
    include_once '../script_files.php';
?>
</body>		