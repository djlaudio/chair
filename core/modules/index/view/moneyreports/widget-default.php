<?php
$clients = PersonData::getClients();
?>
<section class="content">
<div class="row">
	<div class="col-md-12">
	<h1>Reportes de Dineros Recibidos</h1>

						<form>
						<input type="hidden" name="view" value="moneyreports">
<div class="row">

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


<script>
  $( function() {
    $("#sd").datepicker({ dateFormat: 'yy-mm-dd' });
  } );
  </script>

  <script>
  $( function() {
    $("#ed").datepicker({ dateFormat: 'yy-mm-dd' });
  } );
  </script>

  
<div class="col-md-3">

<select name="client_id" class="form-control">
	<option value="">--  TODOS --</option>
	<?php foreach($clients as $p):?>
	<option value="<?php echo $p->id;?>"><?php echo $p->name . " - " . $p->nameBusiness;?></option>
	<?php endforeach; ?>
</select>

</div>
<div class="col-md-3">
<input type="date" name="sd" id="sd" value="<?php if(isset($_GET["sd"])){ echo $_GET["sd"]; }?>" class="form-control">
</div>
<div class="col-md-3">
<input type="date" name="ed" id="ed" value="<?php if(isset($_GET["ed"])){ echo $_GET["ed"]; }?>" class="form-control">
</div>

<div class="col-md-3">
<input type="submit" class="btn btn-success btn-block" value="Procesar">
</div>

</div>
<!--
<br>
<div class="row">
<div class="col-md-4">

<select name="mesero_id" class="form-control">
	<option value="">--  MESEROS --</option>
	<?php foreach($meseros as $p):?>
	<option value="<?php echo $p->id;?>"><?php echo $p->name;?></option>
	<?php endforeach; ?>
</select>

</div>

<div class="col-md-4">

<select name="operation_type_id" class="form-control">
	<option value="1">VENTA</option>
</select>

</div>

</div>
-->
</form>

	</div>
	</div>
<br><!--- -->
<div class="row">
	
	<div class="col-md-12">
		<?php if(isset($_GET["sd"]) && isset($_GET["ed"]) ):?>
<?php if($_GET["sd"]!=""&&$_GET["ed"]!=""):?>
			<?php 
			$operations = array();

			if($_GET["client_id"]==""){
			$operations = AbonoData::getAllByDateOp($_GET["sd"],$_GET["ed"],2);
			}
			else{
			$operations = AbonoData::getAllByDateBCOp($_GET["client_id"],$_GET["sd"],$_GET["ed"],2);
			} 


			 ?>

			 <?php if(count($operations)>0):?>
			 	<?php $supertotal = 0; ?>
<table class="table table-bordered">
	<thead>
		<th></th>
		<th>Factura</th>
		<th>Id</th>
		<th>Cliente</th>
		<th>Comentarios</th>
		<th>Dinero</th>
		<th>Saldo</th>
		<th>Tipo de pago</th>
		<th>Fecha</th>
	</thead>
<?php foreach($operations as $operation):

// $sell = SellData::getById($operation->id2creditoAbono);
$abono= new AbonoData();
$credit= $abono->getAbonoCredit();
 $sell = $credit -> getCreditSell();

?>

	

	<tr>


		<td> <a href="http://www.fastness.us/ventas/report/djl1abono-pos.php?id=<?php echo $operation->idCreditoAbono; ?>" class="btn btn-xs btn-default"><i class="glyphicon glyphicon-eye-open"></i></a></td>
		<td>
			
		<?php if($operation->idCreditoAbono!=null){
					
				
                    echo($sell ->id2);   }?>

		</td>

		<td> <?php echo($operation ->idAbono); ?></td>
		<td>
		
 <?php

 

  if($sell->person_id!=null){
                    $client = $sell->getPerson();
                    echo($client->name." ".$client->lastname." - ".$client->nameBusiness);   }?>
                    </td>
                    <td><?php echo ($operation->observacion); ?></td>
		<td>₡ <?php echo number_format($operation->cantidadAbono,2,'.',','); ?></td>
		<td>₡ <?php echo number_format($operation->saldoCredito,2,'.',','); ?></td>
		<td>
			<?php 
			$tipo_pago= $operation->tipo_pago;
			include 'tipoPago.php';
			echo ($tp);

			?>

		</td>
		<td><?php echo $operation->fechaAbono; ?></td>
	</tr>
<?php
$supertotal+= ($operation->cantidadAbono);
 endforeach; ?>

</table>
<h1>Total de abonos: ₡ <?php echo number_format($supertotal,2,'.',','); ?></h1>

			 <?php else:
			 // si no hay operaciones
			 ?>
<script>
	$("#wellcome").hide();
</script>
<div class="jumbotron">
	<h2>No hay operaciones</h2>
	<p>El rango de fechas seleccionado no proporciono ningun resultado de operaciones.</p>
</div>

			 <?php endif; ?>
<?php else:?>
<script>
	$("#wellcome").hide();
</script>




<div class="jumbotron">
	<h2>Fecha Incorrectas</h2>
	<p>Puede ser que no selecciono un rango de fechas, o el rango seleccionado es incorrecto.</p>
</div>
<?php endif;?>

		<?php endif; ?>
	</div>
</div>

<br><br><br><br>
</section>