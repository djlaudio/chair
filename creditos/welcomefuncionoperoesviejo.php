<?php

// Inialize session
session_start();

// Check, if username session is NOT set then this page will jump to login page
if (!isset($_SESSION['usuario'])) {
header('Location: index.php');
}

?>
﻿<!DOCTYPE html>


<?php
date_default_timezone_set('America/Tegucigalpa');
 echo 'Bienvenido, ', $_SESSION['usuario'],' el día de hoy es  ', date(date),' el día de hoy es  ',date('l jS \of F Y h:i:s A') ; 

?>



<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>FASTNESS</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- Add custom CSS here -->
    <link href="css/slidefolio.css" rel="stylesheet">
	<!-- Font Awesome -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
  </head>
  <body>
    <!-- Header Area -->
    <div id="top" class="header">
      <div class="vert-text">
	  <img class="img-rounded" alt="Company Logo" src="./img/logo.png"/>
        <h2><em>FASTNESS</em></h2>
		 <ul class="list-inline">
              <li><i class="fa fa-facebook fa-3x"></i></li>
              <li><i class="fa fa-twitter fa-3x"></i></li>
              <li><i class="fa fa-google-plus fa-3x"></i></li>
			  <li><i class="fa fa-linkedin fa-3x"></i></li>
			   <li><i class="fa fa-pinterest fa-3x"></i></li>
            </ul>	
			<br>
			<a href="#about" class="btn btn-top">Leer más</a>
      </div>
    </div>
    <!-- /Header Area -->
	  <div id="nav">
    <!-- Navigation -->
    <nav class="navbar navbar-new" role="navigation">
   <div class="container">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mobilemenu">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
	<a href="#" class="navbar-brand">Slidefolio</a>
  </div>
  <div class="collapse navbar-collapse" id="mobilemenu">

	  <ul class="nav navbar-nav navbar-right text-center">
	    <li><a href="#top"><i class="service-icon fa fa-home"></i>&nbsp;Inicio</a></li>
        <li><a href="#about"><i class="service-icon fa fa-info"></i>&nbsp;Acerca</a></li>
        <li><a href="#services"><i class="service-icon fa fa-laptop"></i>&nbsp;Servicios</a></li>
		 <li><a href="#clients"><i class="service-icon fa fa-envelope"></i>&nbsp;Registro de Clientes</a></li>
         <li><a href="#contact"><i class="service-icon fa fa-envelope"></i>&nbsp;Registro de creditos</a></li>
<li><a href="#abonos"><i class="service-icon fa fa-envelope"></i>&nbsp;Registro de abonos</a></li>
<li><a href="adminPanel.php"><i class="service-icon fa fa-envelope"></i>&nbsp;Panel de administrador</a></li>
    </ul>
  </div><!-- /.navbar-collapse -->
  </div>
</nav>
    <!-- /Navigation -->
