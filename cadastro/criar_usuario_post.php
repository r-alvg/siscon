<?php
require_once('../classes/usuario.php');

$user = new Usuario;

$user->setNome($_POST['nome']);
$user->setMatricula($_POST['matricula']);
$user->setSenha($_POST['senha']);

if ($user->inserir()){
header("location:../index.php");
die();

}else{

header("location:../cadastro/cadastro-form.php?usuarioCadastrado=true");

}