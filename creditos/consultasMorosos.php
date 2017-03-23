<?php




$dayNum = date("w");

$cuotas=7;



//Diferencia calcula los dias entre venta y hoy, lo divide entre 7, para saber las cuotas atrasadas,  lo multiplica por la cuota para saber
//la deuda. Le resta lo que ha pagado para saber la deuda exacta. 
//Diferencia de pago entre cuotaCredito dice cuantas cuotas atrasadas tiene,

//Datediff: Dias que lleva desde creada la factura.
// si lo dividimos entre 7 se calculan las semanas que han sucedido
// lo multiplicamos por la cuota sabemos cuanto deberia haber pagado. Si la cuota está en 0, va a decir que debe negativo abajo.
// le restamos el montoPagado para saber cunto debe. Si la cuota está en 0, va a decir que debe negativo abajo.

// sse quito temporalmnente  and diferenciaPago>cuotaCredito
$ConsultaSemanaMorososPorNombre="SELECT DISTINCT   (DATEDIFF( CURDATE( ) , fechaCredito )) as diasDesdeCredito, ((DATEDIFF( CURDATE( ) , fechaCredito ))/7) as cuotasQueHanPasado, ((DATEDIFF( CURDATE( ) , fechaCredito ) /7) * cuotaCredito ) as deberiaHaberPagado, credito.montoPagado, ((DATEDIFF( CURDATE( ) , fechaCredito ) /7) * cuotaCredito ) - montoPagado AS diferencia,diferenciaPago as diferenciaEnDb, ((DATEDIFF( CURDATE( ) , fechaCredito ) /7) * cuotaCredito ) - montoPagado AS diferencia,diferenciaPago as diferenciaEnDb, 
nro_de_pagos as cuotasRealizadas, diferenciaPago/cuotaCredito as cuotasAtrasadas, diaPago, fechaCredito, credito.idCredito, idClienteCredito, credito.codigoProducto, 
descrProducto, credito.numFactura,person.name, person.phone1, person.phone2, cantidadCredito, credito.cuotaCredito, credito.anulada FROM dia d
 INNER JOIN credito ON d.numDia = credito.diaPago INNER JOIN cliente ON credito.idClienteCredito = cliente.idPersona
 INNER JOIN person ON cliente.idPersona = person.id INNER JOIN anulada on anulada.idCredito=credito.idCredito WHERE credito.diaPago BETWEEN '1' AND '7' AND
 credito.cantidadCredito >credito.montoPagado AND credito.termino_id='137' and anulada.anulada='0' 
  and credito.anulada2='0'ORDER  by name";

$ConsultaDeMorososYMasPorId="SELECT DISTINCT   (DATEDIFF( CURDATE( ) , fechaCredito )) as diasDesdeCredito, ((DATEDIFF( CURDATE( ) , fechaCredito ))/7) as cuotasQueHanPasado, ((DATEDIFF( CURDATE( ) , fechaCredito ) /7) * cuotaCredito ) as deberiaHaberPagado, ((DATEDIFF( CURDATE( ) , fechaCredito ) /7) * cuotaCredito ) - montoPagado AS diferencia,diferenciaPago as diferenciaEnDb,     credito.montoPagado, credito.termino_id,credito.cantidadCredito, 
nro_de_pagos as cuotasRealizadas, diferenciaPago/cuotaCredito as cuotasAtrasadas, diaPago, fechaCredito, credito.idCredito, idClienteCredito, credito.codigoProducto, 
descrProducto, credito.numFactura,person.name, person.phone1, person.phone2, cantidadCredito, credito.cuotaCredito, credito.anulada FROM dia d
 INNER JOIN credito ON d.numDia = credito.diaPago INNER JOIN cliente ON credito.idClienteCredito = cliente.idPersona
 INNER JOIN person ON cliente.idPersona = person.id INNER JOIN anulada on anulada.idCredito=credito.idCredito 
 ORDER  by credito.idCredito";


