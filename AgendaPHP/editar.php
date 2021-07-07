<?php
// Conexão
include_once 'php_action/db_connect.php';
// Header
include_once 'includes/header.php';
// Select
if(isset($_GET['id'])):
	$id = mysqli_escape_string($connect, $_GET['id']);

	$sql = "SELECT * FROM tbcontato WHERE id = '$id'";
	$resultado = mysqli_query($connect, $sql);//executou o script e conectou
	$dados = mysqli_fetch_array($resultado);
endif;
?>

<div class="row">
	<div class="col s12 m6 push-m3">
		<h3 class="light"> Editar Cadastro </h3>
		<form action="php_action/update.php" method="POST">
			<input type="hidden" name="id" value="<?php echo $dados['id'];?>">
			<div class="input-field col s12">
			<i class="material-icons prefix">account_circle</i>
				<input type="text" name="nome" id="nome" value="<?php echo $dados['nome'];?>">
				<label for="nome">Nome</label>
			</div>

			<div class="input-field col s12">
			<i class="material-icons prefix">child_care</i>
				<input type="text" name="sobrenome" value="<?php echo $dados['sobrenome'];?>" id="sobrenome">
				<label for="sobrenome">Sobrenome</label>
			</div>

			<div class="input-field col s12">
			<i class="material-icons prefix">call</i>
				<input type="text" name="celular" id="celular">
				<label for="celular">Telefone</label>
			</div>

			<div class="input-field col s12">
			<i class="material-icons prefix">email</i>
				<input type="text" value="<?php echo $dados['email'];?>" name="email" id="email">
				<label for="email">Email</label>
			</div>

			<div class="input-field col s12">
			<i class="material-icons prefix">insert_emoticon</i>
				<input type="date" value="<?php echo $dados['dataAni'];?>" name="dataAni" id="dataAni">
				<label for="dataAni">Data do Niver</label>
			</div>

			<button type="submit" name="btn-editar" class="btn"> Atualizar </button>
		</form>
		
	</div>
</div>

<?php
// Footer
include_once 'includes/footer.php';
?>