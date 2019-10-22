<?php
// Sessão
session_start();
// Conexão
require_once 'db_connect.php';
// Clear
function clear($input) {
	global $connect;
	// sql
	$var = mysqli_escape_string($connect, $input);
	// xss
	$var = htmlspecialchars($var);
	return $var;
}

if(isset($_POST['btn-cadastrar'])):
	$nome = clear($_POST['name']);
	$description = clear($_POST['description']);
	$stock = clear($_POST['stock']);
	$price = clear($_POST['price']);
	$price_from = clear($_POST['price_from']);
	$img = clear($_POST['img']);

	if(isset($_GET['id'])):
		$id = mysqli_escape_string($connect, $_GET['id']);
	
		$sql = "SELECT * FROM products WHERE id = '$id'";
		$resultado = mysqli_query($connect, $sql);
		$dados = mysqli_fetch_array($resultado);
	endif;

	$idimg = $dados['id'];
	$sql = "INSERT INTO products (nome, description, stock, price, price_from) VALUES ('$nome', '$description', '$stock', '$price', '$price_from')";
	$sql2 = "INSERT INTO products_images (id_product, url)  VALUES ('$idimg', '$img')";

	if(mysqli_query($connect, $sql) and (mysqli_query($connect, $sql2)):
		$_SESSION['mensagem'] = "Cadastrado com sucesso!";
		header('Location: ../index.php');
	else:
		$_SESSION['mensagem'] = "Erro ao cadastrar";
		header('Location: ../index.php');
	endif;
endif;