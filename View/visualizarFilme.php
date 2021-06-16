<?php
session_start();
include_once("header.php");
?>

<div class="container">
    <form action="../Controller/buscaNomeFilme.php" method="post" class="row g-3 <?= $aparenciaForm1 ?>">

        <div class="col-12">
            <label class="form-label">Digite o nome do filme</label>
            <input type="text" class="form-control" name="filme">
            </br>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Localizar</button>
            </div>
        </div>
    </form>

    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Código</th>
      <th scope="col">Filme</th>
      <th scope="col">Genero</th>
      <th scope="col">Ano</th>
      <th scope="col">Capa</th>
      <th scope="col">Informações</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td>+</td>
    </tr>
  </tbody>
</table>

    <?php
    include_once("footer.php");
    ?>