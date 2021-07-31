<?php

require_once 'models/post.php'; //asegurate que este require sea necesario
require_once 'models/estadistica.php';

class sistemacontroller {

    public function index() {//index principal
        $seo_title = "Geografia MX territorio y tecnología";
        $seo_keywords = "geografia, geografia de mexico, mexico, territorio mexicano, sistemas de informacion geografica mexico";
        $seo_description = "Esta pagina va dirigida a los profesionistas de la geografía encuentra recursos";
        //open graph
        $og_image = base_url . "assets/img/about-bg.jpg";
        $og_title = "Geografia MX";
        $og_description = "Esta pagina va dirigida a los profesionistas de la geografía encuentra recursos";
        $og_url = "http://geografia.mx";
        $og_section = "main";
        require_once 'views/layout_page/header.php';

        $lista_postMRO = $this->listarPosts("inicio");

        require_once 'views/layout_page/inicio.php';
        require_once 'views/layout_page/footer.php';
    }

    public function acuerdo() {//index principal
        $seo_title = "Geografia MX territorio y tecnología";
        $seo_keywords = "geografia, geografia de mexico, mexico, territorio mexicano, sistemas de informacion geografica mexico";
        $seo_description = "Esta pagina va dirigida a los profesionistas de la geografía encuentra recursos";
        //open graph
        $og_image = base_url . "assets/img/about-bg.jpg";
        $og_title = "Geografia MX";
        $og_description = "Esta pagina va dirigida a los profesionistas de la geografía encuentra recursos";
        $og_url = "http://geografia.mx";
        $og_section = "main";
        require_once 'views/layout_page/header.php';

        $lista_postMRO = $this->listarPosts("acuerdo");

        require_once 'views/layout_page/inicio.php';
        require_once 'views/layout_page/footer.php';
    }

    public function conferencias() {//index principal
        $seo_title = "Geografia MX territorio y tecnología";
        $seo_keywords = "geografia, geografia de mexico, mexico, territorio mexicano, sistemas de informacion geografica mexico";
        $seo_description = "Esta pagina va dirigida a los profesionistas de la geografía encuentra recursos";
        //open graph
        $og_image = base_url . "assets/img/about-bg.jpg";
        $og_title = "Geografia MX";
        $og_description = "Esta pagina va dirigida a los profesionistas de la geografía encuentra recursos";
        $og_url = "http://geografia.mx";
        $og_section = "main";
        require_once 'views/layout_page/header.php';

        $lista_postMRO = $this->listarPosts("conferencias");

        require_once 'views/layout_page/inicio.php';
        require_once 'views/layout_page/footer.php';
    }

    public function materiales() {//index principal
        $seo_title = "Geografia MX territorio y tecnología";
        $seo_keywords = "geografia, geografia de mexico, mexico, territorio mexicano, sistemas de informacion geografica mexico";
        $seo_description = "Esta pagina va dirigida a los profesionistas de la geografía encuentra recursos";
        //open graph
        $og_image = base_url . "assets/img/about-bg.jpg";
        $og_title = "Geografia MX";
        $og_description = "Esta pagina va dirigida a los profesionistas de la geografía encuentra recursos";
        $og_url = "http://geografia.mx";
        $og_section = "main";
        require_once 'views/layout_page/header.php';

        $lista_postMRO = $this->listarPosts("materiales");

        require_once 'views/layout_page/inicio.php';
        require_once 'views/layout_page/footer.php';
    }

    public function ligas() {//index principal
        $seo_title = "Geografia MX territorio y tecnología";
        $seo_keywords = "geografia, geografia de mexico, mexico, territorio mexicano, sistemas de informacion geografica mexico";
        $seo_description = "Esta pagina va dirigida a los profesionistas de la geografía encuentra recursos";
        //open graph
        $og_image = base_url . "assets/img/about-bg.jpg";
        $og_title = "Geografia MX";
        $og_description = "Esta pagina va dirigida a los profesionistas de la geografía encuentra recursos";
        $og_url = "http://geografia.mx";
        $og_section = "main";
        require_once 'views/layout_page/header.php';

        $lista_postMRO = $this->listarPosts("ligas");

        require_once 'views/layout_page/inicio.php';
        require_once 'views/layout_page/footer.php';
    }

    public function cursos() {//index principal
        $seo_title = "Geografia MX territorio y tecnología";
        $seo_keywords = "geografia, geografia de mexico, mexico, territorio mexicano, sistemas de informacion geografica mexico";
        $seo_description = "Esta pagina va dirigida a los profesionistas de la geografía encuentra recursos";
        //open graph
        $og_image = base_url . "assets/img/about-bg.jpg";
        $og_title = "Geografia MX";
        $og_description = "Esta pagina va dirigida a los profesionistas de la geografía encuentra recursos";
        $og_url = "http://geografia.mx";
        $og_section = "main";
        require_once 'views/layout_page/header.php';

        $lista_postMRO = $this->listarPosts("cursos");

        require_once 'views/layout_page/inicio.php';
        require_once 'views/layout_page/footer.php';
    }

