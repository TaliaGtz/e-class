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
    
    <?php
        if(isset($_GET['IDPer'])) {

            $IDPer = $_GET['IDPer'];
            $IDPer1 = $_GET['IDPer1'];
            $consulta = "SELECT User
                        FROM persona
                        WHERE ID_Persona = '$IDPer'";
            $consulta = mysqli_query($conexion, $consulta);
            $consulta = mysqli_fetch_array($consulta);  //Devuelve un array o NULL
            $CN = $consulta['User'];
            $consulta5 = "SELECT User
                        FROM persona
                        WHERE ID_Persona = '$IDPer1'";
            $consulta5 = mysqli_query($conexion, $consulta5);
            $consulta5 = mysqli_fetch_array($consulta5);  //Devuelve un array o NULL
            $CN1 = $consulta5['User'];

            $CHN = $CN1."&".$CN;
            $IDCN = rand(10000, 65535);
            $consulta3 = "SELECT nombre
                        FROM chatnames
                        WHERE nombre = '$CHN'";
            $consulta3 = mysqli_query($conexion, $consulta3);
            $consulta3 = mysqli_fetch_array($consulta3);  //Devuelve un array o NULL
            if(!$consulta3){   //Si no existe el chat
                $consulta2 = "INSERT INTO chatnames(ID_chatName, nombre, Privacidad) VALUES('$IDCN', '$CHN', '1')";
                $consulta2 = mysqli_query($conexion, $consulta2);
                //$consulta2 = mysqli_fetch_array($consulta2);  //Devuelve un array o NULL

                $consulta4 = "INSERT INTO personaxchatname
                            VALUES(
                                '$IDPer1',
                                '$IDCN',
                                '$IDPer'
                                )";
                $consulta4 = mysqli_query($conexion, $consulta4);
                
            }
            
        }
    ?>

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

                $consulta = "INSERT INTO chatnames(ID_chatName, nombre) VALUES('$IDCN', '$nombre')";
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
             //if (selectedID != 13){
               // user
             //}
        }
    </script>
    
</body>
</html>