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
</head>
<body>
    
    <div class="navTitle">
        <h1 class="title">Chats LMAD</h1>
    <?php require "C:/xampp/htdocs/PrograOInternet/PhpFks/Nav.php"; ?>
    
    <div class="categorias">
        <a href="../Mensajes/mensajes.php" class="card">
            <div class="text">
                <h3>Chat 1</h3>
            </div>
        </a>
        <a href="../Mensajes/mensajes.php" class="card">
            <div class="text">
                <h3>Chat 2</h3>
            </div>
        </a>
        <a href="../Mensajes/mensajes.php" class="card">
            <div class="text">
                <h3>Chat 3</h3>
            </div>
        </a>
        <a href="../Mensajes/mensajes.php" class="card">
            <div class="text">
                <h3>Chat 4</h3>
            </div>
        </a>
        <a href="../Mensajes/mensajes.php" class="card">
            <div class="text">
                <h3>Chat 5</h3>
            </div>
        </a>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="Chats.js"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>