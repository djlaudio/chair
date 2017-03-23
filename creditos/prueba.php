<?php


include('connect_db.php');



				
				
				$idTipoClientes = $_POST['idCredito'];
				
				$find = mysqli_query($link, "SELECT distinct diaPago, idCredito, idClienteCredito, credito.codigoProducto, descrProducto, CONCAT(persona.direccion, ',', persona.telefono1, ',', persona.telefono2 ) AS descripcion
FROM dia d
INNER JOIN credito ON d.numDia = credito.diaPago
INNER JOIN cliente ON credito.idClienteCredito = cliente.idPersona
INNER JOIN persona ON cliente.idPersona = persona.idPersona
WHERE credito.idCredito=$idTipoClientes
order by credito.diaPago, credito.idCredito");
				while ($row = mysqli_fetch_array($find)) {
?>
								<option value=" <?php
								echo $row['idCredito'];
?> "><?php
								echo $row['descripcion'];
?></option>
								<?php
				}
				
				exit;


?>
