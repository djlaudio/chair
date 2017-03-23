<?php
$to = "marcasgenuinas258@gmail.com";
$subject = "50684992177";
$txt = "FASTNESS le recuerda su pago pendiente"; 
$headers = "From: consultas@djlproductions.com" . "\r\n" .;
"CC: celdjl@gmail.com";

mail($to,$subject,$txt,$headers);
echo "SMS Enviado exitosamente!"; 
?>