</div>	
    <!-- About -->
    <div id="about" class="about_us">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2 text-center">
            <h2>Acerca</h2>
            <p class="lead">Empresa dedicada a la venta de ropa deportiva, perfumes, con más de 10 años de experiencia.</p>
          </div>
        </div>
	  </div>
    </div>
    <!-- /About -->
    <!-- Services -->
    <div id="services" class="services">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-md-offset-4 text-center">
            <h2>Servicios</h2>
            <hr>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 text-center">
            <div class="service-item">
              <i class="service-icon fa fa-camera-retro fa-3x"></i>
              <h3>Venta de dispositivos eléctronicos</h3>
              <p>Aqui descripcion de productos a la venta. </p>
            </div>
          </div>
          <div class="col-md-4 text-center">
            <div class="service-item">
			<i class="service-icon fa fa-camera fa-3x"></i>
              <h3>Venta de colonias</h3>
              <p>Descripción de colonias a la venta.</p>
            </div>
          </div>
          <div class="col-md-4 text-center">
            <div class="service-item">
              <i class="service-icon fa fa-globe fa-3x"></i>
              <h3>Pedidos a crédito</h3>
              <p>Somos importadores, le traemos lo que usted necesite y se lo vendemos a crédito.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /Services -->

    <!-- Portfolio -->
    <div id="portfolio" class="portfolio">
    <div class="container">
    <div class="row push50">
          <div class="col-md-4 col-md-offset-4 text-center">
            <h2>Nuestros productos</h2>
			<h3>
			<span class="filter label label-default" data-filter="all">TODOS</span>
	<span class="filter label label-default" data-filter="bw">Ropa</span>
	<span class="filter label label-default" data-filter="nature">Tenis</span>
	<span class="filter label label-default" data-filter="portraits">Perfumes</span>
	</h3>
            <hr>
          </div>
        </div>
		
		<div class="row">
		
		<div class="gallery">
		
    		  <ul id="Grid" class="gcontainer">
    		    <li class="col-md-4 col-sm-4 col-xs-12 mix bw portraits" data-cat="graphics">
              <a data-toggle="modal" data-target="#portrait1" class="mix-cover">
                <img class="horizontal" src="img/portrait1-sm.jpg" alt="placeholder">
      		      <span class="overlay"><span class="valign"></span><span class="title">Portrait 1</span></span>
              </a>                
      		  </li>
    		    <li class="col-md-4 col-sm-4 col-xs-12 mix portraits" data-cat="graphics">
                <a data-toggle="modal" data-target="#portrait2" class="mix-cover">
                  <img class="horizontal" src="img/portrait2.jpg" alt="placeholder">
        		      <span class="overlay"><span class="valign"></span><span class="title">Portrait 2</span></span>
                </a>                
      		  </li>
			  <li class="col-md-4 col-sm-4 col-xs-12 mix nature" data-cat="nature">
                <a data-toggle="modal" data-target="#nature1" class="mix-cover">
                  <img class="horizontal" src="img/nature1.jpg" alt="placeholder">
        		      <span class="overlay"><span class="valign"></span><span class="title">Nature 1</span></span>
        		    </a>
      		  </li>
      		  <li class="col-md-4 col-sm-4 col-xs-12 mix portraits" data-cat="portraits">
                <a data-toggle="modal" data-target="#portrait3" class="mix-cover">
                  <img class="horizontal" src="img/portrait3.jpg" alt="placeholder">
        		      <span class="overlay"><span class="valign"></span><span class="title">Portrait 3</span></span>
        		    </a>
      		  </li>
			  <li class="col-md-4 col-sm-4 col-xs-12 mix portraits" data-cat="portraits">
                <a data-toggle="modal" data-target="#portrait5" class="mix-cover">
                  <img class="horizontal" src="img/portrait5.jpg" alt="placeholder">
        		       <span class="overlay"><span class="valign"></span><span class="title">Portrait 5</span></span>
        		    </a>
      		  </li>
			  <li class="col-md-4 col-sm-4 col-xs-12 mix nature" data-cat="nature">
                <a data-toggle="modal" data-target="#nature" class="mix-cover">
                  <img class="horizontal" src="img/nature.jpg" alt="placeholder">
        		      <span class="overlay"><span class="valign"></span><span class="title">Nature</span></span>
        		    </a>
      		  </li>
      		  <li class="col-md-4 col-sm-4 col-xs-12 mix portraits" data-cat="portrait">
                <a data-toggle="modal" data-target="#portrait4" class="mix-cover green">
                  <img class="vertical" src="img/portrait4.jpg" alt="portrait 4">
                  <span class="overlay"><span class="valign"></span><span class="title">Portrait 4</span></span>           
        		    </a>
      		  </li>
			  <li class="col-md-4 col-sm-4 col-xs-12 mix bw nature all" data-cat="portrait">
                <a data-toggle="modal" data-target="#forest" class="mix-cover green">
                  <img class="vertical" src="img/forest.jpg" alt="Forest">
                   <span class="overlay"><span class="valign"></span><span class="title">Forest</span></span>                    
        		    </a>
      		  </li>
			  <li class="col-md-4 col-sm-4 col-xs-12 mix bw nature all" data-cat="bw">
                <a data-toggle="modal" data-target="#bw1" class="mix-cover green">
                  <img class="vertical" src="img/bw1.jpg" alt="Black and White">
                   <span class="overlay"><span class="valign"></span><span class="title">Black &amp; White</span></span>                  
        		    </a>
      		  </li>
    		  </ul>   
			  
