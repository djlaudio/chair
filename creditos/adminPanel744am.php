<!DOCTYPE html>






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
      <li><a href="welcome.php#top"><i class="service-icon fa fa-home"></i>&nbsp;Inicio</a></li>
      <li><a href="../"><i class="service-icon fa fa-laptop"></i>&nbsp;Ventas</a></li>

        <li><a href="welcome.php#abonos"><i class="service-icon fa fa-envelope"></i>&nbsp;Registro de abonos</a></li>
<li><a href="welcome.php#cuota"><i class="service-icon fa fa-envelope"></i>&nbsp;Actualizacion de cuota</a></li>
<li><a href="abonosCuota.php#anulacioncuota"><i class="service-icon fa fa-envelope"></i>&nbsp;Anulacion de cuota</a></li>
<li><a href="moduloClientesLimpios.php#clientesaldia"><i class="service-icon fa fa-envelope"></i>&nbsp;Clientes limpios</a></li>
<li><a href="#regclients"><i class="service-icon fa fa-envelope"></i>&nbsp;Panel de administrador</a></li>
<li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-square-o-down"></i> Reportes <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="moduloClientesAtrasados.php#semana"><i class="service-icon fa fa-envelope"></i>&nbsp;Clientes atrasados</a></li>
                <li><a href="moduloClientesAtrasadosCompu.php#semana1"><i class="service-icon fa fa-envelope"></i>&nbsp;Clientes atrasados Atrasados</a></li>
              </ul>
            </li>




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
            <p class="lead">YOUNG SPIRIT, EXTREME LIFESTYLE</p>
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
                <img class="horizontal" src="img/portraitx-smx.jpg" alt="placeholder">
                <span class="overlay"><span class="valign"></span><span class="title">Portrait 1</span></span>
              </a>
            </li>
            <li class="col-md-4 col-sm-4 col-xs-12 mix portraits" data-cat="graphics">
                <a data-toggle="modal" data-target="#portrait2" class="mix-cover">
                  <img class="horizontal" src="img/portrait2x.jpg" alt="placeholder">
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
                  <img class="horizontal" src="img/portrait3x.jpg" alt="placeholder">
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
                  <img class="horizontal" src="img/naturex.jpg" alt="placeholder">
                  <span class="overlay"><span class="valign"></span><span class="title">Nature</span></span>
                </a>
            </li>
            <li class="col-md-4 col-sm-4 col-xs-12 mix portraits" data-cat="portrait">
                <a data-toggle="modal" data-target="#portrait4" class="mix-cover green">
                  <img class="vertical" src="img/portrait4x.jpg" alt="portrait 4">
                  <span class="overlay"><span class="valign"></span><span class="title">Portrait 4</span></span>
                </a>
            </li>
        <li class="col-md-4 col-sm-4 col-xs-12 mix bw nature all" data-cat="portrait">
                <a data-toggle="modal" data-target="#forest" class="mix-cover green">
                  <img class="vertical" src="img/forestx.jpg" alt="Forest">
                   <span class="overlay"><span class="valign"></span><span class="title">Forest</span></span>
                </a>
            </li>
        <li class="col-md-4 col-sm-4 col-xs-12 mix bw nature all" data-cat="bw">
                <a data-toggle="modal" data-target="#bw1" class="mix-cover green">
                  <img class="vertical" src="img/bw1x.jpg" alt="Black and White">
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
       <img class="thumbnail" alt="Portrait1" src="img/portrait1x.jpg"/>
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
       <img class="thumbnail" alt="Portrait1" src="img/portrait2x.jpg"/>
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
       <img class="thumbnail" alt="Portrait1" src="img/portrait3x.jpg"/>
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
       <img class="thumbnail" alt="Portrait1" src="img/portrait4x.jpg"/>
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
       <img class="thumbnail" alt="Portrait1" src="img/portrait5x.jpg"/>
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
       <img class="thumbnail" alt="nature" src="img/naturex.jpg"/>
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
       <img class="thumbnail" alt="nature" src="img/nature1x.jpg"/>
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
       <img class="thumbnail" alt="forest" src="img/forestx.jpg"/>
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
       <img class="thumbnail" alt="forest" src="img/bw1x.jpg"/>
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
    <div id="regclients">
      <div class="container">
        <div class="row">
    <div class="col-md-4 col-md-offset-4 text-center">
            <h2>Registro de Usuarios</h2>
      <hr>
          </div>
          <div class="col-md-5 col-md-offset-3">
      <!-- contact form starts -->
            <form action="registroUsuario.php" id="contact-form" class="form-horizontal" method="post">
      <fieldset>


