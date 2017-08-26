/*
Navicat MySQL Data Transfer

Source Server         : qdm114391210.my3w.com
Source Server Version : 50148
Source Host           : qdm114391210.my3w.com:3306
Source Database       : qdm114391210_db

Target Server Type    : MYSQL
Target Server Version : 50148
File Encoding         : 65001

Date: 2017-08-26 10:34:32
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `mi_domain`
-- ----------------------------
DROP TABLE IF EXISTS `mi_domain`;
CREATE TABLE `mi_domain` (
  `id` bigint(16) unsigned NOT NULL AUTO_INCREMENT,
  `realm` varchar(128) NOT NULL COMMENT '域名',
  `content` varchar(128) DEFAULT NULL COMMENT '介绍',
  `price` varchar(64) DEFAULT NULL COMMENT '价格',
  `own_id` int(10) DEFAULT NULL COMMENT '所有者id',
  `p_address` varchar(128) DEFAULT NULL COMMENT '购买地址',
  `reaml_len` varchar(10) DEFAULT NULL COMMENT '域名长度',
  `type` varchar(128) DEFAULT NULL COMMENT '域名类型',
  `suffix` varchar(10) DEFAULT NULL COMMENT '域名后缀',
  `time` int(11) DEFAULT NULL COMMENT '注册时间',
  `ip` varchar(30) DEFAULT NULL,
  `enroll` varchar(30) DEFAULT NULL COMMENT '注册商',
  `statu` tinyint(3) NOT NULL DEFAULT '0' COMMENT '审核状态',
  `sell` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '出售状态 0 未 1 已 2 禁',
  `advert` tinyint(3) NOT NULL DEFAULT '0' COMMENT '首页展示 0 不 1精品 2推荐',
  `sort` int(10) NOT NULL DEFAULT '0' COMMENT '竞价排名',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26594 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mi_domain
-- ----------------------------
INSERT INTO `mi_domain` VALUES ('1', '1024kb.com', '哈哈,嘻嘻', '8196.00', '1', 'https://mi.aliyun.com/detail/online.html?domainName=1024kb.com&orgType=0&productType=2', '6', '0', '.com', '1469951100', '127.0.0.1', '', '1', '0', '1', '0');
INSERT INTO `mi_domain` VALUES ('11', 'haoxiepu.com', '好鞋铺', '288.00', '1', '0', '8', '6', '.com', '1469951134', '183.147.191.74', null, '1', '0', '1', '100');
INSERT INTO `mi_domain` VALUES ('13', 'miminong.com', '米米农', '11111.00', '16', null, '8', '0', '.com', '1470035811', '183.147.191.74', null, '1', '0', '1', '0');
INSERT INTO `mi_domain` VALUES ('14', 'taopibao.com', '淘皮包', '5050.00', '1', null, '8', '6', '.com', '1470035887', '183.147.191.74', null, '1', '0', '1', '0');
INSERT INTO `mi_domain` VALUES ('16', 'aosba.com', '精品男装终端', '2888.00', '16', 'https://wanwang.aliyun.com/nametrade/detail/online.html?spm=5176.8076989.339865.10.ls1K9p&domainName=aosba.com&orgType=0&product', '5', '2', '.com', '1470645442', '125.112.114.149', null, '1', '0', '1', '0');
INSERT INTO `mi_domain` VALUES ('17', 'qiutuwang.com', '求图网 ，糗图网', '0.00', '16', null, '9', '0', '.com', '1470645535', '125.112.114.149', null, '1', '0', '1', '0');
INSERT INTO `mi_domain` VALUES ('18', 'wxptkf.com ', '微信公众平台开发', '500.00', '16', null, '6', '2', '.com ', '1470645675', '125.112.114.149', null, '1', '0', '1', '0');
INSERT INTO `mi_domain` VALUES ('19', '230574.com', '爱上宁波网', '888.88', '1', null, '6', '1', '.com', '1470645711', '125.112.114.149', null, '1', '0', '1', '0');
INSERT INTO `mi_domain` VALUES ('20', 'quqq.cn', '趣qq', '2888.00', '16', null, '4', '2', '.cn', '1470645842', '125.112.114.149', null, '1', '1', '1', '0');
INSERT INTO `mi_domain` VALUES ('21', 'tutuzhan.com', '兔兔站，图图站', '888.88', '1', null, '8', '6', '.com', '1470645904', '125.112.114.149', null, '1', '1', '1', '0');
INSERT INTO `mi_domain` VALUES ('27', '080571.com', '六数字，杭州区号', '888.88', '1', null, '6', '1', '.com', '1471594354', '115.210.111.137', null, '1', '0', '1', '0');
INSERT INTO `mi_domain` VALUES ('28', 'test01.com', '测试专用', '666.66', '1', '', '6', '0', '.com', '1461599000', '127.0.0.1', '', '1', '0', '0', '0');
INSERT INTO `mi_domain` VALUES ('29', 'test02.com', '测试专用', '666', '1', null, '6', '1', '.com', '146995166', '115.210.111.137', null, '1', '0', '0', '0');
INSERT INTO `mi_domain` VALUES ('30', 'test03.com', '测试专用', '666', '1', null, '6', '1', '.com', '146995166', '115.210.111.137', null, '1', '0', '0', '0');
INSERT INTO `mi_domain` VALUES ('31', 'test04.com', '测试专用', '666', '1', null, '6', '1', '.com', '146995166', '115.210.111.137', null, '1', '0', '0', '0');
INSERT INTO `mi_domain` VALUES ('32', 'test05.com', '测试专用', '666', '1', null, '6', '1', '.com', '146995166', '115.210.111.137', null, '1', '0', '0', '0');
INSERT INTO `mi_domain` VALUES ('33', 'test06.com', '测试专用', '666', '1', null, '6', '1', '.com', '146995166', '115.210.111.137', null, '1', '0', '0', '0');
INSERT INTO `mi_domain` VALUES ('34', 'test07.com', '测试专用', '666', '1', null, '6', '1', '.com', '146995166', '115.210.111.137', null, '1', '0', '0', '0');
INSERT INTO `mi_domain` VALUES ('35', 'test08.com', '测试专用', '666', '1', null, '6', '1', '.com', '146995166', '115.210.111.137', null, '1', '0', '0', '0');
INSERT INTO `mi_domain` VALUES ('36', 'test09.com', '测试专用', '666', '1', null, '6', '1', '.com', '146995166', '115.210.111.137', null, '1', '0', '0', '0');
INSERT INTO `mi_domain` VALUES ('37', 'test10.com', '测试专用', '666', '1', null, '6', '1', '.com', '146995166', '115.210.111.137', null, '1', '0', '0', '0');
INSERT INTO `mi_domain` VALUES ('38', 'test11.com', '测试专用', '666', '1', null, '6', '1', '.com', '146995166', '115.210.111.137', null, '1', '0', '0', '0');
INSERT INTO `mi_domain` VALUES ('39', 'test12.com', '测试专用', '666', '1', null, '6', '1', '.com', '146995166', '115.210.111.137', null, '1', '0', '0', '0');
INSERT INTO `mi_domain` VALUES ('40', 'test13.com', '测试专用', '666', '1', null, '6', '1', '.com', '146995166', '115.210.111.137', null, '1', '0', '0', '0');
INSERT INTO `mi_domain` VALUES ('41', 'test14.com', '测试专用', '666', '1', null, '6', '1', '.com', '146995166', '115.210.111.137', null, '1', '0', '0', '0');
INSERT INTO `mi_domain` VALUES ('42', 'test15.com', '测试专用', '666', '1', null, '6', '1', '.com', '146995166', '115.210.111.137', null, '1', '0', '0', '0');
INSERT INTO `mi_domain` VALUES ('43', 'test16.com', '测试专用', '666', '1', null, '6', '1', '.com', '146995166', '115.210.111.137', null, '1', '0', '0', '0');
INSERT INTO `mi_domain` VALUES ('44', 'test17.com', '测试专用', '666', '1', null, '6', '1', '.com', '146995166', '115.210.111.137', null, '1', '0', '0', '0');
INSERT INTO `mi_domain` VALUES ('45', 'test18.com', '测试专用', '666.00', '1', null, '6', '1', '.com', '146995166', '115.210.111.137', null, '1', '0', '2', '0');
INSERT INTO `mi_domain` VALUES ('46', 'test19.com', '测试专用', '666', '1', null, '6', '1', '.com', '146995166', '115.210.111.137', null, '1', '0', '0', '0');
INSERT INTO `mi_domain` VALUES ('47', 'test20.com', '测试专用', '666', '1', null, '6', '1', '.com', '146995166', '115.210.111.137', null, '1', '0', '0', '0');
INSERT INTO `mi_domain` VALUES ('48', 'test21.com', '测试专用', '666', '1', null, '6', '1', '.com', '146995166', '115.210.111.137', null, '1', '0', '0', '0');
INSERT INTO `mi_domain` VALUES ('49', 'test22.com', '测试专用', '666', '1', null, '6', '1', '.com', '146995166', '115.210.111.137', null, '1', '0', '0', '0');
INSERT INTO `mi_domain` VALUES ('50', 'test23.com', '测试专用', '666', '1', null, '6', '1', '.com', '146995166', '115.210.111.137', null, '1', '0', '0', '0');
INSERT INTO `mi_domain` VALUES ('51', 'test24.com', '测试专用', '666', '1', null, '6', '1', '.com', '146995166', '115.210.111.137', null, '1', '0', '0', '0');
INSERT INTO `mi_domain` VALUES ('52', 'test25.com', '测试专用', '666.00', '1', null, '6', '1', '.com', '146995166', '115.210.111.137', null, '1', '0', '2', '0');
INSERT INTO `mi_domain` VALUES ('53', 'test26.com', '测试专用', '666', '1', null, '6', '1', '.com', '146995166', '115.210.111.137', null, '1', '0', '0', '0');
INSERT INTO `mi_domain` VALUES ('54', 'test27.com', '测试专用', '666.00', '1', null, '6', '1', '.com', '146995166', '115.210.111.137', null, '1', '1', '0', '0');
INSERT INTO `mi_domain` VALUES ('55', 'test28.com', '六数字，杭州区号', '888.88', '1', null, '6', '1', '.com', '1469951000', '115.210.111.137', null, '1', '0', '0', '0');
INSERT INTO `mi_domain` VALUES ('56', 'test29.com', '六数字，杭州区号', '888.88', '1', null, '6', '1', '.com', '1469951000', '115.210.111.137', null, '1', '0', '2', '0');
INSERT INTO `mi_domain` VALUES ('57', 'test30.com', '六数字，杭州区号', '888.88', '1', null, '6', '1', '.com', '1469951000', '115.210.111.137', null, '1', '0', '0', '0');
INSERT INTO `mi_domain` VALUES ('58', 'test31.com', '六数字，杭州区号', '888.88', '1', null, '6', '1', '.com', '1469951000', '115.210.111.137', null, '1', '0', '0', '0');
INSERT INTO `mi_domain` VALUES ('59', 'test32.com', '六数字，杭州区号', '888.88', '1', null, '6', '1', '.com', '1469951000', '115.210.111.137', null, '1', '1', '0', '0');
INSERT INTO `mi_domain` VALUES ('60', 'test33.com', '六数字，杭州区号', '888.88', '1', null, '6', '1', '.com', '1469951000', '115.210.111.137', null, '1', '0', '0', '0');
INSERT INTO `mi_domain` VALUES ('61', 'test34.com', '六数字，杭州区号', '888.88', '1', null, '6', '1', '.com', '1469951000', '115.210.111.137', null, '1', '0', '0', '0');
INSERT INTO `mi_domain` VALUES ('62', 'test35.com', '六数字，杭州区号', '888.88', '1', null, '6', '1', '.com', '1469951000', '115.210.111.137', null, '1', '0', '0', '0');
INSERT INTO `mi_domain` VALUES ('63', 'test36.com', '六数字，杭州区号', '888.88', '1', null, '6', '1', '.com', '1469951000', '115.210.111.137', null, '1', '1', '0', '0');
INSERT INTO `mi_domain` VALUES ('64', 'test37.com', '六数字，杭州区号', '888.88', '1', null, '6', '1', '.com', '1469951000', '115.210.111.137', null, '1', '0', '0', '0');
INSERT INTO `mi_domain` VALUES ('65', 'test38.com', '六数字，杭州区号', '888.88', '1', null, '6', '1', '.com', '1469951000', '115.210.111.137', null, '1', '0', '0', '0');
INSERT INTO `mi_domain` VALUES ('66', 'test39.com', '六数字，杭州区号', '888.88', '1', null, '6', '1', '.com', '1469951000', '115.210.111.137', null, '1', '0', '2', '0');
INSERT INTO `mi_domain` VALUES ('67', 'test40.com', '六数字，杭州区号', '888.88', '1', null, '6', '1', '.com', '1469951000', '115.210.111.137', null, '1', '0', '0', '0');
INSERT INTO `mi_domain` VALUES ('68', 'test41.com', '六数字，杭州区号', '888.88', '1', null, '6', '1', '.com', '1469951000', '115.210.111.137', null, '1', '0', '2', '0');
INSERT INTO `mi_domain` VALUES ('69', 'test42.com', '六数字，杭州区号', '888.88', '1', null, '6', '1', '.com', '1469951000', '115.210.111.137', null, '1', '1', '0', '0');
INSERT INTO `mi_domain` VALUES ('70', 'test43.com', '六数字，杭州区号', '888.88', '1', null, '6', '1', '.com', '1469951000', '115.210.111.137', null, '1', '0', '0', '0');
INSERT INTO `mi_domain` VALUES ('71', 'test44.com', '六数字，杭州区号', '888.88', '1', null, '6', '1', '.com', '1469951000', '115.210.111.137', null, '1', '1', '0', '0');
INSERT INTO `mi_domain` VALUES ('72', 'test45.com', '六数字，杭州区号', '888.88', '1', null, '6', '1', '.com', '1469951000', '115.210.111.137', null, '1', '0', '2', '0');
INSERT INTO `mi_domain` VALUES ('73', 'test46.com', '六数字，杭州区号', '888.88', '1', null, '6', '1', '.com', '1469951000', '115.210.111.137', null, '1', '0', '0', '0');
INSERT INTO `mi_domain` VALUES ('74', 'test47.com', '六数字，杭州区号', '888.88', '1', null, '6', '1', '.com', '1469951000', '115.210.111.137', null, '1', '0', '0', '0');
INSERT INTO `mi_domain` VALUES ('75', 'test48.com', '六数字，杭州区号', '888.88', '1', null, '6', '1', '.com', '1469951000', '115.210.111.137', null, '1', '0', '2', '0');
INSERT INTO `mi_domain` VALUES ('76', 'test49.com', '六数字，杭州区号', '888.88', '1', null, '6', '1', '.com', '1469951000', '115.210.111.137', null, '1', '1', '0', '0');
INSERT INTO `mi_domain` VALUES ('77', 'test50.com', '六数字，杭州区号', '888.88', '1', null, '6', '1', '.com', '1469951000', '115.210.111.137', null, '1', '0', '0', '0');
INSERT INTO `mi_domain` VALUES ('78', 'test51.com', '六数字，杭州区号', '888.88', '1', null, '6', '1', '.com', '1469951000', '115.210.111.137', null, '1', '0', '0', '0');
INSERT INTO `mi_domain` VALUES ('79', 'test52.com', '六数字，杭州区号', '888.88', '1', null, '6', '1', '.com', '1469951000', '115.210.111.137', null, '1', '0', '0', '0');
INSERT INTO `mi_domain` VALUES ('80', 'test53.com', '六数字，杭州区号', '888.88', '1', null, '6', '1', '.com', '1469951000', '115.210.111.137', null, '1', '0', '0', '0');
INSERT INTO `mi_domain` VALUES ('81', 'test54.com', '六数字，杭州区号', '888.88', '1', null, '6', '1', '.com', '1469951000', '115.210.111.137', null, '1', '0', '0', '0');
INSERT INTO `mi_domain` VALUES ('82', 'test55.com', '六数字，杭州区号', '888.88', '1', null, '6', '1', '.com', '1469951000', '115.210.111.137', null, '1', '0', '0', '0');
INSERT INTO `mi_domain` VALUES ('83', 'test56.com', '六数字，杭州区号', '888.88', '1', null, '6', '1', '.com', '1469951000', '115.210.111.137', null, '1', '0', '0', '0');
INSERT INTO `mi_domain` VALUES ('84', 'test57.com', '六数字，杭州区号', '888.88', '1', null, '6', '1', '.com', '1469951000', '115.210.111.137', null, '1', '0', '2', '0');
INSERT INTO `mi_domain` VALUES ('85', 'test58.com', '六数字，杭州区号', '888.88', '1', null, '6', '1', '.com', '1469951000', '115.210.111.137', null, '1', '0', '0', '0');
INSERT INTO `mi_domain` VALUES ('86', 'test59.com', '六数字，杭州区号', '888.88', '1', null, '6', '1', '.com', '1469951000', '115.210.111.137', null, '1', '0', '0', '0');
INSERT INTO `mi_domain` VALUES ('87', 'test60.com', '六数字，杭州区号', '888.88', '1', null, '6', '1', '.com', '1469951000', '115.210.111.137', null, '1', '0', '0', '0');
INSERT INTO `mi_domain` VALUES ('88', 'test61.com', '六数字，杭州区号', '888.88', '1', null, '6', '1', '.com', '1469951000', '115.210.111.137', null, '1', '0', '0', '0');
INSERT INTO `mi_domain` VALUES ('89', 'test62.com', '六数字，杭州区号', '888.88', '1', null, '6', '1', '.com', '1469951000', '115.210.111.137', null, '1', '0', '0', '0');
INSERT INTO `mi_domain` VALUES ('90', 'test63.com', '六数字，杭州区号', '888.88', '1', null, '6', '1', '.com', '1469951000', '115.210.111.137', null, '1', '1', '0', '0');
INSERT INTO `mi_domain` VALUES ('91', 'test64.com', '六数字，杭州区号', '888.88', '1', null, '6', '1', '.com', '1469951000', '115.210.111.137', null, '1', '1', '0', '0');
INSERT INTO `mi_domain` VALUES ('92', 'test65.com', '六数字，杭州区号', '888.88', '1', null, '6', '1', '.com', '1469951000', '115.210.111.137', null, '1', '0', '0', '0');
INSERT INTO `mi_domain` VALUES ('93', 'test66.com', '六数字，杭州区号', '888.88', '1', null, '6', '1', '.com', '1469951000', '115.210.111.137', null, '1', '0', '0', '0');
INSERT INTO `mi_domain` VALUES ('94', 'test67.com', '六数字，杭州区号', '888.88', '1', null, '6', '1', '.com', '1469951000', '115.210.111.137', null, '1', '1', '0', '0');
INSERT INTO `mi_domain` VALUES ('95', 'test68.com', '六数字，杭州区号', '888.88', '1', null, '6', '1', '.com', '1469951000', '115.210.111.137', null, '1', '0', '0', '0');
INSERT INTO `mi_domain` VALUES ('96', 'test69.com', '六数字，杭州区号', '888.88', '1', null, '6', '1', '.com', '1469951000', '115.210.111.137', null, '1', '0', '2', '0');
INSERT INTO `mi_domain` VALUES ('26586', '1v5.net	', '1v5.net	', '1888.88', '2', null, '3', '8', '.net	', '1489467336', '223.94.92.100', null, '1', '0', '0', '0');
INSERT INTO `mi_domain` VALUES ('26587', 'eocn.cn', 'eocn.cn', '0.00', '2', null, '4', '2', '.cn', '1489467359', '223.94.92.100', null, '1', '0', '0', '0');
INSERT INTO `mi_domain` VALUES ('26588', 'sosf.cn', null, '0.00', '2', null, '4', '0', '.cn', '1489467371', '223.94.92.100', null, '1', '0', '0', '0');
INSERT INTO `mi_domain` VALUES ('26589', 'hjha.net', null, '0.00', '2', null, '4', '2', '.net', '1489467384', '223.94.92.100', null, '1', '0', '0', '0');
INSERT INTO `mi_domain` VALUES ('26590', 'ueee.net', null, '0.00', '2', null, '4', '0', '.net', '1489467394', '223.94.92.100', null, '1', '0', '0', '0');
INSERT INTO `mi_domain` VALUES ('26591', 'quuq.net', null, '0.00', '2', null, '4', '2', '.net', '1489467404', '223.94.92.100', null, '1', '0', '0', '0');
INSERT INTO `mi_domain` VALUES ('26592', '161114.com', null, '0.00', '2', null, '6', '1', '.com', '1489467417', '223.94.92.100', null, '1', '0', '2', '0');
INSERT INTO `mi_domain` VALUES ('26593', 'iyii.cn', 'iyii', '1688.00', '1', null, '4', '0', '.cn', '1496197165', '125.112.241.51', null, '1', '0', '1', '0');

-- ----------------------------
-- Table structure for `mi_table`
-- ----------------------------
DROP TABLE IF EXISTS `mi_table`;
CREATE TABLE `mi_table` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uid` bigint(20) unsigned NOT NULL COMMENT '用户id',
  `time` varchar(32) NOT NULL COMMENT '创建时间',
  `state` varchar(4) NOT NULL DEFAULT '0' COMMENT '开启状态',
  `tabname` varchar(64) NOT NULL COMMENT '米表名称',
  `tablogo` varchar(64) NOT NULL DEFAULT '' COMMENT '咪表logo',
  `email` varchar(64) DEFAULT NULL,
  `phone` varchar(30) DEFAULT NULL,
  `qq` varchar(30) DEFAULT NULL,
  `affiche` varchar(256) NOT NULL COMMENT '公告',
  `addup` varchar(256) NOT NULL COMMENT '统计代码',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10006 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mi_table
-- ----------------------------
INSERT INTO `mi_table` VALUES ('10002', '16', '1470817394', '0', '我的米店', '333ddddddddddd', '6925844@qq.com', '15858966604', '6925844', '在周二结束的体操女子团体决赛上，美国队发挥优异夺得了冠军。可是在之后的颁奖典礼升旗仪式上，加比-道格拉斯的动作却引起了争议，原因是她。周三早些时候，这位奥运冠军被迫做出了道歉。', '');
INSERT INTO `mi_table` VALUES ('10003', '17', '1470847441', '0', '冰封的米表', '1.jpg', '1@1.com', '18888888888', '463351185', '无111', '');
INSERT INTO `mi_table` VALUES ('10004', '1', '1470927564', '0', '管理员的米铺', '', 'admin@miminong.com', '15858966604', '6925844', 'hahahaha', '');
INSERT INTO `mi_table` VALUES ('10005', '2', '1489467277', '0', '少年犹未解', '', '6925844@qq.com', '15858966604', '69235844', '清仓大处理', '');

-- ----------------------------
-- Table structure for `mi_user`
-- ----------------------------
DROP TABLE IF EXISTS `mi_user`;
CREATE TABLE `mi_user` (
  `uid` bigint(13) unsigned NOT NULL AUTO_INCREMENT,
  `user` varchar(30) DEFAULT NULL COMMENT '用户名',
  `name` varchar(64) DEFAULT NULL COMMENT '昵称',
  `pic` varchar(128) DEFAULT NULL COMMENT '头像',
  `time` varchar(30) DEFAULT NULL COMMENT '注册时间',
  `phone` varchar(12) DEFAULT NULL COMMENT '手机',
  `qq` varchar(12) DEFAULT NULL COMMENT 'qq号',
  `email` varchar(30) DEFAULT NULL COMMENT '电子邮箱',
  `password` varchar(64) DEFAULT NULL COMMENT '密码',
  `sex` tinyint(3) DEFAULT NULL,
  `age` tinyint(4) unsigned DEFAULT NULL,
  `ip` varchar(20) DEFAULT NULL,
  `home` varchar(128) DEFAULT NULL,
  `authority` tinyint(3) NOT NULL DEFAULT '0' COMMENT '权限',
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mi_user
-- ----------------------------
INSERT INTO `mi_user` VALUES ('1', 'admin', '管理员', '1', '1467879191', '15858966604', '6925844', 'admin@miminong.com/', '0192023a7bbd73250516f069df18b500', '1', '18', '127.0.0.1', null, '10');
INSERT INTO `mi_user` VALUES ('2', 'cxj564335', '少年犹未解', null, '1467879191', null, null, null, '71d4b581fd0ba4ae046ceae31e2a34ae', null, null, null, null, '0');
