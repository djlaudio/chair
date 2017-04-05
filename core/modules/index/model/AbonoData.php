<?php
class AbonoData {
	public static $tablename = "abono";

	public function AbonoData(){
		$this->idAbono = "";
		$this->fechaAbono = "";
		$this->cantidadAbono = "";
		$this->idCreditoAbono = "";
		$this->saldoCredito = "";
		$this->idCobrador = "";
		$this->porcComisionCobrador = "";
		$this->diaPago = "";
		$this->tipo_pago = "";
		$this->observacion = "";
		$this->idSistema = "";
		$this->id2creditoAbono = "";

	}

	
    public function getUsuario(){ return UsuarioData::getById($this->idCobrador);}
    public function getAbonoCredit(){ return CreditoData::getById($this->idCreditoAbono);}



	public function add(){
		$sql = "insert into abono (fechaAbono,cantidadAbono,idCreditoAbono,saldoCredito,idCobrador,porcComisionCobrador,diaPago, tipo_pago,observacion,idSistema) ";
		$sql .= "value (NOW(),$this->cantidadAbono,$this->idCreditoAbono,0,28,0,0,$this->tipo_pago,'Factura de Contado',0)";
		return Executor::doit($sql);
	}

	public static function getById($id){
		 $sql = "select * from ".self::$tablename." where idAbono=$id";
		$query = Executor::doit($sql);
		return Model::one($query[0],new AbonoData());
	}


	public static function getAll(){
		$sql = "select * from ".self::$tablename;
		$query = Executor::doit($sql);
		$array = array();
		$cnt = 0;
		while($r = $query[0]->fetch_array()){
			$array[$cnt] = new AbonoData();
			$array[$cnt]->idAbono = $r['idAbono'];
			$array[$cnt]->fechaAbono = $r['fechaAbono'];
			$array[$cnt]->cantidadAbono = $r['cantidadAbono'];
			$array[$cnt]->idCreditoAbono = $r['idCreditoAbono'];
			$array[$cnt]->saldoCredito = $r['saldoCredito'];
			$array[$cnt]->idCobrador = $r['idCobrador'];
			$array[$cnt]->porcComisionCobrador = $r['porcComisionCobrador'];
			$array[$cnt]->diaPago = $r['diaPago'];
			$array[$cnt]->observacion = $r['observacion'];
			$array[$cnt]->idSistema = $r['idSistema'];
			$array[$cnt]->tipo_pago = $r['tipo_pago'];
			$array[$cnt]->id2creditoAbono = $r['id2creditoAbono'];
			
			$cnt++;
		}
		return $array;
	}


	public static function getAllByDateOp($start,$end,$op){
  $sql = "select * from ".self::$tablename." where date(fechaAbono) >= \"$start\" and date(fechaAbono) <= \"$end\"  order by idAbono desc";
    $query = Executor::doit($sql);
    return Model::many($query[0],new AbonoData());

  }
  public static function getAllByDateBCOp($clientid,$start,$end,$op){
 $sql = "select * from ".self::$tablename." where date(fechaAbono) >= \"$start\" and date(fechaAbono) <= \"$end\" and client_id=$clientid  and tipo_pago=$op order by idAbono desc";
    $query = Executor::doit($sql);
    return Model::many($query[0],new AbonoData());

  }

		public static function getByCredito($idCreditoAbono){
		$sql = "select * from ".self::$tablename ." where idCreditoAbono=$idCreditoAbono";
		$query = Executor::doit($sql);
		$array = array();
		$cnt = 0;
		while($r = $query[0]->fetch_array()){
			$array[$cnt] = new AbonoData();
			$array[$cnt]->idAbono = $r['idAbono'];
			$array[$cnt]->fechaAbono = $r['fechaAbono'];
			$array[$cnt]->cantidadAbono = $r['cantidadAbono'];
			$array[$cnt]->idCreditoAbono = $r['idCreditoAbono'];
			$array[$cnt]->saldoCredito = $r['saldoCredito'];
			$array[$cnt]->idCobrador = $r['idCobrador'];
			$array[$cnt]->porcComisionCobrador = $r['porcComisionCobrador'];
			$array[$cnt]->diaPago = $r['diaPago'];
			$array[$cnt]->observacion = $r['observacion'];
			$array[$cnt]->idSistema = $r['idSistema'];
			$array[$cnt]->tipo_pago = $r['tipo_pago'];
			$array[$cnt]->id2creditoAbono = $r['id2creditoAbono'];
			$cnt++;
		}
		return $array;
	}
}

?>