<div class="form-group">
                  <label class="col-sm-4 control-label" for="name">Cédula</label>
                  <div class="col-sm-8">
                   <input type="number" value="####-##-##" placeholder="Cedula" class="form-control" name="cedula" id="cédula" required>
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

    <label class="col-sm-4 control-label" for="name">Tipo de usuario</label>
                  <div class="col-sm-8">
                   <SELECT NAME="selRol" SIZE=1 >

                <OPTION VALUE="3">Vendedor</OPTION>
                <OPTION VALUE="2">Cobrador</OPTION>
<OPTION VALUE="1">Administrador</OPTION>
                </SELECT>
                  </div>
                </div>


 <div class="form-group">
                  <label class="col-sm-4 control-label" for="usuario" color="white">Nombre de usuario</label>
                  <div class="col-sm-8">
                   <input type="text"  placeholder="Nombre De Usuario" class="form-control" name="usuario" id="usuario" required>
               </div>
             </div>

<div class="form-group">
                  <label class="col-sm-4 control-label" for="usuario" color="white">Password</label>
                  <div class="col-sm-8">
                   <input type="text"  placeholder="Password" class="form-control" name="pass" id="pass" required>
               </div>
             </div>


<div class="form-group">
                  <label class="col-sm-4 control-label" for="usuario" color="white">Confirma password</label>
                  <div class="col-sm-8">
                   <input type="text"  placeholder="Password" class="form-control" name="repPass" id="repPass" required>
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




  <!-- Abono a proveedores-->
    <div id="abonos">
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
                     onchange="load_Client_Information(this.value);" required>






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








  <!-- Actualizacion de datos -->
  <?php include('functionMontoAtrasado.php');?>
    <div id="cierreCaja">
      <div class="container">
        <div class="row">
    <div class="col-md-4 col-md-offset-4 text-center">
            <h2>Cierre de caja (Efectivo)</h2>
      <hr>
          </div>
          <div class="col-md-5 col-md-offset-3">
      <!-- contact form starts -->
            <form method="POST" action="llamadoACaja.php" id="contact-form" class="form-horizontal">
      <fieldset>


<div class="form-group">
                  <label class="col-sm-4 control-label" for="name">Monto atrasado semanal<br>
                  </label>
                  <div class="col-sm-8">

                    <input type="number"   class="form-control" name="montoAtrasadoSemanal" id="montoAtrasadoSemanal" value="<?php echo totalMontoAtrasadoSemanal(); ?>"  required>


                  </div>
            </div>


<div class="form-group">
                  <label class="col-sm-4 control-label" for="name">Monto atrasado quincenal<br>
                  </label>
                  <div class="col-sm-8">
 <?php include('functionMontoAtrasado.php');?>
                    <input type="number"   class="form-control" name="montoQuincenal" id="montoQuincenal" value="<?php echo totalMontoAtrasadoQuincenal(); ?>"  required>


                  </div>
            </div>


<div class="form-group">
                  <label class="col-sm-4 control-label" for="name">Monto atrasado mensual<br>
                  </label>
                  <div class="col-sm-8">

                    <input type="number"   class="form-control" name="montoAtrasadoMensual" id="montoAtrasadoMensual" value="<?php echo totalMontoAtrasadoMensual(); ?>"  required>


                  </div>
            </div>



