<?php
function listaAdmin($id){
     
    require_once 'config.php';
    $conn = conexao();  
    //$id_curso = $_GET["id"];
    $selecte= $conn->prepare("SELECT * FROM tb_administrador WHERE id_admin=$id");
    $selecte->execute();
    //echo $select->rowCount();
    //exit();
    $dados_admin = $selecte->fetchAll(PDO::FETCH_OBJ);
    foreach ($dados_admin as $admin) {
        $admin->rm_admin;
        $admin->nome_admin;
        $admin->email_admin;
        //$admin->curso_admin;
        $admin->senha_admin;
        $admin->telefone_admin;
        //$admin->tipo_admin;
        $admin->status_admin;
    }
    return $admin;
}

?>



