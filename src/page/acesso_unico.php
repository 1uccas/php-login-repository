<?php 
$email = $_GET['liame'];
$descrypt_email = base64_decode($email);

?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<link rel="stylesheet" href="../../src/styles/acesso_unico.css">

<body class="bg-dark">
      <form action="../validarToken" method="post">
            <div class="text_email">
                  <p>Enviamos um código de acesso único ao e-mail: <strong><?php echo $descrypt_email; ?></strong></p>
            </div>
            
            <input type="text" name="cd_uniq" placeholder="Informe seu codigo de uso unico">
            <input type="submit" name="Enviar">
      </form>
</body>