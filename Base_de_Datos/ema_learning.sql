-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-11-2022 a las 14:49:25
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ema_learning`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `categoria` varchar(40) NOT NULL,
  `descripcion` text NOT NULL,
  `imagen` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `categoria`, `descripcion`, `imagen`) VALUES
(1, 'Ciencia y Matemáticas', 'Adquiere los conocimientos que debes saber sobre diferentes ciencias para aplicarlos en tu vida cotidiana.', ''),
(2, 'Formación profesional\n', 'Encontrarás tips y conceptos sobre algunos aspectos que debes tener en cuenta a la hora de montar tu propia empresa, salir del colegio, cuando estés trabajando y en general, de tu vida cotidiana.', ''),
(3, 'Idiomas', 'Aprenderás estos idiomas de una forma práctica, lógica y consciente. Tu elijes el nivel por el que quieres empezar.', ''),
(4, 'Lenguaje e Inclusión\n', 'Aprende a comunicarte con aquellas minorías y gente con capacidades diferentes, o quien sabe, tal vez es a la inversa. ', ''),
(5, 'Tecnologia', '¡No te dejes intimidar por la tecnología! Aquí puedes adquirir todos los conocimientos básicos y habilidades que necesitas para enfrentar tu vida laboral y cotidiana.\r\n\r\n', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursos`
--

CREATE TABLE `cursos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `categoria` int(30) NOT NULL,
  `descripcion` text NOT NULL,
  `duracion` decimal(6,2) NOT NULL DEFAULT 0.00,
  `precio` decimal(6,2) NOT NULL DEFAULT 0.00,
  `imagen` varchar(1000) NOT NULL,
  `color` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cursos`
--

INSERT INTO `cursos` (`id`, `nombre`, `categoria`, `descripcion`, `duracion`, `precio`, `imagen`, `color`) VALUES
(1, 'Curso LSM', 4, 'En este curso de lengua de señas mexicana aprenderás aplicar los fundamentos de la lengua de señas dentro del contexto mexicano...', '111.00', '150.00', 'img/img1.jpg', '#1e6f5c'),
(2, 'Informática Básica', 5, 'Aprende cómo empezar a usar un computador desde el principio, cuáles son sus partes, cómo conectarlo e instalar programas.', '9999.99', '100.00', 'https://www.aicad.es/asset/img/480x270/2/principios-de-la-seguridad-informtica_6590441873.jpg', '#289672'),
(5, 'El ABC del Braille', 4, 'Este curso tiene como finalidad principal que la población sin discapacidad visual se familiarice de forma didáctica con el sistema Braille y conozca ...', '9999.99', '200.00', 'https://1.bp.blogspot.com/-yaNNgC_hVhQ/XmqY0tDjP7I/AAAAAAAAF7k/x_6_1tDGEaIMgW8Or9T-fPwNdjKoiXzNwCLcBGAsYHQ/s1600/braille-e1543935180468.jpg', '#29bb89'),
(6, 'Office 365', 5, 'En este curso de Office 365 aprenderás cómo utilizar Microsoft Office 365 para comunicarte, colaborar y mejorar la productividad de tus equipos de trabajo, ...', '9999.99', '200.00', 'https://www.curveballsolutions.com/wp-content/uploads/2020/02/office365.png', '#e9896a'),
(7, 'Administración de Redes Sociales', 5, 'Aporta las herramientas necesarias para entrar al mundo de las redes sociales. Al finalizar el curso el alumno estará capacitado para crear...', '9999.99', '100.00', 'https://www.unir.net/wp-content/uploads/2020/08/redes-sociales-educacion.jpg', '#343f56'),
(8, 'Sistemas operativos', 5, 'Un sistema operativo es lo que permite que puedas comunicarte con tu computador. Aquí aprenderás qué sistemas operativo hay, sus diferencias y cómo usar cada uno de ellos.', '5858.00', '120.00', 'https://s3.amazonaws.com/s3.timetoast.com/public/uploads/photo/11612610/image/a02ec51cfc7e41bf82493af73af44a21', '#ff7171'),
(9, 'Educación financiera', 2, 'Encontrarás herramientas, consejos y conceptos que te ayudarán a tener el control de tus finanzas en tu vida cotidiana.', '9999.99', '180.00', 'img/img6.jpg', '#007580'),
(10, 'Herramientas de utilidad', 2, 'Descubre diversas plataformas digitales que puedes utilizar en tus clases virtuales para enseñar de forma dinámica, sencilla y diferente a tus estudiantes.', '9999.99', '50.00', 'img/imagenesweb/4818.png', '#282846'),
(11, 'Habilidades blandas', 2, 'Conoce algunas herramientas para relacionarte exitosamente en entornos laborales y potenciar habilidades como el liderazgo, la comunicación asertiva y el trabajo en equipo.', '9999.99', '99.00', 'img/img2.jpg', '#fed049'),
(12, 'Ingles', 3, 'Este espacio te ofrece la libertad que necesitas para aprender este idioma a tu propio ritmo.', '9999.99', '56.56', 'img/img4.jpg', '#29bb89'),
(13, 'Japones', 3, 'Este espacio te ofrece la libertad que necesitas para aprender este idioma a tu propio ritmo.\r\nEscoge la forma con la que quieres aprender:', '9999.99', '99.00', 'https://www.aprendemas.com/mx/blog/images/2016/09/japones_empleo.jpg', '#e9896a'),
(14, 'Aritmética', 1, 'Las operaciones básicas, las fracciones o decimales son algunos de los conocimientos que necesitas diariamente a la hora de hacer tus compras o tener un negocio. Aprende todos estos conceptos aquí.', '9999.99', '50.00', 'https://matemovil.com/wp-content/uploads/2020/10/Aritmetica-5.png', '#1e6f5c'),
(15, 'Geometria', 1, 'Aprenderás los conceptos básicos sobre la geometría y cuáles son sus principales propiedades.', '9999.99', '50.00', 'https://etimologia.com/wp-content/uploads/cultura/geometria-formas-figuras.jpg', '#282846'),
(16, 'Algebra', 1, 'Veamos cómo usar números negativos, exponentes, leer y escribir expresione...', '9999.99', '50.00', 'https://concepto.de/wp-content/uploads/2019/12/algebra-e1577465340342.jpg', '#007580'),
(17, 'Fisica General', 1, 'Aprende temas básicos de física, como las tres leyes de Newton, la ley de la gravedad, movimiento rotativo y circular, entre muchos otros, con nosotros.', '9999.99', '69.00', 'https://aprendihoy.com/wp-content/uploads/2020/12/physics-image-featured-930x620.png', '#29bb89');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `destacados`
--

