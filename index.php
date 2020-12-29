<?php

require_once("config.php");

//$sql = new Sql();

//$usuarios = $sql->select("SELECT * FROM tb_usuarios");

//echo json_encode($usuarios);

//Carrega 1 usuario
//$root = new Usuario();
//$root->loadbyId(3);

//echo $root;

//Carrega uma lista de usuários
//$lista = Usuario::getList();

//echo json_encode($lista);

//Carrega uma lista de usuários buscando pelo login
//$search = Usuario::search("ana");
//echo json_encode($search);

//Carrega usuário usando login e senha

//$usuario = new Usuario();
//$usuario->login("root", "$#@!#");

//echo $usuario;

/*
// Criando um novo usuário
$aluno = new Usuario("aluno", "@lun0");

$aluno->insert();

echo $aluno;
*/

$usuario = new Usuario();

$usuario->loadbyId(7);

$usuario->update("professor", "#!$%*09");

echo $usuario;
?>