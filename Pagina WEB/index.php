<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>FASTCAKES</title>

	<!-- Bootstrap CDN-->

	<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">-->
	
	

	<!--Modified Bootstrap-->
	<link rel="stylesheet" href="css/bootstrap.min.css" />

	<!--jquery-->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

	<!-- Font Awesome CDN -->
	<script src="https://kit.fontawesome.com/839392f4bf.js" crossorigin="anonymous"></script>

	<!--Custom Stylesheet-->
	<link rel="stylesheet" href="css/styles.css">

</head>

<body>

	<header></header>

	<section class="scroll pt-5 pb-5 mt-0 align-items-center d-flex bg-dark" style="height:100vh; background-size: cover; background-image: url(img/local/front-end_imgs/index_webcake03.jpg);">
	
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

	<!--<div id="bazinga">Bazinga!</div>-->


	<section class="scroll" id="tienda">
	
		<?php 
		
			include_once 'tienda.php';

		?>

	</section>
	



	<!--Bootstrap js-->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	
	<!-- Smooth Scroll-->
	<script src="js/smooth-scroll.js"></script>

	<!--Ajax Popper-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

	<!-- js para personalizar -->
	<script src="js/main.js"></script>

	<script>
		var scroll = new SmoothScroll('a[href*="#"]');
	</script>




    

</body>
</html>


