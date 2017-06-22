-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.16-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping database structure for rodasnet_db_dev
DROP DATABASE IF EXISTS `rodasnet_db_dev`;
CREATE DATABASE IF NOT EXISTS `rodasnet_db_dev` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `rodasnet_db_dev`;


-- Dumping structure for table rodasnet_db_dev.assets
DROP TABLE IF EXISTS `assets`;
CREATE TABLE IF NOT EXISTS `assets` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` text,
  `slug` text,
  `content` text,
  `type` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `description` text,
  `parent_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `deleted_at` int(11) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=68 DEFAULT CHARSET=utf8;

-- Dumping data for table rodasnet_db_dev.assets: ~63 rows (approximately)
DELETE FROM `assets`;
/*!40000 ALTER TABLE `assets` DISABLE KEYS */;
INSERT INTO `assets` (`id`, `name`, `slug`, `content`, `type`, `url`, `description`, `parent_id`, `category_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
	(1, 'Zoe Sense Gestures', 'featured-image', NULL, 'image', '/campaign/zoe-sense/featured-image-001.png', '', 1, 1, NULL, 1460355964, NULL),
	(2, 'Zoe Sense Logo', 'zoe-sense-logo', NULL, 'logo', '/campaign/zoe-sense/logo.png', 'Using a combination of Photoshop and Illustrator to created a logo that insulates the Zoe Sense brand.', 1, NULL, NULL, 1460565323, NULL),
	(3, 'Cherry Blossom Festival Logo', 'cherry-blossom-festival-logo', NULL, 'logo', '/campaign/cherry-blossom-festival/logo.png', 'Created in Adobe Illustrator, simple graphics paired  with font face Palatino Linotype.', 2, NULL, NULL, 1460571353, NULL),
	(4, 'Marine Museum Logo', 'marine-museum-logo', NULL, NULL, '/campaign/marine-museum/logo.png', 'Redesign of Marine Museum logo to embody the Eagle Globe and Anchor in a modern take, as well as reflect the architecture of the museum’s building.', 3, NULL, NULL, 1460572583, NULL),
	(5, 'Mandala', 'mandala', NULL, NULL, '/print/mandala/mandala.png', 'Color fundamental project to study color, contrast, and focal point. ', 4, NULL, NULL, 1460573118, NULL),
	(6, 'Breville Blender', 'breville-blender', NULL, NULL, '/print/breville-blender/poster.png', 'Recreated an image of a blender using the mesh tool in Adobe Illustrator from an original photograph.', 5, NULL, NULL, 1460573973, NULL),
	(7, 'Modern Ninjacon', 'modern-ninjacon', NULL, NULL, '/print/modern-ninjacon/logo.png', 'Created a poster for a fictitious convention, Modern Ninjacon, using Adobe\'s Illlustrator and Photoshop.', 6, NULL, NULL, 1460574956, NULL),
	(8, 'Earth 2075', 'earth-2075', NULL, NULL, '/print/earth-2075/poster.png', 'Using biotechnology and some luck, in the year 2075, today resources are no longer scarce. And thanks to breakthroughs in genetics of our time, people can theoretically live forever. However, we don’t have enough space on our planet house everyone who doesn’t wish to die. There are projects on the way to colonize new solar systems, to form new worlds.\r\n', 7, NULL, NULL, 1460684858, NULL),
	(9, 'Personal Art Book', 'personal-art-book', NULL, NULL, '/print/personal-book/thumbnail.png', 'Learning to see the world from the eyes of an artist.', 8, NULL, NULL, 1460691490, NULL),
	(10, 'Aegis Logo', 'aegis-logo', NULL, NULL, '/interactive/aegis/logo.png', 'Aegis Life Saving Cutlery Aegis is a set of survival kitchen ware with the ability to test for strains of bacteria, toxins and allergens, and amass  profile of your meal’s nutritional makeup. Aegis cutlery comes with sensors to determine the chemical and biological signature of every meal you prepare. You can avoid risk associated with unknowingly handling contaminated food. As you prepare your favorite ingredients, raw data will be transmitted from Aegis cutlery to your phone app via Bluetooth or USB connection to be processed and return lifesaving results. Aegis cutlery comes in five forms: knives, tongs, forks, cutting board, and bowls.', 9, NULL, NULL, 1460696112, NULL),
	(11, 'Academy of Sciences', 'academy-of-sciences', NULL, NULL, '/interactive/academy-of-science/thumbnail.png', 'Interactive iPad App that guides your through virtual Academy of Sciences exhibits.', 10, NULL, NULL, 1460697033, NULL),
	(12, 'Wall Street Journal Market Data', 'wall-street-journal-market-data', NULL, NULL, '/interactive/wallstreet-journal/market-data.png', 'Quickly find latest stock market value in real time.', 11, NULL, NULL, 1460698637, NULL),
	(13, 'Mad Max Fury Road Title Sequence', 'mad-max-fury-road-title-sequence', NULL, NULL, '/motion/mad-max-fury-road-title-sequence/thumbnail.png', '', 13, NULL, NULL, 1460699610, NULL),
	(14, 'Shapes to Music', 'shapes-to-music', NULL, NULL, '/motion/shapes-to-music/thumbnail.png', '', 12, NULL, NULL, 1460700158, NULL),
	(15, 'Life of Cities', 'life-of-cities', NULL, NULL, '/imaging/life-of-cities/thumbnail.png', 'After humans leave and nature takes over.', 14, NULL, NULL, 1460701268, NULL),
	(16, 'Commuting Zoe Sense Advertisement ', 'commuting-zoe-sense-advertisement', NULL, 'staging', '/campaign/zoe-sense/staging-advertisement.png', 'Wearable technology products and services aiming to keep your life in balance. Stay cool in the summer and warm in the winter using automatic forecast to keep you comfortable in any condition.', 1, NULL, NULL, 1460874186, NULL),
	(17, 'User Control Labels', 'user-control-labels', NULL, NULL, '/campaign/zoe-sense/data/screen-label.png', 'Zoe Sense packs five features into its compact user interface located on the jacket\'s wrist.', 1, NULL, NULL, 1460930350, NULL),
	(18, 'Ambient Information', 'ambient-information', NULL, NULL, '/campaign/zoe-sense/data/ambient.png', 'The ambient information display lets you know at a glance what the temperature and moisture is in the immediate area around you, and keeps a visual representation climate history.', 1, NULL, NULL, 1460931369, NULL),
	(19, 'Core Body Temperature', 'core-body-temperature', NULL, NULL, '/campaign/zoe-sense/data/core-body.png', 'Adjust your comfort level anywhere you go with Zoe Sense wearable technology. Monitor your core body temperature, so you know what makes you hot and what makes you cool. ', 1, NULL, NULL, 1460931963, NULL),
	(20, 'Current Temperature', 'current-temperature', NULL, NULL, '/campaign/zoe-sense/data/current-temperature.png', 'At a glance get your body temperature, humidity, and ambient temperature.', 1, NULL, NULL, 1460932712, NULL),
	(21, 'Forecast', 'forecast', NULL, NULL, '/campaign/zoe-sense/data/forecast.png', 'Choose your location or auto-detect for the most accurate five day hi and low temperature forecast.', 1, NULL, NULL, 1460933045, NULL),
	(22, 'Heart Rate', 'heart-rate', NULL, NULL, '/campaign/zoe-sense/data/heart-rate.png', 'Keep track of your heart rate on the go and at a stand still throughout the day.', 1, NULL, NULL, 1460934273, NULL),
	(23, 'Stay Cool Everywhere', 'stay-cool-everywhere', NULL, NULL, '/campaign/zoe-sense/staging-user-control.png', '', 1, NULL, NULL, 1460937679, NULL),
	(24, 'Alternate Advertisment', 'alternate-advertisment', NULL, 'alternative', '/campaign/zoe-sense/staging-advertisement-alternate.png', '', 1, NULL, NULL, 1460938549, NULL),
	(25, 'Getting The Word Out', 'getting-the-word-out', NULL, NULL, '/campaign/cherry-blossom-festival/staging-muni-advertisement.png', 'Poster design staging seen on a San Francisco MUMI bus stop on an easy afternoon. ', 2, NULL, NULL, 1460965638, NULL),
	(26, 'Alternative Festival Logos', 'alternative-festival-logo', NULL, 'alternative', '/campaign/cherry-blossom-festival/logo-alternatives.png', 'The main inspiration for this logo design came from the simple geometric shapes of flower petals. Cherry Blossoms are tiny, but when they bloom in April, they bring with them beauty by the numbers.  ', 2, NULL, NULL, 1460966541, NULL),
	(27, 'Brand Identity', 'brand-identity', NULL, NULL, '/campaign/marine-museum/packaging-blue-box1.png', 'Take memories home from the National Marine Museum gift store.', 3, NULL, NULL, 1460968186, NULL),
	(28, 'Interactive Tour App', 'interactive-tour-app', NULL, NULL, '/campaign/marine-museum/marine-museum-ipad-app_DetailFullScreen.png', 'Take a tour through the halls of the National Marine Museum with your iPad app to experience personal guided tours.', 3, NULL, NULL, 1460968628, NULL),
	(29, 'Stationary', 'marine-museum-stationary', NULL, NULL, '/campaign/marine-museum/marine-museum-stationary.png', 'Standard mission essential letterhead, business envelope, and business cards. ', 3, NULL, NULL, 1460968917, NULL),
	(30, 'Marine Corps. Battles Timeline', 'marine-corps-battles-timeline', NULL, NULL, '/campaign/marine-museum/marine-museum-timeline.png', 'Historical infographic detailing the rich traditions of the U.S. Marine Corps established in 1775.', 3, NULL, NULL, 1460969212, NULL),
	(31, 'Website Home Page', 'website-home-page', NULL, NULL, '/campaign/marine-museum/marine-museum-home.png', 'Weekly content, stories about heroes past and present.', 3, NULL, NULL, 1460969370, NULL),
	(32, 'At The Coffee Shop', 'at-the-coffee-shop', NULL, NULL, '/print/mandala/staging-mandala.png', 'On display at a local shop.', 4, NULL, NULL, 1460969452, NULL),
	(33, 'Original Mesh Image', 'original-mesh-image', NULL, NULL, '/print/breville-blender/blender-image.png', 'Original image that was converted into a mesh via Adobe Illustrator.', 5, NULL, NULL, 1460970033, NULL),
	(34, 'Event Poster', 'event-poster', NULL, NULL, '/print/modern-ninjacon/event-poster.png', '', 6, NULL, NULL, 1460970210, NULL),
	(35, 'Shape', 'shape', NULL, NULL, '/print/personal-book/spread_0.png', '', 8, NULL, NULL, 1460970303, NULL),
	(36, 'Philosophy', 'philosophy', NULL, NULL, '/print/personal-book/spread_1.png', '', 8, NULL, NULL, 1460970332, NULL),
	(37, 'Typography', 'typography', NULL, NULL, '/print/personal-book/spread_2.png', '', 8, NULL, NULL, 1460970359, NULL),
	(38, 'Icon Set', 'icon-set', NULL, NULL, '/interactive/aegis/icon-set.png', 'Icons for model, personality, alerts, profile, calendar, connected, disconnected, battery full, battery status, battery low, volume, notification, goodie, danger, and poison.', 9, NULL, NULL, 1460970569, NULL),
	(39, 'Infromation Architechture', 'infromation-architechture', NULL, NULL, '/interactive/aegis/Portfolio_Rodas40.png', 'Simple interface is designed to flow in a linear order.', 9, NULL, NULL, 1460970940, NULL),
	(40, 'Aegis Profile', 'aegis-profile', NULL, NULL, '/interactive/aegis/Portfolio_Rodas41.png', 'As you prepare food, calculate daily percentage of carbohydrate, protein, fat, and fiber recommended for your personal diet.', 9, NULL, NULL, 1460971218, NULL),
	(41, 'Aegis Alerts', 'aegis-alerts', NULL, NULL, '/interactive/aegis/Portfolio_Rodas42.png', 'Aegis protects you from allergens and dangers in food while your prepare meals.', 9, NULL, NULL, 1460971513, NULL),
	(42, 'Danger Detail', 'danger-detail', NULL, NULL, '/interactive/aegis/Portfolio_Rodas43.png', '', 9, NULL, NULL, 1460971557, NULL),
	(43, 'Aegis Cutlery Model', 'aegis-cutlery-model', NULL, NULL, '/interactive/aegis/Portfolio_Rodas44.png', 'Check status and pair new hardware with your Aegis line.', 9, NULL, NULL, 1460971625, NULL),
	(44, 'Sketches', 'sketches', NULL, NULL, '/interactive/aegis/Portfolio_Rodas45.png', '', 9, NULL, NULL, 1460971669, NULL),
	(46, 'Discover New Life', 'discover-new-life', NULL, NULL, '/interactive/academy-of-science/academy-of-science2.jpg', 'Photo gallery with full featured article.', 10, NULL, NULL, 1460971973, NULL),
	(50, 'Home Page', 'home-page', NULL, NULL, '/interactive/wallstreet-journal/prototype-homepage.png', 'Read the day\'s latest headlines from Wall Street and around the World. ', 11, NULL, NULL, 1460972475, NULL),
	(51, 'Navigation Menu', 'navigation-menu', NULL, NULL, '/interactive/wallstreet-journal/prototype-navigation-flyout.png', 'Display top categories and quickly scan headlines of interest from each section.', 11, NULL, NULL, 1460972649, NULL),
	(52, 'Article Page', 'article-page', NULL, NULL, '/interactive/wallstreet-journal/prototype-article-page.png', '', 11, NULL, NULL, 1460972703, NULL),
	(53, 'Article Media', 'article-media', NULL, NULL, '/interactive/wallstreet-journal/prototype-article-page-media.png', '', 11, NULL, NULL, 1460972734, NULL),
	(54, 'InVision App Prototype', 'academy-of-science-invisionapp', NULL, 'invision', '//invis.io/NX75YF9Q3', 'iPad app tour', 10, NULL, NULL, 1460971901, NULL),
	(55, 'Shapes to Music', 'shapes-to-music-on-vemio', NULL, 'vimeo', 'https://vimeo.com/159751613', '', 12, NULL, NULL, 1462169270, NULL),
	(56, 'Mad Max Fury Road Vimeo', 'mad-max-fury-road-vimeo', NULL, 'vimeo', 'https://vimeo.com/159326412', '', 13, NULL, NULL, 1462170112, NULL),
	(57, 'Blue Smirking', 'blue-smirking', NULL, 'image', '/photography/experiment/blue-smirking.png', 'Blue doing what he does best.', 15, NULL, NULL, 1480152029, NULL),
	(58, 'Chinese Chicken', 'chinese-chicken', NULL, 'image', '/photography/experiment/chinese-chickens.png', 'Traditional roasted chicken from Cantonese parts of China.', 15, NULL, NULL, 1480196327, NULL),
	(59, 'Color Rose Stems', 'colorful-rose-stems', NULL, 'image', '/photography/experiment/colorful-rose-stems.png', 'Using Photoshop to add imagination to these rose stems.', 15, NULL, NULL, 1480196327, NULL),
	(60, 'Ingleside Golden Hour', 'ingleside-golden-hour', NULL, 'image', '/photography/experiment/ingleside-golden-hour.png', 'On any given day in San Francisco\'s southern valley, the clouds, the fog, and sun rays create interesting looks in the horizon.', 15, NULL, NULL, 1480196327, NULL),
	(61, 'Rain on Deck', 'rain-on-deck', NULL, 'image', '/photography/experiment/rain.png', 'Rainy ', 15, NULL, NULL, 1480152029, NULL),
	(62, 'Blue Smirking', 'blue-smirking', NULL, 'image', '/photography/blue-smirking/blue-smirking.png', 'Blue doing what he does best.', 16, NULL, NULL, 1480152029, NULL),
	(63, 'Blue Chewing a Bone ', 'blue-chewing-a-bone', NULL, 'image', '/photography/blue-smirking/blue-chewing-a-bone.png', 'Blue chewing on his favorite bone.', 16, NULL, NULL, 1480152029, NULL),
	(64, 'Blue Smiling', 'blue-smiling', NULL, 'image', '/photography/blue-smirking/blue-smiling.png', 'Blue smiling at the world.', 16, NULL, NULL, 1480152029, NULL),
	(65, 'St Emydius Church', 'inlgeside-golden-hour', NULL, 'image', '/photography/ingleside-golden-hour/st-emydius-church.png', 'Ingleside is the southern most neighborhood in San Francisco.', 17, NULL, NULL, 1480152029, NULL),
	(66, 'Commuting Zoe Sense Advertisement ', 'bart-zoe-sense-advertisement', NULL, 'staging', '/campaign/zoe-sense/bart-station-advertisement.png', 'Wearable technology products and services aiming to keep your life in balance. Stay cool in the summer and warm in the winter using automatic forecast to keep you comfortable in any condition.', 1, NULL, NULL, 1460874186, NULL),
	(67, 'Zoe Sense Logo', 'zoe-sense-logo', NULL, 'description-image', '/campaign/zoe-sense/description-image.png', 'Using a combination of Photoshop and Illustrator to created a logo that insulates the Zoe Sense brand.', 1, NULL, NULL, 1460565323, NULL);
/*!40000 ALTER TABLE `assets` ENABLE KEYS */;


-- Dumping structure for table rodasnet_db_dev.category
DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `slug` text,
  `url` text,
  `description` text,
  `item_count` int(11) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `deleted_at` int(11) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- Dumping data for table rodasnet_db_dev.category: ~6 rows (approximately)
DELETE FROM `category`;
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` (`id`, `name`, `slug`, `url`, `description`, `item_count`, `parent_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
	(1, 'Integrated Campaign', 'campaign', '/portfolio/category/campaign', NULL, NULL, NULL, NULL, 1460173963, NULL),
	(2, 'Print Design', 'print', '/portfolio/category/print', NULL, NULL, NULL, NULL, 1460174613, NULL),
	(3, 'Web + Interactive', 'interactive', '/portfolio/category/interactive', NULL, NULL, NULL, NULL, 1460175002, NULL),
	(4, 'Digital Imaging', 'imaging', '/portfolio/category/imaging', NULL, NULL, NULL, NULL, 1460175070, NULL),
	(5, 'Motion Graphics', 'motion', '/portfolio/category/motion', NULL, NULL, NULL, NULL, 1460175213, NULL),
	(6, 'Fine Art', 'art', '/portfolio/category/art', NULL, NULL, NULL, NULL, 1460175281, NULL);
/*!40000 ALTER TABLE `category` ENABLE KEYS */;


-- Dumping structure for table rodasnet_db_dev.contacts
DROP TABLE IF EXISTS `contacts`;
CREATE TABLE IF NOT EXISTS `contacts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `fullname` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `email` varchar(75) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `preference` enum('phone','email','none') NOT NULL,
  `available` varchar(255) NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `deleted_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- Dumping data for table rodasnet_db_dev.contacts: ~8 rows (approximately)
DELETE FROM `contacts`;
/*!40000 ALTER TABLE `contacts` DISABLE KEYS */;
INSERT INTO `contacts` (`id`, `fullname`, `message`, `email`, `phone`, `preference`, `available`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, 'Daisy Fuentes', 'not now\r\n', '300marines@gmail.com', '8239239238', 'email', 'Now', 1461978415, 1461978415, NULL),
	(2, 'Daniel Roda', 'Yo Yooo ', '300marines@gmail.com', '7072079839', 'phone', '9 to 5 bithches', 1471208089, 1471208088, NULL),
	(3, 'Daniel Roda', 'sfdsdfsf', '300marines@gmail.com', '7072079839', 'email', 'sfsfsf', 1471209815, 1471209815, NULL),
	(4, 'Daniel Roda', 'sdffsf ', '300marines@gmail.com', '7072079839', 'email', 'sfsfsf', 1471209836, 1471209836, NULL),
	(5, 'Daniel Roda', 'iu iunini ijnn ', 'daniel.rodas1@yahoo.com', '7072079839', 'email', '9 to 5 bithches', 1471209877, 1471209877, NULL),
	(6, 'Daniel Roda', 'iuiuhuhui iiui', '300marines@gmail.com', '7072079839', 'phone', '', 1471209917, 1471209917, NULL),
	(7, 'Daniel Roda', 'Helllo motttooo', '300marines@gmail.com', '7072079839', 'none', '', 1473311115, 1473311115, NULL),
	(8, 'Daniel Roda', 'Hel o haha', '300marines@gmail.com', '7072079839', 'none', '', 1479984044, 1479984044, NULL);
/*!40000 ALTER TABLE `contacts` ENABLE KEYS */;


-- Dumping structure for table rodasnet_db_dev.exhibitions
DROP TABLE IF EXISTS `exhibitions`;
CREATE TABLE IF NOT EXISTS `exhibitions` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `slug` text,
  `url` text,
  `category_id` int(11) DEFAULT NULL,
  `description` text,
  `parent_id` int(11) DEFAULT NULL,
  `deleted_at` int(11) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- Dumping data for table rodasnet_db_dev.exhibitions: ~7 rows (approximately)
DELETE FROM `exhibitions`;
/*!40000 ALTER TABLE `exhibitions` DISABLE KEYS */;
INSERT INTO `exhibitions` (`id`, `name`, `slug`, `url`, `category_id`, `description`, `parent_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
	(1, 'Integrated Campaign', 'exhibition-campaign', NULL, NULL, NULL, NULL, NULL, 1460341978, NULL),
	(2, 'Print Design', 'exhibition-print', NULL, NULL, NULL, NULL, NULL, 1460342186, NULL),
	(3, 'Web + Interactive', 'exhibition-interactive', NULL, NULL, NULL, NULL, NULL, 1460342234, NULL),
	(4, 'Digital Imaging', 'exhibition-imaging', NULL, NULL, NULL, NULL, NULL, 1460342269, NULL),
	(5, 'Motion Graphics', 'exhibition-motion', NULL, NULL, NULL, NULL, NULL, 1460342299, NULL),
	(6, 'Fine Art', 'exhibition-fine-art', NULL, NULL, NULL, NULL, NULL, 1460342348, NULL),
	(7, 'Digital Photography', 'exhibition-photography', NULL, NULL, NULL, NULL, NULL, 1480034148, NULL);
/*!40000 ALTER TABLE `exhibitions` ENABLE KEYS */;


-- Dumping structure for table rodasnet_db_dev.exhibits
DROP TABLE IF EXISTS `exhibits`;
CREATE TABLE IF NOT EXISTS `exhibits` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `slug` text,
  `url` text,
  `category_id` int(11) DEFAULT NULL,
  `description` text,
  `parent_id` int(11) DEFAULT NULL,
  `deleted_at` int(11) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

-- Dumping data for table rodasnet_db_dev.exhibits: ~17 rows (approximately)
DELETE FROM `exhibits`;
/*!40000 ALTER TABLE `exhibits` DISABLE KEYS */;
INSERT INTO `exhibits` (`id`, `name`, `slug`, `url`, `category_id`, `description`, `parent_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
	(1, 'Zoe Sense', 'zoe-sense', '/campaign/zoe-sense/logo.png', NULL, 'Design wearable technology products and services aiming to keep your life in balance. Stay cool in the summer and warm in the winter; automatic forecast keep you comfortable in any condition. ', 1, NULL, 1460343587, NULL),
	(2, 'Cherry Blossom Festival', 'cherry-blossom-festival', '/campaign/cherry-blossom-festival/logo.png', NULL, 'Each year the Northern California Cherry Blossom Festival celebrates one of California’s most prominent celebrations of Asian traditions in a grandiose fashion. Each year, over 200,000 people attend to experience the Japanese culture and the diversity of the Japanese American Community.', 1, NULL, 1460344082, NULL),
	(3, 'National Museum of the Marine Corps', 'marine-museum', '/campaign/marine-museum/logo.png', NULL, 'The National Museum of the Marine Corps is a lasting tribute to U.S. Marines--past, present, and future. Situated on a 135-acre site adjacent to Marine Corps Base Quantico, Virginia, and under the command of Marine Corps University, the Museum\'s soaring design evokes the image of the flag-raisers of Iwo Jima and beckons visitors to this 120,000-square-foot structure. World-class interactive exhibits using the most innovative technology surround visitors with irreplaceable artifacts and immerse them in the sights and sounds of Marines in action.', 1, NULL, 1460344131, NULL),
	(4, 'Mandala', 'mandala', '/print/mandala/mandala.png', 0, 'Color Fundamental project to study color, contrast and focal point. ', 2, NULL, 1460345208, NULL),
	(5, 'Breville Blender', 'breville-blender', '/print/breville-blender/poster.png', 0, 'Used mesh tool in Adobe Illustrator in Design Technology class to recreate an image from a photograph taken.', 2, NULL, 1460345792, NULL),
	(6, 'Modern Ninjacon', 'modern-ninjacon', '/print/modern-ninjacon/event-poster.png', 0, 'Created a poster for a fictitious convension Modern Ninjacon using Adobe\'s Illlustrator and Photoshop', 2, NULL, 1460345978, NULL),
	(7, 'Earth 2075', 'earth-2075', '/print/earth-2075/poster-thumbnail.png', NULL, 'After the Nuclear War of 2050 that destroyed the majority Old Earth, most people believed that it would take thousands of years to restore modern life as we knew it. Thankfully, it only took 108 years to rediscover transmission control protocol Internet protocol (TCP/IP), the basis of our social and political world and 172 years more to break the mysteries of genetics.', 2, NULL, 1460346124, NULL),
	(8, 'Personal Book', 'personal-book', '/print/personal-book/thumbnail.png', NULL, 'The more you practice the better you get at life, of course that all depends on individual experiences. For most of us, life is challenging and filled with risk and sacrifices. If at first you don’t succeed, find out what you are doing wrong and try again. Or find out what you are good at , then do that instead.', 2, NULL, 1460346161, NULL),
	(9, 'Aegis', 'aegis', '/interactive/aegis/logo.png', NULL, 'Aegis Life Saving Cutlery Aegis is a set of survival kitchen ware with the ability to test for strains of bacteria, toxins and allergens, and amass  profile of your meal’s nutritional makeup. Aegis cutlery comes with sensors to determine the chemical and biological signature of every meal you prepare. You can avoid risk associated with unknowingly handling contaminated food. As you prepare your favorite ingredients, raw data will be transmitted from Aegis cutlery to your phone app via Bluetooth or USB connection to be processed and return lifesaving results. Aegis cutlery comes in five forms: knives, tongs, forks, cutting board, and bowls.', 3, NULL, 1460346440, NULL),
	(10, 'Academy of Sciences', 'academy-of-sciences', '/interactive/academy-of-science/thumbnail.png', NULL, 'Interactive iPad App that guides your through virtual Academy of Sciences exhibits.', 3, NULL, 1460346886, NULL),
	(11, 'Wall Street Journal', 'wall-street-journal', '/interactive/wallstreet-journal/market-data.png', NULL, 'Wall Street Journal reports news to the United States of America and the world on subjects like but not limited to economy, tech, markets, opinion, life & culture among many more. It provides video, digital content and daily delivered newspapers.', 3, NULL, 1460347049, NULL),
	(12, 'Shapes to Music', 'shapes-to-music', '/motion/shapes-to-music/thumbnail.png', NULL, 'Fun video studying principles of animation and connecting visuals with music using simple shapes.', 5, NULL, 1460347222, NULL),
	(13, 'Mad Max Fury Road Title Sequence', 'mad-max-fury-road-title-sequence', '/motion/mad-max-fury-road-title-sequence/thumbnail.png', NULL, 'Re imagination of Mad Max Fury Road Title Sequence.', 5, NULL, 1460347284, NULL),
	(14, 'Life of Cities', 'life-of-cities', '/imaging/life-of-cities/thumbnail.png', NULL, 'After humans leave and nature takes over.', 4, NULL, 1460347342, NULL),
	(15, 'Digital Experiment Blue', 'digital-experiment', '/photography/experiment/ball-and-tree.png', NULL, 'Some random pictures', 7, NULL, 1480034583, NULL),
	(16, 'The Amazing Blue ', 'the-amazing-blue', '/photography/blue-smirking/blue-smirking.png', NULL, 'Give your blue a bone', 7, NULL, 1480034583, NULL),
	(17, 'Ingleside Golden Hour', 'inlgeside-golden-hour', '/photography/ingleside-golden-hour/st-emydius-church.png', NULL, 'Ingleside is the southern most neighborhood in San Francisco.', 7, NULL, 1480034583, NULL);
/*!40000 ALTER TABLE `exhibits` ENABLE KEYS */;


-- Dumping structure for table rodasnet_db_dev.feedbacks
DROP TABLE IF EXISTS `feedbacks`;
CREATE TABLE IF NOT EXISTS `feedbacks` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `feedback` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Dumping data for table rodasnet_db_dev.feedbacks: ~1 rows (approximately)
DELETE FROM `feedbacks`;
/*!40000 ALTER TABLE `feedbacks` DISABLE KEYS */;
INSERT INTO `feedbacks` (`id`, `feedback`, `user_id`, `created_at`, `updated_at`) VALUES
	(1, 'hello first feedback is a test', 1, 1479984548, 1479984548);
/*!40000 ALTER TABLE `feedbacks` ENABLE KEYS */;


-- Dumping structure for table rodasnet_db_dev.migration
DROP TABLE IF EXISTS `migration`;
CREATE TABLE IF NOT EXISTS `migration` (
  `type` varchar(25) NOT NULL,
  `name` varchar(50) NOT NULL,
  `migration` varchar(100) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table rodasnet_db_dev.migration: ~23 rows (approximately)
DELETE FROM `migration`;
/*!40000 ALTER TABLE `migration` DISABLE KEYS */;
INSERT INTO `migration` (`type`, `name`, `migration`) VALUES
	('package', 'auth', '001_auth_create_usertables'),
	('package', 'auth', '002_auth_create_grouptables'),
	('package', 'auth', '003_auth_create_roletables'),
	('package', 'auth', '004_auth_create_permissiontables'),
	('package', 'auth', '005_auth_create_authdefaults'),
	('package', 'auth', '006_auth_add_authactions'),
	('package', 'auth', '007_auth_add_permissionsfilter'),
	('package', 'auth', '008_auth_create_providers'),
	('package', 'auth', '009_auth_create_oauth2tables'),
	('package', 'auth', '010_auth_fix_jointables'),
	('app', 'default', '001_create_users'),
	('app', 'default', '002_create_balances'),
	('app', 'default', '003_create_feedbacks'),
	('app', 'default', '004_create_assets'),
	('app', 'default', '005_create_galleries'),
	('module', 'blog', '013_create_category'),
	('module', 'blog', '014_create_post'),
	('module', 'blog', '015_create_comment'),
	('package', 'category', '001_create_category'),
	('package', 'contacts', '001_create_contacts'),
	('package', 'portfolio', '001_create_portfolio'),
	('package', 'portfolio', '002_create_asset'),
	('package', 'portfolio', '003_create_exhibit');
/*!40000 ALTER TABLE `migration` ENABLE KEYS */;


-- Dumping structure for table rodasnet_db_dev.users
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `group_id` int(11) NOT NULL DEFAULT '1',
  `email` varchar(255) NOT NULL,
  `last_login` varchar(25) NOT NULL,
  `previous_login` varchar(25) NOT NULL DEFAULT '0',
  `login_hash` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `created_at` int(11) NOT NULL DEFAULT '0',
  `updated_at` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`,`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Dumping data for table rodasnet_db_dev.users: ~1 rows (approximately)
DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `username`, `password`, `group_id`, `email`, `last_login`, `previous_login`, `login_hash`, `user_id`, `created_at`, `updated_at`) VALUES
	(1, 'admin', '9yVdomYXa/nkagsfsfasffasfsafasfasfasf5Md/gGI/UlZjc=', 0, 'nonono@esffsdfle.org', '0', '0', '', 0, 1460106115, 0);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;


-- Dumping structure for table rodasnet_db_dev.users_clients
DROP TABLE IF EXISTS `users_clients`;
CREATE TABLE IF NOT EXISTS `users_clients` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL DEFAULT '',
  `client_id` varchar(32) NOT NULL DEFAULT '',
  `client_secret` varchar(32) NOT NULL DEFAULT '',
  `redirect_uri` varchar(255) NOT NULL DEFAULT '',
  `auto_approve` tinyint(1) NOT NULL DEFAULT '0',
  `autonomous` tinyint(1) NOT NULL DEFAULT '0',
  `status` enum('development','pending','approved','rejected') NOT NULL DEFAULT 'development',
  `suspended` tinyint(1) NOT NULL DEFAULT '0',
  `notes` tinytext NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `client_id` (`client_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table rodasnet_db_dev.users_clients: ~0 rows (approximately)
DELETE FROM `users_clients`;
/*!40000 ALTER TABLE `users_clients` DISABLE KEYS */;
/*!40000 ALTER TABLE `users_clients` ENABLE KEYS */;


-- Dumping structure for table rodasnet_db_dev.users_groups
DROP TABLE IF EXISTS `users_groups`;
CREATE TABLE IF NOT EXISTS `users_groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `created_at` int(11) NOT NULL DEFAULT '0',
  `updated_at` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- Dumping data for table rodasnet_db_dev.users_groups: ~6 rows (approximately)
DELETE FROM `users_groups`;
/*!40000 ALTER TABLE `users_groups` DISABLE KEYS */;
INSERT INTO `users_groups` (`id`, `name`, `user_id`, `created_at`, `updated_at`) VALUES
	(1, 'Banned', 0, 0, 0),
	(2, 'Guests', 0, 0, 0),
	(3, 'Users', 0, 0, 0),
	(4, 'Moderators', 0, 0, 0),
	(5, 'Administrators', 0, 0, 0),
	(6, 'Super Admins', 0, 0, 0);
/*!40000 ALTER TABLE `users_groups` ENABLE KEYS */;


-- Dumping structure for table rodasnet_db_dev.users_group_permissions
DROP TABLE IF EXISTS `users_group_permissions`;
CREATE TABLE IF NOT EXISTS `users_group_permissions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `group_id` int(11) NOT NULL,
  `perms_id` int(11) NOT NULL,
  `actions` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table rodasnet_db_dev.users_group_permissions: ~0 rows (approximately)
DELETE FROM `users_group_permissions`;
/*!40000 ALTER TABLE `users_group_permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `users_group_permissions` ENABLE KEYS */;


-- Dumping structure for table rodasnet_db_dev.users_group_roles
DROP TABLE IF EXISTS `users_group_roles`;
CREATE TABLE IF NOT EXISTS `users_group_roles` (
  `group_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  PRIMARY KEY (`group_id`,`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table rodasnet_db_dev.users_group_roles: ~9 rows (approximately)
DELETE FROM `users_group_roles`;
/*!40000 ALTER TABLE `users_group_roles` DISABLE KEYS */;
INSERT INTO `users_group_roles` (`group_id`, `role_id`) VALUES
	(1, 1),
	(2, 2),
	(3, 3),
	(4, 3),
	(4, 4),
	(5, 3),
	(5, 4),
	(5, 5),
	(6, 6);
/*!40000 ALTER TABLE `users_group_roles` ENABLE KEYS */;


-- Dumping structure for table rodasnet_db_dev.users_metadata
DROP TABLE IF EXISTS `users_metadata`;
CREATE TABLE IF NOT EXISTS `users_metadata` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `key` varchar(20) NOT NULL,
  `value` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `created_at` int(11) NOT NULL DEFAULT '0',
  `updated_at` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Dumping data for table rodasnet_db_dev.users_metadata: ~2 rows (approximately)
DELETE FROM `users_metadata`;
/*!40000 ALTER TABLE `users_metadata` DISABLE KEYS */;
INSERT INTO `users_metadata` (`id`, `parent_id`, `key`, `value`, `user_id`, `created_at`, `updated_at`) VALUES
	(1, 1, 'fullname', 'System administrator', 0, 1460106115, 0),
	(2, 0, 'fullname', 'Guest', 0, 0, 0);
/*!40000 ALTER TABLE `users_metadata` ENABLE KEYS */;


-- Dumping structure for table rodasnet_db_dev.users_permissions
DROP TABLE IF EXISTS `users_permissions`;
CREATE TABLE IF NOT EXISTS `users_permissions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `area` varchar(25) NOT NULL,
  `permission` varchar(25) NOT NULL,
  `description` varchar(255) NOT NULL,
  `actions` text,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `created_at` int(11) NOT NULL DEFAULT '0',
  `updated_at` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `permission` (`area`,`permission`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table rodasnet_db_dev.users_permissions: ~0 rows (approximately)
DELETE FROM `users_permissions`;
/*!40000 ALTER TABLE `users_permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `users_permissions` ENABLE KEYS */;


-- Dumping structure for table rodasnet_db_dev.users_providers
DROP TABLE IF EXISTS `users_providers`;
CREATE TABLE IF NOT EXISTS `users_providers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `provider` varchar(50) NOT NULL,
  `uid` varchar(255) NOT NULL,
  `secret` varchar(255) DEFAULT NULL,
  `access_token` varchar(255) DEFAULT NULL,
  `expires` int(12) DEFAULT '0',
  `refresh_token` varchar(255) DEFAULT NULL,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `created_at` int(11) NOT NULL DEFAULT '0',
  `updated_at` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `parent_id` (`parent_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table rodasnet_db_dev.users_providers: ~0 rows (approximately)
DELETE FROM `users_providers`;
/*!40000 ALTER TABLE `users_providers` DISABLE KEYS */;
/*!40000 ALTER TABLE `users_providers` ENABLE KEYS */;


-- Dumping structure for table rodasnet_db_dev.users_roles
DROP TABLE IF EXISTS `users_roles`;
CREATE TABLE IF NOT EXISTS `users_roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `filter` enum('','A','D','R') NOT NULL DEFAULT '',
  `user_id` int(11) NOT NULL DEFAULT '0',
  `created_at` int(11) NOT NULL DEFAULT '0',
  `updated_at` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- Dumping data for table rodasnet_db_dev.users_roles: ~6 rows (approximately)
DELETE FROM `users_roles`;
/*!40000 ALTER TABLE `users_roles` DISABLE KEYS */;
INSERT INTO `users_roles` (`id`, `name`, `filter`, `user_id`, `created_at`, `updated_at`) VALUES
	(1, 'banned', 'D', 0, 0, 0),
	(2, 'public', '', 0, 0, 0),
	(3, 'user', '', 0, 0, 0),
	(4, 'moderator', '', 0, 0, 0),
	(5, 'administrator', '', 0, 0, 0),
	(6, 'superadmin', 'A', 0, 0, 0);
/*!40000 ALTER TABLE `users_roles` ENABLE KEYS */;


-- Dumping structure for table rodasnet_db_dev.users_role_permissions
DROP TABLE IF EXISTS `users_role_permissions`;
CREATE TABLE IF NOT EXISTS `users_role_permissions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role_id` int(11) NOT NULL,
  `perms_id` int(11) NOT NULL,
  `actions` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table rodasnet_db_dev.users_role_permissions: ~0 rows (approximately)
DELETE FROM `users_role_permissions`;
/*!40000 ALTER TABLE `users_role_permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `users_role_permissions` ENABLE KEYS */;


-- Dumping structure for table rodasnet_db_dev.users_scopes
DROP TABLE IF EXISTS `users_scopes`;
CREATE TABLE IF NOT EXISTS `users_scopes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `scope` varchar(64) NOT NULL DEFAULT '',
  `name` varchar(64) NOT NULL DEFAULT '',
  `description` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE KEY `scope` (`scope`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table rodasnet_db_dev.users_scopes: ~0 rows (approximately)
DELETE FROM `users_scopes`;
/*!40000 ALTER TABLE `users_scopes` DISABLE KEYS */;
/*!40000 ALTER TABLE `users_scopes` ENABLE KEYS */;


-- Dumping structure for table rodasnet_db_dev.users_sessions
DROP TABLE IF EXISTS `users_sessions`;
CREATE TABLE IF NOT EXISTS `users_sessions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `client_id` varchar(32) NOT NULL DEFAULT '',
  `redirect_uri` varchar(255) NOT NULL DEFAULT '',
  `type_id` varchar(64) NOT NULL,
  `type` enum('user','auto') NOT NULL DEFAULT 'user',
  `code` text NOT NULL,
  `access_token` varchar(50) NOT NULL DEFAULT '',
  `stage` enum('request','granted') NOT NULL DEFAULT 'request',
  `first_requested` int(11) NOT NULL,
  `last_updated` int(11) NOT NULL,
  `limited_access` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `oauth_sessions_ibfk_1` (`client_id`),
  CONSTRAINT `oauth_sessions_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `users_clients` (`client_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table rodasnet_db_dev.users_sessions: ~0 rows (approximately)
DELETE FROM `users_sessions`;
/*!40000 ALTER TABLE `users_sessions` DISABLE KEYS */;
/*!40000 ALTER TABLE `users_sessions` ENABLE KEYS */;


-- Dumping structure for table rodasnet_db_dev.users_sessionscopes
DROP TABLE IF EXISTS `users_sessionscopes`;
CREATE TABLE IF NOT EXISTS `users_sessionscopes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `session_id` int(11) NOT NULL,
  `access_token` varchar(50) NOT NULL DEFAULT '',
  `scope` varchar(64) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `session_id` (`session_id`),
  KEY `access_token` (`access_token`),
  KEY `scope` (`scope`),
  CONSTRAINT `oauth_sessionscopes_ibfk_1` FOREIGN KEY (`scope`) REFERENCES `users_scopes` (`scope`),
  CONSTRAINT `oauth_sessionscopes_ibfk_2` FOREIGN KEY (`session_id`) REFERENCES `users_sessions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table rodasnet_db_dev.users_sessionscopes: ~0 rows (approximately)
DELETE FROM `users_sessionscopes`;
/*!40000 ALTER TABLE `users_sessionscopes` DISABLE KEYS */;
/*!40000 ALTER TABLE `users_sessionscopes` ENABLE KEYS */;


-- Dumping structure for table rodasnet_db_dev.users_user_permissions
DROP TABLE IF EXISTS `users_user_permissions`;
CREATE TABLE IF NOT EXISTS `users_user_permissions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `perms_id` int(11) NOT NULL,
  `actions` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table rodasnet_db_dev.users_user_permissions: ~0 rows (approximately)
DELETE FROM `users_user_permissions`;
/*!40000 ALTER TABLE `users_user_permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `users_user_permissions` ENABLE KEYS */;


-- Dumping structure for table rodasnet_db_dev.users_user_roles
DROP TABLE IF EXISTS `users_user_roles`;
CREATE TABLE IF NOT EXISTS `users_user_roles` (
  `user_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  PRIMARY KEY (`user_id`,`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table rodasnet_db_dev.users_user_roles: ~0 rows (approximately)
DELETE FROM `users_user_roles`;
/*!40000 ALTER TABLE `users_user_roles` DISABLE KEYS */;
/*!40000 ALTER TABLE `users_user_roles` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
