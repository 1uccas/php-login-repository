<?php
include_once 'src/conf/MySQL.php';
include 'Sessions.php';

// Variáveis do formulário - index.php
$user = mysqli_real_escape_string($link, $_POST['input-user']);
$senha = mysqli_real_escape_string($link, $_POST['input-password']);

$sql = "SELECT * FROM usuarios";
$result = $link->query($sql);

// Caso o número de colunas da variável for MAIOR que ZERO 
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        if ($user == $row['nome_usuario'] && password_verify($senha, $row['senha'])) {
            startSession($user);
            header("location: /inicio");
            die("Redirecionamento concluído com sucesso");
        } else {
            header("location: /?error=1");
        }
    }
} else { 
    // Caso o número de colunas da variável for MENOR que ZERO 
    echo "<br>Sem resultados :(<br>";
}

echo "<br>Redirecionamento concluído com sucesso :)";
?>
