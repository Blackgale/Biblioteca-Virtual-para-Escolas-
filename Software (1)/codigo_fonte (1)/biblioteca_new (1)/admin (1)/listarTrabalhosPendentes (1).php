<?php

function listarTrabalhosPendentes(){
	
	require 'listarDadosAdmin.php';

	$teste = $curso_admin;
	
    require_once 'config.php';
    $conn = conexao();
    $select = $conn->prepare("SELECT * FROM tb_tcc INNER JOIN tb_grupo ON (tb_tcc.id_grupo = tb_grupo.id_grupo) 
						WHERE tb_tcc.status_tcc = 'PENDENTE' AND tb_grupo.curso_representante_grupo = '$teste'");
    $select->execute();
	
	$all_pedidos = $select->fetchAll(PDO::FETCH_OBJ);
    return $all_pedidos;
    }
?>