<?php

require_once 'models/post.php';//asegurate que este require sea necesario
require_once 'models/estadistica.php';

class sistemacontroller {

    /*
    public function getalltoday() {
        //declaramos un objeto del tipo Agenda
        $agendaHoy = new Agenda;
        //$fecha = $_POST['fecha_cita'];            
        $listaEsperaHoy = $agendaHoy->getAllToday();
        require_once 'views/periodo/muestraagendahoy.php';
    }*/

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
        
        $lista_postMRO=$this->listarPosts();
        
        require_once 'views/layout_page/inicio.php';
        require_once 'views/layout_page/footer.php';
    }
    
    
    private function listarPosts(){
       $lista_postMRO= new Post;
       $lista_postMRO->listarPosts();
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

    private function showPost() {
        $servicioTobj = new Seccion("seccion");
        $servicioTobj->setId_servicio($_GET['parametro']);

        $atractivoArr = $servicioTobj->fillServicioT(); //hacer una consulta a la base para buscar el articulo a mostrar
        //$servicioTobj->setId_servicio($atractivoArr->id_servicio);
        $servicioTobj->setNom_servicio($atractivoArr->nom_servicio);
        $servicioTobj->setSlogan($atractivoArr->slogan);
        $servicioTobj->setDescripcion($atractivoArr->descripcion);
//        $servicioTobj->setDireccion($atractivoArr->direccion);
        //$servicioTobj->setMapquery($atractivoArr->mapquery);
        $servicioTobj->setCategoria($atractivoArr->categoria);
        //SEO        
        $servicioTobj->setSeo_title($atractivoArr->seo_title);
        $servicioTobj->setSeo_keywords($atractivoArr->seo_keywords);
        $servicioTobj->setSeo_description($atractivoArr->seo_description);
        $seo_title = $servicioTobj->getSeo_title();
        $seo_keywords = $servicioTobj->getSeo_keywords();
        $seo_description = $servicioTobj->getSeo_description();
        //open graph
        $servicioTobj->setId_imageAsList($atractivoArr->id_imageAsList);
        $og_image = base_url . "assets/img/" . $servicioTobj->getCategoria() . "/" . $servicioTobj->getId_imageAsList() . ".jpg";
        $og_title = $servicioTobj->getSeo_title();
        $og_description = $atractivoArr->og_description;
        $og_url = base_url . "sistema/" . $servicioTobj->getCategoria() . "/" . $atractivoArr->id_servicio;
        $og_section = $servicioTobj->getCategoria();
        //redes sociales
        $servicioTobj->setWhatsapp($atractivoArr->whatsapp);
        //$servicioTobj->setLinkFacebook($atractivoArr->linkFacebook);
        //$servicioTobj->setLinkYoutube($atractivoArr->linkYoutube);
        //$servicioTobj->setLinkInstagram($atractivoArr->linkInstagram);        
        //construir galeria
        $servicioTobj->setListResult("SELECT url FROM multimedia WHERE id_post=" . $servicioTobj->getId_servicio());
        $servicioTobj->setFotos($servicioTobj->getListResult());
        //$servicioTobj->setPrecioAsHtml($atractivoArr->precioAsHtml);
        //promociones
        $servicioTobj->setListResult("SELECT * FROM promociones WHERE status =1"); //esto ya no va
        $servicioTobj->setPromociones($servicioTobj->getListResult());
        //recomendaciones
        $servicioTobj->setListResult("SELECT id_servicio, nom_servicio, slogan, id_imageAsList, categoria FROM `posts` ORDER BY RAND() LIMIT 3");
        $servicioTobj->setRecomendaciones($servicioTobj->getListResult());
        //hits
        $servicioTobj->setHits($atractivoArr->hits);
        $updatehits = $servicioTobj->getHits() + 1;
        $id_servicio = $servicioTobj->getId_servicio();
        $servicioTobj->setListResult("UPDATE posts SET hits = '" . $updatehits . "' WHERE id_servicio = " . $id_servicio);
        require_once 'views/layout/topmenu.php';
        require_once 'views/descripcion.php';
        require_once 'views/layout/footer.php';
    }

    private function topservices() {
        $stat = new Estadistica();
        $stat->top10();
        $top10 = $stat->getListResult();
        require_once 'views/topservices.php';
    }

    
    public function investigacion() {
        if ($_GET['parametro'] == "index") {// enlistar muestra la lista total de servicios de esta categoria
            $seccion = new Seccion("investigacion");
            $this->listarPosts($seccion);
        } else {//muestra la informacion del servicio
            $this->showPost();
        }
    }

    public function tutoriales() {
        if ($_GET['parametro'] == "index") {// enlistar muestra la lista total de servicios de esta categoria
            $seccion = new Seccion("tutoriales");
            $this->listarPosts($seccion);
        } else {//muestra la informacion del servicio
            $this->showPost();
        }
    }

    public function cursos() {
        if ($_GET['parametro'] == "index") {// enlistar muestra la lista total de servicios de esta categoria
            $seccion = new Seccion("cursos");
            $this->listarPosts($seccion);
        } else {//muestra la informacion del servicio
            $this->showPost();
        }
    }

    public function servicios() {
        if ($_GET['parametro'] == "index") {// enlistar muestra la lista total de servicios de esta categoria
            $seccion = new Seccion("servicios");
            $this->listarPosts($seccion);
        } else {//muestra la informacion del servicio
            $this->showPost();
        }
    }

    public function mapas() {
        if ($_GET['parametro'] == "index") {// enlistar muestra la lista total de servicios de esta categoria
            $seccion = new Seccion("mapas");
            $this->listarPosts($seccion);
        } else {//muestra la informacion del servicio
            $this->showPost();
        }
    }

}
