<?php

$nombre=$_POST['nombre'];
$apellido1=$_POST['apellido1'];
$apellido2=$_POST['apellido2'];
$cedula=$_POST['cedula'];
$telefono1=$_POST['telefono1'];
$telefono2=$_POST['telefono2'];
$direccion=$_POST['direccion'];
$calificacion=$_POST['calificacion'];
$comentarios=$_POST['comentarios'];
$correo=$_POST['correo'];
$calificacion=$_POST['selCombo'];
$nameBusiness=$_POST['nombreEmpresa'];
date_default_timezone_set('America/Costa_Rica');

$fecha_hora = date('d-m-Y H:i:s', $time);

$usuario=$_POST['usuario'];
$contra1=$_POST['pass'];
$contra2=$_POST['repPass'];

$rol=$_POST['rol'];
$area=$_POST['area'];
$tipoCliente=$_POST['selTipoCliente'];

echo $rol;
echo $area;

if ($contra1 !== $contra2){
  echo 'Las contraseñas no coinciden.';
}else{



	require("connect_db.php");
	$contra1=md5($contra1);


	//$sql="INSERT INTO persona(nombre, cedula, direccion, telefono1, telefono2) values ('$nombre','$cedula','$direccion', '$telefono1', '$telefono2')" ;

//$sql="INSERT INTO person(name, cedula, address1, phone1, phone2, kind, created_at) values ('$nombre','$cedula','$direccion', '$telefono1', '$telefono2', '1','date('Y-m-d H:i:s')')" ;

$dateNow = date('Y-m-d H:i:s');



if (empty($cedula)) {

}

else


{


	}

	if (!mysqli_query($link,$sql)) {
     die('Error: ' . mysqli_error($link));
	 mysqli_rollback($link);
   }

   $idPersona= mysqli_insert_id($link);


echo 'Persona ingresada correctamente';
   $sql="INSERT INTO cliente(idPersona, calificacion, comentarios, tipoCliente) values ('$idPersona','$calificacion','$comentarios', '$tipoCliente')" ;



	if (!mysqli_query($link,$sql)) {
     die('Error: ' . mysqli_error($link));
	 mysqli_rollback($link);
   }
   echo 'Cliente ingresado correctamente';

	mysqli_commit($link);
	mysqli_close($link);

echo "<script>window.history.back()</script>";
}

?>
