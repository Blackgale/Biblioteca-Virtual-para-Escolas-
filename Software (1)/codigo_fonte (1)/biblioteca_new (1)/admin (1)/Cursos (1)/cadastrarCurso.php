<?php
require_once '../config.php';
$conn = conexao();

$titulo_curso = trim(filter_input(INPUT_POST, 'titulo_curso', FILTER_SANITIZE_STRING));
$descricao_curso = filter_input(INPUT_POST, 'descricao_curso', FILTER_SANITIZE_STRING);
//$status_curso = filter_input(INPUT_POST, 'status_curso', FILTER_SANITIZE_STRING);

$uploaddir = "../../_img_cursos/";
$arquivo = $_FILES["userfile"]["name"];
$separa = explode(".",$arquivo);
$separa = array_reverse($separa);
$tipo = $separa[0];

include_once '../../funcoes/funcoesUteis.php';
$imagem = normalizaNomeArquivo($titulo_curso).'.' .$tipo;

//$uploadfile="";
if( $titulo_curso    != NULL &&
    $descricao_curso != NULL ){
    
    if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploaddir . $imagem)) {
                    $uploadfile =  $imagem;
        try{            
            $insert = $conn->prepare("INSERT INTO tb_curso(titulo_curso, descricao_curso, imagem_curso) VALUES(:titulo_curso, :descricao_curso, :imagem_curso)");
            $insert->bindValue(":titulo_curso", $titulo_curso);
            $insert->bindValue(":descricao_curso", $descricao_curso);
            $insert->bindValue(":imagem_curso", $uploadfile);
            //$insert->bindValue(":status_curso", $status_curso);
            $insert->execute();
        }catch(PDOException $e){
           echo $e->getMessage(); 
        }  
        header('location: ../gerenciar_cursos.php');
    }else{
        print("<p>Houve um erro no Upload da imagem <br>Tente cadastrar novamente</p>");
    }
}else{
    print("<p>Existem Campos vazios</p>");
}

/*function listarCursos(){
    $conn = new PDO("mysql:host=localhost;dbname=biblioteca_tcc;charset=utf8", "root", "",
                        array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")); 
$select = $conn->prepare("SELECT * FROM tb_curso");
$select->execute();
//echo $select->rowCount();
//exit();
$all_cursos = $select->fetchAll(PDO::FETCH_OBJ);
return $all_cursos;
}*/
//echo "teste";
//foreach($all_cursos as $curso) {
 //   print_r($curso->titulo);     

//}
//while($all_cursos = $select->fetchAll(PDO::FETCH_ASSOC)){
//    echo $all_cursos['titulo'];
//}
























