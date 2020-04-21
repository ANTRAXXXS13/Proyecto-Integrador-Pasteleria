<?php 
            include("../conexion/conexion.php");
            $query=mysqli_query($conexion,"select * from sucursales_matriz;");
?>


<!DOCTYPE html>
<html>
<head>
    <title>Login de sucursal y registro</title>
    <!--Modified Bootstrap-->
        <link rel="stylesheet" href="../css/bootstrap.min.css" />
        <!-- Font Awesome CDN -->
        <script src="https://kit.fontawesome.com/839392f4bf.js" crossorigin="anonymous"></script>
        <!--Custom Stylesheet-->
         <link rel="stylesheet" href="../css/custom.css" /> 
         <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
         
        
</head>
<body>
     <?php 
        include_once 'head_sucsin.php';
    ?>
    <br>
    <br>
    <br>
    <br>
        <div class="container">
            <div class="col-md  ">
                <h6 class="text-info"><small>ENTRA A TU CUENTA SUCURSAL</small></h6>  
                            <hr>   
                <div class="form-row">

                    <div class="form-group input-group-sm col-md-8">
                        <!--Body-->
                        <div class="modal-body mb-1">

                            <form class="login-form" action="../conexion/login_suc.php" method="POST">
                                <!--Login: email-->
                                <div class="form-row">
                                    <div class="form-group input-group col-md">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-light"> <i class="far fa-envelope text-info"></i></span>
                                        </div>

                                        <input type="email" id="correo1" name="correo1" class="form-control validate" placeholder="correo electrónico">

                                        
                                    </div>
                                </div>

                                <!--Login: password-->
                                <div class="form-row">

                                    <div class="form-group input-group col-md">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-light"> <i class="fas fa-key text-info"></i></span>
                                        </div>

                                        <input type="password" class="form-control validate" id="passwd" name="passwd" placeholder="Contraseña" >
                                        
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
                                    
                                    <p><a href="pagsin_hacer.php">Olvidé mi Contraseña</a></p>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="form-row">
                <div class="form-group input-group-sm col-md-8">
                <hr><center>
                <h6 class="text-info"><small>REGISTRA TU SUCURSAL</small></h6>  </center>
                <hr>
                <br>  
                </div> 
                </div>
<!--            <=============================================================================================================-->
                <div class="form-row">

                    <div class="form-group input-group-sm col-md-8">
	                    <form class="signup-form" action="../conexion/registro_suc.php" method="POST" oninput='pass1.setCustomValidity(pass1.value != pass.value ? "¡Las contraseñas no concuerdan!." : "")'>

                            <h6 class="text-info"><small>DATOS DE LA SUCURSAL</small></h6>  
                            <hr>                                  
                            <!--Registro: Nombre-->
                            <div class="form-row">

                                <div class="form-group input-group-sm col-md">

                                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre(s)" autocomplete="off" required oninvalid="this.setCustomValidity('Favor de llenar el campo')" oninput="setCustomValidity('')"/>
                                    
                                </div>
                            </div>
                            <!--Registro: Apellidos-->
                            <div class="form-row">
                                <!--Apellido Paterno-->
                                <div class="form-group input-group-sm col-md">
                                     <input type="text" class="form-control" id="rfc" name="rfc" placeholder="RFC" autocomplete="off" required oninvalid="this.setCustomValidity('Favor de llenar el campo')" oninput="setCustomValidity('')"/>
                                </div>            
                            </div>

                            <!--Registro: Fecha de nacimiento-->
                            <div class="form-row">

                                <!--TELEFONO-->
                                <div class="form-group input-group input-group-sm col-md-6">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-light"> <i class="fa fa-phone text-info"></i> </span>
                                    </div>
                                    <input type="text" class="form-control" id="telefono" name="telefono"  placeholder="Número de teléfono" required oninvalid="this.setCustomValidity('Favor de llenar el campo')" oninput="setCustomValidity('')"/>
                                </div>
                                <div class="form-group col-md-6">
                                    <select  class="form-control form-control-sm" id="matriz" name="matriz">
                                        <option value="0">¿ES MATRÍZ?</option>
                                        <option value="no">NO</option>
                                         <option value="si">SI</option>                                          
                                    </select>
                                </div>

                            </div>

                            <!--<?php /*
                            if ("matriz" == "no")*/ {?> -->
                                <div class="form-row">
                                    <div class="form-group col-md">
                                        <select hidden="true" class="form-control form-control-sm" id="q_matriz" name="q_matriz"> 
                                            <option>¿QUÍEN ES SU MATRÍZ?</option>
                                            <?php while ($dat = mysqli_fetch_array($query)) {?> 
                                                <option  value="<?php echo $dat['id'];?>" > <?php echo $dat['nombre'];?> </option>
                                            <?php } ?>                                          
                                        </select>
                                    </div>
                                </div>
                          <!--  <?php  } ?>-->
                            <h6 class="text-info"><small>DIRECCIÓN</small></h6>
                            <hr>

                            <!--Registro: Direccion-->
                            <div class="form-row">

                                <!--Calle-->
                                <div class="form-group input-group-sm col-md-8">

                                    <input type="text" class="form-control" id="calle" name="calle"  placeholder="Calle" required oninvalid="this.setCustomValidity('Favor de llenar el campo')" oninput="setCustomValidity('')"/>
                                    
                                </div>

                                <!--Numero Exterior-->
                                <div class="form-group input-group-sm col-md-4">

                                    <input type="text" class="form-control" id="numExt" name="numExt" placeholder="Num. Ext" required oninvalid="this.setCustomValidity('Favor de llenar el campo')" oninput="setCustomValidity('')"/>
                                    

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


                                    <input type="text" class="form-control" id="colonia" name="colonia" placeholder="Colonia" required oninvalid="this.setCustomValidity('Favor de llenar el campo')" oninput="setCustomValidity('')"/>
                                    
                                </div>  

                                <!--Código Postal-->
                                <div class="form-group input-group-sm col-md-4">

                                    <input type="text" class="form-control" id="codPost" name="codPost" placeholder="Código Postal" required oninvalid="this.setCustomValidity('Favor de llenar el campo')" oninput="setCustomValidity('')"/>
                                    
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

                                    <input type="password" class="form-control validate" id="pass" name="pass" placeholder="Contraseña" required oninvalid="this.setCustomValidity('Favor de llenar el campo')" oninput="setCustomValidity('')"/>
                                    
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

                            <div class="form-row ">
                                <div class="form-group col-md text-center">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required oninvalid="this.setCustomValidity('Debes aceptar los términos y condiciones')" oninput="setCustomValidity('')"/>
                                        <label class="form-check-label text-info" for="invalidCheck" >
                                          Acepto los <a href="#">términos y condiciones.</a>
                                        </label>
                                        
                                    </div>
                                </div>
                            </div>

                            <div class="text-center form-sm mt-2">
                                <button class="btn btn-info" type="submit" id="registrar" name="registrar">Crear cuenta</button>
                            </div>
                        </form>
                    </div>
                
                </div>
        
            </div> 
        </div>  
        <br>
        <br>
        <br>
    <?php 
        include_once 'footer_suc.php';
    ?>
    
    <?php 
        include_once '../script_files.php';
    ?>
  


    <script type="text/javascript">
    let mat = document.getElementById('matriz');
    mat.addEventListener("change", function(){
        if (mat.value.toUpperCase() == 'NO') {
            document.getElementById('q_matriz').hidden = false;
        }else {
            
            document.getElementById('q_matriz').hidden  = true;
        }
    });
    </script>

</script>  
</body>
</html>