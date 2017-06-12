-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия сервера:               5.5.53 - MySQL Community Server (GPL)
-- Операционная система:         Win32
-- HeidiSQL Версия:              9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Дамп данных таблицы menu.dish: ~0 rows (приблизительно)
/*!40000 ALTER TABLE `dish` DISABLE KEYS */;
INSERT INTO `dish` (`id`, `food`, `weight`, `price`, `time_id`) VALUES
	(3, 'Окрошка', '200', '60', 2),
	(7, 'Котлета', '150', '48', 2);
/*!40000 ALTER TABLE `dish` ENABLE KEYS */;

-- Дамп данных таблицы menu.food_time: ~1 rows (приблизительно)
/*!40000 ALTER TABLE `food_time` DISABLE KEYS */;
INSERT INTO `food_time` (`id`, `time_meal`) VALUES
	(1, 'Завтрак'),
	(2, 'Обед'),
	(3, 'Ужин');
/*!40000 ALTER TABLE `food_time` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
