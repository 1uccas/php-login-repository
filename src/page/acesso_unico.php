<?php 
include 'src/Utils/mods.html';
$email = $_GET['liame'];
$descrypt_email = base64_decode($email);

?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<link rel="stylesheet" href="../../src/styles/acesso_unico.css">

<body class="bg-dark">
      <form action="../validarToken" method="post" class="form">
            <div class="text_email">
                  <p>Código enviado para: <strong><?php echo $descrypt_email; ?></strong></p>
            </div>
            <div class="input-group flex-nowrap w-25">
              <input type="text" class="form-control" id="username_cadastro" name="cd_uniq" placeholder="Informe seu código" aria-label="cd_uniq" aria-describedby="addon-wrapping" required>
            </div>
            <button type="submit" id="btn_enviar" class="btn btn-success w-25" name="Enviar">Enviar</button>
      </form>
</body>
<script type="text/javascript" src="../../src/Utils/mod_dark.js"></script>