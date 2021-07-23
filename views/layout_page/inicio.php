<!-- inicia body -->
  <header>   
     
     
     <section class="slider_section">
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
                     <span>Centro de información Escazú</span>
                      <h1>Centro virtual</h1>
                      <p>El Acuerdo sobre el Acceso a la información, la participación pública y el acceso a la justicia en asuntos ambientales en América Latina y el Caribe fue adoptado en Escazú Costa Rica el 4 de marzo de 2018 y entró en vigor el 22 de abril de 2021.</p>
                      <form class="Vegetable">
                <input class="Vegetable_fom" placeholder="Vegetable" type="text" name=" Vegetable">
                <button class="Search_btn">Search</button>
              </form>
                      <a href="#">Contact Us</a> <a href="#">Vegetable</a>
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
          <div class="carousel-item">

            <div class="container-fluid padding_dd">
              <div class="carousel-caption">

                <div class="row">
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="text-bg">
                      <span>Bienvenido al centro virtual</span>
                      <h1>Acuerdo Escazú</h1>
                      <p>doce ratificaciones (Antigua y Barbuda, Argentina, Bolivia, Ecuador, Guyana, México, Nicaragua, Panamá, San Cristóbal y Nevis, San Vicente y las Granadinas, Santa Lucía y Uruguay)</p>
                      <form class="Vegetable">
                <input class="Vegetable_fom" placeholder="Vegetable" type="text" name=" Vegetable">
                <button class="Search_btn">Search</button>
              </form>
                      <a href="#">Contact Us</a> <a href="#">Vegetable</a>
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


          <div class="carousel-item">

            <div class="container-fluid padding_dd">
              <div class="carousel-caption ">
                <div class="row">
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="text-bg">
                      <span>Acuerdo regional</span>
                      <h1>Escazú</h1>
                      <p>Este acuerdo regional es considerado como uno de los instrumentos ambientales más importantes de la región. Tiene como objetivo garantizar la implementación plena y efectiva en América Latina y el Caribe de los derechos de acceso a la información ambiental.</p>
                       <form class="Vegetable">
                <input class="Vegetable_fom" placeholder="Vegetable" type="text" name=" Vegetable">
                <button class="Search_btn">Search</button>
              </form>
                      <a href="#">Contact Us</a> <a href="#">Vegetable</a>
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

</section>
</div>
</header>

<?php while ($posts = $lista_postMRO->fetch_object()): ?>
<!-- about  -->
<div id="about" class="about">
  <div class="container-fluid">
    <div class="row">
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
        <div class="about-box">
          <h2><?=$posts->nom_post?></h2>
          <p><?=$posts->descripcion_corta?></p>
          <a href="<?= base_url?>sistema/showpost/<?= $posts->id_post ?>">Leer mas</a>
        </div>
      </div>
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 padding_rl">
        <div class="about-box_img">
          <figure><img src="<?= base_url ?>assets/page/img/jpg/<?=$posts->nom_file?>.jpg" alt="#" /></figure>
        </div>
      </div>
    </div>

  </div>
</div>
<?php endwhile; ?>
<!-- end abouts -->

