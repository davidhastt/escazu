<?php

require_once 'models/archivo.php';

class archivoController {
  
        
    public function subir($id_tipoArchivo) {        
        $archivoArr = $_FILES['archivo'];
        $archivo = new Archivo($id_tipoArchivo);// extension de archivo
        $archivo->asignarNombreAFile();
        if ($archivo->subir($archivoArr)) {
            $archivo->setId_post();
            if ($archivo->registrarEnBD()){
                return true;
            }else{
                return false;
            }
            
        } else {
            return false;
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
