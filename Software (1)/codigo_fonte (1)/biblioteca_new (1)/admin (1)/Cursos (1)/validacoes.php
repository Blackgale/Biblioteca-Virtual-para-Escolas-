<?php
function validarExtensao($nome_admin) {
    if (preg_match('/\d+/', $nome_admin) > 0) {
        session_start();
        $_SESSION['msg_resposta'] = "  O campo Nome não pode conter Numeros";
        return true;
    }
    return false;
}

/*function validarAdmin($rm_admin, $email_admin, $nome_admin, $senha_admin) {
    $rm_admin = filter_input(INPUT_POST, 'rm_admin', FILTER_SANITIZE_STRING);
    $nome_admin = filter_input(INPUT_POST, 'nome_admin', FILTER_SANITIZE_STRING);
    $email_admin = filter_input(INPUT_POST, 'email_admin', FILTER_SANITIZE_STRING);
    $senha_admin = filter_input(INPUT_POST, 'senha_admin', FILTER_SANITIZE_STRING);
    

    if (validarCamposVazioAdmin($rm_admin, $email_admin, $nome_admin, $senha_admin) ||
            validarNomeAdmin($nome_admin) ||
            validarRMAdmin($rm_admin) ||
            validarEmail($email_admin) ||
            validarUsuarioExistente($rm_admin) ||
            validarEmailExistente($email_admin)) {
        return true;
    }
    return false;
}

function validarCamposVazioAdmin($rm_admin, $email_admin, $nome_admin, $senha_admin) {
    if ($rm_admin == NULL || $email_admin == NULL || $nome_admin == NULL || $senha_admin == NULL) {
        session_start();
        $_SESSION['msg_resposta'] = "Existe campo(s) Vazio(s)";
        return true;
    }
    return false;
}

function validarNomeAdmin($nome_admin) {
    if (preg_match('/\d+/', $nome_admin) > 0) {
        session_start();
        $_SESSION['msg_resposta'] = "  O campo Nome não pode conter Numeros";
        return true;
    }
    return false;
}

function validarRMAdmin($rm_admin) {
    for ($i = 0; $i <= strlen($rm_admin) - 1; $i++) {
        if (!is_numeric($rm_admin[$i])) {
            session_start();
            $_SESSION['msg_resposta'] = "  O campo RM não pode conter Letras";
            return true;
        }
    }
    return false;
}

function validarEmail($email_admin) {
    if (!preg_match("/^([[:alnum:]_.-]){3,}@([[:lower:][:digit:]_.-]{3,})"
                    . "(.[[:lower:]]{2,3})(.[[:lower:]]{2})?$/", $email_admin)) {
        session_start();
        $_SESSION['msg_resposta'] = "E-mail Inválidoooooo!";
        return true;
    }
    return false;
}

function validarUsuarioExistente($rm_admin) {
    require_once '../config.php';
    $conn = conexao();
    //$id_curso = $_GET["id"];
    try {
        $select = $conn->prepare("SELECT * FROM tb_administrador WHERE rm_admin = '$rm_admin' ");
        $select->bindValue(":rm_admin", $rm_admin);
        $select->execute();
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    
    if ($select->rowCount() >= 1) {

        session_start();
        //session_destroy();
        $_SESSION['msg_resposta'] = "Já existe Usuario com RM ". $rm_admin;
        return true;
    }
    return false;
}

function validarEmailExistente($email_admin) {
    require_once '../config.php';
    $conn = conexao();
    //$id_curso = $_GET["id"];
    try {
        $select = $conn->prepare("SELECT  email_admin FROM tb_administrador WHERE email_admin = '$email_admin' ");
        $select->bindValue(":email_admin", $email_admin);
        $select->execute();
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    
    if ($select->rowCount() >= 1) {

        session_start();
        //session_destroy();
        $_SESSION['msg_resposta'] = "Já existe Usuario com Email ". $email_admin;
        return true;
    }
    return false;
}*/
