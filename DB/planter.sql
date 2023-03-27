SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for blocks
-- ----------------------------
DROP TABLE IF EXISTS `blocks`;
CREATE TABLE `blocks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `block_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `field_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `block_hectare` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of blocks
-- ----------------------------
INSERT INTO `blocks` VALUES ('1', '1', '1', '2.75', null, null);
INSERT INTO `blocks` VALUES ('2', '2', '1', '1.25', null, null);
INSERT INTO `blocks` VALUES ('3', '3', '2', '1.5', null, null);
INSERT INTO `blocks` VALUES ('4', '4', '2', '1', null, null);
INSERT INTO `blocks` VALUES ('5', '5', '3', '3', null, null);
INSERT INTO `blocks` VALUES ('6', '6', '3', '2.5', null, null);
INSERT INTO `blocks` VALUES ('7', '7', '4', '4.25', null, null);
INSERT INTO `blocks` VALUES ('8', '8', '4', '3.75', null, null);
INSERT INTO `blocks` VALUES ('12', '9', '20', '8', '2021-04-07 19:19:10', '2021-04-07 19:19:10');
INSERT INTO `blocks` VALUES ('13', '10', '20', '7', '2021-04-07 19:20:08', '2021-04-07 19:20:08');

-- ----------------------------
-- Table structure for collection_approvals
-- ----------------------------
DROP TABLE IF EXISTS `collection_approvals`;
CREATE TABLE `collection_approvals` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_type_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `note` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `approval_status` int(11) NOT NULL,
  `division_collection_main_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of collection_approvals
-- ----------------------------
INSERT INTO `collection_approvals` VALUES ('1', '6', '6', 'Expected target achieved', '', '1', '1', '2021-04-08 19:17:32', '2021-04-08 19:17:32');
INSERT INTO `collection_approvals` VALUES ('2', '4', '4', 'Great Work', '', '1', '1', '2021-04-08 19:21:29', '2021-04-08 19:21:29');
INSERT INTO `collection_approvals` VALUES ('3', '5', '5', 'Keep it up', '', '1', '1', '2021-04-08 19:27:21', '2021-04-08 19:27:21');
INSERT INTO `collection_approvals` VALUES ('4', '3', '3', 'Good Work', '', '1', '1', '2021-04-08 19:29:31', '2021-04-08 19:29:31');
INSERT INTO `collection_approvals` VALUES ('5', '1', '1', 'new record', 'storage/public/approvals/kLdosys7ipgaVNNgksk73NTUE97WIacnJcwqra6f.jpg', '1', '2', '2021-04-20 14:20:48', '2021-04-20 14:20:48');
INSERT INTO `collection_approvals` VALUES ('6', '6', '6', 'okk', 'storage/public/approvals/YnZUuSRXDaD20ATtPDu7apRaHypr7CSJyZcqyz1I.jpg', '1', '6', '2021-04-20 20:54:01', '2021-04-20 20:54:01');
INSERT INTO `collection_approvals` VALUES ('7', '5', '5', 'done', 'storage/public/approvals/sOfukaa6Jxqb14PlCYblG8wicckzDRBwFcu61vFG.png', '1', '6', '2021-04-20 21:05:34', '2021-04-20 21:05:34');
INSERT INTO `collection_approvals` VALUES ('8', '4', '4', 'cool', 'storage/public/approvals/tMfeylbmfGVZU5379jK76SKqcWuhsJDqO8jLuYD0.jpg', '1', '6', '2021-04-20 21:19:02', '2021-04-20 21:19:02');

-- ----------------------------
-- Table structure for comments
-- ----------------------------
DROP TABLE IF EXISTS `comments`;
CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL AUTO_INCREMENT,
  `nursery_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date_time` datetime NOT NULL,
  `comment` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`comment_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of comments
-- ----------------------------
INSERT INTO `comments` VALUES ('1', '1', '6', '2021-04-08 19:15:39', 'Great Work', '2021-04-08 19:15:39', '2021-04-08 19:15:39');
INSERT INTO `comments` VALUES ('2', '2', '1', '2021-04-20 18:17:28', 'nice', '2021-04-20 18:17:28', '2021-04-20 18:17:28');

-- ----------------------------
-- Table structure for diseases
-- ----------------------------
DROP TABLE IF EXISTS `diseases`;
CREATE TABLE `diseases` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `disease_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keywords` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descriptions` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `solution` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT ' ',
  `image2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image4` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image5` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image6` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of diseases
