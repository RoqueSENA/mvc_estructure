<?php session_start();

if (empty($_SESSION['nombre'])){
    echo"Esta inicializada";
}

header("location: Controllers/UsuariosController.php?action=login");

?>








