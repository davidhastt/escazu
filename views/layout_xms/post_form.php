<div class="card card-warning">
    <div class="card-header">
        <h3 class="card-title">Nuevo post</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">

        <form action='<?= base_url ?>post/actualizaPost/inicio' class='needs-validation' novalidate enctype='multipart/form-data' method='post'>
            <div class="row">
                <div class="col-sm-6">
                    <!-- id del usuario -->
                    <input type="hidden" id="id_usuario" name="id_usuario" value="<?= $_SESSION['identity_Session']->id_usuario ?>">
                    <?php if (isset($postFO)): ?>
                        <input type="hidden" id="id_post" name="id_post" value="<?= $postFO->id_post ?>">
                    <?php endif; ?>

                    <!-- textarea -->
                    <div class="form-group">
                        <label>Nombre del post</label>
                        <input type="text" id="nom_post" name="nom_post" required class="form-control" placeholder="Nombre para el post" value="<?php
                        if (isset($postFO)) {
                            echo $postFO->nom_post;
                        }
                        ?>">
                    </div>  
                </div>

                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Estatus</label>
                        <select id="activo" name="activo" class="form-control" required>
                            <option <?php
                            if (isset($postFO)) {
                                if ($postFO->activo == 1) {
                                    echo "value='1'";
                                } else {
                                    echo "value='0'";
                                }
                            }
                            ?>><?php
                                    if (isset($postFO)) {
                                        if ($postFO->activo == 1) {
                                            echo "Activo";
                                        } else {
                                            echo "Deshabilitado";
                                        }
                                    }
                                    ?></option>
                            <option value="1">Activo</option>
                            <option value="0">Deshabilitado</option>
                        </select>                            
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Slogan</label>
                        <input type="text" id="slogan" name="slogan" required class="form-control" placeholder="Slogan del post" value="<?php
                        if (isset($postFO)) {
                            echo $postFO->slogan;
                        }
                        ?>">
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Categoria</label>
                        <select id="id_categoria" name="id_categoria" class="form-control" required >
                            <option value="<?php
                            if (isset($postFO)) {
                                echo $postFO->id_categoria;
                            }
                            ?>"><?php
                                        if (isset($postFO)) {
                                            echo $postFO->nom_categoria;
                                        }
                                        ?></option>
                            <option value="1">El acuerdo Escazu</option>
                            <option value="2">Conferencias y seminarios</option>
                            <option value="3">Materiales educativos e informativos</option>
                            <option value="4">Ligas de interes</option>
                            <option value="5">Cursos</option>
                        </select>                            
                    </div>    
                </div>            
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Descripción corta</label>
                        <input type="text" id="descripcion_corta" name="descripcion_corta" required class="form-control" placeholder="Describe brevemente de que trata el post" value="<?php
                        if (isset($postFO)) {
                            echo $postFO->descripcion_corta;
                        }
                        ?>">
                    </div>
                </div>
                <div class="col-sm-6">            
                    <div class="form-group">
                        <label>Notas</label>
                        <input type="text" id="nota1" name="nota1" class="form-control" placeholder="Escribe las notas del post" value="<?php
                        if (isset($postFO)) {
                            echo $postFO->nota1;
                        }
                        ?>">
                    </div>                
                </div>
            </div>    
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group" >
                <?php if (isset($postFO->nom_file)): ?>
                    <?php if ($postFO->nom_file != 0): ?>
                        <label for="exampleInputFile">Imagen de presentación</label>
                        <div class="mb-3">
                            <div class="custom-file">                        
                                <button type="button" onclick="document.location = '<?= base_url ?>archivo/borrar/<?= $postFO->id_archivo ?>'" class="btn btn-danger btn-lg">Eliminar imagen</button>
                            </div>
                        </div>
                    <?php else: ?>
                        <label for="exampleInputFile">Subir archivo para vista previa de la imagen del post</label>
                        <div class="mb-3">
                            <div class="custom-file">                        
                                <input class="form-control" type="file" name="archivo[]"  accept=".jpg" required>
                            </div>
                        </div>                                       
                    <?php endif; ?>
                <?php else: ?>
                    <label for="exampleInputFile">Subir archivo para vista previa de la imagen del post</label>
                    <div class="mb-3">
                        <div class="custom-file">                        
                            <input class="form-control" type="file" name="archivo[]"  accept=".jpg" required>
                        </div>
                    </div>                   
                <?php endif; ?>    
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <label for="exampleInputFile">Imagen para mostrar como vista previa</label>
                <div class="mb-3">
                    <div class="custom-file">                        
                        <img src='<?php
                        if (isset($postFO->nom_file)) {
                            echo base_url . "assets/page/img/jpg/{$postFO->nom_file}.jpg";
                        } else {
                            echo base_url . "assets/page/img/jpg/0.jpg";
                        }
                        ?>' class="img-thumbnail" alt="Si ves esto hay un error">
                    </div>
                </div>    
            </div>
        </div>            
    </div>    

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>        

    <div class="row">
        <div class="col-md-12">
            <div class="card card-outline card-info">
                <div class="card-header">
                    <h3 class="card-title">
                        Contenido del post
                    </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <textarea id="contenido" name="contenido" class="form-control" required>
                        <?php if (isset($postFO)): ?>
                            <?php echo $postFO->contenido; ?>
                        <?php else : ?>
                                                                        Borra esto <em>y despues </em> <u>escribe el contenido del post</u> <strong>aquí</strong>
                        <?php endif ?>                
                    </textarea>
                </div>
                <div class="card-footer">
                    Acuerdo Escazú
                </div>
            </div>
        </div>
        <!-- /.col-->
    </div>     
    <button type="submit" class="btn btn-primary">Guardar datos básios</button>
