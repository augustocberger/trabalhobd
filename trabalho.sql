-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 25-Nov-2019 às 21:30
-- Versão do servidor: 5.7.26
-- versão do PHP: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trabalho`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `bens`
--

DROP TABLE IF EXISTS `bens`;
CREATE TABLE IF NOT EXISTS `bens` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `bem` text COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `bens`
--

INSERT INTO `bens` (`id`, `bem`) VALUES
(17, 'SI5tsGTsm6'),
(16, 'cfo718MUzG'),
(15, 'aV6Ay0En0x'),
(14, 'mPPqkogg6O'),
(18, 'sKoT8E1lLh'),
(19, 'KTfLEe9a4J'),
(20, 'N6f9xPrhbC'),
(21, 'ypdMQ7txsU'),
(22, 'eEClDpOnRG'),
(23, '6s4fEQZ2JH'),
(24, 'cYAz5lMWiY'),
(25, '5ObNDw3JSJ'),
(26, 'pCgxK77YNR'),
(27, 'gKZijPNP4X'),
(28, 'rMThBa9GPX'),
(29, 'PFgnCmYHLJ'),
(30, '3m8OqFck6Q');

-- --------------------------------------------------------

--
-- Estrutura da tabela `bens_morador`
--

DROP TABLE IF EXISTS `bens_morador`;
CREATE TABLE IF NOT EXISTS `bens_morador` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_bem` int(255) NOT NULL,
  `ID_Morador` int(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_bem` (`id_bem`),
  KEY `ID_Morador` (`ID_Morador`),
  KEY `id_bem_2` (`id_bem`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `bens_morador`
--

INSERT INTO `bens_morador` (`id`, `id_bem`, `ID_Morador`) VALUES
(4, 14, 35),
(3, 14, 35),
(5, 14, 35),
(6, 14, 35),
(7, 14, 35),
(8, 14, 35),
(9, 14, 35),
(10, 14, 35),
(11, 14, 35),
(12, 14, 35),
(13, 14, 35),
(14, 14, 35),
(15, 14, 35),
(16, 14, 35),
(17, 14, 35);

-- --------------------------------------------------------

--
-- Estrutura da tabela `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `fornecedor`
--

DROP TABLE IF EXISTS `fornecedor`;
CREATE TABLE IF NOT EXISTS `fornecedor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `papel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cnpj` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `raz_social` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `endereco` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefone` text COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=60 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `fornecedor`
--

INSERT INTO `fornecedor` (`id`, `papel`, `cnpj`, `raz_social`, `endereco`, `telefone`) VALUES
(59, 'Lr0nelTawR', '198.362.576-66', 'HJ4us64HjA', 'Uee2jmo74J', '9621-4199'),
(57, 'KvTuhPNwDP', '462.299.184-71', 'Gi2QJDGwao', 'cdbrDQnHVD', '4317-9555'),
(58, 'MoBKTJXpeB', '122.604.637-14', 'xwzKXzHabU', 'crkoY2yQvA', '4591-2084'),
(56, 'QxtM7NNmQC', '606.883.963-66', '37ZBrlPaFi', 't5f147Yod2', '2657-4244'),
(55, '55UNq46fRP', '642.795.323-34', 'LbxUBRrOE9', 'YizBUnAzk5', '1533-4364'),
(54, 'HLuEuPy3cW', '261.753.350-99', 'OjkDVjdToh', 'V39xURVhMh', '1815-1217'),
(53, 'BEJKiAe2LT', '829.472.671-95', '5M7AtfeouR', '3cSdHgt3Th', '7752-2778'),
(52, 'i6X3jA03Sh', '965.268.656-39', 'jMGtSv9BNF', 'VVFk32m3vm', '1737-8052'),
(51, 'Hd850sMaw3', '109.235.491-60', 'XrE8GmgSuf', '3MCxcWr3JM', '3604-7538'),
(50, 'm93pZRAKCb', '817.519.462-0', 'KHdogyPqrj', 'stygj4lmpE', '4656-5913'),
(49, 'e9uLTba2f2', '766.762.962-18', 'dpZpg8Vxpl', '2wJKo6vsQy', '6836-9487'),
(48, '44FZ1MyZSb', '253.763.652-42', 'CFLmBKj5Ul', 'fpXenyuHpp', '8035-3520'),
(47, 'Gf12XdO0ql', '869.148.761-85', 'qxqARLMw7k', 'Kyiitf8yyq', '1256-2754'),
(46, 'U5ZPeZ6K5h', '472.253.360-52', 'LQ1eDGyy1Q', 'Zam3hfDbhW', '8057-1800'),
(45, 'OxJZE2GS9m', '758.655.776-16', 'yW8BRQskDY', '6QZ3YOornc', '4275-8101'),
(44, '1p0XmcTYVD', '746.791.575-49', 'vPwz0TtRV9', '4log9Ac1yW', '2162-6822'),
(43, '6D6gbEsJ30', '570.341.652-75', 'Aa8NoH1PyV', 'bVESK7R1Bj', '2046-3852'),
(42, 'NyZsIlKMg0', '780.943.266-64', 'FdwjgypVXb', '6lQSeSKhmF', '8184-6001'),
(41, 'YDhTFs0Blp', '356.261.378-30', 'ZAOdmjV2WW', 'PeRv2vwzIc', '9914-8113'),
(40, 'ee7LvVlI89', '127.614.965-44', 'asNd0vQdns', 'sVTdDxRMwX', '6876-1042'),
(39, 'A50OAdJTE1', '855.402.875-3', 'JPABujGlkX', 'nBDfIqqO8b', '2639-3636'),
(38, 'Ez7hvioOi4', '453.412.512-21', 'ae9yjJRoaT', 'fCc3u33gwC', '4236-7305'),
(37, 'RNLgQ1kxAZ', '558.748.886-78', 'YhLfdss0nN', 'FEmuU7fJjK', '6930-1319'),
(35, 'YXIBTNAnBX', '150.689.257-93', 'DolADiHAQQ', 'shpbZzgCzg', '8327-8960'),
(36, 'yg5vIqApWT', '471.986.907-12', '9Otxt2JzEa', 'buNlCsxMEs', '6290-8164');

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `moradores`
--

DROP TABLE IF EXISTS `moradores`;
CREATE TABLE IF NOT EXISTS `moradores` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `cpf` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nome` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `endereco` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=70 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `moradores`
--

INSERT INTO `moradores` (`id`, `cpf`, `nome`, `endereco`, `telefone`) VALUES
(64, '397.657.561-55', 'rCSdTMYHlE', 'iR9YRTQf93', '5828.5876'),
(63, '236.164.890-12', '24NmsRM0dc', 'tV2srnF29d', '3504.4087'),
(62, '363.509.923-56', '2IxHb5O5t8', 'YrmQgYQqXy', '8972.6867'),
(61, '516.202.108-21', '0yNkNaM13o', 'u8YNHLrIYT', '2237.9394'),
(60, '795.306.108-84', 'IWM9OHDxWL', 'rdzvXeuIYm', '9278.3419'),
(59, '672.332.272-16', 'KvFnRymkUP', 'rwL1WLO9lC', '3442.5087'),
(58, '953.103.981-85', 'mZQRsg8sE6', 'Y9Nwkqu8Qd', '3748.9361'),
(57, '480.317.530-93', 'CvnX8qd0YA', 'nWGhgTrf3g', '7586.1405'),
(56, '897.716.682-19', 'JDR2BsEqqn', 'xsqfG2Kg3c', '3919.9584'),
(55, '962.859.115-2', 'yjqawWBgA5', 'nf1YB9mnj2', '8013.6455'),
(54, '795.127.348-83', 'NV8y0Hgblg', 'cVYlKwyMSG', '4154.2340'),
(53, '962.360.333-10', 'JmU5aMxVB6', '7218NZyU1C', '6517.3719'),
(52, '742.655.352-26', 'R0iYgSQNdI', '0Exiy7IahJ', '7038.2862'),
(51, '100.368.691-85', '09onfLSjsz', 'ZQDX0RRwLl', '7698.8020'),
(50, '433.319.454-61', 'ZG17gHf8JQ', 'JeGBZWhPPI', '9413.4096'),
(49, '876.100.402-38', '8aKuwJuWku', 'F8jeIJN3AL', '4149.4400'),
(48, '224.517.570-72', '51wWMSUD7s', 'UB884txi8p', '9069.5352'),
(47, '282.314.992-41', 'KaA3ojvv0v', 'FhPGcupC6l', '1161.3998'),
(46, '185.613.159-67', 'EuWtVJzTW8', 'Sfk0ZKSQtt', '4122.9274'),
(45, '876.765.795-1', 'k52lRHBcm1', 'bDfgD4AsIz', '3667.2013'),
(44, '243.105.708-6', 'Vcum7oZAgq', 'OXUa9BeImz', '1237.6717'),
(43, '303.779.101-72', 'iiCGxbdMfj', 'IFjTPLMEUm', '2073.6243'),
(42, '619.441.669-79', 'eGFqy23w1l', '4YHWsrGJre', '9928.2533'),
(41, '483.585.314-88', 'OQQtE5HbO2', 'NyvIGYHhPM', '5004.9489'),
(40, '432.179.863-69', 'xCa7DDKkTo', 'MeNBcyaAbW', '2874.9363'),
(39, '248.675.719-19', 'gYy1uGDbe5', '0RlJaIcizQ', '8538.2526'),
(38, '346.286.438-59', 'yi0iK1U7tz', 'uTjGGoT5R5', '5001.1067'),
(37, '676.627.912-80', 'XmoQTPUtyQ', 'tUehC2ncPM', '5143.5060'),
(36, '194.355.490-19', 'Aq8AdofTHU', 'tBnDPoV288', '7440.1236'),
(35, '546.966.854-5', 'klmHHt8XMu', 'C4PKpdj7lp', '7108.2397'),
(65, '902.132.245-1', 'GjE8lZvy2G', 'VXjOAlhY53', '7676.2642'),
(66, '259.328.752-30', 'jGrSb65dMt', 'j3ZzeQLbRu', '1194.2218'),
(67, '104.790.123-88', 'XoPzPbgGNV', 'FBN9s35LEz', '9540.6327'),
(68, '784.825.986-29', 'NYnVDnmsUu', 'SNtJrYIJGl', '3512.7731'),
(69, '617.160.535-49', 'B7SHwr79Bo', 'tmE1M2AzyF', '3367.8551');

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pecas`
--

DROP TABLE IF EXISTS `pecas`;
CREATE TABLE IF NOT EXISTS `pecas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `peca` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `valor` double NOT NULL,
  `id_fornecedor` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_fornecedor` (`id_fornecedor`)
) ENGINE=MyISAM AUTO_INCREMENT=48 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `pecas`
--

