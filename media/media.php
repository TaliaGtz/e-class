<?php
    include("../media/imgCode.php");

    $IDMedia = rand(10000, 65535);
    //$_SESSION['ID_media'] = $IDMedia;
    
    if(isset($_REQUEST['guardar'])){
        if(isset($_FILES['archivo']['name'])){
            $tipoArchivo = $_FILES['archivo']['type'];
            $nombreArchivo = $_FILES['archivo']['name'];
            $sizeArchivo = $_FILES['archivo']['size'];
            $imagenSubida = fopen($_FILES['archivo']['tmp_name'], 'r');
            $binImagen = fread($imagenSubida, $sizeArchivo);
            $binImagen = mysqli_escape_string($conexion, $binImagen);

            $query = "INSERT INTO media
                    VALUES(
                        '$IDMedia',
                        '$now', 
                        '$binImagen', 
                        '$tipoArchivo'
                    )";
                    
            if(mysqli_query($conexion, $query)){  //Ejecutamos el query y verificamos si se guardaron los datos
                //echo "alert('Tu foto ha sido guardada')";
                //header("Location: http://localhost:8080/e-class2/PhpFks/leerImg.php");
            }else{
                echo "Error: " . $query . "<br>" . mysqli_error($conexion);
            }
            //header('Location: http://localhost:8080/unikart2/UserPerfil/UserPerfil.php');
        }
    }
?>