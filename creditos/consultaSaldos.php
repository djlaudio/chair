<?php 


session_start();

$idCredito=$_POST['selComboCreditos'];

$cuota=$_POST['cuota'];

$siguienteDiaPago=$_POST['selComboSigDiaPago'];

$saldoDespuesDeAbono=$saldoActual- $abono;


$_SESSION['tel1']=$_POST['tel1'];
$_SESSION['tel2']=$_POST['tel2'];
$_SESSION['abono']=$abono;
$_SESSION['saldoDespuesDeAbono']=$saldoDespuesDeAbono;


// Lo siguiente es para verificar las variables del post
//if($_POST)
//	{
//	foreach ($_POST as $clave=>$valor)
//   		{
//   		echo "El valor de $clave es: $valor";
//   		}
//	}



	require("connect_db.php");
	$contra1=md5($contra1);
	
$sql="select respuesta from IMEIS where IMEI='$IMEI' and idServicio='$idServicio'";

   if (!mysqli_query($link,$sql)) {
     die('Error: ' . mysqli_error($link));
	 mysqli_rollback($link);
echo "<p>Operacion incorrecta</p>";
   }
else {
		header('Location:welcome.php');
		echo "<p>Abono actualizado correctamente</p>";
echo $cuota;
		// do stuffs
		
		
	}
	mysqli_commit($link);
	mysqli_close($link);






?>
