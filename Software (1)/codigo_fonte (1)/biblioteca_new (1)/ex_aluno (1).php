<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Ex Aluno</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/bootstrap/css/styleExAluno.css">
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
                <li class="active"><a href="ex_aluno.php">Ex-Aluno</a></li>
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
	
	
    <section class="page-section clearfix">
        <div class="container col-md-5">
                <div class="intro-text left-0 text-centerfaded p-5 rounded bg-faded text-center">
                    <h2 class="section-heading mb-4"><span class="section-heading-lower">Upload de ex-alunos</span></h2>
                    <form>
	
  <div class="form-group">
  <div class="form-group">
    <label for="exampleFormControlSelect1">Curso</label>
    <select class="form-control" id="exampleFormControlSelect1" onchange="showfield(this.options[this.selectedIndex].value)" name="travel_arriveVia">
      <option>- Escolher Curso -</option>
      <option value="DS">Informática</option>
      <option value="CNT">Contabilidade</option>
      <option value="ADM">Administração</option>
      <option value="ST">Segurança no Trabalho</option>
      <option value="RH">Recrusos Humanos</option>
    </select>
	
	
  </div>
   <div class="form-group">
    <label for="exampleFormControlSelect1">Quantidade de membros</label>
  <select class="form-control" id="exampleFormControlSelect1" onchange="showfield2(this.options[this.selectedIndex].value)">
      <option>- Escolher -</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
    </select>
	</div>
  </div>
  <div class="form-group">
    <div id="aluno1"></div>
    <div id="aluno2"></div>
    <div id="aluno3"></div>
    <div id="aluno4"></div>
    <div id="aluno5"></div>
    <div id="aluno6"></div>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Quantidade de palavras chave</label>
  <select class="form-control" id="exampleFormControlSelect1" onchange="showfield4(this.options[this.selectedIndex].value)">
      <option>- Escolher -</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
    </select>
	</div>
	 <div class="form-group">
	 <div class="form-row">
	 
    <div id="pc1" class="col-md-6"></div>
    <div id="pc2" class="col-md-6"></div>

	</div>
	<div class="form-row">
    <div id="pc3" class="col-md-6"></div>
    <div id="pc4" class="col-md-6"></div>
	</div>
	<div class="form-row">
    <div id="pc5" class="col-md-6"></div>
    <div id="pc6" class="col-md-6"></div>
	</div>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Resumo</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
   <div class="form-group">
    <label for="exampleFormControlFile1">PDF</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1">
  </div>
  
  <div class="form-group">
    <div id="div1"></div>
  </div>
  <button type="submit" class="btn btn-primary" id="botaoPesquisar">Enviar</button>
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
	<script type="text/javascript">