$ConsultaDeMorososYMasPorDiferencia="SELECT DISTINCT   (DATEDIFF( CURDATE( ) , fechaCredito )) as diasDesdeCredito, ((DATEDIFF( CURDATE( ) , fechaCredito ))/7) as cuotasQueHanPasado, ((DATEDIFF( CURDATE( ) , fechaCredito ) /7) * cuotaCredito ) as deberiaHaberPagado, ((DATEDIFF( CURDATE( ) , fechaCredito ) /7) * cuotaCredito ) - montoPagado AS diferencia,diferenciaPago as diferenciaEnDb,     credito.montoPagado, credito.termino_id,credito.cantidadCredito, 
nro_de_pagos as cuotasRealizadas, diferenciaPago/cuotaCredito as cuotasAtrasadas, diaPago, fechaCredito, credito.idCredito, idClienteCredito, credito.codigoProducto, 
descrProducto, credito.numFactura,person.name, person.phone1, person.phone2, cantidadCredito, credito.cuotaCredito, credito.anulada FROM dia d
 INNER JOIN credito ON d.numDia = credito.diaPago INNER JOIN cliente ON credito.idClienteCredito = cliente.idPersona
 INNER JOIN person ON cliente.idPersona = person.id INNER JOIN anulada on anulada.idCredito=credito.idCredito 
 ORDER  by (credito.cantidadCredito-credito.montoPagado)";




$ConsultaDeMorososYMasPorNombre="SELECT DISTINCT   (DATEDIFF( CURDATE( ) , fechaCredito )) as diasDesdeCredito, ((DATEDIFF( CURDATE( ) , fechaCredito ))/7) as cuotasQueHanPasado, ((DATEDIFF( CURDATE( ) , fechaCredito ) /7) * cuotaCredito ) as deberiaHaberPagado, credito.montoPagado, credito.termino_id,
nro_de_pagos as cuotasRealizadas, diferenciaPago/cuotaCredito as cuotasAtrasadas, diaPago, fechaCredito, credito.idCredito, idClienteCredito, credito.codigoProducto, 
descrProducto, credito.numFactura,person.name, person.phone1, person.phone2, cantidadCredito, credito.cuotaCredito, credito.anulada FROM dia d
 INNER JOIN credito ON d.numDia = credito.diaPago INNER JOIN cliente ON credito.idClienteCredito = cliente.idPersona
 INNER JOIN person ON cliente.idPersona = person.id INNER JOIN anulada on anulada.idCredito=credito.idCredito 
 ORDER  by name";

$Condicionadecuotas="and (diferenciaPago/cuotaCredito)>2 ";

$ConsultaSemanaMorosos="SELECT DISTINCT   (DATEDIFF( CURDATE( ) , fechaCredito )) as diasDesdeCredito,  credito.montoPagado, diferenciaPago as diferenciaEnDb, 
nro_de_pagos as cuotasRealizadas, diferenciaPago/cuotaCredito as cuotasAtrasadas, diaPago, fechaCredito, credito.idCredito, idClienteCredito, credito.codigoProducto, 
descrProducto, credito.numFactura,person.name, person.phone1, person.phone2, cantidadCredito, credito.cuotaCredito, ((DATEDIFF( CURDATE( ) , fechaCredito ) /7) * cuotaCredito ) - montoPagado AS diferencia,  ((DATEDIFF( CURDATE( ) , fechaCredito ))/7) as cuotasQueHanPasado, ((DATEDIFF( CURDATE( ) , fechaCredito ) /7) * cuotaCredito ) as deberiaHaberPagado FROM dia d
 INNER JOIN credito ON d.numDia = credito.diaPago INNER JOIN cliente ON credito.idClienteCredito = cliente.idPersona
 INNER JOIN person ON cliente.idPersona = person.id INNER JOIN anulada on anulada.idCredito=credito.idCredito WHERE credito.diaPago BETWEEN '1' AND '7' AND
 credito.cantidadCredito >credito.montoPagado AND credito.termino_id='137' and anulada.anulada='0' 
  and credito.anulada2='0' " .  $Condicionadecuotas . " order by cuotasAtrasadas desc";

