<?php


class MovimientosModel{

    private $db;
    private $movimientos;
    protected $fecha_mov;
    protected $tipo_mov;
    protected $estado_mov;
    protected $protocolo_mov;
    protected $fondOrigen_mov;
    protected $cod_fondo_destino_mov;
    protected $calidad_mov;
    protected $cantCienProt_mov;
    protected $cantCincuentaProt_mov;
    protected $cantVeinteProt_mov;
    protected $cantDiezProt_mov;
    protected $cantCincoProt_mov;
    protected $cantDosProt_mov;
    protected $cantMilProt_mov;
    protected $cantCienReal_mov;
    protected $cantCincuentaReal_mov;
    protected $cantVeinteReal_mov;
    protected $cantDiezReal_mov;
    protected $cantCincoReal_mov;
    protected $cantDosReal_mov;
    protected $cantMilReal_mov;
    protected $saldoCien_mov;
    protected $saldoCincuenta_mov;
    protected $saldoVeite_mov;
    protected $saldoDiez_mov;
    protected $saldoCinco_mov;
    protected $saldoDos_mov;
    protected $saldoMil_mov;

    public function __construct(){
        include_once '../Config/Connection.php';
        $this->db = new Connection();
    }

    public function get_movimientos(){
        $resultado = $this->db->db->query("SELECT * FROM boveda_manager.movimientos");
        while($row = $resultado->fetch(PDO::FETCH_ASSOC)){
            $this-> movimientos [] = $row;
        }
        return $this -> movimientos;
    }

    public function get_estados(){
        $resultado = $this->db->db->query("SELECT * FROM boveda_manager.estados");
        while($row = $resultado->fetch(PDO::FETCH_ASSOC)){
            $this-> estado_mov [] = $row;
        }
        return $this -> estado_mov;
    }

    public function get_movimiento($protocolomov){
        $sql = "SELECT * FROM boveda_manager.movimientos WHERE protocolo_mov ='$protocolomov' LIMIT 1";
        $resultado = $this->db->db->query($sql);
        $row = $resultado->fetch(PDO::FETCH_ASSOC);
        return $row;
	}
    public function GuardarMovimiento($fecha,$protocolo,$fondo,$calidad,$cien,$cincuenta,$veinte,$diez,$cinco,$dos,$mil){
        var_dump($fecha,$protocolo,$fondo,$calidad,$cien,$cincuenta,$veinte,$diez,$cinco,$dos,$mil);
        $sql =("INSERT INTO boveda_manager.movimientos(fecha_mov,
        protocolo_mov,
        cod_fondo_destino_mov,
        calidad_mov,
        cant_cien_real_mov,
        cant_cincuenta_real_mov,
        cant_veinte_real_mov,
        cant_diez_real_mov, 
        cant_cinco_real_mov,
        cant_dos_real_mov,
        cant_mil_real_mov) 
        VALUES (?,?,?,?,?,?,?,?,?,?,?)");
        $insertar =$this->db->db->prepare($sql);
        $insertar->bindParam(1,$this->fecha_mov);
        $insertar->bindParam(2,$this->protocolo_mov);
        $insertar->bindParam(3,$this->cod_fondo_destino_mov);
        $insertar->bindParam(4,$this->calidad_mov);
        $insertar->bindParam(5,$this->cantCienReal_mov);
        $insertar->bindParam(6,$this->cantCincuentaReal_mov);
        $insertar->bindParam(7,$this->cantVeinteReal_mov);
        $insertar->bindParam(8,$this->cantDiezReal_mov);
        $insertar->bindParam(9,$this->cantCincoReal_mov);
        $insertar->bindParam(10,$this->cantDosReal_mov);
        $insertar->bindParam(11,$this->cantMilReal_mov);
        $insertar->execute();
    }

}



?>