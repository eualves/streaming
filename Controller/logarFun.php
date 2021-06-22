<?php
include_once("../Model/conexao.php");
include_once("../Model/bancoUsuario.php");
include_once("../View/header.php");

$email= $_POST["email"];
$senha= $_POST["senha"];

if(buscarAcesso($conexao,$email,$senha)){
    echo("ok");
    //header("Location: ../View/AreaFuncionario.php");
}else{
    echo("ixi");
    //header("Location: ../View/acessoFun.php");
}

die();
?>