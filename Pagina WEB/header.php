



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
						
						<li class="nav-item dropdown">
							<a class="nav-link" href="#tienda" id="navbarDropdown" role="button" data-toggle="dropdown">PASTELES</a>
							
							<div class="dropdown-menu mt-2 mr-8 bg-primary " id="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item text-white" href="#">Express</a>
							<a class="dropdown-item text-white" href="personalizados.php">Personalizados</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item text-white" href="#">Descuentos</a>
							</div>
						</li>

						<li class="nav-item">
							<a class="nav-link active" href="#tienda">TIENDA <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href=rastrea.php>RASTREA TU PEDIDO</a>
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
