<?php

//Valida dados do usuario no cadastro
function validarRepresentantes($nome_representante_grupo, $login_representante_grupo, $email_representante_grupo, $senha_representante_grupo, $curso_representante_grupo, $status_representante_grupo) {
    $login_representante_grupo = filter_input(INPUT_POST, 'login_representante_grupo', FILTER_SANITIZE_STRING);
    $email_representante_grupo = filter_input(INPUT_POST, 'email_representante_grupo', FILTER_SANITIZE_STRING);
    $senha_representante_grupo = filter_input(INPUT_POST, 'senha_representante_grupo', FILTER_SANITIZE_STRING);
    $nome_representante_grupo = filter_input(INPUT_POST, 'nome_representante_grupo', FILTER_SANITIZE_STRING);
    $curso_representante_grupo = filter_input(INPUT_POST, 'curso_representante_grupo', FILTER_SANITIZE_STRING);
    $status_representante_grupo = filter_input(INPUT_POST, 'status_representante_grupo', FILTER_SANITIZE_STRING);


    if (validarCamposVazioRepresentantes($nome_representante_grupo, $login_representante_grupo, $email_representante_grupo, $senha_representante_grupo, $curso_representante_grupo) ||
            validarNomeRepresentante($nome_representante_grupo) ||
            validarRm($login_representante_grupo) ||
            validarEmail($email_representante_grupo) ||
            validarRepresentanteExistente($login_representante_grupo, $status_representante_grupo) ||
            validarEmailExistente($email_representante_grupo, $status_representante_grupo)) {
        return true;
    }
    return false;
//var_dump($rm_admin);exit();
    /* if (validarRepresentanteExistente($login_representante_grupo, $status_representante_grupo) ) {
      //print_r(validarRmAdmin());exit();
      return true;
      }
      return false; */
}

//valida dados do usuario na edição
function validarRepresentantesEdicao($id_grupo, $nome_representante_grupo, $login_representante_grupo, $email_representante_grupo, $senha_representante_grupo, $curso_representante_grupo, $status_representante_grupo) {
    $id_grupo = filter_input(INPUT_POST, 'id_grupo', FILTER_SANITIZE_STRING);
    $nome_representante_grupo = filter_input(INPUT_POST, 'nome_representante_grupo', FILTER_SANITIZE_STRING);
    $login_representante_grupo = filter_input(INPUT_POST, 'login_representante_grupo', FILTER_SANITIZE_STRING);
    $email_representante_grupo = filter_input(INPUT_POST, 'email_representante_grupo', FILTER_SANITIZE_STRING);
    $senha_representante_grupo = filter_input(INPUT_POST, 'senha_representante_grupo', FILTER_SANITIZE_STRING);
    $status_representante_grupo = filter_input(INPUT_POST, 'status_representante_grupo', FILTER_SANITIZE_STRING);
    if (validarCamposVazioRepresentantes($nome_representante_grupo, $login_representante_grupo, $email_representante_grupo, $senha_representante_grupo, $curso_representante_grupo) ||
        validarNomeRepresentante($nome_representante_grupo) ||
        validarRm($login_representante_grupo) ||
        validarEmail($email_representante_grupo) ||
        validarUsuarioExistenteEdicao($id_grupo, $login_representante_grupo, $status_representante_grupo) ||
        validarEmailExistenteEdicao($id_grupo, $email_representante_grupo, $status_representante_grupo)) {
        return true;
    }
    return false;
}

function validarCamposVazioRepresentantes($nome_representante_grupo, $login_representante_grupo, $email_representante_grupo, $senha_representante_grupo, $curso_representante_grupo) {
    if ($nome_representante_grupo == NULL ||
            $login_representante_grupo == NULL ||
            $email_representante_grupo == NULL ||
            $senha_representante_grupo == NULL ||
            $curso_representante_grupo == NULL) {
        session_start();
        $_SESSION['msg_resposta'] = "Existe campo(s) Vazio(s)";
        return true;
    }
    return false;
}

function validarNomeRepresentante($nome_representante_grupo) {
    if (preg_match('/\d+/', $nome_representante_grupo) > 0) {
        session_start();
        $_SESSION['msg_resposta'] = "  O campo Nome não pode conter Numeros";
        return true;
    }
    return false;
}

function validarRm($login_representante_grupo) {
    for ($i = 0; $i <= strlen($login_representante_grupo) - 1; $i++) {
        if (!is_numeric($login_representante_grupo[$i])) {
            session_start();
            $_SESSION['msg_resposta'] = "  O campo RM não pode conter Letras";
            return true;
        }
    }
    return false;
}

