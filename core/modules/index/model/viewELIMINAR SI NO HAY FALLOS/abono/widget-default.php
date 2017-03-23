<div class="row">
	<div class="col-md-12">
<div class="btn-group pull-right">
	<a href="index.php?view=newclient" class="btn btn-default"><i class='fa fa-smile-o'></i> -Nuevo abono-</a>
<div class="btn-group pull-right">
  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
    <i class="fa fa-download"></i> Descargar <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" role="menu">
    
 <li><a href="report/abonos-word.php?id=<?php echo $_GET["id"];?>cr=<?php echo $_GET["id"];?>">Word 2007 (.docx)</a></li>

<li><a href="report/abonos-word.php?id=20cr=20>">Word 2007 (.docx)</a></li>

<li><a href="#" id="report">Word 2007 (.docx)</a></li>

</ul>
</div>
</div>

<?php
$creditos = CreditoData::getAll();
?>
<section class="content">
<div class="row">
	<div class="col-md-12">
	<h1>Créditos</h1>

<form>
<input type="hidden" name="view" value="sellreports">
<input type="hidden" name="idCred" id="idCred" value="">
<div class="row">
<div class="col-md-3">

<select id="creditos" class="form-control">
	<option value="">--  TODOS --</option>
	<?php foreach($creditos as $p):?>
	<option value="<?php echo $p->idCredito;?>"><?php echo $p->descripcion;?></option>
	<?php endforeach; ?>
</select>

</div>
</div>
</form>


<div class="row">
	<div class="col-md-12">
		<h1>Abonos</h1>
<br>

<div id="tabAbonos"></div>



	</div>
</div>

<script type="text/javascript">
 $("#creditos").change(function(){
     var productId = $(this).val();
     if (productId != '') {
         $.ajax({
       type: 'post',
       url: 'core/modules/index/view/abono/function.php',
       data: {idCredito: productId},
       success: function (response) {
         $('#tabAbonos').html(response);
       }
     });
                 
     } 
     else {
         alert("Please Check the deconstructed Images!");
     }
    });
</script>


<script>
$( "#report" ).click(function() {
  var idCredito = $( "#creditos" ).val();


  location.href = "http://www.marcasgenuinas.com/inventario/report/abonos-word.php?id=" + $( "#creditos" ).val();
});
</script>
