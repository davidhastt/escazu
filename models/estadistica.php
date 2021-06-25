<?php

require_once 'models/correoelctronico.php';

class Estadistica {

    private $listResult;
    
    public function listarUsuarios(){//cuando puedas esto cambialo a usaurios
        
        $this->setListResult("SELECT id_usuario, nombre, apellidoP, apellidoM, confirmado, puesto FROM usuarios");
        
        return $this->listResult;

    }
    
    
    private function porcentaje($valor, $total) {
    if ($total > 0){
        $resultado=($valor * 100)/$total;
        if($resultado==0){
         return 10;   //cuando halla datos cambia esto
        }else{
         return $resultado;   
        }              
    }else{
        return 0;
    }
        
        
    }    

private function reporteMensualAsHTML($nom_cliente, $visitasTotales, $totalVisitasEsteMes, $suma, $dividendo, $vEnero, $vFebrero, $vMarzo, $vAbril, $vMayo, $vJunio, $vJulio, $vAgosto, $vSeptiembre, $vOctubre, $vNoviembre, $vDiciembre){
    $promedio=$suma/$dividendo;
    $msj='
<!DOCTYPE html>
<html>
<head>
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Style the header */
.header {
  grid-area: header;
  background-color: #f1f1f1;
  padding: 30px;
  text-align: center;
  font-size: 35px;
}

/* The grid container */
.grid-container {
  display: grid;
  grid-template-areas: 
    '."'".'header header header header header header'."'".' 
    '."'".'left left middle middle right right'."'".' 
    '."'".'footer footer footer footer footer footer'."'".';
  /* grid-column-gap: 10px; - if you want gap between the columns */
} 

.left,
.middle,
.right {
  padding: 10px;
  text-align: center;
  height: 100px; /* Should be removed. Only for demonstration */
}

/* Style the left column */
.left {
  grid-area: left;
}

/* Style the middle column */
.middle {
  grid-area: middle;
}

/* Style the right column */
.right {
  grid-area: right;
}

/* Style the footer */
.footer {
  grid-area: footer;
  background-color: #f1f1f1;
  padding: 10px;
  text-align: center;
}

/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
@media (max-width: 600px) {
  .grid-container  {
    grid-template-areas: 
      '."'".'header header header header header header'."'".' 
      '."'".'left left left left left left'."'".' 
      '."'".'middle middle middle middle middle middle'."'".' 
      '."'".'right right right right right right'."'".' 
      '."'".'footer footer footer footer footer footer'."'".';
  }
}

* {box-sizing: border-box}

.container {
  width: 100%;
  background-color: #ddd;
}

.skills {
  text-align: right;
  padding-top: 10px;
  padding-bottom: 10px;
  color: white;
}


div.gallery {
  border: 1px solid #ccc;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: center;
}

* {
  box-sizing: border-box;
}

.responsive {
  padding: 0 6px;
  float: left;
  width: 24.99999%;
}

@media only screen and (max-width: 700px) {
  .responsive {
    width: 49.99999%;
    margin: 6px 0;
  }
}

@media only screen and (max-width: 500px) {
  .responsive {
    width: 100%;
  }
}

.clearfix:after {
  content: "";
  display: table;
  clear: both;
}


</style>
</head>
<body>

<h2>!!Hola '.$nom_cliente.'!!</h2>
<p>De acuerdo a lo acordado, aquí te entregamos el reporte mensual de visitas de tu anuncio en nuestra página web.</p>
<p>Esta información es valiosa para planear mejores ventas.</p>
<p>No pierdas contacto, sí tienes alguna duda o idea escribenos.</p>
<p><strong>Atentamente:</strong> David Millán, Ricardo Camacho</p>

<div class="grid-container">
  <div class="header">
    <h2>Reporte mensual de visitas</h2>
	<h4>'.date("Y").'</h4>	
  </div>
  
  <div class="left" style="background-color:#edf8b1;"><h3>Total de visitas</h3><h2>'.$visitasTotales.'</h2></div>
  <div class="middle" style="background-color:#7fcdbb;"><h3>Total de visitas Agosto</h3><h2>'.$totalVisitasEsteMes.'</h2></div>  
  <div class="right" style="background-color:#2c7fb8;"><h3>Promedio de visitas por mes</h3><h2>'.$promedio.'</h2></div>
  

</div>

  <div class="header">
    <h4>Gráfica de Visitas por mes</h4>
  </div>


<div class="container">
  <div class="skills" style="width: '. $this->porcentaje($vEnero, $suma) .'%; background-color: #4CAF50;">Enero '.$vEnero.'</div>
</div>

<div class="container">
  <div class="skills" style="width: '.$this->porcentaje($vFebrero, $suma).'%; background-color: #2196F3;">Febrero '.$vFebrero.'</div>
</div>

<div class="container">
  <div class="skills" style="width: '.$this->porcentaje($vMarzo, $suma).'%; background-color: #f44336;">Marzo '.$vMarzo.'</div>
</div>

<div class="container">
  <div class="skills" style="width: '.$this->porcentaje($vAbril, $suma).'%; background-color: #808080;">Abril '.$vAbril.'</div>
</div>

<div class="container">
  <div class="skills" style="width: '.$this->porcentaje($vMayo, $suma).'%; background-color: #4CAF50;">Mayo '.$vMayo.'</div>
</div>

<div class="container">
  <div class="skills" style="width: '.$this->porcentaje($vJunio, $suma).'%; background-color: #2196F3;">Junio '.$vJunio.'</div>
</div>

<div class="container">
  <div class="skills" style="width: '.$this->porcentaje($vJulio, $suma).'%; background-color: #f44336;">Julio '.$vJulio.'</div>
</div>

<div class="container">
  <div class="skills" style="width: '.$this->porcentaje($vAgosto, $suma).'%; background-color: #808080;">Agosto '.$vAgosto.'</div>
</div>

<div class="container">
  <div class="skills" style="width: '.$this->porcentaje($vSeptiembre, $suma).'%; background-color: #4CAF50;">Septiembre '.$vSeptiembre.'</div>
</div>

<div class="container">
  <div class="skills" style="width: '.$this->porcentaje($vOctubre, $suma).'%; background-color: #2196F3;">Octubre '.$vOctubre.'</div>
</div>

<div class="container">
  <div class="skills" style="width: '.$this->porcentaje($vNoviembre, $suma).'%; background-color: #f44336;">Noviembre '.$vNoviembre.'</div>
</div>

<div class="container">
  <div class="skills" style="width: '.$this->porcentaje($vDiciembre, $suma).'%; background-color: #808080;">Diciembre '.$vDiciembre.'</div>
</div>


<h2>Logra mejores resultados con estas estrategias</h2>

<h5>Pregunta por estas promociones</h5>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="http://ixtapandelasal.com.mx/sistema/ayudanos/index">
      <img src="http://ixtapandelasal.com.mx/assets/img/mailmarketing/1.jpg" alt="Cinque Terre" width="600" height="800">
    </a>
    <div class="desc">Para tus redes sociales</div>
  </div>
</div>


<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="http://ixtapandelasal.com.mx/sistema/ayudanos/index">
      <img src="http://ixtapandelasal.com.mx/assets/img/mailmarketing/2.jpg" alt="Forest" width="600" height="800">
    </a>
    <div class="desc">Imagenes con diseño profesional</div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="http://ixtapandelasal.com.mx/sistema/ayudanos/index">
      <img src="http://ixtapandelasal.com.mx/assets/img/mailmarketing/3.jpg" alt="Northern Lights" width="600" height="800">
    </a>
    <div class="desc">Video de tu producto o servicio</div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="http://ixtapandelasal.com.mx/sistema/ayudanos/index">
      <img src="http://ixtapandelasal.com.mx/assets/img/mailmarketing/4.jpg" alt="Northern Lights" width="600" height="800">
    </a>
    <div class="desc">Tu propia pagina web</div>
  </div>
</div>


<div class="grid-container">
  <div class="footer">
  <a href="http://ixtapandelasal.com.mx">ixtapandelasal.com.mx</a>
  <p>Télefono Ricardo: 7291445062</p>
  <p>Télefono David: 7225132318</p>
  </div>
 </div> 
</body>
</html>
';
return $msj;
}
    
