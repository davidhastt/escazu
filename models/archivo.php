<?php

class Archivo {

    public $id_tipoArchivo;
    private $id_post;
    public $ubicacion;//se usa esta variable??
    public $id_usuario;
    private $db;
    private $nomFile; //aqui se almacena el id maximo    
    private $extension;

    function __construct($id_tipoArchivo) {// hace falta definir la carpeta donde se guardara
        $this->id_tipoArchivo = $id_tipoArchivo;
        switch ($this->id_tipoArchivo) {
            case 1:
                $this->extension="jpg";
                break;

            default:
                break;
        }


        
        $this->db = Database::connect();        
    }

    public function registrarEnBD() {
        $nombre = substr($this->nomFile, 0, -4);
        $strsql = "INSERT INTO archivos VALUES (NULL, {$this->id_tipoArchivo}, {$this->id_post}, '{$nombre}')";
        $save = $this->db->query($strsql);
        $result = false;
        if ($save) {
            $result = true;
        }
        return $result;
    }  

    public function eliminar($id_file) {
        // primero tienes que descubrir el nombre del archivo con id = $id_file
        $filename = $this->buscaArchivo($id_file);

        $filename = "assets/pdf/" . $filename . "." . $this->extencion;
        //antes de tratar de borrarlo hay que verificar que exista
        if (file_exists($filename)) {
            if (unlink($filename)) {
                if ($this->deleteRow($id_file)) {
                    $_SESSION['mensaje'] = "El archivo fue borrado del disco y de la base";
                    return true;
                } else {
                    $_SESSION['mensaje'] = "El archivo se borro, pero no de la base";
                    return false;
                }
            } else {
                $_SESSION['mensaje'] = "No se pudo borrar el archivo PDF";
                return false;
            }
        } else {
            //si por alguna razon no existe se debe tratar de borrar de la base
            $this->deleteRow($id_file);
            $_SESSION['mensaje'] = "Error vuelve a intentar";
            return false;
        }
    }

    private function buscaArchivo($id_file) {
        $strsql = "SELECT nom_file FROM archivos WHERE id_archivo=" . $id_file;
        $select = $this->db->query($strsql);
        //$result = false;
        if ($select) {
            $filas = $select->fetch_object();
            return $filas->nom_file;
        } else {
            return false;
        }
        //return $result;
    }

    private function deleteRow($id_file) {        
        $strsql = "DELETE FROM archivos WHERE id_archivo=" . $id_file;
        $delete = $this->db->query($strsql);
        $result = false;
        if ($delete) {
            $result = true;
        } else {
            return false;
        }
        return $result;
    }

    public function subir($archivoArr) {
        $tipo = $archivoArr['type'][0];
        if ($tipo == "image/jpeg" || $tipo == "image/jpg") {
            if (move_uploaded_file($archivoArr['tmp_name'][0], 'assets/page/img/thumbnails/' . $this->nomFile)) {
                return true;
            } else {
                return false;
            }            
        } else {
            return false;
        }
    }

    function getId_post() {
        return $this->id_post;
    }

    public function setId_post() {
        //Consegir el registro mayor en el campo ID
        $strsql = "SELECT MAX(id_post) as maxid FROM posts";
        $resultado = $this->db->query($strsql);
        $filas = $resultado->fetch_object();
        //$maxID = intval($filas->maxid) + 1;
        $maxID = intval($filas->maxid);
        $this->id_post = $maxID;

    }    
            
    
    public function asignarNombreAFile() {
        //Consegir el registro mayor en el campo ID
        $strsql = "SELECT MAX(id_archivo) as maxid FROM archivos";
        $resultado = $this->db->query($strsql);
        $filas = $resultado->fetch_object();
        $maxID = intval($filas->maxid) + 1;

        if ($maxID != NULL) {
            $this->nomFile = $maxID . "." . $this->getExtencion();
        } else {
            $this->nomFile = "1." . $this->getExtencion();
        }
    }

    /*
    function getId_documento() {//quitar
        return $this->id_documento;
    }

    function setId_documento($id_documento) {//quitar
        $this->id_documento = $id_documento;
    }
*/
    function getExtencion() {
        return $this->extension;
    }

    function getUbicacion() {
        return $this->ubicacion;
    }

    function setExtencion($extencion) {
        $this->extencion = $extencion;
    }

    function setUbicacion($ubicacion) {
        $this->ubicacion = $ubicacion;
    }

}
