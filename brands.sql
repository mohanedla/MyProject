/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

CREATE TABLE `brands` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `model` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` int NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `brands_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `brands` (`id`, `name`, `model`, `phone_number`, `email`, `country`, `address`, `profile_image`, `created_at`, `updated_at`) VALUES
(1, 'LACOSTE', 'Clothes', 947667149, 'LACOSTE@gmail.com', 'إسبانيا', 'طرابلس', 'public/PNw93C0Cpjy9KEhoRhQxHbjQCou38gPshQm9NOJ8.jpg', '2023-01-18 16:10:57', '2023-01-18 16:10:57');
INSERT INTO `brands` (`id`, `name`, `model`, `phone_number`, `email`, `country`, `address`, `profile_image`, `created_at`, `updated_at`) VALUES
(2, 'MANGO', 'Clothes', 912121211, 'MANGO@gmail.com', 'إسبانيا', 'طرابلس', 'public/4obkVEBAgZOE198x90DIyOGgQmGe0OlJFAJkoaRW.jpg', '2023-01-18 18:34:05', '2023-01-18 18:34:05');
INSERT INTO `brands` (`id`, `name`, `model`, `phone_number`, `email`, `country`, `address`, `profile_image`, `created_at`, `updated_at`) VALUES
(3, 'ALDO', 'Clothes', 912121212, 'ALDO@gmail.com', 'إيطاليا', 'طرابلس', 'public/z1EoFBjoS1M1aD5brpA60pefUXsxQoAFrCZUrr9r.jpg', '2023-01-18 18:34:33', '2023-01-18 18:34:33');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;