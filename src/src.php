<?php

require_once 'usuario.php';
require_once 'conexao.php';

$nome = $_POST['nome'];
$email = $_POST['email'];
$password =  $_POST['senha'];

$user = new user($nome, $password, $email);

$hostname = "localhost";
$usuario = "root";
$senha = "";
$bancodedados = "logcad_bd";

$conect = new conexao($hostname, $usuario, $senha, $bancodedados);
$conect->conectar();
$conect->inserir_dado($conect ,$email, $password, $nome);

$user->ver_dados();





?>