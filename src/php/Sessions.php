<?php 
echo "Hello";
function startSession(){
	$user = $_GET['user'];

	//Verifica se existe alguma sessão ativa
	if (session_start() !== PHP_SESSION_ACTIVE) {
		//Se tiver ativa mas não tiver nenhuma sessão habilitada, inicia uma nova
		if (!isset($_SESSION)) {
			session_start();	
		}else{
			$id_session = session_id();
			$status_session = session_status();
			$name_session = $_SESSION['nome'] = $user;

			echo "<br>Id da sessão ->".$id_session." <br>";
			echo "<br>nome de usuario -> ".$name_session.'<br>';
			echo "<br>Status da sessão ->".$status_session." <br>";
		}
	}else{
		die("Sessão desabilitada!");
	}
		
	
}

startSession();

?>