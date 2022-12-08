<?php

    include("../PhpFks/Conexion.php");
    include("../PhpFks/validateLogIn.php");
    //include("../PhpFks/Conexion.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensajes - e-class</title>
    <link rel="stylesheet" href="mensajes.css">
    <link rel="stylesheet" href="../PhpFks/Nav.css">
    <link rel="stylesheet" href="../Extras/Responsive.css">
    <script src="https://kit.fontawesome.com/29079834be.js" crossorigin="anonymous"></script>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script type="text/javascript">
        function ajax(){
            var req = new XMLHttpRequest();
            req.onreadystatechange = function(){
                if(req.readyState == 4 && req.status ==  200){
                    document.getElementById("chat").innerHTML = req.responseText;
                }
            }
            
            req.open('GET', '../Mensajes/chat.php', true);
            req.send();
        }

        setInterval(function(){ajax();}, 1000);    //refresca la página automáticamente
    </script>
</head>
<body onload="ajax();">

    <div class="navTitle">
        <h1 class="title">Mensajes</h1>
    <?php require "../PhpFks/Nav.php"; ?>

    <?php 
        if(isset($_GET['IDBtn'])) {
            $IDCN = $_GET['IDBtn'];

            $consulta = "SELECT nombre
                        FROM chatnames 
                        WHERE ID_chatName = '$IDCN'";
            $consulta = mysqli_query($conexion, $consulta);
            $consulta = mysqli_fetch_array($consulta);  //Devuelve un array o NULL
            $IDCN = $consulta['nombre'];
        }
    ?>

    <div id="contenedor">
        <div id="caja-chat">
            <h3><?php echo $IDCN; ?></h3>

            <div id="chat">
            </div>

        </div>
        <form method="POST" action="../Mensajes/mensajes.php">
            <!-- <input type="text" name="nombre" placeholder="Ingresa tu nombre.."> -->
            <textarea name="mensaje" placeholder="Ingresa tu mensaje.."></textarea>
            <input type="submit" name="enviar" value="Enviar"></input>
        </form>
        <?php
            if(isset($_POST['enviar'])){
                $nombre = "$_SESSION[user]";  //$_POST['nombre'];
                $mensaje = $_POST['mensaje'];
                $mensaje = base64_encode($mensaje);

                $consulta = "INSERT INTO chat(Nombre, Mensaje) VALUES('$nombre', '$mensaje')";
                $ejecutar = $conexion->query($consulta);

                if($ejecutar){
                    echo    "<audio autoplay>
                                <source src='../Extras/tono-mensaje-3-.mp3' type='audio/mpeg'>
                            </audio>";
                }
            }
        ?>
    </div>
    <!--button id="hash" class="hash">Encriptar/Desencriptar</!--button-->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="mensajes.js"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>