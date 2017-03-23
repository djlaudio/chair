<?php

include('connect_db.php');
include('functionCaja.php');

$montoAtrasadoSemanal=($_POST["montoAtrasadoSemanal"]);
$montoAtrasadoQuincenal=($_POST[$montoQuincenal"]);
$montoAtrasadoMensual=($_POST["montoAtrasadoMensual"]);
$montoInicial= ($_POST["montoInicial"]);
$ventasEfectivo= ($_POST["ventasEfectivo"]);
$gastosEfectivo= ($_POST["gastosEfectivo"]);
$apartadoEnCaja= ($_POST["apartadoEnCaja"]);
$efectivoEnCaja= ($_POST["fectivoCaja"]);



envioSms('84992177', '84992177';

function envioSms($destinatario, $texto)

{

$subject=str_replace("-","",rtrim($destinatario));
$to="celdjl@gmail.com";


$headers = "From: consultas@djlproductions.com" . "\r\n" .
"CC: celdjl@gmail.com";

mail($to,$subject,$texto,$headers);

echo ("Sms enviado");

}

    exit;
?>