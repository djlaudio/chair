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

$word->addTableStyle('table1', $styleTable,$styleFirstRow);
/// datos bancarios

$filename = "abonos-".time().".docx";
#$word->setReadDataOnly(true);
$word->save($filename,"Word2007");
//chmod($filename,0444);
header("Content-Disposition: attachment; filename='$filename'");
readfile($filename); // or echo file_get_contents($filename);
unlink($filename);  // remove temp file



?>