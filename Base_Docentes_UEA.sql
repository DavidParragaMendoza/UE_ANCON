-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-01-2026 a las 00:28:14
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ueanconc_proyecto2`
--
CREATE DATABASE IF NOT EXISTS `ueanconc_proyecto2` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `ueanconc_proyecto2`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesor`
--

CREATE TABLE `profesor` (
  `ID` int(255) NOT NULL,
  `NOMBRE` varchar(255) NOT NULL,
  `APELLIDO` varchar(255) NOT NULL,
  `FOTO` varchar(255) NOT NULL,
  `CARGO` varchar(255) NOT NULL,
  `ESTADO` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `profesor`
--

INSERT INTO `profesor` (`ID`, `NOMBRE`, `APELLIDO`, `FOTO`, `CARGO`, `ESTADO`) VALUES
(1, 'MSc. Jorge', 'Merejildo', '1736896135_JORGE MEREJILDO.jpg', 'RECTOR', 1),
(2, 'MG. Guido', 'Tomalá', '1737839059_GUIDO TOMALA.jpg', 'VICERRECTOR-MATUTINA', 1),
(3, 'MSc. Luis', 'Aguirre', '1736899213_LUIS AGUIRRE.jpg', 'VICERRECTOR-VESPERTINA', 1),
(4, 'Lic. Mercedes ', 'Alvarado', '1736899418_MERCEDES ALVARADO.jpg', 'DOCENTE', 1),
(5, 'Lic. Zita', 'Alvarado', '1736992903_ZITA ALVARADO.jpg', 'DOCENTE', 1),
(6, 'MSc. Jorge ', 'Bazan ', '1737046635_JORGE BAZAN.jpg', 'DOCENTE ', 1),
(7, 'Lic. Darwin ', 'Bolaños', '1736996228_DARWIN BOLAÑOS.jpg', 'DOCENTE ', 1),
(8, 'MSc. Roberto ', 'Cabrera', '1736996357_ROBERTO CABRERA.jpg', 'DOCENTE ', 1),
(9, 'WILLINGTON', 'DELACRUZ', '1702605385_wili.jpeg', 'PROFESOR/A', 0),
(10, 'MSc. Esnaida', 'Galarza', '1737046744_SONIA GALARZA.jpg', 'DOCENTE ', 1),
(11, 'MSc. Lucy', 'González ', '1737047012_LUCY GONZALEZ.jpg', 'DOCENTE ', 1),
(12, 'PROF. Jimmy ', 'Laínez ', '1737046831_37.jpg', 'DOCENTE ', 1),
(13, 'MSc. Liliana', 'Lucin', '1737051964_LILIANA LUCIN.jpg', 'DOCENTE ', 1),
(14, 'LCDa. Gloria ', 'Mero', '1737088518_17.jpg', 'DOCENTE ', 1),
(15, 'MSc. Mónica ', 'Piguave', '1737089091_10.jpg', 'DOCENTE ', 1),
(16, 'MSc. Carmen ', 'Ponce', '1736998284_CARMEN PONCE.jpg', 'DOCENTE ', 1),
(17, 'MSc. Marjorie', 'Quimi', '1737052068_MARJORIE QUIMI.jpg', 'DOCENTE ', 1),
(18, 'Ing. Juan', 'Quirumbay', '1737838869_JUAN QUIRUMBAY.jpg', 'DOCENTE', 1),
(19, 'MG. Nieve ', 'Reyes ', '1737047285_NIEVE REYES.jpg', 'DOCENTE ', 1),
(20, 'MSc. Angel ', 'Reyes ', '1738776835_5.jpg', 'DOCENTE ', 1),
(21, 'Lic. José ', 'Vera', '1737089740_JOSE VERA.jpg', 'DOCENTE ', 1),
(22, 'MARJORIE', 'RIVERA', '', 'PROFESOR/A', 0),
(23, 'MSc. Jennifer ', 'Rodríguez ', '1737089810_JENIFFER RODRIGUEZ.jpg', 'DOCENTE ', 1),
(24, 'MSc. Julio ', 'Rosales ', '1736997919_JULIO ROSALES.jpg', 'DOCENTE ', 1),
(25, 'LUZ', 'SANCHEZ', '', 'PROFESOR/A', 0),
(26, 'MG. Cesar ', 'Soledispa', '1736998041_CESAR SOLEDISPA.jpg', 'DOCENTE ', 1),
(27, 'MSc. Jhonny', 'Solari', '1736997744_WLADIMIR SOLARI.jpg', 'DOCENTE ', 1),
(28, 'LCDa. Rosa', 'Soriano ', '1737046926_ROSA SORIANO.jpg', 'DOCENTE ', 1),
(29, 'JORGE', 'TIGRERO', '1702604808_jorge.jpeg', 'PROFESOR/A', 0),
(30, 'MSc. Jose ', 'Tomalá ', '1737088588_33.jpg', 'DOCENTE ', 1),
(31, 'PEDRO', 'TORRES', '1702604834_PEDRO_TORRES_GARCIA.jpeg', 'PROFESOR/A', 0),
(32, 'Ing. Omar', 'Reyes', '1737839115_OMAR REYES.jpg', 'DOCENTE', 1),
(33, 'LCDa. Germania', 'Villalva ', '1737089272_19.jpg', 'DOCENTE ', 0),
(34, 'MSc. Rosa', 'Villon', '1737048318_ROSA VILLON.jpg', 'DOCENTE ', 1),
(35, 'MARIO', 'YAGUAL', '1702605226_mario.jpeg', 'PROFESOR/A', 0),
(36, 'LCDa. Ariana ', 'Castro ', '1737047402_ARIANA CASTRO.jpg', 'DOCENTE ', 1),
(37, 'ELIOT', 'DELAA', '', 'PROFESOR/A', 0),
(38, 'PATRICIA', 'MAGALLANES', '', 'PROFESOR/A', 0),
(39, 'FERNANDO', 'RODRIGUEZ', '', 'PROFESOR/A', 0),
(40, 'LCDa. Alexandra ', 'Villon', '1737089017_19.jpg', 'DOCENTE ', 1),
(41, 'BYRON', 'ALEJANDRO', '', 'PROFESOR/A', 0),
(42, 'MSc. Edith', 'Cedeño ', '1737051269_EDITH CEDEÑO.jpg', 'DOCENTE ', 1),
(43, 'ING. Adriana', 'Reyes ', '1737047990_ADRIANA REYES.jpg', 'DOCENTE', 1),
(44, 'MSc. Evit', 'Suárez ', '1737088764_32.jpg', 'DOCENTE ', 1),
(45, 'MSc. Carlos', 'Tomalá', '1738776951_4.jpg', 'SECRETARIO', 1),
(46, 'Tnlog. Miguel ', 'Tomalá ', '1737088696_16.jpg', 'DOCENTE ', 1),
(47, 'Marcelo', 'Reyes ', '1737052375_MARCELO REYES.jpg', 'DOCENTE ', 1),
(48, 'PS. Johanna ', 'Salinas', '1736999361_JOHANNA SALINAS.jpg', 'PSICOLOGA', 1),
(49, 'MARCOS', 'PARRALES', '', 'PROFESOR/A', 0),
(50, 'EMMA', 'BAZAN', '', 'PROFESOR/A', 0),
(51, 'Lic. Norma', 'Avila ', '1737048232_NORMA AVILA.jpg', 'DOCENTE', 1),
(52, 'HUGO', 'QUINDE', '', 'PROFESOR/A', 0),
(53, 'MSc. Johanna', 'Mateo', '1736998343_JOHANNA MATEO.jpg', 'DOCENTE ', 1),
(54, 'MSc. Jessenia', 'Sarango', '1737047666_JESSENIA SARANGO.jpg', 'DOCENTE ', 1),
(55, 'MSc. Jorge ', 'Roman', '1737047841_JORGE ROMAN.jpg', 'DOCENTE', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `profesor`
--
ALTER TABLE `profesor`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `profesor`
--
ALTER TABLE `profesor`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
