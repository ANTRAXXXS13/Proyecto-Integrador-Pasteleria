<?php
    // Parámetros a configurar para la conexión de la base de datos
    $dbServername = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "loginsystem";

    //Tabla
    //$tabla_db2 = "usuarios"; // tabla de usuarios
    $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

    if ($conn->connect_errno) {
        echo "Error en la conexión....";
    exit();
    } else {
        # code...
        echo "Conectando...¡conectado!";
    }
?>