    public function entrar() {
        require_once 'views/layout_page/header.php';
        require_once 'views/layout_page/login.php';
        require_once 'views/layout_page/footer.php';
        //http://localhost/escazu/sistema/entrar/inicio    
    }

    public function cmx() {//index principal
        $seo_title = "Geografia MX territorio y tecnología";
        $seo_keywords = "geografia, geografia de mexico, mexico, territorio mexicano, sistemas de informacion geografica mexico";
        $seo_description = "Esta pagina va dirigida a los profesionistas de la geografía encuentra recursos";
        //open graph
        $og_image = base_url . "assets/img/about-bg.jpg";
        $og_title = "Geografia MX";
        $og_description = "Esta pagina va dirigida a los profesionistas de la geografía encuentra recursos";
        $og_url = "http://geografia.mx";
        $og_section = "main";
        require_once 'views/layout_xms/header.php';
        require_once 'views/layout_xms/inicio.php';
        require_once 'views/layout_xms/footer.php';
        //asi lo mandamos llamar: localhost/escazu/sistema/cmx/inicio
    }

    public function visitas() {
        //Definir el mes en el que estamos
        //http://ixtapandelasal.com.mx/ixtapan/sistema/visitas/mensuales

        /*
          tener los email a donde se enviara el reporte ok
          para cada servicio turistico
          posts.hits-(visitas.mes anterior)=  visitas en este mes
          insertar el valor "visitas en este mes" en el mes correspoondinte
          para cada socio hacer
          enviar reporte al socio correspondiente */
//obtener los id de los servcios para el año en curso
        $servicioTobj = new Estadistica;
        $servicioTobj->visitasxmes();
    }

    private function listarPosts($categoria) {
        $lista_postMRO = new Post;
        $lista_postMRO->listarPosts($categoria);
        return $lista_postMRO->listResult;
    }

    private function listarPostsX($seccion) {// con este metodo se construye una pagina donde se muestran todos los servicios turisticos segun su categoria
        $seccion->setListResult("SELECT id_servicio,  nom_servicio, minidescripcion FROM posts WHERE categoria='" . $seccion->getCategoria() . "'  AND activo = 1");
        $servicioArr = $seccion->listResult; //no hagas caso de la advertencia de netbeans, si se usa esta variable
        $cateogoria = $seccion->getCategoria();
        //Ya que esta creada la lista de atractivos: mandar llamar los encabezados
        $seccion->setEncabezados();
        $encabezadoArr = $seccion->getEncabezados();
        //SEO        
        $seccion->setSeo_title($encabezadoArr->seo_title);
        $seccion->setSeo_keywords($encabezadoArr->seo_keywords);
        $seccion->setSeo_description($encabezadoArr->seo_description);
        $seo_title = $seccion->getSeo_title();
        $seo_keywords = $seccion->getSeo_keywords();
        $seo_description = $seccion->getSeo_description();
        //open graph (og_title sale del seo)
        $og_image = base_url . "assets/img/" . $cateogoria . "/" . $encabezadoArr->id_og_image . ".jpg";
        $og_description = $encabezadoArr->og_description;
        $og_url = base_url . "sistema/" . $cateogoria . "/index";
        $og_section = $cateogoria;

        $seccion->setId_imageAsList($og_image);
        //hits
        $seccion->setId_servicio($encabezadoArr->id_categoria);
        $seccion->setHits($encabezadoArr->hits);
        $updatehits = $seccion->getHits() + 1;
        $id_categoria = $seccion->getId_servicio();
        $seccion->setListResult("UPDATE categorias SET hits = '" . $updatehits . "' WHERE id_categoria = " . $id_categoria);
        $slogan = $encabezadoArr->slogan;
        $tituloPagina = $encabezadoArr->nom_categoria;
        $subMainTitle = $encabezadoArr->subMainTitle;
        require_once 'views/layout/header.php';
        require_once 'views/listaposts.php';
        require_once 'views/layout/footer.php';
    }