$ConsultaIndefinidosMorosos="SELECT DISTINCT   (DATEDIFF( CURDATE( ) , fechaCredito )) as diasDesdeCredito, ((DATEDIFF( CURDATE( ) , fechaCredito ))/7) as cuotasQueHanPasado, ((DATEDIFF( CURDATE( ) , fechaCredito ) /7) * cuotaCredito ) as deberiaHaberPagado, credito.montoPagado, ((DATEDIFF( CURDATE( ) , fechaCredito ) /7) * cuotaCredito ) - montoPagado AS diferencia,diferenciaPago as diferenciaEnDb, 
nro_de_pagos as cuotasRealizadas, diferenciaPago/cuotaCredito as cuotasAtrasadas, diaPago, fechaCredito, credito.idCredito, idClienteCredito, credito.codigoProducto, 
descrProducto, credito.numFactura,person.name, person.phone1, person.phone2, cantidadCredito, credito.cuotaCredito FROM dia d
 INNER JOIN credito ON d.numDia = credito.diaPago INNER JOIN cliente ON credito.idClienteCredito = cliente.idPersona
 INNER JOIN person ON cliente.idPersona = person.id INNER JOIN anulada on anulada.idCredito=credito.idCredito WHERE credito.diaPago BETWEEN '0' AND '0' AND
 credito.cantidadCredito >credito.montoPagado AND credito.termino_id='137' and anulada.anulada='0' 
  and credito.anulada2='0' order by cuotasAtrasadas desc";


$actualizarDiferenciaSemanal= "update credito set diferenciaPago=((DATEDIFF( CURDATE( ) , fechaCredito ) /7) * cuotaCredito ) - montoPagado
WHERE credito.diaPago BETWEEN '1' AND '7' AND
 credito.cantidadCredito >=credito.montoPagado AND credito.termino_id='137' ";









$actualizarDiferenciaSemanalRevisarLodediferencia= "update credito set diferenciaPago=(round(DATEDIFF( CURDATE( ) , fechaCredito ) ,7) * cuotaCredito ) - montoPagado
WHERE credito.diaPago BETWEEN '1' AND '7' AND
 credito.cantidadCredito >credito.montoPagado AND credito.termino_id='137' and credito.anulada='0' 
 and diferencia>credito.cuotaCredito
  and credito.anulada2='0'  ";





$dayNum = date("w");

$cuotas=15;


$ConsultaQuincenaMorososBack2ConParametros="SELECT DISTINCT ( round(DATEDIFF( CURDATE( ) , fechaCredito ) ,$cuotas) * cuotaCredito ) - montoPagado AS diferencia, 
diferenciaPago/cuotaCredito as cuotasAtrasadas, diaPago, fechaCredito, idCredito, idClienteCredito, credito.codigoProducto, 
descrProducto, credito.numFactura,person.name, person.phone1, person.phone2, cantidadCredito, credito.cuotaCredito, credito.montoPagado, 
' Dif:', ( DATEDIFF( CURDATE( ) , fechaCredito ) /$cuotas * cuotaCredito ) - credito.montoPagado as diferencia, 
CONCAT(round(DATEDIFF( CURDATE( ) , fechaCredito ) ,$cuotas) * cuotaCredito ) AS descripcion FROM dia d
 INNER JOIN credito ON d.numDia = credito.diaPago INNER JOIN cliente ON credito.idClienteCredito = cliente.idPersona
 INNER JOIN person ON cliente.idPersona = person.id INNER JOIN anulada on anulada.idCredito=credito.idCredito WHERE credito.diaPago BETWEEN '8' AND '8' AND
 credito.cantidadCredito >credito.montoPagado AND credito.termino_id='137' and credito.anulada='0' 
  and credito.anulada2='0' order by cuotasAtrasadas desc ";

