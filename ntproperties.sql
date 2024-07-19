-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июл 19 2024 г., 21:42
-- Версия сервера: 8.0.30
-- Версия PHP: 8.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `ntproperties`
--

-- --------------------------------------------------------

--
-- Структура таблицы `directions`
--

CREATE TABLE `directions` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `eng_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `directions`
--

INSERT INTO `directions` (`id`, `name`, `created_at`, `updated_at`, `eng_name`) VALUES
(19, 'Север', '2024-07-11 14:57:59', '2024-07-17 18:53:27', 'North'),
(20, 'Северо-восток', '2024-07-11 14:57:59', '2024-07-19 17:42:22', 'Northeast'),
(21, 'Восток', '2024-07-11 14:57:59', '2024-07-19 17:42:29', 'East'),
(22, 'Юго-восток', '2024-07-11 14:57:59', '2024-07-19 17:42:39', 'Southeast'),
(23, 'Юг', '2024-07-11 14:57:59', '2024-07-19 17:42:46', 'South'),
(24, 'Юго-запад', '2024-07-11 14:57:59', '2024-07-19 17:42:54', 'Southwest'),
(25, 'Запад', '2024-07-11 14:57:59', '2024-07-19 17:43:01', 'West'),
(26, 'Северо-запад', '2024-07-11 14:57:59', '2024-07-19 17:43:09', 'Northwest');

-- --------------------------------------------------------

--
-- Структура таблицы `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `feed_backs`
--

CREATE TABLE `feed_backs` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `feed_backs`
--

INSERT INTO `feed_backs` (`id`, `name`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'a', 'b', '12312', '2024-07-17 17:04:49', '2024-07-17 17:04:49'),
(2, '213', '44', '55', '2024-07-18 21:45:02', '2024-07-18 21:45:02'),
(3, '444', '5', '4', '2024-07-18 21:46:29', '2024-07-18 21:46:29'),
(4, '5', '6', '7', '2024-07-18 21:47:03', '2024-07-18 21:47:03'),
(5, '5', '6', '7', '2024-07-18 21:47:33', '2024-07-18 21:47:33');

-- --------------------------------------------------------

--
-- Структура таблицы `high_ways`
--

CREATE TABLE `high_ways` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `eng_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `high_ways`
--

INSERT INTO `high_ways` (`id`, `name`, `created_at`, `updated_at`, `eng_name`) VALUES
(16, 'Горьковское шоссе', '2024-07-11 14:57:56', '2024-07-19 17:43:23', 'Gorky highway'),
(17, 'Дмитровское шоссе', '2024-07-11 14:57:56', '2024-07-19 17:43:31', 'Dmitrovskoe highway'),
(18, 'Каширское шоссе', '2024-07-11 14:57:56', '2024-07-19 17:43:38', 'Kashirskoe highway'),
(19, 'Киевское шоссе', '2024-07-11 14:57:56', '2024-07-19 17:43:45', 'Kiev highway'),
(20, 'Ленинградское шоссе', '2024-07-11 14:57:56', '2024-07-19 17:43:53', 'Leningradskoe highway'),
(21, 'М4-Дон', '2024-07-11 14:57:56', '2024-07-19 17:44:01', 'M4-Don'),
(22, 'Минское шоссе', '2024-07-11 14:57:56', '2024-07-19 17:44:09', 'Minsk Highway'),
(23, 'МКАД', '2024-07-11 14:57:56', '2024-07-19 17:44:17', 'MKAD'),
(24, 'Новорижское шоссе', '2024-07-11 14:57:56', '2024-07-19 17:44:25', 'Novorizhskoe highway'),
(25, 'Новорязанское шоссе', '2024-07-11 14:57:56', '2024-07-19 17:44:32', 'Novoryazanskoe highway'),
(26, 'Подольск', '2024-07-11 14:57:56', '2024-07-19 17:44:40', 'Podolsk'),
(27, 'Рогачевское шоссе', '2024-07-11 14:57:56', '2024-07-19 17:44:49', 'Rogachevskoe highway'),
(28, 'Симферопольское шоссе', '2024-07-11 14:57:56', '2024-07-19 17:44:57', 'Simferopol highway'),
(29, 'Ярославское шоссе', '2024-07-11 14:57:56', '2024-07-19 17:45:05', 'Yaroslavskoye highway');

-- --------------------------------------------------------

--
-- Структура таблицы `images`
--

CREATE TABLE `images` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_model` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `images`
--

