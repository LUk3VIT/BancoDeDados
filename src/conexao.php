<?php

class conexao{

    private string $host;
    private string $bd;
    private string $usuario;
    private string $senha;

    function __construct(){
        
    }

}

/**
$hostname = "localhost";
$bancodedados = "logcad_bd";
$usuario = "root";
$senha = "";

$conexao = new mysqli($hostname, $usuario, $senha, $bancodedados);


$sql = "insert into usario_tbl (email, senha, nome ) values ('$email' , '$password' , '$nome' )";

$resultado = $conexao->query($sql) or trigger_error($conexao->error);

if ($resultado == true){

    echo "dados salvos <br>";
    $user->ver_dados();

}else{
    echo"erro";
}

$conexao->close();
 */

?>