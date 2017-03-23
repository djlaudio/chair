<?php


include('connect_db.php');


if (isset($_POST['get_option'])) {

echo "Tratando de entrar con tipo clientes";


if (isset($_POST['idTipoClientes'])) {
$state          = $_POST['get_option'];
                $idTipoClientes = $_POST['idTipoClientes'];

if ($_POST['idTipoClientes']==1)
{
 $find = mysqli_query($link, "SELECT distinct diaPago, idCredito, idClienteCredito, credito.codigoProducto, descrProducto, CONCAT(persona.nombre, cantidadCredito,  ' col.', credito.observacion,  ' numFactura:', credito.numFactura, ' ') AS descripcion
FROM dia d
INNER JOIN credito ON d.numDia = credito.diaPago
INNER JOIN cliente ON credito.idClienteCredito = cliente.idPersona
INNER JOIN persona ON cliente.idPersona = persona.idPersona
WHERE  credito.cantidadCredito >credito.montoPagado AND credito.termino_id='137' and credito.anulada='0' and credito.anulada2='0' and credito.diaPago=$state 
order by credito.horaDePagoNormal, persona.nombre");
    }
else
            
                
                {
                $find = mysqli_query($link, "SELECT distinct diaPago, idCredito, idClienteCredito, credito.codigoProducto, descrProducto, CONCAT(persona.nombre, cantidadCredito,  ' col.', credito.observacion,  ' numFactura:', credito.numFactura, ' ') AS descripcion
FROM dia d
INNER JOIN credito ON d.numDia = credito.diaPago
INNER JOIN cliente ON credito.idClienteCredito = cliente.idPersona
INNER JOIN persona ON cliente.idPersona = persona.idPersona
WHERE  credito.cantidadCredito >credito.montoPagado AND credito.termino_id='137' and credito.anulada='0' and credito.anulada2='0' and credito.diaPago=$state 
order by persona.nombre");
}
}
else
{


                
                $state          = $_POST['get_option'];
                
                
                $find = mysqli_query($link, "SELECT distinct diaPago, idCredito, idClienteCredito, credito.codigoProducto, descrProducto, CONCAT( '# ', credito.numFactura, ' ', persona.nombre, cantidadCredito,  ' dia:', d.descrDia,'cuota: ', cuotaCredito ) AS descripcion
FROM dia d
INNER JOIN credito ON d.numDia = credito.diaPago
INNER JOIN cliente ON credito.idClienteCredito = cliente.idPersona
INNER JOIN persona ON cliente.idPersona = persona.idPersona
WHERE  credito.cantidadCredito >credito.montoPagado AND credito.termino_id='137' and credito.anulada='0' and credito.anulada2='0' and credito.diaPago=$state
order by cuotaCredito, persona.nombre");

}

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
}





?>
