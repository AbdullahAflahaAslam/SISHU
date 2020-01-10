-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Okt 2019 pada 06.08
-- Versi server: 10.1.36-MariaDB
-- Versi PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sishu`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `country`
--

CREATE TABLE `country` (
  `id` int(11) NOT NULL,
  `iso` char(2) NOT NULL,
  `name` varchar(80) NOT NULL,
  `nicename` varchar(80) NOT NULL,
  `iso3` char(3) DEFAULT NULL,
  `numcode` smallint(6) DEFAULT NULL,
  `phonecode` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `country`
--

INSERT INTO `country` (`id`, `iso`, `name`, `nicename`, `iso3`, `numcode`, `phonecode`) VALUES
(1, 'AF', 'AFGHANISTAN', 'Afghanistan', 'AFG', 4, 93),
(2, 'AL', 'ALBANIA', 'Albania', 'ALB', 8, 355),
(3, 'DZ', 'ALGERIA', 'Algeria', 'DZA', 12, 213),
(4, 'AS', 'AMERICAN SAMOA', 'American Samoa', 'ASM', 16, 1684),
(5, 'AD', 'ANDORRA', 'Andorra', 'AND', 20, 376),
(6, 'AO', 'ANGOLA', 'Angola', 'AGO', 24, 244),
(7, 'AI', 'ANGUILLA', 'Anguilla', 'AIA', 660, 1264),
(8, 'AQ', 'ANTARCTICA', 'Antarctica', NULL, NULL, 0),
(9, 'AG', 'ANTIGUA AND BARBUDA', 'Antigua and Barbuda', 'ATG', 28, 1268),
(10, 'AR', 'ARGENTINA', 'Argentina', 'ARG', 32, 54),
(11, 'AM', 'ARMENIA', 'Armenia', 'ARM', 51, 374),
(12, 'AW', 'ARUBA', 'Aruba', 'ABW', 533, 297),
(13, 'AU', 'AUSTRALIA', 'Australia', 'AUS', 36, 61),
(14, 'AT', 'AUSTRIA', 'Austria', 'AUT', 40, 43),
(15, 'AZ', 'AZERBAIJAN', 'Azerbaijan', 'AZE', 31, 994),
(16, 'BS', 'BAHAMAS', 'Bahamas', 'BHS', 44, 1242),
(17, 'BH', 'BAHRAIN', 'Bahrain', 'BHR', 48, 973),
(18, 'BD', 'BANGLADESH', 'Bangladesh', 'BGD', 50, 880),
(19, 'BB', 'BARBADOS', 'Barbados', 'BRB', 52, 1246),
(20, 'BY', 'BELARUS', 'Belarus', 'BLR', 112, 375),
(21, 'BE', 'BELGIUM', 'Belgium', 'BEL', 56, 32),
(22, 'BZ', 'BELIZE', 'Belize', 'BLZ', 84, 501),
(23, 'BJ', 'BENIN', 'Benin', 'BEN', 204, 229),
(24, 'BM', 'BERMUDA', 'Bermuda', 'BMU', 60, 1441),
(25, 'BT', 'BHUTAN', 'Bhutan', 'BTN', 64, 975),
(26, 'BO', 'BOLIVIA', 'Bolivia', 'BOL', 68, 591),
(27, 'BA', 'BOSNIA AND HERZEGOVINA', 'Bosnia and Herzegovina', 'BIH', 70, 387),
(28, 'BW', 'BOTSWANA', 'Botswana', 'BWA', 72, 267),
(29, 'BV', 'BOUVET ISLAND', 'Bouvet Island', NULL, NULL, 0),
(30, 'BR', 'BRAZIL', 'Brazil', 'BRA', 76, 55),
(31, 'IO', 'BRITISH INDIAN OCEAN TERRITORY', 'British Indian Ocean Territory', NULL, NULL, 246),
(32, 'BN', 'BRUNEI DARUSSALAM', 'Brunei Darussalam', 'BRN', 96, 673),
(33, 'BG', 'BULGARIA', 'Bulgaria', 'BGR', 100, 359),
(34, 'BF', 'BURKINA FASO', 'Burkina Faso', 'BFA', 854, 226),
(35, 'BI', 'BURUNDI', 'Burundi', 'BDI', 108, 257),
(36, 'KH', 'CAMBODIA', 'Cambodia', 'KHM', 116, 855),
(37, 'CM', 'CAMEROON', 'Cameroon', 'CMR', 120, 237),
(38, 'CA', 'CANADA', 'Canada', 'CAN', 124, 1),
(39, 'CV', 'CAPE VERDE', 'Cape Verde', 'CPV', 132, 238),
(40, 'KY', 'CAYMAN ISLANDS', 'Cayman Islands', 'CYM', 136, 1345),
(41, 'CF', 'CENTRAL AFRICAN REPUBLIC', 'Central African Republic', 'CAF', 140, 236),
(42, 'TD', 'CHAD', 'Chad', 'TCD', 148, 235),
(43, 'CL', 'CHILE', 'Chile', 'CHL', 152, 56),
(44, 'CN', 'CHINA', 'China', 'CHN', 156, 86),
(45, 'CX', 'CHRISTMAS ISLAND', 'Christmas Island', NULL, NULL, 61),
(46, 'CC', 'COCOS (KEELING) ISLANDS', 'Cocos (Keeling) Islands', NULL, NULL, 672),
(47, 'CO', 'COLOMBIA', 'Colombia', 'COL', 170, 57),
(48, 'KM', 'COMOROS', 'Comoros', 'COM', 174, 269),
(49, 'CG', 'CONGO', 'Congo', 'COG', 178, 242),
(50, 'CD', 'CONGO, THE DEMOCRATIC REPUBLIC OF THE', 'Congo, the Democratic Republic of the', 'COD', 180, 242),
(51, 'CK', 'COOK ISLANDS', 'Cook Islands', 'COK', 184, 682),
(52, 'CR', 'COSTA RICA', 'Costa Rica', 'CRI', 188, 506),
(53, 'CI', 'COTE D\'IVOIRE', 'Cote D\'Ivoire', 'CIV', 384, 225),
(54, 'HR', 'CROATIA', 'Croatia', 'HRV', 191, 385),
(55, 'CU', 'CUBA', 'Cuba', 'CUB', 192, 53),
(56, 'CY', 'CYPRUS', 'Cyprus', 'CYP', 196, 357),
(57, 'CZ', 'CZECH REPUBLIC', 'Czech Republic', 'CZE', 203, 420),
(58, 'DK', 'DENMARK', 'Denmark', 'DNK', 208, 45),
(59, 'DJ', 'DJIBOUTI', 'Djibouti', 'DJI', 262, 253),
(60, 'DM', 'DOMINICA', 'Dominica', 'DMA', 212, 1767),
(61, 'DO', 'DOMINICAN REPUBLIC', 'Dominican Republic', 'DOM', 214, 1809),
(62, 'EC', 'ECUADOR', 'Ecuador', 'ECU', 218, 593),
(63, 'EG', 'EGYPT', 'Egypt', 'EGY', 818, 20),
(64, 'SV', 'EL SALVADOR', 'El Salvador', 'SLV', 222, 503),
(65, 'GQ', 'EQUATORIAL GUINEA', 'Equatorial Guinea', 'GNQ', 226, 240),
(66, 'ER', 'ERITREA', 'Eritrea', 'ERI', 232, 291),
(67, 'EE', 'ESTONIA', 'Estonia', 'EST', 233, 372),
(68, 'ET', 'ETHIOPIA', 'Ethiopia', 'ETH', 231, 251),
(69, 'FK', 'FALKLAND ISLANDS (MALVINAS)', 'Falkland Islands (Malvinas)', 'FLK', 238, 500),
(70, 'FO', 'FAROE ISLANDS', 'Faroe Islands', 'FRO', 234, 298),
(71, 'FJ', 'FIJI', 'Fiji', 'FJI', 242, 679),
(72, 'FI', 'FINLAND', 'Finland', 'FIN', 246, 358),
(73, 'FR', 'FRANCE', 'France', 'FRA', 250, 33),
(74, 'GF', 'FRENCH GUIANA', 'French Guiana', 'GUF', 254, 594),
(75, 'PF', 'FRENCH POLYNESIA', 'French Polynesia', 'PYF', 258, 689),
(76, 'TF', 'FRENCH SOUTHERN TERRITORIES', 'French Southern Territories', NULL, NULL, 0),
(77, 'GA', 'GABON', 'Gabon', 'GAB', 266, 241),
(78, 'GM', 'GAMBIA', 'Gambia', 'GMB', 270, 220),
(79, 'GE', 'GEORGIA', 'Georgia', 'GEO', 268, 995),
(80, 'DE', 'GERMANY', 'Germany', 'DEU', 276, 49),
(81, 'GH', 'GHANA', 'Ghana', 'GHA', 288, 233),
(82, 'GI', 'GIBRALTAR', 'Gibraltar', 'GIB', 292, 350),
(83, 'GR', 'GREECE', 'Greece', 'GRC', 300, 30),
(84, 'GL', 'GREENLAND', 'Greenland', 'GRL', 304, 299),
(85, 'GD', 'GRENADA', 'Grenada', 'GRD', 308, 1473),
(86, 'GP', 'GUADELOUPE', 'Guadeloupe', 'GLP', 312, 590),
(87, 'GU', 'GUAM', 'Guam', 'GUM', 316, 1671),
(88, 'GT', 'GUATEMALA', 'Guatemala', 'GTM', 320, 502),
(89, 'GN', 'GUINEA', 'Guinea', 'GIN', 324, 224),
(90, 'GW', 'GUINEA-BISSAU', 'Guinea-Bissau', 'GNB', 624, 245),
(91, 'GY', 'GUYANA', 'Guyana', 'GUY', 328, 592),
(92, 'HT', 'HAITI', 'Haiti', 'HTI', 332, 509),
(93, 'HM', 'HEARD ISLAND AND MCDONALD ISLANDS', 'Heard Island and Mcdonald Islands', NULL, NULL, 0),
(94, 'VA', 'HOLY SEE (VATICAN CITY STATE)', 'Holy See (Vatican City State)', 'VAT', 336, 39),
(95, 'HN', 'HONDURAS', 'Honduras', 'HND', 340, 504),
(96, 'HK', 'HONG KONG', 'Hong Kong', 'HKG', 344, 852),
(97, 'HU', 'HUNGARY', 'Hungary', 'HUN', 348, 36),
(98, 'IS', 'ICELAND', 'Iceland', 'ISL', 352, 354),
(99, 'IN', 'INDIA', 'India', 'IND', 356, 91),
(100, 'ID', 'INDONESIA', 'Indonesia', 'IDN', 360, 62),
(101, 'IR', 'IRAN, ISLAMIC REPUBLIC OF', 'Iran, Islamic Republic of', 'IRN', 364, 98),
(102, 'IQ', 'IRAQ', 'Iraq', 'IRQ', 368, 964),
(103, 'IE', 'IRELAND', 'Ireland', 'IRL', 372, 353),
(104, 'IL', 'ISRAEL', 'Israel', 'ISR', 376, 972),
(105, 'IT', 'ITALY', 'Italy', 'ITA', 380, 39),
(106, 'JM', 'JAMAICA', 'Jamaica', 'JAM', 388, 1876),
(107, 'JP', 'JAPAN', 'Japan', 'JPN', 392, 81),
(108, 'JO', 'JORDAN', 'Jordan', 'JOR', 400, 962),
(109, 'KZ', 'KAZAKHSTAN', 'Kazakhstan', 'KAZ', 398, 7),
(110, 'KE', 'KENYA', 'Kenya', 'KEN', 404, 254),
(111, 'KI', 'KIRIBATI', 'Kiribati', 'KIR', 296, 686),
(112, 'KP', 'KOREA, DEMOCRATIC PEOPLE\'S REPUBLIC OF', 'Korea, Democratic People\'s Republic of', 'PRK', 408, 850),
(113, 'KR', 'KOREA, REPUBLIC OF', 'Korea, Republic of', 'KOR', 410, 82),
(114, 'KW', 'KUWAIT', 'Kuwait', 'KWT', 414, 965),
(115, 'KG', 'KYRGYZSTAN', 'Kyrgyzstan', 'KGZ', 417, 996),
(116, 'LA', 'LAO PEOPLE\'S DEMOCRATIC REPUBLIC', 'Lao People\'s Democratic Republic', 'LAO', 418, 856),
(117, 'LV', 'LATVIA', 'Latvia', 'LVA', 428, 371),
(118, 'LB', 'LEBANON', 'Lebanon', 'LBN', 422, 961),
(119, 'LS', 'LESOTHO', 'Lesotho', 'LSO', 426, 266),
(120, 'LR', 'LIBERIA', 'Liberia', 'LBR', 430, 231),
(121, 'LY', 'LIBYAN ARAB JAMAHIRIYA', 'Libyan Arab Jamahiriya', 'LBY', 434, 218),
(122, 'LI', 'LIECHTENSTEIN', 'Liechtenstein', 'LIE', 438, 423),
(123, 'LT', 'LITHUANIA', 'Lithuania', 'LTU', 440, 370),
(124, 'LU', 'LUXEMBOURG', 'Luxembourg', 'LUX', 442, 352),
(125, 'MO', 'MACAO', 'Macao', 'MAC', 446, 853),
(126, 'MK', 'MACEDONIA, THE FORMER YUGOSLAV REPUBLIC OF', 'Macedonia, the Former Yugoslav Republic of', 'MKD', 807, 389),
(127, 'MG', 'MADAGASCAR', 'Madagascar', 'MDG', 450, 261),
(128, 'MW', 'MALAWI', 'Malawi', 'MWI', 454, 265),
(129, 'MY', 'MALAYSIA', 'Malaysia', 'MYS', 458, 60),
(130, 'MV', 'MALDIVES', 'Maldives', 'MDV', 462, 960),
(131, 'ML', 'MALI', 'Mali', 'MLI', 466, 223),
(132, 'MT', 'MALTA', 'Malta', 'MLT', 470, 356),
(133, 'MH', 'MARSHALL ISLANDS', 'Marshall Islands', 'MHL', 584, 692),
(134, 'MQ', 'MARTINIQUE', 'Martinique', 'MTQ', 474, 596),
(135, 'MR', 'MAURITANIA', 'Mauritania', 'MRT', 478, 222),
(136, 'MU', 'MAURITIUS', 'Mauritius', 'MUS', 480, 230),
(137, 'YT', 'MAYOTTE', 'Mayotte', NULL, NULL, 269),
(138, 'MX', 'MEXICO', 'Mexico', 'MEX', 484, 52),
(139, 'FM', 'MICRONESIA, FEDERATED STATES OF', 'Micronesia, Federated States of', 'FSM', 583, 691),
(140, 'MD', 'MOLDOVA, REPUBLIC OF', 'Moldova, Republic of', 'MDA', 498, 373),
(141, 'MC', 'MONACO', 'Monaco', 'MCO', 492, 377),
(142, 'MN', 'MONGOLIA', 'Mongolia', 'MNG', 496, 976),
(143, 'MS', 'MONTSERRAT', 'Montserrat', 'MSR', 500, 1664),
(144, 'MA', 'MOROCCO', 'Morocco', 'MAR', 504, 212),
(145, 'MZ', 'MOZAMBIQUE', 'Mozambique', 'MOZ', 508, 258),
(146, 'MM', 'MYANMAR', 'Myanmar', 'MMR', 104, 95),
(147, 'NA', 'NAMIBIA', 'Namibia', 'NAM', 516, 264),
(148, 'NR', 'NAURU', 'Nauru', 'NRU', 520, 674),
(149, 'NP', 'NEPAL', 'Nepal', 'NPL', 524, 977),
(150, 'NL', 'NETHERLANDS', 'Netherlands', 'NLD', 528, 31),
(151, 'AN', 'NETHERLANDS ANTILLES', 'Netherlands Antilles', 'ANT', 530, 599),
(152, 'NC', 'NEW CALEDONIA', 'New Caledonia', 'NCL', 540, 687),
(153, 'NZ', 'NEW ZEALAND', 'New Zealand', 'NZL', 554, 64),
(154, 'NI', 'NICARAGUA', 'Nicaragua', 'NIC', 558, 505),
(155, 'NE', 'NIGER', 'Niger', 'NER', 562, 227),
(156, 'NG', 'NIGERIA', 'Nigeria', 'NGA', 566, 234),
(157, 'NU', 'NIUE', 'Niue', 'NIU', 570, 683),
(158, 'NF', 'NORFOLK ISLAND', 'Norfolk Island', 'NFK', 574, 672),
(159, 'MP', 'NORTHERN MARIANA ISLANDS', 'Northern Mariana Islands', 'MNP', 580, 1670),
(160, 'NO', 'NORWAY', 'Norway', 'NOR', 578, 47),
(161, 'OM', 'OMAN', 'Oman', 'OMN', 512, 968),
(162, 'PK', 'PAKISTAN', 'Pakistan', 'PAK', 586, 92),
(163, 'PW', 'PALAU', 'Palau', 'PLW', 585, 680),
(164, 'PS', 'PALESTINIAN TERRITORY, OCCUPIED', 'Palestinian Territory, Occupied', NULL, NULL, 970),
(165, 'PA', 'PANAMA', 'Panama', 'PAN', 591, 507),
(166, 'PG', 'PAPUA NEW GUINEA', 'Papua New Guinea', 'PNG', 598, 675),
(167, 'PY', 'PARAGUAY', 'Paraguay', 'PRY', 600, 595),
(168, 'PE', 'PERU', 'Peru', 'PER', 604, 51),
(169, 'PH', 'PHILIPPINES', 'Philippines', 'PHL', 608, 63),
(170, 'PN', 'PITCAIRN', 'Pitcairn', 'PCN', 612, 0),
(171, 'PL', 'POLAND', 'Poland', 'POL', 616, 48),
(172, 'PT', 'PORTUGAL', 'Portugal', 'PRT', 620, 351),
(173, 'PR', 'PUERTO RICO', 'Puerto Rico', 'PRI', 630, 1787),
(174, 'QA', 'QATAR', 'Qatar', 'QAT', 634, 974),
(175, 'RE', 'REUNION', 'Reunion', 'REU', 638, 262),
(176, 'RO', 'ROMANIA', 'Romania', 'ROM', 642, 40),
(177, 'RU', 'RUSSIAN FEDERATION', 'Russian Federation', 'RUS', 643, 70),
(178, 'RW', 'RWANDA', 'Rwanda', 'RWA', 646, 250),
(179, 'SH', 'SAINT HELENA', 'Saint Helena', 'SHN', 654, 290),
(180, 'KN', 'SAINT KITTS AND NEVIS', 'Saint Kitts and Nevis', 'KNA', 659, 1869),
(181, 'LC', 'SAINT LUCIA', 'Saint Lucia', 'LCA', 662, 1758),
(182, 'PM', 'SAINT PIERRE AND MIQUELON', 'Saint Pierre and Miquelon', 'SPM', 666, 508),
(183, 'VC', 'SAINT VINCENT AND THE GRENADINES', 'Saint Vincent and the Grenadines', 'VCT', 670, 1784),
(184, 'WS', 'SAMOA', 'Samoa', 'WSM', 882, 684),
(185, 'SM', 'SAN MARINO', 'San Marino', 'SMR', 674, 378),
(186, 'ST', 'SAO TOME AND PRINCIPE', 'Sao Tome and Principe', 'STP', 678, 239),
(187, 'SA', 'SAUDI ARABIA', 'Saudi Arabia', 'SAU', 682, 966),
(188, 'SN', 'SENEGAL', 'Senegal', 'SEN', 686, 221),
(189, 'CS', 'SERBIA AND MONTENEGRO', 'Serbia and Montenegro', NULL, NULL, 381),
(190, 'SC', 'SEYCHELLES', 'Seychelles', 'SYC', 690, 248),
(191, 'SL', 'SIERRA LEONE', 'Sierra Leone', 'SLE', 694, 232),
(192, 'SG', 'SINGAPORE', 'Singapore', 'SGP', 702, 65),
(193, 'SK', 'SLOVAKIA', 'Slovakia', 'SVK', 703, 421),
(194, 'SI', 'SLOVENIA', 'Slovenia', 'SVN', 705, 386),
(195, 'SB', 'SOLOMON ISLANDS', 'Solomon Islands', 'SLB', 90, 677),
(196, 'SO', 'SOMALIA', 'Somalia', 'SOM', 706, 252),
(197, 'ZA', 'SOUTH AFRICA', 'South Africa', 'ZAF', 710, 27),
(198, 'GS', 'SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS', 'South Georgia and the South Sandwich Islands', NULL, NULL, 0),
(199, 'ES', 'SPAIN', 'Spain', 'ESP', 724, 34),
(200, 'LK', 'SRI LANKA', 'Sri Lanka', 'LKA', 144, 94),
(201, 'SD', 'SUDAN', 'Sudan', 'SDN', 736, 249),
(202, 'SR', 'SURINAME', 'Suriname', 'SUR', 740, 597),
(203, 'SJ', 'SVALBARD AND JAN MAYEN', 'Svalbard and Jan Mayen', 'SJM', 744, 47),
(204, 'SZ', 'SWAZILAND', 'Swaziland', 'SWZ', 748, 268),
(205, 'SE', 'SWEDEN', 'Sweden', 'SWE', 752, 46),
(206, 'CH', 'SWITZERLAND', 'Switzerland', 'CHE', 756, 41),
(207, 'SY', 'SYRIAN ARAB REPUBLIC', 'Syrian Arab Republic', 'SYR', 760, 963),
(208, 'TW', 'TAIWAN, PROVINCE OF CHINA', 'Taiwan, Province of China', 'TWN', 158, 886),
(209, 'TJ', 'TAJIKISTAN', 'Tajikistan', 'TJK', 762, 992),
(210, 'TZ', 'TANZANIA, UNITED REPUBLIC OF', 'Tanzania, United Republic of', 'TZA', 834, 255),
(211, 'TH', 'THAILAND', 'Thailand', 'THA', 764, 66),
(212, 'TL', 'TIMOR-LESTE', 'Timor-Leste', NULL, NULL, 670),
(213, 'TG', 'TOGO', 'Togo', 'TGO', 768, 228),
(214, 'TK', 'TOKELAU', 'Tokelau', 'TKL', 772, 690),
(215, 'TO', 'TONGA', 'Tonga', 'TON', 776, 676),
(216, 'TT', 'TRINIDAD AND TOBAGO', 'Trinidad and Tobago', 'TTO', 780, 1868),
(217, 'TN', 'TUNISIA', 'Tunisia', 'TUN', 788, 216),
(218, 'TR', 'TURKEY', 'Turkey', 'TUR', 792, 90),
(219, 'TM', 'TURKMENISTAN', 'Turkmenistan', 'TKM', 795, 7370),
(220, 'TC', 'TURKS AND CAICOS ISLANDS', 'Turks and Caicos Islands', 'TCA', 796, 1649),
(221, 'TV', 'TUVALU', 'Tuvalu', 'TUV', 798, 688),
(222, 'UG', 'UGANDA', 'Uganda', 'UGA', 800, 256),
(223, 'UA', 'UKRAINE', 'Ukraine', 'UKR', 804, 380),
(224, 'AE', 'UNITED ARAB EMIRATES', 'United Arab Emirates', 'ARE', 784, 971),
(225, 'GB', 'UNITED KINGDOM', 'United Kingdom', 'GBR', 826, 44),
(226, 'US', 'UNITED STATES', 'United States', 'USA', 840, 1),
(227, 'UM', 'UNITED STATES MINOR OUTLYING ISLANDS', 'United States Minor Outlying Islands', NULL, NULL, 1),
(228, 'UY', 'URUGUAY', 'Uruguay', 'URY', 858, 598),
(229, 'UZ', 'UZBEKISTAN', 'Uzbekistan', 'UZB', 860, 998),
(230, 'VU', 'VANUATU', 'Vanuatu', 'VUT', 548, 678),
(231, 'VE', 'VENEZUELA', 'Venezuela', 'VEN', 862, 58),
(232, 'VN', 'VIET NAM', 'Viet Nam', 'VNM', 704, 84),
(233, 'VG', 'VIRGIN ISLANDS, BRITISH', 'Virgin Islands, British', 'VGB', 92, 1284),
(234, 'VI', 'VIRGIN ISLANDS, U.S.', 'Virgin Islands, U.s.', 'VIR', 850, 1340),
(235, 'WF', 'WALLIS AND FUTUNA', 'Wallis and Futuna', 'WLF', 876, 681),
(236, 'EH', 'WESTERN SAHARA', 'Western Sahara', 'ESH', 732, 212),
(237, 'YE', 'YEMEN', 'Yemen', 'YEM', 887, 967),
(238, 'ZM', 'ZAMBIA', 'Zambia', 'ZMB', 894, 260),
(239, 'ZW', 'ZIMBABWE', 'Zimbabwe', 'ZWE', 716, 263);

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_jadwal`
--

