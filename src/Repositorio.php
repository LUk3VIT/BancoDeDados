<?php

include 'usuario.php';
include 'conexao.php';

class Repositorio {
    
    private $conexao;

    function __construct() 
    {
        $this->conexao = new Conexao("localhost","root","","logcad_bd");

        if($this->conexao->conectar() == false){
            echo "Erro de conexao".mysqli_connect_error();
        }
    }

    function inserirDados($nome, $email, $senha)
    {
        $sql = "INSERT INTO usuario_tbl (id_usuario, email, senha, nome) VALUES ('','$email','$senha','$nome')";
        $this->conexao->executarQuery($sql);
    }

    function exibirDados() {
        $sql = "SELECT id_usuario, email, senha, nome FROM usuario_tbl";
    }

}
