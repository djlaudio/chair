<div class="row">
	<div class="col-md-12">
	<h1>Venta</h1>
	<p><b>Buscar producto por nombre o por codigo:</b></p>
		<form id="searchp">
		<div class="row">
			<div class="col-md-6">
				<input type="hidden" name="view" value="sell">
				<input type="text" id="product_code" name="product" class="form-control">
			</div>
			<div class="col-md-3">
			<button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-search"></i> Buscar</button>
			</div>
		</div>
		</form>
	</div>
<div id="show_search_results"></div>
<script>
//jQuery.noConflict();

$(document).ready(function(){
	$("#searchp").on("submit",function(e){
		e.preventDefault();

		$.get("./?action=searchproduct",$("#searchp").serialize(),function(data){
			$("#show_search_results").html(data);
		});
		$("#product_code").val("");

	});
	});

$(document).ready(function(){
    $("#product_code").keydown(function(e){
        if(e.which==17 || e.which==74){
            e.preventDefault();
        }else{
            console.log(e.which);
        }
    })
});

$(document).ready(function(){
    $("#iv").on('change', function(){

/* Lo siguiente es el valor del total menos el descuento */
      $total_iv=$("#total").val()- $("#discount").val();
        
        if (this.value=="0")

        	{

             
        		$("#money").val($total_iv) ;
          
        		}
        		else


        			{

                $total_iv=$total_iv * 1.13;

        			$("#money").val($total_iv);
              
          }


       
    

    });
});


$(document).ready(function(){
    $("#percDiscount").on('change', function(){



      $total_ter=$("#total").val();
    
        if (this.value>"0")
          {

            $discount_ter=$total_ter*this.value/100;
           
            $("#discount").val($discount_ter);
            $("#money").val($total_ter-$discount_ter);

           
            }
            else
              {
              $("#discount").val(0);
              $("#money").val($total_ter);

          }


       
       
$total_iv=$("#total").val()- $("#discount").val();
        
        if ($("#iv").val()=="0")

          {

             
            $("#money").val($total_iv) ;
          
            }
            else


              {

                $total_iv=$total_iv * 1.13;

              $("#money").val($total_iv);
              
          }








    });
});


</script>

<?php if(isset($_SESSION["errors"])):?>
<h2>Errores</h2>
<p></p>
<table class="table table-bordered table-hover">
<tr class="danger">
	<th>Codigo</th>
	<th>Producto</th>
	<th>Mensaje</th>
</tr>
<?php foreach ($_SESSION["errors"]  as $error):
$product = ProductData::getById($error["product_id"]);
?>
<tr class="danger">
	<td><?php echo $product->barcode; ?></td>
	<td><?php echo $product->name; ?></td>
	<td><b><?php echo $error["message"]; ?></b></td>
</tr>

<?php endforeach; ?>
</table>
<?php
unset($_SESSION["errors"]);
 endif; ?>


<!--- Carrito de compras :) -->
<?php if(isset($_SESSION["cart"])):
$total = 0;
?>
<h2>Lista de venta</h2>
<table class="table table-bordered table-hover">
<thead>
	<th style="width:30px;">Codigo</th>
	<th style="width:30px;">Cantidad</th>
	<th style="width:30px;">Unidad</th>
	<th>Producto</th>
	<th style="width:30px;">Precio Unitario</th>
	<th style="width:30px;">Precio Total</th>
	<th ></th>
</thead>
<?php foreach($_SESSION["cart"] as $p):
$product = ProductData::getById($p["product_id"]);
?>
<tr >
	<td><?php echo $product->barcode; ?></td>
	<td ><?php echo $p["q"]; ?></td>
	<td><?php echo $product->unit; ?></td>
	<td><?php echo $product->name; ?></td>
	<td><b>₡ <?php echo number_format($product->price_out); ?></b></td>
	<td><b>₡ <?php  $pt = $product->price_out*$p["q"]; $total +=$pt; echo number_format($pt); ?></b></td>
	<td style="width:30px;"><a href="index.php?view=clearcart&product_id=<?php echo $product->id; ?>" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i> Cancelar</a></td>
</tr>

<?php endforeach; ?>
</table>
<form method="post" class="form-horizontal" id="processsell" action="index.php?view=processsell">
<h2>Resumen</h2>
<div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Cliente</label>
    <div class="col-lg-10">
    <?php
