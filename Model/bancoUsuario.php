<?php
function insereUsuario($conexao,$email,$senha){

    $option= ['cost'=>8];
    $senhacryp= password_hash($senha,PASSWORD_BCRYPT,$option);

    $query = "insert into tbusuario(loginusu,senhausu)values('{$email}','{$senhacryp}')";
    $resul = mysqli_query($conexao,$query);

    return $resul;
}
?>