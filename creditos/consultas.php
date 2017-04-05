<?php

session_start();

$ConsultaAbono= "SELECT distinct diaPago, idCredito, idClienteCredito, credito.codigoProducto, descrProducto, CONCAT( ' numFactura:', credito.idCredito, ' ', person.name, cantidadCredito,  ' col.', credito.observacion) AS descripcion
FROM dia d
INNER JOIN credito ON d.numDia = credito.diaPago
INNER JOIN cliente ON credito.idClienteCredito = cliente.idCliente
INNER join person ON cliente.idPersona = person.id
WHERE credito.idTipoClientes=$idTipoClientes and credito.diaPago='$dayNum' AND credito.cantidadCredito >credito.montoPagado AND credito.termino_id='137' credito.anulada='0' and credito.anulada2='0'
order by   credito.horaDePagoNormal, credito.idCredito";

$consultaAbonosUnboxed= "SELECT SUM( a.cantidadAbono) as total FROM abono a WHERE a.boxed =0";

$totalAbonosDia= "select SUM(a.cantidadAbono) as total  from abono a inner join credito c on a.idCreditoAbono=c.idCredito WHERE a.fechaAbono >= CURRENT_DATE
AND a.fechaAbono < CURRENT_DATE +3
 ";

$detalleAbonosUnDia= " SELECT CONCAT( a.fechaAbono,  ' Cob: ', u.usuario,  ': ', a.cantidadAbono,  ':', persona.nombre  ) AS credit, a.idAbono
FROM abono a
INNER JOIN credito c ON a.idCreditoAbono = c.idCredito
INNER JOIN usuario u ON u.idUsuario = a.idCobrador
INNER JOIN cliente cl ON c.idClienteCredito = cl.idPersona
INNER JOIN persona ON cl.idPersona = persona.idPersona
WHERE a.fechaAbono >= CURRENT_DATE-1
AND a.fechaAbono < CURRENT_DATE +2 and credito.idSistema<2";

$ConsultaCompras="select * from sell where operation_type_id=1 order by created_at desc";

//La siguiente se usa para el cierre, por los que es de contado nada más

$ConsultaAbonosCierre="SELECT CONCAT( a.fechaAbono,  ' Cob: ', u.usuario,  ': ', a.cantidadAbono,  ':', person.name  ) AS credit, a.idAbono
FROM abono a
INNER JOIN credito c ON a.idCreditoAbono = c.idCredito
INNER JOIN usuario u ON u.idUsuario = a.idCobrador
INNER JOIN cliente cl ON c.idClienteCredito = cl.idPersona
INNER JOIN person ON cl.idPersona = person.id
WHERE a.fechaAbono >= CURRENT_DATE-1
AND a.fechaAbono < CURRENT_DATE +2  and tipo_pago=0";

$ConsultaAbonos="SELECT distinct diaPago, idCredito, idClienteCredito, credito.codigoProducto, descrProducto, CONCAT( ' numFactura:', credito.idCredito, ' ', person.name, cantidadCredito,  ' col.', credito.observacion) AS descripcion
FROM dia d
INNER JOIN credito ON d.numDia = credito.diaPago
INNER JOIN cliente ON credito.idClienteCredito = cliente.idCliente
INNER join person ON cliente.idPersona = person.id
WHERE credito.idTipoClientes=$idTipoClientes and credito.diaPago='$dayNum' AND credito.cantidadCredito >credito.montoPagado AND credito.termino_id='137' credito.anulada='0' and credito.anulada2='0'
order by   credito.horaDePagoNormal, credito.idCredito";

$ConsultaClientes="SELECT cliente.idCliente, concat('#',person.cedula,': ', person.name,' ',person.lastname, '#',person.cedula) as nombreCompleto  from cliente inner join person on cliente.idPersona= person.id where cliente.tipoCliente='2' order by person.name";

$ConsultaTodosLosClientes="SELECT cliente.idCliente, cliente.idPersona, concat(rtrim(person.name),' ',rtrim(person.lastname), '#',person.cedula) as nombreCompleto  from cliente inner join person on cliente.idPersona= person.id  order by person.name";

