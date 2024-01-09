<?php
include '../conf/MySQL.php';

//FAZER UMA VERIFICAÇÃO COM O BANCO DE DADOS PARA SABER SE O LOGIN E A SENHA DIGITADO JÁ EXISTE!
//ENVIAR UM CODIGO DE ERRO PELA URL PARA ENVIO DE ECHO A PÁGINA DE CADASTRO, INFORMADO DO OCORRIDO!
//CRIPTOGRAFAR URL INSERIRUSUARIO.PHP

$id = uniqid();
$user = mysqli_real_escape_string($link, $_POST['username_cadastro']); // Sanitizar entrada do usuário
$password = mysqli_real_escape_string($link, $_POST['password_cadastro']); // Sanitizar entrada do usuário

$pass = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO usuarios (id, nome_usuario, senha) VALUES ('$id', '$user', '$pass')";

if (mysqli_query($link, $sql)) {
   //echo "<br>DADOS ENVIADOS COM SUCESSO<br><br>";
    //var_dump($id, $user, $pass);

    header("location: ../../index.php");
} else {
    echo "Erro: " . $sql . "<br>" . mysqli_errno($link);
}

mysqli_close($link);
?>
