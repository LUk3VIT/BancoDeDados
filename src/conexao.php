<?php

class conexao{

    private string $host;
    private string $usuario;
    private string $senha;
    private string $bd;

    function __construct($host, $usuario, $senha, $bd){
        $this->host=$host;
        $this->usuario=$usuario;
        $this->senha=$senha;
        $this->bd=$bd;
    }

    function conectar(){
        $local = $this->host;
        $user = $this->usuario;
        $password = $this->senha;
        $bancoDados = $this->bd;

        $conectar = new mysqli($local, $user, $password, $bancoDados);

        if ($conectar == true){
            return $conectar;
        
        }else{
            echo "erro";
            echo trigger_error($conexao->error);
        }
    }

    function inserir_dado(conexao $com, $email, $senha, $nome){

        $com = $this->conectar();

        $sql = "insert into usario_tbl (email, senha, nome ) values ('$email' , '$senha' , '$nome' )";

        $resultado = $com->query($sql);
        if ($resultado == true){
            echo "dados salvos <br><br>";
            
        }else{
            echo"erro";
        }

    }

}

?>