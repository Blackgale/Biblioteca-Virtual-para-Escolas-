<?php
require_once 'listarDadosGrupo.php';
require_once '../config.php';
$conn = conexao();

$nome_orientador_tcc = filter_input(INPUT_POST, 'nome_orientador_tcc', FILTER_SANITIZE_STRING);
$titulo_tcc = filter_input(INPUT_POST, 'titulo_tcc', FILTER_SANITIZE_STRING);
$resumo_tcc = filter_input(INPUT_POST, 'resumo_tcc', FILTER_SANITIZE_STRING);
$ano_formacao_tcc = filter_input(INPUT_POST, 'ano_formacao_tcc', FILTER_SANITIZE_STRING);
$semestre_tcc = filter_input(INPUT_POST, 'semestre_tcc', FILTER_SANITIZE_STRING);
$arr_palavra_chave = $_POST['palavra_chave_tcc'];
//$palavras = implode(" , ", $arr_palavra_chave);

$uploaddir = "../_arquivos_tcc/";
$arquivo = $_FILES["userfile"]["name"];
$separa = explode(".",$arquivo);
$separa = array_reverse($separa);
$tipo = $separa[0];



include_once '../funcoes/funcoesUteis.php';
$documento = normalizaNomeArquivo($titulo_tcc).'.' .$tipo;

/*echo "<br> orientador = ".$nome_orientador_tcc."<br>";
echo "titulo = ".$titulo_tcc."<br>";
echo "resumo = ".$resumo_tcc."<br>";
echo "semestre = ".$semestre_tcc."<br>"; 
echo "ano = ".$ano_formacao_tcc."<br>";
echo "palavas chave = ".$palavras."<br>";
exit();*/

require_once 'validacoes.php';
if(validarTcc($nome_orientador_tcc, $palavras, $titulo_tcc, $resumo_tcc, $semestre_tcc, $ano_formacao_tcc, $arquivo, $tipo)){
    session_start();
    header("Location: resposta.php");
}else{
    echo "Sucesso";
} exit(); 


    if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploaddir . $documento)) {
                    $uploadfile = $documento;
                    if($uploadfile == NULL){
                        session_start();
                        $_SESSION['msg_resposta'] = "Carregue um Arquivo PDF!";
                        header("Location: resposta.php");
                    }
                    exit();
        try{
        $insert = $conn->prepare("INSERT INTO tb_tcc(nome_orientador_tcc, titulo_tcc, resumo_tcc, ano_formacao_tcc, semestre_tcc, data_upload_tcc, arquivo_tcc, executavel_tcc, palavra_chave_tcc, id_grupo)"
                . "                             VALUES(:nome_orientador_tcc, :titulo_tcc, :resumo_tcc, :ano_formacao_tcc, :semestre_tcc, NOW(), :arquivo_tcc, :executavel_tcc, :palavras, :id_grupo)");

        $insert->bindValue(":nome_orientador_tcc", $nome_orientador_tcc);
        $insert->bindValue(":titulo_tcc", $titulo_tcc);
        $insert->bindValue(":resumo_tcc", $resumo_tcc);
        $insert->bindValue(":ano_formacao_tcc", $ano_formacao_tcc);
        $insert->bindValue(":semestre_tcc", $semestre_tcc);
        $insert->bindValue(":arquivo_tcc", $uploadfile);
        $insert->bindValue(":executavel_tcc", $executavel_tcc);
        $insert->bindValue(":palavras", $palavras);
        $insert->bindValue(":id_grupo", $id);

        //$insert->bindValue(":status_admin", $status_admin);
        //$insert->bindValue(":data_cadastro_admin", $data_cadastro_admin);

        $insert->execute();

        }catch(PDOException $e){
            echo "erro".$e->getMessage();
        }
    }else{
        print("<p>Houve um erro no Upload do Arquivo <br>Tente cadastrar novamente</p>");
    }
    /*echo "<br>Inserido execute com sucesso!";
    echo "<br>login - ".$login_representante_grupo ."<br>";
    echo "email - ".$email_representante_grupo ."<br>";
    echo "senha -".$senha_representante_grupo ."<br>";
    echo "curso - ".$curso_representante_grupo ."<br>";
    exit();*/
    echo "Cadastro trealizado com sucesso com sucesso!";
    header('location: consulta_trabalho.php');

    /*if($insert == true){
        echo "Inserido com sucesso!";
     echo "rm - ".$rm_admin ."<br>";
    echo "nome - ".$nome_admin ."<br>";
    echo "email -".$nome_admin ."<br>";
    echo "curso - ".$curso_admin ."<br>";
    echo "senha - ".$senha_admin ."<br>";
    echo "tipo - ".$tipo_admin    ."<br>";
    echo "status - ".$status_admin    ."<br>";
    echo "data - ".$data_cadastro_admin    ."<br>";
    exit();
    }else{
        echo "errooorrrr com sucesso!";
    
    exit();
        echo "Erro";
    }

    //header('location: resposta.php');
    }else{
        print("<p>Existem Campos vazios</p>");
    }*/

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
























