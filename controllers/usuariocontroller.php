<?php

require_once 'models/usuario.php';
require_once 'models/correoelctronico.php';

class usuariocontroller {
    
        public function nuevo(){    
        require_once 'views/layout_xms/header.php';
        require_once 'views/layout_xms/nuevousuario.php';
        require_once 'views/layout_xms/footer.php';
    }

        public function login() {
        if (count($_POST) > 0) {
            //identificar al usuario
            //consulta a la base de datos
            $Usuario = new Usuario();
            $Usuario->setEmail($_POST['email']);
            $Usuario->setPassword($_POST['password']);
            $identity = $Usuario->login();
            if ($identity && is_object($identity)) {
                //iniciar sesion
                $_SESSION['identity_Session'] = $identity;
                $Usuario->setId_usuario($identity->id_usuario);
                $_SESSION['mensaje'] = "Bienvenido a la administración de Escazu";
                $_SESSION["tiempo"] = time();
                //segun el rol del usuario se redirecciona 
                header("Location:" . base_url_xms . "sistema/cmx/inicio");                
            } else {
                $_SESSION['mensaje'] = 'Tus datos no son correctos, verifica e intenta de nuevo';
                header("Location:" . base_url_page . "sistema/entrar/inicio");
                
            }
            //crear una sesion
        }
//        header("Location:" . base_url);
    }    

    public function confirmasuscripcion() {
        $usuarioObj = new Usuario;
        $id_usuario = $_GET['parametro'];
        $usuarioObj->setListResult("UPDATE usuarios SET confirmado = 1 WHERE id_usuario = " . $id_usuario);
        //localhost/ixtapan/usuario/confirmasuscripcion/1
        //http://ixtapandelasal.com.mx/usuario/confirmasuscripcion/1        
        $mensaje = "Suscripción confirmada";
        $mensaje2 = "Gracias por suscribirte, accede ahora a las promciones de temporada";
        $url = base_url . "sistema/promociones/index" ;
        require_once 'views/usuario/confirmacion.php';
    }

    public function guardar() {
        if (isset($_POST)) {
            //creamos el objeto estudiante
            $turistaObj = new Usuario;
            $propiedadesList = array("nombre", "apellidoP", "apellidoM", "fechaNac", "sexo", "email", "password", "puesto");
            $setList = array("setNombre", "setApellidoP", "setApellidoM", "setFechaNac", "setSexo", "setEmail", "setPassword", "setPuesto");
            $i = 0;
            foreach ($propiedadesList as $value) {
                if (isset($_POST[$value])) {
                    $metodo = $setList[$i];
                    //$estudiante->$metodo($_POST[$value]);
                    $turistaObj->$metodo(strtoupper($_POST[$value]));
                }
                $i++;
            }
            $save = $turistaObj->guardar($propiedadesList, $turistaObj);
            if ($save) {// si el correo no existe se guarda
                $mensaje = "Registro exitoso";
                $mensaje2 = "Para terminar el proceso, revisa tu correo y confirma tu suscripción";
                $url = base_url_xms;
                require_once 'views/layout_xms/header.php';
                require_once 'views/layout_xms/confirmacion.php';
                require_once 'views/layout_xms/footer.php';
                //ahora tienes que hacer una consulta para saber el id del usuario
                if ($_GET['parametro'] == "newsletter") {//si registro solo su correo entonces le mandamos un email
                    $email = strtoupper($_POST[$value]);
                    $turistaObj->setListResult("SELECT id_usuario FROM usuarios WHERE email='" . $email . "'");
                    $turistaArr = $turistaObj->listResult->fetch_object(); //el metodo fetcobject convierte el resultado en un array asociativo
                    $id_usuario = $turistaArr->id_usuario;
                    //ahora tienes que enviar un mail que contenga un formulario con el id del usuario
                    $message = '
                    <!DOCTYPE html>
                    <html lang="es-mx">
                    <head>
                    <title>CSS Template</title>
                    <meta charset="utf-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1">
                    <style>
                    * {
                      box-sizing: border-box;
                    }

                    body {
                      font-family: Arial, Helvetica, sans-serif;
                    }

                    /* Style the header */
                    .header {
                      background-color: #f1f1f1;
                      padding: 30px;
                      text-align: center;
                      font-size: 35px;
                    }

                    /* Create three equal columns that floats next to each other */
                    .column {
                      float: left;
                      width: 33.33%;
                      padding: 10px;
                      height: 300px; /* Should be removed. Only for demonstration */
                    }

                    /* Clear floats after the columns */
                    .row:after {
                      content: "";
                      display: table;
                      clear: both;
                    }

                    /* Style the footer */
                    .footer {
                      background-color: #f1f1f1;
                      padding: 10px;
                      text-align: center;
                    }

                    /* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
                    @media (max-width: 600px) {
                      .column {
                        width: 100%;
                      }
                    }

                    .button {
                      background-color: #008CBA; /* Green */
                      border: none;
                      color: white;
                      padding: 15px 32px;
                      text-align: center;
                      text-decoration: none;
                      display: inline-block;
                      font-size: 16px;
                      margin: 4px 2px;
                      cursor: pointer;
                    }

                    .button3 {width: 100%;}
                    </style> 
                    </head>
                    <body>

                    <h2>BIENVENIDO</h2>
                    <p>Te damos la bienvenida a nuestra comunidad, confirma tu suscripción y no te pierdas ninguna promoción ó descuento en hoteles, SPA, restaurantes, tours etc.</p>
                    <p>Solo te hace falta confirmar tu suscripción dando click en el botón de abajo.</p>

                    <div class="header">
                      <h2>IXTAPAN DE LA SAL</h2>
                    </div>

                    <!--div class="row">
                      <div class="column" style="background-color:#aaa;">Column</div>
                      <div class="column" style="background-color:#bbb;">Columna</div>
                      <div class="column" style="background-color:#ccc;">Column</div>
                    </div-->

                    <div class="footer">
                      <a href="http://ixtapandelasal.com.mx/usuario/confirmasuscripcion/' . $id_usuario . '"><button class="button button3">Confirmar suscripción</button></a>
                      <p>Para mas información: atencionweb@ixtapandelasal.com.mx</p>
                      <a href="http://ixtapandelasal.com.mx">http://ixtapandelasal.com.mx</a>
                    </div>

                    </body>
                    </html>
                    ';
                    $correo = new CorreoElectronico($email, "Confirmación", $message);
                    if ($correo->sendMail()) {
                        echo "correcto";
                    }
                }
            } else {// sino existe el correo marca error
                //$_SESSION['mensaje'] = "El registro fallo";
                //header("Location:" . base_url . 'usuario/registro/' . $_GET['aux']);
                $mensaje = "Error!!";
                $mensaje2 = " Tu correo ya esta registrado!!";
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
