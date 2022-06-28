/*
 Navicat Premium Data Transfer

 Source Server         : localdb
 Source Server Type    : MySQL
 Source Server Version : 100424
 Source Host           : localhost:3306
 Source Schema         : test_pr

 Target Server Type    : MySQL
 Target Server Version : 100424
 File Encoding         : 65001

 Date: 28/06/2022 12:35:11
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for complaints
-- ----------------------------
DROP TABLE IF EXISTS `complaints`;
CREATE TABLE `complaints`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `project_id` int NOT NULL,
  `contact` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `complain_comment` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `complain_date` datetime NULL DEFAULT NULL,
  `user_id` int NOT NULL,
  `type_comm_id` int NULL DEFAULT NULL,
  PRIMARY KEY (`id`, `user_id`) USING BTREE,
  INDEX `comment`(`complain_comment`) USING BTREE,
  INDEX `id`(`id`) USING BTREE,
  INDEX `user_id`(`user_id`) USING BTREE,
  INDEX `project_id`(`project_id`) USING BTREE,
  INDEX `type_comm_id`(`type_comm_id`) USING BTREE,
  CONSTRAINT `complaints_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `complaints_ibfk_2` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `complaints_ibfk_3` FOREIGN KEY (`type_comm_id`) REFERENCES `type_comm` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 33 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of complaints
-- ----------------------------
INSERT INTO `complaints` VALUES (32, 11, 'Darko Vanevski', 'rrrrrrrrrrr', '2022-06-24 13:56:50', 3, 1);

-- ----------------------------
-- Table structure for projects
-- ----------------------------
DROP TABLE IF EXISTS `projects`;
CREATE TABLE `projects`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `project` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `company` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 12 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of projects
-- ----------------------------
INSERT INTO `projects` VALUES (2, 'rabota so podatoci', 'telekom mk');
INSERT INTO `projects` VALUES (4, 'rabota so podatoci na golema baza', 'stranska firma');
INSERT INTO `projects` VALUES (5, 'Onoj ogromniot so 300gb databaza', 'Telekabel DOOEL');
INSERT INTO `projects` VALUES (6, 'Onoj ogromniot so 300gb databaza', 'Telekabel DOOEL');
INSERT INTO `projects` VALUES (7, 'MVR SISTEM PROTIV KORUPCIJA', 'MVR');
INSERT INTO `projects` VALUES (8, 'fakultet', 'finki ');
INSERT INTO `projects` VALUES (9, 'rabota so podatoci', 'finki ');
INSERT INTO `projects` VALUES (10, 'MVSVR', 'Donplaya');
INSERT INTO `projects` VALUES (11, 'rabota so podatoci 2', 'AITONIX');

-- ----------------------------
-- Table structure for tasks
-- ----------------------------
DROP TABLE IF EXISTS `tasks`;
CREATE TABLE `tasks`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `comment` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `date` datetime NOT NULL,
  `is_fixed` int NOT NULL DEFAULT 0,
  `complaint_id` int NOT NULL,
  `od_vreme` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `do_vreme` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `complaint_id`(`complaint_id`) USING BTREE,
  CONSTRAINT `tasks_ibfk_1` FOREIGN KEY (`complaint_id`) REFERENCES `complaints` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 41 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tasks
-- ----------------------------
INSERT INTO `tasks` VALUES (39, 'yryrt', '2022-06-24 14:40:52', 0, 32, '2022-07-01 09:00', '2022-06-24 16:00');
INSERT INTO `tasks` VALUES (40, '', '2022-06-24 15:07:58', 0, 32, '2022-06-24 09:10', '2022-06-24 17:05');

-- ----------------------------
-- Table structure for type_comm
-- ----------------------------
DROP TABLE IF EXISTS `type_comm`;
CREATE TABLE `type_comm`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `type_of_communication` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of type_comm
-- ----------------------------
INSERT INTO `type_comm` VALUES (1, 'telephone');
INSERT INTO `type_comm` VALUES (2, 'mail');
INSERT INTO `type_comm` VALUES (3, 'message');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `lastname` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `mobilenumber` int NULL DEFAULT NULL,
  `token` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `is_active` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `date_time` datetime NULL DEFAULT NULL,
  `isAdmin` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT '0',
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `id`(`id`, `firstname`) USING BTREE,
  INDEX `name`(`firstname`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'Damjan Kaloshev', NULL, 'hari@mail.com', '123', 123, NULL, NULL, NULL, '0');
INSERT INTO `users` VALUES (3, 'Darence Magarence', 'Doe', 'vanevskidarko@gmail.com', '$2y$10$QzWBIsUN9hMBofZykmw8teZmHXejEXvWjvF8SPPg7h0yNschHuC5m', 1231231231, '0e6a9f314defb072806bc07b04dc9528', '0', '2022-06-21 10:20:18', '1');
INSERT INTO `users` VALUES (4, 'Damjan', 'Kaloshev', 'kaloshev.d@gmail.com', '$2y$10$2A2ZmXfVYGX.OmsPVPFsTeb.h0N28YKmVI7C4uO3PIBiI0d6gOeCG', 1234567890, '588564a717d61d4c5ca966317f8683b8', '0', '2022-06-21 10:22:48', '1');
INSERT INTO `users` VALUES (5, 'Harry', 'Potter', 'hari2@mail.com', '$2y$10$LBfcZs1puMvjkdh61h.4aeeNuj48nKQ83Yn6cYaMtvydbO0wG.Kpm', 1231231231, 'c4201fde7d2ef08d1b6aa7d92d982207', '0', '2022-06-24 10:47:59', '1');

SET FOREIGN_KEY_CHECKS = 1;
