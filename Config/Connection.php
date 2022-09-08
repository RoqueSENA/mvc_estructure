<?php

class Connection{

    public $db;



    public function __construct(){
        
        try{
            $this-> db=new PDO ('mysql:host=bovedamanager-server.mysql.database.azure.com; dbname = bovedamanager-database','vwkidwdrzg','U058EVC6178H7CI3$');

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