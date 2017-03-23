<html>

    <head>
    <title>FASTNESS</title>
        <style type="text/css">
        body {
            font-family: Verdana;;
        }

        div.invoice {
        border:1px solid #ccc;
        padding:10px;
        height:740pt;
        width:570pt;
        }

        div.company-address {
            border:1px solid #ccc;
            float:left;
            width:200pt;
        }

        div.invoice-details {
            border:1px solid #ccc;
            float:right;
            width:200pt;
        }

        div.customer-address {
            border:1px solid #ccc;
            float:right;
            margin-bottom:50px;
            margin-top:100px;
            width:200pt;
        }

        div.clear-fix {
            clear:both;
            float:none;
        }

        table {
            width:100%;
        }

        th {
            text-align: left;
        }

        td {
        }

        .text-left {
            text-align:left;
        }

        .text-center {
            text-align:center;
        }

        .text-right {
            text-align:right;
        }

        </style>
    </head>

    <body>


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
	        $a = "Contado";
	        break;
	    case 137:
	        $a = "Credito";
	        break;
	    case 139:
	        $a = "Apartado";
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
    <title>A simple, clean, and responsive HTML invoice template</title>

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




      <div class="invoice" id="divToPrint" style="width:20pt;height:200pt;">



          <div class="company-address">
             <CENTER> FASTNESS</CENTER>

  			<br />
  			<CENTER>YOUNG SPIRIT, EXTREME LIFESTYLE </CENTER>
  		<br />

  			<CENTER>CED FASTNESS</CENTER>
  			<br />


  			<CENTER>24456235</CENTER>
  <br />


  			<br />
  <?php
  //_default_timezone_set('America/Costa Rica');
   ?>

  			Factura <?php echo($_GET["id"]);  ?>
  <br />

   22/12/2016
  <br />

  			<?php echo($a);  ?>

  <br />
  <br />
  Atiende:

   <?php echo($user->name." ".$user->lastname);  ?>

  <!-- //Codigo-->
  <!--//205950072-->
  <br />



  Cliente:


  <?php if($sell->person_id!=null){

    echo($client->name." ".$client->lastname);   }?>

  <!-- //Codigo-->
  <!--//205950072-->
  <br />


  Cedula:


  <?php if($sell->person_id!=null){

    echo($client->cedula);   }?>

  <!-- //Codigo-->
  <!--//205950072-->
  <br />


  <br />
  Detalle de factura
  <br />

   <table border='1' cellspacing='0'>
            <tr>

                      <th width=30>Cod</th>
                      <th width=40>Cant</th>
                      <th width=40>Prod</th>
   <th width=40>P.U.</th>
  <th width=40>Tot</th>
          </tr>

              <?php
              $total = 0;
              $vat = 21;


  foreach($operations as $operation){
  $product = $operation->getProduct();




  echo("<tr>");
                      echo("<td class='text-center'>$product->id</td>");
                      echo("<td class='text-right'>$operation->q</td>");
                      echo("<td class='text-right'>$product->name</td>");

   echo("<td class='text-right'>$product->price_out</td>");
  $precioLinea=$operation->q*$product->price_out;
  echo("<td class='text-right'>$precioLinea</td>");

  //$total+=$operation->q*$product->price_out;
  $subTotal=$sell->total;
  $descuento=$sell->discount;
  $Total=$sell->total - $sell->discount;



                      echo("</tr>");


  }




              ?>

        </table>

  <br />

  <?php
  $sell->iv  == 0 ? $impuestoVentas= 0 : $d= $impuestoVentas= ($Total*0.13);

  ?>



  Tipo de pago:    <?php echo($b);  ?> <br />

  SubTotal:    <?php echo($subTotal);  ?> colones <br />
  Descuento:    <?php echo($descuento);  ?> colones
  <br />
  iv:    <?php echo($impuestoVentas);  ?>
  <br />
  Total:    <?php echo($Total+$impuestoVentas);  ?> colones



  <br />
  <br />



  GRACIAS POR PREFERIRNOS
  <br />

  <br />
  <br />
  www.fastness.us
  <br />
  <br />

  FIRMA DE CLIENTE:__________
  <br />
  CEDULA:_____________________

  <br />
  <br />
  <br />

  Autorizado mediante resolucion 1197









          </div>



  		<div>
    <input type="button" value="print" onclick="PrintDiv();" />
  </div>


    <div class="invoice-box">
        <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="2">
                    <table>
                        <tr>
                            <td class="title">
                                <img src="Untitled.png" style="width:100%; max-width:300px;">
                            </td>

                            <td>
                                Factura #: <?php echo($_GET["id"]);  ?><br>
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

                                Jorge Chacon Rojas, Inc.<br>
                                300 N de Iglesia El Tremedal<br>
                                Tel: (506)8324-9197<br>
                                Ced Juridica: 20344041621
                            </td>

                            <td>
                                DJL Productions.<br>
                                Luis Matamoros<br>
                                lmatamoros@djlproductions.com
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            <tr class="heading">
                <td>
                    Metodo de pago
                </td>

                <td>

                </td>
            </tr>

            <tr class="details">
                <td>
               <?php echo($b);  ?> <br />
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
                <td>
                    Camisa playera azul
                </td>

                <td>
                    $300.00
                </td>
            </tr>

            <tr class="item">
                <td>
                    Pantalon mezclilla 20117
                </td>

                <td>
                    $75.00
                </td>
            </tr>

            <tr class="item last">
                <td>
                    Medias fastness
                </td>

                <td>
                    $10.00
                </td>
            </tr>
            <tr class="total">
                <td></td>

                <td>
                   Descuento:  <?php echo($descuento);  ?> colones
                </td>
            </tr>
            <tr class="total">
                <td></td>

                <td>
                   IV:  <?php echo($impuestoVentas);  ?>
                </td>
            </tr>
            <tr class="total">
                <td></td>

                <td>
                   Total:  <?php echo($Total+$impuestoVentas);  ?> colones
                </td>
            </tr>
        </table>
        <BR>
          <BR>
          <Center>  Autorizado mediante resolucion 1197 del 3/9/97 D.G.T.D </CENTER>
    </div>


</body>
</html>




SubTotal:    <?php echo($subTotal);  ?> colones <br />
Descuento:
<br />
iv:
<br />
Total:








    </body>









	<script type="text/javascript">
    function PrintDiv() {
       var divToPrint = document.getElementById('divToPrint');
       var popupWin = window.open('', '_blank', 'width=200,height=2000');
       popupWin.document.open();
       popupWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
        popupWin.document.close();
            }
 </script>



</html>
