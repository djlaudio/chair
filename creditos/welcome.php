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
date_default_timezone_set('America/Costa_Rica');


foreach($_SESSION AS $key => $value) {
  echo "$key -> $value";
}


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
        <li><a href="../"><i class="service-icon fa fa-laptop"></i>&nbsp;Ventas</a></li>

<li><a href="#clients"><i class="service-icon fa fa-envelope"></i>&nbsp;Registro de clientes</a></li>
<li><a href="#abonos"><i class="service-icon fa fa-envelope"></i>&nbsp;Registro de abonos</a></li>
 <?php if ($_SESSION['idRol']==1): ?>
<li><a href="#cuota"><i class="service-icon fa fa-envelope"></i>&nbsp;Actualizacion de cuota</a></li>
<li><a href="abonosCuota.php#anulacioncuota"><i class="service-icon fa fa-envelope"></i>&nbsp;Anulacion de cuota</a></li>

<li><a href="adminPanel.php#regclients"><i class="service-icon fa fa-envelope"></i>&nbsp;Panel de administrador</a></li>
<?php endif; ?>




    </ul>
  </div><!-- /.navbar-collapse -->
  </div>
</nav>
    <!-- /Navigation -->
</div>
  











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
                   <input type="number" value="####-##-##" placeholder="Cedula" class="form-control" name="cedula" id="cédula">
                  </div>
               </div>

 <div class="form-group">

             <div class="form-group">
                  <label class="col-sm-4 control-label" for="name" color="white">Nombre</label>
                  <div class="col-sm-8">
                   <input type="text"  placeholder="Nombre" class="form-control" name="nombre" id="nombreCliente" required>
               </div>
             </div>

             <div class="form-group">
                  <label class="col-sm-4 control-label" for="name" color="white">Primer Apellido</label>
                  <div class="col-sm-8">
                   <input type="text"  placeholder="Apellido 1" class="form-control" name="apellido1" id="apellidosCliente" required>
               </div>
             </div>

             <div class="form-group">
                  <label class="col-sm-4 control-label" for="name" color="white">Segundo Apellido</label>
                  <div class="col-sm-8">
                   <input type="text"  placeholder="Apellido 2" class="form-control" name="apellido2" id="apellido2">
               </div>
             </div>

 <div class="form-group">
                  <label class="col-sm-4 control-label" for="name" color="white">Nombre de la empresa</label>
                  <div class="col-sm-8">
                   <input type="text"  placeholder="Nombre de la empresa" class="form-control" name="nombreEmpresa" id="nombreEmpresa" required>
               </div>
             </div>

             <div class="form-group">
                  <label class="col-sm-4 control-label" for="name">Telefono</label>
                  <div class="col-sm-8">
                   <input type="number" value="####-##-##" placeholder="Telefono" class="form-control" name="telefono1" id="telefono" required>
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

    <label class="col-sm-4 control-label" for="name" id="calificacion">Calificación </label>
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

                <label class="col-sm-4 control-label" for="name">Tipo de cliente</label>
                  <div class="col-sm-8">
                   <SELECT NAME="selTipoCliente" SIZE=1 >
                <OPTION VALUE="1">TIENDA</OPTION>
                <OPTION VALUE="2">CALLE</OPTION>


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



  <!-- Abono -->
    <div id="abonos">
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
                  <SELECT NAME="selCombo"  SIZE=1 onchange="fetch_select2(this.value, <?php echo $_SESSION['idTipoClientes'];?>);">
                <OPTION VALUE="1">LUNES</OPTION>
                <OPTION VALUE="2">MARTES</OPTION>
                <OPTION VALUE="3">MIERCOLES</OPTION>
                <OPTION VALUE="4">JUEVES</OPTION>
<OPTION VALUE="5">VIERNES</OPTION>
<OPTION VALUE="6">SÁBADO</OPTION>
<OPTION VALUE="7">DOMINGO</OPTION>
<OPTION VALUE="8" >QUINCENA</OPTION>
<OPTION VALUE="9" >MENSUAL</OPTION>
<OPTION VALUE="0" >INDEFINIDO</OPTION>
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
                     <SELECT id="selComboCreditos" NAME="selComboCreditos" SIZE=1
                     onfocus="load_Client_Information(this.value);" onchange="load_Client_Information(this.value);" required>






<?php include('connect_db.php');
include('consultas.php');


$dayNum = date("w");
$idTipoClientes=  $_SESSION['idTipoClientes'];




if ($_SESSION['idArea']==2)
   {


                $query = mysqli_query($link,$ConsultaCreditosPorNombreYAreaGabriel);
  }
