<?php

if(isset($_SESSION["cart"])){
	$cart = $_SESSION["cart"];
	if(count($cart)>0){
/// antes de proceder con lo que sigue vamos a verificar que:
		// haya existencia de productos
		// si se va a facturar la cantidad a facturr debe ser menor o igual al producto facturado en inventario
		$num_succ = 0;
		$process=false;
		$errors = array();
		foreach($cart as $c){

			///
			$q = OperationData::getQYesF($c["product_id"]);
			if($c["q"]<=$q){
				if(isset($_POST["is_oficial"])){
				$qyf =OperationData::getQYesF($c["product_id"]); /// son los productos que puedo facturar
				if($c["q"]<=$qyf){
					$num_succ++;
				}else{
				$error = array("product_id"=>$c["product_id"],"message"=>"No hay suficiente cantidad de producto para facturar en inventario.");
				$errors[count($errors)] = $error;
				}
				}else{
					// si llegue hasta aqui y no voy a facturar, entonces continuo ...
					$num_succ++;
				}
			}else{
				$error = array("product_id"=>$c["product_id"],"message"=>"No hay suficiente cantidad de producto en inventario.");
				$errors[count($errors)] = $error;
			}

		}

if($num_succ==count($cart)){
	$process = true;
}

if($process==false){
$_SESSION["errors"] = $errors;
	?>
<script>
	window.location="index.php?view=sell";
</script>
<?php
}









//////////////////////////////////
		if($process==true){
			$sell = new SellData();
			$sell->user_id = $_SESSION["user_id"];
			$sell->termino_id = $_POST["termino_id"];
			$sell->tipo_pago = $_POST["tipo_pago"];
			$sell->dia_pago = $_POST["dia_pago"];
			$sell->cuota = $_POST["cuota"];
      $sell->iv = $_POST["iv"];

			$sell->total = $_POST["total"];
			$sell->discount = $_POST["discount"];



$credito = new CreditoData();
$credito ->tipo_pago = $_POST["tipo_pago"];
$credito ->cantidadAbono =$_POST["cuota"];
$credito ->idCreditoAbono =$_POST["cuota"];
$credito ->cantidadCredito =$_POST["total"];
$credito ->idSell =3;

	$credito->add();




			 if(isset($_POST["client_id"]) && $_POST["client_id"]!=""){
			 	$sell->person_id=$_POST["client_id"];
 				$s = $sell->add_with_client();

						
 				$sell->addCreditos_with_client();
			 }else{
 				$s = $sell->add();

						

 				$sell->addCreditos();
			 }


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
			 $op->operation_type_id=OperationTypeData::getByName("salida")->id;
			 $op->sell_id=$s[1];
			 $op->q= $c["q"];

			if(isset($_POST["is_oficial"])){
				$op->is_oficial = 1;
			}

			$add = $op->add();

			unset($_SESSION["cart"]);
			setcookie("selled","selled");
		}
////////////////////
print "<script>window.location='index.php?view=onesell&id=$s[1]';</script>";
		}
	}
}



?>
