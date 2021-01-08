<?php require_once 'listarDadosAdmin.php';?>
<?php 
echo $nome_admin.", ".$tipo_admin; 
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
                    require_once 'Administrador/editarAdmin.php';
                    require_once 'Cursos/listarCursos.php';
                    $all_cursos = listarCursos();
                    $id = $_GET['id_admin'];
                    $dados_admin = listaAdmin($id);
                    ?>
                    <form method="post" action="Administrador/salvarAlteracaoAdmin.php" enctype="multipart/form-data">
                        <div class="container col-sm-8"> 
                            <div class="form-group">
                                <input class="input-geral" type="text" name="id_admin" value='<?php echo "$id" ?>' hidden>
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Tipo</label>

                                    <select class="form-control" name="tipo_admin" id="exampleFormControlSelect1">
                                        <?php
                                        $listar_tipo = array('MODERADOR', 'ORIENTADOR', 'MASTER');
                                        foreach ($listar_tipo as $tipo) {
                                            ?>
                                            <option value="<?php echo $tipo; ?>" name="tipo_admin"><?php echo $tipo; ?></option>
                                        <?php } ?>

                                    </select>
                                </div>
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Curso Admin</label>
                                        <select class="form-control" name="curso_admin" id="exampleFormControlSelect1">
                                            <option>Escolher Curso</option>
                                            <option value="OUTROS" name="curso_admin">OUTROS</option>
                                            <?php
                                            $total_cursos = count($all_cursos);
                                            foreach ($all_cursos as $curso) {
                                                ?>                                
                                                <option value="<?php echo $curso->titulo_curso; ?>" name="curso_admin"><?php echo $curso->titulo_curso; ?></option>
                                            <?php } ?>

                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="inputEmail4">Nome</label>
                                    <input type="text" name="nome_admin" value="<?php echo $dados_admin->nome_admin; ?>" class="form-control" placeholder="Nome Completo"></input>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail4">RM</label>
                                    <input type="text" name="rm_admin" value="<?php echo $dados_admin->rm_admin; ?>"class="form-control" placeholder="RM"></input>
                                </div>

                                <div class="form-group">
                                    <label for="inputEmail4">Email</label>
                                    <input type="text" name="email_admin" value="<?php echo $dados_admin->email_admin; ?>" class="form-control" placeholder="Email"></input>
                                </div> 
                            </div>

                            <div class="form-group">
                                <label for="inputEmail4">Senha</label>
                                <input type="text" name="senha_admin" value="<?php echo $dados_admin->senha_admin; ?>" class="form-control" placeholder="Senha"></input>
                            </div> 



                            <div class="form-group">
                                <label for="inputEmail4">Telefone</label>
                                <input type="text" name="telefone_admin" value="<?php echo $dados_admin->telefone_admin; ?>" class="form-control" placeholder="Telefone"></input>
                            </div>
                           
                            <div class="form-group">
                            <label for="exampleFormControlSelect1">Status</label>
                            <select class="form-control" name="status_admin" id="exampleFormControlSelect1">
                                <option value="ATIVO" name="status_admin">Ativo</option>
                                <option value="INATIVO" name="status_admin">Inativo</option>
                                <option value="EXCLUIDO" name="status_admin">Excluir</option>

                            </select>
                        </div>
                            <button type="submit" class="btn btn-primary">Alterar</button>
                        </div>
                        
                    </form>
                    <footer class="sticky-footer bg-white">
                        <div class="container my-auto">

                        </div>
                    </footer>


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
