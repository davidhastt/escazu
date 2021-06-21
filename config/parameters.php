<?php
// para hacer togle entre internet y localhost debes modificar parameters.php, db.php y .htaccess
//en localhost
define("base_url", "http://localhost/escazu/"); //no tiene setido tener dos variables globales diferentes y que valgan lo mismo
//define("base_url_page", "http://localhost/escazu/"); 
//en internet 

//define("base_url", "http://geografia.mx/"); 
//fin internet

define("controller_default","sistemacontroller");
define("action_default","index");
//activar rewrite_module
date_default_timezone_set("America/Mexico_City");
