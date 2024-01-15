<?php
include 'src/conf/MySQL.php';

//importa as bibliotecas
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$status = http_response_code(); //verifica o status da sessão atual
$id_uniq = substr(uniqid(), 0, 8); //cria um id unico (Mudar)

$user = mysqli_real_escape_string($link, $_POST['user']);
$email = mysqli_real_escape_string($link, $_POST['email']);

if ($status != 404) {
    $sql = "SELECT * FROM usuarios WHERE nome_usuario = '$user'";
    $result = $link->query($sql);

    if ($result === false) {
        // Tratar erros na execução da consulta
        die("Erro na consulta: " . $link->error);
    }

    if ($result->num_rows > 0) {
        enviarMensagem($id_uniq, $user, $email);
        header("location: /?u=2"); //usuario encontrado com sucesso
    } else {
       header("location: /?u=1"); //usuario não encontrado no banco de dados
    }
} else {
    die("404");
}

//função de envio de mensagens
function enviarMensagem($id_uniq, $user, $email) {
    $corpoEmail = "
        <center><h1>Código de acesso pessoal</h1></center>

        <h3>Olá, <strong>$user.</strong></h3> <p>Recebemos sua solicitação de acesso único por 24 horas.<br>Seu código de acesso é: <strong>$id_uniq</strong></p>

        <p>Se você não solicitou esse código. Entre em contato com o proprietário através do E-mail: <strong>the.new.captionn@gmail.com</strong></p>

        <i><strong>É importante lembrar de não compartilhar com ninguém.</strong></i>
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
        $mail->setFrom('me.mailphp@gmail.com', 'Atomic');
        $mail->addAddress($email, 'Destinatário');
        $mail->isHTML(true);
        $mail->Subject = "Acesso Pessoal";
        $mail->Body = $corpoEmail;

        $mail->send();
    } catch (Exception $e) {
        echo "Erro ao enviar o e-mail: {$mail->ErrorInfo}";
    }
}
?>
