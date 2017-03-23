<?php
session_start();


include('connect_db.php');


$query = mysqli_query($link,"SELECT distinct diaPago, idCredito, idClienteCredito, credito.codigoProducto, descrProducto,  CONCAT( ' numFactura:', credito.idCredito-274 , ' ', persona.nombre, cantidadCredito,  ' col.', credito.observacion,  ' cuota.', credito.cuotaCredito, ' Montopagado correcto:',   DATEDIFF( CURDATE( ) , fechaCredito ) /7 * cuotaCredito, ' Montopagado real:',   credito.montoPagado,  ' Diferencia:',  ( DATEDIFF( CURDATE( ) , fechaCredito ) /7 * cuotaCredito) - credito.montoPagado) AS descripcion
FROM dia d
INNER JOIN credito ON d.numDia = credito.diaPago
INNER JOIN cliente ON credito.idClienteCredito = cliente.idPersona
INNER JOIN persona ON cliente.idPersona = persona.idPersona
WHERE  credito.diaPago between '0' and '7' AND cliente.balance >0 and credito.cantidadCredito>credito.montoPagado and anulada='0'
order by   persona.nombre");

	while ($row = mysqli_fetch_array($query)) {




		echo $row['tel1'];
//$txt = "".$_SESSION['textoAEnviar']."";
$subject="AQUI NUMERO ";
$to="celdjl@gmail.com";
$txt = "HOLA MAIL EN PHP PRUEBA SIN NUMERO";
$headers = "From: consultas@djlproductions.com" . "\r\n" .
"CC: celdjl@gmail.com";

mail($to,$subject,$txt,$headers);
	}



	exit;
?>