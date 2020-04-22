<?php

    //Check if user has clicked the submit button
    if(isset($_POST['reportar_prob_btn'])) {

        //Include database connection
       include_once 'conexion.php';

        //And we get the data from the signup form
        $nombre = mysqli_real_escape_string($conexion, $_POST['reportar_prob_nombre']);
        $email = mysqli_real_escape_string($conexion, $_POST['reportar_prob_email']);
        $msg = mysqli_real_escape_string($conexion, $_POST['reportar_prob_msg']);
       
        
        //Check if fields are not empty
        if ( empty($nombre) ||  empty($email)|| empty($msg)) {
            echo "<script>
                alert('Faltan datos por llenar');
                window.location = '../footer.php';               
            </script>";


            exit();
        } 
        else {

            //check if the email is valid
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
               
                echo "<script>
                    alert('error en el correo');
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
    
    } 
    else {
        echo "<script>
                alert('Hubo un error al enviar el reporte, por favor intente de nuevo');
                window.location = '../footer.php';               
            </script>";
     
     exit();
    }        
?>