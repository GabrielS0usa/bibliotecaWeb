<h1>Listar Empréstimo</h1>
<?php
	$sql = "SELECT * FROM emprestimo AS e 
			INNER JOIN usuario AS u ON e.usuario_id_usuario = u.id_usuario
			INNER JOIN livro AS l ON e.livro_id_livro = l.id_livro
			INNER JOIN atendente AS a ON e.atendente_id_atendente = a.id_atendente";

	$res = $conn->query($sql);
	$qtd = $res->num_rows;
	if($qtd > 0){
		print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";
		print "<table class='table table-bordered table-striped table-hover'>";
		print "<tr>";
		print "<th>Usuário</th>";
		print "<th>Livro</th>";
		print "<th>Atendente</th>";
		print "<th>Data do Empréstimo</th>";
		print "<th>Data de Devolução</th>";
		print "</tr>";
		while($row = $res->fetch_object()){
			print "<tr>";
			print "<td>".$row->nome_usuario."</td>";
			print "<td>".$row->titulo_livro."</td>";
			print "<td>".$row->nome_atendente."</td>";
			print "<td>".$row->data_emprestimo."</td>";
			print "<td>".$row->data_devolucao."</td>";
			print "</tr>";
		}
		print "</table>";
	}else{
		print "<p>Não encontrou resultado</p>";
	}
	?>