SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `biblioteca_tcc` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `biblioteca_tcc` ;

-- -----------------------------------------------------
-- Table `biblioteca_tcc`.`tb_curso`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `biblioteca_tcc`.`tb_curso` (
  `id_curso` INT(11) NOT NULL AUTO_INCREMENT,
  `titulo_curso` VARCHAR(45) NOT NULL,
  `descricao_curso` TEXT NOT NULL,
  `imagem_curso` VARCHAR(100) NOT NULL,
  `status_curso` ENUM('ATIVO','INATIVO') NOT NULL DEFAULT 'ATIVO',
  PRIMARY KEY (`id_curso`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `biblioteca_tcc`.`tb_grupo`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `biblioteca_tcc`.`tb_grupo` (
  `id_grupo` INT(11) NOT NULL AUTO_INCREMENT,
  `login_representante_grupo` INT(11) NOT NULL,
  `email_representante_grupo` VARCHAR(255) NOT NULL,
  `senha_representante_grupo` VARCHAR(100) NOT NULL,
  `status_representante_grupo` ENUM('ATIVO','INATIVO') NOT NULL DEFAULT 'INATIVO',
  `data_cadastro_representante_grupo` DATE NOT NULL,
  `id_curso` INT(11) NOT NULL,
  PRIMARY KEY (`id_grupo`),
  CONSTRAINT `fk_tb_grupo_tb_curso1`
    FOREIGN KEY (`id_curso`)
    REFERENCES `biblioteca_tcc`.`tb_curso` (`id_curso`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `biblioteca_tcc`.`tb_aluno`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `biblioteca_tcc`.`tb_aluno` (
  `id_aluno` INT(11) NOT NULL AUTO_INCREMENT,
  `rm_aluno` INT NOT NULL,
  `nome_aluno` VARCHAR(100) NOT NULL,
  `email_aluno` VARCHAR(255) NOT NULL,
  `telefone_aluno` INT(11) NULL,
  `data_cadastro_aluno` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  `tipo_aluno` ENUM('ALUNO','EX-ALUNO') NOT NULL,
  PRIMARY KEY (`id_aluno`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `biblioteca_tcc`.`tb_aluno_grupo`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `biblioteca_tcc`.`tb_aluno_grupo` (
  `id_aluno` INT(11) NOT NULL,
  `id_grupo` INT(11) NOT NULL,
  PRIMARY KEY (`id_grupo`),
  CONSTRAINT `fk_teste_tb_aluno1`
    FOREIGN KEY (`id_aluno`)
    REFERENCES `biblioteca_tcc`.`tb_aluno` (`id_aluno`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_teste_tb_grupo1`
    FOREIGN KEY (`id_grupo`)
    REFERENCES `biblioteca_tcc`.`tb_grupo` (`id_grupo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `biblioteca_tcc`.`tb_tcc`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `biblioteca_tcc`.`tb_tcc` (
  `id_tcc` INT(11) NOT NULL AUTO_INCREMENT,
  `nome_orientador_tcc` VARCHAR(45) NOT NULL,
  `titulo_tcc` VARCHAR(255) NOT NULL,
  `resumo` TEXT NOT NULL,
  `ano_formacao_tcc` YEAR NOT NULL,
  `semestre_tcc` ENUM('1','2') NOT NULL,
  `data_upload_tcc` DATE NOT NULL,
  `arquivo_tcc` VARCHAR(255) NOT NULL,
  `palavra_chave_tcc` VARCHAR(255) NOT NULL,
  `status_tcc` ENUM('APROVADO','PENDENTE','REPROVADO') NOT NULL DEFAULT 'PENDENTE',
  `id_grupo` INT(11) NOT NULL,
  PRIMARY KEY (`id_tcc`),
  CONSTRAINT `fk_tb_tcc_tb_aluno_grupo1`
    FOREIGN KEY (`id_grupo`)
    REFERENCES `biblioteca_tcc`.`tb_aluno_grupo` (`id_grupo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `biblioteca_tcc`.`tb_contato`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `biblioteca_tcc`.`tb_contato` (
  `id_contato` INT(11) NOT NULL AUTO_INCREMENT,
  `nome_contato` VARCHAR(255) NOT NULL,
  `email_contato` VARCHAR(255) NOT NULL,
  `assunto_contato` VARCHAR(255) NOT NULL,
  `mensagem_contato` TEXT NOT NULL,
  `telefone_contato` INT(11) NULL,
  `data_contato` DATE NOT NULL,
  PRIMARY KEY (`id_contato`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `biblioteca_tcc`.`tb_administrador`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `biblioteca_tcc`.`tb_administrador` (
  `rm_admin` INT NOT NULL,
  `nome_admin` VARCHAR(255) NOT NULL,
  `email_admin` VARCHAR(255) NOT NULL,
  `senha_admin` VARCHAR(100) NOT NULL,
  `telefone_admin` INT(11) NULL,
  `tipo_admin` ENUM('MODERADOR','ORIENTADOR','MASTER') NOT NULL DEFAULT 'MASTER',
  `status_admin` ENUM('ATIVO', 'INATIVO') NOT NULL DEFAULT 'ATIVO',
  `id_curso_admin` INT(11) NULL DEFAULT 0,
  `data_cadastro_admin` DATE NULL,
  PRIMARY KEY (`rm_admin`),
  CONSTRAINT `fk_tb_orientador_curso_tb_curso1`
    FOREIGN KEY (`id_curso_admin`)
    REFERENCES `biblioteca_tcc`.`tb_curso` (`id_curso`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
