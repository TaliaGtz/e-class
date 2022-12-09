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
    <title>Perfil - e-class</title>
    <link rel="stylesheet" href="Perfil.css">
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
        <h1 class="title">Mi Perfil</h1>
	<?php require "../PhpFks/Nav.php"; ?>

    <?php
        $IDPer = $_GET['IDPer'];
        $consulta = "SELECT User, FotoPerfil, Correo
                    FROM persona
                    WHERE ID_Persona = '$IDPer'";
        $consulta = mysqli_query($conexion, $consulta);
        $consulta = mysqli_fetch_array($consulta);  //Devuelve un array o NULL
    ?>
    <div class="header">
        <h1 class="user-name"> <?php echo $consulta['User'] ?> </h1>
        <img class="profileImg" src='<?php echo $consulta['FotoPerfil'] ?>'>
        <!--<div class="sombra"></div>
        <a href="#" class="cambiar-foto">
            <i class="fas fa-camera"></i> 
            <span>Cambiar foto</span>
        </a>-->
    </div>
    <ul class="socials">
        <li><i class="fa-solid fa-envelope"></i><a href="../Correo/Correo.php"> <?php echo $consulta['Correo'] ?> </a></li>
        <?php if($_SESSION['IDPer'] != $IDPer){
            ?> <li><i class="fa-solid fa-comment-dots"></i><a href="../Chats/Chats.php?IDPer1=<?php echo $_SESSION['IDPer'] ?>&IDPer=<?php echo $IDPer ?>">Chat privado</a></li> <?php
        } ?>
    </ul>
    <div class="about">
        <p>Desarrollo de aplicaciones para estudiantes.</p>
    </div>
    <!--<form method="POST" action="../PhpFks/leerImg.php" enctype="multipart/form-data">
        <input type="file" id="userImg" name="userImg"><br><br>
        <button id="submitImg" type="submit">Aceptar</button>
    </form>-->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>