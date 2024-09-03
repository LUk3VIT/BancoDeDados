<?php

require_once 'usuario.php';
require_once 'conexao.php';

$nome = $_POST['nome'];
$email = $_POST['email'];
$password =  $_POST['senha'];

$user = new user($nome, $password, $email);





?>