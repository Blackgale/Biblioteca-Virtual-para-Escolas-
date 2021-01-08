<?php
require_once '../config.php';
$conn = conexao();
$id_curso = filter_input(INPUT_POST, 'id_curso', FILTER_SANITIZE_STRING);
$titulo_curso = trim(filter_input(INPUT_POST, 'titulo_curso', FILTER_SANITIZE_STRING));
$descricao_curso = filter_input(INPUT_POST, 'descricao_curso', FILTER_SANITIZE_STRING);
$status_curso = filter_input(INPUT_POST, 'status_curso', FILTER_SANITIZE_STRING);

$uploaddir = "../../_img_cursos/";
$arquivo = $_FILES["userfile"]["name"];
$separa = explode(".",$arquivo);
$separa = array_reverse($separa);
$tipo = $separa[0];

include_once '../../funcoes/funcoesUteis.php';
$imagem = normalizaNomeArquivo($titulo_curso).'.' .$tipo;

if( $titulo_curso    != NULL &&
    $descricao_curso != NULL &&
    $status_curso    != NULL ){

    if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploaddir . $imagem)) {
        $uploadfile = $imagem;

        $update = $conn->prepare("UPDATE tb_curso SET titulo_curso = :titulo_curso, descricao_curso = :descricao_curso, "
                             . "imagem_curso = :imagem_curso, status_curso = :status_curso WHERE id_curso = :id_curso ");            

        $update->bindParam (":id_curso", $id_curso);
        $update->bindParam(":titulo_curso", $titulo_curso);
        $update->bindParam(":descricao_curso", $descricao_curso);
        $update->bindParam(":imagem_curso", $uploadfile);
        $update->bindParam(":status_curso", $status_curso);

        $update->execute();
        
        echo "Alterado com sucesso!";
        header('location: ../gerenciar_cursos.php');
    }else{
        print("<p>Houve um erro no Upload da imagem <br>Tente cadastrar novamente</p>");
    }
}else{
    print("<p>Existem Campos vazios</p>");
}
?>

