<br>
<br>
<br>

<div class="jumbotron">
    <h1><?= $mensaje ?></h1>
    <p class="lead"><?= $mensaje2 ?></p>
    <a class="btn btn-lg btn-primary" href="<?= $url ?>" role="button">Continuar &raquo;</a>
</div>

<script>
setTimeout(function(){
    window.location.replace("<?= $url ?>");
}, 5000);


</script>