/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50714
Source Host           : 127.0.0.1:3306
Source Database       : love

Target Server Type    : MYSQL
Target Server Version : 50714
File Encoding         : 65001

Date: 2019-04-19 13:10:03
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for plan
-- ----------------------------
DROP TABLE IF EXISTS `plan`;
CREATE TABLE `plan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL COMMENT '用户id',
  `weid` int(11) DEFAULT NULL COMMENT '情侣组id',
  `content` varchar(255) DEFAULT '' COMMENT '计划内容',
  `date_info` date DEFAULT NULL COMMENT '出行日期',
  `address` varchar(50) DEFAULT '' COMMENT '计划目的地',
  `is_deleted` int(11) DEFAULT '0',
  `update_time` int(13) DEFAULT NULL,
  `create_time` int(13) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of plan
-- ----------------------------
INSERT INTO `plan` VALUES ('1', '1', '1', '青岛旅游', '2019-05-01', '青岛市', '0', null, null);
