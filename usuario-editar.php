<h1>Editar Atendente</h1>
<?php
	$sql = "SELECT * FROM usuario 
			WHERE id_usuario=".$_REQUEST['id_usuario'];
	$res = $conn->query($sql);
	$row = $res->fetch_object();
?>
<form action="?page=usuario-salvar" method="POST">
	<input type="hidden" name="acao" value="editar">
	<input type="hidden" name="id_usuario" value="<?php print $row->id_usuario; ?>">
		<div class="mb-3">
			<label>Usuário</label>
			<input type="text" name="nome_usuario" value="<?php print $row->nome_usuario; ?>" class="form-control">
			<label>E-mail</label><br>
			<input type="email" name="email_usuario" value="<?php print $row->email_usuario; ?>" class="form-control">
			<label>Data de Nascimento</label><br>
			<input type="date" name="data_nasc_usuario" value="<?php print $row->data_nasc_usuario; ?>" class="form-control">
			<label>Telefone</label><br>
			<input type="fone" name="fone_usuario" value="<?php print $row->fone_usuario; ?>" class="form-control">
			<label>Endereço</label><br>
			<input type="text" name="end_usuario" value="<?php print $row->end_usuario	; ?>" class="form-control">
			<label>Sexo</label><br>
			<input type="radio" name="sexo_usuario" <?php if ($row->sexo_usuario == 'M') print 'checked'; ?> value="M">Masculino
			<input type="radio" name="sexo_usuario" <?php if ($row->sexo_usuario == 'F') print 'checked'; ?> value="F">Feminino
		</div>
		<div class="mb-3">
			<button type="submit" class="btn btn-success">Enviar</button>
		</div>
</form>


