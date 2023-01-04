<?php

require_once("config.php");

// $sql = new Sql();

// $usuarios = $sql->select("SELECT * FROM tb_usuarios");

// echo json_encode($usuarios);

// Carrega apenas um usuário 

// $root = new Usuario();

// $root->loadById(2);

// echo $root;

//Carrega uma lista inteira 

// $list = Usuario::getList();

// echo json_encode( $list);

// Carrega uma lista de usuários buscando pelo login:

// $search = Usuario::search("sq");

// echo json_encode($search);

//Carrega um usuário usando login e senha:

$usuario = new Usuario();
$usuario->login("sqlserver", "a1b2c3");

echo $usuario;