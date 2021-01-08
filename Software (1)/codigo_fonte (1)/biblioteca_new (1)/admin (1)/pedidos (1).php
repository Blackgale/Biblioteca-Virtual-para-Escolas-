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

  <title>Pedidos</title>

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="../assets/bootstrap/css/sb-admin-2.min.css" rel="stylesheet">
  <link href="../assets/bootstrap/css/styleAdmin.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="../assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

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
                      <th>Aceitar</th>
					  <th>Recusar</th>
					  
                    </tr>
                  </tfoot>
                  <tbody>
					<?php 
						require_once 'listarTrabalhosPendentes.php';
						$all_pedidos = listarTrabalhosPendentes();
						foreach($all_pedidos as $dados){
						require_once 'listarDadosAdmin.php';
						echo $curso_admin;
					?>

						<tr>
								  <td><?php echo $dados->titulo_tcc;?></td>
								  <td><?php echo $dados->curso_representante_grupo;?></td>
								  <td><?php echo date('d-m-Y', strtotime($dados->data_upload_tcc));?></td>
								  <td><?php echo $dados->status_tcc;?></td>
								  <td><a href='#' class='btn btn-primary' target='_blanck'>Visualizar</a></td>
								  <td><form method='post' action='alterarStatusAceito.php?id_tcc="<?php echo $dados->id_tcc;?>" '><button type='submit' class='btn btn-primary' style='background-color:green; border: none;'>Aceitar</button></form></td>
								  <td><form method='post' action='alterarStatusRecusado.php?id_tcc="<?php echo $dados->id_tcc;?>" '><button type='submit' class='btn btn-primary' style='background-color:#ce0000; border: none;'>Recusar</button></form></td>
								</tr>
						
					<?php 
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

  <!-- Bootstrap core JavaScript-->
  <script src="../assets/vendor/jquery/jquery.min.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../assets/vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="../assets/js/jquery-3.3.1.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../assets/js/sb-admin-2.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="../assets/js/demo/datatables-demo.js"></script>

</body>

</html>