else
{


                  $query = mysqli_query($link,$ConsultaCreditosPorNombreYAreaGabriel);
  }
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
        <label for="tipo_pago" class="col-sm-4 control-label">Forma de pago</label>
        <div class="col-sm-8">
          <select name="tipo_pago" id="tipo_pago">
            <option value="0">Efectivo</option>
            <option value="1">Tarjeta</option>
            <option value="2">Deposito bancario</option>
          </select>
        </div>
      </div>
      <div class="form-group">
                  <label class="col-sm-4 control-label" for="message">Abono</label>
                  <div class="col-sm-8">
                    <textarea placeholder="Aqui el abono" class="form-control" name="abono" id="abono" rows="1" required></textarea>
                  </div>
                </div>



                <div class="form-group">
                  <label class="col-sm-4 control-label" for="message">Observación</label>
                  <div class="col-sm-8">
                    <textarea placeholder="Digite alguna observación" class="form-control" name="message" id="message" rows="5"></textarea>
                  </div>
                </div>



<div class="form-group">
                  <label class="col-sm-4 control-label" for="name">Siguiente dia de pago</label>
                  <div class="col-sm-8">
                   <SELECT NAME="selComboSigDiaPago" id="selComboSigDiaPago" value="6">SIZE=1 >
                <OPTION VALUE="1">LUNES</OPTION>
                <OPTION VALUE="2">MARTES</OPTION>
                <OPTION VALUE="3">MIERCOLES</OPTION>
                <OPTION VALUE="4">JUEVES</OPTION>
<OPTION VALUE="5">VIERNES</OPTION>
<OPTION VALUE="6"> >SÁBADO</OPTION>
OPTION VALUE="7">DOMINGO</OPTION>
<OPTION VALUE="8" >QUINCENA</OPTION>
<OPTION VALUE="9" >MENSUAL</OPTION>
<OPTION VALUE="0" >INDEFINIDO</OPTION>
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
    <!-- /Abono -->










  <!-- Abono a proveedores-->
    <div id="abonosProve">
      <div class="container">
        <div class="row">
    <div class="col-md-4 col-md-offset-4 text-center">
            <h2>Registro de abonos a proveedores</h2>

      <hr>
          </div>
          <div class="col-md-5 col-md-offset-3">
      <!-- contact form starts -->
            <form method="POST" action="registroAbono.php" id="contact-form" class="form-horizontal">
      <fieldset>


<div class="form-group">
                  <label class="col-sm-4 control-label" for="name">Dia de pago</label>
                  <div class="col-sm-8">
                  <SELECT NAME="selCombo"  SIZE=1 onchange="fetch_select2(this.value, <?php echo $_SESSION['idTipoClientes'];?>);">
                <OPTION VALUE="1">LUNES</OPTION>
                <OPTION VALUE="2">MARTES</OPTION>
                <OPTION VALUE="3">MIERCOLES</OPTION>
                <OPTION VALUE="4">JUEVES</OPTION>
<OPTION VALUE="5">VIERNES</OPTION>
<OPTION VALUE="6">SÁBADO</OPTION>
<OPTION VALUE="7">DOMINGO</OPTION>
<OPTION VALUE="8" >QUINCENA</OPTION>
<OPTION VALUE="9" >MENSUAL</OPTION>
<OPTION VALUE="0" >INDEFINIDO</OPTION>
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
                     <SELECT id="selComboCreditos" NAME="selComboCreditos" SIZE=1
                     onfocus="load_Client_InformationCreditosProveedores(this.value);" onchange="load_Client_InformationCreditosProveedores(this.value);" required>






<?php include('connect_db.php');
include('consultas.php');


$dayNum = date("w");
$idTipoClientes=  $_SESSION['idTipoClientes'];




if ($_SESSION['idArea']==2)
   {


                $query = mysqli_query($link,$ConsultaCreditosPorNombreYAreaGabrielProveedores);
  }
else
{


                  $query = mysqli_query($link,$ConsultaCreditosPorNombreYAreaGabrielProveedores);
  }
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
                <div id="divDatosCLienteCreditosProveedores">

                </div>
     <div class="form-group">
        <label for="tipo_pago" class="col-sm-4 control-label">Forma de pago</label>
        <div class="col-sm-8">
          <select name="tipo_pago" id="tipo_pago">
            <option value="0">Efectivo</option>
            <option value="1">Tarjeta</option>
            <option value="2">Deposito bancario</option>
          </select>
        </div>
      </div>
      <div class="form-group">
                  <label class="col-sm-4 control-label" for="message">Abono</label>
                  <div class="col-sm-8">
                    <textarea placeholder="Aqui el abono" class="form-control" name="abono" id="abono" rows="1" required></textarea>
                  </div>
                </div>



                <div class="form-group">
                  <label class="col-sm-4 control-label" for="message">Observación</label>
                  <div class="col-sm-8">
                    <textarea placeholder="Digite alguna observación" class="form-control" name="message" id="message" rows="5"></textarea>
                  </div>
                </div>