$clients = PersonData::getClients();
    ?>
    <select name="client_id" class="form-control">
   
    <?php foreach($clients as $client):?>
    	<option value="<?php echo $client->id;?>"><?php echo $client->name." ".$client->lastname ." ".$client->nameBusiness ;?></option>
    <?php endforeach;?>
    	</select>
    </div>
  </div>

  <div class="form-group">
    <label for="iv" class="col-lg-2 control-label">Impuesto de venta</label>
    <div class="col-lg-10">
    <select name="iv" id="iv" class="form-control">
    	<option value="0">Sin IV</option>

		<option value="1">Con IV</option>

    	</select>
    </div>
  </div>

<div class="form-group">
    <label for="termino_id" class="col-lg-2 control-label">Término de pago</label>
    <div class="col-lg-10">
    <select name="termino_id" id="termino_id" class="form-control">
    	<option value="135">Contado</option>
		<option value="137">Crédito 30 dias</option>
		<option value="141">Crédito 45 dias</option>
		<option value="143">Crédito 60 dias</option>

    	</select>
    </div>
  </div>

 <div class="form-group">
    <label for="tipo_pago" class="col-lg-2 control-label">Tipo de pago</label>
    <div class="col-lg-10">
    <select name="tipo_pago" id="tipo_pago" class="form-control">
    	<option value="0">Efectivo</option>
		<option value="1">Tarjeta</option>
		<option value="2">Deposito bancario</option>
    	</select>
    </div>
  </div>

 <div class="form-group">
    <label for="dia_pago" class="col-lg-2 control-label">Día de pago</label>
    <div class="col-lg-10">
	    <select name="dia_pago" id="dia_pago" class="form-control">
	    	<option value="1">Lunes</option>
			<option value="2">Martes</option>
			<option value="3">Miércoles</option>
			<option value="4">Jueves</option>
			<option value="5">Viernes</option>
			<option value="6">Sábado</option>
			<option value="7">Domingo</option>
			<option value="8">Quicena</option>
			<option value="9">Mensual</option>
			<option value="9">45 dias</option>
			<option value="9">60 dias</option>
	    </select>
    </div>
  </div>

<div class="form-group">
    <label for="cuota" class="col-lg-2 control-label">Cuota</label>
    <div class="col-lg-10">
      <input type="text" name="cuota" class="form-control" required value="0" id="cuota" placeholder="Cuota">
    </div>
  </div>

<div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Descuento</label>
    <div class="col-lg-10">
      <input id="percDiscount" type="number" value="0" min="0" max="20"/><input type="text" name="discount" class="form-control" required value="0"  id="discount" placeholder="Descuento">
    </div>
  </div>
 <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Efectivo</label>
    <div class="col-lg-10">
      <input type="text" name="money" value="<?php echo $total; ?>" required class="form-control" id="money" placeholder="Efectivo">
    </div>
  </div>
      <input type="hidden" name="total" value="<?php echo $total; ?>" class="form-control" 
      id="total" placeholder="Total">

  <div class="row">
<div class="col-md-6 col-md-offset-6">
<table class="table table-bordered">
<tr>
	<td><p>Subtotal</p></td>
	<td><p><b>₡ <?php echo number_format($total); ?></b></p></td>
</tr>
<tr>
	<td><p>IV</p></td>
	<td><p><b>₡ <?php echo number_format($total*.13); ?></b></p></td>
</tr>
<tr>
	<td><p>Total</p></td>
	<td><p><b>₡ <?php echo number_format($total+ ($total*.13)); ?></b></p></td>
</tr>

</table>
  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <div class="checkbox">
        <label>
          <input name="is_oficial" type="hidden" value="1">
        </label>
      </div>
    </div>
  </div>
<div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <div class="checkbox">
        <label>
		<a href="index.php?view=clearcart" class="btn btn-lg btn-danger"><i class="glyphicon glyphicon-remove"></i> Cancelar</a>
        <button class="btn btn-lg btn-primary"><i class="glyphicon glyphicon-usd"></i><i class="glyphicon glyphicon-usd"></i> Finalizar Venta</button>
        </label>
      </div>
    </div>
  </div>
</form>
<script>
	$("#processsell").submit(function(e){
		discount = $("#discount").val();

/*if ($("#iv").val()===0)
{
valorIV=0;
}else{
valorIV=<?php echo $total;?>*0.13;
	}
granTotal=($total-discount+valorIV); 

		money = $("#money").val();
		if(money<(<?php echo $total;?>-granTotal)){
			alert("No se puede efectuar la operacion (No tiene suficiente dinero)");
			e.preventDefault();
		}else{
			if(discount==""){ discount=0;}
			go = confirm("Cambio: $"+(money-(granTotal) ) );
			if(go){}
				else{e.preventDefault();}
		}
	});   */

</script>
</div>
</div>

<br><br><br><br><br>
<?php endif; ?>

</div>
