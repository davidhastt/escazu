<div class="card card-warning">
    <div class="card-header">
        <h3 class="card-title">Nuevo post</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">

        <?php
        if (isset($postFO)) {
            echo "<form action='" . base_url . "post/actualizaPost/inicio' class='needs-validation' novalidate method='post'>";
        } else {
            echo "<form action='" . base_url . "post/guardar/inicio' class='needs-validation' novalidate method='post'>";
        }
        ?>


        <div class="row">
            <div class="col-sm-6">
                <!-- id del usuario -->
                
                <input type="hidden" id="id_post" name="id_post" value="<?php if(isset($postFO)){ echo $postFO->id_post;  }?>">
                <div class="form-group">
                    <label>Nombre en barra de direcciones</label>
                    <input type="text" id="idAstxt" name="idAstxt" required class="form-control" placeholder="Nombre que aparecera en la barra de direcciones" value="<?php
                    if (isset($postFO)) {
                        echo $postFO->idAstxt;
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
                    <label>Slogan</label>
                    <input type="text" id="slogan" name="slogan" required class="form-control" placeholder="Slogan del post" value="<?php
                    if (isset($postFO)) {
                        echo $postFO->slogan;
                    }
                    ?>">
                </div>
            </div>
        </div>

        <div class="row">
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
                <?php if(isset($postFO)): ?>
                <?php echo $postFO->contenido; ?>
                <?php else :?>
                    Borra esto <em>y despues </em> <u>escribe el contenido del post</u> <strong>aquí</strong>
                <?php endif?>                
              </textarea>
            </div>
            <div class="card-footer">
              Acuerdo Escazú
            </div>
          </div>
        </div>
        <!-- /.col-->
      </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
    <!-- /.card-body -->
</div>

<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
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