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
	$nome = clear($_POST['nome']);
    $sobrenome = clear($_POST['sobrenome']);
    $celular = clear($_POST['celular']);
	$email = clear($_POST['email']);
	$dataAni = clear($_POST['dataAni']);

	$sql = "INSERT INTO tbcontato (nome, sobrenome, celular, email, dataAni) VALUES ('$nome', '$sobre','$celular', '$email', '$dataAni')";

	if(mysqli_query($connect, $sql)):
		$_SESSION['mensagem'] = "Cadastrado com sucesso!";
		header('Location: ../cadastro.php');
	else:
		$_SESSION['mensagem'] = "Erro ao cadastrar";
		header('Location: ../cadastro.php');
	endif;
endif;