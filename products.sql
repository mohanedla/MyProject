/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

CREATE TABLE `products` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `model` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `specification` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `collection` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_id` int NOT NULL,
  `brand_id` int NOT NULL,
  `category_id` int NOT NULL,
  `quantity` int NOT NULL,
  `quantity_price` int DEFAULT NULL,
  `price` double(8,2) NOT NULL,
  `price_purchas` double(8,2) NOT NULL,
  `profile_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `all_images` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `products` (`id`, `name`, `model`, `specification`, `collection`, `admin_id`, `brand_id`, `category_id`, `quantity`, `quantity_price`, `price`, `price_purchas`, `profile_image`, `all_images`, `created_at`, `updated_at`) VALUES
(1, 'قميص', NULL, 'شتوي', 'Men', 1, 1, 1, 15, 7, 35.00, 15.00, 'public/NAV56u5EOafL3DKTfgzWg0HDrTuefcmmg9QZVsVh.jpg', NULL, '2023-01-18 16:13:41', '2023-01-20 15:13:56');
INSERT INTO `products` (`id`, `name`, `model`, `specification`, `collection`, `admin_id`, `brand_id`, `category_id`, `quantity`, `quantity_price`, `price`, `price_purchas`, `profile_image`, `all_images`, `created_at`, `updated_at`) VALUES
(2, 'حذاء', NULL, 'صيفي', 'Men', 4, 3, 2, 15, 12, 50.00, 20.00, 'public/CChhdjHWBMB9o8LVXDTQeVjQbkZgz6kdP08Fg88J.jpg', NULL, '2023-01-18 18:46:47', '2023-01-20 15:13:56');
INSERT INTO `products` (`id`, `name`, `model`, `specification`, `collection`, `admin_id`, `brand_id`, `category_id`, `quantity`, `quantity_price`, `price`, `price_purchas`, `profile_image`, `all_images`, `created_at`, `updated_at`) VALUES
(3, 'تيشرت', NULL, 'صيفي', 'Men', 4, 2, 2, 10, 8, 55.00, 21.00, 'public/JtSchcRq5xGBVemuLkIWIin2Vm1HiqbcjztJbmmt.jpg', NULL, '2023-01-18 18:47:26', '2023-01-19 20:41:53');
INSERT INTO `products` (`id`, `name`, `model`, `specification`, `collection`, `admin_id`, `brand_id`, `category_id`, `quantity`, `quantity_price`, `price`, `price_purchas`, `profile_image`, `all_images`, `created_at`, `updated_at`) VALUES
(4, 'حذاء', NULL, 'صيفي', 'Women', 4, 2, 2, 12, 1, 40.00, 19.00, 'public/LgQfLXidrY8VJ882GTTLdixfkLumzMDgRpN4Oqua.jpg', NULL, '2023-01-18 18:50:32', '2023-01-18 18:50:32'),
(5, 'جمبسوت', NULL, 'صيفي', 'Women', 4, 2, 1, 20, 3, 87.00, 53.00, 'public/OjuWMRv0rF6QWfTSY2l1WJjyT9LhxPbVtPo8BEpZ.jpg', NULL, '2023-01-18 18:51:40', '2023-01-20 15:15:40'),
(6, 'كبوط', NULL, 'شتوي', 'Women', 4, 2, 4, 12, 2, 175.00, 90.00, 'public/xxlSwdzLfFhd3JcvEU79xiOAWeCwsGScerEBGT5S.jpg', NULL, '2023-01-18 18:53:23', '2023-01-18 18:53:23'),
(7, 'قميص', NULL, 'كم طويل', 'Kids', 4, 2, 2, 30, NULL, 65.00, 30.00, 'public/hZjAXSpz3vwW8C4t2isTa2dT6848mHKkIqzWxOo0.jpg', NULL, '2023-01-18 18:55:00', '2023-01-18 18:55:00'),
(8, 'حذاء', NULL, 'كم طويل', 'Kids', 4, 2, 1, 15, 3, 60.00, 36.00, 'public/kH47h4yFK1CQAJ4gyVbaVkuCUvgigd9MMnTvrn7G.jpg', NULL, '2023-01-18 18:57:21', '2023-01-18 18:57:21'),
(9, 'ساعة', NULL, 'جلد', 'Men', 2, 3, 3, 4, 3, 200.00, 55.00, 'public/vpMbFgG9GURPpksxs6xYEEbEmvM0S5AEfFPfMREo.png', NULL, '2023-01-19 20:00:54', '2023-01-19 20:04:59'),
(10, 'بالطو', NULL, 'شتوي', 'Men', 2, 2, 4, 18, 5, 195.00, 115.00, 'public/liTWZ6fZCwLUc5SHoPBPrRUXf1hQlalyFdhxa6BY.jpg', NULL, '2023-01-19 20:07:31', '2023-01-19 20:07:31'),
(11, 'بالطو', NULL, 'شتوي', 'Women', 2, 2, 4, 18, 0, 195.00, 115.00, 'public/liTWZ6fZCwLUc5SHoPBPrRUXf1hQlalyFdhxa6BY.jpg', NULL, '2023-01-19 20:07:31', '2023-01-19 20:07:31'),
(12, 'حذاء', NULL, 'صيفي', 'Women', 4, 2, 1, 15, 3, 60.00, 36.00, 'public/kH47h4yFK1CQAJ4gyVbaVkuCUvgigd9MMnTvrn7G.jpg', NULL, '2023-01-18 18:57:21', '2023-01-18 18:57:21'),
(13, 'جيبوطي', NULL, 'شتوي', 'Kids', 4, 2, 1, 15, 8, 90.00, 36.00, 'public/mpUIzlg93JMEsXq4WH4PY2yFYr4uShzEqpOGF74B.jpg', NULL, '2023-01-18 18:57:21', '2023-01-19 20:16:26'),
(14, 'توب', NULL, 'شتوي', 'Kids', 4, 2, 1, 15, 2, 66.00, 36.00, 'public/slMmvcOodAiIQEiwREpnvoGIPT9oXlbOvwPBggtu.jpg', NULL, '2023-01-18 18:57:21', '2023-01-20 15:12:14'),
(15, 'بنطلون', NULL, 'شتوي', 'Kids', 4, 2, 1, 15, 1, 50.00, 36.00, 'public/9js7lM0IrqyL43sTCdO9GYFXZymd0crVVMucUoNA.jpg', NULL, '2023-01-18 18:57:21', '2023-01-20 15:12:14'),
(16, 'قميص', NULL, 'صيفي', 'Men', 4, 2, 1, 10, 8, 65.00, 21.00, 'public/jWhdYStKEmY3BHZT6oIe4uisMv9qS2ZErxezV9PG.jpg', NULL, '2023-01-18 18:47:26', '2023-01-19 20:39:15'),
(17, 'قميص', NULL, 'صيفي', 'Men', 4, 2, 1, 10, 8, 65.00, 21.00, 'public/JtSchcRq5xGBVemuLkIWIin2Vm1HiqbcjztJbmmt.jpg', NULL, '2023-01-18 18:47:26', '2023-01-19 20:39:15');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;