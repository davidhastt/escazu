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
                                        <form class="Vegetable" action="<?= base_url ?>sistema/busqueda/inicio" method="post">
                                            <input  class="Vegetable_fom" placeholder="Acuerdo de Éscazú" type="text" id="where" name="where" required>
                                            <button class="Search_btn" type="submit">Buscar</button>
                                        </form>
                                        <a href="<?= base_url ?>sistema/cambiaridioma/ESP">Ver en español</a>
                                        <a href="">Busqueda avanzada</a>
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
                                        <span>Escazú information center</span>
                                        <h1>Virtual center</h1>
                                        <p>The Agreement on Access to Information, Public Participation and Access to Justice in Environmental Matters in Latin America and the Caribbean was adopted in Escazú Costa Rica on March 4, 2018 and entered into force on April 22, 2021.</p>
                                        <form class="Vegetable">
                                            <input class="Vegetable_fom" placeholder="Escazu agreement" type="text" name=" Vegetable">
                                            <button class="Search_btn">Search</button>
                                        </form>
                                        <a href="<?= base_url ?>sistema/cambiaridioma/ENG">See in english</a>
                                        <a href="#">Advanced search</a>
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
                                        <span>Bem-vindo ao centro virtual</span>
                                        <h1>Centro virtual</h1>
                                        <p>O Acordo sobre Acesso à Informação, Participação Pública e Acesso à Justiça em Assuntos Ambientais na América Latina e no Caribe foi adotado em Escazú Costa Rica em 4 de março de 2018 e entrou em vigor em 22 de abril de 2021.</p>
                                        <form class="Vegetable">
                                            <input class="Vegetable_fom" placeholder="Acordo de escazu" type="text" name=" Vegetable">
                                            <button class="Search_btn">Search</button>
                                        </form>
                                        <a href="<?= base_url ?>sistema/cambiaridioma/PORT">Ver em portugues</a>
                                        <a href="#">Busca avançada</a>
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
                        <h2><?= $posts->nom_post ?></h2>
                        <p><?= $posts->descripcion_corta ?></p>
                        <a href="<?= base_url ?>sistema/showpost/<?= $posts->id_post ?>">Leer mas</a>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 padding_rl">
                    <div class="about-box_img">
                        <figure><img src="<?= base_url ?>assets/page/img/jpg/<?= $posts->nom_file ?>.jpg" alt="#" /></figure>
                    </div>
                </div>
            </div>

        </div>
    </div>
<?php endwhile; ?>
<!-- end abouts -->

