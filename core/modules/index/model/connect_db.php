<?php
// Create connection
$link=mysqli_connect("localhost","wtjjventas2018","wtjjventas2018","fastness_wtjjventas2016");

// Check connection
if (mysqli_connect_errno()) {
  echo "Error al conectar con la base datos: " . mysqli_connect_error();
}
?>