-- ----------------------------
INSERT INTO `diseases` VALUES ('1', 'WHITE ROOT DISEASE', 'white root disease, leaf discolouration, Rigidoporus microporus, white, red, brown, mycelia, root', '<b>THE DISEASE</b></br>\r\n\r\nThe white root disease caused by Rigidoporus microporus (Fr.) Overeem is the most destructive root disease in rubber plantations. Immature rubber plants can be infected as a result of root contact with infected stumps or root debris of the previous rubber plantation, while mature trees are infected due to root contact with infected roots of adjoining trees. The disease is common in wet areas of Sri Lanka and the fungus infects a wide range of trees including tea, coffee, cocoa, jak, alastonia cinnamon etc.\r\n\r\n<b>SYMTOMS</b></br>\r\n\r\nThe symptoms on leaves of infected rubber trees develop as slightly offgreen discolouration loosing glossy appearance which eventually turns to yellowish. Mature leaves thereafter become leathery and curve downward and buckled. At latter stages, leaves become orange-brownish and fall off causing die-back of the affected tree. However, in some clones such as RRIC100, instead of yellowing, leaves may suddenly turn to reddish-brown. In some cases, infected trees flowers premature or during the off-season eventually producing pods before the die-back. However, irregular flowering of some clones may confuse the disease identification. The infection on roots and the collar region of an infected tree can be seen as thick white strands of mycelia which on ageing turn to beige or cream colour. The wood of infected roots can be seen as cream coloured and soft, as the lignin has been digested by the fungus. The bark underneath the infected area of the collar region becomes reddish-brown when tissues are dead. During the advanced stage of the disease, fructifications develop in abundance at the ground level of the trunk. They are semi-circular brackets, concentrically zoned and grown at horizontally from the collar area or from exposed infected roots. When fresh, the upper surface is yellowish orange with a pale yellow margin, and the lower surface is light orange having tiny pores.', '<b>Precautions to be taken during uprooting the old stand and land preparation</b></br>\r\n\r\nBefore uprooting, demarcate all the infected patches encompassing 3-4 apparently healthy adjoining trees using natural boundaries such as rocks by marking on them or using concrete poles.\r\nRemove all infected roots from demarcated risky areas as much as practicable, particularly from the trees bordering the patch and remove them from the field.\r\nDo not cut large laterals to facilitate uprooting trees. Never roll infected stumps to lower slopes, as it introduces the pathogen to areas hitherto free of the disease.\r\n\r\n<b>Disease control by applying fungicides</b>\r\n\r\nThe white root disease can be managed by applying a systemic fungicide if detected before the leaf symptoms are visible. By regular inspection of collars of plants in the risky area, the infections can be identified at very early stage enabling the chemical control. Infected trees having more than 50% healthy collars can be recovered by applying a systemic fungicide. Fungicides should be applied during early morning exception rainy days. The soil around the collar area should also be removed to facilitate the absorption. Systemic fungicides tebuconazole and hexaconazole are recommended to control the disease. Since most of pesticides are toxic, it is always advisable to wear protective clothing, gloves and a mask of good quality when applying them. It is not advisable to consume any foods during the application of fungicides.\r\n\r\n<b>Fungicide application for young infected plants</b>\r\n\r\nPrepare a 1% solution of the fungicide by dissolving 10 ml of a commercial fungicide in 1 litre of clean water. Apply one litre of the 1% solution for 1-2 year old infected plants, or two litres of the solution for 3-4 year old infected trees including the adjoining ones, by drenching around the base of the tree along the trunk and the collar. Inspect all treated plants quarterly or at least once a month in wet periods for re-infections. Repeat the fungicide application if necessary after 3 months. Any dead or severely infected plants including all infected root debris should be removed and supplied with new plants. It is always important to tag treated plants including the date.\r\n\r\n<b>Fungicide application for mature infected trees</b>\r\n\r\nApply four litters of the 1% fungicide solution on the collar region of an infected tree. Similarly, treat the adjoining trees to protect them from possible infections through root contacts. Prior to the application, scraping-off the thick cork layer around the base of the trunk may facilitate the absorption of the fungicide. Inspect all the treated trees quarterly or at least once a month in wet periods for re-infections. Repeat the fungicide application if necessary after 3 months. Remove severely infected or dead trees along with all infected roots and add about 200 g of sulphur in to the soil in uprooted holes. Vacant points should also be treated similarly with sulphur to suppress the pathogen living on remaining sources of infection. It is advisable to check the existence of the pathogen in vacant points by placing few Gliricidia poles in the vacant hole and around. After 1-2 months, poles should be removed and check for infections on them. If poles are infected, sulphur application should be repeated. Do not neglect the white root disease. Act promptly and protect your rubber trees from this deadly disease! For any assistance please contact the Department of Plant Pathology & Microbiology of the Rubber Research Institute.', 'storage/diseases/eZRfVWEU1jdP0tfRddwGYzwiaCo9jfaG5Vkq8di5.jpg', '', null, null, null, null, '2021-04-08 19:02:47', '2021-04-08 19:02:47');

