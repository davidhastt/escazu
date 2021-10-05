<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <h1 class="big-text">Resultados de busqueda</h1>
            <h2 class="small-text">"<?= $mensaje ?>"</h2>
        </div>

        <div class="col-md  text-center">                                
            <label for="inputPassword5" class="form-label">Nueva busqueda</label>
            <input type="text" id="where" name="where" value="<?= $mensaje ?>" class="form-control" aria-describedby="passwordHelpBlock">
        </div>
    </div>
    <div class="row">
        <div class="my-3 p-3 bg-white rounded shadow-sm">
            <h6 class="border-bottom border-gray pb-2 mb-0">Lista de resultados</h6>
            <?php while ($posts = $lista_postMRO->fetch_object()): ?>
                <div class="media text-muted pt-3">
                    <svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title><rect width="100%" height="100%" fill="#007bff"/><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text></svg>
                    <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                        <a href="<?= base_url ?>sistema/showpost/<?= $posts->id_post ?>"> <strong class="d-block text-gray-dark"><?= $posts->nom_post ?></strong></a>
                        <?= $posts->descripcion_corta ?>
                    </p>
                </div>
            <?php endwhile; ?>
        </div>

    </div>

</div>