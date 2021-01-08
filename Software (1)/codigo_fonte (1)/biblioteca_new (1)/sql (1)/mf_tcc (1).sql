-- MySQL Script generated by MySQL Workbench
-- Qui 10 Out 2019 16:39:32 -03
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema biblioteca_tcc
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema biblioteca_tcc
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `biblioteca_tcc` DEFAULT CHARACTER SET utf8 ;
USE `biblioteca_tcc` ;

-- -----------------------------------------------------
-- Table `biblioteca_tcc`.`tb_curso`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `biblioteca_tcc`.`tb_curso` (
  `id_curso` INT(11) NOT NULL,
  `titulo` VARCHAR(45) NOT NULL,
  `descricao` TEXT NOT NULL,
  `imagem` VARCHAR(100) NOT NULL,
  `status_curso` ENUM('ATIVO','INATIVO') NULL DEFAULT 'ATIVO',
  PRIMARY KEY (`id_curso`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `biblioteca_tcc`.`tb_administrador`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `biblioteca_tcc`.`tb_administrador` (
  `rm_adm` INT(11) NOT NULL,
  `nome_adm` VARCHAR(100) NOT NULL,
  `email_adm` VARCHAR(255) NOT NULL,
  `senha_adm` VARCHAR(45) NULL,
  `telefone_adm` INT(11) NULL,
  `tipo_adm` ENUM('COLABORADOR','DOCENTE','MASTER') NOT NULL DEFAULT 'MASTER',
  `status_adm` ENUM('ATIVO','INATIVO') NOT NULL DEFAULT 'ATIVO',
  `curso_id` INT(11) NULL,
  PRIMARY KEY (`rm_adm`),
  CONSTRAINT `fk_tb_administrador_tb_curso`
    FOREIGN KEY (`curso_id`)
    REFERENCES `biblioteca_tcc`.`tb_curso` (`id_curso`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `biblioteca_tcc`.`tb_representante_grupo`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `biblioteca_tcc`.`tb_representante_grupo` (
  `id_representante` INT(11) NOT NULL,
  `rm_representante` INT(11) NOT NULL,
  `email_representante` VARCHAR(255) NOT NULL,
  `senha_representante` VARCHAR(100) NOT NULL,
  `status_representante` ENUM('ATIVO','INATIVO') NOT NULL DEFAULT 'INATIVO',
  `data_cadastro_representante` DATE NOT NULL,
  `administrador_rm` INT(11) NOT NULL,
  `curso_id` INT(11) NOT NULL,
  PRIMARY KEY (`id_representante`),
  CONSTRAINT `fk_tb_representante_grupo_tb_administrador1`
    FOREIGN KEY (`administrador_rm`)
    REFERENCES `biblioteca_tcc`.`tb_administrador` (`rm_adm`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tb_representante_grupo_tb_curso1`
    FOREIGN KEY (`curso_id`)
    REFERENCES `biblioteca_tcc`.`tb_curso` (`id_curso`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `biblioteca_tcc`.`tb_aluno`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `biblioteca_tcc`.`tb_aluno` (
  `rm_aluno` INT NOT NULL,
  `nome_aluno` VARCHAR(100) NOT NULL,
  `email_aluno` VARCHAR(255) NOT NULL,
  `telefone_aluno` INT(11) NULL,
  `data_cadastro` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  `tipo_aluno` ENUM('ALUNO','EX-ALUNO') NULL,
  `grupo_id` INT(11) NULL,
  CONSTRAINT `fk_tb_aluno_tb_representante_grupo1`
    FOREIGN KEY (`grupo_id`)
    REFERENCES `biblioteca_tcc`.`tb_representante_grupo` (`id_representante`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `biblioteca_tcc`.`tb_tcc`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `biblioteca_tcc`.`tb_tcc` (
  `id_tcc` INT(11) NOT NULL AUTO_INCREMENT,
  `titulo` VARCHAR(255) NOT NULL,
  `resumo` TEXT NOT NULL,
  `ano_formacao` YEAR NOT NULL,
  `semestre` ENUM('1','2') NOT NULL,
  `data_upload` DATE NOT NULL,
  `arquivo` VARCHAR(255) NOT NULL,
  `palavra_chave` VARCHAR(255) NOT NULL,
  `status` ENUM('APROVADO','PENDENTE','REPROVADO') NOT NULL DEFAULT 'PENDENTE',
  `representante_grupo_id` INT(11) NOT NULL,
  PRIMARY KEY (`id_tcc`),
  CONSTRAINT `fk_tb_tcc_tb_representante_grupo1`
    FOREIGN KEY (`representante_grupo_id`)
    REFERENCES `biblioteca_tcc`.`tb_representante_grupo` (`id_representante`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `biblioteca_tcc`.`tb_contato`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `biblioteca_tcc`.`tb_contato` (
  `id_contato` INT(11) NOT NULL AUTO_INCREMENT,
  `nome__contato` VARCHAR(255) NOT NULL,
  `email_contato` VARCHAR(255) NOT NULL,
  `assunto_contato` VARCHAR(255) NOT NULL,
  `mensagem_contato` TEXT NOT NULL,
  `telefone_contato` INT(11) NULL,
  `data__contato` DATE NOT NULL,
  PRIMARY KEY (`id_contato`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