-- ----------------------------
-- Table structure for divisions
-- ----------------------------
DROP TABLE IF EXISTS `divisions`;
CREATE TABLE `divisions` (
  `division_id` int(11) NOT NULL,
  `division_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `division_per_field_norm_payment` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `division_per_over_kg_payment` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of divisions
-- ----------------------------
INSERT INTO `divisions` VALUES ('1', 'Upper Division', '1000', '40', '1', null, null);
INSERT INTO `divisions` VALUES ('2', 'Lower Division', '1000', '40', '1', null, null);

-- ----------------------------
-- Table structure for division_collections
-- ----------------------------
DROP TABLE IF EXISTS `division_collections`;
CREATE TABLE `division_collections` (
  `division_collection_id` int(11) NOT NULL AUTO_INCREMENT,
  `division_id` int(11) DEFAULT NULL,
  `field_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `block_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_tappers` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `latex_l` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `latex_kg` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scrap_kg` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total` double(255,2) DEFAULT NULL,
  `hect` double(255,2) DEFAULT NULL,
  `tap_per_hect` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `field_wt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `factory_wt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `loss` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `division_collection_main_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`division_collection_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of division_collections
-- ----------------------------
INSERT INTO `division_collections` VALUES ('1', '1', '1', '1', '1', '10', '10', '10', '20.00', '2.75', '0.36363636363636365', '10', '9', '1', '1', '2021-04-08 19:17:32', '2021-04-08 19:20:26');
INSERT INTO `division_collections` VALUES ('2', '1', '1', '2', '1', '12', '10', '10', '20.00', '1.25', '0.8', '10', '9', '1', '1', '2021-04-08 19:17:32', '2021-04-08 19:20:08');
INSERT INTO `division_collections` VALUES ('3', '1', '2', '4', '1', '18', '14', '4', '18.00', '1.00', '1', '14', '13', '1', '1', '2021-04-08 19:17:32', '2021-04-08 19:21:03');
INSERT INTO `division_collections` VALUES ('4', '2', '3', '5', '1', '10', '12', '15', '27.00', '3.00', '0.3333333333333333', '12', '12', '0', '2', '2021-04-20 14:20:47', '2021-04-20 14:24:31');
INSERT INTO `division_collections` VALUES ('5', '2', '3', '6', '1', '12', '10', '15', '25.00', '2.50', '0.4', '10', '8', '2', '2', '2021-04-20 14:20:47', '2021-04-20 14:24:08');
INSERT INTO `division_collections` VALUES ('6', '2', '4', '7', '1', '25', '13', '10', '23.00', null, null, null, null, null, '3', '2021-04-20 20:53:21', '2021-04-20 20:53:21');
INSERT INTO `division_collections` VALUES ('7', '2', '4', '8', '1', '24', '12', '15', '27.00', null, null, null, null, null, '3', '2021-04-20 20:53:21', '2021-04-20 20:53:21');
INSERT INTO `division_collections` VALUES ('8', '2', '4', '7', '1', '25', '13', '10', '23.00', null, null, null, null, null, '4', '2021-04-20 20:53:22', '2021-04-20 20:53:22');
INSERT INTO `division_collections` VALUES ('9', '2', '4', '8', '1', '24', '12', '15', '27.00', null, null, null, null, null, '4', '2021-04-20 20:53:23', '2021-04-20 20:53:23');
INSERT INTO `division_collections` VALUES ('10', '2', '4', '7', '1', '25', '13', '10', '23.00', null, null, null, null, null, '5', '2021-04-20 20:53:40', '2021-04-20 20:53:40');
INSERT INTO `division_collections` VALUES ('11', '2', '4', '8', '1', '24', '12', '15', '27.00', null, null, null, null, null, '5', '2021-04-20 20:53:40', '2021-04-20 20:53:40');
INSERT INTO `division_collections` VALUES ('12', '2', '4', '7', '1', '25', '13', '10', '23.00', '4.25', '0.23529411764705882', '13', '11', '2', '6', '2021-04-20 20:54:01', '2021-04-20 20:57:44');
INSERT INTO `division_collections` VALUES ('13', '2', '4', '8', '1', '24', '12', '15', '27.00', '3.75', '0.26666666666666666', '12', '12', '0', '6', '2021-04-20 20:54:01', '2021-04-20 20:57:32');

-- ----------------------------
-- Table structure for division_collection_main
-- ----------------------------
DROP TABLE IF EXISTS `division_collection_main`;
CREATE TABLE `division_collection_main` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `weather` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `tot_tappers` int(11) DEFAULT NULL,
  `tot_latexl` double(255,2) DEFAULT NULL,
  `tot_latexkg` double(255,2) DEFAULT NULL,
  `tot_scrap` double(255,2) DEFAULT NULL,
  `tot_tot_kg` double(255,2) DEFAULT NULL,
  `tot_overkg` double(255,2) DEFAULT NULL,
  `tot_payable` double(255,2) DEFAULT NULL,
  `tot_tap_per_hect` double(255,2) DEFAULT NULL,
  `tot_factory_wt` double(255,2) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of division_collection_main
-- ----------------------------
INSERT INTO `division_collection_main` VALUES ('1', '{\"coord\":{\"lon\":80.6356,\"lat\":7.2955},\"weather\":[{\"id\":801,\"main\":\"Clouds\",\"description\":\"few clouds\",\"icon\":\"02n\"}],\"base\":\"stations\",\"main\":{\"temp\":293.48,\"feels_like\":294.02,\"temp_min\":293.48,\"temp_max\":293.48,\"pressure\":1011,\"humidity\":94,\"sea_level\":1011,\"grnd_level\":953},\"visibility\":10000,\"wind\":{\"speed\":0.85,\"deg\":156,\"gust\":0.95},\"clouds\":{\"all\":16},\"dt\":1617909476,\"sys\":{\"country\":\"LK\",\"sunrise\":1617928294,\"sunset\":1617972368},\"timezone\":19800,\"id\":1241622,\"name\":\"Kandy\",\"cod\":200}', '2021-04-08 19:17:32', '2021-04-08 19:17:32', '3', '40.00', '34.00', '24.00', '58.00', '14.00', '58.00', null, null);
INSERT INTO `division_collection_main` VALUES ('2', '{\"coord\":{\"lon\":80.6276,\"lat\":7.3028},\"weather\":[{\"id\":801,\"main\":\"Clouds\",\"description\":\"few clouds\",\"icon\":\"02n\"}],\"base\":\"stations\",\"main\":{\"temp\":294.87,\"feels_like\":295.55,\"temp_min\":294.87,\"temp_max\":294.87,\"pressure\":1011,\"humidity\":94,\"sea_level\":1011,\"grnd_level\":949},\"visibility\":10000,\"wind\":{\"speed\":1.29,\"deg\":200,\"gust\":1.6},\"clouds\":{\"all\":18},\"dt\":1618928447,\"sys\":{\"country\":\"LK\",\"sunrise\":1618878409,\"sunset\":1618922737},\"timezone\":19800,\"id\":1241622,\"name\":\"Kandy\",\"cod\":200}', '2021-04-20 14:20:47', '2021-04-20 14:20:47', '2', '22.00', '22.00', '30.00', '52.00', '2.00', '52.00', null, null);
INSERT INTO `division_collection_main` VALUES ('3', '{\"coord\":{\"lon\":80.6277,\"lat\":7.3028},\"weather\":[{\"id\":804,\"main\":\"Clouds\",\"description\":\"overcast clouds\",\"icon\":\"04n\"}],\"base\":\"stations\",\"main\":{\"temp\":293.75,\"feels_like\":294.29,\"temp_min\":293.75,\"temp_max\":293.75,\"pressure\":1011,\"humidity\":93,\"sea_level\":1011,\"grnd_level\":949},\"visibility\":10000,\"wind\":{\"speed\":1.05,\"deg\":175,\"gust\":1.16},\"clouds\":{\"all\":92},\"dt\":1618952000,\"sys\":{\"country\":\"LK\",\"sunrise\":1618964786,\"sunset\":1619009136},\"timezone\":19800,\"id\":1241622,\"name\":\"Kandy\",\"cod\":200}', '2021-04-20 20:53:20', '2021-04-20 20:53:20', '2', '49.00', '25.00', '25.00', '50.00', '3.00', '50.00', null, null);
INSERT INTO `division_collection_main` VALUES ('4', '{\"coord\":{\"lon\":80.6277,\"lat\":7.3028},\"weather\":[{\"id\":804,\"main\":\"Clouds\",\"description\":\"overcast clouds\",\"icon\":\"04n\"}],\"base\":\"stations\",\"main\":{\"temp\":293.75,\"feels_like\":294.29,\"temp_min\":293.75,\"temp_max\":293.75,\"pressure\":1011,\"humidity\":93,\"sea_level\":1011,\"grnd_level\":949},\"visibility\":10000,\"wind\":{\"speed\":1.05,\"deg\":175,\"gust\":1.16},\"clouds\":{\"all\":92},\"dt\":1618952000,\"sys\":{\"country\":\"LK\",\"sunrise\":1618964786,\"sunset\":1619009136},\"timezone\":19800,\"id\":1241622,\"name\":\"Kandy\",\"cod\":200}', '2021-04-20 20:53:22', '2021-04-20 20:53:22', '2', '49.00', '25.00', '25.00', '50.00', '3.00', '50.00', null, null);
INSERT INTO `division_collection_main` VALUES ('5', '{\"coord\":{\"lon\":80.6277,\"lat\":7.3028},\"weather\":[{\"id\":804,\"main\":\"Clouds\",\"description\":\"overcast clouds\",\"icon\":\"04n\"}],\"base\":\"stations\",\"main\":{\"temp\":293.75,\"feels_like\":294.29,\"temp_min\":293.75,\"temp_max\":293.75,\"pressure\":1011,\"humidity\":93,\"sea_level\":1011,\"grnd_level\":949},\"visibility\":10000,\"wind\":{\"speed\":1.05,\"deg\":175,\"gust\":1.16},\"clouds\":{\"all\":92},\"dt\":1618952000,\"sys\":{\"country\":\"LK\",\"sunrise\":1618964786,\"sunset\":1619009136},\"timezone\":19800,\"id\":1241622,\"name\":\"Kandy\",\"cod\":200}', '2021-04-20 20:53:40', '2021-04-20 20:53:40', '2', '49.00', '25.00', '25.00', '50.00', '3.00', '50.00', null, null);
INSERT INTO `division_collection_main` VALUES ('6', '{\"coord\":{\"lon\":80.6277,\"lat\":7.3028},\"weather\":[{\"id\":804,\"main\":\"Clouds\",\"description\":\"overcast clouds\",\"icon\":\"04n\"}],\"base\":\"stations\",\"main\":{\"temp\":293.75,\"feels_like\":294.29,\"temp_min\":293.75,\"temp_max\":293.75,\"pressure\":1011,\"humidity\":93,\"sea_level\":1011,\"grnd_level\":949},\"visibility\":10000,\"wind\":{\"speed\":1.05,\"deg\":175,\"gust\":1.16},\"clouds\":{\"all\":92},\"dt\":1618952000,\"sys\":{\"country\":\"LK\",\"sunrise\":1618964786,\"sunset\":1619009136},\"timezone\":19800,\"id\":1241622,\"name\":\"Kandy\",\"cod\":200}', '2021-04-20 20:54:01', '2021-04-20 20:54:01', '2', '49.00', '25.00', '25.00', '50.00', '3.00', '50.00', null, null);

-- ----------------------------
-- Table structure for division_receivables
-- ----------------------------
DROP TABLE IF EXISTS `division_receivables`;
CREATE TABLE `division_receivables` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `division_collection_id` int(11) NOT NULL,
  `field_id` int(11) NOT NULL,
  `block_id` int(11) NOT NULL,
  `hectare` int(11) NOT NULL,
  `no_of_tappers` int(11) NOT NULL,
  `tap_per_hectare` double NOT NULL,
  `field_wt` double NOT NULL,
  `factory_wt` double NOT NULL,
  `loss` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of division_receivables
-- ----------------------------

-- ----------------------------
-- Table structure for failed_jobs
-- ----------------------------
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of failed_jobs
-- ----------------------------

-- ----------------------------
-- Table structure for fields
-- ----------------------------
DROP TABLE IF EXISTS `fields`;
CREATE TABLE `fields` (
  `field_id` int(11) NOT NULL AUTO_INCREMENT,
  `division_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `field_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hectare` double NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`field_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of fields
-- ----------------------------
INSERT INTO `fields` VALUES ('1', '1', '0', '2005', '4', '', null, null);
INSERT INTO `fields` VALUES ('2', '1', '0', '2006', '2.5', '', null, null);
INSERT INTO `fields` VALUES ('3', '2', '0', '2025', '5.5', '', null, null);
INSERT INTO `fields` VALUES ('4', '2', '0', '2027', '8', '', null, null);
INSERT INTO `fields` VALUES ('20', '1', '6', '2030', '0', 'storage/public/fields/GRUts42rL4JWqDDNxYGX5ry0KH42y6GfozlLiHIx.jpg', '2021-04-07 19:17:47', '2021-04-07 19:18:23');

-- ----------------------------
-- Table structure for labours
-- ----------------------------
DROP TABLE IF EXISTS `labours`;
CREATE TABLE `labours` (
  `labour_id` int(11) NOT NULL AUTO_INCREMENT,
  `person_id` int(11) NOT NULL,
  `tot_latex_liters` double NOT NULL DEFAULT 0,
  `tot_latex_kg` double NOT NULL DEFAULT 0,
  `tot_scrap_kg` double NOT NULL DEFAULT 0,
  `tot_over_kg` double NOT NULL DEFAULT 0,
  `salary_paid` double NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`labour_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of labours
-- ----------------------------
INSERT INTO `labours` VALUES ('19', '7', '0', '0', '0', '0', '0', '2021-04-07 19:22:10', '2021-04-07 19:22:10');
INSERT INTO `labours` VALUES ('20', '8', '0', '0', '0', '0', '0', '2021-04-07 19:23:11', '2021-04-07 19:23:11');
INSERT INTO `labours` VALUES ('21', '9', '0', '0', '0', '0', '0', '2021-04-07 19:27:21', '2021-04-07 19:27:21');
INSERT INTO `labours` VALUES ('22', '10', '0', '0', '0', '0', '0', '2021-04-07 19:28:27', '2021-04-07 19:28:27');
INSERT INTO `labours` VALUES ('23', '11', '0', '0', '0', '0', '0', '2021-04-07 19:29:44', '2021-04-07 19:29:44');
INSERT INTO `labours` VALUES ('24', '12', '0', '0', '0', '0', '0', '2021-04-07 19:30:57', '2021-04-07 19:30:57');
INSERT INTO `labours` VALUES ('25', '13', '0', '0', '0', '0', '0', '2021-04-07 19:32:04', '2021-04-07 19:32:04');
INSERT INTO `labours` VALUES ('26', '14', '0', '0', '0', '0', '0', '2021-04-07 19:33:13', '2021-04-07 19:33:13');
INSERT INTO `labours` VALUES ('27', '15', '0', '0', '0', '0', '0', '2021-04-07 19:34:22', '2021-04-07 19:34:22');
INSERT INTO `labours` VALUES ('28', '16', '0', '0', '0', '0', '0', '2021-04-07 19:35:35', '2021-04-07 19:35:35');

-- ----------------------------
-- Table structure for labour_collections
-- ----------------------------
DROP TABLE IF EXISTS `labour_collections`;
CREATE TABLE `labour_collections` (
  `labour_collection_id` int(11) NOT NULL AUTO_INCREMENT,
  `labour_id` int(11) NOT NULL,
  `division_collection_id` int(11) NOT NULL,
  `field_id` int(11) NOT NULL,
  `block_id` int(11) NOT NULL,
  `labour_latex_liters` double NOT NULL,
  `metrolac_reading` double NOT NULL,
  `labour_latex_kgs` double NOT NULL,
  `labour_scrap_kgs` double NOT NULL,
  `labour_over_kgs` double NOT NULL,
  `labour_field_norms` int(11) NOT NULL,
  `labour_payable` double NOT NULL,
  `labour_pay_status` blob NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`labour_collection_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of labour_collections
-- ----------------------------
INSERT INTO `labour_collections` VALUES ('1', '7', '3', '1', '1', '10', '10', '10', '10', '4', '6', '1160', 0x31, '2021-04-08 19:17:32', '2021-04-08 19:17:32');
INSERT INTO `labour_collections` VALUES ('2', '8', '3', '1', '2', '12', '10', '10', '10', '2', '8', '1080', 0x31, '2021-04-08 19:17:32', '2021-04-08 19:17:32');
INSERT INTO `labour_collections` VALUES ('3', '9', '3', '2', '4', '18', '16', '14', '4', '8', '6', '1320', 0x31, '2021-04-08 19:17:32', '2021-04-08 19:17:32');
INSERT INTO `labour_collections` VALUES ('4', '14', '5', '3', '5', '0', '12', '12', '15', '2', '10', '1080', 0x31, '2021-04-20 14:20:48', '2021-04-20 14:20:48');
INSERT INTO `labour_collections` VALUES ('5', '11', '5', '3', '6', '0', '14', '10', '15', '0', '10', '1000', 0x31, '2021-04-20 14:20:48', '2021-04-20 14:20:48');
INSERT INTO `labour_collections` VALUES ('6', '13', '13', '4', '7', '0', '14', '13', '10', '1', '12', '1040', 0x31, '2021-04-20 20:54:01', '2021-04-20 20:54:01');
INSERT INTO `labour_collections` VALUES ('7', '16', '13', '4', '8', '0', '16', '12', '15', '2', '10', '1080', 0x31, '2021-04-20 20:54:01', '2021-04-20 20:54:01');

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of migrations
-- ----------------------------

-- ----------------------------
-- Table structure for new_tasks
-- ----------------------------
DROP TABLE IF EXISTS `new_tasks`;
CREATE TABLE `new_tasks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nursery_id` int(11) NOT NULL,
  `task_name` varchar(255) NOT NULL,
  `scheduled_date` date NOT NULL,
  `completed_date` date NOT NULL,
  `note` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of new_tasks
-- ----------------------------

-- ----------------------------
-- Table structure for nurseries
-- ----------------------------
DROP TABLE IF EXISTS `nurseries`;
CREATE TABLE `nurseries` (
  `nursery_id` int(11) NOT NULL AUTO_INCREMENT,
  `region` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `plot_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_of_cuttings` int(11) NOT NULL,
  `layout_date` date NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`nursery_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of nurseries
-- ----------------------------
INSERT INTO `nurseries` VALUES ('1', '0', 'Plot 01', '1000', '2021-04-10', 'storage/nursery/w14RJ1pzGDoqEeLlV1t3N4CxIcTrgOwa0kZNGPB6.jpg', '2021-04-08 19:14:08', '2021-04-08 19:14:08');
INSERT INTO `nurseries` VALUES ('2', '0', 'Plot 02', '1000', '2021-04-21', 'storage/nursery/U1mf91OA9c1cztL0btCuETMFEOJSgEpZhr6qua39.jpg', '2021-04-20 08:53:03', '2021-04-20 08:53:03');

-- ----------------------------
-- Table structure for nursery_plan
-- ----------------------------
DROP TABLE IF EXISTS `nursery_plan`;
CREATE TABLE `nursery_plan` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nursery_id` int(11) NOT NULL,
  `task_id` int(11) NOT NULL,
  `scheduled_date` date NOT NULL,
  `completed_date` date NOT NULL,
  `status` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `note` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of nursery_plan
-- ----------------------------
INSERT INTO `nursery_plan` VALUES ('1', '1', '1', '2021-04-10', '2021-04-10', '1', '6', 'done', null, '2021-04-20 08:54:44');
INSERT INTO `nursery_plan` VALUES ('2', '1', '2', '2021-04-10', '0000-00-00', '0', '6', '', null, null);
INSERT INTO `nursery_plan` VALUES ('3', '1', '3', '2021-04-10', '0000-00-00', '0', '6', '', null, null);
INSERT INTO `nursery_plan` VALUES ('4', '1', '4', '2021-04-10', '0000-00-00', '0', '6', '', null, null);
INSERT INTO `nursery_plan` VALUES ('5', '1', '5', '2021-04-10', '0000-00-00', '0', '6', '', null, null);
INSERT INTO `nursery_plan` VALUES ('6', '1', '6', '2021-04-10', '0000-00-00', '0', '6', '', null, null);
INSERT INTO `nursery_plan` VALUES ('7', '1', '7', '2021-04-10', '0000-00-00', '0', '6', '', null, null);
INSERT INTO `nursery_plan` VALUES ('8', '1', '8', '2021-04-10', '0000-00-00', '0', '6', '', null, null);
INSERT INTO `nursery_plan` VALUES ('9', '1', '9', '2021-04-10', '0000-00-00', '0', '6', '', null, null);
INSERT INTO `nursery_plan` VALUES ('10', '1', '10', '2021-04-10', '0000-00-00', '0', '6', '', null, null);
INSERT INTO `nursery_plan` VALUES ('11', '1', '11', '2021-04-10', '0000-00-00', '0', '6', '', null, null);
INSERT INTO `nursery_plan` VALUES ('12', '1', '12', '2021-04-10', '0000-00-00', '0', '6', '', null, null);
INSERT INTO `nursery_plan` VALUES ('13', '1', '13', '2021-04-10', '0000-00-00', '0', '6', '', null, null);
INSERT INTO `nursery_plan` VALUES ('14', '1', '14', '2021-04-10', '0000-00-00', '0', '6', '', null, null);
INSERT INTO `nursery_plan` VALUES ('15', '1', '15', '2021-04-10', '0000-00-00', '0', '6', '', null, null);
INSERT INTO `nursery_plan` VALUES ('16', '1', '16', '2021-04-10', '0000-00-00', '0', '6', '', null, null);
INSERT INTO `nursery_plan` VALUES ('17', '1', '17', '2021-04-10', '0000-00-00', '0', '6', '', null, null);
INSERT INTO `nursery_plan` VALUES ('18', '1', '18', '2021-04-10', '0000-00-00', '0', '6', '', null, null);
INSERT INTO `nursery_plan` VALUES ('19', '1', '19', '2021-04-10', '0000-00-00', '0', '6', '', null, null);
INSERT INTO `nursery_plan` VALUES ('20', '1', '20', '2021-04-10', '0000-00-00', '0', '6', '', null, null);
INSERT INTO `nursery_plan` VALUES ('21', '1', '21', '2021-04-10', '0000-00-00', '0', '6', '', null, null);
INSERT INTO `nursery_plan` VALUES ('22', '1', '22', '2021-04-10', '0000-00-00', '0', '6', '', null, null);
INSERT INTO `nursery_plan` VALUES ('23', '1', '23', '2021-04-10', '0000-00-00', '0', '6', '', null, null);
INSERT INTO `nursery_plan` VALUES ('24', '1', '24', '2021-04-10', '0000-00-00', '0', '6', '', null, null);
INSERT INTO `nursery_plan` VALUES ('25', '1', '25', '2021-04-10', '0000-00-00', '0', '6', '', null, null);
INSERT INTO `nursery_plan` VALUES ('26', '2', '1', '2021-04-21', '0000-00-00', '0', '1', '', null, null);
INSERT INTO `nursery_plan` VALUES ('27', '2', '2', '2021-05-05', '0000-00-00', '0', '1', '', null, null);
INSERT INTO `nursery_plan` VALUES ('28', '2', '3', '2021-05-19', '0000-00-00', '0', '1', '', null, null);
INSERT INTO `nursery_plan` VALUES ('29', '2', '4', '2021-06-02', '0000-00-00', '0', '1', '', null, null);
INSERT INTO `nursery_plan` VALUES ('30', '2', '5', '2021-06-16', '0000-00-00', '0', '1', '', null, null);
INSERT INTO `nursery_plan` VALUES ('31', '2', '6', '2021-06-30', '0000-00-00', '0', '1', '', null, null);
INSERT INTO `nursery_plan` VALUES ('32', '2', '7', '2021-07-14', '0000-00-00', '0', '1', '', null, null);
INSERT INTO `nursery_plan` VALUES ('33', '2', '8', '2021-07-28', '0000-00-00', '0', '1', '', null, null);
INSERT INTO `nursery_plan` VALUES ('34', '2', '9', '2021-08-11', '0000-00-00', '0', '1', '', null, null);
INSERT INTO `nursery_plan` VALUES ('35', '2', '10', '2021-08-25', '0000-00-00', '0', '1', '', null, null);
INSERT INTO `nursery_plan` VALUES ('36', '2', '11', '2021-09-08', '0000-00-00', '0', '1', '', null, null);
INSERT INTO `nursery_plan` VALUES ('37', '2', '12', '2021-09-22', '0000-00-00', '0', '1', '', null, null);
INSERT INTO `nursery_plan` VALUES ('38', '2', '13', '2021-10-06', '0000-00-00', '0', '1', '', null, null);
INSERT INTO `nursery_plan` VALUES ('39', '2', '14', '2021-10-20', '0000-00-00', '0', '1', '', null, null);
INSERT INTO `nursery_plan` VALUES ('40', '2', '15', '2021-11-03', '0000-00-00', '0', '1', '', null, null);
INSERT INTO `nursery_plan` VALUES ('41', '2', '16', '2021-11-17', '0000-00-00', '0', '1', '', null, null);
INSERT INTO `nursery_plan` VALUES ('42', '2', '17', '2021-12-01', '0000-00-00', '0', '1', '', null, null);
INSERT INTO `nursery_plan` VALUES ('43', '2', '18', '2021-12-15', '0000-00-00', '0', '1', '', null, null);
INSERT INTO `nursery_plan` VALUES ('44', '2', '19', '2021-12-29', '0000-00-00', '0', '1', '', null, null);
INSERT INTO `nursery_plan` VALUES ('45', '2', '20', '2022-01-12', '0000-00-00', '0', '1', '', null, null);
INSERT INTO `nursery_plan` VALUES ('46', '2', '21', '2021-06-20', '0000-00-00', '0', '1', '', null, null);
INSERT INTO `nursery_plan` VALUES ('47', '2', '22', '2021-08-19', '0000-00-00', '0', '1', '', null, null);
INSERT INTO `nursery_plan` VALUES ('48', '2', '23', '2021-10-18', '0000-00-00', '0', '1', '', null, null);
INSERT INTO `nursery_plan` VALUES ('49', '2', '24', '2021-12-17', '0000-00-00', '0', '1', '', null, null);
INSERT INTO `nursery_plan` VALUES ('50', '2', '25', '2022-01-16', '0000-00-00', '0', '1', '', null, null);

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for payments
-- ----------------------------
DROP TABLE IF EXISTS `payments`;
CREATE TABLE `payments` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `labour_id` int(11) NOT NULL,
  `payment_date` date NOT NULL,
  `pay_amount` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of payments
-- ----------------------------

-- ----------------------------
-- Table structure for persons
-- ----------------------------
DROP TABLE IF EXISTS `persons`;
CREATE TABLE `persons` (
  `person_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_type_id` int(11) NOT NULL,
  `fname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` date NOT NULL,
  `nic` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `epf` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `status` bigint(20) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`person_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of persons
-- ----------------------------
INSERT INTO `persons` VALUES ('1', '1', 'Shehan', 'Disanayake', '0', '2021-02-10', '12414141', '2141421414', 'kandy', '0', 'storage/persons/labours/8gyqJckQWsJlc3uNnP6IzuAmFGVL5zKsHXS2onnd.png', '1', null, null);
INSERT INTO `persons` VALUES ('2', '2', 'Charith', 'Asalanka', '0', '2021-04-06', '23423525325', '235252523', 'kandy', '0', '0', '1', '2021-04-07 18:59:14', '2021-04-07 18:59:14');
INSERT INTO `persons` VALUES ('3', '3', 'Kusal', 'Alahakoom', '0', '2021-03-30', '21441241', '2141214124', 'kandy', '0', '0', '1', '2021-04-07 19:00:31', '2021-04-07 19:00:31');
INSERT INTO `persons` VALUES ('4', '4', 'Malaka', 'Perera', '0', '2021-03-31', '332343232555', '2352352523', 'kandy', '0', '0', '1', '2021-04-07 19:03:02', '2021-04-07 19:03:02');
INSERT INTO `persons` VALUES ('5', '5', 'Ramitha', 'Weerasekara', '0', '2021-03-29', '21441', '21414124', 'kandy', '0', '0', '1', '2021-04-07 19:03:50', '2021-04-07 19:03:50');
INSERT INTO `persons` VALUES ('6', '6', 'Yohan', 'Samarathunga', '0', '2021-03-28', '2342342342', '3424245', 'kandy', '0', '0', '1', '2021-04-07 19:05:05', '2021-04-07 19:05:05');
INSERT INTO `persons` VALUES ('7', '7', 'Lalantha', 'Sivaraja', '0', '1978-09-22', '783498680V', '077 000 0001', '34, Parakaduwa Rd, Ehaliyagoda', '660', 'storage/persons/labours/no6icfbpjiJwN9bC4YxurxaUEy5heSUQg7PLSQ9B.jpg', '1', '2021-04-07 19:22:10', '2021-04-07 19:22:10');
INSERT INTO `persons` VALUES ('8', '7', 'Maheshwari', 'Deepawaram', '1', '1971-04-12', '712567902V', '077 000 0002', '70/2, Dickdeniya, Avissawella', '623', 'storage/persons/labours/d4IRyCwg7mxVAwHia7DuMqN7U0LZsqEv1NXxFvij.jpg', '1', '2021-04-07 19:23:11', '2021-04-07 19:23:11');
INSERT INTO `persons` VALUES ('9', '7', 'Jayanthi', 'Chandralatha', '1', '1969-05-29', '694457784V', '077 000 0003', '04, Pussella Estate, Pussella', '706', 'storage/persons/labours/1vNrA0x6xJmyJtNkcfTOW6qpKIxn0PXzTgtN9yhG.jpg', '1', '2021-04-07 19:27:21', '2021-04-07 19:27:21');
INSERT INTO `persons` VALUES ('10', '7', 'Selvi', 'Kandhappa', '1', '1969-11-07', '692378123V', '077 000 0004', '89/2 B Pambegama Estate, Avissawella', '346', 'storage/persons/labours/oYXDduDqqutZGGzvAyiV6MZSP3avWDErlK1sLG4O.jpg', '1', '2021-04-07 19:28:26', '2021-04-07 19:28:26');
INSERT INTO `persons` VALUES ('11', '7', 'Sivaraj', 'Rajendran', '0', '1972-02-20', '725481895V', '077 000 0005', '22, Pussella Estate, Pussella', '790', 'storage/persons/labours/2NAO2nPPaILwIVaKqZHunDFBbEkczrof2bW55mCK.jpg', '1', '2021-04-07 19:29:44', '2021-04-07 19:29:44');
INSERT INTO `persons` VALUES ('12', '7', 'Ravi', 'Selvendran', '0', '1985-03-30', '856073690V', '077 000 0006', '70, Pambegama Estate, Avissawella', '470', 'storage/persons/labours/P3q7gJw5wG1KRle5LhMSeBoXJKhdzSnb9CmE8iwF.jpg', '1', '2021-04-07 19:30:57', '2021-04-07 19:30:57');
INSERT INTO `persons` VALUES ('13', '7', 'Prakash', 'Kumar', '0', '1980-04-23', '856073690V', '077 000 0007', '40, Dickdeniya, Avissawella', '690', 'storage/persons/labours/GksObO5KCyythJr7QgD4zgyIjSPe3VSrXiq5s70W.jpg', '1', '2021-04-07 19:32:03', '2021-04-07 19:32:03');
INSERT INTO `persons` VALUES ('14', '7', 'Krishna', 'Devi', '0', '1973-08-15', '734927065V', '077 000 0008', '11, Parakaduwa Rd, Ehaliyagoda', '230', 'storage/persons/labours/AsgTV1azZn6LPIMF6V73OZb4SPlWhgjQqhzJcr53.jpg', '1', '2021-04-07 19:33:13', '2021-04-07 19:33:13');
INSERT INTO `persons` VALUES ('15', '7', 'Ramesh', 'Gnanaprakashan', '0', '1970-10-01', '708739264V', '077 000 0009', '45, Pambegama Estate, Avissawella', '639', 'storage/persons/labours/I5doOYVKLhtxbHSRb2gBOZ9QL8cOVfGMWVWlHKaK.jpg', '1', '2021-04-07 19:34:22', '2021-04-07 19:34:22');
INSERT INTO `persons` VALUES ('16', '7', 'Kritishika', 'Logeshwaram', '1', '1976-12-07', '765398296V', '077 000 0010', '67/2, Parakaduwa Rd, Ehaliyagoda', '488', 'storage/persons/labours/CFHUfb8sHJM0kgeDZf1Igb4KRW2Wep7dNFYfJafD.jpg', '1', '2021-04-07 19:35:35', '2021-04-07 19:35:35');

-- ----------------------------
-- Table structure for reports
-- ----------------------------
DROP TABLE IF EXISTS `reports`;
CREATE TABLE `reports` (
  `report_id` int(11) NOT NULL,
  `report_type` blob NOT NULL,
  `year` int(11) NOT NULL,
  `month` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of reports
-- ----------------------------

-- ----------------------------
-- Table structure for tasks
-- ----------------------------
DROP TABLE IF EXISTS `tasks`;
CREATE TABLE `tasks` (
  `task_id` int(11) NOT NULL AUTO_INCREMENT,
  `task_type` int(11) NOT NULL COMMENT '1 - start date, 2- folio spraying, 3 - fertilizer, 4 - end date',
  `task_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`task_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of tasks
-- ----------------------------
INSERT INTO `tasks` VALUES ('1', '1', 'Cuttings Layout', null, null);
INSERT INTO `tasks` VALUES ('2', '2', 'Folio Spraying 1st Round', null, null);
INSERT INTO `tasks` VALUES ('3', '2', 'Folio Spraying 2nd Round', null, null);
INSERT INTO `tasks` VALUES ('4', '2', 'Folio Spraying 3rd Round', null, null);
INSERT INTO `tasks` VALUES ('5', '2', 'Folio Spraying 4th Round', null, null);
INSERT INTO `tasks` VALUES ('6', '2', 'Folio Spraying 5th Round', null, null);
INSERT INTO `tasks` VALUES ('7', '2', 'Folio Spraying 6th Round', null, null);
INSERT INTO `tasks` VALUES ('8', '2', 'Folio Spraying 7th Round', null, null);
INSERT INTO `tasks` VALUES ('9', '2', 'Folio Spraying 8th Round', null, null);
INSERT INTO `tasks` VALUES ('10', '2', 'Folio Spraying 9th Round', null, null);
INSERT INTO `tasks` VALUES ('11', '2', 'Folio Spraying 10th Round', null, null);
INSERT INTO `tasks` VALUES ('12', '2', 'Folio Spraying 11th round', null, null);
INSERT INTO `tasks` VALUES ('13', '2', 'Folio Spraying 12th Round', null, null);
INSERT INTO `tasks` VALUES ('14', '2', 'Folio Spraying 13th round', null, null);
INSERT INTO `tasks` VALUES ('15', '2', 'Folio Spraying 14th Round', null, null);
INSERT INTO `tasks` VALUES ('16', '2', 'Folio Spraying 15th round', null, null);
INSERT INTO `tasks` VALUES ('17', '2', 'Folio Spraying 16th Round', null, null);
INSERT INTO `tasks` VALUES ('18', '2', 'Folio Spraying 17th Round', null, null);
INSERT INTO `tasks` VALUES ('19', '2', 'Folio Spraying 18th Round', null, null);
INSERT INTO `tasks` VALUES ('20', '2', 'Folio Spraying 19th round', null, null);
INSERT INTO `tasks` VALUES ('21', '3', 'Fertilizer 1st Round', null, null);
INSERT INTO `tasks` VALUES ('22', '3', 'Fertilizer 2nd Round', null, null);
INSERT INTO `tasks` VALUES ('23', '3', 'Fertilizer 3rd Round', null, null);
INSERT INTO `tasks` VALUES ('24', '3', 'Fertilizer 4th Round', null, null);
INSERT INTO `tasks` VALUES ('25', '4', 'Field Laying', null, null);

-- ----------------------------
-- Table structure for tmp_labour_collection_summary
-- ----------------------------
DROP TABLE IF EXISTS `tmp_labour_collection_summary`;
CREATE TABLE `tmp_labour_collection_summary` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `labour_id` varchar(11) DEFAULT NULL,
  `epf_id` varchar(11) DEFAULT NULL,
  `field_no` varchar(11) DEFAULT NULL,
  `block_no` varchar(11) DEFAULT NULL,
  `no_of_liters` varchar(11) DEFAULT NULL,
  `metrolac_reading` varchar(11) DEFAULT NULL,
  `latex` varchar(11) DEFAULT NULL,
  `scrap` varchar(11) DEFAULT NULL,
  `over` varchar(11) DEFAULT NULL,
  `field_norm` varchar(255) DEFAULT NULL,
  `payable` double DEFAULT 0,
  `paid` tinyint(4) NOT NULL DEFAULT 1,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of tmp_labour_collection_summary
-- ----------------------------

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `person_id` int(11) NOT NULL DEFAULT 0,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT ' ',
  `status` bigint(20) NOT NULL DEFAULT 1,
  `estate_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT ' ',
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT ' ',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_type_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE KEY `users_email_unique` (`email`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', '1', 'Shehan', '1', ' planter', 'shehan@gmail.com', null, '$2b$10$b8EREqrFLxKc9/EK7E/olu61RRhkk95Ie.UF/4eN2r9Jge.xTJZyG', null, '1', null, null);
INSERT INTO `users` VALUES ('2', '2', 'charith@gmail.com', '1', 'planter', 'charith@gmail.com', null, '$2y$10$FRopk3bF8q9z1PzL8.snue02KxMrnRy6RDEF25CTQTJc9eHgSdZIW', null, '2', '2021-04-07 18:59:15', '2021-04-07 19:01:57');
INSERT INTO `users` VALUES ('3', '3', 'kusal@gmail.com', '1', 'planter', 'kusal@gmail.com', null, '$2y$10$uLSqrd8A1IrBgflvkhf28e7zlVE9OzsEKxW9tE2lDezQpbi5ccVt.', null, '3', '2021-04-07 19:00:32', '2021-04-07 19:01:47');
INSERT INTO `users` VALUES ('4', '4', 'Nilan@gmail.com', '1', 'planter', 'Nilan@gmail.com', null, '$2y$10$z3qW5ail6nKZHGpI7M8f6OVaQRzm1LMCX6Isy24psMtIK7w9NiFTi', null, '4', '2021-04-07 19:03:02', '2021-04-07 19:06:26');
INSERT INTO `users` VALUES ('5', '5', 'ramitha@gmail.com', '1', 'planter', 'ramitha@gmail.com', null, '$2y$10$Z1zhGUeNCRUBbjCiTqQYye5M7rAcqYYH1ylvvTyFNhXh/Dux5mKDe', null, '5', '2021-04-07 19:03:50', '2021-04-07 19:06:08');
INSERT INTO `users` VALUES ('6', '6', 'Nimal@gmail.com', '1', 'planter', 'nimal@gmail.com', null, '$2y$10$3Z5M8tkfbkJxlCMeSktnUuuj7QIsgYxd0XhzIcfNuK7HevUlzofwe', null, '6', '2021-04-07 19:05:06', '2021-04-07 19:06:15');

-- ----------------------------
-- Table structure for user_types
-- ----------------------------
DROP TABLE IF EXISTS `user_types`;
CREATE TABLE `user_types` (
  `user_type_id` int(11) NOT NULL,
  `user_type_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of user_types
-- ----------------------------
INSERT INTO `user_types` VALUES ('1', 'Admin', '1', '2021-04-07 17:55:40', '2021-04-07 17:55:40');
INSERT INTO `user_types` VALUES ('2', 'Director', '1', '2021-04-07 17:55:40', '2021-04-07 17:55:40');
INSERT INTO `user_types` VALUES ('3', 'Manager', '1', '2021-04-07 17:55:40', '2021-04-07 17:55:40');
INSERT INTO `user_types` VALUES ('4', 'Estate Officer', '1', '2021-04-07 17:55:40', '2021-04-07 17:55:40');
INSERT INTO `user_types` VALUES ('5', 'Factory Officer', '1', '2021-04-07 17:55:40', '2021-04-07 17:55:40');
INSERT INTO `user_types` VALUES ('6', 'Field Officer', '1', '2021-04-07 17:55:41', '2021-04-07 17:55:41');
INSERT INTO `user_types` VALUES ('7', 'Labour', '1', '2021-04-07 17:55:41', '2021-04-07 17:55:41');