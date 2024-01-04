<?php 
header("Content-Type: text/html; charset=utf-8");
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "atomic";
$link = mysqli_connect($servidor, $usuario, $senha, $banco);
// Valida a conexão
if (mysqli_connect_errno()){
    echo "Falha ao conectar no Banco de Dados MySQL: " . mysqli_connect_error();
}
mysqli_query($link, "SET NAMES 'utf8'") or die("Erro na SQL" . mysqli_error($link));
mysqli_query($link, "SET character_set_connection=utf8") or die("Erro na SQL" . mysqli_error($link));
mysqli_query($link, "SET character_set_client=utf8") or die("Erro na SQL" . mysqli_error($link));
mysqli_query($link, "SET character_set_results=utf8") or die("Erro na SQL" . mysqli_error($link));

?>