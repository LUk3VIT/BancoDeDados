<?php

$hostname = "localhost";
$bancodedados = "logcad_bd";
$usuario = "root";
$senha = "";

$conexao = new mysqli($hostname, $usuario, $senha, $bancodedados);

$nome = isset($_POST['nome']) ? $_POST['nome'] : ""; 
$email = isset($_POST['email']) ? $_POST['email'] : "";
$senha = isset($_POST['senha']) ? $_POST['senha'] : "";

$sql = "insert into usario_tbl (email, senha, nome ) values ('$email' , '$senha' , '$nome' )";

$resultado = $conexao->query($sql) or trigger_error($conexao->error);

if ($resultado == true){

    echo "dados salvos";

}else{
    echo"erro";
}

$conexao->close();

?>