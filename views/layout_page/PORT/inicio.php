<!-- inicia body -->
<header> 

<?php if($encabezadoAmostrar=="inicio"):?>
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
                                        <!--span>Centro de información virtual</span-->
                                        <h1>Centro de información virtual</h1>
                                        <p>El Acuerdo sobre el Acceso a la información, la participación pública y el acceso a la justicia en asuntos ambientales en América Latina y el Caribe fue adoptado en Escazú Costa Rica el 4 de marzo de 2018 y entró en vigor el 22 de abril de 2021.</p>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                    <div class="images_box">
                                        <figure><img src="<?= base_url ?>assets/page/img/sistema/carrusel1.png"></figure>
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
                                        <figure><img src="<?= base_url ?>assets/page/img/sistema/carrusel2.png"></figure>
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
                                        <figure><img src="<?= base_url ?>assets/page/img/sistema/carrusel3.png"></figure>
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
                        <!--h2>Procurar</h2-->
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
                                            <input class="Vegetable_fom" placeholder="Acordo de Escazú" type="text" name="where" id="where">
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
        <figure><img src="<?= base_url ?>assets/page/img/sistema/<?= $menu_imagen ?>" alt="No se encontro la imagen"/></figure>
         <!--span>01</span-->
        </div>
      </div>
       <!--div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 ">
        <div class="vegetable_img margin_top">
         <figure><img src="<?= base_url ?>assets/page/img/jpg/v2.jpg" alt="#"/></figure>
         <span>02</span>
        </div>
      </div-->
    </div>
  </div>
</div>
<!-- end vegetable -->        
    </section>   





            <div id="vegetable" class="vegetable">
                <div class="container">

                    <div class="card text-center">
                        <div class="card-header">
                            Centro virtual Escazú
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Filtro de busqueda para esta sección</h5>
                            <div class="dropdown">
                                <button onclick="showDropdown()" class="dropbtn">Click aquí para plicar filtro a esta sección</button>
                                <div id="listaDePost" class="dropdown-content">
                                    <input type="text" placeholder="Escribe palabra clave" id="palabraAbuscar" onkeyup="filterFunction()">
                                    <?php while ($posts = $seo_keywordsMRO->fetch_object()): ?>
                                        <a href="<?= base_url ?>sistema/showpost/<?= $posts->id_post ?>"><?= $posts->nom_post ?></a>
                                    <?php endwhile; ?>
                                </div>
                            </div>                            
                        </div>
                        <div class="card-footer text-muted">
                            ¡Escazú ahora!
                        </div>
                    </div>

                </div>
            </div>


            <!-- end Encabezado de cada menu -->        
        </section>   

    <script>
        function showDropdown() {//despliega el dropdown
            document.getElementById("listaDePost").classList.toggle("show");
        }

        function filterFunction() {//ejecuta el filtro
            var input, filter, ul, li, a, i;
            input = document.getElementById("palabraAbuscar");
            filter = input.value.toUpperCase();
            console.log(filter)
            div = document.getElementById("listaDePost");
            a = div.getElementsByTagName("a");
            for (i = 0; i < a.length; i++) {
                txtValue = a[i].textContent || a[i].innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    a[i].style.display = "";
                } else {
                    a[i].style.display = "none";
                }
            }
        }

    </script>
    
    







    
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

