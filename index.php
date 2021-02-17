<?php

require_once("config.php");


/*Retorna apenas 1 usuário
$root = new Usuario();
$root->loadById(3);
echo $root*/

/*Retorna uma lista de usuários
$lista = Usuario::getList();
echo json_encode($lista);*/

/*Carrega uma lista de user pelo Login
$search = Usuario::search("jo");
echo json_encode($search);*/

//Carrega user login e senha
$usuario = new Usuario();
$usuario->login("Joao","!@jhgjh2");
Echo $usuario;


?>