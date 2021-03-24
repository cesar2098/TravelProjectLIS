-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 03, 2015 at 09:46 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tourandtravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `advertisement`
--

CREATE TABLE IF NOT EXISTS `advertisement` (
  `Advid` int(50) NOT NULL AUTO_INCREMENT,
  `Title` varchar(100) NOT NULL,
  `Companyname` varchar(100) NOT NULL,
  `Pic` varchar(1000) NOT NULL,
  `Detail` varchar(1000) NOT NULL,
  PRIMARY KEY (`Advid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `advertisement`
--

INSERT INTO `advertisement` (`Advid`, `Title`, `Companyname`, `Pic`, `Detail`) VALUES
(1, 'Tour y viaje', 'Eflio .com', '115.jpg', 'Encuentre información sobre viajes y comercio proporcionada por Kaler Enterprises. Los usuarios pueden obtener información detallada sobre los agentes de viajes, operadores turísticos receptivos, operadores de transporte turístico, operadores turísticos de aventura, operadores turísticos nacionales, etc. en la India. Se proporcionan pautas para las respectivas agencias y operadores. Se puede acceder a la lista de operadores comerciales de viajes aprobados.\r\n'),
(2, 'Tour y viaje', ' Life Trip Travel Agency ', '117.jpg', 'Encuentre información sobre viajes y comercio proporcionada por My Tour. Los usuarios pueden obtener información detallada sobre los agentes de viajes, operadores turísticos receptivos, operadores de transporte turístico, operadores turísticos de aventura, operadores turísticos nacionales, etc. en la India. Se proporcionan pautas para las respectivas agencias y operadores. Se puede acceder a la lista de operadores comerciales de viajes aprobados.\r\n'),
(3, 'Tour y viaje', 'New View Travel Agency', '119.jpg', 'Encuentre información sobre viajes y comercio proporcionada por My Tour. Los usuarios pueden obtener información detallada sobre los agentes de viajes, operadores turísticos receptivos, operadores de transporte turístico, operadores turísticos de aventura, operadores turísticos nacionales, etc. en la India. Se proporcionan pautas para las respectivas agencias y operadores. Se puede acceder a la lista de operadores comerciales de viajes aprobados.'),
(5, 'Tour y viaje', 'Sysny', '118.jpg', 'Encuentre información sobre viajes y comercio proporcionada por My Tour. Los usuarios pueden obtener información detallada sobre los agentes de viajes, operadores turísticos receptivos, operadores de transporte turístico, operadores turísticos de aventura, operadores turísticos nacionales, etc. en la India. Se proporcionan pautas para las respectivas agencias y operadores. Se puede acceder a la lista de operadores comerciales de viajes aprobados.\r\n'),
(8, 'Tour y viaje', 'Merrific', '124.jpg', 'Encuentre información sobre viajes y comercio proporcionada por My Tour. Los usuarios pueden obtener información detallada sobre los agentes de viajes, operadores turísticos receptivos, operadores de transporte turístico, operadores turísticos de aventura, operadores turísticos nacionales, etc. en la India. Se proporcionan pautas para las respectivas agencias y operadores. Se puede acceder a la lista de operadores comerciales de viajes aprobados.\r\n'),
(9, 'Tour y viaje', 'Easymost', '125.jpg', 'Encuentre información sobre viajes y comercio proporcionada por My Tour. Los usuarios pueden obtener información detallada sobre los agentes de viajes, operadores turísticos receptivos, operadores de transporte turístico, operadores turísticos de aventura, operadores turísticos nacionales, etc. en la India. Se proporcionan pautas para las respectivas agencias y operadores. Se puede acceder a la lista de operadores comerciales de viajes aprobados.'),
(10, 'Tour y viaje', 'Guideaid', '118.jpg', 'Encuentre información sobre viajes y comercio proporcionada por My Tour. Los usuarios pueden obtener información detallada sobre los agentes de viajes, operadores turísticos receptivos, operadores de transporte turístico, operadores turísticos de aventura, operadores turísticos nacionales, etc. en la India. Se proporcionan pautas para las respectivas agencias y operadores. Se puede acceder a la lista de operadores comerciales de viajes aprobados.'),
(11, 'Tour ay viaje', 'Vyand', '126.jpg', 'Encuentre información sobre viajes y comercio proporcionada por My Tour. Los usuarios pueden obtener información detallada sobre los agentes de viajes, operadores turísticos receptivos, operadores de transporte turístico, operadores turísticos de aventura, operadores turísticos nacionales, etc. en la India. Se proporcionan pautas para las respectivas agencias y operadores. Se puede acceder a la lista de operadores comerciales de viajes aprobados.'),
(12, 'Tour y viaje', 'Celouro', '127.jpg', 'Encuentre información sobre viajes y comercio proporcionada por My Tour. Los usuarios pueden obtener información detallada sobre los agentes de viajes, operadores turísticos receptivos, operadores de transporte turístico, operadores turísticos de aventura, operadores turísticos nacionales, etc. en la India. Se proporcionan pautas para las respectivas agencias y operadores. Se puede acceder a la lista de operadores comerciales de viajes aprobados.'),
(14, 'Turismo', 'Destinations Travel', '113.jpg', 'Encuentre información sobre viajes y comercio proporcionada por My Tour. Los usuarios pueden obtener información detallada sobre los agentes de viajes, operadores turísticos receptivos, operadores de transporte turístico, operadores turísticos de aventura, operadores turísticos nacionales, etc. en la India. Se proporcionan pautas para las respectivas agencias y operadores. Se puede acceder a la lista de operadores comerciales de viajes aprobados.'),
(15, 'Turismo', 'Adventure Makers', '111.jpg', 'Encuentre información sobre viajes y comercio proporcionada por My Tour. Los usuarios pueden obtener información detallada sobre los agentes de viajes, operadores turísticos receptivos, operadores de transporte turístico, operadores turísticos de aventura, operadores turísticos nacionales, etc. en la India. Se proporcionan pautas para las respectivas agencias y operadores. Se puede acceder a la lista de operadores comerciales de viajes aprobados.'),
(16, 'Turismo', 'Goin My Way', '104.jpg', 'Encuentre información sobre viajes y comercio proporcionada por My Tour. Los usuarios pueden obtener información detallada sobre los agentes de viajes, operadores turísticos receptivos, operadores de transporte turístico, operadores turísticos de aventura, operadores turísticos nacionales, etc. en la India. Se proporcionan pautas para las respectivas agencias y operadores. Se puede acceder a la lista de operadores comerciales de viajes aprobados.');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `Cat_id` int(100) NOT NULL AUTO_INCREMENT,
  `Cat_name` varchar(2000) NOT NULL,
  PRIMARY KEY (`Cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`Cat_id`, `Cat_name`) VALUES
(1, 'Tours Familiares'),
(2, 'Tours Religiosos'),
(3, 'Tours Aventureros'),
(4, 'Tours para eventos especiales'),
(5, 'Parques Nacionales'),
(6, 'Vacaciones Tematicas'),
(7, 'Tours para Grupos Pequeños');

-- -----------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE IF NOT EXISTS `contactus` (
  `contactid` int(50) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  `Phno` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Message` varchar(5000) NOT NULL,
  PRIMARY KEY (`contactid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`contactid`, `Name`, `Phno`, `Email`, `Message`) VALUES
(1, 'Mehar', '9501065206', 'mehar@gmail.com', 'Hemos leído sobre el interés de su anuncio en la época de la India sobre el viaje de vacaciones. Le agradeceremos que nos envíe la información detallada sobre el costo del viaje, el peso del equipaje, clase económica y primera clase, etc. La información anterior es necesaria para nuestro director a quien le gustará disfrutar del viaje de vacaciones junto con su familia.'),
(2, 'Japleen', '9915079133', 'japu@gmail.com', 'Hemos leído sobre el interés de su anuncio en la época de taiwan sobre el viaje de vacaciones. Agradeceremos, si amablemente envía la información detallada sobre el costo del viaje, el peso del equipaje, clase económica. La información anterior es necesaria para nuestro administrador a quien le gustará disfrutar del viaje de vacaciones junto con su familia.'),
(3, 'Veena', '9815724956', 'veena12@gmail.com', 'Le agradeceremos que nos envíe la información detallada sobre el costo del viaje, el peso del equipaje y la primera clase, etc. La información anterior es necesaria para nuestro director ejecutivo a quien le gustará disfrutar del viaje de vacaciones.'),
(4, 'Sahil', '9814532456', 'Sahil@yahoo.com', 'Estamos interesados por su publicacion, le agradeceria si me puede dar informacion sobre el costo total del paquete en clase economica.'),
(5, 'Varinder', '9812345234', 'vinnysharma@gmail.com', 'Nos gusto mucho su publicacion y estamos interesados en un viaje para 50 personas, queria saber si me puede brindar información del costo individual del paquete para clase ejecutiva');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE IF NOT EXISTS `enquiry` (
  `Enquiryid` int(50) NOT NULL AUTO_INCREMENT,
  `Packageid` int(50) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `Mobileno` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `NoofDays` int(50) NOT NULL,
  `Child` int(50) NOT NULL,
  `Adults` int(50) NOT NULL,
  `Message` varchar(900) NOT NULL,
  `Statusfield` varchar(200) NOT NULL,
  PRIMARY KEY (`Enquiryid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`Enquiryid`, `Packageid`, `Name`, `Gender`, `Mobileno`, `Email`, `NoofDays`, `Child`, `Adults`, `Message`, `Statusfield`) VALUES
(3, 1, 'Manpreet', 'Femenino', '9779730479', 'manpreetkaler13@yahoo.com', 2, 1, 4, 'Estamos interesados en el paquete de viaje a la India, Quisiera que nos regalara informacion sobre este en vuelos de clase turista para el periodo vacacional', 'Pendiente'),
(5, 2, 'Nandni', 'Femenino', '7696303090', 'nandni@gmail.com', 2, 2, 3, 'Quisiera informacion para un paquete turistico en Israel para un grupo de 100 personas de una iglesia', 'Pendiente'),
(6, 5, 'Rakesh', 'Masculino', '9876123456', 'rakesh@yahoo.com', 4, 2, 2, 'Me gustaria informacion de los diferentes paquetes de viajes familiares, los precios en vuelos de primera clase', 'Pendiente'),
(7, 4, 'Navneet', 'Femenino', '9463958058', 'neerubawa@yahoo.com', 8, 2, 6, 'Me podrian brindar informacion de los diferentes opciones completas que tengan para tours en diferentes paises europeos de preferencia en Francia en vuelos de clases turistica.', 'Pendiente'),
(8, 3, 'Rohan', 'Masculino', '9501065206', 'rohan@gmail.com', 3, 1, 5, 'Necesito informacion de vuelos y opciones de viaje para vuelos y opciones de hoteles para reuniones ejecutivas para la ciudad de Singapur.', 'Pendiente'),
(9, 6, 'Jassi', 'Femenino', '9876123456', 'jass@gmail.com', 2, 1, 5, 'Quisiera informacion sobre el precio total de un paquete que incluya traductor para ayudarnos en un viaje a las iglesias clasicas Inglesas.', 'Pendiente'),
(10, 11, 'Shavir', 'Masculino', '9915510777', 'shavirpaul@gmail.com', 6, 1, 2, 'Estamos interesados en adquirir un paquete de viaje para la epoca del OKTOBER Fest en la region de babaria, Alemania. Quisieramos una cotizacion para un grupo de 5 personas en primera clase', 'Pendiente'),
(11, 13, 'Nikhil', 'Masculino', '9871234561', 'nikhil@gmail.com', 2, 2, 2, 'Necesito informacion para las diferentes opciones que tengan para viajes familiares en el continente asiatico.', 'Pendiente'),
(12, 15, 'Rehan', 'Masculino', '9876123456', 'rehan@yahoo.com', 3, 3, 2, 'Me podrian brindar informacion sobre los diferentes opciones de vuelo en pareja hacia paris', 'Pendiente');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE IF NOT EXISTS `package` (
  `Packid` int(200) NOT NULL AUTO_INCREMENT,
  `Packname` varchar(1000) NOT NULL,
  `Category` int(200) NOT NULL,
  `Subcategory` int(200) NOT NULL,
  `Packprice` int(200) NOT NULL,
  `Pic1` varchar(8000) NOT NULL,
  `Pic2` varchar(8000) NOT NULL,
  `Pic3` varchar(8000) NOT NULL,
  `Detail` varchar(8000) NOT NULL,
  PRIMARY KEY (`Packid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`Packid`, `Packname`, `Category`, `Subcategory`, `Packprice`, `Pic1`, `Pic2`, `Pic3`, `Detail`) VALUES
(1, 'Christmas Adventure in Lapaland     ', 1, 1, 20000, '24.jpg', '26.jpg', '25.jpg', '¿Qué mejor manera de celebrar la Navidad que pasarla donde vive Santa Claus? Venga a experimentar una Navidad tradicional de Laponia en Finlandia: conozca a Santa en persona en el mundialmente famoso Pueblo de Papá Noel, disfrute de la emoción de un paseo en trineo tirado por perros y aprenda sobre la cultura sami única en una granja de renos. Estas vacaciones mágicas seguramente crearán recuerdos duraderos para toda la familia.'),
(2, 'Tour Viaje de la familia Agra ', 1, 2, 10000, '30.jpg', '31.jpg', '4.jpg', 'Unas vacaciones llenas de diversión con su familia es el mejor momento para fortalecer los lazos y rejuvenecer el amor entre seres queridos. Y, ¿qué mejor lugar para pasar un buen rato con los miembros de su familia que Agra? El clima agradable, los hermosos paisajes y la deliciosa comida seguramente lo pondrán de su mejor humor para disfrutar del mejor momento con su familia. Para unas vacaciones sin estrés, puede explorar sus opciones de paquetes de vacaciones familiares en Agra con nosotros en Yatra.com. Desde reservas de hotel hasta boletos de viaje, ofrecemos varios servicios para ayudarlo a disfrutar de sus paquetes turísticos familiares en Agra. Visite las numerosas atracciones de este hermoso lugar en compañía de sus seres queridos con nuestras vacaciones familiares en Agra y paquetes turísticos lejos de las tareas rutinarias de la vida. '),
(3, 'Fiestas en Italia', 1, 5, 20000, '38.jpg', '39.jpg', '37.jpg', 'Disfrute de playas doradas, mares resplandecientes, hermosos paisajes, ciudades emocionantes y excelente cocina durante sus vacaciones familiares en Italia. Ya sea que esté buscando unas vacaciones basadas en actividades o una llena de actividades culturales, deje que nuestra experiencia y conocimiento interno lo ayuden a adaptar las vacaciones familiares ideales en Italia.'),
(4, 'Main attraction in Thailand', 1, 4, 400000, '42.jpg', '41.jpg', '40.jpg', 'Culturas fascinantes, una nación que adora a los niños, hermosas playas en complejos turísticos de fama mundial y una ruta turística muy transitada se combinan para hacer que las vacaciones familiares en Tailandia sean populares entre aquellos que buscan una combinación de relajación y aventura. Los niños pueden disfrutar de una experiencia invaluable descubriendo nuevas culturas, costumbres y religiones mientras visitan los templos y se divierten mucho al explorar ciudades, pueblos y aldeas y, por supuesto, en el resort.'),
(5, 'Vacaciones en Vancouver ', 1, 3, 400000, '34.jpg', '36.jpg', '33.jpg', ' Los lagos y montañas de los Parques Nacionales Jasper, Banff y Yoho brindan el escenario perfecto para practicar senderismo y andar en bicicleta, mientras camina por el enorme glaciar Athabasca se siente como si estuviera en la cima del mundo. Equitación, rafting, piragüismo y avistamiento de ballenas están disponibles para el viajero aventurero en nuestras vacaciones en Canadá.'),
(6, 'Haridwar', 2, 6, 3000, '43.jpg', '44.jpg', '45.jpg', 'Haridwar significa la "Puerta de entrada a la morada de los dioses". Cuenta la leyenda que el príncipe Bhagirath, a través de su penitencia, hizo que el río Ganges descendiera a las llanuras del Himalaya para que sus antepasados, que habían perecido debido a la maldición de un sabio, pudieran revivir. '),
(7, 'Tivoli', 2, 7, 500000, '48.jpg', '47.jpg', '46.jpg', 'Villa d''Este, en la ciudad de Tivoli, al este de Roma, es un hermoso complejo de jardines y palacios que figura en la Lista del Patrimonio Mundial de la UNESCO. La villa fue construida en 1560 y fue la visión del cardenal Ippolito II d''Este (quien fracasó por poco en convertirse en papa). La villa es famosa por su magnífico jardín de grutas, fuentes, ninfas y esculturas de agua. El cardenal d''Este murió en 1572. Para entonces, el trabajo en el jardín y la pintura interior de la villa estaban casi completos.'),
(8, 'Viaje en Austria', 2, 8, 300000, '50.jpg', '49.jpg', '51.jpg', 'Austria es una tierra de Alpes escarpados y elaborados edificios barrocos. Los visitantes acuden en masa a la eternamente elegante ciudad de Viena por sus museos y palacios, cafés e iglesias, y una noche en uno de los mejores teatros de ópera de Europa. Con unos días más, podría poner su Sound of Music en Salzburgo, la ciudad barroca rodeada de castillos y acantilados donde nació Mozart (y se llevó a cabo la clásica película musical), y visitar la pequeña y encantadora Innsbruck, en lo alto de los Alpes tiroleses .'),
(9, 'Lugares religiosos canadienses', 2, 9, 700000, '53.jpg', '52.jpg', '54.jpg', 'Canadá es más como un país multicultural. El cristianismo con católicos romanos y protestantes es predominante en Canadá como religión principal. Los recorridos religiosos en Canadá lo llevan a lugares importantes, que incluyen la Iglesia Anglicana de Santa Ana, la Iglesia de Frikirju y San Norberto. Además del cristianismo, otras religiones como el hinduismo, el budismo, el islam y el sijismo también han ganado terreno en el país.'),
(10, 'Lugares religiosos en Inglaterra', 2, 10, 1200000, '56.jpg', '57.jpg', '55.jpg', 'La Iglesia Católica en Inglaterra y Gales es parte de la Iglesia Católica Romana mundial en plena comunión con el Papa. El cristianismo celta, con algunas tradiciones distintas a las de Roma, estuvo presente en la Bretaña romana desde el siglo I d.C., pero tras la salida de las legiones romanas se retiró al paganismo. En el 597 d.C., la primera misión papal autorizada, que estableció un vínculo directo desde el Reino de Kent a la Sede de Roma y a la forma benedictina de monaquismo, fue llevada a cabo por Agustín de Canterbury.'),
(11, 'Lugares cristianos', 2, 11, 500000, '59.jpg', '60.jpg', '58.jpg', 'Christ Church Cathedral en Nelson es una hermosa iglesia anglicana ubicada en la parte superior de Trafalgar Street. La primera iglesia fue construida en el año 1851 en un lugar diferente y fue nombrada como Christ Church Cathedral en 1886. Se creó una nueva iglesia en el sitio actual en 1887 pero no fue antes de 1965 cuando se completó la construcción de esta iglesia.'),
(12, 'Lo mejor de india', 7, 12, 10000, '63.jpg', '62.jpg', '61.jpg', 'El subcontinente indio alberga una serie de monumentos antiguos, lugares pintorescos, playas, sitios del Patrimonio Mundial y atracciones culturales. Los estados de Rajasthan, Gujarat, Goa, Himachal Pradesh, Jammu y Cachemira y Uttarakhand se encuentran entre los principales lugares visitados por turistas nacionales e internacionales, peregrinos, entusiastas de la vida silvestre e historiadores.'),
(13, 'Lo mejor de Inglaterra', 7, 13, 900000, '65.jpg', '66.jpg', '64.jpg', 'El corazón de Inglaterra es una región icónica que abarca Oxford, los Cotswolds, Stratford-upon-Avon y Bath, un sitio declarado Patrimonio de la Humanidad por la UNESCO. En este viaje de cinco días, visitaremos Oxford y Lacock, exploraremos los pintorescos pueblos de Cotswold famosos por sus encantadoras cabañas de piedra de color miel con techos de paja y exploraremos las casas señoriales tradicionales.'),
(14, 'Lo mejor de canada', 7, 14, 700000, '67.jpg', '69.jpg', '68.jpg', 'Es tan grande que a veces es difícil entenderlo, así que al unirse a un grupo pequeño de vacaciones en Canadá y turistas de ideas afines, se quita la presión del frente de la organización. Son perfectos si desea un atajo a los lugares de interés cultural y natural de Canadá, como hacer caminatas en las Montañas Rocosas, ir en una expedición de osos polares o pasear en trineos tirados por perros en el Yukón.'),
(15, 'Los mejores lugares de Mumbai', 3, 16, 12000, '72.jpg', '73.jpg', '70.jpg', 'Mumbai, la capital industrial de la India, es uno de los lugares más populares para pasar las vacaciones en la India. Para obtener detalles sobre lugares alrededor de Mumbai junto con información confiable sobre lugares para visitar en Mumbai o lugares para visitar cerca de Mumbai, los turistas deben visitar Mustseeindia.com. Mustseeindia.com, un sitio web líder en viajes en línea, es el mejor lugar para reservar vacaciones en los mejores lugares de Mumbai para hacer un picnic.'),
(16, 'Lo mejor de Thailand', 3, 17, 400000, '76.jpg', '75.jpg', '77.jpg', 'Bangkok fue una increíble introducción a Tailandia, especialmente considerando lo mucho que vimos en nuestro día completo allí. Recuerdo haberle dicho a nuestro guía Ngu que si todo mi viaje terminaba al día siguiente, todavía pensaría que visitar Tailandia había valido la pena. Ngu nos proporcionó una explicación muy completa de los antecedentes históricos y religiosos de Wat Arun, el Palacio Real y las Barcazas Reales. Aunque nuestro día estuvo lleno de actividad, nunca nos sentimos abrumados o apurados. De hecho, todavía teníamos energía para asistir a un espectáculo de danza tailandesa esa noche, que Ngu amablemente organizó para nosotros y nos acompañó, en su tiempo libre.'),
(17, 'Mejores eventos en Singapore', 4, 20, 80000, '83.jpg', '81.jpg', '82.jpg', 'Hay tantos eventos especiales en Singapur como celebración de Año Nuevo, celebración de Deepavali, celebración de Navidad, festivales gastronómicos, competencia de modelado, competencia de canto, etc. Singapur también es el mejor lugar turístico del mundo ...'),
(18, 'Mejores eventos de Germany', 4, 19, 600000, '86.jpg', '84.jpg', '85.jpg', 'Hay tantos eventos especiales en Alemania como la celebración de Año Nuevo, la celebración de Deepavali, la celebración de Navidad, los festivales gastronómicos, el concurso de modelos, el concurso de canto, etc. Alemania también es el mejor lugar turístico del mundo ...'),
(19, 'mejores momentos en France', 4, 18, 600000, '88.jpg', '87.jpg', '89.jpg', 'Hay tantos eventos especiales en Francia como la celebración de Año Nuevo, la celebración de Deepavali, la celebración de Navidad, los festivales gastronómicos, el concurso de modelos, el concurso de canto, etc. Francia también es el mejor lugar turístico del mundo ...'),
(20, 'Boda tematica de Star Wars', 6, 23, 20000, '93.jpg', '95.jpg', '94.jpg', 'Seamos honestos: una boda de Star Wars puede ser complicada. Quieres que sea muy divertido, pero también corres el riesgo de que se sienta como una fiesta infantil. ¡Estamos aquí para ayudar! A continuación, echa un vistazo a todo lo que necesitas, desde invitaciones con estrellas hasta una despedida con un sable de luz, para que tu gran día sea elegante y memorable al mismo tiempo. Que la fuerza de la planificación de la boda te acompañe. '),
(21, 'Fiestas Navideñas', 6, 22, 100000, '97.jpg', '98.jpg', '99.jpg', 'Cientos de ideas para fiestas navideñas, temas para fiestas navideñas, invitaciones, decoraciones, artículos para fiestas y regalos para fiestas pueden ayudarlo a planificar y ofrecer una gran fiesta navideña. Tenemos una variedad de temas de fiestas navideñas para cada tipo de celebración. Dedique unos minutos a explorar una variedad de temas de la fiesta de Navidad hasta que encuentre el tema adecuado para su celebración navideña. '),
(22, 'Vacaciones', 6, 21, 100000, '101.jpg', '100.jpg', '102.jpg', 'En My Tour creamos paquetes de vacaciones temáticos de entretenimiento diseñados a medida basados en sus intereses específicos, haciendo que cada viaje sea único. My Tour le dará una idea de los tipos de paquetes que podrían ser posibles para unas vacaciones con temas de entretenimiento.'),
(23, 'mejores parques de Rajasthan', 5, 26, 3000, '107.jpg', '106.jpg', '108.jpg', 'Rajasthan, el estado más grande de la India, famoso por su rica cultura y patrimonio, también tiene una rica flora y fauna, aunque la cubierta forestal es muy pequeña en comparación con otros estados de la India. El parque nacional de Ranthambore en Rajasthan es mundialmente famoso por los tigres, a continuación se muestra la lista de importantes parques nacionales de vida silvestre en Rajasthan.'),
(24, 'Mejores parques en Kerala', 5, 25, 4000, '109.jpg', '110.jpg', '111.jpg', 'Kerala, el propio país de los dioses, es famoso por sus remansos, playas y la belleza escénica y la vida silvestre, la vida silvestre en Kerala son de hecho algunas de las más magníficas y variadas que se encuentran en cualquier parte del mundo. Los Ghats occidentales, las barreras montañosas naturales de Kerala, que limitan con Tamil Nadu y Karnataka son el hogar de la mayoría de la vida silvestre de Kerala. A continuación se muestra la lista de algunos de los parques nacionales de vida silvestre más importantes de Kerela. '),
(25, 'Mejores parques de India', 5, 24, 2000, '113.jpg', '112.jpg', '114.jpg', 'Hay más de 80 parques nacionales en la India, repartidos por todo el país. Algunos son más grandes y accesibles que otros. Mucha gente quiere ver al infame tigre. La posibilidad de avistar un tigre depende en gran medida del tamaño del parque nacional y del número de tigres, y es mayor en algunos parques que en otros. '),
(27, 'Viaje a Israel', 3, 15, 100000, '130.png', '129.jpg', '131.jpg', 'Israel es un país pequeño, obtuvo experiencias culturales, culinarias, arquitectónicas, históricas y espirituales de proporciones bíblicas. \ R \ n \ r \ nIsrael no es un lugar en el que se detiene o pasa por Tierra Santa requiere atención, compromiso, devoción y una mente y un corazón abiertos, sin importar si eres judío, cristiano, hindú, agnóstico, animista, Jedi o rasta.');

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE IF NOT EXISTS `subcategory` (
  `Subcatid` int(200) NOT NULL AUTO_INCREMENT,
  `Subcatname` varchar(1000) NOT NULL,
  `Catid` int(200) NOT NULL,
  `Pic` varchar(8000) NOT NULL,
  `Detail` varchar(8000) NOT NULL,
  PRIMARY KEY (`Subcatid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`Subcatid`, `Subcatname`, `Catid`, `Pic`, `Detail`) VALUES
(1, 'Vacaciones familiares en Laponia', 1, '1.jpg', 'Un brillante equilibrio entre alojamiento acogedor en cabañas de invierno y aventura, estas vacaciones le brindan una muestra de las mejores actividades en la naturaleza y mucho tiempo libre para explorar también.'),
(2, 'Vacaciones familiares en la India   ', 1, '4.jpg', 'Estas relajantes vacaciones gestionan todo el trabajo organizativo por usted, para que pueda concentrarse en combinar la diversión familiar con la exploración de las vistas y los sonidos fenomenales de la India.'),
(3, 'Vacaciones familiares en Canadá', 1, '6.jpg', 'Nuestras únicas grandes vacaciones de aventura en Canadá para familias, con 10 días de maravillas en la naturaleza, campamentos y ranchos. De Banff a los osos, de Whistler a los rápidos del rafting.'),
(4, 'Vacaciones familiares en Tailandia ', 1, '131.jpg', 'Esta es una verdadera aventura familiar que abarca todos los aspectos de Tailandia: la vida local, los parques nacionales, la selva tropical y las playas, todos unidos por una gran organización y excelentes guías.'),
(5, 'Vacaciones familiares en Italia', 1, '8.jpg', 'Volcanes de fama mundial, resplandecientes ciudades costeras y una de las lecciones de humanidades más emocionantes jamás imaginables. ¿Está su familia lista para la gira por Italia?'),
(6, 'Tour religioso en India', 2, '9.jpg', 'La India es una tierra donde se adora a varios dioses y diosa a lo largo de los años. Los métodos de adoración están llenos de dedicación y espíritu. La gente solía visitar la India para ver el Char Dham, la peregrinación budista y los famosos templos del norte y sur de la India.'),
(7, 'Tour religioso en Italia', 2, '10.jpg', 'Los Tours religiosos representan un fenómeno importante que involucra a la industria del Turismo. Hoy en día en todo el mundo hay 40 millones de personas que gastan 4 mil millones de dólares y aman visitar los lugares de culto. Los impulsa el deseo de descubrir las raíces del cristianismo y ser conmovidos por esos lugares santos. Este gran negocio está floreciendo particularmente en Italia, donde hay muchos destinos importantes, hermosos y encantadores y la cultura cristiana profundamente radicada. El itinerario que proponemos aquí vincula muchos destinos religiosos italianos importantes.'),
(8, 'Tour religioso en Europa', 2, '11.jpg', 'Cada región de Europa ofrece una mirada diferente y fascinante a las religiones que han influido en el mundo. Ya sea que los viajeros quieran visitar la Ciudad del Vaticano, las catedrales luteranas en Alemania o la Abadía de Westminster en Inglaterra, Europa ofrece una amplia gama de opciones para recorridos religiosos.'),
(9, 'Tour religioso en Canadá', 2, '14.jpg', 'Canadá es más como un país multicultural. El cristianismo con católicos romanos y protestantes es predominante en Canadá como religión principal. Los recorridos religiosos en Canadá lo llevan a lugares importantes, que incluyen la Iglesia Anglicana de Santa Ana, la Iglesia de Frikirju y San Norberto. Además del cristianismo, otras religiones como el hinduismo, el budismo, el islam y el sijismo también han ganado terreno en el país. '),
(10, 'Tour religioso en Inglaterra', 2, '15.jpg', 'Seguimos la historia del inconformismo en Inglaterra y nos adentramos en esos sitios particulares que son queridos por los bautistas de todo el mundo. Sitios relacionados con los fundadores de la fe bautista que lucharon en esos primeros días contra viento y marea. Al mismo tiempo, vemos algunos de los paisajes más bellos de Inglaterra y las espléndidas ciudades. '),
(11, 'Tour religioso en Nueva Zelanda', 2, '16.jpg', ' En Nueva Zelanda, la afiliación religiosa es de particular importancia para los usuarios de datos interesados en MÄ ori y en los pueblos de las islas del Pacífico. También es una variable de interés histórico; La afiliación religiosa se ha recopilado en el Censo de población y viviendas de Nueva Zelandia desde 1851. La afiliación religiosa es una variable de gran interés para las organizaciones religiosas y los científicos sociales, y puede utilizarse como variable explicativa en estudios sobre temas como la formación y disolución del matrimonio , fertilidad e ingresos. '),
(12, 'Tours para grupos pequeños en India', 7, '17.jpg', 'La afiliación religiosa es una variable de gran interés para las organizaciones religiosas, los científicos sociales, y puede utilizarse como variable explicativa en estudios sobre temas como la formación y disolución del matrimonio, la fertilidad y los ingresos ”.'),
(13, 'Tours para grupos pequeños en Inglaterra', 7, '18.jpg', 'El corazón de Inglaterra es una región icónica que abarca Oxford, los Cotswolds, Stratford-upon-Avon y Bath, un sitio declarado Patrimonio de la Humanidad por la UNESCO. En este viaje de cinco días, visitaremos Oxford y Lacock, exploraremos los pintorescos pueblos de Cotswold famosos por sus encantadoras cabañas de piedra de color miel con techos de paja y exploraremos las casas señoriales tradicionales.'),
(14, 'Tours para grupos pequeños en Canadá', 7, '19.jpg', 'Es tan grande que a veces es difícil entenderlo, así que al unirse a un grupo pequeño de vacaciones en Canadá y turistas de ideas afines, se quita la presión del frente de la organización. Son perfectos si desea un atajo a los lugares de interés cultural y natural de Canadá, como hacer caminatas en las Montañas Rocosas, ir en una expedición de osos polares o pasear en trineos tirados por perros en el Yukón. '),
(15, 'Tours de aventura en Israel', 3, '20.jpg', 'Israel es un país pequeño, obtuvo experiencias culturales, culinarias, arquitectónicas, históricas y espirituales de proporciones bíblicas. \ R \ n \ r \ nIsrael no es un lugar en el que se detiene o pasa por Tierra Santa requiere atención, compromiso, devoción y una mente y un corazón abiertos, sin importar si eres judío, cristiano, hindú, agnóstico, animista, Jedi o rasta.'),
(16, 'Tours de aventura en Mumbai', 3, '71.jpg', 'Tours de educación de aventura (Mumbai) Pvt. Ltd. es hoy reconocida como la empresa de viajes y excursiones de más rápido crecimiento en la India. El logotipo de Adventure Tours significa que su gente se preocupa por lo que hacen por usted y usted encontrará la calidad y el nivel de servicio que espera. Ya sea que esté de vacaciones, un tour, un picnic o una conferencia, nuestros servicios están diseñados profesionalmente, son de alta calidad y rentables, para permitirle cumplir el sueño de su vida. Cuando se trata de encontrar lo que está buscando, Adventure Education Tours (Mumbai) Pvt. Ltd. es siempre la mejor opción. \ R \ n'),
(17, 'Tours de aventura en Tailandia', 3, '74.jpg', 'Es difícil expresar con palabras lo agradecidos que estamos Kamy y yo por el viaje de su vida que usted planeó para nosotros. Aunque estábamos emocionados de viajar a Asia por primera vez, todavía no podíamos haber imaginado lo memorable y especial que sería nuestra visita a Tailandia. Me doy cuenta de que trabajar conmigo fue un desafío. A diferencia de algunos de sus otros clientes, normalmente yo mismo planifico todos mis viajes porque me gusta ir a lugares que no suelen aparecer en los recorridos organizados. Elegí WildThailand por su opción de viaje personalizado y su enfoque en destinos remotos. Cuando le escribí, me impresionó su pronta respuesta y su disposición a incorporar todas nuestras inquietudes e intereses especiales en el itinerario de muestra que me envió. encabezó escribirme, por lo que estaba seguro de que nuestro viaje sería genial, a pesar de que no había oído hablar antes de WildThailand.'),
(18, 'Tours para eventos especiales en Francia', 4, '78.jpg', 'Como país famoso por su visión de futuro, ya sea en comida, moda, arte o arquitectura, Francia ciertamente tiene mucho que celebrar. De hecho, a los franceses les encantan los festivales: la celebración está profundamente arraigada en su cultura y siempre existe la promesa de un evento emocionante. Programe bien su viaje a Francia y podrá mezclarse con los ricos y famosos en el aclamado Festival de Cine de Cannes, o simplemente hacer como los lugareños y celebrar el levantamiento de la Francia moderna en el Día de la Bastilla. Por supuesto, siempre puede preguntar sobre festivales y eventos locales mientras esté allí: desde mercados de alimentos hasta ferias de arte y artesanía, encontrará mucho que hacer durante todo el año ... '),
(19, 'Tours para eventos especiales en Alemania', 4, '79.jpg', 'Disfrute de tours de eventos especiales en Alemania.'),
(20, 'Tours para eventos especiales en Singapur', 4, '80.jpg', 'Los tours de eventos especiales en Singapur son Deepavali, Año Nuevo, Festival de Comida de Singapur, etc.'),
(21, 'Vacaciones para solteros', 6, '90.jpg', 'El paquete de vacaciones basado en dos viajeros incluye pasaje aéreo de ida y vuelta, alojamiento en hotel, desayuno diario, excursiones y más. ¡Edimburgo y whisky hacen una combinación perfecta! Este viaje especial le dará una idea del proceso centenario de producción de whisky, mientras lo expondrá a la vibrante ciudad de Edimburgo, con el pintoresco telón de fondo de las Tierras Altas de Escocia centrales. Venga a experimentar la magia de Edimburgo y beba en lo que los lugareños llaman, "el agua de la vida".'),
(22, 'Vacaciones navideñas', 6, '91.jpg', 'El largo receso escolar en Navidad es un momento pico para las vacaciones familiares de invierno. Estas escapadas festivas seguramente complacerán tanto a los niños como a los padres.'),
(23, 'Vacaciones para amantes de Star Wars', 6, '92.png', 'Mi hijo va a cumplir 6 años en noviembre y generalmente los llevamos de vacaciones a algún lugar como un gran regalo de cumpleaños ... estamos planeando ir a Disney World, y veo que nos vamos a perder los fines de semana de Star Wars que están sucediendo en Junio. ¿Habrá atracciones de Star Wars en noviembre? Además, ¿qué más se podría hacer con la temática de Star Wars? Ahorramos para esto desde que nacimos y queremos que sea muy divertido, así que no haga comentarios sarcásticos ... A todos nos encanta Star Wars.'),
(24, 'National Parks in India', 5, '103.jpeg', 'Hay más de 80 parques nacionales en la India, repartidos por todo el país. Algunos son más grandes y accesibles que otros. Mucha gente quiere ver al infame tigre. La posibilidad de avistar un tigre depende en gran medida del tamaño del parque nacional y del número de tigres, y es mayor en algunos parques que en otros. Estos cinco parques son muy populares entre los visitantes. Si hay tipos específicos de animales que le interesan, descubra dónde encontrarlos en los 8 mejores parques para ver la vida silvestre en la India.'),
(25, 'National Parks in Kerala', 5, '104.jpg', 'Kerala, el propio país de los dioses, es famoso por sus remansos, playas y la belleza escénica y la vida silvestre, la vida silvestre en Kerala son de hecho algunas de las más magníficas y variadas que se encuentran en cualquier parte del mundo. Los Ghats occidentales, las barreras montañosas naturales de Kerala, que limitan con Tamil Nadu y Karnataka son el hogar de la mayoría de la vida silvestre de Kerala. A continuación se muestra la lista de algunos de los parques nacionales de vida silvestre más importantes de Kerela.'),
(26, 'National Parks in Rajasthan', 5, '105.jpg', 'Rajasthan, el estado más grande de la India, famoso por su rica cultura y patrimonio, también tiene una rica flora y fauna, aunque la cubierta forestal es muy pequeña en comparación con otros estados de la India. El parque nacional de Ranthambore en Rajasthan es mundialmente famoso por los tigres, a continuación se muestra la lista de importantes parques nacionales de vida silvestre en Rajasthan.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `Username` varchar(100) NOT NULL,
  `Pwd` varchar(100) NOT NULL,
  `Typeofuser` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Username`, `Pwd`, `Typeofuser`) VALUES
('admin', 'admin', 'Admin'),
('neeru', 'neeru', 'General'),
('manu', '12345', 'Admin'),
('preet', 'preet', 'General');

CREATE TABLE IF NOT EXISTS `dyn_menu` (
  `id` int(11) NOT NULL auto_increment,
  `label` varchar(50) NOT NULL default '',
  `link_url` varchar(100) NOT NULL default '#',
  `parent_id` int(11) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `dyn_menu`
--

INSERT INTO `dyn_menu` (`id`, `label`, `link_url`, `parent_id`) VALUES
(1, 'Inicio', 'index.php#section-1', 0),
(2, 'Acerca de', 'index.php#section-2', 0),
(3, 'Galería', 'index.php#section-3', 0),
(4, 'Categorías', 'category.php', 0),
(5, 'Anuncios', 'index.php#section-4', 0),
(6, 'Contáctanos', 'index.php#section-5', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
