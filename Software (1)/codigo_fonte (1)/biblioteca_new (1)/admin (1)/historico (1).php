<?php require_once 'listarDadosAdmin.php';?>
<?php 
if($tipo_admin != 'ORIENTADOR' && $tipo_admin != 'MASTER'){ 
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

  <title>Area Prof</title>

  <!-- Custom fonts for this template -->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="../assets/bootstrap/css/sb-admin-2.min.css" rel="stylesheet">
  <link href="../assets/bootstrap/css/styleAdmin.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

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

      <!-- Divider -->

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

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">TCCs</h1>
          <p class="mb-4">Aceite ou recuse os pedidos de TCCs.</p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Titulo</th>
                      <th>Curso</th>
                      <th>Data Upload</th>
                      <th>Situação</th>
					  <th>Visualizar</th>
                      <th>Aceitar</th>
					  <th>Recusar</th>
                      
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Titulo</th>
                      <th>Curso</th>
                      <th>Data Upload</th>
                      <th>Situação</th>
					  <th>Visualizar</th>
                      <th>Ativar</th>
					  <th>Desativar</th>
					  
                    </tr>
                  </tfoot>
                  <tbody>
					<?php

						include_once('conexao.php');
						
						$trabalhos = "SELECT * FROM tb_tcc INNER JOIN tb_grupo ON (tb_tcc.id_grupo = tb_grupo.id_grupo) 
						WHERE tb_tcc.status_tcc = 'APROVADO' OR tb_tcc.status_tcc = 'REPROVADO' ";
						$resultado_trabalhos = mysqli_query($conn, $trabalhos);
						
						if(mysqli_num_rows($resultado_trabalhos) <= 0){
							echo "Nenhum Trabalho encontrado";
						}else{
						
							while($rows = mysqli_fetch_assoc($resultado_trabalhos)){
								echo "
								<tr>
								  <td>" .utf8_encode($rows['titulo_tcc']). "</td>
								  <td>" .utf8_encode($rows['curso_representante_grupo']). "</td>
								  <td>" .$rows['data_upload_tcc']. "</td>
								  <td>" .$rows['status_tcc']. "</td>
								  <td><a href='#' class='btn btn-primary'>Visualizar</a></td>
								  <td><form method='post' action='alterarStatusAtivo.php?id_tcc=" .$rows['id_tcc']. "'><button type='submit' class='btn btn-primary' style='background-color:grey; border: none;'>Ativar</button></form></td>
								  <td><form method='post' action='alterarStatusDesativo.php?id_tcc=" .$rows['id_tcc']. "'><button type='submit' class='btn btn-primary' style='background-color:grey; border: none;'>Desativar</button></form></td>
								</tr>
								";
							}
						}
						
					?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

<div class="modal fade" id="desativartcc" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tem certeza?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Desativar este tcc irá ocultar ele da página do site.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
          <a class="btn btn-primary" href="#" data-dismiss="modal" onclick="display2()">Confirmar</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script type="text/javascript">
function display1(){
  document.getElementById("display").innerHTML = "Ativo";
}
function display2(){
  document.getElementById("display").innerHTML = "Desativo";
}
</script>
  <script src="../assets/vendor/jquery/jquery.min.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../assets/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../assets/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="../assets/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="../assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="../assets/js/demo/datatables-demo.js"></script>

</body>

</html>
