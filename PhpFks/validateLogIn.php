<?php

    session_start();    //Inicia una nueva sesión o reanuda la existente
    $login = $_SESSION['login'];

    if(!$login){
        header("Location: http://localhost:8080/e-class2/LogIn/LogIn.html");
    }else{
        $user = $_SESSION['user'];
    }

?>