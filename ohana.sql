/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50133
Source Host           : localhost:3306
Source Database       : ohana

Target Server Type    : MYSQL
Target Server Version : 50133
File Encoding         : 65001

Date: 2015-07-07 13:33:55
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `ohana_article`
-- ----------------------------
DROP TABLE IF EXISTS `ohana_article`;
CREATE TABLE `ohana_article` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(128) NOT NULL,
  `abstract` text NOT NULL,
  `content` text NOT NULL,
  `images` varchar(128) NOT NULL,
  `post_time` int(11) unsigned NOT NULL,
  `author` int(11) NOT NULL DEFAULT '30',
  `cid` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ohana_article
-- ----------------------------
INSERT INTO `ohana_article` VALUES ('12', '蜗牛', '  我总在幻想 人生或许就是一场攀登 每个人都是一只背着重壳登高的蜗牛 壳里装着理想、誓言 以及所有对过去的执念、对未来的憧憬 我们攀登着 希望企及那传说中的天堂 坚持到底的，很少 半途而废的，很多。。。                        ', '&lt;p style=&quot;text-indent:2em;color:#5D5D5D;font-family:Simsun;&quot;&gt;\r\n	我总在幻想 人生或许就是一场攀登 每个人都是一只背着重壳登高的蜗牛 壳里装着理想、誓言 以及所有对过去的执念、对未来的憧憬 我们攀登着 希望企及那传说中的天堂 坚持到底的，很少 半途而废的，很多 但无论是坚持还是放弃 他们，都不会轻松 坚持的人，哀叹希望的渺茫 放弃的人，却早已失去了自我\r\n&lt;/p&gt;\r\n&lt;img src=&quot;http://localhost/Test/ohana-php/Public/Home-images/woniu.jpg&quot; width=&quot;450px&quot; height=&quot;300px&quot;/&gt;', '', '1420529859', '30', '49');
INSERT INTO `ohana_article` VALUES ('14', '圆月', '《忆亲》\r\n月圆独坐西窗台，薄雾笼圆月，清辉难泻。 秋风无边，思乡正浓，又秋雨！凉彻心扉。 此番离乡去，孤自庆仲秋，独羡南飞雁。 昨夜幽梦忽还乡，青稻泛黄，又见母欢颜。 泪哽咽，窗外忽作响，秋雨丝丝凉！再抬头，雾失明月，方忆，月是故乡明                          ', '&lt;h3 style=&quot;font-size:12px;text-align:center;color:#5D5D5D;font-family:Simsun;&quot;&gt;\r\n	《忆亲》\r\n&lt;/h3&gt;\r\n&lt;p style=&quot;text-indent:2em;color:#5D5D5D;font-family:Simsun;&quot;&gt;\r\n	月圆独坐西窗台，薄雾笼圆月，清辉难泻。 秋风无边，思乡正浓，又秋雨！凉彻心扉。 此番离乡去，孤自庆仲秋，独羡南飞雁。 昨夜幽梦忽还乡，青稻泛黄，又见母欢颜。 泪哽咽，窗外忽作响，秋雨丝丝凉！再抬头，雾失明月，方忆，月是故乡明\r\n&lt;/p&gt;\r\n&lt;h3 style=&quot;font-size:12px;text-align:center;color:#5D5D5D;font-family:Simsun;&quot;&gt;\r\n	《 忆人》\r\n&lt;/h3&gt;\r\n&lt;p style=&quot;text-indent:2em;color:#5D5D5D;font-family:Simsun;&quot;&gt;\r\n	圆月月明唏玉影，伊人倚树叶映红，叶红思忆浓。盈泪渐消伊人容，难忘旧时欢。月圆独酌笑清凉，情归何处？？悔当初，驻步宫门却回头；怨如今，人去却留丝相牵，一语难释此番思念。今又月圆，伊人何方？月圆情缘两圆！寻好梦，梦难成，待明年月圆，能否相聚？\r\n&lt;/p&gt;\r\n&lt;img src=&quot;http://localhost/Test/ohana-php/Public/Home-images/moon.jpg&quot; width=&quot;450px&quot; height=&quot;300px&quot; /&gt;', '', '1420530026', '30', '49');
INSERT INTO `ohana_article` VALUES ('20', '逝', '<p>\r\n	<span style=\"font-family:Arial;font-size:14px;line-height:22.3999996185303px;\">岁月就像一条河流，左岸是无法忘却的回忆；右岸是值得期待的未来；中间，是飞快流淌的、是隐隐的伤感和迷茫的现今。世界上值得我们珍惜的事物有很多，但我们真正有珍惜过的东西却不多。很多时候都只能在失去后自我叹息，懊悔。。。</span> \r\n</p>\r\n<p style=\"text-align:center;\">\r\n	<span style=\"font-family:Arial;font-size:14px;line-height:22.3999996185303px;\"><img src=\"/Test/ohana-php/Public/editor/attached/image/20150107/20150107130531_55653.jpg\" alt=\"\" width=\"500\" height=\"358\" title=\"\" align=\"\" /><br />\r\n</span> \r\n</p>', '<p>\r\n	<span style=\"font-family:Arial;font-size:14px;line-height:22.3999996185303px;\"> 岁月就像一条河流，左岸是无法忘却的回忆；右岸是值得期待的未来；中间，是飞快流淌的、是隐隐的伤感和迷茫的现今。世界上值得我们珍惜的事物有很多，但我们真正有珍惜过的东西却不多。很多时候都只能在失去后自我叹息，懊悔。去留无意，看庭前花开花落；宠辱不惊，望天上云卷云舒。在纷扰的世界里，能够学会用一颗平常心来对待回忆，对待逝去的一切，也是一种境界。只是我们凡人难以做到！&nbsp;&nbsp;&nbsp;&nbsp; 我想，人们最美好的回忆应该是最痛苦的时段，只是回忆起来很美。我们在逝去的回忆中摘取岁月的青果，尝到了酸涩，回忆逝去的一切，而在回忆后在努力去抓住青果的核，埋在心底，怀念逝去的一切…</span> \r\n</p>\r\n<p>\r\n	<span style=\"font-family:Arial;font-size:14px;line-height:22.3999996185303px;\"><br />\r\n</span> \r\n</p>\r\n<p style=\"text-align:center;\">\r\n	<span style=\"font-family:Arial;font-size:14px;line-height:22.3999996185303px;\"><img src=\"/Test/ohana-php/Public/editor/attached/image/20150106/20150106212318_86234.jpg\" alt=\"\" width=\"500\" height=\"358\" title=\"\" align=\"\" /><br />\r\n</span> \r\n</p>', '', '1420550610', '30', '49');
INSERT INTO `ohana_article` VALUES ('22', '再别康桥', '<p>\r\n	轻轻的我走了\r\n</p>\r\n<p style=\"text-align:center;\">\r\n	<img src=\"/Test/ohana-php/Public/editor/attached/image/20150107/20150107145634_62207.jpg\" alt=\"\" width=\"500\" height=\"280\" title=\"\" align=\"\" />\r\n</p>', '<p>\r\n	轻轻的我走了，不带走一片云彩\r\n</p>\r\n<p style=\"text-align:center;\">\r\n	<img src=\"http://localhost/Test/ohana-php/Public/editor/attached/image/20150107/20150107145634_62207.jpg\" alt=\"\" width=\"500\" height=\"280\" title=\"\" align=\"\" />\r\n</p>', '', '1420613828', '30', '47');
INSERT INTO `ohana_article` VALUES ('23', '逝下测试', '&nbsp;&nbsp;&nbsp;&nbsp;撒sad的上来看大家聊上刊登了卡牌的开发票欧克 ；了，了', '<span>&nbsp;&nbsp;&nbsp;&nbsp;撒sad的上来看大家聊上刊登了卡牌的开发票欧克 ；了，了</span>', '', '1420618015', '30', '51');
INSERT INTO `ohana_article` VALUES ('24', '一个人的旅行', '<p style=\"text-align:left;\">\r\n	<span style=\"line-height:1.5;\">看精神科的接口上上课就卡死卡上看看</span>\r\n</p>\r\n<p style=\"text-align:center;\">\r\n	<span style=\"line-height:1.5;\"><img src=\"http://localhost/Test/ohana-php/Public/editor/attached/image/20150107/20150107172445_34845.jpg\" alt=\"\" width=\"500\" height=\"254\" title=\"\" align=\"\" /><br />\r\n</span>\r\n</p>', '<p>\r\n	&nbsp; &nbsp; 数据库拉代理商两地块三姐弟航空件了\r\n</p>\r\n<p style=\"text-align:center;\">\r\n	<img src=\"http://localhost/Test/ohana-php/Public/editor/attached/image/20150107/20150107172445_34845.jpg\" alt=\"\" width=\"500\" height=\"254\" title=\"\" align=\"\" />\r\n</p>', '', '1420622734', '30', '49');
INSERT INTO `ohana_article` VALUES ('25', '你不懂我，我不怪你', '<p style=\"text-indent:2em;color:#444444;font-family:\'Microsoft YaHei\', \'Courier New\', Courier;font-size:14px;background-color:#FFFFFF;\">\r\n	每个人都有一个死角，\r\n</p>\r\n<p style=\"text-indent:2em;color:#444444;font-family:\'Microsoft YaHei\', \'Courier New\', Courier;font-size:14px;background-color:#FFFFFF;\">\r\n	<a href=\"http://xiangxinziji.sanwen8.cn/\" target=\"_blank\">自己</a>走不出来，别人也闯不进去。\r\n</p>\r\n<p style=\"text-indent:2em;color:#444444;font-family:\'Microsoft YaHei\', \'Courier New\', Courier;font-size:14px;background-color:#FFFFFF;\">\r\n	我把最深沉的秘密放在那里。\r\n</p>\r\n<p style=\"text-indent:2em;color:#444444;font-family:\'Microsoft YaHei\', \'Courier New\', Courier;font-size:14px;background-color:#FFFFFF;\">\r\n	你不懂我，我不怪你。\r\n</p>\r\n<p style=\"text-align:center;text-indent:2em;color:#444444;font-family:\'Microsoft YaHei\', \'Courier New\', Courier;font-size:14px;background-color:#FFFFFF;\">\r\n	<img src=\"/Test/ohana-php/Public/editor/attached/image/20150222/20150222214850_15592.jpg\" alt=\"\" width=\"500\" height=\"281\" title=\"\" align=\"\" /> \r\n</p>', '<p style=\"text-indent:2em;color:#444444;font-family:\'Microsoft YaHei\', \'Courier New\', Courier;font-size:14px;background-color:#FFFFFF;\">\r\n	每个人都有一个死角，\r\n</p>\r\n<p style=\"text-indent:2em;color:#444444;font-family:\'Microsoft YaHei\', \'Courier New\', Courier;font-size:14px;background-color:#FFFFFF;\">\r\n	<a href=\"http://xiangxinziji.sanwen8.cn/\" target=\"_blank\">自己</a>走不出来，别人也闯不进去。\r\n</p>\r\n<p style=\"text-indent:2em;color:#444444;font-family:\'Microsoft YaHei\', \'Courier New\', Courier;font-size:14px;background-color:#FFFFFF;\">\r\n	我把最深沉的秘密放在那里。\r\n</p>\r\n<p style=\"text-indent:2em;color:#444444;font-family:\'Microsoft YaHei\', \'Courier New\', Courier;font-size:14px;background-color:#FFFFFF;\">\r\n	你不懂我，我不怪你。\r\n</p>\r\n<p style=\"text-indent:2em;color:#444444;font-family:\'Microsoft YaHei\', \'Courier New\', Courier;font-size:14px;background-color:#FFFFFF;\">\r\n	每个人都有一道伤口，\r\n</p>\r\n<p style=\"text-indent:2em;color:#444444;font-family:\'Microsoft YaHei\', \'Courier New\', Courier;font-size:14px;background-color:#FFFFFF;\">\r\n	或深或浅，盖上布，以为不存在。<span>( <a href=\"http://www.sanwen.net/\" target=\"_blank\">文章</a><a href=\"http://www.sanwen.net/\" target=\"_blank\">阅读</a>网：www.sanwen.net )</span> \r\n</p>\r\n<p style=\"text-indent:2em;color:#444444;font-family:\'Microsoft YaHei\', \'Courier New\', Courier;font-size:14px;background-color:#FFFFFF;\">\r\n	我把最殷红的鲜血涂在那里。\r\n</p>\r\n<p style=\"text-indent:2em;color:#444444;font-family:\'Microsoft YaHei\', \'Courier New\', Courier;font-size:14px;background-color:#FFFFFF;\">\r\n	你不懂我，我不怪你。\r\n</p>\r\n<p style=\"text-indent:2em;color:#444444;font-family:\'Microsoft YaHei\', \'Courier New\', Courier;font-size:14px;background-color:#FFFFFF;\">\r\n	每个人都有一场<a href=\"http://www.sanwen8.cn/sanwen/love/\" target=\"_blank\">爱</a>恋，\r\n</p>\r\n<p style=\"text-indent:2em;color:#444444;font-family:\'Microsoft YaHei\', \'Courier New\', Courier;font-size:14px;background-color:#FFFFFF;\">\r\n	用心、用情、用力，<a href=\"http://zuowen.sanwen.net/z/10671-gandong\" target=\"_blank\">感动</a>也<a href=\"http://www.sanwen.net/sanwen/shanggan/\" target=\"_blank\">感伤</a>。\r\n</p>\r\n<p style=\"text-indent:2em;color:#444444;font-family:\'Microsoft YaHei\', \'Courier New\', Courier;font-size:14px;background-color:#FFFFFF;\">\r\n	我把最炙热的<a href=\"http://www.sanwen.net/rizhi/xinqing/\" target=\"_blank\">心情</a>藏在那里。\r\n</p>\r\n<p style=\"text-indent:2em;color:#444444;font-family:\'Microsoft YaHei\', \'Courier New\', Courier;font-size:14px;background-color:#FFFFFF;\">\r\n	你不懂我，我不怪你。\r\n</p>\r\n<p style=\"text-indent:2em;color:#444444;font-family:\'Microsoft YaHei\', \'Courier New\', Courier;font-size:14px;background-color:#FFFFFF;\">\r\n	每个人都有一行眼泪，\r\n</p>\r\n<p style=\"text-indent:2em;color:#444444;font-family:\'Microsoft YaHei\', \'Courier New\', Courier;font-size:14px;background-color:#FFFFFF;\">\r\n	喝下的冰冷的水，酝酿成的热泪。\r\n</p>\r\n<p style=\"text-indent:2em;color:#444444;font-family:\'Microsoft YaHei\', \'Courier New\', Courier;font-size:14px;background-color:#FFFFFF;\">\r\n	我把最心酸的委屈汇在那里。\r\n</p>\r\n<p style=\"text-indent:2em;color:#444444;font-family:\'Microsoft YaHei\', \'Courier New\', Courier;font-size:14px;background-color:#FFFFFF;\">\r\n	你不懂我，我不怪你。\r\n</p>\r\n<p style=\"text-indent:2em;color:#444444;font-family:\'Microsoft YaHei\', \'Courier New\', Courier;font-size:14px;background-color:#FFFFFF;\">\r\n	每个人都有一段告白，\r\n</p>\r\n<p style=\"text-indent:2em;color:#444444;font-family:\'Microsoft YaHei\', \'Courier New\', Courier;font-size:14px;background-color:#FFFFFF;\">\r\n	忐忑、不安，却饱含真心和勇气。\r\n</p>\r\n<p style=\"text-indent:2em;color:#444444;font-family:\'Microsoft YaHei\', \'Courier New\', Courier;font-size:14px;background-color:#FFFFFF;\">\r\n	我把最<a href=\"http://www.sanwen.net/sanwen/shuqing/\" target=\"_blank\">抒情</a>的<a href=\"http://www.sanwen8.cn/jingdian/\" target=\"_blank\">语言</a>用在那里。\r\n</p>\r\n<p style=\"text-indent:2em;color:#444444;font-family:\'Microsoft YaHei\', \'Courier New\', Courier;font-size:14px;background-color:#FFFFFF;\">\r\n	你不懂我，我不怪你。<a href=\"http://www.sanwen.net/jingdian/weimei/\" target=\"_blank\">唯美</a> \r\n</p>\r\n<p style=\"text-indent:2em;color:#444444;font-family:\'Microsoft YaHei\', \'Courier New\', Courier;font-size:14px;background-color:#FFFFFF;\">\r\n	你<a href=\"http://yongheng.sanwen8.cn/\" target=\"_blank\">永远</a>也看不见我最爱你的时候，\r\n</p>\r\n<p style=\"text-indent:2em;color:#444444;font-family:\'Microsoft YaHei\', \'Courier New\', Courier;font-size:14px;background-color:#FFFFFF;\">\r\n	因为我只有在看不见你的时候，才最爱你。\r\n</p>\r\n<p style=\"text-indent:2em;color:#444444;font-family:\'Microsoft YaHei\', \'Courier New\', Courier;font-size:14px;background-color:#FFFFFF;\">\r\n	同样，\r\n</p>\r\n<p style=\"text-indent:2em;color:#444444;font-family:\'Microsoft YaHei\', \'Courier New\', Courier;font-size:14px;background-color:#FFFFFF;\">\r\n	你永远也看不见我最<a href=\"http://jimo.sanwen8.cn/\" target=\"_blank\">寂寞</a>的时候，\r\n</p>\r\n<p style=\"text-indent:2em;color:#444444;font-family:\'Microsoft YaHei\', \'Courier New\', Courier;font-size:14px;background-color:#FFFFFF;\">\r\n	因为我只有在你看不见我的时候，我才最寂寞。\r\n</p>\r\n<p style=\"text-indent:2em;color:#444444;font-family:\'Microsoft YaHei\', \'Courier New\', Courier;font-size:14px;background-color:#FFFFFF;\">\r\n	也许，我太会隐藏自己的<a href=\"http://www.sanwen.net/sanwen/shanggan/\" target=\"_blank\">悲伤</a>。\r\n</p>\r\n<p style=\"text-indent:2em;color:#444444;font-family:\'Microsoft YaHei\', \'Courier New\', Courier;font-size:14px;background-color:#FFFFFF;\">\r\n	也许，我太会安慰自己的<a href=\"http://youshang.sanwen8.cn/\" target=\"_blank\">伤痕</a>。\r\n</p>\r\n<p style=\"text-indent:2em;color:#444444;font-family:\'Microsoft YaHei\', \'Courier New\', Courier;font-size:14px;background-color:#FFFFFF;\">\r\n	也许，你眼中的我，太会照顾自己，\r\n</p>\r\n<p style=\"text-indent:2em;color:#444444;font-family:\'Microsoft YaHei\', \'Courier New\', Courier;font-size:14px;background-color:#FFFFFF;\">\r\n	所以，你从不考虑我的感受。\r\n</p>\r\n<p style=\"text-indent:2em;color:#444444;font-family:\'Microsoft YaHei\', \'Courier New\', Courier;font-size:14px;background-color:#FFFFFF;\">\r\n	你以为，我可以很迅速的恢复过来，有些自私的以为。\r\n</p>\r\n<p style=\"text-indent:2em;color:#444444;font-family:\'Microsoft YaHei\', \'Courier New\', Courier;font-size:14px;background-color:#FFFFFF;\">\r\n	从阴<a href=\"http://www.sanwen.net/sanwen/yu/\" target=\"_blank\">雨</a>走到艳阳，我路过泥泞、路过风。\r\n</p>\r\n<p style=\"text-indent:2em;color:#444444;font-family:\'Microsoft YaHei\', \'Courier New\', Courier;font-size:14px;background-color:#FFFFFF;\">\r\n	一路走来，你不曾懂我，我亦不曾怪你。\r\n</p>\r\n<p style=\"text-indent:2em;color:#444444;font-family:\'Microsoft YaHei\', \'Courier New\', Courier;font-size:14px;background-color:#FFFFFF;\">\r\n	我不是为了显示自己的大度，\r\n</p>\r\n<p style=\"text-indent:2em;color:#444444;font-family:\'Microsoft YaHei\', \'Courier New\', Courier;font-size:14px;background-color:#FFFFFF;\">\r\n	也不是为了体现自己的大方。\r\n</p>\r\n<p style=\"text-indent:2em;color:#444444;font-family:\'Microsoft YaHei\', \'Courier New\', Courier;font-size:14px;background-color:#FFFFFF;\">\r\n	只想让你知道，<a href=\"http://www.sanwen.net/sanwen/xinqing/\" target=\"_blank\">感情</a>不在，责备也不存在\r\n</p>\r\n<p style=\"text-align:center;text-indent:2em;color:#444444;font-family:\'Microsoft YaHei\', \'Courier New\', Courier;font-size:14px;background-color:#FFFFFF;\">\r\n	<img src=\"/Test/ohana-php/Public/editor/attached/image/20150222/20150222215014_22351.jpg\" alt=\"\" width=\"500\" height=\"281\" title=\"\" align=\"\" /> \r\n</p>', '', '1424613028', '30', '47');

