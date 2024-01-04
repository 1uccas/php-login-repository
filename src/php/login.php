<?php 
include '../conf/MySQL.php'; //Incluindo conexão com Bando de Dados MYSQL (MySQL.php)

//Variaveis do formulário - index.php
$user = $_POST['input-user'];
$senha = $_POST['input-password'];

$sql = "SELECT * FROM usuarios"; //Variavel comando MySQL
$result = $link->query($sql); //Variavel para atribuir o comando MySQL para o link de conexão (MySQL.php)

//Caso o numeros de colunas da variavel for MAIOR que ZERO 
if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()){ 
		if ($user == $row['nome_usuario'] && $senha == $row['senha']) {
			header("location: ../../index.php");
			die("Erro inesperado aconteceu".error);
		} else {
			header("location: ../../index.php?error=1");
		}

		
	}
}else{ //Caso o numeros de colunas da variavel for MENOR que ZERO 
	echo "<br>Sem resultados :(<br>";
}

echo "<br>Redirecionamento Concluido com sucesso :)";
?>