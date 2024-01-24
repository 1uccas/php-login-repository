<?php 
class DatabaseConnection {
    private $link;
    
    const SERVIDOR = "localhost";
    const USUARIO = "root";
    const SENHA = "";
    const BANCO = "atomic";

    public function __construct() {
        $this->link = mysqli_connect(self::SERVIDOR, self::USUARIO, self::SENHA, self::BANCO);

        // Valida a conexão
        if (mysqli_connect_errno()){
            echo "Falha ao conectar no Banco de Dados MySQL: " . mysqli_connect_error();
        }

        // Configuração do conjunto de caracteres
        mysqli_query($this->link, "SET NAMES 'utf8'") or die("Erro na SQL" . mysqli_error($this->link));
        mysqli_query($this->link, "SET character_set_connection=utf8") or die("Erro na SQL" . mysqli_error($this->link));
        mysqli_query($this->link, "SET character_set_client=utf8") or die("Erro na SQL" . mysqli_error($this->link));
        mysqli_query($this->link, "SET character_set_results=utf8") or die("Erro na SQL" . mysqli_error($this->link));
    }

    public function getLink() {
        return $this->link;
    }

    public function closeConnection() {
        mysqli_close($this->link);
    }
}


/*header("Content-Type: text/html; charset=utf-8");
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "atomic";
$link = mysqli_connect($servidor, $usuario, $senha, $banco);
// Valida a conexão
if (mysqli_connect_errno()){
    echo "Falha ao conectar no Banco de Dados MySQL: " . mysqli_connect_error();
}
mysqli_query($link, "SET NAMES 'utf8'") or die("Erro na SQL" . mysqli_error($link));
mysqli_query($link, "SET character_set_connection=utf8") or die("Erro na SQL" . mysqli_error($link));
mysqli_query($link, "SET character_set_client=utf8") or die("Erro na SQL" . mysqli_error($link));
mysqli_query($link, "SET character_set_results=utf8") or die("Erro na SQL" . mysqli_error($link));*/

?>