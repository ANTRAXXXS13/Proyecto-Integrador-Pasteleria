<?php

    //Check if user has clicked the submit button
    if(isset($_POST['agregar'])) {

        //Include database connection
       include_once 'conexion.php';
       session_start();
       ob_start();    
        $idsuc = $_SESSION['id_sucursal'];
        $nombre = mysqli_real_escape_string($conexion, $_POST['name']);
        $forma = mysqli_real_escape_string($conexion, $_POST['forma']);
        $tamaño = mysqli_real_escape_string($conexion, $_POST['tamaño']);
        $categoria = mysqli_real_escape_string($conexion, $_POST['categoria']);
        $descripcion = mysqli_real_escape_string($conexion, $_POST['descripcion']);
        $costo = mysqli_real_escape_string($conexion, $_POST['costo']);
        $imag= mysqli_real_escape_string($conexion, $_POST['nom_img']);  
        $topping= mysqli_real_escape_string($conexion, $_POST['topping']); 
        $masa = mysqli_real_escape_string($conexion, $_POST['masa']);  
        $relleno = mysqli_real_escape_string($conexion, $_POST['relleno']);
        $betun = mysqli_real_escape_string($conexion, $_POST['betun']);

        

                  //insertar informacion del producto
            $conexion->query("call agregar_prod('$categoria','$tamaño','$forma', '$nombre','$descripcion','$costo','$imag');");
            $ss=mysqli_query($conexion, "Select MAX(id) as id_maximo from producto;");
            if ($rr=mysqli_fetch_array($ss)) {
                    $id_maximo=$rr['id_maximo'];
                }
            $nameimagen=$_FILES['imagen']['name'];
            $tmpimagen=$_FILES['imagen']['tmp_name'];
            $urlnueva="../img/foto_".$id_maximo.".jpg";
            $conexion->query("call agregar_prod_suc ('$id_maximo','$idsuc');");
            $conexion->query("call agregar_ingrprod('$id_maximo','$masa','$relleno','$betun','$topping')");

            if (is_uploaded_file($tmpimagen)) {
                copy($tmpimagen, $urlnueva);
                 echo "<script>
                        alert('Se agrego correctamenete el pastel');
                        window.location = '../sucursal/agregar_pasteles.php';
                    </script>";
                mysqli_close($conexion);
                exit();
            }else{
                echo "<script>
                        alert('No se agrego el pastel, vuelve a intentarlo');
                        window.location = '../sucursal/agregar_pasteles.php';
                     </script>";
                mysqli_close($conexion);
                exit();
            }
    }
       
?>