-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июл 14 2024 г., 21:56
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
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `directions`
--

INSERT INTO `directions` (`id`, `name`, `created_at`, `updated_at`) VALUES
(19, 'Север', '2024-07-11 14:57:59', NULL),
(20, 'Северо-восток', '2024-07-11 14:57:59', NULL),
(21, 'Восток', '2024-07-11 14:57:59', NULL),
(22, 'Юго-восток', '2024-07-11 14:57:59', NULL),
(23, 'Юг', '2024-07-11 14:57:59', NULL),
(24, 'Юго-запад', '2024-07-11 14:57:59', NULL),
(25, 'Запад', '2024-07-11 14:57:59', NULL),
(26, 'Северо-запад', '2024-07-11 14:57:59', NULL);

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
-- Структура таблицы `high_ways`
--

CREATE TABLE `high_ways` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `high_ways`
--

INSERT INTO `high_ways` (`id`, `name`, `created_at`, `updated_at`) VALUES
(16, 'Горьковское шоссе', '2024-07-11 14:57:56', NULL),
(17, 'Дмитровское шоссе', '2024-07-11 14:57:56', NULL),
(18, 'Каширское шоссе', '2024-07-11 14:57:56', NULL),
(19, 'Киевское шоссе', '2024-07-11 14:57:56', NULL),
(20, 'Ленинградское шоссе', '2024-07-11 14:57:56', NULL),
(21, 'М4-Дон', '2024-07-11 14:57:56', NULL),
(22, 'Минское шоссе', '2024-07-11 14:57:56', NULL),
(23, 'МКАД', '2024-07-11 14:57:56', NULL),
(24, 'Новорижское шоссе', '2024-07-11 14:57:56', NULL),
(25, 'Новорязанское шоссе', '2024-07-11 14:57:56', NULL),
(26, 'Подольск', '2024-07-11 14:57:56', NULL),
(27, 'Рогачевское шоссе', '2024-07-11 14:57:56', NULL),
(28, 'Симферопольское шоссе', '2024-07-11 14:57:56', NULL),
(29, 'Ярославское шоссе', '2024-07-11 14:57:56', NULL);

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
(7, 'ck_v1.PNG', 'App\\Models\\Objects', 2, '2024-07-14 15:34:10', '2024-07-14 15:34:10');

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
(13, '2024_07_14_171435_add_column_distance_in_objects', 6);

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
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `image`, `title`, `description`, `created_at`, `updated_at`) VALUES
(10, 'dead_v1.PNG', 'Холдинг \"Строительный Альянс\" построит 746 тыс. кв. м площадей Light Industrial', 'Холдинг \"Строительный альянс\" является одним из ведущих девелоперов на рынке Light Industrial, текущий портфель проектов компании на стадии реализации включает 615 тыс. кв. м. В число этих проектов входит цифровой промышленный хаб «Жуковский» (общая площадь 250 тыс. кв. м), данный объект объединяет индустриальный парк с общественно-городским пространством, включает общественно-деловую, социальную и спортивную инфраструктуру. В Краснодаре и Санкт-Петербурге «Строительный альянс» реализует два крупных проекта с общей площадью 200 и 100 тыс. кв. м соответственно. Во втором квартале 2025 г. планируется ввод в эксплуатацю порядка 50 тыс. кв. м площадей Light Industrial в <br> цифровом промышленном коворкинге \"Есипово 4\" в Солнечногорском районе, помимо этого девелопер строит еще 81 тыс. кв. м индустриальной недвижимости в Коледино с запланированной датой ввода до конца 2024 г.\r\n\r\nСогласно данным NT Properties на июнь 2024 г. объем рынка Light Industrial Московского региона составляет 569 тыс. кв. м площадей, на этапе строительства и планирования находится еще более 700 тыс. кв. м.\r\n\r\nСредневзвешенная ставка аренды в объектах Light Industrial составляет 17 100 руб./ кв. м/ год, включая НДС и операционные расходы.', '2024-07-11 16:26:26', '2024-07-11 16:26:26'),
(11, 'dk.jpg', '2Холдинг \"Строительный Альянс\" построит 746 тыс. кв. м площадей Light Industrial', '<p align=\"justify\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 30px; font-family: \" open=\"\" sans\",=\"\" tahoma,=\"\" helvetica,=\"\" sans-serif;=\"\" outline:=\"\" none;=\"\" -webkit-font-smoothing:=\"\" antialiased;=\"\" line-height:=\"\" 26px;=\"\" color:=\"\" rgb(60,=\"\" 60,=\"\" 60);\"=\"\">1Холдинг \"Строительный альянс\" является одним из ведущих девелоперов на рынке Light Industrial, текущий портфель проектов компании на стадии реализации включает 615 тыс. кв. м. В число этих проектов входит цифровой промышленный хаб «Жуковский» (общая площадь 250 тыс. кв. м), данный объект объединяет индустриальный парк с общественно-городским пространством, включает общественно-деловую, социальную и спортивную инфраструктуру. В Краснодаре и Санкт-Петербурге «Строительный альянс» реализует два крупных проекта с общей площадью 200 и 100 тыс. кв. м соответственно. Во втором квартале 2025 г. планируется ввод в эксплуатацю порядка 50 тыс. кв. м площадей Light Industrial в цифровом промышленном коворкинге \"Есипово 4\" в Солнечногорском районе, помимо этого девелопер строит еще 81 тыс. кв. м индустриальной недвижимости в Коледино с запланированной датой ввода до конца 2024 г.</p><p align=\"justify\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 30px; font-family: \" open=\"\" sans\",=\"\" tahoma,=\"\" helvetica,=\"\" sans-serif;=\"\" outline:=\"\" none;=\"\" -webkit-font-smoothing:=\"\" antialiased;=\"\" line-height:=\"\" 26px;=\"\" color:=\"\" rgb(60,=\"\" 60,=\"\" 60);\"=\"\">Согласно данным NT Properties на июнь 2024 г. объем рынка Light Industrial <b>Московского региона</b> составляет 569 тыс. кв. м площадей, на этапе строительства и планирования находится еще более 700 тыс. кв. м.</p><p align=\"justify\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 30px; font-family: \" open=\"\" sans\",=\"\" tahoma,=\"\" helvetica,=\"\" sans-serif;=\"\" outline:=\"\" none;=\"\" -webkit-font-smoothing:=\"\" antialiased;=\"\" line-height:=\"\" 26px;=\"\" color:=\"\" rgb(60,=\"\" 60,=\"\" 60);\"=\"\">Средневзвешенная ставка аренды в объектах Light Industrial составляет 17 100 руб./ кв. м/ год, включая НДС и операционные расходы.</p>', '2024-07-11 17:07:39', '2024-07-14 12:11:35'),
(12, 'dead_v1.PNG', 'ssdfsdf324', '<p>sssssssssssssssss324</p><p><br></p><p><b>4444444444</b></p><p>fdgfdgdfg</p>', '2024-07-14 12:14:56', '2024-07-14 12:24:00');

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
  `x_coord` double(8,2) DEFAULT NULL,
  `y_coord` double(8,2) DEFAULT NULL,
  `region_id` bigint UNSIGNED NOT NULL,
  `highway_id` bigint UNSIGNED NOT NULL,
  `direction_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `objects`
--

INSERT INTO `objects` (`id`, `address`, `city`, `title`, `description`, `type_room`, `column_pitch`, `lighting`, `fire_system`, `price_type`, `price`, `all_square`, `free_square`, `min_square`, `class_house`, `height`, `distance_mkad`, `floor_load`, `zoom`, `x_coord`, `y_coord`, `region_id`, `highway_id`, `direction_id`, `created_at`, `updated_at`) VALUES
(2, NULL, 'Москоу4', 'название1', 'описание2', '1', '235', 'Светодиодно', 'Спринклерная1', '1', 1234, 123, 342, 545, 'D6', 11112, 2135, 26, 23, 214.12, 23.45, 19, 17, 20, '2024-07-14 15:24:16', '2024-07-14 15:34:10');

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
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `regions`
--

INSERT INTO `regions` (`id`, `name`, `created_at`, `updated_at`) VALUES
(15, 'Москва', '2024-07-10 16:06:46', '2024-07-10 16:06:46'),
(16, 'Московская область', '2024-07-10 16:06:55', '2024-07-10 16:06:55'),
(17, 'Санкт-Петербург', '2024-07-10 16:07:10', '2024-07-10 16:07:10'),
(18, 'Екатеринбург', '2024-07-10 16:07:20', '2024-07-10 16:07:20'),
(19, 'Ленинградская область', '2024-07-10 16:07:31', '2024-07-10 16:07:31'),
(20, 'Новосибирск', '2024-07-10 16:07:40', '2024-07-10 16:07:40'),
(21, 'Новосибирская область', '2024-07-10 16:08:26', '2024-07-10 16:08:26'),
(22, 'Ростов-на-Дону', '2024-07-10 16:08:44', '2024-07-10 16:08:44'),
(23, 'Самарская область', '2024-07-10 16:08:50', '2024-07-10 16:08:50'),
(24, 'Свердловская область', '2024-07-10 16:09:02', '2024-07-10 16:09:02'),
(25, 'Другие субъекты', '2024-07-10 16:09:09', '2024-07-10 16:09:09');

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
-- AUTO_INCREMENT для таблицы `high_ways`
--
ALTER TABLE `high_ways`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT для таблицы `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT для таблицы `objects`
--
ALTER TABLE `objects`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
