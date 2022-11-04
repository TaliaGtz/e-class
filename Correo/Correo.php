<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Correo - e-class</title>
    <link rel="stylesheet" href="../PhpFks/Nav.css">
    <link rel="stylesheet" href="Correo.css">
    <link rel="stylesheet" href="../Extras/Responsive.css">
    <script src="https://kit.fontawesome.com/29079834be.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    
    <div class="navTitle">
        <h1 class="title">Correo LMAD</h1>
    <?php require "C:/xampp/htdocs/PrograOInternet/PhpFks/Nav.php"; ?>

    <div class="box">
        <input type="text" id="inputSearch" name="search" class="src" placeholder="Buscar..." autocomplete="off">
    </div>
    <ul id="boxSearch"> <!--Filtro por personas-->
        <li class="email" onclick="ocultar_buscador()"><a href=""><i class="fas fa-search"></i>SELECCIONAR</a></li>
        <li class="email" onclick="ocultar_buscador()"><a href=""><i class="fas fa-search"></i>taliagtz.games@gmail.com</a></li>
        <li class="email" onclick="ocultar_buscador()"><a href=""><i class="fas fa-search"></i>denilia211102@gmail.com</a></li>
        <li class="email" onclick="ocultar_buscador()"><a href=""><i class="fas fa-search"></i>e.class2726@gmail.com</a></li>
        <li class="email" onclick="ocultar_buscador()"><a href=""><i class="fas fa-search"></i>talia.gutierrezal@uanl.edu.mx</a></li>
        <li class="email" onclick="ocultar_buscador()"><a href=""><i class="fas fa-search"></i>carlos.ortaort@uanl.edu.mx</a></li>
        <li class="email" onclick="ocultar_buscador()"><a href=""><i class="fas fa-search"></i>alan.garzahr@uanl.edu.mx</a></li>
        <li class="email" onclick="ocultar_buscador()"><a href=""><i class="fas fa-search"></i>sofia.barrioshr@uanl.edu.mx</a></li>
        <li class="email" onclick="ocultar_buscador()"><a href=""><i class="fas fa-search"></i>juand.solis@outlook.com</a></li>
    </ul>
    <div id="coverCtnSearch"></div>
    
    <br><br>
    <form action="../index.php?bool=true" method="POST">
    <div class="boxMsj">
        <input id="mensajero" class="mensajero" name="mensajero" type="text" placeholder="Destinatario..." readonly> <!---->
        <a href="../index.php?bool=true" id="sending"><button id="sendMail">Enviar correo</button></a>
    </div>
    </form>

    <div class="referencia">
        <strong><label>Aparecerás como:</label></strong>
        <br>
        <div class="square">
            <img src="../Extras/eClass.png" width="70px">
            <strong><label class="eClass">e-class</label></strong>
            <label class="eMail"> "e.class2726@gmail.com"</label>
            <label class="destiny">Destinatario</label>
        </div>
        <i class="fa-solid fa-check"></i>
        <p>Powered by Google APIs (Gmail)</p>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="Correo.js"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>