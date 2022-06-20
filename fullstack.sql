-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

DROP DATABASE IF EXISTS `fullstack`;

-- -----------------------------------------------------
-- Database fullstack
-- -----------------------------------------------------
CREATE DATABASE IF NOT EXISTS `fullstack` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci ;
USE `fullstack` ;

-- -----------------------------------------------------
-- Table `Accounts`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Accounts` (
  `accountID` INT NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(50) NOT NULL,
  `password` VARCHAR(50) NOT NULL,
  `email` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`accountID`),
  UNIQUE INDEX `Username_UNIQUE` (`username` ASC) VISIBLE,
  UNIQUE INDEX `email_UNIQUE` (`email` ASC) VISIBLE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table 'Adres`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Adres` (
  `accountID` INT NOT NULL,
  `Postcode` VARCHAR(6) NOT NULL,
  `Plaats` VARCHAR(45) NOT NULL,
  `straat` VARCHAR(45) NOT NULL,
  `huisnummer` INT NOT NULL,
  PRIMARY KEY (`accountID`),
  INDEX `fk_Adres_accounts_idx` (`accountID` ASC) VISIBLE,
  CONSTRAINT `fk_Adres_accounts`
    FOREIGN KEY (`accountID`)
    REFERENCES `Accounts` (`accountID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

INSERT INTO Accounts
VALUES ('1', 'Daanoontje', 'Noelmaat172', 'daan.maat9@gmail.com');

INSERT INTO Adres
VALUES ('1', '8241AG', 'Lelystad', 'Golfpark', '172');