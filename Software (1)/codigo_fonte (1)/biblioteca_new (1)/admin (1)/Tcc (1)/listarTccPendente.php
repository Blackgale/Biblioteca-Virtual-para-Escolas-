<?php
function listarTccPendente(){
 
    require_once 'config.php';
    $conn = conexao();
    try{
    $select = $conn->prepare("SELECT * FROM tb_tcc LEFT JOIN tb_grupo ON tb_grupo.id_grupo = tb_tcc.id_grupo WHERE status_tcc = 'PENDENTE' " );
    $select->execute();
    }catch(PDOException $e){
        echo $e;
    }
    //exit();
    $all_tcc = $select->fetchAll(PDO::FETCH_OBJ);
    return $all_tcc;
}





























