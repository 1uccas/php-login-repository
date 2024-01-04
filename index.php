<?php 
	if (isset($_GET['error'])) {
		$error_1 = $_GET['error'];

		if ($error_1 == 1) {
			echo "Usuario ou Senha Incorreto";
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
<body>
	<main class="main-class-master">
		<div class="box-class-container">
			<div class="box-class">
				<div class="box-login">
					<form action="src/php/login.php" method="POST">
						<div class="div-label-user">
							<label>Usuário</label>
						</div>
						<div class="div-label-input-user">
							<input type="text" placeholder="Informe seu usuário" name="input-user" required>
						</div>
						<div class="div-label-password">
							<label>Senha</label>
						</div>
						<div class="div-label-input-password">
							<input type="password" placeholder="Informe sua senha" name="input-password" required>
						</div>
						<div class="div-input-button">
							<button type="submit">Acessar</button>
						</div>
					</form>
					
				</div>
			</div>
		</div>
	</main>
</body>
</html>