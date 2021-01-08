<?php
require 'loginAluno.php';
if(!isset($_SESSION)) 
{ 
session_start(); 
}  
//não permite acesar a pagina principal pelo navegador
//senão existir a seção volta pela pagina de erro
if(!isset($_SESSION['usuario_session'])AND !isset($_SESSION['senha_session'])){
    //echo "error";
  header("Location: error.php");
}

$usuario = $_SESSION['usuario_session'];
$senha = $_SESSION['senha_session'];
$select = $conn->prepare("SELECT * FROM tb_grupo WHERE login_representante_grupo= :usuario AND senha_representante_grupo=:senha ");
        $select->bindValue(":usuario",$usuario);
        $select->bindValue(":senha",$senha);
        $select->execute();

        $dados_grupo = $select->fetchAll(PDO::FETCH_OBJ);
        foreach ($dados_grupo as $dados){
            $id = $dados->id_grupo;
            $nome = $dados->nome_representante_grupo;
            $usuario = $dados->login_representante_grupo;
            $email = $dados->email_representante_grupo;
            $curso = $dados->curso_representante_grupo;
            $status = $dados->status_representante_grupo;
        }
        /*echo "<br>idgrupo = ".$id."<br>";
        echo "email = ".$email."<br>";
        echo "curso = " .$curso."<br>";
        echo "status = ".$status."<br>";*/
/*$dados = mysqli_query($sql,"SELECT * FROM pw2aluno WHERE login = '$_SESSION[login_session]' ");
  while($arrDados = mysqli_fetch_array($dados)) {
    $id = $arrDados['id'];
    $rm = $arrDados['rm'];
    $nome = $arrDados['nome'];
    $login = $arrDados['login'];
    $senha = $arrDados['senha'];
    $email = $arrDados['email'];
    $foto= $arrDados['foto'];
    $nivel= $arrDados['nivel'];
}*/
//print_r($_SESSION);

