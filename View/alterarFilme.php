<?php
include_once("header.php");
include_once('../Model/conexao.php');
include_once('../Model/bancoFilme.php');
liberaAcesso();

$codigo = $_GET["codigo"];

$resul = visuCodigoFilme($conexao, $codigo);
$filme = mysqli_fetch_assoc($resul);
?>
<div class="container">
    <form action="../Controller/alteraFilme.php" method="post" class="row g-3">

        <div class="col-md-1">
            <label for="inputCodigo" class="form-label">Código</label>
            <input type="text" readonly value="<?= $filme['codfil'] ?>" name="codfil" class="form-control" id="inputCodigo">
        </div>

        <div class="col-md-8">
            <label for="inputFilme" class="form-label">Filme</label>
            <input type="text" value="<?= $filme['nomefil'] ?>" name="filme" class="form-control" id="inputFilme">
        </div>

        <div class="col-md-3">
            <label for="inputGenero" class="form-label">Gênero</label>
            <input type="text" value="<?= $filme['generofil'] ?>" name="genero" class="form-control" id="inputGenero">
        </div>

        <div class="col-2">
            <label for="inputAno" class="form-label">Ano</label>
            <input type="text" value="<?= $filme['anofil'] ?>" name="ano" class="form-control" id="inputAno" placeholder="2000">
        </div>

        <div class="col-md-10">
            <label for="inputCapa" class="form-label">Capa</label>
            <input type="text" value="<?= $filme['capafil'] ?>" name="capa" class="form-control" id="inputCapa">
        </div>

        <div class="col-md-12">
            <label for="inputURL" class="form-label">URL</label>
            <input type="text" value="<?= $filme['urlfil'] ?>" name="url" class="form-control" id="inputURL">
        </div>

        <div class="form-floating">
            <textarea class="form-control" name="sinopse" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"><?= $filme['sinopsefil'] ?></textarea>
            <label for="floatingTextarea2">Sinopse</label>
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-primary">Salvar alterações</button>
        </div>
    </form>
</div>
<?php
include("footer.php")
?>