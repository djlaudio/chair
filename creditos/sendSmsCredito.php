<?php


//$to = "marcasgenuinas258@gmail.com";
$to = "celdjl@gmail.com";
$subject = $_SESSION['telefono1'];
$txt = "Gracias por su compra de ".$_SESSION['credito']." colones. ";
$headers = "From: consultas@djlproductions.com" . "\r\n" .
"CC: celdjl@gmail.com";

mail($to,$subject,$txt,$headers);

require_once "jesus.php";

insertarSmsEnDB($txt,$to);

echo "SMS Enviado exitosamente!"; 
?>
