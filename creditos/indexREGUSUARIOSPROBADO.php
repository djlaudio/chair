<!DOCTYPE html>
<html lang="es">
<head>Logueo Usuario Creditos</head>
<body style="background-color=#404546;">

<form method="POST" action="registro.php">

<table>
<tr>
<td>
 Cédula
</td>
<td>
<input type="number" name="cedula" placeholder="Digite la cédula" required>
</td>
</tr>
<tr>
<td>
 Nombre
</td>
<td>
<input type="name" name="nombre" placeholder="Digite el nombre" required>
</td>
</tr>
<tr>
<td>
 Primer Apellido
</td>
<td>
<input type="name" name="apellido1" placeholder="Digite el primer apellido" required>
</td>
</tr>
<tr>
<td>
 Segundo Apellido
</td>
<td>
<input type="name" name="apellido2" placeholder="Digite el segundo apellido" required>
</td>
</tr>
<tr>
<td>
 Teléfono 1
</td>
<td>
<input type="tel" name="tel1" placeholder="Digite el Teléfono" required>
</td>
</tr>
<tr>
<td>
 Teléfono 2
</td>
<td>
<input type="tel" name="tel2" placeholder="Digite el Teléfono" >
</td>
</tr>
<tr>
<td>
 Dirección
</td>
<td>
  <textarea placeholder="Digite la dirección del usuario"  name="direccion" id="direccion" rows="5"></textarea>
						    
</td>
</tr>

<tr>
<td>
Rol
</td>
	<td>					      
						       <SELECT NAME="rol" SIZE=1 required> 
							   	<?php include('connect_db.php');
								$query = mysqli_query($link,"SELECT * from rol where estado=1");
								while($row = mysqli_fetch_assoc($query)){?>
								<option value=" <?php echo $row['idRol'] ?> "><?php echo $row['nombreRol']; ?></option>
								<?php } ?>
								
								</SELECT> 
	</td>
</tr>
<tr>
<td>
Zonas
</td>
	<td>					      
						       <SELECT NAME="area" SIZE=1 required > 
							  	<?php include('connect_db.php');
								$query = mysqli_query($link,"SELECT * from area where estado=1");
								while($row = mysqli_fetch_assoc($query)){?>
								<option value=" <?php echo $row['idArea'] ?> "><?php echo $row['nombreArea']; ?></option>
								<?php } ?>
								
								</SELECT> 
	</td>
</tr>
<tr>
<td>
 Usuario
</td>
<td>
<input type="name" name="usuario" placeholder="Digite el usuario" required>
</td>
</tr>
	
<tr>
<td>
 Contraseña
</td>
<td>
<input type="password" name="pass"  placeholder="Digite la contraseña" required>
</td>
</tr>
<tr>
<td>
 Repetir Contraseña
</td>
<td>
<input type="password" name="repPass" placeholder="Repita la contraseña" required>
</td>
</tr>
</table>
<input type="submit" value="Registrar">
<input type="reset" value="Borrar todo"  >
</form>



</body>
</html>