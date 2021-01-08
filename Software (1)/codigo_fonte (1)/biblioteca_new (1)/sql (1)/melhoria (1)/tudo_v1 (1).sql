-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema biblioteca_tcc
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `biblioteca_tcc` ;

-- -----------------------------------------------------
-- Schema biblioteca_tcc
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `biblioteca_tcc` DEFAULT CHARACTER SET utf8 ;
SHOW WARNINGS;
USE `biblioteca_tcc` ;

-- -----------------------------------------------------
-- Table `tb_curso`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `tb_curso` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `tb_curso` (
  `id_curso` INT(11) NOT NULL AUTO_INCREMENT,
  `titulo_curso` VARCHAR(45) NOT NULL,
  `descricao_curso` TEXT NOT NULL,
  `imagem_curso` VARCHAR(100) NOT NULL,
  `status_curso` ENUM('ATIVO','INATIVO') NOT NULL DEFAULT 'ATIVO',
  PRIMARY KEY (`id_curso`))
ENGINE = InnoDB;

SHOW WARNINGS;

INSERT INTO `tb_curso` VALUES (1,'Desenvolvimento de Sistemas','Desenvolvimento de Sistemas Lorem Ipsum é simplesmente um texto fictício da indústria tipográfica e de impressão. Lorem Ipsum é o texto fictício padrão do setor desde os anos 1500, quando uma impressora desconhecida pegou uma galera do tipo e a mexeu para fazer um livro de amostras do tipo. Ele sobreviveu não apenas cinco séculos, mas também o salto para a composição eletrônica, permanecendo essencialmente inalterado. Foi popularizado na década de 1960 com o lançamento de folhas de Letraset contendo passagens de Lorem Ipsum e, mais recentemente, com software de editoração eletrô','../_img_cursos/desenvolvimento_de_sistemas.png','INATIVO'),
							  (2,'Recursos Humanos','Recursos Humanos É um fato estabelecido há muito tempo que um leitor se distrai com o conteúdo legível de uma página ao examinar seu layout. O objetivo de usar Lorem Ipsum é que ele tem uma distribuição de letras mais ou menos normal, em vez de usar &#39;Conteúdo aqui, conteúdo aqui&#39;, fazendo com que pareça um inglês legível. Muitos pacotes de editoração eletrônica e editores de páginas da web agora usam Lorem Ipsum como texto padrão do modelo, e uma pesquisa por &#39;lorem ipsum&#39; descobrirá muitos sites ainda na infância. Várias versões evoluíram ao longo dos anos, às vezes por acidente, às vezes de propósito (humor injetado e similares).','../_img_cursos/recursos_humanos.png','ATIVO'),
							  (3,'Segurança do Trabalho','Segurança do Trabalho Existem muitas variações de passagens disponíveis de Lorem Ipsum, mas a maioria sofreu alterações de alguma forma, pelo humor injetado ou por palavras aleatórias que não parecem nem um pouco críveis. Se você vai usar uma passagem de Lorem Ipsum, precisa ter certeza de que não há nada embaraçoso escondido no meio do texto. Todos os geradores Lorem Ipsum na Internet tendem a repetir blocos predefinidos conforme necessário, tornando este o primeiro gerador verdadeiro na Internet. Ele usa um dicionário de mais de 200 palavras latinas, combinado com algumas estruturas de frases modelo, para gerar Lorem Ipsum, que parece razoável. O Lorem Ipsum gerado é, portanto, sempre livre de repetição, humor injetado ou palavras não características etc.','../_img_cursos/seguranca_do_trabalho.png','ATIVO'),
							  (4,'Administração','Administração','../_img_cursos/administracao.png','INATIVO');

