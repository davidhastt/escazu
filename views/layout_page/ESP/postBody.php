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
        <?php if(isset($nota1)):?>
        <aside class="col-md-4 blog-sidebar">
            <div class="p-4 mb-3 bg-light rounded">
                <h4 class="font-italic">Notas</h4>
                <p class="mb-0"><?=$nota1?></p>                
            </div>

            <!--div class="p-4 mb-3 bg-light rounded">
                <h4 class="font-italic">Reservaciones</h4>
                <p class="mb-0">No se manejan reservaciones</p>
            </div-->

        </aside><!-- /.blog-sidebar -->
        <?php endif; ?>
    </div><!-- /.row -->


    
<?= $imagenes; ?>

<div class="alert alert-success" role="alert">
  Archivos PDF
</div>
<?= $pdfs; ?>    
    
<div class="alert alert-success" role="alert">
  Archivos mp3
</div>

<?= $mp3s; ?>      

<div class="alert alert-success" role="alert">
  Archivos mp4
</div>    
    
<?= $mp4; ?>
<br>
<br>
<br>


</main><!-- /.container -->