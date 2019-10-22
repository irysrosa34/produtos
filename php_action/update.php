<?php
// Sessão
session_start();
// Conexão
require_once 'db_connect.php';

if(isset($_POST['btn-editar'])):
	$nome = mysqli_escape_string($connect, $_POST['name']);
	$description = mysqli_escape_string($connect, $_POST['description']);
	$stock = mysqli_escape_string($connect, $_POST['stock']);
	$price = mysqli_escape_string($connect, $_POST['price']);
	$price_from = mysqli_escape_string($connect, $_POST['price_from']);
	$img = mysqli_escape_string($connect, $_POST['img']);
	

	$id = mysqli_escape_string($connect, $_POST['id']);

	$sql = "UPDATE products, products_images SET name='$nome', description= '$description', stock= '$stock', price = '$price', price_from = '$price_from', url = '$img' WHERE id = '$id' or id_product='$id'";

	if(mysqli_query($connect, $sql)):
		$_SESSION['mensagem'] = "Atualizado com sucesso!";
		header('Location: ../index.php');
	else:
		$_SESSION['mensagem'] = "Erro ao atualizar";
		header('Location: ../index.php');
	endif;
endif;