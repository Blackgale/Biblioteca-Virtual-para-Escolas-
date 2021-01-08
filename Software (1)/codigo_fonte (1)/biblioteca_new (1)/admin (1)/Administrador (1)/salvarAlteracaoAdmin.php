<?php

require_once '../config.php';
$conn = conexao();

$id_admin = filter_input(INPUT_POST, 'id_admin', FILTER_SANITIZE_STRING);
$rm_admin = filter_input(INPUT_POST, 'rm_admin', FILTER_SANITIZE_STRING);
$nome_admin = filter_input(INPUT_POST, 'nome_admin', FILTER_SANITIZE_STRING);
$email_admin = filter_input(INPUT_POST, 'email_admin', FILTER_SANITIZE_STRING);
$curso_admin = filter_input(INPUT_POST, 'curso_admin', FILTER_SANITIZE_STRING);
$senha_admin = filter_input(INPUT_POST, 'senha_admin', FILTER_SANITIZE_STRING);
$telefone_admin = filter_input(INPUT_POST, 'telefone_admin', FILTER_SANITIZE_STRING);
$tipo_admin = filter_input(INPUT_POST, 'tipo_admin', FILTER_SANITIZE_STRING);
$status_admin = filter_input(INPUT_POST, 'status_admin', FILTER_SANITIZE_STRING);
$data_cadastro_admin = date("Y-m-d", time());


require 'validacoes.php';



if(validarEdicaoAdmin($id_admin, $rm_admin, $email_admin, $nome_admin, $senha_admin, $status_admin)){
session_start();
header("Location: ../resposta.php");
}else{
    try{
    $update = $conn->prepare("UPDATE tb_administrador SET rm_admin = :rm_admin, nome_admin = :nome_admin, "
    ."email_admin = :email_admin, curso_admin = :curso_admin, senha_admin = :senha_admin,"
    ." telefone_admin = :telefone_admin, tipo_admin = :tipo_admin, status_admin = :status_admin,"
    ." data_cadastro_admin = NOW() WHERE id_admin = :id_admin" );

    $update->bindValue(":rm_admin", $rm_admin);
    $update->bindValue(":nome_admin", $nome_admin);
    $update->bindValue(":email_admin", $email_admin);
    $update->bindValue(":curso_admin", $curso_admin);
    $update->bindValue(":senha_admin", $senha_admin);
    $update->bindValue(":telefone_admin", $telefone_admin);
    $update->bindValue(":tipo_admin", $tipo_admin);
    $update->bindValue(":status_admin", $status_admin);
    $update->bindValue(":id_admin", $id_admin);
    //$update->bindValue(":data_cadastro_admin", $data_cadastro_admin);

    $update->execute();
    } catch(PDOException $e){
    echo "erro".$e->getMessage();
    }
    if($update){
       echo "Chamar função envia email" ;
    }

// header('location: ../listar_admin.php');

}
?>

















