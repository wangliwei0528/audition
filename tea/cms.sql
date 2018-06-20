-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2018-06-20 06:01:28
-- 服务器版本： 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- 表的结构 `admin`
--

CREATE TABLE `admin` (
  `aid` int(10) NOT NULL,
  `aname` varchar(50) NOT NULL,
  `apass` varchar(50) NOT NULL,
  `aphone` varchar(20) NOT NULL,
  `anicheng` varchar(30) DEFAULT NULL,
  `aphoto` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `admin`
--

INSERT INTO `admin` (`aid`, `aname`, `apass`, `aphone`, `anicheng`, `aphoto`) VALUES
(1, 'zhangsan12', '111111', '222333', 'zhangsan', 'abc/17-10-09/150753561350922.jpg'),
(2, 'lisi', '123456', '0', 'lisi', 'abc/17-10-15/150807833886335.jpg'),
(5, 'sss', '1', '0', '', 'abc/17-10-09/150753534860751.jpg'),
(21, 'demo123', '111111', '', NULL, NULL),
(19, 'ddd', '111', '111', NULL, NULL),
(20, 'fff', '111', '111', NULL, NULL);

-- --------------------------------------------------------

--
-- 表的结构 `cart`
--

CREATE TABLE `cart` (
  `cid` int(50) NOT NULL,
  `cname` varchar(20) DEFAULT NULL,
  `cprice` varchar(20) DEFAULT NULL,
  `cphoto` varchar(50) DEFAULT NULL,
  `amount` varchar(50) DEFAULT NULL,
  `uid` int(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `cart`
--

INSERT INTO `cart` (`cid`, `cname`, `cprice`, `cphoto`, `amount`, `uid`) VALUES
(31, '公道杯', '199.00', 'abc/18-05-21/1526892467454bea1.jpg', '1', 12),
(4, '公道杯', '199', 'abc/17-10-16/15081478207607cup1.jpg', '', 1),
(15, '公道杯', '199.00', 'abc/18-05-21/1526892467454bea1.jpg', '', 11),
(33, '公道杯', '199.00', 'abc/18-05-21/1526892467454bea1.jpg', '1', 14),
(29, '正安白茶', '500.00', 'abc/18-05-28/15275471302948zhenganbaicha.jpg', '1', 4),
(28, '洞庭山.碧螺春', '700.00', 'abc/18-05-28/15275470308164biluochun.jpg', '1', 4),
(34, '老铁壶', '19999.00', 'abc/18-05-28/15275187505858laotiehu.jpg', '1', 14),
(35, '洞庭山.碧螺春', '700.00', 'abc/18-05-28/15275470308164biluochun.jpg', '1', 14);

-- --------------------------------------------------------

--
-- 表的结构 `category`
--

CREATE TABLE `category` (
  `cid` int(11) NOT NULL,
  `cname` varchar(50) NOT NULL,
  `cename` varchar(50) NOT NULL,
  `ctitle` varchar(50) NOT NULL,
  `cimg` varchar(50) NOT NULL,
  `pid` int(11) NOT NULL,
  `state` int(20) NOT NULL,
  `isshow` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `category`
--

INSERT INTO `category` (`cid`, `cname`, `cename`, `ctitle`, `cimg`, `pid`, `state`, `isshow`) VALUES
(11, '用茗器', '', '', '', 0, 1, '1'),
(12, '买好茶', '', '', '', 0, 0, '1'),
(13, '支付方式', '', '', '', 0, 0, '1'),
(10, '关于我', '', '', '', 0, 0, '1'),
(27, '轮播', '', '', '', 0, 0, '0'),
(28, '茗器', '', '', '', 0, 0, '0'),
(29, '好茶', '', '', '', 0, 0, '0'),
(31, '茗器', '', '', '', 11, 1, '0'),
(32, '商品详情', '', '', '', 31, 1, '0'),
(33, '相关商品', '', '', '', 32, 0, '0');

-- --------------------------------------------------------

--
-- 表的结构 `message`
--

CREATE TABLE `message` (
  `mid` int(10) NOT NULL,
  `uid1` int(10) NOT NULL COMMENT '留言的人',
  `uid2` int(10) NOT NULL COMMENT '被留言的人',
  `sid` int(10) NOT NULL COMMENT '哪篇文章',
  `mtitle` varchar(50) CHARACTER SET utf8 NOT NULL,
  `mcon` varchar(2000) CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- 表的结构 `ordercon`
--

CREATE TABLE `ordercon` (
  `cid` int(20) NOT NULL,
  `cname` varchar(20) DEFAULT NULL,
  `cprice` varchar(20) DEFAULT NULL,
  `amount` varchar(20) DEFAULT NULL,
  `cphoto` varchar(50) DEFAULT NULL,
  `oid` int(50) DEFAULT NULL,
  `uid` int(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `ordercon`
--

INSERT INTO `ordercon` (`cid`, `cname`, `cprice`, `amount`, `cphoto`, `oid`, `uid`) VALUES
(31, '公道杯', '199.00', '2', 'abc/18-05-21/1526892467454bea1.jpg', 23, 12),
(17, '公道杯', '199.00', '', 'abc/18-05-21/1526892467454bea1.jpg', 23, 4),
(30, '正山小种', '99.00', '1', 'abc/18-05-28/1527547082700zhengshanxiaozhong.jpg', 23, 12),
(24, '香炉', '1599.00', '', 'abc/18-05-28/1527518902262xianglu.jpg', 23, 4),
(33, '公道杯', '199.00', '1', 'abc/18-05-21/1526892467454bea1.jpg', 23, 14),
(34, '老铁壶', '19999.00', '1', 'abc/18-05-28/15275187505858laotiehu.jpg', 23, 14),
(35, '洞庭山.碧螺春', '700.00', '1', 'abc/18-05-28/15275470308164biluochun.jpg', 23, 14);

-- --------------------------------------------------------

--
-- 表的结构 `orders`
--

CREATE TABLE `orders` (
  `oid` int(50) NOT NULL,
  `name` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `postcode` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `order_comments` varchar(100) NOT NULL,
  `uid` int(20) NOT NULL,
  `state` int(20) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `orders`
--

INSERT INTO `orders` (`oid`, `name`, `address`, `postcode`, `phone`, `order_comments`, `uid`, `state`, `order_date`) VALUES
(24, 'zhangsan', '山西省运城市', '044000', '12345678', 'aaa', 12, 1, '2018-05-29 07:57:06'),
(25, '张三', '山西省运城市运城学院', '044000', '17835395947', '无', 14, 1, '2018-06-04 14:55:16');

-- --------------------------------------------------------

--
-- 表的结构 `products`
--

CREATE TABLE `products` (
  `pid` int(50) NOT NULL,
  `pname` varchar(20) NOT NULL,
  `price` varchar(20) NOT NULL,
  `amount` varchar(50) DEFAULT NULL,
  `photo` varchar(50) DEFAULT NULL,
  `cid` int(50) DEFAULT NULL,
  `path` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `products`
--

INSERT INTO `products` (`pid`, `pname`, `price`, `amount`, `photo`, `cid`, `path`) VALUES
(1, '公道杯', '200.00', '', 'abc/18-06-04/15281244238322cup1.jpg', 1, 'gongdaobei.php'),
(6, '老铁壶', '19999.00', NULL, 'abc/18-05-28/15275187505858laotiehu.jpg', 1, 'laotiehu.php'),
(5, '紫砂壶', '500.00', NULL, 'abc/18-05-28/15275186608753zishahu.jpg', 1, 'zishahu.php'),
(7, '天目盏', '300.00', NULL, 'abc/18-05-28/15275187979042tianmuzhan.jpg', 1, 'tianmuzhan.php'),
(8, '柴烧花器', '500.00', '', 'abc/18-05-28/15275191088067chaishaohuaqi.jpg', 1, 'huaqi.php'),
(9, '香炉', '1599.00', NULL, 'abc/18-05-28/1527518902262xianglu.jpg', 1, 'xianglu.php'),
(10, '茶承', '300.00', NULL, 'abc/18-05-28/1527518963100chacheng.jpg', 1, 'chacheng.php'),
(11, '茶洗', '300.00', '', 'abc/18-05-28/1527519288890chaxi.jpg', 1, 'chaxi.php'),
(12, '洞庭山.碧螺春', '700.00', NULL, 'abc/18-05-28/15275470308164biluochun.jpg', 2, 'biluochun.php'),
(13, '正山小种', '99.00', NULL, 'abc/18-05-28/1527547082700zhengshanxiaozhong.jpg', 2, 'zhengshanxiaozhong.php'),
(14, '正安白茶', '500.00', NULL, 'abc/18-05-28/15275471302948zhenganbaicha.jpg', 2, 'zhenganbaicha.php'),
(15, '铁观音', '555.00', NULL, 'abc/18-05-28/1527547175713tieguanyin.jpg', 2, 'tieguanyin.php'),
(16, '凤凰单枞', '599.00', NULL, 'abc/18-05-28/15275472414325fenghuang.jpg', 2, 'fenghuang.php'),
(17, '西湖龙井', '600.00', NULL, 'abc/18-05-28/15275473141780xihulongjin.jpg', 2, 'longjing.php'),
(18, '祁门红茶', '499.00', NULL, 'abc/18-05-28/15275473557617qimenhongcha.jpg', 2, 'qimenhongcha.php'),
(19, '六安瓜片', '555.00', NULL, 'abc/18-05-28/15275473999484liuanguapian.jpg', 2, 'luanguapian.php');

-- --------------------------------------------------------

--
-- 表的结构 `shows`
--

CREATE TABLE `shows` (
  `sid` int(20) NOT NULL,
  `stitle` varchar(50) NOT NULL,
  `sprice` varchar(20) NOT NULL,
  `scon` varchar(50) NOT NULL,
  `simg` varchar(50) NOT NULL,
  `cid` int(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `shows`
--

INSERT INTO `shows` (`sid`, `stitle`, `sprice`, `scon`, `simg`, `cid`) VALUES
(75, '紫砂壶', '￥500.00', '', 'abc/17-10-16/15081478207607cup1.jpg', 33),
(22, '', '', '', 'abc/17-10-15/15080863081658banner3.jpg', 27),
(21, '', '', '', 'abc/17-10-15/15080862782160banner2.jpg', 27),
(23, '', '', '', 'abc/17-10-15/15080863273577banner4.jpg', 27),
(24, '', '', '', 'abc/17-10-15/15080863456804banner5.jpg', 27),
(25, '', '', '', 'abc/17-10-15/150808635767banner6.jpg', 27),
(51, '公道杯', '￥199.00', '', 'abc/17-10-16/15081441147521bea1.jpg', 28),
(52, '公道杯', '￥199.00', '', 'abc/17-10-16/15081449292263bea1.jpg', 28),
(62, '乌龙茶', '￥700.00', '', 'abc/17-10-16/15081455787704jia1.jpg', 29),
(61, '乌龙茶', '￥700.00', '', 'abc/17-10-16/150814553885jia1.jpg', 29),
(60, '乌龙茶', '￥700.00', '', 'abc/17-10-16/1508145519527jia1.jpg', 29),
(59, '乌龙茶', '￥700.00', '', 'abc/17-10-16/15081454938095jia1.jpg', 29),
(53, '公道杯', '￥199.00', '', 'abc/17-10-16/15081452414364bea1.jpg', 28),
(54, '公道杯', '￥199.00', '', 'abc/17-10-16/15081452905961bea1.jpg', 28),
(55, '公道杯', '￥199.00', '', 'abc/17-10-16/15081453097738bea1.jpg', 28),
(56, '公道杯', '￥199.00', '', 'abc/17-10-16/15081453343483bea1.jpg', 28),
(57, '公道杯', '￥199.00', '', 'abc/17-10-16/15081453514062bea1.jpg', 28),
(58, '公道杯', '￥199.00', '', 'abc/17-10-16/15081453802119bea1.jpg', 28),
(63, '乌龙茶', '￥700.00', '', 'abc/17-10-16/15081455984427jia1.jpg', 29),
(64, '乌龙茶', '￥700.00', '', 'abc/17-10-16/15081456619407jia1.jpg', 29),
(65, '乌龙茶', '￥700.00', '', 'abc/17-10-16/15081456818142jia1.jpg', 29),
(66, '乌龙茶', '￥700.00', '', 'abc/17-10-16/15081457043962jia1.jpg', 29),
(67, '公道杯', '￥199.00', '', 'abc/17-10-16/15081465141250bea1.jpg', 31),
(68, '公道杯', '￥199.00', '', 'abc/17-10-16/15081465442034bea1.jpg', 31),
(69, '公道杯', '￥199.00', '', 'abc/17-10-16/15081465917938bea1.jpg', 31),
(70, '公道杯', '￥199.00', '', 'abc/17-10-16/15081466104274bea1.jpg', 31),
(71, '公道杯', '￥199.00', '', 'abc/17-10-16/15081466296115bea1.jpg', 31),
(72, '公道杯', '￥199.00', '', 'abc/17-10-16/15081466467691bea1.jpg', 31),
(73, '公道杯', '￥199.00', '', 'abc/17-10-16/15081466718268bea1.jpg', 31),
(74, '公道杯', '￥199.00', '', 'abc/17-10-16/15081466922728bea1.jpg', 31),
(76, '紫砂壶', '￥500.00', '', 'abc/17-10-16/15081478796581cup1.jpg', 33),
(77, '紫砂壶', '￥500.00', '', 'abc/17-10-16/15081479024013cup1.jpg', 33),
(78, '紫砂壶', '￥500.00', '', 'abc/17-10-16/15081479279163cup1.jpg', 33);

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE `user` (
  `uid` int(20) NOT NULL,
  `uname` varchar(20) CHARACTER SET utf8 NOT NULL,
  `upass` varchar(20) CHARACTER SET utf8 NOT NULL,
  `uphone` varchar(20) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`uid`, `uname`, `upass`, `uphone`) VALUES
(1, 'lisi', '111111', '123456'),
(14, 'demo123', '111111', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`uid1`);

--
-- Indexes for table `ordercon`
--
ALTER TABLE `ordercon`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`oid`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `shows`
--
ALTER TABLE `shows`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `admin`
--
ALTER TABLE `admin`
  MODIFY `aid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- 使用表AUTO_INCREMENT `cart`
--
ALTER TABLE `cart`
  MODIFY `cid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- 使用表AUTO_INCREMENT `category`
--
ALTER TABLE `category`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- 使用表AUTO_INCREMENT `message`
--
ALTER TABLE `message`
  MODIFY `uid1` int(10) NOT NULL AUTO_INCREMENT COMMENT '留言的人';
--
-- 使用表AUTO_INCREMENT `ordercon`
--
ALTER TABLE `ordercon`
  MODIFY `cid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- 使用表AUTO_INCREMENT `orders`
--
ALTER TABLE `orders`
  MODIFY `oid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- 使用表AUTO_INCREMENT `products`
--
ALTER TABLE `products`
  MODIFY `pid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- 使用表AUTO_INCREMENT `shows`
--
ALTER TABLE `shows`
  MODIFY `sid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;
--
-- 使用表AUTO_INCREMENT `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
