// Esto es llamado desde registroAbono.php


<?php

session_start();


if ((isset($_POST['cuota']))  && (isset($_POST['saldoActual'])))

{

$idCredito=$_POST['selComboCreditos'];
$diaPago=$_POST['selCombo'];
$tipoPago=$_POST['tipo_pago'];;
$abono=$_POST['abono'];
$observacion =$_POST['message'];
$fechaAbono=gmdate("Y-m-d\TH:i:s\Z");
$message =$_POST['message'];
$siguienteDiaPago=$_POST['selComboSigDiaPago'];
$horaDePagoNormal=$_POST['horaDePago'];
$saldoActual=$_POST['saldoActual'];
$saldoDespuesDeAbono=($saldoActual- $abono);
$tele1=$_POST['tele1'];
$idCliente=$_POST['idCliente'];
$tipoCliente=$_POST['selTipoCliente'];
$idSell=$_POST['idSell'];
$idCredito+= 0;
$cuota=$_POST['cuota'];
$idUsuario=$_SESSION['idUsuario'];
$idTipoClientes=$_SESSION['idTipoClientes'];

$_SESSION['tele1']=$tele1;
$_SESSION['abono']=$abono;
$_SESSION['saldoDespuesDeAbono']=$saldoDespuesDeAbono;
$_SESSION['nombre']=$_POST['nombre'];

echo "Saldo actual:";
echo $saldoActual;

echo "Saldodespues de abono:";
echo $saldoDespuesDeAbono;

foreach($_POST AS $key => $value) {
  echo "$key -> $value";
}

// Lo siguiente es para verificar las variables del post

//Lo siguiente verifica que no se abone más de lo que se debe.
if ($saldoDespuesDeAbono<0)
{

echo ("<script>alert('El cliente no puede pagar mas de lo que debe')</script>");
echo ("<script>window.history.back();</script>");

}
else
{
if($_POST)
	{
	foreach ($_POST as $clave=>$valor)
   		{
   		echo "El valor de $clave es: $valor";
   		}
	}



	require("connect_db.php");

	$sql="INSERT INTO abono(idCreditoAbono, cantidadAbono, diaPago, tipo_pago, observacion, fechaAbono, idCobrador, saldoCredito, porcComisionCobrador, id2creditoAbono) values ('$idCredito','$abono','$diaPago','$tipoPago','$message','$fechaAbono','$idUsuario','$saldoDespuesDeAbono','0','$idSell')" ;



	if (!mysqli_query($link,$sql)) {
     die('Error: ' . mysqli_error($link));
	 mysqli_rollback($link);
echo "<p>Operacion incorrecta</p>";
   }
else {
		$id=mysqli_insert_id($link);

		echo "<p>Abono ingresado correctamente</p>";
echo $sql;


		// do stuffs


	}

echo "<p>SIGUE CREDITO</p>";




$sql="UPDATE cliente set  tipoCliente='$tipoCliente'  where idCliente='$idCliente'";

echo $sql;

   if (!mysqli_query($link,$sql)) {
     die('Error: ' . mysqli_error($link));
	 mysqli_rollback($link);
echo "<p>Operacion incorrecta</p>";
   }
else {

		echo "<p>Cliente actualizado correctamente</p>:";
		// do stuffs

echo $idCliente;
}

$sql="UPDATE credito set  cuotaCredito='$cuota', diaPago='$siguienteDiaPago', horaDePagoNormal='$horaDePagoNormal', idTipoClientes='$idTipoClientes',  saldoActual= '$saldoDespuesDeAbono', montoPagado=montoPagado+$abono  where idCredito='$idCredito'";

echo $sql;

   if (!mysqli_query($link,$sql)) {
     die('Error: ' . mysqli_error($link));
	 mysqli_rollback($link);
echo "<p>Operacion incorrecta</p>";
   }
else {

		echo "<p>Credito actualizado correctamente</p>:";
		// do stuffs

echo $idCredito;



// Si es vendedor de calle se devuelve a lo de antes, sino se envía a imprimir. (Si es de tienda)
if ($_SESSION['idTipoClientes']==1)
{



require_once 'sendSmsAbono.php';
          echo "<p>Mensaje procesado correctamente</p>";
echo ("<script>window.history.back();</script>");
}
elseif ($_SESSION['idTipoClientes']==2)
{




//echo ("<script>alert('El tipo de cliente es 2')</script>");
$yourURL="http://www.djlproductions.com/fastnessclothing/report/djl1abono-pos.php?id=$idCredito";

echo ("<script>location.href='$yourURL'</script>");
}
//echo'<script>

//window.location='http://www.djlproductions.com/fastnessclothing/report/djl1abono-pos.php?id=$idCredito';</script>';
exit;

	}
	mysqli_commit($link);
	mysqli_close($link);



}

}


else
{
echo "<p>Por favor digite el abono y/o la cuota</p>:";
}
?>
