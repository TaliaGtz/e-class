<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tareas - e-class</title>
    <link rel="stylesheet" href="../PhpFks/Nav.css">
    <link rel="stylesheet" href="Tareas.css">
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
        <h1 class="title">Tareas LMAD</h1>
    <?php require "C:/xampp/htdocs/PrograOInternet/PhpFks/Nav.php"; ?>

    <a href="../Tareas/newTarea.php"><button class="plus"><i class="fa-solid fa-plus"></i></button></a>

    <!--Tareas-->
    <div class="tareas">
        <div class="tareas">
            <a href="../Tareas/TareaInd.php"><div class="card">
                <h4>Título</h4>
                <p>Endline</p>
                <img src="../Extras/BG1.jpg">
            </div></a>
            <a href="../Tareas/TareaInd.php"><div class="card">
                <h4>Título largo</h4>
                <p>Endline</p>
                <img src="../Extras/BG2.jpg">
            </div></a>
            <a href="../Tareas/TareaInd.php"><div class="card">
                <h4>Título más largo</h4>
                <p>Endline</p>
                <img src="../Extras/BG3.jpg">
            </div></a>
            <a href="../Tareas/TareaInd.php"><div class="card">
                <h4>Título aún más largo</h4>
                <p>Endline</p>
                <img src="../Extras/BG4.jpg">
            </div></a>
            <a href="../Tareas/TareaInd.php"><div class="card">
                <h4>Título aún más más más largo</h4>
                <p>Endline</p>
                <img src="../Extras/BG5.jpg">
            </div></a>
            <a href="../Tareas/TareaInd.php"><div class="card">
                <h4>Título aún más más más más más largo</h4>
                <p>Endline</p>
                <img src="../Extras/BG6.jpg">
            </div></a>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>