<?php

    include("../PhpFks/Conexion.php");

    //Se guardan los datos de los nombres de los inputs a la tabla en la base de datos
    $nombres    = $_POST["nombres"];
    $apellidos  = $_POST["apellidos"];
    $fechaNac   = $_POST["fechaNac"];
    $correo     = $_POST["correo"];
    $user       = $_POST["username"];
    $password   = $_POST["password"];
    $rol        = $_POST["rol"];
    $ID         = "";
    
    //encriptación
    $passwordHash = base64_encode($password);  //, PASSWORD_BCRYPT BCRYPT es el algoritmo de encriptación, devuelve una cadena de 60 caracteres
    //$passwordHash = substr($passwordHash, 0, 60);
    $fotoPerfil = "../Extras/eClass.png";   //Foto por defecto

    //Evaluamos si el user ingresado ya existe
    $consultaId =   "SELECT User 
                    FROM persona
                    WHERE User='$user'";
    $consultaId = mysqli_query($conexion, $consultaId);
    $consultaId = mysqli_fetch_array($consultaId);  //Devuelve un array o NULL

    if(!$consultaId){   //Si no existe el usuario
        $sql = "INSERT INTO persona VALUES(
            '0          ',
            '$nombres   ',
            '$apellidos ',
            '$fechaNac  ',
            '$correo    ',
            '$user      ',
            '$passwordHash',
            '$rol       ',
            '$ID        ',
            '$fotoPerfil'
        )";
        if(mysqli_query($conexion, $sql)){  //Ejecutamos el query y verificamos si se guardaron los datos
            echo "alert('Tu cuenta ha sido creada')";
            echo "Tu cuenta ha sido creada";
            header("Location: http://eclass:8080/LogIn/LogIn.html");
            //echo "<br><a href='../LogIn/LogIn.html'>Iniciar Sesión</a>";
        }else{
            /*echo '<script type="text/javascript">
            swal({
                title: "Error",
                text: "Error: " . $sql . "<br>" . mysqli_error($conexion),
                icon: "error",
                button: "Aceptar",
            });
            </script>';*/
            echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
            //header("Location: http://localhost:8080/e-class2/Registro/Register.html");
        }
    }else{
        /*echo '<script type="text/javascript">'
        , 'alert("sdfsdf");'
        , '</script>'
        ;*/
        echo "El username ya existe";
        //header("Location: http://localhost:8080/e-class2/Registro/Register.html");
        /*echo '<script>
            swal({
                title: "Error",
                text: "Error: El username ya existe",
                icon: "error",
                button: "Aceptar",
            });
        </script>';*/
    }

    //Cerrando la conexión
    mysqli_close($conexion);

?>