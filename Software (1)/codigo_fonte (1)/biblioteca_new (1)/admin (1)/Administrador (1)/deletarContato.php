<?php
	
	$id = $_GET['id'];
	
    require_once '../config.php';
    $conn = conexao();
    $delete = $conn->prepare("DELETE FROM tb_contato WHERE id_contato = $id;");
    $delete->execute();
	
	header('location: ../listar_contatos.php');
 
 ?>



