<?php
include 'Administrador/validacoes.php';
if(!isset($_SESSION)){
		
    session_start(); 
		$msg_sucesso = $_SESSION["msg_resposta"];
		
	}
?>
<!DOCTYPE html> 
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Área Administrativa - Início</title>

  <!-- Custom fonts for this template-->
  <link href="../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../assets/bootstrap/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="../assets/bootstrap/css/styleAdmin.css" rel="stylesheet">
	<style>
		.firstBlur {
		  margin:20px 20px 0;
		  padding:20px;
		  position:relative;
		}
		/* coloque blur em todos os elementos menos no elemento com a class .modal */
		.firstBlur.modalBlur > *:not(.modal) {
		  -webkit-filter: blur(8px);
		  filter: blur(8px);
		}
		/* remove a cor escurecida do fundo, se quiser que fique escurecido ajuste a opacidade para 0.5*/
		.modal-backdrop.show {
		  opacity: 0.9;
		}
	</style>
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="inicio_admin.php">     
      <img src="../assets/img/logo.png" alt="Logotipo" id="logo"> 
      </a>

       <!-- Divider -->
      <hr class="sidebar-divider my-0">


      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Páginas
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
   

      <!-- Nav Item - Charts -->
	  
	  <li class="nav-item">
        <a class="nav-link" href="inicio_admin.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Início</span></a>
      </li>
	  
      <li class="nav-item">
        <a class="nav-link" href="gerenciar_cursos.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Gerenciar Cursos</span></a>
      </li>
	  <li class="nav-item">
              <a class="nav-link" href="cadastrar_cursos.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Cadastrar Curso</span></a>
      </li>
	  
      <li class="nav-item">
        <a class="nav-link" href="cadastrar_admin.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Cadastrar Docente</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="cadastro_Novo_Admin.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Cadastrar Administrador</span></a>
      </li>
	  
	  <li class="nav-item">
        <a class="nav-link" href="listar_contatos.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Exibir Mensagens</span></a>
      </li>
	  
	  <li class="nav-item">
              <a class="nav-link" href="../funcoes/encerraSessao.php">
          <i class="fas fa-fw fa-cog"></i>
          <span>Logout</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">


          </ul>

        </nav>
        <!-- End of Topbar -->

       

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
  
  <!-- Modal 
<div class="modal" id="siteModal" tabIndex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
		
			<div class="modal-header">
				<h5 class="modal-title">Erro!</h5>
				<button type="button" class="close" data-dismiss="modal">
					<span>x</span>
				</button>
			</div>
			
			<div class="modal-body">
				<p>Existem campos vazios!</p>
			</div>
			
			<div class="modal-footer">
				<button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
			</div>
		
		</div>
	</div>
</div> -->

<div class="modal fade" id="errorModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-title modal-header">
          <h5 class="modal-title text-center" id="exampleModalLabel">Erro</h5>
        </div>
        <div class="modal-body"><?php echo $msg_sucesso?></div>
        <div class="modal-footer">
          <a class="btn btn-primary" href="cadastrar_admin.php">Voltar</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="../assets/vendor/jquery/jquery.min.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../assets/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../assets/js/sb-admin-2.min.js"></script>
  <script type="text/javascript">

		$(document).ready(function() {
			$('#errorModal').modal('show');
		});
		
		$('#errorModal').on('show.bs.modal', function (e) {
			$('.firstBlur').addClass('modalBlur');
		});
		
		 $('#errorModal').on('hide.bs.modal', function (e) {
                $('.firstBlur').removeClass('modalBlur');
          });
		
  </script>

</body>

</html>
