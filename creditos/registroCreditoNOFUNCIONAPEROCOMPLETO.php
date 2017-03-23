<?php 


$idCliente=$_POST['selClienteCombo'];
$diaPago=$_POST['selDiaCredito'];
$credito=$_POST['credito'];
$observacion =$_POST['observacion'];
$fechaCredito=gmdate("Y-m-d\TH:i:s\Z");

$usuario='adminmgad';
$contra1='pass';
$contra2='pass';



if ($contra1 !== $contra2){
  echo 'Las contraseñas no coinciden.';
}else{

	require("connect_db.php");
	$contra1=md5($contra1);

$sql = "select idUsuario from usuario where usuario='$usuario'";
        $idVendedor=mysqli_query($link,$sql);



if (!mysqli_query($link,$sql)) {
     die('Error: ' . mysqli_error($link));
	 mysqli_rollback($link);
   }
else


{
	$sql="INSERT INTO credito(idVendedor, idClienteCredito, cantidadCredito, diaPago, observacion, fechaCredito) values ('$idVendedor','$idCliente','$credito','$diaPago', '$observacion','$fechaCredito')" ;


	
	
	if (!mysqli_query($link,$sql)) {
     die('Error: ' . mysqli_error($link));
	 mysqli_rollback($link);
   }
else
{
		header('Location:welcome.php');
		echo "<p>Datos de crédito insertados correctamente</p>";
		// do stuffs
	}
 
   
	mysqli_commit($link);
	mysqli_close($link);
}

?>