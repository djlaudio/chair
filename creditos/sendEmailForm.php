<?php
session_start();

$to = "celdjl@gmail.com";
$subject = "Solicitud de IMEIS";
$txt = "Por favor revise su PHP. Se ha hecho un nuevo pedido de IMEIS.";
$headers = "From: consultas@djlproductions.com" . "\r\n" .
"CC: celdjl@gmail.com";

mail($to,$subject,$txt,$headers);


require_once 'paypal.html';

?>
