<?php 
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Atomic · Cadastro</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<link rel="stylesheet" href="../styles/cadastro.css">
	</link>
</head>
<body class="bg-dark">
	<main class="main-class-master">
		<div class="box-class-container">
			<div class="box-class">
				<div class="box-cadastro">
					<form action="" method="POST">
						<div class="div-label-user">
							<label>Usuário</label>
						</div>
						<div class="input-group flex-nowrap m-2">
						  <span class="input-group-text" id="addon-wrapping"></span>
						  <input type="text" class="form-control" id="username_cadastro" name="username_cadastro" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping" required>
						</div>
						<div class="div-label-password">
							<label>Senha</label>
						</div>
						<div class="input-group flex-nowrap m-2">
						  <span class="input-group-text" id="addon-wrapping"></span>
						  <input type="password" class="form-control" id="password_cadastro" name="password_cadastro" placeholder="Password" aria-label="Username" aria-describedby="addon-wrapping" required>
						</div>
						<div class="div-label-again-password">
							<label>Confirme sua Senha</label>
						</div>
						<div class="input-group flex-nowrap m-2">
						  <span class="input-group-text" id="addon-wrapping"></span>
						  <input type="password" class="form-control" id="password_again_cadastro" name="password_again_cadastro" placeholder="Confirm your password" aria-label="Username" aria-describedby="addon-wrapping" required>
						</div>
						<div class="div-input-button">
							<button type="submit" class="btn btn-warning" name="btn_cadastro">Criar cadastro</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</main>
</body>
</html>