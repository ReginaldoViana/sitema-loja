<?php 
include ("logica-usuario.php");

//Função para deslogar
logout();
$_SESSION["success"] = "Usuário deslogado com sucesso.";
header("Location: index.php?logout=true");
die();
?>