<?php

include('connect_db.php');
include('functionCaja.php');

$montoAtrasadoSemanal=($_POST["$montoAtrasadoSemanal"]);
$montoAtrasadoQuincenal=($_POST["$montoQuincenal"]);
$montoAtrasadoMensual=($_POST["$montoAtrasadoMensual"]);
$montoInicial= ($_POST["montoInicial"]);
$ventasEfectivo= ($_POST["ventasEfectivo"]);
$gastosEfectivo= ($_POST["gastosEfectivo"]);
$apartadoEnCaja= ($_POST["apartadoEnCaja"]);
$efectivoEnCaja= ($_POST["fectivoCaja"]);





$patrimonioDeudas=($montoAtrasadoSemanal+$montoAtrasadoQuincenal+$montoAtrasadoMensual);


$patrimonioDeLaEmpresa=(($patrimonioDeudas/2)+$efectivoEnCaja+$apartadoEnCaja);


$respuestaCaja = "Cierre: Hay ";



$respuestaCaja .=  $efectivoEnCaja ;



$respuestaCaja .= " colones. ";

$respuestaCaja .= "Apartado: c." . $apartadoEnCaja . " Gastos: c." . $gastosEfectivo .""  ; 

if  ((caja($montoInicial,$ventasEfectivo,$gastosEfectivo,$apartadoEnCaja))>$efectivoEnCaja)
{
    $respuestaCaja  .= (" faltan c.". ((caja($montoInicial,$ventasEfectivo,$gastosEfectivo,$apartadoEnCaja))-$efectivoEnCaja)." ")   ;
}
else
    if  ($efectivoEnCaja > (caja($montoInicial,$ventasEfectivo,$gastosEfectivo,$apartadoEnCaja)))
    {
        $respuestaCaja  .= (" Sobran c.". (   $efectivoEnCaja -(caja($montoInicial,$ventasEfectivo,$gastosEfectivo,$apartadoEnCaja)))." " ) ;
    }
    else
    {
        $respuestaCaja  .= ( " Todo esta bien. " )  ;
    }




$respuestaCaja .= ("Cobros atrasados: c." . $patrimonioDeudas . " Patrimonio: c." . $patrimonioDeLaEmpresa . " ")  ;


$respuestaCaja .= $comentarios;


$subject=str_replace('-','',rtrim('84992177'));
$to='celdjl@gmail.com';

$txt = $respuestaCajar;
$headers = 'From: consultas@djlproductions.com' . "\r\n" .
"CC: celdjl@gmail.com";

envioSms('84992177', $respuestaCaja);

function envioSms($destinatario, $texto)

{

$subject=str_replace("-","",rtrim($destinatario));
$to="celdjl@gmail.com";


$headers = "From: consultas@djlproductions.com" . "\r\n" .
"CC: celdjl@gmail.com";

mail($to,$subject,$texto,$headers);

return ("Sms enviado");

}

    exit;
?>