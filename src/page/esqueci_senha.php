<?php 
include 'src/Utils/mods.html';

?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<link rel="stylesheet" href="../../src/styles/esqueci_senha.css">

<body class="bg-dark">
      <form action="email" method="post" class="form">
            <div class="h3_form">
                  <h3>Qual seu nome de usuário?</h3>
            </div>
            <div class="input-group flex-nowrap w-25">
              <input type="text" class="form-control" id="username_cadastro" name="user" placeholder="Nome de Usuario" aria-label="Username" aria-describedby="addon-wrapping" required>
            </div>
            <button type="submit" id="btn_enviar" class="btn btn-success w-25" name="Enviar">Enviar</button>
      </form>
</body>
<script type="text/javascript" src="../../src/Utils/mod_dark.js"></script>