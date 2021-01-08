<?php
include 'config.php';
if(!isset($_SESSION)){
		session_start(); 
		$msg_sucesso = $_SESSION["msg_sucesso"];
		$bg_msg =$_SESSION["bg_msg"];
		
	}
if(!isset($_SESSION['msg_sucesso'])AND !isset($_SESSION['bg_msg'])){
  header("location:error.php");
  exit;
} 
?>
