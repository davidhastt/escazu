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
        $seo_keywordsMRO = $this->listarPosts("acuerdo");//poner en todas las funciones de cada menu
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
        $seo_keywordsMRO = $this->listarPosts("acuerdo");//poner en todas las funciones de cada menu
        //configuramos el encabezado
        $encabezadoAmostrar="acuerdo";
        $menu_imagen="menu_acuerdo.png";
        if($_SESSION['idioma']=="ESP"){
            $tituloSeccion='<h2> El acuerdo de <strong class="llow">Escazú</strong> </h2>';
            $subtituloSeccion="Tiene como objetivo";
            $descripcionSeccion="Garantizar la implementación plena y efectiva en América Latina y el Caribe de los derechos de acceso a la información ambiental, participación pública en los procesos de toma de decisiones ambientales y acceso a la justicia en asuntos ambientales, así como la creación y el fortalecimiento de las capacidades y la cooperación, contribuyendo a la protección del derecho de cada persona, de las generaciones presentes y futuras, a vivir en un medio ambiente sano y al desarrollo sostenible.";            
        }elseif($_SESSION['idioma']=="ENG"){
            $tituloSeccion='<h2>Escazu <strong class="allow">agreement</strong> </h2>';
            $subtituloSeccion="The objective is";
            $descripcionSeccion="To guarantee the full and effective implementation in Latin America and the Caribbean of the rights of access to environmental information, public participation in the environmental decision-making process and access to justice in environmental matters, and the creation and strengthening of capacities and cooperation, contributing to the protection of the right of every person of present and future generations to live in a healthy environment and to sustainable development.";            
        }elseif($_SESSION['idioma']=="PORT"){
            $tituloSeccion='<h2> Acordo <strong class="allow">Escazú</strong> </h2>';
            $subtituloSeccion="O objetivo";
            $descripcionSeccion="E garantir a implementacao plena e efetiva, na America Latina e no Caribe, dos direitos de acesso a informacao ambiental, participacao publica nos processos de tomada de decisoes ambientais e acesso a justica em questões ambientais, bem como a criacao e o fortalecimento das capacidades e cooperacao, ontribuindo para a protecao do direito de cada pessoa, das geracoes presentes e futuras, a viver em um meio ambiente saudavel e a um desenvolvimento sustentavel.";                        
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
        $seo_keywordsMRO = $this->listarPosts("eventos");//poner en todas las funciones de cada menu
        //configuramos el encabezado
        $encabezadoAmostrar="eventos";
        $menu_imagen="menu_eventos.png";
        
        if($_SESSION['idioma']=="ESP"){
            $tituloSeccion='<h2> Eventos y <strong class="allow">actividades</strong> </h2>';
            $subtituloSeccion="¡Espéralos!";
            $descripcionSeccion="Le invitamos a participar en los distintos eventos que las organizaciones estamos impulsando en nuestros países y en la región para difundir y promover el Acuerdo.";
        }elseif($_SESSION['idioma']=="ENG"){
            $tituloSeccion='<h2> Upcoming <strong class="allow">events</strong> </h2>';
            $subtituloSeccion="What's next";
            $descripcionSeccion="We invite you to participate in the different events that the organizations are promoting in our countries and in the region to disseminate and promote the Agreement.";
        }elseif($_SESSION['idioma']=="PORT"){
            $tituloSeccion='<h2>Eventos e <strong class="allow">atividades</strong> </h2>';
            $subtituloSeccion="O seguinte";
            $descripcionSeccion="Eventos são aqueles fenômenos que surgem de ocasiões não rotineiras e que têm objetivos de lazer, culturais, pessoais ou organizacionais estabelecidos separadamente da atividade cotidiana normal, cujo objetivo é ilustrar, celebrar, entreter ou gerar experiências em um grupo de pessoas.";
        }        
        
        
        
        
        
        

        require_once "views/layout_page/{$_SESSION['idioma']}/inicio.php";
        require_once "views/layout_page/{$_SESSION['idioma']}/footer.php";
    }
    
        public function infografias() {//index principal
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

        $lista_postMRO = $this->listarPosts("infografias");
        $seo_keywordsMRO = $this->listarPosts("infografias");//poner en todas las funciones de cada menu
        //configuramos el encabezado
        $encabezadoAmostrar="infografias";
        $menu_imagen="menu_infografias.png";
        if($_SESSION['idioma']=="ESP"){
            //$tituloSeccion='<h2> Materiales <strong class="llow">educativos</strong> </h2>';
            $tituloSeccion='<h2><strong class="allow">Infografías</strong> </h2>';
            $subtituloSeccion="Encuentra infografías";
            $descripcionSeccion="Información y datos sobre el Acuerdo de Escazú.";
        }elseif($_SESSION['idioma']=="ENG"){
            $tituloSeccion='<h2><strong class="allow">Infographics</strong> </h2>';
            $subtituloSeccion="Find infographics";
            $descripcionSeccion="Information and data about the Escazu Agreement.";
        }elseif($_SESSION['idioma']=="PORT"){
            $tituloSeccion='<h2><strong class="allow">Infográficos</strong> </h2>';
            $subtituloSeccion="Encontrar infográficos";
            $descripcionSeccion="Informações e dados do Acordo Escazú .";
        }
        require_once "views/layout_page/{$_SESSION['idioma']}/inicio.php";
        require_once "views/layout_page/{$_SESSION['idioma']}/footer.php";
    }
    
    
    
        public function documentos() {//index principal
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

        $lista_postMRO = $this->listarPosts("documentos");
        $seo_keywordsMRO = $this->listarPosts("documentos");//poner en todas las funciones de cada menu
        //configuramos el encabezado
        $encabezadoAmostrar="documentos";
        $menu_imagen="menu_documentos.png";
        if($_SESSION['idioma']=="ESP"){
            //$tituloSeccion='<h2> Materiales <strong class="llow">educativos</strong> </h2>';
            $tituloSeccion='<h2><strong class="allow">Documentos</strong> </h2>';
            $subtituloSeccion="Encuentra documentos";
            $descripcionSeccion="Libros, revistas, comunicados, artículos, reportes y demás publicaciones sobre el Acuerdo de Escazú.";
        }elseif($_SESSION['idioma']=="ENG"){
            $tituloSeccion='<h2><strong class="allow">Documents</strong> </h2>';
            $subtituloSeccion="Find documents";
            $descripcionSeccion="Books, magazines, press releases, articles, reports and other publications about the Escazu Agreement.";
        }elseif($_SESSION['idioma']=="PORT"){
            $tituloSeccion='<h2>Encontre <strong class="allow">documentos</strong> </h2>';
            $subtituloSeccion="Encontrar documentos.";
            $descripcionSeccion="Livros, revistas, comunicados de imprensa, artigos, relatórios e outras publicações do Acordo Escazú.";
        }
        require_once "views/layout_page/{$_SESSION['idioma']}/inicio.php";
        require_once "views/layout_page/{$_SESSION['idioma']}/footer.php";
    }  
    
    
    
        public function audios() {//index principal
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

        $lista_postMRO = $this->listarPosts("audios");
        $seo_keywordsMRO = $this->listarPosts("audios");//poner en todas las funciones de cada menu
        //configuramos el encabezado
        $encabezadoAmostrar="audios";
        $menu_imagen="menu_audios.png";
        
        if($_SESSION['idioma']=="ESP"){
            //$tituloSeccion='<h2> Materiales <strong class="llow">educativos</strong> </h2>';
            $tituloSeccion='<h2><strong class="allow">audios</strong> </h2>';
            $subtituloSeccion="Encuentra audios";
            $descripcionSeccion="Canciones, programas, historias, música, cápsulas, etc. para conocer y difundir el Acuerdo de Escazú.";
        }elseif($_SESSION['idioma']=="ENG"){
            $tituloSeccion='<h2><strong class="allow">audios</strong> </h2>';
            $subtituloSeccion="Find audios";
            $descripcionSeccion="Songs, shows, stories, music, capsules, etc. to know and disseminate the Escazu Agreement.";
        }elseif($_SESSION['idioma']=="PORT"){
            $tituloSeccion='<h2><strong class="allow">Áudios</strong> </h2>';
            $subtituloSeccion="Encontre áudios";
            $descripcionSeccion="Canções, programas, histórias, músicas, cápsulas, etc. conhecer e divulgar o Convênio Escazú.";
        }
        require_once "views/layout_page/{$_SESSION['idioma']}/inicio.php";
        require_once "views/layout_page/{$_SESSION['idioma']}/footer.php";
    }
    
    
    
        public function videos() {//index principal
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

        $lista_postMRO = $this->listarPosts("videos");
        $seo_keywordsMRO = $this->listarPosts("videos");//poner en todas las funciones de cada menu
        //configuramos el encabezado
        $encabezadoAmostrar="videos";
        $menu_imagen="menu_videos.png";
        
        if($_SESSION['idioma']=="ESP"){
            //$tituloSeccion='<h2> Materiales <strong class="llow">educativos</strong> </h2>';
            $tituloSeccion='<h2><strong class="allow">Videos</strong> </h2>';
            $subtituloSeccion="Encuentra videos";
            $descripcionSeccion="Documentales, cápsulas, animaciones, reportajes y más materiales audiovisuales sobre el Acuerdo.";
        }elseif($_SESSION['idioma']=="ENG"){
            $tituloSeccion='<h2><strong class="allow">Videos</strong> </h2>';
            $subtituloSeccion="Find Videos";
            $descripcionSeccion="Documentaries, capsules, animations, reports and more audiovisual materials on the Agreement.";
        }elseif($_SESSION['idioma']=="PORT"){
            $tituloSeccion='<h2><strong class="allow">Videos</strong> </h2>';
            $subtituloSeccion="Encontrar videos";
            $descripcionSeccion="Documentários, cápsulas, animações, relatórios e mais materiais audiovisuais do Acordo.";
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
        $seo_keywordsMRO = $this->listarPosts("enlaces");//poner en todas las funciones de cada menu
        //configuramos el encabezado
        $encabezadoAmostrar="enlaces";
        $menu_imagen="menu_enlaces.png";

        if($_SESSION['idioma']=="ESP"){
            $tituloSeccion='<h2> Enlaces <strong class="llow">de interés</strong> </h2>';
            $subtituloSeccion="Enlaces";
            $descripcionSeccion="A otras páginas para ampliar la información.";
        }elseif($_SESSION['idioma']=="ENG"){
            $tituloSeccion='<h2>Links of <strong class="llow">interest</strong> </h2>';
            $subtituloSeccion="Links";
            $descripcionSeccion="To other pages for more information.";
        }elseif($_SESSION['idioma']=="PORT"){
            $tituloSeccion='<h2>Links de <strong class="llow">interesse</strong> </h2>';
            $subtituloSeccion="Links";
            $descripcionSeccion="Para outras páginas para mais informações.";
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
        $seo_keywordsMRO = $this->listarPosts("capacitacion");//poner en todas las funciones de cada menu
        //configuramos el encabezado
        $encabezadoAmostrar="capacitacion";
        $menu_imagen="menu_capacitacion.png";
        
        

        if($_SESSION['idioma']=="ESP"){
            $tituloSeccion='<h2> Cursos y <strong class="llow">talleres</strong> </h2>';
            $subtituloSeccion="¡Participa!";
            $descripcionSeccion="Asiste a las actividades de capacitación encaminadas a construir y fortalecer las capacidades para hacer efectivo el Acuerdo de Escazú.";
        }elseif($_SESSION['idioma']=="ENG"){
            $tituloSeccion='<h2>Courses <strong class="llow">and workshops</strong> </h2>';
            $subtituloSeccion="Participates";
            $descripcionSeccion="In training activities aimed at building and strengthening capacities to make the Escazu Agreement effective.";
        }elseif($_SESSION['idioma']=="PORT"){
            $tituloSeccion='<h2> Cursos <strong class="llow">e workshops</strong> </h2>';
            $subtituloSeccion="Participa";
            $descripcionSeccion="Em atividades de treinamento voltadas para a construção e fortalecimento de capacidades para a efetivação do Acordo Escazú .";
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
                    $mp4.='<div class="card text-center">
                    <h5 class="card-header">Video MP4</h5>
                    <div class="card-body">
                      <h5 class="card-title">'.$archivosFO->titulo.'</h5>
                      <p class="card-text">'.$archivosFO->descripcion.'</p>
                  <video width="800px" controls>
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
