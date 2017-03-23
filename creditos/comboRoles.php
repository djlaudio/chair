<?php 


	require("connect_db.php");
	
	
	
	$sql="select idRol, nombreRol from rol" ;
	$result = $link->query($sql); //usamos la conexion para dar un resultado a la variable
 
if ($result->num_rows > 0) //si la variable tiene al menos 1 fila entonces seguimos con el codigo
{
    $combobit="";
    while ($row = $result->fetch_array(MYSQLI_ASSOC)) 
    {
        $comboRol .=" <option value='".$row['idRol']."'>".$row['nombreRol']."</option>"; //concatenamos el los options para luego ser insertado en el HTML
    }
}
else
{
    echo "No hubo resultados";
}



?>