<?php
include_once("../View/header.php");
include_once('../Model/conexao.php');
include_once('../Model/bancoSerie.php');

extract($_REQUEST, EXTR_OVERWRITE);

if (deleteSerie($conexao, $codserie)) {
    echo ("<p class='alert alert-primary' role='alert'>O episódio foi excluído.</p>");
} else {
    echo ("<p class='alert alert-danger' role='alert'>O episódio não foi excluído.</p>");
}

include_once("../View/footer.php");
?>