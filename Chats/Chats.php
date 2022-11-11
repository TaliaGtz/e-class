<?php

    include("../PhpFks/Conexion.php");
    include("../PhpFks/validateLogIn.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chats - e-class</title>
    <link rel="stylesheet" href="Chats.css">
    <link rel="stylesheet" href="../PhpFks/Nav.css">
    <link rel="stylesheet" href="../Extras/Responsive.css">
    <link rel="stylesheet" href="../Integrantes/Integrantes.css">
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
                    document.getElementById("categorias").innerHTML = req.responseText;
                }
            }
            
            req.open('GET', '../Chats/nombreChat.php', true);
            req.send();
        }

        setInterval(function(){ajax();}, 1000);    //refresca la página automáticamente
    </script>
</head>
<body>
    
    <div class="navTitle">
        <h1 class="title">Chats LMAD</h1>
    <?php require "C:/xampp/htdocs/PrograOInternet/PhpFks/Nav.php"; ?>
    
    <div class="chatMenu">
        <form method="POST" action="../Chats/Chats.php">
            <div id="afectado" class="chatName">
                <label>Nombre del chat: </label><input type="text" name="chatName">
                <button class="btnAceptar" type="submit" name="enviar">Aceptar</button>
            </div>
            <button id="sobremi" class="plus"><i class="fa-solid fa-plus"></i></button>
        </form>
        <?php
            if(isset($_POST['enviar'])){
                $nombre = $_POST['chatName'];

                $consulta = "INSERT INTO chatnames(nombre) VALUES('$nombre')";
                $ejecutar = $conexion->query($consulta);
            }
        ?>
    </div>

    <div class="categorias">
        
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="Chats.js"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>