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
    <title>Grupos - e-class</title>
    <link rel="stylesheet" href="Home.css">
    <link rel="stylesheet" href="../Extras/Responsive.css">
    <script src="https://kit.fontawesome.com/29079834be.js" crossorigin="anonymous"></script>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

    <div class="nav">
        <h1 class="title">Grupos</h1>
    </div>

    <div class="categorias">
        <a href="../Carrera/Carrera.php" class="card">
            <div class="text">
                <!--<h3>Multimedia y Animación Digital</h3>-->
                <h3>LMAD</h3>
            </div>
        </a>
        <a href="../Carrera/Carrera.php" class="card">
            <div class="text">
                <h3>Física</h3>
            </div>
        </a>
        <a href="../Carrera/Carrera.php" class="card">
            <div class="text">
                <!--<h3>Seguridad en Tecnologías de Información</h3>-->
                <h3>LSTI</h3>
            </div>
        </a>
        <a href="../Carrera/Carrera.php" class="card">
            <div class="text">
                <h3>Actuaría</h3>
            </div>
        </a>
        <a href="../Carrera/Carrera.php" class="card">
            <div class="text">
                <h3>Matemáticas</h3>
            </div>
        </a>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="Home.js"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>