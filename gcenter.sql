-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-04-2024 a las 06:04:51
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
-- Base de datos: `gcenter`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asistencias`
--

CREATE TABLE `asistencias` (
  `id_asistencia` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `hora_entrada` time NOT NULL,
  `hora_salida` time DEFAULT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_entrenador` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_rutina` int(11) NOT NULL,
  `estado` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `asistencias`
--

INSERT INTO `asistencias` (`id_asistencia`, `fecha`, `hora_entrada`, `hora_salida`, `id_cliente`, `id_entrenador`, `id_usuario`, `id_rutina`, `estado`) VALUES
(1, '2023-03-06', '16:39:33', '16:40:05', 97, 20, 1, 6, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `dni` varchar(10) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `direccion` text NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `estado` int(11) NOT NULL DEFAULT 1,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `dni`, `nombre`, `telefono`, `direccion`, `fecha`, `estado`, `id_user`) VALUES
(1, '8973', 'Whiteman Air Force Base', '910-570-1067', '4th Floor', '2023-03-05 15:27:46', 1, 1),
(2, '118', 'Lympne Airport', '119-578-9531', 'Apt 1679', '2023-03-05 15:27:46', 1, 1),
(3, '04565', 'Umuarama Airport', '507-222-7068', '8th Floor', '2023-03-05 15:27:46', 1, 1),
(4, '231', 'Drumduff Airport', '607-910-9783', 'Room 387', '2023-03-05 15:27:46', 1, 1),
(5, '67790', 'Tsiroanomandidy Airport', '212-360-0127', '1st Floor', '2023-03-05 15:27:46', 1, 1),
(6, '43', 'Sawan Airport', '213-308-1109', 'Suite 62', '2023-03-05 15:27:46', 1, 1),
(7, '4875', 'Croker Island Airport', '366-257-2379', 'Room 497', '2023-03-05 15:27:46', 1, 1),
(8, '1160', 'Khajuraho Airport', '246-936-9203', 'Room 832', '2023-03-05 15:27:46', 1, 1),
(9, '3175', 'Coffman Cove Seaplane Base', '890-242-6458', 'Suite 29', '2023-03-05 15:27:46', 1, 1),
(10, '0973', 'Tri-County Regional Airport', '547-853-1258', 'Apt 797', '2023-03-05 15:27:46', 1, 1),
(11, '4', 'Saarbrücken Airport', '431-154-5626', '20th Floor', '2023-03-05 15:27:46', 1, 1),
(12, '90352', 'Afonso Pena Airport', '867-746-7458', '2nd Floor', '2023-03-05 15:27:46', 1, 1),
(13, '9', 'Fazenda Cataco Airport', '465-270-4944', 'Room 542', '2023-03-05 15:27:46', 1, 1),
(14, '5391', 'La Porte Municipal Airport', '416-906-0487', 'Apt 947', '2023-03-05 15:27:46', 1, 1),
(15, '09243', 'Paulo Afonso Airport', '837-905-1682', 'Suite 74', '2023-03-05 15:27:46', 1, 1),
(16, '48039', 'Uchiza Airport', '774-360-9612', '5th Floor', '2023-03-05 15:27:46', 1, 1),
(17, '976', 'Palmdale Regional/USAF Plant 42 Airport', '960-118-6090', 'Suite 6', '2023-03-05 15:27:46', 1, 1),
(18, '9774', 'Skorpion Mine Airport', '993-948-5083', 'Room 660', '2023-03-05 15:27:46', 1, 1),
(19, '0', 'Tshikapa Airport', '103-882-4051', 'Room 896', '2023-03-05 15:27:46', 1, 1),
(20, '298', 'Friedman Memorial Airport', '820-481-1616', 'PO Box 59206', '2023-03-05 15:27:46', 1, 1),
(21, '6616', 'Dracena Airport', '481-335-3577', 'Room 1339', '2023-03-05 15:27:46', 1, 1),
(22, '93787', 'Ondangwa Airport', '439-836-7791', 'Apt 988', '2023-03-05 15:27:46', 1, 1),
(23, '92', 'Greenbrier Airport', '173-941-9557', 'PO Box 73447', '2023-03-05 15:27:46', 1, 1),
(24, '36', 'Talkeetna Airport', '716-573-1512', 'Room 1505', '2023-03-05 15:27:46', 1, 1),
(25, '8390', 'Fort Scott Municipal Airport', '164-287-0863', 'PO Box 25428', '2023-03-05 15:27:46', 1, 1),
(26, '7850', 'Kogalym International Airport', '241-181-5592', 'PO Box 10497', '2023-03-05 15:27:46', 1, 1),
(27, '297', 'Alpine Casparis Municipal Airport', '800-319-2052', '18th Floor', '2023-03-05 15:27:46', 1, 1),
(28, '9027', 'Valkenburg Naval Air Base', '453-530-3600', 'Suite 58', '2023-03-05 15:27:46', 1, 1),
(29, '12', 'Sierra Vista Municipal Libby Army Air Field', '756-953-6071', 'PO Box 13447', '2023-03-05 15:27:46', 1, 1),
(30, '8160', 'Sherbro International Airport', '295-801-8326', 'Suite 9', '2023-03-05 15:27:46', 1, 1),
(31, '878', 'Lecce Galatina Air Base', '241-754-7137', 'Apt 1246', '2023-03-05 15:27:46', 1, 1),
(32, '1', 'False Pass Airport', '773-906-8082', '15th Floor', '2023-03-05 15:27:46', 1, 1),
(33, '43637', 'Langeoog Airport', '661-246-7437', '3rd Floor', '2023-03-05 15:27:46', 1, 1),
(34, '722', 'Springbok Airport', '844-757-7302', 'Room 1049', '2023-03-05 15:27:46', 1, 1),
(35, '236', 'Long Akah Airport', '915-573-2206', 'PO Box 78585', '2023-03-05 15:27:46', 1, 1),
(36, '02126', 'Ziro Airport', '482-337-8175', 'Apt 89', '2023-03-05 15:27:46', 1, 1),
(37, '33614', 'Ataq Airport', '135-728-6710', '2nd Floor', '2023-03-05 15:27:46', 1, 1),
(38, '31', 'Chaoyang Airport', '459-486-9282', 'PO Box 71952', '2023-03-05 15:27:46', 1, 1),
(39, '09512', 'Negele Airport', '319-142-4773', 'Apt 1610', '2023-03-05 15:27:46', 1, 1),
(40, '21013', 'Kaukura Airport', '882-699-2986', '17th Floor', '2023-03-05 15:27:46', 1, 1),
(41, '6', 'Dundo Airport', '857-822-3786', 'Apt 1354', '2023-03-05 15:27:46', 1, 1),
(42, '28094', 'Ben Schoeman Airport', '702-909-2286', '3rd Floor', '2023-03-05 15:27:46', 1, 1),
(43, '2', 'Fáskrúðsfjörður Airport', '162-845-5851', 'Room 618', '2023-03-05 15:27:46', 1, 1),
(44, '0', 'Épinal-Mirecourt Airport', '823-641-0218', 'Suite 24', '2023-03-05 15:27:46', 1, 1),
(45, '938', 'Qianjiang Wulingshan Airport', '291-499-4838', '17th Floor', '2023-03-05 15:27:46', 1, 1),
(46, '54', 'Thisted Airport', '157-150-5023', 'PO Box 21253', '2023-03-05 15:27:46', 1, 1),
(47, '49', 'Fort Bridger Airport', '354-184-0782', '17th Floor', '2023-03-05 15:27:46', 1, 1),
(48, '27', 'Villa Airport', '674-363-7657', 'PO Box 27429', '2023-03-05 15:27:46', 1, 1),
(49, '1211', 'Metro Field', '906-231-7727', 'PO Box 70822', '2023-03-05 15:27:46', 1, 1),
(50, '7', 'Marmul Airport', '976-666-8842', 'Apt 1593', '2023-03-05 15:27:46', 1, 1),
(51, '905', 'Feijó Airport', '364-879-9709', 'Suite 68', '2023-03-05 15:27:46', 1, 1),
(52, '5851', 'Casigua El Cubo Airport', '855-248-3151', 'Suite 24', '2023-03-05 15:27:46', 1, 1),
(53, '1', 'Kaitaia Airport', '875-499-3366', 'PO Box 21107', '2023-03-05 15:27:46', 1, 1),
(54, '8', 'Menorca Airport', '462-969-9913', 'Suite 16', '2023-03-05 15:27:46', 1, 1),
(55, '946', 'Keewaywin Airport', '469-553-7809', 'Suite 66', '2023-03-05 15:27:46', 1, 1),
(56, '78', 'Mostyn Airport', '576-603-4431', 'Apt 1638', '2023-03-05 15:27:46', 1, 1),
(57, '9', 'Rockhampton Airport', '382-995-0074', '11th Floor', '2023-03-05 15:27:46', 1, 1),
(58, '89164', 'Victoria River Downs Airport', '925-324-6212', 'Apt 1471', '2023-03-05 15:27:46', 1, 1),
(59, '863', 'Errol Airport', '260-888-2200', '11th Floor', '2023-03-05 15:27:46', 1, 1),
(60, '2063', 'Charata Airport', '252-821-0043', 'Suite 75', '2023-03-05 15:27:46', 1, 1),
(61, '01', 'Pilot Point Airport', '634-616-1283', 'Suite 81', '2023-03-05 15:27:46', 1, 1),
(62, '18100', 'Skiathos Island National Airport', '549-680-5815', 'Room 897', '2023-03-05 15:27:46', 1, 1),
(63, '66497', 'Arar Domestic Airport', '789-797-9380', 'Suite 77', '2023-03-05 15:27:46', 1, 1),
(64, '34', 'Perry Lefors Field', '199-545-3827', 'Apt 779', '2023-03-05 15:27:46', 1, 1),
(65, '9693', 'Tabou Airport', '421-308-1295', 'PO Box 5093', '2023-03-05 15:27:46', 1, 1),
(66, '4609', 'Arvaikheer Airport', '967-880-6786', '17th Floor', '2023-03-05 15:27:46', 1, 1),
(67, '28', 'Ayers Rock Connellan Airport', '545-540-4065', 'Suite 31', '2023-03-05 15:27:46', 1, 1),
(68, '0000', 'Kaolack Airport', '311-142-3666', 'Suite 19', '2023-03-05 15:27:46', 1, 1),
(69, '56314', 'Southwest Washington Regional Airport', '833-440-8107', 'PO Box 34877', '2023-03-05 15:27:46', 1, 1),
(70, '1537', 'Lecce Galatina Air Base', '771-998-9465', 'PO Box 82297', '2023-03-05 15:27:46', 1, 1),
(71, '89847', 'Cap FAP David Abenzur Rengifo International Airport', '850-365-0173', '19th Floor', '2023-03-05 15:27:46', 1, 1),
(72, '4', 'Otjiwarongo Airport', '465-122-6959', 'Apt 485', '2023-03-05 15:27:46', 1, 1),
(73, '27', 'Minhas Air Base', '785-185-3297', 'Room 1827', '2023-03-05 15:27:46', 1, 1),
(74, '8861', 'Chaudhary Charan Singh International Airport', '121-396-7552', 'PO Box 81197', '2023-03-05 15:27:46', 1, 1),
(75, '7', 'La Laguna Airport', '485-894-5805', 'PO Box 86556', '2023-03-05 15:27:46', 1, 1),
(76, '83150', 'La Aurora Airport', '899-377-2872', 'Apt 1635', '2023-03-05 15:27:46', 1, 1),
(77, '40', 'Markovo Airport', '319-604-3720', 'Room 1846', '2023-03-05 15:27:46', 1, 1),
(78, '8', 'Lumid Pau Airport', '880-924-1950', 'Room 1704', '2023-03-05 15:27:46', 1, 1),
(79, '49', 'Milyakburra Airport', '442-351-8483', 'Apt 718', '2023-03-05 15:27:46', 1, 1),
(80, '11392', 'Rene Mouawad Air Base', '865-952-9651', '19th Floor', '2023-03-05 15:27:46', 1, 1),
(81, '147', 'Reykjahlíð Airport', '268-102-3200', 'Suite 32', '2023-03-05 15:27:46', 1, 1),
(82, '4294', 'Malolo Lailai Island Airport', '243-371-8283', '11th Floor', '2023-03-05 15:27:46', 1, 1),
(83, '35', 'Mueo Airport', '399-361-4168', 'Room 1797', '2023-03-05 15:27:46', 1, 1),
(84, '492', 'Los Colonizadores Airport', '825-778-1453', 'Apt 173', '2023-03-05 15:27:46', 1, 1),
(85, '0', 'Douala International Airport', '457-210-0842', 'Room 744', '2023-03-05 15:27:46', 1, 1),
(86, '47753', 'Lanseria Airport', '401-285-1666', 'Apt 1909', '2023-03-05 15:27:46', 1, 1),
(87, '7821', 'Lubbock Preston Smith International Airport', '698-883-6015', 'PO Box 80774', '2023-03-05 15:27:46', 1, 1),
(88, '211', 'Kuala Lumpur International Airport', '214-664-6290', 'Suite 93', '2023-03-05 15:27:46', 1, 1),
(89, '8331', 'Bilbao Airport', '322-771-1865', 'PO Box 80873', '2023-03-05 15:27:46', 1, 1),
(90, '1', 'Sultan Ismail Petra Airport', '968-148-9555', '8th Floor', '2023-03-05 15:27:46', 1, 1),
(91, '64370', 'Mykolaiv International Airport', '107-881-6117', 'Room 1276', '2023-03-05 15:27:46', 1, 1),
(92, '305', 'Eareckson Air Station', '506-128-8719', '20th Floor', '2023-03-05 15:27:46', 1, 1),
(93, '563', 'Etimesgut Air Base', '341-631-9976', 'PO Box 67585', '2023-03-05 15:27:46', 1, 1),
(94, '00745', 'Wilmington Airpark', '962-143-0483', 'Suite 53', '2023-03-05 15:27:46', 1, 1),
(95, '8728', 'Baytown Airport', '993-517-4797', '2nd Floor', '2023-03-05 15:27:46', 1, 1),
(96, '0', 'Gwinnett County Briscoe Field', '762-325-3743', 'PO Box 55492', '2023-03-05 15:27:46', 1, 1),
(97, '95107', 'Henry E Rohlsen Airport', '369-581-3496', 'Suite 71', '2023-03-05 15:27:46', 1, 1),
(98, '915', 'Presidente José Sarney Airport', '120-761-6587', '8th Floor', '2023-03-05 15:27:46', 1, 1),
(99, '7', 'São Lourenço Airport', '889-951-9751', 'PO Box 59107', '2023-03-05 15:27:46', 1, 1),
(100, '874', 'Kramfors Sollefteå Airport', '546654654', '7th Floor', '2023-03-05 15:55:24', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `configuracion`
--

CREATE TABLE `configuracion` (
  `id` int(11) NOT NULL,
  `ruc` varchar(20) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `direccion` varchar(200) NOT NULL,
  `mensaje` text NOT NULL,
  `logo` varchar(10) NOT NULL,
  `limite` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `configuracion`
--

INSERT INTO `configuracion` (`id`, `ruc`, `nombre`, `correo`, `telefono`, `direccion`, `mensaje`, `logo`, `limite`) VALUES
(1, '12345678910', 'G CENTER', 'g.center.corp@gmail.com', '305 3561065', 'Cartagena - Colombia / Diagonal 32 Tv 71-85 Cerezos', 'Gracias por su preferencia!', 'logo.png', 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_planes`
--