</form>
</div>
<!-- /.card-body -->
</div>

<div class="row">

    <div class="col-sm-6">
        <form action='<?= base_url ?>archivo/subirMultimedia/<?= $postFO->id_post ?>' class='needs-validation' novalidate enctype='multipart/form-data' method='post'>        
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Cargar archivo</h5>
                    <p class="card-text">Puede cargar PDF, JPG, MP4 y MP3</p>
                    <div class="mb-3">
                        <div class="custom-file">
                            <input class="form-control" type="file" name="archivo[]"  accept=".pdf, .jpg, .mp4, .mp3">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Subir archivo</button>
                </div>
            </div>
        </form>
    </div>
</div>

<div class="row">


    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Tipo</th>
                <th scope="col">Vista previa</th>
                <th scope="col">Borrar</th>
            </tr>
        </thead>
        <tbody>

            <?php while ($archivosFO = $archivosMRO->fetch_object()): ?>

                <tr>
                    <th scope="row">1</th>
                    <td><?php
                        if ($archivosFO->id_tipoArchivo == 2) {
                            echo "PDF";
                            $ruta = base_url . "assets/page/pdf/";
                            $extension = "pdf";
                        } elseif ($archivosFO->id_tipoArchivo == 1 || $archivosFO->id_tipoArchivo == 3) {
                            echo "jpg";
                            $ruta = base_url . "assets/page/img/jpg/";
                            $extension = "jpg";
                        } elseif ($archivosFO->id_tipoArchivo == 4) {
                            echo "mp3";
                            $ruta = base_url . "assets/page/mp3/";
                            $extension = "mp3";
                        }
                        ?></td>
                    <td><a href="<?= $ruta . $archivosFO->nom_file . ".{$extension}" ?>" target=_blank"">Ver</a></td>
                    <td><a href="<?= base_url ?>archivo/borrarMultimedia/<?= $archivosFO->id_archivo ?>">Borrar</a></td>
                </tr>
<?php endwhile; ?>



        </tbody>
    </table>
</div>



<script>
// Validamos que los input esten completos
    (function () {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.prototype.slice.call(forms)
                .forEach(function (form) {
                    form.addEventListener('submit', function (event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }

                        form.classList.add('was-validated')
                    }, false)
                })
    })()

</script>