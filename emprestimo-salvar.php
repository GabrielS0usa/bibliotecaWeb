<?php
	switch ($_REQUEST["acao"]) {
		case 'cadastrar':
			$usuario = $_POST['usuario_id_usuario'];
			$livro = $_POST['livro_id_livro'];
			$atendente = $_POST['atendente_id_atendente'];
			$data_emp = $_POST['data_emprestimo'];
			$data_dev = $_POST['data_devolucao'];
			$sql = "INSERT INTO emprestimo (
						usuario_id_usuario, 
						livro_id_livro, 
						atendente_id_atendente, 
						data_emprestimo, 
						data_devolucao
					) 
					VALUES ( '{$usuario}', '{$livro}', '{$atendente}', '{$data_emp}', '{$data_dev}')";
			$res = $conn->query($sql);
			if($res==true){
				print "<div class='alert alert-success mt-5'>Foi realizado o empréstimo.</div>";
			}else{
				print "<div class='alert alert-danger'>Não foi possível realizar o empréstimo.</div>";
			}
			break;
		
	}