<?php

require_once 'usuario.php';

$nome = $_POST['nome'];
$email = $_POST['email'];
$password =  $_POST['senha'];

$user = new user($nome, $password, $email);

$hostname = "localhost";
$bancodedados = "logcad_bd";
$usuario = "root";
$senha = "";

$conexao = new mysqli($hostname, $usuario, $senha, $bancodedados);



$sql = "insert into usario_tbl (email, senha, nome ) values ('$email' , '$password' , '$nome' )";

$resultado = $conexao->query($sql) or trigger_error($conexao->error);

if ($resultado == true){

    echo "dados salvos";
    $user->ver_dados();

}else{
    echo"erro";
}

$conexao->close();


?>