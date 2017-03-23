

  <!-- Clientes al día -->
    <div id="apclientesaldia">
      <div class="container">
        <div class="row">
		<div class="col-md-4 col-md-offset-4 text-center">
            <h2>Clientes al dia</h2>
			<hr>
          </div>
          <div class="col-md-5 col-md-offset-3">
		  <!-- contact form starts -->
            <form method="POST" action="actualizacionsddf.php" id="contact-form" class="form-horizontal">
			<fieldset>


<div class="form-group">
						    
						    <div class="form-group">
						      <label class="col-sm-4 control-label" for="name">Crédito</label>
						      <div class="col-sm-8">
						         <SELECT id="selComboCreditos" NAME="selComboCreditos"   
                      required>
							   	





<?php include('connect_db.php');
include consultaMorosos.php;






						

								$query = mysqli_query($link,$ConsultaCreditosAtrasados);
								while($row = mysqli_fetch_assoc($query)){?>
								<option value=" <?php echo $row['idCredito'] ?> "><?php echo $row['descripcion']; ?></option>
								<?php } ?>
								
								</SELECT> 
						      </div>
						    </div>
						   
							
 <!-- 
                  Para cargar los compos que muestran la informacion
                  del cliente de acuerdo al credito seleccionado
                -->    
                <div id="divDatosCLiente">
                  
                </div>    

						   

 <div class="form-group">
						      <label class="col-sm-4 control-label" for="message">Mensaje</label>
						      <div class="col-sm-8">
						        <textarea placeholder="Aqui el mensaje" class="form-control" name="cuota" id="cuota" rows="1"></textarea>
						      </div>
						    </div>
							
						   









	              <div class="col-sm-offset-4 col-sm-8">
			            <button type="submit" class="btn btn-success">Enviar</button>
	    			      <button type="reset" class="btn btn-primary">Cancelar</button>




		</div>
						</fieldset>

 <fieldset>
              <div class="col-sm-offset-4 col-sm-8">
                <button type="submit" id="btnEnviarMasivoLimpios" class="btn btn-primary">Enviar Masivo a clientes al dia</button>
              </div>   
            </fieldset>   
						</form>
				
				<!-- contact form ends -->		
          </div>
        </div>
      </div>
    </div>
    <!-- /Clientes al día -->


	        