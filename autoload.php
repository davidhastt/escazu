<?php

function controllers_autolad($classname){
    require_once 'controllers/'.$classname.'.php';
    
}
spl_autoload_register('controllers_autolad');