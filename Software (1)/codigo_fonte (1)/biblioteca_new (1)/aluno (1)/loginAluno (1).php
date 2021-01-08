<?php
//function logarAluno(){
    //session_start();
      //          session_destroy();
    require_once '../config.php';
    $conn = conexao();

    $usuario = filter_input(INPUT_POST, 'login', FILTER_SANITIZE_STRING);
    $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
    //echo $usuario;
    //echo "<br>".$senha;exit();
    if($usuario!= '' && $senha!=''){
        $select = $conn->prepare("SELECT * FROM tb_grupo WHERE login_representante_grupo= :usuario AND senha_representante_grupo=:senha ");
        $select->bindValue(":usuario",$usuario);
        $select->bindValue(":senha",$senha);
        $select->execute();

        $login = $select->fetch(PDO::FETCH_OBJ);
        //foreach ($login as $teste){
            //$id = $login->id_grupo;
            //$usuario = $login->login_representante_grupo;
            //$senha = $login->senha_representante_grupo;
        //}
        try{
            if($select->rowCount() == 1){
                
                
                //echo $login = $_SESSION["id_usuario_session"] = $id;
                //$login =$_SESSION["id_usuario_session"]     = $login->id_grupo;
                session_start();
                $_SESSION["usuario_session"]     = $usuario;
                $_SESSION["senha_session"]       = $senha;
                //print_r($_SESSION);//exit();
                
                header('Location: inicio_aluno.php');
                //session_destroy();
            }else{
                session_start();
                $_SESSION["login_session"] = $usuario;
            //Destruir seção
            //session_start();
            //$_SESSION["msg_secusso"] = "erro-login"; 

                $_SESSION["msg_sucesso"] = "Login e/ou Senha Incorretos";
                header("Location: resposta_erro.php");            }
        }catch(PDOException $e){
            print($e->getMessage());
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