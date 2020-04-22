<?php

    //Check if user has clicked the submit button
    if(isset($_POST['registrar'])) {

        //Include database connectiono
       include_once 'conexion.php';

        //And we get the data from the signup form
        $nombre = mysqli_real_escape_string($conexion, $_POST['nombre']);
        $rfc = mysqli_real_escape_string($conexion, $_POST['rfc']);
        $matriz = mysqli_real_escape_string($conexion, $_POST['matriz']);
        $q_matriz = mysqli_real_escape_string($conexion, $_POST['q_matriz']);
        $calle = mysqli_real_escape_string($conexion, $_POST['calle']);
        $numExt = mysqli_real_escape_string($conexion, $_POST['numExt']);
        $numInt = mysqli_real_escape_string($conexion, $_POST['numInt']);
        $colonia = mysqli_real_escape_string($conexion, $_POST['colonia']);
        $codPost = mysqli_real_escape_string($conexion, $_POST['codPost']);
        $email = mysqli_real_escape_string($conexion, $_POST['email']);
        $pass = mysqli_real_escape_string($conexion, $_POST['pass']);
        $telefono = mysqli_real_escape_string($conexion, $_POST['telefono']);/*
        */

       
        //Check if fields are not empty
        if ( empty($nombre) || empty($rfc) ||empty($telefono) || empty($calle)|| empty($numExt) || empty($colonia)|| empty($codPost)|| empty($email)|| empty($pass)) {
            echo "<script>
                alert('Faltan datos por llenar');
                window.location = '../index.php';               
            </script>";


            exit();
        } 
        else {

            //check if the email is valid
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                /* header("Location: ../prueba_formulario_tutorial.php?signup=invalidemail&first=$first&last=$last&uid=$uid");*/
                echo "<script>
                    alert('error en el correo');
                    window.location = '../index.php';               
                </script>";
                exit();
            }
            else {
                $sql = "call correo_sucursal('$email');";
                $result = mysqli_query($conexion, $sql);
                $resultCheck = mysqli_num_rows($result);

                if ($resultCheck > 0) {
                        echo "<script>
                        alert('EL USUARIO YA EXISTE');
                        window.location = '../index.php';
                    </script>";
                    exit();

                }else {
                    //insertar informacion del ususario
                    if ($matriz == 'si') {                       
                        $matriz = 1;

                        $conexion->query("call insert_sucursal('$nombre', '$calle', '$colonia', '$numExt', '$numInt', '$codPost', '$telefono', '$rfc', '$email',  '$pass', '$matriz');");                        
                    }
                    if ($matriz == 'no'){
                        $matriz= 0;
                        $conexion->query("call insert_sucursal2('$nombre', '$calle', '$colonia', '$numExt', '$numInt', '$codPost', '$telefono', '$rfc', '$email', '$pass', '$matriz', '$q_matriz');"); 
                    }
                    
                    $sql = "SELECT id from sucursal where correo = '$email';";
                    $resultado = $conexion->query($sql);
                    $rows = $resultado->num_rows;

                    if ($rows > 0) {
                         echo "<script>
                        alert('Tu cuenta fue creada!, ahora tienes que iniciar sesion');
                        window.location = '../index.php';
                    </script>";
                    mysqli_close($conexion);
                    exit();
                      
                    }else{
                          echo "<script>
                        alert('Tu cuenta no fue creada, vuelve a intentarlo');
                        window.location = '../index.php';
                         </script>";
                    mysqli_close($conexion);
                    exit();
                    }
    
                    
                 
                    
                }


                                                            
            }
        }
    
    } 
    else {
        echo "<script>
                alert('error al registrarse');
                window.location = '../index.php';               
            </script>";
     
     exit();
    }        
?>