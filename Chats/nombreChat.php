<?php
    
    include("../PhpFks/Conexion.php");
    include("../PhpFks/validateLogIn.php");

    $consulta = "SELECT * FROM chatnames ORDER BY ID_chatName DESC";
    $ejecutar = $conexion->query($consulta);
    while($fila = $ejecutar->fetch_array()):
        if($fila['Privacidad'] == 1){
            $IDChat = $fila['ID_chatName'];
            $consulta1 = "SELECT ID_Persona1, ID_Persona2
                        FROM personaxchatname
                        WHERE ID_ChatName = '$IDChat'";
            $consulta1 = mysqli_query($conexion, $consulta1);
            $consulta1 = mysqli_fetch_array($consulta1);  //Devuelve un array o NULL
            
            $IDPer = $_SESSION['IDPer'];
            if($IDPer == $consulta1['ID_Persona1'] || $IDPer == $consulta1['ID_Persona2']){
                ?><a href="../Mensajes/mensajes.php?IDBtn=<?php echo $fila['ID_chatName'] ?>" name="id" class="card" onclick="return clicked(<?php echo $fila['ID_chatName']; ?>)">
                    <div class="text">
                        <h3> <?php echo $fila['nombre']; ?> </h3>
                    </div>
                </a><?php
            }
        }else{
            $consulta2 = "SELECT * FROM chatnames WHERE Privacidad = '0' ORDER BY ID_chatName DESC";
            $ejecutar = $conexion->query($consulta2);
            while($fila = $ejecutar->fetch_array()):
                ?><a href="../Mensajes/mensajes.php?IDBtn=<?php echo $fila['ID_chatName'] ?>" name="id" class="card" onclick="return clicked(<?php echo $fila['ID_chatName']; ?>)">
                <div class="text">
                    <h3> <?php echo $fila['nombre']; ?> </h3>
                </div>
                </a><?php
            endwhile;
        }
    endwhile; 
?>  