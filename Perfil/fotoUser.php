<?php

    include("../PhpFks/Conexion.php");
    include("../PhpFks/validateLogIn.php");
    
    $uploads_dir = '/uploads';
    $key = $_FILES['userImg']['error'];
    if($key == 0){   //0
        //if($error == UPLOAD_ERR_OK){
            //success
            $tmp_name = $_FILES['userImg']['tmp_name'];
            $name = $_FILES['userImg']['name'];
            //move_uploaded_file($tmp_name, "$uploads_dir/$name");

            //$data = file_get_contents($_FILES['userImg']['tmp_name']);
            //$data = mysql_real_escape_string($data);

            //$data = $_POST["userImg"];
            
            //echo $name;
        //}

        $user = "$_SESSION[user]";
        
        $sql = "UPDATE persona
                SET FotoPerfil='$name'
                WHERE User = '$user'";

        
        if(mysqli_query($conexion, $sql)){  //Ejecutamos el query y verificamos si se guardaron los datos
            echo "alert('Tu foto ha sido guardada')";
            header("Location: http://localhost:8080/e-class2/PhpFks/leerImg.php");
        }else{
            echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
        }

    }

?>