<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <title>Aluno</title>
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/bootstrap/css/styleAluno.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i">
        <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
		<link rel="stylesheet" href="assets/fonts/icomoon/style.css">
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
                <li class="has-children">
                  <a href="trabalho.php?curso=1">Trabalhos</a>
                  <ul class="dropdown">
                    <li><a href="trabalho.php?curso=Administração">Administração</a></li>
                    <li><a href="trabalho.php?curso=Contabilidade">Contabilidade</a></li>
                    <li><a href="trabalho.php?curso=Informática">Informática</a></li>
                    <li><a href="trabalho.php?curso=Recursos Humanos">Recursos Humanos</a></li>
                    <li><a href="trabalho.php?curso=Segurança do Trabalho">Segurança do Trabalho</a></li>
                  </ul>
                </li>
                <li class="active"><a href="aluno.php">Aluno</a></li>
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


	<section class="page-section clearfix">
		<div class="container col-md-5">
			<div class="intro-text left-0 text-centerfaded p-5 rounded bg-faded text-center">
				<h2 class="section-heading mb-4"><span class="section-heading-lower">Login</span></h2>
				<form action="aluno/loginAluno.php" method="post">
					<div class="form-group row">
						<label for="inputEmail3"  class="col-sm-2 col-form-label">Login</label>
						<div class="col-sm-10">
							<input type="text" name="login" class="form-control" id="inputEmail3" placeholder="rm ou nome">
						</div>
					</div>
					<div class="form-group row">
						<label for="inputPassword3" class="col-sm-2 col-form-label">Senha</label>
						<div class="col-sm-10">
							<input type="password" name="senha" class="form-control" id="inputPassword3" placeholder="Senha">
						</div>
					</div>



					<div class="form-group row">

						<div class="col text-center">

							<button type="submit" class="btn btn-primary btn-login">Login</button>
						</div>
					</div>
					<div class="form-group row">
						<div class="col text-center">
							<a href="#" class="a-form">Esqueceu a senha?</a>
						</div>
					</div>
				</form>
			</div>
		</div>
	</section>




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
    <script src="assets/js/jquery-2.1.0.min.js"></script>
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
    </body>

</html>