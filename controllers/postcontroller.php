<?php

require_once 'models/post.php';

class PostController {

    public function showPostForm() {
        require_once 'views/layout_xms/header.php';

        if ($_GET['parametro'] != "inicio") {
            $usuario = new Usuario();
            $usuario->getUsurio($_GET['parametro']);
            $usuarioMRO = $usuario->getListResult();
            $usuarioFO = $usuarioMRO->fetch_object();
        }
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
            if ($save) {// si el correo no existe se guarda
                $mensaje = "Registro exitoso";
                $mensaje2 = "Para terminar el proceso, el nuevo usuario debe revisar su correo y confirmar su inscripcion";
                $url = base_url . "usuario/listarUsuarios/inicio";
                require_once 'views/layout_xms/header.php';
                require_once 'views/layout_xms/confirmacion.php';
                require_once 'views/layout_xms/footer.php';
                //ahora tienes que hacer una consulta para saber el id del usuario

            } else {// sino existe el correo marca error
                //$_SESSION['mensaje'] = "El registro fallo";
                //header("Location:" . base_url . 'usuario/registro/' . $_GET['aux']);
                $mensaje = "Error!!";
                $mensaje2 = " Tu post ya esta registrado!!";
                $error = new errorcontroller();
                $error->index($mensaje, $mensaje2);
            }
        } else {
            $_SESSION['mensaje'] = "El registro fallo";
            //header("Location:" . base_url . 'usuario/registro');
            require_once 'views/usuario/registro.php';
        }
    }    

}
