<?php
function listarContatos(){
 
    require_once '../config.php';
    $conn = conexao();
    $select = $conn->prepare("SELECT * FROM tb_contato");
    $select->execute();
	
	$all_contato = $select->fetchAll(PDO::FETCH_OBJ);
    return $all_contato;
    }
?>