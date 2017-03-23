<?php
class SellData {
  public static $tablename = "sell";

  public function SellData(){
    $this->created_at = "NOW()";
  }

  public function getPerson(){ return PersonData::getById($this->person_id);}
  public function getUser(){ return UserData::getById($this->user_id);}

  public static function getLastId(){
    $sql = "select MAX(id) idSell FROM sell";
    $max="";

    $query = Executor::doit($sql);
    while($r = $query[0]->fetch_array()){
      $max = $r['idSell'];
    }


    return $max;
  }

  public function add(){

    $link=mysqli_connect("localhost","wtjjventas2018","wtjjventas2018","wtjjventas2016");

// Check connection
if (mysqli_connect_errno()) {
  echo "Error al conectar con la base datos: " . mysqli_connect_error();
}

$max = "SELECT MAX(id2) as max_id FROM sell where iv=$this->iv";
$max1 =  mysqli_query($link, $max);
$row = mysqli_fetch_assoc($max1);
$max_id=$row['max_id'];
echo "Max id es";
echo $max_id;


    $sql = "insert into ".self::$tablename." (total,discount,user_id,created_at, termino_id, tipo_pago, anulada, iv, id2, esCompra ";
    $sql .= "value ($this->total,$this->discount,$this->user_id,$this->created_at,$this->termino_id,$this->tipo_pago,0,$this->iv ,$max_id+1, $this->esCompra)";

  echo "Valor de iv + 1: " . $max_id + 1;

    return Executor::doit($sql);
  }



  public static function getLastId2($tieneIV){
    $sql = "select MAX(id2) id2 FROM sell where iv=$tieneIV";
    $max="";

    $query = Executor::doit($sql);
    while($r = $query[0]->fetch_array()){
      $max = $r['id2'];
    }


    return $max;
  }



public function addCreditos(){

// Create connection
$link=mysqli_connect("localhost","wtjjventas2018","wtjjventas2018","wtjjventas2016");

// Check connection
if (mysqli_connect_errno()) {
  echo "Error al conectar con la base datos: " . mysqli_connect_error();
}

$max = "SELECT MAX(numFactura) as max_id FROM credito";
$max1 =  mysqli_query($link, $max);
$row = mysqli_fetch_assoc($max1);
$max_id=$row['max_id'];
echo "Max id es";
echo $max_id;

  $sql = "insert into credito(idVendedor,  cantidadCredito, diaPago, observacion, fechaCredito, saldoActual, descrProducto, cuotaCredito, termino_id, numFactura, montoPagado, idSell) values ('28', $this->total, $this->dia_pago, '', $this->created_at, $this->total, '', $this->cuota, $this->termino_id, , ($max_id+1), '0', $this->idSell)";


 // $sql="INSERT INTO credito(idVendedor, idClienteCredito, cantidadCredito, diaPago, observacion, fechaCredito, saldoActual, descrProducto, cuotaCredito, termino_id, numFactura, montoPagado) //values ('$idUsuario','$idCliente','$credito','$diaPago', '$observacion','$fechaCredito','$credito','$descrProductoCre',$cuotaCredito, $termino_id, ($max_id+1), '0')";

  return Executor::doit($sql);
 }

 public function addSellNoIv(){

 // Create connection
 $link=mysqli_connect("localhost","wtjjventas2018","wtjjventas2018","wtjjventas2016");

 // Check connection
 if (mysqli_connect_errno()) {
   echo "Error al conectar con la base datos: " . mysqli_connect_error();
 }

 $max = "SELECT MAX(idSellNoIV) as max_id FROM sell_no_iv";
 $max1 =  mysqli_query($link, $max);
 $row = mysqli_fetch_assoc($max1);
 $max_id=$row['max_id'];
 echo "Max id es de sell no iv es";
 echo $max_id;

   $sql = "insert into sell_no_iv(idFctura) values ('28', $this->total, $this->dia_pago, '', $this->created_at, $this->total, '', $this->cuota, $this->termino_id, , ($max_id+1), '0')";


  // $sql="INSERT INTO credito(idVendedor, idClienteCredito, cantidadCredito, diaPago, observacion, fechaCredito, saldoActual, descrProducto, cuotaCredito, termino_id, numFactura, montoPagado) //values ('$idUsuario','$idCliente','$credito','$diaPago', '$observacion','$fechaCredito','$credito','$descrProductoCre',$cuotaCredito, $termino_id, ($max_id+1), '0')";

   return Executor::doit($sql);
  }


public function addCreditos_with_client()
{

$link=mysqli_connect("localhost","wtjjventas2018","wtjjventas2018","wtjjventas2016");

// Check connection
if (mysqli_connect_errno()) {
  echo "Error al conectar con la base datos: " . mysqli_connect_error();
}

$max = "SELECT MAX(numFactura) as max_id FROM credito";
$max1 =  mysqli_query($link, $max);
$row = mysqli_fetch_assoc($max1);
$max_id=$row['max_id'];
echo "Max id es";
echo $max_id;

  $sql="INSERT INTO credito(idVendedor, idClienteCredito, cantidadCredito, diaPago, observacion, fechaCredito, saldoActual, descrProducto, cuotaCredito, termino_id, numFactura, montoPagado) values ($this->user_id,$this->person_id,$this->total, $this->dia_pago, '', $this->created_at, $this->total, '', $this->cuota, $this->termino_id, ($max_id+1), '0')";

 return Executor::doit($sql);
}

