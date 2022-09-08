<?php 
require "StarterController.php";
$ics = new StarterController();
require "../Models/Usuario.php";

class UsuariosController extends Usuario {
    
    public function LoginView(){
        require "../Views/Usuarios/login.php";    
    }
    
    public function Ingresar(){
        require_once "../Views/Usuarios/Registro.php";
    } 
    
    public function RegistroView(){
        require "../Views/Usuarios/Registro.php";
    }
    public function Redirect(){
        header("location: ../Controllers/MenuController.php?action=menuview");
    }

    public function RedirectLogin(){
        header("location: ../Controllers/UsuariosController.php?action=login");
    }

    public function GuardarDatos($codusr, $nomusr, $passusr, $rolusr){
        $this->codUser = $codusr;
        $this->nomUser = $nomusr;
        $this->passUser = $passusr;
        $this->rolUser = $rolusr;
        $this->GuardarUsuario($this->codUser,$this->nomUser,$this->passUser,
        $this->rolUser);
        $this->RedirectAdminUser();
    }
    
    public function ValidarDatos($codusr,$passusr){
        $this->codUser = $codusr;
        $this->passUser = $passusr;
        $usuario = $this->ConsultarUsuario($codusr,$passusr);
        if ($usuario=="Sindatos"){
            $_SESSION['error']= "Usuario no encontrado";
            $this->RedirectLogin();
        }
        else{
            if ($this->passUser == $usuario->pass_usr){
                $_SESSION['codigo']=$usuario->cod_usr ;
                $_SESSION['nombre']=$usuario->nom_usr ;
                $_SESSION['password']=$usuario->pass_usr ;
                $_SESSION['rol']= $usuario->rol_usr;
                unset($_SESSION['error']);
                $this->Redirect();
            }
            else{
                $_SESSION['error']= "contraseña incorrecta";
                $this->RedirectLogin();
            }
        }
    }
    public function modificarView($codusr){
        $data["usuario"] = $this->GetUsuario($codusr);
        $data["titulo"] = "Modificar Usuario";
        require "../Views/Usuarios/modifiUsuario.php";
    }
    
    public function actualizar($codusr,$nomusr,$passusr,$rolusr){
        $this->modificar($codusr,$nomusr,$passusr,$rolusr);    
    }
    
    public function dropUser($codusr){
        $this->eliminar($codusr);
          
    }
} 


if(isset($_GET['action'])&& $_GET['action']=='login'){
    $ic = new UsuariosController();
    $ic->LoginView();
}

if(isset($_GET['action'])&& $_GET['action']=='registrar'){
    $ic = new UsuariosController();
    $ic->RegistroView();
}

if(isset($_POST['action']) && $_POST['action']=='login'){
    $ic = new UsuariosController();
    $ic->ValidarDatos($_POST['codusr'],$_POST['passusr']);
}

if(isset($_POST['action']) && $_POST['action']=='registrar'){
    $ic = new UsuariosController();
    $ic->GuardarDatos($_POST['codusr'],
    $_POST['nomusr'],
    $_POST['passusr'],
    $_POST['rolusr']);
}

if(isset($_GET['action']) && $_GET['action']=='modifiuser'){

    $ic = new UsuariosController();
    $ic->modificarView($_GET['codusr']);
   
}

if(isset($_POST['action']) && $_POST['action']=='actualizar'){
    $ic = new UsuariosController();
    $ic->actualizar($_POST['codusr'],
    $_POST['nomusr'],
    $_POST['passusr'],
    $_POST['rolusr']);

}

if(isset($_GET['action']) && $_GET['action']=='eliminar'){

    $ic = new UsuariosController();
    $ic->eliminar($_GET['codusr']);
   
}