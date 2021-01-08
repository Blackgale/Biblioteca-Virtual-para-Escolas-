<?php
require_once 'Cursos/editarCursos.php';
?>
<?php require_once 'listarDadosAdmin.php';?>
<?php 
if($tipo_admin != 'MODERADOR' && $tipo_admin != 'MASTER'){ 
    //echo "Não pode acessar";
  header("Location: error.php");
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

        <title>Area Administrativa - Alterar Curso</title>

        <!-- Custom fonts for this template-->
        <link href="../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

        <!-- Custom styles for this template-->
        <link href="../assets/bootstrap/css/sb-admin-2.min.css" rel="stylesheet">
        <link href="../assets/bootstrap/css/styleAdmin.css" rel="stylesheet">

    </head>

    <body id="page-top">

        <!-- Page Wrapper -->
        <div id="wrapper">

            <!-- Sidebar -->
            <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

                <!-- Sidebar - Brand -->
                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">     
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

                    <!-- Begin Page Content -->
                    <div class="container-fluid">

                        <!-- Page Heading -->
                        <h1 class="h3 mb-4 text-gray-800 text-center">Gerenciamento de Cursos</h1>

                    </div>
                    <!-- /.container-fluid -->		
                </div>	  
                <?php 
                    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_STRING);
                    $curso = listaCurso($id);
                ?>
                <form method="post" action="Cursos/salvarAlteracaoCursos.php" enctype="multipart/form-data">
                <div class="container col-lg-12">
                    
                        <div class="row">
                            
                            <!-- left column -->
                            <div class="container col-sm-3">
                                <input class="input-geral" type="text" name="id_curso" value='<?php echo "$id"?>' hidden>
                                <div class="text-center">
                                    <img src="../_img_cursos/<?php echo $curso->imagem_curso;?>" style="width: 200px" class="img-profile rounded-circle" alt="avatar">
                                    <h6>Alterar a imagem...</h6>

                                    <input type="file" name="userfile" value="<?php echo $curso->imagem_curso;?>" class="form-control" style="height:44px;">
                                </div>
                            </div>

                            <!-- edit form column -->

                            <div class="container col-sm-8">


                                <div class="form-group">

                                    <label for="inputEmail4">Nome</label>
                                    <input type="text" class="form-control" name="titulo_curso" value="<?php echo $curso->titulo_curso;?>" placeholder="Nome do Curso"></input>

                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Descrição</label>
                                    <textarea class="form-control"  name="descricao_curso" id="exampleFormControlTextarea1" rows="3"><?php echo $curso->descricao_curso;?></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Status</label>
                                    <select class="form-control" name="status_curso" id="exampleFormControlSelect1">
                                        <option value="ATIVO" name="status_curso">Ativo</option>
                                        <option value="INATIVO" name="status_curso">Inativo</option>
                                        <option value="EXCLUIDO" name="status_curso">Excluir</option>
                                        
                                    </select>
                                </div>
                                
                                <button type="submit" class="btn btn-primary">Alterar</button>


                            </div>
                            
                        </div>
                    
                </div>
                </form>
                <hr/>
                <br/>
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
