<?php
session_start();


include('connect_db.php');
include('consultasMorosos.php');


$query = mysqli_query($link,$ConsultaSemanaMorosos);

  while ($row = mysqli_fetch_array($query)) {


if($row['telefono1']!='')

 {
$mensajeAEnviar="FASTNESS le recuerda que tiene " . intval($row['cuotasAtrasadas']) ." cuotas atrasadas. Por favor, llame al 40305859 o 87360887\n";
   



 echo "A " . rtrim($row['nombre']) . "Se le envia al: " . $row['telefono1'] . " el siguiente mensaje: " . $mensajeAEnviar ;

$subject=str_replace("-","",rtrim($row['telefono2']));
$to="mgmagemg@gmail.com";

$txt = $mensajeAEnviar;
$headers = "From: consultas@djlproductions.com" . "\r\n" .
"CC: celdjl@gmail.com";

mail($to,$subject,$txt,$headers);




 }
else
{

echo "A " . rtrim($row['nombre']) . "No se le envia mensaje ya que no tiene numero registrado ";

}

  }
  exit;
?>