  public function add_re(){
    $sql = "insert into ".self::$tablename." (user_id,operation_type_id,created_at, termino_id, tipo_pago, anulada) ";
    $sql .= "value ($this->user_id,1,$this->created_at,$this->termino_id,$this->tipo_pago,0)";
    return Executor::doit($sql);
  }


  public function add_with_client(){

 $link=mysqli_connect("localhost","fastness_ventas","ventas2016","fastness_wtjjventas2016");

// Check connection
if (mysqli_connect_errno()) {
  echo "Error al conectar con la base datos: " . mysqli_connect_error();
}

$max = "SELECT MAX(id2) as max_id FROM sell where iv=$this->iv";
$max1 =  mysqli_query($link, $max);
$row = mysqli_fetch_assoc($max1);
$max_id=$row['max_id'];
echo "Max id es";
echo $max_id;

    $sql = "insert into ".self::$tablename." (total,discount,person_id,user_id,created_at, termino_id, tipo_pago, anulada, iv, id2) ";
    $sql .= "value ($this->total,$this->discount,$this->person_id,$this->user_id,$this->created_at,$this->termino_id,$this->tipo_pago,0, $this->iv, $max_id+1)";


      echo "Valor de iv: " . $this->iv;


    return Executor::doit($sql);
  }

  public function add_re_with_client(){
    $sql = "insert into ".self::$tablename." (person_id,operation_type_id,user_id,created_at, termino_id, tipo_pago, anulada, iv) ";
    $sql .= "value ($this->person_id,1,$this->user_id,$this->created_at,$this->termino_id,$this->tipo_pago,0, $this->iv)";
    return Executor::doit($sql);
  }

  public static function delById($id){
    $sql = "delete from ".self::$tablename." where id=$id";
    Executor::doit($sql);
  }

  public function del(){
    $sql = "delete from ".self::$tablename." where id=$this->id";
    Executor::doit($sql);
  }

  public function update_box(){
    $sql = "update ".self::$tablename." set box_id=$this->box_id where id=$this->id";
    Executor::doit($sql);
  }

  public function update_status($id){
    $sql = "update ".self::$tablename." set anulada=1 where id=$id";
    Executor::doit($sql);
  }

  public static function getById($id){
     $sql = "select * from ".self::$tablename." where id=$id";
    $query = Executor::doit($sql);
    return Model::one($query[0],new SellData());
  }

  public static function getSells(){
    $sql = "select * from ".self::$tablename." where operation_type_id=2 order by created_at desc";
    $query = Executor::doit($sql);
    return Model::many($query[0],new SellData());
  }

  public static function getSellsUnBoxed(){
    $sql = "select * from ".self::$tablename." where operation_type_id=2 and box_id is NULL order by created_at desc";
    $query = Executor::doit($sql);
    return Model::many($query[0],new SellData());
  }

  public static function getByBoxId($id){
    $sql = "select * from ".self::$tablename." where operation_type_id=2 and box_id=$id order by created_at desc";
    $query = Executor::doit($sql);
    return Model::many($query[0],new SellData());
  }

  public static function getRes(){
    $sql = "select * from ".self::$tablename." where operation_type_id=1 order by created_at desc";
    $query = Executor::doit($sql);
    return Model::many($query[0],new SellData());
  }

  public static function getAllByPage($start_from,$limit){
    $sql = "select * from ".self::$tablename." where id<=$start_from limit $limit";
    $query = Executor::doit($sql);
    return Model::many($query[0],new SellData());

  }

  public static function getAllByDateOp($start,$end,$op){
  $sql = "select * from ".self::$tablename." where date(created_at) >= \"$start\" and date(created_at) <= \"$end\" and operation_type_id=$op order by created_at desc";
    $query = Executor::doit($sql);
    return Model::many($query[0],new SellData());

  }
  public static function getAllByDateBCOp($clientid,$start,$end,$op){
 $sql = "select * from ".self::$tablename." where date(created_at) >= \"$start\" and date(created_at) <= \"$end\" and client_id=$clientid  and operation_type_id=$op order by created_at desc";
    $query = Executor::doit($sql);
    return Model::many($query[0],new SellData());

  }

  public static function getSaldoCliente($cedulaCliente){

$sql = "select SUM( credito.saldoActual ) AS saldoActual
FROM dia d
INNER JOIN credito ON d.numDia = credito.diaPago
INNER JOIN cliente ON credito.idClienteCredito = cliente.idPersona
INNER JOIN person ON cliente.idPersona = person.id
WHERE credito.cantidadCredito > credito.montoPagado
AND credito.termino_id >=137
AND credito.anulada = '0'
AND credito.anulada2 = '0' and cliente.cedula= $cedulaCliente";

 
    $query = Executor::doit($sql);
    while($r = $query[0]->fetch_array()){
      $max = $r['saldoActual'];
    }


    return $max;

}


}

?>
