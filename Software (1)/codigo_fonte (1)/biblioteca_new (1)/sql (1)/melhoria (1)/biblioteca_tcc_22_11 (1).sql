-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 22-Nov-2019 às 22:19
-- Versão do servidor: 10.1.34-MariaDB
-- PHP Version: 7.0.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `biblioteca_tcc`
--
CREATE DATABASE IF NOT EXISTS `biblioteca_tcc` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `biblioteca_tcc`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_administrador`
--

DROP TABLE IF EXISTS `tb_administrador`;
CREATE TABLE `tb_administrador` (
  `id_admin` int(11) NOT NULL,
  `rm_admin` int(11) NOT NULL,
  `nome_admin` varchar(255) NOT NULL,
  `email_admin` varchar(255) NOT NULL,
  `curso_admin` varchar(255) DEFAULT 'OUTROS',
  `senha_admin` varchar(100) NOT NULL,
  `telefone_admin` int(11) DEFAULT NULL,
  `tipo_admin` enum('MODERADOR','ORIENTADOR','MASTER') NOT NULL DEFAULT 'MASTER',
  `status_admin` enum('ATIVO','INATIVO','EXCLUIDO') NOT NULL DEFAULT 'ATIVO',
  `data_cadastro_admin` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_administrador`
--

INSERT INTO `tb_administrador` (`id_admin`, `rm_admin`, `nome_admin`, `email_admin`, `curso_admin`, `senha_admin`, `telefone_admin`, `tipo_admin`, `status_admin`, `data_cadastro_admin`) VALUES
(1, 12345, 'Admin1', 'testelima85@gmail.com', 'Administração', '321', 1199228833, 'ORIENTADOR', 'INATIVO', '2019-11-15'),
(2, 18516, 'Leandro Lima', 'leandrohlima85@gmail.com', 'Desenvolvimento de Sistemas', '123', 2147483647, 'MODERADOR', 'ATIVO', '2019-11-14'),
(3, 18516, 'Leandro Lima', 'leandrohlima85@gmail.com', 'Desenvolvimento de Sistemas', '123', 2147483647, 'MODERADOR', 'ATIVO', '2019-11-14'),
(4, 18520, 'Leandro Lima', 'teste@teste.com', '- Escolher Curso', '123', 2147483647, '', 'INATIVO', '2019-11-14'),
(5, 20200, 'Leandro Lima', 'teste@teste.com', '', '133', 2147483647, '', 'INATIVO', '2019-11-14'),
(6, 20200, 'Leandro Lima', 'teste@teste.com', '', '133', 2147483647, '', 'INATIVO', '2019-11-14'),
(7, 22443, 'Leandro Lima', 'leandrohlima85@gmail.com', '', '22', 1122334455, '', 'ATIVO', '2019-11-14'),
(8, 22443, 'Leandro Lima', 'leandrohlima85@gmail.com', '', '22', 1122334455, '', 'ATIVO', '2019-11-14'),
(9, 18515, 'Leandro Lima', 'leandrohlima85@gmail.com', '', '13', 2147483647, '', 'ATIVO', '2019-11-14'),
(10, 99111, 'Leandro', 'leandrilima@teste.com', 'Teste 2 teste', '876', 1199876543, 'ORIENTADOR', 'INATIVO', '2019-11-15'),
(11, 18516, 'Leandro Lima', 'leandrilima@teste.com', 'Teste ooosdakk', '321', 1199228833, '', 'ATIVO', '2019-11-22'),
(12, 18516, 'Leandro Lima', 'leandrilima@teste.com', 'Teste ooosdakk', '321', 1199228833, '', 'ATIVO', '2019-11-22'),
(13, 18515, 'Leandro Lima', 'leandrilima@teste.com', 'Teste Teste', '3434', 2147483647, '', 'ATIVO', '2019-11-22'),
(14, 18515, 'Leandro Lima', 'leandrilima@teste.com', 'Teste Teste', '1111', 2147483647, '', 'ATIVO', '2019-11-22'),
(15, 18514, 'teste edicao', 'leandrilima@teste.com', 'Teste 2 Ção  áéí´ã', '99', 2147483647, '', 'ATIVO', '2019-11-22'),
(16, 14332, 'Leandro Lima', 'testelima85@gmail.com', 'Teste Teste', '33', 2147483647, '', 'ATIVO', '2019-11-22');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_aluno`
--

DROP TABLE IF EXISTS `tb_aluno`;
CREATE TABLE `tb_aluno` (
  `id_aluno` int(11) NOT NULL,
  `rm_aluno` int(11) NOT NULL,
  `nome_aluno` varchar(100) NOT NULL,
  `email_aluno` varchar(255) NOT NULL,
  `telefone_aluno` int(11) DEFAULT NULL,
  `data_cadastro_aluno` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `tipo_aluno` enum('ALUNO','EX-ALUNO') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_aluno_grupo`
