<?php require_once 'listarDadosAdmin.php';?>
<?php 
if($tipo_admin != 'MODERADOR' && $tipo_admin != 'MASTER'){ 
    //echo "Não pode acessar";
  header("Location: error.php");
}

?>
<!DOCTYPE html>
<html lang="pt-br">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Área Administrativa - Cadastrar Curso</title>

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
                        <h1 class="h3 mb-4 text-gray-800 text-center">Cadastrar novo curso</h1>

                    </div>
                    <!-- /.container-fluid -->

                </div>

                <hr>

                <hr/>
                <br/>

                <div class="container col-lg-12">
                    <form method="post" action="Cursos/cadastrarCurso.php" enctype="multipart/form-data">
                        <div class="row">
                            <!-- left column -->
                            <div class="container col-sm-3">
                                <div class="text-center">
                                    <img src="https://via.placeholder.com/100x100" class="img-profile rounded-circle" alt="avatar">
                                    <h6>Alterar a imagem</h6>

                                    <input type="file" name="userfile" class="form-control" style="height:44px;">
                                </div>
                            </div>

                            <!-- edit form column -->

                            <div class="container col-sm-8">



                                <div class="form-group">

                                    <label for="inputEmail4">Nome</label>
                                    <input type="text" class="form-control" placeholder="Nome do Curso" name="titulo_curso"></input>

                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Descrição</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="descricao_curso"></textarea>
                                </div>
                                
                                <div class="form-group">
                                    <div id="div1"></div>
                                </div>
                                <button type="submit" class="btn btn-primary">Adicionar</button>


                            </div>
                        </div>

                        <hr>
                        <br/>
                    </form>
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

        <!-- Bootstrap core JavaScript-->
        <script src="../assets/vendor/jquery/jquery.min.js"></script>
        <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="../assets/vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="../assets/js/sb-admin-2.min.js"></script>

    </body>

</html>
