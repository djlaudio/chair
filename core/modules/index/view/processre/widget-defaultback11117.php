<?php
if(isset($_SESSION["reabastecer"])){
	$cart = $_SESSION["reabastecer"];
	if(count($cart)>0){

$process = true;









//////////////////////////////////
		if($process==true){
			$sell = new SellData();
				$sell->termino_id = $_POST["termino_id"];
			$sell->tipo_pago = $_POST["tipo_pago"];
			$sell->dia_pago = $_POST["dia_pago"];
			$sell->cuota = $_POST["cuota"];
      		$sell->iv = $_POST["iv"];
			$sell->user_id = $_SESSION["user_id"];
$sell->total = $_POST["total"];


$credito = new CreditoData();


$sell->iv  == 0 ? $credito ->cantidadCredito =$_POST["total"] : $credito ->cantidadCredito =$_POST["total"] + ($_POST["total"] * .13) ;

$credito->idVendedor = $_SESSION["user_id"];
$credito->diaPago = $_POST["dia_pago"];
$credito->saldoActual = $_POST["total"];
$credito->termino_id = $_POST["termino_id"];
$credito->esCompra = 1;




			 if(isset($_POST["client_id"]) && $_POST["client_id"]!=""){
			 	$sell->person_id=$_POST["client_id"];
$credito->idClienteCredito = $_POST["client_id"];
 				$s = $sell->add_re_with_client();
			 }else{
			$credito->idClienteCredito = 0;
 				$s = $sell->add_re();
			 }




$credito->idSell= $s[1];
            $credito->add();


			 if($sell->termino_id == 135){
			 	$abono = new AbonoData();
				$abono->cantidadAbono = $sell->total;
				$abono->tipo_pago = $_POST["tipo_pago"];


				$abono->idCreditoAbono = $credito->getLastId();

				$abono->add();
			 }




		foreach($cart as  $c){


			$op = new OperationData();
			 $op->product_id = $c["product_id"] ;
			 $op->operation_type_id=1; // 1 - entrada
			 $op->sell_id=$s[1];
			 $op->q= $c["q"];

			if(isset($_POST["is_oficial"])){
				$op->is_oficial = 1;
			}

			$add = $op->add();			 		

		}
			unset($_SESSION["reabastecer"]);
			setcookie("selled","selled");
////////////////////
print "<script>window.location='index.php?view=onere&id=$s[1]';</script>";
		}
	}
}



?>
