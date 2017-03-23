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
