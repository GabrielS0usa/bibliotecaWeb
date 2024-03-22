<h1>Cadastrar Usuário</h1>
<form action="?page=usuario-salvar" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
	<div class="mb-3">
		<label>Usuário</label>
		<input type="text" name="nome_usuario" class="form-control">
		<label>E-mail</label><br>
		<input type="email" name="email_usuario" class="form-control">
		<label>Data de Nascimento</label><br>
		<input type="date" name="data_nasc_usuario" class="form-control">
		<label>Telefone</label><br>
		<input type="fone" name="fone_usuario" class="form-control">
		<label>Endereço</label><br>
		<input type="text" name="end_usuario" class="form-control">
		<label>Sexo</label><br>
		<input type="radio" name="sexo_usuario" value="M">Masculino
		<input type="radio" name="sexo_usuario" value="F">Feminino
	</div>
	<div class="mb-3">
		<button type="submit" class="btn btn-success">Enviar</button>
	</div>
</form>