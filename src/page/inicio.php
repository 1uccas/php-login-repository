<?php 
include 'src/Utils/mods.html';
include 'src/Utils/randomEmojis.php';
session_start();

if (!isset($_SESSION['id'])) {
	header("location: /?error=3"); //CODIGO VIA URL INFORMANDO AO USUARIO PARA FAZER LOGIN
	die("Sessão não ativa!"); 
}else{
	$nomeSession = $_SESSION['nome'];
	$idSession = $_SESSION['id'];
}

$idCrypt = base64_encode($idSession);

?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<link rel="stylesheet" href="../../src/styles/inicio.css">
<body class="bg-dark">
	<main class="master">
		<div class="div-initil">
			<label>Olá, <strong><?php echo $nomeSession; ?></strong> <?php echo randomEmojis(); ?></label><br>
			<!--<label>ID - <strong><?php echo $idSession; ?></strong></label>-->
			<p><a href='exit/<?php echo $idCrypt; ?>'>Sair</a></p>
		</div>
	</main>
	
</body>



<script type="text/javascript" src="../../src/Utils/mod_dark.js"></script>