//se quito temporalmnete and diferenciaPago>cuotaCredito
$ConsultaQuincenaMorosos="SELECT DISTINCT   (DATEDIFF( CURDATE( ) , fechaCredito )) as diasDesdeCredito, ((DATEDIFF( CURDATE( ) , fechaCredito ))/15) as cuotasQueHanPasado, ((DATEDIFF( CURDATE( ) , fechaCredito ) /15) * cuotaCredito ) as deberiaHaberPagado, credito.montoPagado, ((DATEDIFF( CURDATE( ) , fechaCredito ) /15) * cuotaCredito ) - montoPagado AS diferencia,diferenciaPago as diferenciaEnDb, 
nro_de_pagos as cuotasRealizadas, diferenciaPago/cuotaCredito as cuotasAtrasadas, diaPago, fechaCredito, credito.idCredito, idClienteCredito, credito.codigoProducto, 
descrProducto, credito.numFactura,person.name, person.phone1, person.phone2, cantidadCredito, credito.cuotaCredito FROM dia d
 INNER JOIN credito ON d.numDia = credito.diaPago INNER JOIN cliente ON credito.idClienteCredito = cliente.idPersona
 INNER JOIN person ON cliente.idPersona = person.id INNER JOIN anulada on anulada.idCredito=credito.idCredito WHERE credito.diaPago BETWEEN '8' AND '8' AND
 credito.cantidadCredito >credito.montoPagado AND credito.termino_id='137' and anulada.anulada='0' 
  and credito.anulada2='0'" .  $Condicionadecuotas . " order by cuotasAtrasadas desc";


$ConsultaQuincenaMorososSinCondCuotas="SELECT DISTINCT   (DATEDIFF( CURDATE( ) , fechaCredito )) as diasDesdeCredito, ((DATEDIFF( CURDATE( ) , fechaCredito ))/15) as cuotasQueHanPasado, ((DATEDIFF( CURDATE( ) , fechaCredito ) /15) * cuotaCredito ) as deberiaHaberPagado, credito.montoPagado, ((DATEDIFF( CURDATE( ) , fechaCredito ) /15) * cuotaCredito ) - montoPagado AS diferencia,diferenciaPago as diferenciaEnDb, 
nro_de_pagos as cuotasRealizadas, diferenciaPago/cuotaCredito as cuotasAtrasadas, diaPago, fechaCredito, credito.idCredito, idClienteCredito, credito.codigoProducto, 
descrProducto, credito.numFactura,person.name, person.phone1, person.phone2, cantidadCredito, credito.cuotaCredito FROM dia d
 INNER JOIN credito ON d.numDia = credito.diaPago INNER JOIN cliente ON credito.idClienteCredito = cliente.idPersona
 INNER JOIN person ON cliente.idPersona = person.id INNER JOIN anulada on anulada.idCredito=credito.idCredito WHERE credito.diaPago BETWEEN '8' AND '8' AND
 credito.cantidadCredito >credito.montoPagado AND credito.termino_id='137' and anulada.anulada='0' 
  and credito.anulada2='0' order by cuotasAtrasadas desc";

$actualizarDiferenciaQuincenalViejo= "update credito set diferenciaPago=(round(DATEDIFF( CURDATE( ) , fechaCredito ) ,15) * cuotaCredito ) - montoPagado
WHERE credito.diaPago BETWEEN '8' AND '8' AND
 credito.cantidadCredito >credito.montoPagado AND credito.termino_id='137' and credito.anulada='0' 
  and credito.anulada2='0'  ";


$actualizarDiferenciaQuincenal= "update credito set diferenciaPago=((DATEDIFF( CURDATE( ) , fechaCredito ) /15) * cuotaCredito ) - montoPagado
WHERE credito.diaPago BETWEEN '8' AND '8' AND
 credito.cantidadCredito >credito.montoPagado AND credito.termino_id='137'";

