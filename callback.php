<?php
require "C:/xampp/htdocs/PrograOInternet/config.php";
 
try {
    $adapter->authenticate();
    $token = $adapter->getAccessToken();
    $db = new DB();
    $db->update_access_token(json_encode($token));
    echo "Access token inserted successfullyddxgfd.";
}
catch( Exception $e ){
    echo $e->getMessage() ;
}