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

        <title>Área Administrativa - Gerenciar Cursos</title>

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

					  <?php 
	  
						  require_once "filtroMenu.php";
						  
						  filtroMenu();
						  
					?>

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
                        <?php require_once 'Cursos/listarCursos.php';

                            $all_cursos = listarCursos();
                            $total_cursos = count($all_cursos);
                            echo $total_cursos." Encontrados";
                        ?>
                    </div>
                    <!-- /.container-fluid -->

                </div>
                <?php
                    foreach ($all_cursos as $curso) {
                ?>
                    
                <hr>
                <div class="row">
                    <!-- left column -->
                    <div class="container col-sm-3">
                        <div class="text-center">
                            <img src="../_img_cursos/<?php echo $curso->imagem_curso;?>" style="width:200px;" class="img-profile rounded-circle" alt="avatar">
                            <h6>Imagem</h6>
                        </div>
                    </div>

                    <!-- edit form column -->
                                        
                    <div class="container col-sm-8">


                        <div class="form-group">

                            <label for="inputEmail4">Nome</label>
                            <hr/>
                            <label for="inputEmail4"><?php echo $curso->titulo_curso;?></label>

                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Descrição</label>
                            <hr/>
                            <label for="exampleFormControlTextarea1"><?php echo $curso->descricao_curso;?></label>
                        </div>
                        
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Status</label>
                            <hr/>
                            <label for="exampleFormControlTextarea1"><?php echo $curso->status_curso;?></label>
                        </div>

                        <div class="form-group">
                            <div id="div1"></div>
                        </div>
                        <a href="editar_cursos.php?id=<?php echo $curso->id_curso;?>"" class="btn btn-primary">Alterar</a>


                    </div>
                </div>
                <hr/>
                <br/>
                <div><hr /></div>

                <br/>
                <?php
                }
                ?>
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
