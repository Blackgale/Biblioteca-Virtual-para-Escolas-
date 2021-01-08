<?php

	include_once('conexao.php');
	
	$id_tcc = $_GET['id_tcc'];
	
	$conn -> query("UPDATE tb_tcc SET status_tcc='APROVADO' WHERE id_tcc = $id_tcc");
	
	include_once('pedidos.php');

?>