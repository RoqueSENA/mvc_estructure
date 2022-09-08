<?php 
require "StarterController.php";
$ics = new StarterController();

class AdminUsersController{

    public function __construct(){
        require "../Models/Usuario.php";
        $User= new Usuario;

    }
    public function AdminUsuarios(){

        $controller = new Usuario();
        $usuarios = $controller->GetUsuarios();

        require "../Views/Usuarios/Registro.php";

    }  

    public function RedirectAdminUsuarios(){
        header("location: ../Controllers/MenuController.php?action=adminusers");

    }
    






}

if(isset($_GET['action'])&& $_GET['action']== 'adminusers'){

    $ic = new AdminUsersController();
    $ic->AdminUsuarios();

}








?>