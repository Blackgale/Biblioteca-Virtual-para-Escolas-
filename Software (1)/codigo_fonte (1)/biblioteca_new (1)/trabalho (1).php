<?php
	
	if(!empty($_POST)){
		$curso = utf8_decode($_POST['curso']);
	}else if(!empty($_GET)){
		$curso = utf8_decode($_GET['curso']);
	}else{
		$curso = 1;
	}

?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Trabalhos</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/styleTrabalhos.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i"> -->
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
	<link rel="stylesheet" href="assets/fonts/icomoon/style.css">
	
	<script type="text/javascript" src="//code.jquery.com/jquery-3.4.1.min.js"></script>
	<!-- <script type="text/javascript" src="javascriptpersonalizado.js"></script> -->
	
	
</head>

<body style="background-image:url('assets/img/fundo-alunos.jpg');">
    
    <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    
    <header class="site-navbar py-3" role="banner" class="img-fluid">

      <div class="container" id="nav">
        <div class="row align-items-center">
          
          <div class="col-11 col-xl-2">
            <img src="assets/img/logo.png" alt="" class="img-fluid">
          </div>
          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block">
                <li><a href="index.php">Home</a></li>
                <li><a href="cursos.php">Cursos</a></li>
                <li class="has-children active">
                  <a href="trabalho.php?curso=1">Trabalhos</a>
                  <ul class="dropdown">
                    <li><a href="trabalho.php?curso=Administração">Administração</a></li>
                    <li><a href="trabalho.php?curso=Contabilidade">Contabilidade</a></li>
                    <li><a href="trabalho.php?curso=Informática">Informática</a></li>
                    <li><a href="trabalho.php?curso=Recursos Humanos">Recursos Humanos</a></li>
                    <li><a href="trabalho.php?curso=Segurança do Trabalho">Segurança do Trabalho</a></li>
                  </ul>
                </li>
                <li><a href="aluno.php">Aluno</a></li>
                <li><a href="fale_conosco.php">Fale Conosco</a></li>
              </ul>
            </nav>
          </div>


          <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

          </div>

        </div>
      </div>
      
    </header>
    
    </br>
    </br>
    </br>
	</br>
	</br>
	
		<section class="page-section clearfix">
		<form method="post" action="" id="form-pesquisa">
			<div class="container col-md-6 text-center">
				<div class="intro-text left-0 text-centerfaded p-5 rounded bg-faded text-center">
					<h2 class="section-heading mb-4"><span class="section-heading-upper">Faça sua busca e deixe que encontraremos o melhor trabalho para você!</span></h2>
					<input type="text" name="pesquisa" placeholder="..." id="pesquisa" id="inputBusca"></br></br>
					<input type="submit" name="botaoPesquisar" value="Pesquisar" id="botaoPesquisar"></br></br>
				</div>
			</div>
		</form>
		</section>
    
    <div class="resultado">
		<?php
			
			include_once('Site/conexao.php');
			
			if ($curso == 1)
			{
				$busca = "SELECT * FROM tb_tcc INNER JOIN tb_grupo ON (tb_tcc.id_grupo = tb_grupo.id_grupo);";
				$resultado_busca = mysqli_query($conn, $busca);
				
				if(mysqli_num_rows($resultado_busca) <= 0){
					echo "<div class='container col-md-6 cardTrabalhos'>
									<div class='card'>
										<div class='container text-center'  style='margin-top: 2%;'>	
											<p>Nenhum Trabalho Encontrado!</p>
										</div>
									</div>
								</div>
									";
				}else{
					
					while($rows = mysqli_fetch_assoc($resultado_busca)){
						
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
			}else{
				$busca = "SELECT * FROM tb_tcc INNER JOIN tb_grupo ON (tb_tcc.id_grupo = tb_grupo.id_grupo)
				WHERE tb_grupo.curso_representante_grupo LIKE '$curso%'";
				$resultado_busca = mysqli_query($conn, $busca);
				
				if(mysqli_num_rows($resultado_busca) <= 0){
					echo "<div class='container col-md-6 cardTrabalhos'>
									<div class='card'>
										<div class='container text-center'  style='margin-top: 2%;'>	
											<p>Nenhum Trabalho Encontrado!</p>
										</div>
									</div>
								</div>
									";
				}else{
					
					while($rows = mysqli_fetch_assoc($resultado_busca)){
						
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
				
			}
		
		?>
    </div>
	

    </br>
    </br>
    

        <footer class="footer text-faded text-center py-5 footer-clean">
        <div class="container">
                <div class="row justify-content-center">
                    <div class="col-sm-4 col-md-3 item">
                        <h3>Explore</h3>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Cursos</a></li>
                            <li><a href="#">Ex-alunos</a></li>
                            <li><a href="#">Trabalhos</a></li>
                            <li><a href="#">Fale Conosco</a></li>
                            <li><a href="#">Aluno</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-4 col-md-3 item">
                        <h3>Endereço</h3>
                        <ul><a href="https://maps.google.com.br/maps?q=etec+jardim+angela&um=1&ie=UTF-8&sa=X&ved=0ahUKEwjBvarS3pLkAhXuLLkGHc7XB4wQ_AUIESgB" target="blank" >
                            <li>Estr. da Baronesa<br/>
                            1695 - Jardim Angela<br/>
                            São Paulo - SP<br/>
                            04941-175</li>
                            </a>
                        </ul>
                    </div>
                    <div class="col-sm-4 col-md-3 item">
                        <h3>Contatos</h3>
                        <ul>
                            <li>(11) 5833-0943</li>
                            <li>(11) 5833-0861</li>
                            <li>e221dir@cps.sp.gov.br</li>
                            <li>secretaria@etecjardimangela.com.br</li>
                        </ul>
                    </div>
                    <div class="col-lg-3 item social"><a href="https://pt-br.facebook.com/etecjdangela"><i class="icon ion-social-facebook"></i></a>
                        <p class="copyright">Jardim Ângela © 2019</p>
                    </div>
                </div>
            </div>
    </footer>
    
    <!-- jQuery -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/jquery.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
	
	<!-- Plugins -->
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script>
	<script src="assets/js/aos.js"></script>
	<script src="assets/js/main.js"></script>
	
	<!-- Global Init -->
    <script src="assets/js/custom.js"></script>
	
	<script type="text/javascript">
	
		
		//Pesquisar os cursos sem refresh na página
		$("#form-pesquisa").on('submit', function(e){
			
			
			
			$('.resultado').empty();
			
			var pesquisa = $('#pesquisa').val();
			
			//Verificar se há algo digitado
			if(pesquisa != ''){
				var dados = {
					palavra : pesquisa
				}		
				$.post('Site/busca.php', dados, function(retorna){
					//Mostra dentro da ul os resultado obtidos 
					$(".resultado").html(retorna);
				});
			}else{
				$(".resultado").html('');
			}
			return false;
				
		});
		
	
	</script>
</body>

</html>