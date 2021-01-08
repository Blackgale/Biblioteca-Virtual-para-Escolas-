<?php

function filtroMenu(){
	
	require 'listarDadosAdmin.php';
	
	  if($tipo_admin == 'MODERADOR'){
	  
	  echo"
	  
	  <li class='nav-item'>
        <a class='nav-link' href='inicio_admin.php'>
          <i class='fas fa-fw fa-tachometer-alt'></i>
          <span>Início</span></a>
      </li>
	  
      <li class='nav-item'>
        <a class='nav-link' href='gerenciar_cursos.php'>
          <i class='fas fa-fw fa-table'></i>
          <span>Gerenciar Cursos</span></a>
      </li>
	  <li class='nav-item'>
              <a class='nav-link' href='cadastrar_cursos.php'>
          <i class='fas fa-fw fa-table'></i>
          <span>Cadastrar Curso</span></a>
      </li>

      <li class='nav-item'>
        <a class='nav-link' href='cadastro_Novo_Admin.php'>
          <i class='fas fa-fw fa-table'></i>
          <span>Cadastrar Administrador</span></a>
      </li>
	  
	  <li class='nav-item'>
        <a class='nav-link' href='listar_contatos.php'>
          <i class='fas fa-fw fa-table'></i>
          <span>Exibir Mensagens</span></a>
      </li>
	  
	  <li class='nav-item'>
              <a class='nav-link' href='../funcoes/encerraSessao.php'>
          <i class='fas fa-fw fa-cog'></i>
          <span>Logout</span></a>
      </li>
	  
	  ";
	  
	}else if($tipo_admin == 'MASTER'){
	
	echo"
	
		  <li class='nav-item'>
        <a class='nav-link' href='inicio_admin.php'>
          <i class='fas fa-fw fa-tachometer-alt'></i>
          <span>Início</span></a>
      </li>
	  
      <li class='nav-item'>
        <a class='nav-link' href='gerenciar_cursos.php'>
          <i class='fas fa-fw fa-table'></i>
          <span>Gerenciar Cursos</span></a>
      </li>
	  <li class='nav-item'>
              <a class='nav-link' href='cadastrar_cursos.php'>
          <i class='fas fa-fw fa-table'></i>
          <span>Cadastrar Curso</span></a>
      </li>

      <li class='nav-item'>
        <a class='nav-link' href='cadastro_Novo_Admin.php'>
          <i class='fas fa-fw fa-table'></i>
          <span>Cadastrar Administrador</span></a>
      </li>
	  
	  <li class='nav-item'>
        <a class='nav-link' href='listar_contatos.php'>
          <i class='fas fa-fw fa-table'></i>
          <span>Exibir Mensagens</span></a>
      </li>
	  
	  <li class='nav-item'>
        <a class='nav-link' href='pedidos.php'>
          <i class='fas fa-fw fa-table'></i>
          <span>Pedidos de TCC</span></a>
      </li>
	  
	   <li class='nav-item'>
        <a class='nav-link' href='historico.php'>
          <i class='fas fa-fw fa-table'></i>
          <span>Histórico de TCC</span></a>
      </li>
	  
	  <li class='nav-item'>
        <a class='nav-link' href='cad_representante.php'>
          <i class='fas fa-fw fa-chart-area'></i>
          <span>Cadastrar Aluno</span></a>
      </li>
	  
	  <li class='nav-item'>
              <a class='nav-link' href='../funcoes/encerraSessao.php'>
          <i class='fas fa-fw fa-cog'></i>
          <span>Logout</span></a>
      </li>
	  
	";
	
	}else if($tipo_admin == 'ORIENTADOR'){
	
	echo"
	
		  <li class='nav-item'>
        <a class='nav-link' href='pedidos.php'>
          <i class='fas fa-fw fa-table'></i>
          <span>Pedidos de TCC</span></a>
      </li>
	  
	   <li class='nav-item'>
        <a class='nav-link' href='historico.php'>
          <i class='fas fa-fw fa-table'></i>
          <span>Histórico de TCC</span></a>
      </li>
	  
	  <li class='nav-item'>
        <a class='nav-link' href='cad_representante.php'>
          <i class='fas fa-fw fa-chart-area'></i>
          <span>Cadastrar Aluno</span></a>
      </li>
	  
	  <li class='nav-item'>
              <a class='nav-link' href='../funcoes/encerraSessao.php'>
          <i class='fas fa-fw fa-cog'></i>
          <span>Logout</span></a>
      </li>
	
	";
	
	}
}
	  
?>