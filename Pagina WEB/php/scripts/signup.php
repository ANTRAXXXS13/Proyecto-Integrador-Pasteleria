<?php

    //Check if user has clicked the submit button
    if(isset($_POST['submit'])) {

        //Include database connection
       include_once 'dbh.php';

        //And we get the data from the signup form
        $first = $_POST['first'];
        $last = $_POST['last'];
        $email = $_POST['email'];
        $uid = $_POST['uid'];
        $pwd = $_POST['pwd'];
        
       
    
       

        //Check if fields are not empty
        if (empty($first) || empty($last) || empty($email) || empty($uid) || empty($pwd)) {
            header("Location: ../prueba_formulario_tutorial.php?signup=empty");
            exit();
        } 
        else {
            //check if characters are valid
            if (!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last)) {
                header("Location: ../prueba_formulario_tutorial.php?signup=char&first=$first&last=$last&uid=$uid");
                exit();
            } 
            else {

                //check if the email is valid
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    header("Location: ../prueba_formulario_tutorial.php?signup=invalidemail&first=$first&last=$last&uid=$uid");
                    exit();
                }
                else {
                    header("Location:../prueba_formulario_tutorial.php?signup=success"); //este en realidad debe llevearnos a otro lugar(?)
                    exit();                                             
                }
            }
        }
    } 
    else {
     header("Location: ../prueba_formulario_tutorial.php");
     exit();
    }        
?>