<!-- Load Photo in Modal -->			  
   <div class="modal fade" id="portrait1" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title text-center">Portrait 1</h4>
      </div>
      <div class="modal-body">
       <img class="thumbnail" alt="Portrait1" src="img/portrait1.jpg"/>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

  <div class="modal fade" id="portrait2" tabindex="-1" role="dialog"  aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title text-center">Portrait 2</h4>
      </div>
      <div class="modal-body">
       <img class="thumbnail" alt="Portrait1" src="img/portrait2.jpg"/>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade" id="portrait3" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title text-center">Portrait 3</h4>
      </div>
      <div class="modal-body">
       <img class="thumbnail" alt="Portrait1" src="img/portrait3.jpg"/>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade" id="portrait4" tabindex="-1" role="dialog"  aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title text-center">Portrait 4</h4>
      </div>
      <div class="modal-body">
       <img class="thumbnail" alt="Portrait1" src="img/portrait4.jpg"/>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade" id="portrait5" tabindex="-1" role="dialog"  aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title text-center">Portrait 5</h4>
      </div>
      <div class="modal-body">
       <img class="thumbnail" alt="Portrait1" src="img/portrait5.jpg"/>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade" id="nature" tabindex="-1" role="dialog"  aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title text-center">Nature</h4>
      </div>
      <div class="modal-body">
       <img class="thumbnail" alt="nature" src="img/nature.jpg"/>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade" id="nature1" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title text-center">Nature 1</h4>
      </div>
      <div class="modal-body">
       <img class="thumbnail" alt="nature" src="img/nature1.jpg"/>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<div class="modal fade" id="forest" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title text-center">Forest</h4>
      </div>
      <div class="modal-body">
       <img class="thumbnail" alt="forest" src="img/forest.jpg"/>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade" id="bw1" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title text-center">Black and White</h4>
      </div>
      <div class="modal-body">
       <img class="thumbnail" alt="forest" src="img/bw1.jpg"/>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<!-- /Load Photo in Modal -->	
		</div>	
      </div>
		</div>
      </div>
    <!-- /Portfolio -->
	
	


	
	
	
	
	
	
	
	
	
	  <!-- Contact -->
    <div id="clients">
      <div class="container">
        <div class="row">
		<div class="col-md-4 col-md-offset-4 text-center">
            <h2>Registro de Clientes</h2>
			<hr>
          </div>
          <div class="col-md-5 col-md-offset-3">
		  <!-- contact form starts -->
            <form action="registroCliente.php" id="contact-form" class="form-horizontal" method="post">
			<fieldset>


<div class="form-group">
						      <label class="col-sm-4 control-label" for="name">Cédula</label>
						      <div class="col-sm-8">
						       <input type="number" value="####-##-##" placeholder="Cedula" class="form-control" name="cedula" id="cédula" >
						      </div>
						   </div>

 <div class="form-group">

						 <div class="form-group">
						      <label class="col-sm-4 control-label" for="name" color="white">Nombre Completo</label>
						      <div class="col-sm-8">
						       <input type="text"  placeholder="Nombre Completo" class="form-control" name="nombre" id="nombreCliente" required>
						   </div>
						 </div>
						 <div class="form-group">
						      <label class="col-sm-4 control-label" for="name">Telefono</label>
						      <div class="col-sm-8">
						       <input type="number" value="####-##-##" placeholder="Telefono" class="form-control" name="telefono1" id="telefono" >
						      </div>
						   </div>

 <div class="form-group">
						      <label class="col-sm-4 control-label" for="name">Telefono2</label>
						      <div class="col-sm-8">
						       <input type="number" value="####-##-##" placeholder="Telefono2" class="form-control" name="telefono2" id="telefono" >
						      </div>
						   </div>

						    <div class="form-group">
						      <label class="col-sm-4 control-label" for="name">Correo Electrónico</label>
						      <div class="col-sm-8">
						       <input type="text" text="15000" placeholder="Correo Electrónico" class="form-control" name="correo" id="correo">
						      </div>
						   </div>
						
						
						    <div class="form-group">
						      <label class="col-sm-4 control-label" for="message">Dirección Exacta</label>
						      <div class="col-sm-8">
						        <textarea placeholder="Digite la direccion del nuevo cliente" class="form-control" name="direccion" id="direccion" rows="5"></textarea>
						      </div>
						    </div>

    <label class="col-sm-4 control-label" for="name">Calificación</label>
						      <div class="col-sm-8">
						       <SELECT NAME="selCombo" SIZE=1 > 
								<OPTION VALUE="5">EXCELENTE</OPTION>
								<OPTION VALUE="4">BUENO</OPTION>
								<OPTION VALUE="3">REGULAR</OPTION>
								<OPTION VALUE="2">MALO</OPTION> 
