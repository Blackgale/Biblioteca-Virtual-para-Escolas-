-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 19-Nov-2019 às 21:31
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
CREATE TABLE IF NOT EXISTS `tb_administrador` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `rm_admin` int(11) NOT NULL,
  `nome_admin` varchar(255) NOT NULL,
  `email_admin` varchar(255) NOT NULL,
  `curso_admin` varchar(255) DEFAULT 'OUTROS',
  `senha_admin` varchar(100) NOT NULL,
  `telefone_admin` int(11) DEFAULT NULL,
  `tipo_admin` enum('MODERADOR','ORIENTADOR','MASTER') NOT NULL DEFAULT 'MASTER',
  `status_admin` enum('ATIVO','INATIVO') NOT NULL DEFAULT 'ATIVO',
  `data_cadastro_admin` date DEFAULT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

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
(10, 99111, 'Leandro', 'leandrilima@teste.com', 'Teste 2 teste', '876', 1199876543, 'ORIENTADOR', 'INATIVO', '2019-11-15');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_aluno`
--

DROP TABLE IF EXISTS `tb_aluno`;
CREATE TABLE IF NOT EXISTS `tb_aluno` (
  `id_aluno` int(11) NOT NULL AUTO_INCREMENT,
  `rm_aluno` int(11) NOT NULL,
  `nome_aluno` varchar(100) NOT NULL,
  `email_aluno` varchar(255) NOT NULL,
  `telefone_aluno` int(11) DEFAULT NULL,
  `data_cadastro_aluno` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `tipo_aluno` enum('ALUNO','EX-ALUNO') NOT NULL,
  PRIMARY KEY (`id_aluno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_aluno_grupo`
--

DROP TABLE IF EXISTS `tb_aluno_grupo`;
CREATE TABLE IF NOT EXISTS `tb_aluno_grupo` (
  `id_aluno` int(11) NOT NULL,
  `id_grupo` int(11) NOT NULL,
  PRIMARY KEY (`id_grupo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_contato`
--

DROP TABLE IF EXISTS `tb_contato`;
CREATE TABLE IF NOT EXISTS `tb_contato` (
  `id_contato` int(11) NOT NULL AUTO_INCREMENT,
  `nome_contato` varchar(255) NOT NULL,
  `email_contato` varchar(255) NOT NULL,
  `assunto_contato` varchar(255) NOT NULL,
  `mensagem_contato` text NOT NULL,
  `telefone_contato` int(11) DEFAULT NULL,
  `data_contato` date NOT NULL,
  PRIMARY KEY (`id_contato`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_curso`
--

