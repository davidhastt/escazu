<?php

class errorcontroller {

    public function index($mensaje, $mensaje2) {        
        require_once 'views/layout_page/header.php';
        require_once 'views/layout_page/error.php';
        require_once 'views/layout_page/footer.php';        
    }

}
