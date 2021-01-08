<?php
function conexao(){
    try{
       $conn = new PDO("mysql:host=localhost;dbname=biblioteca_tcc;charset=utf8", "root", "",
                        array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
       $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       //echo "okkkkkkkkkkkk";
  //     $url_atual = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
//echo $url_atual;
    }catch(PDOException $e){
        echo  "Erro: ".$e->getMessage();
    }
return $conn;}  
?>
