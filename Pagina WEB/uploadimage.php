<?php
    //This code shows how to Upload And Insert Image Into Mysql Database Using Php Html.
    //connecting to proyectointegrador database.
    
	include("conexion/conexion.php");

    
    //if button with the name 'insertar' has been clicked
    if(isset($_POST['insertar'])) {
        //declaring variables
        $filetmpname = $_FILES['image']['tmp_name'];
        $filename = $_FILES['image']['name'];

        //folder where images will be uploaded
        $folder = 'img/WEBimages';

        //function for saving the uploaded images in a specific folder
        move_uploaded_file($filetmpname, $folder.$filename);

        //inserting image details (ie image name) in the database
        $sql = "INSERT INTO producto VALUES ('$filename')";
        $qry = mysqli_query($conexion, $sql);
        
    }
?>
    

<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>INSERTAR IMAGENES A Mysql</title>
        </head>

        <body>
            <!--Make sure to put “enctype=”multipart/form-data” inside form tag when uploading files -->
            <form action="" method="POST" enctype="multipart/form-data">
                <!-- input tag for file types should have a “type” attribute with value “file” -->
                <input type="file" name="image"/>
                <input type="submit" name="insertar" value="upload" />
            </form>

            
        </body>
    </html>
