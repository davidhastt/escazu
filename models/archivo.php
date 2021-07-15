<?php

class Archivo {

    public $id_tipoArchivo;
    private $id_post;
    public $ubicacion; //se usa esta variable??
    public $id_usuario;
    private $db;
    private $nomFile; //aqui se almacena el id maximo    
    private $extension;

    function __construct($id_tipoArchivo) {// hace falta definir la carpeta donde se guardara        
        $this->db = Database::connect();
        $this->setId_tipoArchivo($id_tipoArchivo);
    }

    function actualizaNomFile($nom_file){        
        $strsql = "UPDATE archivos SET nom_file={$nom_file} WHERE id_post={$nom_file}";
        $save = $this->db->query($strsql);
        $result = false;
        if ($save) {
            $result = true;
        }
        return $result;        
    }
    
    function getId_tipoArchivo() {
        return $this->id_tipoArchivo;
    }

    function setId_tipoArchivo($id_tipoArchivo) {

        switch ($id_tipoArchivo) {
            case 1:
                $this->extension = "jpg";
                $this->id_tipoArchivo = 1;
                break;

            default:
                break;
        }
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

    public function eliminar($id_archivo) {
        // primero tienes que descubrir el nombre del archivo con id = $id_file
        //$this->extension=$extension;
        $filas = $this->buscaArchivo($id_archivo);

        $this->nom_file = $filas->nom_file;
        $this->id_post = $filas->id_post;
        $this->id_tipoArchivo = $filas->id_tipoArchivo;




        $filename = "assets/page/img/" . $this->nom_file . "." . $this->extension;
        //antes de tratar de borrarlo hay que verificar que exista
        if (file_exists($filename)) {
            if (unlink($filename)) {
                if ($this->updateRowAsIMGdefault($id_archivo)) {
                    //$_SESSION['mensaje'] = "El archivo fue borrado del disco y de la base";
                    return $this->id_post;
                } else {
                    //$_SESSION['mensaje'] = "El archivo se borro, pero no de la base";
                    return false;
                }
            } else {
                //$_SESSION['mensaje'] = "No se pudo borrar el archivo PDF";
                return false;
            }
        } else {
            //si por alguna razon no existe se debe tratar de borrar de la base
            $this->deleteRow($id_archivo);
            $_SESSION['mensaje'] = "Error vuelve a intentar";
            return false;
        }
    }

    private function updateRowAsIMGdefault($id_archivo) {
        $strsql = "UPDATE archivos SET nom_file=0 WHERE id_archivo=" . $id_archivo;
        $update = $this->db->query($strsql);
        $result = false;
        if ($update) {
            $result = true;
        } else {
            return false;
        }
        return $result;
    }
    
   

    private function buscaArchivo($id_archivo) {
        $strsql = "SELECT nom_file, id_tipoArchivo, id_post FROM archivos WHERE id_archivo=" . $id_archivo;
        $select = $this->db->query($strsql);
        //$result = false;
        if ($select) {
            $filas = $select->fetch_object();
            return $filas;
        } else {
            return false;
        }
        //return $result;
    }

    private function deleteRow($id_archivo) {
        $strsql = "DELETE FROM archivos WHERE id_archivo=" . $id_archivo;
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
            if (move_uploaded_file($archivoArr['tmp_name'][0], 'assets/page/img/' . $this->nomFile)) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    function getNomFile() {
        return $this->nomFile;
    }

    function setNomFile($nomFile) {
        $this->nomFile = $nomFile . "." . $this->extension;
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
            $this->nomFile = $maxID . "." . $this->getExtension();
        } else {
            $this->nomFile = "1." . $this->getExtension();
        }
    }

    function getExtension() {
        return $this->extension;
    }

    function setExtension($extension) {
        $this->extension = $extension;
    }

    /*
      function getId_documento() {//quitar
      return $this->id_documento;
      }

      function setId_documento($id_documento) {//quitar
      $this->id_documento = $id_documento;
      }
     */

    function getUbicacion() {
        return $this->ubicacion;
    }

    function setUbicacion($ubicacion) {
        $this->ubicacion = $ubicacion;
    }

}