DROP TABLE IF EXISTS `tb_curso`;
CREATE TABLE IF NOT EXISTS `tb_curso` (
  `id_curso` int(11) NOT NULL AUTO_INCREMENT,
  `titulo_curso` varchar(45) NOT NULL,
  `descricao_curso` text NOT NULL,
  `imagem_curso` varchar(100) NOT NULL,
  `status_curso` enum('ATIVO','INATIVO') NOT NULL DEFAULT 'ATIVO',
  PRIMARY KEY (`id_curso`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_curso`
--

INSERT INTO `tb_curso` (`id_curso`, `titulo_curso`, `descricao_curso`, `imagem_curso`, `status_curso`) VALUES
(1, 'Desenvolvimento de Sistemas', '1Desenvolvimento de Sistemas Lorem Ipsum é simplesmente um texto fictício da indústria tipográfica e de impressão. Lorem Ipsum é o texto fictício padrão do setor desde os anos 1500, quando uma impressora desconhecida pegou uma galera do tipo e a mexeu para fazer um livro de amostras do tipo. Ele sobreviveu não apenas cinco séculos, mas também o salto para a composição eletrônica, permanecendo essencialmente inalterado. Foi popularizado na década de 1960 com o lançamento de folhas de Letraset contendo passagens de Lorem Ipsum e, mais recentemente, com software de editoração eletrô', '../_img_cursos/desenvolvimento_de_sistemas.png', 'ATIVO'),
(2, 'Recursos Humanos', 'Recursos Humanos É um fato estabelecido há muito tempo que um leitor se distrai com o conteúdo legível de uma página ao examinar seu layout. O objetivo de usar Lorem Ipsum é que ele tem uma distribuição de letras mais ou menos normal, em vez de usar &#39;Conteúdo aqui, conteúdo aqui&#39;, fazendo com que pareça um inglês legível. Muitos pacotes de editoração eletrônica e editores de páginas da web agora usam Lorem Ipsum como texto padrão do modelo, e uma pesquisa por &#39;lorem ipsum&#39; descobrirá muitos sites ainda na infância. Várias versões evoluíram ao longo dos anos, às vezes por acidente, às vezes de propósito (humor injetado e similares).', '../_img_cursos/recursos_humanos.png', 'ATIVO'),
(3, 'Segurança do Trabalho', 'Segurança do Trabalho Existem muitas variações de passagens disponíveis de Lorem Ipsum, mas a maioria sofreu alterações de alguma forma, pelo humor injetado ou por palavras aleatórias que não parecem nem um pouco críveis. Se você vai usar uma passagem de Lorem Ipsum, precisa ter certeza de que não há nada embaraçoso escondido no meio do texto. Todos os geradores Lorem Ipsum na Internet tendem a repetir blocos predefinidos conforme necessário, tornando este o primeiro gerador verdadeiro na Internet. Ele usa um dicionário de mais de 200 palavras latinas, combinado com algumas estruturas de frases modelo, para gerar Lorem Ipsum, que parece razoável. O Lorem Ipsum gerado é, portanto, sempre livre de repetição, humor injetado ou palavras não características etc.', '../_img_cursos/seguranca_do_trabalho.png', 'ATIVO'),
(4, 'Administração', 'Administração', '../_img_cursos/administracao.png', 'INATIVO'),
(5, 'Teste 2 teste', 'É um fato estabelecido há muito tempo que um leitor se distrai com o conteúdo legível de uma página ao examinar seu layout. O objetivo de usar Lorem Ipsum é que ele tem uma distribuição de letras mais ou menos normal, em vez de usar &#39;Conteúdo aqui, conteúdo aqui&#39;, fazendo com que pareça um inglês legível. Muitos pacotes de editoração eletrônica e editores de páginas da web agora usam Lorem Ipsum como texto padrão do modelo, e uma pesquisa por &#39;lorem ipsum&#39; descobrirá muitos sites ainda na infância. Várias versões evoluíram ao longo dos anos, às vezes por acidente, às vezes de propósito (humor injetado e similares).', '../_img_cursos/teste_2_teste.png', 'ATIVO');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_grupo`
--

DROP TABLE IF EXISTS `tb_grupo`;
CREATE TABLE IF NOT EXISTS `tb_grupo` (
  `id_grupo` int(11) NOT NULL AUTO_INCREMENT,
  `login_representante_grupo` varchar(255) NOT NULL,
  `email_representante_grupo` varchar(255) NOT NULL,
  `senha_representante_grupo` varchar(100) NOT NULL,
  `status_representante_grupo` enum('ATIVO','INATIVO') NOT NULL DEFAULT 'ATIVO',
  `curso_representante_grupo` varchar(255) DEFAULT NULL,
  `data_cadastro_representante_grupo` date NOT NULL,
  PRIMARY KEY (`id_grupo`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

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
CREATE TABLE IF NOT EXISTS `tb_tcc` (
  `id_tcc` int(11) NOT NULL AUTO_INCREMENT,
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
  `id_grupo` int(11) NOT NULL,
  PRIMARY KEY (`id_tcc`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_tcc`
--

INSERT INTO `tb_tcc` (`id_tcc`, `nome_orientador_tcc`, `titulo_tcc`, `resumo_tcc`, `ano_formacao_tcc`, `semestre_tcc`, `data_upload_tcc`, `arquivo_tcc`, `executavel_tcc`, `palavra_chave_tcc`, `status_tcc`, `id_grupo`) VALUES
(1, 'Sandro Alves', 'biblioteca tcc', 'teste', 2019, '2', '2019-11-19', '../_arquivos_tcc/biblioteca_tcc.docx', NULL, 'palavra1 , palavra1', 'PENDENTE', 3),
(2, 'Orientador 1', 'Teste 2', 'teste teste Teste teste teste Teste teste teste Teste teste teste Teste teste teste Teste teste teste Teste teste teste Teste teste teste Teste teste teste Teste teste teste Teste teste teste Teste teste teste Teste teste teste Teste teste teste Teste teste teste Teste teste teste Teste teste teste Teste teste teste Teste teste teste Teste teste teste Teste teste teste Teste teste teste Teste teste teste Teste teste teste Teste teste teste Teste teste teste Teste ', 2019, '2', '2019-11-19', '../_arquivos_tcc/teste_2.JPG', NULL, 'palavra1 , teste 1 , teste 1', 'PENDENTE', 3),
(3, 'Leandro', 'TCC 2', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 2019, '2', '2019-11-19', '../_arquivos_tcc/tcc_2.pdf', NULL, 'palavra1 , palavra2 , palavra3 , palavra4 , palavra5 , palavra6', 'PENDENTE', 3),
(4, 'Leandro', 'qualque coisa', 'Resumo Resumo Resumo Resumo Resumo Resumo Resumo Resumo Resumo Resumo Resumo Resumo Resumo Resumo Resumo Resumo Resumo ', 2019, '1', '2019-11-19', '../_arquivos_tcc/qualque_coisa.pdf', NULL, 'teste', 'PENDENTE', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
