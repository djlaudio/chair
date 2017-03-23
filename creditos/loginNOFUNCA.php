<?php 
    session_start();
	require("connect_db.php");

	$usuario= $_POST['usuario'];
	$clave= $_POST['clave']; 

	$clave= md5($clave); 


	$sql = "SELECT CONCAT(p.nombre,' ', p.primerApellido,' ', p.segundoApellido) nombre from usuario u, persona p WHERE u.idPersona=p.idPersona and u.usuario LIKE '{$usuario}' AND u.clave LIKE '{$clave}' LIMIT 1";

	
	$res=mysqli_query($link,$sql);
	
    if(mysqli_num_rows($res)>=1){
		$res2=mysqli_fetch_array($res);
		$_SESSION['usuario'] =$usuario;
		$_SESSION['nombreCompleto'] = $res2['nombre'];

                
			header('Location:adminPanel.php');
echo "<p>Rol es 1</p>";
	  
		
		
	} else {
		header('Location:index.php');
		echo "<p>Usuario o contraseña incorrectas</p>";
		// do stuffs
	}
 	
  
?>