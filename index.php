<?php 
function error_login(){ //Função para retornar div abaixo caso a URL contenha ?error=1
	if (isset($_GET['error'])) {
		$error_1 = $_GET['error'];

		if ($error_1 == 1) {
			echo "<div class='error'>Usuário ou Senha Incorretos!</div>";
		}
	}
}
	
	
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="src/styles/index.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<title>Atomic - Login</title>
</head>
<body class="bg-dark">
	<main class="main-class-master">
		<div class="box-class-container">
			<div class="box-class">
				<div class="box-login">
					<form action="src/php/login.php" method="POST">
						<div class="div-label-user">
							<label>Usuário</label>
						</div>
						<div class="input-group flex-nowrap m-2">
						  <span class="input-group-text" id="addon-wrapping"></span>
						  <input type="text" class="form-control" name="input-user" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping" required>
						</div>
						<div class="div-label-password">
							<label>Senha</label>
						</div>
						<div class="input-group flex-nowrap m-2">
						  <span class="input-group-text" id="addon-wrapping"></span>
						  <input type="password" class="form-control" name="input-password" placeholder="Password" aria-label="Username" aria-describedby="addon-wrapping" required>
						</div>
						<?php error_login() ?> <!--Chamada da função PHP -->
						<div class="div-forgout-password">
							<p><a href="#" class="pe-auto">Esqueci a senha</a></p>
						</div>
						<div class="div-input-button">
							<button type="submit" class="btn btn-warning">Acessar</button>
						</div>
					</form>
					<div class="div-novo-usuario">
						<hr>
						<p>Não tem uma conta? - <a href="src/page/cadastrar_novo_usuario.php">Cadastrar novo usuário</a></p>
					</div>
					
				</div>
			</div>
		</div>
	</main>
</body>
</html>