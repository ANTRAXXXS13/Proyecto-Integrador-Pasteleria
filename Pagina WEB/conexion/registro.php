<?php

    //Check if user has clicked the submit button
    if(isset($_POST['submit'])) {

        //Include database connection
       include_once 'conexion.php';

        //And we get the data from the signup form
        $nombre = mysqli_real_escape_string($conn, $_POST['nombre']);
        $aPat = mysqli_real_escape_string($conn, $_POST['aPat']);
        $aMat = mysqli_real_escape_string($conn, $_POST['aMat']);
        $fechNac = mysqli_real_escape_string($conn, $_POST['fechNac']);
        $calle = mysqli_real_escape_string($conn, $_POST['calle']);
        $numExt = mysqli_real_escape_string($conn, $_POST['numExt']);
        $numInt = mysqli_real_escape_string($conn, $_POST['numInt']);
        $colonia = mysqli_real_escape_string($conn, $_POST['colonia']);
        $codPost = mysqli_real_escape_string($conn, $_POST['codPost']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $pass = mysqli_real_escape_string($conn, $_POST['pass']);
    
       

        //Check if fields are not empty
        if ( empty($nombre) || empty($aPat) || empty($aMat)|| empty($fechNac)|| empty($calle)|| empty($numExt) || empty($colonia)|| empty($codPost)|| empty($email)|| empty($pass)) {
            header("Location: index.php?signup=empty");
            exit();
        } 
        else {
            //check if characters are valid
            if (!preg_match("/^[a-zA-Z]*$/", $nombre) || !preg_match("/^[a-zA-Z]*$/", $aPat) || !preg_match("/^[a-zA-Z]*$/", $aMat)) {
               /* header("Location: ../prueba_formulario_tutorial.php?signup=char &first=$first&last=$last&uid=$uid");*/
                header("Location: index.php?signup=invalidchar");
                exit();
            } 
            else {

                //check if the email is valid
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                   /* header("Location: ../prueba_formulario_tutorial.php?signup=invalidemail&first=$first&last=$last&uid=$uid");*/
                    header("Location: ../index.php?signup=invalidemail");
                    exit();
                }
                else {
                    $sql = "SELECT * FROM usuarios WHERE email='$email'";
                    $result = mysqli_query($conn, $sql);
                    $resultCheck = mysqli_num_rows($result);

                    if ($resultCheck > 0) {
                        header("Location: ../index.php?signup=emailtaken");
                        exit();

                    }
                    else {
                        //Hashing pass
                        $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

                        //insert user into database
                        $sql = "INSERT INTO usuarios (nomUsuario, aPat, aMat, fechNac, calle, numExt, numInt, colonia, codPost, email, pass) VALUES ($nombre, $aPat, $aMat, $fechNac, $calle, $numExt, $numInt, $colonia, $codPost, $email, $hashedPwd);";
                        mysqli_query($conn, $sql);

                        header("Location:../index.php?signup=success"); //este en realidad debe llevearnos a otro lugar(?)
                    exit();  

                    }


                                                               
                }
            }
        }
    } 
    else {
     header("Location: ../index.php");
     exit();
    }        
?>