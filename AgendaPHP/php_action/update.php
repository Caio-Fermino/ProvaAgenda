<?php
// Sessão
session_start();
// Conexão
require_once 'db_connect.php';

if(isset($_POST['btn-editar'])):
	$nome = mysqli_escape_string($connect, $_POST['nome']);
    $sobrenome = mysqli_escape_string($connect, $_POST['sobrenome']);
    $celular = mysqli_escape_string($connect, $_POST['celular']);
	$email = mysqli_escape_string($connect, $_POST['email']);
	$dataAni = mysqli_escape_string($connect, $_POST['dataAni']);

	$id = mysqli_escape_string($connect, $_POST['id']);

	$sql = "UPDATE tbcontato SET nome = '$nome', sobrenome = '$sobrenome', celular = '$celular', email = '$email', dataAni = '$dataAni' WHERE id = '$id'";

	if(mysqli_query($connect, $sql)):
		$_SESSION['mensagem'] = "Atualizado com sucesso!";
		header('Location: ../cadastro.php');
	else:
		$_SESSION['mensagem'] = "Erro ao atualizar";
		header('Location: ../cadastro.php');
	endif;
endif;