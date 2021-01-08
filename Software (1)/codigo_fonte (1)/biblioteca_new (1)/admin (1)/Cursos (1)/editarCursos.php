<?php
function listaCurso($id){
     
    require_once 'config.php';
    $conn = conexao();
    //$id_curso = $_GET["id"];
    $select = $conn->prepare("SELECT * FROM tb_curso WHERE id_curso='$id'");
    $select->execute();
    //echo $select->rowCount();
    //exit();
    $dados_cursos = $select->fetchAll(PDO::FETCH_OBJ);
    foreach ($dados_cursos as $curso) {
        $curso->titulo_curso;
        $curso->descricao_curso;
        $curso->imagem_curso;
        $curso->status_curso;
    }
    return $curso;
}

?>