    public function visitasxmes() {

        switch (date("F")) {
            case "January":
                $mesAnterior = "diciembre";
                $mesActual = "enero";
                $dividendo=1;
                break;
            case "February":
                $mesAnterior = "enero";
                $mesActual = "febrero";
                $dividendo=2;
                break;
            case "March":
                $mesAnterior = "febrero";
                $mesActual = "marzo";
                $dividendo=3;
                break;
            case "April":
                $mesAnterior = "marzo";
                $mesActual = "abril";
                $dividendo=4;
                break;
            case "May":
                $mesAnterior = "abril";
                $mesActual = "mayo";
                $dividendo=5;
                break;
            case "June":
                $mesAnterior = "mayo"; 
                $mesActual = "junio";
                $dividendo=6;
                break;
            case "July":
                $mesAnterior = "junio";
                $mesActual = "julio";
                $dividendo=7;
                break;
            case "August":
                $mesAnterior = "julio";
                $mesActual = "agosto";
                $dividendo=8;
                break;
            case "September":
                $mesAnterior = "agosto";
                $mesActual = "septiembre";
                $dividendo=9;
                break;
            case "October":
                $mesAnterior = "septiembre";
                $mesActual = "octubre";
                $dividendo=10;
                break;
            case "November":
                $mesAnterior = "octubre";
                $mesActual = "noviembre";
                $dividendo=11;
                break;
            case "December":
                $mesAnterior = "noviembre";
                $mesActual = "diciembre";
                $dividendo=12;
                break;
            default:
                $mesAnterior = "error";
                break;
        }

        /* $this->setListResult("SELECT servicioturistico.id_servicio, servicioturistico.idAstxt, servicioturistico.id_usuario, usuarios.nom_usuario, usuarios.apaterno, usuarios.email, servicioturistico.hits AS hitsTotales, visitasxmes." . $mesAnterior . " FROM servicioturistico"
          . " INNER JOIN usuarios ON servicioturistico.id_usuario=usuarios.id_usuario "
          . " INNER JOIN visitasxmes ON servicioturistico.id_servicio=visitasxmes.id_servicioTuristico ORDER BY email DESC");
         */
        $this->setListResult("SELECT servicioturistico.id_servicio, servicioturistico.nom_servicio, servicioturistico.id_usuario, usuarios.nom_usuario, usuarios.apaterno, usuarios.email, servicioturistico.hits AS hitsTotales" 
                .", (visitasxmes.enero + visitasxmes.febrero + visitasxmes.marzo + visitasxmes.abril + visitasxmes.mayo + visitasxmes.junio + visitasxmes.julio + visitasxmes.agosto + visitasxmes.septiembre + visitasxmes.octubre + visitasxmes.noviembre + visitasxmes.diciembre) AS suma"
                .", visitasxmes.enero, visitasxmes.febrero, visitasxmes.marzo, visitasxmes.abril, visitasxmes.mayo, visitasxmes.junio, visitasxmes.julio, visitasxmes.agosto, visitasxmes.septiembre, visitasxmes.octubre, visitasxmes.noviembre, visitasxmes.diciembre"
                . " FROM servicioturistico"
                . " INNER JOIN usuarios ON servicioturistico.id_usuario=usuarios.id_usuario "
                . " INNER JOIN visitasxmes ON servicioturistico.id_servicio=visitasxmes.id_servicioTuristico WHERE usuarios.id_usuario=1 OR usuarios.id_usuario=2");

        $servicioArr = $this->listResult;

        while ($fila = $servicioArr->fetch_object()) {
            //hacer la resta
            $totalVisitasEsteMes = $fila->hitsTotales - $fila->$mesAnterior;
            //ahora actualizar el numero de visitas en la tabla visitasxmes
            $this->setListResult($strsql = "UPDATE visitasxmes SET " . $mesActual . " = " . $totalVisitasEsteMes . " WHERE id_servicioTuristico =" . $fila->id_servicio);
            //ahora enviar correo
            $subject = "Reporte de visitas " . $fila->nom_servicio;
            $message=$this->reporteMensualAsHTML($fila->nom_usuario . " " . $fila->apaterno, $fila->hitsTotales, $totalVisitasEsteMes, $fila->suma, $dividendo, $fila->enero, $fila->febrero, $fila->marzo, $fila->abril, $fila->mayo, $fila->junio, $fila->julio, $fila->agosto, $fila->septiembre, $fila->octubre, $fila->noviembre, $fila->diciembre);
            $mail = new CorreoElectronico($fila->email, $subject, $message);
            $mail->sendMail();
            unset($email);
        }
    }

    public function top10() {
        $this->setListResult("SELECT id_servicio, categoria, nom_servicio, hits, id_imageAsList FROM posts ORDER BY hits DESC LIMIT 10");
    }

    public function getListResult() {
        return $this->listResult;
    }

    public function setListResult($strsql) {
        $this->listResult = $this->db->query($strsql);
    }

    public function __construct() {
        $this->db = Database::connect();
    }

}
