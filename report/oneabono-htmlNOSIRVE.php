
<?php
session_start();


include "../core/autoload.php";
include "../core/modules/index/model/PersonData.php";
include "../core/modules/index/model/UserData.php";
include "../core/modules/index/model/SellData.php";
include "../core/modules/index/model/OperationData.php";
include "../core/modules/index/model/OperationTypeData.php";
include "../core/modules/index/model/ProductData.php";

require_once '../PhpWord/Autoloader.php';
use PhpOffice\PhpWord\Autoloader;
use PhpOffice\PhpWord\Settings;

Autoloader::register();

$abonos = AbonoData::getByCredito($_GET["id"]);
$sell = SellData::getById($abono->id2creditoAbono);

if($sell->person_id!=null){ $client = $sell->getPerson();}
$user = $sell->getUser();






}







?>


<!doctype html>
<html>


<body>













    <div class="invoice-box">
        <table cellpadding="0" cellspacing="0">


             <tr class="top">
                <td colspan="5">
                    <table>
                        <tr>
                            <td class="title">
                                <a href="//pdfcrowd.com/url_to_pdf/"><img src="logo-Fastness.png" style="width:100%; max-width:300px;"></a>
                            </td>

                             <td>

                           </td>

                           <td>

                     </td>

                      <td>

                     </td>

                            <td>
                               <font size="1">Abono a Factura No. </font> <font size="20"> <?php echo($sell->id2);  ?></font> <br>
                                <?php

date_default_timezone_set('America/Costa_Rica');
echo date("d/m/Y") ;

?><br>

                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            <tr class="information">
                <td colspan="5">
                    <table>
                        <tr>
                            <td>








          <font size="1">   Jorge Chacón Rojas<br>
                                Apartado Postal Alajuela San Ramón<br>
                                300 N de Iglesia El Tremedal<br>
                                Tel: (506)8324-9147 / (506)2445-6235 <br>
                                Ced Jurídica: 20344041621  </font>





                            </td>

                             <td>

                </td>

                 <td>

                </td>

                <td>

                </td>



                            <td>

                  <?php if($sell->person_id!=null){

                    echo($client->name." ".$client->lastname." - ".$client->nameBusiness);   }?>

                    <br>

                    <?php if($sell->person_id!=null){

                    echo($client->cedula);   }?>

                    <br>



    <font size="5">ORIGINAL </font>


                            </td>
                        </tr>
                    </table>
                </td>
            </tr>





            <tr class="heading">
                <td>
                    Atiende
                </td>

                <td>

                </td>

                <td>

                </td>

                <td>

                </td>

                <td>

                </td>


            </tr>

            <tr class="details">
                <td>
               <?php echo($user->name." ".$user->lastname);  ?>
                </td>

                <td>

                </td>
            </tr>


<br />
<br />
Detalle de abono





            <tr class="heading">

                <td>
                    Descripcion
                </td>
 
                <td>
                   Total
                </td>
            </tr>

            <tr class="Descripcion">
                <?php
               
                


            $abonos = AbonoData::getByCredito($_GET["id"]);

foreach($abonos as $abono){

$idAbono=$abono->idAbono;
$fechaAbono=$abono->fechaAbono;
$cantidadAbono=$abono->cantidadAbono;
$saldoCredito=$abono->saldoCredito;
$tipo_pago=$abono->tipo_pago;


 echo("<td> $idAbono </td>");
                     echo("<td>$fechaAbono</td>");

echo("<td>$cantidadAbono</td>");
echo("<td>$tipo_pago</td>");

                        }


            ?>
            </tr>


              <tr class="item">






            </tr>



  <?php


  ?>



            <tr class="total">
                <td></td><td></td><td></td><td></td>

                <td>
                   Saldo: <?php echo number_format($saldoCredito,0,'.',',');  ?> colones
                </td>
            </tr>

          
            <tr class="total">
                <td></td><td></td><td></td><td></td>

                <td>

               Total:  <?php echo number_format(($Total),0,'.',',');  ?> colones
                  
                </td>
            </tr>
        </table>
        <BR>
          <BR>
          <?php if($sell->iv==1){?>
          <font size="1px"> Para efectos del artículo 19 y 20 de la Ley de Notificaciones Judiciales se señala como domicilio contractual del deudor el indicado en el encabezado. Esta factura es un título ejecutivo contra el comprador por la suma en descubierto a tenor de lo dispuesto en el artículo 460 del código de comercio.
          <?php
            }?>
           <BR>
            <BR></font>

          ____________________________________________       &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;                 ______________________ &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<BR>
            RECIBIDO CONFORME  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; NOMBRE Y FIRMA        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;    &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;                    CEDULA <BR>
            <p style="text-align:right"><font size="20"><?php echo($sell->id2);  ?></a> </font> </p>
            <BR>
           
          
    </div>





</body>
</html>
