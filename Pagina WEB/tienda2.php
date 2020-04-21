<?php
	include("conexion/conexion.php");
	// si el usuario trata de escribir manuelmente admin.php 
	// no podra ir porque lo retorna a aesta pagina
	session_start();
	ob_start();
	if (isset($_SESSION['id_usuario'])) {
		include_once 'header_log.php';	
	}else{
		include_once 'header.php';
	}
    $query2=mysqli_query($conexion,"select id, nombre, costo, descripcion from producto;");
 
    $query = "SELECT * FROM producto ORDER BY id;";  
    $result = mysqli_query($conexion, $query);  
 ?> 

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>FASTCAKES</title>

    
    
    <!--Modified Bootstrap-->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    
    
    

	

	<!--Custom Stylesheet-->
	<link rel="stylesheet" href="css/styles.css">

</head>
<body >

	<div class="container">

		
				
		<div class="row m-5">
			<div class="col-sm-12  text-center">
				<a href="#todos" class="btn btn-link btn-lg px-4 py-1 mx-5 list-inline-item active " role="button" aria-pressed="true">Todos</a>
				<a href="#express" class="btn btn-link btn-lg px-4 py-1 mx-5 list-inline-item" role="button">EXPRESS</a></li>
				<a href="#desc" class="btn btn-link btn-lg px-4 py-1 mx-5 list-inline-item" role="button" aria-pressed="true">Descuentos</a>
				<hr>
			</div>
			
		</div>
		<div class="row">
			
            <?php  
                while($row = mysqli_fetch_array($result)) {  
            ?>  
			<div class="col-sm-6 col-md-3">
				
				<div class="card shadow p-0 mb-5 bg-white rounded">
					<img class="card-img-top img-fluid" src="img/foto_<?php echo $row['id'];?>.jpg" >
					<hr>

					<div class="card-body">
							
						<h4 class="card-title"><?php echo $row['nombre'];?> </h4>
						<p class="card-text">
                             
                            <button type="button" class="btn btn-info btn-sm float-right" data-tippy-content="Tooltip" id="<?php echo $row['id']; ?>"><small>Descripción:</small></button>

                            
                             
                            <br>
                            

							<?php echo $row['descripcion'];?> 
						</p>
						<br>

						<select class="form-control form-control-sm">
							<option><?php echo $row['costo'];?></option>
						</select>
						
						<br>

						<div class="text-center">
							<button class="btn btn-primary my-cart-btn" data-id="1" data-name="product 1" data-summary="summary 1" data-price="120" data-quantity="1" data-image="img/01.jpg">Agregar al carrito
							</button>
						</div>
					</div>
				</div>					
				<!-- /.card -->
			</div>
			<?php } ?>	
			



		</div>
		<!-- /.row -->


	</div>
	<!-- /.container -->
    
    <script>  
      $(document).ready(function(){  
           $('[data-toggle="popover"]').popover({  
                title:fetchData,  
                html:true,  
                placement:'right'  
           });  
           function fetchData(){  
                var fetch_data = '';  
                var element = $(this);  
                var id = element.attr("id");  
                $.ajax({  
                     url:"conexion/fetch.php",  
                     method:"POST",  
                     async:false,  
                     data:{id:id},  
                     success:function(data){  
                          fetch_data = data;  
                     }  
                });  
                return fetch_data;  
           }  
      });  
 </script>  


<script src="">
 
tippy('[data-tippy-content]', {
  content: 'Loading...',
  onShow(instance) {
    function fetchData(){  
                var fetch_data = '';  
                var element = $(this);  
                var id = element.attr("id");  
                $.ajax({  
                     url:"conexion/fetch.php",  
                     method:"POST",  
                     async:false,  
                     data:{id:id},  
                     success:function(data){  
                          fetch_data = data;  
                     }  
                });  
                return fetch_data;  
           }  
  },
});</script>


<script src="">
//*INITIATE TIPPY.JS TOOL TIPS*/
$(document).ready(function() {
	"use strict";
    
    $('body').on('mouseenter', '.tippy', function(e) {
              tippy('[data-tippy-content]', {
                title:fetchData,  
                html:true,  
                placement:'right'  
                onShow: function fetchData(){  
                var fetch_data = '';  
                var element = $(this);  
                var id = element.attr("id");  
                $.ajax({  
                     url:"conexion/fetch.php",  
                     method:"POST",  
                     async:false,  
                     data:{id:id},  
                     success:function(data){  
                          fetch_data = data;  
                     }  
                });  
                return fetch_data;  
           }  
              })
    });
});

</script>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->

<!--jquery-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script> 


 <!--Popper-->
 <script src="https://unpkg.com/@popperjs/core@2"></script>

 
 <script src="https://unpkg.com/tippy.js@6"></script>


 <!--Bootstrap js-->
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

     <!-- Font Awesome CDN -->
	<script src="https://kit.fontawesome.com/839392f4bf.js" crossorigin="anonymous"></script>




 	

	
	
</body>
</html>

