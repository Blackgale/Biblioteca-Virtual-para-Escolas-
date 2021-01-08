-- MySQL dump 10.13  Distrib 5.6.24, for Win32 (x86)
--
-- Host: 127.0.0.1    Database: biblioteca_tcc
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.34-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `tb_administrador`
--

DROP TABLE IF EXISTS `tb_administrador`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_administrador` (
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
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_administrador`
--

LOCK TABLES `tb_administrador` WRITE;
/*!40000 ALTER TABLE `tb_administrador` DISABLE KEYS */;
INSERT INTO `tb_administrador` VALUES (1,18515,'Leandro Lima','leandrohlima85@gmail.com','Desenvolvimento de Sistemas','123',2147483647,'MODERADOR','ATIVO','2019-11-14'),(2,18516,'Leandro Lima','leandrohlima85@gmail.com','Desenvolvimento de Sistemas','123',2147483647,'MODERADOR','ATIVO','2019-11-14'),(3,18516,'Leandro Lima','leandrohlima85@gmail.com','Desenvolvimento de Sistemas','123',2147483647,'MODERADOR','ATIVO','2019-11-14'),(4,18520,'Leandro Lima','teste@teste.com','- Escolher Curso','123',2147483647,'','INATIVO','2019-11-14'),(5,20200,'Leandro Lima','teste@teste.com','','133',2147483647,'','INATIVO','2019-11-14'),(6,20200,'Leandro Lima','teste@teste.com','','133',2147483647,'','INATIVO','2019-11-14'),(7,22443,'Leandro Lima','leandrohlima85@gmail.com','','22',1122334455,'','ATIVO','2019-11-14'),(8,22443,'Leandro Lima','leandrohlima85@gmail.com','','22',1122334455,'','ATIVO','2019-11-14'),(9,18515,'Leandro Lima','leandrohlima85@gmail.com','','13',2147483647,'','ATIVO','2019-11-14'),(10,99111,'Leandro','leandrilima@teste.com','Teste 2 teste','876',1199876543,'ORIENTADOR','INATIVO','2019-11-15');
/*!40000 ALTER TABLE `tb_administrador` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_aluno`
--

DROP TABLE IF EXISTS `tb_aluno`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_aluno` (
  `id_aluno` int(11) NOT NULL AUTO_INCREMENT,
  `rm_aluno` int(11) NOT NULL,
  `nome_aluno` varchar(100) NOT NULL,
  `email_aluno` varchar(255) NOT NULL,
  `telefone_aluno` int(11) DEFAULT NULL,
  `data_cadastro_aluno` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `tipo_aluno` enum('ALUNO','EX-ALUNO') NOT NULL,
  PRIMARY KEY (`id_aluno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_aluno`
--

LOCK TABLES `tb_aluno` WRITE;
/*!40000 ALTER TABLE `tb_aluno` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_aluno` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_aluno_grupo`
--

DROP TABLE IF EXISTS `tb_aluno_grupo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_aluno_grupo` (
  `id_aluno` int(11) NOT NULL,
  `id_grupo` int(11) NOT NULL,
  PRIMARY KEY (`id_grupo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_aluno_grupo`
--

LOCK TABLES `tb_aluno_grupo` WRITE;
/*!40000 ALTER TABLE `tb_aluno_grupo` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_aluno_grupo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_contato`
--

DROP TABLE IF EXISTS `tb_contato`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_contato` (
  `id_contato` int(11) NOT NULL AUTO_INCREMENT,
  `nome_contato` varchar(255) NOT NULL,
  `email_contato` varchar(255) NOT NULL,
  `assunto_contato` varchar(255) NOT NULL,
  `mensagem_contato` text NOT NULL,
  `telefone_contato` int(11) DEFAULT NULL,
  `data_contato` date NOT NULL,
  PRIMARY KEY (`id_contato`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_contato`
--

LOCK TABLES `tb_contato` WRITE;
/*!40000 ALTER TABLE `tb_contato` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_contato` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_curso`
--

DROP TABLE IF EXISTS `tb_curso`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_curso` (
  `id_curso` int(11) NOT NULL AUTO_INCREMENT,
  `titulo_curso` varchar(45) NOT NULL,
  `descricao_curso` text NOT NULL,
  `imagem_curso` varchar(100) NOT NULL,
  `status_curso` enum('ATIVO','INATIVO') NOT NULL DEFAULT 'ATIVO',
  PRIMARY KEY (`id_curso`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_curso`
--

LOCK TABLES `tb_curso` WRITE;
/*!40000 ALTER TABLE `tb_curso` DISABLE KEYS */;
INSERT INTO `tb_curso` VALUES (1,'Desenvolvimento de Sistemas1','1Desenvolvimento de Sistemas Lorem Ipsum é simplesmente um texto fictício da indústria tipográfica e de impressão. Lorem Ipsum é o texto fictício padrão do setor desde os anos 1500, quando uma impressora desconhecida pegou uma galera do tipo e a mexeu para fazer um livro de amostras do tipo. Ele sobreviveu não apenas cinco séculos, mas também o salto para a composição eletrônica, permanecendo essencialmente inalterado. Foi popularizado na década de 1960 com o lançamento de folhas de Letraset contendo passagens de Lorem Ipsum e, mais recentemente, com software de editoração eletrô','../_img_cursos/desenvolvimento_de_sistemas1.png','INATIVO'),(2,'Recursos Humanos','Recursos Humanos É um fato estabelecido há muito tempo que um leitor se distrai com o conteúdo legível de uma página ao examinar seu layout. O objetivo de usar Lorem Ipsum é que ele tem uma distribuição de letras mais ou menos normal, em vez de usar &#39;Conteúdo aqui, conteúdo aqui&#39;, fazendo com que pareça um inglês legível. Muitos pacotes de editoração eletrônica e editores de páginas da web agora usam Lorem Ipsum como texto padrão do modelo, e uma pesquisa por &#39;lorem ipsum&#39; descobrirá muitos sites ainda na infância. Várias versões evoluíram ao longo dos anos, às vezes por acidente, às vezes de propósito (humor injetado e similares).','../_img_cursos/recursos_humanos.png','ATIVO'),(3,'Segurança do Trabalho','Segurança do Trabalho Existem muitas variações de passagens disponíveis de Lorem Ipsum, mas a maioria sofreu alterações de alguma forma, pelo humor injetado ou por palavras aleatórias que não parecem nem um pouco críveis. Se você vai usar uma passagem de Lorem Ipsum, precisa ter certeza de que não há nada embaraçoso escondido no meio do texto. Todos os geradores Lorem Ipsum na Internet tendem a repetir blocos predefinidos conforme necessário, tornando este o primeiro gerador verdadeiro na Internet. Ele usa um dicionário de mais de 200 palavras latinas, combinado com algumas estruturas de frases modelo, para gerar Lorem Ipsum, que parece razoável. O Lorem Ipsum gerado é, portanto, sempre livre de repetição, humor injetado ou palavras não características etc.','../_img_cursos/seguranca_do_trabalho.png','ATIVO'),(4,'Administração','Administração','../_img_cursos/administracao.png','INATIVO'),(5,'Teste 2 teste','É um fato estabelecido há muito tempo que um leitor se distrai com o conteúdo legível de uma página ao examinar seu layout. O objetivo de usar Lorem Ipsum é que ele tem uma distribuição de letras mais ou menos normal, em vez de usar &#39;Conteúdo aqui, conteúdo aqui&#39;, fazendo com que pareça um inglês legível. Muitos pacotes de editoração eletrônica e editores de páginas da web agora usam Lorem Ipsum como texto padrão do modelo, e uma pesquisa por &#39;lorem ipsum&#39; descobrirá muitos sites ainda na infância. Várias versões evoluíram ao longo dos anos, às vezes por acidente, às vezes de propósito (humor injetado e similares).','../_img_cursos/teste_2_teste.png','ATIVO');
/*!40000 ALTER TABLE `tb_curso` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_grupo`
--

DROP TABLE IF EXISTS `tb_grupo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_grupo` (
  `id_grupo` int(11) NOT NULL AUTO_INCREMENT,
  `login_representante_grupo` int(11) NOT NULL,
  `email_representante_grupo` varchar(255) NOT NULL,
  `senha_representante_grupo` varchar(100) NOT NULL,
  `status_representante_grupo` enum('ATIVO','INATIVO') NOT NULL DEFAULT 'INATIVO',
  `data_cadastro_representante_grupo` date NOT NULL,
  `curso_representante_grupo` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_grupo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_grupo`
--

LOCK TABLES `tb_grupo` WRITE;
/*!40000 ALTER TABLE `tb_grupo` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_grupo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_tcc`
--

DROP TABLE IF EXISTS `tb_tcc`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_tcc` (
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_tcc`
--

LOCK TABLES `tb_tcc` WRITE;
/*!40000 ALTER TABLE `tb_tcc` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_tcc` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-11-15 21:24:27
