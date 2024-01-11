<?php 
 //Função para retornar div abaixo caso a URL contenha ?u=0 -> u = usuario
function u(){
	if(isset($_GET['u'])){
		$u = $_GET['u'];
		if ($u == 0) {
			echo "<div class='user_concluide'>Usuário adicionado com sucesso!</div>";
		}else{
			echo "error()";
		}
	}
}
//Função para retornar div abaixo caso a URL contenha ?error=1
function errors(){
	if (isset($_GET['error'])) {
		$error_1 = $_GET['error'];

		$errors = [
			1 => "<div class='error'>Usuário ou Senha Incorretos!</div>",
			2 => "<div class='error'>Usuário já cadastrado</div>",
		];

		if (isset($errors[$error_1])) {
			echo $errors[$error_1];
		}
	}
}


?>