<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>FASTCAKES</title>


	<?php 
    include_once 'css_files.php';
?>
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

	


	<section class="scroll" id="tienda">
	
		<?php 
		
			include_once 'tienda.php';

		?>

	</section>
	


	<?php 
    include_once 'script_files.php';
?>


	<script>
		var scroll = new SmoothScroll('a[href*="#"]');
	</script>




    

</body>
</html>


