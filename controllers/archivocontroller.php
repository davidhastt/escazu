<?php

require_once 'models/archivo.php';

class archivoController {

    public function subir() {


        $id_usuario = $_SESSION['identity_Session']->id_usuario;


        $archivoArr = $_FILES['archivo'];
        //$countFiles = count($PDFfile['name']);
        //$i =0 ;
        $archivo = new Archivo("jpg", $id_usuario, 1);
        //while ($i < $countFiles) {
        //$archivo->setId_documento($_POST['id_documento']);
        $archivo->asignarNombreAFile();
        if ($archivo->subir($archivoArr)) {
            if ($archivo->registarFile()) {
                return "Archivo subido y registrado en la base de datos";
            } else {
                return  "Se subio el archivo pero no se pudo hacer registro en la BD";
            }
        } else {
            return "No se pudo subir el archivo, ni registrarlo en la base de datos";
        }
    }

    public function eliminar() {
        if (!isset($_SESSION['id_usuario'])) {
            $identity = $_SESSION['identity_Session']; //entra aqui cuando no es administrador
            $id_usuario = $identity->id_usuario;
        } else {
            $id_usuario = $_SESSION['id_usuario'];
        }
        $x = $_SESSION['tramite'];
        $archivo = new Archivo("pdf", $id_usuario, "id_archivo");
        if ($archivo->eliminar($_GET['aux'])) {
            //header("Location:" . base_url . 'tramite/muestrarequisitos/' . $_SESSION['tramite']);
            $lugar = base_url . 'tramite/muestrarequisitos/' . $_SESSION['tramite'];
            $mensaje = "El archivo fue eliminado";
            require_once 'views/usuario/redirecciona.php';
        } else {
            //$id_file->deleteRow();
            //echo "Error contacta al administrador del sistema";
        }
    }

}
