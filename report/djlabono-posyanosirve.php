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
include "../core/modules/index/model/ProductData.php";
include "../core/modules/index/model/CategoryData.php";
include "../core/modules/index/model/AbonoData.php";

require_once '../PhpWord/Autoloader.php';
use PhpOffice\PhpWord\Autoloader;
use PhpOffice\PhpWord\Settings;

Autoloader::register();

$word = new  PhpOffice\PhpWord\PhpWord();
$abonos = AbonoData::getByCredito($_GET["id"]);


$section1 = $word->AddSection();
$section1->addText("ABONOS",array("size"=>22,"bold"=>true,"align"=>"right"));


$styleTable = array('borderSize' => 6, 'borderColor' => '888888', 'cellMargin' => 40);
$styleFirstRow = array('borderBottomColor' => '0000FF', 'bgColor' => 'AAAAAA');

$table1 = $section1->addTable("table1");
$table1->addRow();
$table1->addCell()->addText("Id");
$table1->addCell()->addText("Fecha");
$table1->addCell()->addText("Cantidad");
$table1->addCell()->addText("Saldo");
$table1->addCell()->addText("Observacion");
$table1->addCell()->addText("Dia Pago");
$table1->addCell()->addText("Id credito");
$table1->addCell()->addText("Porc comision");
$table1->addCell()->addText("idCobrador");
foreach($abonos as $abono){
$table1->addRow();
$table1->addCell(500)->addText($abono->idAbono);
$table1->addCell(5000)->addText($abono->fechaAbono);
$table1->addCell(2000)->addText($abono->cantidadAbono);
$table1->addCell(2000)->addText($abono->saldoCredito);
$table1->addCell(2000)->addText($abono->observacion);
$table1->addCell(2000)->addText($abono->diaPago);
$table1->addCell(2000)->addText($abono->idCredito);
$table1->addCell(2000)->addText($abono->porcComisionCobrador);
$table1->addCell(2000)->addText($abono->idCobrador);


}





?>







    <div class="invoice" id="divToPrint">
        <div class="company-address">
            FASTNESS CLOTHING
			<br />
			<br />
			YOUNG SPIRIT, EXTREME LIFESTYLE
		<br />
			<br />
			Ced Juridica: 20344041621
			<br />
			<br />
			Tel Tienda 4030-5859//Servicio al cliente
			8736-0887//Cobros 8869-8748
<br />
ABONO A FACTURA
			<br />
			<br />
			<br />
			Factura: 1227        3/5/2016
<br />
			Credito
			Atiende: <?php echo($user->name." ".$user->lastname);  ?>
<br />

<br />
Cliente
<br />

<br />
Codigo
205950072
<br />
<br />
<br />
Pago es con efectivo
<br />
<br />
Monto: 25000
<br />
<br />
Obs.  
<br />
<br />
Detalla de cuentas pagadas
<br />
<br />
 <table border='1' cellspacing='0'>
          <tr>
                    
                    <th width=30>Fecha</th>
                    <th width=40>Cantidad</th>
                    <th width=40>Saldo</th>
        </tr>
 
            <?php
            $total = 0;
            $vat = 21;
             
$abonos = AbonoData::getById($_GET["id"]);        

foreach($abonos as $abono){




echo("<tr>");
                    echo("<td class='text-center'>$abono->fechaAbono</td>");
                    echo("<td class='text-right'>$abono->cantidadAbono</td>");
                    echo("<td class='text-right'>$abono->saldoCredito</td>");
                    echo("</tr>");

           
}
            ?>

      </table>
      
<br />




GRACIAS POR PREFERIRNOS

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
     
    
		
		<div id="divToPrint" style="display:none;">
  <div style="width:200px;height:300px;background-color:teal;">
           <?php echo $html; ?>      
  </div>
</div>
<div>
  <input type="button" value="print" onclick="PrintDiv();" />
</div>


		
		
		
    </body>
	
	
	<script type="text/javascript">     
    function PrintDiv() {    
       var divToPrint = document.getElementById('divToPrint');
       var popupWin = window.open('', '_blank', 'width=20,height=200');
       popupWin.document.open();
       popupWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
        popupWin.document.close();
            }
 </script>






 
</html>



