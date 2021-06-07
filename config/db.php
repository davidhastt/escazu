<?php
// para hacer togle entre internet y localhost debes modificar parameters.php, db.php y .htaccess
//en localhost


class Database{
    public static function connect(){
        $db=new mysqli('localhost', 'root','', 'escazu');        
        $db->query("SET NAMES 'utf8'");
        return $db;        
    }
}


//en web

//class Database{
//    public static function connect(){
//        $db=new mysqli('db5000540624.hosting-data.io', 'dbu268718','Msd987*/_84Dke', 'dbs519093');
//        $db->query("SET NAMES 'utf8'");
//        return $db;        
//    }          
//}

