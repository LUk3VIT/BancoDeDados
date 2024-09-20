<?php
class User{
    private string $nome;
    private string $senha;
    private string $email;
    function __construct($nome, $senha, $email){
        $this->nome = $nome;
        $this->senha = $senha;
        $this->email = $email;
    }
    function setNome($nome){
        $this->nome=$nome;
    }
    function setSenha() {
        $this->senha=$seha;
    }
    function setEmail() {
        $this->email=$email;
    }
    function getNome() {
        return $this->nome;
    }
    function getSenha() {
        return $this->senha;
    }
    
    function getEmail() {
        return $this->email;
    }
    
}

?>