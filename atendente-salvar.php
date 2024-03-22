<?php
	switch ($_REQUEST["acao"]) {
		case 'cadastrar':
			$nome = $_POST['nome_atendente'];
			$sql = "INSERT INTO atendente (nome_atendente) VALUES ('{$nome}')";
			$res = $conn->query($sql);
			if($res==true){
				print "<div class='alert alert-success mt-5'>Foi realizado o cadastro.</div>";
			}else{
				print "<div class='alert alert-danger'>Não foi possível cadastrar</div>";
			}
			break;
		
		case 'editar':
			$nome = $_POST["nome_atendente"];
			$sql = "UPDATE atendente SET nome_atendente='{$nome}' WHERE id_atendente=".$_POST['id_atendente'];
			$res = $conn->query($sql);
			if($res==true){
				print "<div class='alert alert-success mt-5'>Foi editado com sucesso.</div>";
			}else{
				print "<div class='alert alert-danger'>Não foi possível editar</div>";
			}
			break;

		case 'excluir':
			$sql = "DELETE FROM atendente WHERE id_atendente=".$_REQUEST["id_atendente"];
			$res = $conn->query($sql);
			if($res==true){
				print "<div class='alert alert-success mt-5'>Excluiu com sucesso.</div>";
			}else{
				print "<div class='alert alert-danger'>Não foi possível excluir</div>";
			}
			break;
	}