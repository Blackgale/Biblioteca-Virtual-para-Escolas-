<?php
//function logarAluno(){
    //session_start();
      //          session_destroy();
    require_once 'config.php';
    $conn = conexao();

    $rm_admin = filter_input(INPUT_POST, 'rm_admin', FILTER_SANITIZE_STRING);
    $senha_admin = filter_input(INPUT_POST, 'senha_admin', FILTER_SANITIZE_STRING);
    
    if($rm_admin!= '' && $senha_admin!=''){
        $select = $conn->prepare("SELECT * FROM tb_administrador WHERE rm_admin= :rm_admin AND senha_admin=:senha_admin ");
        $select->bindValue(":rm_admin",$rm_admin);
        $select->bindValue(":senha_admin",$senha_admin);
        $select->execute();

        $login = $select->fetch(PDO::FETCH_OBJ);
        $rm = $login->tipo_admin;
        $senha = $login->senha_admin;
        $tipo = $login->tipo_admin;//exit();
        $nome = $login->nome_admin;
        if($select->rowCount() == 1){
                
            session_start();
            //session_destroy();
            $_SESSION["usuario_admin_session"]     = $rm_admin;
            $_SESSION["senha_admin_session"]       = $senha_admin;
            
              //print_r($_SESSION["nome_admin_session"]);exit();
              //print_r($_SESSION);exit();
            //print_r($_SESSION);//exit();
                
            header('Location: inicio_admin.php');
                //session_destroy();
        }else{
            session_start();
            $_SESSION["msg_sucesso"] = "Login e/ou Senha Incorretos";
            print_r($_SESSION["msg_sucesso"]);exit();
            header("Location: ../resposta.php");            
        }
        
    }//else{
      //  echo "Vazio";
    //}
    
    
    //print_r($_SESSION());exit();
    //exit();
    //$login = $select->fetchAll(PDO::FETCH_OBJ);
    //return $login;
    
    //$cont = $logar->rowCount($login);
    //echo $cont;
//}
//print_r($_SESSION);exit();
//print_r(logarAluno()); 
//header("Location: inicio_aluno.php");
  //se existir um login e senha com os mesmo dados vai criar uma acesso
  //O if vai contar se existe um registro
  
    /*$cont = mysqli_num_rows($logar);
    if($cont == 1){
      session_start();
      $_SESSION["login_session"] = $login;
      $_SESSION["senha_session"] = $senha;
  	  $_SESSION["nivel_session"] = $nivel;

      
      header("Location: usuario.php");
      echo $_SESSION["login_session"]."<br>";
      echo $_SESSION["senha_session"]."<br>";
      echo $_SESSION["nivel_session"]."<br>";
    //vai liberar o acesso á pagina principal
    //if($_SESSION['nivel_acesso_session'] == "1"){
		//header("Location: pagina_principal.php");
    //}
	
	//elseif($_SESSION['nivel_acesso_session'] == "2"){
     //  header("Location: pagina_principal_adm.php");
   // }
	
    }else{
      session_start();
      $_SESSION["login_session"] = $login;
  //Destruir seção
  //session_start();
  //$_SESSION["msg_secusso"] = "erro-login"; 
      
      $_SESSION["msg_sucesso"] = "Login e/ou Senha Incorretos";
      $_SESSION["bg_msg"] = "msg-bg-erro-index";
                              header("Location: resposta.php");
     }
}*/
?>