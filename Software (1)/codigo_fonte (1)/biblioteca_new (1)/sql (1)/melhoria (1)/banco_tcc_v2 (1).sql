SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

DROP SCHEMA IF EXISTS `biblioteca_tcc` ;
CREATE SCHEMA IF NOT EXISTS `biblioteca_tcc` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
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
  `resumo` TEXT NOT NULL,
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
  `rm_admin` INT NOT NULL,
  `nome_admin` VARCHAR(255) NOT NULL,
  `email_admin` VARCHAR(255) NOT NULL,
  `curso_admin` VARCHAR(255) NULL DEFAULT 'OUTROS',
  `senha_admin` VARCHAR(100) NOT NULL,
  `telefone_admin` INT(11) NULL,
  `tipo_admin` ENUM('MODERADOR','ORIENTADOR','MASTER') NOT NULL DEFAULT 'MASTER',
  `status_admin` ENUM('ATIVO', 'INATIVO') NOT NULL DEFAULT 'ATIVO',
  `data_cadastro_admin` DATE NOT NULL,
  PRIMARY KEY (`rm_admin`))
ENGINE = InnoDB;

SHOW WARNINGS;

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