$ConsultaQuincenaMorososBackup="SELECT DISTINCT diaPago, idCredito, idClienteCredito, credito.codigoProducto, descrProducto, CONCAT(credito.fechaCredito,  ' #', credito.numFactura, ' dias ', DATEDIFF( CURDATE( ) , fechaCredito ),  ' cuotas: ', DATEDIFF( CURDATE( ) , fechaCredito )/$cuotas, person.name, cantidadCredito,  ' cuota.', credito.cuotaCredito,  ' deberia ', (DATEDIFF( CURDATE( ) , fechaCredito ) /$cuotas * cuotaCredito ),  'pagado :', credito.montoPagado,  ' Dif:', (
DATEDIFF( CURDATE( ) , fechaCredito ) /$cuotas * cuotaCredito ) - credito.montoPagado, 'Cuotas atrasadas :',   ((
DATEDIFF( CURDATE( ) , fechaCredito ) /$cuotas * cuotaCredito ) - credito.montoPagado)/credito.cuotaCredito
) AS descripcion, (
round(DATEDIFF( CURDATE( ) , fechaCredito ) ,$cuotas) * cuotaCredito
) - credito.montoPagado AS diferencia, ((
DATEDIFF( CURDATE( ) , fechaCredito ) /$cuotas * cuotaCredito ) - credito.montoPagado)/credito.cuotaCredito as cuotasAtrasadas
FROM dia d
INNER JOIN credito ON d.numDia = credito.diaPago
INNER JOIN cliente ON credito.idClienteCredito = cliente.idPersona
INNER JOIN person ON cliente.idPersona = person.id
WHERE credito.diaPago
BETWEEN  '8'
AND  '8'
AND credito.cantidadCredito >credito.montoPagado AND credito.termino_id='137' and credito.anulada='0' and credito.anulada2='0'
 and diferencia>credito.cuotaCredito


order by cuotasAtrasadas desc";



$dayNum = date("w");

$cuotas=30;
$fecha1=9;
$fecha2=9;

$ConsultaMensualMorososbackconparame="SELECT DISTINCT ( round(DATEDIFF( CURDATE( ) , fechaCredito ) ,$cuotas) * cuotaCredito ) - montoPagado AS diferencia, 
diferenciaPago/cuotaCredito as cuotasAtrasadas, diaPago, fechaCredito, idCredito, idClienteCredito, credito.codigoProducto, 
descrProducto, credito.numFactura,person.name, cantidadCredito, credito.cuotaCredito, credito.montoPagado, 
' Dif:', ( DATEDIFF( CURDATE( ) , fechaCredito ) /$cuotas * cuotaCredito ) - credito.montoPagado as diferencia, 
CONCAT(round(DATEDIFF( CURDATE( ) , fechaCredito ) ,$cuotas) * cuotaCredito ) AS descripcion FROM dia d
 INNER JOIN credito ON d.numDia = credito.diaPago INNER JOIN cliente ON credito.idClienteCredito = cliente.idPersona
 INNER JOIN person ON cliente.idPersona = person.id WHERE credito.diaPago BETWEEN '9' AND '9' AND
 credito.cantidadCredito >credito.montoPagado AND credito.termino_id='137' and credito.anulada='0' 
  and credito.anulada2='0' order by cuotasAtrasadas desc ";

