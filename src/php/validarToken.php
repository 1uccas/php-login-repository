<?php 
require_once 'src/conf/MySQL.php';
include 'src/php/Sessions.php';

$mysql = new DatabaseConnection();
$link = $mysql->getLink();

$id_uniq = $_POST['cd_uniq'];

$sql = "SELECT * FROM usuarios WHERE cd_uniq = '$id_uniq';";
$result = $link->query($sql);

if ($result === false) {
    // Tratar erros na execução da consulta
    die("Erro na consulta: " . $link->error);
}

if ($result->num_rows > 0) {
	$row = $result->fetch_assoc();
	$user = $row['nome_usuario'];
	startSession($user);
    header("location: /inicio"); //usuario encontrado com sucesso
    deleteCodigo($link, $id_uniq);
} else {
	die("Codigo invalido");
   //header("location: /?u=1"); //usuario não encontrado no banco de dados
}

mysqli_close($link);


function deleteCodigo($link, $id){
    $sql = "UPDATE usuarios SET cd_uniq = NULL WHERE cd_uniq = '$id';";
    $result = $link->query($sql);

    if ($result === false) {
        die("Erro ao processar: " . $link->error);
    }

    mysqli_close($link);
}
?>