-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-11-2024 a las 06:13:45
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
-- Base de datos: `areasportteam`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados`
--

CREATE TABLE `estados` (
  `id_estado` int(11) NOT NULL,
  `nombre_estado` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `estados`
--

INSERT INTO `estados` (`id_estado`, `nombre_estado`) VALUES
(1, 'activo'),
(2, 'baneado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jugadores-ama`
--

CREATE TABLE `jugadores-ama` (
  `id_jug_ama` int(11) DEFAULT NULL,
  `nombre` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `club` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `posicion` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `imagen` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jugadores-pro`
--

CREATE TABLE `jugadores-pro` (
  `id_jug_pro` int(11) NOT NULL,
  `nombre` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `club` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `posicion` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `link_tm` varchar(150) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `imagen` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE `noticias` (
  `id_noticia` int(11) NOT NULL,
  `titulo` varchar(65) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `imagen` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `fecha` date NOT NULL,
  `informacion` varchar(2500) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`id_noticia`, `titulo`, `imagen`, `fecha`, `informacion`) VALUES
(5, 'Kevin es el nuevo fichaje de @clubnecaxa', '1732664313.jpg', '2024-06-18', 'Club Necaxa informa que Kevin Rosero se integra al Equipo de Aguascalientes, comenzando su participación en el torneo Apertura 2024.\r\n\r\nKevin, originario de Colombia, juega como extremo ofensivo. A sus 25 años, ha desarrollado la mayor parte de su carrera futbolística en Europa.\r\n\r\nRosero inició su formación en las categorías menores del FC Porto en Portugal, luego de ser observado por el cuadro lusitano en su natal Colombia. Con los Dragones, Kevin comenzó a destacar y forjar su carrera '),
(6, 'Jeremías Ledesma, nuevo jugador de River Plate', '1732669925.jpg', '2024-07-07', 'Este viernes, el arquero firmó su contrato en compañía de Ignacio Villarroel (Vicepresidente 2°) y el sábado se sumó a los entrenamientos bajo las órdenes de Martín Demichelis.\r\n\r\nEl contrato de Ledesma con la Institución es hasta diciembre de 2028.'),
(7, ' El juvenil Ruben Martinez ficha por el Real Madrid', '1732670032.jpg', '2024-07-08', 'Luego de su gran temporada en el @albacetebp, el juvenil Rubén Martínez ficha por el @realmadrid @realmadridacademy \r\n\r\n⚪️ Estamos muy contentos de poder acompañarte en este gran desafío en el merengue \r\n\r\nGran trabajo en conjunto \r\n@areasportteam \r\n@bestofyousports'),
(9, 'Con mucha ilusión damos la bienvenida a Sebastián Lomónaco a nues', '1732671479.jpg', '2024-01-12', 'Con mucha ilusión damos la bienvenida a Sebastián Lomónaco a nuestra familia…\r\n\r\nDesempeña la posición de delantero centro y es actual jugador de @clubgodoycruzoficial.\r\n\r\nA trabajar por tus metas que también serán las nuestras ??.\r\n\r\n@lomonacoseba\r\n\r\n#AreaSportTeam'),
(10, 'Mastantuono debutó en River e hizo historia', '1732671516.jpg', '2024-01-28', 'Por su estilo, elegancia y esa zurda destacada hasta por los mayores del plantel, Franco Mastantuono es motivo de ilusión. Aun cuando su ficha indica que es un chiquilín nacido el 14 de agosto del 2007, ya que mostró cositas propias de un jugador con años de fútbol encima. Pero no tiene ni siquiera uno, este volante ofensivo. Tiene tan solo un partido en su historial, el de este domingo ante Argentinos Juniors, en el que hizo el esperadísimo debut -por él y por los hinchas, deseosos de empezar a'),
(11, 'Neri Romero es nuevamente convocado por la Selección Sub-16 de Pa', '1732671541.jpg', '2024-03-17', '? Neri Romero es nuevamente convocado por la Selección Sub-16 de Paraguay ??.\r\n\r\nEstamos muy contentos e ilusionados con tu crecimiento ??.\r\n\r\n@neri_romero09\r\n@albirroja\r\n\r\n#AreaSportTeam'),
(12, 'Mastantuono renovó su contrato con River', '1732671573.jpg', '2024-03-19', 'Este martes 19 de marzo, en las oficinas del Mâs Monumental, el mediocampista renovó su vínculo con la Institución hasta diciembre de 2026 en compañía de Jorge Brito (Presidente), Matías Patanian (Vicepresidente 1°) e Ignacio Villarroel (Vicepresidente 2°).\r\n\r\nEl contrato contempla una cláusula de salida de 45 millones de euros netos para River; si la misma se ejecuta diez días antes del vencimiento del libro de pases, pasarían a ser 50 millones de euros netos.\r\n\r\nEn tanto, las partes acordaron '),
(13, 'Adrián Niño, con dos goles, le da tres puntos de oro al Atlético ', '1732671607.jpg', '2024-03-31', 'El Atlético B dio un gran paso de cara a no pasar problemas en la categoría al ganar al Intercity en un buen partido del conjunto de Tevenet. Y lo hizo con un doblete de Adrián Niño, un jugador diferente, de esos que parece que no están, pero que aparece en el momento oportuno y para hacer lo que sabe: marcar goles. El delantero centro del Atlético B hizo un doblete y le dio los tres puntos a un equipo que tuvo sobreponerse al gol de Pol Roige justo antes del descanso.\r\n\r\nEl primer tiempo fue an'),
(16, 'La noche soñada de Mastantuono', '1732672346.jpg', '2024-04-26', 'Franco Mastantuono solo tiene 16 años, pero se mueve con el aplomo de un veterano que llevara una eternidad jugando. Acaba de llegar al fútbol profesional y ya colecciona varios récords e intervenciones decisivas. Este miércoles se estrenó con River en la Copa Libertadores y marcó el gol decisivo que dio una justa victoria al Millonario contra Libertad en Asunción.\r\n\r\nEse tanto, logrado con 16 años y 254 días, convierte a Mastantuono en el futbolista más joven en la historia de River en marcar un gol en Libertadores. Una noche soñada para este atrevido mediapunta, al que recurrió su técnico, Martín Demichelis, en el descanso, cuando el encuentro estaba igualado a uno. El pasado mes de febrero ya se convirtió, con 16 años, cinco meses y 24 días, en el goleador más joven en la historia del club argentino, al anotar en Copa contra Excursionistas.'),
(17, 'Adrián Niño, la novedad en la lista para Dortmund', '1732672376.jpg', '2024-04-15', 'El Atlético se desplazará esta tarde a Dortmund donde el equipo madrileño quedará concentrado de cara al choque de mañana de Champions. Simeone tiene varias bajas para el partido. Samuel Lino no jugará por sanción y el técnico argentino tampoco podrá contar con Memphis y Lemar, lesionados.\r\n\r\nAsí las cosas, Simeone echará mano del filial y la novedad es Adrián Niño. El Cholo mira al segundo equipo para completar la lista de convocados y en el partido de ida fue El Jebari, extremo izquierdo del Atlético B, el que completó la lista de convocados. Ahora será Adrián Niño, con unas características diferentes a El Jebari.'),
(20, 'Conan Ledesma renueva hasta 2026', '1732683666.jpg', '2023-08-11', 'Se acabó el culebrón Ledesma para el Cádiz CF. Finalmente, el portero y el club han llegado a un acuerdo para su renovación hasta 2026. El jugador ha sido una pieza fundamental para que el conjunto de la Tacita de Plata siguiera disfrutando de la élite del fútbol español. Si bien es cierto que en algunos momentos el portero estuvo más lejos que cerca de Cádiz, al final seguirá vistiendo la camiseta cadista.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id_rol` int(11) NOT NULL,
  `nombre_rol` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id_rol`, `nombre_rol`) VALUES
(1, 'admin'),
(2, 'usuario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `usuario` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `correo` varchar(55) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `contrasena` varchar(55) NOT NULL,
  `fk_rol` int(11) NOT NULL,
  `fk_estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `usuario`, `correo`, `contrasena`, `fk_rol`, `fk_estado`) VALUES
(1, 'Martin', 'pereyra.martin003@gmail.com', '7815696ecbf1c96e6894b779456d330e', 1, 1),
(2, 'valentin', 'wicked@gmail.com', '7815696ecbf1c96e6894b779456d330e', 2, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `estados`
--
ALTER TABLE `estados`
  ADD PRIMARY KEY (`id_estado`);

--
-- Indices de la tabla `jugadores-pro`
--
ALTER TABLE `jugadores-pro`
  ADD PRIMARY KEY (`id_jug_pro`);

--
-- Indices de la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id_noticia`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `estados`
--
ALTER TABLE `estados`
  MODIFY `id_estado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `jugadores-pro`
--
ALTER TABLE `jugadores-pro`
  MODIFY `id_jug_pro` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id_noticia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
