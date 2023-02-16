-- --------------------------------------------------------
--
-- Base de datos: 'hacktips'
--

CREATE DATABASE IF NOT EXISTS hacktips;
--
--
-- Estructura de tabla para la tabla 'users'
--
create table user(
	id int not null auto_increment primary key,
	fullname varchar(500) not null,
	username varchar(100) not null unique,
	email varchar(255) not null unique,
	password varchar(255) not null,
	created_at datetime not null
);
--
-- Volcado de datos para la tabla 'users'


-- Estructura de tabla para la tabla 'tools'
CREATE TABLE 'tools' (
  'id' INT NOT NULL,
  'name' varchar(64) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;
--
-- Volcado de datos para la tabla 'tools'
--
INSERT INTO 'tools' ('id', 'name') VALUES
('1', 'GitHub3rs'),
('2', 'Pasword Crackers'),
('3', 'Proxies'),
('4', 'Expoloitation'),
('5', 'Imformation Gathering'),
('6', 'Port ScaningPort Scaning'),
('7', 'Packet Analizers'),
('8', 'Vulnerabiity Scanners'),
('9', 'Addons');
--
-- Índices para tablas volcadas
--
-- Indices de la tabla 'tools'
--
ALTER TABLE 'tools'
ADD PRIMARY KEY ('id');
COMMIT;
-- Estructura de tabla para la tabla 'cursos'
CREATE TABLE 'cursos' ('id' INT NOT NULL,) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;
CREATE TABLE 'basic' ('id' INT NOT NULL,) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;
CREATE TABLE 'medium' ('id' INT NOT NULL,) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;
CREATE TABLE 'advanced' ('id' INT NOT NULL,) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */
;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */
;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */
;