-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2016-04-05 17:19:32
-- 服务器版本： 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `firerain`
--

-- --------------------------------------------------------

--
-- 表的结构 `soothion_admins`
--

CREATE TABLE IF NOT EXISTS `soothion_admins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` char(20) NOT NULL,
  `password` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=48 ;

--
-- 转存表中的数据 `soothion_admins`
--

INSERT INTO `soothion_admins` (`id`, `username`, `password`) VALUES
(1, 'soothion', '8a5f1b8a54db96cec95bf3e67c7ae6f5');

-- --------------------------------------------------------

--
-- 表的结构 `soothion_blog`
--

CREATE TABLE IF NOT EXISTS `soothion_blog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cid` int(11) NOT NULL,
  `alias` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `sort` int(11) NOT NULL,
  `recommend` int(11) NOT NULL,
  `thumb` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `addtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `soothion_blog`
--

INSERT INTO `soothion_blog` (`id`, `cid`, `alias`, `title`, `sort`, `recommend`, `thumb`, `content`, `addtime`) VALUES
(1, 1, 'jkda', '特殊客户注意事项', 0, 0, '', '<p><br/></p><table cellspacing="0" cellpadding="0" width="926"><tbody><tr style="height: 72px" class="firstRow"><td colspan="2" valign="middle" style="border-width: 1px; border-color: windowtext; padding: 0px 7px; background: transparent;" width="926"><p style="text-align: center"><span style="font-size: 15px;font-family: _65b9_6b63_6b63_7ea4_9ed1_7b80_4f53;color: rgb(0, 176, 240);font-weight: bold">特殊客户</span><span style="font-size: 15px;font-family: _65b9_6b63_6b63_7ea4_9ed1_7b80_4f53;color: rgb(0, 176, 240);font-weight: bold">注意</span><span style="font-size: 15px;font-family: _65b9_6b63_6b63_7ea4_9ed1_7b80_4f53;color: rgb(0, 176, 240);font-weight: bold">事项</span></p></td></tr><tr style="height: 72px"><td valign="middle" style="border-width: 1px; border-color: windowtext; padding: 0px 7px; background: transparent;" width="147"><p><span style="font-size: 13px;font-family: _65b9_6b63_6b63_7ea4_9ed1_7b80_4f53">女性客户</span></p></td><td valign="middle" style="border-left-style: none; border-top-color: windowtext; border-top-width: 1px; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px; background: transparent;" width="779"><p><span style="font-size: 13px;font-family: _65b9_6b63_6b63_7ea4_9ed1_7b80_4f53">方案中因为燃脂会影响激素水平，因此造成月经推迟或延后，绝经期妇女还会出现少量斑点，方案结束会均会恢复正常。请采用物理避孕方式，此外月经保水期会影响体重变化不明显，保水期结束就会体现减重效果。</span></p></td></tr><tr style="height: 72px"><td valign="middle" style="border-width: 1px; border-color: windowtext; padding: 0px 7px; background: transparent;" width="147"><p><span style="font-size: 13px;font-family: _65b9_6b63_6b63_7ea4_9ed1_7b80_4f53">高血压客户</span></p></td><td valign="middle" style="border-left-style: none; border-top-color: windowtext; border-top-width: 1px; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px; background: transparent;" width="779"><p><span style="font-size: 13px;font-family: _65b9_6b63_6b63_7ea4_9ed1_7b80_4f53">方案对高血压会有明显改善。需要事项：<br/>1）每天晨起喝一杯淡盐水；如果前三天出现头痛的时候，也可饮用；<br/>2）每天早中晚各测一次血压，并进行记录；<br/>3）经我们鉴别可以服用的高血压药物，需要继续照常服用；<br/>4）如果血压下降过快，请及时找医生调整用药</span><span style="font-size: 13px;font-family: _65b9_6b63_6b63_7ea4_9ed1_7b80_4f53">。</span></p></td></tr><tr style="height: 72px"><td valign="middle" style="border-width: 1px; border-color: windowtext; padding: 0px 7px; background: transparent;" width="147"><p><span style="font-size: 13px;font-family: _65b9_6b63_6b63_7ea4_9ed1_7b80_4f53">糖尿病客户</span></p></td><td valign="middle" style="border-left-style: none; border-top-color: windowtext; border-top-width: 1px; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px; background: transparent;" width="779"><p><span style="font-size: 13px;font-family: _65b9_6b63_6b63_7ea4_9ed1_7b80_4f53">方案对II型糖尿病会有明显改善。注意事项：<br/>1）每天晨起喝一杯淡盐水；<br/>2）每天空腹、三餐后各测一次血压，并进行记录；<br/>3）经我们鉴别可以服用的糖尿病药物，需要继续照常服用；<br/>4）如果血糖下降过快，请及时找医生调整用药；（I型糖尿病病人必须按医生要求准时注射胰岛素，必须只能使用替代方案）<br/>5）早上勿空腹、独自晨练，随身携带限制类无象源食物，如发生低血糖，马上补充。</span></p></td></tr><tr style="height: 72px"><td valign="middle" style="border-width: 1px; border-color: windowtext; padding: 0px 7px; background: transparent;" width="147"><p><span style="font-size: 13px;font-family: _65b9_6b63_6b63_7ea4_9ed1_7b80_4f53">高尿酸或痛风客</span><span style="font-size: 13px;font-family: _65b9_6b63_6b63_7ea4_9ed1_7b80_4f53">户</span></p></td><td valign="middle" style="border-left-style: none; border-top-color: windowtext; border-top-width: 1px; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px; background: transparent;" width="779"><p><span style="font-size: 13px;font-family: _65b9_6b63_6b63_7ea4_9ed1_7b80_4f53">方案中，您的尿酸水平可能会出现变化，有可能会出现痛风发作或原有痛风加重的情况，但执行方案对改善有益。注意事项：<br/>1）每天晨起喝一杯淡盐水；每天喝水3000毫升；<br/>2）每天小苏打片三次，每次2片，如有类似药物则勿需服用；<br/>3）之前在服用药物则继续服用，如果没有，则需向医生备一些痛风发作时的药物；<br/>4）尽可能选择蛋类、牛羊肉等嘌呤稍低的肉类；少选择海鲜、豆腐</span><span style="font-size: 13px;font-family: _65b9_6b63_6b63_7ea4_9ed1_7b80_4f53">、菇类等。</span></p></td></tr><tr style="height: 72px"><td valign="middle" style="border-width: 1px; border-color: windowtext; padding: 0px 7px; background: transparent;" width="147"><p><span style="font-size: 13px;font-family: _65b9_6b63_6b63_7ea4_9ed1_7b80_4f53">甲状腺功能减退（甲减）客户</span></p></td><td valign="middle" style="border-left-style: none; border-top-color: windowtext; border-top-width: 1px; border-bottom-color: windowtext; border-bottom-width: 1px; border-right-color: windowtext; border-right-width: 1px; padding: 0px 7px; background: transparent;" width="779"><p><span style="font-size: 13px;font-family: _65b9_6b63_6b63_7ea4_9ed1_7b80_4f53">1）甲</span><span style="font-size: 13px;font-family: _65b9_6b63_6b63_7ea4_9ed1_7b80_4f53">减客户本身代谢较低，因此，其效果和后期维持相对正常人来说会差一些；</span></p><p><span style="font-size: 13px;font-family: _65b9_6b63_6b63_7ea4_9ed1_7b80_4f53">2）</span><span style="font-size: 13px;font-family: _65b9_6b63_6b63_7ea4_9ed1_7b80_4f53">如服用药物优甲乐，需晨起空腹服用优甲乐，早餐应服的无象源营养素移到中午再吃；</span></p><span style="font-size: 13px;font-family: _65b9_6b63_6b63_7ea4_9ed1_7b80_4f53"><br/></span></td></tr></tbody></table><p><br/></p>', '2016-04-02 16:58:24');

-- --------------------------------------------------------

--
-- 表的结构 `soothion_category`
--

CREATE TABLE IF NOT EXISTS `soothion_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `sort` int(11) NOT NULL,
  `display` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `soothion_category`
