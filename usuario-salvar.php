<?php
	switch ($_REQUEST["acao"]) {
		case 'cadastrar':
		$nome = $_POST['nome_usuario'];
		$email = $_POST['email_usuario'];
		$data_nasc = $_POST['data_nasc_usuario'];
		$fone = $_POST['fone_usuario'];
		$end = $_POST['end_usuario'];
		$sexo = $_POST['sexo_usuario'];
		$sql = "INSERT INTO usuario (nome_usuario, email_usuario, data_nasc_usuario, fone_usuario, end_usuario, sexo_usuario) VALUES ('{$nome}', '{$email}','{$data_nasc}','{$fone}','{$end}','{$sexo}')";
		$res = $conn->query($sql);
		if($res==true){
			print "<div class='alert alert-success mt-5'>Foi realizado o cadastro.</div>";
		}else{
			print "<div class='alert alert-danger'>Não foi possível cadastrar</div>";
		}
		break;
		

		case 'editar':
		$nome = $_POST['nome_usuario'];
		$email = $_POST['email_usuario'];
		$data_nasc = $_POST['data_nasc_usuario'];
		$fone = $_POST['fone_usuario'];
		$end = $_POST['end_usuario'];
		$sexo = $_POST['sexo_usuario'];
		$sql = "UPDATE usuario SET nome_usuario = '{$nome}',
            email_usuario = '{$email}',
            data_nasc_usuario = '{$data_nasc}',
            fone_usuario = '{$fone}',
            end_usuario = '{$end}',
            sexo_usuario = '{$sexo}' WHERE id_usuario=".$_POST['id_usuario'];
		$res = $conn->query($sql);
		if($res==true){
			print "<div class='alert alert-success mt-5'>Foi editado com sucesso.</div>";
		}else{
			print "<div class='alert alert-danger'>Não foi possível editar</div>";
		}

			break;
		break;

		case 'excluir':
		$sql = "DELETE FROM usuario WHERE id_usuario=".$_REQUEST["id_usuario"];
			$res = $conn->query($sql);
			if($res==true){
				print "<div class='alert alert-success mt-5'>Excluiu com sucesso.</div>";
			}else{
				print "<div class='alert alert-danger'>Não foi possível excluir</div>";
			}
			break;
	}