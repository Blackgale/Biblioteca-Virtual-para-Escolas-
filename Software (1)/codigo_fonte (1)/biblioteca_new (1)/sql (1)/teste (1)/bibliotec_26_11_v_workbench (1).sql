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
  `telefone_admin` varchar(11) DEFAULT NULL,
  `tipo_admin` enum('MODERADOR','ORIENTADOR','MASTER') NOT NULL DEFAULT 'MASTER',
  `status_admin` enum('ATIVO','INATIVO','EXCLUIDO') NOT NULL DEFAULT 'ATIVO',
  `data_cadastro_admin` date DEFAULT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_administrador`
--

LOCK TABLES `tb_administrador` WRITE;
/*!40000 ALTER TABLE `tb_administrador` DISABLE KEYS */;
INSERT INTO `tb_administrador` VALUES (1,18520,'teste edicao','testelima85@gmail.com','Segurança do Trabalho','123','11988776655','ORIENTADOR','ATIVO','2019-11-26'),(2,18515,'Leandro Lima','testelima85@gmail.com','Administração','123','11963075108','MODERADOR','ATIVO','2019-11-25'),(3,20200,'Henrique','henrique@email.com','Administração','321','11962048551','MASTER','ATIVO','2019-11-25');
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
  `status_curso` enum('ATIVO','INATIVO','EXCLUIDO') NOT NULL DEFAULT 'ATIVO',
  PRIMARY KEY (`id_curso`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_curso`
--

LOCK TABLES `tb_curso` WRITE;
/*!40000 ALTER TABLE `tb_curso` DISABLE KEYS */;
INSERT INTO `tb_curso` VALUES (1,'Teste Teste','Teste Teste Teste Teste Teste Teste Teste Teste Teste Teste Teste Teste ','teste_teste.png','INATIVO'),(2,'Teste 2 Ção  áéí´ã','Teste 2 Ção  áéí´ã Teste 1 Ção  áéí´ãTeste 1 Ção  áéí´ãTeste 1 Ção  áéí´ãTeste 1 Ção  áéí´ãTeste 1 Ção  áéí´ãTeste 1 Ção  áéí´ã','teste_2_cao_aei_a.png','ATIVO'),(3,'Teste ooosdakk','Teste ooosdakk             Teste ooosdakk             Teste ooosdakk             Teste ooosdakk','teste_ooosdakk.png','ATIVO'),(4,'Desenvolvimento de Sistemas1','Teste teteste ','desenvolvimento_de_sistemas1.png','ATIVO'),(5,'Segurança do Trabalho','Teste Teste ','seguranca_do_trabalho.png','ATIVO'),(6,'Cursos Curso','Teste Teste ','cursos_curso.png','ATIVO'),(7,'Administração','Administração TesteAdministração TesteAdministração TesteAdministração TesteAdministração Teste','administracao.png','ATIVO');
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
  `login_representante_grupo` varchar(255) NOT NULL,
  `email_representante_grupo` varchar(255) NOT NULL,
  `senha_representante_grupo` varchar(100) NOT NULL,
  `status_representante_grupo` enum('ATIVO','INATIVO') NOT NULL DEFAULT 'ATIVO',
  `curso_representante_grupo` varchar(255) DEFAULT NULL,
  `data_cadastro_representante_grupo` date NOT NULL,
  PRIMARY KEY (`id_grupo`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_grupo`
--

LOCK TABLES `tb_grupo` WRITE;
/*!40000 ALTER TABLE `tb_grupo` DISABLE KEYS */;
INSERT INTO `tb_grupo` VALUES (1,'033','teste@email','123','ATIVO','Administração','2019-11-16'),(2,'leandro10','teste@teste','123','INATIVO','Desenvolvimento de Sistemas1','2019-11-16'),(3,'18515','leandro@teste','123','ATIVO','Recursos Humanos','2019-11-16'),(4,'90800','noventa@email.com','123','INATIVO','Escolher Curso','2019-11-25');
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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_tcc`
--

LOCK TABLES `tb_tcc` WRITE;
/*!40000 ALTER TABLE `tb_tcc` DISABLE KEYS */;
INSERT INTO `tb_tcc` VALUES (2,'Orientador 1','Teste 2','teste teste Teste teste teste Teste teste teste Teste teste teste Teste teste teste Teste teste teste Teste teste teste Teste teste teste Teste teste teste Teste teste teste Teste teste teste Teste teste teste Teste teste teste Teste teste teste Teste teste teste Teste teste teste Teste teste teste Teste teste teste Teste teste teste Teste teste teste Teste teste teste Teste teste teste Teste teste teste Teste teste teste Teste teste teste Teste teste teste Teste ',2019,'2','2019-11-19','../_arquivos_tcc/teste_2.JPG',NULL,'palavra1 , teste 1 , teste 1','PENDENTE',3),(3,'Leandro','TCC 2','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',2019,'2','2019-11-19','../_arquivos_tcc/tcc_2.pdf',NULL,'palavra1 , palavra2 , palavra3 , palavra4 , palavra5 , palavra6','PENDENTE',3),(4,'Leandro','qualque coisa','Resumo Resumo Resumo Resumo Resumo Resumo Resumo Resumo Resumo Resumo Resumo Resumo Resumo Resumo Resumo Resumo Resumo ',2019,'1','2019-11-19','../_arquivos_tcc/qualque_coisa.pdf',NULL,'teste','PENDENTE',1),(5,'Leandro','fffffff','fffffffffff',2019,'1','2019-11-24','fffffff.pdf',NULL,'chave1 , chave2 , chave3','PENDENTE',1);
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

-- Dump completed on 2019-11-26 17:38:03
