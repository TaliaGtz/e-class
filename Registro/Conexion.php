<?php

    $servidor   = "localhost";
    $usuario    = "root";
    $pwd        = "";
    $DB         = "e-class";

    //Abriendo la conexión
    $conexion = mysqli_connect($servidor, $usuario, $pwd, $DB);

    if(!$conexion){
        echo "Falló la conexión <br>";
        die("Connection failed: " . mysqli_connect_error());
    }else{
        echo "Conexión exitosa";
    }

    //Se guardan los datos de los nombres de los inputs a la tabla en la base de datos
    $nombres    = $_POST["nombres"];
    $apellidos  = $_POST["apellidos"];
    $fechaNac   = $_POST["fechaNac"];
    $correo     = $_POST["correo"];
    $user       = $_POST["username"];
    $password   = $_POST["password"];
    $rol        = $_POST["rol"];
    $ID         = "00001";
    
    //encriptación
    $passwordHash = password_hash($password, PASSWORD_BCRYPT);  //BCRYPT es el algoritmo de encriptación, devuelve una cadena de 60 caracteres
    $fotoPerfil = "../Extras/eClass.png";   //Foto por defecto

    //Evaluamos si el user ingresado ya existe
    $consultaId =   "SELECT User 
                    FROM persona
                    WHERE User='$user'";
    $consultaId = mysqli_query($conexion, $consultaId);
    $consultaId = mysqli_fetch_array($consultaId);  //Devuelve un array o NULL

    if(!$consultaId){   //Si no existe el usuario
        $sql = "INSERT INTO persona VALUES(
            '$nombres   ',
            '$apellidos ',
            '$fechaNac  ',
            '$correo    ',
            '$user      ',
            '$password  ',
            '$rol       ',
            '$ID        ',
            '$fotoPerfil'
        )";
        if(mysqli_query($conexion, $sql)){  //Ejecutamos el query y verificamos si se guardaron los datos
            echo "Tu cuenta ha sido creada";
            //echo "<br><a href='../LogIn/LogIn.html'>Iniciar Sesión</a>";
        }else{
            echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
        }
    }else{
        echo "El nickname ya existe";
    }

    //Cerrando la conexión
    mysqli_close($conexion);

?>