$ConsultaCredito="SELECT cliente.idCliente, concat('#',person.cedula,': ', person.name,' ',person.lastname) as nombreCompleto  from cliente inner join person on cliente.idPersona= person.id where cliente.tipoCliente='2' order by person.name";

$ConsultaCreditosPorNombreConAnulada="SELECT distinct diaPago, credito.idCredito, idClienteCredito, CONCAT(person.name, cantidadCredito,  ' dia:', d.descrDia,'cuota: ', cuotaCredito,  '# ', credito.numFactura ) AS descripcion
FROM dia d
INNER JOIN credito ON d.numDia = credito.diaPago
INNER JOIN cliente ON credito.idClienteCredito = cliente.idPersona
INNER join person ON cliente.idPersona = person.id INNER JOIN anulada on credito.idCredito=anulada.idCredito
WHERE  credito.cantidadCredito >credito.montoPagado AND credito.termino_id='137' and anulada.anulada='0' and credito.anulada2='0'

order by person.name";

$ConsultaCreditosPorNombre="SELECT distinct diaPago, credito.idCredito, idClienteCredito, CONCAT(person.name, cantidadCredito,  ' dia:', d.descrDia,'cuota: ', cuotaCredito,  '# ', credito.numFactura ) AS descripcion
FROM dia d
INNER JOIN credito ON d.numDia = credito.diaPago
INNER JOIN cliente ON credito.idClienteCredito = cliente.idPersona
INNER join person ON cliente.idPersona = person.id
WHERE  credito.cantidadCredito >credito.montoPagado AND credito.termino_id='137' and credito.anulada='0' and credito.anulada2='0'

order by person.name";


$ConsultaCreditosPorNombreYAreaGabrielInnerjoinanulada="SELECT distinct diaPago, credito.idCredito, idClienteCredito, credito.codigoProducto, descrProducto, CONCAT(person.name, ' - ', person.nameBusiness, ' ', cantidadCredito,  ' dia:', d.descrDia,'cuota: ', cuotaCredito,  '# ', credito.numFactura) AS descripcion
FROM dia d
INNER JOIN credito ON d.numDia = credito.diaPago
INNER JOIN cliente ON credito.idClienteCredito = cliente.idPersona
INNER join person ON cliente.idPersona = person.id  inner join anulada on credito.idCredito=anulada.idCredito
WHERE  credito.cantidadCredito >credito.montoPagado AND credito.termino_id>=137 and anulada.anulada='0' and credito.anulada2='0' and cliente.tipoCliente=2
order by person.name";


$ConsultaCreditosPorNombreYAreaGabrielMarcasGENUINAS="SELECT distinct diaPago, credito.idCredito, idClienteCredito, credito.codigoProducto, descrProducto, CONCAT(person.name, ' - ', person.nameBusiness, ' ', cantidadCredito,  ' dia:', d.descrDia,'cuota: ', cuotaCredito,  '# ', credito.numFactura) AS descripcion
FROM dia d
INNER JOIN credito ON d.numDia = credito.diaPago
INNER JOIN cliente ON credito.idClienteCredito = cliente.idPersona
INNER join person ON cliente.idPersona = person.id
WHERE  credito.cantidadCredito >credito.montoPagado AND credito.termino_id='137' and credito.anulada='0' and credito.anulada2='0' and cliente.tipoCliente=2
order by name";

$ConsultaCreditosPorNombreYAreaGabriel="SELECT distinct diaPago, credito.idCredito, idClienteCredito, credito.codigoProducto, descrProducto, CONCAT(person.name, ' - ', person.nameBusiness, ' ', cantidadCredito,  ' dia:', d.descrDia,'cuota: ', cuotaCredito,  '# ', credito.numFactura) AS descripcion
FROM dia d
INNER JOIN credito ON d.numDia = credito.diaPago
INNER JOIN cliente ON credito.idClienteCredito = cliente.idPersona
INNER join person ON cliente.idPersona = person.id
WHERE  credito.cantidadCredito >credito.montoPagado AND credito.termino_id>=137 and credito.anulada='0' and credito.anulada2='0' and credito.esCompra='0'
order by name";


