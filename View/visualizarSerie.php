<?php
include_once("Header.php");
include_once("../Model/bancoSerie.php");
include_once("../Model/conexao.php");
include_once("../Model/bancoUsuario.php");
liberaAcesso();
?>

<div class="container">
    <form action="" method="post" class="row g-3">

        <div class="col-4">
            <label class="form-label">Digite o nome da série:</label>
            <input type="text" required class="form-control" name="serie">
            </br>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Localizar</button>
            </div>
        </div>
    </form>

    <table class="table table-striped">
        <thead class="tableColor">
            <tr>
                <th scope="col">Código</th>
                <th scope="col">Série</th>
                <th scope="col">Temporada</th>
                <th scope="col">Episódio</th>
                <th scope="col">Gênero</th>
                <th scope="col">Capa</th>
                <th scope="col">Alterar</th>
                <th scope="col">Deletar</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $serie = isset($_POST["serie"]) ? $_POST["serie"] : "";
            $dado = visuNomeSerie($conexao, $serie);
            foreach ($dado as $dados) :
            ?>
                <tr>
                    <th scope="row"><?= $dados["codserie"] ?></th>
                    <td><?= $dados["nomeserie"] ?></td>
                    <td><?= $dados["temporadaserie"] ?></td>
                    <td><?= $dados["episodioserie"] ?></td>
                    <td><?= $dados["generoserie"] ?></td>
                    <td><img src="<?= $dados["capaserie"] ?>"width="50"> </td>
                    <td>
                        <a class="btn btn-primary" href="alterarSerie.php?codigo=<?= $dados["codserie"] ?>">Alterar</a>
                    </td>
                    <td>
                        <form action="../Controller/deleteSerie.php" method="POST">
                            <input type="hidden" name="codserie" value="<?= $dados["codserie"] ?>">
                            <button class="btn btn-danger" type="submit">Deletar</button>
                        </form>
                    </td>
                </tr>
            <?php
            endforeach
            ?>
        </tbody>
    </table>

    <?php
    include_once("Footer.php");
    ?>