<?php

function validarEmail($email){
    if(!preg_match("/^([[:alnum:]_.-]){3,}@([[:lower:][:digit:]_.-]{3,})"
                 ."(.[[:lower:]]{2,3})(.[[:lower:]]{2})?$/", $email)) {
        $_SESSION['msg_resposta'] = "E-mail Inválidoooooo!";
        return true;
    }
    return false;
}