-- ----------------------------
-- Table structure for `ohana_category`
-- ----------------------------
DROP TABLE IF EXISTS `ohana_category`;
CREATE TABLE `ohana_category` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `pid` int(11) unsigned NOT NULL DEFAULT '0',
  `sort_id` int(11) unsigned NOT NULL DEFAULT '0',
  `cre_time` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ohana_category
-- ----------------------------
INSERT INTO `ohana_category` VALUES ('47', '美文欣赏', '0', '1', '1420529701');
INSERT INTO `ohana_category` VALUES ('48', '程序人生', '0', '2', '1420529714');
INSERT INTO `ohana_category` VALUES ('49', '慢生活', '0', '3', '1420529724');
INSERT INTO `ohana_category` VALUES ('50', '蜗牛', '49', '1', '1420529751');
INSERT INTO `ohana_category` VALUES ('51', '逝', '49', '2', '1420529956');
INSERT INTO `ohana_category` VALUES ('52', '圆月', '49', '3', '1420529965');
INSERT INTO `ohana_category` VALUES ('53', '再别康桥', '47', '1', '1420613759');
INSERT INTO `ohana_category` VALUES ('54', '逝下测试', '51', '1', '1420618214');
INSERT INTO `ohana_category` VALUES ('55', '一个人的旅行', '49', '4', '1420622635');
INSERT INTO `ohana_category` VALUES ('56', '你不懂我，我不怪你', '47', '2', '1424612833');

