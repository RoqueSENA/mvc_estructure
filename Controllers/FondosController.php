<?php
require "StarterController.php";
$ics = new StarterController();
	
	class FondosController {
			
		public function __construct(){
			require_once "../Models/FondosModel.php";
		}
		
		public function index(){
			
			
			$fondos = new Fondos_model();

			$data["titulo"] = "Fondos";
			$data["fondo"] = $fondos->get_fondo("cod_fondo");
			
			require_once "../Views/fondos/fondos_view.php";	
		}
		
		public function nuevo(){
			$data["titulo"] = "Fondos";
			require_once "views/fondos/fondos_nuevo.php";
		}
		
		public function guardar($cod_fondo, $nom_fondo){
			$fondos = new Fondos_model();
			$fondos->insertar($cod_fondo, $nom_fondo);
			$data["titulo"] = "Fondos";
			$this->index();
		}
		
		public function modificar($codfondo){
			
			$fondo = new Fondos_Model();
        
		$data["fondo"] = $fondo->get_fondo($codfondo);
		$data["titulo"] = "Actualizar Fondo";
			require "../Views/fondos/fondos_modifica.php";
		
		}
		
		public function actualizar(){

			
			$cod_fondo = $_POST['cod_fondo'];
			$nom_fondo = $_POST['nom_fondo'];
			

			$fondos = new Fondos_model();
			$fondos->modificar($cod_fondo, $nom_fondo);
			$data["titulo"] = "Fondos";
			$fondos->RedirectAdminFondos();
			
		}
		
		
		public function eliminar($codfondo){
			
			$fondo = new Fondos_model();
			$data["fondo"] = $fondo->get_fondo($codfondo);
			$fondo->eliminar($codfondo);
			$fondo->RedirectAdminFondos();
			
		}
			
	}

	if(isset($_POST['action']) && $_POST['action']=='guardar'){

		$ic = new FondosController();
		$ic->guardar($_POST['codfondo'],
		$_POST['nomfondo']);
	}
	if(isset($_GET['action']) && $_GET['action']=='modificar'){

		$ic = new FondosController();
		$codfondo = $_GET['codfondo'];
		$ic->modificar($codfondo);
	}
	if(isset($_POST['action']) && $_POST['action']=='actualizar'){

		$ic = new FondosController();
		$ic->actualizar();
	}

	if(isset($_GET['action']) && $_GET['action']=='eliminar'){

		$ic = new FondosController();
		$codfondo = $_GET['codfondo'];
		$ic->eliminar($codfondo);
	}
