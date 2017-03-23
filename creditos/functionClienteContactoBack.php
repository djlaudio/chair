<?php
include('connect_db.php');
		
$idCredito = $_POST['idCredito'];
$cuenta	=1;		
$find = mysqli_query($link, "SELECT pe.phone1, pe.phone2, pe.name, pe.address1, cr.horaDePagoNormal, cr.cuotaCredito, cr.saldoActual, cl.tipoCliente, cl.idCliente, cl.calificacion, cl.comentarios
							FROM credito cr 
							INNER JOIN cliente cl 
							ON cr.idClienteCredito = cl.idPersona 
							INNER JOIN person pe 
							ON cl.idPersona = pe.id
							WHERE cr.idCredito = $idCredito 
							ORDER BY pe.name");
while ($row = mysqli_fetch_array($find))
{

// Lo siguiente se hace para que no cargue varios datos del contacto. Aunque por la consulta no deberia ya que solo hay un credito.
if ($cuenta==1)

{

?>

<div class="form-group">
      <label class="col-sm-4 control-label" for="name">Calificación</label>
                  <div class="col-sm-8">
                   <SELECT NAME="selComboCalificacion" SIZE=1 > 
                <OPTION   <?php if ($row['calificacion'] == 5 ) echo 'selected' ; ?> VALUE="5">EXCELENTE</OPTION>
                <OPTION   <?php if ($row['calificacion'] == 4 ) echo 'selected' ; ?> VALUE="4">BUENO</OPTION>
                <OPTION  <?php if ($row['calificacion'] == 3 ) echo 'selected' ; ?> VALUE="3">REGULAR</OPTION>
                <OPTION  <?php if ($row['calificacion'] == 2 ) echo 'selected' ; ?> VALUE="2">MALO</OPTION> 
<OPTION <?php if ($row['calificacion'] == 1 ) echo 'selected' ; ?>  VALUE="1">DEUDOR</OPTION> 
                </SELECT> 
                  </div>
                </div>

 <div class="form-group">

                  <label class="col-sm-4 control-label" for="message">Observación del cliente</label>
                  <div class="col-sm-8">
                    <textarea placeholder="Observaciones sobre el cliente" class="form-control" name="observacionCliente" id="observacionCliente"   rows="5"><?php echo $row['comentarios']; ?></textarea>
                  </div>
                </div>



<?php
if(strlen($row['phone1'] > 0))
{ ?>
	<div class="form-group">
		<label class="col-sm-4 control-label" for="tel1">Teléfono 1</label>
		<div class="col-sm-8">
			<a href="" name="tel1" id="tel1" > <?php echo $row['phone1']; ?> </a>
<input type="hidden" name="tele1" value="<?php echo $row['phone1']; ?>">	    		    
		</div>
	</div>
<?php } ?>

<?php

{ ?>
	
			
<input type="hidden" name="nombre" value="<?php echo $row['name']; ?>">	    		    
		
<?php } ?>



<?php

{ ?>
	
			
<input type="hidden" name="idCliente" value="<?php echo $row['idCliente']; ?>">	    		    
		
<?php } ?>


<?php
if(strlen($row['phone2'] > 0))
{ ?>
	<div class="form-group">
		<label class="col-sm-4 control-label" for="tel2">Teléfono 2</label>
		<div class="col-sm-8">
			<a href="" name="tel2" id="tel2" > <?php echo $row['phone2']; ?> </a>
		</div>
	</div>
<?php } ?>

<?php
if(strlen($row['address1'] > 0))
{ ?>
	<div class="form-group">
		<label class="col-sm-4 control-label" for="dir">Dirección</label>
		<div class="col-sm-8">
		    <input class="form-control" name="dir" id="dir" value="<?php echo $row['address1']; ?>" readonly>
		</div>
	</div>
<?php } ?>

<?php

{ ?>
<div class="form-group">
						      <label class="col-sm-4 control-label" for="HoraPago">Hora de pago</label>
						      <div class="col-sm-8">
						        <input type="time" placeholder="Hora de pago" class="form-control" name="horaDePago" id="horaDePago"  value="<?php echo $row['horaDePagoNormal']; ?>">
						      </div>
						    </div>
<?php } ?>


<div class="form-group">
<label class="col-sm-4 control-label" for="message">Cuota</label>
						      <div class="col-sm-8">
						       <input type="number" placeholder="Cuota" class="form-control" name="cuota" id="cuota" value="<?php echo $row['cuotaCredito']; ?>"  >
						      </div>
						    </div>


<div class="form-group">
						      <label class="col-sm-4 control-label" for="subject">Saldo</label>
						      <div class="col-sm-8">
<input type="label" placeholder="saldoActual" class="form-control" name="saldoActual" id="saldoActual" readonly="true"  value="<?php echo $row['saldoActual']; ?>"  >
						        
						      </div>
						    </div>


 <div class="form-group">
						      <label class="col-sm-4 control-label" for="name">Tipo de Cliente</label>
						      <div class="col-sm-8">
						       
						       
						       
						       <SELECT NAME="selTipoCliente" SIZE=1  > 


<option <?php if ($row['tipoCliente'] == 1 ) echo 'selected' ; ?> value="1">Tienda</option>
<option <?php if ($row['tipoCliente'] == 2 ) echo 'selected' ; ?> value="2">Afuera</option>
<option <?php if ($row['tipoCliente'] == 0 ) echo 'selected' ; ?> value="0">Indefinido</option


								</SELECT> 
						     
						      
						       
						       
						       
						      </div>
						    </div>





<?php
$cuenta=2;
}

}
				
exit;
?>