<?php

include('connect_db.php');
include('functionCaja.php');


$montoAtrasadoSemanal=($_POST["montoAtrasadoSemanal"]);
$montoAtrasadoQuincenal=($_POST["montoQuincenal"]);
$montoAtrasadoMensual=($_POST["montoAtrasadoMensual"]);
$montoInicial= ($_POST["montoInicial"]);
$ventasEfectivo= ($_POST["ventasEfectivo"]);
$gastosEfectivo= ($_POST["gastosEfectivo"]);
$apartadoEnCaja= ($_POST["apartadoEfectivo"]);
$efectivoEnCaja= ($_POST["fectivoCaja"]);
$comentariosCaja= ($_POST["observacionCierre"]);




$patrimonioDeudas=($montoAtrasadoSemanal+$montoAtrasadoQuincenal+$montoAtrasadoMensual);


$patrimonioDeLaEmpresa=(($patrimonioDeudas/2)+$efectivoEnCaja+$apartadoEnCaja);


$respuestaCaja = "Cierre: Hay ";



$respuestaCaja .=  $efectivoEnCaja ;



$respuestaCaja .= " colones. ";

$respuestaCaja .= "Apartado: c." . $apartadoEnCaja . " Gastos: c." . $gastosEfectivo .""  ; 

if  ((caja($montoInicial,$ventasEfectivo,$gastosEfectivo,$apartadoEnCaja))>$efectivoEnCaja)
{
    $respuestaCaja  .= (" FALTAN c.". ((caja($montoInicial,$ventasEfectivo,$gastosEfectivo,$apartadoEnCaja))-$efectivoEnCaja).". ")   ;
}
else
    if  ($efectivoEnCaja > (caja($montoInicial,$ventasEfectivo,$gastosEfectivo,$apartadoEnCaja)))
    {
        $respuestaCaja  .= (" SOBRAN c.". (   $efectivoEnCaja -(caja($montoInicial,$ventasEfectivo,$gastosEfectivo,$apartadoEnCaja))).". " ) ;
    }
    else
    {
        $respuestaCaja  .= ( " TODO ESTA BIEN. " )  ;
    }




$respuestaCaja .= ("Cobros atrasados: c." . $patrimonioDeudas . " Patrimonio: c." . $patrimonioDeLaEmpresa . ". ")  ;


$respuestaCaja .= $comentariosCaja;

echo $respuestaCaja;

$subject=str_replace('-','',rtrim('84992177'));
$to='celdjl@gmail.com';

$txt = $respuestaCajar;
$headers = 'From: consultas@djlproductions.com' . "\r\n" .
"CC: celdjl@gmail.com";


   
?>


﻿<!DOCTYPE html>






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
    <!-- Header Area --><!-- /Header Area -->
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
  </div><!-- /.navbar-collapse -->
  </div>
</nav>
    <!-- /Navigation -->
</div>	
    <!-- About --><!-- /About -->
    <!-- Services --><!-- /Services -->

    <!-- Portfolio --><!-- /Portfolio -->
	
	


	
	
	
	
	
	
	
	
	
	  <!-- Contact --><!-- Abono -->
    <div id="contact">
      <div class="container">
        <div class="row">
		<div class="col-md-4 col-md-offset-4 text-center">
            <h2>Registro de mensajes</h2>

			<hr>
          </div>
          <div class="col-md-5 col-md-offset-3">
		  <!-- contact form starts -->
            <form method="POST" action="registroSmsPorPost.php" id="contact-form" class="form-horizontal">
			<fieldset>

			  <!-- 
                  Para cargar los compos que muestran la informacion
                  del cliente de acuerdo al credito seleccionado
                -->    
                <div id="divDatosCLiente">
                  
              </div>    

			<div class="form-group">
						      <label class="col-sm-4 control-label" for="message">Telefono</label>
						      <div class="col-sm-8">
						        <textarea placeholder="Aqui el numero" class="form-control" name="tele1" id="tele1" rows="1">88698748</textarea>
						      </div>
		      </div>			   

 
							
						    <div class="form-group">
						      <label class="col-sm-4 control-label" for="message">Mensaje</label>
						      <div class="col-sm-8">
						        <textarea placeholder="Aquí el mensaje" class="form-control" name="texto" id="texto" rows="5"><?php echo $respuestaCaja ?> </textarea>
						      </div>
						    </div>



<div class="form-group"></div>





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






  <!-- Actualizacion de datos --><!-- /Actualizacion de datos -->





  <!-- Email -->
    
    <!-- /Email -->




 
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
function fetch_select2(val, idTipoClientes)
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
function fetch_select(val)
{

   $.ajax({
     type: 'post',
     url: 'functionCreditos.php',
     data: {
       get_option:val,
       
     },
     success: function (response) {
       document.getElementById("selComboCreditos2").innerHTML=response; 
     }
   });
document.getElementById("selComboSigDiaPago2").value = val;

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
  function load_Client_Information2(idCredito)
{
   $.ajax({
     type: 'post',
     url: 'functionClienteContacto.php',
     data: {
       idCredito:idCredito
     },
     success: function (response) {

       document.getElementById("divDatosCLiente2").innerHTML=response; 

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

<script type="text/javascript">
  $( "#btnAnularCredito" ).click(function() {
    
    $.ajax({
     type: 'post',
     url: 'functionAnularCredito.php',
     success: function (response) {
       alert(response);
     }
   });

});
</script>



  </body>

</html>