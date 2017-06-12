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

-- Дамп данных таблицы menu.dish: ~2 rows (приблизительно)
/*!40000 ALTER TABLE `dish` DISABLE KEYS */;
INSERT INTO `dish` (`id`, `food`, `weight`, `price`, `time_id`) VALUES
	(3, 'Окрошка', '200', '60', 2),
	(7, 'Котлета', '150', '48', 2),
	(9, 'Овсянка', '150', '30', 1),
	(10, 'Перловка', '150', '20', 1),
	(11, 'Каша рисовая', '150', '25', 1),
	(12, 'Напиток клюквенный', '200', '10', 1),
	(13, 'Напиток вишневый', '200', '10', 1),
	(14, 'Сок томатный', '200', '30', 3),
	(15, 'Молоко', '200', '15', 1),
	(16, 'Спагетти', '250', '15', 3),
	(17, 'Жаркое', '250', '70', 2),
	(18, 'Плов', '250', '75', 3),
	(19, 'Кисель', '200', '20', 2);
/*!40000 ALTER TABLE `dish` ENABLE KEYS */;

-- Дамп данных таблицы menu.food_time: ~3 rows (приблизительно)
/*!40000 ALTER TABLE `food_time` DISABLE KEYS */;
INSERT INTO `food_time` (`id`, `time_meal`) VALUES
	(1, 'Завтрак'),
	(2, 'Обед'),
	(3, 'Ужин');
/*!40000 ALTER TABLE `food_time` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
