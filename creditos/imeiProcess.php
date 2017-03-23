<?php

// Inialize session
session_start();



?>
﻿<!DOCTYPE html>






<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

  
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
	 
       
		 <ul class="list-inline">
              <li><i class="fa fa-facebook fa-3x"></i></li>
              <li><i class="fa fa-twitter fa-3x"></i></li>
              <li><i class="fa fa-google-plus fa-3x"></i></li>
			  <li><i class="fa fa-linkedin fa-3x"></i></li>
			   <li><i class="fa fa-pinterest fa-3x"></i></li>
            </ul>	
			<br>
			
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
 
  </div>
</nav>
    <!-- /Navigation -->
</div>	
   

<!-- /Load Photo in Modal -->	
		</div>	
      </div>
		</div>
      </div>
    <!-- /Portfolio -->
	
	


	
	
	
	
	
	
	



  <!-- Actualizacion de datos -->
    <div id="contact">
      <div class="container">
        <div class="row">
		<div class="col-md-4 col-md-offset-4 text-center">
            <h2>Solicitud de proceso de IMEI</h2>
			<hr>
          </div>
          <div class="col-md-5 col-md-offset-3">
		  <!-- contact form starts -->
            <form  method="POST" action="solicitudIMEI.php" id="contact-form" class="form-horizontal" target="_blank">
			<fieldset>

<input type="hidden" name="cmd" value="_xclick" />
		<input type="hidden" name="no_note" value="1" />
		<input type="hidden" name="lc" value="US" />
		<input type="hidden" name="currency_code" value="USD" />
		<input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynow_LG.gif:NonHostedGuest" />
		<input type="hidden" name="first_name" value="Customer's First Name"  />
		<input type="hidden" name="last_name" value="Customer's Last Name"  />
		<input type="hidden" name="payer_email" value="celdjl@gmail.com"  />
		<input type="hidden" name="item_number" value="123456" / >
		




<div class="form-group">
						      <label class="col-sm-4 control-label" for="name">Option</label>
						      <div class="col-sm-8">
						      <SELECT NAME="selServicio"  SIZE=1 onchange="fetch_select(this.value, <?php echo $_SESSION['idTipoClientes'];?>);">
<OPTION VALUE="1">BLACKLIST INFORMATION</OPTION>


<OPTION VALUE="3">IPHONE BASIC INFORMATION</OPTION>
							

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
						      <label class="col-sm-4 control-label" for="message">IMEI</label>
						      <div class="col-sm-8">
						        <textarea placeholder="Write here the IMEI or IMEIS if bulk" class="form-control" name="IMEIS" id="IMEIS" rows="1"></textarea>
						      </div>
						    </div>

 <div class="form-group">
						      <label class="col-sm-4 control-label" for="message">EMAIL</label>
						      <div class="col-sm-8">
						        <textarea placeholder="Write here your email address" class="form-control" name="email" id="email" rows="1"></textarea>
						      </div>
						    </div>

<div class="form-group">
						      <label class="col-sm-4 control-label" for="message">Coments</label>
						      <div class="col-sm-8">
						        <textarea placeholder="Write here any comments" class="form-control" name="comments" id="comments" rows="1"></textarea>
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
    <!-- /Actualizacion de datos -->





  



 
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
	

<script>
function fetch_select(val, idTipoClientes)
{

   $.ajax({
     type: 'post',
     url: 'functionCreditos.php',
     data: {
       get_option:val,
       idTipoClientes:idTipoClientes
     },
     success: function (response) {
       document.getElementById("selComboCreditos").innerHTML=response; 
     }
   });
document.getElementById("selComboSigDiaPago").value = val;

}

</script>


<script>
  function load_Client_Information(idCredito)
{
   $.ajax({
     type: 'post',
     url: 'functionClienteContacto.php',
     data: {
       idCredito:idCredito
     },
     success: function (response) {
       document.getElementById("divDatosCLiente").innerHTML=response; 

// document.getElementById("horaDePago").value= $("#selComboCreditos option:selected").html().substring($("#selComboCreditos option:selected").html().indexOf("horaDePago"),9);
     }
   });
}
</script>

<script>
function dias_transcurridos($fecha_i,$fecha_f)
{
	$dias	= (strtotime($fecha_i)-strtotime($fecha_f))/86400;
	$dias 	= abs($dias); $dias = floor($dias);		
	return $dias;
}
</script>

<script>
function semanas_transcurridos($fecha_i,$fecha_f)
{
	$dias	= (strtotime($fecha_i)-strtotime($fecha_f))/86400;
	$dias 	= abs($dias); $dias = floor($dias);	
         $semanas=$dias/7	
	return $semanas;
}
</script>



<script>


function meses_transcurridos($fechainicial,$fechafinal)
{
	$diferencia = $fechainicial->diff($fechafinal);
        $meses = ( $diferencia->y * 12 ) + $diferencia->m;
	return $meses;

}
</script>


<script>


function quincenas_transcurridos($fechainicial,$fechafinal)
{
	$diferencia = $fechainicial->diff($fechafinal);
        $meses = ( $diferencia->y * 12 ) + $diferencia->m;
	return $meses*2;

}
</script>



<script>
  function cargaImagenesGoogle(textoBusqueda)
{
   $.ajax({
     type: 'post',
     url: 'cargarImagenes.php',
     data: {
       textoBusqueda:textoBuqueda
     },
     success: function (response) {
       document.getElementById("divImagenesGoogle").innerHTML=response; 

//En ese div se ponen las imagenes que se obtienen como respuesta de la busqueda en google del texto buscado. Aun no se esta usando.
     }
   });
}
</script>


<script>


function pagoDebidoEstimado($cantidadDePagos, $cuota)
{
	$diferencia = $fechainicial->diff($fechafinal);
        $meses = ( $diferencia->y * 12 ) + $diferencia->m;
	return $meses*2;

}
</script>



  </body>

</html>