<?php 
	require_once ('header.php');
	require_once ('conecta.php');
	require_once ('banco-produto.php'); 
	require_once ('logica-usuario.php');
	require_once ('class/Produto.php');

	verificaUsuario();
//Instanciar objeto
$produto = new Produto();//Abrir e fexar parenteses é opcional

$produto->nome = $_POST["nome"];
$produto->preco = $_POST["preco"];
$produto->descricao = $_POST["descricao"];
$produto->categoria_id = $_POST['categoria_id'];
if(array_key_exists('usado',$_POST)){
	$produto->usado = "true";
}else {
	$produto->usado = "false";
}

if(insereProduto($conexao,$produto)){ ?>
	<p class="text-success">Produto: <?=$produto->nome; ?>, valor: <?=$produto->preco; ?> reais adicionado com sucesso!</p>
<?php
}else { 
	$msg = mysqli_error($conexao);
?>
	<p class="text-danger">Produto: <?=$produto->nome; ?>, não foi adicionado. <?=$msg; ?></p>


<?php
}


mysqli_close($conexao);//opicional ou seja o php ja fexa automaticamente
?>

<?php include ('footer.php') ?>