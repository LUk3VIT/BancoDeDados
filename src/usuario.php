<?php

class user{

    public string $nome;
    public string $senha;
    public string $email;

    function __construct($nome, $senha, $email){
        $this->nome = $nome;
        $this->senha = $senha;
        $this->email = $email;
    }

    function ver_dados(){
        echo "Nome: ".$this->nome."<br>";
        echo "Senha: ".$this->senha."<br>";
        echo "Email: ".$this->email."<br>";

    }
}