<div class="form-group">
                  <label class="col-sm-4 control-label" for="name">Monto inicial<br>
                  </label>
                  <div class="col-sm-8">
                    <input type="number"   class="form-control" name="montoInicial" id="montoInicial"  value="0"   required>
                    <script>

                  </div>
            </div>


                <div class="form-group">
                  <label class="col-sm-4 control-label" for="name">+ Ventas<br>
                  </label>
                  <div class="col-sm-8">

                    <input type="number"   class="form-control" name="ventasEfectivo" id="ventasefectivo"   required>
                    <script>
   function valueselect(sel) {
      var value = sel.options[sel.selectedIndex].value;
      window.location.href = "channelinformation.html?selected="+value;
   }
</script>
              </div>
            </div>


 <!--
                  Para cargar los compos que muestran la informacion
                  del cliente de acuerdo al credito seleccionado
                -->
                <div id="divDatosCLiente">

                </div>



 <div class="form-group">
              <label class="col-sm-4 control-label" for="message">+ Ventas en efectivo</label>
                  <div class="col-sm-8">
<?php include('functionMontoAtrasado.php');?>
                    <input type="number"   class="form-control" name="ventasEfectivo" id="ventasEfectivo" value="<?php echo totalVentasUnboxed(); ?>" required>
                  </div>
            </div>



 <div class="form-group">
              <label class="col-sm-4 control-label" for="message">- Gastos</label>
                  <div class="col-sm-8">
                    <input type="number"   class="form-control" name="gastosEfectivo" id="gastosEfectivo" value="0" required>
                  </div>
            </div>

               <div class="form-group">
                  <label class="col-sm-4 control-label" for="name">- Apartado</label>
                  <div class="col-sm-8">
                    <input type="number"   class="form-control" name="apartadoEfectivo" id="apartado" value="0" required>
                  </div>
            </div>

<div class="form-group">
                  <label class="col-sm-4 control-label" for="name">= Efectivo en caja<br>
                  </label>
                  <div class="col-sm-8">
                    <input type="number"   class="form-control" name="fectivoCaja" id="efectivoCaja" value="0"  required>
                    <script>
   function valueselect(sel) {
      var value = sel.options[sel.selectedIndex].value;
      window.location.href = "channelinformation.html?selected="+value;
   }
</script>
              </div>
            </div>




 <div class="form-group">

                  <label class="col-sm-4 control-label" for="message">Comentarios de cierre</label>
                  <div class="col-sm-8">
                    <textarea placeholder="Comentarios del cierre" class="form-control" name="observacionCierre" id="observacionCierre"   rows="1"></textarea>
                  </div>
                </div>




<div class="form-group">
  <div class="col-sm-8"></div>
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

















    <!-- Credito -->
    <div id="pagosDia">
      <div class="container">
        <div class="row">
    <div class="col-md-4 col-md-offset-4 text-center">
            <h2>Vista de pagos de un día</h2>
      <hr>
          </div>
          <div class="col-md-5 col-md-offset-3">
      <!-- contact form starts -->
            <form  id="contact-form" class="form-horizontal">
      <fieldset>
                <div class="form-group">
                  <label class="col-sm-4 control-label" for="name">Recibos</label>
                  <div class="col-sm-8">
                   <SELECT NAME="selClienteCombo" SIZE=1 >

                <?php include('connect_db.php');
