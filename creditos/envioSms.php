<?php

function envioSms($destinatario, $texto)

{

$subject=str_replace("-","",rtrim(destinatario));
$to="celdjl@gmail.com";


$headers = "From: consultas@djlproductions.com" . "\r\n" .
"CC: celdjl@gmail.com";

mail($to,$subject,$texto,$headers);

return ("Sms enviado");

}

  exit;
?>