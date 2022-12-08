<?php
            if(isset($_POST['enviar'])){
                $nombre = "$_SESSION[user]";  //$_POST['nombre'];
                $mensaje = $_POST['mensaje'];
                $mensaje = base64_encode($mensaje);
                $ID_msg = rand(10000, 99999);

                $consulta = "INSERT INTO chat(ID_Chat, nombre, mensaje) 
                            VALUES('$ID_msg','$nombre', '$mensaje')";
                $ejecutar = $conexion->query($consulta);

                $IDChat=$_SESSION['IDChatName'];
                $sql=   "INSERT INTO chatxmsj
                        VALUES(
                            '$IDChat',
                            '$ID_msg'
                        )";
                $ejecutar = $conexion->query($sql);
                if($ejecutar){
                    echo    "<audio autoplay>
                                <source src='../Extras/tono-mensaje-3-.mp3' type='audio/mpeg'>
                            </audio>";
                            header("Location: http://192.168.100.61:8080/e-class2/Mensajes/mensajes.php?IDBtn=$IDBtn");
                }
            }
        ?>