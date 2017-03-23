<div class="btn-group pull-right">
  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
    <i class="fa fa-download"></i> Descargar <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" role="menu">
    <li><a href="report/onesell-word.php?id=<?php echo $_GET["id"];?>">Word 2007 (.docx)</a></li>
  </ul>
</div>
<h1>Resumen de Venta</h1>
<?php if(isset($_GET["id"]) && $_GET["id"]!=""):?>
<?php
$sell = SellData::getById($_GET["id"]);
$operations = OperationData::getAllProductsBySellId($_GET["id"]);
$total = 0;
?>
<?php
if(isset($_COOKIE["selled"])){
	foreach ($operations as $operation) {
//		print_r($operation);
		$qx = OperationData::getQYesF($operation->product_id);
		// print "qx=$qx";
			$p = $operation->getProduct();
		if($qx==0){
			echo "<p class='alert alert-danger'>El producto <b style='text-transform:uppercase;'> $p->name</b> no tiene existencias en inventario.</p>";			
		}else if($qx<=$p->inventary_min/2){
			echo "<p class='alert alert-danger'>El producto <b style='text-transform:uppercase;'> $p->name</b> tiene muy pocas existencias en inventario.</p>";
		}else if($qx<=$p->inventary_min){
			echo "<p class='alert alert-warning'>El producto <b style='text-transform:uppercase;'> $p->name</b> tiene pocas existencias en inventario.</p>";
		}
	}
	setcookie("selled","",time()-18600);
}

?>
<table class="table table-bordered">
<?php if($sell->person_id!=""):
$client = $sell->getPerson();
?>
<tr>
	<td style="width:150px;">Cliente</td>
	<td><?php echo $client->name." ".$client->lastname;?></td>
</tr>

<?php endif; ?>
<?php if($sell->user_id!=""):
$user = $sell->getUser();
?>
<tr>
	<td>Atendido por</td>
	<td><?php echo $user->name." ".$user->lastname;?></td>
</tr>
<?php endif; ?>
</table>
<br><table class="table table-bordered table-hover">
	<thead>
		<th>Codigo</th>
		<th>Cantidad</th>
		<th>Nombre del Producto</th>
		<th>Término de pago</th>
		<th>Tipo de Pago</th>
		<th>Estado</th>
		<th>Precio Unitario</th>
		<th>Total</th>

	</thead>
<?php
	foreach($operations as $operation){
		$product  = $operation->getProduct();
?>
<tr>
	<td><?php echo $product->id ;?></td>
	<td><?php echo $operation->q ;?></td>
	<td><?php echo $product->name ;?></td>

	<td><?php 
	switch ($sell->termino_id) {
	    case 135:
	        echo "Contado";
	        break;
	    case 137:
	        echo "Crédito";
	        break;
	    case 139:
	        echo "Apartado";
	        break;
	}?></td>

	<td><?php echo $sell->tipo_pago == 0 ? "Efectivo" : "Tarjeta" ;?></td>
	<td><?php echo $sell->anulada  == 0 ? "En Firme" : "Anulada";?></td>
	<td>₡ <?php echo number_format($product->price_out,2,".",",") ;?></td>
	<td><b>₡ <?php echo number_format($operation->q*$product->price_out,2,".",",");$total+=$operation->q*$product->price_out;?></b></td>
</tr>
<?php
	}
	?>
</table>
<br><br>
<div class="row">
<div class="col-md-4">
<table class="table table-bordered">
	<tr>
		<td><h4>Descuento:</h4></td>
		<td><h4>₡ <?php echo number_format($sell->discount,2,'.',','); ?></h4></td>
	</tr>
	<tr>
		<td><h4>Subtotal:</h4></td>
		<td><h4>₡ <?php echo number_format(($total-	$sell->discount)*0.87,2,'.',','); ?></h4></td>
	</tr>
	<tr>
		<td><h4>IV:</h4></td>
		<td><h4>₡ <?php echo number_format(($total-	$sell->discount)*0.13,2,'.',','); ?></h4></td>
	</tr>
	<tr>
		<td><h4>Total:</h4></td>
		<td><h4>₡ <?php echo number_format($total-	$sell->discount,2,'.',','); ?></h4></td>
	</tr>
</table>


</div>
</div>
<div class="btn-group pull-right">
<a href="index.php?view=updatesellanular&id=<?php echo $sell->id; ?>" class="btn btn-xs btn-default"><i class="glyphicon glyphicon-pencil">Anular Factura</i></a>
</div>


<?php else:?>
	501 Internal Error
<?php endif; ?>