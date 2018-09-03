<?php 
include ('header.php');
include ('conecta.php');
include ('banco-categoria.php');
include ('logica-usuario.php');


verificaUsuario();

$categorias = listaCategorias($conexao);
$produto = array("nome"=>"", "preco"=>"", "descricao"=>"", "categoria_id"=>1);
$usado = "";
?>

<h2>Formulário de cadastro</h2>
<form action="adiciona-produto.php" method="post">
	<table class="table">
		<?php include ("produto-formulario-base.php"); ?>
	</table>
</form>	

<?php include ('footer.php') ?>