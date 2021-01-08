<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <title>Cursos</title>
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/bootstrap/css/styleCursosInfo.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i">
        <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
		<link rel="stylesheet" href="assets/fonts/icomoon/style.css">
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
                <li class="active"><a href="cursos.php">Cursos</a></li>
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
        </br>
        <!--<section class="testimonial section-padding">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-md-5 col-12 d-flex flex-column justify-content-center align-items-center">
                        <div class="contact-image">

                            <img src="assets/img/adm.png" class="img-fluid img-redimensionar" alt="website">
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-7 col-12">
                        <h4 class="my-5 pt-3">Administração</h4>

                        <div class="quote"></div>

                        <p class="mb-4">O Técnico em Administração é o profissional
                            que controla a rotina administrativa das empresas. Colabora nos planejamentos estratégico, tático e operacional.
                            Realiza atividades em recursos humanos e intermedeia mão-de-obra para colocação e para recolocação profissional.
                            Atua na área de compras; auxilia no setor contábil e assessora a área de Vendas. Intercambia mercadorias e serviços
                            e executa atividades nas áreas fiscal e financeira.</p>

                    </div>
                </div>
        </section>-->
        <?php
        require_once 'Site/listarCursos.php';
        
        $all_cursos = listarCursos();
        foreach ($all_cursos as $cursos) {
            
        
        ?>
        <section class="page-section cta">
            <section class="testimonial section-padding">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-md-5 col-12 d-flex flex-column justify-content-center align-items-center">
                            <div class="contact-image">

                                <img src="_img_cursos/<?php echo $cursos->imagem_curso;?>" class="img-fluid img-redimensionar" alt="website">
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-7 col-12">
                            <h4 class="my-5 pt-3"><?php echo $cursos->titulo_curso;?></h4>

                            <div class="quote"></div>

                            <p class="mb-4"><?php echo $cursos->descricao_curso;?></p>


                        </div>
                    </div>
            </section>
        </section>
        <?php }?>
        

        </br>
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