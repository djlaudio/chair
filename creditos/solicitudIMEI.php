<?php 


session_start();

$idServicio=$_POST['selServicio'];
$IMEIS=$_POST['IMEIS'];
$email=$_POST['email'];

echo $IMEIS;


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
	$sql="INSERT INTO IMEIS(idServicio, IMEI, email) values ('$idServicio','$IMEIS','$email')" ;

	
	
	if (!mysqli_query($link,$sql)) {
     die('Error: ' . mysqli_error($link));
	 mysqli_rollback($link);
echo "<p>Operacion incorrecta</p>";
   }
else {
		
		echo "<p>IMEI(s) inserted OK. Please send the amount of your order via paypal to celdjl@gmail.com for start processing your IMEI(s).</p>";
require_once 'sendEmailForm.php';
		// do stuffs
		
		
          
	}
 

	mysqli_commit($link);
	mysqli_close($link);






?>