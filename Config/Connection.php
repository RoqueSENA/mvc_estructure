<?php

class Connection{

    public $db;



    public function __construct(){
        
        try{
            $this-> db=new PDO ('mysql:host=localhost; dbname = boveda_manager','admin','admin');

        } catch     (PDOException $e) {
            die("Error ".$e->getMessage());
	        echo "linea ".$e->getLine();
            var_dump($this-> db);
            
        }
    }   

    public function CloseConnection(){

    $this->db = null;
    }

}
?>