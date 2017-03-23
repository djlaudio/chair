<?php

if(count($_POST)>0){
	$sell = new SellData();
	$sell->id = $_POST["id"];
	$sell->anulada = 1;
	$user->del();

	print "<script>window.location='index.php?view=onesell&id=$sell->id';</script>";
}

?>


