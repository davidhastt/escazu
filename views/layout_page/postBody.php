<main role="main" class="container">
    <div class="row">
        <div class="col-md-8 blog-main">
            <h7 class="pb-4 mb-4 font-italic border-bottom">
                <?= $slogan ?>
            </h7>

            <div class="blog-post">
                <h1 class="blog-post-title"><?= $titulo ?></h1>
                <p class="blog-post-meta"><a href="#">Actualizado: </a> 14 Junio 2020</p>

                <p><?= $descripcion_corta ?></p>
                <hr>        
                <?= $contenido ?>
            </div><!-- /.blog-post -->


        </div><!-- /.blog-main -->










        <aside class="col-md-4 blog-sidebar">
            <div class="p-4 mb-3 bg-light rounded">
                <h4 class="font-italic">Horario</h4>
                <p class="mb-0">Abierto <em>todos los dias del año.</em></p>        
                <p class="mb-0">Horario Hay dos horarios: Horario diurno de 6 a 18 Horario nocturno de 20:00 a 2:00 (solamente viernes y sábado)</p>
            </div>

            <div class="p-4 mb-3 bg-light rounded">
                <h4 class="font-italic">Reservaciones</h4>
                <p class="mb-0">No se manejan reservaciones</p>
            </div>

        </aside><!-- /.blog-sidebar -->

    </div><!-- /.row -->



        
            
            
            <?php while ($archivosFO=$archivosMRO->fetch_object()): ?>
         
<div class="card text-center">
  <div class="card-header">
    Archivo listo para visualizar
  </div>
  <div class="card-body">
    <h5 class="card-title">Titulo del archivo <?php if ($archivosFO->id_tipoArchivo == 2){echo "PDF"; $ruta=base_url."assets/page/pdf/";} ?></h5>
    <p class="card-text">Aquí va una descripcion del archivo</p>
    <a href="<?= $ruta.$archivosFO->nom_file ?>.pdf" class="btn btn-primary" target="_blank">Ver</a>
  </div>
  <div class="card-footer text-muted">
    Escazú
  </div>
</div>
    
<br>
<br>
<br>
      
            
          
            <?php endwhile; ?>

               


</main><!-- /.container -->