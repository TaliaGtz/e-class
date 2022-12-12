<?php

    $user = "$_SESSION[ID_media]";
    $query="SELECT nombre, tipo, imagen 
            FROM media 
            WHERE ID_media = '$user'";

    $query = mysqli_query($conexion, $query);
    $query = mysqli_fetch_array($query);  //Devuelve un array o NULL
    
?>

<div id="userImg" class="userImg">
    <?php  include("../media/FotoUser.php");  ?>
    <!-- <img src="User.png" height="100" width="100" id="image" alt="Imagen" class="file"> -->
    <img src="data:<?php echo $query['tipo'] ?>;base64,<?php echo base64_encode($query['imagen']); ?>" id="image" class="file">
</div> 