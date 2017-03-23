<?php 


session_start();

$idCredito=$_POST['selComboCreditos2'];


echo 'idCredito: ';
echo $idCredito;


// Lo siguiente es para verificar las variables del post
//if($_POST)
//	{
//	foreach ($_POST as $clave=>$valor)
//   		{
//   		echo "El valor de $clave es: $valor";
//   		}
//	}



	require("connect_db.php");
	
	
$sql="UPDATE credito set  anulada2='1' where idCredito='$idCredito'";
echo $sql;

   if (!mysqli_query($link,$sql)) {
     die('Error: ' . mysqli_error($link));
	 mysqli_rollback($link);
echo "<p>CREDITO ANULADO CORRECTAMENTE</p>";
   }
else {
		header('Location:welcome.php');
		echo "<p>Credito anulado correctamente</p>";

		// do stuffs
		
		
	}
	mysqli_commit($link);
	mysqli_close($link);






?>