INSERT INTO `pecas` (`id`, `peca`, `valor`, `id_fornecedor`) VALUES
(47, '65SBbQLy5Y', 4174, 35),
(46, '1i7KOc2aAh', 3000, 35),
(45, 'zzOXeudJvJ', 8390, 35),
(44, 'YZFyE048yO', 2215, 35),
(43, 'zKiuEWeLb9', 5262, 35),
(42, 'HmJFJipK9e', 5598, 35),
(41, 'finlCCKQYl', 753, 35),
(40, 'ruIZCYBHuc', 6178, 35),
(39, 'oLggQuQBVN', 7471, 35),
(38, 'HLNy6ipUxU', 697, 35),
(37, 'lTASXyGHFQ', 9221, 35),
(36, 'KfRKblYTvR', 1289, 35),
(35, '55Uh2zyTUT', 6968, 35),
(34, 'fPD9pORTJY', 4837, 35),
(33, 'mIwpP3DWQ5', 3738, 35),
(32, 'ALo4NIhE9E', 2194, 35),
(31, '36wCbiDr11', 3122, 35),
(30, 'S2lStIBvzb', 183, 35),
(29, 'odpeEmLVz1', 5650, 35),
(28, 'dHTwDIWn38', 6165, 35),
(27, '1E5FToVVnG', 3066, 35),
(26, 'Mtm7Am64l8', 8078, 35),
(25, 'im5VZYlWUq', 964, 35);

