<?php

class Archivo {

    public $extencion;
    //public $id_documento; //id_documento dice que tipo de archivo es ver la tabla de la base de datos
    public $ubicacion;
    public $id_usuario;
    private $db;
    private $nomFile; //aqui se almacena el id maximo
    private $id_tipoArchivo;

    function __construct($extencion, $id_usuario, $id_tipoArchivo) {
        $this->extencion = $extencion;
        $this->id_usuario = $id_usuario;
        $this->db = Database::connect();
        $this->id_tipoArchivo = $id_tipoArchivo;
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

    public function registarFile() {
        $nombre = substr($this->nomFile, 0, -4);
        $strsql = "INSERT INTO archivos VALUES (NULL, '{$this->id_tipoArchivo}', '{$this->id_usuario}', '{$nombre}')";
        $save = $this->db->query($strsql);
        $result = false;
        if ($save) {
            $result = true;
        }
        return $result;
    }

    public function subir($archivoArr) {
        //$archivo = $_FILES['archivo'];
        //$nombre = $PDFfile['name'][0];
        $tipo = $archivoArr['type'][0];

        if ($tipo == "image/jpeg" || $tipo == "image/jpg") {


            if (move_uploaded_file($archivoArr['tmp_name'][0], 'assets/jpg/' . $this->nomFile)) {
                return true;
            } else {
                return false;
            }

            return true;
        } else {
            return false;
        }
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
        return $this->extencion;
    }

    function getUbicacion() {
        return $this->ubicacion;
    }

    function getId_usuario() {
        return $this->id_usuario;
    }

    function setExtencion($extencion) {
        $this->extencion = $extencion;
    }

    function setUbicacion($ubicacion) {
        $this->ubicacion = $ubicacion;
    }

    function setId_usuario($id_usuario) {
        $this->id_usuario = $id_usuario;
    }

}
