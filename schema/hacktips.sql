--
-- phpMyAdmin SQL Dump
-- version  5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22
-- Server version: Apache/2.4.54 (Win64) OpenSSL/1.1.1p PHP/8.1.12 
-- PHP Version: 8.1.12
-- Author: 47z!Lu7h

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+01:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
--
--
-- --------------------------------------------------------
-- --------------------------------------------------------
-- Base de datos: 'hacktips'
--
CREATE DATABASE IF NOT EXISTS hacktips;
use hacktips;
--
--
-- Estructura de tabla para la tabla 'users'
--
CREATE TABLE IF NOT EXISTS user (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	fullname VARCHAR(255) NOT NULL,
	username VARCHAR(255) NOT NULL unique,
	email  VARCHAR(255) NOT NULL unique,
	password VARCHAR(255) NOT NULL,
	created_at datetime NOT NULL
);
--
-- Insert Admin into user
--
INSERT INTO user (id, fullname, username, email, password, created_at) VALUES
(1, 'manolo anda borracho', 'admin', 'admin@admin.com', 'admin', 'NOW');
--
-- Estructura de tabla para la tabla 'tools'
--
CREATE TABLE IF NOT EXISTS tools(
    id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL
);
--
-- Volcado de datos para la tabla 'tools'
--
INSERT INTO tools (id, nombre) VALUES
(1, 'GitHub3rs'),
(2, 'Pasword Crackers'),
(3, 'Proxies'),
(4, 'Expoloitation'),
(5, 'Imformation Gathering'),
(6, 'Port ScaningPort Scaning'),
(7, 'Packet Analizers'),
(8, 'Vulnerabiity Scanners'),
(9, 'Addons');
--
-- Estructura de tabla para la tabla 'cursos'
--
CREATE TABLE IF NOT EXISTS cursos (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
    descripcion VARCHAR(1024) NOT NULL,
    precio DECIMAL(9,2)
);
--
-- Volcado de datos para la tabla 'cursos'
--
INSERT INTO cursos (id, nombre, descripcion, precio) VALUES
(1, "Introduccion a linux", "descrp", "10 €"),
(2, "Personalizacion del Enotorno", "descrp", "10 €"),
(3, "Basic PE", "descrp", "10 €"),
(4, "Pentesting Web", "descrp", "10 €"),
(5, "medium PE", "descrp", "10 €"),
(6, "Active Directory", "descrp", "10 €"),
(7, "Advanced PE", "descrp", "10 €");
--
--

-- --------------------------------------------------------
-- cart secction
-- --------------------------------------------------------

CREATE TABLE IF NOT EXISTS products (
    id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    product_code varchar(60) NOT NULL UNIQUE KEY,
    product_name varchar(60) NOT NULL,
    product_desc tinytext NOT NULL,
    product_img_name varchar(60) NOT NULL,
    price decimal(10,2) NOT NULL
);
--
-- Volcado datos for table 'products'
--
INSERT INTO products (id, product_code, product_name, product_desc, product_img_name, price) VALUES
(1, 'PD1001', 'MoBilePhone', 'Un movil muy chulo.', 'android-phone.jpg', 200.50),
(2, 'PD1002', 'TV Lcd Plasma Led', 'Tv Magica con conexion quantica.', 'lcd-tv.jpg', 500.85),
(3, 'PD1003', 'External Hard Disk', 'Disco duro de alta capacidad.', 'external-hard-disk.jpg', 100.00),
(4, 'PD1004', 'Wrist Watch ECC GT', 'Relog muy wapis con muchas cosas.', 'wrist-watch.jpg', 400.30),
(5, 'PD1005', 'basic Hack', 'Curso de hacking basico.', 'basic.jpg', 400.30),
(6, 'PD1006', 'PentestWeb', 'Curso pentesting Web.', 'pentesWeb.jpg', 400.30),
(7, 'PD1007', 'BspWm Eviroment', 'Linux Evironment superHack.', 'capi.png', 400.30);
--
--

-- --------------------------------------------------------
-- COMMENTS secction 
-- --------------------------------------------------------

--
-- Table structure for table ``
--
    -- ¡¡¡coming soon!!!
--
--