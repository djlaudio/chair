<?php

function insertarSmsEnDB($z,$x){

include(connect_db.php);

$query= mysqli_query($link,"insert into sms (mensaje, telefono) values($z, $x)");

	if (!mysqli_query($link,$sql)) {
     die('Error: ' . mysqli_error($link));
	 mysqli_rollback($link);
echo "<p>Operacion incorrecta</p>";
   }
else {
		$id=mysqli_insert_id($link);

		echo "<p>Sms ingresado correctamente</p>";

mysqli_commit($link);
	mysqli_close($link);

}
?>
