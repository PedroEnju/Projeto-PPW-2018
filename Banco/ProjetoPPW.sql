-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema projetoppw
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema projetoppw
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `projetoppw` DEFAULT CHARACTER SET utf8 ;
-- -----------------------------------------------------
-- Schema projetoppw
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema projetoppw
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `projetoppw` DEFAULT CHARACTER SET utf8 ;
USE `projetoppw` ;

-- -----------------------------------------------------
-- Table `mydb`.`estado`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `projetoppw`.`estado` (
  `id_estado` INT NOT NULL AUTO_INCREMENT,
  `nome_estado` VARCHAR(50) NULL,
  `uf` CHAR(2) NULL,
  `status` CHAR(1) NULL,
  PRIMARY KEY (`id_estado`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`cidade`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `projetoppw`.`cidade` (
  `id_cidade` INT NOT NULL AUTO_INCREMENT,
  `id_estado` INT NULL,
  `nome_cidade` VARCHAR(60) NOT NULL,
  `cep` CHAR(9) NULL,
  `status` CHAR(1) NULL,
  PRIMARY KEY (`id_cidade`),
  INDEX `cidade_estado_idx` (`id_estado` ASC),
  CONSTRAINT `cidade_estado`
    FOREIGN KEY (`id_estado`)
    REFERENCES `projetoppw`.`estado` (`id_estado`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

USE `projetoppw` ;

-- -----------------------------------------------------
-- Table `projetoppw`.`cliente`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `projetoppw`.`cliente` (
  `id_cliente` INT(11) NOT NULL AUTO_INCREMENT,
  `id_cidade` INT NOT NULL,
  `nome_cliente` VARCHAR(100) NOT NULL,
  `cpf` VARCHAR(14) NOT NULL,
  `data_nascimento` DATE NULL,
  `sexo` CHAR(1) NULL,
  `estado_civil` CHAR(1) NULL,
  `email` VARCHAR(100) NULL,
  `status` CHAR(1) NULL,
  PRIMARY KEY (`id_cliente`, `id_cidade`),
  INDEX `cliente_cidade_idx` (`id_cidade` ASC),
  CONSTRAINT `cliente_cidade`
    FOREIGN KEY (`id_cidade`)
    REFERENCES `projetoppw`.`cidade` (`id_cidade`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 12
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `projetoppw`.`usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `projetoppw`.`usuario` (
  `id_usuario` INT(11) NOT NULL AUTO_INCREMENT,
  `id_cliente` INT(11) NULL DEFAULT NULL,
  `data_cadastro` DATETIME NULL DEFAULT NULL,
  `tipo_usuario` CHAR(1) NULL DEFAULT NULL,
  `nome_usuario` VARCHAR(60) NOT NULL,
  `senha_usuario` VARCHAR(64) NOT NULL,
  `status` VARCHAR(1) NULL DEFAULT NULL,
  PRIMARY KEY (`id_usuario`),
  INDEX `id_cliente` (`id_cliente` ASC),
  CONSTRAINT `usuario_cliente`
    FOREIGN KEY (`id_cliente`)
    REFERENCES `projetoppw`.`cliente` (`id_cliente`))
ENGINE = InnoDB
AUTO_INCREMENT = 12
DEFAULT CHARACTER SET = utf8;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
