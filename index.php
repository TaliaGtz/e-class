<?php
use Symfony\Component\Mailer\Transport;
use Symfony\Component\Mailer\Mailer;
use Symfony\Component\Mime\Email;


if ($_GET['bool']==true) {
    $mensajero = $_POST['mensajero'];
    /*echo $mensajero;*/
    send_email_to_user($mensajero);
}
else{
    header("Location: http://eclass:8080/LogIn/LogIn.html");
}
 
function send_email_to_user($email) {
    require_once 'config.php';
 
    $db = new DB();
    $arr_token = (array) $db->get_access_token();
 
    try {
        $transport = Transport::fromDsn('gmail+smtp://'
        .urlencode('e.class2726@gmail.com').':'
        .urlencode($arr_token['access_token']).'@default');
 
        $mailer = new Mailer($transport);
 
        $message = (new Email())
            ->from('e-class <e.class2726@gmail.com>')
            ->to($email)
            ->subject('Email through Gmail API')
            ->html('<h2>Email sent through Gmail API. API DE GMAIL FUNCIONANDO AAAAA</h2>');
 
        // Send the message
        $mailer->send($message);
 
        //echo 'Correo enviado adecuadamente';
    } catch (Exception $e) {
        if( !$e->getCode() ) {
            $refresh_token = $db->get_refersh_token();
 
            $response = $adapter->refreshAccessToken([
                "grant_type" => "refresh_token",
                "refresh_token" => $refresh_token,
                "client_id" => GOOGLE_CLIENT_ID,
                "client_secret" => GOOGLE_CLIENT_SECRET,
            ]);
             
            $data = (array) json_decode($response);
            $data['refresh_token'] = $refresh_token;
 
            $db->update_access_token(json_encode($data));
 
            send_email_to_user($email);
        } else {
            echo $e->getMessage(); //print the error
        }
    }
    header("Location: http://eclass:8080/Correo/Correo.php");
}