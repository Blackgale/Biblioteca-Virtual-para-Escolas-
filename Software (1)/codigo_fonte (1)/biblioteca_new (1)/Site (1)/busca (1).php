<?php
	//conexao com banco de dados
	include_once('conexao.php');
	
	//recuperar o valor da palavra
	$trabalhos = utf8_decode($_POST['palavra']);
	
	//pesquisar no banco a palavra chave referente a palavra digitada pelo usuario
	$trabalhos = "SELECT * FROM tb_tcc INNER JOIN tb_grupo ON (tb_tcc.id_grupo = tb_grupo.id_grupo) 
	WHERE tb_tcc.palavra_chave_tcc LIKE '%$trabalhos%' OR tb_tcc.titulo_tcc LIKE '%$trabalhos%' OR tb_grupo.curso_representante_grupo LIKE '%$trabalhos%'";
	$resultado_trabalhos = mysqli_query($conn, $trabalhos);
	
	if(mysqli_num_rows($resultado_trabalhos) <= 0){
		echo "<div class='container col-md-6 cardTrabalhos'>
									<div class='card'>
										<div class='container text-center'  style='margin-top: 2%;'>	
											<p>Nenhum Trabalho Encontrado!</p>
										</div>
									</div>
								</div>
									";
	}else{
		
		while($rows = mysqli_fetch_assoc($resultado_trabalhos)){
			
			echo "
		<div class='container col-md-6 cardTrabalhos'>
            <div class='card'>
                <div class='container text-center'  style='margin-top: 2%;'>			
					<p class='text-left nomeTrabalho'>" .utf8_encode($rows['titulo_tcc']). "</p>
					<p class='text-muted text-right dataTrabalho'>" .date('d-m-Y', strtotime($rows['data_upload_tcc'])). "</p>             
					<p class='text-muted text-left nomeCurso'>" .utf8_encode($rows['curso_representante_grupo']). "</p>         
					<p class='card-text text-left'>" .mb_strimwidth(utf8_encode($rows['resumo_tcc']), 0, 180, '...'). "</p>
					<p><form method='post' action='Site/exibir_tcc.php?id_trabalho=" .$rows['id_tcc']. "'><button type='submit' class='main-button col-md-6' id='botaoPesquisar'>Visualizar</button></form></p>
				</div>
			</div>
		</div>
		
		</br>
		
		";
		}
	}
	
?>