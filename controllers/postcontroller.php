<?php

require_once 'models/post.php';
require_once 'controllers/archivocontroller.php';

class PostController {

    public function crear() {
        //insertar una fila en la tabla post
        //despues recuperar el id maximo de la tabla post
        $postObj = new Post();
        $postObj->insertarPostVacio();
        $postObj->setId_post();
        $id_post = $postObj->getId_post();
        //tambien es necesario insertar una fila en la tabla archivo

        $ac = new archivoController(1);
        $ac->insertarFilaVaciaRelacionada($id_post, 1);



        $this->showPostForm($id_post);
    }

    public function actualizaPost() {
        if (isset($_POST)) {
            //creamos el objeto estudiante
            $postObj = new Post;
            $propiedadesList = array("id_post", "idAstxt", "activo", "nom_post", "slogan", "id_categoria", "descripcion_corta", "contenido");
            $setList = array("setId_post", "setidAstxt", "setactivo", "setnom_post", "setslogan", "setid_categoria", "setdescripcion_corta", "setcontenido");
            $i = 0;
            foreach ($propiedadesList as $value) {
                if (isset($_POST[$value])) {
                    $metodo = $setList[$i];
                    $postObj->$metodo(strtoupper($_POST[$value]));
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
                        $url = base_url . "post/listarPosts/inicio";
                        require_once 'views/layout_xms/header.php';
                        require_once 'views/layout_xms/confirmacion.php';
                        require_once 'views/layout_xms/footer.php';
                    } else {
                        $mensaje = "Error";
                        $mensaje2 = $resultadoSubir;
                        $url = base_url . "post/listarPosts/inicio";
                        $error = new errorcontroller();
                        $error->index($mensaje, $mensaje2);                        
                    }
                }else{
                        $mensaje = "Exito";
                        $mensaje2 = "Los datos del post se actualizaron exitosamente";
                        $url = base_url . "post/listarPosts/inicio";
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

        $url = base_url . "post/listarPosts/inicio";
        require_once 'views/layout_xms/confirmacion.php';

        $this->listarPosts();
        require_once 'views/layout_xms/listar_posts.php';
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
        if ($id_post > 0) {
            $postObj->getPost($id_post);
        } else {
            $postObj->getPost($_GET['parametro']);
        }
        $postMRO = $postObj->getListResult();
        $postFO = $postMRO->fetch_object();

        require_once 'views/layout_xms/post_form.php';
        require_once 'views/layout_xms/footer.php';
    }

    public function guardar() {
        if (isset($_POST)) {
            //creamos el objeto estudiante
            $nuevoPost = new Post;
            $propiedadesList = array("idAstxt", "activo", "id_usuario", "nom_post", "slogan", "id_categoria", "descripcion_corta", "contenido");
            $setList = array("setidAstxt", "setactivo", "setid_usuario", "setnom_post", "setslogan", "setid_categoria", "setdescripcion_corta", "setcontenido");

            $i = 0;
            foreach ($propiedadesList as $value) {
                if (isset($_POST[$value])) {
                    $metodo = $setList[$i];
                    $nuevoPost->$metodo(strtoupper($_POST[$value]));
                }
                $i++;
            }
            $save = $nuevoPost->guardar($propiedadesList, $nuevoPost);


            if ($save) {// si se guardo el post entonces subimos el arhivo
                $AC = new archivoController();
                $resultadoSubir = $AC->subir(1, 0);
                if ($resultadoSubir) {
                    $mensaje = "Se creo el post";
                    $mensaje2 = "Se subio la imagen!!";
                    $url = base_url . "post/listarPosts/inicio";
                } else {
                    $mensaje = "Error";
                    $mensaje2 = $resultadoSubir;
                    $url = base_url . "post/listarPosts/inicio";
                }
            } else {
                
            }
            require_once 'views/layout_xms/header.php';
            require_once 'views/layout_xms/confirmacion.php';
            require_once 'views/layout_xms/footer.php';
        } else {// sino existe el correo marca error
            //$_SESSION['mensaje'] = "El registro fallo";
            //header("Location:" . base_url . 'usuario/registro/' . $_GET['aux']);
            $mensaje = "Error!!";
            $mensaje2 = " Tu post ya esta registrado!!";
            $error = new errorcontroller();
            $error->index($mensaje, $mensaje2);
        }
    }

}