function validarEmail($email_representante_grupo) {
    if (!preg_match("/^([[:alnum:]_.-]){3,}@([[:lower:][:digit:]_.-]{3,})"
                    . "(.[[:lower:]]{2,3})(.[[:lower:]]{2})?$/", $email_representante_grupo)) {
        session_start();
        $_SESSION['msg_resposta'] = "E-mail Inválidoooooo!";
        return true;
    }
    return false;
}

function validarRepresentanteExistente($login_representante_grupo, $status_representante_grupo) {
    require_once '../config.php';
    $conn = conexao();
//$id_curso = $_GET["id"];
    try {
        $select = $conn->prepare("SELECT * FROM tb_grupo WHERE login_representante_grupo = '$login_representante_grupo' ");
        $select->bindValue(":login_representante_grupo", $login_representante_grupo);
        $select->bindValue(":status_representante_grupo", $status_representante_grupo);
        $select->execute();
    } catch (PDOException $e) {
        echo $e->getMessage();
    }

    $rm_unico = $select->fetchAll(PDO::FETCH_OBJ);
    foreach ($rm_unico as $admin) {
        $admin->login_representante_grupo;
        $admin->status_representante_grupo;
        if (count($admin->login_representante_grupo) >= 1 && $admin->status_representante_grupo == "ATIVO") {
            session_start();
//session_destroy();
            $_SESSION['msg_resposta'] = "Já existe Usuario com RM " . $login_representante_grupo;
            return true;
        }
    }
    return false;
}

function validarEmailExistente($email_representante_grupo, $status_representante_grupo) {
    require_once '../config.php';
    $conn = conexao();
//$id_curso = $_GET["id"];
    try {
        $select = $conn->prepare("SELECT  * FROM tb_grupo WHERE email_representante_grupo = '$email_representante_grupo' ");
        $select->bindValue(":email_representante_grupo", $email_representante_grupo);
        $select->bindValue(":status_representante_grupo", $status_representante_grupo);
        $select->execute();



//$status =$teste->status_representante_grupo;
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $email_unico = $select->fetchAll(PDO::FETCH_OBJ);
    foreach ($email_unico as $representante) {
        $representante->email_representante_grupo;
        $representante->status_representante_grupo;

        if (count($representante->email_representante_grupo) >= 1 && $representante->status_representante_grupo == "ATIVO") {
            session_start();
//session_destroy();
            $_SESSION['msg_resposta'] = "Já existe Usuario com Email " . $email_representante_grupo;
            return true;
        }
    }
    return false;
}

function validarUsuarioExistenteEdicao($id_grupo, $login_representante_grupo, $status_representante_grupo) {
    require_once '../config.php';
    $conn = conexao();
    try {
        $select = $conn->prepare("SELECT * FROM tb_grupo WHERE login_representante_grupo = '$login_representante_grupo' ");
        $select->bindValue(":id_grupo", $id_grupo);
        $select->bindValue(":login_representante_grupo", $login_representante_grupo);
        $select->bindValue(":status_representante_grupo", $status_representante_grupo);
        $select->execute();
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $rm_unico = $select->fetchAll(PDO::FETCH_OBJ);
    foreach ($rm_unico as $representante) {
        $representante->id_grupo;
        $representante->login_representante_grupo;
        $representante->status_representante_grupo;
        if ((count($representante->login_representante_grupo) >= 1 && $representante->status_representante_grupo == "ATIVO") && $representante->id_grupo != $id_grupo) {
            session_start();
//session_destroy();
            $_SESSION['msg_resposta'] = "Já existe Usuario com RM " . $login_representante_grupo;
            return true;
        }
    }
    return false;
}

function validarEmailExistenteEdicao($id_grupo, $email_representante_grupo, $status_representante_grupo) {
    require_once '../config.php';
    $conn = conexao();
//$id_curso = $_GET["id"];
    try {
        $select = $conn->prepare("SELECT * FROM tb_grupo WHERE email_representante_grupo = '$email_representante_grupo' ");
        $select->bindValue(":id_grupo", $id_grupo);
        $select->bindValue(":email_representante_grupo", $email_representante_grupo);
        $select->bindValue(":status_representante_grupo", $status_representante_grupo);
        $select->execute();
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $email_unico = $select->fetchAll(PDO::FETCH_OBJ);
    foreach ($email_unico as $representante) {
        $representante->id_grupo;
        $representante->email_representante_grupo;
        $representante->status_representante_grupo;
        if ((count($representante->email_representante_grupo) >= 1 && $representante->status_representante_grupo == "ATIVO") && $representante->id_grupo != $id_grupo) {
            session_start();
//session_destroy();
            $_SESSION['msg_resposta'] = "Já existe Usuario com RM " . $email_representante_grupo;
            return true;
        }
    }
    return false;
}
