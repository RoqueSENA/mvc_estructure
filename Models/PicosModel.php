<?php

class PicosModel{

    private $db;
    private $picos;
    protected $selloPico;
    protected $fondoPico;
    protected $picoCien;
    protected $picoCincuenta;
    protected $picoVeinte;
    protected $picoDiez;
    protected $picoCinco;
    protected $picoDos;
    protected $picoMil;


    public function __construct(){
        include_once "../Config/Connection.php";
        $this->db = new Connection();   
    }

    public function GuardarPico(){
        $sql =("INSERT INTO boveda_manager.picos(cod_usr, nom_usr, pass_usr, rol_usr) 
        VALUES (?,?,?,?)");
        $insertar =$this->db->db->prepare($sql);
        $insertar->bindParam(1,$this->codUser);
        $insertar->bindParam(2,$this->nomUser);
        $insertar->bindParam(3,$this->passUser);
        $insertar->bindParam(4,$this->rolUser);
        $insertar->execute();
    }












}





?>