--

INSERT INTO `soothion_category` (`id`, `title`, `sort`, `display`) VALUES
(1, '方案前', 0, 1),
(2, '方案中', 0, 1),
(3, '方案后', 0, 1);

-- --------------------------------------------------------

--
-- 表的结构 `soothion_config`
--

CREATE TABLE IF NOT EXISTS `soothion_config` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) CHARACTER SET utf8 NOT NULL,
  `keyword` varchar(100) CHARACTER SET utf8 NOT NULL,
  `des` varchar(250) CHARACTER SET utf8 NOT NULL,
  `tag` varchar(250) CHARACTER SET utf8 NOT NULL,
  `copyright` varchar(50) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `soothion_config`
--

INSERT INTO `soothion_config` (`id`, `title`, `keyword`, `des`, `tag`, `copyright`) VALUES
(1, '无象源', '无象源', '无象源', '', 'COPYRIGHT@无象源. \r\n粤ICP备14087625号');

-- --------------------------------------------------------

--
-- 表的结构 `soothion_users`
--

CREATE TABLE IF NOT EXISTS `soothion_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` char(20) NOT NULL,
  `password` varchar(40) NOT NULL,
  `wechat` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `soothion_users`
--

INSERT INTO `soothion_users` (`id`, `username`, `password`, `wechat`) VALUES
(1, 'soothion', '8a5f1b8a54db96cec95bf3e67c7ae6f5', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
