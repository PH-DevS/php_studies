/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 100422
Source Host           : localhost:3306
Source Database       : listadehabito

Target Server Type    : MYSQL
Target Server Version : 100422
File Encoding         : 65001

Date: 2023-03-09 14:10:32
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for habito
-- ----------------------------
DROP TABLE IF EXISTS `habito`;
CREATE TABLE `habito` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of habito
-- ----------------------------
