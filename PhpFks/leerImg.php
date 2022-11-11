<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include("../PhpFks/Conexion.php");
        include("../PhpFks/validateLogIn.php");

        $query="SELECT FotoPerfil
                FROM persona
                WHERE User = '$user'";

        $res = mysqli_query($conexion, $query);
        //while($row=mysqli_fetch_assoc($res)){}
        $row=mysqli_fetch_assoc($res);
        echo $row['FotoPerfil'];
        ibase_blob_echo($row['FotoPerfil']);
    ?>
    <img src="data:image/png;base64,<?php echo base64_encode($row['FotoPerfil']); ?>">
    
</body>
</html>