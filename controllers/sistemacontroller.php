<?php

require_once 'models/post.php'; //asegurate que este require sea necesario
require_once 'models/estadistica.php';

class sistemacontroller {

    public function busqueda() {
        require_once "views/layout_page/{$_SESSION['idioma']}/header.php";
        $busqueda = new Post;
        $busqueda->busqueda($_POST['where']);
        $lista_postMRO=$busqueda->listResult;
        //$encabezadoAmostrar="inicio";
        $mensaje=$_POST['where'];
        
        require_once "views/layout_page/{$_SESSION['idioma']}/searchresult.php";
        require_once "views/layout_page/{$_SESSION['idioma']}/footer.php";  
                
    }

    public function cambiaridioma() {
        $_SESSION["idioma"] = $_GET['parametro'];
        $this->index();
    }

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

        /*if(!isset($_SESSION['idioma'])){
            $_SESSION['idioma']="ESP";
        }*/


        $idioma=$_SESSION['idioma'];
        echo "<script>console.log('Idioma configurado {$idioma}')</script>";
        
        require_once "views/layout_page/{$_SESSION['idioma']}/header.php";
        //require_once "views/layout_page/ESP/header.php";


        $encabezadoAmostrar="inicio";        
        $lista_postMRO = $this->listarPosts("inicio");
        require_once "views/layout_page/{$_SESSION['idioma']}/inicio.php";
        //require_once "views/layout_page/ESP/inicio.php";        

        require_once "views/layout_page/{$_SESSION['idioma']}/footer.php";
        //require_once "views/layout_page/ESP/footer.php";
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
        require_once "views/layout_page/{$_SESSION['idioma']}/header.php";
        $lista_postMRO = $this->listarPosts("acuerdo");
        //configuramos el encabezado
        $encabezadoAmostrar="acuerdo";
        if($_SESSION['idioma']=="ESP"){
            $tituloSeccion='<h2> El acuerdo <strong class="llow">Escazú</strong> </h2>';
            $subtituloSeccion="Lo que tienes que saber";
            $descripcionSeccion="Los países de América Latina y el Caribe crearon una herramienta pionera en el contexto de la protección ambiental y los derechos humanos que refleja la ambición, las prioridades y las particularidades de la región: el Acuerdo Regional sobre Acceso a la Información, la Participación Pública y el Acceso a la Justicia en Asuntos Ambientales en América Latina y el Caribe, más conocido como el Acuerdo de Escazú.";            
        }elseif($_SESSION['idioma']=="ENG"){
            $tituloSeccion='<h2>Escazu <strong class="llow">agreement</strong> </h2>';
            $subtituloSeccion="What you have to know";
            $descripcionSeccion="The countries of Latin America and the Caribbean created a pioneering tool in the context of environmental protection and human rights that reflects the ambition, priorities and particularities of the region: the Regional Agreement on Access to Information, Public Participation and Access to Justice in Environmental Matters in Latin America and the Caribbean, better known as the Escazú Agreement.";            
        }elseif($_SESSION['idioma']=="PORT"){
            $tituloSeccion='<h2> Acordo de <strong class="llow">Escazú</strong> </h2>';
            $subtituloSeccion="O que você tem que saber";
            $descripcionSeccion="Os países da América Latina e do Caribe criaram uma ferramenta pioneira no contexto da proteção ambiental e dos direitos humanos que reflete a ambição, as prioridades e as particularidades da região: o Acordo Regional de Acesso à Informação, Participação Pública e Acesso à Justiça em Matéria Ambiental na América Latina e no Caribe, mais conhecido como Acordo Escazú.";                        
        }
        
        
        

