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

    if($consulta){
        //echo "introduje:<br>" . $password . "<br>en sql:<br>" . $consulta['Password'] . "<br>";
        if(password_verify($password, $consulta['Password'])){
            $_SESSION['login']      = true;
            $_SESSION['nombres']    =$consulta['Nombres'];
            $_SESSION['apellidos']  =$consulta['Apellidos'];
            $_SESSION['fechaNac']   =$consulta['FechaNac'];
            $_SESSION['correo']     =$consulta['Correo'];
            $_SESSION['user']       =$consulta['User'];
            $_SESSION['password']   =$consulta['Password'];
            $_SESSION['rol']        =$consulta['Rol'];  
            $_SESSION['fotoPerfil'] =$consulta['FotoPerfil'];     
            
            header("Location: http://localhost:8080/e-class2/Home/Home.php");
        }else{
            echo "Contraseña Incorrecta";
        }
    }else{

        echo "El usuario no existe";
        
    }

    //Cerrando la conexión
    mysqli_close($conexion);

?>