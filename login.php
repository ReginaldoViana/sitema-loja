<?php 
include ("conecta.php");
include ("banco-usuario.php");
include ("logica-usuario.php");


$usuario = buscaUsuario($conexao, $_POST['email'], $_POST['senha']);

if($usuario == null){
	$_SESSION["danger"] = "Usuário ou senha incorretos.";
	header("Location: index.php");
} else {
	//Função que cria o cookie
	logaUsuario($usuario['email']);
	$_SESSION["success"] = "Logado com sucesso.";
	header("Location: index.php?login=1");
}
die();