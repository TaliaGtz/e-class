<?php
    
    include("../PhpFks/Conexion.php");

    $consulta = "SELECT * FROM chatnames ORDER BY ID_chatName DESC";
    $ejecutar = $conexion->query($consulta);
    while($fila = $ejecutar->fetch_array()):

?>

    <a href="../Mensajes/mensajes.php" class="card">
        <div class="text">
            <h3> <?php echo $fila['nombre']; ?> </h3>
        </div>
    </a>

<?php endwhile; ?>  