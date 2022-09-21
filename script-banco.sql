-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema controle-estoque
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema controle-estoque
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `controle-estoque` DEFAULT CHARACTER SET utf8 ;
USE `controle-estoque` ;

-- -----------------------------------------------------
-- Table `controle-estoque`.`produto`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `controle-estoque`.`produto` (
  `codProd` INT NOT NULL AUTO_INCREMENT,
  `nomeProd` VARCHAR(100) NULL,
  `descProd` VARCHAR(200) NOT NULL,
  PRIMARY KEY (`codProd`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1
COLLATE = latin1_german1_ci;


-- -----------------------------------------------------
-- Table `controle-estoque`.`empresaServico`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `controle-estoque`.`empresaServico` (
  `codEmpresa` INT NOT NULL AUTO_INCREMENT,
  `nomeEmpresa` VARCHAR(70) NOT NULL,
  PRIMARY KEY (`codEmpresa`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1
COLLATE = latin1_general_ci;


-- -----------------------------------------------------
-- Table `controle-estoque`.`pessoa`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `controle-estoque`.`pessoa` (
  `codPessoa` INT NOT NULL AUTO_INCREMENT,
  `nomePessoa` VARCHAR(60) NULL,
  `cnpjPessoa` VARCHAR(45) NOT NULL,
  `telefonePessoa` VARCHAR(45) NULL,
  `cidadePessoa` VARCHAR(45) NULL,
  `bairroPessoa` VARCHAR(45) NULL,
  PRIMARY KEY (`codPessoa`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1
COLLATE = latin1_general_ci;


-- -----------------------------------------------------
-- Table `controle-estoque`.`lancamento`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `controle-estoque`.`lancamento` (
  `codCadastro` INT NOT NULL AUTO_INCREMENT,
  `dataInicial-cadastro` DATE NULL,
  `datafinal-cadastro` DATE NULL,
  `situacaoCadastro` VARCHAR(45) NOT NULL,
  `obsCadastro` VARCHAR(45) NULL,
  `pessoa_codPessoa` INT NOT NULL,
  `produto_codProd` INT NOT NULL,
  `empresaServico_codEmpresa` INT NOT NULL,
  PRIMARY KEY (`codCadastro`, `pessoa_codPessoa`, `produto_codProd`, `empresaServico_codEmpresa`),
  INDEX `fk_lancamento_pessoa_idx` (`pessoa_codPessoa` ASC) VISIBLE,
  INDEX `fk_lancamento_produto1_idx` (`produto_codProd` ASC) VISIBLE,
  INDEX `fk_lancamento_empresaServico1_idx` (`empresaServico_codEmpresa` ASC) VISIBLE,
  CONSTRAINT `fk_lancamento_pessoa`
    FOREIGN KEY (`pessoa_codPessoa`)
    REFERENCES `mydb`.`pessoa` (`codPessoa`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_lancamento_produto1`
    FOREIGN KEY (`produto_codProd`)
    REFERENCES `controle-estoque`.`produto` (`codProd`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_lancamento_empresaServico1`
    FOREIGN KEY (`empresaServico_codEmpresa`)
    REFERENCES `controle-estoque`.`empresaServico` (`codEmpresa`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1
COLLATE = latin1_general_ci;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
