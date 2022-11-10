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
    <title>Tablero - e-class</title>
    <link rel="stylesheet" href="../PhpFks/Nav.css">
    <link rel="stylesheet" href="Carrera.css">
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
        <h1 class="title">Tablero LMAD</h1>
    <?php require "C:/xampp/htdocs/PrograOInternet/PhpFks/Nav.php"; ?>

    <div class="feed">
        <!-- sección de Comentarios -->

        
            <section id="publicacion">
                <div id="commentBoxP" contenteditable="true" dir="auto" class="commentBoxP" placeholder="Agrega un comentario..."></div>
                <br>
                <!--<div class="cat">Categoría: (No editable)
                    <input type="radio" class="catRB" name="genero" id="IDCat1"/> Categoría 1
                    <input type="radio" class="catRB" name="genero" id="IDCat2"/> Categoría 2
                    <input type="radio" class="catRB" name="genero" id="IDCat3"/> Categoría 3
                </div>
                <br>-->
                <input type="date" id="datepkd" class="datepkd" value="2022-11-02">
                <button type="button" id="publicar" class="button">Publicar</button>
            </section>

            <section id="contenido">
                <section class="paginacion">
                    <ul id="ulli">
                        <li type="button" id="li1" onclick="nPags(1)">1</li>

                    </ul>
                </section>

                <div id="pag1">
                </div>
                
            </section>

            <div id="searchList" class="searchList">
                <ul id="searchUl">
                </ul>
            </div>
        

        <!-- fin sección de Comentarios -->

    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="Carrera.js"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>