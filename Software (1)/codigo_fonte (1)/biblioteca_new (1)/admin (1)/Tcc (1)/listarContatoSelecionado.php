<?php
function listarContatoSelecionado(){
	
	$id = $_GET['id'];
	
    require_once 'config.php';
    $conn = conexao();
    $select = $conn->prepare("SELECT * FROM tb_contato WHERE id_contato = $id;");
    $select->execute();
	
	$all_contato = $select->fetchAll(PDO::FETCH_OBJ);
    return $all_contato;
    }