$ConsultaCreditosPorNombreYAreaGabrielProveedores="SELECT distinct diaPago, credito.idCredito, idClienteCredito, credito.codigoProducto, descrProducto, CONCAT(person.name, cantidadCredito,  ' dia:', d.descrDia,'cuota: ', cuotaCredito,  '# ', credito.numFactura) AS descripcion
FROM dia d
INNER JOIN credito ON d.numDia = credito.diaPago
INNER JOIN cliente ON credito.idClienteCredito = cliente.idPersona
INNER join person ON cliente.idPersona = person.id
WHERE  credito.cantidadCredito >credito.montoPagado AND credito.termino_id>=137 and credito.anulada='0' and credito.anulada2='0' and credito.esCompra='1'
order by name";

$ConsultaCreditosPorNombreYAreaTiendaINNERJOINANULADA="SELECT distinct diaPago, credito.idCredito, idClienteCredito, credito.codigoProducto, descrProducto, CONCAT(person.name, cantidadCredito,  ' dia:', d.descrDia,'cuota: ', cuotaCredito,  '# ', credito.numFactura) AS descripcion
FROM dia d
INNER JOIN credito ON d.numDia = credito.diaPago
INNER JOIN cliente ON credito.idClienteCredito = cliente.idPersona
INNER join person ON cliente.idPersona = person.id  inner join anulada on credito.idCredito=anulada.idCredito
WHERE  credito.cantidadCredito >credito.montoPagado AND credito.termino_id='137' and anulada.anulada='0' and credito.anulada2='0' and cliente.tipoCliente<2
order by person.name";

$ConsultaCreditosPorNombreYAreaTienda="SELECT distinct diaPago, credito.idCredito, idClienteCredito, credito.codigoProducto, descrProducto, CONCAT(person.name, cantidadCredito,  ' dia:', d.descrDia,'cuota: ', cuotaCredito,  '# ', credito.numFactura) AS descripcion
FROM dia d
INNER JOIN credito ON d.numDia = credito.diaPago
INNER JOIN cliente ON credito.idClienteCredito = cliente.idPersona
INNER join person ON cliente.idPersona = person.id
WHERE  credito.cantidadCredito >credito.montoPagado AND credito.termino_id='137' and credito.anulada='0' and credito.anulada2='0' and cliente.tipoCliente<2
order by person.name";


$ConsultaClientesCreditoPorTipo="SELECT cliente.idCliente, concat('#',person.cedula,': ', person.name,' ',person.lastname) as nombreCompleto  from cliente inner join person on cliente.idPersona= person.id where cliente.tipoCliente='2' order by person.name";

$ConsultaClientes="SELECT cliente.idCliente, cliente.idPersona, concat('#',person.cedula,': ', person.name,' ',person.lastname) as nombreCompleto  from cliente inner join person on cliente.idPersona= person.id order by person.name";


$ConsultaClientesParaCredito="SELECT cliente.idCliente, cliente.idPersona, concat('#',person.cedula,': ', person.name,' ',person.lastname) as nombreCompleto  from cliente inner join person on cliente.idPersona= person.id order by person.name";


$ConsultaCreditos="SELECT distinct diaPago, idCredito, idClienteCredito, credito.codigoProducto, descrProducto, CONCAT( ' numFactura:', credito.idCredito, ' ', person.name, cantidadCredito,  ' col.', credito.observacion) AS descripcion
FROM dia d
INNER JOIN credito ON d.numDia = credito.diaPago
INNER JOIN cliente ON credito.idClienteCredito = cliente.idCliente
INNER join person ON cliente.idPersona = person.id
WHERE credito.idTipoClientes=$idTipoClientes and credito.diaPago='$dayNum' AND credito.cantidadCredito >credito.montoPagado AND credito.termino_id='137' and credito.anulada='0' and credito.anulada2='0'
order by   credito.horaDePagoNormal, credito.idCredito";


$update="INSERT INTO anulada(idCredito, anulada)
SELECT id_factura, anulada
FROM factura";

$updateSaldos="UPDATE CREDITOS SET SALDOACTUAL=cantidadCredito-montoPagado";



?>