<div class="form-group">
                  <label class="col-sm-4 control-label" for="name">Siguiente dia de pago</label>
                  <div class="col-sm-8">
                   <SELECT NAME="selComboSigDiaPago" id="selComboSigDiaPago" value="6">SIZE=1 >
                <OPTION VALUE="1">LUNES</OPTION>
                <OPTION VALUE="2">MARTES</OPTION>
                <OPTION VALUE="3">MIERCOLES</OPTION>
                <OPTION VALUE="4">JUEVES</OPTION>
<OPTION VALUE="5">VIERNES</OPTION>
<OPTION VALUE="6"> >SÁBADO</OPTION>
OPTION VALUE="7">DOMINGO</OPTION>
<OPTION VALUE="8" >QUINCENA</OPTION>
<OPTION VALUE="9" >MENSUAL</OPTION>
<OPTION VALUE="0" >INDEFINIDO</OPTION>
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
    <!-- /Abono -->












  <!-- Actualizacion de datos -->
    <div id="cuota">
      <div class="container">
        <div class="row">
    <div class="col-md-4 col-md-offset-4 text-center">
            <h2>Actualizacion de Cuota y datos de cliente</h2>
      <hr>
          </div>
          <div class="col-md-5 col-md-offset-3">
      <!-- contact form starts -->
            <form method="POST" action="actualizacionCuota.php" id="contact-form" class="form-horizontal">
      <fieldset>


<div class="form-group">
                  <label class="col-sm-4 control-label" for="name">Dia de pago</label>
                  <div class="col-sm-8">
                  <SELECT NAME="selCombo"  SIZE=1 onchange="fetch_select(this.value);">
                <OPTION VALUE="1">LUNES</OPTION>
                <OPTION VALUE="2">MARTES</OPTION>
                <OPTION VALUE="3">MIERCOLES</OPTION>
                <OPTION VALUE="4">JUEVES</OPTION>
<OPTION VALUE="5">VIERNES</OPTION>
<OPTION VALUE="6">SÁBADO</OPTION>
<OPTION VALUE="7">DOMINGO</OPTION>
<OPTION VALUE="8" >QUINCENA</OPTION>
<OPTION VALUE="9" >MENSUAL</OPTION>
<OPTION VALUE="0" >INDEFINIDO</OPTION>
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
                     <SELECT id="selComboCreditos2" NAME="selComboCreditos2" SIZE=1
                     onchange="load_Client_Information2(this.value);" required>






<?php include('connect_db.php');
include ('consultas.php');

$dayNum = date("w");
$idTipoClientes=  $_SESSION['idTipoClientes'];



                $query = mysqli_query($link,$ConsultaCreditosPorNombre);


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
                <div id="divDatosCLiente2">

                </div>




                  <label class="col-sm-4 control-label" for="name">Siguiente dia de pago</label>
                  <div class="col-sm-8">
                   <SELECT NAME="selComboSigDiaPago2" id="selComboSigDiaPago2" value="6">SIZE=1 >
                <OPTION VALUE="1">LUNES</OPTION>
                <OPTION VALUE="2">MARTES</OPTION>
                <OPTION VALUE="3">MIERCOLES</OPTION>
                <OPTION VALUE="4">JUEVES</OPTION>
<OPTION VALUE="5">VIERNES</OPTION>
<OPTION VALUE="6">SÁBADO</OPTION>
OPTION VALUE="7">DOMINGO</OPTION>
<OPTION VALUE="8" >QUINCENA</OPTION>
<OPTION VALUE="9" >MENSUAL</OPTION>
<OPTION VALUE="0" >INDEFINIDO</OPTION>
                </SELECT>



                  </div>
                </div>





                <div class="col-sm-offset-4 col-sm-8">
                  <button type="submit" class="btn btn-success">Actualizar cuota y dia de pago</button>
                  <button type="reset" class="btn btn-primary">Cancelar</button>
                </div>



              <div class="col-sm-offset-4 col-sm-8">
                <button type="submit" id="btnAnularCredito" class="btn btn-primary">Anular credito</button>
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

<!--  -->

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
  function load_Client_InformationCreditosProveedores(idCredito)
{

   $.ajax({
     type: 'post',
     url: 'functionClienteContacto.php',
     data: {
       idCredito:idCredito
     },
     success: function (response) {

       document.getElementById("divDatosCLienteCreditosProveedores").innerHTML=response;

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
  $dias = (strtotime($fecha_i)-strtotime($fecha_f))/86400;
  $dias   = abs($dias); $dias = floor($dias);
  return $dias;
}
</script>

<script>
function semanas_transcurridos($fecha_i,$fecha_f)
{
  $dias = (strtotime($fecha_i)-strtotime($fecha_f))/86400;
  $dias   = abs($dias); $dias = floor($dias);
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
