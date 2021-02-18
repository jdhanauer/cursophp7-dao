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

/*Carrega user login e senha
$usuario = new Usuario();
$usuario->login("Joao","!@jhgjh2");
Echo $usuario;*/


/*Criando nov user no banco com insert
$aluno = new Usuario("Aluno2", "!@#12");
//$aluno->setDeslogin("Aluno");
//$aluno->setDessenha("1234123");
$aluno->insert();
echo $aluno; */

/*update de registro no banco
$usuario = new Usuario();
$usuario->loadById(6);
$usuario->update("professor", "!@#$%¨&");
echo $usuario;*/

//Deletar um usuario

$usuario = new Usuario();
$usuario->loadById(6);
$usuario->delete();
echo $usuario;




?>