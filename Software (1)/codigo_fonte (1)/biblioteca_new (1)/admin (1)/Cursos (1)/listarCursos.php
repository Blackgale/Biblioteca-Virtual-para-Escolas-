<?php
function listarCursos(){
 
    require_once 'config.php';
    $conn = conexao();
    $select = $conn->prepare("SELECT * FROM tb_curso ORDER BY status_curso = 'ATIVO' DESC, status_curso = 'INATIVO' DESC");
    $select->execute();
    //exit();
    $all_cursos = $select->fetchAll(PDO::FETCH_OBJ);
    return $all_cursos;
}
//echo "teste";
//foreach($all_cursos as $curso) {
 //   print_r($curso->titulo);     
//}
//while($all_cursos = $select->fetchAll(PDO::FETCH_ASSOC)){
//    echo $all_cursos['titulo'];
//}

?>