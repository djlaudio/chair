<?php

function montoAtrasadoDeCredito($totalCredito, $atraso, $montoPagado){

if (($atraso+$montoPagado)>$totalCredito)
{
return ($totalCredito-$montoPagado);
}
else
{
return $atraso;
}


}



function totalMontoAtrasadoSemanal()
{


include('connect_db.php');
include('consultasMorosos.php');
include('functionMontoAtrasado.php');

$dayNum = date("w");

$dayNum = date("w");

$cuotas=7;


                $query = mysqli_query($link,"$actualizarDiferenciaSemanal");
 $query = mysqli_query($link,"$actualizarDiferenciaQuincenal");
 $query = mysqli_query($link,"$actualizarDiferenciaMensual");

                $query = mysqli_query($link,"$ConsultaSemanaMorosos");
                while($row = mysqli_fetch_assoc($query))

                {


$totalDiferencia2+= montoAtrasadoDeCredito(intval($row['cantidadCredito']), intval($row['diferencia']), intval($row['montoPagado'])) ; 


}

return $totalDiferencia2;


}





function totalMontoAtrasadoQuincenal()
{


include('connect_db.php');
include('consultasMorosos.php');
include('functionMontoAtrasado.php');

$dayNum = date("w");

$dayNum = date("w");

$cuotas=7;


                $query = mysqli_query($link,"$actualizarDiferenciaSemanal");
 $query = mysqli_query($link,"$actualizarDiferenciaQuincenal");
 $query = mysqli_query($link,"$actualizarDiferenciaMensual");

                $query = mysqli_query($link,"$ConsultaQuincenaMorosos");
                while($row = mysqli_fetch_assoc($query))

                {


$totalDiferencia3+= montoAtrasadoDeCredito(intval($row['cantidadCredito']), intval($row['diferencia']), intval($row['montoPagado'])) ; 


}

return $totalDiferencia3;


}






function totalMontoAtrasadoMensual()
{


include('connect_db.php');
include('consultasMorosos.php');
include('functionMontoAtrasado.php');

$totalDiferencia4=0;
$dayNum = date("w");

$dayNum = date("w");

$cuotas=7;


                $query = mysqli_query($link,"$actualizarDiferenciaSemanal");
 $query = mysqli_query($link,"$actualizarDiferenciaQuincenal");
 $query = mysqli_query($link,"$actualizarDiferenciaMensual");

                $query = mysqli_query($link,"$ConsultaMensualMorosos");
                while($row = mysqli_fetch_assoc($query))

                {


$totalDiferencia4+= montoAtrasadoDeCredito(intval($row['cantidadCredito']), intval($row['diferencia']), intval($row['montoPagado'])) ; 


}




return $totalDiferencia4;


}




function totalGastosUnboxed()
{
include('connect_db.php');


  $query = mysqli_query($link,"select sum(total) as total from sell where operation_type_id=1");
                while($row = mysqli_fetch_assoc($query))

                {

$total= $row['total']; 

}



return $total;


}


function totalVentasUnboxed()
{
include('connect_db.php');


  $query = mysqli_query($link,"SELECT SUM( a.cantidadAbono) as total FROM abono a WHERE a.boxed =0");
                while($row = mysqli_fetch_assoc($query))

                {

$total= $row['total']; 

}



return $total;


}


?>