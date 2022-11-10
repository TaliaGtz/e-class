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
    <title>Nueva tarea - e-class</title>
    <link rel="stylesheet" href="../PhpFks/Nav.css">
    <link rel="stylesheet" href="newTarea.css">
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
        <h1 class="title">Nueva tarea</h1>
    <?php require "C:/xampp/htdocs/PrograOInternet/PhpFks/Nav.php"; ?>

    <!--Tareas-->
    <div class="valoracion">
        <p class="points">pts.</p><input class="cal" type="number"><p class="points">Total:</p>
    </div>

    <div class="titleHwk">
        <input class="info h3" type="text" placeholder="Título">
        <br>
        <select id="materia" class="info">
            <option value="value1">Materia</option>
            <option value="value2">Materia</option>
            <option value="value3">Materia</option>
        </select>
        <br>
        <label class="end">Endline:</label>
        <input class="info" type="date" placeholder="Endline">
        <br><br>
        <label>Indicaciones:</label>
        <br>
        <section id="publicacion">
            <div id="commentBoxP" contenteditable="true" dir="auto" class="commentBoxP" placeholder="Escribe aquí las indicaciones..."></div>
        </section>
        <br><br>
        <a href="../Tareas/Tareas.php"><button>Publicar</button></a>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>