function showfield(name){
  if(name=='DS')document.getElementById('div1').innerHTML='Trabalho <input type="file" class="form-control-file" id="exampleFormControlFile1">';
  else document.getElementById('div1').innerHTML='';
}
function showfield2(name){
  if(name>='1'){
  document.getElementById('aluno1').innerHTML='<hr/><div class="form-row"><div class="form-group col-md-6"><label for="inputEmail4">Nome</label><input type="text" class="form-control" id="form-control" placeholder="Nome Completo"></div><div class="form-group col-md-6"><label for="inputEmail4">Email</label><input type="email" class="form-control" id="inputEmail4" placeholder="Email"></div><div class="form-group col-md-6"><label for="inputPassword4">RM</label><input type="password" class="form-control" id="inputPassword4" placeholder="RM"></div></div><hr/>';
  document.getElementById('aluno2').innerHTML='';
			document.getElementById('aluno3').innerHTML='';
			document.getElementById('aluno4').innerHTML='';
			document.getElementById('aluno5').innerHTML='';
			document.getElementById('aluno6').innerHTML='';
   if(name>='2'){
     document.getElementById('aluno2').innerHTML='<div class="form-row"><div class="form-group col-md-6"><label for="inputEmail4">Nome</label><input type="text" class="form-control" id="form-control"placeholder="Nome Completo"></div><div class="form-group col-md-6"><label for="inputEmail4">Email</label><input type="email" class="form-control" id="inputEmail4" placeholder="Email"></div><div class="form-group col-md-6"><label for="inputPassword4">RM</label><input type="password" class="form-control" id="inputPassword4" placeholder="RM"></div></div><hr/>';
	document.getElementById('aluno3').innerHTML='';
			document.getElementById('aluno4').innerHTML='';
			document.getElementById('aluno5').innerHTML='';
			document.getElementById('aluno6').innerHTML='';
	if(name>='3'){
	  document.getElementById('aluno3').innerHTML='<div class="form-row"><div class="form-group col-md-6"><label for="inputEmail4">Nome</label><input type="text" class="form-control"id="form-control" placeholder="Nome Completo"></div><div class="form-group col-md-6"><label for="inputEmail4">Email</label><input type="email" class="form-control" id="inputEmail4" placeholder="Email"></div><div class="form-group col-md-6"><label for="inputPassword4">RM</label><input type="password" class="form-control" id="inputPassword4" placeholder="RM"></div></div><hr/>';
		document.getElementById('aluno4').innerHTML='';
			document.getElementById('aluno5').innerHTML='';
			document.getElementById('aluno6').innerHTML='';
		if(name>='4'){
		  document.getElementById('aluno4').innerHTML='<div class="form-row"><div class="form-group col-md-6"><label for="inputEmail4">Nome</label><input type="text" class="form-control"id="form-control" placeholder="Nome Completo"></div><div class="form-group col-md-6"><label for="inputEmail4">Email</label><input type="email" class="form-control" id="inputEmail4" placeholder="Email"></div><div class="form-group col-md-6"><label for="inputPassword4">RM</label><input type="password" class="form-control" id="inputPassword4" placeholder="RM"></div></div><hr/>';
			document.getElementById('aluno5').innerHTML='';
			document.getElementById('aluno6').innerHTML='';
			if(name>='5'){
			  document.getElementById('aluno5').innerHTML='<div class="form-row"><div class="form-group col-md-6"><label for="inputEmail4">Nome</label><input type="text" class="form-control"id="form-control" placeholder="Nome Completo"></div><div class="form-group col-md-6"><label for="inputEmail4">Email</label><input type="email" class="form-control" id="inputEmail4" placeholder="Email"></div><div class="form-group col-md-6"><label for="inputPassword4">RM</label><input type="password" class="form-control" id="inputPassword4" placeholder="RM"></div></div><hr/>';
				document.getElementById('aluno6').innerHTML='';
				if(name=='6'){
					document.getElementById('aluno6').innerHTML='<div class="form-row"><div class="form-group col-md-6"><label for="inputEmail4">Nome</label><input type="text" class="form-control" id="form-control" placeholder="Nome Completo"></div><div class="form-group col-md-6"><label for="inputEmail4">Email</label><input type="email" class="form-control" id="inputEmail4" placeholder="Email"></div><div class="form-group col-md-6"><label for="inputPassword4">RM</label><input type="password" class="form-control" id="inputPassword4" placeholder="RM"></div></div><hr/>';}}}}}
		}
  else {
			document.getElementById('aluno1').innerHTML='';
			document.getElementById('aluno2').innerHTML='';
			document.getElementById('aluno3').innerHTML='';
			document.getElementById('aluno4').innerHTML='';
			document.getElementById('aluno5').innerHTML='';
			document.getElementById('aluno6').innerHTML='';
		}
		
		function showfield3(name){
		var quant = document.getElementById("number").value;  
		
		
}
}
function showfield4(name){
  if(name>='1'){
  document.getElementById('pc1').innerHTML='<label for="inputEmail4">Palavra 1</label><input type="text" class="form-control" id="form-control"placeholder="Palavra Chave"></input>';
  document.getElementById('pc2').innerHTML='';
			document.getElementById('pc3').innerHTML='';
			document.getElementById('pc4').innerHTML='';
			document.getElementById('pc5').innerHTML='';
			document.getElementById('pc6').innerHTML='';
   if(name>='2'){
     document.getElementById('pc2').innerHTML='<label for="inputEmail4">Palavra 2</label><input type="text" class="form-control" id="form-control"placeholder="Palavra Chave"><br/>';
	document.getElementById('pc3').innerHTML='';
			document.getElementById('pc4').innerHTML='';
			document.getElementById('pc5').innerHTML='';
			document.getElementById('pc6').innerHTML='';
	if(name>='3'){
	  document.getElementById('pc3').innerHTML='<label for="inputEmail4">Palavra 3</label><input type="text" class="form-control" id="form-control"placeholder="Palavra Chave">';
		document.getElementById('pc4').innerHTML='';
			document.getElementById('pc5').innerHTML='';
			document.getElementById('pc6').innerHTML='';
		if(name>='4'){
		  document.getElementById('pc4').innerHTML='<label for="inputEmail4">Palavra 4</label><input type="text" class="form-control"id="form-control" placeholder="Palavra Chave"><br/>';
			document.getElementById('pc5').innerHTML='';
			document.getElementById('pc6').innerHTML='';
			if(name>='5'){
			  document.getElementById('pc5').innerHTML='<label for="inputEmail4">Palavra 5</label><input type="text" class="form-control"id="form-control" placeholder="Palavra Chave">';
				document.getElementById('pc6').innerHTML='';
				if(name=='6'){
					document.getElementById('pc6').innerHTML='<label for="inputEmail4">Palavra 6</label><input type="text" class="form-control"id="form-control" placeholder="Palavra Chave">';}}}}}
		}
  else {
			document.getElementById('pc1').innerHTML='';
			document.getElementById('pc2').innerHTML='';
			document.getElementById('pc3').innerHTML='';
			document.getElementById('pc4').innerHTML='';
			document.getElementById('pc5').innerHTML='';
			document.getElementById('pc6').innerHTML='';
		}
}
</script>
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