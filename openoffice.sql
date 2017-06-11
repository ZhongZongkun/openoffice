/*
Navicat MySQL Data Transfer

Source Server         : wamp
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : openoffice

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2017-06-11 14:27:14
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for of_file
-- ----------------------------
DROP TABLE IF EXISTS `of_file`;
CREATE TABLE `of_file` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `huiyiid` int(11) DEFAULT NULL,
  `yitiid` int(11) DEFAULT NULL,
  `filename` varchar(255) DEFAULT NULL,
  `file` varchar(100) DEFAULT NULL,
  `filepdf` varchar(20) DEFAULT NULL,
  `time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of of_file
-- ----------------------------
INSERT INTO `of_file` VALUES ('26', '9', '26', '测试.doc', './uploads/14840555201.octet-stream', '1484055525.pdf', '1484055520');

-- ----------------------------
-- Table structure for of_huiyi
-- ----------------------------
DROP TABLE IF EXISTS `of_huiyi`;
CREATE TABLE `of_huiyi` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `huiyiname` varchar(255) DEFAULT NULL,
  `time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of of_huiyi
-- ----------------------------
INSERT INTO `of_huiyi` VALUES ('9', '广汉市人民政府-第十八届120次常务会议议题表', '1484012485');

-- ----------------------------
-- Table structure for of_img
-- ----------------------------
DROP TABLE IF EXISTS `of_img`;
CREATE TABLE `of_img` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `huiyiid` int(11) DEFAULT NULL,
  `yitiid` int(11) DEFAULT NULL,
  `filename` varchar(50) DEFAULT NULL,
  `file` varchar(50) DEFAULT NULL,
  `time` int(11) DEFAULT NULL,
  `ord` int(2) DEFAULT NULL,
  `yong` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of of_img
-- ----------------------------
INSERT INTO `of_img` VALUES ('1', '9', '26', '2015jiaotonganquan.png', './uploads/14840558671.png', '1484055867', '0', '1');

-- ----------------------------
-- Table structure for of_users
-- ----------------------------
DROP TABLE IF EXISTS `of_users`;
CREATE TABLE `of_users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `level` bit(1) DEFAULT NULL,
  `master` bit(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of of_users
-- ----------------------------
INSERT INTO `of_users` VALUES ('1', 'admin', '202cb962ac59075b964b07152d234b70', '测试', '', '');

-- ----------------------------
-- Table structure for of_yiti
-- ----------------------------
DROP TABLE IF EXISTS `of_yiti`;
CREATE TABLE `of_yiti` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `huiyiid` int(11) DEFAULT NULL,
  `xuhao` varchar(255) DEFAULT NULL,
  `yitiname` varchar(255) DEFAULT NULL,
  `tiyiren` varchar(255) DEFAULT NULL,
  `huibaodanwei` varchar(255) DEFAULT NULL,
  `huibaoren` varchar(255) DEFAULT NULL,
  `liexidanwei` varchar(255) DEFAULT NULL,
  `liexiren` varchar(255) DEFAULT NULL,
  `pdf` varchar(40) DEFAULT NULL,
  `imagedir` varchar(30) DEFAULT NULL,
  `imagecount` int(5) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of of_yiti
-- ----------------------------
INSERT INTO `of_yiti` VALUES ('26', '9', '2', '2', '2', '2', '2', '2', '2', '1484055523.pdf', '1484055523', '9');