<OPTION VALUE="1">DEUDOR</OPTION> 
								</SELECT> 
						      </div>
						    </div>


	              <div class="col-sm-offset-4 col-sm-8">
			            <button type="submit" class="btn btn-success">Enviar</button>
	    			      <button type="reset" class="btn btn-primary">Cancelar</button>
	        			</div>
						</fieldset>
						</form>
				
				<!-- contact form ends -->		
          </div>
        </div>
      </div>
    </div>
	
	
	
    <!-- Credito -->
    <div id="contact">
      <div class="container">
        <div class="row">
		<div class="col-md-4 col-md-offset-4 text-center">
            <h2>Registro de créditos</h2>
			<hr>
          </div>
          <div class="col-md-5 col-md-offset-3">
		  <!-- contact form starts -->
            <form method="POST" action="registroCredito.php" id="contact-form" class="form-horizontal">
			<fieldset>
						    <div class="form-group">
						      <label class="col-sm-4 control-label" for="name">Cliente</label>
						      <div class="col-sm-8">
						       <SELECT NAME="selClienteCombo" SIZE=1 > 
								
								<?php include('connect_db.php');
								$query = mysqli_query($link,"SELECT cliente.idCliente, concat('#',persona.cedula,': ', persona.nombre,' ',persona.primerapellido) as nombreCompleto  from cliente inner join persona on cliente.idPersona= persona.idPersona where cliente.tipoCliente='2' order by persona.nombre");
								while($row = mysqli_fetch_assoc($query)){?>
								<option value=" <?php echo $row['idCliente'] ?> "><?php echo $row['nombreCompleto']; ?></option>
								<?php } ?>
								
								
								</SELECT> 
						      </div>
						    </div>
						    
                            
                            
							  <div class="form-group">
						      <label class="col-sm-4 control-label" for="subject">Nuevo credito</label>
						      <div class="col-sm-8">
						        <input type="number" placeholder="Nuevo credito" class="form-control" name="credito" id="credito">
						      </div>
						    </div>

  <div class="form-group">

						      <label class="col-sm-4 control-label" for="message">Producto</label>
						      <div class="col-sm-8">
						        <textarea placeholder="Digite el producto" class="form-control" name="descrProducto" id="descrProducto" rows="5"></textarea>
						      </div>
						    </div>


<div class="form-group">
						      <label class="col-sm-4 control-label" for="name">Dia de pago</label>
						      <div class="col-sm-8">
						       <SELECT NAME="selDiaCredito" SIZE=1 > 
								<OPTION VALUE="1">LUNES</OPTION>
								<OPTION VALUE="2">MARTES</OPTION>
								<OPTION VALUE="3">MIERCOLES</OPTION>
								<OPTION VALUE="4">JUEVES</OPTION> 
<OPTION VALUE="5">VIERNES</OPTION> 
<OPTION VALUE="6">SÁBADO</OPTION> 
								</SELECT> 
						      </div>
						    </div>
                            
                            
                            
                            <div class="form-group">
						      <label class="col-sm-4 control-label" for="name">Tipo de pago</label>
						      <div class="col-sm-8">
						       <SELECT NAME="selTipoCredito" SIZE=1 > 
								<OPTION VALUE="1">SEMANAL</OPTION>
								<OPTION VALUE="2">QUINCENAL</OPTION>
								<OPTION VALUE="3">MENSUAL</OPTION>
								
								</SELECT> 
						      </div>
						    </div>

						  
							
						    
						    <div class="form-group">

						      <label class="col-sm-4 control-label" for="message">Observación</label>
						      <div class="col-sm-8">
						        <textarea placeholder="Digite alguna observación" class="form-control" name="observacion" id="observacion" rows="5"></textarea>
						      </div>
						    </div>
	              <div class="col-sm-offset-4 col-sm-8">
			            <button type="submit" class="btn btn-success">Enviar</button>
	    			      <button type="reset" class="btn btn-primary">Cancelar</button>
	        			</div>
						</fieldset>
						</form>
				
				<!-- contact form ends -->		
          </div>
        </div>
      </div>
    
    <!-- /Contact -->


  <!-- Abono -->
    <div id="contact">
      <div class="container">
        <div class="row">
		<div class="col-md-4 col-md-offset-4 text-center">
            <h2>Registro de abonos</h2>
			<hr>
          </div>
          <div class="col-md-5 col-md-offset-3">
		  <!-- contact form starts -->
            <form method="POST" action="registroAbono.php" id="contact-form" class="form-horizontal">
			<fieldset>


<div class="form-group">
						      <label class="col-sm-4 control-label" for="name">Dia de pago</label>
						      <div class="col-sm-8">
						       <SELECT NAME="selCombo"  SIZE=1 > 
								<OPTION VALUE="1">LUNES</OPTION>
								<OPTION VALUE="2">MARTES</OPTION>
								<OPTION VALUE="3">MIERCOLES</OPTION>
								<OPTION VALUE="4">JUEVES</OPTION> 
<OPTION VALUE="5">VIERNES</OPTION> 
<OPTION VALUE="6">SÁBADO</OPTION> 
								</SELECT> 


