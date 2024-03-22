<?php
	switch ($_REQUEST["acao"]) {
		case 'cadastrar':
			$categoria  = $_POST["categoria_id_categoria"];
			$titulo     = $_POST["titulo_livro"];
			$autor      = $_POST["autor_livro"];
			$ano        = $_POST["ano_livro"];
			$edicao     = $_POST["edicao_livro"];
			$editora    = $_POST["editora_livro"];
			$localidade = $_POST["localidade_livro"];	

			$sql = "INSERT INTO livro (
						categoria_id_categoria, 
						titulo_livro, 
						autor_livro, 
						ano_livro,
						edicao_livro, 
						editora_livro, 
						localidade_livro
					) VALUES (
						{$categoria}, 
						'{$titulo}',
						'{$autor}',
						'{$ano}', 
						'{$edicao}', 
						'{$editora}', 
						'{$localidade}'
					)";	

			$res= $conn->query($sql);
			if($res==true){
				print "<script>alert('Cadastrou com sucesso!');</script>";
				print "<script>location.href='?page=livro-listar';</script>";
			}else{
				print "<script>alert('Não foi possível cadastrar');</script>";
				print "<script>location.href='?page=livro-listar';</script>";
			}

				
			break;
		
		case 'editar':
			$categoria  = $_POST["categoria_id_categoria"];
			$titulo     = $_POST["titulo_livro"];
			$autor      = $_POST["autor_livro"];
			$ano        = $_POST["ano_livro"];
			$edicao     = $_POST["edicao_livro"];
			$editora    = $_POST["editora_livro"];
			$localidade = $_POST["localidade_livro"];	

			$sql = "UPDATE livro SET
						categoria_id_categoria={$categoria}, 
						titulo_livro='{$titulo}', 
						autor_livro='{$autor}', 
						ano_livro='{$ano}',
						edicao_livro='{$edicao}', 
						editora_livro='{$editora}', 
						localidade_livro='{$localidade}'
					WHERE
						id_livro=".$_REQUEST["id_livro"];	

			$res= $conn->query($sql);
			if($res==true){
				print "<script>alert('Editou com sucesso!');</script>";
				print "<script>location.href='?page=livro-listar';</script>";
			}else{
				print "<script>alert('Não foi possível editar');</script>";
				print "<script>location.href='?page=livro-listar';</script>";
			}

			break;

		case 'excluir':
			$sql = "DELETE FROM livro WHERE id_livro=".$_REQUEST['id_livro'];

			$res= $conn->query($sql);
			if($res==true){
				print "<script>alert('Excluiu com sucesso!');</script>";
				print "<script>location.href='?page=livro-listar';</script>";
			}else{
				print "<script>alert('Não foi possível excluir');</script>";
				print "<script>location.href='?page=livro-listar';</script>";
			}

			break;
	}