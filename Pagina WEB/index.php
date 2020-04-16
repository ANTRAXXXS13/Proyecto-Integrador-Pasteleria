<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>FASTCAKES</title>

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

	<header></header>

	<section id="index" class= "pt-5 pb-5 mt-0 align-items-center d-flex bg-dark" style="height:100vh; background-size: cover; background-image: url(img/index_webcake03.jpg);">
	
		<div class="container-fluid">

			<div class="row justify-content-center align-items-center d-flex text-center h-100">
				<div class="col-md-8 ">
					
					<h1 class="display-1 logo text-light py-0 my-3"><strong>Fastcakes</strong> </h1>
					
					<div class=" btn-container-wrapper p-relative d-block  zindex-1">
						<div>
							
							<a class="btn btn-sm mt-4 scroll align-self-center" data-scroll href="#tienda" >
								<h3 class="text-light">ORDENA AHORA</h3>
								<i class="fa fa-angle-down fa-4x text-light"></i>
							</a>  
						</div>	 
					</div>   
				</div>
				
			</div>
		</div>
	</section>

	<section class="scroll" id="tienda">
	
		<?php 
		
			include_once 'tienda.php'

		?>

	</section>
	
	<!-- Smooth Scroll-->
	<script src="js/smooth-scroll.js"></script>

    <!-- Smooth Scroll Polyfills-->
    <script src="js/smooth-scroll.polyfills.min.js"></script>



    <script>
	var scroll = new SmoothScroll('a[href*="#"]');
	</script>


    

</body>
</html>