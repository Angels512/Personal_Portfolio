-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-07-2021 a las 05:52:06
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `portfolio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contact`
--

CREATE TABLE `contact` (
  `cont_id` int(11) NOT NULL,
  `cont_name` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `cont_email` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `cont_subject` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `cont_message` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `date_create` date NOT NULL,
  `est` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `contact`
--

INSERT INTO `contact` (`cont_id`, `cont_name`, `cont_email`, `cont_subject`, `cont_message`, `date_create`, `est`) VALUES
(1, '', '', '', '', '2021-07-24', 1),
(2, 'Miguel Angel', 'angelus@gmail.com', 'Esto es solo un test', 'Solo quiero realizar una prueba para mirar como se envían los correos electrónicos...', '2021-07-24', 1),
(3, 'Miguel Angel', 'miguel@gmail.com', 'Esto es solo un test.', 'La verdad solo quiero hacer una prueba con el correo.', '2021-07-24', 1),
(4, 'Catalina', 'catalina@gmail.com', 'Catalina es mi asunto', 'Este es solo un mensaje de prueba...!', '2021-07-24', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `education`
--

CREATE TABLE `education` (
  `edu_id` int(11) NOT NULL,
  `edu_title` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `edu_desc` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `edu_place` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `edu_date` date NOT NULL,
  `est` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `education`
--

INSERT INTO `education` (`edu_id`, `edu_title`, `edu_desc`, `edu_place`, `edu_date`, `est`) VALUES
(1, 'Tecnico en programacion de software', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, odio iusto?', 'SENA', '2018-11-10', 0),
(2, 'Tecnico en programacion de software', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, odio iusto?', 'SENA', '2019-11-10', 0),
(3, 'Tecnico en programacion de software', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, odio iusto?', 'SENA', '2020-11-10', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `experience`
--

CREATE TABLE `experience` (
  `exp_id` int(11) NOT NULL,
  `exp_title` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `exp_desc` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `exp_place` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `exp_date` date NOT NULL,
  `est` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `experience`
--

INSERT INTO `experience` (`exp_id`, `exp_title`, `exp_desc`, `exp_place`, `exp_date`, `est`) VALUES
(1, 'Web Developer', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, odio iusto?', 'Triple W', '2018-07-24', 0),
(2, 'Web Developer', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, odio iusto?', 'Triple W', '2019-07-24', 0),
(3, 'Web Developer', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, odio iusto?', 'Triple W', '2020-07-24', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `languajes`
--

CREATE TABLE `languajes` (
  `lang_id` int(11) NOT NULL,
  `port_id` int(11) NOT NULL,
  `lang_name` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `est` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `languajes`
--

INSERT INTO `languajes` (`lang_id`, `port_id`, `lang_name`, `est`) VALUES
(1, 1, 'Html', 1),
(2, 1, 'CSS', 1),
(3, 1, 'Bootstrap 4', 1),
(4, 2, 'Bootstrap 5', 1),
(5, 3, 'Html', 1),
(6, 3, 'Bootstrap 5', 1),
(7, 4, 'Html', 1),
(8, 4, 'CSS', 1),
(9, 4, 'Javascript', 1),
(10, 5, 'Html', 1),
(11, 5, 'Bootstrap 5', 1),
(12, 5, 'Javascript', 1),
(13, 6, 'Html', 1),
(14, 6, 'Bootstrap 4', 1),
(15, 6, 'Javascript', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `portfolio`
--

CREATE TABLE `portfolio` (
  `port_id` int(11) NOT NULL,
  `port_title` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `port_desc` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `port_img` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `port_date` date NOT NULL,
  `port_rol` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `port_domain` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `est` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `portfolio`
--

INSERT INTO `portfolio` (`port_id`, `port_title`, `port_desc`, `port_img`, `port_date`, `port_rol`, `port_domain`, `est`) VALUES
(1, 'Education course website', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo dolorum aliquam', '1.jpg', '2021-07-24', 'Frontend', 'www.domain.com', 1),
(2, 'Personal portfolio website', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo dolorum aliquam', '2.jpg', '2021-07-24', 'Frontend', 'www.domain.com', 1),
(3, 'App landing page', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo dolorum aliquam', '3.jpg', '2021-07-24', 'Frontend', 'www.domain.com', 1),
(4, 'Restaurant website', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo dolorum aliquam', '4.jpg', '2021-07-24', 'Frontend', 'www.domain.com', 1),
(5, 'Personal portfolio website', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo dolorum aliquam', '5.jpg', '2021-07-24', 'Frontend', 'www.domain.com', 1),
(6, 'Product landing page', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo dolorum aliquam', '6.jpg', '2021-07-24', 'Frontend', 'www.domain.com', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `skill`
--

CREATE TABLE `skill` (
  `skill_id` int(11) NOT NULL,
  `skill_name` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `est` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `skill`
--

INSERT INTO `skill` (`skill_id`, `skill_name`, `est`) VALUES
(1, 'Html', 1),
(2, 'CSS', 1),
(3, 'Bootstrap', 1),
(4, 'JavaScript', 1),
(5, 'PHP', 1),
(6, 'MySQL', 1),
(7, 'GitHub', 1),
(8, 'Wordpress', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `social`
--

CREATE TABLE `social` (
  `soc_id` int(11) NOT NULL,
  `soc_icon` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `soc_url` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `est` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `social`
--

INSERT INTO `social` (`soc_id`, `soc_icon`, `soc_url`, `est`) VALUES
(1, 'fa-facebook-f', '#', 1),
(2, 'fa-twitter', '#', 1),
(3, 'fa-instagram', '#', 1),
(4, 'fa-youtube', '#', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`cont_id`);

--
-- Indices de la tabla `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`edu_id`) USING BTREE;

--
-- Indices de la tabla `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`exp_id`);

--
-- Indices de la tabla `languajes`
--
ALTER TABLE `languajes`
  ADD PRIMARY KEY (`lang_id`),
  ADD KEY `FK__portfolio` (`port_id`);

--
-- Indices de la tabla `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`port_id`);

--
-- Indices de la tabla `skill`
--
ALTER TABLE `skill`
  ADD PRIMARY KEY (`skill_id`);

--
-- Indices de la tabla `social`
--
ALTER TABLE `social`
  ADD PRIMARY KEY (`soc_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `contact`
--
ALTER TABLE `contact`
  MODIFY `cont_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `education`
--
ALTER TABLE `education`
  MODIFY `edu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `experience`
--
ALTER TABLE `experience`
  MODIFY `exp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `languajes`
--
ALTER TABLE `languajes`
  MODIFY `lang_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `port_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `skill`
--
ALTER TABLE `skill`
  MODIFY `skill_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `social`
--
ALTER TABLE `social`
  MODIFY `soc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `languajes`
--
ALTER TABLE `languajes`
  ADD CONSTRAINT `FK__portfolio` FOREIGN KEY (`port_id`) REFERENCES `portfolio` (`port_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