-- --------------------------------------------------------

--
-- Estrutura da tabela `torre`
--

DROP TABLE IF EXISTS `torre`;
CREATE TABLE IF NOT EXISTS `torre` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `Latitude` int(255) NOT NULL,
  `Longitude` int(255) NOT NULL,
  `Municipio` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_peca` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_id_peca` (`id_peca`)
) ENGINE=MyISAM AUTO_INCREMENT=47 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `torre`
--

INSERT INTO `torre` (`id`, `Latitude`, `Longitude`, `Municipio`, `id_peca`) VALUES
(46, 240, 863, 'IxYuvl9rYO', 243),
(45, 837, 793, 'uUMRSSdJiB', 504),
(44, 494, 777, 'e3rIbWaONL', 728),
(43, 194, 755, 'myCMrOe48r', 756),
(42, 899, 345, 'xYkNUmpU4S', 683),
(41, 971, 217, 'FKRW8FAoQ9', 159),
(40, 356, 360, 'YnQ8vkT9FQ', 787),
(39, 772, 165, 'mqobXEfx2H', 927),
(38, 650, 932, 'bCwcW7cTwo', 436),
(37, 506, 555, 'Ybm2PsCuZW', 118),
(36, 365, 246, 'YqYc71FKjX', 896),
(35, 515, 802, 'yEVppWK0Z7', 982),
(34, 333, 870, 'c79eX85vJL', 302),
(33, 540, 870, 'cK1Je2yiKV', 932),
(32, 508, 681, 'brAuSEn09o', 310),
(31, 278, 165, 'gybgXuImXI', 681),
(30, 135, 914, 'o0rPmwCgAC', 483),
(29, 236, 366, '9mCbJtgHdY', 147),
(28, 440, 623, 'NLx0gBr0UZ', 552),
(27, 527, 340, '4ehooqEthl', 444),
(26, 402, 793, 'JZJjEd3ZIb', 905),
(25, 993, 766, 'mf7GV3rxLB', 491),
(24, 103, 307, 'fcU8iIkQLB', 356);

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Augusto Cesar Berger Barbosa', 'augustocberger@gmail.com', NULL, '$2y$10$WQGYSZ0sHMVOcEyk6WcrxOEjfqEnd.IS/qRzpv10jREOZci7QqIs2', NULL, '2019-11-25 21:18:13', '2019-11-25 21:18:13');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
