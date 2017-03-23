<?php
session_start();

foreach($_SESSION as $nombre => $valor){
// aqui cojes el valor
echo "El valor de session $nombre es: $valor";
$valores = $valor;
}
//$to = "marcasgenuinas258@gmail.com";
$to = "djluigi@gmail.com";
echo $_SESSION['tele1'];
echo $_SESSION['abono'];
$_SESSION['saldoDespuesDeAbono'];
$subject = $_SESSION['tele1'];
$txt = "Gracias por su abono de ".$_SESSION['abono']." colones. Su saldo actual es de ".$_SESSION['saldoDespuesDeAbono']." colones.";
//$txt = "HOLA";
$headers = "From: consultas@djlproductions.com" . "\r\n" .
"CC: celdjl@gmail.com";

mail($to,$subject,$txt,$headers);
echo "SMS Enviado exitosamente!"; 
?>

