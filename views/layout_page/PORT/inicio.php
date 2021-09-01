<!-- inicia body -->
<header> 
<script>
function cambiarIdioma(idioma){
    if(idioma=="ESP"){
        alert('cambiando a español');        
    }
    else if(idioma=="ENG"){
        alert('cambiando a ingles');        
    }
    else if(idioma=="PORT"){
        alert('cambiando a portugues');
    }
    window.location.replace("<?= base_url ?>sistema/cambiaridioma/"+idioma);
    
}
</script>

<?php if($encabezadoAmostrar=="inicio"):?>
    <section class="slider_section">

<img onclick="cambiarIdioma('ESP')" src="<?= base_url ?>assets/page/img/sistema/hispania.png" class="rounded float-end" alt="No se encontro la imagen español" height="33.33%" width="3%">
<img onclick="cambiarIdioma('ENG')" src="<?= base_url ?>assets/page/img/sistema/uk.png" class="rounded float-end" alt="No se encontro la imagen ingles" height="33.33%" width="3%">
<img onclick="cambiarIdioma('PORT')" src="<?= base_url ?>assets/page/img/sistema/portugal.png" class="rounded float-end" alt="No se encontro la imagen portugues" height="33.33%" width="3%">
         
        
        
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">

                    <div class="container-fluid padding_dd">
                        <div class="carousel-caption">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                    <div class="text-bg">
                                        <!--span>Centro de información virtual</span-->
                                        <h1>Centro de información virtual</h1>
                                        <p>El Acuerdo sobre el Acceso a la información, la participación pública y el acceso a la justicia en asuntos ambientales en América Latina y el Caribe fue adoptado en Escazú Costa Rica el 4 de marzo de 2018 y entró en vigor el 22 de abril de 2021.</p>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                    <div class="images_box">
                                        <figure><img src="<?= base_url ?>assets/page/img/img2.jpeg"></figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">

                    <div class="container-fluid padding_dd">
                        <div class="carousel-caption">

                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                    <div class="text-bg">
                                        <span>Escazu information center</span>
                                        <h1>Virtual center</h1>
                                        <p>The Agreement on Access to Information, Public Participation and Access to Justice in Environmental matters in Latin America and the Caribbean was adopted in Escazu Costa Rica on March 4, 2018 and entered into force on April 22, 2021.</p>
                                    </div>
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                    <div class="images_box">
                                        <figure><img src="<?= base_url ?>assets/page/img/img3.jpeg"></figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


                <div class="carousel-item">

                    <div class="container-fluid padding_dd">
                        <div class="carousel-caption ">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                    <div class="text-bg">
                                        <!--span>Centro de información virtual</span-->
                                        <h1>Centro de informação virtual</h1>
                                        <p>O Acordo sobre Acesso à Informação, Participação Pública e Acesso à Justiça em Assuntos Ambientais na América Latina e no Caribe foi adotado em Escazú Costa Rica em 4 de março de 2018 e entrou em vigor em 22 de abril de 2021.</p>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                    <div class="images_box">
                                        <figure><img src="<?= base_url ?>assets/page/img/img2.png"></figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        </div>

        










   <!-- clients -->
    <div id="testimonial" class="clients">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Procurar</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clients_red">
        <div class="container">
            <div id="testimonial_slider" class="carousel slide" data-ride="carousel">

                <!-- The slideshow -->
                <div class="carousel-inner">


                    <div class="carousel-item active">

                        <div class="testomonial_section">
                            <div class="full center">
                            </div>
                            <div class="full testimonial_cont ">
                                <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                    <div class="text-bg">
                                        <form class="Vegetable" action="<?= base_url ?>sistema/busqueda/inicio" method="post">
                                            <input class="Vegetable_fom" placeholder="Acordo de escazu" type="text" name="where" id="where">
                                            <button class="Search_btn">Procurar</button>
                                        </form>                                                                                
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>

                    </div>


                </div>

            </div>
        </div>
    </div>

        





        
        



        
        


<?php else:?>    

<!-- vegetable -->
<div id="vegetable" class="vegetable">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div  class="titlepage">
          <?= $tituloSeccion ?>            
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 ">
        <div class="vegetable_shop">
          <h3><?= $subtituloSeccion ?></h3>
          <p><?= $descripcionSeccion ?></p>
        </div>
      </div>
       <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12 ">
        <div class="vegetable_img">
         <figure><img src="<?= base_url ?>assets/page/img/jpg/v1.jpg" alt="#"/></figure>
         <span>01</span>
        </div>
      </div>
       <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 ">
        <div class="vegetable_img margin_top">
         <figure><img src="<?= base_url ?>assets/page/img/jpg/v2.jpg" alt="#"/></figure>
         <span>02</span>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end vegetable -->        
    </section>   
    







    
<?php endif;?>    
    
<!--/div> -->
</header>

<?php while ($posts = $lista_postMRO->fetch_object()): ?>
    <!-- about  -->
    <div id="about" class="about">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="about-box">
                        <h2><?= $posts->nom_post ?></h2>
                        <p><?= $posts->descripcion_corta ?></p>
                        <a href="<?= base_url ?>sistema/showpost/<?= $posts->id_post ?>">Ver</a>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 padding_rl">
                    <div class="about-box_img">
                        <figure><img src="<?= base_url ?>assets/page/img/jpg/<?= $posts->nom_file ?>.jpg" alt="No se encontr la imagen" /></figure>
                    </div>
                </div>
            </div>

        </div>
    </div>
<?php endwhile; ?>
<!-- end abouts -->

