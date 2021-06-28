<div class="card">
    <div class="card-header border-0">
        <h3 class="card-title">Lista total de posts</h3>
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
                    <th>Nombre publicación</th>
                    <th>Nombre catergoría</th>
                    <th>Autor</th>
                    <th>Estatus</th>
                    <th>Acciones</th>                    
                </tr>
            </thead>
            <tbody>
                <?php while ($posts = $usuariosFO->fetch_object()): ?>
                    <tr>
                        <td>
                            <a href="<?= base_url ?>post/showPostForm/<?= $posts->id_post ?>" class="text-muted"><?= $posts->nom_post ?></a>                            
                        </td>

                        <td>
                            <a href="#" class="text-muted"><?= $posts->nom_categoria ?></a>
                        </td>
                        <td>
                            <img src="<?= base_url ?>assets/xms/img/user2-160x160.jpg" alt="Product 1" class="img-circle img-size-32 mr-2">
                            <?= $posts->nombre . " " . $posts->apellidoP . " " . $posts->apellidoM ?>                            
                        </td>   
                        <td>                                                       
                            <a href="#" class="text-muted"><?php
                            if ($posts->activo == 1) {
                                echo "Activo";
                            } else {
                                echo "Inactivo";
                            }
                            ?></a>                            
                        </td>
                        <td>                            
                            <span class="badge bg-danger" onclick="borrarPost(<?= $posts->id_post .", '". $posts->nom_post ."'" ?>)">Borrar</span>
                        </td>
                    </tr>
                </tbody>.
            <?php endwhile; ?>
        </table>
    </div>
</div>
<script>    
    function borrarPost(id_post, nombrePost){
        respuesta = confirm("Estas seguro de querer borrar a: " + nombrePost)
        if (respuesta == true) {
            window.location.replace("<?= base_url ?>/post/borrar_post/" + id_post);
        }        
    }
</script>
