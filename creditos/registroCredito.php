<?php 

session_start();




$idCliente=$_POST['selClienteCombo'];
$diaPago=$_POST['selDiaCredito'];
$credito=$_POST['credito'];
$observacion =$_POST['observacion'];
$fechaCredito=gmdate("Y-m-d\TH:i:s\Z");
$cuotaCredito =$_POST['cuotaCredito'];
$tele1 =$_POST['tele1'];
$termino_id =$_POST['selTipoPagoCredito'];
$idUsuario=$_SESSION['idUsuario'];

$_SESSION['credito']=$credito;



require("connect_db.php");
$max = "SELECT MAX(numFactura) as max_id FROM credito";     
$max1 =  mysqli_query($link, $max);   
$row = mysqli_fetch_assoc($max1); 
$max_id=$row['max_id']; 
echo "Max id es";       
echo $max_id;  



$max = "SELECT pe.phone1, pe.phone2, pe.name, pe.address1
              from person pe 
              
              WHERE pe.idCliente = $idCliente
              ORDER BY pe.nombre";     
$max1 =  mysqli_query($link, $max);   
$row = mysqli_fetch_assoc($max1); 
$telefono1=$row['phone1'];      
echo $phone1;  
$_SESSION['telefono1']=$phone1;

  require("connect_db.php");
  $contra1=md5($contra1);


  $sql="INSERT INTO credito(idVendedor, idClienteCredito, cantidadCredito, diaPago, observacion, fechaCredito, saldoActual, descrProducto, cuotaCredito, termino_id, numFactura, montoPagado) values ('$idUsuario','$idCliente','$credito','$diaPago', '$observacion','$fechaCredito','$credito','$descrProductoCre',$cuotaCredito, $termino_id, ($max_id+1), '0')";



if (!mysqli_query($link,$sql)) {
     die('Error: ' . mysqli_error($link). $sql);
die('Error: ' . $sql);
   mysqli_rollback($link);
   echo "<p>Operacion incorrecta</p>";
   }
else
{
    $id=mysqli_insert_id($link);
    echo "<p>Datos de crédito insertados correctamente</p>. ";
    


if ($_SESSION['idTipoClientes']==1)
{

echo ("<script>alert('El tipo de cliente es 1')</script>");


require_once 'sendSmsCredito.php';
echo "<script>window.history.back()</script>";


}
else if ($_SESSION['idTipoClientes']==2)
{
$yourURL="http://www.marcasgenuinas.com/inventario/report/djlonesell-pos.php?id=$id";

echo "<script>window.history.back()</script>";
//echo ("<script>location.href='$yourURL'</script>");


//print "<script>window.location='index.php?view=onesell&id=1';</script>";




}
    // do stuffs
  }
 
   
  mysqli_commit($link);
  mysqli_close($link);


?>