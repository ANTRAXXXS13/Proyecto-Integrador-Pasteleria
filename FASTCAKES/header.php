

<body>
	<header>
		
		<?php 
			include_once 'modalLRForm.php';
		?>



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
				<div class="collapse navbar-collapse" id="navbarColor01">
					
					<!--lista de menu-->
					<ul class="navbar-nav mx-auto">
						
						<li class="nav-item dropdown ">
							<a class="nav-link dropdown-toggle mx-3" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">TIENDA</a>
							<div class="dropdown-menu dropdown-primary ml-3 mt-2 bg-primary border-0" aria-labelledby="navbarDropdownMenuLink">

		  
							<a class="dropdown-item" href="#">Express</a>
							<a class="dropdown-item" href="personalizados.php">Personalizados</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item text-white">Descuentos</a>
							</div>
						</li>

						<li class="nav-item">
							<a class="nav-link mx-3" href=rastrea.php>RASTREA TU PEDIDO</a>
						</li>
					
					</ul>
					<!--/lista de menu-->

					

					<!--búsqueda//este tiene que ser un form, pero dejemosolo para luego...-->
					<?php include ("barra_busqueda.php") ?>
					<!--/búsqueda-->

					<ul class="navbar-nav ml-3">
					

						<li class="nav-item">
							<a href="#" class="btn btn-outline btn-rounded p-2 mr-sm-2" id="btnModalLRForm" data-toggle="modal" data-target="#modalLRForm"><i class="fas fa-user text-white"></i></a>
						</li>
								
						<li class="nav-item">
										
							<a href="#" class="btn btn-md p-2 mr-sm-2"  role="button" aria-pressed="true"><i class="fas fa-shopping-cart text-white"></i>
							</a>
						</li>
					</ul>
				</div>
				
 
			</nav>
	</header>

	