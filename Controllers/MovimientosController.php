<?php
require "StarterController.php";
$ics = new StarterController();
require "../Models/MovimientosModel.php";

class MovimientosController extends MovimientosModel {
	
	public function RecepcionFormView(){
		$estado = $this->get_estados();
		require "../Models/FondosModel.php";
		$fondo = new fondos_model();
		$data = $fondo->get_fondos();
		include_once "../Models/CalidadModel.php";
		$calidades = new Calidad_model();
		$datos = $calidades->get_calidades();
		require "../Views/Movimientos/RecepcionForm.php";

	}
	
	public function IngresarFajos($fecha,$protocolo,$fondo,$calidad,$cien,$cincuenta,$veinte,$diez,$cinco,$dos,$mil){
		$this->fecha_mov=$fecha;
		$this->protocolo_mov=$protocolo;
		$this->cod_fondo_destino_mov=$fondo;
		$this->calidad_mov=$calidad;
		$this->cantCienReal_mov=$cien;
		$this->cantCincuentaReal_mov=$cincuenta;
		$this->cantVeinteReal_mov=$veinte;
		$this->cantDiezReal_mov=$diez;
		$this->cantCincoReal_mov=$cinco;
		$this->cantDosReal_mov=$dos;
		$this->cantMilReal_mov=$mil;
		$this->GuardarMovimiento($fecha,$protocolo,$fondo,$calidad,$cien,$cincuenta,$veinte,$diez,$cinco,$dos,$mil);
		

	}
}


if(isset($_GET['action'])&& $_GET['action']== 'entrada'){
	$ic = new MovimientosController();
	$ic->RecepcionFormView();	
}

if(isset($_POST['action'])&& $_POST['action']== 'guardar'){
	
	$ic = new MovimientosController();
	$ic->ingresarFajos(
	$_POST['inputFecha'],
	$_POST['protocolo'],
	$_POST['inputFondo'],
	$_POST['inputCalidad'],
	$_POST['cant_cien'],
	$_POST['cant_cincuenta'],
	$_POST['cant_veinte'],
	$_POST['cant_diez'],
	$_POST['cant_cinco'],
	$_POST['cant_dos'],
	$_POST['cant_mil']);	
}

?>