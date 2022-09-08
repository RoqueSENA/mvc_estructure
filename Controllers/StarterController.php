<?php

class StarterController{

    public function __construct(){
        
        session_start();
    }

    public function logout(){
        
        session_destroy();
        $this->RedirectLogin();

    }

    public function RedirectLogin(){
        header("location:UsuariosController.php?action=login");
    }

}

if(isset($_GET['action'])&& $_GET['action']=='logout'){
    $ic = new StarterController();
    $ic->logout();
}

?>