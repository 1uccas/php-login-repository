<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

//$assunto = $_POST['assunto'];
//$mensagem = $_POST['mensagem'];
$id_uniq = substr(uniqid(),0, 8);

function enviarMensagem($id_uniq) {
    $corpoEmail = "
        <p>Código de acesso pessoal</p>
        <p>Recebemos sua solicitação de acesso único por 24 horas.<br>Seu código de acesso é: $id_uniq</p>
    ";

    $mail = new PHPMailer(true);

    try {
        // Configurações do servidor SMTP
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'me.mailphp@gmail.com';
        $mail->Password = 'ctvkmcxgxujfnygp';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        // Configurações do e-mail
        $mail->setFrom('me.mailphp@gmail.com', 'me.mailphp');
        $mail->addAddress('nascimentolucas2164@gmail.com', 'Destinatário');
        $mail->isHTML(true);
        $mail->Subject = "Acesso Pessoal";
        $mail->Body = $corpoEmail;

        $mail->send();
        echo 'E-mail enviado com sucesso!';
    } catch (Exception $e) {
        echo "Erro ao enviar o e-mail: {$mail->ErrorInfo}";
    }
}

enviarMensagem($id_uniq);
?>