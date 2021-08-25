<?php

require_once 'models/archivo.php';

class archivoController {

    public function insertarFilaVaciaRelacionada($id_post, $tipoArchivo) {//tal vez esto no sea necesario
        $archivo = new Archivo($tipoArchivo);
        //$archivo->setId_post($id_post);
        $archivo->setMaxID();
        $archivo->insertarFilaVaciaRelacionada();
    }

    public function borrarMultimedia() {

        $archivo = new Archivo();
        $id_post = $archivo->eliminar($_GET['parametro']);
        if ($id_post > 0) {
            $url = base_url . 'post/showPostForm/' . $id_post;
            header('Location: ' . $url);
        } else {
            //$id_file->deleteRow();
            //echo "Error contacta al administrador del sistema";
        }
    }

    public function subirMultimedia() {
        $archivoArr = $_FILES['archivo'];
        if ($archivoArr['type'][0] == "image/jpeg" || $archivoArr == "image/jpg") {
            $tipo = 3;
        } elseif ($archivoArr['type'][0] == "application/pdf" || $archivoArr == "application/PDF") {
            $tipo = 2;
        } elseif ($archivoArr['type'][0] == "audio/mpeg") {
            $tipo = 4;
        } elseif ($archivoArr['type'][0] == "video/mp4") {
            $tipo = 5;
        }        
        $archivo = new Archivo($tipo);
        $archivo->asignarNombreAFile(); //para darle un nombre al archivo buscamos el id maximo en la tabla
        //$archivo->setMaxID(); // siempre sale 1 como resultado de esta funcion, revisa despues
        $archivo->setId_post($_GET['parametro']);
        $archivo->setTitulo($_POST['titulo']);
        $archivo->setDescripcion($_POST['descripcion']);
        if ($archivo->subir($archivoArr)) {
            if ($archivo->registrarEnBD()) {
                $mensaje = "Exito";
                $mensaje2 = "Se cargo archivo {$archivo->getExtension()}";
                $url = base_url . "post/showPostForm/{$archivo->getId_post()}";
                require_once 'views/layout_xms/header.php';
                require_once 'views/layout_xms/confirmacion.php';
                require_once 'views/layout_xms/footer.php';
            } else {
                $mensaje = "Error";
                $mensaje2 = "Se subio el archivo pero no se pudo registrar en labase de datos";
                $url = base_url . "post/listarPosts/inicio";
                $error = new errorcontroller();
                $error->index($mensaje, $mensaje2);
            }
        } else {
                $mensaje = "Error";
                $mensaje2 = "No se pudo subir el archivo";
                $url = base_url . "post/listarPosts/inicio";
                $error = new errorcontroller();
                $error->index($mensaje, $mensaje2);
        }
    }

    public function subir($id_tipoArchivo, $id_post) {   //si id_post > 0 entonces se debe actualizar en la tabla     
        $archivoArr = $_FILES['archivo'];
        $archivo = new Archivo($id_tipoArchivo); // extension de archivo                       
        //si ya hay una fila en la tabla archivo con el mismo id_post, entonces actualiza, sino agrega una nueva fila a la tabla archivos    
        if ($id_post > 0) {
            //si entra aqui etonces debe actualizar
            $archivo->setNomFile($id_post);
            if ($archivo->subir($archivoArr)) {
                if ($archivo->actualizaNomFile($id_post)) {
                    return true;
                } else {
                    return false;
                }
            } else {
                return false;
            }
        } else {//sino entonces debe agregar una fila nueva
            $archivo->asignarNombreAFile(); //para darle un nombre al archivo buscamos el id maximo en la tabla
            $archivo->setMaxID();
            if ($archivo->subir($archivoArr)) {
                if ($archivo->registrarEnBD()) {
                    return true;
                } else {
                    return false;
                }
            } else {
                return false;
            }
        }
    }

    public function borrar() {

        $archivo = new Archivo(1);
        $id_post = $archivo->eliminar($_GET['parametro']);
        if ($id_post > 0) {
            $url = base_url . 'post/showPostForm/' . $id_post;
            header('Location: ' . $url);
        } else {
            //$id_file->deleteRow();
            //echo "Error contacta al administrador del sistema";
        }
    }

}
