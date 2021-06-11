<?php

include("header.php");
?>
<div class="container">
<form class="row g-3">
    <div class="col-md-6">
        <label for="inputFilme" class="form-label">Filme</label>
        <input type="text" class="form-control" id="inputFilme">
    </div>
    <div class="col-md-6">
        <label for="inputGenero" class="form-label">Gênero</label>
        <input type="text" class="form-control" id="inputGenero">
    </div>
    <div class="col-12">
        <label for="inputSinopse" class="form-label">Sinopse</label>
        <input type="text" class="form-control" id="inputSinopse">
    </div>
    <div class="col-12">
        <label for="inputAno" class="form-label">Ano</label>
        <input type="text" class="form-control" id="inputAno"->
    </div>
    <div class="col-md-6">
        <label for="inputCapa" class="form-label">Capa</label>
        <input type="text" class="form-control" id="inputCapa">
    </div>
    <div class="col-md-4">
        <label for="inputURL" class="form-label">URL</label>
        <input type="text" class="form-control" id="inputURL">
    </div>
    <div class="col-12">
        <button type="submit" class="btn btn-primary">Sign in</button>
    </div>
</form>
</div>

<?php
include("footer.php")
?>