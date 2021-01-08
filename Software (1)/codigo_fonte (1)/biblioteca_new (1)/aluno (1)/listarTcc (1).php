<?php
function listarTcc($id_grupo){
    require_once '../config.php';
    //require 'listarDadosGrupo.php';
    $conn = conexao();
    
    //$id_curso = $_GET["id"];
    $select= $conn->prepare("SELECT * FROM tb_tcc "
            . "LEFT JOIN tb_grupo ON tb_grupo.id_grupo = tb_tcc.id_grupo WHERE tb_tcc.id_grupo=$id_grupo");
    //print_r($id);exit();
    //$select->bindValue(":id", $id);
    $select->execute();
    $dados_tcc = $select->fetchAll(PDO::FETCH_OBJ);
    if(count($dados_tcc >=1)){
      
    //print_r($dados_tcc);
    foreach ($dados_tcc as $dados) {
        //$dados->
        $dados->titulo_tcc;
        /*$dados->nome_admin;
        $dados->email_admin;
        //$admin->curso_admin;
        $dados->senha_admin;
        $dados->telefone_admin;
        //$admin->tipo_admin;
        $dados->status_admin;*/
    }
    return "Ainda não realizou Upload do TCC";  
    }
    
}
//echo "teste";
//foreach($all_cursos as $curso) {
 //   print_r($curso->titulo);     
//}
//while($all_cursos = $select->fetchAll(PDO::FETCH_ASSOC)){
//    echo $all_cursos['titulo'];
//}

?>
