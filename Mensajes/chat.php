<?php

    include("../PhpFks/Conexion.php");
    include("../PhpFks/validateLogIn.php");

    //$consulta = "SELECT * FROM chat ORDER BY Fecha DESC";
    //$ejecutar = $conexion->query($consulta);

    $IDCN = $_SESSION['ID_Chat'];
    $consultaCxM  =  "SELECT CN.ID_chatName, CM.ID_msg, C.Nombre, C.Mensaje, C.Fecha
                        FROM chatnames CN
                        INNER JOIN chatxmsj CM ON CN.ID_chatName = CM.ID_Chat
                        INNER JOIN chat C ON CM.ID_msg = C.ID_Chat
                        WHERE CN.ID_chatName = '$IDCN'
                        ORDER BY Fecha DESC";
    $ejecutar = $conexion->query($consultaCxM);

    while($fila = $ejecutar->fetch_array()):
        $fila['Mensaje']=base64_decode($fila['Mensaje']);

?>      

    <div id="datos-chat">
        <span style="color: darkslateblue"><?php echo $fila['Nombre']; ?>: </span>
        <span><?php echo $fila['Mensaje'] ?></span>
        <span style="float: right; color: #848484; font-weight:lighter;"><?php echo formatearFecha($fila['Fecha']); ?></span>
    </div>

<?php endwhile; ?>  