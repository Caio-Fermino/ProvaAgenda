<?php
// Header
include_once 'includes/header.php';
?>

<div class="row">
	<div class="col s12 m6 push-m3">
		<h3 class="light"> Novo Cadastro </h3>
		<form action="php_action/create.php" method="POST">
			<div class="input-field col s12">
			<i class="material-icons prefix">account_circle</i>
				<input type="text" name="nome" id="nome" >
				<label for="nome">Nome</label>
			</div>

			<div class="input-field col s12">
			<i class="material-icons prefix">child_care</i>
				<input type="text" name="sobrenome" id="sobrenome">
				<label for="sobrenome">Sobrenome</label>
			</div>

            <div class="input-field col s12">
			<i class="material-icons prefix">call</i>
				<input type="text" name="celular" id="celular">
				<label for="celular">Telefone</label>
			</div>

			<div class="input-field col s12">
			<i class="material-icons prefix">email</i>
				<input type="text" name="email" id="email">
				<label for="email">Email</label>
			</div>

			<div class="input-field col s12">
			<i class="material-icons prefix">insert_emoticon</i>
				<input type="date" name="dataAni" id="dataAni">
				<label for="dataAni">Data do Niver</label>
			</div>

			<button type="submit" name="btn-cadastrar" class="btn"> Salvar </button>
			<a href="cadastro.php" class="btn green"> Lista de cadastros </a>
		</form>
		
	</div>
</div>

<?php
// Footer
include_once 'includes/footer.php';
?>