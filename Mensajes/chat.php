<?php

    include("../PhpFks/Conexion.php");
    include("../PhpFks/validateLogIn.php");

    //$consulta = "SELECT * FROM chat ORDER BY Fecha DESC";
    //$ejecutar = $conexion->query($consulta);

    $IDCN = $_SESSION['ID_Chat'];
    $Crypt = $_SESSION['crypt'];
    $consultaCxM  =  "SELECT CN.ID_chatName, CM.ID_msg, C.Nombre, C.Mensaje, C.Fecha, C.Estado, C.Visto
                        FROM chatnames CN
                        INNER JOIN chatxmsj CM ON CN.ID_chatName = CM.ID_Chat
                        INNER JOIN chat C ON CM.ID_msg = C.ID_Chat
                        WHERE CN.ID_chatName = '$IDCN'
                        ORDER BY Fecha DESC";
    $ejecutar = $conexion->query($consultaCxM);

    while($fila = $ejecutar->fetch_array()):
        if($Crypt == '0'){
            $fila['Mensaje']=base64_decode($fila['Mensaje']);
        }
?>      

    <div id="datos-chat">
        <?php
            $user = $fila['Nombre'];
            $consulta = "SELECT Estado 
                        FROM chat
                        WHERE Nombre = '$user'";
            $consulta = mysqli_query($conexion, $consulta);
            $consulta = mysqli_fetch_array($consulta);  //Devuelve un array o NULL
            $Estado = $consulta['Estado'];
            if($Estado == "1"){
                ?> <div class="estado"></div> <?php
            }else{
                ?> <div class="estado estadont"></div> <?php
            }
        ?>
        <div class="mensaje">
            <span style="color: darkslateblue"><?php echo $fila['Nombre']; ?>: </span>
            <span><?php echo $fila['Mensaje'] ?></span>
        </div>
        <div class="fecha">
            <?php
                $user = $fila['Nombre'];
                $consulta = "SELECT Visto 
                            FROM chat
                            WHERE Nombre = '$user'";
                $consulta = mysqli_query($conexion, $consulta);
                $consulta = mysqli_fetch_array($consulta);  //Devuelve un array o NULL
                $Visto = $consulta['Visto'];
                if($Visto == "1"){
                    ?> <i class="fa-solid fa-check check"></i> <?php
                }else{
                    ?> <i class="fa-solid fa-check check checknt"></i> <?php
                }
            ?>
            <span style="float: right; color: #848484; font-weight:lighter;"><?php echo formatearFecha($fila['Fecha']); ?></span>
        </div>
    </div>

<?php endwhile; ?>  