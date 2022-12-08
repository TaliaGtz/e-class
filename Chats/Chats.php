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
            var req2 = new XMLHttpRequest();
            req2.onreadystatechange = function(){
                if(req2.readyState == 4 && req2.status ==  200){
                    document.getElementById("categorias").innerHTML = req2.responseText;
                }
                if(req2.readyState == 3){
                    
                }
            }
            
            req2.open('GET', '../Chats/nombreChat.php', true);
            req2.send();
        }

        setInterval(function(){ajax();}, 1000);    //refresca la página automáticamente
    </script>
</head>
<body>
    
    <div class="navTitle">
        <h1 class="title">Chats LMAD</h1>
    <?php require "../PhpFks/Nav.php"; ?>
    
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

    <form id="form-id" method="post" >
        <div id="categorias" class="categorias">
            
        </div>
    </form>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="Chats.js"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script>
        var id="34";
        function clicked(selectedID){
            id = selectedID;
            return selectedID;
        }
    </script>
    <?php// $_SESSION['selectedID'] = "alo";?>   <!--<script>document.write(id)</script>-->
    
</body>
</html>