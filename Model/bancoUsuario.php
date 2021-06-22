<?php
session_start();

function insereUsuario($conexao, $email, $senha, $pin)
{

    $option = ['cost' => 8];
    $senhacryp = password_hash($senha, PASSWORD_BCRYPT, $option);

    $query = "insert into tbusuario(loginusu,senhausu,pinusu)values('{$email}','{$senhacryp}','{$pin}')";
    $resul = mysqli_query($conexao, $query);

    return $resul;
}

function buscarUsuario($conexao, $email)
{
    $query = "select * from tbusuario where loginusu='{$email}'";

    $resul = mysqli_query($conexao, $query);

    $infoemail = mysqli_fetch_assoc($resul);

    $_SESSION["emailusubusca"] = $infoemail["loginusu"];
    $_SESSION["codusubusca"] = $infoemail["codusu"];

    return $infoemail;
}

function buscarAcesso($conexao, $email, $senha)
{
    $query = "select * from tbusuario where loginusu='{$email}'";

    $resul = mysqli_query($conexao, $query);

    $infoemail = mysqli_fetch_assoc($resul);

    if(mysqli_num_rows($resul)>0){// Objeto
        $linha = mysqli_fetch_assoc($resul);// Array
        if(password_verify($senha,$linha["senhausu"])){
            $_SESSION["email"] = $linha["loginusu"];
            $_SESSION["codusu"] = $linha["codusu"];

            return $linha["loginusu"];
        }else{
            return $linha["loginusu"];
        }
    }
}

function trocarsenhausuario($conexao,$email,$novasenha,$pin){
    // Verificar se o email e o pin estão corretos
    $query = "Select * from tbusuario where loginusu='{$email}' and pinusu='{$pin}'";
    $retorno = mysqli_query($conexao,$query);// Objeto
    if(mysqli_num_rows($retorno)>0){
    $retornoArray = mysqli_fetch_assoc($retorno);// Associar à uma array
    $codusu = $retornoArray;

    // Criptografia da senha
    $option = ['cost'=>8];
    $senha = password_hash($novasenha, PASSWORD_BCRYPT, $option);

    // Alterar a senha no banco de dados
    $query = "update tbusuario set senhausu='{$senha}' where codusu= '{$codusu}'";
    $resultado = mysqli_query($conexao,$query);
    return $resultado;
    }else{
    $resultado ="erro";
    return $resultado;
    }
}