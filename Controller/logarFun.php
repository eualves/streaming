<?php
include_once("../Model/conexao.php");
include_once("../Model/bancoUsuario.php");

$email= $_POST["email"];
$senha= $_POST["senha"];
$acesso= BuscarAcesso($conexao,$email,$senha);

if($acesso === $email){
    header("Location: ../View/AreaFuncionario.php");
}else{
    $_SESSION["msg"] = "<div class='alert alert-danger' role='alert'>Os dados não conferem... tente novamente.</div>";
    header("Location: ../View/acessoFun.php");
}

die();
?>