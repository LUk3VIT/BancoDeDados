<?php

include 'usuario.php';
include 'conexao.php';

class Repositorio {
    
    private $conexao;

    function __construct() {
        $this->conexao = new Conexao();
    }
}
