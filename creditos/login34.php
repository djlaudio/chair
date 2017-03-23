<?php 
    session_start();
	require("connect_db.php");

	$usuario= $_POST['usuario'];
	$clave= $_POST['clave']; 

	$clave= md5($clave); 


	$sql = "SELECT CONCAT(p.name,' ', p.lastname) name, idTipoClientes, idRol, idUsuario, idArea from usuario u, person p WHERE u.idPersona=p.id and u.usuario = '{$usuario}' AND u.clave = '{$clave}' LIMIT 1";

	
	$res=mysqli_query($link,$sql);
	
    if(mysqli_num_rows($res)>=1){
		$res2=mysqli_fetch_array($res);
		$_SESSION['usuario'] =$usuario;
		$_SESSION['nombreCompleto'] = $res2['name'];
		$_SESSION['idRol'] = $res2['idRol'];
                $_SESSION['idTipoClientes'] = $res2['idTipoClientes'];
// idArea es si el cliente es de tienda o calle
 $_SESSION['idArea'] = $res2['idArea'];
                $_SESSION['idUsuario'] = $res2['idUsuario'];
                if( $res2['idRol'] == 1){
header('Location:adminPanel.php');
			
echo "<p>Rol es 1</p>";
	  
		}elseif( $res2['idRol'] == 2){
			header('Location:welcome.php');
echo "<p>Rol  es 2</p>";
	  
		}
		
		}elseif( $res2['idRol'] == 3){
			header('Location:welcome.php');
echo "<p>Rol  es 3</p>";
	  
		}
		
	 else {
		header('Location:index.php');
		echo "<p>Usuario o contrase���a incorrectas</p>";
		// do stuffs
	}
  
?>