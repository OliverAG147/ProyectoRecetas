-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-12-2021 a las 19:44:03
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `apprecetas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(4) NOT NULL,
  `name_categoria` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `name_categoria`) VALUES
(1, 'comida'),
(2, 'bebida'),
(3, 'postre');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nacionalidad`
--

CREATE TABLE `nacionalidad` (
  `id_nacionalidad` int(4) NOT NULL,
  `name_nacionalidad` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `nacionalidad`
--

INSERT INTO `nacionalidad` (`id_nacionalidad`, `name_nacionalidad`) VALUES
(1, 'mexicano'),
(2, 'japones'),
(3, 'estadounidense'),
(4, 'ruso');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pais`
--

CREATE TABLE `pais` (
  `id_pais` int(4) NOT NULL,
  `name_pais` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pais`
--

INSERT INTO `pais` (`id_pais`, `name_pais`) VALUES
(1, 'mexico'),
(2, 'japon'),
(3, 'estados unidos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `receta`
--

CREATE TABLE `receta` (
  `id_receta` int(11) NOT NULL,
  `name_receta` varchar(30) NOT NULL,
  `ingrediente_receta` text NOT NULL,
  `procedimiento_receta` text NOT NULL,
  `img_receta` longblob NOT NULL,
  `categoria` int(4) NOT NULL,
  `pais` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `receta`
--

INSERT INTO `receta` (`id_receta`, `name_receta`, `ingrediente_receta`, `procedimiento_receta`, `img_receta`, `categoria`, `pais`) VALUES
(3, 'Mole poblano', '(Mole poblano para 20 personas)\r\n\r\n500 gramos de chiles mulatos\r\n750 gramos de chiles pasillas\r\n750 gramos de chiles anchos (las tres variedades de chiles van desvenados y despepitados)\r\n450 gramos de manteca de cerdo\r\n5 dientes de ajo medianos\r\n2 cebollas medianas rebanadas\r\n4 tortillas duras partidas en cuatro\r\n1 bolillo frito bien dorado\r\n125 gramos de pasitas\r\n250 gramos de almendras\r\nPepitas de chile al gusto\r\n150 gramos de ajonjolí\r\n½ cucharada de anís\r\n1 cucharadita de clavo en polvo o 5 clavos de olor\r\n25 gramos de canela en trozo\r\n1 cucharadita de pimienta negra en polvo o 6 pimientas enteras\r\n4 tabletas de chocolate de metate\r\n250 gramos de jitomate pelado y picado\r\nAzúcar y sal al gusto\r\n1 guajolote o pavo grande partido en piezas y cocido en un buen caldo hecho con zanahorias, poro, cebolla, una rama de apio, perejil y un diente de ajo.', 'Los chiles se pasan por 300 gramos de manteca caliente, se colocan en una cazuela con agua muy caliente y se deja que den un hervor para que se suavicen.\r\n\r\nEn la misma manteca se acitronan el ajo y la cebolla, se añaden la tortilla, el pan, las pasas, las almendras, las pepitas de chile, la mitad del ajonjolí, el anís, el clavo, la canela, las pimientas, el chocolate y el jitomate y se fríe todo muy bien; se agregan los chiles escurridos y se fríe unos segundos más.\r\n\r\nTodo lo anterior se muele en la licuadora con el caldo donde se coció el pavo y se cuela. En una cazuela de barro especial para mole se pone a calentar el resto de la manteca, se añade la salsa, se deja hervir el mole durante cinco minutos, se sazona con sal y azúcar y, si es necesario, se añade más caldo; debe quedar una salsa espesa. Se deja hervir de 25 a 30 minutos más a fuego lento, se añaden los trozos de guajolote y se deja hervir unos minutos más.', 0x4d6f6c652d706f626c616e6f2e6a7067, 1, 1),
(4, 'Entre sábanas cóctel', '30 ml. de ron blanco\r\n 30 ml. de cointreau\r\n 30 ml. de brandy\r\n 7 ml. de zumo de limón\r\n 1 chorrito de angostura', '1\r\nEl entre sábanas cóctel se prepara en coctelera, así que en el vaso pondremos bastante hielo picado y, a continuación, agregaremos el ron blanco, el cointreau, el brandy, el zumo de limón y un chorrito de angostura.\r\n\r\n2\r\nAgitamos el entre sábanas cóctel hasta que veamos que la coctelera se cubre de escarcha. En ese momento elegimos una copa de martini o un vaso old fashioned y, con la ayuda del colador, filtramos el líquido en el vaso.\r\n\r\n3\r\nAdornamos la bebida con una rodaja de limón en el borde y, si os gusta el toque más dulce, podéis poner dentro una guinda marrasquinada.\r\n\r\n4\r\nEl entre sábanas cóctel combina los sabores secos y dulzones, con tintes de cítricos y presenta una sensación bastante curiosa al paladar. Resulta ideal cuando se ingiere muy frío. Entra con suavidad, por lo que hay que extremar la precaución.', 0x636f6374656c2d656e7472652d736162616e61732d322e6a7067, 2, 3),
(5, 'Pay de queso', 'Para la base de galleta:\r\n1 1/4 taza (155 gr) galletas tipo Marías* molidas\r\n1/3 taza + 1 cda (90 gr) mantequilla sin sal a temperatura ambiente\r\nPara la mezcla de queso:\r\n190 gr queso crema\r\n30 gr queso suave salado (quesitos, requesón, queso cottage) opcional\r\n4 huevos\r\n1 lata (390 gr) leche condensada\r\n1 lata (360 ml) leche evaporada\r\n2 cditas (10 ml) extracto de vainilla\r\n1 pizca de sal', 'Para la base de galleta:\r\nPrecalentar el horno a 180° C. Preparar un molde para pay redondo de cristal de 24cm de diámetro.\r\n\r\nMezclar en un tazón mediano las galletas molidas junto con la mantequilla y amasar un poco hasta formar una masa arenada.\r\n\r\nColocar esta masa en el molde y acomodarla muy bien por toda la base y laterales, tratando de hacer presión con las manos o con un vaso para que no queden grumos sueltos.\r\n\r\nPara la mezcla de queso:\r\nTomar todos los ingredientes y colocarlos en el vaso de la licuadora o batidora. Triturar por 1 minuto hasta lograr una mezcla homogénea.\r\n\r\nVerter la mezcla con cuidado encima de la base de galleta y hornear el pay a 180° C durante 40 minutos aproximadamente hasta que esté ligeramente dorado por encima y se vea hecho.\r\n\r\nUna vez listo, retirar del horno y dejar enfriar a temperatura ambiente por 30 minutos, Refrigerar por al menos 2 horas antes de servir.', 0x6d65786963616e2d63686565736563616b652e6a7067, 3, 1),
(6, 'Ramen', 'Caldo:\r\n 1 ½ ℓ de caldo de pollo 1 poro mediano cortado en trozos medianos 2 cebollas cambray cortadas en trozos medianos 6 hongos shiitake deshidratados y cortados en trozos medianos 10 g de jengibre fresco 1 diente de ajo 1 anís estrella 1 lámina de \r\nalga nori 4 rebanadas gruesas de tocino. \r\n\r\nMontaje:\r\n2 porciones de fideos de ramen 30 ml de base de soya y miso 2 huevos cocidos, tiernos 10 g de germen de soya 2 ramas de cebollín finamente picadas 30 g de elote amarillo desgranado, cocido alga nori cortada en chiffonade, al gusto.', 'Caldo:\r\nPonga el caldo de pollo sobre el fuego, incorpore el resto de los ingredientes y deje que hierva durante 30 minutos. Cuele el caldo y póngalo nuevamente sobre el fuego durante otros 30 minutos.\r\n\r\nMontaje:\r\nHierva los fideos de ramen durante 8 minutos o hasta que su textura sea flexible y suave. Distribuya la base de soya y miso en dos tazones. Distribuya los fideos cocidos en los tazones y mézclelos muy bien con la base de soya y miso, sirva el caldo caliente sobre ellos. Corte los huevos cocidos por la mitad. Coloque los huevos cocidos, el germen de soya, el cebollín picado y los granos de elote sobre los tazones, espolvoree el ajonjolí negro.', 0x533035303431392d33302d52414d454c2d303631342d312e6a7067, 1, 2),
(7, 'Sexo en la Playa cóctel ', '40 ml. de Vodka\r\n\r\n20 ml. de licor de melocotón\r\n\r\n40 ml. de zumo de naranja\r\n\r\n40 ml. de zumo de arándanos\r\n\r\nHielos', '1\r\nExprime zumo de arándanos y cuélalo. Haz lo mismo con la naranja.\r\n2\r\nLlena un vaso con hielos.\r\n3\r\nIntroduce la medida de vodka y de licor de melocotón.\r\n4\r\nAñade el zumo de arándanos y posteriormente el zumo de naranja.\r\n5\r\nDecora con una rodaja de naranja y algún fruto rojo como una guinda, cereza o fresa.', 0x636f6374656c2d7365786f2d656e2d6c612d706c6179612d7365782e6a7067, 2, 3),
(8, 'Arroz con Leche', '6 tazas de agua tibia, uso dividido\r\n1 taza de arroz blanco de grano largo\r\n2 palitos de canela (de 4 pulgadas), 8 extra para adornar\r\n12 clavos\r\n2 anís estrellas\r\n1 cucharadita de sal\r\n1 lata (12 onzas líquidas) de leche evaporada\r\n1 taza de azúcar granulada\r\n1/4 taza de pasas\r\n2 cucharadas de mantequilla\r\nNuez moscada molida para decorar', 'paso 1\r\nCombina 2 tazas de agua, arroz, 2 palitos de canela, clavo de olor y anís estrella en una cacerola grande. Deja remojar durante mínimo 1 hora.\r\npaso 2\r\nColoca la cacerola a fuego medio; añade las 4 tazas de agua restantes y la sal. Hierve durante 2 minutos. Desecha los palitos de canela, clavos y anís estrella.\r\npaso 3\r\nReduce el fuego a bajo; agrega la leche evaporada, el azúcar y las pasas. Cose durante 10 minutos o hasta que la mezcla espese. Retira del fuego.\r\npaso 4\r\nAgrega la mantequilla y revuelve; cubre y deja enfriar.\r\npaso 5\r\nSirve adornado con nuez moscada y 8 palitos de canela restantes', 0x4172726f7a20636f6e204c656368652e6a7067, 3, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(4) NOT NULL,
  `name_usuario` varchar(30) NOT NULL,
  `email_usuario` varchar(40) NOT NULL,
  `password_usuario` varchar(20) NOT NULL,
  `nacionalidad` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `name_usuario`, `email_usuario`, `password_usuario`, `nacionalidad`) VALUES
(1, 'oliver', 'oliver_aguiar@hotmail.com', 'oli123', 1),
(2, 'rafael', 'ramael_mendoza@hotmail.com', '1234', 4),
(3, 'efren', 'efren_jim@hotmail.com', '1234', 2),
(4, 'peke', 'peke_trespelos@hotmail.com', '1234', 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `nacionalidad`
--
ALTER TABLE `nacionalidad`
  ADD PRIMARY KEY (`id_nacionalidad`);

--
-- Indices de la tabla `pais`
--
ALTER TABLE `pais`
  ADD PRIMARY KEY (`id_pais`);

--
-- Indices de la tabla `receta`
--
ALTER TABLE `receta`
  ADD PRIMARY KEY (`id_receta`),
  ADD KEY `receta-categoria` (`categoria`),
  ADD KEY `receta-pais` (`pais`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `usuario-nacionalidad` (`nacionalidad`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `nacionalidad`
--
ALTER TABLE `nacionalidad`
  MODIFY `id_nacionalidad` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `receta`
--
ALTER TABLE `receta`
  MODIFY `id_receta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `receta`
--
ALTER TABLE `receta`
  ADD CONSTRAINT `receta-categoria` FOREIGN KEY (`categoria`) REFERENCES `categoria` (`id_categoria`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `receta-pais` FOREIGN KEY (`pais`) REFERENCES `pais` (`id_pais`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario-nacionalidad` FOREIGN KEY (`nacionalidad`) REFERENCES `nacionalidad` (`id_nacionalidad`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
