<?php
session_start();

$to = "marcasgenuinas258@gmail.com";
$subject = $_SESSION['tel1'];
$txt = $_SESSION['mensaje'];
$headers = "From: consultas@djlproductions.com" . "\r\n" .
"CC: celdjl@gmail.com";

mail($to,$subject,$txt,$headers);
echo "SMS Enviado exitosamente!"; 
?>
