/*
Navicat MySQL Data Transfer

Source Server         : MysqlDocker
Source Server Version : 80019
Source Host           : localhost:3306
Source Database       : parking_authentication

Target Server Type    : MYSQL
Target Server Version : 80019
File Encoding         : 65001

Date: 2020-07-03 00:18:01
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for failed_jobs
-- ----------------------------
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of failed_jobs
-- ----------------------------

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES ('1', '2014_10_12_000000_create_users_table', '1');
INSERT INTO `migrations` VALUES ('2', '2014_10_12_100000_create_password_resets_table', '1');
INSERT INTO `migrations` VALUES ('3', '2016_06_01_000001_create_oauth_auth_codes_table', '1');
INSERT INTO `migrations` VALUES ('4', '2016_06_01_000002_create_oauth_access_tokens_table', '1');
INSERT INTO `migrations` VALUES ('5', '2016_06_01_000003_create_oauth_refresh_tokens_table', '1');
INSERT INTO `migrations` VALUES ('6', '2016_06_01_000004_create_oauth_clients_table', '1');
INSERT INTO `migrations` VALUES ('7', '2016_06_01_000005_create_oauth_personal_access_clients_table', '1');
INSERT INTO `migrations` VALUES ('8', '2019_08_19_000000_create_failed_jobs_table', '1');
INSERT INTO `migrations` VALUES ('9', '2020_05_23_130744_create_permission_tables', '1');

-- ----------------------------
-- Table structure for model_has_permissions
-- ----------------------------
DROP TABLE IF EXISTS `model_has_permissions`;
CREATE TABLE `model_has_permissions` (
  `permission_id` bigint unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of model_has_permissions
-- ----------------------------

-- ----------------------------
-- Table structure for model_has_roles
-- ----------------------------
DROP TABLE IF EXISTS `model_has_roles`;
CREATE TABLE `model_has_roles` (
  `role_id` bigint unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of model_has_roles
-- ----------------------------
INSERT INTO `model_has_roles` VALUES ('1', 'App\\User', '1');
INSERT INTO `model_has_roles` VALUES ('2', 'App\\User', '2');
INSERT INTO `model_has_roles` VALUES ('3', 'App\\User', '3');
INSERT INTO `model_has_roles` VALUES ('4', 'App\\User', '4');
INSERT INTO `model_has_roles` VALUES ('4', 'App\\User', '5');

-- ----------------------------
-- Table structure for oauth_access_tokens
-- ----------------------------
DROP TABLE IF EXISTS `oauth_access_tokens`;
CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `client_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_access_tokens_user_id_index` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of oauth_access_tokens
-- ----------------------------
INSERT INTO `oauth_access_tokens` VALUES ('0171745aa0ebf7f25e0ad6f0352fb5f27bbcbc5ffb819dfceafe45891ba3d494d1a9cf3372c1bde4', '1', '90bd5d38-b8ba-43e1-ab54-f640bb186fb9', 'Secret123456', '[]', '0', '2020-06-06 08:13:39', '2020-06-06 08:13:39', '2021-06-06 08:13:39');
INSERT INTO `oauth_access_tokens` VALUES ('08afd4fa9382d6d3cf6da5ba30d8343600745ab89d4ee2f1cb4349e8c4dbe363730676e8ddeaf236', '1', '90bd5d38-b8ba-43e1-ab54-f640bb186fb9', 'Secret123456', '[]', '0', '2020-06-12 12:48:28', '2020-06-12 12:48:28', '2021-06-12 12:48:28');
INSERT INTO `oauth_access_tokens` VALUES ('0c907217e7ececc7007dedb5f494fa207b9b9712367005a316c6eb6f7fe4846f33da5252e2fac13c', '1', '90bd5d38-b8ba-43e1-ab54-f640bb186fb9', 'Secret123456', '[]', '0', '2020-06-17 08:39:06', '2020-06-17 08:39:06', '2021-06-17 08:39:06');
INSERT INTO `oauth_access_tokens` VALUES ('0de1e547769531909d8814b9f5e16cc4607572069ad390737a4860bee3dd66c8967af07528ee9419', '1', '90bd5d38-b8ba-43e1-ab54-f640bb186fb9', 'Secret123456', '[]', '0', '2020-06-06 07:59:30', '2020-06-06 07:59:30', '2021-06-06 07:59:30');
INSERT INTO `oauth_access_tokens` VALUES ('14ca24a664f902f60f9fa27956172871299124cad5d61873fcefc6742d2fa00ac68ad42c9f493446', '1', '90bd5d38-b8ba-43e1-ab54-f640bb186fb9', 'Secret123456', '[]', '0', '2020-06-06 07:56:21', '2020-06-06 07:56:21', '2021-06-06 07:56:21');
INSERT INTO `oauth_access_tokens` VALUES ('18702683c2bdbb79c889af3c786af0602619b8786e263af0f39bbd16354585e4d2a868dd85537af0', '1', '90bd5d38-b8ba-43e1-ab54-f640bb186fb9', 'Secret123456', '[]', '0', '2020-06-20 15:03:08', '2020-06-20 15:03:08', '2021-06-20 15:03:08');
INSERT INTO `oauth_access_tokens` VALUES ('1dfa3dce844e4ee07208398b9a0925849e17693fda45d64b00158a8171d8fc154bfc8ea2ff9e8b33', '2', '90bd5d38-b8ba-43e1-ab54-f640bb186fb9', 'Secret123456', '[]', '0', '2020-06-12 22:40:39', '2020-06-12 22:40:39', '2021-06-12 22:40:39');
INSERT INTO `oauth_access_tokens` VALUES ('3b6a5c931620ecdaa871685621befb608b737e836cd9a8223c4eaef3e6629b9858a48e525ce9a490', '1', '90bd5d38-b8ba-43e1-ab54-f640bb186fb9', 'Secret123456', '[]', '0', '2020-06-26 17:25:59', '2020-06-26 17:25:59', '2021-06-26 17:25:59');
INSERT INTO `oauth_access_tokens` VALUES ('3fd3c683f9099021f7c9e6324126385e6772a5d4f4647239225536a4ca92d212c833bf3e9f93278a', '1', '90bd5d38-b8ba-43e1-ab54-f640bb186fb9', 'Secret123456', '[]', '0', '2020-06-06 10:28:20', '2020-06-06 10:28:20', '2021-06-06 10:28:20');
INSERT INTO `oauth_access_tokens` VALUES ('52cd9c90a548f7d3f528a9931b279572bba383e626ced349eff15ef2ef7b28783f10e08e4ee87671', '1', '90bd5d38-b8ba-43e1-ab54-f640bb186fb9', 'Secret123456', '[]', '0', '2020-06-06 08:11:38', '2020-06-06 08:11:38', '2021-06-06 08:11:38');
INSERT INTO `oauth_access_tokens` VALUES ('5349c0a51c58c1548da67c46969cace82a5edfd4538183c9a99ba2962df9a4b049462b928d77befc', '1', '90bd5d38-b8ba-43e1-ab54-f640bb186fb9', 'Secret123456', '[]', '0', '2020-06-19 12:10:44', '2020-06-19 12:10:44', '2021-06-19 12:10:44');
INSERT INTO `oauth_access_tokens` VALUES ('5e08a3f375c64df5a1daefd4e7fd3f3cb45b09fb45c367b83b27b148a1012d125054bb475acc1d41', '1', '90bd5d38-b8ba-43e1-ab54-f640bb186fb9', 'Secret123456', '[]', '0', '2020-06-16 13:00:35', '2020-06-16 13:00:35', '2021-06-16 13:00:35');
INSERT INTO `oauth_access_tokens` VALUES ('608e0b96073feda301521f3ab62ea961c16b41fc2f2bc925b857ca8d06c0d070d1ff5e00cee449fd', '1', '90bd5d38-b8ba-43e1-ab54-f640bb186fb9', 'Secret123456', '[]', '0', '2020-06-29 17:36:27', '2020-06-29 17:36:27', '2021-06-29 17:36:27');
INSERT INTO `oauth_access_tokens` VALUES ('629b1efa8fdefc981f8ac0847d70a3a71ba5c048a43d08ddd01aea97ce190dab2cf802f0de734d5d', '1', '90bd5d38-b8ba-43e1-ab54-f640bb186fb9', 'Secret123456', '[]', '0', '2020-06-13 07:11:16', '2020-06-13 07:11:16', '2021-06-13 07:11:16');
INSERT INTO `oauth_access_tokens` VALUES ('6b184c8a57e7304c4efd0a6114310186b1948d1c744c23e4ff5d957a4ef65cdda0aa46945f84e19a', '1', '90bd5d38-b8ba-43e1-ab54-f640bb186fb9', 'Secret123456', '[]', '0', '2020-06-06 10:28:09', '2020-06-06 10:28:09', '2021-06-06 10:28:09');
INSERT INTO `oauth_access_tokens` VALUES ('71d790df32c828e717f80484b5bd6b38eed48d11d195bda5ee2e433df04face49bd2910b44974a5a', '4', '90bd5d38-b8ba-43e1-ab54-f640bb186fb9', 'Secret123456', '[]', '0', '2020-06-29 17:38:45', '2020-06-29 17:38:45', '2021-06-29 17:38:45');
INSERT INTO `oauth_access_tokens` VALUES ('72da6af1c99385e608cf91588f0df2f173f005cc4986424ed5bc20456244ffc9d548577462303805', '1', '90bd5d38-b8ba-43e1-ab54-f640bb186fb9', 'Secret123456', '[]', '0', '2020-06-06 08:10:00', '2020-06-06 08:10:00', '2021-06-06 08:10:00');
INSERT INTO `oauth_access_tokens` VALUES ('789e60708c5ad3b36fddb1dd569a75b92665e2817553e3935be7706de10a8008ec42a38f617840f5', '1', '90bd5d38-b8ba-43e1-ab54-f640bb186fb9', 'Secret123456', '[]', '0', '2020-06-12 03:05:00', '2020-06-12 03:05:00', '2021-06-12 03:05:00');
INSERT INTO `oauth_access_tokens` VALUES ('81fa2e13348c270650a1d1673d5f2483f4466eb37d8056771e2d257c7bcb9c1fb812fd8e7553bc47', '1', '90bd5d38-b8ba-43e1-ab54-f640bb186fb9', 'Secret123456', '[]', '0', '2020-06-29 22:20:21', '2020-06-29 22:20:21', '2021-06-29 22:20:21');
INSERT INTO `oauth_access_tokens` VALUES ('87eb6a920d74acd5bb7ad0bf480d8eca9b1d3cc533a7b7d8607e2293100cc05b98073b57a7eaa727', '1', '90bd5d38-b8ba-43e1-ab54-f640bb186fb9', 'Secret123456', '[]', '0', '2020-06-27 07:17:12', '2020-06-27 07:17:12', '2021-06-27 07:17:12');
INSERT INTO `oauth_access_tokens` VALUES ('8e89f32357a2e2be07e760ac9398c1524185e8b1826a0f229e7162694568f0e59e7249af05218f95', '1', '90bd5d38-b8ba-43e1-ab54-f640bb186fb9', 'Secret123456', '[]', '0', '2020-06-20 14:55:47', '2020-06-20 14:55:47', '2021-06-20 14:55:47');
INSERT INTO `oauth_access_tokens` VALUES ('8e8dcd9dc7089c003112c135331b41fd98762a743c02060498fc9d8e98b6c9f65df8743822c57d1c', '1', '90bd5d38-b8ba-43e1-ab54-f640bb186fb9', 'Secret123456', '[]', '0', '2020-06-12 22:38:23', '2020-06-12 22:38:23', '2021-06-12 22:38:23');
INSERT INTO `oauth_access_tokens` VALUES ('a493615c0e127e551dffd6c991a9f54e997c7e170ecd8efa43e0f50f8e8abfe8379c91bf474a6a2e', '1', '90bd5d38-b8ba-43e1-ab54-f640bb186fb9', 'Secret123456', '[]', '0', '2020-06-11 07:09:25', '2020-06-11 07:09:25', '2021-06-11 07:09:25');
INSERT INTO `oauth_access_tokens` VALUES ('aa6d6f6dc1392bc36b03b9308999469cae283efe8674ee58203c318f9889a4fa0c864f3b7b033828', '1', '90bd5d38-b8ba-43e1-ab54-f640bb186fb9', 'Secret123456', '[]', '0', '2020-06-16 22:28:59', '2020-06-16 22:28:59', '2021-06-16 22:28:59');
INSERT INTO `oauth_access_tokens` VALUES ('aae07674a94eb46ce319d76aba62193eadb2e10eab35f2527eb18d1f156811ecbd066da8350260f5', '1', '90bd5d38-b8ba-43e1-ab54-f640bb186fb9', 'Secret123456', '[]', '0', '2020-06-06 07:55:20', '2020-06-06 07:55:20', '2021-06-06 07:55:20');
INSERT INTO `oauth_access_tokens` VALUES ('b6de0fdd7cd4e286b1fecd5f70bcdfc570a446a03a904eadb1e3578704cdf73cf02cc5a7042216a6', '2', '90bd5d38-b8ba-43e1-ab54-f640bb186fb9', 'Secret123456', '[]', '0', '2020-06-12 22:35:23', '2020-06-12 22:35:23', '2021-06-12 22:35:23');
INSERT INTO `oauth_access_tokens` VALUES ('bd0db262494502d5356fcee1d179bb0176aab129cc47febe2eb350dcbb7fd0bc8ee5050a94cfecd8', '1', '90bd5d38-b8ba-43e1-ab54-f640bb186fb9', 'Secret123456', '[]', '0', '2020-06-11 13:30:00', '2020-06-11 13:30:00', '2021-06-11 13:30:00');
INSERT INTO `oauth_access_tokens` VALUES ('c1a2c23055f16045951d37a35bcbc5fe7afe49a43716d5bab686e361a6b6dc68c904868dc142c14b', '1', '90bd5d38-b8ba-43e1-ab54-f640bb186fb9', 'Secret123456', '[]', '0', '2020-06-26 19:31:59', '2020-06-26 19:31:59', '2021-06-26 19:31:59');
INSERT INTO `oauth_access_tokens` VALUES ('cf52b440cb14bf36c260c51571645258f57a6bdb9fa74041408e99179ed20a1670cea04ded3610f7', '1', '90bd5d38-b8ba-43e1-ab54-f640bb186fb9', 'Secret123456', '[]', '0', '2020-06-14 12:19:11', '2020-06-14 12:19:11', '2021-06-14 12:19:11');
INSERT INTO `oauth_access_tokens` VALUES ('d4c2eba7f9bc2a140cd21c4a4507b03d791c7a25c330fdeb93ee5d97f77faa91f9876d1e9be04c48', '1', '90bd5d38-b8ba-43e1-ab54-f640bb186fb9', 'Secret123456', '[]', '0', '2020-06-12 21:27:05', '2020-06-12 21:27:05', '2021-06-12 21:27:05');
INSERT INTO `oauth_access_tokens` VALUES ('d53ee6a4fc84f36ecd47c0ceebdda13cc94efcfc130044589b090ff7e7019f3db5d97160b6f3eb7b', '1', '90bd5d38-b8ba-43e1-ab54-f640bb186fb9', 'Secret123456', '[]', '0', '2020-06-20 13:11:09', '2020-06-20 13:11:09', '2021-06-20 13:11:09');
INSERT INTO `oauth_access_tokens` VALUES ('d68c42fea17b69c17646d3c262a9c99bfbcb5d1a3e01a9d1d733986a9cc30cd65f5b9a97fddd1343', '1', '90bd5d38-b8ba-43e1-ab54-f640bb186fb9', 'Secret123456', '[]', '0', '2020-06-26 21:44:01', '2020-06-26 21:44:01', '2021-06-26 21:44:01');
INSERT INTO `oauth_access_tokens` VALUES ('dc7b58068b6d22f8d3f7c06f681d863b8b97dd6e74429c03be0c85d7fd53be5b71915eecd2a12dc8', '1', '90bd5d38-b8ba-43e1-ab54-f640bb186fb9', 'Secret123456', '[]', '0', '2020-06-16 22:48:56', '2020-06-16 22:48:56', '2021-06-16 22:48:56');
INSERT INTO `oauth_access_tokens` VALUES ('e17d5758ea14082a19de9b93cd6446553c1164796a88fe7e324e4655cfcb11104e4b5de8f2d71b5c', '4', '90bd5d38-b8ba-43e1-ab54-f640bb186fb9', 'Secret123456', '[]', '0', '2020-06-17 08:42:29', '2020-06-17 08:42:29', '2021-06-17 08:42:29');
INSERT INTO `oauth_access_tokens` VALUES ('ee634d553f36f9a4eae32bc0c37b5bd016783c5cc4edf4c2740912fd20029fadc256e78f1468a595', '1', '90bd5d38-b8ba-43e1-ab54-f640bb186fb9', 'Secret123456', '[]', '0', '2020-06-13 10:28:21', '2020-06-13 10:28:21', '2021-06-13 10:28:21');
INSERT INTO `oauth_access_tokens` VALUES ('fb93e60bb7ab4994928b2574489e57c14a5f94c8bfb5334efa7de7a37c5acf612ee8b316c928c65c', '2', '90bd5d38-b8ba-43e1-ab54-f640bb186fb9', 'Secret123456', '[]', '0', '2020-06-20 14:57:15', '2020-06-20 14:57:15', '2021-06-20 14:57:15');

-- ----------------------------
-- Table structure for oauth_auth_codes
-- ----------------------------
DROP TABLE IF EXISTS `oauth_auth_codes`;
CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned NOT NULL,
  `client_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_auth_codes_user_id_index` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of oauth_auth_codes
-- ----------------------------

-- ----------------------------
-- Table structure for oauth_clients
-- ----------------------------
DROP TABLE IF EXISTS `oauth_clients`;
CREATE TABLE `oauth_clients` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_clients_user_id_index` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of oauth_clients
-- ----------------------------
INSERT INTO `oauth_clients` VALUES ('90bd5d38-b8ba-43e1-ab54-f640bb186fb9', null, 'Car Parking Management With IOT Personal Access Client', 'fFyC8jtQwtgK2MFutBxtWdHeJOSODqXlRCyR8Fst', null, 'http://localhost', '1', '0', '0', '2020-06-06 07:51:12', '2020-06-06 07:51:12');
INSERT INTO `oauth_clients` VALUES ('90bd5d38-e5e1-49f3-9085-ff4ee839ecf8', null, 'Car Parking Management With IOT Password Grant Client', 'kqIARVfcqRKHupYKWpDB07U0TbUUzX06jdf6Ql1H', 'users', 'http://localhost', '0', '1', '0', '2020-06-06 07:51:12', '2020-06-06 07:51:12');

-- ----------------------------
-- Table structure for oauth_personal_access_clients
-- ----------------------------
DROP TABLE IF EXISTS `oauth_personal_access_clients`;
CREATE TABLE `oauth_personal_access_clients` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `client_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of oauth_personal_access_clients
-- ----------------------------
INSERT INTO `oauth_personal_access_clients` VALUES ('1', '90bd5d38-b8ba-43e1-ab54-f640bb186fb9', '2020-06-06 07:51:12', '2020-06-06 07:51:12');

-- ----------------------------
-- Table structure for oauth_refresh_tokens
-- ----------------------------
DROP TABLE IF EXISTS `oauth_refresh_tokens`;
CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of oauth_refresh_tokens
-- ----------------------------

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for permissions
-- ----------------------------
DROP TABLE IF EXISTS `permissions`;
CREATE TABLE `permissions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `module` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of permissions
-- ----------------------------
INSERT INTO `permissions` VALUES ('1', 'roles.view', 'View Role', 'Role', 'web', '2019-06-30 10:05:35', '2019-06-30 10:05:40');
INSERT INTO `permissions` VALUES ('2', 'roles.create', 'Create Role', 'Role', 'web', '2019-06-30 10:05:35', '2019-06-30 10:05:40');
INSERT INTO `permissions` VALUES ('3', 'roles.edit', 'Edit Role', 'Role', 'web', '2019-06-30 10:05:35', '2019-06-30 10:05:40');
INSERT INTO `permissions` VALUES ('4', 'roles.delete', 'Delete Role', 'Role', 'web', '2019-06-30 10:05:35', '2019-06-30 10:05:40');
INSERT INTO `permissions` VALUES ('5', 'users.view', 'View User', 'User', 'web', '2019-06-30 10:05:35', '2019-06-30 10:05:40');
INSERT INTO `permissions` VALUES ('6', 'users.create', 'Create User', 'User', 'web', '2019-06-30 10:05:35', '2019-06-30 10:05:40');
INSERT INTO `permissions` VALUES ('7', 'users.edit', 'Edit User', 'User', 'web', '2019-06-30 10:05:35', '2019-06-30 10:05:40');
INSERT INTO `permissions` VALUES ('8', 'users.delete', 'Delete User', 'User', 'web', '2019-06-30 10:05:35', '2019-06-30 10:05:40');
INSERT INTO `permissions` VALUES ('9', 'users.assign_role', 'Assign User Role', 'User', 'web', '2019-06-30 10:05:35', '2019-06-30 10:05:40');
INSERT INTO `permissions` VALUES ('10', 'parking.view', 'View Parking', 'Parking', 'web', '2020-05-30 23:15:06', '2020-05-30 23:15:10');
INSERT INTO `permissions` VALUES ('11', 'parking.create', 'Create Parking', 'Parking', 'web', '2020-05-30 23:15:06', '2020-05-30 23:15:10');
INSERT INTO `permissions` VALUES ('12', 'parking.edit', 'Edit Parking', 'Parking', 'web', '2020-05-30 23:15:06', '2020-05-30 23:15:10');
INSERT INTO `permissions` VALUES ('13', 'parking.delete', 'Delete Parking', 'Parking', 'web', '2020-05-30 23:15:06', '2020-05-30 23:15:10');

-- ----------------------------
-- Table structure for role_has_permissions
-- ----------------------------
DROP TABLE IF EXISTS `role_has_permissions`;
CREATE TABLE `role_has_permissions` (
  `permission_id` bigint unsigned NOT NULL,
  `role_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`),
  CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of role_has_permissions
-- ----------------------------
INSERT INTO `role_has_permissions` VALUES ('1', '2');
INSERT INTO `role_has_permissions` VALUES ('5', '2');
INSERT INTO `role_has_permissions` VALUES ('6', '2');
INSERT INTO `role_has_permissions` VALUES ('7', '2');
INSERT INTO `role_has_permissions` VALUES ('9', '2');
INSERT INTO `role_has_permissions` VALUES ('10', '2');
INSERT INTO `role_has_permissions` VALUES ('11', '2');
INSERT INTO `role_has_permissions` VALUES ('12', '2');
INSERT INTO `role_has_permissions` VALUES ('5', '3');
INSERT INTO `role_has_permissions` VALUES ('10', '3');
INSERT INTO `role_has_permissions` VALUES ('11', '3');
INSERT INTO `role_has_permissions` VALUES ('12', '3');
INSERT INTO `role_has_permissions` VALUES ('13', '3');
INSERT INTO `role_has_permissions` VALUES ('10', '4');
INSERT INTO `role_has_permissions` VALUES ('12', '4');

-- ----------------------------
-- Table structure for roles
-- ----------------------------
DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of roles
-- ----------------------------
INSERT INTO `roles` VALUES ('1', 'super_admin', 'Super Admin', 'web', '2019-06-18 15:29:20', '2019-06-18 15:29:20');
INSERT INTO `roles` VALUES ('2', 'manager', 'Manager', 'web', '2019-07-01 04:05:46', '2019-07-01 04:05:46');
INSERT INTO `roles` VALUES ('3', 'supervisor', 'Supervisor', 'web', '2020-06-06 07:13:36', '2020-06-17 08:41:50');
INSERT INTO `roles` VALUES ('4', 'intern', 'Intern', 'web', '2020-06-27 07:35:00', '2020-06-27 07:35:00');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` tinyint NOT NULL DEFAULT '0' COMMENT '1=>admin, 0=>customer',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'Md Shahin', 'mdshahin0002@gmail.com', null, '$2y$12$/uG3BEamxUHUpd62WG05qOHIgticl8lLXqRdwrJSGNfm1eAb9k/GC', '1', null, null, null);
INSERT INTO `users` VALUES ('2', 'Sonika Mathur', 'sonika@gmail.com', null, '$2y$10$fZrxhfMMruglOZdR3mFlIOoggwQ06HP4cEGDUsjN1mifEbC22sis.', '1', null, '2020-06-06 06:14:14', '2020-06-06 06:14:14');
INSERT INTO `users` VALUES ('3', 'Ahmed Jafer', 'ahmed@gmail.com', null, '$2y$10$jtST4fBCuECsOUDzki2PkeKfHyDQfstUHsc7SF3ms0lEn3Hln3ddC', '1', null, '2020-06-06 06:45:18', '2020-06-06 06:45:18');
INSERT INTO `users` VALUES ('4', 'Intern 1', 'intern1@gmail.com', null, '$2y$10$qitHErqu4mqBfutfcCQ2VOrf.LjkP8SOiPTYhQivr77Cd7CXjGiKW', '1', null, '2020-06-06 07:16:37', '2020-06-06 07:16:37');
INSERT INTO `users` VALUES ('5', 'Intern 2', 'intern2@gmail.com', null, '$2y$10$3JYaQ6cdf23eIH2RQXiBouRZqJwl7R9MDTN8XXZffzyeia26snFoS', '1', null, '2020-06-06 07:20:15', '2020-06-06 07:20:15');
