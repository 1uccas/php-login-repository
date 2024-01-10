<?php
include '../conf/MySQL.php';

//FAZER UMA VERIFICAÇÃO COM O BANCO DE DADOS PARA SABER SE O LOGIN E A SENHA DIGITADO JÁ EXISTE!
//ENVIAR UM CODIGO DE ERRO PELA URL PARA ENVIO DE ECHO A PÁGINA DE CADASTRO, INFORMADO DO OCORRIDO!
//CRIPTOGRAFAR URL INSERIRUSUARIO.PHP
//FAZER ALGO PARA QUE SIMPLESMENTE NÃO POSSA DIGITAR A URL INSERIRUSUARIO.PHP E CADASTRAR USER SEM PASSAR PELO FORMULÁRIO (OK)

//Valida se o formulário contem alguma informação
if (!isset($_POST['username_cadastro']) || !isset($_POST['password_cadastro'])) {
   die("Usuario ou senha não encontrado ou digitos < 1");
}else{
   $user = mysqli_real_escape_string($link, $_POST['username_cadastro']); // Sanitizar entrada do usuário
   $password = mysqli_real_escape_string($link, $_POST['password_cadastro']); // Sanitizar entrada do usuário
}

//chamada de usuarios do banco de dados
$user_sql = "SELECT * FROM usuarios";
$result_sql_user = $link->query($user_sql);

// Caso o número de colunas da variável for MAIOR que ZERO 
if ($result_sql_user->num_rows > 0) {
    while ($row = $result_sql_user->fetch_assoc()) {
      if ($row['nome_usuario'] != $user) {
         insertUser($link, $user, $password);
      }else{
         die("Usuario já cadastrado");
      }
    }
} else { 
    // Caso o número de colunas da variável for MENOR que ZERO 
    echo "<br>Sem resultados :(<br>";
}

function insertUser($link, $user, $password){

   $id = uniqid();
   $pass = password_hash($password, PASSWORD_DEFAULT);

   var_dump($user, $password, $pass, $id);

   $sql = "INSERT INTO usuarios (id, nome_usuario, senha) VALUES ('$id', '$user', '$pass')";

   if (mysqli_query($link, $sql)) {
      //echo "<br>DADOS ENVIADOS COM SUCESSO<br><br>";
      // var_dump($id, $user, $pass);

       header("location: ../../index.php");
   } else {
       echo "Erro: " . $sql . "<br>" . mysqli_errno($link);
   }

   mysqli_close($link);
}


?>
