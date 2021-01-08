<?php
require 'listarDadosGrupo.php';
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
                    <a class="nav-link" href="inicio_aluno.php">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>Início</span></a>
                </li>


                <li class="nav-item">
                    <a class="nav-link" href="upload_trabalho.php">
                        <i class="fas fa-fw fa-chart-area"></i>
                        <span>Upload</span></a>
                </li>

                <!-- Nav Item - Tables -->
                <li class="nav-item">
                    <a class="nav-link" href="consulta_trabalho.php">
                        <i class="fas fa-fw fa-table"></i>
                        <span>Seu TCC</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="encerraSessao.php">
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
                        <h1 class="h3 mb-4 text-gray-800 text-center">Upload de TCC</h1>
                        <h1 class="text-center">Bem-vindo(a) à Area do Aluno</h1>
                        <h2 class="text-center"><?php echo $usuario; ?></h2>
                        <hr/>
                        <br/>
                    </div>
                    <!-- /.container-fluid -->

                </div>

                <div class="container col-sm-8">
                    <form method="post" enctype="multipart/form-data" action="cadastrarTcc.php">
                        <div class="form-group">
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Curso: </label>
                                <label for="exampleFormControlSelect1"><?php echo $curso; ?></label>
                                <!--<select class="form-control" id="exampleFormControlSelect1" onchange="showfield(this.options[this.selectedIndex].value)" name="travel_arriveVia">
                                    <option>- Escolher Curso -</option>
                                    <option value="DS">Informática</option>
                                    <option value="CNT">Contabilidade</option>
                                    <option value="ADM">Administração</option>
                                    <option value="ST">Segurança no Trabalho</option>
                                    <option value="RH">Recrusos Humanos</option>
                                </select>-->


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

                                <label for="inputEmail4">Nome Orientador</label>
                                <input type="text" class="form-control" placeholder="Orientador do Tcc" name="nome_orientador_tcc"></input>

                            </div>
                            <div class="form-group">

                                <label for="inputEmail4">Titulo</label>
                                <input type="text" class="form-control" placeholder="Titulo do Tcc" name="titulo_tcc"></input>

                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Resumo</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" name="resumo_tcc" rows="3"></textarea>
                            </div>
                            <div class="form-group">

                                <label for="inputEmail4">Ano formação</label>
                                <input type="text" class="form-control" placeholder="Ano de Formação" name="ano_formacao_tcc"></input>

                            </div>
                            <div class="form-group">

                                <label for="inputEmail4">Semestre</label>
                                <input type="text" class="form-control" placeholder="Semestre 1 OU 2" name="semestre_tcc"></input>

                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlFile1">PDF</label>
                                <input type="file" name="userfile" class="form-control-file" id="exampleFormControlFile1">
                            </div>

                            <div class="form-group">
                                <div id="div1"></div>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                <script type="text/javascript">
                    function showfield(value) {
                        if (value == 'Desenvolvimento de Sistemas')
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
                            document.getElementById('pc1').innerHTML = '<label for="inputEmail4">Palavra 1</label><input type="text" name="palavra_chave_tcc[]" class="form-control" placeholder="Palavra Chave"></input>';
                            document.getElementById('pc2').innerHTML = '';
                            document.getElementById('pc3').innerHTML = '';
                            document.getElementById('pc4').innerHTML = '';
                            document.getElementById('pc5').innerHTML = '';
                            document.getElementById('pc6').innerHTML = '';
                            if (name >= '2') {
                                document.getElementById('pc2').innerHTML = '<label for="inputEmail4">Palavra 2</label><input type="text" name="palavra_chave_tcc[]" class="form-control" placeholder="Palavra Chave"><br/>';
                                document.getElementById('pc3').innerHTML = '';
                                document.getElementById('pc4').innerHTML = '';
                                document.getElementById('pc5').innerHTML = '';
                                document.getElementById('pc6').innerHTML = '';
                                if (name >= '3') {
                                    document.getElementById('pc3').innerHTML = '<label for="inputEmail4">Palavra 3</label><input type="text" name="palavra_chave_tcc[]" class="form-control" placeholder="Palavra Chave">';
                                    document.getElementById('pc4').innerHTML = '';
                                    document.getElementById('pc5').innerHTML = '';
                                    document.getElementById('pc6').innerHTML = '';
                                    if (name >= '4') {
                                        document.getElementById('pc4').innerHTML = '<label for="inputEmail4">Palavra 4</label><input type="text" name="palavra_chave_tcc[]" class="form-control" placeholder="Palavra Chave"><br/>';
                                        document.getElementById('pc5').innerHTML = '';
                                        document.getElementById('pc6').innerHTML = '';
                                        if (name >= '5') {
                                            document.getElementById('pc5').innerHTML = '<label for="inputEmail4">Palavra 5</label><input type="text" name="palavra_chave_tcc[]" class="form-control" placeholder="Palavra Chave">';
                                            document.getElementById('pc6').innerHTML = '';
                                            if (name == '6') {
                                                document.getElementById('pc6').innerHTML = '<label for="inputEmail4">Palavra 6</label><input type="text" name="palavra_chave_tcc[]" class="form-control" placeholder="Palavra Chave">';
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

        <!-- Bootstrap core JavaScript-->
        <script src="../assets/vendor/jquery/jquery.min.js"></script>
        <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="../assets/vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="../assets/js/sb-admin-2.min.js"></script>

    </body>

</html>
