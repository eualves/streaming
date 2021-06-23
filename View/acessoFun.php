<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Acesso ao sistema de funcionários</title>
</head>

<body>
    <div class="container">
        <form id="formlogin" action="../Controller/logarFun.php" method="post">
            <?php
            session_start();
            $msg = isset($_SESSION["msg"]) ? $_SESSION["msg"] : "";
            echo ($msg)
            ?>
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" name="email" class="form-control" id="inputEmail3">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Senha</label>
                <div class="col-sm-10">
                    <input type="password" name="senha" class="form-control" id="inputPassword3">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Logar</button>
            <a class="btn btn-primary" href="formEsqueciSenha.php">Esqueci a senha</a>
        </form>
    </div>
    
</body>

</html>