<?php 
session_start();

if (!isset($_SESSION['id'])) {
	header("location: /?error=3"); //CODIGO VIA URL INFORMANDO AO USUARIO PARA FAZER LOGIN
	die("Sessão não ativa!"); 
}else{
	echo "Olá "."<strong>".$_SESSION['nome']."</strong>";
	echo '<br>Este é o ID da sua sessão:'."<strong>".$_SESSION['id']."</strong>";

	echo "<br>Hello World!";

	echo "<br><br> <h1>Implementar sessões na página inicio!!!!!</h1>";
	echo "<a href='exit'>Sair</a>";
}

?>

