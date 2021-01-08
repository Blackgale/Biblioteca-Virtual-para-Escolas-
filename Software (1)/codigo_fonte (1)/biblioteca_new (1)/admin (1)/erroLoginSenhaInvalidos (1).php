<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Trabalhos</title>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/bootstrap/css/styleTrabalhos.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i">
    <link rel="stylesheet" href="../assets/fonts/ionicons.min.css">
	<link rel="stylesheet" href="../assets/fonts/icomoon/style.css">
	
	<script type="text/javascript" src="//code.jquery.com/jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="../assets/js/javascriptpersonalizado.js"></script>
	
</head>

<body style="background-image:url('../assets/img/fundo-alunos.jpg');">
    
    
    
    <!-- jQuery -->
    <script src="../assets/js/jquery-2.1.0.min.js"></script>
    <script src="../assets/js/jquery.min.js"></script>

    <!-- Bootstrap -->
    <script src="../assets/js/popper.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
	
	<!-- Plugins -->
    <script src="../assets/js/scrollreveal.min.js"></script>
    <script src="../assets/js/waypoints.min.js"></script>
    <script src="../assets/js/jquery.counterup.min.js"></script>
    <script src="../assets/js/imgfix.min.js"></script>
	<script src="../assets/js/aos.js"></script> 
	<script src="../assets/js/main.js"></script>
	
	<!-- Global Init -->
    <script src="../assets/js/custom.js"></script>
	<script src="../assets/sweetalert2/dist/sweetalert2.all.min.js"></script>
	<script>
	
		window.onload = function() {
		
		Swal.fire({
			type: 'error',
			title: 'Acesso Negado!',
			text: 'Login ou senha inválidas!',
		}).then(function() {
			window.location = "../aluno.php";
		});

		
		}
	
	</script>
</body>

</html>