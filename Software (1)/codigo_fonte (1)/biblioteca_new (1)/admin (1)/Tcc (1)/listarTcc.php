<?php
function listarTcc(){
 
    require_once 'config.php';
    $conn = conexao();
    $select = $conn->prepare("SELECT * FROM tb_tcc LEFT JOIN tb_grupo ON tb_grupo.id_grupo = tb_tcc.id_grupo" );
    $select->execute();
    //exit();
    $all_tcc = $select->fetchAll(PDO::FETCH_OBJ);
    return $all_tcc;
}










