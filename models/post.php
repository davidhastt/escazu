<?php

class Post {

    private $id_post;
    public $id_imageAsList;
    private $idAstxt;
    public $nom_post;
    public $slogan;
    public $whatsapp;
    public $activo;
    public $descripcion_corta;
    public $contenido;
    public $id_categoria;
    public $linkFacebook;
    public $linkYoutube;
    public $linkInstagram;
    public $listResult;
    public $encabezados;
    public $fotos;
    public $seo_title;
    public $seo_keywords;
    public $seo_description;
    public $hits;
    public $recomendaciones;
    public $estrellas;
    public $id_usuario;
    public $dateUpdate;
    public $maxID;

    public function __construct() {
        $this->db = Database::connect();
    }

    public function obtenerArchivosAsociados($id_post) {
        $strsql = "SELECT id_archivo,"
                . " id_tipoArchivo, nom_file FROM archivos WHERE id_post={$id_post} AND rol !=1";
        $this->listResult = $this->db->query($strsql);
    }    
    

    function getMaxID() {
        return $this->maxID;
    }

    function setMaxID() {
        //Consegir el registro mayor en el campo ID
        $strsql = "SELECT MAX(id_post) as maxid FROM posts";
        $resultado = $this->db->query($strsql);
        $filas = $resultado->fetch_object();
        $maxID = intval($filas->maxid);
        $this->maxID = $maxID;
    }

    public function setId_post($id_post) {
        $this->id_post = $id_post;
    }

    function getId_post() {
        return $this->id_post;
    }

    public function insertarPostVacio() {
        $id_usuario = $_SESSION['identity_Session']->id_usuario;
        $strsql = "INSERT INTO posts (nom_post, id_usuario) VALUES('Nombre nuevo post', {$id_usuario})";
        $save = $this->db->query($strsql);
        $result = false;
        if ($save) {
            $result = true;
        }
        return $result;
    }

    public function actualiza() {//este metodo va a guardar las propiedades que esten definidas
        $strsql = "UPDATE posts SET "
                . "idAstxt='" . $this->idAstxt . "', "
                . "activo='" . $this->activo . "', "
                . "nom_post='" . $this->nom_post . "', "
                . "slogan='" . $this->slogan . "', "
                . "id_categoria=" . $this->id_categoria . ", "
                . "descripcion_corta='" . $this->descripcion_corta . "', "
                . "contenido='" . $this->contenido . "'";

        $strsql .= " WHERE id_post= " . $this->id_post;
        $save = $this->db->query($strsql);
        $result = false;
        if ($save) {
            $result = true;
        }
        return $result;
    }

    public function getPost($id_post) {
        $strsql = "SELECT
    posts.id_post,
    posts.idAstxt,
    posts.descripcion_corta,
    usuarios.nombre,
    posts.slogan,
    usuarios.apellidoP,
    usuarios.apellidoM,
    posts.nom_post,
    categorias.id_categoria,
    categorias.nom_categoria,
    posts.activo,
    posts.contenido,
    archivos.id_archivo,
    archivos.nom_file
FROM
    posts
INNER JOIN usuarios ON posts.id_usuario = usuarios.id_usuario
INNER JOIN categorias ON posts.id_categoria = categorias.id_categoria
INNER JOIN archivos ON posts.id_post = archivos.id_post
WHERE
    posts.id_post =" . $id_post;
        $this->listResult = $this->db->query($strsql);
    }

