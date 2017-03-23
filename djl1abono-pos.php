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
session_start();


include "../core/autoload.php";
include "../core/modules/index/model/ProductData.php";
include "../core/modules/index/model/CategoryData.php";
include "../core/modules/index/model/AbonoData.php";
include "../core/modules/index/model/SellData.php";



require_once '../PhpWord/Autoloader.php';
use PhpOffice\PhpWord\Autoloader;
use PhpOffice\PhpWord\Settings;

Autoloader::register();


$word = new PhpOffice\PhpWord\PhpWord();
$abonos = AbonoData::getByCredito($_GET["id"]);
$sell = SellData::getById($abono->id2creditoAbono);
if($sell->person_id!=null){ $client = $sell->getPerson();}


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
$table1->addCell(2000)->addText($_GET["id"]);
$table1->addCell(2000)->addText($abono->porcComisionCobrador);
$table1->addCell(2000)->addText($abono->idCobrador);


}





?>







<div class="invoice" id="divToPrint">
<div class="company-address">
<CENTER>
   FASTNESS CLOTHING
			<br />
			<br />
			YOUNG SPIRIT, EXTREME LIFESTYLE
		<br />
			<br />
			
			<br />
			<br />
			Tel: (506)8324-9197 / (506)2445-6235 
		</CENTER>	
<br />
<br />

Abono a credito <?php echo($sell->id2);  ?>
<br />
<?php

date_default_timezone_set('America/Costa_Rica');
echo date("d/m/Y") ;

?><br>
<br />

Atiende:
<?php echo($_SESSION["usuario"]);  ?>
<br />
<br />
Cliente:
<?php echo($_SESSION["nombre"]);  ?>





<br />
<br />
Detalle de abono
<br />

<table border='1' cellspacing='0'>
<tr>
<th width=30>#</th>
<th width=30>Fecha</th>
<th width=40>Cant</th>
<th width=40>Saldo</th>
</tr>

<?php
$total = 0;


$abonos = AbonoData::getByCredito($_GET["id"]);

foreach($abonos as $abono){

$idAbono=$abono->idAbono;
$fechaAbono=$abono->fechaAbono;
$cantidadAbono=$abono->cantidadAbono;
$saldoCredito=$abono->saldoCredito;
$tipo_pago=$abono->tipo_pago;

if ($tipo_pago==0)
	{
$tp="Contado";
}
elseif ($tipo_pago==1)
	{
$tp="Tarjeta";
}
elseif ($tipo_pago==2)
{
$tp="Deposito bancario";
	}




}



echo("<tr>");
echo("<td class='text-center'>$idAbono</td>");
echo("<td class='text-center'>$fechaAbono</td>");
echo("<td class='text-right'>$cantidadAbono</td>");
echo("<td class='text-right'>$saldoCredito</td>");
echo("</tr>");


?>

</table>

<br />



Modo de pago:
<?php echo($tp);  ?>





<br />
<br />


GRACIAS POR PREFERIRNOS
<br />

www.fastness.us
<br />

FIRMA DE CLIENTE:__________
<br />
CEDULA:___________________









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
window.history.back();
}
</script>







</html>
