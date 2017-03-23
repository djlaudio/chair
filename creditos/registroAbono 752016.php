<?php 


session_start();

$idCredito=$_POST['selComboCreditos'];
$diaPago=$_POST['selComboDiaAbono'];
$abono=$_POST['abono'];
$observacion =$_POST['observacion'];
$fechaAbono=gmdate("Y-m-d\TH:i:s\Z");
$message =$_POST['message'];
$siguienteDiaPago=$_POST['selComboSigDiaPago'];
$horaDePagoNormal=$_POST['horaDePago'];
$saldoActual=$_POST['saldoActual'];
$saldoDespuesDeAbono=$saldoActual- $abono;
$tele1=$_POST['tele1'];




$_SESSION['tele1']=$tele1;
$_SESSION['abono']=$abono;
$_SESSION['saldoDespuesDeAbono']=$saldoDespuesDeAbono;


// Lo siguiente es para verificar las variables del post

//Lo siguiente verifica que no se abone más de lo que se debe.
if (saldoDespuesDeAbono<0)
{
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
	$contra1=md5($contra1);
	$sql="INSERT INTO abono(idCreditoAbono, cantidadAbono, diaPago, observacion, fechaAbono, idCobrador, saldoCredito, porcComisionCobrador) values ('$idCredito','$abono','$diaPago', '$message', '$fechaAbono','28','$saldoDespuesDeAbono','0' )" ;

	
	
	if (!mysqli_query($link,$sql)) {
     die('Error: ' . mysqli_error($link));
	 mysqli_rollback($link);
echo "<p>Operacion incorrecta</p>";
   }
else {
		$id=mysqli_insert_id($link);

		echo "<p>Abono ingresado correctamente</p>";
echo $_SESSION['tel1'];
echo "<p>Abono ingresado correctamente</p>";
		// do stuffs
		
		require_once 'sendSmsAbono.php';
          echo "<p>Mensaje procesado correctamente</p>";
	}
 
echo "<p>SIGUE CREDITO</p>";
$sql="UPDATE credito set diaPago='$siguienteDiaPago', horaDePagoNormal='$horaDePagoNormal',  saldoActual= '$saldoDespuesDeAbono'  where idCredito='$idCredito'";

echo $sql;

   if (!mysqli_query($link,$sql)) {
     die('Error: ' . mysqli_error($link));
	 mysqli_rollback($link);
echo "<p>Operacion incorrecta</p>";
   }
else {
		
		echo "<p>Credito actualizado correctamente</p>:";
		// do stuffs
		

$yourURL="http://www.marcasgenuinas.com/inventario/report/djlabono-pos.php?id=$idCredito";
echo ("<script>location.href='$yourURL'</script>");

//echo'<script>

//window.location='http://www.marcasgenuinas.com/inventario/report/djlabono-pos.php?id=$idCreditoAbono';</script>';
exit;
		
	}
	mysqli_commit($link);
	mysqli_close($link);



}


?>