CREATE TABLE `t_jadwal` (
  `id_jadwal` int(11) NOT NULL,
  `id_materi` int(11) NOT NULL,
  `id_lokasi` int(11) NOT NULL,
  `id_user` int(11) NOT NULL COMMENT 'user_pengajar',
  `id_admin` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_jadwal`
--

INSERT INTO `t_jadwal` (`id_jadwal`, `id_materi`, `id_lokasi`, `id_user`, `id_admin`, `tanggal`, `jam`, `keterangan`) VALUES
(2, 5, 2, 39, 5, '2019-10-18', '12:12:00', 'Materi ke 2 ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_kategori`
--

CREATE TABLE `t_kategori` (
  `id_kategori` int(11) NOT NULL,
  `Kategori` varchar(100) NOT NULL,
  `keterangan` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_kategori`
--

INSERT INTO `t_kategori` (`id_kategori`, `Kategori`, `keterangan`) VALUES
(1, '  Kelas Haji & Umrah', '  Kelas Haji Umrah '),
(2, 'Kelas Sholat', 'Ini Kategori Materi 2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_konfirmasi`
--

CREATE TABLE `t_konfirmasi` (
  `id_konfirmasi` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_jadwal` int(11) NOT NULL,
  `id_materi` int(11) NOT NULL,
  `absensi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_konfirmasi`
--

INSERT INTO `t_konfirmasi` (`id_konfirmasi`, `id_user`, `id_jadwal`, `id_materi`, `absensi`) VALUES
(3, 19, 2, 5, 0),
(4, 41, 2, 5, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_log`
--

CREATE TABLE `t_log` (
  `id_log` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `keterangan` varchar(300) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_log`
--

INSERT INTO `t_log` (`id_log`, `id_user`, `keterangan`, `tanggal`) VALUES
(3, 5, 'Merubah Password', '2019-08-19'),
(4, 5, 'Merubah Data Akun', '2019-08-19'),
(5, 5, 'Merubah Data Akun', '2019-08-19'),
(6, 5, 'Merubah Password', '2019-08-19'),
(7, 5, 'Merubah Data Akun', '2019-08-19'),
(8, 5, 'Merubah Data Akun', '2019-08-19'),
(9, 5, 'Merubah Password', '2019-08-19'),
(10, 19, 'Merubah Password', '2019-08-20'),
(11, 19, 'Merubah Data Akun', '2019-08-20'),
(12, 19, 'Merubah Data Profil', '2019-09-10'),
(13, 19, 'Update Daya Kelengkapan Haji', '2019-09-19'),
(14, 19, 'Update Data Kelengkapan Haji', '2019-09-23'),
(15, 5, 'Merubah Data Peserta', '2019-09-25'),
(16, 5, 'Menambah Data Pengajar', '2019-09-25'),
(17, 5, 'Merubah Data Peserta', '2019-09-25'),
(18, 5, '5', '2019-09-25'),
(19, 5, 'Menambah Jadwal ', '2019-09-25'),
(20, 5, 'Menambah Data Admin', '2019-09-25'),
(21, 5, 'Merubah Data Admin', '2019-09-25'),
(22, 5, 'Menghapus Data Admin dengan ID user28', '2019-09-25'),
(23, 5, 'Menambah Data Admin', '2019-09-29'),
(24, 5, 'Menghapus Data Admin dengan ID user28', '2019-09-29'),
(25, 5, 'Menambah Data Admin', '2019-09-29'),
(26, 5, 'Menghapus Data Admin dengan ID user29', '2019-09-29'),
(27, 5, 'Menambah Data Admin', '2019-09-29'),
(28, 5, 'Menghapus Data Admin dengan ID user30', '2019-09-29'),
(29, 5, 'Menambah Data Admin', '2019-09-29'),
(30, 5, 'Menghapus Data Admin dengan ID user31', '2019-09-29'),
(31, 5, 'Menambah Data Admin', '2019-09-29'),
(32, 5, 'Menghapus Data Admin dengan ID user32', '2019-09-29'),
(33, 5, 'Menambah Data Admin', '2019-09-29'),
(34, 5, 'Menghapus Data Admin dengan ID user33', '2019-09-29'),
(35, 5, 'Menambah Data Admin', '2019-09-29'),
(36, 19, 'Merubah Data Profil', '2019-09-30'),
(37, 19, 'Merubah Data Profil', '2019-09-30'),
(38, 19, 'Konfirmasi Jadwal 3 dengan Materi Materi 2 pada tanggal 	2019-10-25', '2019-09-30'),
(39, 19, 'Cancel Konfirmasi Jadwal 3 dengan Materi  pada tanggal 	', '2019-09-30'),
(40, 5, 'Menghapus Data Admin dengan ID user34', '2019-09-30'),
(41, 5, 'Menghapus Data Peserta dengan ID user26', '2019-09-30'),
(42, 5, 'Delete Kelas ', '2019-09-30'),
(43, 5, 'Menambah Kelas ', '2019-09-30'),
(44, 5, 'Menambah Materi ', '2019-09-30'),
(45, 5, 'Merubah Data Akun', '2019-09-30'),
(46, 5, 'Merubah Data Akun', '2019-09-30'),
(47, 5, 'Merubah Data Akun', '2019-09-30'),
(48, 5, 'Merubah Data Akun', '2019-09-30'),
(49, 5, 'Merubah Password', '2019-09-30'),
(50, 5, 'Merubah Password', '2019-09-30'),
(51, 5, 'Menambah Data Admin', '2019-09-30'),
(52, 5, 'Merubah Data Admin', '2019-09-30'),
(53, 5, 'Merubah Data Admin', '2019-09-30'),
(54, 5, 'Merubah Data Admin', '2019-09-30'),
(55, 5, 'Merubah Data Admin', '2019-09-30'),
(56, 5, 'Merubah Data Admin', '2019-09-30'),
(57, 5, 'Merubah Data Admin', '2019-09-30'),
(58, 5, 'Merubah Data Admin', '2019-09-30'),
(59, 5, 'Merubah Data Admin', '2019-09-30'),
(60, 5, 'Menambah Data Admin', '2019-09-30'),
(61, 5, 'Menghapus Data Admin dengan ID user36', '2019-09-30'),
(62, 5, 'Menambah Data Peserta', '2019-09-30'),
(63, 5, 'Merubah Data Peserta', '2019-09-30'),
(64, 5, 'Merubah Data Peserta', '2019-09-30'),
(65, 5, 'Merubah Data Peserta', '2019-09-30'),
(66, 5, 'Merubah Data Peserta', '2019-09-30'),
(67, 5, 'Menambah Data Peserta', '2019-09-30'),
(68, 5, 'Menghapus Data Peserta dengan ID user38', '2019-09-30'),
(69, 5, 'Edit Data Pengajar dengan  ID Pengajar 25', '2019-09-30'),
(70, 5, 'Edit Data Pengajar dengan  ID Pengajar 25', '2019-09-30'),
(71, 5, 'Menambah Data Pengajar', '2019-09-30'),
(72, 5, 'Edit Data Pengajar dengan  ID Pengajar 39', '2019-09-30'),
(73, 5, 'Edit Data Pengajar dengan  ID Pengajar 39', '2019-09-30'),
(74, 5, 'Menambah Data Pengajar', '2019-09-30'),
(75, 5, 'Menambah Jadwal ', '2019-09-30'),
(76, 5, 'Hapus Data Pengajar dengan ID Pengajar 40', '2019-09-30'),
(77, 5, 'Menambah Materi ', '2019-09-30'),
(78, 5, 'Merubah Data Kelas Kelas ', '2019-09-30'),
(79, 5, 'Merubah Data Kelas Kelas ', '2019-09-30'),
(80, 5, 'Merubah Materi ', '2019-09-30'),
(81, 5, 'Merubah Materi ', '2019-09-30'),
(82, 5, 'Merubah Materi ', '2019-09-30'),
(83, 5, 'Merubah Materi ', '2019-09-30'),
(84, 5, 'Menambah Kelas ', '2019-09-30'),
(85, 5, 'Menambah Materi ', '2019-09-30'),
(86, 5, 'Menambah Materi ', '2019-09-30'),
(87, 5, 'Delete Kelas ', '2019-09-30'),
(88, 5, 'Menambah Jadwal ', '2019-09-30'),
(89, 20, 'Merubah Materi ', '2019-09-30'),
(90, 19, 'Cancel Konfirmasi Jadwal 2 dengan Materi  pada tanggal 	', '2019-09-30'),
(91, 19, 'Konfirmasi Jadwal 2 dengan Materi Materi dari Kategori  pada tanggal 	2019-10-18', '2019-09-30'),
(92, 5, 'Menambah Data Peserta', '2019-09-30'),
(93, 5, 'Menambah Data Peserta', '2019-09-30'),
(94, 5, 'Menambah Data Peserta', '2019-09-30'),
(95, 5, 'Menambah Data Peserta', '2019-09-30'),
(96, 5, 'Menambah Data Peserta', '2019-09-30'),
(97, 5, 'Menambah Data Peserta', '2019-09-30'),
(98, 5, 'Menambah Data Peserta', '2019-09-30'),
(99, 5, 'Menambah Data Peserta', '2019-09-30'),
(100, 5, 'Menambah Data Peserta', '2019-09-30'),
(101, 5, 'Menambah Data Peserta', '2019-09-30'),
(102, 5, 'Menambah Data Peserta', '2019-09-30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_lokasi`
--

CREATE TABLE `t_lokasi` (
  `id_lokasi` int(11) NOT NULL,
  `add_line` text NOT NULL,
  `City` varchar(100) NOT NULL,
  `province` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_lokasi`
--

INSERT INTO `t_lokasi` (`id_lokasi`, `add_line`, `City`, `province`) VALUES
(1, 'jl.kencur 1a grogol', 'sukoharjo', 'jawa tengah'),
(2, 'jl.patimura', 'Yogyakarta', 'Jawa Tengah'),
(3, ' Jl. ku sama kamu aja     Yoink', 'Ciamis', 'Jawa Tengah'),
(5, ' Jalan Jambu no 5A Lodalang Siswodipuran ', 'Boyolali', 'Jawa Tengah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_materi`
--

CREATE TABLE `t_materi` (
  `id_materi` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `nama_materi` varchar(100) NOT NULL,
  `file_materi` varchar(200) NOT NULL,
  `Keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_materi`
--

INSERT INTO `t_materi` (`id_materi`, `id_kategori`, `nama_materi`, `file_materi`, `Keterangan`) VALUES
(5, 2, 'Materi dari Kategori ', '', 'Ini materi dari kategori 2'),
(20, 1, 'Haji dan Umrah, wasilah yang dahsyat', '20.docx', ' Haji dan Umrah, wasilah yang dahsyat'),
(21, 1, 'Niat dan Motivasi Umrah', '21.docx', 'Diniatkan berangkat Umrah dimulai dari nol');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_mengampu`
--

CREATE TABLE `t_mengampu` (
  `id_user` int(11) NOT NULL,
  `id_materi` int(11) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_notifikasi`
--

CREATE TABLE `t_notifikasi` (
  `id_notifikasi` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_notifikasi`
--

INSERT INTO `t_notifikasi` (`id_notifikasi`, `judul`, `jenis`, `keterangan`) VALUES
(1, 'Pengumuman 1', 'Temu Alumni', 'Detail Kegiatan Tgl Jam tempat'),
(2, 'Pengumuman 2', 'Manasik', 'Detail Kegiatan Tgl Jam tempat'),
(3, 'Coba Bikin Pengumuman 2', 'Haji', 'Harap pada segera mengumpulkan data berkas ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_privilege`
--

CREATE TABLE `t_privilege` (
  `id_privilege` int(11) NOT NULL,
  `privilege` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_privilege`
--

INSERT INTO `t_privilege` (`id_privilege`, `privilege`) VALUES
(1, 'user'),
(2, 'pengangajar'),
(3, 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `FName` varchar(50) NOT NULL,
  `MName` varchar(100) DEFAULT ' ',
  `LName` varchar(100) NOT NULL DEFAULT ' ',
  `no_ktp` varchar(100) DEFAULT '0',
  `email` varchar(100) NOT NULL,
  `AddLine` text,
  `city` varchar(50) NOT NULL,
  `province` varchar(100) DEFAULT NULL,
  `country` varchar(50) NOT NULL DEFAULT 'Indonesia',
  `poscode` int(10) DEFAULT NULL,
  `phone` varchar(50) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `wilayah_shu` varchar(100) DEFAULT NULL,
  `tanggal_umroh` date NOT NULL,
  `tanggal_berangkat` date NOT NULL,
  `penanggung_jawab` varchar(100) DEFAULT NULL,
  `id_kategori` int(11) NOT NULL DEFAULT '1',
  `file_photo` varchar(100) DEFAULT NULL,
  `file_ktp` varchar(100) NOT NULL,
  `file_kk` varchar(100) NOT NULL,
  `file_buku_nikah` varchar(100) NOT NULL,
  `file_paspor` varchar(100) NOT NULL,
  `file_visa` varchar(100) NOT NULL,
  `file_miningitis` varchar(100) NOT NULL,
  `file_surat_ijin` varchar(100) NOT NULL,
  `user` varchar(100) NOT NULL,
  `pass` varchar(500) NOT NULL,
  `status` int(10) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `FName`, `MName`, `LName`, `no_ktp`, `email`, `AddLine`, `city`, `province`, `country`, `poscode`, `phone`, `tempat_lahir`, `tanggal_lahir`, `wilayah_shu`, `tanggal_umroh`, `tanggal_berangkat`, `penanggung_jawab`, `id_kategori`, `file_photo`, `file_ktp`, `file_kk`, `file_buku_nikah`, `file_paspor`, `file_visa`, `file_miningitis`, `file_surat_ijin`, `user`, `pass`, `status`) VALUES
(5, 'Muhammad Tegas Nasuha', '', '', '1234567890', 'abdullah.aflaha.aslam@gmail.com', 'jl.enakaja', 'Sragen', 'Jawa Tengah', 'Indonesia', 12345, '081234566', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 1, NULL, '', '', '', '', '', '', '', 'admin', 'b3628310cbbc3b371ddcd84593d2290af4ad1248294bb6025d5dd807b29a2151a757be4083e9d97bc93c885bfcd8ecb5762ba3c97a47308e4152841dcdb525a0Kzmb0FlBiuIyG2RUw+m0U7Twwt2ciztK6+T+Bs3kYQo=', 1),
(19, 'Abdullah ', 'Aflaha ', 'Aslam', '1982739127', 'abdullah.aflaha.aslam@student.uns.ac.id', 'Jl.Kencur 1a', 'Sukoharjo', 'Jawa Tengah', 'Indonesia', 0, '627812639182', 'Sukoharjo', '1996-05-31', 'Surakarta', '2019-09-30', '0000-00-00', 'aslam', 1, NULL, '19_file_ktp.png', '19_file_kk.jpeg', '19_file_buku_nikah.jpg', '', '', '19_file_miningitis.jpg', '19_file_surat_ijin.png', 'peserta', 'e2f230dba66ca8b6074bfe12c5fbfec7af0bb22a7de6fbd0d5236b7077aa7947c292e5b801dfc5b3e059ab2855f76cebdbc36d4c09faedb16c178d4c10387febSCCJEajVMaecGgAvyBfCtPnnMaNPBrmJd2KsNXfrlV0=', 1),
(20, 'Rangga Anggara', NULL, '', '198731932', 'rnggara@student.uns.ac.id', 'jl. Jomblo', 'Ciamis', 'Jawa Barat', 'Indonesia', 0, '6212198723912', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', 2, NULL, '', '', '', '', '', '', '', 'pengajar', '54bf4b3908cafdc5139700bdf16b2c7f8fe222b7c92bdd68016e8baea911fd75542ebe8b5f3b309ad7fedd106eec299e59a6a30984d988bad9c5ddc1aaa2b402d8GyLJnQKSGf7phNzibQ4rYx2sJvInLbFMK1C9OIyWQ=', 1),
(25, 'Felicia silvi', '', '', '728937', 'fel@gmail.com', 'Jl. Sama Saja', 'Magetan', 'Jawa Tengah', 'Indonesia', 57552, '6228739821', '', '0000-00-00', NULL, '0000-00-00', '0000-00-00', NULL, 1, '', '', '', '', '', '', '', '', 'fel', '6c16fade804f69a7317a5e7a633de434fd4de1db676adbb7cdda5a6823e9c381597f0199a1b062cb6c2f1312d8a3ab7e1bb098157feef83f6d03fdf5280d6fda70i/WOAYv/bTzcMbslSKOisKdIPTZXqbgIgOiIjNkSo=', 1),
(27, 'Muhammad', 'Ulinuha', 'Khouirul umam', '91283109832013', 'muhammadulin48@gmail.com', 'Jl Galau', 'Magelan', 'Jawa Tengah', 'Indonesia', 123123, '6285627371791', '', '0000-00-00', NULL, '0000-00-00', '0000-00-00', NULL, 2, NULL, '', '', '', '', '', '', '', '85627371791', '081cbc184af40551989d9f8a2cece3631e65a4ab8e6364ddeb16050b1c414d3049539121074c3af8e0e121abf4b5a46ec02bc93bcce57a010f3153860dd90212AcLU7O6I+1kPi6iZLfI/Fyqq3vv+ZO+ACnHTZsuhkII=', 1),
(35, 'Rangga', '', 'Anggara', NULL, 'rnggara@student.uns.ac.id', NULL, 'Ciamis1', 'Jawa Barat', 'Indonesia', NULL, '62087838823887', '', '0000-00-00', NULL, '0000-00-00', '0000-00-00', NULL, 1, NULL, '', '', '', '', '', '', '', 'Rangga', '1fd1c5a23a60814b0925763d88766cb55a34feb62ee9b113d366db6428dc09de6e42dc18ae2f32e8dddf8ff4a5f874b622fe00831c70533dc31d0c7aaf3a389dNVBg4lX00W7jaC6Jdifhxg1BI+4aLZNvs97/hgAzMzs=', 1),
(37, 'Aditya', 'Nugraha', 'Pradana', '123123091823', 'adityabjo@student.uns.ac.id', 'Jl. Jalan Sana', 'Jakarta', '1', 'Indonesia', 123, '6287884853771', '', '0000-00-00', 'Jakarta', '0000-00-00', '0000-00-00', 'Abdullah', 1, NULL, '', '', '', '', '', '', '', '8788485377', 'b81b0dfbbf71bb9ab1635167cfc8605f4d4b17b0995ecc6f706acdb6a48e92296a5d539239dfeb6867da73f5825fce98c8a192bdcd86e9e7a2b11ea164bbfb77uORVnncoXQ0bqVqXbiDkPdQN1sYdMwrkevg5aAk8GFA=', 1),
(39, 'Natasha ', 'Alyaa', 'Anindyaputri', '28130283019823', 'natasha.alyaa@student.uns.ac.id', 'Jl.Sama Zul', 'Jakarta', 'Jawa Barat', 'Indonesia', 38232, '6208118666625', '', '0000-00-00', NULL, '0000-00-00', '0000-00-00', NULL, 1, NULL, '', '', '', '', '', '', '', '08118666625', '858ba763b460e1e0a2e0b6d24ee257d4ff67e71d6c409178260fcd68bc88a9684fce3071fc12db88c8c136a682ac6a4a980b26d9b137e2c4f7bff385930d9727KDeHUNvXtzvd2EgZqnw0LXPmYwImG+YDQ9yTxH0wRqg=', 1),
(41, 'Rifky', '', 'Affandi', '081230981239', 'rifkiaz@opensuse.org', NULL, 'Jakarta', NULL, 'Indonesia', NULL, '6281295754841', '', '0000-00-00', 'Jakarta', '0000-00-00', '0000-00-00', 'Abdullah', 1, NULL, '', '', '', '', '', '', '', '81295754841', '079a3c9154302beafaacb47205921630c0f22829a1b3cdb30a17c61669772c18caef8399d660146f078e370f8498c1976e4f3f0592de17a7b0dd39668fd4cd1b0RWcS9SghWwGr0+0X8prnzpNk7p61kA7dz989ou9QMk=', 1),
(42, 'Pradana', 'Cipta Qori', 'Nawa', '3219381018203', 'cipta.pradana@student.uns.ac.id', NULL, 'Sragen', NULL, 'Indonesia', NULL, '6281215205342', '', '0000-00-00', 'Surakarta', '0000-00-00', '0000-00-00', 'Aflaha', 1, NULL, '', '', '', '', '', '', '', '81215205342', '99bfc08cfc7fa043e498bdf92174c52441d940608b7d86112331cae27886699dccafb01977f36e2e4fbe4a0c5daf6b46d3f8fba0e70811f085efd6168fc6e1bacgSdHPJVmyyqVl83ZZtkzL0u2ZeGGoO2kE8qKqDMtq8=', 1),
(43, 'Halim', '', 'Pradana', '381739871283', 'halimpradana@student.uns.ac.id', NULL, 'Sukoharjo', NULL, 'Indonesia', NULL, '6285368191997', '', '0000-00-00', 'Surakarta', '0000-00-00', '0000-00-00', 'Aslam', 1, NULL, '', '', '', '', '', '', '', '85368191997', '9e6361f1103dbb3082544109164aedf9255c0cd26f9796fd4fc32d9997869bf4da9d95dd8fc71ec4f3e9836255d10cb14a02ea9ea708b64d6bbc533822987a16g5RYuPRXxSYQ9F9AIZg2Ck408baQXw3RfiwkQxA88u0=', 1),
(44, 'Dian', 'Munika', 'Partiwi', '32871982371', 'dianmunikapratiwi@student.uns.ac.id', NULL, 'Kendari', NULL, 'Indonesia', NULL, '6281224567504', '', '0000-00-00', 'Kendari', '0000-00-00', '0000-00-00', 'Aslam', 1, NULL, '', '', '', '', '', '', '', '81224567504', '631598ec107498bc6c37adee6f5b82e7e9d4c335effbef8ff939aeef66e98711979fff50d12086796ba0b1deba80c18962c20418f42b667598eaf6bb1c4e7d61iWlAODKWK5freKo5UdNjPDuu99wTKZlZ1q3gDRIjzAs=', 1),
(45, 'Hasna', 'Amiratun', 'Zafirah', '038130981', 'hazna.zafirah@student.uns.ac.id', NULL, 'Sragen', NULL, 'Indonesia', NULL, '6285728472781', '', '0000-00-00', 'Sragen', '0000-00-00', '0000-00-00', 'Aflaha', 1, NULL, '', '', '', '', '', '', '', '85728472781', '6785abdc3b2412e09a611546d83b5e9ae8caa7ad707c130d256f733202bbbe2cf03b6faa1d48157dc02055d5db1498f263af74acb4dadb44c088d9c32e402b5bIG/58NLl8s71r3m/0gK1M8IYsaqv/Cmun5wk/sQF2cY=', 1),
(46, 'Dwi', '', 'Nuraeni', '380298139210', 'dwinurnaeni@student.uns.ac.id', NULL, 'Purworejo', NULL, 'Indonesia', NULL, '62895370055870', '', '0000-00-00', 'Purworejo', '0000-00-00', '0000-00-00', 'Daru ', 1, NULL, '', '', '', '', '', '', '', '895370055870', '367112996d0188431054795ec0e0eb3e3b45a6a45ad9d161515a066d29384e1c4b498169b2a26d5b6ad6de68663e8583266fdf05ac997cf3d54a63cdd6587c26lOFefiL9Z3s0BwaIkj9JalwV+QQiW6ARtKNm9GaAkzI=', 1),
(47, 'Fadilla ', 'Rizky ', 'Putri', '3108319', 'fadillariskyputri45@student.uns.ac.id', NULL, 'Jambi', NULL, 'Indonesia', NULL, '6282224162417', '', '0000-00-00', 'Jambi', '0000-00-00', '0000-00-00', 'Abdullah Aflaha Aslam', 1, NULL, '', '', '', '', '', '', '', '82224162417', '47dbf3df43d7c8cf93b10e27ceac4b110b8d3e81f31d1c7caaebc77d8d5a941c7696ca2c743d3cfb9a68fdcf41e193dbcbdff1991bc357b132dba33877401c7aiBzev0K6LfqmSwS7CrbsONViAggph1YVzktna8ByPdc=', 1),
(48, 'Regina', 'Nur', 'F', '3219310011', 'reginanurf@student.uns.ac.id', NULL, 'Depol', NULL, 'Indonesia', NULL, '6285773630352', '', '0000-00-00', 'Jakarta', '0000-00-00', '0000-00-00', 'Abdullah', 1, NULL, '', '', '', '', '', '', '', '85773630352', 'ef9be4d9259b8c5fd314385dbc3fbbdd245f21e2996fe978f10c6da8ae769745472cbce095abad357d9ba3c5879617746710e3b1e8c2addb045245c0026a34af/RB3yihKysptTl1TXuMH1be8nkxL0ik8mOxHP1pMvME=', 1),
(49, 'Bramasto ', '', 'Wicaksono', '1219201920', 'bramasto.wicaksono@student.uns.ac.id', NULL, 'Ponorogo', NULL, 'Indonesia', NULL, '6282140345958', '', '0000-00-00', 'Ponorogo', '0000-00-00', '0000-00-00', 'Felicia', 1, NULL, '', '', '', '', '', '', '', '82140345958', '9dcb36892c8190655283db83eed63a294f9f85ed8b459bd8f15516606c916c9fa58f31f2a0584d5b83436fd787a8b6f4b6d9ed21dd362498120f9020184dae3fxxN843oFXXX2JQUDG7dXW/XdQyOSTaNWOxtnxf6mlzE=', 1),
(50, 'Qois', 'Amin', 'Fauzan', '31231091', 'qoisaminfauzan@student.uns.ac.id', NULL, 'Bojonegoro', NULL, 'Indonesia', NULL, '6285648769883', '', '0000-00-00', 'Bojonegoro', '0000-00-00', '0000-00-00', 'Amin', 1, NULL, '', '', '', '', '', '', '', '85648769883', 'e0ede1350dc47f5ca54910267fa2cb4ce680be10317aca93fcc65343c1de92066304c882e1fa0028910be015f5e7976a7cd54cd14c42610c78d8480162ad660f2eT1Nzc8l8qiBKCCqiHLUM2Wf/6sih+KpO4YOqsag5I=', 1),
(51, 'Murtiaji ', '', 'Herkusumo', '239109', 'murti_aji74@student.uns.ac.id', NULL, 'Yogyakarta', NULL, 'Indonesia', NULL, '6288233434159', '', '0000-00-00', 'Yogyakarta', '0000-00-00', '0000-00-00', 'Aji', 1, NULL, '', '', '', '', '', '', '', '88233434159', '2a5c9206c8e5c5fb272a3c25b185e6b6e32b4db247059a07570aaafbbd4897baaed52f252827d6a93e6cc504e54974ffed71a10bbea4f6e271cf28ae96b5be48phXXhpN2wLeOkuKeJEi6/AfLY9Kuj+dZ09Dq0H7iCUo=', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_privilege`
--

CREATE TABLE `user_privilege` (
  `id_privilege` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_privilege`
--

INSERT INTO `user_privilege` (`id_privilege`, `id_user`) VALUES
(3, 5),
(1, 19),
(2, 20),
(2, 25),
(2, 27),
(3, 35),
(1, 37),
(2, 39),
(1, 41),
(1, 42),
(1, 43),
(1, 44),
(1, 45),
(1, 46),
(1, 47),
(1, 48),
(1, 49),
(1, 50),
(1, 51);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `t_jadwal`
--
ALTER TABLE `t_jadwal`
  ADD PRIMARY KEY (`id_jadwal`),
  ADD KEY `id_materi` (`id_materi`),
  ADD KEY `id_lokasi` (`id_lokasi`),
  ADD KEY `id_pengajar` (`id_user`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Indeks untuk tabel `t_kategori`
--
ALTER TABLE `t_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `t_konfirmasi`
--
ALTER TABLE `t_konfirmasi`
  ADD PRIMARY KEY (`id_konfirmasi`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_jadwal` (`id_jadwal`),
  ADD KEY `id_materi` (`id_materi`);

--
-- Indeks untuk tabel `t_log`
--
ALTER TABLE `t_log`
  ADD PRIMARY KEY (`id_log`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `t_lokasi`
--
ALTER TABLE `t_lokasi`
  ADD PRIMARY KEY (`id_lokasi`);

--
-- Indeks untuk tabel `t_materi`
--
ALTER TABLE `t_materi`
  ADD PRIMARY KEY (`id_materi`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indeks untuk tabel `t_mengampu`
--
ALTER TABLE `t_mengampu`
  ADD UNIQUE KEY `id_pengajar` (`id_user`,`id_materi`),
  ADD KEY `id_materi` (`id_materi`);

--
-- Indeks untuk tabel `t_notifikasi`
--
ALTER TABLE `t_notifikasi`
  ADD PRIMARY KEY (`id_notifikasi`);

--
-- Indeks untuk tabel `t_privilege`
--
ALTER TABLE `t_privilege`
  ADD PRIMARY KEY (`id_privilege`),
  ADD KEY `id_privilege` (`id_privilege`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `user_privilege`
--
ALTER TABLE `user_privilege`
  ADD KEY `id_privilege` (`id_privilege`),
  ADD KEY `id_user` (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `country`
--
ALTER TABLE `country`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=240;

--
-- AUTO_INCREMENT untuk tabel `t_jadwal`
--
ALTER TABLE `t_jadwal`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `t_kategori`
--
ALTER TABLE `t_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `t_konfirmasi`
--
ALTER TABLE `t_konfirmasi`
  MODIFY `id_konfirmasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `t_log`
--
ALTER TABLE `t_log`
  MODIFY `id_log` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT untuk tabel `t_lokasi`
--
ALTER TABLE `t_lokasi`
  MODIFY `id_lokasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `t_materi`
--
ALTER TABLE `t_materi`
  MODIFY `id_materi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `t_notifikasi`
--
ALTER TABLE `t_notifikasi`
  MODIFY `id_notifikasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `t_privilege`
--
ALTER TABLE `t_privilege`
  MODIFY `id_privilege` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `t_jadwal`
--
ALTER TABLE `t_jadwal`
  ADD CONSTRAINT `t_jadwal_ibfk_1` FOREIGN KEY (`id_lokasi`) REFERENCES `t_lokasi` (`id_lokasi`),
  ADD CONSTRAINT `t_jadwal_ibfk_2` FOREIGN KEY (`id_materi`) REFERENCES `t_materi` (`id_materi`),
  ADD CONSTRAINT `t_jadwal_ibfk_3` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`),
  ADD CONSTRAINT `t_jadwal_ibfk_4` FOREIGN KEY (`id_admin`) REFERENCES `user` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `t_konfirmasi`
--
ALTER TABLE `t_konfirmasi`
  ADD CONSTRAINT `t_konfirmasi_ibfk_2` FOREIGN KEY (`id_materi`) REFERENCES `t_materi` (`id_materi`),
  ADD CONSTRAINT `t_konfirmasi_ibfk_3` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `t_log`
--
ALTER TABLE `t_log`
  ADD CONSTRAINT `t_log_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `t_materi`
--
ALTER TABLE `t_materi`
  ADD CONSTRAINT `t_materi_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `t_kategori` (`id_kategori`);

--
-- Ketidakleluasaan untuk tabel `t_mengampu`
--
ALTER TABLE `t_mengampu`
  ADD CONSTRAINT `t_mengampu_ibfk_1` FOREIGN KEY (`id_materi`) REFERENCES `t_materi` (`id_materi`),
  ADD CONSTRAINT `t_mengampu_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `user_privilege`
--
ALTER TABLE `user_privilege`
  ADD CONSTRAINT `user_privilege_ibfk_1` FOREIGN KEY (`id_privilege`) REFERENCES `t_privilege` (`id_privilege`),
  ADD CONSTRAINT `user_privilege_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
