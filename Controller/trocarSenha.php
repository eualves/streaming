<?php
include_once("../Model/conexao.php");
include_once("../Model/bancoUsuario.php");

$email= $_POST["email"];
$pin= $_POST["pin"];
$novasenha= $_POST["novasenha"];
$info = trocarsenhausuario($conexao,$email,$novasenha,$pin);

if($info === "erro"){
    header("Location: ../View/AreaFuncionario.php");
}else{
    header("Location: ../View/acessoFun.php");
}
?>