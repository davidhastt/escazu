<div class="card">
    <div class="card-header border-0">
        <h3 class="card-title">Lista total de usuarios</h3>
        <div class="card-tools">
            <a href="#" class="btn btn-tool btn-sm">
                <i class="fas fa-download"></i>
            </a>
            <a href="#" class="btn btn-tool btn-sm">
                <i class="fas fa-bars"></i>
            </a>
        </div>
    </div>
    <div class="card-body table-responsive p-0">
        <table class="table table-striped table-valign-middle">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Confirmado</th>
                    <th>Administrador</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($usuario = $usuariosFO->fetch_object()): ?>
                    <tr>
                        <td>
                            <img src="<?= base_url_xms ?>assets/xms/img/user2-160x160.jpg" alt="Product 1" class="img-circle img-size-32 mr-2">
                            <?= $usuario->nombre . " " . $usuario->apellidoP . " " .  $usuario->apellidoM?>
                        </td>

                        <td>
                            <a href="#" class="text-muted">
                                <?php
                                if ($usuario->confirmado) {
                                    echo "Si";
                                } else {
                                    echo "No";
                                }
                                ?>
                            </a>
                        </td>
                        <td>
                            <input class="form-check-input" id="privilegios<?=$usuario->id_usuario?>" name="privilegios<?=$usuario->id_usuario?>"  onclick="cambiarPrivilegios(<?=$usuario->id_usuario?>)" type="checkbox" <?php if ($usuario->puesto){echo "checked";}?>
                            <label class="form-check-label"></label>                            
                        </td>   
                        <td>
                        <?php
                        $parametros=$usuario->id_usuario . ", '" . $usuario->nombre . "'";                                 
                        ?>                                                        
                            <i class="fas fa-edit" href=""></i>                            
                            <i class="fas fa-user-times" onclick="borrarUsuario(<?= $parametros ?>)"></i>
                            
                        </td>
                    </tr>
                </tbody>.
            <?php endwhile; ?>
        </table>
    </div>
</div>
<script>
function cambiarPrivilegios(id_usuario){
//    alert("cambia los privilegios de " + id)
    
    
    id_check="privilegios"+id_usuario;
    //document.getElementById("vehiculo").checked==true
    console.log(id_usuario);
//console.log(document.getElementById(id));
    
    if (document.getElementById(id_check).checked==true){
        //alert("cambiar a administrador");
        window.location.replace("<?= base_url_xms?>/usuario/cambiarPuesto/" + id_usuario );
    }else{
        //alert("cambiar a editor");
        window.location.replace("<?= base_url_xms?>/usuario/cambiarPuesto/" + id_usuario);
    }
}

function borrarUsuario(id_usuario, nombreUsuario){
    alert("Estas seguro de querer borrar a: " + nombreUsuario)
    window.location.replace("<?= base_url_xms?>/usuario/borrar_usuario/" + id_usuario);
}
</script>
_