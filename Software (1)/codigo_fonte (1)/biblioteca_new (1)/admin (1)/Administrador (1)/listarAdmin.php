<?php
function listarAdmin(){
 
    require_once 'config.php';
    $conn = conexao();
    $select = $conn->prepare("SELECT * FROM tb_administrador ORDER BY  status_admin = 'ATIVO' DESC, id_admin DESC,status_admin = 'INATIVO' DESC");
    $select->execute();
    //exit();
    $all_admin = $select->fetchAll(PDO::FETCH_OBJ);
    return $all_admin;
}
//echo "teste";
//foreach($all_cursos as $curso) {
 //   print_r($curso->titulo);     
//}
//while($all_cursos = $select->fetchAll(PDO::FETCH_ASSOC)){
//    echo $all_cursos['titulo'];
//}

?>
