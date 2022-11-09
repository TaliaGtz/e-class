<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarea - e-class</title>
    <link rel="stylesheet" href="../PhpFks/Nav.css">
    <link rel="stylesheet" href="TareaInd.css">
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
        <h1 class="title">Tarea</h1>
    <?php require "C:/xampp/htdocs/PrograOInternet/PhpFks/Nav.php"; ?>

    <!--Tareas-->
    <div class="valoracion">
        <p class="points"> 80/100 pts</p>
        <input type="radio" name="estrellas" id="rate5" value="5">
        <label for="rate5" class="fas fa-star"></label>
        <input type="radio" name="estrellas" id="rate4" value="4">
        <label for="rate4" class="fas fa-star"></label>
        <input type="radio" name="estrellas" id="rate3" value="3">
        <label for="rate3" class="fas fa-star"></label>
        <input type="radio" name="estrellas" id="rate2" value="2">
        <label for="rate2" class="fas fa-star"></label>
        <input type="radio" name="estrellas" id="rate1" value="1">
        <label for="rate1" class="fas fa-star"></label>
    </div>

    <div class="titleHwk">
        <h3>Título</h3>
        <p id="materia">Materia</p>
        <p>Endline</p>
        <label>Indiciaciones:</label>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius incidunt, reprehenderit fugit et officia alias animi autem sed repudiandae labore, nesciunt, voluptate distinctio obcaecati quo magnam nostrum sint velit aspernatur.</p>
        <label>Mis documentos:</label><br>
        <input class="doc" type="file"><br><br>
        <button onclick="TareaEntregada()">Entregar</button>
        <a href="../Tareas/RevTarea.php"><button>Revisar tarea</button></a>
    </div>

    

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="TareaInd.js"></script>
</body>
</html>