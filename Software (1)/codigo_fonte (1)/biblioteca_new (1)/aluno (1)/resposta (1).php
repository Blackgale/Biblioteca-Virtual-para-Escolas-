<?php 
	include 'validaLogin.php';
?>

<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Area Aluno</title>

        <!-- Custom fonts for this template-->
        <link href="../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

        <!-- Custom styles for this template-->
        <link href="../assets/bootstrap/css/sb-admin-2.min.css" rel="stylesheet">
        <link href="../assets/bootstrap/css/styleAluno2.css" rel="stylesheet">

    </head>

    <body id="page-top">

        <!-- Page Wrapper -->
        <div id="wrapper">

            <!-- Sidebar -->
            <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

                <!-- Sidebar - Brand -->
                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">     
                    <img src="../img/logo1.png" alt="Logotipo">                  
                    <img class="sidebar-brand-text mx-3" src="../img/logo2.png" alt="Logotipo">                  
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
                        <h1 class="h3 mb-4 text-gray-800 text-center">Upload de TCC</h1>

                    </div>
                    <!-- /.container-fluid -->

                </div>

                <div class="container col-sm-8">
                    <div class='div-msg'>
                        <p><?php echo $msg_sucesso ?></p>
                    </div>
                    <div class="div-logar">	
                        <a href="index.php">
                            <button class="btn-msg"><p class="a-btn-msg">Logar</p></button>
                        </a>

                        <a href="cadastro.php">
                            <button class="btn-msg"><p class="a-btn-msg" >Cadastrar</p></button>
                        </a>
                    </div>
                    <div >
                        <a href="javascript:history.back(1)"> 
                            <button class="voltar" style="margin:  150px 0 0 -520px; position: relative; float: left;">Voltar</button>
                        </a>
                    </div>
                </div>
                <script type="text/javascript">
                    function showfield(value) {
                        if (value == 'DS')
                            document.getElementById('div1').innerHTML = 'Trabalho <input type="file" class="form-control-file" id="exampleFormControlFile1">';
                        else
                            document.getElementById('div1').innerHTML = '';
                    }
                    function showfield2(name) {
                        if (name >= '1') {
                            document.getElementById('aluno1').innerHTML = '<hr/>\n\
                                <div class="form-row"><div class="form-group col-md-6">\n\
                                <label for="inputEmail4">Nome</label>\n\
                                <input type="text" class="form-control" placeholder="Nome Completo"></div><div class="form-group col-md-6"><label for="inputEmail4">Email</label><input type="email" class="form-control" id="inputEmail4" placeholder="Email"></div><div class="form-group col-md-6"><label for="inputPassword4">RM</label><input type="password" class="form-control" id="inputPassword4" placeholder="RM"></div></div><hr/>';
                            document.getElementById('aluno2').innerHTML = '';
                            document.getElementById('aluno3').innerHTML = '';
                            document.getElementById('aluno4').innerHTML = '';
                            document.getElementById('aluno5').innerHTML = '';
                            document.getElementById('aluno6').innerHTML = '';
                            if (name >= '2') {
                                document.getElementById('aluno2').innerHTML = '<div class="form-row"><div class="form-group col-md-6"><label for="inputEmail4">Nome</label><input type="text" class="form-control" placeholder="Nome Completo"></div><div class="form-group col-md-6"><label for="inputEmail4">Email</label><input type="email" class="form-control" id="inputEmail4" placeholder="Email"></div><div class="form-group col-md-6"><label for="inputPassword4">RM</label><input type="password" class="form-control" id="inputPassword4" placeholder="RM"></div></div><hr/>';
                                document.getElementById('aluno3').innerHTML = '';
                                document.getElementById('aluno4').innerHTML = '';
                                document.getElementById('aluno5').innerHTML = '';
                                document.getElementById('aluno6').innerHTML = '';
                                if (name >= '3') {
                                    document.getElementById('aluno3').innerHTML = '<div class="form-row"><div class="form-group col-md-6"><label for="inputEmail4">Nome</label><input type="text" class="form-control" placeholder="Nome Completo"></div><div class="form-group col-md-6"><label for="inputEmail4">Email</label><input type="email" class="form-control" id="inputEmail4" placeholder="Email"></div><div class="form-group col-md-6"><label for="inputPassword4">RM</label><input type="password" class="form-control" id="inputPassword4" placeholder="RM"></div></div><hr/>';
                                    document.getElementById('aluno4').innerHTML = '';
                                    document.getElementById('aluno5').innerHTML = '';
                                    document.getElementById('aluno6').innerHTML = '';
                                    if (name >= '4') {
                                        document.getElementById('aluno4').innerHTML = '<div class="form-row"><div class="form-group col-md-6"><label for="inputEmail4">Nome</label><input type="text" class="form-control" placeholder="Nome Completo"></div><div class="form-group col-md-6"><label for="inputEmail4">Email</label><input type="email" class="form-control" id="inputEmail4" placeholder="Email"></div><div class="form-group col-md-6"><label for="inputPassword4">RM</label><input type="password" class="form-control" id="inputPassword4" placeholder="RM"></div></div><hr/>';
                                        document.getElementById('aluno5').innerHTML = '';
                                        document.getElementById('aluno6').innerHTML = '';
                                        if (name >= '5') {
                                            document.getElementById('aluno5').innerHTML = '<div class="form-row"><div class="form-group col-md-6"><label for="inputEmail4">Nome</label><input type="text" class="form-control" placeholder="Nome Completo"></div><div class="form-group col-md-6"><label for="inputEmail4">Email</label><input type="email" class="form-control" id="inputEmail4" placeholder="Email"></div><div class="form-group col-md-6"><label for="inputPassword4">RM</label><input type="password" class="form-control" id="inputPassword4" placeholder="RM"></div></div><hr/>';
                                            document.getElementById('aluno6').innerHTML = '';
                                            if (name == '6') {
                                                document.getElementById('aluno6').innerHTML = '<div class="form-row"><div class="form-group col-md-6"><label for="inputEmail4">Nome</label><input type="text" class="form-control" placeholder="Nome Completo"></div><div class="form-group col-md-6"><label for="inputEmail4">Email</label><input type="email" class="form-control" id="inputEmail4" placeholder="Email"></div><div class="form-group col-md-6"><label for="inputPassword4">RM</label><input type="password" class="form-control" id="inputPassword4" placeholder="RM"></div></div><hr/>';
                                            }
                                        }
                                    }
                                }
                            }
                        } else {
                            document.getElementById('aluno1').innerHTML = '';
                            document.getElementById('aluno2').innerHTML = '';
                            document.getElementById('aluno3').innerHTML = '';
                            document.getElementById('aluno4').innerHTML = '';
                            document.getElementById('aluno5').innerHTML = '';
                            document.getElementById('aluno6').innerHTML = '';
                        }

                        function showfield3(name) {
                            var quant = document.getElementById("number").value;


                        }
                    }
                    function showfield4(name) {
                        if (name >= '1') {
                            document.getElementById('pc1').innerHTML = '<label for="inputEmail4">Palavra 1</label><input type="text" class="form-control" placeholder="Palavra Chave"></input>';
                            document.getElementById('pc2').innerHTML = '';
                            document.getElementById('pc3').innerHTML = '';
                            document.getElementById('pc4').innerHTML = '';
                            document.getElementById('pc5').innerHTML = '';
                            document.getElementById('pc6').innerHTML = '';
                            if (name >= '2') {
                                document.getElementById('pc2').innerHTML = '<label for="inputEmail4">Palavra 2</label><input type="text" class="form-control" placeholder="Palavra Chave"><br/>';
                                document.getElementById('pc3').innerHTML = '';
                                document.getElementById('pc4').innerHTML = '';
                                document.getElementById('pc5').innerHTML = '';
                                document.getElementById('pc6').innerHTML = '';
                                if (name >= '3') {
                                    document.getElementById('pc3').innerHTML = '<label for="inputEmail4">Palavra 3</label><input type="text" class="form-control" placeholder="Palavra Chave">';
                                    document.getElementById('pc4').innerHTML = '';
                                    document.getElementById('pc5').innerHTML = '';
                                    document.getElementById('pc6').innerHTML = '';
                                    if (name >= '4') {
                                        document.getElementById('pc4').innerHTML = '<label for="inputEmail4">Palavra 4</label><input type="text" class="form-control" placeholder="Palavra Chave"><br/>';
                                        document.getElementById('pc5').innerHTML = '';
                                        document.getElementById('pc6').innerHTML = '';
                                        if (name >= '5') {
                                            document.getElementById('pc5').innerHTML = '<label for="inputEmail4">Palavra 5</label><input type="text" class="form-control" placeholder="Palavra Chave">';
                                            document.getElementById('pc6').innerHTML = '';
                                            if (name == '6') {
                                                document.getElementById('pc6').innerHTML = '<label for="inputEmail4">Palavra 6</label><input type="text" class="form-control" placeholder="Palavra Chave">';
                                            }
                                        }
                                    }
                                }
                            }
                        } else {
                            document.getElementById('pc1').innerHTML = '';
                            document.getElementById('pc2').innerHTML = '';
                            document.getElementById('pc3').innerHTML = '';
                            document.getElementById('pc4').innerHTML = '';
                            document.getElementById('pc5').innerHTML = '';
                            document.getElementById('pc6').innerHTML = '';
                        }
                    }
                </script>
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