// se quito temporalmente  and diferenciaPago>cuotaCredito
$ConsultaMensualMorosos="SELECT DISTINCT   (DATEDIFF( CURDATE( ) , fechaCredito )) as diasDesdeCredito, ((DATEDIFF( CURDATE( ) , fechaCredito ))/30) as cuotasQueHanPasado, ((DATEDIFF( CURDATE( ) , fechaCredito ) /30) * cuotaCredito ) as deberiaHaberPagado, credito.montoPagado, ((DATEDIFF( CURDATE( ) , fechaCredito ) /30) * cuotaCredito ) - montoPagado AS diferencia,diferenciaPago as diferenciaEnDb, 
nro_de_pagos as cuotasRealizadas, diferenciaPago/cuotaCredito as cuotasAtrasadas, diaPago, fechaCredito, credito.idCredito, idClienteCredito, credito.codigoProducto, 
descrProducto, credito.numFactura,person.name, person.phone1, person.phone2, cantidadCredito, credito.cuotaCredito FROM dia d
 INNER JOIN credito ON d.numDia = credito.diaPago INNER JOIN cliente ON credito.idClienteCredito = cliente.idPersona
 INNER JOIN person ON cliente.idPersona = person.id INNER JOIN anulada on anulada.idCredito=credito.idCredito   WHERE credito.diaPago BETWEEN '9' AND '9' AND
 credito.cantidadCredito >credito.montoPagado AND credito.termino_id='137' and anulada.anulada='0' 
  and credito.anulada2='0' " .  $Condicionadecuotas . " order by cuotasAtrasadas desc";



$actualizarDiferenciaMensual= "update credito set diferenciaPago=((DATEDIFF( CURDATE( ) , fechaCredito ) /30) * cuotaCredito ) - montoPagado
WHERE credito.diaPago BETWEEN '9' AND '9' AND
 credito.cantidadCredito >credito.montoPagado AND credito.termino_id='137'";



$ConsultaMensualMorosos2SinDetalles1952016="SELECT DISTINCT ( round(DATEDIFF( CURDATE( ) , fechaCredito ) ,30) * cuotaCredito ) - montoPagado AS diferencia, 
diferenciaPago/cuotaCredito as cuotasAtrasadas, diaPago, fechaCredito, idCredito, idClienteCredito, credito.codigoProducto, 
descrProducto, credito.numFactura,person.name, person.phone1, person.phone2, cantidadCredito, credito.cuotaCredito, credito.montoPagado, 
' Dif:', ( DATEDIFF( CURDATE( ) , fechaCredito ) /30 * cuotaCredito ) - credito.montoPagado as diferencia, 
CONCAT(round(DATEDIFF( CURDATE( ) , fechaCredito ) ,30) * cuotaCredito ) AS descripcion FROM dia d
 INNER JOIN credito ON d.numDia = credito.diaPago INNER JOIN cliente ON credito.idClienteCredito = cliente.idPersona
 INNER JOIN person ON cliente.idPersona = person.id WHERE credito.diaPago BETWEEN '9' AND '9' AND
 credito.cantidadCredito >credito.montoPagado AND credito.termino_id='137' and credito.anulada='0' 
  and credito.anulada2='0'  and diferencia>credito.cuotaCredito
order by cuotasAtrasadas desc ";





$actualizarDiferenciaMensualBackup2= "update credito set diferenciaPago=(round(DATEDIFF( CURDATE( ) , fechaCredito ) ,30) * cuotaCredito ) - montoPagado
WHERE credito.diaPago BETWEEN '9' AND '9' AND
 credito.cantidadCredito >credito.montoPagado AND credito.termino_id='137' and credito.anulada='0' 
  and credito.anulada2='0'  ";

$ConsultaMensualMorososBackup="SELECT DISTINCT diaPago, idCredito, idClienteCredito, credito.codigoProducto, descrProducto, CONCAT(credito.fechaCredito,  ' #', credito.numFactura, ' dias ', DATEDIFF( CURDATE( ) , fechaCredito ),  ' cuotas: ', DATEDIFF( CURDATE( ) , fechaCredito )/$cuotas, person.name, cantidadCredito,  ' cuota.', credito.cuotaCredito,  ' deberia ', (DATEDIFF( CURDATE( ) , fechaCredito ) /$cuotas * cuotaCredito ),  'pagado :', credito.montoPagado,  ' Dif:', (
DATEDIFF( CURDATE( ) , fechaCredito ) /$cuotas * cuotaCredito ) - credito.montoPagado, 'Cuotas atrasadas :',   ((
DATEDIFF( CURDATE( ) , fechaCredito ) /$cuotas * cuotaCredito ) - credito.montoPagado)/credito.cuotaCredito
) AS descripcion, (
round(DATEDIFF( CURDATE( ) , fechaCredito ) ,$cuotas) * cuotaCredito
) - credito.montoPagado AS diferencia, ((
DATEDIFF( CURDATE( ) , fechaCredito ) /$cuotas * cuotaCredito ) - credito.montoPagado)/credito.cuotaCredito as cuotasAtrasadas
FROM dia d
INNER JOIN credito ON d.numDia = credito.diaPago
INNER JOIN cliente ON credito.idClienteCredito = cliente.idPersona
INNER JOIN person ON cliente.idPersona = person.id
WHERE credito.diaPago
BETWEEN  '9'
AND  '9'
AND credito.cantidadCredito >credito.montoPagado AND credito.termino_id='137' and credito.anulada='0' and credito.anulada2='0'


