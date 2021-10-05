<?php
// para hacer togle entre internet y localhost debes modificar parameters.php, db.php y .htaccess
//en localhost
define("base_url", "http://localhost/escazu/");
//fin localhost


//en internet 
//define("base_url", "http://centroescazu.org/"); 
//fin internet


//Para internet y localhost
define("controller_default","sistemacontroller");
define("action_default","index");
//activar rewrite_module
date_default_timezone_set("America/Mexico_City");
