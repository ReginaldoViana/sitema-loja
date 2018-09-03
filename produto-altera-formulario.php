<?php 
include ('header.php');
include ('conecta.php');
include ('banco-categoria.php');
include ('banco-produto.php');

$id = $_GET['id'];
$produto = buscaProduto($conexao,$id);
$categorias = listaCategorias($conexao);
$usado = $produto['usado'] ? "checked='checked'" : "";
?>

<h2>Alterando Produto</h2>
<form action="alterar-produto.php" method="post">
	<td><input type="hidden" name="id" value="<?=$produto['id']?>"></td>
	<table class="table">
		<?php include ("produto-formulario-base.php"); ?>
	</table>
</form>	

<?php include ('footer.php') ?>