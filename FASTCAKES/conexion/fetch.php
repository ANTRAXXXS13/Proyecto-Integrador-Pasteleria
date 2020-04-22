
 <?php  
 //fetch.php  
 if(isset($_POST["id"]))  
 {  
    $output = '';  
    include_once 'conexion.php';  

    $query = "SELECT * FROM producto WHERE id='".$_POST["id"]."'";  

    $ss=mysqli_query($conexion, "Select MAX(id) as id_maximo from producto;");
            if ($rr=mysqli_fetch_array($ss)) {
                    $id_maximo=$rr['id_maximo'];
                  
                }

    $result = mysqli_query($conexion, $query);  
    while($row = mysqli_fetch_array($result))  
    {  
        $output = '  
            <p><img src="img/foto_'.$id_maximo.'.jpg" class="img-responsive img-thumbnail" /></p>  
            <p><label>Nombre : '.$row['nombre'].'</label></p>  
            <p><label>Descripción : </label><br />'.$row['descripcion'].'</p>  
            <p><label>Costo : </label>'.$row['costo'].'</p>  
           
        ';  
    }  
    echo $output;  
 }  
 ?>  


