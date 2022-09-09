<?php 

class Usuario{

    private $db;
    private $usuarios;

    protected $codUser;
    protected $nomUser;
    protected $passUser;
    protected $rolUser;


    public function __construct(){
        include_once '../Config/Connection.php';
        $this->db = new Connection();
    }
				public function RedirectAdminUser(){
					header("location: ../Controllers/MenuController.php?action=adminusers");
			
				}
    public function GuardarUsuario(){
        $sql =("INSERT INTO bovedamanager-database.usuarios(cod_usr, nom_usr, pass_usr, rol_usr) 
        VALUES (?,?,?,?)");
        $insertar =$this->db->db->prepare($sql);
        $insertar->bindParam(1,$this->codUser);
        $insertar->bindParam(2,$this->nomUser);
        $insertar->bindParam(3,$this->passUser);
        $insertar->bindParam(4,$this->rolUser);
        $insertar->execute();
    }
    
    public function ConsultarUsuario($codUser){
        
        $sql="SELECT * FROM bovedamanager-database.usuarios WHERE cod_usr ='$this->codUser' ";
        $consulta = $this->db->db->prepare($sql);

        $consulta->execute();
        $objUsuario= $consulta->fetchAll(PDO::FETCH_OBJ);
        foreach ($objUsuario as $usuario) { } 
        if(empty($usuario)){
            $usuario="Sindatos";
        }
        return $usuario;
        

    }
    public function GetUsuarios(){

				
        $resultado = $this->db->db->query("SELECT * FROM bovedamanager-database.usuarios");
        while($row = $resultado->fetch(PDO::FETCH_ASSOC))
        {
            $this-> usuarios [] = $row;
            
        }
        return $this -> usuarios;

    }

				public function GetUsuario($codusr)
		{
			$sql = "SELECT * FROM bovedamanager-database.usuarios WHERE cod_usr ='$codusr' LIMIT 1";
			$resultado = $this->db->db->query($sql);
			$row = $resultado->fetch(PDO::FETCH_ASSOC);

			return $row;
		}

    public function modificar($codusr, $nomusr,$passusr,$rolusr){
			
        $resultado = $this->db->db->query("UPDATE bovedamanager-database.usuarios 
        SET cod_usr='$codusr', nom_usr='$nomusr', pass_usr = '$passusr', rol_usr = '$rolusr' WHERE cod_usr = '$codusr'");
        $this->RedirectAdminUser();		
    }
    
    public function eliminar($codusr){
        
        $resultado = $this->db->db->query("DELETE FROM  bovedamanager-database.usuarios WHERE cod_usr = '$codusr'");
        $this->RedirectAdminUser();
    }


}
