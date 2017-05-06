
<?php

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


$sell = SellData::getById($_GET["id"]);
$operations = OperationData::getAllProductsBySellId($_GET["id"]);
if($sell->person_id!=null){ $client = $sell->getPerson();}
$user = $sell->getUser();

$a;
$b;
$c;
$d;
    switch ($sell->termino_id) {
        case 135:
            $a = "Contado (Factura cancelada)";
            break;
        case 137:
            $a = "Credito 30 dias";
            break;
        case 139:
            $a = "Apartado";
            break;

            case 141:
            $a = "Credito 45 dias";
            break;

             case 143:
            $a = "Credito 60 dias";
            break;




}


switch ($sell->tipo_pago) {
        case 0:
            $b = "Efectivo";
            break;
        case 1:
            $b = "Tarjeta";
            break;
        case 2:
            $b = "Deposito bancario";
            break;
}



$sell->anulada  == 0 ? $c= "En Firme" : $c= "Anulada";

$sell->iv  == 0 ? $d= "Con IV" : $d= "SIN IV";


?>


<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>FASTNESS CLOTHING</title>

    <style>
    .invoice-box{
        max-width:800px;
        margin:auto;
        padding:30px;
        border:1px solid #eee;
        box-shadow:0 0 10px rgba(0, 0, 0, .15);
        font-size:16px;
        line-height:24px;
        font-family:'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        color:#555;
    }

    .invoice-box table{
        width:100%;
        line-height:inherit;
        text-align:left;
    }

    .invoice-box table td{
        padding:5px;
        vertical-align:top;
    }

    .invoice-box table tr td:nth-child(2){
        text-align:right;
    }

    .invoice-box table tr.top table td{
        padding-bottom:20px;
    }

    .invoice-box table tr.top table td.title{
        font-size:45px;
        line-height:45px;
        color:#333;
    }

    .invoice-box table tr.information table td{
        padding-bottom:40px;
    }

    .invoice-box table tr.heading td{
        background:#eee;
        border-bottom:1px solid #ddd;
        font-weight:bold;
    }

    .invoice-box table tr.details td{
        padding-bottom:20px;
    }

    .invoice-box table tr.item td{
        border-bottom:1px solid #eee;
    }

    .invoice-box table tr.item.last td{
        border-bottom:none;
    }

    .invoice-box table tr.total td:nth-child(2){
        border-top:2px solid #eee;
        font-weight:bold;
    }

    @media only screen and (max-width: 600px) {
        .invoice-box table tr.top table td{
            width:100%;
            display:block;
            text-align:center;
        }

        .invoice-box table tr.information table td{
            width:100%;
            display:block;
            text-align:center;
        }
    }
    </style>
</head>

<body>













    <div class="invoice-box">
        <table cellpadding="0" cellspacing="0">


             <tr class="top">
                <td colspan="2">
                    <table>
                        <tr>
                            <td class="title">
                                <img src="logo-Fastness.png" style="width:100%; max-width:300px;">
                            </td>

                            <td>
                               <font size="1"> Factura No. </font> <font size="20"> <?php echo($sell->id2);  ?></font> <br>
                                29 de diciembre del 2016<br>

                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            <tr class="information">
                <td colspan="2">
                    <table>
                        <tr>
                            <td>







<?php if($sell->iv==1){?>
             Jorge Chacon Rojas<br>
                                Apartado Postal Alajuela San Ramon<br>
                                300 N de Iglesia El Tremedal<br>
                                Tel: (506)8324-9147 / (506)2445-6235 <br>
                                Ced Juridica: 20344041621<?php
            }?>





                            </td>

                            <td>

                  <?php if($sell->person_id!=null){

                    echo($client->name." ".$client->lastname);   }?>

                    <br><font size="1">CEDULA</font>

                    <?php if($sell->person_id!=null){

                    echo($client->cedula);   }?>

                    <br>

<font size="1">FORMA DE PAGO</font>

                    <?php



        echo($a);
    ?><br>


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
            </tr>

            <tr class="details">
                <td>
               <?php echo($user->name." ".$user->lastname);  ?>
                </td>

                <td>

                </td>
            </tr>








            <tr class="heading">
                <td>
                    Descripcion
                </td>

                <td>
                    Precio
                </td>
            </tr>

            <tr class="Descripcion">
                <?php
                 $total = 0;
                 $vat = 21;


                foreach($operations as $operation){
                    $product = $operation->getProduct();


echo("<tr>");

                        $subTotal=$sell->total;
                        $descuento=$sell->discount;
                        $Total=$sell->total - $sell->discount;

                    //echo("<td>$product->id</td>");
                    //  echo("<td>$operation->q</td>");


                      echo("<td>$product->name</td>");

                     //echo("<td>$product->price_out</td>");
                        $precioLinea=$operation->q*$product->price_out;
                    echo("<td>$precioLinea</td>");



echo("</tr>");

                        }


            ?>
            </tr>


              <tr class="item">






            </tr>



  <?php
  $sell->iv  == 0 ? $impuestoVentas= 0 : $d= $impuestoVentas= ($Total*0.13);

  ?>



            <tr class="total">
                <td></td>

                <td>
                   Descuento: <?php echo($descuento);  ?> colones
                </td>
            </tr>

            <?php if($sell->iv==1){?>
            <tr class="total">
                <td></td>

                <td>
                   IV: <?php echo($impuestoVentas);  ?>
                </td>
            </tr><?php
            }?>
            <tr class="total">
                <td></td>

                <td>
                   Total: <?php echo($Total+$impuestoVentas);  ?> colones
                </td>
            </tr>
        </table>
        <BR>
          <BR>
          <font size="1px"> Para efectos del articulo 19 y 20 de la Ley de Notificaciones Judiciales se señala como domicilio contractual del deudor el indicado en el encabezado. Esta factura es un titulo ejecutivo contra el comprador por la suma en descubierto a tenor de lo dispuesto en el articulo 460 del codigo de comercio 
           <BR>
            <BR></font>

          _____________________________________       &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;                 ______________________ &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<BR>
            RECIBIDO CONFORME  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; NOMBRE Y FIRMA        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;    &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;                    CEDULA <BR>
            <p style="text-align:right"><font size="20"> <a href="//pdfcrowd.com/url_to_pdf/"><?php echo($sell->id2);  ?></a> </font> </p>
            <BR>
          <font size="1"><Center>  Autorizado mediante resolucion 1197 del 3/9/97 D.G.T.D </CENTER></font>
    </div>





</body>
</html>
