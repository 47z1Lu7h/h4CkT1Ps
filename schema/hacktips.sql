-- --------------------------------------------------------
-- Base de datos: 'hacktips'
--
CREATE DATABASE IF NOT EXISTS hacktips;
use hacktips;
--
--
-- Estructura de tabla para la tabla 'users'
--
CREATE TABLE IF NOT EXISTS user(
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
INSERT INTO tools (id, fullname, username, email, password, created_at) VALUES
(1, 'manolo anda borracho', 'admin', 'admin@admin.com', 'admin', 'NOW');
--
-- Estructura de tabla para la tabla 'tools'
--
CREATE TABLE tools(
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
CREATE TABLE IF NOT EXISTS cursos(
    id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
    descripcion VARCHAR(1024) NOT NULL,
    precio DECIMAL(9,2)
);
CREATE TABLE IF NOT EXISTS carrito_usuarios(
    id_sesion VARCHAR(255) NOT NULL,
    id_producto BIGINT UNSIGNED NOT NULL,
    FOREIGN KEY (id_producto) REFERENCES cursos(id)
    ON UPDATE CASCADE ON DELETE CASCADE
);
--
-- Volcado de datos para la tabla 'products'
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