CREATE TABLE `destacados` (
  `id` int(200) NOT NULL,
  `destacado` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `destacados`
--

INSERT INTO `destacados` (`id`, `destacado`) VALUES
(1, 1),
(2, 2),
(3, 9),
(4, 12),
(5, 16);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(250) NOT NULL,
  `code` int(11) NOT NULL DEFAULT 0,
  `status` varchar(8) NOT NULL DEFAULT 'ok',
  `foto` varchar(1000) NOT NULL DEFAULT 'https://img.blogs.es/anexom/wp-content/uploads/2021/12/perfil-1024x754.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `email`, `password`, `code`, `status`, `foto`) VALUES
(28, 'asdasd', 'l18181156@slp.tecnm.mx', '$2y$10$LxxWupFtl/M/E15Wcudv/euGcR9jD7OrciVxpdev2oD2IQLf.Cor.', 0, 'ok', ''),
(29, 'correo', 'correo@correo.com', '$2y$10$Jf7FffIo6i4Hb5FdeAK5F..zf3YShJy6064qvYkG2I1cM5iuk7YkO', 0, 'ok', 'https://img.blogs.es/anexom/wp-content/uploads/2021/12/perfil-1024x754.jpg'),
(30, 'adal', 'adal@adal.com', '$2y$10$3.6E6JWD7O.MIzegBxGvAugH6EzsPRYKnEkJrUwHqH39BZSwxGcZG', 0, 'ok', 'https://img.blogs.es/anexom/wp-content/uploads/2021/12/perfil-1024x754.jpg'),
(31, 'gerry', 'gerry@gerry.com', '$2y$10$/sM.d0YE.ZvvKFafkuhNROPfEWOsLfQT5eKRwCJGqT2IgGZ4tU8ym', 0, 'ok', 'https://img.blogs.es/anexom/wp-content/uploads/2021/12/perfil-1024x754.jpg'),
(32, 'soy gay', 'hector@gay.com', '$2y$10$cfMia/HHNjo26eM4JN/EmuR6l8TyORTFRS7cIcG1aS/Ymd9hpMhmC', 0, 'ok', 'https://img.blogs.es/anexom/wp-content/uploads/2021/12/perfil-1024x754.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_cursos_categorias` (`categoria`);

--
-- Indices de la tabla `destacados`
--
ALTER TABLE `destacados`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_cursos_destacado` (`destacado`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `cursos`
--
ALTER TABLE `cursos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `destacados`
--
ALTER TABLE `destacados`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cursos`
--
ALTER TABLE `cursos`
  ADD CONSTRAINT `fk_cursos_categorias` FOREIGN KEY (`categoria`) REFERENCES `categorias` (`id`);

--
-- Filtros para la tabla `destacados`
--
ALTER TABLE `destacados`
  ADD CONSTRAINT `fk_cursos_destacado` FOREIGN KEY (`destacado`) REFERENCES `cursos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
