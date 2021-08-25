<?php

class Archivo {

    public $id_tipoArchivo;
    private $id_post;
    public $ubicacion; //se usa esta variable??
    public $id_usuario;
    private $db;
    private $nomFile; //aqui se almacena el id maximo    
    private $extension;
    private $maxID;
    public $rol;
    public $titulo;
    public $descripcion;

    function __construct($id_tipoArchivo = null) {// hace falta definir la carpeta donde se guardara        
        $this->db = Database::connect();
        $this->setId_tipoArchivo($id_tipoArchivo);
    }

    function insertarFilaVaciaRelacionada() {
        $strsql = "INSERT INTO archivos VALUES(null, {$this->id_tipoArchivo}, {$this->maxID}, 0,1, 'titulo', 'descripcion')";
        $save = $this->db->query($strsql);
        $result = false;
        if ($save) {
            $result = true;
        }
        return $result;
    }

    function actualizaNomFile($nom_file) {
        $strsql = "UPDATE archivos SET nom_file={$nom_file} WHERE id_post={$nom_file}";
        $save = $this->db->query($strsql);
        $result = false;
        if ($save) {
            $result = true;
        }
        return $result;
    }

    function getTitulo() {
        return $this->titulo;
    }

    function getDescripcion() {
        return $this->descripcion;
    }

    function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }
        
    function getId_tipoArchivo() {
        return $this->id_tipoArchivo;
    }

    function setId_tipoArchivo($id_tipoArchivo) {

        switch ($id_tipoArchivo) {
            case 1:
                $this->extension = "jpg";
                $this->id_tipoArchivo = 1;
                $this->rol=1;//el 1 es portada de presentacion del post
                break;
            case 2:
                $this->extension = "pdf";
                $this->id_tipoArchivo = 2;
                $this->rol=2;//el 2 es contenido
                break;
            case 3:
                $this->extension = "jpg";
                $this->id_tipoArchivo = 3;
                $this->rol=3;//el 3 es imagen de un carrusel
                break;
            case 4:
                $this->extension = "mp3";
                $this->id_tipoArchivo = 4;
                $this->rol=4;//el 3 es imagen de un carrusel
                break; 
            case 5:
                $this->extension = "mp4";
                $this->id_tipoArchivo = 5;
                $this->rol=5;//el 3 es video
                break;            
            default:
                break;
        }
    }

    public function registrarEnBD() {
        $nombre = substr($this->nomFile, 0, -4);
        $strsql = "INSERT INTO archivos (id_tipoArchivo, id_post, nom_file, rol, titulo, descripcion) VALUES ({$this->id_tipoArchivo}, {$this->id_post}, {$nombre}, {$this->rol}, '{$this->titulo}', '{$this->descripcion}')";
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
        $this->setId_tipoArchivo($filas->id_tipoArchivo);
        $this->nom_file = $filas->nom_file;
        $this->id_post = $filas->id_post;
        //$this->setExtension($extension)
        //$this->setId_tipoArchivo($filas->id_tipoArchivo);// esto ya se definio desde el constructor
        //dependiendo del tipo de archivo es la carpeta

        $filename = "assets/page/img/{$this->extension}/" . $this->nom_file . "." . $this->extension;
        //antes de tratar de borrarlo hay que verificar que exista
        if (file_exists($filename)) {
            if (unlink($filename)) {

                //si el tipo de archivo es > 1 entonces borrarmos la fila en la tabla post, sino actualizamos


                if ($this->id_tipoArchivo > 1) {

                    if ($this->deleteRow($id_archivo)) {
                        //$_SESSION['mensaje'] = "El archivo fue borrado del disco y de la base";
                        return $this->id_post;
                    } else {
                        //$_SESSION['mensaje'] = "El archivo se borro, pero no de la base";
                        return false;
                    }
                } else {

                    if ($this->updateRowAsIMGdefault($id_archivo)) {
                        //$_SESSION['mensaje'] = "El archivo fue borrado del disco y de la base";
                        return $this->id_post;
                    } else {
                        //$_SESSION['mensaje'] = "El archivo se borro, pero no de la base";
                        return false;
                    }
                }
            } else {
                //$_SESSION['mensaje'] = "No se pudo borrar el archivo PDF";
                return false;
            }
        } else {
            //si por alguna razon no existe se debe tratar de borrar de la base
            if ($this->eliminar($id_archivo)) {
                //$_SESSION['mensaje'] = "El archivo fue borrado del disco y de la base";
                return $this->id_post;
            } else {
                //$_SESSION['mensaje'] = "El archivo se borro, pero no de la base";
                return false;
            }
        }
    }

    function getRol() {
        return $this->rol;
    }

    function setRol($rol) {
        $this->rol = $rol;
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
        if ($this->id_tipoArchivo==1 || $this->id_tipoArchivo==3) {
            if (move_uploaded_file($archivoArr['tmp_name'][0], 'assets/page/img/jpg/' . $this->nomFile)) {
                return true;
            } else {
                return false;
            }
        } elseif ($this->id_tipoArchivo==2) {
            if (move_uploaded_file($archivoArr['tmp_name'][0], 'assets/page/pdf/' . $this->nomFile)) {
                return true;
            } else {
                return false;
            }
        } elseif ($this->id_tipoArchivo==4) {
            if (move_uploaded_file($archivoArr['tmp_name'][0], 'assets/page/mp3/' . $this->nomFile)) {
                return true;
            } else {
                return false;
            }
        } elseif ($this->id_tipoArchivo==5) {
            if (move_uploaded_file($archivoArr['tmp_name'][0], 'assets/page/mp4/' . $this->nomFile)) {
                return true;
            } else {
                return false;
            }
        }        
        else {
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

    public function setId_post($id_post) {
        $this->id_post=$id_post;
    }

    function getMaxID() {
        return $this->maxID;
    }

    function setMaxID() {
        //Consegir el registro mayor en el campo ID
        $strsql = "SELECT MAX(id_post) as maxid FROM posts";
        $resultado = $this->db->query($strsql);
        $filas = $resultado->fetch_object();
        //$maxID = intval($filas->maxid) + 1;
        $maxID = intval($filas->maxid);
        $this->maxID = $maxID;
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

    function getUbicacion() {
        return $this->ubicacion;
    }

    function setUbicacion($ubicacion) {
        $this->ubicacion = $ubicacion;
    }

}