<script>
   function valueselect(sel) {
      var value = sel.options[sel.selectedIndex].value;
      window.location.href = "channelinformation.html?selected="+value;
   }
</script>
						      </div>
						    </div>
						    <div class="form-group">
						      <label class="col-sm-4 control-label" for="name">Crédito</label>
						      <div class="col-sm-8">
						         <SELECT NAME="selComboCreditos" SIZE=1 required> 
							   	

<?php include('connect_db.php');
								$query = mysqli_query($link,"SELECT distinct diaPago, idCredito, idClienteCredito, credito.codigoProducto, descrProducto, CONCAT( d.DescrDia,  ': ', cantidadCredito,  ' col:', credito.observacion, ' numFactura:', credito.idCredito, ' persona:', persona.nombre, '') AS descripcion
FROM dia d
INNER JOIN credito ON d.numDia = credito.diaPago
INNER JOIN cliente ON credito.idClienteCredito = cliente.idPersona
INNER JOIN persona ON cliente.idPersona = persona.idPersona
WHERE  credito.diaPago='$dayNum' and credito.idTipoClientes=$_SESSION['idTipoClientes'] order by credito.diaPago, credito.idCredito");
								while($row = mysqli_fetch_assoc($query)){?>
								<option value=" <?php echo $row['idCredito'] ?> "><?php echo $row['descripcion']; ?></option>
								<?php } ?>
								
								</SELECT> 
						      </div>
						    </div>
						   
							



						    <div class="form-group">
						      <label class="col-sm-4 control-label" for="subject">Abono</label>
						      <div class="col-sm-8">
						        <input type="number" placeholder="Nuevo Abono" class="form-control" name="abono" id="abono">
						      </div>
						    </div>
							
						    <div class="form-group">
						      <label class="col-sm-4 control-label" for="message">Observación</label>
						      <div class="col-sm-8">
						        <textarea placeholder="Digite alguna observación" class="form-control" name="message" id="message" rows="5"></textarea>
						      </div>
						    </div>
	              <div class="col-sm-offset-4 col-sm-8">
			            <button type="submit" class="btn btn-success">Enviar</button>
	    			      <button type="reset" class="btn btn-primary">Cancelar</button>
	        			</div>
						</fieldset>
						</form>
				
				<!-- contact form ends -->		
          </div>
        </div>
      </div>
    </div>
    <!-- /Abono -->




 
    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-md-offset-3 text-center">
           <h2>Gracias por su visita</h2>
           <em>Copyright &copy; DJL Productions 2015</em>
          </div>
        </div>
      </div>
    </footer>
    <!-- /Footer -->
    <!-- Bootstrap core JavaScript -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
	<script src="js/jquery-scrolltofixed-min.js"></script>
	<script src="js/jquery.vegas.js"></script>
	<script src="js/jquery.mixitup.min.js"></script>
	<script src="js/jquery.validate.min.js"></script>
	<script src="js/script.js"></script>
	<script src="js/bootstrap.js"></script>
	
<!-- Slideshow Background  -->
	<script>
$.vegas('slideshow', {
  delay:5000,
  backgrounds:[
     { src:'./img/nature1.jpg', fade:2000 },
	 { src:'./img/bw1.jpg', fade:2000 },
    { src:'./img/portrait1.jpg', fade:2000 },
	 { src:'./img/portrait5.jpg', fade:2000 },
    { src:'./img/portrait2.jpg', fade:2000 },
    { src:'./img/portrait3.jpg', fade:2000 },
	 { src:'./img/portrait4.jpg', fade:2000 },
	   { src:'./img/forest.jpg', fade:2000 }
	   
  ]
})('overlay', {
src:'./img/overlay.png'
});

	</script>
<!-- /Slideshow Background -->

<!-- Mixitup : Grid -->
    <script>
		$(function(){
    $('#Grid').mixitup();
      });
    </script>
<!-- /Mixitup : Grid -->	

    <!-- Custom JavaScript for Smooth Scrolling - Put in a custom JavaScript file to clean this up -->
    <script>
      $(function() {
        $('a[href*=#]:not([href=#])').click(function() {
          if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
            || location.hostname == this.hostname) {

            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
              $('html,body').animate({
                scrollTop: target.offset().top
              }, 1000);
              return false;
            }
          }
        });
      });
    </script>
<!-- Navbar -->
<script type="text/javascript">
$(document).ready(function() {
        $('#nav').scrollToFixed();
  });
    </script>
<!-- /Navbar-->
	
  </body>

</html>