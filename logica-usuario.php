<?php 
//Iniciando a sessão
session_start();

//Função para verificar se o usuário está logado
function usuarioEstaLogado() {
	//return isset($_COOKIE['usuario_logado']);

	return isset($_SESSION['usuario_logado']);
}
function verificaUsuario() {
	if(!usuarioEstaLogado()){
		$_SESSION["danger"] = "Você não tem acesso a essa funcionalidade.";
		header("Location: index.php");
		die();
	}
}
function usuarioLogado() {
	//return $_COOKIE['usuario_logado'];

	return $_SESSION['usuario_logado'];
}
function logaUsuario($email) {
	//Esse forma de cookie é muito vuneravel
	//setcookie("usuario_logado", $email, time()+60);

	//Esse forma de sessão é mais segura
	$_SESSION["usuario_logado"] = $email;
}
//Função que destroi a sessão que é o mesmo que deslogar
function logout() {
	session_destroy();
	session_start();
}









 ?>