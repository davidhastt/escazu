<div class="card card-warning">
    <div class="card-header">
        <h3 class="card-title">Nuevo usuario</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        
        <?php 
        if (isset($usuarioFO)){            
            echo "<form action='" . base_url_xms . "usuario/actualizaU/inicio' class='needs-validation' novalidate method='post'>";
        }
        else{
            echo "<form action='" . base_url_xms . "usuario/guardar/inicio' class='needs-validation' novalidate method='post'>";
        }                          
        ?>
        
        
            <div class="row">
                <div class="col-sm-6">
                    <!-- id del usuario -->
                    <input type="hidden" id="id_usuario" name="id_usuario" value="<?php if (isset($usuarioFO)){echo $usuarioFO->id_usuario;}?>">
                    <div class="form-group">
                        <label>Nombre</label>
                        <input type="text" id="nombre" name="nombre" required class="form-control" placeholder="Nombre ..." value="<?php if (isset($usuarioFO)){echo $usuarioFO->nombre; } ?>">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Apellido paterno</label>
                        <input type="text" id="apellidoP" name="apellidoP" required class="form-control" placeholder="Apellido paterno" value="<?php if (isset($usuarioFO)){echo $usuarioFO->apellidoP; } ?>">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <!-- textarea -->
                    <div class="form-group">
                        <label>Apellido materno</label>
                        <input type="text" id="apellidoM" name="apellidoM" required class="form-control" placeholder="Apellido materno." value="<?php if (isset($usuarioFO)){echo $usuarioFO->apellidoM; } ?>">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Fecha de nacimiento</label>
                        <input type="date" id="fechaNac" name="fechaNac" required class="form-control" placeholder="Fecha de nacimiento" value="<?php if (isset($usuarioFO)){echo $usuarioFO->fechaNac; } ?>">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Sexo</label>
                        <select id="sexo" name="sexo" class="form-control" required >
                            <option value="<?php if (isset($usuarioFO)){echo $usuarioFO->sexo; } ?>"><?php if (isset($usuarioFO)){if ($usuarioFO->sexo == "M"){echo "Masculino" ;}else{echo "Femenino";}} ?></option>
                            <option value="M">Masculino</option>
                            <option value="F">Femenino</option>
                        </select>                            
                    </div>    
                </div>

                <div class="col-sm-6">
                    <div class="form-group">
                        <label class="col-form-label" for="inputWarning"><i class="far fa-bell"></i>Correo electrónico</label>
                        <div class="input-group-prepend">
                            <span class="input-group-text">@</span>
                            <input id="email" name="email" type="text" required class="form-control" placeholder="gmail.com" value="<?php if (isset($usuarioFO)){echo $usuarioFO->email; } ?>">
                        </div>                            
                    </div>    
                </div>                        
            </div>
            

        <?php if (!isset($usuarioFO)): ?>
            <div class="row">
                <div class="col-sm-6">
                    <!-- textarea -->
                    <div class="form-group">
                        <label>Passwordx</label>
                        <input type="password" id="pasword" required name="password" class="form-control" placeholder="Password">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Repite password</label>
                        <input type="password" id="password2" required name="password2" class="form-control" placeholder="Password" >
                    </div>
                </div>
            </div>  
        <?php endif; ?>


            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Puesto</label>
                        <select id="puesto" name="puesto" class="form-control" required>
                            <option <?php if (isset($usuarioFO)){if ($usuarioFO->puesto==1){ echo "value='1'";} else{ echo "value='0'";}} ?>><?php if (isset($usuarioFO)){if ($usuarioFO->puesto==1){ echo "Administrador";} else{ echo "Editor";}} ?></option>
                            <option value="0">Editor</option>
                            <option value="1">Administrador</option>
                        </select>                            
                    </div>    
                </div>
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