INSERT INTO `images` (`id`, `name`, `type_model`, `model_id`, `created_at`, `updated_at`) VALUES
(6, '7day_logo.jpg', 'App\\Models\\Objects', 2, '2024-07-14 15:24:16', '2024-07-14 15:24:16'),
(7, 'ck_v1.PNG', 'App\\Models\\Objects', 2, '2024-07-14 15:34:10', '2024-07-14 15:34:10'),
(9, '251d1cs-960.jpg', 'App\\Models\\Objects', 5, '2024-07-17 19:02:23', '2024-07-17 19:02:23'),
(10, 'about_bg.jpg', 'App\\Models\\Objects', 5, '2024-07-17 19:02:23', '2024-07-17 19:02:23'),
(12, 'baloon.png', 'App\\Models\\Objects', 5, '2024-07-17 19:22:57', '2024-07-17 19:22:57');

-- --------------------------------------------------------

--
-- Структура таблицы `mailling_users`
--

CREATE TABLE `mailling_users` (
  `id` bigint UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `mailling_users`
--

INSERT INTO `mailling_users` (`id`, `email`, `created_at`, `updated_at`) VALUES
(1, 'jopa@gmail.com', '2024-07-17 17:12:45', '2024-07-17 17:12:45'),
(2, 'gnida@gmail.com', '2024-07-17 17:13:46', '2024-07-17 17:13:46'),
(3, 'da@mail.ru', '2024-07-17 17:21:33', '2024-07-17 17:21:33'),
(4, 'a@gmail.com', '2024-07-17 17:25:27', '2024-07-17 17:25:27'),
(5, 'asdasd@gmail.com', '2024-07-18 21:47:45', '2024-07-18 21:47:45');

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_07_08_174102_create_news_table', 1),
(6, '2024_07_08_192406_create_regions_table', 1),
(7, '2024_07_08_192424_create_directions_table', 1),
(8, '2024_07_08_192446_create_high_ways_table', 1),
(9, '2024_07_08_174519_create_objects_table', 2),
(10, '2024_07_14_162818_add_column_type_room_in_objects', 3),
(11, '2024_07_14_165349_create_images_table', 4),
(12, '2024_07_14_170044_change_columns_in_table_objects', 5),
(13, '2024_07_14_171435_add_column_distance_in_objects', 6),
(14, '2024_07_16_144112_create_reviews_table', 7),
(15, '2024_07_17_195357_create_feed_backs_table', 8),
(16, '2024_07_17_195407_create_mailling_users_table', 8),
(17, '2024_07_17_211016_add_eng_column_in_tables', 9),
(18, '2024_07_19_212432_add_column_file_in_reviews', 10);

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `eng_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `eng_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `image`, `title`, `description`, `created_at`, `updated_at`, `eng_title`, `eng_description`) VALUES
(10, 'k1mel7cgbea9vj2rin3hshcjkoaywc32.png', 'Холдинг \"Строительный Альянс\" построит 746 тыс. кв. м площадей Light Industrial', 'Холдинг \"Строительный альянс\" является одним из ведущих девелоперов на рынке Light Industrial, текущий портфель проектов компании на стадии реализации включает 615 тыс. кв. м. В число этих проектов входит цифровой промышленный хаб «Жуковский» (общая площадь 250 тыс. кв. м), данный объект объединяет индустриальный парк с общественно-городским пространством, включает общественно-деловую, социальную и спортивную инфраструктуру. В Краснодаре и Санкт-Петербурге «Строительный альянс» реализует два крупных проекта с общей площадью 200 и 100 тыс. кв. м соответственно. Во втором квартале 2025 г. планируется ввод в эксплуатацю порядка 50 тыс. кв. м площадей Light Industrial в <br> цифровом промышленном коворкинге \"Есипово 4\" в Солнечногорском районе, помимо этого девелопер строит еще 81 тыс. кв. м индустриальной недвижимости в Коледино с запланированной датой ввода до конца 2024 г.\r\n\r\nСогласно данным NT Properties на июнь 2024 г. объем рынка Light Industrial Московского региона составляет 569 тыс. кв. м площадей, на этапе строительства и планирования находится еще более 700 тыс. кв. м.\r\n\r\nСредневзвешенная ставка аренды в объектах Light Industrial составляет 17 100 руб./ кв. м/ год, включая НДС и операционные расходы.', '2024-07-11 16:26:26', '2024-07-19 17:51:37', NULL, NULL),
(11, 'fuqnqy80zyys6ymwr7cnj6gv9gapa1im.jpg', 'Маркетплейс Ozon на пороге крупнейшей сделки на складском рынке: аренда всего логопарка \"Северные врата\"', '<p align=\"justify\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 30px; font-family: \" open=\"\" sans\",=\"\" tahoma,=\"\" helvetica,=\"\" sans-serif;=\"\" outline:=\"\" none;=\"\" -webkit-font-smoothing:=\"\" antialiased;=\"\" line-height:=\"\" 26px;=\"\" color:=\"\" rgb(60,=\"\" 60,=\"\" 60);\"=\"\"><span style=\"color: rgb(60, 60, 60); font-family: &quot;Open Sans&quot;, Tahoma, Helvetica, sans-serif; text-align: start;\">Маркетплейс Ozon может стать арендатором всего строящегося логопарка \"Северные врата\", занимающего впечатляющие 270 000 кв. м.&nbsp;&nbsp;Эта сделка, если она состоится, станет самой крупной по аренде складских площадей в 2024 году.</span><br style=\"margin: 0px; padding: 0px; font-family: &quot;Open Sans&quot;, Tahoma, Helvetica, sans-serif; outline: none; -webkit-font-smoothing: antialiased; color: rgb(60, 60, 60); text-align: start;\"><br style=\"margin: 0px; padding: 0px; font-family: &quot;Open Sans&quot;, Tahoma, Helvetica, sans-serif; outline: none; -webkit-font-smoothing: antialiased; color: rgb(60, 60, 60); text-align: start;\"><span style=\"color: rgb(60, 60, 60); font-family: &quot;Open Sans&quot;, Tahoma, Helvetica, sans-serif; text-align: start;\">\"Северные врата\" - это первый проект Radius Group в России после продажи индустриального парка \"Южные врата\" и объявления о деятельности девелопера в ОАЭ. Логопарк, строящийся на участке 50 га в Белом Расте, в 35 км от МКАД по Дмитровскому шоссе, станет одним из крупнейших складских комплексов в Московском регионе. Общий объем инвестиций в проект оценивается в 16-18 млрд рублей.</span><br style=\"margin: 0px; padding: 0px; font-family: &quot;Open Sans&quot;, Tahoma, Helvetica, sans-serif; outline: none; -webkit-font-smoothing: antialiased; color: rgb(60, 60, 60); text-align: start;\"><br style=\"margin: 0px; padding: 0px; font-family: &quot;Open Sans&quot;, Tahoma, Helvetica, sans-serif; outline: none; -webkit-font-smoothing: antialiased; color: rgb(60, 60, 60); text-align: start;\"><span style=\"color: rgb(60, 60, 60); font-family: &quot;Open Sans&quot;, Tahoma, Helvetica, sans-serif; text-align: start;\">Первоначально Radius Group планировала строительство логопарка в три фазы с 2024 по 2029 гг., но с учетом появления крупного арендатора сроки строительства могут быть значительно сокращены.</span><br style=\"margin: 0px; padding: 0px; font-family: &quot;Open Sans&quot;, Tahoma, Helvetica, sans-serif; outline: none; -webkit-font-smoothing: antialiased; color: rgb(60, 60, 60); text-align: start;\"><br style=\"margin: 0px; padding: 0px; font-family: &quot;Open Sans&quot;, Tahoma, Helvetica, sans-serif; outline: none; -webkit-font-smoothing: antialiased; color: rgb(60, 60, 60); text-align: start;\"><span style=\"color: rgb(60, 60, 60); font-family: &quot;Open Sans&quot;, Tahoma, Helvetica, sans-serif; text-align: start;\">Ставка аренды в \"Северных вратах\" ориентировочно составляет 9 500 рублей за кв. м без ОРЕХ и НДС, однако, учитывая объем, стоимость может быть уменьшена. С учетом минимальных операционных расходов в размере 1 400 рублей за кв. м, ежегодные выплаты Ozon могут достигать порядка 13 000 рублей за кв. м или около 3,5 млрд рублей за весь логопарк.</span></p>', '2024-07-11 17:07:39', '2024-07-19 17:49:14', NULL, NULL),
(15, 'jwmzstz9bplgngqrv7dvr9e00jhx489l.jpg', 'Продолжающийся рост ставок аренды', '<p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 25px; font-family: &quot;Open Sans&quot;, Tahoma, Helvetica, sans-serif; outline: none; -webkit-font-smoothing: antialiased; line-height: 26px; color: rgb(60, 60, 60); text-align: justify;\"><span style=\"margin: 0px; padding: 0px; font-family: var(--ui-font-family-primary, var(--ui-font-family-helvetica)); outline: none; -webkit-font-smoothing: antialiased;\">По состоянию на июнь 2024 г. мы фиксируем рост средневзвешенной базовой ставки аренды на складские площади класса А до 11 323 руб./кв. м/год, что на 14% больше по сравнению с 1 кварталом текущего года. Средняя стоимость продажи в складских комплексах класса А достигает отметки в 80 000 руб./кв. м. Продолжающийся рост арендных ставок по-прежнему вызван высоким уровень спроса и дефицитом предложения, сейчас доля свободных площадей продолжает оставаться на низком уровне и составляет всего 0,5% (или 97 200 кв. м).</span><br style=\"margin: 0px; padding: 0px; outline: none; -webkit-font-smoothing: antialiased;\"></p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 25px; font-family: &quot;Open Sans&quot;, Tahoma, Helvetica, sans-serif; outline: none; -webkit-font-smoothing: antialiased; line-height: 26px; color: rgb(60, 60, 60); text-align: justify;\">Незначительный рост вакансии в среднесрочной перспективе может произойти в случае выхода на рынок ряда объектов спекулятивного строительства и высвобождения площадей, в таком случае рост ставок должен замедлиться.</p>', '2024-07-19 17:52:18', '2024-07-19 17:52:18', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `objects`
--

CREATE TABLE `objects` (
  `id` bigint UNSIGNED NOT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_room` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `column_pitch` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lighting` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fire_system` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'null',
  `price_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int NOT NULL,
  `all_square` int NOT NULL,
  `free_square` int NOT NULL,
  `min_square` int NOT NULL,
  `class_house` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'null',
  `height` int NOT NULL,
  `distance_mkad` int DEFAULT NULL,
  `floor_load` int NOT NULL,
  `zoom` int DEFAULT NULL,
  `x_coord` double DEFAULT NULL,
  `y_coord` double DEFAULT NULL,
  `region_id` bigint UNSIGNED NOT NULL,
  `highway_id` bigint UNSIGNED NOT NULL,
  `direction_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `eng_city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `eng_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `eng_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `eng_lighting` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `eng_fire_system` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `objects`
--

INSERT INTO `objects` (`id`, `address`, `city`, `title`, `description`, `type_room`, `column_pitch`, `lighting`, `fire_system`, `price_type`, `price`, `all_square`, `free_square`, `min_square`, `class_house`, `height`, `distance_mkad`, `floor_load`, `zoom`, `x_coord`, `y_coord`, `region_id`, `highway_id`, `direction_id`, `created_at`, `updated_at`, `eng_city`, `eng_title`, `eng_description`, `eng_lighting`, `eng_fire_system`) VALUES
(2, NULL, 'Москоу4', 'название1', 'описание2', '1', '235x235', 'Светодиодно', 'Спринклерная1', '1', 1234, 123, 342, 545, 'D6', 11112, 2135, 26, 23, NULL, NULL, 19, 17, 20, '2024-07-14 15:24:16', '2024-07-14 15:34:10', NULL, NULL, NULL, NULL, NULL),
(3, NULL, 'Москоу4', 'название2', 'описание2', '1', '235x235', 'Светодиодно', 'Спринклерная1', '1', 1, 123, 342, 545, 'D6', 11112, 2135, 26, 23, 214.12, 23.45, 19, 17, 20, '2024-07-14 15:23:16', '2024-07-14 15:34:10', NULL, NULL, NULL, NULL, NULL),
(4, NULL, 'Москоу5', 'название3', 'описание3', '1', '235', 'Светодиодно', 'Спринклерная1', '1', 5600, 123, 342, 545, 'D6', 11112, 2135, 26, 23, 214.12, 23.45, 15, 17, 19, '2024-07-14 15:24:16', '2024-07-14 15:34:10', NULL, NULL, NULL, NULL, NULL),
(5, NULL, 'Москоу2', 'унисекс2', '<p>opisanie2</p>', '2', '253', 'Светодиодное2', 'kapec2', '1', 30003, 100003, 80003, 3223, 'B2', 5003, 2334, 454, 15, 213.1133, 23.444, 17, 17, 19, '2024-07-17 19:02:23', '2024-07-17 19:22:42', 'Moscow2', 'unisex2', '<p>description2</p>', 'Svet2', 'Kobz2');

-- --------------------------------------------------------

--
-- Структура таблицы `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `regions`
--

CREATE TABLE `regions` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `eng_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `regions`
--

INSERT INTO `regions` (`id`, `name`, `created_at`, `updated_at`, `eng_name`) VALUES
(15, 'Москва', '2024-07-10 16:06:46', '2024-07-17 18:42:12', 'Moscow'),
(16, 'Московская область', '2024-07-10 16:06:55', '2024-07-19 17:40:50', 'Moscow oblast'),
(17, 'Санкт-Петербург', '2024-07-10 16:07:10', '2024-07-19 17:41:00', 'Saint-Petersburg'),
(18, 'Екатеринбург', '2024-07-10 16:07:20', '2024-07-19 17:41:11', 'Ekaterinburg'),
(19, 'Ленинградская область', '2024-07-10 16:07:31', '2024-07-19 17:41:19', 'Leningrad Region'),
(20, 'Новосибирск', '2024-07-10 16:07:40', '2024-07-19 17:41:30', 'Novosibirsk'),
(21, 'Новосибирская область', '2024-07-10 16:08:26', '2024-07-19 17:41:38', 'Novosibirsk region'),
(22, 'Ростов-на-Дону', '2024-07-10 16:08:44', '2024-07-19 17:41:45', 'Rostov-on-Don'),
(23, 'Самарская область', '2024-07-10 16:08:50', '2024-07-19 17:41:53', 'Samara region'),
(24, 'Свердловская область', '2024-07-10 16:09:02', '2024-07-19 17:42:02', 'Sverdlovsk region'),
(25, 'Другие субъекты', '2024-07-10 16:09:09', '2024-07-19 17:42:09', 'Other subjects');

-- --------------------------------------------------------

--
-- Структура таблицы `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `eng_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `eng_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `reviews`
--

INSERT INTO `reviews` (`id`, `image`, `file`, `title`, `description`, `created_at`, `updated_at`, `eng_title`, `eng_description`) VALUES
(1, '654088bcf10077b2d4153cd4932f760e.jpg', '4416c5a99a2373d13a81332ab4285337.pptx', 'Складская недвижимость (итоговый обзор 2019)', '<p style=\"margin: 0px; padding: 0px 0px 20px 24px; outline: none; -webkit-font-smoothing: antialiased; line-height: 26px; position: relative;\"><span style=\"color: rgb(60, 60, 60); font-family: \" open=\"\" sans\",=\"\" tahoma,=\"\" helvetica,=\"\" sans-serif;\"=\"\">Среди основных тенденций 2019 года и наступившего 2020 года мы хотели бы отметить:</span></p><ul><li style=\"margin: 0px; padding: 0px 0px 20px 24px; outline: none; -webkit-font-smoothing: antialiased; line-height: 26px; position: relative;\"><font color=\"#000000\" style=\"\">Снижение вакансии до уровня 2013 года – 3,5%;</font></li><li style=\"margin: 0px; padding: 0px 0px 20px 24px; outline: none; -webkit-font-smoothing: antialiased; line-height: 26px; position: relative;\"><font color=\"#000000\" style=\"\">Снижение ввода новых складских площадей до уровня 2013 года – 764 000 кв. м;</font></li><li style=\"margin: 0px; padding: 0px 0px 20px 24px; outline: none; -webkit-font-smoothing: antialiased; line-height: 26px; position: relative;\"><font color=\"#000000\" style=\"\">Стабильный объем сделок – выше 1 млн кв. м в год;</font></li><li style=\"margin: 0px; padding: 0px 0px 20px 24px; outline: none; -webkit-font-smoothing: antialiased; line-height: 26px; position: relative;\"><font color=\"#000000\" style=\"\">Повышение чистой арендной ставки до уровня 4 000 рублей за кв. м (без ОРЕХ и НДС);</font></li><li style=\"margin: 0px; padding: 0px 0px 20px 24px; outline: none; -webkit-font-smoothing: antialiased; line-height: 26px; position: relative;\"><font color=\"#000000\" style=\"\">Рост стоимости строительства и цены продажи объектов недвижимости;</font></li><li style=\"margin: 0px; padding: 0px 0px 20px 24px; outline: none; -webkit-font-smoothing: antialiased; line-height: 26px; position: relative;\"><font color=\"#000000\" style=\"\">Отсутствие роста покупательской способности населения.</font></li></ul>', '2024-07-16 11:48:03', '2024-07-19 18:36:54', NULL, NULL),
(2, '522648d2020fe4f3d1e3561c7fbd3487.jpg', '33f69b87323ecef683a162a7f66cf56d.pptx', 'Торговая недвижимость (итоговый обзор 2019)', '<ul><li style=\"margin: 0px; padding: 0px 0px 20px 24px; outline: none; -webkit-font-smoothing: antialiased; line-height: 26px; position: relative;\">С начала года в Москве было введено в эксплуатацию 7 торговых комплексов общей площадью чуть более 164 300 кв. м (включая небольшие районные комплексы арендопригодной площадью 4 000 – 6 000 кв. м).</li><li style=\"margin: 0px; padding: 0px 0px 20px 24px; outline: none; -webkit-font-smoothing: antialiased; line-height: 26px; position: relative;\">Общая арендопригодная площадь в качественных торговых комплексах на конец 2019 г. составила более 6,7 млн кв. м.</li><li style=\"margin: 0px; padding: 0px 0px 20px 24px; outline: none; -webkit-font-smoothing: antialiased; line-height: 26px; position: relative;\">В 2019 г. в торговом сегменте появилось 29 новых операторов, среди которых 15 относятся к fashion (одежда, обувь, аксессуары), 7 новых операторов – кафе и рестораны. Данные показатели сопоставимы с показателями прошлого года (28 операторов в 2018 году).</li><li style=\"margin: 0px; padding: 0px 0px 20px 24px; outline: none; -webkit-font-smoothing: antialiased; line-height: 26px; position: relative;\">Поскольку рынок торговой недвижимости в 2019 г. не отличался особыми темпами роста или резкими спадами, средние запрашиваемые ставки аренды не изменились с прошлого года.</li></ul>', '2024-07-17 18:57:03', '2024-07-19 18:39:45', NULL, '<p><br></p>'),
(3, 'l5rgshoar8nyppjwuou998ir16rez7or.png', NULL, 'Складская недвижимость Московского региона (1 квартал 2024 года)', '<ul style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px 20px; font-family: \" open=\"\" sans\",=\"\" tahoma,=\"\" helvetica,=\"\" sans-serif;=\"\" outline:=\"\" none;=\"\" -webkit-font-smoothing:=\"\" antialiased;=\"\" list-style:=\"\" outside=\"\" none=\"\" color:=\"\" rgb(60,=\"\" 60,=\"\" 60);\"=\"\"><li style=\"margin: 0px; padding: 0px 0px 20px 24px; outline: none; -webkit-font-smoothing: antialiased; line-height: 26px; position: relative;\">За первые три месяца текущего года в Московском регионе было введено порядка 356 тыс. кв. м складских площадей класса А и В. Общий объем качественного предложения достиг 25 млн кв. м. По данным компании NT Properties к концу года будет введено еще порядка 1,6 млн кв. м складских площадей.</li><li style=\"margin: 0px; padding: 0px 0px 20px 24px; outline: none; -webkit-font-smoothing: antialiased; line-height: 26px; position: relative;\">Низкий уровень вакансии на рынке складской недвижимости в Московском регионе сохранился в первом квартале 2024 г. и по-прежнему не превысил 0,5%. Высокий спрос на складские объекты приводит к быстрому снятию доступных блоков с рынка.</li><li style=\"margin: 0px; padding: 0px 0px 20px 24px; outline: none; -webkit-font-smoothing: antialiased; line-height: 26px; position: relative;\">По итогам 1 кв. 2024 г. средневзвешенная базовая ставка аренды на складские объекты достигла 9 940 руб./кв. м/год, рост по сравнению с концом 2023 г. составил 14,3%. По мнению специалистов NT Properties тенденция роста ставок аренды сохранится на конец 2024 и в 2025 гг.</li><li style=\"margin: 0px; padding: 0px 0px 20px 24px; outline: none; -webkit-font-smoothing: antialiased; line-height: 26px; position: relative;\">По итогам 1 квартала сумма купленных и арендованных площадей составила 318 тыс. кв. м, что на 42% меньше, чем за аналогичный период прошлого года. Согласно нашему прогнозу к концу текущего года общий объем сделок на рынке складской недвижимости достигнет отметки в 2,5 млн кв. м.</li><li style=\"margin: 0px; padding: 0px 0px 20px 24px; outline: none; -webkit-font-smoothing: antialiased; line-height: 26px; position: relative;\">Высокий спрос, крайне низкий уровень вакансии в существующих объекта и, как следствие, высокие ставки аренды, приводят к тому, что собственники все чаще стремятся пересогласовать с текущими арендаторами коммерческие условия в сторону повышения, либо прибегают к ротации.</li></ul>', '2024-07-17 19:29:58', '2024-07-19 18:42:05', NULL, '<p><br></p>');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'admin', 'admin@gmail.com', NULL, '$2y$12$dNSGmaMYO4Ug35dxdBYPoOnp34uX.HxIVXoCYHYPR5o45.QkNlNru', 'h8Br6kXQ3kt9U34O5RZNcUVEydnbwxmaX4A6qJK5L2F6p4DA0YditIgYqGfE', NULL, NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `directions`
--
ALTER TABLE `directions`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Индексы таблицы `feed_backs`
--
ALTER TABLE `feed_backs`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `high_ways`
--
ALTER TABLE `high_ways`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `mailling_users`
--
ALTER TABLE `mailling_users`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `objects`
--
ALTER TABLE `objects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `objects_region_id_foreign` (`region_id`),
  ADD KEY `objects_highway_id_foreign` (`highway_id`),
  ADD KEY `objects_direction_id_foreign` (`direction_id`);

--
-- Индексы таблицы `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Индексы таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Индексы таблицы `regions`
--
ALTER TABLE `regions`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `directions`
--
ALTER TABLE `directions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT для таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `feed_backs`
--
ALTER TABLE `feed_backs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `high_ways`
--
ALTER TABLE `high_ways`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT для таблицы `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `mailling_users`
--
ALTER TABLE `mailling_users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT для таблицы `objects`
--
ALTER TABLE `objects`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `regions`
--
ALTER TABLE `regions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT для таблицы `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `objects`
--
ALTER TABLE `objects`
  ADD CONSTRAINT `objects_direction_id_foreign` FOREIGN KEY (`direction_id`) REFERENCES `directions` (`id`),
  ADD CONSTRAINT `objects_highway_id_foreign` FOREIGN KEY (`highway_id`) REFERENCES `high_ways` (`id`),
  ADD CONSTRAINT `objects_region_id_foreign` FOREIGN KEY (`region_id`) REFERENCES `regions` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