-- ----------------------------
-- Table structure for `ohana_guestmessages`
-- ----------------------------
DROP TABLE IF EXISTS `ohana_guestmessages`;
CREATE TABLE `ohana_guestmessages` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `guests` varchar(128) NOT NULL,
  `messages` text NOT NULL,
  `post_time` int(11) DEFAULT NULL,
  `guest_img` varchar(128) NOT NULL DEFAULT '<img src="__PUBLIC__/Home-images/guests.jpg" width="50px" height="50px">',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ohana_guestmessages
-- ----------------------------
INSERT INTO `ohana_guestmessages` VALUES ('5', 'test', 'hello', '1420867083', '<img src=\"__PUBLIC__/Home-images/guests.jpg\" width=\"50px\" height=\"50px\">');

-- ----------------------------
-- Table structure for `ohana_replay`
-- ----------------------------
DROP TABLE IF EXISTS `ohana_replay`;
CREATE TABLE `ohana_replay` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user` int(11) unsigned NOT NULL,
  `replay` text NOT NULL,
  `replay_time` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `user_img` char(128) NOT NULL DEFAULT '<img src="__PUBLIC__/Home-images/user.jpg" width="50px" height="50px">',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ohana_replay
-- ----------------------------

-- ----------------------------
-- Table structure for `ohana_site`
-- ----------------------------
DROP TABLE IF EXISTS `ohana_site`;
CREATE TABLE `ohana_site` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `logo` varchar(256) DEFAULT '''''',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ohana_site
-- ----------------------------
INSERT INTO `ohana_site` VALUES ('1', 'Phlen Blog 23', '6321407582374.png');

-- ----------------------------
-- Table structure for `ohana_user`
-- ----------------------------
DROP TABLE IF EXISTS `ohana_user`;
CREATE TABLE `ohana_user` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `password` varchar(64) NOT NULL,
  `email` varchar(128) DEFAULT NULL,
  `super_admin` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique_name` (`name`) USING HASH
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ohana_user
-- ----------------------------
INSERT INTO `ohana_user` VALUES ('30', '莫俊文', 'd19fa37e523a1bcde2c2f555c9a50928', '565@qq.com', '0');