        require_once "views/layout_page/{$_SESSION['idioma']}/inicio.php";
        require_once "views/layout_page/{$_SESSION['idioma']}/footer.php";
    }

    public function eventos() {//index principal
        $seo_title = "Geografia MX territorio y tecnología";
        $seo_keywords = "geografia, geografia de mexico, mexico, territorio mexicano, sistemas de informacion geografica mexico";
        $seo_description = "Esta pagina va dirigida a los profesionistas de la geografía encuentra recursos";
        //open graph
        $og_image = base_url . "assets/img/about-bg.jpg";
        $og_title = "Geografia MX";
        $og_description = "Esta pagina va dirigida a los profesionistas de la geografía encuentra recursos";
        $og_url = "http://geografia.mx";
        $og_section = "main";
        require_once "views/layout_page/{$_SESSION['idioma']}/header.php";

        $lista_postMRO = $this->listarPosts("eventos");
        //configuramos el encabezado
        $encabezadoAmostrar="eventos";
        
        
        if($_SESSION['idioma']=="ESP"){
            $tituloSeccion='<h2> Proximos <strong class="llow">Eventos</strong> </h2>';
            $subtituloSeccion="Lo que sigue";
            $descripcionSeccion="Los eventos son aquellos fenómenos que surgen de ocasiones no rutinarias y que tienen objetivos de ocio, culturales, personales u organizativos establecidos de forma separada a la actividad normal diaria, cuya finalidad es ilustrar, celebrar, entretener o generar experiencias en un grupo de personas.";
        }elseif($_SESSION['idioma']=="ENG"){
            $tituloSeccion='<h2> Upcoming <strong class="llow">events</strong> </h2>';
            $subtituloSeccion="What's next";
            $descripcionSeccion="Events are those phenomena that arise from non-routine occasions and that have leisure, cultural, personal or organizational objectives established separately from normal daily activity, whose purpose is to illustrate, celebrate, entertain or generate experiences in a group of people.";
        }elseif($_SESSION['idioma']=="PORT"){
            $tituloSeccion='<h2> Proximos <strong class="llow">Eventos</strong> </h2>';
            $subtituloSeccion="O seguinte";
            $descripcionSeccion="Eventos são aqueles fenômenos que surgem de ocasiões não rotineiras e que têm objetivos de lazer, culturais, pessoais ou organizacionais estabelecidos separadamente da atividade cotidiana normal, cujo objetivo é ilustrar, celebrar, entreter ou gerar experiências em um grupo de pessoas.";
        }        
        
        
        
        
        
        

        require_once "views/layout_page/{$_SESSION['idioma']}/inicio.php";
        require_once "views/layout_page/{$_SESSION['idioma']}/footer.php";
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
        require_once "views/layout_page/{$_SESSION['idioma']}/header.php";

        $lista_postMRO = $this->listarPosts("materiales");
        //configuramos el encabezado
        $encabezadoAmostrar="materiales";
        
        if($_SESSION['idioma']=="ESP"){
            $tituloSeccion='<h2> Materiales <strong class="llow">educativos</strong> </h2>';
            $subtituloSeccion="Encuentra materiales";
            $descripcionSeccion="Un material es un elemento que puede transformarse y agruparse en un conjunto. Los elementos del conjunto pueden tener naturaleza real, naturaleza virtual o ser totalmente abstractos.";
        }elseif($_SESSION['idioma']=="ENG"){
            $tituloSeccion='<h2>Educational <strong class="llow">materials</strong> </h2>';
            $subtituloSeccion="Find materials";
            $descripcionSeccion="A material is an element that can be transformed and grouped into a set. The elements of the set can have real nature, virtual nature or be totally abstract.";
        }elseif($_SESSION['idioma']=="PORT"){
            $tituloSeccion='<h2>Materiais <strong class="llow">educacionais</strong> </h2>';
            $subtituloSeccion="Encontre materiais";
            $descripcionSeccion="Um material é um elemento que pode ser transformado e agrupado em um conjunto. Os elementos do conjunto podem ser de natureza real, virtual ou totalmente abstratos.";
        }        
        
        
        

        require_once "views/layout_page/{$_SESSION['idioma']}/inicio.php";
        require_once "views/layout_page/{$_SESSION['idioma']}/footer.php";
    }

    public function enlaces() {//index principal
        $seo_title = "Geografia MX territorio y tecnología";
        $seo_keywords = "geografia, geografia de mexico, mexico, territorio mexicano, sistemas de informacion geografica mexico";
        $seo_description = "Esta pagina va dirigida a los profesionistas de la geografía encuentra recursos";
        //open graph
        $og_image = base_url . "assets/img/about-bg.jpg";
        $og_title = "Geografia MX";
        $og_description = "Esta pagina va dirigida a los profesionistas de la geografía encuentra recursos";
        $og_url = "http://geografia.mx";
        $og_section = "main";
        require_once "views/layout_page/{$_SESSION['idioma']}/header.php";

        $lista_postMRO = $this->listarPosts("enlaces");
        //configuramos el encabezado
        $encabezadoAmostrar="enlaces";
        

        if($_SESSION['idioma']=="ESP"){
            $tituloSeccion='<h2> Enlaces y <strong class="llow">ligas de interes</strong> </h2>';
            $subtituloSeccion="Links de paginas amigas";
            $descripcionSeccion="De manera constante, actualizamos nuestro portal para comunicarte información de tu utilidad e interés. Por ello, te invitamos a visitar continuamente las siguientes secciones.";
        }elseif($_SESSION['idioma']=="ENG"){
            $tituloSeccion='<h2>Links of <strong class="llow">interest</strong> </h2>';
            $subtituloSeccion="Links of friendly pages";
            $descripcionSeccion="We constantly update our portal to communicate information of your use and interest. Therefore, we invite you to continually visit the following sections.";
        }elseif($_SESSION['idioma']=="PORT"){
            $tituloSeccion='<h2>Ligas <strong class="llow">de interesse</strong> </h2>';
            $subtituloSeccion="Links de páginas amigáveis";
            $descripcionSeccion="Constantemente atualizamos nosso portal para comunicar informações de seu uso e interesse. Portanto, nós o convidamos a visitar continuamente as seguintes seções.";
        }
        
        

        require_once "views/layout_page/{$_SESSION['idioma']}/inicio.php";
        require_once "views/layout_page/{$_SESSION['idioma']}/footer.php";
    }

    public function capacitacion() {//index principal
        $seo_title = "Geografia MX territorio y tecnología";
        $seo_keywords = "geografia, geografia de mexico, mexico, territorio mexicano, sistemas de informacion geografica mexico";
        $seo_description = "Esta pagina va dirigida a los profesionistas de la geografía encuentra recursos";
        //open graph
        $og_image = base_url . "assets/img/about-bg.jpg";
        $og_title = "Geografia MX";
        $og_description = "Esta pagina va dirigida a los profesionistas de la geografía encuentra recursos";
        $og_url = "http://geografia.mx";
        $og_section = "main";
        require_once "views/layout_page/{$_SESSION['idioma']}/header.php";

        $lista_postMRO = $this->listarPosts("capacitacion");
        //configuramos el encabezado
        $encabezadoAmostrar="capacitacion";
        
        
        

        if($_SESSION['idioma']=="ESP"){
            $tituloSeccion='<h2> Cursos y <strong class="llow">talleres</strong> </h2>';
            $subtituloSeccion="Inscribete";
            $descripcionSeccion="Aquí podrás encontrar Curso de Verano 2021 sobre Música, Arte, Robótica, Inglés, Italiano, Deportivos, Mini Chef, etc.";
        }elseif($_SESSION['idioma']=="ENG"){
            $tituloSeccion='<h2>Courses <strong class="llow">and workshops</strong> </h2>';
            $subtituloSeccion="Sign up";
            $descripcionSeccion="Here you can find Summer Course 2021 on Music, Art, Robotics, English, Italian, Sports, Mini Chef, etc.";
        }elseif($_SESSION['idioma']=="PORT"){
            $tituloSeccion='<h2> Cursos <strong class="llow">e workshops</strong> </h2>';
            $subtituloSeccion="Inscrever-se";
            $descripcionSeccion="Aqui você pode encontrar o Curso de Verão 2021 sobre Música, Arte, Robótica, Inglês, Italiano, Esportes, Mini Chef, etc.";
        }        
        
        
        
        


        require_once "views/layout_page/{$_SESSION['idioma']}/inicio.php";
        require_once "views/layout_page/{$_SESSION['idioma']}/footer.php";
    }

    public function entrar() {
        require_once 'views/layout_page/ESP/header.php';
        require_once 'views/layout_page/ESP/login.php';
        require_once 'views/layout_page/ESP/footer.php';
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

    /*
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
     */

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
        $nota1 = $postOBJ->getNota1();
        //Ahora obtendremos los archivos asociados
        $postOBJ->obtenerArchivosAsociados($postOBJ->getId_post()); //cambiale el nommbre a este metodo
        $archivosMROjpg = $postOBJ->getListResult();

        $imagenes = "";
        $pdfs = "";
        $mp3s = "";
        while ($archivosFO = $archivosMROjpg->fetch_object()) {
            //1=jpg de presentacion, 2= pdf, 3=jpg pra carrusel 4=mp3
            switch ($archivosFO->id_tipoArchivo) {
                case 2:
                    /* if ($archivosFO->id_tipoArchivo == 2) 
                      {
                      echo "PDF"; $ruta = base_url . "assets/page/pdf/";
                      } */

                    $pdfs .= '<div class="card" style="width: 18rem;">
                            <img src="' . base_url . 'assets/xms/img/pdf.jpg" class="card-img-top" alt="No se encontro archivo">
                            <div class="card-body">
                              <h5 class="card-title">'.$archivosFO->titulo.'</h5>
                              <p class="card-text">'.$archivosFO->descripcion.'</p>
                              <a href="' . base_url . 'assets/page/pdf/' . $archivosFO->nom_file . '.pdf" class="btn btn-primary" target="_blank">Ver</a>
                            </div>
                          </div>';

                    break;
                case 3:
                    $imagenes .= "<img src='" . base_url . "assets/page/img/jpg/" . $archivosFO->nom_file . ".jpg' class='img-fluid' alt='No pudimos encontrar el archivo " . $archivosFO->nom_file . "'>";
                    break;
                case 4:
                    $mp3s .= '<div class="card text-center">
                    <h5 class="card-header">Audio MP3</h5>
                    <div class="card-body">
                      <h5 class="card-title">'.$archivosFO->titulo.'</h5>
                      <p class="card-text">'.$archivosFO->descripcion.'</p>
                  <audio controls>
                  <source src="' . base_url . 'assets/page/mp3/' . $archivosFO->nom_file . '.ogg" type="audio/ogg">
                  <source src="' . base_url . 'assets/page/mp3/' . $archivosFO->nom_file . '.mp3" type="audio/mpeg">
                  Tu navegador no soporta archivos mp3
                  </audio>
                    </div>
                  </div>';
                    break;
                case 5:
                    $mp4='<div class="card text-center">
                    <h5 class="card-header">Video MP4</h5>
                    <div class="card-body">
                      <h5 class="card-title">'.$archivosFO->titulo.'</h5>
                      <p class="card-text">'.$archivosFO->descripcion.'</p>
                  <video width="320" height="240" controls>
                                              <source src="' . base_url . 'assets/page/mp4/' . $archivosFO->nom_file . '.ogg" type="video/ogg">
                                              <source src="' . base_url . 'assets/page/mp4/' . $archivosFO->nom_file . '.mp4" type="video/mp4">
                                            Your browser does not support the video tag.
                                            </video>
                    </div>
                  </div>';
                default:
                    break;
            }
        }




        /*
          //Ahora buscaremos archivos pdf
          $postOBJ->obtenerArchivosPDF($postOBJ->getId_post());
          $archivosMROpdf=$postOBJ->getListResult();
         */
        require_once "views/layout_page/{$_SESSION['idioma']}/header.php";
        require_once "views/layout_page/{$_SESSION['idioma']}/postBody.php";
//        require_once "views/layout_page/{$_SESSION['idioma']}/inicio.php";
        require_once "views/layout_page/{$_SESSION['idioma']}/footer.php";
    }

    private function topservices() {
        $stat = new Estadistica();
        $stat->top10();
        $top10 = $stat->getListResult();
        require_once 'views/topservices.php';
    }

}
