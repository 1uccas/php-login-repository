<?php
include 'src/Utils/Manipulador.php';

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../../src/styles/index.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<title>Atomic · Login</title>
</head>
<body class="bg-dark">
	<main class="main-class-master">
		<div class="box-class-container">
			<div class="box-class">
				<div class="box-login">
					<?php u(); ?> <!--Chamada da função de novo usuario cadastrado -->
					<form action="phpLogin" method="POST">
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
						<?php errors() ?> <!--Chamada da função de error PHP -->
						<div class="div-forgout-password">
							<p><a href="esqueci_senha" class="pe-auto">Esqueci a senha</a></p>
						</div>
						<div class="div-input-button">
							<button type="submit" class="btn btn-warning">Acessar</button>
						</div>
					</form>
					<div class="div-novo-usuario">
						<hr>
						<p>Não tem uma conta? - <a href="cadastro">Cadastrar novo usuário</a></p>
					</div>
					
				</div>
			</div>
		</div>
	</main>
</body>
</html>