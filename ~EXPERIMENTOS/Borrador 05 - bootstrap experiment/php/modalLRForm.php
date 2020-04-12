<?php

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>--Experimenta aqui</title>

	<!-- Bootstrap CDN-->

	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->

	<!--Modified Bootstrap-->
	<link rel="stylesheet" href="./css/bootstrap.min.css" />


	<!-- Font Awesome CDN -->
	<script src="https://kit.fontawesome.com/839392f4bf.js" crossorigin="anonymous"></script>

	

	<!--Custom Stylesheet-->
	 <link rel="stylesheet" href="./css/custom.css" /> 

	

	<!--css Date Picker-->
	<link rel="stylesheet" href="css/bootstrap-datepicker.standalone.css" />

</head>


<body>
    <!--Modal: Login / Register Form-->
    <div class="modal fade" id="modalLRForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog cascading-modal" role="document">
        <!--Content-->
            <div class="modal-content">

            

                <!--Modal cascading tabs-->
                <div class="modal-c-tabs">

                <!-- Nav tabs -->
                    <ul class="nav nav-tabs md-tabs tabs-2" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#login" role="tab"><i class="fas fa-user mr-1"></i>
                            Ingresar</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#registro" role="tab"><i class="fas fa-user-plus mr-1"></i>
                            Registro</a>
                        </li>
                    </ul>
            
                <!-- Tab panels -->
                    <div class="tab-content">
                        <!--Panel 7-->
                        <div class="tab-pane fade in show active" id="login" role="tabpanel">
        
                            <!--Body-->
                            <div class="modal-body mb-1">

                                <div class="form-row">
                                    <div class="form-group input-group col-md">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-light"> <i class="far fa-envelope text-info"></i></span>
                                        </div>

                                        <input type="email" id="modalLoginCorreo" name="modalLoginCorreo" class="form-control validate" id="modalRegisUser" placeholder="correo electrónico" required>

                                        <!--<label data-error="wrong" data-success="right" for="modalLoginCorreo"></label>-->
                                        <div class="invalid-feedback">*Es necesario completar este campo</div>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group input-group col-md">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-light"> <i class="fas fa-key text-info"></i></span>
                                        </div>

                                        <input type="password" id="modalLoginPass" name="modalLoginPass" class="form-control validate"  placeholder="contraseña" required>

                                        <!--<label data-error="wrong" data-success="right" for="modalLoginCorreo"></label>-->
                                        <div class="invalid-feedback">*Es necesario completar este campo</div>
                                    </div>
                                </div>

                                <div class="text-center mt-2">
                                    <button class="btn btn-info">Ingresa<i class="fas fa-sign-in ml-1"></i></button>
                                </div>
                            </div>


                            <!--Footer-->
                            <div class="modal-footer">
                                <div class="options text-center text-md-right mt-1">
                                    <p>¿Aún no tienes cuenta? <a href="#">Regístrate</a></p>
                                    <p>Olvidé mi <a href="#">Contraseña</a></p>
                                </div>
                                <button type="button" id="modalLoginButton" name="modalLoginButton" class="btn btn-outline-info ml-auto" data-dismiss="modal">Cerrar</button>
                            </div>
                        
                        </div>
                        <!--/.Panel 7-->
        
                        <!--Panel 8-->
                        <div class="tab-pane fade" id="registro" role="tabpanel">
        
                            <!--Body-->
                            <div class="modal-body">
                                
                                <h6 class="card-title text-left text-info mb-1 mt-2">DATOS PERSONALES</h6>
                                
                                <hr>		

                            <!---->	

                            <div class="needs-validation" novalidate>
                                <div class="form-row">

                                    <div class="form-group col-md">

                                        <!--<label for="modalRegisNom">Nombre(s)
                                        </label>-->
                                        <input type="text" class="form-control" id="modalRegisNom" placeholder="Nombre(s)" required>
                                        <div class="invalid-feedback">
                                            *Es necesario completar este campo
                                        </div>
                                    </div>

                                </div>
                            

                                <div class="form-row">

                                    <div class="form-group col-md-6">

                                        <!--<label for="modalRegisNom">Nombre(s)
                                        </label>-->
                                        <input type="text" class="form-control" id="modalRegisAPat" placeholder="Apellido Paterno" required>
                                        <div class="invalid-feedback">
                                            *Es necesario completar este campo
                                        </div>
                                    </div>


                                    <div class="form-group col-md-6">

                                        <!--<label for="modalRegisNom">Nombre(s)
                                        </label>-->
                                        <input type="text" class="form-control" id="modalRegisAMat" placeholder="Apellido Materno" required>
                                        <div class="invalid-feedback">
                                            *Es necesario completar este campo
                                        </div>
                                    </div>
                                    
                                </div>
                            
                                <div class="form-row">

                                    <div class="form-group input-group col-md">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-light"> <i class="fas fa-calendar-alt text-info"></i></span>
                                        </div>

                                        <input type="text"  class="form-control" id="modalRegisFechaNac" placeholder="Fecha de nacimiento" required>
                                        <div class="invalid-feedback">*Es necesario completar este campo</div>
                                        
                                    </div>

                                </div>

                                <h6 class="card-title text-left text-info mb-1 mt-3">DIRECCIÓN</h6>
                                <hr>

                                <div class="form-row">

                                    <div class="form-group col-md-8">

                                        <input type="text" class="form-control" id="modalRegisCalle" placeholder="Calle" required>
                                        
                                        <div class="invalid-feedback">
                                            *Es necesario completar este campo
                                        </div>

                                    </div>

                                    <div class="form-group col-md-4">

                                        <input type="text" class="form-control" id="modalRegisNumExt" placeholder="Num. Ext" required>
                                        
                                        <div class="invalid-feedback">
                                            *Es necesario completar este campo
                                        </div>

                                    </div>

                                </div>

                                <div class="form-row">

                                    <div class="form-group col-md-2">

                                        <input type="text" class="form-control" id="modalRegisInt" placeholder="Int">
                                        
                                    </div>

                                    <div class="form-group col-md-6">

                                        <!--<label for="modalRegisNom">Nombre(s)
                                        </label>-->
                                        <input type="text" class="form-control" id="modalRegisCol" placeholder="Colonia" required>
                                        <div class="invalid-feedback">
                                            *Es necesario completar este campo
                                        </div>
                                    </div>	

                                    <div class="form-group col-md-4">

                                        <!--<label for="modalRegisNom">Nombre(s)
                                        </label>-->
                                        <input type="text" class="form-control" id="modalRegisCP" placeholder="Código Postal" required>
                                        <div class="invalid-feedback">
                                            *Es necesario completar este campo
                                        </div>
                                    </div>

                                </div>

                                <h6 class="card-title text-left text-info mb-1 mt-3">USUARIO</h6>
                                <hr>
                                
                                <div class="form-row">
                                    <div class="form-group input-group col-md">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-light"> <i class="far fa-envelope text-info"></i></span>
                                        </div>

                                        <input type="email"  class="form-control" id="modalRegisUser" placeholder="correo electrónico" required>
                                        <div class="invalid-feedback">*Es necesario completar este campo</div>
                                    </div>
                                </div>

                                <div class="form-row">

                                    <div class="form-group col-md">

                                        
                                        <input type="password" class="form-control" id="modalRegisPass1" placeholder="Contraseña" required>
                                        <div class="invalid-feedback">
                                            *Es necesario completar este campo
                                        </div>
                                    </div>




                                                                <h1>Create new account</h1>
                                <form action="/newaccount" method=post
                                    oninput='up2.setCustomValidity(up2.value != up.value ? "Passwords do not match." : "")'>
                                <p>
                                <label for="username">E-mail address:</label>
                                <input id="username" type=email required name=un>
                                <p>
                                <label for="password1">Password:</label>
                                <input id="password1" type=password required name=up>
                                <p>
                                <label for="password2">Confirm password:</label>
                                <input id="password2" type=password name=up2>
                                <p>
                                <input type=submit value="Create account">
                                </form>

                                </div>

                                <div class="form-row">

                                    <div class="form-group input-group col-md-8">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-light"> <i class="fas fa-user-circle text-info"></i></span>
                                        </div>

                                        <input type="text"  class="form-control" id="modalRegisPass" placeholder="Contraseña" required>
                                        <div class="invalid-feedback">*Es necesario completar este campo</div>
                                        
                                    </div>

                                </div>


                            </div>


                            <!--<div class="container">
                                <div class="form-row">
                                <div class="col-md-">
                                    <div class="input-group">
                                    <span class="input-group-addon">
                                        <input type="checkbox">
                                    </span>
                                    
                                    <input type="text" id="tbox" class="form-control">
                                    </div>
                                </div>
                                </div>
                            </div>



                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    
                                    <div class="btn-group" data-toggle="buttons" id="modalLRInputRegisNumInt">
                                        <label class="btn btn-default">
                                        <input type="checkbox">
                                        </label>
                                    </div>
                                    
                                    <input type="text" disabled="disabled" class="form-control" id="modalLRInputRegisNumInt" placeholder="Num. Int">
                                
                                </div>	
                            </div> -->

                            
                            
                            

                                

                                

                                
                                <div class="text-center form-sm mt-2">
                                    <button class="btn btn-info">Crear cuenta<i class="fas fa-sign-in ml-1"></i></button>
                                </div>

                            </div>
                            <!--Footer-->
                            <div class="modal-footer">
                                <div class="options text-right">
                                    <p class="pt-1">¿Ya tienes cuenta? <a href="#">Ingresa aquí</a></p>
                                </div>
                                <button type="button" class="btn btn-outline-info ml-auto" data-dismiss="modal">Cerrar</button>
                            </div>
                        </div>
                    <!--/.Panel Registro-->
                    </div>

                </div>
            </div>
    <!--/.Content-->
        </div>
    </div>
    <!--/Modal: Login / Register Form-->


    <ul class="navbar-nav">

					<li class="nav-item">
						<a href="#" class="btn btn-outline btn-rounded p-2 mr-sm-2" data-toggle="modal" data-target="#modalLRForm"><i class="fas fa-user"></i></a>
					</li>
							
					<li class="nav-item">
									
						<a href="#" class="btn btn-md p-2 mr-sm-2" id="carrito" role="button" aria-pressed="true"><i class="fas fa-shopping-cart"></i>
						</a>
					</li>
				</ul>

   
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	
	<!--Obligatorio que la libreria datepicker este en el footer justo despues de los js de bootstrap para no causar conflicto-->
	
	<script src="js/bootstrap-datepicker.min.js"> </script>
	
	<script src="locales/bootstrap-datepicker.es.min.js"></script>
	
	<!-- js para personalizar -->
	<script src="js/apps.js"></script>






</body>
</html>
	
