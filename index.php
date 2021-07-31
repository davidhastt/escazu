<?php
//exit; 
session_id('escazazu');
session_start();

require_once 'autoload.php';
require_once 'config/db.php';
require_once 'config/parameters.php';


//controler/accion/parametro
if (isset($_GET['controller'])) {
    $nombre_controlador = $_GET['controller'] . 'controller';
}elseif(!isset ($_GET['controller']) && !isset ($_GET['action'])){
    $nombre_controlador=controller_default;
}else{
    show_error("Error","La página que busacas no existe");
}


if (class_exists($nombre_controlador)) {    
    $controlador = new $nombre_controlador();
    if (!isset($_SESSION["idioma"])){
        $_SESSION["idioma"]="ESP";
    }     
    if (isset($_GET['action']) && method_exists($controlador, $_GET['action'])) {//pon aqui los puntos de interrupcion si quires empezar desde el principio
        $action = $_GET['action'];
        $controlador->$action();
    } 
    elseif(!isset ($_GET['controller']) && !isset ($_GET['action'])){//estas son las acciones default
        $action_default=action_default;
        $controlador->$action_default();
    }
    else {
        show_error("Error","La página que busacas no existe");
    }   
} else {
    //echo "La pagina no existe";    
    show_error("Error","La página que busacas no existe");
}

function show_error($mensaje, $mensaje2) {
    $error = new errorcontroller();    
    $error->index($mensaje, $mensaje2);
}

//require_once 'views/layout/footer.php';