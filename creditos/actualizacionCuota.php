<?php 


session_start();

if (isset($_POST['cuota']))

{

$idCredito=$_POST['selComboCreditos2'];

$cuota=$_POST['cuota'];

$siguienteDiaPago=$_POST['selComboSigDiaPago2'];


$horaDePagoNormal=$_POST['horaDePago'];

$idTipoClientes=$_POST['selTipoCliente'];

$idCliente=$_POST['idCliente'];

$calificacion=$_POST['selComboCalificacion'];

$comentariosCliente=$_POST['observacionCliente'];

foreach($_POST AS $key => $value) {
  echo "$key -> $value";
}

echo 'Siguiente dia pago';
echo $siguienteDiaPago;
echo 'cuota';
echo $cuota;
echo 'idCredito';
echo $idCredito;




echo $horaDePagoNormal;



//$saldoDespuesDeAbono=$saldoActual- $abono;


$_SESSION['tel1']=$_POST['tel1'];
$_SESSION['tel2']=$_POST['tel2'];
//$_SESSION['abono']=$abono;
//$_SESSION['saldoDespuesDeAbono']=$saldoDespuesDeAbono;


// Lo siguiente es para verificar las variables del post
if($_POST)
	{
	foreach ($_POST as $clave=>$valor)
   		{
  		echo "El valor de $clave es: $valor";
   		}
	}



	require("connect_db.php");
	$contra1=md5($contra1);


$sql="UPDATE cliente set  tipoCliente='$idTipoClientes', calificacion='$calificacion', comentarios='$comentariosCliente'  where idCliente='$idCliente'";

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
	
$sql="UPDATE credito set  cuotaCredito='$cuota', diaPago='$siguienteDiaPago', horaDePagoNormal='$horaDePagoNormal', idTipoClientes='$idTipoClientes'  where idCredito='$idCredito'";
echo $sql;

   if (!mysqli_query($link,$sql)) {
     die('Error: ' . mysqli_error($link));
	 mysqli_rollback($link);
echo "<p>Operacion incorrecta</p>";
   }
else {
		header('Location:welcome.php');
		echo "<p>Credito actualizado correctamente</p>";
echo $cuota;
		// do stuffs

//echo "<script>window.history.back()</script>";

		
		
	}
	mysqli_commit($link);
	mysqli_close($link);


}
else
{
echo "<p>Por favor seleccione el credito y la cuota</p>";
}


?>