-- -----------------------------------------------------
-- Table `tb_grupo`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `tb_grupo` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `tb_grupo` (
  `id_grupo` INT(11) NOT NULL AUTO_INCREMENT,
  `login_representante_grupo` INT(11) NOT NULL,
  `email_representante_grupo` VARCHAR(255) NOT NULL,
  `senha_representante_grupo` VARCHAR(100) NOT NULL,
  `status_representante_grupo` ENUM('ATIVO','INATIVO') NOT NULL DEFAULT 'INATIVO',
  `data_cadastro_representante_grupo` DATE NOT NULL,
  `curso_representante_grupo` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id_grupo`))
ENGINE = InnoDB;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `tb_aluno`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `tb_aluno` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `tb_aluno` (
  `id_aluno` INT(11) NOT NULL AUTO_INCREMENT,
  `rm_aluno` INT NOT NULL,
  `nome_aluno` VARCHAR(100) NOT NULL,
  `email_aluno` VARCHAR(255) NOT NULL,
  `telefone_aluno` INT(11) NULL,
  `data_cadastro_aluno` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  `tipo_aluno` ENUM('ALUNO','EX-ALUNO') NOT NULL,
  PRIMARY KEY (`id_aluno`))
ENGINE = InnoDB;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `tb_aluno_grupo`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `tb_aluno_grupo` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `tb_aluno_grupo` (
  `id_aluno` INT(11) NOT NULL,
  `id_grupo` INT(11) NOT NULL,
  PRIMARY KEY (`id_grupo`))
ENGINE = InnoDB;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `tb_tcc`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `tb_tcc` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `tb_tcc` (
  `id_tcc` INT(11) NOT NULL AUTO_INCREMENT,
  `nome_orientador_tcc` VARCHAR(255) NOT NULL,
  `titulo_tcc` VARCHAR(255) NOT NULL,
  `resumo_tcc` TEXT NOT NULL,
  `ano_formacao_tcc` YEAR NOT NULL,
  `semestre_tcc` ENUM('1','2') NOT NULL,
  `data_upload_tcc` DATE NOT NULL,
  `arquivo_tcc` VARCHAR(255) NOT NULL,
  `executavel_tcc` VARCHAR(255) NULL,
  `palavra_chave_tcc` VARCHAR(255) NOT NULL,
  `status_tcc` ENUM('APROVADO','PENDENTE','REPROVADO') NOT NULL DEFAULT 'PENDENTE',
  `id_grupo` INT(11) NOT NULL,
  PRIMARY KEY (`id_tcc`))
ENGINE = InnoDB;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `tb_contato`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `tb_contato` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `tb_contato` (
  `id_contato` INT(11) NOT NULL AUTO_INCREMENT,
  `nome_contato` VARCHAR(255) NOT NULL,
  `email_contato` VARCHAR(255) NOT NULL,
  `assunto_contato` VARCHAR(255) NOT NULL,
  `mensagem_contato` TEXT NOT NULL,
  `telefone_contato` INT(11) NULL,
  `data_contato` DATE NOT NULL,
  PRIMARY KEY (`id_contato`))
ENGINE = InnoDB;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `tb_administrador`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `tb_administrador` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `tb_administrador` (
  `id_admin` INT(11) NOT NULL AUTO_INCREMENT,
  `rm_admin` INT NOT NULL,
  `nome_admin` VARCHAR(255) NOT NULL,
  `email_admin` VARCHAR(255) NOT NULL,
  `curso_admin` VARCHAR(255) NULL DEFAULT 'OUTROS',
  `senha_admin` VARCHAR(100) NOT NULL,
  `telefone_admin` INT(11) NULL,
  `tipo_admin` ENUM('MODERADOR','ORIENTADOR','MASTER') NOT NULL DEFAULT 'MASTER',
  `status_admin` ENUM('ATIVO', 'INATIVO') NOT NULL DEFAULT 'ATIVO',
  `data_cadastro_admin` DATE NOT NULL,
  PRIMARY KEY (`id_admin`))
ENGINE = InnoDB;

SHOW WARNINGS;

INSERT INTO `tb_administrador` VALUES (1,18515,'Leandro Lima','leandrohlima85@gmail.com','Desenvolvimento de Sistemas','123',2147483647,'MODERADOR','ATIVO','2019-11-14'),
									  (2,18516,'Leandro Lima','leandrohlima85@gmail.com','Desenvolvimento de Sistemas','123',2147483647,'MODERADOR','ATIVO','2019-11-14'),
									  (3,18516,'Leandro Lima','leandrohlima85@gmail.com','Desenvolvimento de Sistemas','123',2147483647,'MODERADOR','ATIVO','2019-11-14'),
									  (4,18520,'Leandro Lima','teste@teste.com','Recursos Humanos','123',2147483647,'MASTER','INATIVO','2019-11-14'),
									  (5,20200,'Leandro Lima','teste@teste.com','Administração','133',2147483647,'MODERADOR','INATIVO','2019-11-14'),
                                      (6,20200,'Leandro Lima','teste@teste.com','Administração','133',2147483647,'ORIENTADOR','INATIVO','2019-11-14'),
                                      (7,22443,'Leandro Lima','leandrohlima85@gmail.com','Segurança do Trabalho','22',1122334455,'ORIENTADOR','ATIVO','2019-11-14'),
                                      (8,22443,'Leandro Lima','leandrohlima85@gmail.com','Desenvolvimento de Sistemas','22',1122334455,'MASTER','ATIVO','2019-11-14'),
                                      (9,18515,'Leandro Lima','leandrohlima85@gmail.com','Administração','13',2147483647,'MASTER','ATIVO','2019-11-14');


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
