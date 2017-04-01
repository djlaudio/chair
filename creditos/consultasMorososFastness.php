<?php


$ConsultaDeMorososYMasPorIdFastness="SELECT DISTINCT   (DATEDIFF( CURDATE( ) , fechaCredito )) as diasDesdeCredito, ((DATEDIFF( CURDATE( ) , fechaCredito ))/7) as cuotasQueHanPasado, ((DATEDIFF( CURDATE( ) , fechaCredito ) /7) * cuotaCredito ) as deberiaHaberPagado, ((DATEDIFF( CURDATE( ) , fechaCredito ) /7) * cuotaCredito ) - montoPagado AS diferencia,diferenciaPago as diferenciaEnDb,     credito.montoPagado, credito.termino_id,credito.cantidadCredito, 
nro_de_pagos as cuotasRealizadas, diferenciaPago/cuotaCredito as cuotasAtrasadas, diaPago, fechaCredito, credito.idCredito, idClienteCredito, credito.codigoProducto, 
descrProducto, credito.numFactura,person.name, person.phone1, person.phone2, cantidadCredito, credito.cuotaCredito, credito.anulada FROM dia d
 INNER JOIN credito ON d.numDia = credito.diaPago INNER JOIN cliente ON credito.idClienteCredito = cliente.idPersona
 INNER JOIN person ON cliente.idPersona = person.id 
 ORDER  by credito.idCredito";

 //nada mas se le anulo el  INNER JOIN anulada on anulada.idCredito=credito.idCredito antes del order.


?>