<html>
 
    <head>
    <title>Simple invoice in PHP</title>
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


$sell->tipo_pago == 0 ? $b= "Efectivo" : $b= "Tarjeta" ;
$sell->anulada  == 0 ? $c= "En Firme" : $c= "Anulada";


?>







    <div class="invoice" id="divToPrint" style="width:20pt;height:200pt;">
  
    

        <div class="company-address">
           <CENTER> FASTNESS CLOTHING</CENTER>
			
			<br />
			<CENTER>OUTLET DE CALZADO </CENTER>
		<br />
			
			<CENTER>Ced Juridica: 20344041621</CENTER>
			<br />
			
			Tel Tienda 4030-5859//Servicio al cliente
			8736-0887//Cobros 8869-8748
<br />

			
			<br />
<?php
date_default_timezone_set('America/Costa Rica');
 ?>

			Factura <?php echo($_GET["id"]);  ?> 
<br />   
   <?php echo(date("d-m-Y"));  ?>       
<br />

			<?php echo($a);  ?>


<br />
Atiende: 
<?php echo($_SESSION["usuario"]);  ?>
<br />
<br />
 <?php echo($user->name." ".$user->lastname);  ?>

<!-- //Codigo-->
<!--//205950072-->
<br />

<br />
Obs.  
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

$total+=$operation->q*$product->price_out;


                    echo("</tr>");

           
}




            ?>

      </table>
      
<br />

<br />


Total:    <?php echo($total);  ?> colones

<br />
<br />



GRACIAS POR PREFERIRNOS
<br />
GARANTIA POR DEFECTOS DE FABRICA: 45 DIAS
<br />
<br />
ENCUENTRANOS EN FACEBOOK COMO FASTNESS CLOTHING
<br />
<br />
<br />
FIRMA DE CLIENTE:__________
<br />
CEDULA:_____________________









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








