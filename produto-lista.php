<?php 
	include ('header.php');
	include ('conecta.php');
	include ('banco-produto.php');
	include ('logica-usuario.php');
	include ('mostra-alerta.php');

	mostraAlerta("success");
	verificaUsuario();
?>
<table class="table table-striped table-bordered tabela-produto">
		<?php	

		$produtos = listaProdutos($conexao);
		foreach ($produtos as $produto) :
			?>
			<tr>
				<td><?=$produto['nome'];?></td>
				<td><?=$produto['preco'];?></td>
				<td><?=substr($produto['descricao'],0,40);?></td>
				<td><?=$produto['categoria_nome']?></td>
				<td><a class="btn btn-primary" href="produto-altera-formulario.php?id=<?=$produto['id']?>">alterar</a></td>
				<td>
					<form action="remove-produto.php" method="post">
						<input type="hidden" name="id" value="<?=$produto['id']?>">
						<button class="btn btn-danger">Remover</button>
					</form>
				</td>
			</tr>
		<?php	
		endforeach;
		?>
</table>		
 
 <?php include ('footer.php') ?>