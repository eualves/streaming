<?php 

require_once("../Model/bancoFuncionario.php");
require_once("../Model/conexao.php");

extract($_REQUEST,EXTR_OVERWRITE);

if(insereFun($conexao, $codusuFK, $nomefun, $fonefun, $funcaofun)){
    session_destroy();
    echo("Funcionário cadastrado com sucesso!");
}else{
    echo("O Funcionário não foi cadastrado!");
}