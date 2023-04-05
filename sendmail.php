<?php

$to = "charlesmbeutcha@gmail.com";
$subject = "envoi de mail avec windows";
$message = "j'ai reussi !!";

$headers ="Content-Type: text/plain; charset=utf-8 \r\n";
$headers .="From: charlesmbeutcha@gmail.com \r\n";

if(mail($to, $subject, $message, $headers))
    echo 'envoye !';
else
    echo 'erreur envoi';

?>