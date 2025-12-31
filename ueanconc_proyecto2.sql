-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 10-09-2025 a las 17:47:43
-- Versión del servidor: 10.3.39-MariaDB-log
-- Versión de PHP: 8.1.33

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
-- Estructura de tabla para la tabla `libros`
--

CREATE TABLE `libros` (
  `ID` int(255) NOT NULL,
  `MATERIA` varchar(255) NOT NULL,
  `ANO` varchar(255) NOT NULL,
  `NOMBRE` varchar(255) NOT NULL,
  `RUTA` varchar(255) NOT NULL,
  `LIBRO_ID` varchar(255) NOT NULL,
  `ESTADO` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `libros`
--

INSERT INTO `libros` (`ID`, `MATERIA`, `ANO`, `NOMBRE`, `RUTA`, `LIBRO_ID`, `ESTADO`) VALUES
(1, 'BIOLOGIA', '3ERO', 'BIOLOGIA_3_BGU.pdf', 'https://drive.google.com/open?id=1y3Eh86A3dHmRJAcSldAfwBY63pbJLAIr', '1y3Eh86A3dHmRJAcSldAfwBY63pbJLAIr', 1),
(2, 'EMPREDIMIENTO', '3ERO', 'empredimiento.pdf', 'https://drive.google.com/open?id=1qt_cGm8GQa72HWY6xxjvyr00caNCv4H4', '1qt_cGm8GQa72HWY6xxjvyr00caNCv4H4', 1),
(3, 'Biología', '2do', 'BIOLOGIA_3_BGU.pdf', 'https://drive.google.com/open?id=1eInGdtUkhY9aNY4kj_oGMj-CcdB_nXLD', '1eInGdtUkhY9aNY4kj_oGMj-CcdB_nXLD', 1),
(4, 'Biologías', '3ero', 'UNIDAD EDUCATIVA ANCÓN (3).docx', 'https://drive.google.com/open?id=1lreZrDOWo8ldLBUPLwOq5wnOuzKa2HbE', '1lreZrDOWo8ldLBUPLwOq5wnOuzKa2HbE', 1),
(5, 'Inglés', '9no', 'CIRCULAR REAPERTURA Y FINALIZACION DE JUEGOS INTERNOS.docx.pdf', 'https://drive.google.com/open?id=1dcrok_bx9LY4QUAn7cHqhHNUyL5QOUeA', '1dcrok_bx9LY4QUAn7cHqhHNUyL5QOUeA', 1),
(6, '', '', 'Temario para examen de 3er trimestre de EDUCACIÓN FÍSICA.docx', 'https://drive.google.com/open?id=1un8M9yaWtG8ND54oQ3-3yTBDVVdlkvuy', '1un8M9yaWtG8ND54oQ3-3yTBDVVdlkvuy', 0),
(7, '', '1ero', 'Temario para examen de 3er trimestre de EDUCACIÓN FÍSICA.docx', 'https://drive.google.com/open?id=10Jr-9fMo-LzZCxEMrdekrwear_7azGYj', '10Jr-9fMo-LzZCxEMrdekrwear_7azGYj', 0),
(8, '', '10mo', 'Temario para examen de 3er trimestre de EDUCACIÓN FÍSICA.docx', 'https://drive.google.com/open?id=1I3bdQ30Rrk1GfgcPOulZB3JSDkDSfvMV', '1I3bdQ30Rrk1GfgcPOulZB3JSDkDSfvMV', 0),
(9, '', '9no', 'Temario para examen de 3er trimestre de EDUCACIÓN FÍSICA.docx', 'https://drive.google.com/open?id=1bUBu915Q8bH5vr2uF6PeUxLyVMHlfRs1', '1bUBu915Q8bH5vr2uF6PeUxLyVMHlfRs1', 0),
(10, '', '8vo', 'Temario para examen de 3er trimestre de EDUCACIÓN FÍSICA.docx', 'https://drive.google.com/open?id=1CslIWXpV1aJm7iPsnL_rme2ZPy4l3-vo', '1CslIWXpV1aJm7iPsnL_rme2ZPy4l3-vo', 0),
(11, 'Inglés', '8vo', 'Temario para examen de 3er trimestre de EDUCACIÓN FÍSICA.docx', 'https://drive.google.com/open?id=1HsQ1e_IE5pwgT2mULVmTCxid8vtpudzM', '1HsQ1e_IE5pwgT2mULVmTCxid8vtpudzM', 1),
(12, 'HOLA', '3ero', 'Uso de drones en agricultura.docx', 'https://drive.google.com/open?id=1Gh3r4QFGmU4650_hRUac_Oilf9anQSIW', '1Gh3r4QFGmU4650_hRUac_Oilf9anQSIW', 0),
(13, 'PROGRAMACION EN Cpp', '8vo', '1bgu-Len-Mat-Emp-F1_2.pdf', 'https://drive.google.com/open?id=1MtI1G034O9eqb1GPicE5Q86Jii1fTCsZ', '1MtI1G034O9eqb1GPicE5Q86Jii1fTCsZ', 1),
(14, 'Filosofía', '1ero', 'M_PBD_S26-1_2do.pdf', 'https://drive.google.com/open?id=1xirLVw97Ytyk8xrce7iuhdrrLgNB-94U', '1xirLVw97Ytyk8xrce7iuhdrrLgNB-94U', 0),
(15, 'Matemáticas', '1ero', 'Actividad de Matemática.pdf', 'https://drive.google.com/open?id=1E0Bzo_r42pTg7eXjiShqKD0--i9p9Cva', '1E0Bzo_r42pTg7eXjiShqKD0--i9p9Cva', 1),
(16, 'Química', '2do', 'Actividad de Matemática.pdf', 'https://drive.google.com/open?id=1FYJrurMNBuB-knQQ0bjA6oNTKnTlDARZ', '1FYJrurMNBuB-knQQ0bjA6oNTKnTlDARZ', 1),
(17, 'Física', '8vo', 'Actividad de Matemática.pdf', 'https://drive.google.com/open?id=10oVmKFlooEjgGSBpx0WadKdVkMwi4vUw', '10oVmKFlooEjgGSBpx0WadKdVkMwi4vUw', 1),
(18, 'Educación para la ciudadanía', '8vo', 'Actividad de Matemática.pdf', 'https://drive.google.com/open?id=1fpT3eUGYtZ7fdlqT_uCbUQEHJzLd51z8', '1fpT3eUGYtZ7fdlqT_uCbUQEHJzLd51z8', 1),
(19, 'Filosofía', '10mo', 'Actividad de Matemática.pdf', 'https://drive.google.com/open?id=1IwLar3AouyXA8LsyzSYcx1Jp9bB79jSe', '1IwLar3AouyXA8LsyzSYcx1Jp9bB79jSe', 1),
(20, 'HOLA2', '2do', 'DOCUMENTACION-2.pdf', 'https://drive.google.com/open?id=1-bTSztnMB_F8F2K69pc3tLt6b3bZcV1j', '1-bTSztnMB_F8F2K69pc3tLt6b3bZcV1j', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libro_fav`
--

CREATE TABLE `libro_fav` (
  `ID` int(255) NOT NULL,
  `USUARIO` int(255) NOT NULL,
  `LIBRO` int(255) NOT NULL,
  `ESTADO` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

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
(45, 'MSc. Carlos', 'Tomalá', '1738776951_4.jpg', 'SECRETARIO', 0),
(46, 'Tnlog. Miguel ', 'Tomalá ', '1737088696_16.jpg', 'DOCENTE ', 1),
(47, 'Marcelo', 'Reyes ', '1737052375_MARCELO REYES.jpg', 'DOCENTE ', 1),
(48, 'PS. Johanna ', 'Salinas', '1736999361_JOHANNA SALINAS.jpg', 'PSICÓLOGA', 1),
(49, 'MARCOS', 'PARRALES', '', 'PROFESOR/A', 0),
(50, 'EMMA', 'BAZAN', '', 'PROFESOR/A', 0),
(51, 'Lic. Norma', 'Avila ', '1737048232_NORMA AVILA.jpg', 'DOCENTE', 1),
(52, 'HUGO', 'QUINDE', '', 'PROFESOR/A', 0),
(53, 'MSc. Johanna', 'Mateo', '1736998343_JOHANNA MATEO.jpg', 'DOCENTE ', 1),
(54, 'MSc. Jessenia', 'Sarango', '1737047666_JESSENIA SARANGO.jpg', 'DOCENTE ', 1),
(55, 'MSc. Jorge ', 'Roman', '1737047841_JORGE ROMAN.jpg', 'DOCENTE', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `ID` int(255) NOT NULL,
  `NOMBRE` varchar(255) NOT NULL,
  `APELLIDO` varchar(255) NOT NULL,
  `FOTO` varchar(255) NOT NULL,
  `USUARIO` varchar(255) NOT NULL,
  `CONTRASENA` varchar(255) NOT NULL,
  `ROL` varchar(255) NOT NULL,
  `ESTADO` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`ID`, `NOMBRE`, `APELLIDO`, `FOTO`, `USUARIO`, `CONTRASENA`, `ROL`, `ESTADO`) VALUES
(1, 'JUAN', 'QUIRUMBAY', '1705982582_JQ.jpeg', 'JQ_ADMIN2024', '123456789', 'ADMIN', '1'),
(2, 'RONALD DAVID', 'PARRAGA MENDOZA', '1705982760_Parraga.jpg', 'DAVID_PARRAGA1', '123456789', 'Estudiante', '1'),
(3, '1-1', '1-1', '', '1-1', '1-1', 'ADMIN', '1'),
(4, 'angela andrea', 'González moreno ', '', 'angela', 'angela123', 'Estudiante', '1'),
(5, 'Justin David', 'Cabrera Paredes', '', 'justin_2009', 'yosoydeanconsantaelena', 'Estudiante', '1'),
(6, 'Justin David ', 'Cabrera Paredes', '', '2009_justin', '2009_justinp', 'Estudiante', '1'),
(7, 'jordy sebastian', 'macias escobar', '', 'jordy macias', 'JSME2007', 'Estudiante', '1'),
(8, 'd', 'd', '', 'd-d', 'd-d', 'Estudiante', '1'),
(9, 'JOYCE', 'ORDENANA', '', 'jordenana', 'ORDENANA', 'Estudiante', '1'),
(10, 'JHON JAME', 'PIGUAVE HERRERA', '', 'jhon', 'Alancito1', 'Estudiante', '1'),
(11, 'Ruddy Joel', 'Mesias Bernabe', '', 'ruddy1', 'elcrakdefernan12', 'Estudiante', '1'),
(12, 'Sebastian', 'Escobar', '', 'sebastianadmin', '123456', 'Estudiante', '1'),
(13, 'leonel fernando', 'liriano suarez', '', '2450475369', '2450475369', 'Estudiante', '1'),
(14, 'Dylan Leonel ', 'Peralta Carrasco ', '', 'Dylan ', '2400370793', 'Estudiante', '1'),
(15, 'Patricia Cecibell', 'Orrala Tumbaco', '', 'Patricia o', '123456789mo', 'Estudiante', '1'),
(16, 'Carlos Josue', 'Merchan Orrala', '', 'Carlos M', '123456789mo', 'Estudiante', '1');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `libros`
--
ALTER TABLE `libros`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `libro_fav`
--
ALTER TABLE `libro_fav`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `USUARIO` (`USUARIO`),
  ADD KEY `LIBRO` (`LIBRO`);

--
-- Indices de la tabla `profesor`
--
ALTER TABLE `profesor`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `libros`
--
ALTER TABLE `libros`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `libro_fav`
--
ALTER TABLE `libro_fav`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `profesor`
--
ALTER TABLE `profesor`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `libro_fav`
--
ALTER TABLE `libro_fav`
  ADD CONSTRAINT `libro_fav_ibfk_1` FOREIGN KEY (`USUARIO`) REFERENCES `usuarios` (`ID`),
  ADD CONSTRAINT `libro_fav_ibfk_2` FOREIGN KEY (`LIBRO`) REFERENCES `libros` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
