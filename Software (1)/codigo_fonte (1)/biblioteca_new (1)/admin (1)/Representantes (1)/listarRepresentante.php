<?php
function listarRepresentante(){
 
    require_once 'config.php';
    $conn = conexao();
    $select = $conn->prepare("SELECT * FROM tb_grupo ORDER BY data_cadastro_representante_grupo DESC");
    $select->execute();
    //exit();
    $all_representante = $select->fetchAll(PDO::FETCH_OBJ);
    return $all_representante;
}
//echo "teste";
//foreach($all_cursos as $curso) {
 //   print_r($curso->titulo);     
//}
//while($all_cursos = $select->fetchAll(PDO::FETCH_ASSOC)){
//    echo $all_cursos['titulo'];
//}

?>