    public function listarPosts($categoria) {
        //falta definir la consulta que solo muestre los post activos
        switch ($categoria) {
            case "listarEnCMX":
                $strsql = "SELECT
                    posts.id_post,
                    usuarios.nombre,
                    usuarios.apellidoP,
                    usuarios.apellidoM,
                    posts.nom_post,
                    categorias.nom_categoria,
                    posts.activo
                FROM
                    posts
                INNER JOIN usuarios ON posts.id_usuario = usuarios.id_usuario
                INNER JOIN categorias ON posts.id_categoria = categorias.id_categoria
                ORDER BY
                    posts.id_post";
                break;
            case "inicio":
                $strsql = "SELECT posts.id_post, usuarios.nombre, usuarios.apellidoP, usuarios.apellidoM, posts.nom_post, posts.descripcion_corta, categorias.nom_categoria, posts.activo, archivos.nom_file FROM posts INNER JOIN usuarios ON posts.id_usuario = usuarios.id_usuario INNER JOIN categorias ON posts.id_categoria = categorias.id_categoria INNER JOIN archivos ON posts.id_post = archivos.id_post WHERE archivos.rol=1 ORDER BY posts.id_post DESC LIMIT 10";
                break;
            case "acuerdo":
                $strsql = "SELECT posts.id_post, usuarios.nombre, usuarios.apellidoP, usuarios.apellidoM, posts.nom_post, posts.descripcion_corta, categorias.nom_categoria, posts.activo, archivos.nom_file FROM posts INNER JOIN usuarios ON posts.id_usuario = usuarios.id_usuario INNER JOIN categorias ON posts.id_categoria = categorias.id_categoria INNER JOIN archivos ON posts.id_post = archivos.id_post WHERE posts.id_categoria=1 AND archivos.rol=1  ORDER BY posts.id_post";
                break;
            case "conferencias":
                $strsql = "SELECT posts.id_post, usuarios.nombre, usuarios.apellidoP, usuarios.apellidoM, posts.nom_post, posts.descripcion_corta, categorias.nom_categoria, posts.activo, archivos.nom_file FROM posts INNER JOIN usuarios ON posts.id_usuario = usuarios.id_usuario INNER JOIN categorias ON posts.id_categoria = categorias.id_categoria INNER JOIN archivos ON posts.id_post = archivos.id_post WHERE posts.id_categoria=2 AND archivos.rol=1  ORDER BY posts.id_post";
                break;
            case "materiales":
                $strsql = "SELECT posts.id_post, usuarios.nombre, usuarios.apellidoP, usuarios.apellidoM, posts.nom_post, posts.descripcion_corta, categorias.nom_categoria, posts.activo, archivos.nom_file FROM posts INNER JOIN usuarios ON posts.id_usuario = usuarios.id_usuario INNER JOIN categorias ON posts.id_categoria = categorias.id_categoria INNER JOIN archivos ON posts.id_post = archivos.id_post WHERE posts.id_categoria=3 AND archivos.rol=1  ORDER BY posts.id_post";
                break;
            case "ligas":
                $strsql = "SELECT posts.id_post, usuarios.nombre, usuarios.apellidoP, usuarios.apellidoM, posts.nom_post, posts.descripcion_corta, categorias.nom_categoria, posts.activo, archivos.nom_file FROM posts INNER JOIN usuarios ON posts.id_usuario = usuarios.id_usuario INNER JOIN categorias ON posts.id_categoria = categorias.id_categoria INNER JOIN archivos ON posts.id_post = archivos.id_post WHERE posts.id_categoria=4 AND archivos.rol=1  ORDER BY posts.id_post";
                break;
            case "cursos":
                $strsql = "SELECT posts.id_post, usuarios.nombre, usuarios.apellidoP, usuarios.apellidoM, posts.nom_post, posts.descripcion_corta, categorias.nom_categoria, posts.activo, archivos.nom_file FROM posts INNER JOIN usuarios ON posts.id_usuario = usuarios.id_usuario INNER JOIN categorias ON posts.id_categoria = categorias.id_categoria INNER JOIN archivos ON posts.id_post = archivos.id_post WHERE posts.id_categoria=5 AND archivos.rol=1  ORDER BY posts.id_post";
                break;
            default:
                break;
        }

        $this->setListResult($strsql);
        return $this->listResult;
    }

    public function borrarPost($id_post) {
        $strsql = "DELETE FROM posts WHERE id_post=" . $id_post;
        $this->listResult = $this->db->query($strsql);
        return $this->listResult;
    }

    public function guardar($fieldList) {//este metodo va a guardar las propiedades que esten definidas, parece que quedara obsoleto, ya no se usara
        $strsql = "INSERT INTO posts (";
        $strsqlFields = "";
        $strsqlValues = ") VALUES(";
        //obtener lista de metodos get
        $getList = array("getidAstxt", "getactivo", "getId_usuario", "getnom_post", "getslogan", "getid_categoria", "getdescripcion_corta", "getcontenido");

        $i = 0;
        //este for es para concatenar los campos
        foreach ($getList as $metodo) {
            $valor = $this->$metodo();
            if (isset($valor)) {
                $strsqlFields .= $fieldList[$i];
                $strsqlValues .= "'" . $valor . "'";
                $strsqlFields .= ", ";
                $strsqlValues .= ", ";
            }
            $i++;
        }

        $strsqlFields = substr($strsqlFields, 0, -2); //quitamos la ultima coma a la cadena de campos
        $strsqlValues = substr($strsqlValues, 0, -2); //quitamos la ultima coma a la cadena de valores

        $strsql .= $strsqlFields . $strsqlValues . ")";

        $save = $this->db->query($strsql);
        $result = false;
        if ($save) {
            $result = true;
        }
        return $result;
    }

    function getContenido() {
        return $this->contenido;
    }

    function setContenido($contenido) {
        $this->contenido = $contenido;
    }

