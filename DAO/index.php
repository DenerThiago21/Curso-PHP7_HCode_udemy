<?php

require_once("config.php");

/**carrega um unico usuario */
//$user = new Usuario();
//$user->loadById(2);
//echo $user;

/**lista todos os usuarios */
/*$user = new Usuario();
$lista = $user->getList();
echo json_encode($lista);*/

/**carrega lista de usuarios buscando pelo login */
//$search = Usuario::search("jo");
//echo json_encode($search);

/**carrega usuario com login e senha */
// $user = new Usuario();
// $user->login("jose", "123456");

// echo $user;

// Inserindo um novo usuario
/*
$aluno = new Usuario("Outro", "Para lá da Muralha");

$aluno->insert();

echo $aluno;
*/

//Alterar usuario
/*$usuario = new Usuario();

$usuario->loadById(8);

$usuario->update("Jon Snow", "Bastardo de Winterfell");

echo $usuario;*/

$usuario = new Usuario();

$usuario->loadById(7);

$usuario->delete();

echo $usuario;

?>