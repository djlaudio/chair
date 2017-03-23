<?php


function totalGastosUnboxed()
{
include('connect_db.php');
include('consultas.php');

  $query = mysqli_query($link,"select * from sell where operation_type_id=1 order by created_at desc");
                while($row = mysqli_fetch_assoc($query))

                {

$total= $row['total']; 

}



return $total;


}

function totalDePagosUnboxed()
{


include('connect_db.php');
include('consultas.php');


                $query = mysqli_query($link,$consultaAbonosUnboxed);
                while($row = mysqli_fetch_assoc($query))

                {


$total= $row['total']; 

}



return $total;

}

function totalAbonosDia2()
{


include('connect_db.php');
include('consultas.php');

                $query = mysqli_query($link,$totalAbonosDia);
                
                while($row = mysqli_fetch_assoc($query)){
                $total= $row['total']; 
                 } 

return $total;
}

?>