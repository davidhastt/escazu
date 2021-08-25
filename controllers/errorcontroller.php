<?php

class errorcontroller {

    public function index($mensaje, $mensaje2) {        
        require_once "views/layout_page/{$_SESSION['idioma']}/header.php";
        require_once "views/layout_page/{$_SESSION['idioma']}/error.php";
        require_once "views/layout_page/{$_SESSION['idioma']}/footer.php"; 
    }

}
