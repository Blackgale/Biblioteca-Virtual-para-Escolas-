<?php require_once 'listarDadosAdmin.php';?>
<?php 
echo $nome_admin.", ".$tipo_admin; 
if($tipo_admin != 'MODERADOR' && $tipo_admin != 'MASTER'){ 
    //echo "Não pode acessar";
  header("Location: error.php");
}

?>
<?php require_once 'Administrador/listarAdmin.php';?>
<!DOCTYPE html> 
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Area Prof</title>

  <!-- Custom fonts for this template-->
  <link href="../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../assets/bootstrap/css/sb-admin-2.min.css" rel="stylesheet">
  <link href="../assets/bootstrap/css/styleProf.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">     
      <img src="../assets/img/logo1.png" alt="Logotipo">                  
      <img class="sidebar-brand-text mx-3" src="../assets/img/logo2.png" alt="Logotipo">                  
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
        <a class="nav-link" href="inicio_Admin.html">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Início</span></a>
      </li>
	  
	  <li class="nav-item">
        <a class="nav-link" href="gerenciar_Cursos_Admin.html">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Gerenciar Cursos</span></a>
      </li>
	  
	  <li class="nav-item">
        <a class="nav-link" href="cadastro_Cursos_Admin.html">
          <i class="fas fa-fw fa-table"></i>
          <span>Cadastrar Curso</span></a>
      </li>
	  
      <li class="nav-item">
        <a class="nav-link" href="cadastro_Docente_Admin.html">
          <i class="fas fa-fw fa-table"></i>
          <span>Cadastrar Docente</span></a>
      </li>

      <!-- Nav Item - Tables -->

      <li class="nav-item">
        <a class="nav-link" href="cadastro_Novo_Admin.html">
          <i class="fas fa-fw fa-table"></i>
          <span>Cadastrar Administrador</span></a>
      </li>
      <!-- Nav Item - Tables -->
	  
	  <li class="nav-item">
        <a class="nav-link" href="#">
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

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->

        </div>
        <?php
            $all_admin = listarAdmin();
            $total_admin = count($all_admin);
            echo $total_admin." Encontrados";
        ?>
        <!-- /.container-fluid -->
		<table class="table">
			<thead>
			<tr>
				
				<th scope="col">RM</th>
				<th scope="col">Nome</th>
				<th scope="col">Email</th>
                                <th scope="col">Curso</th>
				<th scope="col">Status</th>
                                <th scope="col">Tipo Adm</th>
				<th scope="col">Alterar</th>
			</tr>
			</thead>
			<tbody>
                        <?php
                            foreach ($all_admin as $dados) {
                        ?>    
			<tr>
				
				<td><?php echo $dados->rm_admin; ?></td>
				<td><?php echo $dados->nome_admin; ?></td>
				<td><?php echo $dados->email_admin; ?></td>
                                <td><?php echo $dados->curso_admin; ?></td>
				<td><?php echo $dados->status_admin; ?></td>
                                <td><?php echo $dados->tipo_admin; ?></td>
                                <td><a href="editar_admin.php?id_admin=<?php echo $dados->id_admin; ?>" class="btn btn-primary">Alterar</a></td>
			</tr>
                            <?php } ?>
			</tbody>
		</table>
      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
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

</body>

</html>
