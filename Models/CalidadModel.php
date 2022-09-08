<?php

class Calidad_model{

    private $conn;
    private $calidades;

    protected $idCalidad;
    protected $calidad;

    public function __construct(){
        include_once "../Config/Connection.php";
        $this->conn= new Connection();
    }

    public function get_calidades(){
        $resultado = $this->conn->db->query("SELECT * FROM boveda_manager.calidades");
        while($row = $resultado->fetch(PDO::FETCH_ASSOC))
        {
            $this-> calidades [] = $row;
				
		}
			return $this -> calidades;

    }





}




?>