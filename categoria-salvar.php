<?php
	switch ($_REQUEST["acao"]) {
		case 'cadastrar':
			$categoria = $_POST['nome_categoria'];
			$sql = "INSERT INTO categoria (nome_categoria) VALUES ('{$categoria}')";
			$res = $conn->query($sql);
			if($res==true){
				print "<div class='alert alert-success mt-5'>Foi realizado o cadastro.</div>";
			}else{
				print "<div class='alert alert-danger'>Não foi possível cadastrar</div>";
			}
			break;
		
		case 'editar':
			$categoria = $_POST["nome_categoria"];
			$sql = "UPDATE categoria SET nome_categoria='{$categoria}' WHERE id_categoria=".$_POST['id_categoria'];
			$res = $conn->query($sql);
			if($res==true){
				print "<div class='alert alert-success mt-5'>Foi editado com sucesso.</div>";
			}else{
				print "<div class='alert alert-danger'>Não foi possível editar</div>";
			}
			break;

		case 'excluir':
			$sql = "DELETE FROM categoria WHERE id_categoria=".$_REQUEST["id_categoria"];
			$res = $conn->query($sql);
			if($res==true){
				print "<div class='alert alert-success mt-5'>Excluiu com sucesso.</div>";
			}else{
				print "<div class='alert alert-danger'>Não foi possível excluir</div>";
			}
			break;
	}