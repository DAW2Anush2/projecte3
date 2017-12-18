-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-12-2017 a las 19:20:25
-- Versión del servidor: 10.1.26-MariaDB
-- Versión de PHP: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `1718_aramzafraanush`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recurs`
--

CREATE TABLE `recurs` (
  `rec_id` int(4) NOT NULL,
  `rec_nom` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `rec_tipus` enum('Aula','Despatx','Sala','Objecte','Mobil','Portatil') COLLATE utf8_spanish_ci NOT NULL,
  `rec_contador` decimal(10,0) NOT NULL,
  `rec_estat` tinyint(1) NOT NULL,
  `rec_imatge` tinytext COLLATE utf8_spanish_ci,
  `rec_descripcio` text COLLATE utf8_spanish_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `recurs`
--

INSERT INTO `recurs` (`rec_id`, `rec_nom`, `rec_tipus`, `rec_contador`, `rec_estat`, `rec_imatge`, `rec_descripcio`) VALUES
(1, 'Xiaomi Redmi Note 4', 'Mobil', '1', 0, '../img/xiaomi.png', NULL),
(2, 'Samsung Galaxy Note 7', 'Mobil', '2', 0, '../img/samsung.png', NULL),
(3, 'Carro de portàtils', 'Objecte', '1', 1, '../img/carro.jpg', NULL),
(4, 'Macbook Pro', 'Portatil', '1', 0, '../img/mac.png', NULL),
(5, 'ASUS F541UV-GQ1078T', 'Portatil', '0', 1, '../img/asus.jpg', NULL),
(6, 'Aula de Tutoria 1', 'Aula', '1', 0, '../img/aulatuto1.jpg', NULL),
(7, 'Aula de Tutoria 2', 'Aula', '0', 1, '../img/aulatuto2.jpg', NULL),
(8, 'Aula de Tutoria 3(Sense projector)', 'Aula', '0', 1, '../img/aulatuto3.jpg', NULL),
(9, 'Aula Informatica', 'Aula', '0', 1, '../img/aulainfo.jpg', NULL),
(10, 'Aula Informatica 2', 'Aula', '0', 1, '../img/aulainfo2.jpg', NULL),
(11, 'Despatx Entrevista 1', 'Despatx', '0', 1, '../img/despatx1.jpg', NULL),
(12, 'Despatx Entrevista 2', 'Despatx', '0', 1, '../img/despatx2.jpg', NULL),
(13, 'Sala de Reunions', 'Sala', '0', 1, '../img/salareunio.jpg', NULL),
(14, 'Projector portatil', 'Objecte', '0', 1, '../img/projector.png', NULL),
(15, 'LENOVO Ideapad 110-15ACL', 'Portatil', '1', 1, '../img/lenovo.png', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reserva`
--

CREATE TABLE `reserva` (
  `res_id` int(4) NOT NULL,
  `rec_id` int(4) NOT NULL,
  `usu_id` int(4) NOT NULL,
  `res_inici` date NOT NULL,
  `res_alliberacio` date NOT NULL,
  `res_hora_inici` date NOT NULL,
  `res_hora_alliberacio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `reserva`
--

INSERT INTO `reserva` (`res_id`, `rec_id`, `usu_id`, `res_inici`, `res_alliberacio`, `res_hora_inici`, `res_hora_alliberacio`) VALUES
(5, 2, 12, '0000-00-00', '0000-00-00', '0000-00-00', 0),
(6, 4, 12, '0000-00-00', '0000-00-00', '0000-00-00', 0),
(7, 6, 12, '0000-00-00', '0000-00-00', '0000-00-00', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuari`
--

CREATE TABLE `usuari` (
  `usu_id` int(4) NOT NULL,
  `usu_nom` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `usu_contrasenya` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `usu_cognoms` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `usu_email` varchar(40) COLLATE utf8_spanish_ci DEFAULT NULL,
  `usu_telefon` decimal(9,0) DEFAULT NULL,
  `usu_nivell` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `usu_estat` varchar(30) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuari`
--

INSERT INTO `usuari` (`usu_id`, `usu_nom`, `usu_contrasenya`, `usu_cognoms`, `usu_email`, `usu_telefon`, `usu_nivell`, `usu_estat`) VALUES
(1, 'SI_ADMIN', 'Admon357', '357', 'admon.intranet@gmail.com', '933376542', 'administrador', 'habilitat'),
(2, 'Sebastian', 'Comunism2017', 'Matveyev', 'SebastianMatveyev@gmail.com', '434531085', 'usuari', 'habilitat'),
(3, 'Fabiano', 'PizzaTime2017', 'Calabrese', 'FabianoCalabrese@gmail.com', '435531085', 'usuari', 'habilitat'),
(4, 'John', 'WWE2017', 'Cena', 'JohnCena@gmail.com', '435531085', 'usuari', 'habilitat'),
(5, 'David', 'DavidCurtis2017', 'Curtis', 'DavidCurtis@gmail.com', '436531085', 'usuari', 'habilitat'),
(6, 'Alex', 'England2017', ' Bradley', 'AlexBradley@gmail.com', '437531085', 'usuari', 'habilitat'),
(12, 'Soleil', 'bae', 'Bae', 'SoleilBae@gmail.com', '933796778', 'administrador', 'habilitat');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `recurs`
--
ALTER TABLE `recurs`
  ADD PRIMARY KEY (`rec_id`);

--
-- Indices de la tabla `reserva`
--
ALTER TABLE `reserva`
  ADD PRIMARY KEY (`res_id`),
  ADD KEY `FK_usuari_reserva` (`usu_id`),
  ADD KEY `FK_recurs_reserva` (`rec_id`);

--
-- Indices de la tabla `usuari`
--
ALTER TABLE `usuari`
  ADD PRIMARY KEY (`usu_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `recurs`
--
ALTER TABLE `recurs`
  MODIFY `rec_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `reserva`
--
ALTER TABLE `reserva`
  MODIFY `res_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `usuari`
--
ALTER TABLE `usuari`
  MODIFY `usu_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `reserva`
--
ALTER TABLE `reserva`
  ADD CONSTRAINT `FK_recurs_reserva` FOREIGN KEY (`rec_id`) REFERENCES `recurs` (`rec_id`),
  ADD CONSTRAINT `FK_usuari_reserva` FOREIGN KEY (`usu_id`) REFERENCES `usuari` (`usu_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
