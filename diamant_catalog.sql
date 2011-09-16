/*
Navicat MySQL Data Transfer

Source Server         : LOCALHOST_MYSQL
Source Server Version : 50024
Source Host           : localhost:3306
Source Database       : diamant_catalog

Target Server Type    : MYSQL
Target Server Version : 50024
File Encoding         : 65001

Date: 2011-09-16 18:07:10
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `item`
-- ----------------------------
DROP TABLE IF EXISTS `item`;
CREATE TABLE `item` (
  `id` int(11) NOT NULL auto_increment,
  `material_id` int(11) NOT NULL,
  `tech_id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `subtype_id` int(11) NOT NULL,
  `ins_type_id` int(11) NOT NULL,
  `ins_subtype_id` int(11) NOT NULL,
  `set_id` int(11) NOT NULL,
  `article` varchar(32) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of item
-- ----------------------------
INSERT INTO `item` VALUES ('1', '1', '1', '1', '1', '1', '1', '0', '1234567');
INSERT INTO `item` VALUES ('2', '1', '11', '123', '2345', '345', '45', '0', '1112345');
INSERT INTO `item` VALUES ('3', '1', '11', '123', '2345', '345', '45', '0', '1112345');
INSERT INTO `item` VALUES ('4', '0', '0', '0', '0', '0', '0', '0', '');
INSERT INTO `item` VALUES ('5', '1', '11', '123', '2345', '345', '45', '0', '1112345');
INSERT INTO `item` VALUES ('6', '0', '0', '0', '0', '0', '0', '0', '');
INSERT INTO `item` VALUES ('7', '1', '11', '123', '2345', '345', '45', '0', '1112345');
INSERT INTO `item` VALUES ('8', '1', '11', '123', '2345', '345', '45', '0', '1112345');
INSERT INTO `item` VALUES ('9', '1', '1', '1', '2', '3', '45', '0', '1112345');
INSERT INTO `item` VALUES ('10', '1', '1', '1', '2', '3', '45', '0', '1112345');
