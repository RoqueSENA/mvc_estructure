<?php

	class Fondos_model {

		private $db;
		private $fondos;

		protected $codFondo;
		protected $nomFondo;

	
	
		public function __construct(){
			include_once '../Config/Connection.php';
        	$this->db = new Connection();
		}
	
		public function get_fondos(){

				
			$resultado = $this->db->db->query("SELECT * FROM boveda_manager.fondos");
			while($row = $resultado->fetch(PDO::FETCH_ASSOC))
			{
				$this-> fondos [] = $row;
				
			}
			return $this -> fondos;
		
		}
		public function listar_fondos(){
			$resultado = $this-> db->db->query("SELECT nom_fondo FROM fondos");
			while($row = $resultado->fetch(PDO::FETCH_ASSOC))
			{
				$this-> fondos [] = $row;
				
			}
			return $this -> fondos;
		}
		
		public function insertar($cod_fondo, $nom_fondo,){
			
			$resultado = $this->db->db->query("INSERT INTO boveda_manager.fondos (cod_fondo, nom_fondo) 
			VALUES ('$cod_fondo', '$nom_fondo')");
			$this->RedirectAdminFondos();
			
		}
		public function RedirectAdminFondos(){
			header("location: ../Controllers/MenuController.php?action=adminfondos");
	
		}
		
		public function modificar($cod_fondo, $nom_fondo){
			
			$resultado = $this->db->db->query("UPDATE boveda_manager.fondos 
			SET cod_fondo='$cod_fondo', nom_fondo='$nom_fondo' WHERE cod_fondo = '$cod_fondo'");
			$this->RedirectAdminFondos();		
		}
		
		public function eliminar($codFondo){
			
			$resultado = $this->db->db->query("DELETE FROM  boveda_manager.fondos WHERE cod_fondo = '$codFondo'");
			$this->RedirectAdminFondos();
		}
		
		public function get_fondo($codFondo)
		{
			$sql = "SELECT * FROM boveda_manager.fondos WHERE cod_fondo='$codFondo' LIMIT 1";
			$resultado = $this->db->db->query($sql);
			$row = $resultado->fetch(PDO::FETCH_ASSOC);

			return $row;
		}
	} 
?>