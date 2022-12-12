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

            $consulta = "SELECT nombre, ID_chatName, hash
                        FROM chatnames 
                        WHERE ID_chatName = '$IDCN'";
            $consulta = mysqli_query($conexion, $consulta);
            $consulta = mysqli_fetch_array($consulta);  //Devuelve un array o NULL
            $CN = $consulta['nombre'];
            $IDCN = $consulta['ID_chatName'];
            $_SESSION['ID_Chat'] = $IDCN;
            $_SESSION['crypt'] = $consulta['hash'];
        }
    ?>

    <?php include("../media/media.php"); ?>

    <div id="contenedor">
        <h3><?php echo $CN; ?></h3>

        <!--<i class="fa-solid fa-camera cam"></i>-->
        
        <form method="POST"><button id="hash" type="submit" name="hash" class="hash enc" value="true">Encriptar</button>
        <button id="hashed" type="submit" name="hashed" class="hash ed" value="true">Desencriptar</button></form>
        <?php  
            if(isset($_POST['hash'])) { 
                $sql1 = "UPDATE chatnames
                SET hash = '1'
                WHERE ID_chatName = '$IDCN'";
                mysqli_query($conexion, $sql1);
            } 
            if(isset($_POST['hashed'])) { 
                $sql1 = "UPDATE chatnames
                SET hash = '0'
                WHERE ID_chatName = '$IDCN'";
                mysqli_query($conexion, $sql1);
            } 
        ?>
        <div id="caja-chat">
            <div id="chat">
            </div>
        </div>

        <form class="userPic" runat="server" method="POST" class="image" enctype="multipart/form-data">
            <input type="file" id="userPic" name="archivo"/>  <!--disabled-->
            <i id="mi-boton" class="fa-solid fa-paperclip media clip"></i>
            <button type="submit" name="guardar" id="sendImg" class="send"><i type="submit" class="fa-solid fa-paper-plane media sub"></i></button>
        </form>

        <form method="POST" action="../Mensajes/mensajes.php?IDBtn=<?php echo $IDCN ?>">
            <textarea name="mensaje" placeholder="Ingresa tu mensaje.."></textarea>
            <input type="submit" name="enviar" value="Enviar"></input>
        </form>
        <?php
            if(isset($_POST['enviar'])){
                $nombre = "$_SESSION[user]";
                $mensaje = $_POST['mensaje'];
                $mensaje = base64_encode($mensaje);
                $ID      = rand(10000, 65535);

                $consulta = "INSERT INTO chat(ID_Chat, Nombre, Mensaje) 
                            VALUES('$ID', '$nombre', '$mensaje')";
                $ejecutar = $conexion->query($consulta);

                $sql1 = "INSERT INTO chatxmsj 
                VALUES(
                    '$IDCN',
                    '$ID'
                )";
                mysqli_query($conexion, $sql1);

                if($ejecutar){
                    echo    "<audio autoplay>
                                <source src='../Extras/tono-mensaje-3-.mp3' type='audio/mpeg'>
                            </audio>";
                }
            }
        ?>
    </div>
    
    <a href="../Location/Loc.php"><button class="ubi">Quiero saber mi ubicación</button></a>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="mensajes.js"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>