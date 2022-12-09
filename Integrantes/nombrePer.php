<?php
    
    include("../PhpFks/Conexion.php");

    $consulta = "SELECT User, ID_Persona
                FROM persona";
    $ejecutar = $conexion->query($consulta);
    while($fila = $ejecutar->fetch_array()):
        
?>

    <li><a href="../Perfil/Perfil.php?IDPer=<?php echo $fila['ID_Persona'] ?>"><?php echo $fila['User'] ?></a></li>

<?php endwhile; ?>  