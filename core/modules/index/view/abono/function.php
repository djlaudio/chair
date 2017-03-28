		<?php
			$asd = $_POST['idCredito'];
			$host = 'localhost';
            $user = 'root';
            $pass = '';
            $html = "";
           
            $conn = mysqli_connect("localhost","fastness_ventas","ventas2016","fastness_wtjjventas2016");
        
            $select=mysqli_query($conn, "select * from abono where idCreditoAbono= ".$asd);

            $html .= '<table class="table table-bordered table-hover">';
			$html .= "<thead>";
			$html .= "<th>Id Abono</th>";
			$html .= "<th>Fecha</th>";
			$html .= "<th>Cantidad</th>";
			$html .= "<th>Saldo</th>";
			$html .= "</thead>";   
    
			while($row=mysqli_fetch_array($select))
            {

				$html .= '<tr><td>'.$row['idAbono'].'</td><td>'.$row['fechaAbono'].'</td><td>'.$row['cantidadAbono'].'</td><td>'.$row['saldoCredito'].'</td></tr>';          
      		}

    $html .= '</table>';

    echo $html;

		?>