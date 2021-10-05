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
                            <option value="1">Acuerdo de Escazu</option>
                            <option value="2">Eventos</option>
                            <option value="3">Ifografias</option>
                            <option value="4">Enlaces</option>
                            <option value="5">Capacitacion</option>
                            <option value="6">Documentos</option>
                            <option value="7">Audios</option>
                            <option value="8">Videos</option>
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
                    <div class="form-group">
                        <label>Idioma</label>
                        <select id="idioma" name="idioma" class="form-control" >
                            <option value="<?php
                            if (isset($postFO->idioma)) {
                                echo $postFO->idioma;
                            }
                            ?>">
                                        <?php
                                        if (isset($postFO->idioma)) {
                                            if ($postFO->idioma == "ESP") {
                                                echo "Español";
                                            } elseif ($postFO->idioma == "ENG") {
                                                echo "Ingles";
                                            } elseif ($postFO->idioma == "PORT") {
                                                echo "Portugues";
                                            }
                                        }
                                        ?></option>
                            <option value="ESP">Español</option>
                            <option value="ENG">Ingles</option>
                            <option value="PORT">Portugues</option>
                        </select>                                               
                    </div>
                </div>
                <div class="col-sm-6">            
                    <div class="form-group">
                        <label>Palabras clave</label>
                        <input type="text" id="seo_keywords" name="seo_keywords" class="form-control" placeholder="Escribe las palabras clave" value="<?php
                        if (isset($postFO)) {
                            echo $postFO->seo_keywords;
                        }
                        ?>">
                    </div>                
                </div>
            </div>            







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


            <button type="submit" class="btn btn-primary">Guardar datos básios</button>
        </form>
    </div>
    <!-- /.card-body -->
</div>



<h3>Cargar archivo</h3>
<form action='<?= base_url ?>archivo/subirMultimedia/<?= $postFO->id_post ?>' class='needs-validation' novalidate enctype='multipart/form-data' method='post'>
    <div class="row g-3">
        <div class="col-sm5">
            <div class="custom-file">
                <input class="form-control" type="file" name="archivo[]" accept=".pdf, .jpg, .mp4, .mp3" required>
            </div>
        </div>
        <div class="col-sm">
            <input type="text" class="form-control" placeholder="Título del archivo" id="titulo" name="titulo" required>
        </div>
        <div class="col-sm">
            <input type="text" class="form-control" placeholder="Descripción del archivo" id="descripcion" name="descripcion" required>
        </div>
        <div class="col-sm">
            <button type="submit" class="btn btn-primary">Subir archivo</button>
        </div>
    </div>
</form>
<br><br><br>
<div class="row">
    <h3>Archivos relacionados con el post</h3>
    <br><br><br>
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
                        } elseif ($archivosFO->id_tipoArchivo == 5) {
                            echo "mp4";
                            $ruta = base_url . "assets/page/mp4/";
                            $extension = "mp4";
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