    function getDescripcion_corta() {
        return $this->descripcion_corta;
    }

    function setDescripcion_corta($descripcion_corta) {
        $this->descripcion_corta = $descripcion_corta;
    }

    function getId_categoria() {
        return $this->id_categoria;
    }

    function setId_categoria($id_categoria) {
        $this->id_categoria = $id_categoria;
    }

    function getId_usuario() {
        return $this->id_usuario;
    }

    function setId_usuario($id_usuario) {
        $this->id_usuario = $id_usuario;
    }

    function getEstrellas() {
        return $this->estrellas;
    }

    function setEstrellas($estrellas) {
        $this->estrellas = $estrellas;
    }

    function getActivo() {
        return $this->activo;
    }

    function setActivo($activo) {
        $this->activo = $activo;
    }

    function getId_imageAsList() {
        return $this->id_imageAsList;
    }

    function setId_imageAsList($id_imageAsList) {
        $this->id_imageAsList = $id_imageAsList;
    }

    function getWhatsapp() {
        return $this->whatsapp;
    }

    function setWhatsapp($whatsapp) {
        if (isset($whatsapp)) {
            $this->whatsapp = $whatsapp;
        } else {
            $this->whatsapp = "7225132318";
        }
    }

    function getLinkFacebook() {
        return $this->linkFacebook;
    }

    function getLinkYoutube() {
        return $this->linkYoutube;
    }

    function getLinkInstagram() {
        return $this->linkInstagram;
    }

    function setLinkFacebook($linkFacebook) {
        if (isset($linkFacebook)) {
            $this->linkFacebook = $linkFacebook;
        } else {
            $this->linkFacebook = "https://www.facebook.com/ixtapandelasalestadodemexico/";
        }
    }

    function setLinkYoutube($linkYoutube) {
        if (isset($linkYoutube)) {
            $this->linkYoutube = $linkYoutube;
        } else {
            $this->linkYoutube = "https://www.youtube.com/channel/UCm5s2HtLtzMCCQnt0eYppoA";
        }
    }

    function setLinkInstagram($linkInstagram) {
        if (isset($linkInstagram)) {
            $this->linkInstagram = $linkInstagram;
        } else {
            $this->linkInstagram = "https://www.instagram.com/ixtapandelasal.com.mx/";
        }
    }

    function getRecomendaciones() {
        return $this->recomendaciones;
    }

    function setRecomendaciones($recomendaciones) {
        $this->recomendaciones = $recomendaciones;
    }

    function setSeo_title($seo_title) {
        $this->seo_title = $seo_title;
    }

    function setSeo_description($seo_description) {
        $this->seo_description = $seo_description;
    }

    function setSeo_keywords($seo_keywords) {
        $this->seo_keywords = $seo_keywords;
    }

    function getHits() {
        return $this->hits;
    }

    function setHits($hits) {
        $this->hits = $hits;
    }

    function getSeo_description() {
        return $this->seo_description;
    }

    function getSeo_keywords() {
        return $this->seo_keywords;
    }

    function getSeo_title() {
        return $this->seo_title;
    }

    function getPrecioAsHtml() {
        return $this->precioAsHtml;
    }

    function getFotos() {
        return $this->fotos;
    }

    function setFotos($fotos) {
        $this->fotos = $fotos;
    }

    function getSlogan() {
        return $this->slogan;
    }

    function setSlogan($slogan) {
        $this->slogan = $slogan;
    }

    function getEncabezados() {
        return $this->encabezados;
    }

    function setEncabezados() {
        switch ($this->categoria) {
            case "investigacion":
                $id_categoria = 1;
                break;
            case "tutoriales":
                $id_categoria = 2;
                break;
            case "cursos":
                $id_categoria = 3;
                break;
            case "servicios":
                $id_categoria = 4;
                break;
            case "mapas":
                $id_categoria = 5;
                break;
        }
        $strsql = "SELECT * FROM categorias WHERE id_categoria=" . $id_categoria;
        $resultado = $this->db->query($strsql);
        //return $resultado->fetch_object();
        $this->encabezados = $resultado->fetch_object();
    }

    function getListResult() {
        return $this->listResult;
    }

    function setListResult($strsql) {
        $this->listResult = $this->db->query($strsql);
    }

    function getIdAstxt() {
        return $this->idAstxt;
    }

    function getNom_post() {
        return $this->nom_post;
    }

    function getDescripcion() {
        return $this->descripcion;
    }

    function setIdAstxt($idAstxt) {
        $this->idAstxt = $idAstxt;
    }

    function setNom_post($nom_post) {
        $this->nom_post = $nom_post;
    }

}
