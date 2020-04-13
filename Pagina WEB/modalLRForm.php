


<!--Modal: Login / Register Form-->
<div class="modal fade" id="modalLRForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

<div class="modal-dialog cascading-modal" role="document">
    <!--Content-->
    <div class="modal-content">

        <!--Cerrar modal-->
        <button type="button" class="close close-sm text-right mr-3 mt-2" data-dismiss="modal">x</button>

        <!--Modal cascading tabs-->
        <div class="modal-c-tabs">

            <!-- Nav tabs -->
            <ul class="nav nav-tabs md-tabs tabs-2" role="tablist">

                <li class="nav-item">
                    <a class="nav-link active text-info" data-toggle="tab" href="#login" role="tab"><i class="fas fa-user text-info mr-1"></i>Log in</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-primary" data-toggle="tab" href="#registro" role="tab"><i class="fas fa-user-plus mr-1"></i>Registro</a>
                </li>
            </ul>

            <!-- Tab panels -->
            <div class="tab-content">
                <!--Panel Login-->
                <div class="tab-pane fade in show active" id="login" role="tabpanel">

                    <!--Body-->
                    <div class="modal-body mb-1">

                        <form class="login-form" action="conexion/login.php" method="POST">
                            <!--Login: email-->
                            <div class="form-row">
                                <div class="form-group input-group col-md">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-light"> <i class="far fa-envelope text-info"></i></span>
                                    </div>

                                    <input type="email" id="correo" name="correo" class="form-control validate" placeholder="correo electrónico">

                                    
                                </div>
                            </div>

                            <!--Login: password-->
                            <div class="form-row">

                                <div class="form-group input-group col-md">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-light"> <i class="fas fa-key text-info"></i></span>
                                    </div>

                                    <input type="password" class="form-control validate" id="pass" name="pass" placeholder="contraseña" >
                                    
                                </div>
                            </div>

                            <div class="text-center mt-2">
                            <button class="btn btn-info" type="submit" id="ingresar" name="ingresar">Ingresar</button>
                            </div>
                        </form>
                    </div>
                    
                    <!--Footer-->

                    <div class="modal-footer">
                        <div class="options text-center text-md-right mt-1">
                                
                                <p>Olvidé mi <a href="#">Contraseña</a></p>
                        </div>
                        
                    </div>

                        


                </div>
                <!--/.Panel Login-->

                <!--Panel Registro-->
                <div class="tab-pane fade" id="registro" role="tabpanel">

                    <!--Body-->
                    <div class="modal-body">
                        <form class="signup-form" action="conexion/registro.php" method="POST">
                            <h6 class="text-info"><small>DATOS PERSONALES</small></h6>
                                    
                            <hr>		

                            <div class="needs-validation" novalidate>
                                
                            <!--Registro: Nombre-->
                            <div class="form-row">

                                    <div class="form-group input-group-sm col-md">

                                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre(s)" >
                                       
                                    </div>

                                </div>
                            </div>

                            <!--Registro: Apellidos-->
                            <div class="form-row">

                                <!--Apellido Paterno-->
                                <div class="form-group input-group-sm col-md-6">

                                    <input type="text" class="form-control" id="aPat" name="aPat" placeholder="Apellido Paterno" required>
                                    
                                </div>

                                <!--Apellido Materno-->
                                <div class="form-group input-group-sm col-md-6">

                                    <input type="text" class="form-control" id="aMat" name="aMat" placeholder="Apellido Materno" required>
                                    
                                </div>
                                        
                            </div>

                            <!--Registro: Fecha de nacimiento-->
                            <div class="form-row">

                                <div class="form-group input-group input-group-sm date col-md">
                                    
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-light"> <i class="fas fa-calendar-alt text-info"></i></span>
                                    </div>

                                    <input type="text" class="form-control"  id="fechNac" name="fechNac" placeholder="Fecha de nacimiento" required><!-- data-toggle="datepicker"-->
                                    
                                    
                                </div>
                            </div>
                            <!--CELULAR-->
                            <div class="form-row">

                                <div class="form-group input-group input-group-sm date col-md">
                                    <input type="text" class="form-control"  id="celular" name="celular" placeholder="Celular" required>
                                </div>
                            </div>

                            <h6 class="text-info"><small>DIRECCIÓN</small></h6>
                            <hr>

                            <!--Registro: Direccion-->
                            <div class="form-row">

                                <!--Calle-->
                                <div class="form-group input-group-sm col-md-8">

                                    <input type="text" class="form-control" id="calle" name="calle"  placeholder="Calle" required>
                                    
                                    

                                </div>

                                <!--Numero Exterior-->
                                <div class="form-group input-group-sm col-md-4">

                                    <input type="text" class="form-control" id="numExt" name="numExt" placeholder="Num. Ext" required>
                                    

                                </div>

                            </div>

                            <!--Registro: Direccion Pt2-->
                            <div class="form-row">

                                <!--Numero Interior-->
                                <div class="form-group input-group-sm col-md-2">

                                    <input type="text" class="form-control" id="numInt" name="numInt" placeholder="Int" >
                                    
                                </div>

                                <!--Colonia-->
                                <div class="form-group input-group-sm col-md-6">

                                    <input type="text" class="form-control" id="colonia" name="colonia" placeholder="Colonia" required >
                                    
                                </div>	

                                <!--Código Postal-->
                                <div class="form-group input-group-sm col-md-4">

                                    <input type="text" class="form-control" id="codPost" name="codPost" placeholder="Código Postal" required>
                                    
                                </div>

                            </div>

                            <h6 class="text-info"><small>USUARIO</small></h6>
                            <hr>
                            
                            <!--Registro: Correo Electrónico-->
                            <div class="form-row">

                                <div class="form-group input-group input-group-sm col-md">

                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-light"> <i class="far fa-envelope text-info"></i></span>
                                    </div>

                                    <input type="email"  class="form-control" id="email" name="email" placeholder="correo electrónico" required>
                                    
                                </div>
                            </div>

                            <!--Registro: Contraseña-->
                            <div class="form-row">

                                <div class="form-group input-group input-group-sm col-md">

                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-light"> <i class="fas fa-key text-info"></i></span>
                                    </div>

                                    <input type="password" class="form-control validate" id="pass" name="pass" placeholder="Contraseña" required >
                                    
                                </div>
                            </div>

                            <!--Registro: Confirmar contraseña-->
                            <div class="form-row">
                                <div class="form-group input-group input-group-sm col-md">

                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-light"> <i class="fas fa-key text-info"></i></span>
                                    </div>

                                    <input type="password" class="form-control validate" id="pass1" name="pass1" placeholder="Confirmar contraseña" >
                                    
                                </div>
                            </div>

                            <hr>

                            <div class="form-row">
                                <div class="form-group ">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck">
                                        <label class="form-check-label text-info" for="invalidCheck" required>
                                          Acepto los <a href="#">términos y condiciones.</a>
                                        </label>
                                        <div class="invalid-feedback">
                                            Se requiere aceptar los términos y condiciones
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="text-center form-sm mt-2">
                                <button class="btn btn-info" type="submit" id="registrar" name="registrar">Crear cuenta</button>
                            </div>
                        </form>
                            
                    </div>
                    

                    <!--Footer-->

                    <div class="modal-footer">
                        <div class="options text-center mt-1">
                                
                                <p>¿Repartidor? <a href="#">Regístrate acá</a></p>
                        </div>
                        
                    </div>
                    <!--/Footer-->


                    
                </div>
                <!--/Panel Registro-->
            </div>
            <!-- /Tab panels -->

        </div>
        <!--/Modal cascading tabs-->
    </div>
    <!--/.Content-->
</div>

</div>
<!--/Modal: Login / Register Form-->

