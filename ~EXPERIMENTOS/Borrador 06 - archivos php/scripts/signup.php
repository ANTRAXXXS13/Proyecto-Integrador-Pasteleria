<?php
    include_once 'dbh.php';

    $first = $_POST['first'];
    $last = $_POST['last'];
    $email = $_POST['email'];
    $uid = $_POST['uid'];
    $pwd = $_POST['pwd'];
    

    $sql = "INSERT INTO usuario (user_first, user_last, user_email, user_uid, user_pwd) VALUES ('$first', '$last', '$email', '$email', '$uid', '$pwd');";
    mysqli_query($conn, $sql);

    header("Location: ../prueba_formulario_tutorial.php?signup=success");