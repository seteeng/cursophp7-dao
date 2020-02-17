<?php

require_once("config.php");

//carrega um usuário
//$root = new Usuario();
//$root->loadById(1);
//echo $root;

//carrega uma lista de usuários
//$lista = Usuario::getList();
//echo json_encode($lista);

//carrega uma lista de usuários buscando pelo login
//$search = Usuario::search("ro");
//echo json_encode($search);

//carrega um usuáario usando o login e a senha
//$usuario = new Usuario();
//$usuario->login("User", "7890");
//echo $usuario;

//criando um novo usuário
//$aluno = new Usuario("aluno", "@lun0");
//$aluno->insert();
//echo $aluno;

//atualizando usuário
//$usuario = new Usuario();
//$usuario->loadById(8);
//$usuario->update("professor", "senha");
//echo $usuario;

//apagardo usuário
$usuario = new Usuario();

$usuario->loadById(7);

$usuario->delete();

echo $usuario;

?>