--

DROP TABLE IF EXISTS `tb_aluno_grupo`;
CREATE TABLE `tb_aluno_grupo` (
  `id_aluno` int(11) NOT NULL,
  `id_grupo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_contato`
--

DROP TABLE IF EXISTS `tb_contato`;
CREATE TABLE `tb_contato` (
  `id_contato` int(11) NOT NULL,
  `nome_contato` varchar(255) NOT NULL,
  `email_contato` varchar(255) NOT NULL,
  `assunto_contato` varchar(255) NOT NULL,
  `mensagem_contato` text NOT NULL,
  `telefone_contato` int(11) DEFAULT NULL,
  `data_contato` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_curso`
--

DROP TABLE IF EXISTS `tb_curso`;
CREATE TABLE `tb_curso` (
  `id_curso` int(11) NOT NULL,
  `titulo_curso` varchar(45) NOT NULL,
  `descricao_curso` text NOT NULL,
  `imagem_curso` varchar(100) NOT NULL,
  `status_curso` enum('ATIVO','INATIVO','EXCLUIDO') NOT NULL DEFAULT 'ATIVO'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_curso`
--

INSERT INTO `tb_curso` (`id_curso`, `titulo_curso`, `descricao_curso`, `imagem_curso`, `status_curso`) VALUES
(1, 'Teste Teste', 'Teste Teste Teste Teste Teste Teste Teste Teste Teste Teste Teste Teste ', 'teste_teste.png', 'ATIVO'),
(2, 'Teste 2 Ção  áéí´ã', 'Teste 2 Ção  áéí´ã Teste 1 Ção  áéí´ãTeste 1 Ção  áéí´ãTeste 1 Ção  áéí´ãTeste 1 Ção  áéí´ãTeste 1 Ção  áéí´ãTeste 1 Ção  áéí´ã', 'teste_2_cao_aei_a.png', 'ATIVO'),
(3, 'Teste ooosdakk', 'Teste ooosdakk             Teste ooosdakk             Teste ooosdakk             Teste ooosdakk', 'teste_ooosdakk.png', 'EXCLUIDO');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_grupo`
--

DROP TABLE IF EXISTS `tb_grupo`;
CREATE TABLE `tb_grupo` (
  `id_grupo` int(11) NOT NULL,
  `login_representante_grupo` varchar(255) NOT NULL,
  `email_representante_grupo` varchar(255) NOT NULL,
  `senha_representante_grupo` varchar(100) NOT NULL,
  `status_representante_grupo` enum('ATIVO','INATIVO') NOT NULL DEFAULT 'ATIVO',
  `curso_representante_grupo` varchar(255) DEFAULT NULL,
  `data_cadastro_representante_grupo` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_grupo`
--

INSERT INTO `tb_grupo` (`id_grupo`, `login_representante_grupo`, `email_representante_grupo`, `senha_representante_grupo`, `status_representante_grupo`, `curso_representante_grupo`, `data_cadastro_representante_grupo`) VALUES
(1, '033', 'teste@email', '123', 'ATIVO', 'Administração', '2019-11-16'),
(2, 'leandro10', 'teste@teste', '123', 'INATIVO', 'Desenvolvimento de Sistemas1', '2019-11-16'),
(3, '18515', 'leandro@teste', '123', 'ATIVO', 'Recursos Humanos', '2019-11-16');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_tcc`
--

DROP TABLE IF EXISTS `tb_tcc`;
CREATE TABLE `tb_tcc` (
  `id_tcc` int(11) NOT NULL,
  `nome_orientador_tcc` varchar(255) NOT NULL,
  `titulo_tcc` varchar(255) NOT NULL,
  `resumo_tcc` text NOT NULL,
  `ano_formacao_tcc` year(4) NOT NULL,
  `semestre_tcc` enum('1','2') NOT NULL,
  `data_upload_tcc` date NOT NULL,
  `arquivo_tcc` varchar(255) NOT NULL,
  `executavel_tcc` varchar(255) DEFAULT NULL,
  `palavra_chave_tcc` varchar(255) NOT NULL,
  `status_tcc` enum('APROVADO','PENDENTE','REPROVADO') NOT NULL DEFAULT 'PENDENTE',
  `id_grupo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_tcc`
--

INSERT INTO `tb_tcc` (`id_tcc`, `nome_orientador_tcc`, `titulo_tcc`, `resumo_tcc`, `ano_formacao_tcc`, `semestre_tcc`, `data_upload_tcc`, `arquivo_tcc`, `executavel_tcc`, `palavra_chave_tcc`, `status_tcc`, `id_grupo`) VALUES
(1, 'Sandro Alves', 'biblioteca tcc', 'teste', 2019, '2', '2019-11-19', '../_arquivos_tcc/biblioteca_tcc.docx', NULL, 'palavra1 , palavra1', 'PENDENTE', 3),
(2, 'Orientador 1', 'Teste 2', 'teste teste Teste teste teste Teste teste teste Teste teste teste Teste teste teste Teste teste teste Teste teste teste Teste teste teste Teste teste teste Teste teste teste Teste teste teste Teste teste teste Teste teste teste Teste teste teste Teste teste teste Teste teste teste Teste teste teste Teste teste teste Teste teste teste Teste teste teste Teste teste teste Teste teste teste Teste teste teste Teste teste teste Teste teste teste Teste teste teste Teste ', 2019, '2', '2019-11-19', '../_arquivos_tcc/teste_2.JPG', NULL, 'palavra1 , teste 1 , teste 1', 'PENDENTE', 3),
(3, 'Leandro', 'TCC 2', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 2019, '2', '2019-11-19', '../_arquivos_tcc/tcc_2.pdf', NULL, 'palavra1 , palavra2 , palavra3 , palavra4 , palavra5 , palavra6', 'PENDENTE', 3),
(4, 'Leandro', 'qualque coisa', 'Resumo Resumo Resumo Resumo Resumo Resumo Resumo Resumo Resumo Resumo Resumo Resumo Resumo Resumo Resumo Resumo Resumo ', 2019, '1', '2019-11-19', '../_arquivos_tcc/qualque_coisa.pdf', NULL, 'teste', 'PENDENTE', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_administrador`
--
ALTER TABLE `tb_administrador`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tb_aluno`
--
ALTER TABLE `tb_aluno`
  ADD PRIMARY KEY (`id_aluno`);

--
-- Indexes for table `tb_aluno_grupo`
--
ALTER TABLE `tb_aluno_grupo`
  ADD PRIMARY KEY (`id_grupo`);

--
-- Indexes for table `tb_contato`
--
ALTER TABLE `tb_contato`
  ADD PRIMARY KEY (`id_contato`);

--
-- Indexes for table `tb_curso`
--
ALTER TABLE `tb_curso`
  ADD PRIMARY KEY (`id_curso`);

--
-- Indexes for table `tb_grupo`
--
ALTER TABLE `tb_grupo`
  ADD PRIMARY KEY (`id_grupo`);

--
-- Indexes for table `tb_tcc`
--
ALTER TABLE `tb_tcc`
  ADD PRIMARY KEY (`id_tcc`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_administrador`
--
ALTER TABLE `tb_administrador`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tb_aluno`
--
ALTER TABLE `tb_aluno`
  MODIFY `id_aluno` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_contato`
--
ALTER TABLE `tb_contato`
  MODIFY `id_contato` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_curso`
--
ALTER TABLE `tb_curso`
  MODIFY `id_curso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_grupo`
--
ALTER TABLE `tb_grupo`
  MODIFY `id_grupo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_tcc`
--
ALTER TABLE `tb_tcc`
  MODIFY `id_tcc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