CREATE TABLE `detalle_planes` (
  `id` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_plan` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `fecha_venc` date NOT NULL,
  `fecha_limite` date NOT NULL,
  `id_user` int(11) NOT NULL,
  `estado` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `detalle_planes`
--

INSERT INTO `detalle_planes` (`id`, `id_cliente`, `id_plan`, `fecha`, `hora`, `fecha_venc`, `fecha_limite`, `id_user`, `estado`) VALUES
(1, 100, 1, '2023-03-06', '16:36:34', '2024-03-06', '2024-03-16', 1, 0),
(2, 96, 2, '2023-03-06', '16:36:47', '2024-03-06', '2024-03-16', 1, 1),
(4, 65, 1, '2023-03-06', '16:41:05', '2024-03-06', '2024-03-16', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entrenador`
--

CREATE TABLE `entrenador` (
  `id` int(11) NOT NULL,
  `nombre` varchar(80) NOT NULL,
  `apellido` varchar(80) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `correo` varchar(80) DEFAULT NULL,
  `direccion` text NOT NULL,
  `estado` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `entrenador`
--

INSERT INTO `entrenador` (`id`, `nombre`, `apellido`, `telefono`, `correo`, `direccion`, `estado`) VALUES
(1, 'Kolhapur Airport', 'Janney', '297-349-1054', 'ojanney0@blog.com', 'PO Box 49825', 1),
(2, 'Apalachicola Regional Airport', 'Birdall', '156-825-4610', 'sbirdall1@time.com', 'Apt 1472', 1),
(3, 'Vadodara Airport', 'Trahear', '812-205-8176', 'etrahear2@umich.edu', 'Suite 34', 1),
(4, 'Magan Airport', 'Kleingrub', '796-640-4170', 'mkleingrub3@smh.com.au', '5th Floor', 1),
(5, 'Huizhou Airport', 'Fitchett', '437-555-9228', 'dfitchett4@xinhuanet.com', 'Suite 72', 1),
(6, 'Lake Nash Airport', 'Ormond', '207-171-0112', 'cormond5@ebay.com', 'PO Box 62243', 1),
(7, 'Beletwene Airport', 'Garces', '231-395-0601', 'sgarces6@mtv.com', 'Room 673', 1),
(8, 'Tarcoola Airport', 'Noir', '360-963-0494', 'hnoir7@bluehost.com', 'Suite 24', 1),
(9, 'Aragip Airport', 'Callister', '415-765-8657', 'mcallister8@redcross.org', 'PO Box 91782', 1),
(10, 'De Kooy Airport', 'Finnemore', '823-191-6708', 'mfinnemore9@uiuc.edu', 'Suite 44', 1),
(11, 'Daniel Oduber Quiros International Airport', 'Mattia', '108-536-7139', 'mmattiaa@sbwire.com', 'Room 193', 1),
(12, 'Nonouti Airport', 'Arlet', '800-139-6245', 'garletb@timesonline.co.uk', 'Apt 597', 1),
(13, 'Scarlett Martinez International Airport', 'Gehring', '944-758-8190', 'ggehringc@digg.com', '9th Floor', 1),
(14, 'Hyvinkää Airfield', 'Averies', '212-850-3557', 'aaveriesd@tripadvisor.com', '9th Floor', 1),
(15, 'Montevideo Chippewa County Airport', 'McGenis', '712-506-4523', 'ymcgenise@fastcompany.com', '7th Floor', 1),
(16, 'Republic Airport', 'Cund', '810-588-8030', 'acundf@seesaa.net', 'Suite 41', 1),
(17, 'Tacuarembo Airport', 'Brodest', '160-594-9838', 'tbrodestg@51.la', '12th Floor', 1),
(18, 'Bergen Airport Flesland', 'Thirlwell', '807-493-5251', 'kthirlwellh@sun.com', '2nd Floor', 1),
(19, 'First Flight Airport', 'Tolcher', '294-647-7138', 'stolcheri@tuttocitta.it', 'PO Box 28969', 1),
(20, 'Guarani International Airport', 'Faireclough', '870-414-2539', 'kfairecloughj@1688.com', 'Apt 830', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagos_planes`
--

CREATE TABLE `pagos_planes` (
  `id` int(11) NOT NULL,
  `id_detalle` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_plan` int(11) NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `id_user` int(11) NOT NULL,
  `estado` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pagos_planes`
--

INSERT INTO `pagos_planes` (`id`, `id_detalle`, `id_cliente`, `id_plan`, `precio`, `fecha`, `hora`, `id_user`, `estado`) VALUES
(3, 4, 65, 1, 49.90, '2023-03-06', '16:41:13', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `planes`
--

CREATE TABLE `planes` (
  `id` int(11) NOT NULL,
  `plan` varchar(255) NOT NULL,
  `descripcion` text NOT NULL,
  `precio_plan` decimal(10,2) NOT NULL,
  `condicion` varchar(20) NOT NULL,
  `imagen` varchar(50) NOT NULL DEFAULT 'default.png',
  `estado` int(11) NOT NULL DEFAULT 1,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `planes`
--

INSERT INTO `planes` (`id`, `plan`, `descripcion`, `precio_plan`, `condicion`, `imagen`, `estado`, `id_user`) VALUES
(1, 'Basico', 'Entrenamiento sin asesoria. Dirigido a usuarios experimentados en entrenamiento físico', 60.00, 'MENSUAL', '20220315223821.jpg', 1, 1),
(2, 'Estandar', 'Entrenamiento semi-personalizado. Dirigido a usuarios sin experiencia en entrenamiento físico', 75.00, 'MENSUAL', '20220315223739.jpg', 1, 1),
(3, 'Premium', 'Entrenamiento personalizado. Dirigido a usuarios que deseen prontos resultados y una atención mas personal', 250.00, 'MENSUAL', '20220315223505.jpg', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rutinas`
--

CREATE TABLE `rutinas` (
  `id` int(11) NOT NULL,
  `dia` varchar(50) NOT NULL,
  `descripcion` text NOT NULL,
  `id_user` int(11) NOT NULL,
  `estado` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `rutinas`
--

INSERT INTO `rutinas` (`id`, `dia`, `descripcion`, `id_user`, `estado`) VALUES
(1, 'DIA 01', 'Piernas / Abs', 1, 1),
(2, 'DIA 02', 'Pecho.', 1, 1),
(3, 'DIA 03', 'Espalda/ Abs*', 1, 1),
(4, 'DIA 04', 'Hombro / Abs*', 1, 1),
(5, 'DIA 05', 'Brazos', 1, 1),
(6, 'DIA 06', 'HIIT de 20 minutos, correr, bici, elíptica: 30 seg. suave – moderado / 30 seg.', 1, 1),
(7, 'DIA 07', 'DESCANSO', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `correo` varchar(80) NOT NULL,
  `clave` varchar(100) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `foto` varchar(50) NOT NULL DEFAULT 'avatar.svg',
  `rol` enum('1','2') NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `estado` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `nombre`, `correo`, `clave`, `telefono`, `foto`, `rol`, `fecha`, `estado`) VALUES
(1, 'admin', 'G CENTER', 'gcenter@info.com', 'admin1234', '98789654', 'avatar.svg', '1', '2024-04-05 03:38:15', 1),
(3, 'admin1', 'G CENTER', 'gcenter.info@gmail.com', 'ac9689e2272427085e35b9d3e3e8bed88cb3434828b43b86fc0596cad4c6e270', '302204891', 'avatar.svg', '1', '2024-04-05 03:55:37', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asistencias`
--
ALTER TABLE `asistencias`
  ADD PRIMARY KEY (`id_asistencia`),
  ADD KEY `id_cliente` (`id_cliente`),
  ADD KEY `id_entrenador` (`id_entrenador`),
  ADD KEY `id_rutina` (`id_rutina`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indices de la tabla `configuracion`
--
ALTER TABLE `configuracion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detalle_planes`
--
ALTER TABLE `detalle_planes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_plan` (`id_plan`),
  ADD KEY `id_cliente` (`id_cliente`);

--
-- Indices de la tabla `entrenador`
--
ALTER TABLE `entrenador`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pagos_planes`
--
ALTER TABLE `pagos_planes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_detalle` (`id_detalle`),
  ADD KEY `id_cliente` (`id_cliente`),
  ADD KEY `id_plan` (`id_plan`);

--
-- Indices de la tabla `planes`
--
ALTER TABLE `planes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indices de la tabla `rutinas`
--
ALTER TABLE `rutinas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `asistencias`
--
ALTER TABLE `asistencias`
  MODIFY `id_asistencia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT de la tabla `configuracion`
--
ALTER TABLE `configuracion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `detalle_planes`
--
ALTER TABLE `detalle_planes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `entrenador`
--
ALTER TABLE `entrenador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `pagos_planes`
--
ALTER TABLE `pagos_planes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `planes`
--
ALTER TABLE `planes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `rutinas`
--
ALTER TABLE `rutinas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `asistencias`
--
ALTER TABLE `asistencias`
  ADD CONSTRAINT `asistencias_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`id`),
  ADD CONSTRAINT `asistencias_ibfk_2` FOREIGN KEY (`id_entrenador`) REFERENCES `entrenador` (`id`),
  ADD CONSTRAINT `asistencias_ibfk_3` FOREIGN KEY (`id_rutina`) REFERENCES `rutinas` (`id`),
  ADD CONSTRAINT `asistencias_ibfk_4` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`);

--
-- Filtros para la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD CONSTRAINT `clientes_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `detalle_planes`
--
ALTER TABLE `detalle_planes`
  ADD CONSTRAINT `detalle_planes_ibfk_1` FOREIGN KEY (`id_plan`) REFERENCES `planes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detalle_planes_ibfk_2` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detalle_planes_ibfk_3` FOREIGN KEY (`id_user`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `pagos_planes`
--
ALTER TABLE `pagos_planes`
  ADD CONSTRAINT `pagos_planes_ibfk_3` FOREIGN KEY (`id_user`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pagos_planes_ibfk_4` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`id`),
  ADD CONSTRAINT `pagos_planes_ibfk_5` FOREIGN KEY (`id_detalle`) REFERENCES `detalle_planes` (`id`),
  ADD CONSTRAINT `pagos_planes_ibfk_6` FOREIGN KEY (`id_plan`) REFERENCES `planes` (`id`);

--
-- Filtros para la tabla `planes`
--
ALTER TABLE `planes`
  ADD CONSTRAINT `planes_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `rutinas`
--
ALTER TABLE `rutinas`
  ADD CONSTRAINT `rutinas_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `usuarios` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
