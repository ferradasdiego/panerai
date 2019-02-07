-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.1.36-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win32
-- HeidiSQL Versión:             9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para panerai
CREATE DATABASE IF NOT EXISTS `panerai` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci */;
USE `panerai`;

-- Volcando estructura para tabla panerai.blog
CREATE TABLE IF NOT EXISTS `blog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(50) COLLATE utf8_spanish_ci DEFAULT '0',
  `autor` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fecha` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `cuerpo` varchar(800) COLLATE utf8_spanish_ci DEFAULT '0',
  `imagen` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla panerai.blog: ~4 rows (aproximadamente)
DELETE FROM `blog`;
/*!40000 ALTER TABLE `blog` DISABLE KEYS */;
INSERT INTO `blog` (`id`, `titulo`, `autor`, `fecha`, `cuerpo`, `imagen`) VALUES
	(1, 'PRIMER MOVIMIENTO MANUFACTURA', 'diego', '4/2/19', 'Lanzamiento internacional del primer movimiento propio de Panerai, el P.2002, un calibre de cuerda manual con función GMT y una reserva de marcha de ocho días, inspirada en los movimientos Angelus de la década de los cuarenta. El calibre adopta su nombre del año en que Officine Panerai inauguró su planta de producción, en homenaje al arte relojero de la marca florentina.', './img/2005.png.transform.global_square_image_960.jpg'),
	(2, 'OFFICINE PANERAI Y LA PASION POR EL MAR', 'diego', '4/2/19', 'Para rendir homenaje a su pasión por el mar, Officine Panerai adquiere y restaura Eilean, un queche bermudeño de 1936 construido en los legendarios astilleros Fife. Hacen falta tres años enteros para llevar a Eilean de nuevo al mar y devolverle su belleza original, gracias a la restauración experta realizada en el astillero de Francesco Del Carlo en Viareggio. Después de 40.000 horas de trabajo, la ceremonia de botadura de Eilean se celebra en la Sección de Navegación de la Armada italiana, en L', './img/2009.png.transform.global_square_image_960.jpg'),
	(3, 'HOMENAJE A GALILEO GALILEI DE PANERAI', 'diego', '6/4/19', 'Con motivo del 400º aniversario de las primeras observaciones del cielo por Galileo Galilei, Officine Panerai crea tres modelos excepcionalmente complejos en homenaje al genio toscano: ', './img/2010.png.transform.global_square_image_960.jpg'),
	(4, 'OFFICINE PANERAI PRESENTA EL RELOJ BRONZO', 'diego', '6/2/19', 'Officine Panerai presenta el Luminor Submersible 1950 3 Days Automatic Bronzo, en el que utiliza por primera vez un material que debe su encanto al aspecto gastado que adquiere con el tiempo y que siempre ha evocado el mundo del mar, un elemento vinculado a Panerai a lo largo de su historia. En este año también se lanza el calibre manufactura P.3000, expresión del arte relojero de la marca florentina. Además, Officine Panerai abre su boutique número 13 en Bal Harbour (Florida).', './img/2011.png.transform.global_square_image_960.jpg');
/*!40000 ALTER TABLE `blog` ENABLE KEYS */;

-- Volcando estructura para tabla panerai.home
CREATE TABLE IF NOT EXISTS `home` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(250) COLLATE utf8_spanish_ci DEFAULT '0',
  `descripcion` varchar(250) COLLATE utf8_spanish_ci DEFAULT '0',
  `clase` varchar(250) COLLATE utf8_spanish_ci DEFAULT '0',
  `imagen` varchar(250) COLLATE utf8_spanish_ci DEFAULT '0',
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla panerai.home: ~3 rows (aproximadamente)
DELETE FROM `home`;
/*!40000 ALTER TABLE `home` DISABLE KEYS */;
INSERT INTO `home` (`id`, `titulo`, `descripcion`, `clase`, `imagen`) VALUES
	(1, 'Luminor Submersible', 'Panerai Automatic', 'carousel-item active', './img/home1.jpg'),
	(2, 'Luminor Flyback', 'Panerai America\'s Cup', 'carousel-item', './img/home2.jpg'),
	(3, 'Luminor Marina', 'Panerai Classic', 'carousel-item', './img/home3.jpg');
/*!40000 ALTER TABLE `home` ENABLE KEYS */;

-- Volcando estructura para tabla panerai.relojes
CREATE TABLE IF NOT EXISTS `relojes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `descripcion` varchar(500) COLLATE utf8_spanish_ci DEFAULT NULL,
  `imagen` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `precio` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla panerai.relojes: ~3 rows (aproximadamente)
DELETE FROM `relojes`;
/*!40000 ALTER TABLE `relojes` DISABLE KEYS */;
INSERT INTO `relojes` (`id`, `nombre`, `descripcion`, `imagen`, `precio`) VALUES
	(2, 'BMG-TECH 47MM', 'Dos de los materiales más innovadores de Panerai en un solo reloj: caja de BMG-TECH y bisel de Carbotech para aunar la fuerza, la resistencia a los arañazos y la ligereza. Además, el Carbotech tiene un aspecto negro mate no uniforme que varía en función del corte del material, de forma que cada reloj es único.', './img/SUBMERSIBLE BMG-TECH - 47MM.png', '14.000'),
	(3, 'LUNA ROSSA 47MM', 'El nuevo modelo de Panerai será utilizado por el equipo de vela Luna Rossa, capitaneado por Massimiliano "Max" Sirena. En el fondo de titanio del reloj aparecen grabados el logotipo del equipo Luna Rossa y el perfil de la Copa América.', './img/SUBMERSIBLE LUNA ROSSA - 47MM.png', '21.000'),
	(4, 'LUMINOR DUE - 45MM', 'Las líneas del Luminor Due se inspiran en la caja del Luminor 1950, que representa la culminación de las creaciones de Panerai. Todos estos elementos derivan directamente de la historia de la marca, pero se han rediseñado sutilmente para acentuar la versatilidad de un reloj que es una síntesis entre el espíritu deportivo y la posibilidad de usarlo en ocasiones especiales o situaciones más formales.', './img/1319761.png.transform.global_square_image_500.png', '10.400'),
	(5, 'RADIOMIR S.L.C.- 47MM', 'El acero inoxidable AISI 316L 1.4435 es el material por excelencia de Officine Panerai, puesto que es resistente a la corrosión e hipoalergénico, lo cual lo hace ideal para estar en contacto con la piel. Los relojes Panerai creados para la Armada italiana estaban hechos de acero inoxidable austenítico, un material fiable y resistente a las condiciones ambientales extremas en las que debían actuar los comandos.', './img/245092.png.transform.global_square_image_500.png', '7.500');
/*!40000 ALTER TABLE `relojes` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
