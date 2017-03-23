<?php 

$nombre=$_POST['nombre'];
$cedula=$_POST['cedula'];
$apell1=$_POST['apellido1'];
$apell2=$_POST['apellido2'];
$tel1=$_POST['tel1'];
$tel2=$_POST['tel2'];
$direccion=$_POST['direccion'];


$usuario=$_POST['usuario'];
$contra1=$_POST['pass'];
$contra2=$_POST['repPass'];

$rol=$_POST['rol'];
$area=$_POST['area'];

echo $rol;
echo $area;

if ($contra1 !== $contra2){
  echo 'Las contraseñas no coinciden.';
}else{



	require("connect_db.php");
	$contra1=md5($contra1);
	$sql="INSERT INTO persona(nombre, cedula, primerApellido, segundoApellido, direccion, telefono1, telefono2) values ('$nombre','$cedula','$apell1','$apell2','$direccion', '$tel1', '$tel2')" ;

	
	
	if (!mysqli_query($link,$sql)) {
     die('Error: ' . mysqli_error($link));
	 mysqli_rollback($link);
   }
   $idPersona= mysqli_insert_id($link);
   
   $sql="INSERT INTO usuario(usuario, clave, idRol, idPersona, idArea) values ('$usuario','$contra1','$rol','$idPersona','$area')" ;

	
	
	if (!mysqli_query($link,$sql)) {
     die('Error: ' . mysqli_error($link));
	 mysqli_rollback($link);
   }
else{
  Persona registrada correctamente.';
}
   
   
	mysqli_commit($link);
	mysqli_close($link);
}

?>