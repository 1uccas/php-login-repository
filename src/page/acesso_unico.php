<?php 
$email = $_GET['liame'];
$descrypt_email = base64_decode($email);

?>
<form action="../validarToken" method="post">
      <p>Enviamos um código de acesso único ao e-mail: <strong><?php echo $descrypt_email; ?></strong></p>
      <input type="text" name="cd_uniq" placeholder="Informe seu codigo de uso unico">
      <input type="submit" name="Enviar">
</form>