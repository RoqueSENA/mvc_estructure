<?php

class Connection{

    public $db;



    public function __construct(){
        
        try{
            $this-> db=new PDO ('mysql:host=localhost; dbname = Boveda_Manager','root','V1ct0#142022');

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