<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">

        <br>
            <br>
                <br>
                    <div class="container error-container">
                        <div class="row  d-flex align-items-center justify-content-center">
                            <div class="col-md-12 text-center">
                                <h1 class="big-text">Oops!</h1>
                                <h2 class="small-text"><?= $mensaje ?></h2>

                            </div>

                            <div class="col-md-6  text-center">
                                <p> <?= $mensaje2 ?> </p>

                                <h2 class="small-text">ó</h2>

                                
                                <a class="btn btn-lg btn-primary" href="<?= base_url ?>" role="button">Página de inicio»</a>

                            </div>                            

                            <div class="my-3 p-3 bg-white rounded shadow-sm">
                                <h6 class="border-bottom border-gray pb-2 mb-0">Lo más buscado</h6>
                                <div class="media text-muted pt-3">
                                    <svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title><rect width="100%" height="100%" fill="#007bff"/><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text></svg>
                                    <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                        <a href="<?= base_url ?>sistema/atractivos/elbanito"> <strong class="d-block text-gray-dark">El bañito</strong></a>
                                        Proxima reapertura, por cuarentena el balneario municipal de Ixtapan de la Sal permanecera cerrado. Aquí encontraras las noticias mas recientes del balneario municipal de Ixtapan de la Sal, precios, promociones.
                                    </p>
                                </div>
                                <div class="media text-muted pt-3">
                                    <svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title><rect width="100%" height="100%" fill="#e83e8c"/><text x="50%" y="50%" fill="#e83e8c" dy=".3em">32x32</text></svg>
                                    <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                        <a href="<?= base_url ?>sistema/atractivos/saltotona"><strong class="d-block text-gray-dark">Salto de Tonatico</strong></a>
                                        Aquí encontraras las noticias mas recientes del Salto de Tonatico, precios, promociones.
                                    </p>
                                </div>
                                <div class="media text-muted pt-3">
                                    <svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title><rect width="100%" height="100%" fill="#6f42c1"/><text x="50%" y="50%" fill="#6f42c1" dy=".3em">32x32</text></svg>
                                    <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                        <a href="<?= base_url ?>usuario/registro/full"><strong class="d-block text-gray-dark">Registrate</strong></a>
                                        Registrate para obtener todas las promociones y descuentos.
                                    </p>
                                </div>
                            </div>



                        </div>


                    </div>
