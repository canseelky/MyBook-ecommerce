-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`Users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Users` (
  `idUsers` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(100) NULL,
  `surname` VARCHAR(100) NULL,
  `email` VARCHAR(45) NULL,
  `password` VARCHAR(100) NULL,
  PRIMARY KEY (`idUsers`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Adress`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Adress` (
  `idAdress` INT NOT NULL,
  `city` VARCHAR(45) NULL,
  `district` VARCHAR(45) NULL,
  `neighborhood` VARCHAR(45) NULL,
  `apartment` VARCHAR(45) NULL,
  `userId` INT NOT NULL,
  PRIMARY KEY (`idAdress`),
  INDEX `fk_Adress_Users_idx` (`userId` ASC) VISIBLE,
  CONSTRAINT `fk_Adress_Users`
    FOREIGN KEY (`userId`)
    REFERENCES `mydb`.`Users` (`idUsers`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Products`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Products` (
  `idProducts` INT NOT NULL,
  `productName` VARCHAR(45) NULL,
  `imgUrl` VARCHAR(45) NULL,
  `price` VARCHAR(45) NULL,
  `category` VARCHAR(45) NULL,
  `description` VARCHAR(100) NULL,
  PRIMARY KEY (`idProducts`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Carts`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Carts` (
  `idCarts` INT NOT NULL AUTO_INCREMENT,
  `quantity` INT NULL,
  `idUsers` INT NOT NULL,
  `idProducts` INT NOT NULL,
  PRIMARY KEY (`idCarts`),
  INDEX `fk_Carts_Users1_idx` (`idUsers` ASC) VISIBLE,
  INDEX `fk_Carts_Products1_idx` (`idProducts` ASC) VISIBLE,
  CONSTRAINT `fk_Carts_Users1`
    FOREIGN KEY (`idUsers`)
    REFERENCES `mydb`.`Users` (`idUsers`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Carts_Products1`
    FOREIGN KEY (`idProducts`)
    REFERENCES `mydb`.`Products` (`idProducts`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
