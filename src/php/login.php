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
			echo "Usuario ou senha incorreto";
			/*echo "<br>O usuário digital foi: ".$user;
			echo "<br>A senha digitada foi: ".$senha;

			echo "<br>";

			echo "<br>ID -> ". $row['id']. "<br>";
			echo "<br>USER -> ". $row['nome_usuario']. "<br>";
			echo "<br>PASSWORD -> ". $row['senha']. "<br>";*/
		}

		
	}
}else{ //Caso o numeros de colunas da variavel for MENOR que ZERO 
	echo "<br>Sem resultados :(<br>";
}

echo "<br>Redirecionamento Concluido com sucesso :)";
?>