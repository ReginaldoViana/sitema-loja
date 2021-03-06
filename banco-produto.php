<?php 
function listaProdutos ($conexao){
	$produtos = array();
	$resultado = mysqli_query($conexao, 'select p.*,c.nome as categoria_nome from produtos as p join categorias as c on c.id=p.categoria_id');
	while ($produto = mysqli_fetch_assoc($resultado)) {
		array_push($produtos, $produto);
	}
	return $produtos;
}

function insereProduto($conexao,$produto) {
	$query = "insert into produtos (nome,preco,descricao,categoria_id,usado) values ('{$produto->nome}',{$produto->preco},'{$produto->descricao}',{$produto->categoria_id},{$produto->usado})";//adiciona os valores na tabela
	return mysqli_query($conexao, $query);
}

function alteraProduto($conexao, $id, $nome, $preco, $descricao, $categoria_id, $usado){
	$query = "update produtos set nome='{$nome}', preco={$preco}, descricao='{$descricao}', categoria_id={$categoria_id}, usado={$usado} where id='{$id}'";
	return mysqli_query($conexao, $query);
}

function buscaProduto($conexao,$id){
	$query = "SELECT * FROM produtos WHERE id={$id}";
	$resultado = mysqli_query($conexao,$query);
	return mysqli_fetch_assoc($resultado);
}

function removeProduto($conexao,$id){
	$query = "delete from produtos where id = {$id}";
	return mysqli_query($conexao, $query);
}