order by cuotasAtrasadas desc";



$ConsultaCreditosAtrasados="SELECT distinct idCredito, idClienteCredito, credito.codigoProducto, sum(cliente.balance) as balance, descrProducto,  CONCAT( 'Persona:', credito.idCredito, ' ', person.name, cantidadCredito,  ' col.', credito.observacion,  ' cuota.', credito.cuotaCredito) AS descripcion
FROM dia d
INNER JOIN credito ON d.numDia = credito.diaPago
INNER JOIN cliente ON credito.idClienteCredito = cliente.idPersona
INNER JOIN person ON cliente.idPersona = person.id
WHERE credito.cantidadCredito >credito.montoPagado AND credito.termino_id='137' and credito.anulada='0' and credito.anulada2='0'
GROUP BY idClienteCredito
order by   person.name";


$ConsultaClientesAtrasadosSemana="SELECT DISTINCT person.name FROM dia d INNER JOIN credito ON d.numDia = credito.diaPago INNER JOIN cliente ON credito.idClienteCredito = cliente.idPersona INNER JOIN person ON cliente.idPersona = person.id WHERE credito.diaPago BETWEEN '1' AND '7' AND credito.cantidadCredito >credito.montoPagado AND credito.termino_id='137' and credito.anulada='0' and credito.anulada2='0'" ;



$ConsultaClientesAlDia="SELECT DISTINCT ( round(DATEDIFF( CURDATE( ) , fechaCredito ) ,7) * cuotaCredito ) - montoPagado AS diferencia, 
diferenciaPago/cuotaCredito as cuotasAtrasadas, diaPago, fechaCredito, idCredito, idClienteCredito, credito.codigoProducto, 
descrProducto, credito.numFactura,person.name, person.phone1, person.phone2, cantidadCredito, credito.cuotaCredito, credito.montoPagado, 
' Dif:', ( DATEDIFF( CURDATE( ) , fechaCredito ) /7 * cuotaCredito ) - credito.montoPagado as diferencia, 
CONCAT(round(DATEDIFF( CURDATE( ) , fechaCredito ) ,7) * cuotaCredito ) AS descripcion FROM dia d
 INNER JOIN credito ON d.numDia = credito.diaPago INNER JOIN cliente ON credito.idClienteCredito = cliente.idPersona
 INNER JOIN person ON cliente.idPersona = person.id WHERE 
 credito.montoPagado>= credito.cantidadCredito  AND credito.termino_id='137' and credito.anulada='0' 
  and credito.anulada2='0' order by cuotasAtrasadas desc " ;

//Usada en clientes limpios;
$ConsultaClientesAlDiaDepurada="SELECT SUM( credito.cantidadCredito ) - SUM( credito.montoPagado )  AS deudaTotal,  person.name, person.phone1, person.phone2
FROM dia d
INNER JOIN credito ON d.numDia = credito.diaPago
INNER JOIN cliente ON credito.idClienteCredito = cliente.idPersona
INNER JOIN person ON cliente.idPersona = person.id
WHERE credito.anulada =  '0'
AND credito.anulada2 =  '0' 
GROUP BY credito.idClienteCredito
ORDER BY name " ;


?>