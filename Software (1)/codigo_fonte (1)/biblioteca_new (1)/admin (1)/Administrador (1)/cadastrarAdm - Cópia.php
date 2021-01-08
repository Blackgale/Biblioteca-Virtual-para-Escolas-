<?php
require_once '../config.php';
$conn = conexao();

$rm_admin = filter_input(INPUT_POST, 'rm_admin', FILTER_SANITIZE_STRING);
$nome_admin = filter_input(INPUT_POST, 'nome_admin', FILTER_SANITIZE_STRING);
$email_admin = filter_input(INPUT_POST, 'email_admin', FILTER_SANITIZE_STRING);
$curso_admin = filter_input(INPUT_POST, 'curso_admin', FILTER_SANITIZE_STRING);
$senha_admin = filter_input(INPUT_POST, 'senha_admin', FILTER_SANITIZE_STRING);
$telefone_admin = filter_input(INPUT_POST, 'telefone_admin', FILTER_SANITIZE_STRING);
$tipo_admin = filter_input(INPUT_POST, 'tipo_admin', FILTER_SANITIZE_STRING);
$status_admin = filter_input(INPUT_POST, 'status_admin', FILTER_SANITIZE_STRING);
$data_cadastro_admin = date("Y-m-d", time());

//$uploadfile="";


if( $rm_admin    != NULL &&
    $nome_admin != NULL &&
    $email_admin    != NULL &&
    $senha_admin != NULL){
    //include_once '../../funcoes/validaEmail.php';
    //if(validaEmail($email_admin)==false){
      //  $email = "Email Invalido"
    //}exit();
    
    $insert = $conn->prepare("INSERT INTO tb_administrador(rm_admin, nome_admin, email_admin, curso_admin, senha_admin, telefone_admin, tipo_admin,  data_cadastro_admin) VALUES(:rm_admin, :nome_admin, :email_admin, :curso_admin, :senha_admin, :telefone_admin, :tipo_admin, NOW())");
    $insert->bindValue(":rm_admin", $rm_admin);
    $insert->bindValue(":nome_admin", $nome_admin);
    $insert->bindValue(":email_admin", $email_admin);
    $insert->bindValue(":curso_admin", $curso_admin);
    $insert->bindValue(":senha_admin", $senha_admin);
    $insert->bindValue(":telefone_admin", $telefone_admin);
    $insert->bindValue(":tipo_admin", $tipo_admin);
    //$insert->bindValue(":status_admin", $status_admin);
    //$insert->bindValue(":data_cadastro_admin", $data_cadastro_admin);
   
    $insert->execute();
    header("Location: ../listar_admin.php");
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
























