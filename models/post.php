<?php

class Post {

    private $id_servicio;
    public $id_imageAsList;
    private $idAstxt;
    public $nom_servicio;
    public $slogan;
    public $direccion;
    public $whatsapp;
    public $descripcion;
    public $categoria;
    public $linkFacebook;
    public $linkYoutube;
    public $linkInstagram;
    public $listResult;
    public $encabezados;
    public $mapquery;
    public $fotos;
    public $seo_title;
    public $seo_keywords;
    public $seo_description;
    public $hits;
    public $recomendaciones;

    
    public function __construct($categoria) {
        $this->db = Database::connect();
        if ($_GET['parametro'] == "index") {//si true entonce es una categoria
            $this->setCategoria($categoria);
        }
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

    function getMapquery() {
        return $this->mapquery;
    }

    function setMapquery($mapquery) {
        $this->mapquery = $mapquery;
    }

    function getSlogan() {
        return $this->slogan;
    }

    function setSlogan($slogan) {
        $this->slogan = $slogan;
    }

    function getDireccion() {
        return $this->direccion;
    }

    function setDireccion($direccion) {
        $this->direccion = $direccion;
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

    function fillServicioT() {
        $strsql = "SELECT * FROM posts WHERE id_servicio='" . $this->id_servicio . "'";
        $resultado = $this->db->query($strsql);
        return $resultado->fetch_object();
    }

    function getId_servicio() {
        return $this->id_servicio;
    }

    function getIdAstxt() {
        return $this->idAstxt;
    }

    function getNom_servicio() {
        return $this->nom_servicio;
    }

    function getDescripcion() {
        return $this->descripcion;
    }

    function setId_servicio($id_servicio) {
        $this->id_servicio = $id_servicio;
    }

    function setIdAstxt($idAstxt) {
        $this->idAstxt = $idAstxt;
    }

    function setNom_servicio($nom_servicio) {
        $this->nom_servicio = $nom_servicio;
    }

    function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    function getCategoria() {
        return $this->categoria;
    }

    function setCategoria($categoria) {
        $this->categoria = $categoria;
    }

}

class Atractivo extends Post {

    public $horario;

    function getHorario() {
        return $this->horario;
    }

    function setHorario($horario) {
        $this->horario = $horario;
    }

}
