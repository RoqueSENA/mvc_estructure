	
<?php 
require "StarterController.php";
$ics = new StarterController();

class MenuController{

    public function MenuView(){

        require "../Views/Usuarios/Menu.php";

    } 
    public function AdminFondos(){

        include_once '../Models/FondosModel.php';

        $fondo = new Fondos_Model();
        $data = $fondo->get_fondos();

        require "../Views/fondos/fondos_view.php";

    }
    public function AdminUsuarios(){

        include_once '../Models/Usuario.php';

        $usuarios = new Usuario();
        $data = $usuarios->GetUsuarios();

        require "../Views/Usuarios/Registro.php";

    }  
    
    
    


}

if(isset($_GET['action'])&& $_GET['action']== 'adminusers'){

    $ic = new MenuController();
    $ic->AdminUsuarios();
}

if(isset($_GET['action'])&& $_GET['action']== 'menuview'){

    $ic = new MenuController();
    $ic->MenuView();
}

if(isset($_GET['action'])&& $_GET['action']== 'adminfondos'){

    $ic = new MenuController();
    $ic->AdminFondos();
}


?>