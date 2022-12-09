<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Integrantes - e-class</title>
    <link rel="stylesheet" href="Integrantes.css">
    <link rel="stylesheet" href="../PhpFks/Nav.css">
    <link rel="stylesheet" href="../Extras/Responsive.css">
    <script src="https://kit.fontawesome.com/29079834be.js" crossorigin="anonymous"></script>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    
    <div class="navTitle">
        <h1 class="title">Integrantes LMAD</h1>
	<?php require "../PhpFks/Nav.php"; ?>

    <div class="box">
        <input type="text" id="inputSearch" name="search" class="src" placeholder="Buscar..." autocomplete="off">
    </div>
    <ul id="boxSearch"> <!--Filtro por personas-->
        <li><a href="../Perfil/Perfil.php"><i class="fas fa-search"></i>ABCDEFGHIJKLMNOPQRSTUVWXYZ</a></li>
        <?php include("../Integrantes/nombreBusc.php"); ?>
    </ul>
    <div id="coverCtnSearch"></div>

    <div class="people">
        <h1>Grupo LMAD</h1>
        <ul id="clase">
            <!--li><a href="../Perfil/Perfil.php">CARLOS ISRAEL ORTA ORTA</a></li>
            <li><a href="../Perfil/Perfil.php">ALAN GARZA HERNÁNDEZ</a></li>
            <li><a href="../Perfil/Perfil.php">TALIA DENISSE GUTIÉRREZ ALVAREZ</a></li>
            <li><a href="../Perfil/Perfil.php">SOFÍA BARRIOS HERNÁNDEZ</a></li>
            <li><a href="../Perfil/Perfil.php">JACOB ABRAHAM PULIDO</a></li>
            <li><a href="../Perfil/Perfil.php">FERNANDO ENRIQUE BUZO MARTÍNEZ</a></li>
            <li><a href="../Perfil/Perfil.php">IRVING ALEXIS FERREIRA DOMÍNGUEZ</a></li>
            <li><a href="../Perfil/Perfil.php">DIEGO ADRIÁN VILLARREAL GARZA</a></li>-->
            <?php include("../Integrantes/nombrePer.php"); ?>
        </ul>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="Integrantes.js"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>