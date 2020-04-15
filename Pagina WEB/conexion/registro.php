<?php

    //Check if user has clicked the submit button
    if(isset($_POST['registrar'])) {

        //Include database connection
       include_once 'conexion.php';

        //And we get the data from the signup form
        $nombre = mysqli_real_escape_string($conexion, $_POST['nombre']);
        $aPat = mysqli_real_escape_string($conexion, $_POST['aPat']);
        $aMat = mysqli_real_escape_string($conexion, $_POST['aMat']);
        $fechaz = $_POST["fechNac"];
        $f = str_replace('/', '-', $fechaz);
        $fechNac = date('Y-m-d', strtotime($f));
        $calle = mysqli_real_escape_string($conexion, $_POST['calle']);
        $numExt = mysqli_real_escape_string($conexion, $_POST['numExt']);
        $numInt = mysqli_real_escape_string($conexion, $_POST['numInt']);
        $colonia = mysqli_real_escape_string($conexion, $_POST['colonia']);
        $codPost = mysqli_real_escape_string($conexion, $_POST['codPost']);
        $email = mysqli_real_escape_string($conexion, $_POST['email']);
        $pass = mysqli_real_escape_string($conexion, $_POST['pass']);
        $celular = mysqli_real_escape_string($conexion, $_POST['celular']);
        
        //Check if fields are not empty
        if ( empty($nombre) || empty($aPat) || empty($aMat)|| empty($fechNac)|| empty($calle)|| empty($numExt) || empty($colonia)|| empty($codPost)|| empty($email)|| empty($pass)) {
            echo "<script>
                alert('Faltan datos por llenar');
                window.location = '../index.php';               
            </script>";


            exit();
        } 
        else {
<<<<<<< HEAD
            //check if characters are valid
            if (!preg_match("/^[a-zA-Z]*$/", $nombre) || !preg_match("/^[a-zA-Z]*$/", $aPat) || !preg_match("/^[a-zA-Z]*$/", $aMat)) {
              
                echo "<script>
                    alert('El nombre o los apellidos tiene caracteres no válidos');
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
                    $sql = "SELECT * FROM usuario WHERE correo = '$email'";
                    $result = mysqli_query($conexion, $sql);
                    $resultCheck = mysqli_num_rows($result);

                    if ($resultCheck > 0) {
                         echo "<script>
                            alert('EL USUARIO YA EXISTE');
                            window.location = '../index.php';
                        </script>";
                        exit();

                    }
                    else {
                        //insertar informacion del ususario
                        $conexion->query("call insert_usuario('$nombre', '$aPat', '$aMat', '$fechNac', '$email', '$pass', '$celular', '$calle', '$colonia','$numExt', '$numInt', '$codPost');");    
                        $resultadousuario =($conexion);
                        if ($resultadousuario > 0) {
                            echo "<script>
                                alert('Tu cuenta fue creada!, ahora tienes que iniciar sesion');
                                window.location = '../index.php';
                            </script>";
                            mysqli_close($conexion);
                        }else{
                            echo "<script>
                            alert(' ERROR AL REGISTRARSE');
                            window.location = '../index.php';
                        </script>";
                        mysqli_close($conexion);
                        }
                    }


                                                               
                }
            }
        }
=======

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
                $sql = "SELECT * FROM usuario WHERE correo = '$email'";
                $result = mysqli_query($conexion, $sql);
                $resultCheck = mysqli_num_rows($result);

                if ($resultCheck > 0) {
                        echo "<script>
                        alert('EL USUARIO YA EXISTE');
                        window.location = '../index.php';
                    </script>";
                    exit();

                }
                else {
                    //insertar informacion del ususario
                    $conexion->query("call insert_usuario('$nombre', '$aPat', '$aMat', '$fechNac', '$email', '$pass', '$celular', '$calle', '$colonia','$numExt', '$numInt', '$codPost');");    
                   
                    
                    echo "<script>
                        alert('Tu cuenta fue creada!, ahora tienes que iniciar sesion');
                        window.location = '../index.php';
                    </script>";
                    mysqli_close($conexion);
                    exit();
                    
                }


                                                            
            }
        }
    
>>>>>>> c241f21812236ff3e4deb7f13ba2b1b20965940a
    } 
    else {
        echo "<script>
                alert('error al registrarse');
                window.location = '../index.php';               
            </script>";
     
     exit();
    }        
?>