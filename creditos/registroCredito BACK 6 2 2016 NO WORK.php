<?php 


$idCliente=$_POST['selClienteCombo'];
$diaPago=$_POST['selDiaCredito'];
$credito=$_POST['credito'];
$observacion =$_POST['observacion'];
$fechaCredito=gmdate("Y-m-d\TH:i:s\Z");






	require("connect_db.php");
	$contra1=md5($contra1);
	$sql="INSERT INTO credito(idVendedor, idClienteCredito, cantidadCredito, descrProducto, diaPago, observacion, fechaCredito, saldoActual) values ('28','$idCliente','$credito','$descrProducto,'$diaPago', '$observacion','$fechaCredito','$credito')";



if (!mysqli_query($link,$sql)) {
     die('Error: ' . mysqli_error($link));
	 mysqli_rollback($link);
	 echo "<p>Operacion incorrecta</p>";
   }
else
{
		header('Location:welcome.php');
		echo "<p>Datos de crédito insertados correctamente</p>";
		// do stuffs
	}
 
   
	mysqli_commit($link);
	mysqli_close($link);


?>