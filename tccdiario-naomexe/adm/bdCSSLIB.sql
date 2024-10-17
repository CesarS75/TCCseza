-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 31-Maio-2023 às 00:28
-- Versão do servidor: 10.4.25-MariaDB
-- versão do PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;


CREATE TABLE `Categorias` (
  `IDCategoria` int(4) PRIMARY KEY AUTO_INCREMENT NOT NULL,
  `NomeCat` varchar(50) NOT NULL,
  `DescricaoCat` VARCHAR(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `Componentes` (
  `IDComponente` INT(4) PRIMARY KEY AUTO_INCREMENT NOT NULL,
  `NomeComp` varchar(50) NOT NULL,
  `DescricaoComp` VARCHAR(250) NOT NULL,
  `CodeCompHtml` VARCHAR(500) NOT NULL,
  `CodeCompCss` VARCHAR(500) NOT NULL,
  `IDCategoria` int(4),
  CONSTRAINT CatIDCat_CompIDCatFK FOREIGN KEY (IDcategoria) REFERENCES Categorias (IDcategoria)
);

CREATE TABLE `login` (
  `IDlogin` INT(4) PRIMARY KEY AUTO_INCREMENT NOT NULL,
  `NomeUser` VARCHAR(50) NOT NULL,
  `SenhaUser` VARCHAR(50) NOT NULL
);
