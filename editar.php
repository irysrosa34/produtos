<?php
// Conexão
include_once 'php_action/db_connect.php';
// Header
include_once 'includes/header.php';
// Select
if(isset($_GET['id'])):
	$id = mysqli_escape_string($connect, $_GET['id']);

	$sql = "SELECT * FROM products WHERE id = '$id'";
	$resultado = mysqli_query($connect, $sql);
	$dados = mysqli_fetch_array($resultado);
endif;
?>

<div class="row">
	<div class="col s12 m6 push-m3">
		<h3 class="light"> Editar Produto </h3>
		<form action="php_action/update.php" method="POST">
			<input type="hidden" name="id" value="<?php echo $dados['id'];?>">
			<div class="input-field col s12">
				<input type="text" name="name" id="nome" value="<?php echo $dados['name'];?>">
				<label for="nome">Nome</label>
			</div>

			<div class="input-field col s12">
				<input type="text" name="description" value="<?php echo $dados['description'];?>" id="description">
				<label for="descrição">descrição</label>
			</div>

			<div class="input-field col s12">
				<input type="text" value="<?php echo $dados['stock'];?>" name="stock" id="stock">
				<label for="stock">stock</label>
			</div>

			<div class="input-field col s12">
				<input type="text" value="<?php echo $dados['price'];?>" name="price" id="price">
				<label for="price">price</label>
			</div>
			<div class="input-field col s12">
				<input type="text" value="<?php echo $dados['img'];?>" name="img" id="img">
				<label for="img">img</label>
			</div>

			<div class="input-field col s12">
				<input type="text" value="<?php echo $dados['price_from'];?>" name="price_from" id="price_from">
				<label for="price_from">price_from</label>
			</div>

			<button type="submit" name="btn-editar" class="btn"> Atualizar</button>
			<a href="index.php" class="btn green"> Lista de clientes </a>
		</form>
		
	</div>
</div>

<?php
// Footer
include_once 'includes/footer.php';
?>
