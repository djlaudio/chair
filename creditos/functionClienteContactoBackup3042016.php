<?php



include('connect_db.php');
		
$idCredito = $_POST['idCredito'];
				
$find = mysqli_query($link, "SELECT pe.telefono1, pe.telefono2, pe.direccion, cr.horaDePagoNormal, cr.cuotaCredito, cr.saldoActual
							FROM credito cr 
							INNER JOIN cliente cl 
							ON cr.idClienteCredito = cl.idPersona 
							INNER JOIN persona pe 
							ON cl.idPersona = pe.idPersona 
							WHERE cr.idCredito = $idCredito 
							ORDER BY pe.nombre");
while ($row = mysqli_fetch_array($find))
{
?>

<?php
if(strlen($row['telefono1'] > 0))

{ 
$_SESSION['celularCliente']=$row['telefono1'];


 ?>
	<div class="form-group">
		<label class="col-sm-4 control-label" for="tel1">Teléfono 1</label>
		<div class="col-sm-8">
			
 <a href='tel:  <?php echo $row['telefono1']; ?>  '>   <?php echo $row['telefono1']; ?> </a>	
<input type="hidden" name="tele1" value="<?php echo $row['telefono1']; ?>">	    
		</div>
	</div>
<?php } ?>

<?php
if(strlen($row['telefono2'] > 0))
{ ?>
	<div class="form-group">
		<label class="col-sm-4 control-label" for="tel2">Teléfono 2</label>
		<div class="col-sm-8">
			
 <a href='tel:  <?php echo $row['telefono2']; ?>  '>   <?php echo $row['telefono2']; ?> </a>
<input type="hidden" name="tele2" value="<?php echo $row['telefono2']; ?>">
		</div>
	</div>
<?php } ?>

<?php
if(strlen($row['direccion'] > 0))
{ ?>
	<div class="form-group">
		<label class="col-sm-4 control-label" for="dir">Dirección</label>
		<div class="col-sm-8">
		    <input class="form-control" name="dir" id="dir" value="<?php echo $row['direccion']; ?>" readonly>
		</div>
	</div>
<?php } ?>

<?php
if(strlen($row['horaDePagoNormal'] > 0))
{ ?>
<div class="form-group">
						      <label class="col-sm-4 control-label" for="HoraPago">Hora de pago</label>
						      <div class="col-sm-8">
						        <input type="text" placeholder="Hora de pago" class="form-control" name="horaDePago" id="horaDePago"  value="<?php echo $row['horaDePagoNormal']; ?>">
						      </div>
						    </div>
<?php } ?>



  <div class="form-group">
						      <label class="col-sm-4 control-label" for="subject">Abono</label>
						      <div class="col-sm-8">
						        <input type="number" placeholder="Nuevo Abono" class="form-control" name="abono" id="abono" value="<?php echo $row['cuotaCredito']; ?>"  >
						      </div>
						    </div>
<?php } ?>

<?php
if(strlen($row['saldoActual'] > 0))
{ ?>
<div class="form-group">
						      <label class="col-sm-4 control-label" for="subject">Saldo</label>
						      <div class="col-sm-8">
						        <input type="number" placeholder="Saldo actual" class="form-control" name="saldoActual" id="saldoActual" value="<?php echo $row['saldoActual']; ?>"  >
						      </div>
						    </div>
<?php } ?>


<div class="form-group">
<label class="col-sm-4 control-label" for="message">Cuota</label>
						      <div class="col-sm-8">
						       <input type="number" placeholder="Cuota" class="form-control" name="cuota" id="cuota" value="<?php echo $row['cuotaCredito']; ?>"  >
						      </div>
						    </div>


<?php
}
				
exit;
?>