    public function showPost() {
        $postOBJ = new Post();
        $postOBJ->setId_post($_GET['parametro']);


        $postOBJ->setListResult("SELECT * FROM posts WHERE id_post=" . $postOBJ->getId_post());
        $postMRO = $postOBJ->getListResult();
        $postFO = $postMRO->fetch_object();
        $postOBJ->setNom_post($postFO->nom_post);



        $postOBJ->setSlogan($postFO->slogan);
        $postOBJ->setDescripcion_corta($postFO->descripcion_corta);
        $postOBJ->setContenido($postFO->contenido);
        $postOBJ->setId_categoria($postFO->id_categoria); // creo que esta propiedad no es necesaria llenarla
        $postOBJ->setNota1($postFO->nota1);
        //SEO        
        $postOBJ->setSeo_title($postFO->seo_title);
        $postOBJ->setSeo_keywords($postFO->seo_keywords);
        $postOBJ->setSeo_description($postFO->seo_description);
        /*
          $seo_title = $postOBJ->getSeo_title();
          $seo_keywords = $postOBJ->getSeo_keywords();
          $seo_description = $postOBJ->getSeo_description();
          //open graph
          $postOBJ->setId_imageAsList($postFO->id_imageAsList);
          $og_image = base_url . "assets/img/" . $postOBJ->getCategoria() . "/" . $postOBJ->getId_imageAsList() . ".jpg";
          $og_title = $postOBJ->getSeo_title();
          $og_description = $postFO->og_description;
          $og_url = base_url . "sistema/" . $postOBJ->getCategoria() . "/" . $postFO->id_servicio;
          $og_section = $postOBJ->getCategoria();
         */
        //redes sociales
        //$postOBJ->setWhatsapp($postFO->whatsapp);
        //$postOBJ->setLinkFacebook($$postFO->linkFacebook);
        //$postOBJ->setLinkYoutube($$postFO->linkYoutube);
        //$postOBJ->setLinkInstagram($$postFO->linkInstagram); 
        //Volvemos a usar el metodo setListResult para buscar el archivo de presentacion de post
        $postOBJ->setListResult("SELECT nom_file FROM archivos WHERE id_post={$postOBJ->getId_post()} AND rol = 1");
        $postMRO = $postOBJ->getListResult();
        $postFO = $postMRO->fetch_object();
        $postOBJ->setId_imageAsList($postFO->nom_file);





        /*
          //construir galeria
          $postOBJ->setListResult("SELECT url FROM multimedia WHERE id_post=" . $postOBJ->getId_servicio());
          $postOBJ->setFotos($postOBJ->getListResult());
         */

        //$postOBJ->setPrecioAsHtml($$postFO->precioAsHtml);
        //promociones
        /* $postOBJ->setListResult("SELECT * FROM promociones WHERE status =1"); //esto ya no va
          $postOBJ->setPromociones($postOBJ->getListResult());
          //recomendaciones
          $postOBJ->setListResult("SELECT id_servicio, nom_servicio, slogan, id_imageAsList, categoria FROM `posts` ORDER BY RAND() LIMIT 3");
          $postOBJ->setRecomendaciones($postOBJ->getListResult());
          //hits
          $postOBJ->setHits($postFO->hits);
          $updatehits = $postOBJ->getHits() + 1;
          $id_servicio = $postOBJ->getId_servicio();
          $postOBJ->setListResult("UPDATE posts SET hits = '" . $updatehits . "' WHERE id_servicio = " . $id_servicio);
         */

        $slogan = $postOBJ->getSlogan();
        $titulo = $postOBJ->getNom_post();
        $descripcion_corta = $postOBJ->getDescripcion_corta();
        $contenido = $postOBJ->getContenido();
        $nota1=$postOBJ->getNota1();
        //Ahora obtendremos los archivos asociados
        $postOBJ->obtenerArchivosAsociados($postOBJ->getId_post()); //cambiale el nommbre a este metodo
        $archivosMROjpg = $postOBJ->getListResult();

        $imagenes = "";
        $pdfs = "";
        $mp3s="";
        while ($archivosFO = $archivosMROjpg->fetch_object()) {
            //1=jpg de presentacion, 2= pdf, 3=jpg pra carrusel 4=mp3
            switch ($archivosFO->id_tipoArchivo) {
                case 2:
                    /*if ($archivosFO->id_tipoArchivo == 2) 
                    {
                    echo "PDF"; $ruta = base_url . "assets/page/pdf/";                         
                    }*/
                    
                    $pdfs.= '<div class="card text-center">
                        <div class="card-header">
                            Archivo listo para visualizar
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Titulo del archivo <?php ?></h5>
                            <p class="card-text">Aquí va una descripcion del archivo</p>
                            <a href="'.base_url.'assets/page/pdf/'. $archivosFO->nom_file .'.pdf" class="btn btn-primary" target="_blank">Ver</a>
                        </div>
                        <div class="card-footer text-muted">
                            Escazú
                        </div>
                        </div>';

                    break;
                case 3:
                    $imagenes .= "<img src='" . base_url . "assets/page/img/jpg/" . $archivosFO->nom_file . ".jpg' class='img-fluid' alt='No pudimos encontrar el archivo " . $archivosFO->nom_file . "'>";
                    break;
                case 4:
                    $mp3s.='<audio controls>
                            <source src="'.base_url.'assets/page/mp3/'. $archivosFO->nom_file .'.ogg" type="audio/ogg">
                            <source src="'.base_url.'assets/page/mp3/'. $archivosFO->nom_file .'.mp3" type="audio/mpeg">
                            Tu navegador no soporta archivos mp3
                          </audio>';
                    break;                
                default:
                    break;
            }
        }




        /*
          //Ahora buscaremos archivos pdf
          $postOBJ->obtenerArchivosPDF($postOBJ->getId_post());
          $archivosMROpdf=$postOBJ->getListResult();
         */

        require_once 'views/layout_page/header.php';
        require_once 'views/layout_page/postBody.php';
        require_once 'views/layout_page/footer.php';
    }

    private function topservices() {
        $stat = new Estadistica();
        $stat->top10();
        $top10 = $stat->getListResult();
        require_once 'views/topservices.php';
    }

}
