
<?php include("css_files.php");?>

<!-- Accordion -->
<div class="fixed-bottom accordion"> 
    <div class="card  align-middle"> 
        <button class="collapsed rounded bg-secondary border-0 p-1" data-toggle="collapse"  data-target="#collapseOne"> 
            
        <a class="btn btn-sm btn-primary float-left ml-1" href="sucursal/login_suc.php" role="button"><i class="fas fa-store"></i></a>
            <!-- Copyright -->
            <div class="footer-copyright text-center text-light">¿Problemas con tu pedido?
                <a class="text-light text-right" href="#footer"> Haz clic aquí</a>
                <i class="fas fa-angle-double-up float-right" id="plus-minus"></i> 
            </div>
            <!-- Copyright -->
            
        </button> 

            <!-- Accordion -->    
             <div id="collapseOne" class="collapse px-0 bg-light text-info" data-parent=".accordion"> 
         
                <footer class="pt-4 mx-4 mt-1">

                    <!-- Footer Links -->
                    <div class="text-center text-md-left mx-3 px-2">

                        <!-- Grid row -->
                        <div class="row">

                            <!-- Grid column -->
                            <div class="col-md-4 mt-md-0 mt-3">
                                <div class="mb-5">
                                    <!-- Content -->
                                    <h5 class="font-weight-bold text-uppercase mt-3 mb-4 pl-3">Quienes Somos</h5>
                                    <hr>
                                    <p><small> Erick, Pepe y Erika son simples mortales, estudiantes de la carrera de Ing. en Desarrollo de Aplicaciones Multiplataforma, y quienes le han dedicado sangre, sudor y algunas lágrimas para poder tener una aplicación presentable. Esperamos el esfuerzo se haya podido percibir. <i class="far fa-smile text-primary"></i> </small></p>

                                </div>
                                


                                <div>
                                    <h5 class="font-weight-bold text-uppercase mt-5 mb-4 pl-3">Mapa de Sitio</h5>
                                    <hr>
                                        <div class="col-sm-6 float-left">
                                            <ul class="navbar-nav ">

                                            <li><a href="#tienda">Tienda</a></li>
                                                <li><a href="#">Ordenar un Pastel Personalizado</a></li>
                                                <li><a href="#">Rastrear orden</a></li>
                                                <li><a href="#">Historial de Pedidos</a></li>
                                                
                                            </ul>
                                        </div>
                                        <div class="col-sm-6 float-right">
                                            <ul class="navbar-nav">
                                                <li><a class="text-muted" href="">Terminos y Condiciones</a></li>
                                                <li><a class="text-muted" href="">Políticas de privacidad</a></li>
                                                <li><a href="#">Sitio Empresarial</a></li>
                                            </ul>
                                        </div>
                                </div>

                                
                                



                            </div>                            
                            <!-- Grid column -->




                           <!-- Grid column -->
                           <div class="col-md-8 mt-md-0 mt-3">
                                        
                                <h5 class="font-weight-bold text-uppercase mt-3 mb-4 pl-3">Reportar un problema</h5>

                                <hr>
                                
                                <?php include("reportar_prob.php")?>
                                
                            </div>

                            
                                  
                            <!-- Grid column -->
 
                        </div>
                        <!-- Grid row -->

                    </div>
                    <!-- Footer Links -->

                    <hr>
                    </footer> 
                    
                    <div class="container ">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12 m-0 text-center">
                                <p class="copyright-text"><small> Síguenos en nuestras redes sociales</small>
                                    <a type="button" class="btn-floating btn-fb btn-sm">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>    
                                
                                    <a type="button" class="btn-floating btn-fb btn-sm">
                                        <i class="fab fa-twitter"></i>
                                    </a>    
                                
                                    <a type="button" class="btn-floating btn-fb btn-sm">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>    
                                
                                    <a type="button" class="btn-floating btn-fb btn-sm">
                                        <i class="fab fa-github"></i>
                                    </a>  
                                        
                                </p>
                            </div>
                            
                              
        
                        </div> 
                    </div> 
               
            </div>
    </div>
                        
</div>
<!-- Footer -->   

<?php include("script_files.php");?>	


<script> 
		$('[data-toggle="collapse"]').click(function() { 
			$(this).find('i').toggleClass('fas fa-angle-double-up fas fa-angle-double-down'); 
		}); 
	</script> 