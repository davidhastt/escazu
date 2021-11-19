<?php

require_once 'models/post.php';
require_once 'controllers/archivocontroller.php';

class PostController {

    public function crear() {
        //insertar una fila en la tabla post
        //despues recuperar el id maximo de la tabla post
        $postObj = new Post();
        $postObj->insertarPostVacio();
        $postObj->setMaxID();
        $id_post = $postObj->getMaxID();
        //tambien es necesario insertar una fila en la tabla archivo
        $ac = new archivoController();
        $ac->insertarFilaVaciaRelacionada($id_post, 1);
        $this->showPostForm($id_post);
    }

    public function actualizaPost() {
        if (isset($_POST)) {
            $postObj = new Post;
            $propiedadesList = array("id_post", "activo", "nom_post", "slogan", "id_categoria", "descripcion_corta", "contenido", "nota1", "idioma", "seo_keywords");
            $setList = array("setId_post", "setactivo", "setnom_post", "setslogan", "setid_categoria", "setdescripcion_corta", "setcontenido", "setNota1", "setIdioma", "setSeo_keywords");
            $i = 0;
            foreach ($propiedadesList as $value) {
                if (isset($_POST[$value])) {
                    $metodo = $setList[$i];
                    $postObj->$metodo($_POST[$value]);
                }
                $i++;
            }
            //$save = $turistaObj->guardar($propiedadesList, $turistaObj);
            $actualiza = $postObj->actualiza();
            if ($actualiza) {

                //aqui tienes que hacer una validacion, si actualizo pero no cambio la imagen entonces no debe entrar aqui
                if (isset($_FILES['archivo'])) {
                    $AC = new archivoController();
                    $resultadoSubir = $AC->subir(1, $postObj->getId_post()); //el 1 significa que es un archivo jpg       
                    if ($resultadoSubir) {
                        $mensaje = "Exito";
                        $mensaje2 = "Los datos del post se actualizaron exitosamente";
                        $url = base_url . "post/listarPosts/listarEnCMX";
                        require_once 'views/layout_xms/header.php';
                        require_once 'views/layout_xms/confirmacion.php';
                        require_once 'views/layout_xms/footer.php';
                    } else {
                        $mensaje = "Error";
                        $mensaje2 = $resultadoSubir;
                        $url = base_url . "post/listarPosts/listarEnCMX";
                        $error = new errorcontroller();
                        $error->index($mensaje, $mensaje2);                        
                    }
                }else{
                        $mensaje = "Exito";
                        $mensaje2 = "Los datos del post se actualizaron exitosamente";
                        $url = base_url . "post/listarPosts/listarEnCMX";
                        require_once 'views/layout_xms/header.php';
                        require_once 'views/layout_xms/confirmacion.php';
                        require_once 'views/layout_xms/footer.php';                        
                }
                //ahora tienes que hacer una consulta para saber el id del usuario
            } else {// sino existe el correo marca error
                //$_SESSION['mensaje'] = "El registro fallo";
                //header("Location:" . base_url . 'usuario/registro/' . $_GET['aux']);
                $mensaje = "Error!!";
                $mensaje2 = " Hubo un error inesperado y no se actualizo el post!!";
                $error = new errorcontroller();
                $error->index($mensaje, $mensaje2);
            }
        } else {
            $_SESSION['mensaje'] = "El registro fallo";
            //header("Location:" . base_url . 'usuario/registro');
            require_once 'views/usuario/registro.php';
        }
    }

    public function borrar_post() {
        require_once 'views/layout_xms/header.php';
        $postObjt = new Post();
        $postFO = $postObjt->borrarPost($_GET['parametro']);

        if ($postFO == true) {
            $mensaje = "Confirmación";
            $mensaje2 = "El post fue borrado satisfactoriamente";
        } else {
            $mensaje = "Error";
            $mensaje2 = "No se pudo borrar el post";
        }

        $url = base_url . "post/listarPosts/listarEnCMX";//http://localhost/escazu/post/listarPosts/listarEnCMX
        require_once 'views/layout_xms/confirmacion.php';
        require_once 'views/layout_xms/footer.php';
    }

    public function listarPosts() {
        require_once 'views/layout_xms/header.php';
        $postCls = new Post();
        $usuariosFO = $postCls->listarPosts($_GET['parametro']);
        require_once 'views/layout_xms/listar_posts.php';
        require_once 'views/layout_xms/footer.php';
    }

    public function showPostForm($id_post = NULL) {
        require_once 'views/layout_xms/header.php';
        $postObj = new Post();
        if (!isset($id_post)) {
            $id_post=$_GET['parametro'];
        }
        
        $postObj->getPost($id_post);
        
        
        $postMRO = $postObj->getListResult();
        $postFO = $postMRO->fetch_object();
        
        //Ahora revisar los archivos multimedia
        $postObj->obtenerArchivosAsociados($id_post);
        $archivosMRO=$postObj->getListResult();
        
        
$archivosMP4=array();
$pesos=array();
$thefolder = "assets/page/mp4/temp/";

if ($handler = opendir($thefolder)) {
    while (false !== ($file = readdir($handler))) {            
        array_push($archivosMP4, $file);
        
        if (filesize($thefolder.$file)> 1073741824){
            $peso=bcdiv(filesize($thefolder.$file)/1073741824, 1, 2);
            $pesoSTR=$peso . " Gb";
            
            
        }
        else{
            $peso=bcdiv(filesize($thefolder.$file)/1048576, 1, 2);
            $pesoSTR=$peso . " MB";
        }
        
        array_push($pesos, $pesoSTR);
    }
    closedir($handler);
}        
        

        

        require_once 'views/layout_xms/post_form.php';
        require_once 'views/layout_xms/footer.php';
    }
}
