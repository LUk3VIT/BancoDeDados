<?php

include 'src/Repositorio.php';

$repositorio = new Repositorio();

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

 $repositorio->InserirDados($nome, $email ,$senha);

header ('Location: part2.php');
