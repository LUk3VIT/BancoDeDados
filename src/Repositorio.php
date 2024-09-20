<?php

include 'usuario.php';
include 'conexao.php';

class Repositorio {
    
    private $conexao;

    function __construct() 
    {
        $this->conexao = new Conexao("localhost","root","","logcab_bd");

        if($this->conexao->conectar() == false){
            echo "Erro de conexao".mysqli_connect_error();
        }
    }

    public functison InserirDados($nome, $email, $senha)
    {
        $sql = "INSERT INTO usario_tbl (id_usuario, email, senha, nome) VALUES ('','$email','$senha','$nome')";
        $this->conexao->executarQuery($sql);
    }

}
