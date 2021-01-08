<?php
require 'loginAdmin.php';
if(!isset($_SESSION)) 
{ 
session_start(); 
}  
//não permite acesar a pagina principal pelo navegador
//senão existir a seção volta pela pagina de erro
if(!isset($_SESSION['usuario_admin_session'])AND !isset($_SESSION['senha_admin_session'])){
    //echo "error";
  header("Location: error.php");
}
$usuario_admin = $_SESSION['usuario_admin_session'];
$senha_admin = $_SESSION['senha_admin_session'];
$select = $conn->prepare("SELECT * FROM tb_administrador WHERE rm_admin= :usuario_admin AND senha_admin=:senha_admin ");
        $select->bindValue(":usuario_admin",$usuario_admin);
        $select->bindValue(":senha_admin",$senha_admin);
        $select->execute();

        $dados_admin = $select->fetchAll(PDO::FETCH_OBJ);
        foreach ($dados_admin as $dados){
            $id_admin = $dados->id_admin;
            $nome_admin = $dados->nome_admin;
            $curso_admin = $dados->curso_admin;
            $tipo_admin = $dados->tipo_admin;
            $status_admin = $dados->status_admin;
        }
        //print_r($dados);exit();
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

