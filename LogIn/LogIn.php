<?php

    include("../PhpFks/Conexion.php");

    session_start();    //Inicia una nueva sesión o reanuda la existente
    $_SESSION['login'] = false;

    //Se guardan los datos de los nombres de los inputs a la tabla en la base de datos
    $user       = $_POST["username"];
    $password   = $_POST["password"];

    //Evaluamos si el user ingresado ya existe
    $consulta =   "SELECT * 
                    FROM persona
                    WHERE User='$user'";
    $consulta = mysqli_query($conexion, $consulta);
    $consulta = mysqli_fetch_array($consulta);  //Devuelve un array o NULL

    $pwdHash = base64_encode($password);
    if($consulta){
        //echo "introduje:<br>" . base64_decode($pwdHash) . "<br>en sql:<br>" . base64_decode($consulta['Password']) . "<br>";
        if(base64_decode($pwdHash) === base64_decode($consulta['Password'])){   //password_verify($pwdHash, $consulta['Password'])
            $_SESSION['login']      = true;
            $_SESSION['nombres']    =$consulta['Nombres'];
            $_SESSION['apellidos']  =$consulta['Apellidos'];
            $_SESSION['fechaNac']   =$consulta['FechaNac'];
            $_SESSION['correo']     =$consulta['Correo'];
            $_SESSION['user']       =$consulta['User'];
            $_SESSION['password']   =$consulta['Password'];
            $_SESSION['rol']        =$consulta['Rol'];  
            $_SESSION['fotoPerfil'] =$consulta['FotoPerfil'];     
            $Per                    =$consulta['User']; 
            $_SESSION['IDP']        =$Per;
            $_SESSION['IDPer']      =$consulta['ID_Persona']; 

            $sql1 = "UPDATE chat
                    SET Estado = '1'
                    WHERE Nombre = '$Per'";
            mysqli_query($conexion, $sql1);

            $sql2 = "UPDATE persona
                    SET Estado = '1'
                    WHERE User = '$Per'";
            mysqli_query($conexion, $sql2);

            header("Location: http://eclass:8080/Home/Home.php");
        }else{
            echo "Contraseña Incorrecta";
        }
    }else{

        echo "El usuario no existe";
        
    }

    //Cerrando la conexión
    mysqli_close($conexion);

?>