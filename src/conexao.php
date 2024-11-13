<?php
class Conexao{
    private $host;
    private $usuario;
    private $senha;
    private $bd;
    private $conexao;


    function __construct($host, $usuario, $senha, $bd)
    {
        $this->host=$host;
        $this->usuario=$usuario;
        $this->senha=$senha;
        $this->bd=$bd;
    }

    function conectar()
    {
        $this->conexao = mysqli_connect(
            $this->host, 
            $this->usuario, 
            $this->senha, 
            $this->bd
        );

        if ($this->conexao->connect_error){
            error_log('Conexção falhou'. $this->$conexao->conect_error);
            return false;
        }else{
            mysqli_query($this->conexao,"SET NAMES 'UTF8'");
            return true;
        }
    }

    function executarQuery($sql)
    {
        return $this->conexao->query($sql);
    }

    function numeroLinhas($query) 
    {
        $linhas = $this->executarQuery($query);
        return $linhas->num_rows;
    }

    
    
}
?>