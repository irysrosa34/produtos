<?php
// Header
include_once 'includes/header.php';
?>

<div class="row">
	<div class="col s12 m6 push-m3">
		<h3 class="light"> Novo Produto </h3>
		<form action="php_action/create.php" method="POST">
		<div class="input-field col s12">
				<input type="text" name="name" id="nome">
				<label for="nome">Nome</label>
			</div>

			<div class="input-field col s12">
				<input type="text" name="description" id="description">
				<label for="descrição">descrição</label>
			</div>

			<div class="input-field col s12">
				<input type="text" name="stock" id="stock">
				<label for="stock">stock</label>
			</div>

			<div class="input-field col s12">
				<input type="text" name="price" id="price">
				<label for="price">price</label>
			</div>
			<div class="input-field col s12">
				<input type="text" name="img" id="img">
				<label for="img">img</label>
			</div>

			<div class="input-field col s12">
				<input type="text" name="price_from" id="price_from">
				<label for="price_from">price_from</label>
			</div>

			<button type="submit" name="btn-cadastrar" class="btn"> Cadastrar </button>
			<a href="index.php" class="btn green"> Lista de Produtos </a>
		</form>
		
	</div>
</div>

<?php
// Footer
include_once 'includes/footer.php';
?>
