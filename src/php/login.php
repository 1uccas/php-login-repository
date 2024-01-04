<?php 
include '../conf/MySQL.php';

echo "Redirecionamento Concluido com sucesso :)";

$user = $_POST['input-user'];
$senha = $_POST['input-password'];

if ($user == "lucas.feitosa" && $senha == "Si!car@2024") {
	header("location: ../../index.php");
	die("Erro inesperado aconteceu");
} else {
	echo "<br>O usuário é: ".$user;
	echo "<br>A senha é: ".$senha;
}
?>