include ('consultas.php');

                $query = mysqli_query($link,$detalleAbonosUnDia);
                while($row = mysqli_fetch_assoc($query)){?>
                <option value=" <?php echo $row['a.idAbono'] ?> "><?php echo $row['credit']; ?></option>
                <?php } ?>


                </SELECT>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-4 control-label" for="email">Monto Total Del Día:</label>
                  <div class="col-sm-8">


               <SELECT NAME="selClienteCombo" SIZE=1 >

                  <?php include('connect_db.php');

                $query = mysqli_query($link,$totalAbonosDia);

                while($row = mysqli_fetch_assoc($query)){?>
                <option value=" <?php echo $row['a.idCredito'] ?> "><?php echo $row['total']; ?></option>
                <?php } ?>


                </SELECT>

                  </div>
                </div>









            </fieldset>
            </form>

        <!-- contact form ends -->
          </div>
        </div>
      </div>
    </div>
    <!-- /Contact -->


  <!-- Abono -->
    <div id="abonosadpanel">
      <div class="container">
        <div class="row">
    <div class="col-md-4 col-md-offset-4 text-center">
            <h2>Total de recibos por vendedor</h2>
      <hr>
          </div>
          <div class="col-md-5 col-md-offset-3">
      <!-- contact form starts -->
            <form id="contact-form" class="form-horizontal">
      <fieldset>


<div class="form-group">
                  <label class="col-sm-4 control-label" for="name">Recibos de abonos por cobrador - Dia de pago</label>
                  <div class="col-sm-8">
                     <SELECT NAME="selCombo" SIZE=1 required>
                  <?php include('connect_db.php');
                $query = mysqli_query($link,"SELECT CONCAT('Cobrador: ', u.usuario,  ' Total: ', SUM( a.cantidadAbono ) ) AS credit, u.idUsuario
FROM abono a
INNER JOIN credito c ON a.idCreditoAbono = c.idCredito
INNER JOIN usuario u ON u.idUsuario = a.idCobrador   where a.fechaAbono>= CURRENT_DATE AND a.fechaAbono<CURRENT_DATE+3

GROUP BY u.idUsuario");
                while($row = mysqli_fetch_assoc($query)){?>
                <option value=" <?php echo $row['u,idUsuario'] ?> "><?php echo $row['credit']; ?></option>
                <?php } ?>

                </SELECT>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-4 control-label" for="name">Total de abonos de todos</label>
                  <div class="col-sm-8">
                     <SELECT NAME="selCombo" SIZE=1 required>
                  <?php include('connect_db.php');
                $query = mysqli_query($link,"SELECT SUM( cantidadAbono ) AS total
FROM abono  where fechaAbono>= CURRENT_DATE AND fechaAbono<CURRENT_DATE+3
 ");
                while($row = mysqli_fetch_assoc($query)){?>
                <option value=" <?php echo $row['idCobrador'] ?> "><?php echo $row['total']; ?></option>
                <?php } ?>

                </SELECT>
                  </div>
                </div>










            </fieldset>
            </form>

        <!-- contact form ends -->
          </div>
        </div>
      </div>

    <!-- /Abono -->





<!-- Actualizacion de datos -->




<!-- /Actualizacion de datos -->
















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
function fetch_select(val)
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
     { src:'./img/nature1x.jpg', fade:2000 },
   { src:'./img/bw1x.jpg', fade:2000 },
    { src:'./img/portrait1x.jpg', fade:2000 },
   { src:'./img/portrait5x.jpg', fade:2000 },
    { src:'./img/portraitx2.jpg', fade:2000 },
    { src:'./img/portrait3x.jpg', fade:2000 },
   { src:'./img/portrait4x.jpg', fade:2000 },
     { src:'./img/forestx.jpg', fade:2000 }

  ]
})('overlay', {
src:'./img/overlayx.png'
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



<script type="text/javascript">
  $( "#btnCalcularCierre" ).click(function() {

    $.ajax({
     type: 'post',
     url: 'llamadoACaja.php',
     success: function (response) {
       alert(response);
     }
   });

});
</script>

<script type="text/javascript">
  $( "#btnEnviarMasivoLimpios" ).click(function() {

    $.ajax({
     type: 'post',
     url: 'functionEnviarMSN.php',
     success: function (response) {
       alert(response);
     }
   });

});
</script>

  <script>
    function cargaDatosCliente(sel) {
    var value = sel.value;

  document.getElementById('cel').innerHTML =  "<a href='tel: " + value + "'> " + value + "</a>";





}
</script>


<!-- /Navbar-->

  </body>

</html>
