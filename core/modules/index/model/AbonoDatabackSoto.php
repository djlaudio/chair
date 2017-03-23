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
		$this->observacion = "";
		$this->idSistema = "";
	}

	public function add(){
		$sql = "insert into abono (fechaAbono,cantidadAbono,idCreditoAbono,saldoCredito,idCobrador,porcComisionCobrador,diaPago,observacion,idSistema) ";
		$sql .= "value (NOW(),$this->cantidadAbono,$this->idCreditoAbono,0,28,0,0,'Factura de Contado',0)";
		return Executor::doit($sql);
	}

	public static function getById($id){
		$sql = "select * from ".self::$tablename." where id=$id";
		$query = Executor::doit($sql);
		$found = null;
		$data = new AbonoData();
		while($r = $query[0]->fetch_array()){
			$data->id = $r['id'];
			$data->name = $r['name'];
			$data->lastname = $r['lastname'];
			$data->address1 = $r['address1'];
			$data->phone1 = $r['phone1'];
			$data->email1 = $r['email1'];
			$data->created_at = $r['created_at'];
			$found = $data;
			break;
		}
		return $found;
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
			$cnt++;
		}
		return $array;
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
			$cnt++;
		}
		return $array;
	}
}

?>