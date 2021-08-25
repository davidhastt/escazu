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
//        $db=new mysqli('db5004018525.hosting-data.io', 'dbu1859021','%(#?[j_654ke98/.|*/-.{', 'dbs3303596');
//        $db->query("SET NAMES 'utf8'");
//        return $db;        
//    }          
//}

