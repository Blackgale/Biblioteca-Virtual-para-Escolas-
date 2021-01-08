<?php
function listaRepresentante($id){
     
    require_once 'config.php';
    $conn = conexao();  
    //$id_curso = $_GET["id"];
    $selecte= $conn->prepare("SELECT * FROM tb_grupo WHERE id_grupo = $id");
    $selecte->execute();
    //echo $select->rowCount();
    //exit();
    $dados_representante = $selecte->fetchAll(PDO::FETCH_OBJ);
    foreach ($dados_representante as $representante) {
        $representante->login_representante_grupo;
        $representante->email_representante_grupo;
        $representante->status_representante_grupo;
        //$admin->curso_admin;
        
    }
    return $representante;
}

?>


