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
$usuario = new Usuario();
$usuario->login("User", "7890");
echo $usuario;
?>