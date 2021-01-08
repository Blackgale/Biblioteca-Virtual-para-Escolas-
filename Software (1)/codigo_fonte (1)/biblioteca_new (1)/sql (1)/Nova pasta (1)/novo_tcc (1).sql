-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema biblioteca_tcc
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Table `tb_administrador`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tb_administrador` (
  `rm_adm` INT(11) NOT NULL,
  `nome_adm` VARCHAR(100) NOT NULL,
  `email_adm` VARCHAR(255) NOT NULL,
  `senha_adm` VARCHAR(45) NULL DEFAULT NULL,
  `telefone_adm` INT(11) NULL DEFAULT NULL,
  `tipo_adm` ENUM('COLABORADOR', 'DOCENTE', 'MASTER') NOT NULL DEFAULT 'MASTER',
  `status_adm` ENUM('ATIVO', 'INATIVO') NOT NULL DEFAULT 'ATIVO',
  PRIMARY KEY (`rm_adm`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `tb_representante_grupo`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tb_representante_grupo` (
  `id_representante` INT(11) NOT NULL,
  `rm_representante` INT(11) NOT NULL,
  `email_representante` VARCHAR(255) NOT NULL,
  `senha_representante` VARCHAR(100) NOT NULL,
  `status_representante` ENUM('ATIVO', 'INATIVO') NOT NULL DEFAULT 'INATIVO',
  `data_cadastro_representante` DATE NOT NULL,
  `administrador_rm` INT(11) NOT NULL,
  PRIMARY KEY (`id_representante`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `tb_aluno`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tb_aluno` (
  `rm_aluno` INT(11) NOT NULL,
  `nome_aluno` VARCHAR(100) NOT NULL,
  `email_aluno` VARCHAR(255) NOT NULL,
  `telefone_aluno` INT(11) NULL DEFAULT NULL,
  `data_cadastro` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  `tipo_aluno` ENUM('ALUNO', 'EX-ALUNO') NULL DEFAULT NULL,
  `grupo_id` INT(11) NULL DEFAULT NULL)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `tb_contato`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tb_contato` (
  `id_contato` INT(11) NOT NULL AUTO_INCREMENT,
  `nome__contato` VARCHAR(255) NOT NULL,
  `email_contato` VARCHAR(255) NOT NULL,
  `assunto_contato` VARCHAR(255) NOT NULL,
  `mensagem_contato` TEXT NOT NULL,
  `telefone_contato` INT(11) NULL DEFAULT NULL,
  `data__contato` DATE NOT NULL,
  PRIMARY KEY (`id_contato`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `tb_curso`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tb_curso` (
  `id_curso` INT(11) NOT NULL AUTO_INCREMENT,
  `titulo_curso` VARCHAR(45) NOT NULL,
  `descricao_curso` TEXT NOT NULL,
  `imagem_curso` VARCHAR(100) NOT NULL,
  `status_curso` ENUM('ATIVO', 'INATIVO') NULL DEFAULT 'ATIVO',
  PRIMARY KEY (`id_curso`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `tb_tcc`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tb_tcc` (
  `id_tcc` INT(11) NOT NULL AUTO_INCREMENT,
  `titulo` VARCHAR(255) NOT NULL,
  `resumo` TEXT NOT NULL,
  `ano_formacao` YEAR(4) NOT NULL,
  `semestre` ENUM('1', '2') NOT NULL,
  `data_upload` DATE NOT NULL,
  `arquivo` VARCHAR(255) NOT NULL,
  `palavra_chave` VARCHAR(255) NOT NULL,
  `status` ENUM('APROVADO', 'PENDENTE', 'REPROVADO') NOT NULL DEFAULT 'PENDENTE',
  `representante_grupo_id` INT(11) NOT NULL,
  PRIMARY KEY (`id_tcc`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
