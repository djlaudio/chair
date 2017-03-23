<div class="row">
	<div class="col-md-12">
<div class="btn-group pull-right">
	<a href="index.php?view=newclient" class="btn btn-default"><i class='fa fa-smile-o'></i> Nuevo Cliente</a>
<div class="btn-group pull-right">
  
</div>
</div>
		<h1>Abonos</h1>
<br>
		<?php

		$users = AbonoData::getAll();
		if(count($users)>0){
			// si hay usuarios
			?>

			<table class="table table-bordered table-hover">
			<thead>
			<th>Id Abono</th>
			<th>Fecha</th>
			<th>Cantidad</th>
			<th>Id Credito</th>
			<th></th>
			</thead>
			<?php
			foreach($users as $user){
				?>
				<tr>
				<td><?php echo $user->idAbono; ?></td>
				<td><?php echo $user->fechaAbono; ?></td>
				<td><?php echo $user->cantidadAbono; ?></td>
				<td><?php echo $user->idCreditoAbono; ?></td>
				<td style="width:130px;">
				<a href="index.php?view=editclient&id=<?php echo $user->id;?>" class="btn btn-warning btn-xs">Editar</a>
				<a href="index.php?view=delclient&id=<?php echo $user->id;?>" class="btn btn-danger btn-xs">Eliminar</a>
				</td>
				</tr>
				<?php

			}



		}else{
			echo "<p class='alert alert-danger'>No hay clientes</p>";
		}


		?>


	</div>
</div>