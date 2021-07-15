<?php

require_once 'models/archivo.php';

class archivoController {

public function insertarFilaVaciaRelacionada($id_post, $tipoArchivo){//tal vez esto no sea necesario
    $archivo= new Archivo($tipoArchivo);
    $archivo->setId_post($id_post);
    $archivo->insertarFilaVaciaRelacionada();
}
        
    public function subir($id_tipoArchivo, $id_post) {   //si id_post > 0 entonces se debe actualizar en la tabla     
        $archivoArr = $_FILES['archivo'];
        $archivo = new Archivo($id_tipoArchivo);// extension de archivo
           
            
            //si ya hay una fila en la tabla archivo con el mismo id_post, entonces actualiza, sino agrega una nueva fila a la tabla archivos
            
            //buscaArchivoXidpost
            
            if($id_post > 0){
                //si entra aqui etonces debe actualizar
                
                $archivo->setNomFile($id_post);
                if ($archivo->subir($archivoArr)){
                    if ($archivo->actualizaNomFile($id_post)){
                        return true;
                    }else{
                        return false;
                    }                 
                }else{
                    return false;
                }
            }else{//sino entonces debe agregar una fila nueva
                $archivo->asignarNombreAFile();//para darle un nombre al archivo buscamos el id maximo en la tabla
                $archivo->setId_post();
                if ($archivo->subir($archivoArr)){                    
                    if ($archivo->registrarEnBD()){
                        return true;
                    }else{
                        return false;
                    }
                }
                else{
                    return false;
                }
            }            
    }

    public function  borrar(){        
        
        $archivo = new Archivo(1);
        $id_post=$archivo->eliminar($_GET['parametro']);
        if ($id_post > 0) {
            $url = base_url . 'post/showPostForm/' . $id_post;
            header('Location: '. $url);
            
        } else {
            //$id_file->deleteRow();
            //echo "Error contacta al administrador del sistema";
        }        
        
    }
    

}
