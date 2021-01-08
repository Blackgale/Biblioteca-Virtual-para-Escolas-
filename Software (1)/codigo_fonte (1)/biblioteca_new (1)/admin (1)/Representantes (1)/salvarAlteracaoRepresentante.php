<?php

require_once '../config.php';
$conn = conexao();

$id_grupo = filter_input(INPUT_POST, 'id_grupo', FILTER_SANITIZE_STRING);
$nome_representante_grupo = filter_input(INPUT_POST, 'nome_representante_grupo', FILTER_SANITIZE_STRING);
$login_representante_grupo = filter_input(INPUT_POST, 'login_representante_grupo', FILTER_SANITIZE_STRING);
$email_representante_grupo = filter_input(INPUT_POST, 'email_representante_grupo', FILTER_SANITIZE_STRING);
$curso_representante_grupo = filter_input(INPUT_POST, 'curso_representante_grupo', FILTER_SANITIZE_STRING);
$senha_representante_grupo = filter_input(INPUT_POST, 'senha_representante_grupo', FILTER_SANITIZE_STRING);
$status_representante_grupo = filter_input(INPUT_POST, 'status_representante_grupo', FILTER_SANITIZE_STRING);


require 'validacoes.php';

if (validarRepresentantesEdicao($id_grupo, $nome_representante_grupo, $login_representante_grupo, $email_representante_grupo, $senha_representante_grupo, $curso_representante_grupo, $status_representante_grupo)) {
    //print_r(validarRmAdmin());exit();
    session_start();
    header("Location: ../resposta.php");
}else{
    
    try{
        $update = $conn->prepare("UPDATE tb_grupo SET nome_representante_grupo = :nome_representante_grupo, login_representante_grupo = :login_representante_grupo, email_representante_grupo = :email_representante_grupo, "
                . "curso_representante_grupo = :curso_representante_grupo, status_representante_grupo = :status_representante_grupo, data_cadastro_representante_grupo = NOW() WHERE id_grupo = :id_grupo");
        $update->bindValue(":nome_representante_grupo", $nome_representante_grupo);
        $update->bindValue(":id_grupo", $id_grupo);
        $update->bindValue(":login_representante_grupo", $login_representante_grupo);
        $update->bindValue(":email_representante_grupo", $email_representante_grupo);
        $update->bindValue(":curso_representante_grupo", $curso_representante_grupo);
        $update->bindValue(":status_representante_grupo", $status_representante_grupo);
        $update->execute();
    } catch (PDOException $e) {
        echo "erro" . $e->getMessage();
    }
    /* echo "<br>Inserido execute com sucesso!<br>";
      echo "login = " . $login_representante_grupo . "<br>";
      echo "email = " . $email_representante_grupo . "<br>";
      echo "curso = " . $curso_representante_grupo . "<br>";
      echo "status = " . $status_representante_grupo . "<br>";
      exit(); */
    if($update){
        echo "Chamar funcao envia email";
    }
} 
?>





